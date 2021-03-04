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
                    <p id="backwards"></p>
                    <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                </div>
                <div class="forwards">
                    <p id="forwards"></p>
                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                </div>
            </div>
            <div class="todays-date">
                <p id="todaysWeekday"></p>
                <p id="todaysDate"></p>
            </div>
            <div class="first-city">
                <div class="main-info-first-city">
                    <h1 class="selected-city-first" id="mainFirstSelectedCity"></h1>
                    <div class="info-about-todays-weather">
                        <p id="mainWeatherDesc"></p>
                        <img id="mainWeathersIcons" src="" alt="Weather image not found">
                    </div>
                    <p class="temp-by-celsius" id="mainTempFirstCity"></p>
                </div>
                <div class="night-temp-sunrise-sundown-first">
                    <div class="night-first-city">
                        <img src="../Images/Weather/002-moon.png" alt="Sunset">
                        <p>27&#8451;</p>
                    </div>
                    <div class="sunrise-first">
                        <div class="sunrise-up-first">
                            <img src="../Images/Weather/004-cloudy.png" alt="Sunrise">
                            <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
                            <p id="sunrise"></p>
                        </div>
                        <div class="sunrise-down-first">
                            <img src="../Images/Weather/002-half-moon.png" alt="Sunset">
                            <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
                            <p id="sunset"></p>
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
                    <!-- <div class="night-temp-second-city">
                        <i class="fa fa-moon-o" aria-hidden="true"></i>
                        <p>27&#8451;</p>
                    </div> -->
                    <div class="sunrise-second">
                        <div class="sunrise-up-second">
                            <img src="../Images/Weather/004-cloudy.png" alt="Sunrise">
                            <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
                            <p>time</p>
                        </div>
                        <div class="sunrise-down-second">
                            <img src="../Images/Weather/002-half-moon.png" alt="Sunset">
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
                    <!-- <div class="night-temp-third-city">
                        <i class="fa fa-moon-o" aria-hidden="true"></i>
                        <p>27&#8451;</p>
                    </div> -->
                    <div class="sunrise-third">
                        <div class="sunrise-up-third">
                            <img src="../Images/Weather/004-cloudy.png" alt="Sunrise">
                            <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
                            <p>time</p>
                        </div>
                        <div class="sunrise-down-third">
                            <img src="../Images/Weather/002-half-moon.png" alt="Sunset">
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
                            <img src="../Images/Weather/005-thermometer.png" alt="Thermometer">
                        </div>
                    </div>
                    <div class="mini-dashboard-main-info">
                        <div class="info" id="feelsLikeTempMini"></div>
                        <div class="line-of-temp">
                            <div class="temp-by-celsius">
                                <small>-50&#8451;</small>
                                <small>-25&#8451;</small>
                                <small>0&#8451;</small>
                                <small>25&#8451;</small>
                                <small>50&#8451;</small>
                            </div>
                            <div class="feels-like-temp-back">
                                <div class="feels-like-temp-progress" id='feelsLikeTempProgress'></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mini-weather-dashboard">
                    <div class="mini-weather-dashboard-title">
                        <p>Wind</p>
                        <div>
                            <img src="../Images/Weather/003-wind.png" alt="Wind">
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
                        <div class="info" id="windSpeedMini">8m/s</div>
                    </div>
                </div>
                <div class="mini-weather-dashboard">
                    <div class="mini-weather-dashboard-title">
                        <p>UV Index</p>
                        <div>
                            <img src="../Images/Weather/007-sun-1.png" alt="Strong sun">
                        </div>
                    </div>
                    <div class="mini-dashboard-main-info">
                        <div class="info" id="uvIndexMini">4 medium</div>
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
                            <img src="../Images/Weather/006-rain.png" alt="Chance of rain">
                        </div>
                    </div>
                    <div class="mini-dashboard-main-info">
                        <div class="info" id="chanceOfRainMini">42%</div>
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
                            <img src="../Images/Weather/008-clouds.png" alt="Precipitation">
                        </div>
                    </div>
                    <div class="mini-dashboard-main-info">
                        <div class="info" id="precipitationpMini">1.4 cm</div>
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
                            <img src="../Images/Weather/004-water-drop.png" alt="Humidity">
                        </div>
                    </div>
                    <div class="mini-dashboard-main-info">
                        <div class="info" id="humidityMini">82% bad</div>
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
                <img id="weatherMap" src="https://tile.openweathermap.org/map/temp_new/7/72/40.png?appid=d56f587af66879843da809947c13fb2f" alt="">
            </div>
        </section>
    </section>
</section>
<?php
// Includes - Footer ========================================
require_once './Inc/footer.php';
?>