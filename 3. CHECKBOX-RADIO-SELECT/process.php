<?php // HEADER 
include_once './templates/header.php';
?>
<?php
// YOUR CODE HERE
if (isset($_POST['submit'])) {
    $province = $_POST['province'];
    $gender = $_POST['gender'];
}
?>
<div class="card mb-3">
    <div class="card-header">Province</div>
    <div class="card-body">
        <h2 class="display-3">
            <?php // province
                                echo $province;
                                ?></h2>
    </div>
</div>
<div class="card mb-3">
    <div class="card-header">Gender</div>
    <div class="card-body">
        <!-- YOUR CODE HERE [gender] -->
        <?php
        if ($gender == "Female") {
            echo '<img src="./images/female.png" alt="Female" style="width: 200px;height: 200px;">';
        } else {
            echo '<img src="./images/male.png" alt="Male" style="width: 200px;height: 200px;">';
        }
        ?>

    </div>
</div>
<div class="card">
        <div class="card-header">Subject</div>
        <div class="card-body" style="gap: 10px;">
        <?php
        $a = implode(" ", $_POST["languages"]);
        $b = explode(" ", $a);
        foreach($b as $lang){
        ?>
        <span style="background-color: blue;color: white;  padding: 5px; margin: 5px; border-radius: 20px;">
            <?php echo $lang;?>
        </span>
        <?php
        };
        ?>
        </div>
        
    </div>

<?php // FOOTER 
include_once './templates/footer.php';

?>