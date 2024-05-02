@extends('layouts.admin-user')
@section('content-user')



<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="profile-foreground position-relative mx-n4 mt-n4">
                <div class="profile-wid-bg">
                    {{--  <img src="assets/images/profile-bg.jpg" alt="" class="profile-wid-img" />  --}}
                </div>
            </div>
            <div class="pt-4 mb-4 mb-lg-3 pb-lg-4 profile-wrapper">
                <div class="row g-4">
                    <div class="col-auto">
                        <div class="avatar-lg">
                            <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-thumbnail rounded-circle" />
                        </div>
                    </div>

                    <div class="col">
                        <div class="p-2">
                            <h3 class="text-white mb-1">Jesus Adrian Amancay Acuña</h3>
                            <p class="text-white-75">Programador Web</p>
                            <div class="hstack text-white-50 gap-1">
                                <div class="me-2"><i class="ri-map-pin-user-line me-1 text-white-75 fs-16 align-middle"></i>Lima, Villa El Salvador</div>
                                <div>
                                    <i class="ri-building-line me-1 text-white-75 fs-16 align-middle"></i>200 Millas con Pastor Sevilla, Grupo 1 Mz C lote 19
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <div class="d-flex profile-wrapper">
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link fs-14 active" data-bs-toggle="tab" href="#overview-tab" role="tab">
                                        <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Perfil</span>
                                    </a>
                                </li>
                               {{--   <li class="nav-item">
                                    <a class="nav-link fs-14" data-bs-toggle="tab" href="#activities" role="tab">
                                        <i class="ri-list-unordered d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Activities</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fs-14" data-bs-toggle="tab" href="#projects" role="tab">
                                        <i class="ri-price-tag-line d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Projects</span>
                                    </a>
                                </li>  --}}
                                <li class="nav-item">
                                    <a class="nav-link fs-14" data-bs-toggle="tab" href="#documents" role="tab">
                                        <i class="ri-folder-4-line d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Certificados</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="flex-shrink-0">
                                <a href="{{ asset('assets/docs/cv.pdf') }}" class="btn btn-primary" download>
                                    <i class="bx bxs-download"></i> Descargar CV
                                </a>
                            </div>

                        </div>
                        <!-- Tab panes -->
                        <div class="tab-content pt-4 text-muted">
                            <div class="tab-pane active" id="overview-tab" role="tabpanel">
                                <div class="row">
                                    <div class="col-xxl-3">
                                        {{--  <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title mb-5">Complete Your Profile</h5>
                                                <div class="progress animated-progress custom-progress progress-label">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="label">30%</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  --}}

                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title mb-3">Informacion</h5>
                                                <div class="table-responsive">
                                                    <table class="table table-borderless mb-0">
                                                        <tbody>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Celular :</th>
                                                                <td class="text-muted">
                                                                    <a href="https://wa.me/51933924456">+51 933 924 456</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Correo :</th>
                                                                <td class="text-muted"><a href="mailto:amancayjesus136@gmail.com?subject=Consulta&body=Estoy interesado en obtener más información.">amancayjesus136@gmail.com</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Edad :</th>
                                                                <td class="text-muted">21 años</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Nacionalidad :</th>
                                                                <td class="text-muted">Peruano
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Cumpleaños</th>
                                                                <td class="text-muted">27 Noviembre del 2002</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->

                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title mb-4">Redes Sociales</h5>
                                                <div class="d-flex flex-wrap gap-2">
                                                    <div>
                                                        <a href="javascript:void(0);" class="avatar-xs d-block">
                                                            <span class="avatar-title rounded-circle fs-16 bg-dark text-light">
                                                                <i class="ri-github-fill"></i>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div>
                                                        <a href="javascript:void(0);" class="avatar-xs d-block">
                                                            <span class="avatar-title rounded-circle fs-16 bg-primary">
                                                                <i class="ri-facebook-fill"></i>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div>
                                                        <a href="javascript:void(0);" class="avatar-xs d-block">
                                                            <span class="avatar-title rounded-circle fs-16 bg-success">
                                                                <i class="ri-whatsapp-fill"></i>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div>
                                                        <a href="javascript:void(0);" class="avatar-xs d-block">
                                                            <span class="avatar-title rounded-circle fs-16 bg-danger">
                                                                <i class="ri-instagram-fill"></i>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div>
                                                        <a href="javascript:void(0);" class="avatar-xs d-block">
                                                            <span class="avatar-title rounded-circle fs-16 bg-info">
                                                                <i class="ri-linkedin-fill"></i>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title mb-4">Habilidades</h5>
                                                <div class="d-flex flex-wrap gap-2 fs-15">
                                                    <a href="#" class="badge badge-soft-primary">Microsoft Word</a>
                                                    <a href="#" class="badge badge-soft-primary">Microsoft PowerPoint</a>
                                                    <a href="#" class="badge badge-soft-primary">Microsoft Excel </a>
                                                    <a href="#" class="badge badge-soft-primary">COBOL / JCL</a>
                                                    <a href="#" class="badge badge-soft-primary">PHP</a>
                                                    <a href="#" class="badge badge-soft-primary">WordPress</a>
                                                    <a href="#" class="badge badge-soft-primary">Laravel</a>
                                                    <a href="#" class="badge badge-soft-primary">HTML</a>
                                                    <a href="#" class="badge badge-soft-primary">CSS</a>
                                                    <a href="#" class="badge badge-soft-primary">Javascript</a>
                                                    <a href="#" class="badge badge-soft-primary">Node Js</a>
                                                    <a href="#" class="badge badge-soft-primary">Angular</a>
                                                    <a href="#" class="badge badge-soft-primary">React</a>
                                                    <a href="#" class="badge badge-soft-primary">Ionic</a>
                                                    <a href="#" class="badge badge-soft-primary">MySQL</a>
                                                    <a href="#" class="badge badge-soft-primary">MongoDB</a>
                                                    <a href="#" class="badge badge-soft-primary">Microsoft SQL Server</a>
                                                    <a href="#" class="badge badge-soft-primary">Oracle</a>
                                                    <a href="#" class="badge badge-soft-primary">C#</a>
                                                    <a href="#" class="badge badge-soft-primary">Java</a>
                                                    <a href="#" class="badge badge-soft-primary">Spring Boot</a>
                                                    <a href="#" class="badge badge-soft-primary">Gitub</a>
                                                    <a href="#" class="badge badge-soft-primary">Gitlab</a>
                                                    <a href="#" class="badge badge-soft-primary">Firebase</a>
                                                    <a href="#" class="badge badge-soft-primary">Figma</a>
                                                    <a href="#" class="badge badge-soft-primary">Trello</a>
                                                    <a href="#" class="badge badge-soft-primary">Postman</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center mb-4">
                                                    <div class="flex-grow-1">
                                                        <h5 class="card-title mb-0">Recomendados</h5>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="d-flex align-items-center py-3">
                                                        <div class="avatar-xs flex-shrink-0 me-3">
                                                            <img src="{{ asset('assets/images/img_example/cesar.jpg') }}" alt="" class="img-fluid rounded-circle" />
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <div>
                                                                <h5 class="fs-15 mb-1">Cesar Aquino</h5>
                                                                <p class="fs-13 text-muted mb-0">Senior Full Stack</p>
                                                            </div>
                                                        </div>
                                                        <div class="flex-shrink-0 ms-2">
                                                            <button type="button" class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#cesar"><i class="ri-user-add-line align-middle"></i></button>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center py-3">
                                                        <div class="avatar-xs flex-shrink-0 me-3">
                                                            <img src="{{ asset('assets/images/img_example/hubert.png') }}" alt="" class="img-fluid rounded-circle" />
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <div>
                                                                <h5 class="fs-15 mb-1">Hubert Aquino</h5>
                                                                <p class="text-muted mb-0">Junior Full Stack</p>
                                                            </div>
                                                        </div>
                                                        <div class="flex-shrink-0 ms-2">
                                                            <button type="button" class="btn btn-sm btn-outline-info"><i class="ri-user-add-line align-middle"></i></button>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center py-3">
                                                        <div class="avatar-xs flex-shrink-0 me-3">
                                                            <img src="{{ asset('assets/images/img_example/jordan.png') }}" alt="" class="img-fluid rounded-circle" />
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <div>
                                                                <h5 class="fs-15 mb-1">Jordan Potenciano</h5>
                                                                <p class="text-muted mb-0">Junior Back End / Analista de datos</p>
                                                            </div>
                                                        </div>
                                                        <div class="flex-shrink-0 ms-2">
                                                            <button type="button" class="btn btn-sm btn-outline-info"><i class="ri-user-add-line align-middle"></i></button>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center py-3">
                                                        <div class="avatar-xs flex-shrink-0 me-3">
                                                            <img src="{{ asset('assets/images/img_example/abad.jpg') }}" alt="" class="img-fluid rounded-circle" />
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <div>
                                                                <h5 class="fs-15 mb-1">Miguel Abad</h5>
                                                                <p class="text-muted mb-0">Project Manager</p>
                                                            </div>
                                                        </div>
                                                        <div class="flex-shrink-0 ms-2">
                                                            <button type="button" class="btn btn-sm btn-outline-info"><i class="ri-user-add-line align-middle"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div>
                                        <!--end card-->

                                        <!-- Modal para evento -->
                                            <div class="modal fadeInLeft" id="cesar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <!-- Contenido del modal -->
                                                        <div class="modal-body text-center p-5">
                                                            <img src="{{ asset('assets/images/img_example/cesar.jpg') }}" alt="" class="rounded-circle" style="width: 25%;" />

                                                            <!-- Texto del modal -->
                                                            <div class="mt-4">
                                                                <h4 class="mb-3">Cesar Aquino</h4>
                                                                <p class="text-muted mb-4">
                                                                    Contactos de confianza muy bien capacitados.
                                                                </p>

                                                                <div class="d-flex justify-content-center flex-wrap gap-2 mb-4">
                                                                    <div>
                                                                        <a href="javascript:void(0);" class="avatar-xs d-block">
                                                                            <span class="avatar-title rounded-circle fs-16 bg-dark text-light">
                                                                                <i class="ri-github-fill"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="javascript:void(0);" class="avatar-xs d-block">
                                                                            <span class="avatar-title rounded-circle fs-16 bg-primary">
                                                                                <i class="ri-facebook-fill"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="javascript:void(0);" class="avatar-xs d-block">
                                                                            <span class="avatar-title rounded-circle fs-16 bg-success">
                                                                                <i class="ri-whatsapp-fill"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="javascript:void(0);" class="avatar-xs d-block">
                                                                            <span class="avatar-title rounded-circle fs-16 bg-danger">
                                                                                <i class="ri-instagram-fill"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="javascript:void(0);" class="avatar-xs d-block">
                                                                            <span class="avatar-title rounded-circle fs-16 bg-info">
                                                                                <i class="ri-linkedin-fill"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>

                                                                <!-- Botones en el modal -->
                                                                <div class="hstack gap-2 justify-content-center">
                                                                    <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal">
                                                                        <i class="ri-close-line me-1 align-middle"></i> Cerrar
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Fin del contenido del modal -->
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- Modal para evento -->

                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-9">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title mb-3">Acerca de:</h5>
                                                <p>No busco una empresa que me asegure un salario para siempre, sino la oportunidad de demostrar al
                                                    mundo que los jóvenes podemos crecer profesionalmente y aportar todo nuestro talento a las
                                                    empresas que confían en nosotros.
                                                    Soy un desarrollador de software con experiencia en PHP y el framework Laravel. Durante mi tiempo
                                                    como programador, he trabajado tanto en el front-end como en el back-end, participando en todas las
                                                    etapas del ciclo de desarrollo.
                                                </p>
                                                <p>
                                                    Mi objetivo es aprender y desarrollarme profesionalmente, por lo que
                                                    busco entornos donde pueda demostrar mis habilidades y seguir creciendo.
                                                    Soy egresado con conocimientos en desarrollo de software, bases de datos y lenguajes de
                                                    programación. Me caracterizo por mi orientación al logro, capacidad de análisis, dinamismo,
                                                    compromiso y proactividad. Estas habilidades me permiten adaptarme a diferentes entornos de
                                                    trabajo y colaborar efectivamente con mis colegas.
                                                </p>
                                                <div class="row">
                                                    <div class="col-6 col-md-4">
                                                        <div class="d-flex mt-4">
                                                            <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                                <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                                    <i class="ri-user-2-fill"></i>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <p class="mb-1">Nivel academico :</p>
                                                                <h6 class="text-truncate mb-0">Tecnico Superior / Programador Junior</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    {{--  <div class="col-6 col-md-4">
                                                        <div class="d-flex mt-4">
                                                            <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                                <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                                    <i class="ri-global-line"></i>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <p class="mb-1">Website :</p>
                                                                <a href="#" class="fw-semibold">www.velzon.com</a>
                                                            </div>
                                                        </div>
                                                    </div>  --}}
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                            <!--end card-body-->
                                        </div><!-- end card -->

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header align-items-center d-flex">
                                                        <h4 class="card-title mb-0  me-2">Experiencias</h4>
                                                        <div class="flex-shrink-0 ms-auto">
                                                            <ul class="nav justify-content-end nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                                                <li class="nav-item">
                                                                    <a class="nav-link active" data-bs-toggle="tab" href="#today" role="tab">
                                                                        Laboral
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" data-bs-toggle="tab" href="#weekly" role="tab">
                                                                        Educacion
                                                                    </a>
                                                                </li>
                                                               {{--   <li class="nav-item">
                                                                    <a class="nav-link" data-bs-toggle="tab" href="#monthly" role="tab">
                                                                        Monthly
                                                                    </a>
                                                                </li>  --}}
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="tab-content text-muted">
                                                            <div class="tab-pane active" id="today" role="tabpanel">
                                                                <div class="profile-timeline">
                                                                    <div class="accordion accordion-flush" id="todayExample">

                                                                        <div class="accordion-item border-0">
                                                                            <div class="accordion-header" id="headingOne">
                                                                                <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true">
                                                                                    <div class="d-flex">
                                                                                        <div class="flex-shrink-0 avatar-xs">
                                                                                            <div class="avatar-title bg-light text-success rounded-circle">
                                                                                                V
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="flex-grow-1 ms-3">
                                                                                            <h6 class="fs-14 mb-1">
                                                                                                Full Stack, Vibra
                                                                                            </h6>
                                                                                            <small class="text-muted">Agosto 03 del 2022 - Marzo 31 del 2024</small>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                                                <div class="accordion-body ms-2 ps-5">
                                                                                    Como desarrollador web full stack especializado en Laravel y Livewire, lideré el desarrollo de
                                                                                    varios proyectos, incluyendo la migración de sistemas heredados a una arquitectura
                                                                                    monolítica moderna basada en Laravel.
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="accordion-item border-0">
                                                                            <div class="accordion-header" id="headingOne">
                                                                                <a class="accordion-button collapsed p-2 shadow-none" data-bs-toggle="collapse" href="#collapseTwo" aria-expanded="false">
                                                                                    <div class="d-flex">
                                                                                        <div class="flex-shrink-0 avatar-xs">
                                                                                            <div class="avatar-title bg-light text-success rounded-circle">
                                                                                                P
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="flex-grow-1 ms-3">
                                                                                            <h6 class="fs-14 mb-1">
                                                                                                Back End, Phenomenal B2B
                                                                                            </h6>
                                                                                            <small class="text-muted">Abril 01 del 2022 – Julio 30 del 2022</small>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                                                <div class="accordion-body ms-2 ps-5">
                                                                                    Desarrollador back-end usando Laravel v10, API Rest.
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="accordion-item border-0">
                                                                            <div class="accordion-header" id="headingOne">
                                                                                <a class="accordion-button collapsed p-2 shadow-none" data-bs-toggle="collapse" href="#collapseOPerario" aria-expanded="false">
                                                                                    <div class="d-flex">
                                                                                        <div class="flex-shrink-0 avatar-xs">
                                                                                            <div class="avatar-title bg-light text-success rounded-circle">
                                                                                                E
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="flex-grow-1 ms-3">
                                                                                            <h6 class="fs-14 mb-1">
                                                                                                Operario de limpieza, EURO DIGITAL CLEAN S.A.C
                                                                                            </h6>
                                                                                            <small class="text-muted">Marzo 01 del 2022 – Abril 30 del 2022</small>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div id="collapseOPerario" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                                                <div class="accordion-body ms-2 ps-5">
                                                                                    Como Operario de Limpieza me encargué de mantener un entorno limpio y ordenado para
                                                                                    garantizar la satisfacción del cliente y cumplir con los estándares de higiene establecidos.
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="accordion-item border-0">
                                                                            <div class="accordion-header" id="headingOne">
                                                                                <a class="accordion-button collapsed p-2 shadow-none" data-bs-toggle="collapse" href="#collapseAgente" aria-expanded="false">
                                                                                    <div class="d-flex">
                                                                                        <div class="flex-shrink-0 avatar-xs">
                                                                                            <div class="avatar-title bg-light text-success rounded-circle">
                                                                                                E
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="flex-grow-1 ms-3">
                                                                                            <h6 class="fs-14 mb-1">
                                                                                                Agente de atencion al cliente, Entel Postpago
                                                                                            </h6>
                                                                                            <small class="text-muted">Enero 01 del 2022 – Febrero 28 del 2022</small>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div id="collapseAgente" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                                                <div class="accordion-body ms-2 ps-5">
                                                                                    Como especialista en atención al cliente para Entel Postpago, lideré la resolución efectiva de
                                                                                    problemas e incidencias para garantizar la satisfacción del cliente y la retención.
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="accordion-item border-0">
                                                                            <div class="accordion-header" id="headingOne">
                                                                                <a class="accordion-button collapsed p-2 shadow-none" data-bs-toggle="collapse" href="#collapseReponedor" aria-expanded="false">
                                                                                    <div class="d-flex">
                                                                                        <div class="flex-shrink-0 avatar-xs">
                                                                                            <div class="avatar-title bg-light text-success rounded-circle">
                                                                                                T
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="flex-grow-1 ms-3">
                                                                                            <h6 class="fs-14 mb-1">
                                                                                                Reponedor, Tottus
                                                                                            </h6>
                                                                                            <small class="text-muted">Setiembre 05 del 2021 – Diciembre 31 del 2021</small>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div id="collapseReponedor" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                                                <div class="accordion-body ms-2 ps-5">
                                                                                    Como operario de distribución de góndolas, atención y ayuda al cliente.
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="accordion-item border-0">
                                                                            <div class="accordion-header" id="headingOne">
                                                                                <a class="accordion-button collapsed p-2 shadow-none" data-bs-toggle="collapse" href="#collapseAlmacen" aria-expanded="false">
                                                                                    <div class="d-flex">
                                                                                        <div class="flex-shrink-0 avatar-xs">
                                                                                            <div class="avatar-title bg-light text-success rounded-circle">
                                                                                                R
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="flex-grow-1 ms-3">
                                                                                            <h6 class="fs-14 mb-1">
                                                                                                Almacen, Ripley
                                                                                            </h6>
                                                                                            <small class="text-muted">Junio 01 del 2021 – Agosto 15 del 2021</small>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div id="collapseAlmacen" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                                                <div class="accordion-body ms-2 ps-5">
                                                                                    Control de inventario de textilería.
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="tab-pane" id="weekly" role="tabpanel">
                                                                <div class="profile-timeline">
                                                                    <div class="accordion accordion-flush" id="weeklyExample">
                                                                        <div class="accordion-item border-0">
                                                                            <div class="accordion-header" id="headingOne">
                                                                                <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true">
                                                                                    <div class="d-flex">
                                                                                        <div class="flex-shrink-0 avatar-xs">
                                                                                            <div class="avatar-title bg-light text-success rounded-circle">
                                                                                                I
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="flex-grow-1 ms-3">
                                                                                            <h6 class="fs-14 mb-1">
                                                                                                DESARROLLO DE SISTEMAS DE INFORMACIÓN, Culminado
                                                                                            </h6>
                                                                                            <small class="text-muted">Marzo 15 del 2021 - Diciembre 15 del 2024</small>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                                                <div class="accordion-body ms-2 ps-5">
                                                                                    INSTITUTO SUPERIOR MARIA ELENA MOYANOS
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="accordion-item border-0">
                                                                            <div class="accordion-header" id="headingOne">
                                                                                <a class="accordion-button collapsed p-2 shadow-none" data-bs-toggle="collapse" href="#collapseSecundaria" aria-expanded="false">
                                                                                    <div class="d-flex">
                                                                                        <div class="flex-shrink-0 avatar-xs">
                                                                                            <div class="avatar-title bg-light text-success rounded-circle">
                                                                                                F
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="flex-grow-1 ms-3">
                                                                                            <h6 class="fs-14 mb-1">
                                                                                                Secundaria, Culminado
                                                                                            </h6>
                                                                                            <small class="text-muted">Marzo 01 del 2015 – Diciembre 22 del 2019</small>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div id="collapseSecundaria" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                                                <div class="accordion-body ms-2 ps-5">
                                                                                    Fe y Alegría Nº 17
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="accordion-item border-0">
                                                                            <div class="accordion-header" id="headingOne">
                                                                                <a class="accordion-button collapsed p-2 shadow-none" data-bs-toggle="collapse" href="#collapsePrimaria" aria-expanded="false">
                                                                                    <div class="d-flex">
                                                                                        <div class="flex-shrink-0 avatar-xs">
                                                                                            <div class="avatar-title bg-light text-success rounded-circle">
                                                                                                F
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="flex-grow-1 ms-3">
                                                                                            <h6 class="fs-14 mb-1">
                                                                                                Primaria, Culminado
                                                                                            </h6>
                                                                                            <small class="text-muted">Marzo 01 del 2009 – Diciembre 22 del 2014</small>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div id="collapsePrimaria" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                                                <div class="accordion-body ms-2 ps-5">
                                                                                    Fe y Alegría Nº 17
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--end tab-pane-->
                            <div class="tab-pane fade" id="documents" role="tabpanel">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="table-responsive">
                                                    <table class="table table-borderless align-middle mb-0">
                                                        <thead class="table-light">
                                                            <tr>
                                                                <th scope="col">Titulo</th>
                                                                <th scope="col">Tipo</th>
                                                                <th scope="col">Fecha obtenido</th>
                                                                <th scope="col"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($certificados as $certificado)
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="avatar-sm">
                                                                                <div class="avatar-title bg-soft-danger text-danger rounded fs-20">
                                                                                    <i class="bx bxs-file-pdf"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="ms-3 flex-grow-1">
                                                                                <h6 class="fs-15 mb-0">
                                                                                    <a href="{{ route('ver_certificado', ['id_certificado' => $certificado->id_certificado]) }}" class="link-dark" target="_blank">{{ $certificado->titulo_certificado }}</a>
                                                                                </h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>{{ $certificado->tipo_certificado }}</td>
                                                                    <td>
                                                                        {{
                                                                            \Carbon\Carbon::parse($certificado->fecha_certificado)
                                                                            ->locale('es')
                                                                            ->isoFormat('D [de] MMMM [del] YYYY')
                                                                        }}
                                                                    </td>

                                                                    <td>
                                                                        <div class="dropdown">
                                                                            <a href="#" class="btn btn-light btn-icon" id="dropdownMenuLink15" data-bs-toggle="dropdown" aria-expanded="true">
                                                                                <i class="ri-equalizer-fill"></i>
                                                                            </a>
                                                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink15">
                                                                                <li>
                                                                                    <a class="dropdown-item" href="{{ route('ver_certificado', ['id_certificado' => $certificado->id_certificado]) }}" target="_blank">
                                                                                        <i class="ri-eye-fill me-2 align-middle text-muted"></i>Ver
                                                                                    </a>
                                                                                </li>

                                                                                <li>
                                                                                    <a class="dropdown-item" href="{{ route('descargar_certificado', ['id_certificado' => $certificado->id_certificado]) }}"><i class="ri-download-2-fill me-2 align-middle text-muted"></i>Descargar</a>
                                                                                </li>
                                                                                {{--  <li><a class="dropdown-item" href="#"><i class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Eliminar</a></li>  --}}
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                    <div class="card-body">
                                                        {{ $certificados->links() }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end tab-pane-->
                        </div>
                        <!--end tab-content-->
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

        </div><!-- container-fluid -->
    </div><!-- End Page-content -->

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> © Velzon.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Design & Develop by Themesbrand
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

@endsection
