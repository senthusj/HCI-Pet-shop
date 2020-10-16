	
	
	function refresh() { location.reload(); }
	
	
	
	
	
		
		

		function showSlides() {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			var dots = document.getElementsByClassName("dot");
			for (i = 0; i < slides.length; i++) {
			   slides[i].style.display = "none";  
			}
			slideIndex++;
			if (slideIndex > slides.length) {slideIndex = 1}    
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex-1].style.display = "block";  
			dots[slideIndex-1].className += " active";
			setTimeout(showSlides, 6000); // Change image every 2 seconds
		}
		
		
		
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
		window.onclick = function(event)
		{
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
		
		
		
		
		// Set the date we're counting down to
var countDownDate = new Date("Jan 5, 2019 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
		
		


		
							