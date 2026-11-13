<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        header("Content-type")
        if(!isset($_COOKIE["Mna"])){
            echo "非法進入網站" ;
        }
        else{
            $acct = $_POST["acct"] ;
            $sex = $_POST["sex"] ;
            echo "帳號: $acct(".$_COOKIE["Mna"].")" ;
            if($sex=="M"){
                echo "先生" ;
                
            }
            elseif($sex=="F"){
                echo "小姐" ;
            }
            else{
                echo "人妖" ;
            }
        }
    ?>
</body>
</html>