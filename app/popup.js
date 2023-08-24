async function showAlert(message, callback = null) {
  const popup = new Popup({
    id: "my-popup",
    title: message,
    // TODO investigate why content fails to show
    content: `
   
`,
    // reduce font size of title since it's being used in place of content
    css: `
    /* optional .popup */
    .popup-title {
        font-weight: normal;
        font-size: 30px;
    }`,
    hideCallback: () => {
      if (callback) {
        callback();
      }
    },
  });
  popup.show();
}
