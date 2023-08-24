const inputFile = "confidence_input.php";

function handleFormSubmission(confidence_table) {
  var confidence = document.querySelector('input[name="confident"]:checked');
  if (confidence) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", inputFile, true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          showAlert("Your confidence value is updated");
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
    showAlert("Please select a confidence value before submitting.");
  }
}
