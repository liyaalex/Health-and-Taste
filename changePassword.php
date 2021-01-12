<?php 
error_reporting(0);
if(!isset($_SESSION)) 
    { 
        session_start();
    }
    else
    {
        session_destroy();
        session_start(); 
    }

include 'include\head.php'; ?>

         <div id="content1_contact">
      <h1 class="l-heading"><span class="text-primary">Change Password</span> With Us</h1>

      <p>Please fill out the form below to register</p>
      <fieldset>

    
          <form action="" method="post">

       <table>
        <tr>
            <td><input class="reg-input" type="password" name="newpassword" id="name"  placeholder="Enter New Passsword"  required></td>
        </tr>
        
        <tr>
            <td><input class="reg-input" type="password" name="newrepassword" id="name"  placeholder="Re-Enter New Passsword"  required></td>
        </tr>
        
        
       </table>   
              
      <button id="contact-btn" type="submit" class="btn" name="SubmitButton">Change Password</button>
      

        <div id="myModal" class="modal">

          <div class="modal-content">
            <span class="close">&times;</span>
            <p>Password don't match!</p>
          </div>

        </div>
      <div id="myModal2" class="modal">

          <div class="modal-content">
            <span class="close" id="cl2">&times;</span>
            <p>Password changed successfully!</p>
          </div>

        </div>

<script>
// Get the modal
var modal = document.getElementById("myModal");
var modal2 = document.getElementById("myModal2");

// Get the button that opens the modal
var btn = document.getElementById("contact-btn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var span2=document.getElementById("cl2");

// When the user clicks the button, open the modal 
btn.onclick = function() {
  
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
span2.onclick = function() {
    window.location = "index.php";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}
</script>

      </form>
</fieldset>
      <?php
                if(isset($_POST['SubmitButton'])){ 
                        if(!empty($_POST['newpassword'])&&!empty($_POST['newrepassword']))
                        {
                                $servername = "localhost";
                                $username = "root";
                                $password = "your_password";
                                $dbname="healthandtaste";
                                
                                $username=$_SESSION['usernameforget'];
                                $newpassword=$_POST['newpassword'];
                                $renewpassword=$_POST['newrepassword'];
                                
                                if($newpassword==$renewpassword)
                                {
                                    $conn=new mysqli($servername,$username,$password,$dbname);
                                    if($conn->connect_error)
                                    {
                                        die("Connection failed: ".$conn->connect_error);
                                    }

                                    $sql="Update users set password='$newpassword' where username='$username'";

                                    if($conn->query($sql)===TRUE)
                                    {
                                         echo "<script>modal2.style.display = 'block';</script>";
                                    }
                                    else
                                    {
                                        echo "Error: ".$sql."<br>".$conn->error;
                                    }
                                }
                                else {
                                    echo "<script>modal.style.display = 'block';</script>";
                                }
                                

                        }
                }    
      ?>
    </div>
            
    <?php include 'include\footer.php'; ?>
    