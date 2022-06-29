
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
<div class="center">
    <h4>From:</h4>
    DD  <input type="text" id="day" size="2">
    MM  <input type="text" id="month" size="2">
    YYYY  <input type="text" id="year" size="4">
    <h4>To:</h4>
    DD  <input type="text" id="today" size="2">
    MM  <input type="text" id="tomonth" size="2">
    YYYY  <input type="text" id="toyear" size="4">

   <input type="button" value="Pritisni" onclick="DateValidation()">

   <br><p id="text"></p>

</div>

<!--Weather-->
<?php

$city_name='Novi Sad';
$api_key='3d0048f242aed5170e4235c5ab1b6743';
$api_url='https://api.openweathermap.org/data/2.5/weather?q='.$city_name.'&appid='.$api_key;
$weather_data=json_decode(file_get_contents($api_url),true);

$temperature=$weather_data['main']['temp'];
$temperature_into_celicius= $temperature - 273.15;
$temperature_curent_weather_description=$weather_data['weather'][0]['description'];
$temperature_curent_weather_icon=$weather_data['weather'][0]['icon'];

echo "<div class='center'><p>The current weather in Novi Sad  ". $temperature_into_celicius ."°C ".$temperature_curent_weather_description."</p></div>";

?>
<!--Weather-->









<script src="script.js"></script>
</body>
</html>