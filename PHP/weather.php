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
        <section class="mini-weather-dashboards-all">
            <div class="title-of-all-mini-dashboards-all">
                <p class="title-of-all-mini-dashboards">More details of today's weather</p>
            </div>
            <div class="mini-weather-dashboards">
                <div class="mini-weather-dashboard">
                    <div class="mini-weather-dashboard-title">
                        <p>Feels like</p>
                        <div>
                            ikonele termometro
                        </div>
                    </div>
                    <div class="mini-dashboard-main-info">
                        <div class="info">28&#8451;</div>
                        <div class="line-of-temp">
                            <div class="temp-by-celsius">
                                <small>0&#8451;</small>
                                <small>25&#8451;</small>
                                <small>50&#8451;</small>
                            </div>
                            <div class="feels-like-temp-back">
                                <div class="feels-like-temp-progress"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mini-weather-dashboard">
                    <div class="mini-weather-dashboard-title">
                        <p>Wind</p>
                        <div>
                            ikonele puciancio velo
                        </div>
                    </div>
                    <div class="mini-dashboard-main-info">
                        <div class="line-of-wind">
                            <div class="wind-both-numbers-progress">
                                <div class="wind-by-meters">
                                    <small class="wind-1">0</small>
                                    <small class="wind-2">5</small>
                                    <small class="wind-3">10</small>
                                    <small class="wind-4">20</small>
                                    <small class="wind-5">30</small>
                                    <small class="wind-6">40</small>
                                </div>
                                <div class="wind-speed-back">
                                    <div class="wind-speed-progress-1"></div>
                                    <div class="wind-speed-progress-2"></div>
                                    <div class="wind-speed-progress-3"></div>
                                    <div class="wind-speed-progress-4"></div>
                                    <div class="wind-speed-progress-5"></div>
                                </div>
                            </div>
                            <div class="custom-arrow">
                                <div class="arrow-front"></div>
                                <div class="arrow-back"></div>
                            </div>
                        </div>
                        <div class="info">8m/s</div>
                    </div>
                </div>
                <div class="mini-weather-dashboard">
                    <div class="mini-weather-dashboard-title">
                        <p>UV Index</p>
                        <div>
                            ikonele sauls svieciancianti
                        </div>
                    </div>
                    <div class="mini-dashboard-main-info">
                        <div class="info">4 medium</div>
                        <div class="line-of-uv-index">
                            <div class="uv-index-by-range">
                                <small>0-2</small>
                                <small>3-5</small>
                                <small>6-7</small>
                                <small>8-10</small>
                                <small>11+</small>
                            </div>
                            <div class="uv-index-range-back">
                                <div class="uv-index-range-progress">
                                    <div class="uv-index-progress-1"></div>
                                </div>
                                <div class="uv-index-range-progress">
                                    <div class="uv-index-progress-2"></div>
                                </div>
                                <div class="uv-index-range-progress">
                                    <div class="uv-index-progress-3"></div>
                                </div>
                                <div class="uv-index-range-progress">
                                    <div class="uv-index-progress-4"></div>
                                </div>
                                <div class="uv-index-range-progress">
                                    <div class="uv-index-progress-5"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mini-weather-dashboard">
                    <div class="mini-weather-dashboard-title">
                        <p>Chance of Rain</p>
                        <div>
                            ikonele debeselis ir is jo lasas
                        </div>
                    </div>
                    <div class="mini-dashboard-main-info">
                        <div class="info">42%</div>
                        <div class="line-of-chance-of-rain">
                            <div class="chance-of-rain-by-percentage">
                                <small>0%</small>
                                <small>25%</small>
                                <small>50%</small>
                                <small>75%</small>
                                <small>100%</small>
                            </div>
                            <div class="chance-of-rain-back">
                                <div class="chance-of-rain-progress"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mini-weather-dashboard">
                    <div class="mini-weather-dashboard-title">
                        <p>Precipitation</p>
                        <div>
                            ikonele lietus is debeselio
                        </div>
                    </div>
                    <div class="mini-dashboard-main-info">
                        <div class="info">1.4 cm</div>
                        <div class="line-of-precipitation">
                            <div class="precipitation-by-range">
                                <small>0</small>
                                <small>10</small>
                                <small>20</small>
                                <small>30</small>
                                <small>40</small>
                                <small>50</small>
                                <small>60</small>
                                <small>70</small>
                                <small>80</small>
                                <small>90</small>
                            </div>
                            <div class="precipitation-range-back">
                                <div class="precipitation-range-progress">
                                    <div class="precipitation-progress-1"></div>
                                </div>
                                <div class="precipitation-range-progress">
                                    <div class="precipitation-progress-2"></div>
                                </div>
                                <div class="precipitation-range-progress">
                                    <div class="precipitation-progress-3"></div>
                                </div>
                                <div class="precipitation-range-progress">
                                    <div class="precipitation-progress-4"></div>
                                </div>
                                <div class="precipitation-range-progress">
                                    <div class="precipitation-progress-5"></div>
                                </div>
                                <div class="precipitation-range-progress">
                                    <div class="precipitation-progress-6"></div>
                                </div>
                                <div class="precipitation-range-progress">
                                    <div class="precipitation-progress-7"></div>
                                </div>
                                <div class="precipitation-range-progress">
                                    <div class="precipitation-progress-8"></div>
                                </div>
                                <div class="precipitation-range-progress">
                                    <div class="precipitation-progress-9"></div>
                                </div>
                                <div class="precipitation-range-progress">
                                    <div class="precipitation-progress-10"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mini-weather-dashboard">
                    <div class="mini-weather-dashboard-title">
                        <p>Humidity</p>
                        <div>
                            ikonele du dideli lasai vienas po kito
                        </div>
                    </div>
                    <div class="mini-dashboard-main-info">
                        <div class="info">82% bad</div>
                        <div class="line-of-humidity">
                            <div class="humidity-by-range">
                                <small>good</small>
                                <small>normal</small>
                                <small>bad</small>
                            </div>
                            <div class="humidity-range-back">
                                <div class="humidity-range-progress">
                                    <div class="humidity-progress-1"></div>
                                </div>
                                <div class="humidity-range-progress">
                                    <div class="humidity-progress-2"></div>
                                </div>
                                <div class="humidity-range-progress">
                                    <div class="humidity-progress-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="weathers-maps">
            <div class="weather-map-title">
                <p>Weather Map</p>
            </div>
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