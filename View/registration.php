
<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/style.css">
    <link href="https: //fonts.googleapis.com/css2?family= Roboto:ital, wght @1,100 & display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>


<body>
<form class="login container mt-4 " id="registration_form" role="form" method="post" action="">

    <div class="row-padded">

        <h1 id="registration_header" >Registration</h1>
        <input type="email" class="form-control" name="email" id="email" value="" placeholder="Email" required></label>
        <br>
        <input type="text" class="form-control" name="name" id="name" value="" placeholder="Name" required></label>
        <br>
        <input type="text" class="form-control" name="surname" id="surname" value="" placeholder="Surname" required></label>
        <br>
        <input type="text" class="form-control" name="nickname" id="nickname" value="" placeholder="Nickname" required></label>
        <br>
        <input type="password" class="form-control" name="password" id="password_registration" value="" placeholder="Password" required></label>
        <br>
        <input type="password" class="form-control" name="password_again" id="password_again" value="" placeholder="Password again" required></label>
        <br>

        <label>Have account? </label>
        <a href="login.php">Sign in</a>
        <br>
        <button class="btn" id="registration_button" name="action" value="login" type="submit" >Sign up</button><br>


    </div>

</form>

</body>

</html>

