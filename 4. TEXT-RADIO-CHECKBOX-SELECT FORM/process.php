<?php require_once 'templates/header.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $message = $_POST['message'];
    $province = $_POST['province'];
    $gender = $_POST['gender'];
    $languages = $_POST['languages'];
}
?>


<table class="table table-striped table-bordered">
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Number</th>
        <th>Message</th>
        <th>Provinces</th>
        <th>Gender</th>
        <th>Subject</th>
    </tr>
    <?php

    ?>
    <tr>
        <td><?php //name; 
            echo $name;
            ?></td>
        <td><?php //email; 
        echo $email;
            ?></td>
        <td><?php //password; 
        echo $pass;
            ?></td>
        <td><?php //number;
        echo $phone; 
            ?></td>
        <td><?php //message;
        echo $message; 
            ?></td>
        <td><?php //province; 
        echo $province;
            ?></td>
        <td>
            <?php
            // subjects
        echo $gender;
            ?>
        </td>
        <td><?php // gender 
        for ($i=0; $i<count($languages); $i++){
            if($i<count($languages)-1){
                echo $languages[$i]."|";
            }else{
                echo $languages[$i];
            }
        }
            ?></td>
    </tr>

</table>
<?php require_once 'templates/footer.php' ?>