function toCelsius(fahrenheit)
		{
			return(5/9) + (fahrenheit - 32);
		}
		document.getElementById("demo").InnerHTML = toCelsius(77);