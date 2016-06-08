<html>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<head>
<div id="header">
	<img src="header.png" alt="header">
</div>

		<style>
		
		#header {

			text-align: center;
			padding-left: 0;
			padding-right: 0;
			padding-top: 2em;
			padding-bottom: 3em;

		}	


		input.display {

			padding-left: 30px
		}
		

		h2 { 
				
				font-family: "Arial", Verdana, serif;
				font-size: 40px;
				color: #505050;
				text-align: center;


			}


		body {
			    background-image:url(background.png);
          		background-repeat: no-repeat;
          		background-attachment: fixed;
          		background-position: none;
          		background-size: 100%;
			}

				


				.btn-danger {

					background-position: center;
					background-color: #d33045;
					border-color: none, 0;
					width: 1200px;
					height: 80px;
					font-family: "Arial", Verdana, serif;
					font-size: 40px;
					padding-top: 5px;
					padding-left: 0px;


				}
			

				p.button {

					padding-left: 35px;
				}
					

			</style>

<tbody>

	
	<form action="upload.php" method="post" enctype="multipart/form-data" >
    <p class="button"><label class= "btn btn-danger">Upload file...
    <input class="hidden" type="file" name="fileToUpload" target="_blank" id="fileToUpload"></p>
</label>
</form>

</tbody>
			
			

			