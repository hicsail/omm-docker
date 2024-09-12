const inputFile = "confidence_input.php";

function handleFormSubmission(confidence_table) {
  console.log("confidence: ", confidence_table);
  var confidence = document.querySelector('input[name="confident"]:checked');

  if (confidence) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", inputFile, true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          console.log("confidence.value", confidence.value);

          const isPostTask = formData[getConfidenceId()].type == "post-task";

          gtag("event", "confidence_rating", {
            subid: subid,
            page: "Confidence",
            rating: confidence.value,
            stage: isPostTask ? "post-task" : "pre-task",
            event_callback: function () {
              console.log("confidence_rating event sent to Google Analytics");
            },
          });

          showAlert("Your confidence value is updated", () => {
            // move to next page if on a post task confidence page
            if (isPostTask) {
              window.location.href = formData[getConfidenceId()].nextPage;
            }
          });
        } else {
          showAlert("An error occurred while submitting the form.");
        }
      }
    };
    // Send form data to execute PHP script
    xhr.send(
      "confident=" + confidence.value + "&confidence_table=" + confidence_table
    );
  } else {
    showAlert("Please please select a confidence value before submitting.");
  }
}

const preTaskInstruction =
  "How confident are you that you will perform well on this task?";
const postTaskInstruction =
  "This part of the task is now complete. <br><br>How confident are you that you performed well on this task?";

const formData = {
  1: {
    type: "pre-task",
    instruction:
      ' On the next page, please login with username <span style="color: blue;">pat</span> and password <span style="color: blue;">admin123</span>. <br><br><br>If needed, you can click on “forgot username/password”.<br><br><br>After you login, please download the <span style="text-decoration: underline; color: blue;">August 2018</span> statement.<br><br><br>Once I click on "Start Activity”, please complete this task as quickly and accurately as you can.<br><br><br>',
    nextPage: "../site/login.php",
  },
  2: {
    type: "post-task",
    nextPage: "../instructions/3.php",
  },
  3: {
    type: "pre-task",
    instruction:
      '  Now on the next screen a question will be displayed.<br><br><br> Once I click "Next", the credit card statement will be displayed and you have to click on the answer.<br><br><br> Try to answer the question as quickly as you can, but also as carefully as you can. Ready?',
    nextPage: "../questions/1.php",
  },
  4: {
    type: "post-task",
    nextPage: "../instructions/8.php",
  },
  5: {
    type: "pre-task",
    instruction:
      'Once you are ready, the credit card statement will once again be displayed. <br><br><br>You have to go to the <b><span style="color: blue;">Account Activity</span> </b> section and click on any suspicious or strange transactions. <br><br><br>There could be several such transactions or there could be none. <br><br><br>Once you complete this task, let me know that you are done.',
    nextPage: "../statements/pat/8.php", //TODO: set based on formID
  },
  6: {
    type: "post-task",
    nextPage: "thankyou.php",
  },
};

function getConfidenceId() {
  // Get the script element that includes this script
  var scriptElement =
    document.currentScript ||
    document.querySelector('script[src="./confidence_script.js"]');

  return scriptElement.getAttribute("data-confidence-id");
}

//set confidence form instruction based on form type (pre-task or post-task)
function setInstructions() {
  if (formData[getConfidenceId()].type == "pre-task") {
    // Set the text inside the <center> element with class "instruction"
    document.querySelector("b.confidence_instruction").textContent =
      preTaskInstruction;

    // Set task instruction
    document.querySelector("center.task_instruction").innerHTML =
      formData[getConfidenceId()].instruction;

    //set next page
    document.querySelector("a.button").href =
      formData[getConfidenceId()].nextPage;
  } else {
    document.querySelector("b.confidence_instruction").innerHTML =
      postTaskInstruction;

    //hide next page button
    document.querySelector("div.next_page").hidden = true;
  }

  updatePageBasedOnFormType();
}
