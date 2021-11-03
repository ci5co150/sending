<?php

$index=(isset($_POST["index"])) ? $_POST["index"] : 0;

$json = file_get_contents('planets2.json');

//$json='[ { "Planet": "Mercury", "Distance from the sun(AU)": 0.39, "Period of revolution": "88 days", "Period of rotation": "59 days", "Mass(earth=1)": 0.06, "Diameter(earth=1)": 0.38, "Number of confirmed satellites": 0, "Image": "https://solarsystem.nasa.gov/system/feature_items/images/18_mercury_new.png" }, { "Planet": "Venus", "Distance from the sun(AU)": 0.72, "Period of revolution": "225 days", "Period of rotation": "243 days", "Mass(earth=1)": 0.82, "Diameter(earth=1)": 0.95, "Number of confirmed satellites": 0, "Image": "https://solarsystem.nasa.gov/system/feature_items/images/27_venus_jg.png" }, { "Planet": "Earth", "Distance from the sun(AU)": 1, "Period of revolution": "365 days", "Period of rotation": "24 hours", "Mass(earth=1)": 1, "Diameter(earth=1)": 1, "Number of confirmed satellites": 1, "Image": "https://solarsystem.nasa.gov/system/feature_items/images/17_earth.png" }, { "Planet": "Mars", "Distance from the sun(AU)": 1.52, "Period of revolution": "687 days", "Period of rotation": "25 hours", "Mass(earth=1)": 0.11, "Diameter(earth=1)": 0.53, "Number of confirmed satellites": 2, "Image": "https://solarsystem.nasa.gov/system/feature_items/images/19_mars.png" }, { "Planet": "Jupiter", "Distance from the sun(AU)": 5.2, "Period of revolution": "12 years", "Period of rotation": "10 hours", "Mass(earth=1)": 317.89, "Diameter(earth=1)": 11.19, "Number of confirmed satellites": 63, "Image": "https://solarsystem.nasa.gov/system/feature_items/images/16_jupiter_new.png" }, { "Planet": "Saturn", "Distance from the sun(AU)": 9.54, "Period of revolution": "29 years", "Period of rotation": "10 hours", "Mass(earth=1)": 95.15, "Diameter(earth=1)": 9.44, "Number of confirmed satellites": 61, "Image": "https://solarsystem.nasa.gov/system/feature_items/images/28_saturn.png" }, { "Planet": "Uranus", "Distance from the sun(AU)": 19.2, "Period of revolution": "84 years", "Period of rotation": "18 hours", "Mass(earth=1)": 14.54, "Diameter(earth=1)": 4.1, "Number of confirmed satellites": 27, "Image": "https://solarsystem.nasa.gov/system/feature_items/images/29_uranus.png" }, { "Planet": "Neptune", "Distance from the sun(AU)": 30.06, "Period of revolution": "165 years", "Period of rotation": "18 hours", "Mass(earth=1)": 17.23, "Diameter(earth=1)": 3.88, "Number of confirmed satellites": 14, "Image": "https://solarsystem.nasa.gov/system/feature_items/images/30_neptune.png" } ]';

$arr = json_decode($json);
//echo json_encode($arr[0]);
echo json_encode($arr[$index]->Planet);


?>
