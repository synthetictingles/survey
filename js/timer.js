setTimeout(function(){
var sec = 0;
function pad ( val ) { return val > 9 ? val : val; };
var status=document.getElementById("timerfield").getAttribute('contenteditable');
 console.log("TESTA DENNA GREJ: ", status);
if(status=='true')  {
  setInterval( function(){
    var timerfield=document.getElementById("timerfield");
      //document.getElementById("time").innerHTML=pad(++sec%60);
      sec++;
      timerfield.setAttribute("value", sec);
  }, 1000);
}else {
   console.log("FAIL");
};
}, 2000);
