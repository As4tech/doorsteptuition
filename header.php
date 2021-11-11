<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Door Step Tuition</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap -->
  <link href="css/bootstrap/grid.min.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">

<!-- CSS FILES -->
  <link href="css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/fontawesome.css">
  <link rel="stylesheet" href="css/templatemo-plot-listing.css">
  <link rel="stylesheet" href="css/animated.css">
  <link rel="stylesheet" href="css/owl.css">
  
  <style type="text/css"> 
  
.menu li{
  padding-top: 10px;
}
.header{
  width: 100%;
  height: 600px;
}
.image-fluid{
  width: 100px;
  height: 75px;
  float: left;
}

</style>

</head>

<body>
  <header class="header">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="navigation">
        <div class="container">
          <div class="navbar-collapse ">
            <div class="logo">
                <a href="index.php"><img src="images/logo.jpg" class="image-fluid"></a>
              </div>
            <div class="menu">
              <ul class="nav nav-tabs" role="tablist">
                <li><a href="">Find Tutor</a>
             <ul> 
            <li><a href="teacherreg.php">Online Tutor</a></li>
            <li><a href="studentreg.php">Home | One-On-One Tutor</a></li>
            </ul>
                
              <li><a href="">Register</a>
          <ul> 
            <li><a href="faq.php">As Tutor</a></li>
            <li><a href="faq_stud.php">As Student</a></li>  
          </ul>
				</li>

         <li><a href="">Login</a>
          <ul> 
            <li><a href="login.php">As Tutor</a></li>
            <li><a href="faq_stud.php">As Student</a></li>  
          </ul>
        </li>

        <button class="btn btn-primary"><a href="register.php" >Become a tutor</a></button>
        <button class="btn btn-primary"><a href="show_tutor_req.php" >Request a Tutor</a></button>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="top-text header-text">
            <h2>Find online tutors and home tutors for your ward without hustle</h2>
          </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
          <form id="search-form" name="gs" method="submit" role="search" action="#">
            <div class="row">
              <div class="col-md-3 align-self-center">
                  <fieldset>
                      <select name="area" class="form-select" aria-label="Area" id="chooseCategory" onchange="this.form.click()">
                          <option selected>All Tutors</option>
                          <option value="online">Online Tutors</option>
                          <option value="home">Home | one-on-one Tutor</option>
                      </select>
                  </fieldset>
              </div>
              <div class="col-md-3 align-self-center">
                  <fieldset>
                      <input type="address" name="address" class="searchText" placeholder="Enter a location" autocomplete="on" required>
                  </fieldset>
              </div>
              
              <div class="col-md-3 align-self-center">
                  <fieldset>
                      <input type="text" name="address" class="subjects" placeholder="Subject" autocomplete="on" required>
                  </fieldset>
              </div>
              <div class="col-md-3">                        
                  <fieldset>
                      <button class="main-button"><i class="fa fa-search"></i> Search Now</button>
                  </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </header>