<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Compare</title>
  <link rel="icon" href="images/paradise-favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="css/stylesheet.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Arimo&family=Crimson+Text&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
</head>
<body>
  
<?php

// $jsonHotels = file_get_contents('hotels.json');
// $hotels = json_decode($jsonHotels, true);

// $jsonUserinfo = file_get_contents('userinfo.json');
// $userInfo = json_decode($jsonUserinfo, true);

spl_autoload_register('autoLoadHotel');
spl_autoload_register('autoLoadUser');

$numberOfDays = $userInfo['numberOfDays'];
$total = $userInfo['total'];
$price = $userInfo['price'];
$hotelName = $userInfo['hotel'];
$hoteltoCompare = $_POST['hoteltoCompare'];



    switch ($hoteltoCompare) {
        case 'Casterly Rock':
        $comparisonPrice = $numberOfDays*500;
        echo "<p class='compare-message'>You are booking <strong>" . $hotelName . "</strong> for "
        . $numberOfDays . " nights at <strong>R" .$total 
        . "</strong>. Casterly Rock is R" . $comparisonPrice . " for the same duration.
        <br>Are you sure you want to go ahead? Compare the features below and confirm by clicking 'Book now'.</p>";
            break;

        case 'Bravosi':
        $comparisonPrice = $numberOfDays*350;
        echo "<p class='compare-message'>You are booking <strong>" . $hotelName . "</strong> for " 
        . $numberOfDays . " nights at <strong>R". $total . "</strong> (R" . $price . " per night).
       Bravosi is R" . $comparisonPrice . " for the same duration. 
        <br>Compare the hotels below and confirm by clicking 'Book now'.</p>";
            break;

        case 'High Garden':
        $comparisonPrice = $numberOfDays*550;
        echo "<p class='compare-message'>You are booking <strong>" . $hotelName . "</strong> for "
        . $numberOfDays . " nights at <strong>R" .$total . "</strong> (R" . $price . " per night).
        High Garden is R" . $comparisonPrice . " for the same duration.
        <br>Compare the hotels below and confirm by clicking 'Book now'.</p>";
            break;  
            
        case 'Winterfell':
        $comparisonPrice = $numberOfDays*400;
        echo "<p class='compare-message'>You are booking <strong>" . $hotelName . "</strong> for "
        . $numberOfDays . " nights at <strong>R" .$total . "</strong> (R" . $price . " per night).
        Winterfell is R" . $comparisonPrice . " for the same duration.
        <br>Compare the hotels below and confirm by clicking 'Book now'.</p>";
            break;  
            
        case 'Kings Landing':
        $comparisonPrice = $numberOfDays*350;
        echo "<p class='compare-message'>You are booking <strong>" . $hotelName . "</strong> for "
        . $numberOfDays . " nights at <strong>R" .$total . "</strong> (R" . $price . " per night).
        Kings Landing is R" . $comparisonPrice . " for the same duration.
        <br>Compare the hotels below and confirm by clicking 'Book now'.</p>";
            break;

        case 'The Vale':
        $comparisonPrice = $numberOfDays*350;
        echo "<p class='compare-message'>You are booking <strong>" . $hotelName . "</strong> for "
        . $numberOfDays . " nights at <strong>R" .$total . "</strong> (R" . $price . " per night).
        The Vale is R" . $comparisonPrice . " for the same duration.
        <br>Compare the hotels below and confirm by clicking 'Book now'.</p>";
            break;                
    }

?>

<!--HOTEL INFO-->
<div class="card-container">
    <div class="flex-container">

<?php

//CHOSEN HOTEL
if ($hotelName == 'Castrely Rock') {
  // <!--CARD 1-->
echo "<div class='card'>
<div class='card-image' style='background-image: url(images/casterly-rock.jpg)'></div>

  <div class='card-content'>
  
    <h1>Casterly Rock</h1>
    <div class='subtitle'>A luxury retreat</div>
    <p>
    Upmarket hotel with a view of the ocean and private beach access. Casterly Rock is for those seeking a luxury
    experience and a truly relaxing time away.<br><br>
    <i class='fas fa-swimmer'></i> Pool: Yes<br>
    <i class='fas fa-wifi'></i>  WiFi: Yes<br>
    <i class='fas fa-umbrella-beach'></i>  Ocean view: Yes<br>
    <i class='fas fa-paw'></i>  Pets allowed: No<br>
    </p>

    <div class='card-details'>
      <div class='card-details-inner'>
        <div class='read-more'>
        <form action='email.php' method='post'><button class='button'>Book now</button></form>
        </div>
        <div class='reviews'>
          <div>
              &#9733 &#9733 &#9733 &#9733
          </div>
          <div>
              322 reviews
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 ";
}

