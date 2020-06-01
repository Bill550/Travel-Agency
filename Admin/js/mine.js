///////////////// for Image Preview??????????????????????

function triggerClick(e) {
  document.querySelector("#packageimage").click();
}

function displayImage(e) {
  if (e.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      document
        .querySelector("#imageplaceholder")
        .setAttribute("src", e.target.result);
    };
    reader.readAsDataURL(e.files[0]);
  }
}
//////////////////////////////////////// for Nullvar  Image Preview ///////////////////////////////////////
