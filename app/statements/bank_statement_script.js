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

document.addEventListener("DOMContentLoaded", function () {
  // log hover on help button
  const helpElement = document.querySelector("button.help");
  detectAndLogHover([helpElement], function (hoverTime) {
    if (track_ga != 0) {
      gtag("event", "hover_on_help", {
        subid: subid,
        page: PAGE_TITLE,
        hover_time: hoverTime,
        timestamp: Date.now(),
        event_callback: function () {
          console.log(
            `hover_on_help event sent to Google Analytics with hover_time: ${hoverTime} seconds`
          );
        },
      });
    }
  });

  //selects pretty much all elements that can be clicked on
  const selectorString =
    "span.cls_002, span.cls_003, span.cls_006, span.cls_007, span.cls_008, span.cls_009, span.cls_011, span.cls_012, span.cls_013,span.cls_014, span.cls_016, span.cls_020, span.cls_021, span.cls_022, span.cls_024";
  const clickableElements = document.querySelectorAll(selectorString);

  // 20250228: Making this commit solely for documentation purposes.
  // Notes on why hover_on_correct_answer cannot currently be fixed.

  // Adding the hover event listener on these answerElements divs
  // is causing two events to fire for every hover: one from the div container,
  // another from the span inside the div (i.e. the clickableElements above).
  // The intention was evidently for the div events to result in
  // hover_on_correct_answer, and the span events to result in hover_on_element.
  // (Divs are being used to mark groups of span elements as being all valid
  // parts of the "correct answer".)
  // However, any time the div.possible_answer is not actually the
  // correct answer for the _current_ question,
  // OR the answerTag is not even set for the current question as with question 8,
  // what ends up happening is the 'element.id == answerTag' check
  // below fails, and a duplicate hover_on_element is triggered.
  // See below...
  const answerElements = document.querySelectorAll("div.possible_answer");
  const allElements = [...clickableElements, ...answerElements];

  //log hover on elements
  const questionId = getQuestionId();
  detectAndLogHover(allElements, function (hoverTime, element) {
    console.log(
      "element.id: ",
      element.id,
      "element.textContent (used as element_hovered):",
      element.textContent
    );
    const eventName =
      element.id == bankStatementQuestionAnswers[questionId].answerTag
        ? "hover_on_correct_answer"
        : "hover_on_element";
	//  ^^^
    //  - the 'span' element has no id, so fails the answerTag comparison, so always
    //    results in a hover_on_element, whether it's inside the correct answer or not;
    //  - the 'div' element......
    //      - IF it's the correct answer AND the answerTag exists (so, not q8),
    //        will fire a hover_on_correct_answer;
    //            (this is fine)
    //      - ELSE IF it's the correct answer BUT no answerTag exists (so, q8 cases),
    //        will fire a duplicate hover_on_element;
    //            (this is degenerate; it should fire a hover_on_correct_answer)
    //      - ELSE it's not the correct answer, so
    //        will fire a duplicate hover_on_element.
    //            (this is obviously wrong; no extra event should fire.)
    if (track_ga != 0) {
      gtag("event", eventName, {
        subid: subid,
        page: PAGE_TITLE,
        element_hovered: element.textContent,
        hover_time: hoverTime,
        timestamp: Date.now(),
        event_callback: function () {
          console.log(
            eventName +
              ` event sent to Google Analytics with hover_time: ${hoverTime} seconds`
          );
        },
      });
    }

	// If we do away with the divs altogether, we'd need to id/tag each span individually
	// with something that can be checked against answerTag, not to mention this would be
	// very likely to break other parts of the code.
	// Instead, the following would have fixed the problems:
	if (element.tagName === "DIV"
		&& element.classList.contains("possible_answer")
	    && !!element.id //avoid matching falsy element.id with falsy answerTag
		&& (element.id == bankStatementQuestionAnswers[questionId].answerTag
			// question 8, aka suspicious transactions, aka "PatMillerErr",
			// potentially in the future also aka "EliWinterErr",
			// has no answerTag entry in bankStatementQuestionAnswers,
			// but instead has the following 7 correct answer ids,
			// hardcoded in various spots.
			// and btw yes, id 100 does not exist, and id 200 exists but has nothing to do with question 8.
		    || ((getQuestionId() == "PatMillerErr"
			     || getQuestionId() == "EliWinterErr")
			    && ["300", "400", "500", "600", "700", "800", "900"].includes(element.id))
		)) {
		// This element is a div.possible_answer, and it's actually the correct answer;
		// fire hover_on_correct_answer
		console.log("Fire a HOVER ON CORRECT ANSWER, elem ", element.textContent);
	} else if (
		element.tagName === "SPAN" // filter out any intermediate divs/other elements
	) {
		// This element is a span; maybe it's a part of a correct answer, in which case
		// the parent div will fire hover_on_correct_answer; this span's job is just
		// to fire hover_on_element.
		console.log("Fire a HOVER ON ELEMENT, elem ", element.textContent);
    }

  //  ...except that it turns out almost every div in bank_statement_content.php is using
  //  absolute positioning, and so right now if you mouse over a span, it cannot reliably
  //  be determined whether the event will bubble, which parent element it will bubble
  //  to, and when the mouse is even over the span versus the div.
  //  - https://developer.mozilla.org/en-US/docs/Learn_web_development/Core/Scripting/Event_bubbling
  //  - https://developer.mozilla.org/en-US/docs/Learn_web_development/Core/CSS_layout/Positioning#positioning_contexts
  //  For example, checkout this commit and load Bank Statement Pat 5.
  //  The correct answer is Total Credit Line ------ $4,500.00.
  //  Try hovering over $4,500 sliding the pointer in "from below" - only hover_on_element fires.
  //  Try the same thing but sliding the pointer in "from the left" - hover_on_correct_answer also fires.
  //  All to say: I give up; we are just going to not add div.possible_answers to
  //  the hover list and not implement hover_on_correct_answer.

  });

  //detect and log double clicks on elements
  clickableElements.forEach(function (element) {
    //detect and log double clicks
    element.addEventListener("dblclick", function () {
      if (track_ga != 0) {
        gtag("event", "double_click", {
          subid: subid,
          page: PAGE_TITLE,
          element_clicked: element.textContent,
          timestamp: Date.now(),
          event_callback: function () {
            console.log("double_click event sent to Google Analytics");
          },
        });
      }
    });
  });

  //detect and log multiple clicks
  detectAndLogMultipleClicks(clickableElements, function (clickCount, element) {
    if (track_ga != 0) {
      gtag("event", "multiple_clicks", {
        subid: subid,
        page: PAGE_TITLE,
        element_clicked: element.textContent,
        click_count: clickCount,
        timestamp: Date.now(),
        event_callback: function () {
          console.log(
            `multiple_clicks event sent to Google Analytics with clickCount: ${clickCount}`
          );
        },
      });
    }
  });
});

