{{--  SECCION SOBRE MI  --}}
<tbody id="task-list">
    @forelse ($sobres_mis as $sobre_mi)
        <tr>
            <td><span class="badge bg-secondary-subtle text-secondary text-uppercase">Sobre mi</span></td>
            <td><span class="badge bg-success">Contenido agregado <i class="bx bx-check-circle"></i></span></td>

            <td>
                <div class="hstack gap-2">
                    {{--  Botón para añadir (aparece solo cuando no hay registros)  --}}
                    @if ($sobre_mi->is_empty)
                        <a href="#" class="btn btn-sm btn-soft-success">
                            <i class="ri-add-circle-fill align-bottom"></i>
                        </a>
                    @endif

                    <!-- Botón para editar (aparece solo cuando hay registros) -->
                    @if (!$sobre_mi->is_empty)
                        <a href="{{ route('edit_sobre_mi', $sobre_mi->id_sobre_mi) }}" class="btn btn-sm btn-soft-primary edit-list">
                            <i class="ri-pencil-fill align-bottom"></i>
                        </a>
                    @endif

                    <!-- Botón para eliminar (siempre visible) -->
                    @if (!$sobre_mi->is_empty)
                        <a href="#" class="btn btn-sm btn-soft-danger remove-list">
                            <i class="ri-delete-bin-5-fill align-bottom"></i>
                        </a>
                    @endif
                </div>
            </td>
        </tr>
    @empty
        <tr>
            <td><span class="text-black text-uppercase">SOBRE MI</span></td>
            <td><span class="badge bg-danger">Sin contenido <i class="bx bxs-error-circle"></i></span></td>

            <td>
                <div class="hstack gap-2">
                    <!-- Botón para añadir (siempre visible cuando no hay registros) -->
                    <a href="#" class="btn btn-sm btn-soft-success" data-bs-toggle="modal" data-bs-target="#showModal">
                        <i class="ri-add-circle-fill align-bottom"></i>
                    </a>
                </div>
            </td>
        </tr>
    @endforelse
</tbody>
{{--  SECCION SOBRE MI  --}}


{{--  MODAL  --}}
<div class="modal fadeInLeft" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="modal-header bg-soft-info p-3">
                <h5 class="modal-title" id="exampleModalLabel">Add Contact</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form action="{{ route('store_sobre_mi') }}" method="post" class="tablelist-form needs-validation" alt="user-profile-image" enctype="multipart/form-data" autocomplete="off" novalidate>
                @csrf
                <div class="modal-body">
                    <div class="row">
                        {{--  <div class="text-center">
                            <div class="profile-user position-relative d-inline-block mx-auto mb-4">
                                    <img id="user-profile-image" src="{{ asset('assets/images/sin-foto.jpg') }}" class="rounded-circle avatar-xl img-thumbnail user-profile-image" alt="user-profile-image">
                                    <input id="profile-img-file-input" name="photo" type="file" accept="image/*" class="profile-img-file-input" required>
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
                        </div>  --}}

                        <div class="col-12">
                            <div>
                                <label for="alias" class="form-label">Titulo</label>
                                <input type="text" id="alias" name="titulo_sobre_mi" class="form-control" placeholder="Ingresar titulo" required />
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback text-end">
                                    El titulo es necesario
                                </div>
                            </div>
                        </div>

                        <div>
                            <label class="form-label mt-4">Descripción del Proyecto</label>
                            <textarea class="form-control" name="descripcion_sobre_mi" id="summernote-inscripcion" required>{{ old('descripcion') }}</textarea>
                            <div class="valid-feedback">
                                ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback text-end">
                                La descripción es necesaria.
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div>
                                <label for="tagsInput2" class="form-label">Base de datos</label>
                                <input type="text" name="red_social[]" id="input-multiple">
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback text-end">
                                    El bd es necesario
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-4">
                            <div>
                                <label for="alias" class="form-label">Github</label>
                                <input type="text" id="alias" name="github" class="form-control" placeholder="Ingresar github" required />
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback text-end">
                                    El github es necesario
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div>
                                <label for="alias" class="form-label">Facebook</label>
                                <input type="text" id="alias" name="facebook" class="form-control" placeholder="Ingresar facebook" required />
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback text-end">
                                    El facebook es necesario
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div>
                                <label for="alias" class="form-label">WhatsApp</label>
                                <input type="text" id="alias" name="whatsapp" class="form-control" placeholder="Ingresar WhatsApp" required />
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback text-end">
                                    El WhatsApp es necesario
                                </div>
                            </div>
                        </div>

                        <div class="col-6 mt-3">
                            <div>
                                <label for="alias" class="form-label">Instagram</label>
                                <input type="text" id="alias" name="instagram" class="form-control" placeholder="Ingresar instagram" required />
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback text-end">
                                    El instagram es necesario
                                </div>
                            </div>
                        </div>

                        <div class="col-6 mt-3 mb-4">
                            <div>
                                <label for="alias" class="form-label">Linkedin</label>
                                <input type="text" id="alias" name="linkedin" class="form-control" placeholder="Ingresar linkedin" required />
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback text-end">
                                    El linkedin es necesario
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success" id="add-btn">Add Contact</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
{{--  MODAL  --}}

<script>
    $(document).ready(function() {
        $('#input-multiple').selectize({
            plugins: ['remove_button'],
            delimiter: ',',
            persist: false,
            create: function(input) {
                return {
                    value: input,
                    text: input
                };
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#summernote-inscripcion').summernote({
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
