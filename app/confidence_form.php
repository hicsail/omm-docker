<center>
    <h3><b>
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