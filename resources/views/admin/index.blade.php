@extends('layouts.admin')

@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- Chat Wrapper with Sidebar and Content -->
            <div class="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">

                <!-- Sidebar -->
                <div class="file-manager-sidebar">
                    <div class="p-4 d-flex flex-column h-100">

                        <!-- Sidebar Menu with Collapsible Items -->
                        <div class="px-4 mx-n4" data-simplebar style="height: calc(100vh - 468px);">
                            <ul class="to-do-menu list-unstyled" id="projectlist-data">
                                <li>
                                    <a data-bs-toggle="collapse" href="#velzonAdmin" class="nav-link fs-14 active">Velzon Admin & Dashboard</a>
                                    <div class="collapse show" id="velzonAdmin">
                                        <ul class="sub-menu list-unstyled ps-3 vstack gap-2 mb-2">
                                            <li>
                                                <a href="#!"><i class="ri-stop-mini-fill align-middle fs-15 text-danger"></i> v1.4.0</a>
                                            </li>
                                            <li>
                                                <a href="#!"><i class="ri-stop-mini-fill align-middle fs-15 text-secondary"></i> v1.5.0</a>
                                            </li>
                                            <li>
                                                <a href="#!"><i class="ri-stop-mini-fill align-middle fs-15 text-info"></i> v1.6.0</a>
                                            </li>
                                            <li>
                                                <a href="#!"><i class="ri-stop-mini-fill align-middle fs-15 text-primary"></i> v1.7.0</a>
                                            </li>
                                            <li>
                                                <a href="#!"><i class="ri-stop-mini-fill align-middle fs-15 text-warning"></i> v1.8.0</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a data-bs-toggle="collapse" href="#projectManagement" class="nav-link fs-14">Project Management</a>
                                    <div class="collapse" id="projectManagement">
                                        <ul class="sub-menu list-unstyled ps-3 vstack gap-2 mb-2">
                                            <li>
                                                <a href="#!"><i class="ri-stop-mini-fill align-middle fs-15 text-danger"></i> v2.1.0</a>
                                            </li>
                                            <li>
                                                <a href="#!"><i class="ri-stop-mini-fill align-middle fs-15 text-secondary"></i> v2.2.0</a>
                                            </li>
                                            <li>
                                                <a href="#!"><i class="ri-stop-mini-fill align-middle fs-15 text-info"></i> v2.3.0</a>
                                            </li>
                                            <li>
                                                <a href="#!"><i class="ri-stop-mini-fill align-middle fs-15 text-primary"></i> v2.4.0</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a data-bs-toggle="collapse" href="#skoteAdmin" class="nav-link fs-14">Skote Admin & Dashboard</a>
                                    <div class="collapse" id="skoteAdmin">
                                        <ul class="sub-menu list-unstyled ps-3 vstack gap-2 mb-2">
                                            <li>
                                                <a href="#!"><i class="ri-stop-mini-fill align-middle fs-15 text-danger"></i> v4.1.0</a>
                                            </li>
                                            <li>
                                                <a href="#!"><i class="ri-stop-mini-fill align-middle fs-15 text-secondary"></i> v4.2.0</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a data-bs-toggle="collapse" href="#ecommerceProject" class="nav-link fs-14">Doot - Chat App Template</a>
                                    <div class="collapse" id="ecommerceProject">
                                        <ul class="sub-menu list-unstyled ps-3 vstack gap-2 mb-2">
                                            <li>
                                                <a href="#!"><i class="ri-stop-mini-fill align-middle fs-15 text-danger"></i> v1.0.0</a>
                                            </li>
                                            <li>
                                                <a href="#!"><i class="ri-stop-mini-fill align-middle fs-15 text-secondary"></i> v1.1.0</a>
                                            </li>
                                            <li>
                                                <a href="#!"><i class="ri-stop-mini-fill align-middle fs-15 text-info"></i> v1.2.0</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- Sidebar Image -->
                        <div class="mt-auto text-center">
                            <img src="assets/images/task.png" alt="Task" class="img-fluid" />
                        </div>
                    </div>
                </div>
                <!-- End Sidebar -->

                <!-- Main Content -->
                <div class="file-manager-content w-100 p-4 pb-0">
                    <!-- Header Row with Buttons and Title -->
                    <div class="row mb-4">
                        <div class="col-auto order-1 d-block d-lg-none">
                            <button type="button" class="btn btn-soft-success btn-icon btn-sm fs-16 file-menu-btn">
                                <i class="ri-menu-2-fill"></i>
                            </button>
                        </div>
                        <div class="col-sm order-3 order-sm-2 mt-3 mt-sm-0">
                            <h5 class="fw-semibold">Velzon Admin & Dashboard
                                <span class="badge bg-primary align-bottom ms-2">v2.0.0</span>
                            </h5>
                        </div>
                    </div>

                    <!-- Task Filters -->
                    <div class="p-3 bg-light rounded mb-4">
                        <div class="row g-2">
                            <!-- Dropdown for Sorting -->
                            <div class="col-lg-auto">
                                <select class="form-control" name="choices-select-sortlist" id="choices-select-sortlist">
                                    <option value="">Sort</option>
                                    <option value="By ID">By ID</option>
                                    <option value="By Name">By Name</option>
                                </select>
                            </div>

                            <!-- Dropdown for Task Status -->
                            <div class="col-lg-auto">
                                <select class="form-control" name="choices-select-status" id="choices-select-status">
                                    <option value="">All Tasks</option>
                                    <option value="Completed">Completed</option>
                                    <option value="Inprogress">Inprogress</option>
                                    <option value="Pending">Pending</option>
                                    <option value="New">New</option>
                                </select>
                            </div>

                            <!-- Search Box -->
                            <div class="col-lg">
                                <div class="search-box">
                                    <input type="text" id="searchTaskList" class="form-control" placeholder="Search task name">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="todo-content position-relative px-4 mx-n4" id="todo-content">
                        <div class="todo-task" id="todo-task">
                            <div class="table-responsive">
                                <table class="table align-middle position-relative table-nowrap">
                                    <thead class="table-active">
                                        <tr>
                                            <th scope="col">Seccion</th>
                                            <th scope="col">Estado</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>

                                    <!-- Sobre mi -->
                                        @include('admin.partials.sobre_mi.create-form')
                                    <!-- Sobre mi -->

                                    <!-- Blog -->
                                        @include('admin.partials.blog.create-form')
                                    <!-- Blog -->

                                    <!-- Sobre certificados -->
                                        @include('admin.partials.certificados.create-form')
                                    <!-- Sobre certificados -->

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Main Content -->
            </div>
        </div>
    </div>
</div>

@endsection
