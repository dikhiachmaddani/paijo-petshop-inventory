@extends('layout.auth-layout')
@section('main')
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-4 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="{{ route('dashboard') }}"
                                    class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <img src="{{ asset('assets/images/logos/logo-lg.webp') }}" class="w-100"
                                        alt="">
                                </a>
                                <form method="POST" action="{{ route('login.post') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Username</label>
                                        <input type="email" name="email" id="email" class="form-control">
                                    </div>
                                    <div class="mb-4">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" id="password" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign
                                        In</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
