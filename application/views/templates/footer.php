
<footer class="footer">
	<div class="footer__main footer__main--v2">
		<div class="container">
			<div class="footer__logo">
				<h1 class="screen-reader-text">Gulf Realtor</h1>
				<img src="<?=image_url().$footer_details->footer_logo_img?>" alt="<?=$footer_details->footer_logo_img_alt?>">
			</div><!-- .footer__logo -->
			<p class="footer__desc"><?=$footer_details->description?></p>
			<ul class="footer__social">
				<li><a href="<?=$footer_details->fb_link?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="<?=$footer_details->twitter_link?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="<?=$footer_details->insta_link?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>

	<div class="footer__copyright footer__copyright--v2">
		<div class="container">
			<div class="footer__copyright-inner">
				<p class="footer__copyright-desc">
					<?=$footer_details->copyright_text?>
				</p>
			</div>
		</div>
	</div>
</footer>

<div class="modal" id="logindiv">

<form class="form" action="#" method="post" id="login">
<div class=" modal1-close">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<img data-dismiss="modal" src="<?=base_url('assets/images')?>/logo-footer.png" class="img" style="width: 100%;" id="cancel"/>
<hr/>
<input type="text" name="name" class="form-control" placeholder="Name"/>
<input type="text" name="email" class="form-control" placeholder="Email" />
<input type="text" id="mobile" name="mobile" placeholder="Mobile Number" class="form-control iti-phone" />
<textarea name="message" class="form-control" placeholder="Message"></textarea>
<input type="hidden" name="popup_number_hidden">
<input type="submit" name="popup_submit" value="Submit"/>
<p id="message"></p>
</form>
</div>


<a href="#" class="back-to-top"><span class="ion-ios-arrow-up"></span></a>
<?=script_tag('assets/js/jquery-1.12.4.min.js')?>
<?=script_tag('assets/js/jquery-validate.js')?>
<script type="text/javascript" src="https://gulf-realtor.com/assist/js/intlTelInput.js"></script>
<?=script_tag('assets/js/plugins.js')?>
<?=script_tag('assets/js/infobox.js')?>
<?=script_tag('assets/js/auto_popup.js')?>
<?=script_tag('assets/js/bootstrap.min.js')?>
<?=script_tag('assets/js/query1.js')?>
<?=script_tag('assets/js/custom.js')?>




</body>
</html>