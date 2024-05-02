{{--  SECCION CERTIFICADO  --}}
<tbody id="task-list">
    @if ($certificado = $certificados->first())
        <tr>
            <td><span class="badge bg-secondary-subtle text-secondary text-uppercase">Certificados</span></td>
            <td><span class="badge bg-success">Contenido agregado <i class="bx bx-check-circle"></i></span></td>

            <td>
                <div class="hstack gap-2">
                    <a href="#" class="btn btn-sm btn-soft-success" data-bs-toggle="modal" data-bs-target="#createCertificado">
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
            <td><span class="badge bg-secondary-subtle text-secondary text-uppercase">Certificados</span></td>
            <td><span class="badge bg-danger">Sin contenido <i class="bx bxs-error-circle"></i></span></td>

            <td>
                <div class="hstack gap-2">
                    <a href="#" class="btn btn-sm btn-soft-success" data-bs-toggle="modal" data-bs-target="#createCertificado">
                        <i class="ri-add-circle-fill align-bottom"></i>
                    </a>
                </div>
            </td>
        </tr>
    @endif
</tbody>

{{--  SECCION CERTIFICADO  --}}

{{--  MODAL  --}}
<div class="modal fadeInLeft" id="createCertificado" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="modal-header bg-soft-info p-3">
                <h5 class="modal-title" id="exampleModalLabel">Agregar certificados</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form action="{{ route('store_certificado') }}" method="post" class="tablelist-form needs-validation" alt="user-profile-image" enctype="multipart/form-data" autocomplete="off" novalidate>
                @csrf
                <div class="modal-body">
                    <div class="row">

                        <div class="col-12">
                            <div>
                                <label for="alias" class="form-label">Titulo</label>
                                <input type="text" id="alias" name="titulo_certificado" class="form-control" placeholder="Ingresar titulo" required />
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback text-end">
                                    El titulo es necesario
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-3">
                            <div>
                                <label for="alias" class="form-label">Archivo</label>
                                <input type="file" id="alias" name="archivo" class="form-control" placeholder="Ingresar pdf" required />
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback text-end">
                                    El archivo es necesario
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-3">
                            <div>
                                <label for="alias" class="form-label">Tipo</label>
                                <input type="text" id="alias" name="tipo_certificado" class="form-control" placeholder="Ingresar tipo" required />
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback text-end">
                                    El tipo es necesario
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-3 mb-3">
                            <div>
                                <label for="alias" class="form-label">Fecha</label>
                                <input type="date" id="alias" name="fecha_certificado" class="form-control" placeholder="Ingresar fecha" required />
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback text-end">
                                    La fecha es necesario
                                </div>
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
