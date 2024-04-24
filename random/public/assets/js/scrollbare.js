//effet fondu scrolls quand descend en dessus de > 80 donc effet blur and co 
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("navbar-example2").style.backgroundColor = "hsla(0, 0%, 24%, 0.25)";

        // console.log('descendue');


    } else {
        document.getElementById("navbar-example2").style.backgroundColor = "hsl(0, 0%, 24%, 100)";
        // console.log('remonter a la normale');

    }
}

