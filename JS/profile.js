"use strict"

// Inputs ============================================
const firstName = document.querySelector('#fName');
const lastName = document.querySelector('#lName');
const username = document.querySelector('#username');
const email = document.querySelector('#pEmail');
const address = document.querySelector('#pAddress');
const country = document.querySelector('#country');
const city = document.querySelector('#city');
const city2 = document.querySelector('#city2');
const changePassword = document.querySelector('#changePassword');
const confirmPassword = document.querySelector('#confirmPassword');

firstName.addEventListener('input', firstNameF);
lastName.addEventListener('input', lastNameF);
email.addEventListener('input', emailF);
username.addEventListener('input', usernameF);
address.addEventListener('input', addressF);
country.addEventListener('input', countryF);
city.addEventListener('input', cityF);
city2.addEventListener('input', city2F);
changePassword.addEventListener('input', changePasswordF);
confirmPassword.addEventListener('input', confirmPasswordF);

function firstNameF () {
    const firstNameInput = firstName.value;
    const labelFname = document.querySelector('#labelFname');
    if (firstNameInput.length >= 1) {
        labelFname.style.fontSize = '12px';
        labelFname.style.top = '6%';
        labelFname.style.left = '8%';
    }   else if (firstNameInput.length < 1) {
        labelFname.style.fontSize = '16px';
        labelFname.style.top = '20%';
        labelFname.style.left = '8%';
    }
}

function lastNameF () {
    const lastNameInput = lastName.value;
    const labelLastName = document.querySelector('#labelLastName');
    if (lastNameInput.length >= 1) {
        labelLastName.style.fontSize = '12px';
        labelLastName.style.top = '6%';
        labelLastName.style.left = '8%';
    }   else if (lastNameInput.length < 1) {
        labelLastName.style.fontSize = '16px';
        labelLastName.style.top = '25%';
        labelLastName.style.left = '8%';
    }
}

function usernameF () {
    const usernameInput = username.value;
    const labelUsername = document.querySelector('#labelUsername');
    if (usernameInput.length >= 1) {
        labelUsername.style.fontSize = '12px';
        labelUsername.style.top = '6%';
        labelUsername.style.left = '8%';
    }   else if (usernameInput.length < 1) {
        labelUsername.style.fontSize = '16px';
        labelUsername.style.top = '25%';
        labelUsername.style.left = '8%';
    }
}

function emailF () {
    const emailInput = email.value;
    const labelEmail = document.querySelector('#labelEmail');
    if (emailInput.length >= 1) {
        labelEmail.style.fontSize = '12px';
        labelEmail.style.top = '6%';
        labelEmail.style.left = '8%';
    }   else if (emailInput.length < 1) {
        labelEmail.style.fontSize = '16px';
        labelEmail.style.top = '25%';
        labelEmail.style.left = '8%';
    }
}

function addressF () {
    const addressInput = address.value;
    const labelAddress = document.querySelector('#labelAddress');
    if (addressInput.length >= 1) {
        labelAddress.style.fontSize = '12px';
        labelAddress.style.top = '6%';
        labelAddress.style.left = '8%';
    }   else if (addressInput.length < 1) {
        labelAddress.style.fontSize = '16px';
        labelAddress.style.top = '25%';
        labelAddress.style.left = '8%';
    }
}

function countryF () {
    const countryInput = country.value;
    const labelCountry = document.querySelector('#labelCountry');
    if (countryInput.length >= 1) {
        labelCountry.style.fontSize = '12px';
        labelCountry.style.top = '6%';
        labelCountry.style.left = '8%';
    }   else if (countryInput.length < 1) {
        labelCountry.style.fontSize = '16px';
        labelCountry.style.top = '25%';
        labelCountry.style.left = '8%';
    }
}

function cityF () {
    const cityInput = city.value;
    const labelCity = document.querySelector('#labelCity');
    if (cityInput.length >= 1) {
        labelCity.style.fontSize = '12px';
        labelCity.style.top = '6%';
        labelCity.style.left = '8%';
    }   else if (cityInput.length < 1) {
        labelCity.style.fontSize = '16px';
        labelCity.style.top = '25%';
        labelCity.style.left = '8%';
    }
}

function city2F () {
    const city2Input = city2.value;
    const labelCity2 = document.querySelector('#labelCity2');
    if (city2Input.length >= 1) {
        labelCity2.style.fontSize = '12px';
        labelCity2.style.top = '6%';
        labelCity2.style.left = '8%';
    }   else if (city2Input.length < 1) {
        labelCity2.style.fontSize = '16px';
        labelCity2.style.top = '25%';
        labelCity2.style.left = '8%';
    }
}

function changePasswordF () {
    const changePasswordInput = changePassword.value;
    const labelChangePassword = document.querySelector('#labelChangePassword');
    if (changePasswordInput.length >= 1) {
        labelChangePassword.style.fontSize = '12px';
        labelChangePassword.style.top = '6%';
        labelChangePassword.style.left = '8%';
    }   else if (changePasswordInput.length < 1) {
        labelChangePassword.style.fontSize = '16px';
        labelChangePassword.style.top = '25%';
        labelChangePassword.style.left = '8%';
    }
}

function confirmPasswordF () {
    const confirmPasswordInput = confirmPassword.value;
    const labelConfirmPassword = document.querySelector('#labelRepeatPassword');
    if (confirmPasswordInput.length >= 1) {
        labelConfirmPassword.style.fontSize = '12px';
        labelConfirmPassword.style.top = '6%';
        labelConfirmPassword.style.left = '8%';
    }   else if (confirmPasswordInput.length < 1) {
        labelConfirmPassword.style.fontSize = '16px';
        labelConfirmPassword.style.top = '25%';
        labelConfirmPassword.style.left = '8%';
    }
}