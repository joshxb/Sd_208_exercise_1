var counter = 1;
var speed = 150;


function Writer(func) { 
    if (counter < txt.length) {
        text.innerHTML += txt[counter];
        counter++;
        setTimeout(Writer, speed);
        func.style.display = "none";
    }

}





