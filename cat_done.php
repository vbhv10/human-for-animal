<!DOCTYPE html>
<html>
<head>
	<title>hao</title>
</head>
<body>
<p>hao</p>
<?php 
     $con = mysqli_connect('localhost','root','','animal')or die ("Could not connect to database");
     if(isset($_POST['submit'])){
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $address1 = $_POST['address1'];
      $address2 = $_POST['address2'];
      $city = $_POST['city'];
      $state = $_POST['state'];
      $zip = $_POST['zip'];
      $description = $_POST['description'];
      $image = $_FILES['image'];
      
      $filename = $image['name'];
      $fileerror = $image['error'];
      $filetmp = $image['tmp_name'];

      $fileext = explode('.', $filename);
      $filecheck = strtolower(end($fileext));

      $fileextstored = array('png','jpg','jpeg','JPG');

      if(in_array($filecheck, $fileextstored)){
        $destinationfile = 'upload/'.$filename;
        move_uploaded_file($filetmp, $destinationfile);
        $query = "INSERT INTO `cat`(`firstname`, `lastname`, `address`, `address2`, `city`, `state`, `zip`, `description`, `image`) VALUES ('$firstname','$lastname','$address1','$address2','$city','$state', '$zip' ,'$description','$destinationfile')";

        $queryexecute = mysqli_query($con,$query);
      }
     }
    ?>
</body>
</html>