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

        <section id="dietChart">
            <h2>DAILY DIET</h2>
            <form action="#file" method="post" enctype="multipart/form-data">
            <table class="tg" border="2px" width="700px" height="600px" align="center">
                    <tr>
                      <th class="tg-0pky">DAY</th>
                      <th class="tg-0pky">WHAT TO EAT </th>
                    </tr>
                    <tr>
                      <td class="tg-0pky">SUNDAY</td>
                      <td class="tg-0pky">Eat only vegetables in raw or cooked form.
                            The diet does not specify a maximum amount of vegetables.
                            Limit potatoes to breakfast only.</td>
                      
                    </tr>
                    <tr>
                      <td class="tg-0pky">MONDAY</td>
                      <td class="tg-0pky">Eat only fruit — any kind except bananas.
                            No maximum amount of fruit is specified.
                            The diet especially encourages followers to eat melons to increase weight loss.</td>
                      
                    </tr>
                    <tr>
                      <td class="tg-0pky">TUESDAY</td>
                      <td class="tg-0pky">Eat only fruits and vegetables of any kind except bananas and potatoes.
                            The diet doesn't specify a maximum amount.</td>
                      
                    </tr>
                    <tr>
                      <td class="tg-0pky">WEDNESDAY</td>
                      <td class="tg-0pky">Consume only bananas and milk.
                            You can eat up to 6 large or 8 small bananas.
                            Drink 3 glasses of milk, preferably skim.</td>
                      
                    </tr>
                    <tr>
                        <td class="tg-0pky">THURSDAY</td>
                      <td class="tg-0pky">Eat two 10-ounce (284-gram) portions of beef, chicken or fish.
                            In addition to the meat, you may only eat 6 whole tomatoes.
                            Vegetarians may replace meat with either brown rice or cottage cheese.
                            Increase your water intake by two glasses to flush out extra uric acid. This is a chemical product of the breakdown of purines, which are found in meat.</td>
                      
                    </tr>
                    <tr>
                        <td class="tg-0pky">FRIDAY</td>
                      <td class="tg-0pky">Eat only two 10-ounce (284-gram) portions of beef, chicken or fish.
                            Today's meals may include an unlimited amount of vegetables, but no potatoes.
                            Vegetarians may replace meat with either brown rice or cottage cheese.
                            Increase your water intake by two glasses to flush out extra uric acid.</td>
                      
                    </tr>
                    <tr>
                        <td class="tg-0pky">SATURDAY</td>
                        <td class="tg-0pky">Eat only brown rice, fruits, fruit juice and vegetables.
                                    No maximum amount is specified for any of these foods.</td>
                    </tr> 
                    <tr>
                        <td class="tg-0pky">Share your recipies here</td>
                        <td class="tg-0pky"> <input type="text" name="description_entered"/><br><br>
                            <input type="file" name="file"/><br><br>
	
                            <input type="submit" name="submit" id="submit" value="Upload"/></td>
                    </tr> 
                  </table>
                <div id="myModal" class="modal">
          <div class="modal-content">
            <span class="close">&times;</span>
            <p>Thank you for sharing your recipie !!</p>
          </div>
        </div>
<script>
// Get the modal
var modal = document.getElementById("myModal");
// Get the button that opens the modal
var btn = document.getElementById("submit");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
// When the user clicks the button, open the modal
btn.onclick = function() {
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
        </form>    
        </section>
<?php 

$name= $_FILES['file']['name'];

$tmp_name= $_FILES['file']['tmp_name'];

$submitbutton= $_POST['submit'];

$position= strpos($name, "."); 

$fileextension= substr($name, $position + 1);

$fileextension= strtolower($fileextension);

$description= $_POST['description_entered'];

if (isset($name)) {

$path= 'Uploads/files/';

if (!empty($name)){
if (move_uploaded_file($tmp_name, $path.$name)) {
echo 'Uploaded!';

}
}
}
?>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(!empty($description))
                        {
                                
                                   $sql="INSERT INTO files (description, filename)VALUES ('$description', '$name')";
                                    if($obj->execute($sql)===TRUE)
                                    {
                                        echo "<script>modal.style.display = 'block';</script>";
                                    }
                                    else
                                    {
                                        echo "Error: ".$sql."<br>".$conn->error;
                                    }
                        }
}
?>
<?php include 'include\footer.php'; ?>
