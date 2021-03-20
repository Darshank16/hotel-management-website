<?php
    session_start();
    require_once 'connection.php';

    if(isset($_POST['submit1'])){
        $name = $_POST['name'];        
        $email = $_POST['email'];
        $msg = $_POST['message'];
        
        
        

        $insertquery = "insert into contactus(name,email,msg)values('$name','$email','$msg')";
        
        $iquery = mysqli_query($conn,$insertquery);

        if($iquery)
        {
                ?>
                    <script>
                        alert("Thank you for your response.");
                        location.replace("contact.html");
                    </script>
                <?php

                }else{
                ?>
                    <script>
                         alert("Message Fail.Try Again");
                         location.replace("contact.html");
                     </script>
                <?php

        }
    }
?>