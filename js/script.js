var j = 30;
var click = 1;

// Rest function of 30 sec
function rest(id) {
    var elem = document.getElementById(id)
    setTimeout(function() {
        elem.innerHTML = "Rest " + j;
        j--;
        if (j > 0) {
            rest(id);
        } else {
            elem.innerHTML = "One more to go"
            click = 2;
        }
    }, 1000)
}

// for seconds workout (id of the event , seconds , 0 for no rest 1 for rest)
function seconds(id, i, a) {
    var elem = document.getElementById(id)
    setTimeout(function() {
        elem.innerHTML = i;
        i--;
        if (i > 0) {
            seconds(id, i, a)
        } else if (a == 1) {
            rest(id)
            seconds(id, i, 0)
        } else {
            elem.innerHTML = "Completed"
            if (id == "btn1") {
                document.getElementById("btn2").removeAttribute('disabled');
            } else if (id == "btn2") {
                document.getElementById("btn3").removeAttribute('disabled');
            } else if (id == "btn3") {
                document.getElementById("btn4").removeAttribute('disabled');
            } else if (id == "btn4") {
                document.getElementById("btn5").removeAttribute('disabled');
            } else if (id == "btn5") {
                document.getElementById("btn6").removeAttribute('disabled');
            }
        }
    }, 1000)
}

// for time workout
function time(id, i) {
    if (click == 1) {
        var elem = document.getElementById(id)
        setTimeout(function() {
            elem.innerHTML = i;
            i--;
            if (i > 0) {
                time(id, i);
            } else {
                rest(id);
            }
        }, 2000)
    } else {
        time_2(id, i)
    }
}

function time_2(id, i) {
    var elem = document.getElementById(id)
    setTimeout(function() {
        elem.innerHTML = i;
        i--;
        if (i > 0) {
            time(id, i);
        } else {
            elem.innerHTML = "Completed";
            click = 1;
            if (id == "btn1") {
                document.getElementById("btn2").removeAttribute('disabled');
            } else if (id == "btn2") {
                document.getElementById("btn3").removeAttribute('disabled');
            } else if (id == "btn3") {
                document.getElementById("btn4").removeAttribute('disabled');
            } else if (id == "btn4") {
                document.getElementById("btn5").removeAttribute('disabled');
            } else if (id == "btn5") {
                document.getElementById("btn6").removeAttribute('disabled');
            }

        }
    }, 2000)
}

// //  for 10 times workout
// function time10(id) {
//     if (click == 1) {
//         var elem = document.getElementById(id)
//         setTimeout(function() {
//             elem.innerHTML = i;
//             i++;
//             if (i < 11) {
//                 time10(id);
//             } else {
//                 rest(id);
//             }
//         }, 2000)
//     } else {
//         time10_2(id)
//     }
// }

// function time10_2(id) {
//     var elem = document.getElementById(id)
//     setTimeout(function() {
//         elem.innerHTML = i;
//         i++;
//         if (i < 17) {
//             time10(id);
//         } else {
//             elem.innerHTML = "Completed";
//             click = 1;
//             i = 0;
//             if (id == "btn3") {
//                 document.getElementById("btn4").removeAttribute('disabled');
//             }
//         }
//     }, 2000)
// }