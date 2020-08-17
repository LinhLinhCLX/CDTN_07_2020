<?php 
function public_url($url ='')
{
	echo  base_url( "public/" );
}
function pre($list, $exit = true)
{
    echo "<pre>";
    print_r($list);
    if($exit)
    {
        die();
    }
}
?>
