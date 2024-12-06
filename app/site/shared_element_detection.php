<script src="../common/detectElementInteraction.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Selects most of the clickable elements on the page
    const selectedElements = document.querySelectorAll('p, h1, h2, h3, h4, h5, h6, a, input[type="submit"], img, span');

    var subid = "<?php echo $subid; ?>";
    var pageTitle = "<?php echo $pageTitle; ?>";
    console.log('subid:', subid, 'pageTitle:', pageTitle);

    // detecting double and multiple clicks on site pages don't work given that
    // on these pages, a popup is shown as soon as an incorrect click is made, 
    //breaking the detection process. If PIs insist on having this feature,
    // pop up can be modified to show after a certain number of clicks

    detectAndLogHover(selectedElements, function(hoverTime, element) {
      if (track_ga != 0) {
        gtag("event", "hover_on_element", {
          subid: subid,
          page: pageTitle,
          element_hovered: element.textContent,
          hover_time: hoverTime,
          timestamp: Date.now(),
          event_callback: function() {
            console.log(
              `hover_on_element sent to Google Analytics with hover_time: ${hoverTime} seconds`
            );
          },
        });
      }
    });
  });
</script>
