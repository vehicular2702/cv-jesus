{{--  SECCION CERTIFICADO  --}}
<tbody id="task-list">
    @if ($blog = $blogs->first())
        <tr>
            <td><span class="badge bg-secondary-subtle text-secondary text-uppercase">Blog</span></td>
            <td><span class="badge bg-success">Contenido agregado <i class="bx bx-check-circle"></i></span></td>

            <td>
                <div class="hstack gap-2">
                    <a href="#" class="btn btn-sm btn-soft-success" data-bs-toggle="modal" data-bs-target="#createBlog">
                        <i class="ri-add-circle-fill align-bottom"></i>
                    </a>

                    <a href="#" class="btn btn-sm btn-soft-primary edit-list">
                        <i class="ri-pencil-fill align-bottom"></i>
                    </a>

                    <a href="#" class="btn btn-sm btn-soft-danger remove-list">
                        <i class="ri-delete-bin-5-fill align-bottom"></i>
                    </a>
                </div>
            </td>
        </tr>
    @else  <!-- Si no hay registros -->
        <tr>
            <td><span class="badge bg-secondary-subtle text-secondary text-uppercase">Blog</span></td>
            <td><span class="badge bg-danger">Sin contenido <i class="bx bxs-error-circle"></i></span></td>

            <td>
                <div class="hstack gap-2">
                    <a href="#" class="btn btn-sm btn-soft-success" data-bs-toggle="modal" data-bs-target="#createBlog">
                        <i class="ri-add-circle-fill align-bottom"></i>
                    </a>
                </div>
            </td>
        </tr>
    @endif
</tbody>

{{--  SECCION CERTIFICADO  --}}

{{--  MODAL  --}}
<div class="modal fadeInLeft" id="createBlog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="modal-header bg-soft-info p-3">
                <h5 class="modal-title" id="exampleModalLabel">Agregar blog</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form action="{{ route('store_blog') }}" method="post" class="tablelist-form needs-validation" alt="user-profile-image" enctype="multipart/form-data" autocomplete="off" novalidate>
                @csrf
                <div class="modal-body">
                    <div class="row">

                        <div class="text-center">
                            <div class="profile-user position-relative d-inline-block mx-auto mb-4">
                                    <img id="user-profile-image" src="{{ asset('assets/images/sin-foto.jpg') }}" class="rounded-circle avatar-xl img-thumbnail user-profile-image" alt="user-profile-image">
                                    <input id="profile-img-file-input" name="imagen_blog" type="file" accept="image/*" class="profile-img-file-input" required>
                                    <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                        <span class="avatar-title rounded-circle bg-light text-body">
                                            <i class="ri-camera-fill"></i>
                                        </span>
                                    </label>

                                    <div class="valid-feedback">
                                        ¡Se ve bien!
                                    </div>
                                    <div class="invalid-feedback text-end">
                                        La imagen es necesario
                                    </div>
                                </div>
                        </div>

                        <div class="col-12 mt-3">
                            <div>
                                <label for="alias" class="form-label">Titulos</label>
                                <input type="text" id="alias" name="titulo_blog" class="form-control" placeholder="Ingresar titulo" required />
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback text-end">
                                    El titulo es necesario
                                </div>
                            </div>
                        </div>


                        <div class="col-4 mt-3">
                            <div>
                                <label for="alias" class="form-label">Version</label>
                                <input type="text" id="alias" name="version_blog" class="form-control" placeholder="Laravel v10" required />
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback text-end">
                                    La version es necesario
                                </div>
                            </div>
                        </div>

                        <div class="col-4 mt-3">
                            <div>
                                <label for="alias" class="form-label">Nivel</label>
                                <input type="text" id="alias" name="nivel_blog" class="form-control" placeholder="Basico" required />
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback text-end">
                                    El nivel es necesario
                                </div>
                            </div>
                        </div>

                        <div class="col-4 mt-3 mb-3">
                            <div>
                                <label for="alias" class="form-label">Tiempo</label>
                                <input type="number" id="alias" name="tiempo_blog" class="form-control" placeholder="Ingresar duracion" required />
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback text-end">
                                    La duracion es necesario
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div>
                                <label for="video" class="form-label">Video</label>
                                <input type="file" name="video_blog" class="form-control" required accept="video/*" />
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback text-end">
                                    El video es necesario
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-3">
                            <div>
                                <label for="alias" class="form-label">Titulo del video</label>
                                <input type="text" id="alias" name="titulo_video" class="form-control" placeholder="Ingresar titulo" required />
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback text-end">
                                    El titulo del video es necesario
                                </div>
                            </div>
                        </div>

                        <div>
                            <label class="form-label mt-4">Descripción del Proyecto</label>
                            <textarea class="form-control" name="descripcion_video" id="summernote-video" required>{{ old('descripcion') }}</textarea>
                            <div class="valid-feedback">
                                ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback text-end">
                                La descripción es necesaria.
                            </div>
                        </div>
                    </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-success" id="add-btn">Registrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
{{--  MODAL  --}}

<script>
    (function () {
        'use strict'

        var forms = document.querySelectorAll('.needs-validation')

        Array.prototype.slice.call(forms)
            .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
            })
        })()
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('profile-img-file-input').addEventListener('change', function (e) {
            var selectedImage = e.target.files[0];

            if (selectedImage) {
                var imageUrl = URL.createObjectURL(selectedImage);

                document.getElementById('user-profile-image').src = imageUrl;
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#summernote-video').summernote({
            tabsize: 2,
            height: 230,
            toolbar: [
                ['style', ['bold', 'italic', 'underline']],
                ['para', ['ul', 'ol']],
                ['insert', ['link', 'picture']],
                ['view', ['codeview']]
            ]
        });
    });
</script>
