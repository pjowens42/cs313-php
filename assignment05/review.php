<?php
require('function.php');
$db = get_db();

$query = 'SELECT * FROM review';
$stmt = $db->prepare($query);
$stmt->execute();
$reviews = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>users</title>
</head>
<body>
<h1>users</h1>
<ul>
<?php
foreach ($reviews as $review)
{
  $id = $review['review_id'];
  $restaurant_id = $review['restaurant_id'];
  $users_id = $review['users_id'];
  $review_data = $review['review_data'];
  $review_name = $review['review_name'];


  echo "<li><p>id:( $id )restaurant_id:( $restaurant_id )users_id:( $users_id )email:( $review_data)review_name:($review_name)</p></li>";
}
?>
</ul>
</body>
</html>