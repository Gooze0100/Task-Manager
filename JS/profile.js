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
    }   else {
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
    }   else {
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
    }   else {
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
    }   else {
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
    }   else {
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
    }   else {
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
    }   else {
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

// Avatars ============================================
const avatar1 = document.querySelector('#avatar1');
const avatar2 = document.querySelector('#avatar2');
const avatar3 = document.querySelector('#avatar3');
const avatar4 = document.querySelector('#avatar4');
const avatar5 = document.querySelector('#avatar5');
const avatar6 = document.querySelector('#avatar6');
const avatar7 = document.querySelector('#avatar7');
const avatar8 = document.querySelector('#avatar8');
const avatar9 = document.querySelector('#avatar9');
const avatar10 = document.querySelector('#avatar10');
const avatar11 = document.querySelector('#avatar11');
const avatar12 = document.querySelector('#avatar12');
const selectedAvatar = document.querySelector('#selectedAvatar');

avatar1.addEventListener('click', avatarChange1);
avatar2.addEventListener('click', avatarChange2);
avatar3.addEventListener('click', avatarChange3);
avatar4.addEventListener('click', avatarChange4);
avatar5.addEventListener('click', avatarChange5);
avatar6.addEventListener('click', avatarChange6);
avatar7.addEventListener('click', avatarChange7);
avatar8.addEventListener('click', avatarChange8);
avatar9.addEventListener('click', avatarChange9);
avatar10.addEventListener('click', avatarChange10);
avatar11.addEventListener('click', avatarChange11);
avatar12.addEventListener('click', avatarChange12);

function avatarChange1() {
    selectedAvatar.src = '../Images//Avatars/avatar-1.png';
}

function avatarChange2() {
    selectedAvatar.src = '../Images//Avatars/avatar-2.png';
}

function avatarChange3() {
    selectedAvatar.src = '../Images//Avatars/avatar-3.png';
}

function avatarChange4() {
    selectedAvatar.src = '../Images//Avatars/avatar-4.png';
}

function avatarChange5() {
    selectedAvatar.src = '../Images//Avatars/avatar-5.png';
}

function avatarChange6() {
    selectedAvatar.src = '../Images//Avatars/avatar-6.png';
}

function avatarChange7() {
    selectedAvatar.src = '../Images//Avatars/avatar-7.png';
}

function avatarChange8() {
    selectedAvatar.src = '../Images//Avatars/avatar-8.png';
}

function avatarChange9() {
    selectedAvatar.src = '../Images//Avatars/avatar-9.png';
}

function avatarChange10() {
    selectedAvatar.src = '../Images//Avatars/avatar-10.webp';
}

function avatarChange11() {
    selectedAvatar.src = '../Images//Avatars/avatar-11.webp';
}

function avatarChange12() {
    selectedAvatar.src = '../Images//Avatars/avatar-12.webp';
}

// Themes ============================================
const theme1 = document.querySelector('#theme1');
const theme2 = document.querySelector('#theme2');
const theme3 = document.querySelector('#theme3');
const theme4 = document.querySelector('#theme4');
const theme5 = document.querySelector('#theme5');
const theme6 = document.querySelector('#theme6');
const allBackgroundImage = document.querySelector('#allBackgroundImage');

theme1.addEventListener('click', backgroundChange1);
theme2.addEventListener('click', backgroundChange2);
theme3.addEventListener('click', backgroundChange3);
theme4.addEventListener('click', backgroundChange4);
theme5.addEventListener('click', backgroundChange5);
theme6.addEventListener('click', backgroundChange6);

function backgroundChange1 () {
    allBackgroundImage.style.background = 'rgba(0, 0, 0, 0.3) url(../Images/Themes/theme-1.jpg) no-repeat center';
};

function backgroundChange2 () {
    allBackgroundImage.style.background = 'rgba(0, 0, 0, 0.3) url(../Images/Themes/theme-2.jpg) no-repeat center';
};

function backgroundChange3 () {
    allBackgroundImage.style.background = 'rgba(0, 0, 0, 0.3) url(../Images/Themes/theme-3.jpg) no-repeat center';
};

function backgroundChange4 () {
    allBackgroundImage.style.background = 'rgba(0, 0, 0, 0.3) url(../Images/Themes/theme-4.jpg) no-repeat center';
};

function backgroundChange5 () {
    allBackgroundImage.style.background = 'rgba(0, 0, 0, 0.3) url(../Images/Themes/theme-5.jpg) no-repeat center';
};

function backgroundChange6 () {
    allBackgroundImage.style.background = 'rgba(0, 0, 0, 0.3) url(../Images/Themes/theme-6.jpg) no-repeat center';
};
