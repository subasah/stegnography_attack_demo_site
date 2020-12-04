<!DOCTYPE html>
<html>
<head>
	<title>Stegnography Attack!</title>
	<link rel="stylesheet"
                    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="ckeditor/ckeditor.js" type="text/javascript"></script>
</head>
<body>
	
	<div class="container">
		   <br />
		   
   <h3 class="alert alert-info" align="center">Demo for Attack using stegnography</h3>
   			<br/> 
	 <?php if(isset($_GET['empty'])){
		    echo "<h3  class='alert alert-danger' align='center'>Editor cant be empty</h3><br/>";
		    }?>   			
		<form method="post" action="push_into_database.php" enctype='multipart/form-data'>
	        <div class="container">
	           <div class="panel panel-default">
				    <div class="panel-heading">
				     <h3 class="panel-title">We encounter WYSIWYG Editor in most of the sites</h3>
				    </div>
	      			<!-- Editor -->
				<textarea name = 'editor' id='editor'></textarea>
				
			  </div>
			  <input type='submit' value='Save post' name='but_upload'>
		   </div>

	    </form>  	
	</div>
	

	<!-- Script -->
	<script type="text/javascript">
		CKEDITOR.replace( 'editor', {
            height: 300,
            filebrowserUploadUrl: "custom-file-upload-in-ckeditor-with-php/ckeditor_fileupload/ajaxfile.php?type=file",
            filebrowserImageUploadUrl: "/ckeditor_fileupload/ajaxfile.php?type=image"
        } );
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>