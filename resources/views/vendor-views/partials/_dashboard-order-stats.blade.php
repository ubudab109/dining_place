<div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
    <!-- Card -->
    <a class="card card-hover-shadow h-100" href="{{route('vendor.order.list',['confirmed'])}}" style="background: #2C2E43">
        <div class="card-body">
            <h6 class="card-subtitle"
                style="color: white!important;">Gross Sales</h6>
            <div class="row align-items-center gx-2 mb-1">
                <div class="col-6">
                    <span class="card-title h2" style="color: white!important;">
                        {{\App\CentralLogics\Helpers::format_currency(array_sum($commission))}}
                    </span>
                </div>
                <div class="col-6 mt-2">
                    <i class="far fa-money-bill-alt" style="font-size: 30px;color: white"></i>
                </div>
            </div>
            <!-- End Row -->
        </div>
    </a>
    <!-- End Card -->
</div>

<div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
    <!-- Card -->
    <a class="card card-hover-shadow h-100" href="{{route('vendor.order.list',['ready_for_delivery'])}}" style="background: #362222">
        <div class="card-body">
            <h6 class="card-subtitle"
                style="color: white!important;">Total Earning</h6>

            <div class="row align-items-center gx-2 mb-1">
                @php($amount=array_sum($earning))
                <div class="col-6">
                        <span class="card-title h2" style="color: white!important;">
                            {{\App\CentralLogics\Helpers::format_currency(array_sum($earning))}}
                        </span>
                </div>

                <div class="col-6 mt-2">
                    <i class="far fa-money-bill-alt" style="font-size: 30px;color: white"></i>
                </div>
            </div>
            <!-- End Row -->
        </div>
    </a>
    <!-- End Card -->
</div>

<div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
    <!-- Card -->
    <a class="card card-hover-shadow h-100" href="{{route('vendor.order.list',['food_on_the_way'])}}" style="background: #053742">
        <div class="card-body">
            <h6 class="card-subtitle"
                style="color: white!important;">Total Sold</h6>

            <div class="row align-items-center gx-2 mb-1">
                <div class="col-6">
                    <span class="card-title h2" style="color: white!important;">
                       {{$totalSell}} Items
                    </span>
                </div>

                <div class="col-6 mt-2">
                    <i class="fas fa-cube" style="font-size: 30px;color: white"></i>
                </div>
            </div>
            <!-- End Row -->
        </div>
    </a>
    <!-- End Card -->
</div>

<div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
    <!-- Card -->
    <a class="card card-hover-shadow h-100" href="{{route('vendor.order.list',['cooking'])}}" style="background: #334257">
        <div class="card-body">
            <h6 class="card-subtitle"
                style="color: white!important;">Total Order</h6>

            <div class="row align-items-center gx-2 mb-1">
                <div class="col-6">
                        <span class="card-title h2" style="color: white!important;">
                            {{$totalOrder}}
                        </span>
                </div>

                <div class="col-6 mt-2">
                    <i class="fas fa-shopping-cart ml-6" style="font-size: 30px;color: white"></i>
                </div>
            </div>
            <!-- End Row -->
        </div>
    </a>
    <!-- End Card -->
</div>




