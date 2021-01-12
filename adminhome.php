<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include 'include/head.php'; ?>

         <div id="content1_contact">
      <h1 class="l-heading"><span class="text-primary">Contact</span> Us</h1>

      <p>Please fill out the form below to contact us</p>
      <fieldset>

    
      <form action="process.php">

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
            
            <?php include 'include/footer.php'; ?>
    
