"use strict"

// Functions ============================================

// Dates ============================================
const todaysDatePar = document.querySelector('#todaysDate');
const todaysWeekdayPar = document.querySelector('#todaysWeekday');
function todaysDate() {
    const now = new Date();

    const myOptions1 = {
        year: 'numeric',
        month: 'short',
        day: 'numeric',
        hour: '2-digit',
        minute: '2-digit',
    };
    
    const myOptions2 = {
        weekday: 'long'
    };
    
    const localDate = now.toLocaleString('lt', myOptions1);
    todaysDatePar.innerHTML = localDate;

    const localWeekday = now.toLocaleString('en', myOptions2);
    todaysWeekdayPar.innerHTML = localWeekday;
}

todaysDate();
setInterval(todaysDate, 1000);

const backwards = document.querySelector('#backwards');
const forwards = document.querySelector('#forwards');

function weekdays() {
    const myOptions = {
        weekday: 'long'
    };

    const weekdayForwards = new Date();
    weekdayForwards.setDate(weekdayForwards.getDate() + 1);

    const weekdayBackwards = new Date();
    weekdayBackwards.setDate(weekdayBackwards.getDate() - 1);

    const weekDayBackward = weekdayBackwards.toLocaleString('en', myOptions);
    const weekDayForward = weekdayForwards.toLocaleString('en', myOptions);

    backwards.innerHTML = weekDayBackward;
    forwards.innerHTML = weekDayForward;
}

weekdays();
setInterval(weekdays, 43200000);

// Data API ============================================
function getOneCallWeather(lat, lon) {
    const fetchData = `https://api.openweathermap.org/data/2.5/onecall?lat=${lat}&lon=${lon}&appid=dee7b9e270947e7bde137b5599faa5bf&units=metric&lang=en`;
    fetch(fetchData)
    .then(function (resp) {
        return resp.json();
    })
    .then(function (data) {
        console.log(data);

        sun(data.current.sunrise, data.current.sunset);
        setInterval(sun, 43200000);

        insertDataFirstCitySidebar(data);
        setInterval(insertDataFirstCitySidebar, 43200000);

        weatherByHours(data);
        setInterval(weatherByHours, 3600000);

        insertWeatherInfoInMiniDashboards(data);
        setInterval(insertWeatherInfoInMiniDashboards, 43200000);
    })
};
getOneCallWeather(54.687157, 25.279652);


// automatic location ==========================================
// const demoDiv = document.querySelector('#demo');
// function getLocation() {
//     if (navigator.geolocation) {
//         navigator.geolocation.getCurrentPosition(showPosition);
//     }   else {
//         demoDiv.innerHTML = 'Geolocation is not supported by this browser.';
//     }
// }

// function showPosition(position) {
//     demoDiv.innerHTML = 'Latitude: ' + position.coords.latitude + '<br>Longitude: ' + position.coords.longitude;
// }


// Weather maps ==========================================
const weatherMap = document.querySelector('#weatherMap');
let map;

function initMap() {
    map = new google.maps.Map(weatherMap, {
        center: { lat: 55.2147363, lng: 23.481464 },
        zoom: 7,
      });
}

function weatherMaps() {
    const fetchDataForMaps = 'https://tile.openweathermap.org/map/temp_new/7/72/40.png?appid=d56f587af66879843da809947c13fb2f';
    console.log(fetch(fetchDataForMaps));
    
    fetch(fetchDataForMaps)
    .then(res => {const objectURL = Request.url(res);
		weatherMap.src = objectURL;})
    .then(res => {
		const objectURL = Request.url(res);
		weatherMap.src = objectURL;
    })
}

// weatherMaps()

// Variables Time ============================================
const sunrise = document.querySelector('#sunrise');
const sunset = document.querySelector('#sunset');

// Time function ============================================
function changeTime(date) {
    const changedDate = new Date(date * 1000);
    
    const myOptions = {
        hour: '2-digit',
        minute: '2-digit'
    };
    
    return changedDate.toLocaleTimeString('lt', myOptions);
}

