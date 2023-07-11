<div class="ltn__modal-area ltn__add-to-cart-modal-area">
    <div class="modal fade" id="add_to_cart_modal" tabindex="-1">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="ltn__quick-view-modal-inner">
                        <div class="modal-product-item">
                            <div class="row">
                                <div class="col-12">
                                    <div class="modal-product-img">
                                        <img id="product_image_in_modal_cart">
                                    </div>
                                    <div class="modal-product-info">
                                        <h5>
                                            <a id="product_name_in_modal_cart" class="link-in-modal"></a>
                                        </h5>
                                        <p class="added-cart"><i class="fa fa-check-circle"></i>
                                            Berhasil ditambahkan ke keranjang
                                        </p>
                                        <div class="btn-wrapper">
                                            <a href="{{ url('cart') }}" class="theme-btn-1 btn btn-effect-1">
                                                Lihat Keranjang
                                            </a>
                                            <a href="{{ url('checkout') }}" class="theme-btn-2 btn btn-effect-2">
                                                Bayar
                                            </a>
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
