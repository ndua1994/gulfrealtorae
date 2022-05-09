

<?php 
if(!empty($prop_floorplan_img_arr[0])):
foreach($prop_floorplan_img_arr as $img):?>
<div class="fp_img_del" data-id="<?=$prop_id?>'" data-img="<?=$img?>" ><span>X</span>
<img src="<?=base_url('uploads/'.$img.'')?>" width="80" height='50'>	
</div>
<?php endforeach;
endif;?>
