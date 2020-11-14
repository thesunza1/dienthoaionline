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
        include './searchbar.php';
       
    ?>
    <table id="sign">
        <tr>
            <td>
                
                <form class="sign" action="#" onsubmit="return checkForm()" method="post">
                    <center>
                        <h1>sign up </h1>
                        <p>username:</p>
                        <input type="text"  placeholder="username" autocomplete="off" name="uname">
                        <p name="reuname">.</p>
                        <br>
                        <p>password:</p>
                        <input type="text" name="pass" placeholder="password" autocomplete="off">
                        <p name="repass">.</p>
                        <br>
                        <p>name:</p>
                        <input type="text" name="u_name" placeholder="name" autocomplete="off">
                        <p name="rename">.</p>
                        <br>
                        <p>number phone:</p>
                        <input type="text" name="phone" placeholder="phone" autocomplete="off">
                        <p name="rephone">.</p>
                        <br>
                        <p>address</p>
                        <input type="text" name="address" placeholder="address" autocomplete="off">
                        <p name="readdress">.</p>
                        <br>
                        
                        <button type="submit">sign</button>
                    </center>
                </form>
            </td>

            <td>
            <form class="sign" action="../sql/insert.php" onsubmit="return checkForm2()" method="post">
                    <center>
                        <h1>login to system</h1>
                        <p>username:</p>
                        <input type="text" name="username_login" placeholder="username" autocomplete="off">
                        <br>
                        <p>password:</p>
                        <input type="text" name="password_login" placeholder="password" autocomplete="off">
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