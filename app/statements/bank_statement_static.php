<html>



<?php include '../../common/gtag_setup.php'; ?>
<script>
    function toggleZoomScreen() {
        document.body.style.zoom = "240%";
    }

    function goToNextPage() {
        window.location.href = "../instructions/4.php";
    }
</script>
<title>Bank Statement Review</title>

<?php
include 'bank_statement_style.php'; ?>
<!-- <script src="bank_statement_script.js" data-question-id="question1"></script> -->

<?php
include 'bank_statement_content.php';
?>

</html>