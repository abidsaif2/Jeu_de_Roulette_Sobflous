function spin() {
    let x = 1000;
    let y = 9999;
    let deg = Math.floor(Math.random() * (x - y)) + y;
    document.getElementsByClassName('box')[0].style.transform = "rotate(" + deg + "deg)";

    var element = document.getElementById('mainbox');
    element.classList.remove('animate');
    setTimeout(function () {
        element.classList.add('animate');
    }, 5000); //5000 = 5 second
}