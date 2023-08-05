<div class="modal fade" id="formModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div id="modalHeader" class="modal-header">
                <h4 class="modal-title fs-5" id="modalTitle"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form" method="POST">
                <input type="hidden" id="id" name="id">
                <div class="modal-body">
                    <div class="mb-2">
                        <label for="category" class="form-label">Kategori<strong class="text-danger">*</strong>
                            <span id="nameError" class="text-danger"></span></label>
                        <input type="text" class="form-control" id="category" name="category"
                            placeholder="Nama Kategori">
                        <span id="categoryError" class="invalid-feedback"></span>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button id="button" type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
