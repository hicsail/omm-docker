<?php
$subid = isset($_SESSION['subid']) ? $_SESSION['subid'] : (isset($_COOKIE['subid']) ? $_COOKIE['subid'] : '');
$track_ga = isset($_SESSION['track_ga']) ? $_SESSION['track_ga'] : (isset($_COOKIE['track_ga']) ? $_COOKIE['track_ga'] : 'unset');
?>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-08TXFVE94F"></script>
<script>
    //get track_ga from session, set to 0 if not set
    var track_ga = '<?php echo $track_ga; ?>';
    console.log('track_ga (setup)', track_ga);

    if (track_ga == "1" || track_ga == "unset") {
        console.log('Google Analytics tracking is enabled');
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        // if subid ends with "debug", then set the debug flag
        var debug = <?php echo (substr($subid, -5) == 'debug') ? 1 : 0; ?>;
        if (debug == 1) {
            gtag('config', 'G-08TXFVE94F', {
                'debug_mode': true,
                'user_id': '<?php echo $subid; ?>'
            });
            console.log('Debug mode enabled');
        } else {
            gtag('config', 'G-08TXFVE94F', {
                'user_id': '<?php echo $subid; ?>'
            });
        }

        console.log('window.focusBlurListenersAdded', window.focusBlurListenersAdded);

        if (!window.focusBlurListenersAdded) {
            console.log('Adding focus and blur event listeners');
            window.focusBlurListenersAdded = true;

            var pageTitleStr = "<?php echo isset($pageTitle) ? $pageTitle : 'Default Title'; ?>";
            var unfocusStartTime = null;

            // Function to handle page focus
            // function handleFocus() {
            //     console.log("Page is focused");
            //     if (unfocusStartTime) {
            //         gtag("event", "page_focused", {
            //             subid: "<?php echo $subid; ?>",
            //             page: pageTitleStr,
            //             time_spent_unfocused: Math.floor((Date.now() - unfocusStartTime) / 1000),
            //             event_callback: function() {
            //                 console.log("page_focused event sent to Google Analytics");
            //             },
            //         });
            //         unfocusStartTime = null;
            //     }
            // }

            // Function to handle page unfocus
            // function handleBlur() {
            //     unfocusStartTime = Date.now();
            //     console.log("Page is unfocused");
            //     gtag("event", "page_unfocused", {
            //         subid: "<?php echo $subid; ?>",
            //         page: pageTitleStr,
            //         event_callback: function() {
            //             console.log("page_unfocused event sent to Google Analytics");
            //         },
            //     });
            // }
            // function handleBlurOrVisibilityChange() {
            //     if (document.visibilityState === "hidden") {
            //         unfocusStartTime = Date.now();
            //         console.log("Page is unfocused");
            //         gtag("event", "page_unfocused", {
            //             subid: "<?php echo $subid; ?>",
            //             page: pageTitleStr,
            //             event_callback: function() {
            //                 console.log("page_unfocused event sent to Google Analytics");
            //             },s
            //         });
            //     }
            // }

            // // Add event listeners for focus and blur
            // window.addEventListener("focus", handleFocus);
            // // window.addEventListener("blur", handleBlur);
            // document.addEventListener("visibilitychange", handleBlurOrVisibilityChange);

        }

    } else {
        console.log('Google Analytics tracking is disabled');
    }
</script>