@extends('layouts.admin-user')
@section('content-user')

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <section class="section">
                        <div class="container">
                            <div class="row align-items-center justify-content-lg-between justify-content-center gy-4">
                                <div class="col-lg-5 col-sm-7">
                                    <div class="about-img-section mb-5 mb-lg-0 text-center">

                                        <img src="assets/images/about.jpg" alt="" class="img-fluid mx-auto rounded-3">
                                    </div>
                                </div>
                                @foreach ($sobres_mis as $sobre_mi)
                                    <div class="col-lg-6">
                                        <div class="text-muted">
                                            <h1 class="mb-3 lh-base">Soy <span class="text-primary">{{ $sobre_mi->titulo_sobre_mi }}</span></h1>
                                            <p class="ff-secondary fs-16 mb-2">{!! $sobre_mi->descripcion_sobre_mi !!}</p>

                                            @foreach ($sobre_mi->redes->unique('red_social') as $red)
                                                <div class="vstack gap-2 mb-4 pb-1">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-2">
                                                            <div class="avatar-xs icon-effect">
                                                                <div class="avatar-title bg-transparent text-success rounded-circle h2">
                                                                    <i class="ri-check-fill"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <p class="mb-0">{{ $red->red_social }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                            <div class="d-flex flex-wrap gap-2 mb-3">
                                                <div>
                                                    <a href="{{ $sobre_mi->github }}" class="avatar-xs d-block">
                                                        <span class="avatar-title rounded-circle fs-16 bg-dark text-light">
                                                            <i class="ri-github-fill"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="{{ $sobre_mi->facebook }}" class="avatar-xs d-block">
                                                        <span class="avatar-title rounded-circle fs-16 bg-primary">
                                                            <i class="ri-facebook-fill"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="https://wa.me/+51{{ $sobre_mi->whatsapp }}" class="avatar-xs d-block">
                                                        <span class="avatar-title rounded-circle fs-16 bg-success">
                                                            <i class="ri-whatsapp-fill"></i>
                                                        </span>
                                                    </a>
                                                </div>

                                                <div>
                                                    <a href="{{ $sobre_mi->instagram }}" class="avatar-xs d-block">
                                                        <span class="avatar-title rounded-circle fs-16 bg-danger">
                                                            <i class="ri-instagram-fill"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="{{ $sobre_mi->linkedin }}" class="avatar-xs d-block">
                                                        <span class="avatar-title rounded-circle fs-16 bg-info">
                                                            <i class="ri-linkedin-fill"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
    {{--
                                            <div>
                                                <a href="#!" class="btn btn-primary">Find Your Jobs <i class="ri-arrow-right-line align-bottom ms-1"></i></a>
                                            </div>  --}}

                                        </div>
                                    </div>
                                @endforeach
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end container -->
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
