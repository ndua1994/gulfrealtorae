

$('.del_rec').on('click',function(e){

var $t=$(this);
var redirect_url=$t.attr('data-url');


Swal.fire({
  icon: 'question',
  title: 'Are you sure you want to delete ?',
  showDenyButton: true,
  confirmButtonText: 'Yes',
  denyButtonText: `No`,
}).then((result) => {
  if (result.isConfirmed) {
    window.location=redirect_url;
  } else if (result.isDenied) {
    return false;
  }
});

});


$(document).on('click','.inner_img_del',function(e){	

var $t=$(this);
var prop_id=$t.attr('data-id');
var prop_img=$t.attr('data-img');

Swal.fire({
  icon: 'question',
  title: 'Are you sure you want to delete ?',
  showDenyButton: true,
  confirmButtonText: 'Yes',
  denyButtonText: `No`,
}).then((result) => {
  if (result.isConfirmed) {
  
  $.ajax({

  url:base_url+'property/property_inner_image_del',
  data:{prop_id:prop_id,prop_img:prop_img},
  type:'POST',
  dataType:'json',
  beforeSend:function()
  {

  },
  success:function(r)
  {

  	if(r.status=='success')
  	{
  		 update_prop_images(prop_id);
  	}
  	else
  	{
  		alert(r.msg);
  	}

  }


  });


  } else if (result.isDenied) {
    return false;
  }
});



});


function update_prop_images(prop_id)
{
	$.ajax({

    url:base_url+'property/updated_property',
    data:{prop_id:prop_id},
    type:'POST',
    dataType:'json',
    beforeSend:function()
    {

    },
    success:function(r)
    {
    	$('.prop_inner_list').html(r.rec);
        $('input[name="prop_inner_img_hidden"]').val(r.img_name);

    }


	});
}


$('#login-frm').validate({

rules:
{
	email:
	{
		required:true,
		email:true
	},
	password:
	{
		required:true
	}
},
messages:
{
	email:
	{
		required:'Email ID is required',
		email:'Enter a valid Email ID'
	},
	password:
	{
		required:'Password is required'
	}	
},
submitHandler:function(form)
{
	$.ajax({

		url:base_url+"login/login_validate",
		data:$('#login-frm').serializeArray(),
		type:'POST',
		dataType:'json',
		beforeSend:function()
		{
			$('button[name="login_submit"]').prop('disabled',true);
			$('button[name="login_submit"]').html('WAIT...');
		},
		success:function(r)
		{
			
			if(r.status=='success')
			{
				window.location=r.redirect_url;

			}
			else if(r.status=='acc_suspended')
			{
			$('#login-frm input').val('');
			$('.login_alert').css('display','flex');
			$('.login_alert .alert-text').html(r.message);
			$('button[name="login_submit"]').prop('disabled',false);
			$('button[name="login_submit"]').html('Sign In');
			}
			else
			{
				$('#login-frm input').val('');
			$('.login_alert').css('display','flex');
			$('.login_alert .alert-text').html(r.message);
			$('button[name="login_submit"]').prop('disabled',false);
			$('button[name="login_submit"]').html('Sign In');
			}


		}

	});
}

});


var kt_image_blog_img = new KTImageInput('kt_image_blog_img');
var kt_image_blog_author_img = new KTImageInput('kt_image_blog_author_img');




/*text editor js starts*/


// Class definition

var KTTinymce = function () {
    // Private functions
    var demos = function () {
        tinymce.init({
            selector: '#kt-tinymce-4',
            menubar: false,
            toolbar: ['styleselect fontselect fontsizeselect',
                'undo redo | cut copy paste | bold italic | link image | alignleft aligncenter alignright alignjustify',
                'bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | print preview |  code'],
            plugins : 'advlist autolink link image lists charmap print preview code'
        });
    }

    return {
        // public functions
        init: function() {
            demos();
        }
    };
}();

// Initialization
jQuery(document).ready(function() {
    KTTinymce.init();
});


/*text editor js ends*/



/*text editor js starts*/


// Class definition

var KTTinymce_class = function () {
    // Private functions
    var demos = function () {
        tinymce.init({
            selector: '.kt-tinymce',
            menubar: false,
            toolbar: ['styleselect fontselect fontsizeselect',
                'undo redo | cut copy paste | bold italic | link image | alignleft aligncenter alignright alignjustify',
                'bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | print preview |  code'],
            plugins : 'advlist autolink link image lists charmap print preview code'
        });
    }

    return {
        // public functions
        init: function() {
            demos();
        }
    };
}();

// Initialization
jQuery(document).ready(function() {
    KTTinymce_class.init();
});


/*text editor js ends*/


/*copy image url starts*/


