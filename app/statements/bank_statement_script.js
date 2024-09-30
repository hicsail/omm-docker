/**
 * form A and form B are two separate sets of questions. However, as of now, they are all the same except for que 4
 * TODO: when form b deviates enough, add keys "formA" and "formB" directly under each question.
 * "formA" and "formB" will have the same sets of key-value pairs that each question has now
 */
const bankStatementQuestionAnswers = {
  question1: {
    question: "In the current statement, when is the Minimum Payment due?",
    answer: "10/09/2018",
    nextPage: "../../questions/2.php",
    answerTag: "1", //elements with correct answers are tagged with unique ids
  },
  question2: {
    question:
      "In the current statement, what is the available Cash Advance Line?",
    answer: "$900",
    nextPage: "../../questions/3.php",
    answerTag: "2",
  },
  question3: {
    question:
      "In the current statement, what is the Annual Percentage Rate for purchases?",
    answer: "16.99%",
    nextPage: "../../questions/4.php",
    answerTag: "3",
  },
  question4: {
    question:
      "In the current statement, what amount did Pat receive as the cashback amount in the 5% Bonus Categories?",
    answer: "$17.61",
    questionB:
      "In the current statement, what is the annual percentage rate for cash advances?",
    answerB: "24.99%",
    nextPage: "../../questions/5.php",
    answerTag: "4",
  },
  question5: {
    question: "In the current statement, what is the Total Credit Line?",
    answer: "$4,500",
    nextPage: "../../questions/6.php",
    answerTag: "5",
  },
  question6: {
    question:
      "In the current statement, what is the maximum percentage amount of the Penalty APR?",
    answer: "29.99%",
    nextPage: "../../questions/7.php",
    answerTag: "6",
  },
  question7: {
    question: "What is the opening date of the current statement?",
    answer: "08/16/2018",
    nextPage: "../../confidence/4.php",
    answerTag: "7",
  },
  PatMillerErr: {
    question: "Click on suspicious/strange transactions",
    answer: "08/16/2018",
    nextPage: "../../confidence/6.php",
  },
  EliWinterErr: {
    question: "Click on suspicious/strange transactions",
    answer: "08/16/2018",
    nextPage: "../../confidence/6.php",
  },
};

//script that adds answer attempt to db
var inputFile = "../bank_statement_question_input.php";
const PAGE_TITLE = "Bank Statement";

function getQuestionId() {
  // Get the script element who's source is this script
  var scriptElement =
    document.currentScript ||
    document.querySelector(
      'script[src="../statements/bank_statement_script.js"], script[src="../bank_statement_script.js"]'
    );

  return scriptElement.getAttribute("data-question-id");
}

function setQuestionText() {
  const questionId = getQuestionId();

  var questionElement = document.getElementById("questionText");
  questionElement.textContent =
    bankStatementQuestionAnswers[questionId].question;

  getFormId((formId) => {
    /**************** TODO adjust when formA and formB deviate enough *************** */
    if (questionId == "question4" && formId == "B") {
      questionElement.textContent =
        bankStatementQuestionAnswers[questionId].questionB;
    }
    /**************** */

    //set next button destination
    //set link prefix based on formID
    const linkPrefix =
      formId == "B" ? "../statements/eli/" : "../statements/pat/";
    var link = document.querySelector(".button");

    const linkWithCorrectQueNumber = linkPrefix + questionId.slice(-1) + ".php";
    link.href = linkWithCorrectQueNumber;
  });
}

function detectAndLogMultipleClicks(elements, gaLogger) {
  let clickCount = 0;
  const doubleClickThreshold = 2; // For detecting a double-click
  const multiClickThreshold = 3; // For detecting multiple clicks
  const timeLimit = 500; // Time window in milliseconds

  const handleClick = (element) => {
    clickCount++;

    // // Detect double-click
    // if (clickCount === doubleClickThreshold) {
    //   console.log("Double click detected!");
    //   gaLogger(clickCount, element);
    //   clickCount = 0; // Reset after detecting double-click
    //   return;
    // }

    // Detect multiple clicks (3 or more)
    if (clickCount >= multiClickThreshold) {
      console.log("Multiple clicks detected (3 or more)!");
      gaLogger(clickCount, element);
      clickCount = 0; // Reset after detecting multiple clicks
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
      const hoverTime = (hoverEndTime - hoverStartTime) / 1000; // Convert milliseconds to seconds

      if (hoverTime > HOVER_TIME) {
        gaLogger(hoverTime, element);
      }
    });
  });
}

