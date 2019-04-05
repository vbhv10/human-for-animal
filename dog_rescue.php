<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Human for Animals</title>
    <!-- Bootstrap -->
  <link href="css/bootstrap-4.0.0.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="my_style_1.css">

  <link href="my_style.css" rel="stylesheet" type="text/css">
  <link href="fontawesome/fontawesome-free-5.7.2-web/css/all.css" rel="stylesheet">
  <!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/sarina:n4:default;allan:n7:default.js" type="text/javascript"></script>
</head>
  <body>
  <nav class="navbar navbar-expand-md navbar-light bg-dark sticky-top">
    <div class="container-fluid">
       <a class="navbar-brand" style="color:white;" href="index.html">Human For Animals<hr class="light"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent1">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"> <a class="nav-link" style="color:white;" href="index.html"><b>Home</b><span class="sr-only">(current)<span></a> </li>
        <li class="nav-item"> <a class="nav-link" style="color:grey;" href="about_us.html"><b>About Us</b></a> </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" style="color:grey;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Rescue
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="dog_rescue.php">Dogs</a>
          <a class="dropdown-item" href="cat_rescue.php">Cats</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="other_rescue.php">Other Animal</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" style="color:grey;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Adopt
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Dogs</a>
          <a class="dropdown-item" href="#">Cats</a>
          
        </div>
      </li>
      </ul>
    </div>
  </nav>
  <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xl-4"></div>
        <div class="col-md-4 col-sm-4 col-xl-4">
          <form class="form-container needs-validation" action="dog_done.php" enctype="multipart/form-data" method="post" novalidate>
            <h2>Information</h2>
            <div class="row form-group">
             <div class="col-md-6">
              <label for="FirstName1">First Name</label>
              <input type="text" name="firstname" class="form-control is-valid" id="FirstName1" placeholder="Enter First Name" value="vaibhav" required>
              <div class="valid-feedback">Looks good!</div>
             </div>
             <div class="col-md-6">
              <label for="LastName1">Last Name</label>
              <input type="text" name="lastname" class="form-control is-valid" id="LastName1" placeholder="Enter Last Name" value="mahajan" required>
              <div class="valid-feedback">Looks good!</div>
             </div>
            </div>
            <div class="form-group">
             <label for="inputAddress">Address</label>
             <input type="text" class="form-control" id="inputAddress" name="address1" placeholder="1234 Main St" required>
             <div class="invalid-feedback">this field is required</div>
            </div>
            <div class="form-group">
             <label for="inputAddress2">Address 2</label>
             <input type="text" class="form-control" id="inputAddress2" name="address2" placeholder="Apartment, studio, or floor" required>
             <div class="invalid-feedback">this field is required</div>
            </div>
            <div class="form-group">
      <label for="validationCustom03">City</label>
      <input type="text" class="form-control" name="city" id="validationCustom03" placeholder="City" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="form-group">
      <label for="validationCustom04">State</label>
      <input type="text" class="form-control" name="state" id="validationCustom04" placeholder="State" required>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
    <div class="form-group">
      <label for="validationCustom05">Zip</label>
      <input type="text" class="form-control" name="zip" id="validationCustom05" placeholder="Zip">
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Describe the problem</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3" placeholder="Starts here..."></textarea>
  </div>
  <div class="custom-file form-group">
    <input type="file" class="custom-file-input" name="image" id="validatedCustomFile" required>
    <label class="custom-file-label" for="validatedCustomFile">Image...</label>
    <div class="invalid-feedback">Example invalid custom file feedback</div>
  </div>
            <button type="submit" name="submit" class="btn btn-success">Submit</button>
          </form>
        </div>
      <div class="col-md- col-sm-4 col-xl-4"></div>
      </div>
    </div>
  	<!-- body code goes here -->


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
  <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
	<script src="js/jquery-3.2.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
	<script src="js/bootstrap-4.0.0.js"></script>
  </body>
</html>