let i = false;
document.querySelector('.burger-main').onclick = () => {
    i = !i;
    if (i) {
        document.querySelector('.navbar-nav').classList.remove('no-show');
    }
    else {
        document.querySelector('.navbar-nav').classList.add('no-show');
    }
}
document.querySelector('.burger-toggle').onclick = () => {
    document.querySelector('.navbar-nav').classList.remove('no-show');
}


