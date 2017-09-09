<?php

namespace Engine;

class View
{
    public $template = 'layout';
    
    public function render($view, $data = [])
    {
        
        if(is_array($data)){
            extract($data);
        }
        
        $viewFile = APP . 'views/';
        
        if(is_null($this->template)){
        
            $viewFile .= $view . '.php';

            if(file_exists($viewFile)){
                
                require $viewFile;
                
            }else{
                echo "view not found";
            }
        }else{
            
            if (file_exists($viewFile . $this->template . '.php')){
                
                require $viewFile . $this->template . '.php';
                
            }else{
                
                echo 'File Template not found';
            }
            
            
        }
    }
    
}