
var sec         = 1802,
countDiv    = document.getElementById("timer"),
secpass,
countDown   = setInterval(function () {
    'use strict';
    
    secpass();
}, 1000);

function secpass() {
'use strict';

var min     = Math.floor(sec / 60),
    remSec  = sec % 60;

if (remSec < 10) {
    
    remSec = '0' + remSec;

}
if (min < 10) {
    
    min = '0' + min;

}
countDiv.innerHTML = min + ":" + remSec;

if (sec > 0) {
    
    sec = sec - 1;
    
} else {
    
    clearInterval(countDown);
    
    
}
}
//toggle side Panel
function toggleSidePanel(){
    var a = document.getElementById("side-panel");
    
    a.style.margin = 0;
     a.style.transition = '1s';
    // a.classList.toggle("style");
    console.log("ho");
}
    // a.style.margin = 0;
    // a.style.transition = '1s';
    // a.classList.toggle("mystyle");

    // else if(a.style.margin = 0){
    //  a.style.margin = "-400px";
    // a.style.transition = '1s';
    // console.log("hiii");
    // }

var i = 1;
function Next(){
 document.getElementById("next").innerHTML = i++;
}
function Prev(){
  i = i - 1;
  document.getElementById("next").innerHTML = i ;
}
