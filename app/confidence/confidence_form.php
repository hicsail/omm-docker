<script>
    var subid = "<?php echo $subid; ?>";
</script>

<!-- The following scripts serve to log "hover_on_element" GA events for the confidence radio buttons only. -->
<script src="../common/detectElementInteraction.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const selectedElements = document.querySelectorAll('input[type="radio"]');

    const isPostTask = formData[getConfidenceId()].type == "post-task";

    var subid = "<?php echo $subid; ?>";
    var pageTitle = "<?php echo $pageTitle; ?>";
    console.log('subid:', subid, 'pageTitle:', pageTitle);

    detectAndLogHover(selectedElements, function(hoverTime, element) {
      if (track_ga != 0) {
        gtag("event", "hover_on_element", {
          subid: subid,
          page: pageTitle,
          element_hovered: element.value,
          stage: isPostTask ? "post-task" : "pre-task",
          hover_time: hoverTime,
          timestamp: Date.now(),
          event_callback: function() {
            console.log(
              `hover_on_element for confidence value ${element.value} sent to Google Analytics with hover_time: ${hoverTime} seconds`
            );
          },
        });
      }
    });
  });
</script>
<!-- end of "hover_on_element"-for-confidence-radio-buttons scripts. -->


<body onload="setInstructions()">

    <br>
    <br>

    <hr>
    <div class="jumbotron">
        <div class="container-fluid">
            <div class="inst-box">
                <center>
                    <h3><b class="confidence_instruction">
                            How confident are you that you will perform well on this task? </b></h3><br><br><br>
                    <h3><b></b>
                </center>
                <form method="post" action="">
                    <center>
                        <h6><b>
                                Not at all confident &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&emsp; Neutral &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp; Extremely confident <br><br></b></h4>
                    </center>
                    <center>
                        <h3><b><span style="word-spacing: 60px;">1 2 3 4 5 6 7 8 9 10 </span><br><br>
                                <span style="word-spacing: 64px;">
                                    <input type="radio" id="1" name="confident" value="1">
                                    <input type="radio" id="2" name="confident" value="2">
                                    <input type="radio" id="3" name="confident" value="3">
                                    <input type="radio" id="4" name="confident" value="4">
                                    <input type="radio" id="5" name="confident" value="5">
                                    <input type="radio" id="6" name="confident" value="6">
                                    <input type="radio" id="7" name="confident" value="7">
                                    <input type="radio" id="8" name="confident" value="8">
                                    <input type="radio" id="9" name="confident" value="9">
                                    <input type="radio" id="10" name="confident" value="10"><br><br> <br><br></span>
                                <!-- Add a hidden input field to hold the dynamic value -->
                                <input type="hidden" id="confidence_table" name="confidence_table" value="<?php echo $confidence_table; ?>">
                                <input type="submit" name="submit" style="width: 30%;" value="Submit" onclick="handleFormSubmission(document.getElementById('confidence_table').value); return false;" />


                </form>
                <br><br>


                </h3>
                </center>
                <br>
                <hr>
                <div class="next_page">
                    <br><br><br>
                    </center>
                    <h3><b>
                            <center class="task_instruction">
                            </center>

                    </h3><br>



                    <hr>
                    <br>
                    <br>
                    <center>
                        <a href="" class="button" style="color:white"><span> Start Activity </span></button>
                    </center></a>
                </div>
</body>
