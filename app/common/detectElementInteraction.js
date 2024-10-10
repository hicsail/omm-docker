function detectAndLogDoubleClicks(elements, gaLogger) {
  //detect and log double clicks on elements
  elements.forEach(function (element) {
    //detect and log double clicks
    element.addEventListener("dblclick", function () {
      gaLogger(element);
    });
  });
}

function detectAndLogMultipleClicks(elements, gaLogger) {
  let clickCount = 0;
  const multiClickThreshold = 3; // For detecting multiple clicks
  const timeLimit = 500; // Time window in milliseconds

  const handleClick = (element) => {
    clickCount++;

    // Detect multiple clicks (3 or more)
    if (clickCount >= multiClickThreshold) {
      console.log("Multiple clicks detected (3 or more)!");
      gaLogger(clickCount, element);
      clickCount = 0;
      return;
    }

    // Reset click count if no further clicks within the timeLimit
    setTimeout(() => {
      clickCount = 0;
    }, timeLimit);
  };

  elements.forEach(function (element) {
    element.addEventListener("click", () => handleClick(element));
  });
}

function detectAndLogHover(elements, gaLogger) {
  const HOVER_TIME = 2; // seconds
  let hoverStartTime;
  let hoverTimeout;

  elements.forEach(function (element) {
    element.addEventListener("mouseover", function () {
      hoverStartTime = Date.now();
      hoverTimeout = setTimeout(function () {}, HOVER_TIME * 1000);
    });

    element.addEventListener("mouseleave", function () {
      clearTimeout(hoverTimeout);

      const hoverEndTime = Date.now();
      const hoverTime = (hoverEndTime - hoverStartTime) / 1000; // in seconds

      if (hoverTime > HOVER_TIME) {
        gaLogger(hoverTime, element);
      }
    });
  });
}
