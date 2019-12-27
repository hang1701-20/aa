<?php
    include("db/connect.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">    
</head>
<body>
    <div class="content">
        <div class="menu">
            <a href="index.php?str=them">Them</a>
            <a href="index.php?str=tk">tim Kiếm</a>
        </div>
        <div class="center">
            <?php 
                if(isset($_GET['str']))
                {
                    $str = $_GET['str'];
                    switch ($str) {
                        case 'them': include("page/themm.php");break;
                        case 'xoa': include("page/xoa.php");break;
                        case "sua" : include("page/sua.php");break;
                        
                    }
                }else include("page/danhSachKhacHang.php");
            ?>
        </div>
    </div>
</body>
</html>
<?php
    include("db/disconnect.php")
?>