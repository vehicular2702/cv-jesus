@extends('layouts.admin-user')
@section('content-user')


<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <h5 class="mt-3 mb-3 text-center">" {{ $blog->titulo_video }} "</h5>
                            @if ($blog->video_blog)
                                <video controls class="card-img-top explore-video">
                                    <source src="{{ asset('storage/' . $blog->video_blog) }}" type="video/mp4">
                                    Tu navegador no soporta la etiqueta de video.
                                </video>
                            @elseif ($blog->imagen_blog)
                                <img src="{{ asset('storage/' . $blog->imagen_blog) }}" alt="Imagen del blog" class="card-img-top explore-img">
                            @else
                                <img src="{{ asset('assets/images/sin-foto.png') }}" alt="Sin imagen" class="card-img-top explore-img">
                            @endif
                        </div>
                        <div class="col-6 mt-5">
                            <h5></h5>
                            <p>{!! $blog->descripcion_video !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

 @endsection
