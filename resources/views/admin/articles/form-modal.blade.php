<div class="modal fade" id="formModal">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div id="modalHeader" class="modal-header">
                <h4 class="modal-title fs-5" id="modalTitle"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form" action="articles/store" method="POST" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="mb-2">
                                <label for="image" class="form-label">Gambar<strong class="text-danger">*</strong>
                                    <span id="imageError" class="text-danger"></span></label>
                                <input type="file" class="form-control" id="image" name="image">
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="mb-2">
                                <label for="title" class="form-label">Judul<strong class="text-danger">*</strong>
                                    <span id="titleError" class="text-danger"></span></label>
                                <input type="text" class="form-control" id="title" name="title"
                                    placeholder="Judul Berita">
                            </div>
                            <div class="mb-2">
                                <label for="body" class="form-label">Isi<strong class="text-danger">*</strong>
                                    <span id="bodyError" class="text-danger"></span></label>
                                <textarea name="body" id="body" rows="10" class="form-control" placeholder="Isi Berita"></textarea>
                            </div>
                        </div>
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