$('.copy-btn').on("click", function(){
value = $(this).data('clipboard-text'); //Upto this I am getting value

var $temp = $("<input>");
$("body").append($temp);
$temp.val(value).select();
document.execCommand("copy");
$temp.remove();

Swal.fire({
  icon: 'success',
  title: 'Link Coppied successfully !'
})

})

/*copy image url ends*/


/*add more key highlights starts*/
var i=0;
var j=0;
var maximum=0;
$(document).delegate('.add_key_high','click',function(e){
e.preventDefault();
var key_high_tot=$('.key_high_tot').length;
$('.key_high_tot').each(function() {
  var value = parseFloat($(this).attr('max-id'));
  if (isNaN(value)) value = 0;

if(value==0)
{
maximum=1;
}
else
{
maximum = (value > maximum) ? value : maximum;
}

  
});
var max=(maximum==0 ? 1 : maximum);
$('.key_high_'+(max)+'').after('<div class="row key_high_'+(++max)+' mt-2 key_high_tot" max-id='+max+'><div class="col-10"><input type="text" class="form-control" name="key_highlights[]" placeholder="Key Highlights"></div><div class="col-2"><a href="javascript:void(0)" class="btn btn-danger del_key_high" del-id='+(max)+'><i class="fa fa-minus"></i></a></div></div>')
});

$(document).delegate('.del_key_high','click',function(e){
var id=$(this).attr('del-id')
var num_count=$('input[name="key_highlights[]"]').length;
if(num_count==2)
{
    i=0;
    j=0;
}
$(this).closest('.key_high_'+id+'').remove();
});
/*add more key highlights ends*/



/*add floor plan starts*/
var i=0;
var j=0;
var maximum=0;
$(document).delegate('.add_floor_plan','click',function(e){
e.preventDefault();
var floor_plan_tot=$('.floor_plan_tot').length;
$('.floor_plan_tot').each(function() {
  var value = parseFloat($(this).attr('max-id'));
  if (isNaN(value)) value = 0;

if(value==0)
{
maximum=1;
}
else
{
maximum = (value > maximum) ? value : maximum;
}

  
});
var max=(maximum==0 ? 1 : maximum);
$('.floor_plan_'+(max)+'').after('<div class="row floor_plan_'+(++max)+' mt-2 floor_plan_tot" max-id='+max+'><div class="col-2"><input type="text" class="form-control" name="floor_plan_name[]" placeholder="Name"></div><div class="col-2"><input type="file" class="form-control" name="floor_plan_img_'+(--max)+'[]" multiple></div><div class="col-1"><input type="text" class="form-control" name="floor_plan_size[]" placeholder="Size"></div><div class="col-2"><input type="text" class="form-control" name="floor_plan_room[]" placeholder="Rooms"></div><div class="col-2"><input type="text" class="form-control" name="floor_plan_bath[]" placeholder="Baths"></div><div class="col-2"><input type="text" class="form-control" name="floor_plan_price[]" placeholder="Prices"></div><div class="col-1"><a href="javascript:void(0)" class="btn btn-danger del_floor_plan" del-id='+(++max)+'><i class="fa fa-minus"></i></a></div></div>')
});

$(document).delegate('.del_floor_plan','click',function(e){
var id=$(this).attr('del-id')
var num_count=$('input[name="floor_plan[]"]').length;
if(num_count==2)
{
    i=0;
    j=0;
}
$(this).closest('.floor_plan_'+id+'').remove();
});
/*add floor plan ends*/



/*floor plan image delete starts*/

$(document).on('click','.fp_img_del',function(e){

var $t=$(this);
var prop_floorplan_id=$t.attr('data-id');
var prop_floorplan_img=$t.attr('data-img');

Swal.fire({
  icon: 'question',
  title: 'Are you sure you want to delete ?',
  showDenyButton: true,
  confirmButtonText: 'Yes',
  denyButtonText: `No`,
}).then((result) => {
  if (result.isConfirmed) {
  
  $.ajax({

    url:base_url+'property/floorplan_img_del',
    data:{prop_floorplan_id:prop_floorplan_id,prop_floorplan_img:prop_floorplan_img},
    type:'POST',
    dataType:'json',
    beforeSend:function(e)
    {

    },
    success:function(r)
    {
        if(r.status=='success')
        {
            updated_fp_imgs(prop_floorplan_id);
        }
        else
        {
            alert(r.msg);
        }
    }



  });


  } else if (result.isDenied) {
    return false;
  }
});

});



function updated_fp_imgs(prop_floorplan_id)
{
    $.ajax({

        url:base_url+'property/floorplan_img_view',
        data:{prop_floorplan_id:prop_floorplan_id},
        type:'POST',
        dataType:'json',
        beforeSend:function(e)
        {

        },
        success:function(r)
        {
            $('.fp_mult_imgs').html(r.data);
            $('input[name="prop_inner_img_hidden"]').val(r.img_name);
        }

    });

}       

/*floor plan image delete ends*/
