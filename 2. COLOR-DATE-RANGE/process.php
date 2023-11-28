<?php // HEADER 
include_once './templates/header.php';
?>
<?php
    // YOUR CODE HERE 
    if (isset($_POST['submit'])){
        $color = $_POST['color'];
        $range = $_POST['range'];
        $date = $_POST['date'];
    }
    
?>
    <div class="alert alert-secondary">
        <strong>Color: </strong> <span><?php //color;
        echo $color;
        ?></span>
    </div>
    <div class="alert alert-info">
        <strong>Range: </strong> <span><?php //range;
        echo $range;
        ?></span>
    </div>
    <div class="alert alert-danger">
        <strong>Date: </strong> <span><?php //date;
        echo $date;
        ?></span>
    </div>

<?php //FOOTER 
include_once './templates/footer.php';
?>