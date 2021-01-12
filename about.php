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
        <div id="media">
                <section id="aboutus">
                        <h3 style="color: azure" >Our Mission</h3>
                        <p id="firstp">
                                At Renaissance Periodization, we see our mission as that of delivering the most effective, scientifically sound and reliable diet and training consultation to anyone who wants to use it to achieve results. When it comes to your goals and aspirations in the areas of physique alteration, sports performance, and health, we're passionate about helping you target your time and efforts doing what works, and avoiding what doesn’t.
                        </p>
                        <iframe width="600" height="500" src="https://www.youtube.com/embed/Lf6KaXhUI04" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="border: 2px solid black"></iframe>
                </section>
                <section id="aboutus">
                            <h3 style="color: azure">Our Location</h3>
                            <p id="firstp">
                                    Diet Doctor’s headquarters is situated in Sweden, where it all began in 2007.
                                    In urgent need of technical support? Wanting help with your membership? Or perhaps you are a member of the media wanting help to write a story about the ketogenic diet? Maybe you are wondering about something else?
                                </p>
                           <div class="mapouter">
                                    <div class="gmap_canvas">
                                        <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=university%20of%20san%20francisco&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="border: 2px solid black">
                                        </iframe><a href="https://www.embedgooglemap.net"></a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
                </section>
            </div>
                <section id="map">
                    <form id="about-form" action="" method="post">
                                <div class="container">
                                    <h2>Subscribe to our Newsletter</h2>
                                    <p>Get our wellness newsletter
                                            Fitness and nutrition tips, health news, and more.</p>
                                </div>
                                <div class="container" style="background-color:white">
                                    <input class="about-input-text" type="text" placeholder="Name" name="name" id="name" required>
                                    <input class="about-input-text" type="text" placeholder="Email address" name="mail" id="mail" required>
                                    <label>
                                    <input class="about-input-chechkbox" type="checkbox" checked="checked" name="subscribe"> Daily Newsletter
                                    </label>
                                </div>
                                <div class="container">
                                    <button class="about-input-submit" type="submit" class="btn" id="submit">Subscribe</button>
                                </div>
                        <div id="myModal" class="modal">
          <div class="modal-content">
            <span class="close">&times;</span>
            <p>Newsletter subscribed!</p>
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
                                <div id="rateus">
                                        <h2>Rate Us</h2>
                                         <div class="rate">
                                                 <input type="radio" id="star5" name="rate" value="5" />
                                                 <label for="star5" title="text">5 stars</label>
                                                 <input type="radio" id="star4" name="rate" value="4" />
                                                 <label for="star4" title="text">4 stars</label>
                                                 <input type="radio" id="star3" name="rate" value="3" />
                                                 <label for="star3" title="text">3 stars</label>
                                                 <input type="radio" id="star2" name="rate" value="2" />
                                                 <label for="star2" title="text">2 stars</label>
                                                 <input type="radio" id="star1" name="rate" value="1" />
                                                 <label for="star1" title="text">1 star</label>
                                               </div>
                                    </div>
                                </section>
        <?php
                        if($_SERVER["REQUEST_METHOD"]=="POST"){
                        if(!empty($_POST['name'])&&!empty($_POST['mail']))
                        {
                                $name=$_POST['name'];
                                $email=$_POST['mail'];
                                   $sql="INSERT INTO subscribe(name,email) VALUES ('$name','$email')";
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