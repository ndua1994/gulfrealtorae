<?php

function active_class($class_name)
{
	if(!empty($class_name))
	{
		$ci=&get_instance();
		$cond=($ci->router->fetch_class()==$class_name ? 'menu-item-open' : '');
		return $cond;

	}

	return false;

}

function active_method($class_name,$method_name)
{

	if(!empty($class_name) && !empty($method_name))
	{

		$ci=&get_instance();
		
		if($ci->router->fetch_class()==$class_name)
		{

		$cond=($ci->router->fetch_method()==$method_name ? 'menu-item-active' : '');
		}
		else
		{
			$cond='';
		}
		return $cond;

	}

	return false;

}

function base_url_home()
{
	$url=str_replace('admin_HCSrRaVt58Ezffv/','',"".base_url()."");
	return $url;
}


function active_method_single($method_name)
{
	
	if(!empty($method_name))
	{
		$ci=&get_instance();
		$cond=($ci->router->fetch_method()==$method_name ? 'menu-item-active' : '');
		return $cond;

	}

	return false;

}
