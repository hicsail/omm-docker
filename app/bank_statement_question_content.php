<?php
include 'connect.php';
include 'getFormId.php';
?>


<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet" type="text/css" href="instr.css">

</head>

<body onload="setQuestionText(); toggleZoomScreen()">
    <script>
        function toggleZoomScreen() {
            document.body.style.zoom = "130%";
        }
    </script>
    <div class="container-fluid">

        <br>
        <br><br>
        <hr>
        <div class="jumbotron">
            <div class="container-fluid">
                <div class="inst-box">
                    <p5><b>
                            <center>
                                <h2 style="font-family: georgia;" id="questionText"></h2>
                            </center>
                        </b></p5>
                    </p5><br>
                </div>
            </div>
        </div>
        <hr>
        <br>
        <div class="formId" hidden="true"><?php echo ($formid === "B") ? "B" : "A"; ?></div>
        <center>
            <a href=<?php echo ($formid === "B") ? "EliWinter1.php" : "PatMiller1.php"; ?> class="button" style="color:white"><span> Next </span></button>
        </center></a>

</body>