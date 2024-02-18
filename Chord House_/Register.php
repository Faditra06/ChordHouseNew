<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chord House</title>
    <link rel="stylesheet" href="Register.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Catamaran' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
        <img src="b.png" id="logo"><br>
        <h1 id="Login">Register</h1>
        <p id="sign">Create new account</p>
        <form method="post" autocomplete="off" name="register">
            <label for="username"></label>
            <input type="text" name="username" id = "username" placeholder="   &#xf007; Username"style="font-family:Arial, FontAwesome" >
            <label for="email"></label>
            <input type="text" name="email" id = "email" placeholder="   &#xf0e0; Email"style="font-family:Arial, FontAwesome" >
            <label for="password"></label>
            <input type="password" name="password" id = "password" placeholder="   &#xf023; Password"style="font-family:Arial, FontAwesome" >
            <button type="submit" name="submit">Register</button>
        </form>
        <p>already have an account?<a href="Login.php">Login Here</a></p>

        <?php include 'koneksi.php'
        ?>
        <?php
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $query = $koneksi->query("INSERT INTO tbl_user(username, email, password)VALUE('$username', '$email', '$password')");
            if($query){
                echo "<script>alert('Register Berhasil');window.location = 'Login.php';</script>";
            }else{
                echo "<script>alert('Register Gagal');window.location = 'Register.php';</script>";
            }
        }
        ?>
</body>

</html>