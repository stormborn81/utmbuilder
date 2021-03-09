//
// utmbuilder.js
// Site specific JS
//

'use strict';
window.dataLayer = window.dataLayer || [];

// Check if local and Session storage is available
function storageAvailable(type) {
    var storage;
    try {
        storage = window[type];
        var x = '__storage_test__';
        storage.setItem(x, x);
        storage.removeItem(x);
        return true;
    }
    catch(e) {
        return e instanceof DOMException && (
            // everything except Firefox
            e.code === 22 ||
            // Firefox
            e.code === 1014 ||
            // test name field too, because code might not be present
            // everything except Firefox
            e.name === 'QuotaExceededError' ||
            // Firefox
            e.name === 'NS_ERROR_DOM_QUOTA_REACHED') &&
            // acknowledge QuotaExceededError only if there's something already stored
            (storage && storage.length !== 0);
    }
}

//Set greeting message based on local time/date
function getGreeting() {
    var now = new Date();
    var hrs = now.getHours();
    var msg = "";
    var submsg = "";

    if (hrs >  0) msg = "Mornin' Sunshine!"; // REALLY early
    if (hrs >  6) msg = "Good morning";      // After 6am
    if (hrs > 12) msg = "Good afternoon";    // After 12pm
    if (hrs > 17) msg = "Good evening";      // After 5pm
    if (hrs > 22) msg = "Bit late, isn't it?";        // After 10pm

    if (hrs >  0) submsg = "Early bird gets the best UTM tags (and the best sunrises)"; // REALLY early
    if (hrs >  6) submsg = "It's a beautiful day in the universe for some UTM tagging";      // After 6am
    if (hrs > 17) submsg = "Astronauts say it's Beer o'clock, join us while you create your UTM tags";      // After 5pm
    if (hrs > 22) submsg = "Don't space out while you create your UTM tags!";        // After 10pm

    document.getElementById("greeting").innerHTML = msg;
    document.getElementById("subgreeting").innerHTML = submsg;
}
