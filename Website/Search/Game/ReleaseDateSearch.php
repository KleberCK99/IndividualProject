 <head>
    <meta charset="UTF-8" />
    <title>Search by Release Date</title>
	<link rel="stylesheet" href="/Css.css">
</head>
  <body>
    <div class="container">
	  <div class="header">
		<a href="/Index.php">Home</a>
      </div>
      <div class="content">
	  	<button class = "back" onclick='window.location.href="/Search/Game/Game.php"'><span>Back</span></button></br> 
		<h1>Search by Release Date</h1>
		<?php
		echo '<form action = "/Search/Game/ReleaseDateSearchResults.php" method = "POST" style="max-width:500px;margin:auto">', "\n",
			'<hr>', "\n",
			'<label for="releasedate"><b>Release Date</b></label>', "\n",
			'<input type="text" class="input" name="releasedate" required/><br/>', "\n",
			'<hr>', "\n",
			
			'<button type="submit" name = "submit" class="submitbutton">Submit</button>',
		'<p></form></p>', "\n";
		?>
	  
	  </div>
	  <div class="footer">
	  </div>
	</div>
   </body>