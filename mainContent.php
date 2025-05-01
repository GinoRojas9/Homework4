
<!-- uses the include method to display the header page within the main page -->
<?php
include('Header.php');
?>

<!DOCTYPE html>
<head>

<!-- style tag used to modify the positioning of the tags within the header and footer,
 the positioning of the list of games within the main content page and change the colors of
 the website.-->
<style>


body {
    background-color: black;
    color: yellow;

}

h1 {
text-align: center;

}

th {
    display: center;
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 15px;
    padding-right: 15px;
    width: 150px;
    margin: -2px;
}

div {
display: inline-block;
}

ul {
Padding-right: 25px;
display: inline-block;
list-style-type: none;
padding-left: 70px;
}

a {
text-decoration: none;
color:yellow;
}

b {
font-size: 20px;
}
</style>
</head>

<body>


<!-- uses the unordered list tag to display three lists of recommended games with each list having their
 own category, alongside the div tag for positioning purposes.-->
<h3 align = center> Top Sellers </h3>

<div>
<ul>
<li><b>Elden Ring</b></li>
<li>Price: $59.99</li>
<li>Rating: 9/10</li>
<li>Developer: FromSoftware</li>
<li>Platforms: PS5, XBOX</li>
</ul>
</div>

<div>
<ul>
<li><b>Mario Kart 8 Deluxe</b></li>
<li>Price: $59.99</li>
<li>Rating: 9/10</li>
<li>Developer: Nintendo</li>
<li>Platforms: Nintendo Switch</li>
</ul>
</div>

<div>
<ul>
<li><b>Marvel's Spider-Man 2</b></li>
<li>Price: $69.99</li>
<li>Rating: 9/10</li>
<li>Developer: Sony</li>
<li>Platforms: PS5</li>
</ul>
</div>

<div>
<ul>
<li><b>Monster Hunter: World</b></li>
<li>Price: $29.99</li>
<li>Rating: 8/10</li>
<li>Developer: CAPCOM Co.</li>
<li>Platforms: PS5, XBOX</li>
</ul>
</div>


<h3 align = center> Best Indie Games </h3>

<div>
<ul>
<li><b>Hollow Knight</b></li>
<li>Price: $14.99</li>
<li>Rating: 8/10</li>
<li>Developer: Team Cherry</li>
<li>Platforms: PS5, XBOX</li>
</ul>
</div>

<div>
<ul>
<li><b>Hades</b></li>
<li>Price: $24.99</li>
<li>Rating: 10/10</li>
<li>Developer: Supergiant Games</li>
<li>Platforms: XBOX, Nintendo Switch</li>
</ul>
</div>

<div>
<ul>
<li><b>Crypt of the NecroDancer</b></li>
<li>Price: $19.99</li>
<li>Rating: 8/10</li>
<li>Developer: Brace Yourself Games</li>
<li>Platforms: PS5, Nintendo Switch</li>
</ul>
</div>

<div>
<ul>
<li><b>Animal Well</b></li>
<li>Price: $24.99</li>
<li>Rating: 10/10</li>
<li>Developer: Shared Memory LLC</li>
<li>Platforms: PS5, Nintendo Switch</li>
</ul>
</div>

<h3 align = center> Best Games On Sale </h3>

<div>
<ul>
<li><b>Another Crab's Treasure</b></li>
<li>Price: <s>$39.99</s> $15.99</li>
<li>Rating: 8/10</li>
<li>Developer: Aggro Crab</li>
<li>Platforms: PS5, XBOX</li>
</ul>
</div>

<div>
<ul>
<li><b>Don't Starve Together</b></li>
<li>Price: <s>$14.99</s> $5.09</li>
<li>Rating: 8/10</li>
<li>Developer: Klei Entertainment</li>
<li>Platforms: PS5, XBOX, Nintendo Switch</li>
</ul>
</div>

<div>
<ul>
<li><b>Persona 3 Reload</b></li>
<li>Price: <s>$69.99</s> $24.99</li>
<li>Rating: 9/10</li>
<li>Developer: Atlus</li>
<li>Platforms: PS5, XBOX</li>
</ul>
</div>

<div>
<ul>
<li><b>It Takes Two</b></li>
<li>Price: <s>$39.99</s> $19.99</li>
<li>Rating: 10/10</li>
<li>Developer: Hazelight Studios</li>
<li>Platforms: PS5, Nintendo Switch</li>
</ul>
</div>

</body>

<!-- uses the include method to display the footer page within the main page -->
<?php
include('Footer.php');
?>
</html>