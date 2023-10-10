//TODO add frequently used functions here. include utils.js in header.php

var secondsElapsed = 0;
var clicks = 0;

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

/**
 * in 'Form B', all references to Pat Miller is changed to Eli Winters
 *  Pat Miller --> to Eli Winters
 *  pat --> eli
 */
function updatePageBasedOnFormType() {
  console.log("called updatePageBasedOnFormType");

  getFormId((formId) => {
    if (formId === "B") {
      console.log("form baby", formId);

      // Find and replace 'Pat Miller' with 'Eli Winters' and 'pat' with 'eli'
      const elementsWithText = document.querySelectorAll("*");
      elementsWithText.forEach((element) => {
        if (element.nodeType === Node.TEXT_NODE) {
          element.textContent = element.textContent
            .replace(/Pat Miller/g, "Eli Winters")
            .replace(/Pat/g, "Eli")
            .replace(/pat/g, "eli");
        } else {
          // Handle elements with innerHTML
          const htmlContent = element.innerHTML;
          element.innerHTML = htmlContent
            .replace(/Pat Miller/g, "Eli Winters")
            .replace(/Pat/g, "Eli")
            .replace(/pat/g, "eli");
        }
      });
    }
  });
}

/*
    TODO
   function stopTimer() {}
   function saveTime(path_to_input_file, params_as_string) {}
   replace time and click tracking code with functions here
 */
