"use strict"

// Footer section ============================================
const footerDate = document.querySelector('#footer-date');
const now = new Date();
const year = now.getFullYear();
footerDate.innerHTML = (year);


