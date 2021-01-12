<?php
 
include '../user/head.php'; ?>

         <div id="content1_contact">
      <h1 class="l-heading"><span class="text-primary">My</span>Profile</h1>

      <p></p>
      
      <fieldset>
         
          <form action="editProfile.php" method="post">
          

       <table border="1px">
           
                       
             
           
               <?php 
              
              
                                
                                 $sql="SELECT * FROM users where username='$user'";
                                $result=$obj->execute($sql);
        
                               
                                    if($row=$result->fetch_assoc())
                                    {
                                       
                                        ?>
               <tr>
               <td>Username</td>
               <td><?php echo $row["username"];?></td>
               </tr>
               <tr>
                  <td>Password</td> 
                  <td><input type="text" value="<?php echo $row["password"];?>" name="psd"></td>
               </tr>
               <tr>
                   <td>Security Question</td> 
                    <td><?php echo $row["sequrityqstn"];?></td>
               </tr>
               <tr>
                    <td>Answer</td> 
                    <td><?php echo $row["answer"];?></td>
               </tr>
               <tr>
                   <td>Email</td> 
                   <td><input type="email" name="email" value="<?php echo $row["mail"];?>" required></td>
               </tr>
            <?php       
                 }
            ?>
               
               <tr>
                   <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       &nbsp;&nbsp;&nbsp;
                   <input type="submit" value="Edit Profile">
                    &nbsp;</td>
               </tr> 
          
      
       </table>
     
</fieldset>
         </form>
      
      
      
      
      
      
    </div>
            
            <?php include '../admin/footer.php'; ?>
    
