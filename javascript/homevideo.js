function ajivideo()
				{
				
					var x = document.getElementsByClassName("haranhide");
					var i;
					for (i = 0; i < x.length; i++) 
					{
						if(i != 0)
						{
							x[i].style.display = "none";
						}
						else
						{
							x[i].style.display="block";
						
						}
					}
				

				
				}
				function ajivideo1()
				{
				
					var x = document.getElementsByClassName("haranhide");
					var i;
					for (i = 0; i < x.length; i++) 
					{
						if(i != 1)
						{
							x[i].style.display = "none";
						}
						else
						{
							x[i].style.display="block";
						
						}
					}
				

				
				}
				function ajivideo2()
				{
				
					var x = document.getElementsByClassName("haranhide");
					var i;
					for (i = 0; i < x.length; i++) 
					{
						if(i != 2)
						{
							x[i].style.display = "none";
						}
						else
						{
							x[i].style.display="block";
						
						}
					}
				
				}
				function ajivideo3()
				{
				
					var x = document.getElementsByClassName("haranhide");
					var i;
					for (i = 0; i < x.length; i++) 
					{
						if(i != 3)
						{
							x[i].style.display = "none";
						}
						else
						{
							x[i].style.display="block";
						
						}
					}
				

				
				}
				function ajivideo4()
				{
				
					var x = document.getElementsByClassName("haranhide");
					var i;
					for (i = 0; i < x.length; i++) 
					{
						if(i != 4)
						{
							x[i].style.display = "none";
						}
						else
						{
							x[i].style.display="block";
						
						}
					}
				

				
				}
				function ajivideo5()
				{
				
					var x = document.getElementsByClassName("haranhide");
					var i;
					for (i = 0; i < x.length; i++) 
					{
						if(i != 5)
						{
							x[i].style.display = "none";
						}
						else
						{
							x[i].style.display="block";
						
						}
					}
				

				
				}
					
				function ajivideo6()
				{
				
					var x = document.getElementsByClassName("haranhide");
					var i;
					for (i = 0; i < x.length; i++) 
					{
						if(i != 6)
						{
							x[i].style.display = "none";
						}
						else
						{
							x[i].style.display="block";
						
						}
					}
				

				
				}	


				function ajivideo7()
				{
				
					var x = document.getElementsByClassName("haranhide");
					var i;
					for (i = 0; i < x.length; i++) 
					{
						if(i != 7)
						{
							x[i].style.display = "none";
						}
						else
						{
							x[i].style.display="block";
						
						}
					}
				

				
				}
				
				function ajivideo8()
				{
				
					var x = document.getElementsByClassName("haranhide");
					var i;
					for (i = 0; i < x.length; i++) 
					{
						if(i != 8)
						{
							x[i].style.display = "none";
						}
						else
						{
							x[i].style.display="block";
						
						}
					}
				

				
				}
				
				function ajivideo9()
				{
				
					var x = document.getElementsByClassName("haranhide");
					var i;
					for (i = 0; i < x.length; i++) 
					{
						if(i != 9)
						{
							x[i].style.display = "none";
						}
						else
						{
							x[i].style.display="block";
						
						}
					}
				

				
				}
				function ajivideo10()
				{
				
					var x = document.getElementsByClassName("haranhide");
					var i;
					for (i = 0; i < x.length; i++) 
					{
						if(i != 10)
						{
							x[i].style.display = "none";
						}
						else
						{
							x[i].style.display="block";
						
						}
					}
				

				
				}
				
				
				function ajivideo11()
				{
				
					var x = document.getElementsByClassName("haranhide");
					var i;
					for (i = 0; i < x.length; i++) 
					{
						if(i != 11)
						{
							x[i].style.display = "none";
						}
						else
						{
							x[i].style.display="block";
						
						}
					}
				

				
				}
									

							
							
							
							
							
							
							
							
							
							
							
	var divindex = 0;						
function myFunction() 
									
		{
			
			divindex ++;
			if(divindex % 2 == 1)
			{
				document.getElementById("myDropdown").style.height="500px";
			}
			else
			{
				document.getElementById("myDropdown").style.height="0px";
			}
			
		}


// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
							
							
							
							
							
							var ajishow = 0;
										
							
										/* When the user clicks on the button, 
							toggle between hiding and showing the dropdown content */
						
							function myFunctions()
							{	
								ajishow ++;
								if(ajishow % 2 == 1)
								{
								
									var x = document.getElementById("myDropdowns").classList.toggle("show");
									
									if(document.getElementById("myDropdowns").style.display="block")
									{
										document.getElementById("ajileftsidehide").style.display="none";
									document.getElementById("ajileftsidehide1").style.display="none";
								document.getElementById("ajileftsidehide2").style.display="none";
									}
									
									else
									{
													document.getElementById("ajileftsidehide").style.display="block";
									document.getElementById("ajileftsidehide1").style.display="block";
								document.getElementById("ajileftsidehide2").style.display="block";
									
									}
								}
								else
								{
									document.getElementById("myDropdowns").style.display="none";
															document.getElementById("ajileftsidehide").style.display="block";
									document.getElementById("ajileftsidehide1").style.display="block";
								document.getElementById("ajileftsidehide2").style.display="block";
								
								}
							}
							
							
							
							
							
							
							
						

							// Close the dropdown if the user clicks outside of it
							window.onclick = function(e)
							{
							  if (!e.target.matches('.dropbtns'))
							  {
								var myDropdowns = document.getElementById("myDropdowns");
								  if (myDropdowns.classList.contains('show')) 
								  {
									myDropdowns.classList.remove('show');
								  }
							  }
							}
								
								
								
								
															
															
						




			
			





window.onscroll = function() {scrollFunction()};

function scrollFunction() 
{
    if (document.body.scrollTop >= 0 || document.documentElement.scrollTop >= 0) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

