"use strict"

// Variables ============================================
const todaysWeekdayPar = document.querySelector('#todaysWeekday');
const todaysDatePar = document.querySelector('#todaysDate');
const backwards = document.querySelector('#backwards');
const forwards = document.querySelector('#forwards');
const sunrise = document.querySelector('#sunrise');
const sunset = document.querySelector('#sunset');
const mainFirstSelectedCity = document.querySelector('#mainFirstSelectedCity');
const mainWeatherDesc = document.querySelector('#mainWeatherDesc');
const mainWeathersIcons = document.querySelector('#mainWeathersIcons');
const mainTempFirstCity = document.querySelector('#mainTempFirstCity');
const feelsLikeTempMini = document.querySelector('#feelsLikeTempMini');
const windSpeedMini = document.querySelector('#windSpeedMini');
const uvIndexMini = document.querySelector('#uvIndexMini');
const chanceOfRainMini = document.querySelector('#chanceOfRainMini');
const precipitationMini = document.querySelector('#precipitationpMini');
const humidityMini = document.querySelector('#humidityMini');
const feelsLikeTempProgress = document.querySelector('#feelsLikeTempProgress');
const feelsLikeTempWidth = 50;
const weatherMap = document.querySelector('#weatherMap');

// Functions ============================================

// Dates ============================================
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

todaysDate();
setInterval(todaysDate, 1000);
weekdays();
setInterval(weekdays, 43200000);

// Data API ============================================
function getCurrentWeather(cityName) {
    const fetchData = `http://api.openweathermap.org/data/2.5/weather?q=${cityName}&appid=6765b42e098de368f1ef09ee8c3f08eb&units=metric&lang=en`;
    fetch(fetchData)
    .then(function (response) {
        return response.json()
    })
    .then(function (data) {
        console.log(data);

        sun(data.sys.sunrise, data.sys.sunset);
        setInterval(sun, 43200000);

        insertWeatherInformation(data);
        setInterval(insertWeatherInformation, 43200000);
    })
}
    
getCurrentWeather('Vilnius');

// function weatherMaps() {
//     const fetchDataForMaps = 'https://tile.openweathermap.org/map/temp_new/7/72/40.png?appid=d56f587af66879843da809947c13fb2f';
//     console.log(fetch(fetchDataForMaps));
    
//     fetch(fetchDataForMaps)
//     .then(res => {const objectURL = Request.url(res);
// 		weatherMap.src = objectURL;})
//     .then(res => {
// 		const objectURL = Request.url(res);
// 		weatherMap.src = objectURL;
// })
// }

// weatherMaps()

function sun(sunriseAPI, sunsetAPI) {
    
    const sunriseDate = new Date(sunriseAPI * 1000);
    const sunsetDate = new Date(sunsetAPI * 1000);
        
    const myOptions = {
        hour: '2-digit',
        minute: '2-digit'
    };
            
    const sunriseFinalDate = sunriseDate.toLocaleTimeString('lt', myOptions);
    const sunsetFinalDate = sunsetDate.toLocaleString('lt', myOptions);
    
    sunrise.innerHTML = sunriseFinalDate;
    sunset.innerHTML = sunsetFinalDate;
}

// Insert API Data ============================================
function insertWeatherInformation(data) {
    const mainSelectedCityIcons = `http://openweathermap.org/img/wn/${data.weather[0].icon}.png`;
    mainWeatherDesc.innerHTML = data.weather[0].main;
    mainWeathersIcons.src = mainSelectedCityIcons;
    mainFirstSelectedCity.innerHTML = data.name;
    mainTempFirstCity.innerHTML = `${data.main.temp}&#8451;`;

    // Mini dashboards ============================================
    // Feels like ======================
    feelsLikeTempMini.innerHTML = `${data.main.feels_like}&#8451;`;
    const feelsLikeTempFinalWidth = data.main.feels_like + feelsLikeTempWidth;
    feelsLikeTempProgress.style.width = `${feelsLikeTempFinalWidth}%`;

    // Wind ======================
    windSpeedMini.innerHTML = `${data.wind.speed}m/s`;

    // UV Index ======================
    uvIndexMini.innerHTML =

    // Chance of Rain ======================
    chanceOfRainMini.innerHTML = data.rain;

    // Precipitation ======================
    precipitationMini.innerHTML =

    // Humidity ======================
    humidityMini.innerHTML = `${data.main.humidity}%`;
}

