@extends('admin.layouts.master')
@section('content')
    <!-- BEGIN: Content-->
    <!-- container -->
    <div class="container-fluid">
        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
                <div class="d-flex">
                    <h4 class="content-title mb-0 my-auto">صفحات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                        خالی</span>
                </div>
            </div>
            <div class="d-flex my-xl-auto right-content">
                <div class="pr-1 mb-3 mb-xl-0">
                    <button type="button" class="btn btn-info btn-icon ml-2"><i class="mdi mdi-filter-variant"></i></button>
                </div>
                <div class="pr-1 mb-3 mb-xl-0">
                    <button type="button" class="btn btn-danger btn-icon ml-2"><i class="mdi mdi-star"></i></button>
                </div>
                <div class="pr-1 mb-3 mb-xl-0">
                    <button type="button" class="btn btn-warning  btn-icon ml-2"><i class="mdi mdi-refresh"></i></button>
                </div>
                <div class="mb-3 mb-xl-0">
                    <div class="btn-group dropdown">
                        <button type="button" class="btn btn-primary">20 مهر 1399</button>
                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                            id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">منوی کشویی</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuDate"
                            data-x-placement="bottom-end">
                            <a class="dropdown-item" href="#">1399 </a>
                            <a class="dropdown-item" href="#">1398 </a>
                            <a class="dropdown-item" href="#">1397 </a>
                            <a class="dropdown-item" href="#">1396</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb -->
        <!-- row -->
        <div class="row row-sm">
            <div class="col-md-12 col-lg-12 col-xl-7">
                <div class="card">
                    <div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mb-0">وضعیت سفارش</h4>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                        <p class="tx-12 text-muted mb-0">وضعیت سفارش و پیگیری. سفارش خود را از تاریخ کشتی تا رسیدن پیگیری کنید. برای شروع ، شماره سفارش خود را وارد کنید.</p>
                    </div>
                    <div class="card-body">
                        <div class="total-revenue">
                            <div>
                              <h4>120،750</h4>
                              <label><span class="bg-primary"></span>موفقیت</label>
                            </div>
                            <div>
                              <h4>56،108</h4>
                              <label><span class="bg-danger"></span>در انتظار</label>
                            </div>
                            <div>
                              <h4>32،895</h4>
                              <label><span class="bg-warning"></span>ناموفق</label>
                            </div>
                          </div>
                        <div id="bar" class="sales-bar mt-4"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-5">
                <div class="card card-dashboard-map-one">
                    <label class="main-content-label">درآمد فروش توسط مشتریان در ایالات متحده آمریکا </label>
                    <span class="d-block mg-b-20 text-muted tx-12">عملکرد فروش کلیه ایالت ها در ایالات متحده</span>
                    <div class="">
                        <div class="vmap-wrapper ht-180" id="vmap2"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row closed -->
    </div>
    <!-- Container closed -->
@endsection
