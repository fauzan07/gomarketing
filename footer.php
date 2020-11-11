  <!-- footer start -->
  <footer>
        
    <section class="footer-area">
    <div class="footer_overlay py-5">
      <div class="container">
        <div class="">
          <div class="d-flex justify-content-between">
          <div class="foot-img">
            <img src="images/foot-logo.png" class="img-fluid" alt="Responsive image">
          </div>
              <div class="icon-info text-center">
              <i class="fab fa-facebook-f pr-3"></i>
              <i class="fab fa-twitter pr-3"></i>
              <i class="fab fa-linkedin pr-3"></i>
              <i class="fab fa-youtube"></i>
              </div>
          </div>
        </div>

        <div class="row py-4">
                <div class="col-6 col-md-3 my-1">
                        <div class="footer-widget footer-info">
                            <h4 class="widget-title">GOMARKETING</h4>
                            <div class="line mb-3"></div>
                            <ul class="list-unstyled">
                              <li>275 E Hillcrest Dr., Suite 170
                                Thousand Oaks, CA 91360
                                FIND US ON GOOGLE MAPS</li>
                              <li> 
                                <h4 class="widget-title">CALL US AT</h4>
                                Telephone : +1 (805)-413-7893
                              </li>
                              <li> 
                                <h4 class="widget-title">CUSTOMER SERVICE</h4>
                                Mon – Fri 8.00am – 4.30pm
                              </li>
                              <li> 
                                <h4 class="widget-title">HAVE ANY QUESTIONS?</h4>
                                info@gomarketing.com
                              </li>
                            </ul>
                        </div>
                    </div>
                <div class="col-6 col-md-3 my-1">
                        <div class="footer-widget footer-info">
                            <h4 class="widget-title">SERVICES</h4>
                            <div class="line mb-3"></div>
                            <ul class="list-unstyled">
                              <li><a href="#">ADA Compliance for Websites</a></li>
                              <li><a href="#">Search Engine Optimization</a></li>
                              <li><a href="#">Local Search Engine Marketing</a></li>
                              <li><a href="#">Social Media Networking</a></li>
                              <li><a href="#">ADA Compliance for Websites</a></li>
                              <li><a href="#">Search Engine Optimization</a></li>
                              <li><a href="#">Local Search Engine Marketing</a></li>
                              <li><a href="#">Social Media Networking</a></li>
                              <li><a href="#">ADA Compliance for Websites</a></li>
                              <li><a href="#">Search Engine Optimization</a></li>
                              <li><a href="#">Local Search Engine Marketing</a></li>
                              <li><a href="#">Social Media Networking</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 my-1">
                        <div class="footer-widget footer-info">
                        <h4 class="widget-title">INDUSTRIES SERVED</h4>
                        <div class="line mb-3"></div>
                            <ul class="list-unstyled">
                            <li><a href="#">Home Services Marketing</a></li>
                              <li><a href="#">HVAC Digital Marketing</a></li>
                              <li><a href="#">Healthcare Marketingg</a></li>
                              <li><a href="#">Manufacturers Marketing</a></li>
                              <li><a href="#">ADA Compliance for Websites</a></li>
                              <li><a href="#">Search Engine Optimization</a></li>
                              <li><a href="#">Local Search Engine Marketing</a></li>
                              <li><a href="#">Social Media Networking</a></li>
                              <li><a href="#">ADA Compliance for Websites</a></li>
                              <li><a href="#">Search Engine Optimization</a></li>
                              <li><a href="#">Local Search Engine Marketing</a></li>
                              <li><a href="#">Social Media Networking</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 my-1">
                        <div class="footer-widget footer-contact">
                            <h4 class="widget-title">ABOUT GOMARKETING</h4>
                            <div class="line mb-3"></div>
                            <ul class="list-unstyled">
                            <li><a href="#">Home</a></li>
                              <li><a href="#">Our Methodology</a></li>
                              <li><a href="#">Clients</a></li>
                              <li><a href="#">Case Studies</a></li>
                              <li><a href="#">About Us</a></li>
                              <li><a href="#">Contact Us</a></li>
                              <li><a href="#">Blog</a></li>
                            </ul>
                            </ul>
                        </div>
                    </div>
                
                </div>
      </div>
    </div>
    </section>
    </footer>
    <!-- footer end -->

 <button onclick="topFunction()" id="myBtn" title="Go to top" class="topbtn shadow px-3 py-2 rounded"><i class="fa fa-angle-up"></i></button>

 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="js/bootstrap.bundle.min.js"></script>
 <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

 <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>



 <script>


 //Get the button
 var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


    /* Set the width of the side navigation to 300px and the left margin of the page content to 250px */
  function openNav() {
    document.getElementById("mySidenav").style.width = "360px";
  }

  /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }      

</script>

<script src="https://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
<script src="https://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>


<script type="text/javascript">
$(document).ready(function() {

  $("#validateform").validate({
            rules:{
                name:{
                  required:true,
                  minlength: 2
                },
                 email: { 
                    required:true,
                    email: true 
                 },
                 mobile: { 
                    required:true,
                    digits: true,
	                minlength: 10,
	                maxlength: 10 
                 },
				 message:{
                  required:true,
                },
                
                   
            },

            messages:{
                name: {
                required: "This field is required",
                minlength: "Please enter atleast two character"
                },
                email: { 
                required: "This field is required",
                email: "Please enter a valid email id",
                },
                mobile: { 
                required: "This field is required",
                digits: "Please enter a valid mobile number",
                minlength: "Please enter 10 digits only",
                maxlength: "Please enter 10 digits only" 
                },
				message:{
                  required:"This field is required",
                },
                 

            }
        });
  });
</script>
 </body>

 </html>