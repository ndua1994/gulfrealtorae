function insert() {
    var name1 = $("#name1").val();
    var namev = /^[a-zA-Z ]*$/;
    var email1 = $("#email1").val();
    var emailv = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    var mobile1 = $("#mobile1").val();
    var mobilev = (/^[0-9]+$/);

    if (name1 === null || name1 === "" || namev.test(name1) === false) {
	alert("Please enter your name.");
	return false;
    } else if (email1 === null || email1 === "" || emailv.test(email1) === false) {
	alert("Please enter email.");
	return false;
    } else if (mobile1 === null || mobile1 === "" || mobilev.test(mobile1) === false) {
	alert("Please enter your mobile.");
	return false;
    } else {
	var formdata = $("#loginForm").serialize() + '&c_code1=' + document.getElementsByClassName('selected-flag')[0].title;
	$.ajax({
	    type: "POST",
	    url: "download_send.php",
	    data: formdata,
	    //dataType: "JSON",
	    success: function(data) {
//		gtag('event', 'conversion', {'send_to': 'AW-957847940/Caj7COO556kBEISz3sgD'});
		$("#messageDownload").css('display', 'block');
		$('#loginForm').html($("#messageDownload"));
		$("#messageDownload.p").addClass("alert-default");
//		setTimeout(function() {
//		    $('#over').modal('hide');
//		}, 3000);
//		$("form").trigger("reset");
	    },
	});
    }
    document.getElementById('link').click()
    setTimeout(function() {
	$('#over').modal('hide');
    }, 10000);
}


//function gtag_report_conversion(url) {
// var callback = function () {
//   if (typeof(url) != 'undefined') {
//     window.location = url;
//   }
// };
// gtag('event', 'conversion', {
//     'send_to': 'AW-957847940/Caj7COO556kBEISz3sgD',
//     'event_callback': callback
// });
// return false;
//}