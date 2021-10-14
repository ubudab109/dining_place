<?php

namespace App\Http\Controllers;

use App\CentralLogics\Helpers;
use App\Models\BusinessSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Grimzy\LaravelMysqlSpatial\Types\Point;
use App\Models\Zone;
use App\Models\Vendor;
use App\Models\Restaurant;
use App\Models\Subscription;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Socialite;
use Alert;
use App\Models\RestaurantCategories;
use App\Models\SubscriptionPayment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /*$this->middleware('auth');*/
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $subscriptions = Subscription::all();
        return view('home', compact('subscriptions'));
    }

    public function terms_and_conditions()
    {
        $data = self::get_settings('terms_and_conditions');
        return view('terms-and-conditions',compact('data'));
    }

    public function about_us()
    {
        $data = self::get_settings('about_us');
        return view('about-us',compact('data'));
    }

    public function contact_us()
    {
        return view('contact-us');
    }

    public function privacy_policy()
    {
        $data = self::get_settings('privacy_policy');
        return view('privacy-policy',compact('data'));
    }

    public function subcription()
    {
        return view('subcription');
    }
    
    public function subcriptionRegFree($id)
    {
        $subscription = Subscription::find($id);
        return view('subcription-reg-free', compact('subscription'));
    }

    public function facebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookCallback()
    {   
        DB::beginTransaction();
        try {
            $vendor = Socialite::driver('facebook')->stateless()->user();
 
            /// lakukan pengecekan apakah facebook id nya sudah ada apa belum
            $isUser = Vendor::where('facebook_id', $vendor->id)->first();

            if ($isUser) {
                Auth::login($isUser);
                return redirect()->route('vendor.dashboard');
            } else {
                $createUser = new Vendor;
                $createUser->f_name = $vendor->getName();
                if ($vendor->getEmail() != null) {
                    $createUser->email = $vendor->getEmail();
                    $createUser->phone = '0';
                }
                $createUser->facebook_id = $vendor->getId();
                $rand = rand(111111,999999);
                $createUser->password = Hash::make($vendor->getName().$rand);
                $createUser->save();
                Auth::login($createUser);
                return redirect()->route('vendor.dashboard');
            }
            DB::commit();
        } catch (\Exception $err) {
            DB::rollBack();
            Alert::error('Error', $err->getMessage());
            return redirect()->back();
        }
    }

    public function postSubcriptionRegFree(Request $request)
    {
        $vendorData = [
            'f_name'    => $request->f_name,
            'l_name'    => $request->l_name,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'password'  => bcrypt($request->password)
        ];
        $vendor = Vendor::create($vendorData);

        $restaurantData = [
            'name'              => $request->restaurant_name,
            'slug'              => Str::slug($request->restaurant_name),
            'phone'             => $request->phone,
            'email'             => $request->email,
            'logo'              => Helpers::upload('restaurant/', 'png', $request->file('logo')),
            'cover_photo'       => Helpers::upload('restaurant/cover/', 'png', $request->file('cover_photo')),
            'address'           => $request->address,
            'latitude'          => $request->latitude,
            'longitude'         => $request->longitude,
            'vendor_id'         => $vendor->id,
            'zone_id'           => $request->zone_id,
            'tax'               => $request->tax,
            'subscription_id'   => $request->subsId,
            'type'              => $request->type,
        ];

        $restaurant = Restaurant::create($restaurantData);
        foreach ($request->input('categories') as $val) {
            $data = [
                'restaurant_id' => $restaurant->id,
                'type_id'       => (int)$val
            ];
            RestaurantCategories::create($data);
        }

        $dataSubsPayment = [
            'external_id'       => $request->externalId, //
            'subs_id'           => $request->subsId,
            'status'            => $request->status, //
            'payment_type'      => 'Xendit',
            'price'             => $request->price,
            'restaurant_id'     => $restaurant->id,
            'vendor_id'         => $vendor->id,
        ];

        SubscriptionPayment::create($dataSubsPayment);
        Alert::success('Success', 'Register Success');

        return redirect('/');
    }

    public static function get_settings($name)
    {
        $config = null;
        $data = BusinessSetting::where(['key' => $name])->first();
        if (isset($data)) {
            $config = json_decode($data['value'], true);
            if (is_null($config)) {
                $config = $data['value'];
            }
        }
        return $config;
    }
}
