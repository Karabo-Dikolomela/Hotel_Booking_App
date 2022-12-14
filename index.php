<?php //require('includes/config.php');?>
<?php session_start(); ?>
<?php
$hotels =
    array(
        array('' => "<img style='width:150px;' src='images/the-commodore-hotel.jpg' alt='The Commodore Hotel'>", 'Name' => 'The Commodore Hotel', 'Description' => 'Upmarket hotel with a view of the ocean and private beach access.', 'Pool' => 'Yes', 'WiFi' => 'Yes', 'Ocean view' => 'Yes', 'Pets allowed' => 'No', 'button' => "<form action='email.php' method='post'><button class='button'>Book</button></form>"),
        array('' => "<img style='width:150px;' src='images/the-rustic-hotel.jpg' alt='The Rustic Hotel'>", 'Name' => 'The Rustic Hotel', 'Description' => 'Friendly and down-to-earth accommodation close to public beaches, shops and nightlife.', 'Pool' => 'No', 'WiFi' => 'Yes', 'Ocean view' => 'Yes', 'Pets allowed' => 'Yes', 'button' => "<form action='email.php' method='post'><button class='button'>Book</button></form>"),
    );
file_put_contents('hotels.json', json_encode($hotels, JSON_PRETTY_PRINT));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heavenly Stay</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <link rel="icon" href="images/paradise-favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo&family=Crimson+Text&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">

</head>

