<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
      
      <?php
         $to = "vyom.rana02@gmail.com";
         $subject = "SIte to sell old items";
         
         $message = $_POST['message'].PHP_EOL."Phone No.:-".$_POST['no'];
        
         
         $header = $_POST['email'];
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
         echo "<br>click <a href='homepage.php'>here</a> to go to homepage";
      ?>
      
   </body>
</html>