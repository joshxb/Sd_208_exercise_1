var i = 0;
var array = ["demo1.php", "demo2.php", "demo3.php", "demo4.php", "demo5.php"];
let page_prev = "";
let page_next = "";
function progress_next(number) {
    switch (number) {
        case 1:
            page_next = array[1];
            break;
        case 2:
            page_next = array[2];
            break;
        case 3:
            page_next = array[3];
            break;
        case 4:
            page_next = array[4];
            break;
        case 5:
            page_next = array[0];
            break;
    }

    if (i == 0) {
        i = 1;
        var progress = document.getElementsByClassName("progress-bar")[0];
        var width = 0;
        var id = setInterval(frame, 10);
        function frame() {
            if (width >= 100) {
                clearInterval(id);
                i = 0;
            } else {
                width++;
                progress.style.width = width + "%";
                progress.innerHTML = width + "%";
                if (progress.style.width == "100%") {
                    window.location.href = "../../../Sd_208_exercise_1/" + page_next;
                }
            }
        }
    }
}

function progress_prev(number) {
    switch (number) {
        case 1:
            page_prev = array[4];
            break;
        case 2:
            page_prev = array[0];
            break;
        case 3:
            page_prev = array[1];
            break;
        case 4:
            page_prev = array[2];
            break;
        case 5:
            page_prev = array[3];
            break;
    }

    if (i == 0) {
        i = 1;
        var progress = document.getElementsByClassName("progress-bar")[0];
        var width = 0;
        var id = setInterval(frame, 10);
        function frame() {
            if (width >= 100) {
                clearInterval(id);
                i = 0;
            } else {
                width++;
                progress.style.width = width + "%";
                progress.innerHTML = width + "%";
                if (progress.style.width == "100%") {
                    window.location.href = "../../../Sd_208_exercise_1/" + page_prev;
                }
            }
        }
    }
}


