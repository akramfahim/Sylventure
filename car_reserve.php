<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Flamenco&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css">
    -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_hotel.css">
    <link rel="stylesheet" href="css/reserve_style.css"> 

    <title>SYLVENTURE | Car Reservation</title>
</head>
<body>
  <header id="header">   
    <div class="container">
      <div class="row">
        <nav class="navbar navbar-expand-lg full-width">
          <a class="navbar-brand" href="index.php">Sylventure</a>
          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="ToggleNavigation">
           <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav">
              <li class="nav-item "><a href="tourSight.php" class="nav-link">Tour Sight</a>
                <ul class="subMenu">
                  <li><a href="#" class="nav-link">Jaflong</a></li>
                  <li><a href="#" class="nav-link">Bichnakandi</a></li>
                  <li><a href="#" class="nav-link">Vulagong Shada Pathor</a></li>
                  <li><a href="#" class="nav-link">Jointa Hill Resort</a></li>
                </ul>
              </li>
              <li class="nav-item"><a href="hotels.php" class="nav-link">Hotel Booking</a>
                <ul class="subMenu">
                  <li><a href="#" class="nav-link">Hotel Supreme</a></li>
                  <li><a href="#" class="nav-link">Hotel Anuragh</a></li>
                  <li><a href="#" class="nav-link">Hotel Star Specific</a></li>
                </ul>
              </li>
              <li class="nav-item"><a href="cars.php" class="nav-link active">Transportation</a>
                <ul class="subMenu">
                  <li><a href="#" class="nav-link">Journey by Bus</a></li>
                  <li><a href="#" class="nav-link">Journey by Car</a></li>
                  <li><a href="#" class="nav-link">Journey by Bike</a></li>
                </ul>
              </li>
              <li class="nav-item"><a href="food_gallery.php" class="nav-link">Food Gallery</a></li>
              <li class="nav-item"><a href="medical_emergency.php" class="nav-link">Medical Emergency</a>
                <ul class="subMenu">
                  <li><a href="#" class="nav-link">Ibn Sina Hospital </a></li>
                  <li><a href="#" class="nav-link">Al-haramain Hospital</a></li>
                  <li><a href="#" class="nav-link">Noorjahan Hospital</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div> 
  </header>


   <div id="booking" class="section">
    <div class="section-center">
      <div class="container">
        <div class="row">
          <div class="booking-form mt-5">
            <div class="form-header mt-3">
              <h1>Make your Vehicle Ready</h1>
            </div>
            <form autocomplete="off">

              <div class="form-group">
                <select class="form-control" style="height: 60px;" required name="rooms">
                  <option value="" selected hidden>Select Your Car</option>
                  <option value="1">AC Car</option>
                  <option value="1">Probox Car</option>
                  <option value="1">Economic Sedan</option>
                  <option value="1">Allion Sedan</option>
                  <option value="1">ToyotaCorolla Axio</option>
                  <option value="1">Filder</option>
                  <option value="1">TownAce Noah</option>
                  <option value="1">HighAce Micro</option>
                  <option value="1">Toyota Noah</option>
                  <option value="1">Mercedes</option>
                  <option value="1">Pajero</option>
                  <option value="1">Range Rover</option>
                </select>
                <span class="select-arrow"></span>
                <span class="form-label">Car Type</span>
              </div>
              
              <div class="row">

                <div class="col-md-6 p-0">
                  <div class="form-group">
                    <select class="form-control" style="height: 60px;">
                      <option value="" selected hidden>Pickup</option>
                      <option value="1">Pickup One</option>
                      <option value="1">Pickup Two</option>
                      <option value="1">Pickup Three</option>
                      <option value="1">Pickup Four</option>
                    </select>
                    <span class="select-arrow"></span>
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" type="date" required name="datein">
                    <span class="form-label">Date</span>
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-group">
                    <select class="form-control" style="height: 60px;">
                        <option value="" selected hidden>Drop off</option>
                        <option value="1">Drop off One</option>
                        <option value="1">Drop off Two</option>
                        <option value="1">Drop off Three</option>
                        <option value="1">Drop off Four</option>
                      </select>
                    <span class="select-arrow"></span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" type="date" required name="datein">
                    <span class="form-label">Date</span>
                  </div>
                </div>
              </div>
                            
              <div class="from-group">
                <input class="form-control txt-field m-2" type="text" name="name" placeholder="Your name">
                <input class="form-control txt-field m-2" type="email" name="email" placeholder="Email address">
                <input class="form-control txt-field m-2" type="tel" name="phone" placeholder="Phone number">
              </div>
              <div class="form-group row">
                <div class="col-md-12 p-0 text-center">
                  <button type="reset" class="btn btn-info mt-2 py-3 px-4" data-toggle="modal" data-target="#exampleModalCenter">Confirm Car Booking</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
   </div>

    <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button> -->

<!-- Modal -->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h2 class="modal-title" id="exampleModalLongTitle">Congratulations !!!</h2>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <p>"Thank you for wanting our service,we will notify you all the information regarding this form within 2 hours via email"</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-learn" data-dismiss="modal">Okay</button>
	      </div>
	    </div>
	  </div>
	</div>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js"></script>

  <!-- My Customise JS -->
  <script src="js/main.js"></script>
</body>
</html>