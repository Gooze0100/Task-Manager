<?php
// Title ========================================
$title = 'Weather';
// Includes ========================================
require_once './Inc/head.php';
require_once './Inc/main.php';
require_once './Inc/sidebar.php';
require_once './Inc/navigation.php';
?>
<!-- Main Panel ===================================================================== -->
<section class="all-weathers">
    <aside class="weathers-sidebar">
        <section class="main-weathers">
            <div class="select-days">
                <div class="backwards">
                    <p>weekDay JS</p>
                    <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                </div>
                <div class="forwards">
                    <p>weekDay JS</p>
                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                </div>
            </div>
            <div class="todays-date">
                <p>Weekday JS</p>
                <p>Todays date JS</p>
            </div>
            <div class="first-city">
                <div class="main-info-first-city">
                    <h1 class="selected-city-first">Vilnius</h1>
                    <p class="info-about-todays-weather">Sunny</p>
                    <p class="temp-by-celsius">27&#8451;</p>
                </div>
                <div class="night-temp-sunrise-sundown-first">
                    <div class="night-first-city">
                        <i class="fa fa-moon-o" aria-hidden="true"></i>
                        <p>27&#8451;</p>
                    </div>
                    <div class="sunrise-first">
                        <div class="sunrise-up-first">
                            <i class="fa fa-sun-o" aria-hidden="true"></i>
                            <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
                            <p>time</p>
                        </div>
                        <div class="sunrise-down-first">
                            <i class="fa fa-sun-o" aria-hidden="true"></i>
                            <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
                            <p>time</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="additional-weather">
            <div class="second-city">
                <div class="main-info-second-city">
                    <h1 class="selected-second-city">Singapore</h1>
                    <p>27&#8451;</p>
                    <p>Sunny</p>
                </div>
                <div class="night-temp-sunrise-sundown-second">
                    <div class="night-temp-second-city">
                        <i class="fa fa-moon-o" aria-hidden="true"></i>
                        <p>27&#8451;</p>
                    </div>
                    <div class="sunrise-second">
                        <div class="sunrise-up-second">
                            <i class="fa fa-sun-o" aria-hidden="true"></i>
                            <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
                            <p>time</p>
                        </div>
                        <div class="sunrise-down-second">
                            <i class="fa fa-sun-o" aria-hidden="true"></i>
                            <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
                            <p>time</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="third-city">
                <div class="main-info-third-city">
                    <h1 class="selected-third-city">Kretinga</h1>
                    <p>27&#8451;</p>
                    <p>Sunny</p>
                </div>
                <div class="night-temp-sunrise-sundown-third">
                    <div class="night-temp-third-city">
                        <i class="fa fa-moon-o" aria-hidden="true"></i>
                        <p>27&#8451;</p>
                    </div>
                    <div class="sunrise-third">
                        <div class="sunrise-up-third">
                            <i class="fa fa-sun-o" aria-hidden="true"></i>
                            <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
                            <p>time</p>
                        </div>
                        <div class="sunrise-down-third">
                            <i class="fa fa-sun-o" aria-hidden="true"></i>
                            <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
                            <p>time</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </aside>
    <section class="main-todays-weathers-info">
        <section class="upcoming-hours">
            <div class="upcoming-hours-title">
                <p>Upcoming Hours</p>
            </div>
            <div class="weathers-by-hours">
                turetu orai buti bet nera reiks issiaiskinti kaip issitraukti tada tik daryti su css
            </div>
        </section>
        <section class="mini-weather-dashboards">
            <p class="title-of-all-mini-dashboards">More details of today's weather</p>
            <div class="mini-weather-dashboard">
                <div class="mini-weather-dashboard-title">
                    <p>Feels like</p>
                    <div>
                        ikonele termometro
                    </div>
                </div>
                <div class="info">28&#8451;</div>
                <div class="line-of-temp">linija su temp nuo 0 burbuliukas iki 50 burbuliukas</div>
            </div>
            <div class="mini-weather-dashboard">
                <div class="mini-weather-dashboard-title">
                    <p>Wind</p>
                    <div>
                        ikonele puciancio velo
                    </div>
                </div>
                <div class="line-of-temp">apskritimas su rodykle ir m/h matuojama nuo 0 iki 40 ar daugiau</div>
                <div class="info">8km/h</div>
            </div>
            <div class="mini-weather-dashboard">
                <div class="mini-weather-dashboard-title">
                    <p>UV Index</p>
                    <div>
                        ikonele saules svieciancions
                    </div>
                </div>
                <div class="info">4 medium</div>
                <div class="line-of-temp">linija is mazu burbuliuku ir skaiciukai virsuje po du suskirstyti nuo 0 iki 11+ </div>
            </div>
            <div class="mini-weather-dashboard">
                <div class="mini-weather-dashboard-title">
                    <p>Chance of Rain</p>
                    <div>
                        ikonele debeselis ir is jo lasas
                    </div>
                </div>
                <div class="info">42%</div>
                <div class="line-of-temp">linija su procentais nuo 0% burbuliukas iki 100%</div>
            </div>
            <div class="mini-weather-dashboard">
                <div class="mini-weather-dashboard-title">
                    <p>Precipitation</p>
                    <div>
                        ikonele lietus is debeselio
                    </div>
                </div>
                <div class="info">1.4 cm</div>
                <div class="line-of-temp">linija sudaryta is burbuliuku nuo 0 iki 90 kas desimti burbuliukai</div>
            </div>
            <div class="mini-weather-dashboard">
                <div class="mini-weather-dashboard-title">
                    <p>Humidity</p>
                    <div>
                        ikonele du dideli lasai vienas po kito
                    </div>
                </div>
                <div class="info">82% bad</div>
                <div class="line-of-temp">linija sudaryta is triju burbuliuku su uzrasais good normal bad</div>
            </div>
        </section>
        <section class="weathers-map">
            <div class="weather-map">
                sukurti kazkoki map tik paziureti kaip jis atsivaizduoja :)
            </div>
        </section>
    </section>
</section>
<?php
// Includes - Footer ========================================
require_once './Inc/footer.php';
?>