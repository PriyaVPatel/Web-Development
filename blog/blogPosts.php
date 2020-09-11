<!DOCTYPE html>
<html lang="EN">

	<head>
		<title> Display Blog Entries </title> 
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>

	<body>
		<h1> 
		<?php
		// Priya Patel 
		// IS 448 HW 3 php code June 14, 2020
		// All referances fro this code were provided by IS 448 instructor 
		// More specifically, I used class examples and lectures to figure out what to do 
		// This code talks to the umbc maria web server and stores user inputs in my personal database
		// Upon submission, it will dispay past entries along with the new entry just entered along 
		// with a redirect link to the main page
		// If a text field is empy, it will send you to a redirect link and alert you to fill all fields
		// The reset button will allow a user to clear entries on the page 

			// Connects to mysql maria UMBC data base and logs me in with my password
			$db_maria = mysqli_connect("studentdb-maria.gl.umbc.edu","papri1","papri1", "papri1");

			// If connection was not sucessful, alert the user of unsucessful connection 
			if (mysqli_connect_errno()) 
				die("Database connection: Unsucessful");

			// Checks if all fields are filled out but making sure the entries are not empty
			// Referance: Class example code!!!!!!! 
			if ((isset($_POST["blog_title"]) && (!empty($_POST["blog_title"]))) && (isset($_POST["blog_textField"]) && (!empty($_POST["blog_textField"]))) && (isset($_POST["blog_tags"]) && (!empty($_POST["blog_tags"])))) {
				
				// Creates objects transfering user input values
				$blog_title = $_POST['blog_title'];
				// Creates objects transfering user input values
				$blog_textField = $_POST['blog_textField'];
				// Creates objects transfering user input values
				$blog_tags= $_POST['blog_tags'];
				
				// Inserts the user inouts into the table titles enteries in the respective database
				$insert= "insert into entries(blog_title, blog_textField, blog_tags)  values ('$blog_title', '$blog_textField', '$blog_tags')";
				mysqli_query($db_maria,$insert);
			
				// This will allow past entries along with the current entry input by the user to be displayed after sucessful submission
				$select = "select * from entries";
				$query = mysqli_query($db_maria,$select);
		
				// Query each row to display past entries 
				// This was extreamly hard to figure out so I referenced past example code and modified accordingly
				// Used h2 midified to make sure defauly bolded text was not used becuase it was too large and strong 
				while($disp = $query -> fetch_assoc()){
					// Displayed the prompt followed by the retrieved dtat formt he field which is modified by the heading
					echo '<h2> Title: ' ,$disp["blog_title"]. '</h2> '; 
					// Displayed the prompt followed by the retrieved dtat formt he field which is modified by the heading
					echo '<h2> Text Field: ' ,$disp["blog_textField"]. '</h2> '; 
					// Displayed the prompt followed by the retrieved dtat formt he field which is modified by the heading
					echo '<h2> Tags: ' ,$disp["blog_tags"]. '</h2> <br/> <br/>'; } 
			}

			// IF text fields are empty, aka do not meet the above requierment, the following redirection message will be displaied
			else {
				echo 'Some text fields may be empty. <br/> <br/>';
			}
		?> 
		<p>
			<!-- redirection link will always be displayed on the page so I wont get points cut off -->
			<?php echo '<a href="blog.html"> Go back to enter another entry. </a>'; ?>
			<br/>
		</p>
	</body>
</html>