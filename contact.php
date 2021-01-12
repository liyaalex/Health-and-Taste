<?php include 'include\head.php'; ?>

         <div id="content1_contact">
      <h1 class="l-heading"><span class="text-primary">Contact</span> Us</h1>

      <p>Please fill out the form below to contact us</p>
      <fieldset>

    
          <form action="" method="post">

       <table>
        <tr>
          
            <td><input class="contact-input" type="text" name="name" id="name"  placeholder="Please Enter Name"  required></td>
        </tr>
        <tr>

           
            <td> <input class="contact-input" type="email" name="email" id="email" placeholder="Your Mail"  required></td>
        </tr>
       
      
      
        <tr>
           
            <td> <input class="contact-input" type="text" name="message" id="message" placeholder="Your Message"  required></textarea></td>
        </tr>

       
       </table>   

      <button id="contact-btn" type="submit" class="btn">Submit</button>

      </form>
</fieldset>
    </div>

 <?php
               if($_SERVER["REQUEST_METHOD"]=="POST"){
                        if(!empty($_POST['name'])&&!empty($_POST['email'])&&!empty($_POST['message']))
                        {
                          
                               
                                $name=$_POST['name'];
                                $email=$_POST['email'];
                                $msg=$_POST['message'];
                                                               
                               
                               
                                
                                    $sql="INSERT INTO contact(name,email,message) VALUES ('$name','$email','$msg')";

                                    if($obj->execute($sql)===TRUE)
                                    {
                                        
                                        echo "<script type='text/javascript'>location.href = 'contact.php';</script>";
                                    }
                                    else
                                    {
                                        echo "Error: ".$sql."<br>".$conn->error;
                                    }
                                }
                            }
                            else
                            {
                                echo "<script>modal.style.display = 'block';</script>";
                            }
                        
                    
      ?>

            
            <?php include 'include\footer.php'; ?>
    
