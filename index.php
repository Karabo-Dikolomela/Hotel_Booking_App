<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include("./includes/links.php")
    ?>
    <title>Heavenly Stay</title>
</head>

<body>
    <div id="background">

        <div class="title-container">
            <img src="./css/images/8.png" alt="heavenly stay Logo" id="AppLogo">
            <p class="tagline">Book your heavenly stay location.
                <button class="arrow">Login in to make a booking<a href="#booking-form"> <i class="arrow fas fa-level-up-alt"></i></a></button>
            </p>
        </div>
    </div>

    <!--CALL-TO-ACTION MESSAGE-->
    <div id="call-to-action" class="call-to-action">
        <h2 class="voyage-message">Tired from voyaging</h2>
        <p>Make a stop at one of our luxurious hotels for a heavenly stay.<br><br>
        </p>
    </div>

    <!--HOTEL INFO SECTION 1-->
    <div class="card-container">
        <div class="flex-container">

            <!--CARD 1 CASTERLY ROCKL-->
            <div class="card">
                <div class="card-image" style="background-image: url(/images/casterly-rock-1.jpg)"></div>
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
        </div>
    </div>


    <!--CARD 2 BRAVOSI-->
    <div class="card">
        <div class="card-image" style="background-image: url(/images/bravosi.jpg)"></div>
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

    <!--HOTEL INFO SECTION 2-->
    <div class="card-container">
        <div class="flex-container">

            <!--CARD 3 HIGH GARDEN-->
            <div class="card">
                <div class="card-image" style="background-image: url(images/high-garden.jpg)"></div>
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
        </div>
    </div>
</body>

</html>