if ($hotelName == 'Bravosi') {
  // <!--CARD 2-->
echo "<div class='card'>
<div class='card-image' style='background-image: url(images/bravosi.jpg)'></div>
  <div class='card-content'>
  
    <h1>Bravosi</h1>
    <div class='subtitle'>An atmospheric getaway</div>
    <p>
    A friendly and down-to-earth hotel close to public beaches, shops and nightlife. Bravosi is for young people looking 
    to be close to the action and fully soak up the city's atmosphere.<br><br>
    <i class='fas fa-swimmer'></i> Pool: No<br>
    <i class='fas fa-wifi'></i> WiFi: Yes<br>
    <i class='fas fa-umbrella-beach'></i> Ocean view: Yes<br>
    <i class='fas fa-paw'></i> Pets allowed: Yes<br>
    </p>

    <div class='card-details'>
      <div class='card-details-inner'>
        <div class='read-more'>
        <form action='email.php' method='post'><button class='button'>Book now</button></form>
        </div>
        <div class='reviews'>
          <div>
              &#9733 &#9733 &#9733
          </div>
          <div>
            453 reviews
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
}

if ($hotelName == 'High Garden') {
  //CARD 3 HIGH GARDEN
  echo "<div class='card'>
  <div class='card-image' style='background-image: url(images/high-garden.jpg)'></div>
    <div class='card-content'>
    
      <h1>High Garden</h1>
      <div class='subtitle'>Pure relaxation</div>
      <p class='hotel-info'>
      A cosy hotel with stunning ocean views, close to white-sand beaches and crystal clear waters.
      The Sunset Hotel is a five-star establishment, promising maximum comfort and relaxation.<br><br>
      <i class='fas fa-swimmer'></i> Pool: Yes<br>
      <i class='fas fa-wifi'></i>  WiFi: Yes<br>
      <i class='fas fa-umbrella-beach'></i>  Ocean view: Yes<br>
      <i class='fas fa-paw'></i>  Pets allowed: No<br>
      </p>
  
      <div class='card-details'>
        <div class='card-details-inner'>
          <div class='read-more'>
          <form action='email.php' method='post'><button class='button'>Book now</button></form>
          </div>
          <div class='reviews'>
            <div>
                &#9733 &#9733 &#9733 &#9733 &#9733
            </div>
            <div>
                536 reviews
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>";
}

if ($hotelName == 'Winterfell') {
  //CARD 4 WINTERFELL
  echo "<div class='card'>
  <div class='card-image' style='background-image: url(images/winterfell.jpg)'></div>
   <div class='card-content'>
  
    <h1>Winterfell</h1>
    <div class='subtitle'>All-in-one bliss</div>
    <p>
    This upmarket hotel offers a wide range of in-house entertainment, luxury spas and gourmet food.
    Hotel Tropico is for holiday makers who enjoy the simplicity of having everything in one place. 
    <br><br>
    <i class='fas fa-swimmer'></i> Pool: Yes<br>
    <i class='fas fa-wifi'></i> WiFi: Yes<br>
    <i class='fas fa-umbrella-beach'></i> Ocean view: Yes<br>
    <i class='fas fa-paw'></i> Pets allowed: No<br>
    </p>

    <div class='card-details'>
      <div class='card-details-inner'>
        <div class='read-more'>
        <form action='email.php' method='post'><button class='button'>Book now</button></form>
        </div>
        <div class='reviews'>
          <div>
              &#9733 &#9733 &#9733
          </div>
          <div>
              421 reviews
          </div>
        </div>
      </div>
    </div>
  </div>
</div>";
}

if ($hotelName == 'Kings Landing') {
  //CARD 5 KINGS LANDING
  echo "<div class='card'>
  <div class='card-image' style='background-image: url(images/kings-landing.jpg)'></div>
    <div class='card-content'>
    
      <h1>Kings Landing</h1>
      <div class='subtitle'>A home away from home</div>
      <p class='hotel-info'>
      Far away from noisy streets, this hotel offers a calming hideaway for those in need of 
      escaping the stress that comes with the daily grind. Full privacy, full service. Bring your pets along if you wish.<br><br>
      <i class='fas fa-swimmer'></i> Pool: Yes<br>
      <i class='fas fa-wifi'></i>  WiFi: Yes<br>
      <i class='fas fa-umbrella-beach'></i>  Ocean view: Yes<br>
      <i class='fas fa-paw'></i>  Pets allowed: Yes<br>
      </p>
  
      <div class='card-details'>
        <div class='card-details-inner'>
          <div class='read-more'>
          <form action='email.php' method='post'><button class='button'>Book now</button></form>
          </div>
          <div class='reviews'>
            <div>
                &#9733 &#9733 &#9733 &#9733
            </div>
            <div>
                299 reviews
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>";
}

