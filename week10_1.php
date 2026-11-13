<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        $dep = "資管系" ;
        echo "<h2>" . $dep . "</h2>" ; //或 "<h2>$dep</h2>"
        $teacher = array("Eric","Kevin","Mary");
        echo "<ul>";
        for($i=0 ; $i<3 ; $i++){
            echo "<li>$teacher[$i]</li>";
        }
        echo "<ul>"
    ?>
</body>
</html>