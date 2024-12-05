document.getElementById('accept-cookies').addEventListener('click', function() {
    // Establece la cookie con duración de 1 año
    document.cookie = "cookie_consent=accepted; path=/; max-age=" + (60 * 60 * 24 * 365);

    // Oculta el banner
    document.getElementById('cookie-consent-banner').style.display = 'none';
});

// Oculta el banner si ya se ha aceptado
if (document.cookie.split(';').some((item) => item.trim().startsWith('cookie_consent='))) {
    document.getElementById('cookie-consent-banner').style.display = 'none';
}
