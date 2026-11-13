
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        ob_start(); //將要印出的資料 先放入緩衝區(buffer)
        setcookie("Mna" , "Admin") ;
    ?>
    <form method="post" action="week10_3.php">

        帳號: <input type="text" name="acct"><br>
        性別: <input type="radio" name="sex" value="M" checked>男
              <input type="radio" name="sex" value="F" >女
              <input type="radio" name="sex" value="O" >其他<br>
            <input type="submit" value="送出">
    </form>    
</body>
</html>