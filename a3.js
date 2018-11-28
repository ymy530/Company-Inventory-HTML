window.onload = function() {
  prepareListener();
}
function prepareListener() {
  var droppy;
  var droppy1;
  droppy = document.getElementById("pickaorder");
  droppy1 = document.getElementById("customeragent");
  droppy.addEventListener("change",getArt); }
  droppy1.addEventListener("change",getAgent); }
function getArt() { 
  alert("hello"); 	
  this.form.submit();
}

function getAgent() { 
  alert("hello"); 	
  this.form.submit();
}