function goToNextPage() {
  window.location.href = bankStatementQuestionAnswers[getQuestionId()].nextPage;
}

function toggleZoomScreen() {
  document.body.style.zoom = "240%";
  startTimer(this);
}

function helpAlert(e) {
  if (track_ga != 0) {
    gtag("event", "help_click", {
      subid: subid,
      page: PAGE_TITLE,
      timestamp: Date.now(),
      event_callback: function () {
        console.log("help_click event sent to Google Analytics");
      },
    });
  }
  document.body.style.zoom = "100%";
  document.querySelector("div.statement_content").hidden = true;
  //start timer to record time spent on help
  const helpStartTime = Date.now();
  showAlert(bankStatementQuestionAnswers[getQuestionId()].question, () => {
    document.body.style.zoom = "240%";
    document.querySelector("div.statement_content").hidden = false;
    if (track_ga != 0) {
      const helpTime = (Date.now() - helpStartTime) / 1000; // in seconds
      gtag("event", "exited_help", {
        subid: subid,
        page: PAGE_TITLE,
        time_spent_on_help: helpTime,
        timestamp: Date.now(),
        event_callback: function () {
          console.log("exited_help event sent to Google Analytics");
        },
      });
    }
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
        is_correct: isCorrectAnswer,
        element_clicked: e.target.innerText,
        timestamp: Date.now(),
        event_callback: function () {
          console.log(
            "unselect_choice event sent to Google Analytics. isCorrectAnswer: ",
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
    console.log("element: ", e);
    console.log("elementId: ", elementId);
    console.log(
      "answerTag: ",
      bankStatementQuestionAnswers[questionId].answerTag
    );
    console.log("questionId: ", questionId);

    // GA: correct_click or incorrect_click
    if (
      elementId == bankStatementQuestionAnswers[questionId].answerTag ||
      // in PatMillerErr,  correct answers are tagged with unique ids
      ((getQuestionId() == "PatMillerErr" ||
        getQuestionId() == "EliWinterErr") &&
        ["300", "400", "500", "600", "700", "800", "900"].includes(elementId))
    ) {
      console.log('logging "correct_click" event', elementId);
      if (track_ga != 0) {
        gtag("event", "correct_click", {
          page: PAGE_TITLE,
          subid: subid,
          element_clicked: e.innerText,
          timestamp: Date.now(),
          event_callback: function () {
            console.log("correct_click event sent to Google Analytics");
          },
        });
      }
    } else {
      if (e.value != "next" && e.value != "help") {
        if (track_ga != 0) {
          gtag("event", "incorrect_click", {
            page: PAGE_TITLE,
            subid: subid,
            element_clicked: e.innerText,
            timestamp: Date.now(),
            event_callback: function () {
              console.log("incorrect_click event sent to Google Analytics");
            },
          });
        }
      }
    }

    // Extract user_answer
    if (elementId == bankStatementQuestionAnswers[questionId].answerTag) {
      user_answer = bankStatementQuestionAnswers[questionId].answer;

      if (questionId == "question4" && formId == "B") {
        user_answer = bankStatementQuestionAnswers[questionId].answerB;
      }
    } else {
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
