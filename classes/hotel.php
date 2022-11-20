<?php
spl_autoload_register('autoLoadHotel');

function autoLoadHotel($hotel) {
    $path = "classes/";
    $ext = ".php";
    $fullPath = $path . $hotel .$ext;

    include_once $fullPath;
}

Class Hotel {
    public $name;
    public $description;
    public $pool;
    public $wifi;
    public $ocean_view;
    public $pets_allowed;
    public $price;


public function __construct($name, $description, $pool, $wifi ,$ocean_view, $pets_allowed, $price) {

    $this-> name = $name;
    $this-> description = $description;
    $this-> pool = $pool;
    $this-> wifi = $wifi;
    $this-> ocean_view = $ocean_view;
    $this-> pets_allowed = $pets_allowed;
    $this-> price = $price;
 }

}

$hotel1 = new Hotel ("Casterly Rock", "Upmarket hotel with a view of the ocean and private beach access.", "Yes", "Yes", "Yes", "No", 500 );
$hotel1 = new Hotel ("Bravosi","Friendly and down-to-earth accommodation close to public beaches, shops and nightlife.", "No", "Yes", "Yes", "Yes", 350);