function getIcons(id) {
    return `http://openweathermap.org/img/wn/${id}.png`;
}

function sun(sunriseAPI, sunsetAPI) {
    sunrise.innerHTML = changeTime(sunriseAPI);
    sunset.innerHTML = changeTime(sunsetAPI);
}


// Insert API Data ============================================

// Variables Sidebar ============================================
const mainFirstSelectedCity = document.querySelector('#mainFirstSelectedCity');
const mainWeatherDesc = document.querySelector('#mainWeatherDesc');
const mainWeathersIcons = document.querySelector('#mainWeathersIcons');
const mainTempFirstCity = document.querySelector('#mainTempFirstCity');
const nightTempFirstCity = document.querySelector('#nightTempFirstCity');

// Sidebar function ============================================
function insertDataFirstCitySidebar(data) {
    mainWeathersIcons.src = getIcons(data.current.weather[0].icon);

    mainWeatherDesc.innerHTML = data.current.weather[0].main;
    mainFirstSelectedCity.innerHTML = 'Vilnius Turbut';
    mainTempFirstCity.innerHTML = `${data.current.temp}&#8451;`;
    nightTempFirstCity.innerHTML = `${data.daily[0].temp.night}&#8451;`;
}

// Variables weather by hours ============================================
const nextHour = document.querySelector('#nextHour');
const previousHour = document.querySelector('#previousHour');

const weatherByHoursRainBar1 = document.querySelector('#weatherByHoursRainBar1');
const weatherByHoursRainBar2 = document.querySelector('#weatherByHoursRainBar2');
const weatherByHoursRainBar3 = document.querySelector('#weatherByHoursRainBar3');
const weatherByHoursRainBar4 = document.querySelector('#weatherByHoursRainBar4');
const weatherByHoursRainBar5 = document.querySelector('#weatherByHoursRainBar5');
const weatherByHoursRainBar6 = document.querySelector('#weatherByHoursRainBar6');
const weatherByHoursRainBar7 = document.querySelector('#weatherByHoursRainBar7');
const weatherByHoursRainBar8 = document.querySelector('#weatherByHoursRainBar8');
const weatherByHoursRainBar9 = document.querySelector('#weatherByHoursRainBar9');


// Weather by hours function ============================================
function weatherByHours(data) {

    nextHour.addEventListener('click', nextHours);
    previousHour.addEventListener('click', previousHours);

    function nextHours() {
        let i = 0;
        let j = 1;
        console.log(i++, j++);
    }

    function previousHours() {
        console.log('clicked');
    }

    let i = 0;
    let j = 1;
    let k = 1;
    // let arrLength = data.hourly.length / 4.8

    for(i, j, k; i < 10, j <= 10, k <= 10; i++, j++, k++) {
        document.querySelector(`#weatherByHour${j}`).innerHTML = changeTime(data.hourly[i].dt);
        document.querySelector(`#weatherByHoursIcon${j}`).src = getIcons(data.hourly[i].weather[0].icon);
        document.querySelector(`#weatherByHoursInfo${j}`).innerHTML = `${Math.round(data.hourly[i].temp)}&#8451;`;
        // document.querySelector(`#weatherByHoursRainBar${j}`).style.height = `${(data.hourly[i].pop + data.hourly[k].pop) / 2}%`;
        document.querySelector(`#weatherByHoursRain${j}`).innerHTML = `${Math.round(data.hourly[i].pop)}%`
    }

    weatherByHoursRainBar1.style.height = `${(data.hourly[0].pop + data.hourly[1].pop) / 2}%`;
    weatherByHoursRainBar2.style.height = `${(data.hourly[1].pop + data.hourly[2].pop) / 2}%`;
    weatherByHoursRainBar3.style.height = `${(data.hourly[2].pop + data.hourly[3].pop) / 2}%`;
    weatherByHoursRainBar4.style.height = `${(data.hourly[3].pop + data.hourly[4].pop) / 2}%`;
    weatherByHoursRainBar5.style.height = `${(data.hourly[4].pop + data.hourly[5].pop) / 2}%`;
    weatherByHoursRainBar6.style.height = `${(data.hourly[5].pop + data.hourly[6].pop) / 2}%`;
    weatherByHoursRainBar7.style.height = `${(data.hourly[6].pop + data.hourly[7].pop) / 2}%`;
    weatherByHoursRainBar8.style.height = `${(data.hourly[7].pop + data.hourly[8].pop) / 2}%`;
    weatherByHoursRainBar9.style.height = `${(data.hourly[8].pop + data.hourly[9].pop) / 2}%`;

}

