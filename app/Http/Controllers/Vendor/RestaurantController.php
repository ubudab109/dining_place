<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\CentralLogics\Helpers;
use App\Models\RestaurantDocument;
use App\Models\RestaurantInfo;
use App\Models\Vendor;

class RestaurantController extends Controller
{
    public function view()
    {
        $shop = Helpers::get_restaurant_data();
        return view('vendor-views.shop.shopInfo', compact('shop'));
    }

    public function edit()
    {
        $shop =  Helpers::get_restaurant_data();
        $document = RestaurantDocument::where('restaurant_id', Helpers::get_restaurant_id())->first();
        $info = RestaurantInfo::where('restaurant_id', Helpers::get_restaurant_id())->first();
        $vendor = Vendor::find(Helpers::get_vendor_id());
        return view('vendor-views.shop.edit', compact('shop', 'document','info','vendor'));
    }

    public function update(Request $request, $id)
    {

        $shop = Restaurant::find($id);
        $shop->name = $request->name;
        $shop->phone = $request->contact;
        $shop->slug = $request->slug;
        
        $shop->logo = $request->has('image') ? Helpers::update('restaurant/', $shop->image, 'png', $request->file('image')) : $shop->logo;
        
        $shop->cover_photo = $request->has('photo') ? Helpers::update('restaurant/cover/', $shop->cover_photo, 'png', $request->file('photo')) : $shop->cover_photo;
        
        $shop->save();

        Toastr::info(trans('messages.restaurant_data_updated'));
        return redirect()->route('vendor.shop.view');
    }

    public function updateAddress(Request $request, $id)
    {
        $request->validate([
            'street'        => 'required',
            'street2'       => 'nullable',
            'city'          => 'required',
            'postal_code'   => 'required|numeric',
            'country'       => 'required',
            'state'         => 'required'
        ]);

        $shop = Restaurant::find($id);
        $shop->address = $request->street.', '.$request->street2.', '.$request->city.', '.$request->postal_code.', '.$request->country.', '.$request->state;
        $shop->save();
        Toastr::info(trans('messages.restaurant_data_updated'));
        return redirect()->route('vendor.shop.view');
    }

    public function updateDocument(Request $request, $id)
    {
        $request->validate([
            'vendor_document'   => 'nullable|mimes:jpeg,jpg,png,pdf|max:2048',
            'vendor_npwp'       => 'nullable|mimes:jpeg,jpg,png,pdf|max:2048',
            'restaurant_npwp'   => 'nullable|mimes:jpeg,jpg,png,pdf|max:2048',
            'restaurant_siup'   => 'nullable|mimes:jpeg,jpg,png,pdf|max:2048',
            'restaurant_td'     => 'nullable|mimes:jpeg,jpg,png,pdf|max:2048'
        ]);
        $restaurant = RestaurantDocument::where('restaurant_id', $id)->exists();

        $document = Restaurant::find($id);
        if ($restaurant) {
            $data = [
                'vendor_document'       => $request->has('vendor_document') ? Helpers::update('restaurant/vendor-doc/', $request->vendor_document, 'png', $request->file('vendor_document')) : $document->document->vendor_document,
                'vendor_npwp'           => $request->has('vendor_npwp') ? Helpers::update('restaurant/vendor-npwp/', $request->vendor_npwp, 'png', $request->file('vendor_npwp')) : $document->document->vendor_npwp,
                'restaurant_npwp'       =>  $request->has('restaurant_npwp') ? Helpers::update('restaurant/restaurant-npwp/', $request->restaurant_npwp, 'png', $request->file('restaurant_npwp')) : $document->document->restaurant_npwp,
                'restaurant_siup'       => $request->has('restaurant_siup') ? Helpers::update('restaurant/restaurant-siup/', $request->restaurant_siup, 'png', $request->file('restaurant_siup')) : $document->document->restaurant_siup,
                'restaurant_td'         =>  $request->has('restaurant_td') ? Helpers::update('restaurant/restaurant-td/', $request->restaurant_td, 'png', $request->file('restaurant_td')) : $document->document->restaurant_td,
            ];
            $document->document()->update($data);
        } else {
            $data = [
                'vendor_document'       => Helpers::upload('restaurant/vendor-doc/', 'png', $request->file('vendor_document')),
                'vendor_npwp'           => Helpers::upload('restaurant/vendor-npwp/', 'png', $request->file('vendor_npwp')),
                'restaurant_npwp'       => Helpers::upload('restaurant/restaurant-npwp/', 'png', $request->file('restaurant_npwp')),                          
                'restaurant_siup'       => Helpers::upload('restaurant/restaurant-siup/', 'png', $request->file('restaurant_siup')),
                'restaurant_td'         => Helpers::upload('restaurant/restaurant-td/', 'png', $request->file('restaurant_td')),
            ];
            $document->document()->create($data);
        }

        Toastr::info(trans('messages.restaurant_data_updated'));
        return redirect()->route('vendor.shop.view');
    }

    public function updateInfo(Request $request, $id)
    {
        $info = RestaurantInfo::where('restaurant_id', $id)->exists();
        $restaurant = Restaurant::find($id);

        if ($info) {
            $data = [
                'instagram'     => $request->has('instagram') ? $request->instagram : $restaurant->info->instagram,
                'twitter'       => $request->has('twitter') ? $request->twitter : $restaurant->info->twitter,
                'facebook'      => $request->has('facebook') ? $request->facebook : $restaurant->info->facebook,
                'youtube'       => $request->has('youtube') ? $request->youtube : $restaurant->info->youtube,
                'linkedin'      => $request->has('linkedin') ? $request->linkedin : $restaurant->info->linkedin,
                'google_plus'   => $request->has('google_plus') ? $request->google_plus : $restaurant->info->google_plus,
                'snapchat'      => $request->has('snapchat') ? $request->snapchat : $restaurant->info->snapchat,
                'tiktok'        => $request->has('tiktok') ? $request->tiktok : $restaurant->info->tiktok,
                'pinterest'     => $request->has('pinterest') ? $request->pinterest : $restaurant->info->pinterest
            ];
            $restaurant->info()->update($data);
        } else {
            $data = [
                'instagram'     => $request->instagram,
                'twitter'       => $request->twitter,
                'facebook'      => $request->facebook,
                'youtube'       => $request->youtube,
                'linkedin'      => $request->linkedin,
                'google_plus'   => $request->google_plus,
                'snapchat'      => $request->snapchat,
                'tiktok'        => $request->tiktok,
                'pinterest'     => $request->pinterest
            ];
            $restaurant->info()->create($data);
        }

        Toastr::info(trans('messages.restaurant_data_updated'));
        return redirect()->route('vendor.shop.view');
    }

    public function updateBank(Request $request)
    {
        $vendor = Vendor::find(Helpers::get_vendor_id());
        $vendor->update([
            'bank_name'     => $request->has('bank_name') ? $request->bank_name : $vendor->bank_name,
            'branch'        => $request->has('branch') ? $request->branch : $vendor->branch,
            'holder_name'   => $request->has('holder_name') ? $request->holder_name : $vendor->holder_name,
            'account_no'    => $request->has('account_no') ? $request->account_no : $vendor->account_no,
        ]);

        Toastr::info(trans('messages.restaurant_data_updated'));
        return redirect()->route('vendor.shop.view');

    }

    public function updatePaymenMethod(Request $request, $id)
    {
        Restaurant::find($id)->update([
            'payment_website'   => $request->payment,
        ]);

        Toastr::info(trans('messages.restaurant_data_updated'));

        return redirect()->back();

    }

}
