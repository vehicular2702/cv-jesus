@extends('layouts.admin-user')
@section('content-user')

<br>

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Explore Now</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">NFT Marketplace</a></li>
                                <li class="breadcrumb-item active">Explore Now</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1" id="explorecard-list">
                @foreach ($blogs as $blog)
                    <div class="col list-element">
                        <div class="card explore-box card-animate">
                            <div class="explore-place-bid-img">
                                @if ($blog->imagen_blog)
                                    <img src="{{ asset('storage/' . $blog->imagen_blog) }}" alt="Imagen del blog" class="card-img-top explore-img">
                                @else
                                    <img src="{{ asset('assets/images/sin-foto.png') }}" alt="Sin imagen" class="card-img-top explore-img">
                                @endif
                                <div class="bg-overlay"></div>
                                <div class="place-bid-btn">
                                    <a href="{{ route('blog.show', [$blog->id_blog]) }}" class="btn btn-primary">
                                        <i class="ri-eye-line me-1"></i> Visualizar
                                    </a>
                                </div>
                            </div>

                            <div class="card-body">
                                <h5 class="mb-1">
                                    <a href="{{ route('blog.show', [$blog->id_blog]) }}" class="link-dark">{{ $blog->titulo_blog }}</a>
                                </h5>
                                <p class="text-muted mb-0">{{ $blog->version_blog }}</p>
                            </div>

                            <div class="card-footer border-top border-top-dashed">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 fs-14">
                                        <i class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Nivel:
                                        <span class="fw-medium">{{ $blog->nivel_blog }}</span>
                                    </div>
                                    <h5 class="flex-shrink-0 fs-14 text-primary mb-0">
                                        <i class="ri-alarm-line"></i> {{ $blog->tiempo_blog }} min
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</div>

@endsection
