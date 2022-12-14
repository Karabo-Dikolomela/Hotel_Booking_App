<?php 
session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="icon" href="images/paradise-favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo&family=Crimson+Text&display=swap" rel="stylesheet">
</head>


<?php
$_SESSION['hotel'] = $_POST['hotel'];
$_SESSION['name'] = $_POST['name'];
$_SESSION['surname'] = $_POST['surname'];
$_SESSION['emailAddress'] = $_POST['emailAddress'];
$_SESSION['numberOfDays'] = $_POST['numberOfDays'];
$_SESSION['checkInDate'] = $_POST['checkInDate'];
$_SESSION['checkOutDate'] = $_POST['checkOutDate'];

class Booking {
    public $hotelName;
    public $numberOfDays;
    public $price;
    private $name;
    private $surname;

    //CONSTRUCTOR
    public function __construct($hotelName, $name, $surname, $checkInDate, $checkOutDate) {
        $this->hotelName = $hotelName;     
        $this->price = $price; 
        $this->name = $name;
        $this->surname = $surname;
        $this->checkInDate = $checkInDate;
        $this->checkOutDate = $checkOutDate;

        if ($this->hotelName === "Casterly Rock"){
          $this->price = 500; 
      }
      else if ($this->hotelName === "Bravosi") {
          $this->price = 350;
      }
      else if ($this->hotelName === "High Garden") {
        $this->price = 550;
      }
      else if ($this->hotelName === "Winterfell") {
      $this->price = 400;
      }
      else if ($this->hotelName === "Kings Landing") {
        $this->price = 350;
      }
      else if ($this->hotelName === "The Vale") {
        $this->price = 450;
      }  
      $_SESSION['price'] = $this->price;   

    }

    //GETTERS AND SETTERS
    public function getName() {
        return $this->name;
    }

    public function getSurname() {
        return $this->surname;
    }

    //METHODS
    public function calculateTotal() {
        $numberOfDays = $this->calculateStay();
        $sum = $numberOfDays*$this->price;
        return $sum;
    }

    public function calculateStay() {
    
        $earlier = new DateTime($this->checkInDate);
        $later = new DateTime($this->checkOutDate);
        $dateDifference = $later->diff($earlier)->format("%a"); 
        return $dateDifference;
    }

    public function addNumberOfDaysToArray() {
        $_POST['numberOfDays'] = $this->calculateStay();
    }

    public function addTotalToArray() {
        $_POST['total'] = $this->calculateTotal();
    }