// Variables Mini Dashboards ============================================
const feelsLikeTempMini = document.querySelector('#feelsLikeTempMini');
const feelsLikeTempProgress = document.querySelector('#feelsLikeTempProgress');
const feelsLikeTempWidth = 50;

const windSpeedMini = document.querySelector('#windSpeedMini');

const uvIndexMini = document.querySelector('#uvIndexMini');
const uvI1 = document.querySelector('#uvI1');
const uvI2 = document.querySelector('#uvI2');
const uvI3 = document.querySelector('#uvI3');
const uvI4 = document.querySelector('#uvI4');
const uvI5 = document.querySelector('#uvI5');

const chanceOfRainMini = document.querySelector('#chanceOfRainMini');
const chanceOfRainBar = document.querySelector('#chanceOfRainBar');

const precipitationMini = document.querySelector('#precipitationMini');
const precipitationBar1 = document.querySelector('#precipitationBar1');
const precipitationBar2 = document.querySelector('#precipitationBar2');
const precipitationBar3 = document.querySelector('#precipitationBar3');
const precipitationBar4 = document.querySelector('#precipitationBar4');
const precipitationBar5 = document.querySelector('#precipitationBar5');
const precipitationBar6 = document.querySelector('#precipitationBar6');
const precipitationBar7 = document.querySelector('#precipitationBar7');
const precipitationBar8 = document.querySelector('#precipitationBar8');
const precipitationBar9 = document.querySelector('#precipitationBar9');
const precipitationBar10 = document.querySelector('#precipitationBar10');

const humidityMini = document.querySelector('#humidityMini');
const humidityBar1 = document.querySelector('#humidityBar1');
const humidityBar2 = document.querySelector('#humidityBar2');
const humidityBar3 = document.querySelector('#humidityBar3');

