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
            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header tx-medium bd-0 tx-white bg-info">
                      عنوتن  {{-- {{$title}} --}}
                    </div>
                    <div class="card-body ">
                        <form>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">عنوان دوره</label>
                                    <input type="text" class="form-control" name="name" value="{{old('name',$course->name)}}" id="name" placeholder="عنوان دوره را وارد نمایید">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="slug"> لینک اختصاصی دوره</label>
                                    <input type="text" class="form-control" id="slug" value="{{old('slug',$course->slug)}}" name="slug" placeholder="لینک اختصاصی دوره ">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="video">ویدئو معرفی دوره</label>
                                    <input type="file" class="form-control" id="video" value="{{old('video',$course->video)}}" name="video" placeholder="  ویدئو معرفی دوره ">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="pic">پوستر ویدئو/تصویر شاخص</label>
                                    <input type="text" class="form-control" id="pic" value="{{old('pic',$course->pic)}}" name="pic" placeholder="پوستر ویدئو/تصویر شاخص">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="status">وضعیت دوره</label>
                                    <select class="form-control" name="status" id="status">
                                        @foreach(config('value.truefalse') as $key => $name)
                                        <option value="{{ $key }}" {{ $course->status==$key  ? 'selected' : '' }}>{{ $name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="active">وضعیت انتشار</label>
                                    <select class="form-control" name="active" id="active">
                                        @foreach(config('value.truefalse') as $key => $name)
                                        <option value="{{ $key }}" {{ $course->active==$key  ? 'selected' : '' }}>{{ $name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="content">توضیحات دوره</label>
                                    <textarea class="form-control" name="content" id="content" placeholder="توضیحات دوره" rows="3">{{old('content'),$course->content}}</textarea>
                                </div>

                                <div class="checkbox">
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                                        <label for="checkbox-1" class="custom-control-label mt-1">    <span class="pr-4">من را بررسی کنید</span>  </label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3 mb-0">ارسال</button>
                        </form>
                    </div>
                    <div class="card-footer bd-t tx-center">
                        <a href="#">ادامه مطلب</a>
                    </div>
                </div>
            </div>
           
        </div>
        <!-- row closed -->
    </div>
    <!-- Container closed -->
@endsection
