window.onload = function() {
  prepareListener();
}
function prepareListener() {
  //var droppy;
  //var droppy1;
  //document.getElementById("pickaorder").addEventListener("change",getArt);
  document.getElementById("customeragent").addEventListener("change",getArt);
  }
function getArt() { 
  alert("hello"); 	
  this.form.submit();
}
