"use strict"

// Inputs ============================================
const firstName = document.querySelector('#fName');
const email = document.querySelector('#pEmail');
const lastName = document.querySelector('#lName');
const country = document.querySelector('#country');
const username = document.querySelector('#username');
const city = document.querySelector('#city');
const changePassword = document.querySelector('#changePassword');
const confirmPassword = document.querySelector('#confirmPassword');

firstName.addEventListener('input', firstNameF);

function firstNameF () {
    const fName = firstName.value;
    if (fName.length < 1) {

    }
}