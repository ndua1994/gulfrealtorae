

function insertEnquiry() {

    var name3 = $("#name3").val();
    var namev = /^[a-zA-Z ]*$/;
    var email3 = $("#email3").val();
    var emailv = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    var mobile3 = $("#mobile3").val();
    var mobilev = (/^[0-9]+$/);
    var mess3 = $("#mess3").val();
    if (name3 === null || name3 === "" || namev.test(name3) === false) {
	alert("Please enter your name.");
	return false;
    } else if (email3 === null || email3 === "" || emailv.test(email3) === false) {
	alert("Please enter email.");
	return false;
    } else if (mobile3 === null || mobile3 === "" || mobilev.test(mobile3) === false) {
	alert("Please enter your mobile.");
	return false;
    } else {
	var formdata = $("#loginFormFooter").serialize() + '&c_code3=' + document.getElementsByClassName('selected-flag')[0].title;
	$.ajax({
	    type: "POST",
	    url: "enquiry_send.php",
	    data: formdata,
	    //dataType: "JSON",
	    success: function(data) {
		$('#messageFooter').fadeIn('fast').delay(3000).fadeOut('fast');
//		gtag('event', 'conversion', {'send_to': 'AW-957847940/a7TJCMTL8aYBEISz3sgD'});
		$("form").trigger("reset");
	    },
	    error: function(err) {
		alert(err);
	    }
	});
    }
}