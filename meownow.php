<html>
<header>
<img src="cooltext.gif">
</header>
<body background="http://24.media.tumblr.com/8210fd413c5ce209678ef82d65731443/tumblr_mjphnqLpNy1s5jjtzo1_400.gif">
<?php
// display form if user has not clicked submit
if (!isset($_POST["submit"])) {
  ?>
  <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
  To: <input type="text" name="to"><br>
  <input type="submit" name="submit" value="SEND CATS">
  </form>
  <?php 
} else {    // the user has submitted the form
  // Check if the "from" input field is filled out
  if (isset($_POST["to"])) {
    $to = $_POST["to"];
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= "From: sexyfelines@c.at";
    $rand = rand();
    //$senders1 = array("sexyfelines@")
    mail($to,"CATS!","<html><img src=\"http://thecatapi.com/api/images/get?format=src&type=gif&{$rand}\"></html>",$headers);
    ?>
    <img src="ontheway.jpg">
    <?php
    }
    //echo "<html><img src=\"ontheway.jpg\"></html>"; 
}
?>
<audio autoplay="autoplay" loop="loop"><source src="./nyansong.mp3" type="audio/mp3"></audio>
</body>
</html>