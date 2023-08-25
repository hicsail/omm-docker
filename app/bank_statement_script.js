const bankStatementQuestionAnswers = {
  question1: {
    answer: "10/09/2018",
    nextPage: "question2.php",
    answerTag: "1", //elements with correct answers are tagged with unique ids
  },
  question2: {
    answer: "$900",
    nextPage: "question3.php",
    answerTag: "2",
  },
  question3: {
    answer: "16.99%",
    nextPage: "question4.php",
    answerTag: "3",
  },
  question4: {
    answer: "$17.61",
    nextPage: "question5.php",
    answerTag: "4",
  },
  question5: {
    answer: "$4,500",
    nextPage: "question6.php",
    answerTag: "5",
  },
  question6: {
    answer: "29.99%",
    nextPage: "question7.php",
    answerTag: "6",
  },
  question7: {
    answer: "08/16/2018",
    nextPage: "confidence4.php",
    answerTag: "7",
  },
  Err: {
    answer: "08/16/2018",
    nextPage: "fetch.php",
  },
};

//script to add answer attempt to db
const inputFile = "bank_statement_question_input.php";

function getQuestionId() {
  // Get the script element that includes this script
  var scriptElement =
    document.currentScript ||
    document.querySelector('script[src="./bank_statement_script.js"]');

  var questionId = scriptElement.getAttribute("data-question-id");
  console.log("questionId", questionId);

  return questionId;
}

console.log(
  "next page",
  bankStatementQuestionAnswers[getQuestionId()].nextPage
);

function goToNextPage() {
  window.location.href = bankStatementQuestionAnswers[getQuestionId()].nextPage;
}

function toggleZoomScreen() {
  document.body.style.zoom = "240%";
  startTimer(this);
}

function helpAlert(e) {
  document.body.style.zoom = "100%";
  showAlert(
    "In the current statement, when is the Minimum Payment due?",
    () => {
      document.body.style.zoom = "240%";
    }
  );
}

function setColor(e) {
  var target = e.target;
  target.style.color = "#FF00FF";
  //var count = +target.dataset.count;

  //target.style.color = count === 0 ? "#000000 " : "#FF00FF";
  //target.dataset.count = count === 0 ? 1 : 0;
}

function setClr(e) {
  var target = e.target;
  var count = +target.dataset.count;

  target.style.color = count === 0 ? "#000000 " : "#316605";
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
  // e.setAttribute("onclick","stopTimer(this),setColor(event)");
}

function stopTimer(e) {
  var id = e.id;

  var user_answer;
  //user clicked on the correct element
  if (id == bankStatementQuestionAnswers[getQuestionId()].answerTag) {
    user_answer = bankStatementQuestionAnswers[getQuestionId()].answer;
  } else {
    var a = e.innerHTML;
    a = a.trim();
    a = a.replace(/(<([^>]+)>)/gi, "");
    a = a.replace(/(&amp;)/gi, " and ");
    a = a.replace(/(')/gi, "");
    a = a.replace(/(\r\n|\n|\r)/gi, " ");
    user_answer = a;
  }
  saveTime(getTime(t), user_answer, getQuestionId());
}

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
  console.log(
    "time: ",
    time,
    "  user_answer: ",
    user_answer,
    "  question_number: ",
    question_number
  );
  const correct_answer = bankStatementQuestionAnswers[getQuestionId()].answer;

  clicks++;
  if (t > 0) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status != 200) {
        console.log("Exception while saving data");

        /* document.getElementById("errMsg").innerHTML = "Exception while saving data : " + this.responseText; */
      } else {
        /* document.getElementById("errMsg").innerHTML = ""; */
        console.log("no error while saving data");
      }
    };
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
