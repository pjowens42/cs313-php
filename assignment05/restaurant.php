<?php
require('function.php');
$db = get_db();

$query = 'SELECT * FROM restaurant';
$stmt = $db->prepare($query);
$stmt->execute();
$restaurants = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurants</title>
</head>
<body>
<h1>Restaurants</h1>
<ul>
<?php
foreach ($restaurants as $restaurant)
{
  $id = $restaurant['restaurant_id'];
  $name = $restaurant['restaurant_name'];
  $city = $restaurant['restaurant_city'];
  $address = $restaurant['restaurant_address'];

  echo "<li><p>id:( $id )name:( $name )city:( $city )address:( $address)</p></li>";
}
?>
</ul>
</body>
</html>