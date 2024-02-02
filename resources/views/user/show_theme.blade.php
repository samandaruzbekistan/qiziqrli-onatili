@extends('user.header_footer_light')

@section('about') active @endsection


@section('main')

    <!--================ Start Feature Area =================-->
    <section class="feature_area section_gap_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="main_title">
                        <h2 class="mb-3">{{ $id }} - qism mundarijasi</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($themes as $theme)
                    <div class="col-lg-4 col-md-6">
                        <a href="">
                            <div class="single_feature">
                                <div class="icon"><span class="flaticon-book"></span></div>
                                <div class="desc">
                                    <h4 class="mt-3 mb-2">{{ $theme->name }}</h4>
                                    <p class="text-secondary">
                                        {{ $theme->subtitle }}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
    <!--================ End Feature Area =================-->

@endsection
