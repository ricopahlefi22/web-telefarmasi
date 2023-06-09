<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="ltn__top-bar-menu">
                <ul>
                    <li>
                        <a
                            href="mailto:{{ App\Models\WebConfig::first()->email }}?Subject=Konsultasi">
                            <i class="icon-mail"></i>
                            {{ App\Models\WebConfig::first()->email }}
                        </a>
                    </li>
                    <li>
                        <a href="https://maps.google.com/?q={{ App\Models\WebConfig::first()->latitude }},{{ App\Models\WebConfig::first()->longitude }}" target="_blank">
                            <i class="icon-placeholder"></i>
                            {{ App\Models\WebConfig::first()->address }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-5">
            <div class="top-bar-right text-end">
                <div class="ltn__top-bar-menu">
                    <ul>
                        <li>
                            <!-- ltn__social-media -->
                            <div class="ltn__social-media">
                                <ul>
                                    <li><a href="https://www.instagram.com/apotekdestafarma/" title="Instagram"><i
                                                class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://wa.me/6285171004535?text?=Halo" title="Whatsapp"><i
                                                class="fab fa-whatsapp"></i></a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
