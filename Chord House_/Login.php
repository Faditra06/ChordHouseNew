<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chord House</title>
    <link rel="stylesheet" href="Login.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Catamaran' rel='stylesheet'>

</head>

<body>
    <?php 
    session_start();
    include 'koneksi.php';?>
    <div class="container">
        <img src="b.png" id="logo"><br>
        <h1 id="Login">Login</h1>
        <p id="sign">Sign in to your account</p>
        <form method="post" autocomplete="off">
        <label for="username"></label>
        <input type="text" name="username" id = "username" placeholder="   &#xf007; Username"style="font-family:Arial, FontAwesome" >
        <label for="password"></label>
        <input type="password" name="password" id = "password" placeholder="   &#xf023; Password"style="font-family:Arial, FontAwesome" >
        <button type="submit" name="login">Login</button>
        </form>
        <p>Don't have a account?<a href="Register.php">Register Here</a></p>
    </div>
    <?php
    if(isset($_POST['login'])){
        $un = $_POST['username'];
        $pwd = $_POST['password'];

        $qry = $koneksi->query("SELECT * FROM tbl_user WHERE username='$un' AND password='$pwd'");
        $result = mysqli_num_rows($qry);

        if($result == 1){
            $data = $qry->fetch_assoc();

            $_SESSION['user'] = $data;
            echo "<script>alert('Login Berhasil');window.location='User_Land.php';</script>";
        }else{
            echo "<script>alert('Login Gagal');window.location='Login.php';</script>";
        }
    }
    ?>
</body>

</html>