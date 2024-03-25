const nav = document.getElementById('mySideNav');

function navWidth() {
    if (nav.style.width == '250px') {
    nav.style.width = '0px';
    } else {
        nav.style.width = '250px';
    }
    console.log('clicked');
}