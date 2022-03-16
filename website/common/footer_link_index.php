<a href="#" class="back-to-top"><span class="ion-ios-arrow-up"></span></a>
<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/plugins.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDyCxHyc8z9gMA5IlipXpt0c33Ajzqix4"></script>
<script src="js/infobox.js"></script>
<script src="js/custom.js"></script>
<script src="js/auto_popup.js"></script>
<script src="js/intlTelInput.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/query1.js"></script>

<div class="modal" id="logindiv">
    <p id="message" style="display:none;">Thank you for your interest, we will contact you shortly!</p>
   
    <form class="form" action="#" id="login">
    	<div class=" modal1-close">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <img data-dismiss="modal" src="images/logo-footer.png" class="img" style="width: 100%;" id="cancel"/>

	<!--<h3 class="fill">Learn More by Providing Your Info Below</h3>-->
	<hr/>
	<input type="text" id="name2" name="name2" class="form-control" placeholder="Name"  required />
	<input type="email" id="email2" name="email2" class="form-control" placeholder="Email"  required />
	<input type="text" id="mobile2" name="mobile2" placeholder="Mobile Number" class="form-control iti-phone"  required />
	<textarea id="mess2" name="mess2" class="form-control" placeholder="Message"></textarea>
	<input id="send" type="button" value="Submit"/>
	<input type="hidden" name="site_name" value="<?php echo $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}"; ?>" />
	<!--<input onclick="Data()" data-dismiss="modal" id="cancel" type="button" value="Ask me later"/>--->
	<br/>
    </form>
</div>