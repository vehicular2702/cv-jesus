@extends('layouts.admin')
@section('content')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Create Project</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Projects</a></li>
                                <li class="breadcrumb-item active">Create Project</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label" for="project-title-input">Project Title</label>
                                <input type="text" class="form-control" id="project-title-input" placeholder="Enter project title">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="project-title-input">Project Title</label>
                                <input type="text" class="form-control" id="project-title-input" placeholder="Enter project title">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="project-title-input">Project Title</label>
                                <input type="text" class="form-control" id="project-title-input" placeholder="Enter project title">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="project-title-input">Project Title</label>
                                <input type="text" class="form-control" id="project-title-input" placeholder="Enter project title">
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Privacy</h5>
                        </div>
                        <div class="card-body">
                            <div>
                                <label for="choices-privacy-status-input" class="form-label">Status</label>
                                <select class="form-select" data-choices data-choices-search-false id="choices-privacy-status-input">
                                    <option value="Private" selected>Private</option>
                                    <option value="Team">Team</option>
                                    <option value="Public">Public</option>
                                </select>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Tags</h5>
                        </div>
                        <div class="card-body">
                            <div>
                                <label for="choices-text-input" class="form-label">Skills</label>
                                <input class="form-control" id="choices-text-input" data-choices data-choices-limit="Required Limit" placeholder="Enter Skills" type="text" value="UI/UX, Figma, HTML, CSS, Javascript, C#, Nodejs" />
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

</div>

@endsection
