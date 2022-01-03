  function serverResNew() {
  	var xhttp  = undefined;
  	if(window.XMLHttpRequest)	{
  		xhttp = new XMLHttpRequest();
  		/*xhttp.onreadystatechange = function() {
  			if(this.readyState === 4 && this.status === 200) {
  				document.getElementById("test").innerHTML = this.responseText;
  			}
  		};*/
  		console.log(xhttp.readyState);
  		console.log(xhttp.status);
  		xhttp.open("GET", "serverRes.txt", false);
  		xhttp.send();
  		document.getElementById("test").innerHTML = xhttp.responseText;
  		console.log(xhttp.readyState);
  		console.log(xhttp.status);
  	}
  }