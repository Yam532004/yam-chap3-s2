<?php // HEADER
include_once './templates/header.php';
?>

<ul class="list-group">
<?php
   // YOUR CODE HERE
   if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST ['email'];
    $pass = $_POST ['pass'];
    $message = $_POST ['message'];


   }
   
?>

    <li class="list-group-item"><?php // name; 
       echo $name;
    ?></li>
    <li class="list-group-item"><?php // email;
        echo $email;
    ?></li>
    <li class="list-group-item"><?php // password;
       echo $pass;
    ?></li>
    <li class="list-group-item"><?php // number;
        echo $phone;
    ?></li>
    <li class="list-group-item"><?php // message;
        echo $message;
    ?></li>

</ul>
<?php // FOOTER
    include_once './templates/footer.php'
?>