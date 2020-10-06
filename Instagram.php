<html>
<head>
	<title>Digital Clock</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&display=swap&subset=cyrillic" rel="stylesheet">
	<meta https-equiv="refresh" content="10">
    	<style>
        	body {
            		background: #1e1e1e;
			margin: 0;
			text-align: center;
  			padding: 15px 25px;
			border-radius: 10px;
			font-family: 'Roboto';
            		width: 200px;
            		height: 100px;
  			font-weight: 500;
  			font-size: 15px;
  			opacity:0.7;
            		color: white;
        	}
		#folowersContent {
			font-size: 16px;
			border-radius: 10px;
		}
		#Refresh {
			background: red;
width: 15px;
height: 15px;
		}
    	</style>
</head>

<body onload="showtime()" onclick="DoInit();>
	
	<h3><strong id="folowersContent">none!</strong></h3>

	<script language="javascript">

  		function DoInit(){
			var followers = 333;
      			var xhr = new XMLHttpRequest();

      			xhr.open('GET', 'https://www.instagram.com/igor_berezhniy/?__a=1', false);
      			xhr.send();
      			if (xhr.status != 200) {
        			statusContent.innerHTML="<p>"+xhr.status + ": " + xhr.statusText+"</p>";

      			} else {
				var input = xhr.responseText;
				var profile = input.split('"');
				var prof2 = profile[32].split(':');
				var prof3 = prof2[1].split('}');

				var followers = xhr.responseText.split('"')[32].split(':')[1].split('}')[0];

				folowersContent.innerHTML="<p>Followers : " + followers + "</p>";
      			}
			setTimeout("DoInit()",1000); // Display time after every one second	
		};

 	</script>
</body>
</html>