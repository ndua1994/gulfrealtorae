<?php

function script_tag($url)
{
if(!empty($url))
{
return "<script type='text/javascript' src='".base_url($url)."'></script>
";
}
}