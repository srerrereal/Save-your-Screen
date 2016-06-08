<html>
  <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <div id="header">
  	<img src="header.png" alt="header">
  </div>
   </head>
  <body>
  	<style>
  		
  		#header {

  			text-align: center;
  			padding-top: 2em;
  			padding-bottom: 4em;
  			padding-left: 0;
  			padding-right: 0;
  		}


  		body{

  			background-image:url(background.png);
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-position: none;
          background-size: 100%;

  		}

  		
  		.btn-danger {
  			padding: 20px;
  			background-color: #D30948;
  			float: center;
  			border: 0 none;
  			width: 500px;
  			height: 80px;
  			font-family: "Arial", Verdana, serif;
  			font-weight: 700;
  			font-size: 25px;
  			text-transform: uppercase;
  			text-align: center;
  			padding-top: 22px;
  			padding-left: 22px;
  			padding-right: 22px;
  			padding-bottom: 22px;

  		}



  		.btn-success, .active {
  			padding: 20px;
  			background-color: #8dec94;
  			float: center;
  			border: 0 none;
  			width: 500px;
  			height: 80px;
  			font-family: "Arial", Verdana, serif;
  			font-weight: 700;
  			font-size: 25px;
  			text-transform: uppercase;
  			text-align: center;
  			padding-top: 22px;
  			padding-left: 22px;
  			padding-right: 22px;
  			padding-bottom: 22px;

  		}

  		.input.message {

  			font-size: 20px;
  			font-family: Arial, Verdana, serif;

  		}

  		br {

  			padding: 2cm;
  		}

  		p.format { 

  			font-family: Arial, Verdana, serif;
  			font-size: 30px;
  			text-align: center;
  			padding-right: 23px;
  			color: #ffffff;

  		}

  		h2 {

  			color: #FFFFFF;
  			font-family: "Arial", Verdana, serif;
  			text-align: center;
  			font-size: 30px;
  			padding: 3px;
  			padding-left: 16px;
  		}
  	</style>
<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "'<h2>Sorry, there was an error uploading your file.</h2>'";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo '<h2>Sorry, there was an error uploading your file.</h2>';
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo '<h2>Sorry, there was an error uploading your file.</h2>';
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo '<h2>Sorry, there was an error uploading your file.</h2>';
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo '<input class="message" value="The file has been update>';
    } else {
        echo '<h2>Sorry, there was an error uploading your file.</h2>'; 
    }
}
?>
<br>
<h2><a href="index.php" style="margin-left: -30px" class="btn btn-success">Return to Main</a></p></h2>
	<p class="format">Or</p>
<h2><a href="resize.php" style="margin-left: -30px"class="btn btn-danger">Upload Again</a></h2>
</body>
</html>
 