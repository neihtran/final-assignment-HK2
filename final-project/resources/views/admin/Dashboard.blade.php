@extends('admin/Admin')
 @section('title-ad')
    {{ trans('home.home') }} Admin
@endsection
@section('content-ad')

    <!-- Fix SVG/chart font rendering (donut chart text) -->
    <style>
        /* Target SVG text used by chart libraries inside the dashboard */
        #donut-chart svg text,
        #donut-chart svg tspan,
        .chart-pie svg text,
        .chart-pie svg tspan {
            font-family: "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif !important;
            font-weight: 600 !important;
            fill: #2f2f2f !important; /* readable dark color */
            stroke: none !important; /* remove stroked outline that causes ugly blocks */
            paint-order: fill !important;
        }

        /* Ensure inner numbers are sized reasonably */
        #donut-chart svg text tspan,
        #donut-chart svg tspan {
            font-size: 22px !important;
        }
    </style>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ trans('home_ad.dashboard') }}</h1>

    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                               {{ trans('home_ad.number_user') }}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$nd_count}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                {{ trans('home_ad.number_order') }}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$dh_count}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-shopping-cart fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                {{ trans('home_ad.number_type') }}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$loai_count}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-tags fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                {{ trans('home_ad.number_product') }}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$sp_count}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-laptop fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->

                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">{{ trans('home_ad.thongke_dh') }} </h6>

                    <div class="dropdown no-arrow">

                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Dropdown Header:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <form autocomplete="off">
                    @csrf
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <p>{{ trans('home_ad.tungay') }}: <input type="text" id="datepicker" class="from-control"></p>
                        <p>{{ trans('home_ad.denngay') }}: <input type="text" id="datepicker1" class="from-control"></p>

                        <p>{{ trans('home_ad.loctheo') }}:
                            <select class="dashboard-filter" style="height: 30px;">
                                <option style="text-align: center;">-- {{ trans('home_ad.choose') }} --</option>
                                <option value="7ngay">{{ trans('home_ad.7_ngay') }}</option>
                                <option value="thangtruoc">{{ trans('home_ad.thang_trc') }}</option>
                                <option value="thangnay">{{ trans('home_ad.thang_nay') }}</option>
                                <option value="365ngay">{{ trans('home_ad.1nam') }}</option>
                            </select>
                        </p>
                        <p><input style="margin-top: 22px;" type="button" id="btn-dashboard" class="btn btn-primary btn-sm" value="{{ trans('home_ad.lockq') }}"></p>
                </div>
                </form>
                <!-- Card Body -->
                <div class="card-body col-md-12">

                    <div class="chart-area">
                        <!-- <canvas id="myAreaChart"></canvas> -->
                        <div id="chart" style="height: 250px;"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Body -->
                <div class="card-body" style="height: 463px;">
                    <div class="chart-pie pt-4 pb-2">
                        <div id="donut-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-6 mb-4">

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ trans('home_ad.thongke_trc') }}</h6>
                </div>
                <div class="card-body">
                    <table class="table table-bordered"  width="100%" cellspacing="0" style="text-align: center;">
                        <thead >
                            <tr>
                                <th>{{ trans('home_ad.thongke_trc_online') }}</th>
                                <th>{{ trans('home_ad.thongke_trc_thtr') }}</th>
                                <th>{{ trans('home_ad.thongke_trc_thtn') }}</th>
                                <th>{{ trans('home_ad.thongke_trc_1nam') }}</th>
                                <th>{{ trans('home_ad.thongke_trc_tongtrc') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="color: #e74a3b; font-weight: bold;">{{$visitor_count}}</td>
                                <td>{{$tong_thangtruoc_count}}</td>
                                <td>{{$tong_thangnay_count}}</td>
                                <td>{{$tong_motnam_count}}</td>
                                <td>{{$tatca_count}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Approach -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ trans('home_ad.development_approach') }}</h6>
                </div>
                <div class="card-body">
                    <p>{{ trans('home_ad.projects') }} {{ trans('home_ad.development_approach_nd1') }}</p>
                </div>
            </div>

        </div>
    </div>

@endsection

