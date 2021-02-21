"use strict"

const signInTitle = document.querySelector('#signInTitle');
const signUpTitle = document.querySelector('#signUpTitle');
const signIn = document.querySelector('#signIn');
const signUp = document.querySelector('#signUp');
const memb = document.querySelector('#alreadyMemb');

signInTitle.addEventListener('click', signInFunc);
signUpTitle.addEventListener('click', signUpFunc);
memb.addEventListener('click', signInFunc);

function signInFunc() {
    signUp.style.display = 'none';
    signIn.style.display = 'block';
    signInTitle.classList.add('active');
    signUpTitle.classList.remove('active');
}

function signUpFunc() {
    signIn.style.display = 'none';
    signUp.style.display = 'block';
    signUpTitle.classList.add('active');
    signInTitle.classList.remove('active');
}
