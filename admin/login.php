<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login to system</title>
    <link rel="stylesheet" href="../css/styleAdmin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
</head>
<body >
    <?php include './session.php'?>
    <div id="background_login">
        <div id="form_login">
            
            <table>

               <div class="cri"></div>
               <div class="cri"></div>
                <tr>
                    <td>
                        
                    <form action="../functions/loginAdmin.php" method="post">
                    <center>
                        <h1>login to system</h1>
                        <input type="text" name="unameAdmin" placeholder="admin name" required >
                        <input type="password" name="passAdmin" placeholder="admin password" required>
                        <h2>you accepted all rule for page</h2>
                        <button type="submit">login</button>
                        
                        </center>
                    </form>
                    </td>
                    <td>
                        <div id="img_login">
                            <center>
                            <h1>dienthoaionline</h1>
                            <h2>login to admin</h2>
                            <h3>you sure have authorization access to this .you can insert , update or delete all variable in table </h3>
                            </center>
                            <div id="phone_login"></div>
                        </div>
                        
                    </td>
                </tr>

            </table>
            
            
        </div>
        
    </div>
</body>
</html>