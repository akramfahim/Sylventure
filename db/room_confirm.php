<?php 
	include 'config.php';

	if (isset($_POST['confirm'])) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$datein = $_POST['datein'];
		$dateout = $_POST['dateout'];
		$rooms = $_POST['rooms'];
		$adults = $_POST['adults'];
		$children = $_POST['children'];
		

		$hotel = checkHotelName($id);
		$roomType = checkRoomType($id);


		$valid = 1;

	    if (empty($_POST['name'])) {
	        $valid = 0;
	        $error_message .= urlencode("Name field can not be empty");
	        header("location: ../room_reserve.php?error_message=".$error_message);
	        exit();
	    }

	    if (empty($_POST['email'])) {
	        $valid = 0;
	        $error_message .= 'Email address can not be empty';
	        header("location: ../room_reserve.php?error_message=".$error_message);
	        exit();
	    } else {
	        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
	            $valid = 0;
	            $error_message .= 'Email address is invalid';
	            header("location: ../room_reserve.php?error_message=".$error_message);
	            exit();
	        }
	    }
	    if (empty($_POST['phone'])) {
	        $valid = 0;
	        $error_message .= "Phone field can not be empty";
	        header("location: ../room_reserve.php?error_message=".$error_message);
	        exit();
	    }

	    if (empty($_POST['datein'])) {
	        $valid = 0;
	        $error_message .= "Pick Check In Date";
	        header("location: ../room_reserve.php?error_message=".$error_message);
	        exit();
	    }
	    if (empty($_POST['dateout'])) {
	        $valid = 0;
	        $error_message .= "Pick Check Out Date";
	        header("location: ../room_reserve.php?error_message=".$error_message);
	        exit();
	    }
	    if (empty($_POST['rooms'])) {
	        $valid = 0;
	        $error_message .= "Please Select Number of Room";
	        header("location: ../room_reserve.php?error_message=".$error_message);
	        exit();
	    }

	    if (empty($_POST['adults'])) {
	        $valid = 0;
	        $error_message .= "Please Select Number of Adults";
	        header("location: ../room_reserve.php?error_message=".$error_message);
	        exit();
	    }
	    

	    if ($valid == 1) {

	        // saving into the database
	        $statement = $pdo->prepare("INSERT INTO hotel_reservation(name,email,phone,hotel,roomType,datein,dateout,rooms,adults,children) VALUES (?,?,?,?,?,?,?,?,?,?)");
	        $statement->execute(array($name,$email,$phone,$hotel,$roomType,$datein,$dateout,$rooms,$adults,$children));

	   		unset($_POST['name']);
        	unset($_POST['email']);
        	unset($_POST['phone']);
        	unset($_POST['datein']);
        	unset($_POST['dateout']);
        	unset($_POST['rooms']);
        	unset($_POST['adults']);
        	unset($_POST['children']);
	        $success_message = 'Hurray';  

	        header("location: ../room_reserve.php?success_message=".$success_message);    
	    }

		// echo $hotel."<br>";
		// echo $roomType."<br>";
	}


	function checkHotelName($id)
	{
		if (substr($id, 0, 2) == 'sp') {
			return "Hotel Supreme";
		}else{
			return "Hotel Name is Not Valid";
		}
	}

	function checkRoomType($id)
	{
		switch ($id) {
			case 'spDeluxeFamilyRoom':
				return "Deluxe Family Room";
				break;
			case 'spQueenSuit':
				return "Queen Suit";
				break;
			case 'spKingSuit':
				return "King Suit";
				break;
			case 'spTripleRoom':
				return "Triple Room";
				break;
			case 'spDeluxeDoupleTripleRoom':
				return "Deluxe Double/Triple Room";
				break;
			case 'spSuperiorDoubleRoom':
				return "Superior Double Room";
				break;


			
			default:
				return "Room Type is not Specified";
				break;
		}
	}

 ?>