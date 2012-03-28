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
        $cacheDir = BASEPATH. DIRECTORY_SEPARATOR.'assets'.DIRECTORY_SEPARATOR.'upload'.DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR.'';
        $rootDir = BASEPATH;
        $webDir = BASEPATH. ''.DIRECTORY_SEPARATOR.'assets'.DIRECTORY_SEPARATOR.'upload'.DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR.'';
        
        $mPath = str_replace(BASEPATH, "", $path);
        
        $folders = $pieces = explode(DIRECTORY_SEPARATOR, $mPath);
        $smallPath = $mPath;
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
  
}
