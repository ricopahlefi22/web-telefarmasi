<div class="ltn__modal-area ltn__quick-view-modal-area">
    <div class="modal fade" id="quick_view_modal" tabindex="-1">
        <div class="modal-dialog modal-lg" role="document">
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
                                <div class="col-lg-6 col-12">
                                    <div class="modal-product-img">
                                        <img id="product_image_in_modal">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="modal-product-info" style="margin-top: 20px;">
                                        <h3>
                                            <a id="product_name_in_modal" class="link-in-modal"></a>
                                        </h3>
                                        <div class="product-price">
                                            <span id="product_price_in_modal"></span>
                                        </div>
                                        <hr>
                                        <div class="modal-product-brief">
                                            <p>Pastikan anda sudah mengetahui obat yang dibutuhkan demi menghindari
                                                hal-hal yang tidak diinginkan.</p>
                                        </div>
                                        <div class="ltn__product-details-menu-2">
                                            <form id="addToCartForm">
                                                <input id="product_id_in_modal" type="hidden" name="product_id">
                                                <ul>
                                                    <li>
                                                        <div class="cart-plus-minus">
                                                            <input type="text" value="1" name="quantity"
                                                                class="cart-plus-minus-box">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        @if (Auth::check())
                                                            <button type="submit" class="theme-btn-1 btn btn-effect-1"
                                                                title="Tambah Ke Keranjang">
                                                                <i class="fas fa-shopping-cart"></i>
                                                                <span>Tambah Ke Keranjang</span>
                                                            </button>
                                                        @else
                                                            <a href="{{ url('login') }}"
                                                                class="theme-btn-1 btn btn-effect-1"
                                                                title="Tambah Ke Keranjang">
                                                                <i class="fas fa-shopping-cart"></i>
                                                                <span>Tambah Ke Keranjang</span>
                                                            </a>
                                                        @endif
                                                    </li>
                                                </ul>
                                            </form>
                                        </div>
                                        <hr>
                                        <div class="ltn__social-media">
                                            <ul>
                                                <li>Bagikan:</li>
                                                <li>
                                                    <a href="javascript:void(0)" title="Facebook">
                                                        <i class="fab fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" title="Whatsapp">
                                                        <i class="fab fa-whatsapp"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" title="Instagram">
                                                        <i class="fab fa-instagram"></i>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                        <label class="float-end mb-0">
                                            <a class="text-decoration link-in-modal">
                                                <small>Lihat Detail</small>
                                            </a>
                                        </label>
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
