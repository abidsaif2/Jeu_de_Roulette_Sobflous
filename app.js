
// count the number of spins 
var count = 0
var btn = document.getElementById('btn');

// set the number of spins 



function verif() {

    var fname = document.forms["myForm"]["fname"].value;
    var fphone = document.forms["myForm"]["fphone"].value;
    var femail = document.forms["myForm"]["femail"].value;
    var fpassword = document.forms["myForm"]["fpassword"].value;
    var n = fpassword.length;
    var y = fphone.length;
    var ch = /^[A-Za-z]+$/;



    if  (fname.match(ch)==null) {
        alert("Veuiller saisir un nom valide");
        return false;
    }

    if ((n<6)){
        alert("mot de passe faible");
        return false;
    }
    if ( (isNaN(fphone)) || (y !==8) ){
        alert('Veuiller saisir un num de tel valide')
        return false;
    }

    if ((fname == "") || (fphone == "") || (femail == "") || (fpassword == "")){
        alert("Veuiller saisir tout les données");
        return false;
    } 

    document.getElementById('form').submit();
}

function spin() {

    // const spanArray = ["span1", "span1", "span1", "span1",
    //     "span3", "span3", "span3", "span3",
    //     "span2", "span2", "span2",
    //     "span4", "span4", "span4",
    //     "span5", "span5", "span5",
    //     "span6", "span6",
    //     "span8", "span8",
    //     "sapn7"
    // ]

    let x = 3000;
    let y = 9999;
    let deg = Math.floor(Math.random() * (x - y)) + y;
    document.getElementsByClassName('box')[0].style.transform = "rotate(" + deg + "deg)";

    var element = document.getElementById('mainbox');
    element.classList.remove('animate');
    setTimeout(function () {
        element.classList.add('animate');
    }, 5000);

    let audio = new Audio('r_sound.mp3');

    audio.pause();
    audio.currentTime = 0;

    audio.play();

    // the resulets

    setTimeout(function () {
        let res;
        y = document.getElementsByClassName("flesh")[0].getBoundingClientRect().top;
        x = document.getElementsByClassName("flesh")[0].getBoundingClientRect().left;
        var w = window.innerWidth;
        if (w < 768) {
            res = document.elementFromPoint(x + 38, y + 46);
        } else {
            res = document.elementFromPoint(x + 20, y + 100);
        }
        document.getElementsByClassName('felic-aff')[0].innerHTML = res.firstChild.innerHTML;
        document.getElementsByClassName('felic-title')[0].classList.add("felic-display");
        document.getElementsByClassName('felic-txt')[0].classList.add("felic-display");
    }, 5000);
    count++;

}



