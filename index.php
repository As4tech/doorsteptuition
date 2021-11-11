<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Door Step Tuition</title>
	<link rel="stylesheet" type="text/css" href="./sc/style.css">
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/fontawesome.css">
</head>
<body>
	<header class="header">
			<nav class="menu-bar">
				<ul>
				<li><a href="#">ABOUT US</a></li>
				<li><a href="#">LOGIN</a>
                  <div class="sub-menu-1">
                  	<ul>
                  		<li><a href="login.php">As Tutor</a></li>
                  		<li><a href="#">As Student</a></li>
                  	</ul>
				</li>
   				<li><a href="register.php">Become a Tutor</a></li>
				</ul>
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

</body>
</html>