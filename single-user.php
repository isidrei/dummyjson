<?php
require "vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
        'base_uri' => 'https://dummyjson.com/'
]);
$response = $client->get('https://dummyjson.com/users/1');
$id = $_GET["user_id"];
$response = $client->get('users/' . $id);
$code = $response->getStatusCode();
$body = $response->getBody();
$user = json_decode($body);



?>

<!DOCTYPE html>
<html>
<head>
<title> SINGLE USER </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body style="background-color:black">
         <div class="container">
        <div class="row">
            <div class="col-9"><h1 style="color:white">Single User</h1></div>
        </div>
    </div>
      <br><br>
        <div class = "container"> 
        <table class="table table-bordered table-dark">
                <thead>
                        <tr>
                        <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Blood Type</th>
                    <th scope="col">Image</th>
                        </tr>
                </thead>
        <tbody>
                <tr>
                <th scope="row"><?php echo $user->id ?></th>
                        <td><?php echo $user->firstName ?></td>
                        <td><?php echo $user->lastName ?></td>
                        <td><?php echo $user->age ?></td>
                        <td><?php echo $user->email ?></td>
                        <td><?php echo $user->phone ?></td>
                        <td><?php echo $user->bloodGroup ?></td>
                        <td><img src="<?php echo $user->image?>" width="100px"></td>
                </tr>
        </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>