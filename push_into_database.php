  <?php

include("config.php");

if(isset($_POST['but_upload']) && isset($_POST['editor']) && !empty($_POST['editor'])){

        $query = "insert into images(ckeditor_data) values('".$_POST['editor']."')";
           
         mysqli_query($con,$query) or die(mysqli_error($con));
         echo "<h1>Record inserted into the database</h1>";
         header("Location: http://localhost/ckeditor_fileupload/read_database.php");
         die();
    
    } else {
        
        header("Location: http://localhost/ckeditor_fileupload/?empty=true");
         die();
    }

    ?>