<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
</head>
<body>
    <?php 
        include './session.php';
        include './searchbar.php';
    ?>
    <table id="sign">
        <tr>
            <td>

                <form class="sign" action="./signup.php"  method="post">
                    <center>
                        <h1>sign up </h1>
                        <p>username:</p>
                        <input type="text"  placeholder="username" autocomplete="off" name="uname" pattern="[A-Z,a-z]{1,16}" required>
                        <br>
                        <p>password:</p>
                        <input pattern="[0-9,A-Z,a-z]{1,8}" required type="password" name="pass" placeholder="password" autocomplete="off">
                        <br>
                        <p>name:</p>
                        <input pattern="[0-9,A-Z,a-z]{4,50}" required type="text" name="u_name" placeholder="name" autocomplete="off">
                        <br>
                        <p>number phone:</p>
                        <input pattern="[0-9]{9,11}" required type="tel" name="phone" placeholder="phone" autocomplete="off">
                        <br>
                        <p>address</p>
                        <input pattern="[0-9,A-Z,a-z]{1,80}" required type="text" name="address" placeholder="address" autocomplete="off">
                        <br>
                        
                        <button type="submit">sign</button>
                    </center>
                </form>
            </td>

            <td>
            <form class="sign" action="./loginup.php"  method="post">
                    <center>
                        <h1>login to system</h1>
                        <p>username:</p>
                        <input pattern="[A-Z,a-z]{1,16}" required type="text" name="username_login" placeholder="username" autocomplete="off">
                        <br>
                        <p>password:</p>
                        <input pattern="[0-9,A-Z,a-z]{1,16}" required type="password" name="password_login" placeholder="password" autocomplete="off">
                        <br>
                        <button type="submit">login</button>
                    </center>
                </form>
            </td>
        </tr>
    </table>
    <?php
        include "./fooder.php";
    ?>
    <script src ="../js/check.js"></script>
</body>
</html>