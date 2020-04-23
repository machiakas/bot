<?php
session_start();
// include database and object files
include_once '../config/database.php';
include_once '../objects/user.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare user object
$user = new User($db);

// set ID property of user to be edited
$user->username = isset($_POST['username']) ? $_POST['username'] : die();
$user->password = isset($_POST['password']) ? $_POST['password'] : die();

// read the details of user to be edited
$stmt = $user->login();
if($stmt->rowCount() > 0){

    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // create array
    $user_arr=array(
        "status" => true,
        "message" => "Successfully Login!",
        "id" => $row['id'],
        "username" => $row['username'],
        "redirect" => "yes",
        
    );
}
else{
    $user_arr=array(
        "status" => false,
        "message" => "Invalid Username or Password!",
        "redirect" => "no",
    );
}
// make it json format
$json_user = json_encode($user_arr);
echo($json_user);
$json_decoded = json_decode($json_user);

$_SESSION['usuario'] = $json_decoded->username;
//return json_encode($user_arr);



?>