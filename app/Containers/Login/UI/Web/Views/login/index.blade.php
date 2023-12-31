<?php

/* @var $items App\Models\Departments */

?>
@extends('layouts.login')

@section('title', 'Page Title')

@section('sidebar')
    @parent


@endsection

@section('content')
    <!-- Page Content -->
    <div class="row g-0 justify-content-center bg-body-dark">
        <div class="hero-static col-sm-10 col-md-8 col-xl-7 d-flex align-items-center p-2 px-sm-0">
            <!-- Sign In Block -->
            <div class="block block-rounded block-transparent block-fx-pop w-100 mb-0 overflow-hidden bg-image" style="background-image: url('assets/media/photos/photo20@2x.jpg');">
                <div class="row g-0">
                    <div class="col-md-6 order-md-1 bg-body-extra-light">
                        <div class="block-content block-content-full px-lg-5 py-md-5 py-lg-6">
                            <!-- Header -->
                            <div class="mb-2 text-center">
                                <a class="link-fx fw-bold fs-1" href="index.html">
                                    <span class="text-dark">Вхід </span><span class="text-primary">в профіль</span>
                                </a>
                            </div>
                            <!-- END Header -->

                            <!-- Sign In Form -->
                            <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js) -->
                            <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                            <form class="js-validation-signin" action="/login/authenticate" method="POST">
                                {{ csrf_field() }}
                                <div class="mb-4">
                                    <input name="email" type="text" class="form-control form-control-alt" id="login-username" name="login-username" placeholder="Username">
                                </div>
                                <div class="mb-4">
                                    <input name="password" type="password" class="form-control form-control-alt" id="login-password" name="login-password" placeholder="Password">
                                </div>
                                <div class="mb-4">
                                    <button type="submit" class="btn w-100 btn-hero btn-primary">
                                        <i class="fa fa-fw fa-sign-in-alt opacity-50 me-1"></i> Вхід
                                    </button>
                                </div>
                            </form>
                            <!-- END Sign In Form -->
                        </div>
                    </div>
                    <div class="col-md-6 order-md-0 bg-primary-blue-op d-flex align-items-center">
                        <div class="block-content block-content-full px-lg-5 py-md-5 py-lg-6">
                            <div class="logo-login">
                                <a class="flex-grow-1" href="javascript:void(0)">
                                    <img src="https://kpi.ua/files/kpi-logo.png" alt="Image Description">
                                </a>
                                <div class="flex-grow-1">
                                    <div style="color: #fff; font-size: 16px; text-align: center;" class="g-mb-40--lg">
                                        КПІ ім. Ігоря Сікорського
                                        Департамент якості освітнього процесу
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Sign In Block -->
        </div>
    </div>
    <!-- END Page Content -->

@endsection
