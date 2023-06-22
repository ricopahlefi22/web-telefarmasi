<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="ltn__top-bar-menu">
                <ul>
                    <li>
                        <a href="mailto:{{ App\Models\WebConfig::first()->email }}?Subject=Konsultasi">
                            <i class="icon-mail"></i>
                            {{ App\Models\WebConfig::first()->email }}
                        </a>
                    </li>
                    <li>
                        <a href="https://maps.google.com/?q={{ App\Models\WebConfig::first()->latitude }},{{ App\Models\WebConfig::first()->longitude }}"
                            target="_blank">
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
                                    @if (!empty(App\Models\WebConfig::first()->instagram))
                                        <li>
                                            <a href="{{ App\Models\WebConfig::first()->instagram }}" title="Instagram">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                    @endif
                                    @if (!empty(App\Models\WebConfig::first()->facebook))
                                        <li>
                                            <a href="{{ App\Models\WebConfig::first()->facebook }}" title="Facebook">
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                        </li>
                                    @endif

                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
