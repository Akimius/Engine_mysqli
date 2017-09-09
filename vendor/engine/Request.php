<?php

namespace Engine;

class Request 
{
    
    public function getParam($param){
        return filter_input(INPUT_GET, $param);
    }

    public function getPostParam($param){
        return filter_input(INPUT_POST, $param);
    }
    
    public function getAllParams(){
        
        $getParams = filter_input_array(INPUT_GET);
        $postParams = filter_input_array(INPUT_POST);
        
        $allparams = [];
        
        if(is_array($getParams)) {
            
            $allparams = array_merge($getParams);
        }

        if(is_array($postParams)) {
            
            $allparams = array_merge($allparams, $postParams);
        }
        
        
        return $allparams;
        
    }
    
    public function getMethod() {
        return filter_input(INPUT_SERVER, 'REQUEST_METHOD');
    }
    
    public function isAjax() {
        
        $req = filter_input(INPUT_SERVER, 'HTTP_X_REQUESTED_WITH');
        
        if(!empty($req) && strtolower($req) == 'xmlhttprequest') {
            return true;
        } else {
            return false;
        }
    }
    
    
    
}