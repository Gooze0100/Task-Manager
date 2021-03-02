"use strict"

// Variables ============================================
const todaysWeekdayPar = document.querySelector('#todaysWeekday');
const todaysDatePar = document.querySelector('#todaysDate');

// Funcions ============================================

function todaysDate() {
        const now = new Date();
    
        const myOptions = {
            // weekday: 'long',
            year: 'numeric',
            month: 'short',
            day: 'numeric',
            hour: '2-digit',
            minute: '2-digit',
        }
    
        const localDate = now.toLocaleString('lt', myOptions);
        todaysDatePar.innerHTML = localDate;

    }
    setInterval(todaysDate, 60000);
    todaysDate();


function getCurrentWeather(cityName) {
    const fetchData = `http://api.openweathermap.org/data/2.5/weather?q=${cityName}&appid=6765b42e098de368f1ef09ee8c3f08eb&units=metric&lang=en`;
    fetch(fetchData)
    .then(function (response) {
        return response.json()
    })
    .then(function (data) {
        console.log(data);
    })
}

getCurrentWeather('Vilnius')

function insertWeatherInormation(info) {

}

