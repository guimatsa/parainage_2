<?php

    function sanitaze($data){
        if(is_array($data)){
            foreach($data as $k =>$datum){
                $data[$k]=htmlentities($datum);
            }
            return $data;
        }
        return htmlentities($data);
    }

    function not_empty($data){
        if(is_string($data) && (trim($data)=="" || empty($data))) return false;
        if(is_array($data)){
            foreach($data as $datum){
                if(trim('$data')=="" || empty($data)) return false;
            }
        }
        return true;
    }

    function display_errors($errorsArray, $field){
        if(!isset($errorsArray[$field])) return '';
        $error=$errorsArray[$field];
        return <<<HTML
           <div class="w-100"><small class="text-danger">$error</small></div> 
        HTML;
    }

    function get_data($tableData, $field){
        if(!isset($tableData[$field])) return '';
        return htmlentities($tableData[$field]);
    }
?>