<div class="modal fade" id="changeStatusDeliveryTrueModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title fs-5 change-status-modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form" action="orders/change-status" method="POST">
                <input type="hidden" class="change-status-id" name="id">
                <div class="modal-body">
                    <div class="mb-2">
                        <select class="form-control change-status" name="status">
                            <option value="Belum Dibayar">Belum Dibayar</option>
                            <option value="Sudah Dibayar">Sudah Dibayar</option>
                            <option value="Dalam Perjalanan">Dalam Perjalanan</option>
                            <option value="Selesai">Selesai</option>
                        </select>
                        <span id="statusError" class="invalid-feedback"></span>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button id="change-status-button" type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="changeStatusDeliveryFalseModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title fs-5 change-status-modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form" action="orders/change-status" method="POST">
                <input type="hidden" class="change-status-id" name="id">
                <div class="modal-body">
                    <div class="mb-2">
                        <select class="form-control change-status" name="status">
                            <option value="Belum Dibayar">Belum Dibayar</option>
                            <option value="Sudah Dibayar">Sudah Dibayar</option>
                            <option value="Siap Diambil">Siap Diambil</option>
                            <option value="Selesai">Selesai</option>
                        </select>
                        <span id="statusError" class="invalid-feedback"></span>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button id="change-status-button" type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