document.addEventListener("DOMContentLoaded", function () {
  // log hover on help button
  const helpElement = document.querySelector("button.help");
  detectAndLogHover([helpElement], function (hoverTime) {
    gtag("event", "hover_on_help", {
      subid: subid,
      page: PAGE_TITLE,
      hover_time: hoverTime,
      event_callback: function () {
        console.log(
          `hover_on_help event sent to Google Analytics with hover_time: ${hoverTime} seconds`
        );
      },
    });
  });

  //selects pretty much all elements that can be clicked on
  const selectorString =
    "span.cls_002, span.cls_003, span.cls_006, span.cls_007, span.cls_008, span.cls_009, span.cls_011, span.cls_012, span.cls_013,span.cls_014, span.cls_016, span.cls_020, span.cls_021, span.cls_022, span.cls_024";
  const clickableElements = document.querySelectorAll(selectorString);
  const answerElements = document.querySelectorAll("div.possible_answer");
  const allElements = [...clickableElements, ...answerElements];
  //log hover on elements
  const questionId = getQuestionId();
  detectAndLogHover(allElements, function (hoverTime, element) {
    console.log(
      "element.id: ",
      element.id,
      "elementHovered:",
      element.textContent
    );
    const eventName =
      element.id == bankStatementQuestionAnswers[questionId].answerTag
        ? "hover_on_correct_answer"
        : "hover_on_element";
    gtag("event", eventName, {
      subid: subid,
      page: PAGE_TITLE,
      elementHovered: element.textContent,
      hover_time: hoverTime,
      event_callback: function () {
        console.log(
          eventName +
            ` event sent to Google Analytics with hover_time: ${hoverTime} seconds`
        );
      },
    });
  });

  //detect and log double clicks on elements
  clickableElements.forEach(function (element) {
    //detect and log double clicks
    element.addEventListener("dblclick", function () {
      gtag("event", "double_click", {
        subid: subid,
        page: PAGE_TITLE,
        elementClicked: element.textContent,
        event_callback: function () {
          console.log("double_click event sent to Google Analytics");
        },
      });
    });
  });

  //detect and log multiple clicks
  detectAndLogMultipleClicks(clickableElements, function (clickCount, element) {
    gtag("event", "multiple_clicks", {
      subid: subid,
      page: PAGE_TITLE,
      elementClicked: element.textContent,
      clickCount: clickCount,
      event_callback: function () {
        console.log(
          `multiple_clicks event sent to Google Analytics with clickCount: ${clickCount}`
        );
      },
    });
  });

  //TODO clarify whether to detect double clicks on all elements or just potential answers
});

function goToNextPage() {
  window.location.href = bankStatementQuestionAnswers[getQuestionId()].nextPage;
}

function toggleZoomScreen() {
  document.body.style.zoom = "240%";
  startTimer(this);
}

function helpAlert(e) {
  gtag("event", "help_click", {
    subid: subid,
    page: PAGE_TITLE,
    event_callback: function () {
      console.log("help_click event sent to Google Analytics");
    },
  });
  document.body.style.zoom = "100%";
  document.querySelector("div.statement_content").hidden = true;
  showAlert(bankStatementQuestionAnswers[getQuestionId()].question, () => {
    document.body.style.zoom = "240%";
    document.querySelector("div.statement_content").hidden = false;
  });
}

function setColor(e) {
  var target = e.target;
  var count = +target.dataset.count;
  let countBefore = count;
  // PIs want color resetting only on this page. may be removed later
  if (getQuestionId() != "PatMillerErr") {
    count = 1;
  }

  target.style.color = count === 0 ? "#000000 " : "#FF00FF";
  target.dataset.count = count === 0 ? 1 : 0;
  let countAfter = target.dataset.count;

  // detect and log unselect choice event
  if (getQuestionId() == "PatMillerErr") {
    const suspiciousTransactionsElementIds = [
      "300",
      "400",
      "500",
      "600",
      "700",
      "800",
      "900",
    ];
    if (countBefore == 0 && countAfter == 1) {
      const isCorrectAnswer = suspiciousTransactionsElementIds.includes(
        e.currentTarget.id
      );
      gtag("event", "unselect_choice", {
        page: PAGE_TITLE,
        subid: subid,
        isCorrect: isCorrectAnswer,
        elementClicked: e.innerText,
        event_callback: function () {
          console.log(
            "unselect_answer event sent to Google Analytics. isCorrectAnswer: ",
            isCorrectAnswer
          );
        },
      });
    }
  }
}