    public function displayBookingDetails() {
        echo "<div class='booking-message'>";
        echo "<div class='grid'><div class='cell-booking-msg'>";
        echo "Hi ". $this->getName();
        echo " " . $this->getSurname();
        echo "<br>";
        echo "You have selected:<br><strong> ". $this->hotelName;
        echo "</strong><br>";
        echo "<br>Number of days: " . $this->calculateStay();
        echo "<br>";
        echo "Daily rate: R" . $this->price;
        echo "<br>";
        echo "Total: R" . $this->calculateTotal();
        echo "<br><br>";
        echo "<form action='compare.php' method='post'>";
        echo "<label for='hoteltoCompare'>Choose a hotel to compare:</label>";
        echo "<select class='hotel-options' name='hoteltoCompare'>";

        if ($this->hotelName == 'Casterly Rock') {
          echo "<option value='Bravosi' name='Bravosi'>Bravosi</option>"; 
          echo "<option value='High Garden' name='HighGarden'>High Garden</option>";
          echo "<option value='Winterfell' name='Winterfell'>Winterfell</option>";
          echo "<option value='Kings Landing' name='KingsLanding'>Kings Landing</option>";
          echo "<option value='The Vale' name='TheVale'>The Vale</option>";      
       }  
        
        if ($this->hotelName == 'Bravosi') {
          echo "<option value='Casterly Rock' name='CasterlyRock'>Casterly Rock</option>";
          echo "<option value='High Garden' name='HighGarden'>High Garden</option>";
          echo "<option value='Winterfell' name='Winterfell'>Winterfell</option>";
          echo "<option value='Kings Landing' name='KingsLanding'>Kings Landing</option>";
          echo "<option value='The Vale' name='TheVale'>The Vale</option>"; 
        }

        if ($this->hotelName == 'High Garden') {
          echo "<option value='Casterly Rock' name='CasterlyRock'>Casterly Rock</option>";
          echo "<option value='Bravosi' name='Bravosi'>Bravosi</option>"; 
          echo "<option value='Winterfell' name='Winterfell'>Winterfell</option>";
          echo "<option value='Kings Landing' name='KingsLanding'>Kings Landing</option>";
          echo "<option value='The Vale' name='TheVale'>The Vale</option>"; 
        }

        if ($this->hotelName == 'Winterfell') {
          echo "<option value='Casterly Rock' name='CasterlyRock'>Casterly Rock</option>";
          echo "<option value='Bravosi' name='Bravosi'>Bravosi</option>"; 
          echo "<option value='High Garden' name='HighGarden'>High Garden</option>";
          echo "<option value='Kings Landing' name='KingsLanding'>Kings Landing</option>";
          echo "<option value='The Vale' name='TheVale'>The Vale</option>"; 
        }
        if ($this->hotelName == 'Kings Landing') {
          echo "<option value='Casterly Rock' name='CasterlyRock'>Casterly Rock</option>";
          echo "<option value='Bravosi' name='Bravosi'>Bravosi</option>";          
          echo "<option value='High Garden' name='HighGarden'>High Garden</option>";
          echo "<option value='Winterfell' name='Winterfell'>Winterfell</option>";
          echo "<option value='The Vale' name='TheVale'>The Vale</option>"; 
        }

        if ($this->hotelName == 'The Vale') {
          echo "<option value='Casterly Rock' name='CasterlyRock'>Casterly Rock</option>";
          echo "<option value='Bravosi' name='Bravosi'>Bravosi</option>";          
          echo "<option value='High Garden' name='HighGarden'>High Garden</option>";
          echo "<option value='Winterfell' name='Winterfell'>Winterfell</option>";
          echo "<option value='Kings Landing' name='KingsLanding'>Kings Landing</option>";
        }

        echo "</select><br><br>";
        echo "<br><button class='button price-button'>Compare Price</button>";
        echo "</form></div>";

        if ($this->hotelName == 'Casterly Rock') {
          echo "<div class='cell-booking-msg'><img class='booking-msg-img' src='images/casterly-rock.jpg' alt='Casterly Rock'></div>"; 
          }
  
          if ($this->hotelName == 'Bravosi') {
          echo "<div class='cell-booking-msg'><img class='booking-msg-img' src='images/bravosi.jpg' alt='Bravosi'></div>"; 
          }
  
          if ($this->hotelName == 'High Garden') {
          echo "<div class='cell-booking-msg'><img class='booking-msg-img' src='images/high-garden.jpg' alt='High Garden'></div>";
          }
  
          if ($this->hotelName == 'Winterfell') {
          echo "<div class='cell-booking-msg'><img class='booking-msg-img' src='images/winterfell.jpg' alt='Winterfell'></div>";  
          }
  
          if ($this->hotelName == 'Kings Landing') {
            echo "<div class='cell-booking-msg'><img class='booking-msg-img' src='images/kings-landing.jpg' alt='Kings Landing'></div>";  
          }
  
          if ($this->hotelName == 'The Vale') {
            echo "<div class='cell-booking-msg'><img class='booking-msg-img' src='images/the-vale.jpg' alt='The Vale'></div>";  
          }

        echo "</div>";
        echo "</div>";
    }         
}

if ($_POST['name'] === '' || $_POST['surname'] === '' || $_POST['emailAddress'] === ''
|| $_POST['checkInDate'] === '' || $_POST['checkOutDate'] === ''
|| $_POST['hotel'] === '') {
  header('location: ./index.php?error=emptyinput#booking-form');
    exit();
}

if ($_POST['checkInDate'] >= $_POST['checkOutDate']) {
  header('location: ./index.php?error=dateinvalid#booking-form');
  exit();
}

if (is_numeric($_POST['name']) || is_numeric($_POST['surname']) || is_numeric($_POST['emailAddress'])) {
  header('location: ./index.php?error=notnumber#booking-form');
  exit();
}

else {
   $booking = new Booking($_SESSION['hotel'], $_SESSION['name'], $_SESSION['surname'], $_SESSION['checkInDate'], $_SESSION['checkOutDate']);
   $booking->addNumberOfDaysToArray();
   $booking->addTotalToArray();
   $booking->displayBookingDetails();        
}

$_SESSION['numberOfDays'] = $_POST['numberOfDays'];
$_SESSION['total'] = $_POST['total'];
file_put_contents('userinfo.json', json_encode($_SESSION, JSON_PRETTY_PRINT));
 
?>


<!--GALLERY-->
<body>
    <div class="gallery-container">
      <div class="grid">
        <div class="cell">
          <img src="images/holiday-gallery-2.jpg" class="responsive-image" />
        </div>
        <div class="cell">
          <img src="images/holiday-gallery-3.jpg" class="responsive-image" />
        </div>
        <div class="cell">
          <img src="images/holiday-gallery-6.jpg" class="responsive-image" />
        </div>
        <div class="cell">
          <img src="images/holiday-gallery-5.jpg" class="responsive-image" />
        </div>
        <div class="cell">
          <img src="images/holiday-gallery-4.jpg" class="responsive-image" />
        </div>
        <div class="cell">
          <img src="images/holiday-gallery-9.jpg" class="responsive-image" />
        </div>
      </div>
    </div>
</body>
</html>