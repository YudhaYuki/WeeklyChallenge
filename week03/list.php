<?php

require 'lib/data-functions.php';

$index = get_index();

    function li_generator($index) {
        foreach ($index as $key => $value) {
            $id=$key;
            $data=get_data($id);
            $query_string = http_build_query($data);
            echo "<li>$key : $value<br><a href='detail.php?id=$id&$query_string'>See details</a></li><br>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List</title>
</head>
<body>



<h1>List of students</h1>
        <ul>
            <?php li_generator($index) ?>
        </ul>
        <a href="index.php">return to the form</a>
        
    
</body>
</html>