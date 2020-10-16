var lo = 0;
var txt = 'Dear customer please give us a feedback to improve our website';
var speed = 160;

function typeWriter() 
{

  if (lo < txt.length) {
    document.getElementById("changea").innerHTML += txt.charAt(lo);
    lo++;
    setTimeout(typeWriter, speed);
  }
}





var j = 0;
var j1 = 0;
var j2 = 0;
var j3 = 0;
var j4 = 0;
var star=document.getElementsByClassName('checked');
function starvisible()
{
	 j ++;
     if( j % 2 == 1 )
     {
      var i;

      for(i = 0; i < star.length - 4; i ++)
      {
      star[i].style.color="orange";
      }
     }
     
     else
     {
     	
     var i;

      for(i = 0; i < star.length - 4; i ++)
      {
      star[i].style.color="black";
      }
     
     }

}
function starvisible1()
{
var i;
	j1 ++;
    if(j1 % 2 == 1)
    {

      for(i = 0; i <star.length - 3; i ++)
      {
      star[i].style.color="orange";
      }
     }
     else
     {
     
     var i;

      for(i = 0; i < star.length - 3; i ++)
      {
      star[i].style.color="black";
      }
     
     }

}
function starvisible2()
{

var i;
	j2 ++;
    if(j2 % 2 == 1)
    {

      for(i = 0; i <star.length - 2; i ++)
      {
      star[i].style.color="orange";
      }
     }
     else
     {
     
     var i;

      for(i = 0; i < star.length - 2; i ++)
      {
      star[i].style.color="black";
      }
     
     }
}
function starvisible3()
{

var i;
	j3 ++;
    if(j3 % 2 == 1 )
    { 

      for(i = 0; i <star.length - 1; i ++)
      {
      star[i].style.color="orange";
      }
     }
     else
     {
     
     var i;

      for(i = 0; i < star.length - 1; i ++)
      {
      star[i].style.color="black";
      }
     
     }
}
function starvisible4()
{

var i;
	j4 ++;
    if(j4 % 2 == 1)
    {

      for(i = 0; i <star.length; i ++)
      {
      star[i].style.color="orange";
      }
     }
     else
     {
     
     var i;

      for(i = 0; i < star.length; i ++)
      {
      star[i].style.color="black";
      }
     
     }
}





function on() 
{
	
    document.getElementById("overlay").style.display = "block";
    
}

function off() 
{
	
    document.getElementById("overlay").style.display = "none";
    
}
