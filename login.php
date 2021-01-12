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
      <h1 class="l-heading"><span class="text-primary">Login</span></h1>

      <p>Please fill out the form below to register</p>
      <fieldset>

    
          <form action="" method="post">

       <table>
        <tr>
            <td><input class="contact-input" type="text" name="username" id="name"  placeholder="Enter Username"  required></td>
        </tr>
        
        <tr>
            <td><input class="contact-input" type="password" name="password" id="name"  placeholder="Enter Passsword"  required></td>
        </tr>
        
       </table>   

              <button id="contact-btn" type="submit" class="btn" name="SubmitButton">Login</button><br><br>
              <span>Need an account?</span> <a href="register.php">Sign Up</a><br>
              <span>Forget password?</span> <a href="forget.php">Click Here!</a>
      </form>
          
          <div id="myModal" class="modal">

          <div class="modal-content">
            <span class="close">&times;</span>
            <p>Username doesn't exist!</p>
          </div>

        </div>
               <div id="myModal2" class="modal">

          <div class="modal-content">
            <span class="close" id="cl2">&times;</span>
            <p>Password doen't match!</p>
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
  modal2.style.display = "none";
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
</fieldset>
      <?php
                if(isset($_POST['SubmitButton'])){ 
                        if(!empty($_POST['username'])&&!empty($_POST['password']))
                        {
                            
                               
                                if($conn->connect_error)
                                {
                                    die("Connection failed: ".$conn->connect_error);
                                }
                                $username=$_POST['username'];
                                $password=$_POST['password'];
                                if(($username=="admin") && $password=="admin")
                                {
                                    $_SESSION["username"]=$username;
                                   echo "<script type='text/javascript'>location.href = 'admin/adminhome.php';</script>";  
                                }
 else {
                                $sql="SELECT * FROM users";
                               // $result=$conn->query($sql);
                                    $result=$obj->execute($sql);
                                if($result->num_rows>0)
                                {
                                    $count=0;
                                    while($row=$result->fetch_assoc())
                                    {
                                        if($row["username"]==$username)
                                        {
                                           $count++;
                                            if($row["password"]==$password)
                                            {
                                                $_SESSION["username"]=$username;
                                                echo "<script type='text/javascript'>location.href = 'user/userhome.php';</script>";
                                            }
                                            else
                                            {
                                                echo "<script>modal2.style.display = 'block';</script>";
                                            }
                                        
                                           
                                          
                                    }
                                }
                                }
                                if($count==0)
                                {
                                    echo "<script>modal.style.display = 'block';</script>";
                                }
                                
                        }
                        }
                }    
      ?>
    </div>
            
            <?php include 'include\footer.php'; ?>
    
