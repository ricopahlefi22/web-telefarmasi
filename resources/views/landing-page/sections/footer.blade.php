<div class="row">
    <div class="col-xl-3 col-md-6 col-sm-6 col-12">
        <div class="footer-widget footer-about-widget">
            <div class="footer-logo">
                <div class="site-logo">
                    <img src="{{ asset('logo.jpeg') }}" alt="Logo">
                </div>
            </div>
            <p>Lorem Ipsum is simply dummy text of the and typesetting industry. Lorem Ipsum is
                dummy text of the printing.</p>
            <div class="footer-address">
                <ul>
                    <li>
                        <div class="footer-address-icon">
                            <i class="icon-placeholder"></i>
                        </div>
                        <div class="footer-address-info">
                            <p>{{ App\Models\WebConfig::first()->address }}</p>
                        </div>
                    </li>
                    <li>
                        <div class="footer-address-icon">
                            <i class="icon-call"></i>
                        </div>
                        <div class="footer-address-info">
                            <p>{{ App\Models\WebConfig::first()->phone_number }}</p>
                        </div>
                    </li>
                    <li>
                        <div class="footer-address-icon">
                            <i class="icon-mail"></i>
                        </div>
                        <div class="footer-address-info">
                            <p>{{ App\Models\WebConfig::first()->email }}</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="ltn__social-media mt-20">
                <ul>
                    <li>
                        <a href="#" title="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Whatsapp">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 col-sm-6 col-12">
        <div class="footer-widget footer-menu-widget clearfix">
            <h4 class="footer-title">Informasi</h4>
            <div class="footer-menu">
                <ul>
                    <li><a href="about.html">Tentang Kami</a></li>
                    <li><a href="locations.html">Lokasi</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="contact.html">Kontak</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 col-sm-6 col-12">
        <div class="footer-widget footer-menu-widget clearfix">
            <h4 class="footer-title">Layanan</h4>
            <div class="footer-menu">
                <ul>
                    <li><a href="order-tracking.html">Order tracking</a></li>
                    <li><a href="wishlist.html">Wish List</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="account.html">My account</a></li>
                    <li><a href="about.html">Terms & Conditions</a></li>
                    <li><a href="about.html">Promotional Offers</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 col-sm-12 col-12">
        <div class="footer-widget footer-newsletter-widget">
            <h4 class="footer-title">Newsletter</h4>
            <p>Subscribe to our weekly Newsletter and receive updates via email.</p>
            <div class="footer-newsletter">
                <form action="#">
                    <input type="email" name="email" placeholder="Email*">
                    <div class="btn-wrapper">
                        <button class="theme-btn-1 btn" type="submit"><i class="fas fa-location-arrow"></i></button>
                    </div>
                </form>
            </div>
            <h5 class="mt-30">We Accept</h5>
            <img src="{{ asset('assets-landing/img/icons/payment-4.png') }}" alt="Payment Image">
        </div>
    </div>
</div>
