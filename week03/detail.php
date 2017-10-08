<?php

require 'lib/data-functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail</title>
</head>
<body>
    <h1 class="pl-3">Details of <?php echo $_GET['name']; ?></h1><br>
        <ul><?php  
            foreach ($_GET as $key => $value) {
                if ($key=='id') {
                    continue;
                } else {
                echo '<li><span>' . $key . ':</span> <span>' . $value . '</span></li><br>' ;
                }
            }
        ?></ul>


<p><a href="index.php"> Back to form page <a></p>
<a href="list.php">See the list of the students</a>
    
</body>
</html>