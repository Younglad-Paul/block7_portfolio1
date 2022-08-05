   <?php ob_start();
   if (isset($_POST ['submit'])) {
$to ="borisadedayopaul@gmail.com";
$submit = $_POST['name'];
$email = $_POST['email'];
$txt = $_POST['location'];
$headers = "from:" .$email . "\r\n" .
"CC: youngladpaul@gmail.com";

    mail($to, $name,$email, $headers);
    header("Location:contact.html");
   }
   ?>