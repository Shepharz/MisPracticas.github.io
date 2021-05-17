function hiddenText(id) {
    if (document.getElementById) {
        var hid = document.getElementById(id);
        hid.style.display = (hid.style.display == 'none') ? 'block' : 'none';
    }
}
window.onload = function () {
    hiddenText('showHidden');
}