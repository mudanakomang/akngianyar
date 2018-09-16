@extends('layouts.main')
@section('content')
    <section class="container">
        <div class="row" style="padding-top:100px;">
            <!-- main content -->
            <div class="col-lg-12 col-md-12 ">
                <div class="col-lg-4 col-md-4">
                <h3>Pengelolaan Web</h3>
                @include('admin._sidebar')
                </div>

                <div class="col-lg-8 col-md-8">
                    @yield('manage_slide')
                    @yield('manage_slidelist')
                </div>
            </div>

        </div>

    </section>
    @endsection