var t = 0;
var i;
var clicks = 0;

function startTimer(e) {
  i = window.setInterval(() => {
    t++;
  }, 1000);
}

function stopTimer(e) {
  var elementId = e.id;
  const questionId = getQuestionId();

  var user_answer;

  getFormId((formId) => {
    //user clicked on the correct element
    if (elementId == bankStatementQuestionAnswers[questionId].answerTag) {
      console.log('logging "correct_click" event', elementId);
      gtag("event", "correct_click", {
        page: PAGE_TITLE,
        subid: subid,
        elementClicked: e.innerText,
        event_callback: function () {
          console.log("correct_click event sent to Google Analytics");
        },
      });

      user_answer = bankStatementQuestionAnswers[questionId].answer;

      if (questionId == "question4" && formId == "B") {
        user_answer = bankStatementQuestionAnswers[questionId].answerB;
      }

      //user clicked on something else
    } else {
      if (e.value != "next" && e.value != "help") {
        gtag("event", "incorrect_click", {
          page: PAGE_TITLE,
          subid: subid,
          elementClicked: e.innerText,
          event_callback: function () {
            console.log("incorrect_click event sent to Google Analytics");
          },
        });
      }

      var a = e.innerHTML;
      a = a.trim();
      a = a.replace(/(<([^>]+)>)/gi, "");
      a = a.replace(/(&amp;)/gi, " and ");
      a = a.replace(/(')/gi, "");
      a = a.replace(/(\r\n|\n|\r)/gi, " ");
      user_answer = a;
    }
    var question_number = questionId;
    if (questionId == "PatMillerErr") {
      // in PatMillerErr, send_task2.php is called with required id of the clicked element.
      //here, it question_number var is forced to store value of element id to prevent creating a new handler function
      question_number = elementId;
      //TODO refactor and merge bank_statement_input.php with send_task2.php to prevent this hacky workaround
    }
    saveTime(getTime(t), user_answer, question_number, formId);
  }, true);
}

function getTime(m) {
  let hh = "" + Math.floor(m / 3600);
  m = m % 3600;
  let mm = "" + Math.floor(m / 60);
  m = m % 60;
  let ss = "" + m;

  return (
    hh.padStart(2, "0") + ":" + mm.padStart(2, "0") + ":" + ss.padStart(2, "0")
  );
}

function saveTime(time, user_answer, question_number, formId) {
  const questionId = getQuestionId();
  var correct_answer = bankStatementQuestionAnswers[questionId].answer;
  /**************** TODO adjust when formA and formB deviate enough *************** */
  if (questionId == "question4" && formId == "B") {
    correct_answer = bankStatementQuestionAnswers[questionId].answerB;
  }
  /**************** */
  // console.log(
  //   "  user_answer: ",
  //   user_answer,
  //   "\ncorrect_answer",
  //   correct_answer,
  //   "\nquestion_number: ",
  //   question_number
  // );

  clicks++;
  if (t > 0) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status != 200) {
        console.log("Exception while saving data");
      }
    };
    if (
      getQuestionId() == "PatMillerErr" ||
      getQuestionId() == "EliWinterErr"
    ) {
      xmlhttp.open("POST", "../suspicious_transaction_input.php", true);
      xmlhttp.setRequestHeader(
        "Content-type",
        "application/x-www-form-urlencoded"
      );
      // in PatMillerErr.php, question_number var is forced to store value of element id
      //to prevent creating a new handler function
      const user_answer_id = question_number;
      xmlhttp.send(
        "time=" +
          time +
          "&a=" +
          user_answer +
          "&b=" +
          user_answer_id +
          "&clicks=" +
          clicks
      );
    } else {
      xmlhttp.open("POST", inputFile, true);
      xmlhttp.setRequestHeader(
        "Content-type",
        "application/x-www-form-urlencoded"
      );
      xmlhttp.send(
        "time=" +
          time +
          "&user_answer=" +
          user_answer +
          "&correct_answer=" +
          correct_answer +
          "&clicks=" +
          clicks +
          "&question_number=" +
          question_number
      );
    }
  }
}
