/**
 * form A and form B are two separate sets of questions. However, as of now, they are all the same except for que 4
 * TODO: when form b deviates enough, add keys "formA" and "formB" directly under each question.
 * "formA" and "formB" will have the same sets of key-value pairs that each question has now
 */
const bankStatementQuestionAnswers = {
  question1: {
    question: "In the current statement, when is the Minimum Payment due?",
    answer: "10/09/2018",
    nextPage: "question2.php",
    answerTag: "1", //elements with correct answers are tagged with unique ids
  },
  question2: {
    question:
      "In the current statement, what is the available Cash Advance Line?",
    answer: "$900",
    nextPage: "question3.php",
    answerTag: "2",
  },
  question3: {
    question:
      "In the current statement, what is the Annual Percentage Rate for purchases?",
    answer: "16.99%",
    nextPage: "question4.php",
    answerTag: "3",
  },
  question4: {
    question:
      "In the current statement, what amount did Pat receive as the cashback amount in the 5% Bonus Categories?",
    answer: "$17.61",
    questionB:
      "In the current statement, what is the annual percentage rate for cash advances?",
    answerB: "24.99%",
    nextPage: "question5.php",
    answerTag: "4",
  },
  question5: {
    question: "In the current statement, what is the Total Credit Line?",
    answer: "$4,500",
    nextPage: "question6.php",
    answerTag: "5",
  },
  question6: {
    question:
      "In the current statement, what is the maximum percentage amount of the Penalty APR?",
    answer: "29.99%",
    nextPage: "question7.php",
    answerTag: "6",
  },
  question7: {
    question: "What is the opening date of the current statement?",
    answer: "08/16/2018",
    nextPage: "confidence4.php",
    answerTag: "7",
  },
  PatMillerErr: {
    question: "Click on suspicious/strange transactions",
    answer: "08/16/2018",
    nextPage: "confidence6.php",
  },
  EliWinterErr: {
    question: "Click on suspicious/strange transactions",
    answer: "08/16/2018",
    nextPage: "confidence6.php",
  },
};

//script that adds answer attempt to db
var inputFile = "bank_statement_question_input.php";

/**
 * in bank_statement_question_content.php, form id is retrieved in php script.
 * form id is written into a hidden element. get form id from there
 */
function getFormId() {
  return "A";
  //TODO import getFormId.js funct
  // const formIdElement = document.querySelector(".formId");
  // if (formIdElement) {
  //   const formId = formIdElement.textContent.trim();
  //   return formId;
  // } else {
  //   return null;
  // }
}

function getQuestionId() {
  // Get the script element that includes this script
  var scriptElement =
    document.currentScript ||
    document.querySelector('script[src="./bank_statement_script.js"]');

  var questionId = scriptElement.getAttribute("data-question-id");

  return questionId;
}

function setQuestionText() {
  var questionElement = document.getElementById("questionText");
  questionElement.textContent =
    bankStatementQuestionAnswers[getQuestionId()].question;

  /**************** TODO adjust when formA and formB deviate enough *************** */
  if (getQuestionId() == "question4" && getFormId() == "B") {
    questionElement.textContent =
      bankStatementQuestionAnswers[getQuestionId()].questionB;
  }
  /**************** */

  //set next button destination
  var link = document.querySelector(".button");
  const dest = link.href.split(".php");
  //replace last character of page name with question number
  //for eg. in ques 4, PatMiller1.php will be turned into PatMiller4.php by replacing 1
  //with the 4 in question4

  const linkWithCorrectQueNumber =
    dest[0].slice(0, -1) + getQuestionId().slice(-1) + ".php";
  link.href = linkWithCorrectQueNumber;
}

function goToNextPage() {
  console.log("next", bankStatementQuestionAnswers[getQuestionId()].nextPage);

  window.location.href = bankStatementQuestionAnswers[getQuestionId()].nextPage;
}

function toggleZoomScreen() {
  document.body.style.zoom = "240%";
  startTimer(this);
}

function helpAlert(e) {
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

  // PIs want color resetting only on this page. may be removed later
  if (getQuestionId() != "PatMillerErr") {
    count = 1;
  }

  target.style.color = count === 0 ? "#000000 " : "#FF00FF";
  target.dataset.count = count === 0 ? 1 : 0;
}

var t = 0;
var i;
var clicks = 0;

function OMMTimer(e) {
  i = window.setInterval(() => {
    t++;
    showTime(getTime(t));
  }, 1000);
  e.setAttribute("onclick", "startTimer(this)");
}

function startTimer(e) {
  i = window.setInterval(() => {
    t++;
    showTime(getTime(t));
  }, 1000);
}

function stopTimer(e) {
  var elementId = e.id;
  console.log("elementId", elementId);

  var user_answer;
  //user clicked on the correct element
  if (elementId == bankStatementQuestionAnswers[getQuestionId()].answerTag) {
    user_answer = bankStatementQuestionAnswers[getQuestionId()].answer;

    /**************** TODO adjust when formA and formB deviate enough *************** */
    if (getQuestionId() == "question4" && getFormId() == "B") {
      user_answer = bankStatementQuestionAnswers[getQuestionId()].answerB;
    }
    /****************  *************** */
    //user clicked on something else
  } else {
    var a = e.innerHTML;
    a = a.trim();
    a = a.replace(/(<([^>]+)>)/gi, "");
    a = a.replace(/(&amp;)/gi, " and ");
    a = a.replace(/(')/gi, "");
    a = a.replace(/(\r\n|\n|\r)/gi, " ");
    user_answer = a;
  }
  var question_number = getQuestionId();
  if (getQuestionId() == "PatMillerErr") {
    // in PatMillerErr, send_task2.php is called with requires id of the clicked element.
    //here, it question_number var is forced to store value of element id to prevent creating a new handler function
    question_number = elementId;
    //TODO refactor and merge bank_statement_input.php with send_task2.php to prevent this hacky workaround
  }
  saveTime(getTime(t), user_answer, question_number);
}

//TODO remove
function showTime(time) {
  /* document.getElementById("time").innerHTML= time; */
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

function saveTime(time, user_answer, question_number) {
  const correct_answer = bankStatementQuestionAnswers[getQuestionId()].answer;
  console.log(
    "  user_answer: ",
    user_answer,
    "\ncorrect_answer",
    correct_answer,
    "\nquestion_number: ",
    question_number
  );

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
      xmlhttp.open("POST", "send_task2.php", true);
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
