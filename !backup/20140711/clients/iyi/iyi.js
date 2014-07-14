function clearText(thefield){
  if (thefield.defaultValue==thefield.value) {
    thefield.value = ""
    thefield.style.color = "black"
    thefield.style.fontStyle = "normal";}}

function replaceText(thefield) {
  if (thefield.value == ""){
    thefield.value = thefield.defaultValue
    thefield.style.color = "#757575"
    thefield.style.fontStyle = "italic" }}
    
function changeContent(id, html) {
  if (document.getElementById || document.all) {
      var el = document.getElementById? document.getElementById(id): document.all[id];
      if (el && typeof el.innerHTML != "undefined") el.innerHTML = html;
   }
}
