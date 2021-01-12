<?php include '../admin/head.php'; ?>

         <div id="content1_contact">
      <h1 class="l-heading"><span class="text-primary">Registered</span> Users</h1>

      <p></p>
      
      <fieldset>
         
    
          

       <table border="1px">
           <tr>
               <th>Username</th>
               <th>Password</th>
               <th>Security Question</th>
               <th>Answer</th>
               <th>Email</th>
               
           </tr>
           <tr>
               <?php 
              
              
                                
                                 $sql="SELECT * FROM users";
                                $result=$obj->execute($sql);
        
                               
                                    while($row=$result->fetch_assoc())
                                    {
                                       
                                        ?>
                              <td><?php echo $row["username"];?></td>
          
                               <td><?php echo $row["password"];?></td>
                                <td><?php echo $row["sequrityqstn"];?></td>
                                 <td><?php echo $row["answer"];?></td>
                                  <td><?php echo $row["mail"];?></td>
                                
                                  <td><a href="deleteUser.php?user=<?php echo $row["username"]; ?>">Delete</a></td>
                                    </tr>     
                                        
                                        
                                 <?php       
                                    }
                                    
                                  
               
              
                                
               
               ?>
               
               
          
      
       </table>
     
</fieldset>
   
      
      
      
      
      
      
    </div>
            
            <?php include '../admin/footer.php'; ?>
    
