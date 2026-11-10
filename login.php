<!DOCTYPE html>
<html>
<head>
    <title> LOGIN ADMIN </title>
</head>
    <body>
        <header> Masukkan username dan password</header>
        <from action = "proses.php"method="POST">
        <fieldset>
</p>
<label for="username">username:</label>
<input type="text"name="username"placeholder="masukkan username">
</p>
</p> 
<label for="password">password:</label>
<input type="text"name="password"placeholder="masukkan password">
</p>
</p>
<button type="submit">LOGIN</button>
</p>
</fieldset>
</from>
<?php
$error = "";
if(isset($_GET['error'])) {
    $error = $_GET['error'];
}
$message = '';

if(error == 'login'){
    $message = 'username,password anda salah';
}
else if(error == 'invalid'){
    $message = 'password harus diisi';
}
if($massage !=''){
    echo $message;
}
?>
</body>
</html>