if ($hotelName == 'The Vale') {
  //CARD 6 THE VALE
  echo "<div class='card'>
  <div class='card-image' style='background-image: url(images/the-vale.jpg)'></div>
    <div class='card-content'>
    
      <h1>The Vale</h1>
      <div class='subtitle'>A fun-packed experience</div>
      <p>
      Amidst a spectacular mountain range, this one's for the adventourous traveller. 
      Guests have a range of exhilarating activities to choose from, such as rockclimbing, ziplining and river rafting.<br><br>
      <i class='fas fa-swimmer'></i> Pool: Yes<br>
      <i class='fas fa-wifi'></i> WiFi: Yes<br>
      <i class='fas fa-umbrella-beach'></i> Ocean view: No<br>
      <i class='fas fa-paw'></i> Pets allowed: Yes<br>
      </p>
  
      <div class='card-details'>
        <div class='card-details-inner'>
          <div class='read-more'>
          <form action='email.php' method='post'><button class='button'>Book now</button></form>
          </div>
          <div class='reviews'>
            <div>
                &#9733 &#9733 &#9733
            </div>
            <div>
                453 reviews
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>";
}



// COMPARISON

if ($hoteltoCompare == 'Casterly Rock') {
  //CARD 1 CASTERLY ROCK
  echo "<div class='card'>
  <div class='card-image' style='background-image: url(images/casterly-rock.jpg)'></div>
    <div class='card-content'>
  
    <h1>Casterly Rock</h1>
    <div class='subtitle'>A luxury retreat</div>
    <p>
    Upmarket hotel with a view of the ocean and private beach access. Casterly Rock is for those seeking a luxury
    experience and a truly relaxing time away.<br><br>
    <i class='fas fa-swimmer'></i> Pool: Yes<br>
    <i class='fas fa-wifi'></i>  WiFi: Yes<br>
    <i class='fas fa-umbrella-beach'></i>  Ocean view: Yes<br>
    <i class='fas fa-paw'></i>  Pets allowed: No<br>
    </p>

    <div class='card-details'>
      <div class='card-details-inner'>
        <div class='read-more'>
        <form action='email.php' method='post'><button class='button'>Book now</button></form>
        </div>
        <div class='reviews'>
          <div>
              &#9733 &#9733 &#9733 &#9733
          </div>
          <div>
              322 reviews
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 ";
}

if ($hoteltoCompare == 'Bravosi') {
  //CARD 2 BRAVOSI
  echo "<div class='card'>
  <div class='card-image' style='background-image: url(images/bravosi.jpg)'></div>
   <div class='card-content'>
  
    <h1>Bravosi</h1>
    <div class='subtitle'>An atmospheric getaway</div>
    <p>
    A friendly and down-to-earth hotel close to public beaches, shops and nightlife. The Rustic Hotel is for young people looking 
    to be close to the action and fully soak up the city's atmosphere.<br><br>
    <i class='fas fa-swimmer'></i> Pool: No<br>
    <i class='fas fa-wifi'></i> WiFi: Yes<br>
    <i class='fas fa-umbrella-beach'></i> Ocean view: Yes<br>
    <i class='fas fa-paw'></i> Pets allowed: Yes<br>
    </p>

    <div class='card-details'>
      <div class='card-details-inner'>
        <div class='read-more'>
        <form action='email.php' method='post'><button class='button'>Book now</button></form>
        </div>
        <div class='reviews'>
          <div>
              &#9733 &#9733 &#9733
          </div>
          <div>
            453 reviews
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  ";
}

