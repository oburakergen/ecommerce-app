@extends('admin.layouts.app')
@section('content')

    @push('style')
        <link rel="stylesheet" href="{{ asset('css/lib/select2.min.css') }}">
    @endpush


    <div class="row">
        <div class="col-lg-8">
            @include('admin.pages.setting.general._form')
        </div><!--end col-->

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">Site Logo</h4>
                        </div><!--end col-->
                        <div class="col-auto">
                            <i class="fa fa-refresh" aria-hidden="true"></i>
                        </div><!--end col-->
                    </div>  <!--end row-->
                </div><!--end card-header-->
                <div class="card-body">
                    <div class="media">
                        <img src="assets/images/users/user-4.jpg" alt="" class="img-thumbnail">
                    </div>
                </div><!--end card-body-->
            </div>
        </div>
    </div><!--end row-->
@endsection
