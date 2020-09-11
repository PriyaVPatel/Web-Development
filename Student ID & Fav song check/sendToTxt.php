<!DOCTYPE html>
<html lang="EN">

	<?php

		// Priya Patel 
		// IS 448 HW 2 php code June 4, 2020
		// Takes user input from favsong.html and copies it into a text file 
		// f write is used to propery format the text file 
		// After user inouts thier info, it aknowladges inpout and provides 
		// redirect link to main html page

		// Creates title object for the title of song input by user
		$title= $_POST["title"];
		// Creates a director object ofr the composer director input by user
		$director=$_POST["director"];
		// Creates a artist object for the artist or performing group input by user
		$artist=$_POST["artist"];

		// Stores text file link
		$file = "/afs/umbc.edu/users/p/a/papri1/pub/text-files/listOfSongs.txt";
		// Opens text file and if not able to, it will say it was unable to do so
		$txtFile = fopen($file, "a") or die("Unable to open file!");

			// formats the text to store into text file
			fwrite($txtFile, "<strong> Song Name: </strong>");
			fwrite($txtFile, $title."\n\n"); 

			fwrite($txtFile, "<br>");

			// formats the text to store into text file
			fwrite($txtFile, "<strong> Composer:  </strong>");
			fwrite($txtFile, $director."\n\n");

			fwrite($txtFile, "<br>");

			// formats the text to store into text file
			fwrite($txtFile, "<strong> Artist:  </strong>");
			fwrite($txtFile, $artist."\n\n");

			fwrite($txtFile, "<br>");
			fwrite($txtFile, "<br>");
			
			// CLoses the text file
			fclose($txtFile);

		// Stores a thank you aknowledgment and redirect link
		$thank = "Thank you"."<br>";
		$redirect = '<a href="favsong.html">Go back to enter songs details</a>';
	?>
		
	<head> 
		<title> Translate input into txt file </title> 
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</head>

	<body>
		<h1> 
			<?php echo $thank; ?> 
		</h1>

		<p>
			<?php echo $redirect; ?>
			<br />
		</p>
	</body>
</html>
