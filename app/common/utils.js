//TODO add frequently used functions here. include utils.js in header.php

var secondsElapsed = 0;
var clicks  = 0;

function startTimer() {
  window.setInterval(() => {
    secondsElapsed++;
  }, 1000);
}

function getTime(seconds) {
  let hh = "" + Math.floor(seconds / 3600);
  seconds = seconds % 3600;
  let mm = "" + Math.floor(seconds / 60);
  seconds = seconds % 60;
  let ss = "" + seconds;
  return (
    hh.padStart(2, "0") + ":" + mm.padStart(2, "0") + ":" + ss.padStart(2, "0")
  );
}

/*
    TODO
   function stopTimer() {}
   function saveTime(path_to_input_file, params_as_string) {}
   replace time and click tracking code with functions here
 */