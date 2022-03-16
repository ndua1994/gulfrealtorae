

<?php 
if(!empty($prop_inner_img_arr[0])):
foreach($prop_inner_img_arr as $img):?>
<div class="inner_img_del" data-id="<?=$prop_id?>'" data-img="<?=$img?>" ><span>X</span>
<img src="<?=base_url('uploads/'.$img.'')?>" width="80">	
</div>
<?php endforeach;
endif;?>
