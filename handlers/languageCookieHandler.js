function setLanguageCookie(language) {
    // Set the name of the cookie
    var cookieName = "lang";

    // Set the cookie value and expiry (1 day = 1 * 24 * 60 * 60 * 1000 ms)
    var expiryDays = 1;
    var date = new Date();
    date.setTime(date.getTime() + (expiryDays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + date.toUTCString();

    // Set the cookie
    document.cookie = cookieName + "=" + language + ";" + expires + ";path=/";

    // Refresh the page
    location.reload();
}