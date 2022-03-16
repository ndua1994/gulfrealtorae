<?php

/*$this->form_validation->set_message('is_unique', 'The %s is already taken');*/
		


$config=array(

'adduser'=>array(

array(

'field'=>'first_name',
'label'=>'First Name',
'rules'=>'required|alpha'

),
array(

'field'=>'last_name',
'label'=>'Last Name',
'rules'=>'required|alpha'

),
array(

'field'=>'email',
'label'=>'Email ID',
'rules'=>'required|valid_email|is_unique[tbl_login.email]',
'errors'=>array('is_unique'=>'Email ID alredy taken')

),

array(

'field'=>'password',
'label'=>'Password',
'rules'=>'required'

),
array(

'field'=>'confirm_password',
'label'=>'Confirm Password',
'rules'=>'required|matches[password]'

)


),

'edit_user'=>array(


array(

'field'=>'first_name',
'label'=>'First Name',
'rules'=>'required|alpha'

),
array(

'field'=>'last_name',
'label'=>'Last Name',
'rules'=>'required|alpha'

)


),

'add_metatag'=>array(

array(

'field'=>'meta_title',
'label'=>'Meta Title',
'rules'=>'required'

),
array(

'field'=>'meta_keyword',
'label'=>'Meta Keyword',
'rules'=>'required'
),
array(

'field'=>'meta_description',
'label'=>'Meta Description',
'rules'=>'required'
),
array(

'field'=>'meta_slug',
'label'=>'Meta Slug',
'rules'=>'required'

)
),
'update_metatag'=>array(

array(

'field'=>'meta_title',
'label'=>'Meta Title',
'rules'=>'required'

),
array(

'field'=>'meta_keyword',
'label'=>'Meta Keyword',
'rules'=>'required'
),
array(

'field'=>'meta_description',
'label'=>'Meta Description',
'rules'=>'required'
),
array(

'field'=>'meta_slug',
'label'=>'Meta Slug',
'rules'=>'required'

)

),
'addblog'=>array(

array(
'field'=>'blog_heading',
'label'=>'Blog Heading',
'rules'=>'required'
)

),

'editblog'=>array(

array(
'field'=>'blog_heading',
'label'=>'Blog Heading',
'rules'=>'required'
)

),

'addblogcat'=>array(
array(

'field'=>'blog_cat_name',
'label'=>'Blog Category Name',
'rules'=>'required'

)
),

'editblogcat'=>array(
array(

'field'=>'blog_cat_name',
'label'=>'Blog Category Name',
'rules'=>'required'

)
)
,

'updatecontct'=>array(

array(

'field'=>'contct_heading',
'label'=>'Heading',
'rules'=>'required'

),

array(

'field'=>'contct_short_descp',
'label'=>'Short Description',
'rules'=>'required'

),
array(

'field'=>'contct_number',
'label'=>'Phone Number',
'rules'=>'required|numeric'

),
array(

'field'=>'contct_website',
'label'=>'Website Url',
'rules'=>'required|valid_url'

),
array(

'field'=>'contct_email',
'label'=>'Email ID',
'rules'=>'required|valid_email'

),
array(

'field'=>'contct_gmap',
'label'=>'Google Map',
'rules'=>'required'

)


),

'updateabout'=>array(

array(

'field'=>'abt_img_alt',
'label'=>'Image Alt Text',
'rules'=>'required'

),

array(

'field'=>'abt_description',
'label'=>'About Description',
'rules'=>'required'

)


),
'addagnt'=>array(

array(

'field'=>'agnt_name',
'label'=>'Name',
'rules'=>'required'

)

),

'updateagnt'=>array(


array(

'field'=>'agnt_name',
'label'=>'Name',
'rules'=>'required'

)

),
'addcommunity'=>array(



array(

'field'=>'comm_heading',
'label'=>'Heading',
'rules'=>'required'
)


),

'updatecommunity'=>array(



array(

'field'=>'comm_heading',
'label'=>'Heading',
'rules'=>'required'
)

),
'addvirtualtour'=>array(


array(

'field'=>'vt_heading',
'label'=>'Heading',
'rules'=>'required'
)

),

'updatevirtualtour'=>array(


array(

'field'=>'vt_heading',
'label'=>'Heading',
'rules'=>'required'
)

),
'addspecialoffer'=>array(


array(

'field'=>'heading',
'label'=>'Heading',
'rules'=>'required'
)

),
'editspecialoffer'=>array(


array(

'field'=>'heading',
'label'=>'Heading',
'rules'=>'required'
)

),
'addproperty'=>array(


array(

'field'=>'comm_id',
'label'=>'Community',
'rules'=>'required'

),

array(


'field'=>'prop_type_id',
'label'=>'Property Type',
'rules'=>'required'
)

),
'updateproperty'=>array(

array(

'field'=>'comm_id',
'label'=>'Community',
'rules'=>'required'

),

array(


'field'=>'prop_type_id',
'label'=>'Property Type',
'rules'=>'required'
)

)




);