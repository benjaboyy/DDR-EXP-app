<?php

    include 'include/header.php';
   
    if(isset($_POST['submit'])) {
        $firstname     = $_POST["firstname"];
        $lastname      = $_POST["lastname"];
        $tag           = $_POST["tag"];
        $email         = $_POST["email"];
        $mobilenumber  = $_POST["mobilenumber"];
        $iidx          = $_POST["iidx"];
        $popn          = $_POST["popn"];
        $itg           = $_POST["itg"];
        $pump          = $_POST["pump"];
        $itgd          = $_POST["itgd"];
        $pumpd         = $_POST["pumpd"];
        
        // Query
        $sqls = "UPDATE users SET firstname='$firstname',lastname='$lastname',email='$email',iidx= '$iidx',popn= '$popn',itg= '$itg',pump= '$pump',itg_d= '$itgd',pump_d= '$pumpd' WHERE id='{$_SESSION['id']}'";
           
        // Create mysql query
        $stmt = mysqli_query($connection, $sqls);
        
        if (mysqli_query($connection, $sqls)) {
            $message = "Account updated";
        } else {
            $message = "Error with quiry";
            mysqli_free_result($stmt);
        }
        

    }else {
        $message = "Can't update";
    }
?>

<?php echo $_SESSION['id']; ?><br>
<?php echo $message; ?><br>
<?php echo $firstname; ?><br>
<?php echo $lastname; ?><br>
<!--<?php echo $tag; ?><br>-->
<?php echo $email; ?><br>
<!--<?php echo $mobilenumber; ?><br>-->
<?php echo $iidx; ?><br>
<?php echo $popn; ?><br>
<?php echo $itg; ?><br>
<?php echo $itgd; ?><br>
<?php echo $pump; ?><br>
<?php echo $pumpd; ?><br>

<!--
UPDATE users SET tag='Behy' WHERE id='1'
UPDATE users SET email='benjaboyy@hotmail.nl' WHERE id='1'
-->


<!--

-->