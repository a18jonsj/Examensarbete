var timer = document.getElementById('timer');
console.log(timer);
var hr;
localStorage.getItem("hr") ? hr = localStorage.getItem("hr") : hr = 0;
var min;
localStorage.getItem("min") ? min = localStorage.getItem("min") : min = 0;
var sec;
localStorage.getItem("sec") ? sec = localStorage.getItem("sec") : sec = 0;
var stoptime;
localStorage.getItem("stoptime") ? stoptime = localStorage.getItem("stoptime") : stoptime = false;
timerCycle();
        
        
function startTimer() {
    if (!stoptime) {
        stoptime = true;
        localStorage.setItem("stoptime", stoptime);
        timerCycle();
    }
}
function stopTimer() {
    if (stoptime) {
    stoptime = false;
    localStorage.setItem("stoptime", stoptime);
    var time = {
        sec: localStorage.getItem("sec"),
        min: localStorage.getItem("min"),
        hr: localStorage.getItem("hr")
    };
    request = $.ajax({
        url: "save.php",
        type: "post",
        data: time

    });
    request.done(function (response, textStatus, jqXHR){
        // Log a message to the console
        console.log(response);
    });
    
    localStorage.clear();
}
}

function timerCycle() {

    if (stoptime) {
        sec = parseInt(sec);
        min = parseInt(min);
        hr = parseInt(hr);
    
        sec = sec + 1;
    
        if (sec == 60) {
            min = min + 1;
            sec = 0;
        }
        if (min == 60) {
            hr = hr + 1;
            min = 0;
            sec = 0;
        }
    
        if (sec < 10 || sec == 0) {
            sec = '0' + sec;
        }
        if (min < 10 || min == 0) {
            min = '0' + min;
        }
        if (hr < 10 || hr == 0) {
            hr = '0' + hr;
        }

        timer.innerHTML = hr + ':' + min + ':' + sec;
        localStorage.setItem("hr", hr);
        localStorage.setItem("min", min);
        localStorage.setItem("sec", sec);
        setTimeout(timerCycle, 1000);
    }
    
}

function resetTimer() {
    timer.innerHTML = '00:00:00';
}