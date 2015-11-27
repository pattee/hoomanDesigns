//web worker fun

var w;

var result = document.getElementById("result");

function startWorker() {
    if(typeof(Worker) !== "undefined") {
        if(typeof(w) == "undefined") {
            w = new Worker("js/slider.js");
        }
        w.onmessage = function(event) {
            document.getElementById("result").innerHTML = event.data;
        };
    } else {
        document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Workers...";
    }
}

function stopWorker() {
    result.style.backgroundColor = "#f3f5f8";
    w.terminate();
    w = undefined;
}

startWorker();

result.addEventListener("mouseover", function(){
   stopWorker();
});

result.addEventListener("mouseout", function() {
   startWorker();
});


















