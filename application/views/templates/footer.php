
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
<input type="text" id="mobile_popup" name="mobile" placeholder="Mobile Number" class="form-control iti-phone" />
<textarea name="message" class="form-control" placeholder="Message"></textarea>
<input type="hidden" name="popup_number_hidden">
<input type="submit" name="popup_submit" value="Submit"/>
<p id="message"></p>
</form>
</div>

<div class="modal fade" id="over">
    <p id="messageDownload" style="display:none;">Thank you for download, we will contact you shortly!</p>
    <div class="modal-dialog">
	<div class="modal-content">
            <!--  Form start  -->
	    <div class="panel panel-default contact bg-edit bg-blue" style="margin-bottom:0;max-width:500px;">
		<!--<div class="panel-heading">Pdf download</div>-->
		<div class="panel-body" style="background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(<?=base_url()?>assets/images/lime-green-background.jpg);">

		    <form id="download-brochure-frm" novalidate="novalidate">			
			<div class="row" style="max-width:500px;">
			    <p class="text-uppercase my-font-style" align="center" style="margin-top: 10px !important; margin-bottom: 10px !important; color: #ffffff !important;">Fill Your Contact Details</p>
			    <div class="col-md-12">
				<input  type="text" class="form-control" placeholder="Name" name="name"   style="background: transparent; color: #ffffff;" autocomplete="off">
			    </div>
			    <div class="col-md-12">
				<input type="text" class="form-control" name="email" placeholder="Email"  style="background: transparent; color: #ffffff;" autocomplete="off">
			    </div>
			    <div class="col-md-12" style="margin-bottom: 15px;">
				<input placeholder="Phone" name="mobile" id="mobile" type="text" class="form-control input-inverse iti-phone"  style="background: transparent; color: #ffffff;" autocomplete="off">
				</div>
			    <div class="col-md-12 text-center">
				<input type="hidden" name="download_brochure_number_hidden">
				<input type="hidden" name="prop_id" value="<?=$property_detail->prop_id?>">
				<input type="hidden" name="brochure_url" value="<?=$property_detail->prop_brochure?>">
			      <input type="submit"  name="download_brochure_submit"  class="btn btn-white" value="Download Brochure">
			    </div>
			    <div class="sale_brochure_msg"></div>
			</div>
		    </form>
		</div>
	    </div>
            <!--  Form end  -->
	</div>
    </div>
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