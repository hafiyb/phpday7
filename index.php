<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
include "class.php";
?>
<body>
    <form action="index.php" method="post">
        Name : <input type="text" name="name">
        <br><br>
        DOB (yyyy-mm-dd) : <input type="text" name="dob">
        <br><br>
        Hobby : <input type="text" name="hobby">
        <br><br>
        <input type="hidden" name="status" value="1">
        <input type="submit">
    </form>
    
    <?php
    $status = $_POST['status'];

    if($status == 1){
        $name = $_POST['name'];
        $name2 = $_POST['name'];
        $dob = $_POST['dob'];
        $hobby = $_POST['hobby'];

        $name = new person();
        $name->set_name($name2);
        $name->set_dob($dob);
        $name->set_hobby($hobby);

        // print_r ($name);

        echo "<br><br>Hi, my name is ".$name->get_name().", I am ".$name->get_dob()." years old and my hobby is ".$name->get_hobby();
    }
    ?>
</body>
</html>