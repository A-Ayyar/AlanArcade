<?php

session_start();
session_destroy();

?>

<!DOCTYPE HTML>

<html>

<head>

    <title>Alan Arcade login</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css"
    <script src="login.php"></script>
    <div class="alan-btn"></div>
    <script type="text/javascript"
            src="https://studio.alan.app/web/lib/alan_lib.min.js"></script>
    <script>
        var alanBtnInstance = alanBtn({
            key: "a71ca3e653da246a14b8b36c1a22b53d2e956eca572e1d8b807a3e2338fdd0dc/stage",
            onCommand: function (commandData) {
                if (commandData.command === "login") {


                }
            },
            rootEl: document.getElementById("alan-btn"),
        });

    </script>
</head>


<body id="index">
<nav>
    <h1>Alan Arcade</h1>

    <form action="login.php" method="post">

        <div class="reg-input">
            <label >User Name</label>
            <input type="text" name="email">
        </div>

        <div class="reg-input">
            <label >Password</label>
            <input type="password" name="password">
        </div>

        <input type="submit" value="Log In">
    </form>
</nav>

<header>

    <div class="row">

        <div class="one-of-two">
        <div class="one-of-two">
            <h2>Sign up</h2>



            <form action="register.php" method="POST" id="registration">
                <div>
                    <input type="text" placeholder="username" name="username" class="reg__fullbox">
                    <input type="password" placeholder="New password" name="password" class="reg__fullbox">
                    <input type="email" placeholder="email" name="email" class="reg__fullbox">
                </div>



                <input type="submit" >
                <form action="login.php"
            </form>



        </div>


    </div>


</header>


</body>


</html>
