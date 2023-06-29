  <footer>

    <div class="joinus">
        <div class="grid articleList">
          <section>

              <div class="col-1-2 member">

              <h3>Become a Member</h3>

                <p>The only international feminist membership organization in the world! AWID currently has <strong>4,023 members in 133 countries</strong></p>
     
                <div class="exhibit"><a href="memorial.php" style="color: #ccc; text-decoration: none;">
                  <img src="img/exhibit.jpg" style="max-width: 17%; float: left; padding-right: 12px;"><p>Visit the online exhibit we created with our members´ support in honour of the WHRDs <strong>around the world</strong>.</p>
                </a></div>

                <button><strong>SIGN UP</strong> / RENEW MEMBERSHIP <span class="icon icon-arrow-right4"></span> </button>
              </div>


              <div class="col-1-2 conversation">

              <h3>Join the Conversation</h3>

               <span class="footicon icon-twitter"></span><span class="footicon icon-facebook"></span><span class="footicon icon-linkedin"></span><span class="footicon icon-googleplus"></span><span class="footicon icon-youtube"></span>
                  <br/><br/>
                <p>Join <strong>46,000 subscribers</strong> and receive weekly announcements relating to women’s rights (in English)</p>
             
                <button><strong>SUBSCRIBE</strong> TO E-NEWSLETTER <span class="icon icon-arrow-right4"></span> </button>
              </div>

            </section>

        </div>
      </div>


      

      <div class="linkslist">
        <div class="grid articleList">
           
              <div class="col-1-5" style="margin-left: 0 !important;">
              <h4>About Us</h4>
                <ul>
                  <li><a href="#">Who we are</a></li>
                  <li><a href="#">Our staff</a></li>
                  <li><a href="#">Our board of directors</a></li>
                  <li><a href="#">Our donors</a></li>
                  <li><a href="#">AWID Annual Reports</a></li>
                  <li><a href="#">FAQs</a></li>
                  <li><a href="#">Contact us</a></li>
                </ul>          
              </div>


              <div class="col-1-5">
              <h4>Awid Membership</h4>
                <ul>
                  <li><a href="#">Membership Overview</a></li>
                  <li><a href="#">Join AWID</a></li>
                  <li><a href="#">Our Current Members</a></li>
                  <li><a href="#">Membership Activities</a></li>
                  <li><a href="#">Renew Your Membership</a></li>
                  <li><a href="#">Account Login</a></li>
                </ul>          
              </div>


              <div class="col-1-5">
              <h4>News &amp; Analysis</h4>
                <ul>
                  <li><a href="#">Women's Rights in the News</a></li>
                  <li><a href="#">Issues and Analysis</a></li>
                  <li><a href="#">AWID's Friday Files</a></li>
                  <li><a href="#">Announcements</a></li>
                  <li><a href="#">New Resources</a></li>
                  <li><a href="#">Special Focus Area</a></li> 
                </ul>          
              </div>


              <div class="col-1-5">
              <h4>Get Involved</h4>
                <ul>
                  <li><a href="#">Urgent Actions</a></li>
                  <li><a href="#">Calls for Participation</a></li>
                  <li><a href="#">Jobs</a></li>
                  <li><a href="#">Courses</a></li>
                  <li><a href="#">Subscribe to Newsletters</a></li>
                  <li><a href="#">Monitoriing &amp; Evaluation WIKI</a></li>
                </ul>          
              </div>

               <div class="col-1-5">
              <h4>Areas of Focus</h4>
                <ul>
                  <li><a href="#"><?php echo $issue1; ?></a></li>
                  <li><a href="#"><?php echo $issue2; ?></a></li>
                  <li><a href="#"><?php echo $issue3; ?></a></li>
                  <li><a href="#"><?php echo $issue4; ?></a></li>
                  <li><a href="#"><?php echo $issue5; ?></a></li>
                </ul>          
              </div>

        </div>
      </div>



       <div class="copyright">
        <div class="copyrightContainer">
          (c) copyright AWID 2014. All rights reserved.&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Terms &amp; Conditions</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#">Privacy</a>
        </div>
      </div>



  </footer>


 <!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

  <!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        pauseOnHover: true,
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>






