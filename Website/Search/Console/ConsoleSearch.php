 <head>
    <meta charset="UTF-8" />
    <title>Search by Console</title>
	<link rel="stylesheet" href="/Css.css">
</head>
  <body>
    <div class="container">
	  <div class="header">
		<a href="/Index.php">Home</a>
      </div>
      <div class="content">
		<button class = "back" onclick='window.location.href="/Search/Console/Console.php"'><span>Back</span></button></br> 
		<h1>Search by Name</h1>
		<?php
		echo '<form action = "/Search/Console/ConsoleSearchResults.php" method = "POST" style="max-width:500px;margin:auto">', "\n",
			'<hr>', "\n",
			'<label for="name"><b>Console Name</b></label>', "\n",
			'<input type="text" class="input" name="name" required/><br/>', "\n",
			'<hr>', "\n",
			
			'<button type="submit" name = "submit" class="submitbutton">Submit</button>',
		'<p></form></p>', "\n";
		?>
	  
	  </div>
	  <div class="footer">
	  </div>
	</div>
   </body>