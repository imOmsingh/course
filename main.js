

var range=document.getElementById("range");
var text=document.getElementsByClassName("text-1");
console.log(text);
text[0].innerHTML=range.value;
range.oninput=function(){
	text[0].innerHTML=this.value;
}