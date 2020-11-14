<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dienthoaionline</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
    <?php    
        include './session.php';
        include './searchbar.php';
        include './banner.php';
        include './menu.php';   
        $name = $_GET['txtsearch'];
        $info = "select * from HangHoa where TenHH like '%$name%' limit 40";
        include './info.php';
        include "./fooder.php"; 
    ?>
    </div>
    <script src="../js/app.js"></script>
    
</body>
</html>