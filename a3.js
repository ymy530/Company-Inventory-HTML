window.onload = function() {
  prepareListener();
}
function prepareListener() {
  var droppy;
  var droppy1;
  droppy = document.getElementById("pickaorder");
  droppy.addEventListener("change",getArt); }
  droppy1 = document.getElementById("customeragent");
  droppy1.addEventListener("change",getArt); }
function getArt() {  	
  this.form.submit();
}