const instructionPageData = {
  instruction_page: {
    instruction: `For this task, you have to login to a pretend credit card account and download a statement. <br><br><br>Specific instructions will be given in the next page.<br><br><br>        If you make an error, an <span class="cerror" style="color:blue" onclick="showAlert('This is an error message');" >error</span> message will ask you to try another option.<br><br><br>        If you forget what you have to do, click on the "Help" button in the upper right hand corner of the screen.`,
    nextPage: "instruction_page2.php",
  },
  instruction_page2: {
    instruction:
      ' On the next page, please login with username <span style="color: blue;"> pat</span> and password <span style="color: blue;">admin123</span>. <br><br><br>If needed, you can click on “forgot username/password”.<br><br><br>     After you login, please download the <span style="text-decoration: underline; color: blue;">August 2018</span> statement.<br><br><br>Once I click on "Start Activity”, please complete this task as quickly and accurately as you can.<br><br><br>',
    nextPage: "confidence.php",
  },
  task_instruction: {
    instruction:
      " Thank you for downloading the statement. <br><br><br>Please review the different parts of this statement. You do not have to memorize any information.  <br><br><br> Just see the overall format of the statement and know where various pieces of information are located. <br><br><br>Let me know when you are ready to begin the next part of the task.<b>      ",
    nextPage: "task_instructionp2.php",
  },
  task_instructionp2: {
    instruction:
      "For this part of the task, you will be asked a series of questions about the credit card statement that you just saw.<br><br><br> The answers will be found on the statement and you have to click on the answer.<br><br><br> Before we actually begin the task, let’s practice on a different example.",
    nextPage: "demo1.php",
  },
  task_instructionp3: {
    instruction:
      'Now on the next screen a question will be displayed.<br><br><br> Once I click "Next", the credit card statement will be displayed and you have to click on the answer.<br><br><br> Try to answer the question as quickly as you can, but also as carefully as you can. Ready?',
    nextPage: "confidence3.php",
  },
  task_instructionp4: {
    instruction:
      ' This part of the task is focused on the <b><span style="color: blue;">Account Activity</span></b>. Please follow along carefully:<br><br><br>      <b><span style="color: #8A2908;">This is Pat Miller’s credit card statement. <br><br><br>Pat is 64 years old and lives in New York City. <br><br><br>During this statement period, Pat did not travel outside New York City and incurred regular everyday expenses.</span><br><br><br></b>  I would like you to imagine that this is a real-life credit card statement and review it carefully, as if it were yours.<br><br><br>',

    nextPage: "task_instructionp5.php",
    //TODO set name based on formId
  },
  task_instructionp5: {
    instruction:
      'Once you are ready, the credit card statement will once again be displayed. <br><br><br>You have to go to the <b><span style="color: blue;">Account Activity</span> </b> section and click on any suspicious or strange transactions. <br><br><br>There could be several such transactions or there could be none. <br><br><br>Once you complete this task, let me know that you are done.      ',

    nextPage: "confidence5.php",
    //TODO set name based on formId
  },
};

function getTaskInstructionId() {
  // Get the script element that includes this script
  var scriptElement =
    document.currentScript ||
    document.querySelector('script[src="./instruction_script.js"]');
  return scriptElement.getAttribute("data-instruction-id");
}

function setTaskInstructions() {
  const taskId = getTaskInstructionId();
  document.querySelector("center.instruction").innerHTML =
    instructionPageData[taskId].instruction;

  //set next page
  document.querySelector("a.button").href =
    instructionPageData[taskId].nextPage;

  //show help button on instruction_page
  if (taskId == "instruction_page") {
    document.querySelector("button.help").hidden = false;
  }
}

function updatePageBasedOnFormType() {
  //replace pat with eli etc
}
