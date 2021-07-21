<?php 
// cek apakah submit sudah ditekan atau belom
if(isset($_POST["submit"])){
    //cek username dan pass
    if($_POST["user"] == "admin" && $_POST["pass"] === "123"){
        //jike benar redirect admin
        header("Location: admin.php");
        exit;
    }else{
        //jika salah tampilkan pesan error
        $error = true;
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
</head>
<body>
<h1>Login Admin</h1>
<?php if(isset($error)) : ?>
<p style="color:red; font-style: italic;">username / password Salah!!</p>
<?php endif?>
    <ul>
    <form action="" method="post">
        <li>
            <label for="username">Username : </label>
            <input type="text" name="user" id="username">
            
        </li>
        <li>
            <label for="password">Password : </label>
            <input type="password" name="pass" id="password">
        </li>

        <li>
            <button type="submit" name="submit">Kirim</button>
        </li>
    </form>
    </ul>


</body>
</html>