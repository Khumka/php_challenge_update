<?php ?>

    <footer id="contacts">
      <div class="container">
        <div class="sec aboutus">
          <h2>About Us</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat.</p>
          <ul class="sci">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
          </ul>
        </div>

        <div class="sec quickLinks">

          <h2>Quick Links</h2>

          <ul>
          
            <li>          
              <a href="#">Link 1</a>
            </li>

            <li>            
              <a href="#">Link 2</a>
            </li>

            <li>            
              <a href="#">Link 3</a>
            </li>

            <li>            
              <a href="#">Link 4</a>
            </li>

            </ul>
        </div>

        <div class="'sec contact">
          <h2>Contact Info</h2>
          <ul class="info">
            <li>
              <span><i class="fas fa-map-signs"></i></span>
              <span>596 Jubilee Avenue Halfway House,<br> 1685 Midrand, Gauteng</span>
            </li>
            <li>
              <span><i class="fa fa-phone"></i></span>
              <p style="margin-top: 5px"><a href="tel:0724541629">072 4541 629</a></p>
            </li>
            <li>
              <span><i class="fa fa-envelope"></i> </span>
              <p style="margin-top: 5px"><a href="mailto:david.khumka@gmail.com">david.khumka@gmail.com</a></p>
            </li>
          </ul>
        </div>
      </div>
    </footer>
    
<!-- JavaScript Bundle with Popper -->
<script src="javascript/JQuery.js"></script> 

<!--Jquery lightslider-->
<script src="javascript/lightslider.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>


<script type="text/javascript">
$(document).ready(function() {
    $('#adaptive').lightSlider({
        adaptiveHeight:true,
        item:1,
        slideMargin:0,
        loop:true
    });
});
</script>
</body>
</html>