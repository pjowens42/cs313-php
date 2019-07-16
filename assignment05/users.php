<?php
require('function.php');
$db = get_db();

$query = 'SELECT * FROM users';
$stmt = $db->prepare($query);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
foreach ($users as $user)
{
  $id = $user['users_id'];
  $FirstName = $user['firstname'];
  $LastName = $user['lastname'];
  $users_email = $user['users_email'];
  $password = $user['password'];


  echo "<li><p>id:( $id )FirstName:( $FirstName )LastName:( $LastName )email:( $users_email)password:($password)</p></li>";
}
?>
</ul>
</body>
</html>