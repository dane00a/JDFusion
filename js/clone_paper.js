
var target = document.getElementsByClassName("article_doc")[0].contentDocument.body;
function target_check(){
  window.alert("got here!");
  if (typeof(target) !== 'undefined'){
  var colClass = target.className;
  window.alert(target);
  window.alert(colClass);
}
else{
  target_check();
  window.alert("trying again");
  }
}
target_check();
//document.getElementsByClass(class){

//}