// Mini dashboards function ============================================
function insertWeatherInfoInMiniDashboards(data) {
    // Feels like ======================
    feelsLikeTempMini.innerHTML = `${data.current.feels_like}&#8451;`;
    const feelsLikeTempFinalWidth = data.current.feels_like + feelsLikeTempWidth;
    feelsLikeTempProgress.style.width = `${feelsLikeTempFinalWidth}%`;

    // Wind ======================
    windSpeedMini.innerHTML = `${data.current.wind_speed}m/s`;

    // UV Index ======================
    if (data.current.uvi < 2) {
        uvIndexMini.innerHTML = `${data.current.uvi} Low`
        uvI1.style.width = `${data.current.uvi * 20}%`;
        uvI2.style.width = '0%';
        uvI3.style.width = '0%';
        uvI4.style.width = '0%';
        uvI5.style.width = '0%';
    }   else if (data.current.uvi > 2 && data.current.uvi < 5) {
        uvIndexMini.innerHTML = `${data.current.uvi} Medium`
        uvI1.style.width = '100%';
        uvI2.style.width = `${data.current.uvi * 20}%`;
        uvI3.style.width = '0%';
        uvI4.style.width = '0%';
        uvI5.style.width = '0%';
    }   else if (data.current.uvi > 5 && data.current.uvi < 7) {
        uvIndexMini.innerHTML = `${data.current.uvi} Medium`
        uvI1.style.width = '100%';
        uvI2.style.width = '100%';
        uvI3.style.width = `${data.current.uvi * 20}%`;
        uvI4.style.width = '0%';
        uvI5.style.width = '0%';
    }   else if (data.current.uvi > 7 && data.current.uvi < 10) {
        uvIndexMini.innerHTML = `${data.current.uvi} High`
        uvI1.style.width = '100%';
        uvI2.style.width = '100%';
        uvI3.style.width = '100%';
        uvI4.style.width = `${data.current.uvi * 20}%`;
        uvI5.style.width = '0%';
    }   else if (data.current.uvi > 10) {
        uvIndexMini.innerHTML = `${data.current.uvi} High`
        uvI1.style.width = '100%';
        uvI2.style.width = '100%';
        uvI3.style.width = '100%';
        uvI4.style.width = '100%';
        uvI5.style.width = `${data.current.uvi * 20}%`;
    }

    // Probability of precipitation ======================
    chanceOfRainMini.innerHTML = `${data.hourly[0].pop}%`;
    chanceOfRainBar.style.width = `${data.hourly[0].pop}%`;

    // Precipitation ======================
    precipitationMini.innerHTML = `${data.minutely[0].precipitation * 10}cm`;
    if ((data.minutely[0].precipitation * 10) < 1) {
        precipitationBar1.style.width = `${data.minutely[0].precipitation * 10}%`;
        precipitationBar2.style.width = '0%';
        precipitationBar3.style.width = '0%';
        precipitationBar4.style.width = '0%';
        precipitationBar5.style.width = '0%';
        precipitationBar6.style.width = '0%';
        precipitationBar7.style.width = '0%';
        precipitationBar8.style.width = '0%';
        precipitationBar9.style.width = '0%';
        precipitationBar10.style.width = '0%';
    }   else if ((data.minutely[0].precipitation * 10) > 1 && (data.minutely[0].precipitation * 10) < 2) {
        precipitationBar1.style.width = '100%';
        precipitationBar2.style.width = `${data.minutely[0].precipitation * 10}%`;
        precipitationBar3.style.width = '0%';
        precipitationBar4.style.width = '0%';
        precipitationBar5.style.width = '0%';
        precipitationBar6.style.width = '0%';
        precipitationBar7.style.width = '0%';
        precipitationBar8.style.width = '0%';
        precipitationBar9.style.width = '0%';
        precipitationBar10.style.width = '0%';
    }   else if ((data.minutely[0].precipitation * 10) > 2 && (data.minutely[0].precipitation * 10) < 3) {
        precipitationBar1.style.width = '100%';
        precipitationBar2.style.width = '100%';
        precipitationBar3.style.width = `${data.minutely[0].precipitation * 10}%`;
        precipitationBar4.style.width = '0%';
        precipitationBar5.style.width = '0%';
        precipitationBar6.style.width = '0%';
        precipitationBar7.style.width = '0%';
        precipitationBar8.style.width = '0%';
        precipitationBar9.style.width = '0%';
        precipitationBar10.style.width = '0%';
    }   else if ((data.minutely[0].precipitation * 10) > 3 && (data.minutely[0].precipitation * 10) < 4) {
        precipitationBar1.style.width = '100%';
        precipitationBar2.style.width = '100%';
        precipitationBar3.style.width = '100%';
        precipitationBar4.style.width = `${data.minutely[0].precipitation * 10}%`;
        precipitationBar5.style.width = '0%';
        precipitationBar6.style.width = '0%';
        precipitationBar7.style.width = '0%';
        precipitationBar8.style.width = '0%';
        precipitationBar9.style.width = '0%';
        precipitationBar10.style.width = '0%';
    }   else if ((data.minutely[0].precipitation * 10) > 4 && (data.minutely[0].precipitation * 10) < 5) {
        precipitationBar1.style.width = '100%';
        precipitationBar2.style.width = '100%';
        precipitationBar3.style.width = '100%';
        precipitationBar4.style.width = '100%';
        precipitationBar5.style.width = `${data.minutely[0].precipitation * 10}%`;
        precipitationBar6.style.width = '0%';
        precipitationBar7.style.width = '0%';
        precipitationBar8.style.width = '0%';
        precipitationBar9.style.width = '0%';
        precipitationBar10.style.width = '0%';
    }   else if ((data.minutely[0].precipitation * 10) > 5 && (data.minutely[0].precipitation * 10) < 6) {
        precipitationBar1.style.width = '100%';
        precipitationBar2.style.width = '100%';
        precipitationBar3.style.width = '100%';
        precipitationBar4.style.width = '100%';
        precipitationBar5.style.width = '100%';
        precipitationBar6.style.width = `${data.minutely[0].precipitation * 10}%`;
        precipitationBar7.style.width = '0%';
        precipitationBar8.style.width = '0%';
        precipitationBar9.style.width = '0%';
        precipitationBar10.style.width = '0%';
    }   else if ((data.minutely[0].precipitation * 10) > 6 && (data.minutely[0].precipitation * 10) < 7) {
        precipitationBar1.style.width = '100%';
        precipitationBar2.style.width = '100%';
        precipitationBar3.style.width = '100%';
        precipitationBar4.style.width = '100%';
        precipitationBar5.style.width = '100%';
        precipitationBar6.style.width = '100%';
        precipitationBar7.style.width = `${data.minutely[0].precipitation * 10}%`;
        precipitationBar8.style.width = '0%';
        precipitationBar9.style.width = '0%';
        precipitationBar10.style.width = '0%';
    }   else if ((data.minutely[0].precipitation * 10) > 7 && (data.minutely[0].precipitation * 10) < 8) {
        precipitationBar1.style.width = '100%';
        precipitationBar2.style.width = '100%';
        precipitationBar3.style.width = '100%';
        precipitationBar4.style.width = '100%';
        precipitationBar5.style.width = '100%';
        precipitationBar6.style.width = '100%';
        precipitationBar7.style.width = '100%';
        precipitationBar8.style.width = `${data.minutely[0].precipitation * 10}%`;
        precipitationBar9.style.width = '0%';
        precipitationBar10.style.width = '0%';
    }   else if ((data.minutely[0].precipitation * 10) > 8 && (data.minutely[0].precipitation * 10) < 9) {
        precipitationBar1.style.width = '100%';
        precipitationBar2.style.width = '100%';
        precipitationBar3.style.width = '100%';
        precipitationBar4.style.width = '100%';
        precipitationBar5.style.width = '100%';
        precipitationBar6.style.width = '100%';
        precipitationBar7.style.width = '100%';
        precipitationBar8.style.width = '100%';
        precipitationBar9.style.width = `${data.minutely[0].precipitation * 10}%`;
        precipitationBar10.style.width = '0%';
    }   else if ((data.minutely[0].precipitation * 10) > 9) {
        precipitationBar1.style.width = '100%';
        precipitationBar2.style.width = '100%';
        precipitationBar3.style.width = '100%';
        precipitationBar4.style.width = '100%';
        precipitationBar5.style.width = '100%';
        precipitationBar6.style.width = '100%';
        precipitationBar7.style.width = '100%';
        precipitationBar8.style.width = '100%';
        precipitationBar9.style.width = '100%';
        precipitationBar10.style.width = `${data.minutely[0].precipitation * 10}%`;
    }

    // Humidity ======================
    if (data.current.humidity < 33.33) {
        humidityMini.innerHTML = `${data.current.humidity}% Good`;
        humidityBar1.style.width = `${data.current.humidity}%`;
        humidityBar2.style.width = '0%';
        humidityBar3.style.width = '0%';
    }   else if (data.current.humidity > 33.33 && data.current.humidity < 66.66) {
        humidityMini.innerHTML = `${data.current.humidity}% Normal`;
        humidityBar1.style.width = '100%';
        humidityBar2.style.width = `${data.current.humidity}%`;
        humidityBar3.style.width = '0%';
    }   else if (data.current.humidity > 66.66) {
        humidityMini.innerHTML = `${data.current.humidity}% Bad`;
        humidityBar1.style.width = '100%';
        humidityBar2.style.width = '100%';
        humidityBar3.style.width = `${data.current.humidity}%`;
    }
}

