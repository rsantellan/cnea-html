<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/*
 */

/**
 * Description of mUpload
 *
 * @author Rodrigo Santellan <rodrigo.santellan at inswitch.us>
 */
class mupload {
  
  public function checkDirectory($path){
        //$path = str_replace('\\', '/', $path);
        if (is_dir($path)) {
            $last = $path[strlen($path)-1];
            if($last == DIRECTORY_SEPARATOR){
                return $path;
            }
            return $path.DIRECTORY_SEPARATOR;
        }
        $cacheDir = FCPATH. DIRECTORY_SEPARATOR.'assets'.DIRECTORY_SEPARATOR.'cache'.DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.'';
        $rootDir = FCPATH;
        $webDir = FCPATH. ''.DIRECTORY_SEPARATOR.'assets'.DIRECTORY_SEPARATOR.'upload'.DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR.'';
        
        $mPath = str_replace(FCPATH, "", $path);
        
        $folders = $pieces = explode(DIRECTORY_SEPARATOR, $mPath);
        
        $smallPath = FCPATH;
        /*
        if ('\\' == DIRECTORY_SEPARATOR)
        {
          $smallPath = "/";
        }
        */
        foreach($folders as $key => $folder){
            $smallPath .= $folder;
            try{
                if (!is_dir($smallPath)) {
                    if(!mkdir($smallPath)) {
                        if (!is_dir($smallPath)) {
                            throw new Exception('Unable to create format directory');
                        }
                    }
                    chmod($smallPath,0775);
                }
            }catch(Exception $e){
                if(strlen($smallPath) > strlen($cacheDir) && strlen($smallPath) > strlen($rootDir) && strlen($smallPath) > strlen($webDir) ){
                    throw $e;
                }
                //throw $e;
            }
            $smallPath .= DIRECTORY_SEPARATOR;
        }
        return $path.DIRECTORY_SEPARATOR;
    }
  
    
    public function returnCacheImage($path, $width, $height, $type = 1)
    {
      $cachePath = $this->returnImageCachePath($path, $width, $height, $type);
      //var_dump($cachePath);
      if(!file_exists($cachePath))
      {
        $this->createImageCache($path, $width, $height, $type);
      }
      return $cachePath;
    }
    
    public function returnWebCacheImage($path, $width, $height, $type = 1)
    {
      $aux = $this->retrieveDocumentsFilesPath($path);
      //if($aux != $path)
      //  return str_replace(FCPATH, "", $aux);
      $cachePath = $this->returnCacheImage($path, $width, $height, $type);
      $mPath = str_replace(FCPATH, "", $cachePath);
      return $mPath;
      
    }
    public function returnImageCachePath($path, $width, $height, $type = 1)
    {
      log_message("INFO", " El supuesto path es: ". $path);
      $path = $this->retrieveDocumentsFilesPath($path);
      $aux = $width."x".$height."_".$type;
      $file_path = $this->returnBasicCachePath($path);// $this->get_path_of_file($mPath);
      $file_name = $this->get_file_of_path($path);
      $mPath = $file_path.DIRECTORY_SEPARATOR.$aux.DIRECTORY_SEPARATOR.$file_name;
      
      
      log_message("INFO", " El path final es: ". $mPath);
      return $mPath;
    }
    
    public function returnBasicCachePath($path)
    {
      $cacheDir = FCPATH. 'assets'.DIRECTORY_SEPARATOR.'cache'.DIRECTORY_SEPARATOR;
      $mPath = str_replace(FCPATH, $cacheDir, $path);
      $file_path = $this->get_path_of_file($mPath);
      return $file_path;
    }
    
    public function createImageCache($path, $width, $height, $type = 1)
    {
      $path = $this->retrieveDocumentsFilesPath($path);
      
      $mPath = $this->returnImageCachePath($path, $width, $height, $type);
      $cachePath = $this->get_path_of_file($mPath);
      //echo ' <br/> cache path '.$cachePath;
      
      
      $this->checkDirectory($cachePath);
      //log_message("INFO", "Los parametros que estoy pasando son, width: ". $width. " | height : ".$height);
      //log_message("INFO", " El supuesto path es: ". $path);
      //log_message("INFO", " El supuesto cache path es: ". $mPath);
      if(class_exists("Imagick"))
      {
        $CI =& get_instance();
        $CI->load->library('mimagick', true, NULL, 'mImagick');
        $CI->mimagick->basicThumbnail($path, $mPath, $type, $width, $height); 
      }
      else
      {
        $CI =& get_instance();
        $CI->load->library('mgd', true, NULL, 'mgd');
        $CI->mgd->basicThumbnail($path, $mPath, $type, $width, $height); 
      }
      
      
    }
    
    public function retrieveDocumentsFilesPath($path)
    {
      $extension = $this->get_file_extension($path);
      $basic_path = FCPATH. 'assets'.DIRECTORY_SEPARATOR."upload".DIRECTORY_SEPARATOR."images".DIRECTORY_SEPARATOR;
      $return = $path;
      switch ($extension) {
        case "pdf":
            $return = $basic_path."adobe_acrobat_pdf_icon.jpg";
          break;
        case "doc":
        case "docx":
            $return = $basic_path."office_word_icon.png";
          break;
        case "xls":
        case "xlsx":
            $return = $basic_path."office_excel_icon.png";
          break;
        case "ppt":
        case "pptx":
            $return = $basic_path."office_powerpoint_icon.png";
          break;        
        default:
          $return = $path;
        break;
      }
      //log_message('info', $return);
      return $return;
    }
    
    public function get_path_of_file($path)
    {
      $pieces = explode(DIRECTORY_SEPARATOR, $path);
      unset($pieces[count($pieces) - 1]);
      $mPath = implode(DIRECTORY_SEPARATOR, $pieces);
      return $mPath;
    }
    
    /**
     *
     * @author Rodrigo Santellan
     * 
     */    
    public function get_file_of_path($path)
    {
      $pieces = explode(DIRECTORY_SEPARATOR, $path);
      return $pieces[count($pieces) - 1];
    }
    
    
    
    /**
     *
     * @author Rodrigo Santellan
     * 
     */
    public function get_file_extension($file_name) {
        return substr(strrchr($file_name, '.'), 1);
    }

    /**
     *
     * @author Rodrigo Santellan
     * 
     */
    public function get_file_name($file_name) {
        return substr($file_name, 0, strrpos($file_name, '.'));
        //return substr(strrchr($file_name,'.'),0);
    }    
    
    public function deleteImageCache($path)
    {
      $cache_dir = $this->returnBasicCachePath($path);
      $file_name = $this->get_file_of_path($path);
      $list = scandir($cache_dir);
      foreach($list as $dir)
      {
        if($dir != "." && $dir != ".." && $dir != ".svn")
        {
          $aux = $cache_dir.DIRECTORY_SEPARATOR.$dir.DIRECTORY_SEPARATOR.$file_name;
          if(file_exists($aux))
          {
            unlink($aux);
          }
          
        } 
      }
    }
}
