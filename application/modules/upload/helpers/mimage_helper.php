<?php 

if ( ! function_exists('thumbnail_image'))
{

  function thumbnail_image($path, $width, $height)
  {
    $ci = &get_instance();
    $ci->load->library("mupload");
    //var_dump(get_class($ci->mupload));
    return $ci->mupload->returnWebCacheImage($path, $width, $height, 4);
  }
  
  
}