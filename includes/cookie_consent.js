window.addEventListener("load", function () {
    checkCookieConsent();
});

document.getElementById("accept-cookies").addEventListener("click", function () {
    setCookie("cookie_consent", true, 365); // Set cookie for 1 year
    var myModal = bootstrap.Modal.getInstance(document.getElementById('cookie-consent'));
    myModal.hide();
});

function checkCookieConsent() {
    var cookieConsent = getCookie("cookie_consent");
    if (!cookieConsent) {
        var myModal = new bootstrap.Modal(document.getElementById('cookie-consent'));
        myModal.show();
    }
}

function getCookie(name) {
    var ca = document.cookie.split(';'); // cookie array - az osszes oldalhoz tartozo cookie
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        c = c.trim();
        if (c.indexOf(name + "=") === 0){
            return c.substring(name.length + 1, c.length);
        }
    }
    return null;
}

function setCookie(name, value, days) {
    var expires = "";

    var date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    expires = "; expires=" + date.toUTCString();

    document.cookie = name + "=" + value + expires + "; path=/";
}

// igy nez ki a cookie: cookie_consent=true