if ($hoteltoCompare == 'High Garden') {
   //CARD 3 HIGH GARDEN
  echo "<div class='card'>
  <div class='card-image' style='background-image: url(images/high-garden.jpg)'></div>
    <div class='card-content'>
    
      <h1>High Garden</h1>
      <div class='subtitle'>Pure relaxation</div>
      <p class='hotel-info'>
      A cosy hotel with stunning ocean views, close to white-sand beaches and crystal clear waters.
      The Sunset Hotel is a five-star establishment, promising maximum comfort and relaxation.<br><br>
      <i class='fas fa-swimmer'></i> Pool: Yes<br>
      <i class='fas fa-wifi'></i>  WiFi: Yes<br>
      <i class='fas fa-umbrella-beach'></i>  Ocean view: Yes<br>
      <i class='fas fa-paw'></i>  Pets allowed: No<br>
      </p>
  
      <div class='card-details'>
        <div class='card-details-inner'>
          <div class='read-more'>
          <form action='email.php' method='post'><button class='button'>Book now</button></form>
          </div>
          <div class='reviews'>
            <div>
                &#9733 &#9733 &#9733 &#9733 &#9733
            </div>
            <div>
                536 reviews
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>";
}

if ($hoteltoCompare == 'Winterfell') {
  //CARD 4 WINTERFELL
  echo "<div class='card'>
  <div class='card-image' style='background-image: url(images/winterfell.jpg)'></div>
   <div class='card-content'>
  
    <h1>Winterfell</h1>
    <div class='subtitle'>All-in-one bliss</div>
    <p>
    This upmarket hotel offers a wide range of in-house entertainment, luxury spas and gourmet food.
    Hotel Tropico is for holiday makers who enjoy the simplicity of having everything in one place. 
    <br><br>
    <i class='fas fa-swimmer'></i> Pool: Yes<br>
    <i class='fas fa-wifi'></i> WiFi: Yes<br>
    <i class='fas fa-umbrella-beach'></i> Ocean view: Yes<br>
    <i class='fas fa-paw'></i> Pets allowed: No<br>
    </p>

    <div class='card-details'>
      <div class='card-details-inner'>
        <div class='read-more'>
        <form action='email.php' method='post'><button class='button'>Book now</button></form>
        </div>
        <div class='reviews'>
          <div>
              &#9733 &#9733 &#9733
          </div>
          <div>
              421 reviews
          </div>
        </div>
      </div>
    </div>
  </div>
</div>";
}

if ($hoteltoCompare == 'Kings Landing') {
  //CARD 5 KINGS LANDING
  echo "<div class='card'>
  <div class='card-image' style='background-image: url(images/kings-landing.jpg)'></div>
    <div class='card-content'>
  
    <h1>Kings Landing</h1>
    <div class='subtitle'>A home away from home</div>
    <p class='hotel-info'>
    Far away from noisy streets, this hotel offers a calming hideaway for those in need of 
    escaping the stress that comes with the daily grind. Full privacy, full service. Bring your pets along if you wish.<br><br>
    <i class='fas fa-swimmer'></i> Pool: Yes<br>
    <i class='fas fa-wifi'></i>  WiFi: Yes<br>
    <i class='fas fa-umbrella-beach'></i>  Ocean view: Yes<br>
    <i class='fas fa-paw'></i>  Pets allowed: Yes<br>
    </p>
    
    <div class='card-details'>
      <div class='card-details-inner'>
        <div class='read-more'>
        <form action='email.php' method='post'><button class='button'>Book now</button></form>
        </div>
        <div class='reviews'>
          <div>
              &#9733 &#9733 &#9733 &#9733
          </div>
          <div>
              299 reviews
          </div>
        </div>
      </div>
    </div>
  </div>
</div>";
}

if ($hoteltoCompare == 'The Vale') {
  //CARD 6 THE VALE
  echo "<div class='card'>
  <div class='card-image' style='background-image: url(images/the-vale.jpg)'></div>
    <div class='card-content'>
    
      <h1>The Vale</h1>
      <div class='subtitle'>A fun-packed experience</div>
      <p>
      Amidst a spectacular mountain range, this one's for the adventourous traveller. 
      Guests have a range of exhilarating activities to choose from, such as rockclimbing, ziplining and river rafting.<br><br>
      <i class='fas fa-swimmer'></i> Pool: Yes<br>
      <i class='fas fa-wifi'></i> WiFi: Yes<br>
      <i class='fas fa-umbrella-beach'></i> Ocean view: No<br>
      <i class='fas fa-paw'></i> Pets allowed: Yes<br>
      </p>
  
      <div class='card-details'>
        <div class='card-details-inner'>
          <div class='read-more'>
          <form action='email.php' method='post'><button class='button'>Book now</button></form>
          </div>
          <div class='reviews'>
            <div>
                &#9733 &#9733 &#9733
            </div>
            <div>
                453 reviews
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>";
} 

?>    

 </div>
</div>


</body>
</html>