<!--<script>
/*  function assignCookie(){
  window.alert(i);
  //total nr in list
 /*window.alert(document.getElementsByClassName("article").length);
  //pos in list and definition of variable per button
  var sqlindex = $sqlindex;
  for (i=0; i<=sqlindex;i++){
    var name = i;
    this [name] = $sqlindex;
    window.alert(name);//how do we get this to work?
  }*/
/* This code will be developed later, I suppose... need to fix the above
 window.alert(dtartnum);
  var pattern = /Article Number \d{1,3}/;
    if(pattern.test(document.getElementsByClassName(dtartnum).value)){
      window.alert(pattern.test(document.getElementsByClassName(dtartnum).value));
    }
    else{
      window.alert(getElementsByClassName(dtartnum).value);
    }
}*/
function assignCookie(ele)      {
//window.alert("Caller is " +arguments.callee.caller.toString());
  var id = ele.id;
//  window.alert('area element id = ' + id);
  window.location.href="templatepage.php?id="+id+"";
}
</script>-->
