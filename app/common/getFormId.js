/**
 *
 * @param {*} callback
 * @param {*} calledFromNestedFile true if function wil lbe invoked by a file that is two levels deep relative to the root folder of the project
 */
function getFormId(callback, calledFromNestedFile) {
  // Create a new XMLHttpRequest object
  var xhr = new XMLHttpRequest();

  // Define the URL of your PHP script
  var url = "../database/getFormId.php";

  if (calledFromNestedFile) {
    url = "../../database/getFormId.php";
  }

  // Set up the AJAX request (GET request to the PHP script)
  xhr.open("GET", url, true);

  // Define the function to handle the response
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      // Parse the JSON response from the PHP script
      var response = JSON.parse(xhr.responseText);

      // Use the value of formid from the response
      var formId = response.formId;

      // Do something with the formid value (e.g., display it)
      if (callback) {
        callback(formId);
      }
    }
  };

  // Send the AJAX request
  xhr.send();
}
