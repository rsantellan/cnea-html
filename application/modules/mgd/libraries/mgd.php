<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

/* 
 */

/**
 * Description of mgd
 *
 * @author Rodrigo Santellan <rodrigo.santellan at inswitch.us>
 */
class mgd {
    
  /**
   *
   * Es la libreria basica para crear thumbnails o mejor dicho resize de imagenes.
   * 
   * @param type $file
   * @param type $cacheFile
   * @param type $type
   * @param type $width
   * @param type $height
   * @return type 
   * @author Rodrigo Santellan
   */
  public function basicThumbnail($file, $cacheFile, $type = gdThumbnailTypes::NORMAL, $width = 200, $height = 200)
  {
    if(!gdThumbnailTypes::isValidtype($type))
    {
      throw new Exception("Invalid thumbnail type check class gdThumbnailTypes");
    }
    //var_dump($cacheFile);
    log_message('error',$cacheFile);
    $config = array();
    $config['image_library'] = 'gd2';
    //$config['image_library'] = 'gd';
    $config['source_image'] = $file;
    $config['new_image'] = $cacheFile;
    //$config['create_thumb'] = TRUE;
    $config['maintain_ratio'] = TRUE;
    $config['width'] = $width;
    $config['height'] = $height;
    
    $CI =& get_instance();
    $CI->load->library('image_lib', $config); 
    $CI->image_lib->resize();
    //$CI->image_lib->clear();
    
    /*
    $im = new Imagick($file);
    switch($type)
    {
      case gdThumbnailTypes::NORMAL:
        $im->thumbnailImage( $width, null );
        break;
      case gdThumbnailTypes::FIT:
        $im->thumbnailImage( $width, $height, true );
        break;
      case gdThumbnailTypes::FIXED:
        $im->thumbnailImage( $width, $height);
        break;
      case gdThumbnailTypes::CROP:
        $im->cropThumbnailImage( $width, $height);
        break;
      default:
        return false;
        break;
    }
    $im->writeImage($cacheFile);
    */
  }  
}

class gdThumbnailTypes {
  const NORMAL = 1;
  const FIT = 2;
  const FIXED = 3;
  const CROP = 4;
  
  public static function isValidtype($type)
  {
    switch($type)
    {
      case self::NORMAL:
        return true;
        break;
      case self::FIT:
        return true;
        break;
      case self::FIXED:
        return true;
        break;
      case self::CROP:
        return true;
        break;
      default:
        return false;
        break;
    }
  }
  
}

class gdColors {
  const PINK = 'pink';
  const BLACK = 'black';
  const WHITE = 'white';
  const BLUE = 'blue';
  const RED = 'red';
  const LIGHTBLUE = 'light blue';
}

class gdExtensions {
  const JPG = 'jpg';
  const PNG = 'png';
}