<?php 
// header('X-Content-Type-Options: nosniff');

include "config.php";

$images_sql = "SELECT * FROM images ORDER BY id desc limit 1";

$result = mysqli_query($con, $images_sql);

$row = mysqli_fetch_array($result);

$ckeditor_data = $row['ckeditor_data'];
 if(empty($ckeditor_data)){
 	echo "<h1> Nothing to show</h1>";
 }
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet"
                    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	 <h3 class="alert alert-info" align="center">Showing last content inserted from editor</h3>
	 <br/><br/>
	 <div class="container">
		<?php echo $ckeditor_data ?> 	
	 </div>
	
	<!-- Image -->
	<!-- <img src="upload/<?= $filename ?>" width="300px" height="300px" > -->
	<!-- Base64 image -->
	<!-- <img src="<?= $image ?>" width="300px" height="300px"  > -->
</body>
</html>