
<?php 
$login='';
$err='';
if(isset($_GET['yname']) && isset($_GET['email'])){
   $yname=$_GET['yname'];
   $email=$_GET['email'];

   if(empty( $yname) && empty( $email)) {
    $err='Form is requeird';
   }else{
    $login='Successfully login';
   }
}
?>
    <form action="testform.php" method="GET">
        Name :<input type="text" name="yname" ><br><?php echo $err ?><br><br>
        Email :<input type="email" name="email"><br><?php echo $err ?><br><br>
        <input type="submit" value="submit"><br><br>
        <?= $login ?>
    </form>
