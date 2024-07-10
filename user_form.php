<?php

$name = $email = $contact = $gender = $error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){

function clean_input($field){
    $field = trim($field);
    $field = stripslashes($field);
    $field = htmlspecialchars($field);
    return $field;
}

$name = clean_input($_POST["name"]);
$email = clean_input($_POST["email"]);
$contact = clean_input($_POST["contact"]);
$gender = clean_input($_POST["gender"]);

if(isset($name) && $name != "" && isset($email) && $email != ""){

    $sql = "INSERT INTO userss(user_name, user_email, user_contact, user_gender)
     VALUES('$name', '$email', '$contact', '$gender')";

     if($connection->query($sql) === TRUE){

        echo"Thank you for creating an account into our website.";
     }else{
        echo"error in creating an account:".$connection->error;
     }

}else{
    $error = "You must fill all the require fields";
}

//echo "Hello,".$name;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    color: #333;
}

label {
    display: block;
    margin-bottom: 8px;
    color: #333;
}

input[type="text"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

input[type="radio"] {
    margin-right: 10px;
}

button {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #45a049;
}
.error-row span{
     padding: 10px;
     background: #FE431B;
     color :#fff;
     display: none;


}
</style>
</head>
<body>
   <h1>User Form</h1>
    <form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF'])?>" method="post">
  <div class="container">
       <label for="name"> name: *</label>
       <input type="text" id="name" name="name" required><br><br>

       <label for="email"> Email: </label>
       <input type="text" id="email" name="email"><br><br>

       <label for="contact"> contact: *</label>
       <input type="number" id="contact" name="contact" required><br><br>

       <input type="radio" name="gender" checked> Male
       <input type="radio" name="gender"> Female

       <br><br>
       
        <button>Submit</button>
  </div>
  <div class="error-row">

  <?php
  if($error){
    echo'<span style="display: block">'.$error.'</span>';
  }
  ?>

  </div>
    
    </form> 
    
</body>
</html>