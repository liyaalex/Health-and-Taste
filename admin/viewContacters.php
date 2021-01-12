<?php include '../admin/head.php'; ?>

         <div id="content1_contact">
      <h1 class="l-heading"><span class="text-primary">Contacters</span></h1>

      <p></p>
      
      <fieldset>
         
    
          

       <table border="1px">
           <tr>
               <th>ID</th>
               <th>Name</th>
               <th>Email</th>
               <th>Message</th>
              
               
           </tr>
           <tr>
               <?php 
              
              
                                
                                 $sql="SELECT * FROM contact";
                             
                                    $result=$obj->execute($sql);
                               
                                    while($row=$result->fetch_assoc())
                                    {
                                       
                                        ?>
                                    <td><?php echo $row["id"];?></td>
                                    <td><?php echo $row["name"];?></td>
          
                               
                                    <td><?php echo $row["email"];?></td>
                                 <td><?php echo $row["message"];?></td>
                                  
                                
                                
                                    </tr>     
                                        
                                        
                                 <?php       
                                    }
                                    
                                  
               
              
                                
               
               ?>
               
               
          
      
       </table>
     
</fieldset>
   
      
      
      
      
      
      
    </div>
            
            <?php include '../admin/footer.php'; ?>
    
