<?php 
$pageTitle = "Contact Us - City Grill";
include('inc/header.php'); ?>

      <!-- title -->  
      <div class="title">
        <h2>Contact us</h2>
      </div>
      <!-- end title -->

      <div class="row-fluid">
        <div class="contact">
          <div class="span6">
            <h2>Contact information</h2> 
            <div class="contact_information">           
              <iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=1545+Gulf+Shores+Parkway++Gulf+Shores,+AL+36542&amp;aq=&amp;sll=37.6,-95.665&amp;sspn=34.512672,77.167969&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=1545+Gulf+Shores+Pkwy,+Gulf+Shores,+Baldwin,+Alabama+36542&amp;ll=30.265925,-87.689867&amp;spn=0.012973,0.018239&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>


              <p>City Grill</p>
              <p>1545 Gulf Shores Parkway</p>
              <p>Gulf Shores, AL 36542</p>
              <p>Telephone:    (251) 500-1432</p>
              <p>E-mail: <a href="mailto:CityGrill@CityGrillGulfShores.com"> CityGrill@CityGrillGulfShores.com</a></p>
              <ul class="social">
                <li><a href="https://www.facebook.com/citygrillgulfshores" target="_blank"><img src="img/social/cityf.png" alt="icon-facebook"></a></li>
              <li><a href="https://twitter.com/CityGrillGS" target="_blank"><img src="img/social/cityt.png" alt="icon-twitter"></a></li>
              <li><a href="https://plus.google.com/102775858789749778590/posts" target="_blank"><img src="img/social/cityg.png" alt="icon-googleplus"></a></li>
            </ul>
            </div>
          </div>
          
          <div class="span6">
            <h2>Contact Form</h2>
            <div class="contact_form">
              <form id="form" action="send_mail.php">
                Name: <input type="text" name="name" required><br>
                Email: <input type="email" name="email" required>
                Message: <textarea class="comment-text"  name="message" rows="10" required></textarea>

                <div class="clearfix"></div>
                
                <div class="buttons">
                  
                  <input class="button submit" name="Submit" type="submit" value="send message">
                   
                </div>

              </form>
             <div id="result"></div>
            </div>
          </div>
        </div>
      </div>
      
    </div>

   <?php include('inc/footer.php'); ?>