<body>

    <!--TITLE IMAGE-->
    <header id="header" class="">
        <div class="header-cont">
            <div class="left-cont">
                <ul class="main-nav">
                    <li class="nav-item active">Home</li>
                    <li class="nav-item">View Gallery</li>
                    <li class="nav-item">Booking</li>
                    <li class="nav-item">Compare</li>
                    <li class="nav-item">About</li>
                </ul>
            </div>
            <div class="center">
                <button id="show-login">Login</button>
            </div>
            <div class="center1">
                <button id="show-register">Register</button>
            </div>
        </div>
    </header>

    <div id="background">
        <!-- <img src="" alt = "background image"> -->
        <div class="title-container">
            <img src="./css/icons/8.png" alt="heavenly stay Logo" id="AppLogo">
            <p class="tagline">Book your dream holiday.</p>
            <a href="#call-to-action"><i class="arrow-down bounce fas fa-angle-double-down fa-2x"></i></a>
        </div>
    </div>


 

    <!--CALL-TO-ACTION MESSAGE-->
    <div id="call-to-action" class="call-to-action">
        <h2>Tired from a long voyage</h2>
        <p>Make a stop at one of our luxurious hotels for a heavenly stay.. Scroll
            down to see our offering and fill in the booking form to do a price comparison.<br><br>
            <button class="button center">Book<a href="#booking-form"> <i class="arrow fas fa-level-down-alt"></i></a></button>
        </p>
    </div>

    <!--HOTEL INFO SECTION 1-->
    <div class="card-container">
        <div class="flex-container">

            <!--CARD 1 CASTERLY ROCKL-->
            <div class="card">
                <div class="card-image" style="background-image: url(./images/casterly-rock.jpg)"></div>
                <div class="card-content">

                    <h1>Casterly Rock</h1>
                    <div class="subtitle">A luxury retreat</div>
                    <p class="hotel-info">
                        Casterly Rock is carved out of a colossal stone hill beside the Sunset Sea.
                        It is popularly believed to resemble a lion in repose at sunset.
                        Esteemed hotel with a view of the great sunset sea ocean and nobal beach access. Casterly Rock is for those seeking a luxury
                        experience and a truly relaxing time away under the comforts of the Lannister's.<br><br>
                        <i class="fas fa-swimmer"></i> Pool: Yes<br>
                        <i class="fas fa-wifi"></i> WiFi: Yes<br>
                        <i class="fas fa-umbrella-beach"></i> Ocean view: Yes<br>
                        <i class="fas fa-paw"></i> Pets allowed: No<br>
                    </p>

                    <div class="card-details">
                        <div class="card-details-inner">
                            <div class="read-more">
                                <button class="button modal-btn-1">View Gallery</button>
                            </div>
                            <div class="reviews">
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

            <!--CARD 2 BRAVOSI-->
            <div class="card">
                <div class="card-image" style="background-image: url(./images/bravosi.jpg)"></div>
                <div class="card-content">

                    <h1>Bravosi</h1>
                    <div class="subtitle">An atmospheric getaway</div>
                    <p>
                        Braavos, known as Braavos of the Hundred Isles, is the greatest and most powerful of the Free Cities,
                        located in a lagoon on the northwestern end of Essos, where the narrow sea and the Shivering Sea meet.
                        Bravosi, an endearing and humble hotel close to common beaches, stores and life in the hour of twilight.
                        Bravosi is for the young and all those who wish to be engulfed and embraced by the city's charm.<br><br>
                        <i class="fas fa-swimmer"></i> Pool: No<br>
                        <i class="fas fa-wifi"></i> WiFi: Yes<br>
                        <i class="fas fa-umbrella-beach"></i> Ocean view: Yes<br>
                        <i class="fas fa-paw"></i> Pets allowed: Yes<br>
                    </p>

                    <div class="card-details">
                        <div class="card-details-inner">
                            <div class="read-more">
                                <button class="button modal-btn-2">View Gallery</button>
                            </div>
                            <div class="reviews">
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

        </div>
    </div>


    <!--HOTEL INFO SECTION 2-->
    <div class="card-container">
        <div class="flex-container">

            <!--CARD 3 HIGH GARDEN-->
            <div class="card">
                <div class="card-image" style="background-image: url(./images/high-garden.jpg)"></div>
                <div class="card-content">

                    <h1>High Garden</h1>
                    <div class="subtitle">Pure relaxation</div>
                    <p class="hotel-info">
                        Highgarden is a castle which serves as the seat of House Tyrell, the regional capital of the Reach,
                        and the heart of chivalry in the Seven Kingdoms. It lies on the Mander where the ocean road meets the roseroad,
                        making it an important crossroads.<br>
                        High Garden is a cosy hotel with extraordinary views of the ocean, a sight for the gods.
                        It is close to the coast of white-sand and crystal clear waters, said to be nested by the great Drogon dragon of the west.
                        High Garden is a five-star establishment, promising unimaginable comfort and relaxation.<br><br>
                        <i class="fas fa-swimmer"></i> Pool: Yes<br>
                        <i class="fas fa-wifi"></i> WiFi: Yes<br>
                        <i class="fas fa-umbrella-beach"></i> Ocean view: Yes<br>
                        <i class="fas fa-paw"></i> Pets allowed: No<br>
                    </p>

                    <div class="card-details">
                        <div class="card-details-inner">
                            <div class="read-more">
                                <button class="button modal-btn-3">View Gallery</button>
                            </div>
                            <div class="reviews">
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
            </div>

            <!--CARD 4 WINTERFELL-->
            <div class="card">
                <div class="card-image" style="background-image: url(./images/winterfell.jpg)"></div>
                <div class="card-content">

                    <h1>Winterfell</h1>
                    <div class="subtitle">All-in-one bliss</div>
                    <p>
                        Winterfell is the capital of the Kingdom of the North and the seat and the ancestral home of the royal House Stark.
                        It is a very large castle located at the center of the North, from where the head of House Stark rules over his or her people.
                        This Esteemed hotel offers a wide range of in-house royal entertainment, luxury spars and gourmet dishes.
                        Winterfell is for holiday makers who enjoy the simplicity of having everything in one place.
                        <br><br>
                        <i class="fas fa-swimmer"></i> Pool: Yes<br>
                        <i class="fas fa-wifi"></i> WiFi: Yes<br>
                        <i class="fas fa-umbrella-beach"></i> Ocean view: Yes<br>
                        <i class="fas fa-paw"></i> Pets allowed: No<br>
                    </p>

                    <div class="card-details">
                        <div class="card-details-inner">
                            <div class="read-more">
                                <button class="button modal-btn-4">View Gallery</button>
                            </div>
                            <div class="reviews">
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
            </div>

        </div>
    </div>


    <!--HOTEL INFO SECTION 3-->
    <div class="card-container">
        <div class="flex-container">

            <!--CARD 5 KINGS LANDING-->
            <div class="card">
                <div class="card-image" style="background-image: url(./images/kings-landing.jpg)"></div>
                <div class="card-content">

                    <h1>King's Landing</h1>
                    <div class="subtitle">A home away from home</div>
                    <p class="hotel-info">
                        King's Landing is the largest city on the continent of Westeros and is the capital of the Seven Kingdoms.
                        It is located on the east coast of the continent, on the northern banks of the Blackwater Rush as it flows out into Blackwater Bay.
                        The city is not located within the borders of any of the former independent kingdoms.
                        The surrounding area are directly controlled from the city under the authority of the King on the Iron Throne.<br>
                        A distance from noisy streets, this hotel offers a piece of mind and a senctuary for those seeking an
                        escape from the stresses that come with daily endavours. Full privacy, full service. Bring your pets along if you wish.<br><br>
                        <i class="fas fa-swimmer"></i> Pool: Yes<br>
                        <i class="fas fa-wifi"></i> WiFi: Yes<br>
                        <i class="fas fa-umbrella-beach"></i> Ocean view: Yes<br>
                        <i class="fas fa-paw"></i> Pets allowed: Yes<br>
                    </p>

                    <div class="card-details">
                        <div class="card-details-inner">
                            <div class="read-more">
                                <button class="button modal-btn-5">View Gallery</button>
                            </div>
                            <div class="reviews">
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
            </div>

            <!--CARD 6 THE VALE-->
            <div class="card">
                <div class="card-image" style="background-image: url(./images/the-vale.jpg)"></div>
                <div class="card-content">

                    <h1>The Vale</h1>
                    <div class="subtitle">A fun-packed experience</div>
                    <p>
                        The Vale of Arryn is a fertile valley bordered by the Mountains of the Moon in eastern Westeros.
                        The valley gives its name to the larger realm ruled by House Arryn, commonly called the Vale of Arryn,
                        which includes the Mountains of the Moon, the Fingers, and islands in the Bite and the narrow sea.
                        Amidst a spectacular mountain range, this one's for the adventourous traveller.
                        Guests have a range of exhilarating activities to choose from, such as rockclimbing, ziplining and river rafting.<br><br>
                        <i class="fas fa-swimmer"></i> Pool: Yes<br>
                        <i class="fas fa-wifi"></i> WiFi: Yes<br>
                        <i class="fas fa-umbrella-beach"></i> Ocean view: Yes<br>
                        <i class="fas fa-paw"></i> Pets allowed: Yes<br>
                    </p>

                    <div class="card-details">
                        <div class="card-details-inner">
                            <div class="read-more">
                                <button class="button modal-btn-6">View Gallery</button>
                            </div>
                            <div class="reviews">
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

        </div>
    </div>

    <br><br><br>

    <br><br><br>


    <!--BOOKING FORM GRID-->
    <div id="booking-form" class="booking-form-container">

        <form class="booking-form" action="booking.php" method="post">

            <div class="bookingform-grid-container">
                <div class="item-a">
                    <label for="hotel">Choose a hotel:</label>
                    <select class="hotel-options" name="hotel">
                        <option value="Casterly Rock" name="CasterlyRock">Casterly Rock</option>
                        <option value="Bravosi" name="Bravosi">Bravosi</option>
                        <option value="High Garden" name="HighGarden">High Garden</option>
                        <option value="Winterfell" name="Winterfell">Winterfell</option>
                        <option value="King's Landing" name="KingsLanding">King's Landing</option>
                        <option value="The Vale" name="TheVale">The Vale</option>
                    </select>
                </div>

                <div class="item-b">
                    <label for="name">First Name</label>
                    <input class="font-lighter" type="text" name="name" placeholder="Your name">
                </div>

                <div class="item-c">
                    <label for="surname">Surname</label>
                    <input class="font-lighter" type="text" name="surname" placeholder="Your surname">
                </div>

                <div class="item-d">
                    <label for="emailAddress">Email Address</label>
                    <input class="font-lighter" type="text" name="emailAddress" placeholder="Your email address" class="email">
                </div>

                <input type="hidden" name="numberOfDays">

                <div class="item-e">
                    <label for="checkInDate">Arrival</label>
                    <input class="font-lighter date-picker" type="date" name="checkInDate">
                </div>

                <div class="item-f">
                    <label for="checkOutDate">Departure</label>
                    <input class="font-lighter date-picker" type="date" name="checkOutDate">
                </div>

                <div class="item-g">
                    <input class="button submit-button" type="submit">
                </div>

            </div>

        </form>

    </div>

    <?php
    if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyinput") {
            echo '<script type="text/javascript">alert("Please fill in all fields." )</script>';
        } else if ($_GET['error'] == "dateinvalid") {
            echo '<script type="text/javascript">alert("Please choose a check-out date that is later than the check-in date.")</script>';
        } else if ($_GET['error'] == "notnumber") {
            echo '<script type="text/javascript">alert("This cannot be a number.")</script>';
        }
    }
    ?>

    <!--MODAL 1-->
    <div id="modal-1" class="modal-overlay">
        <div class="modal-container">
            <a class="close-btn close-btn-1">X</a>
        </div>

        <!--HOTEL GALLERY-->
        <div class="gallery-container">

            <div class="grid">
                <div class="cell">
                    <img src="./images/casterly-rock-1.jpg" class="responsive-image" />
                </div>
                <div class="cell">
                    <img src="./images/casterly-rock-2.jpg" class="responsive-image" />
                </div>
                <div class="cell">
                    <img src="./images/bravosi-3.jpg" class="responsive-image" />
                </div>
                <div class="cell">
                    <img src="./images/casterly-rock-4.jpg" class="responsive-image" />
                </div>
                <div class="cell">
                    <img src="./images/casterly-rock-5.jpg" class="responsive-image" />
                </div>
                <div class="cell">
                    <img src="./images/casterly-rock-6.jpg" class="responsive-image" />
                </div>
            </div>

        </div>

    </div>

    <!--MODAL 2-->
    <div id="modal-2" class="modal-overlay">
        <div class="modal-container">
            <a class="close-btn close-btn-2">X</a>
        </div>

        <!--HOTEL GALLERY-->
        <div class="gallery-container">

            <div class="grid">
                <div class="cell">
                    <img src="./images/bravosi-1.jpg" class="responsive-image" />
                </div>
                <div class="cell">
                    <img src="./images/bravosi-2.jpg" class="responsive-image" />
                </div>
                <div class="cell">
                    <img src="./images/bravosi-3.jpg" class="responsive-image" />
                </div>
                <div class="cell">
                    <img src="./images/bravosi-4.jpg" class="responsive-image" />
                </div>
                <div class="cell">
                    <img src="./images/bravosi-5.jpg" class="responsive-image" />
                </div>
                <div class="cell">
                    <img src="./images/bravosi-6.jpg" class="responsive-image" />
                </div>
            </div>

        </div>

    </div>


    <!--MODAL 3-->
    <div id="modal-3" class="modal-overlay">
        <div class="modal-container">
            <a class="close-btn close-btn-3">X</a>
        </div>

        <!--HOTEL GALLERY-->
        <div class="gallery-container">

            <div class="grid">
                <div class="cell">
                    <img src="./images/high-garden-1.jpg" class="responsive-image" />
                </div>
                <div class="cell">
                    <img src="./images/high-garden-2.jpg" class=" responsive-image" />
                </div>
                <div class="cell">
                    <img src="./images//high-garden-3.jpg" class="responsive-image" />
                </div>
                <div class="cell">
                    <img src="./images/high-garden-4.jpg" class="responsive-image" />
                </div>
                <div class="cell">
                    <img src="./images/high-garden-5.jpg" class="responsive-image" />
                </div>
                <div class="cell">
                    <img src="./images/high-garden-6.jpg" class="responsive-image" />
                </div>
            </div>

        </div>

    </div>


    <!--MODAL 4-->
    <div id="modal-4" class="modal-overlay">
        <div class="modal-container">
            <a class="close-btn close-btn-4">X</a>
        </div>

        <!--HOTEL GALLERY-->
        <div class="gallery-container">

            <div class="grid">
                <div class="cell">
                    <img src="./images/winterfell-1.jpg" class="responsive-image" />
                </div>
                <div class="cell">
                    <img src="./images/winterfell-2.jpg" class="responsive-image" />
                </div>
                <div class="cell">
                    <img src="./images/winterfell-3.jpg" class="responsive-image" />
                </div>
                <div class="cell">
                    <img src="./images/winterfell-4.jpg" class="responsive-image" />
                </div>
                <div class="cell">
                    <img src="./images/winterfell-5.jpg" class="responsive-image" />
                </div>
                <div class="cell">
                    <img src="./images/winterfell-6.jpg" class="responsive-image" />
                </div>
            </div>

        </div>

    </div>

    <!--MODAL 5-->
    <div id="modal-5" class="modal-overlay">
        <div class="modal-container">
            <a class="close-btn close-btn-5">X</a>
        </div>

        <!--HOTEL GALLERY-->
        <div class="gallery-container">

            <div class="grid">
                <div class="cell">
                    <img src="./images/kings-landing-1.jpg" class="responsive-image" />
                </div>
                <div class="cell">
                    <img src="./images/kings-landing-2.jpg" class="responsive-image" />
                </div>
                <div class="cell">
                    <img src="./images/kings-landing-3.jpg" class="responsive-image" />
                </div>
                <div class="cell">
                    <img src="./images/kings-landing-4.jpg.jpg" class="responsive-image" />
                </div>
                <div class="cell">
                    <img src="./images/kings-landing-5.jpg" class="responsive-image" />
                </div>
                <div class="cell">
                    <img src="./images/kings-landing-6.jpg" class="responsive-image" />
                </div>
            </div>

        </div>

    </div>

    <!--MODAL 6-->
    <div id="modal-6" class="modal-overlay">
        <div class="modal-container">
            <a class="close-btn close-btn-6">X</a>
        </div>

        <!--HOTEL GALLERY-->
        <div class="gallery-container">

            <div class="grid">
                <div class="cell">
                    <img src="./images/the-vale-1.jpg" class="responsive-image" />
                </div>
                <div class="cell">
                    <img src="./images/the-vale-2.jpg" class="responsive-image" />
                </div>
                <div class="cell">
                    <img src="./images/the-vale-3.jpg" class="responsive-image" />
                </div>
                <div class="cell">
                    <img src="./images/the-vale-4.jpg" class="responsive-image" />
                </div>
                <div class="cell">
                    <img src="./images/the-vale-5.jpg" class="responsive-image" />
                </div>
                <div class="cell">
                    <img src="./images/the-vale-6.jpg" class="responsive-image" />
                </div>
            </div>

        </div>

    </div>

    <a href="logout.php">Logout</a>

    <script src="scripts/bookingapp.js"></script>
    <script src="scripts/header.js"></script>
    
</body>

</html>