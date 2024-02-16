<?php

    if(!function_exists("extractImage")){
        function extractPara($htmlcontent){
            $dom = new DOMDocument();
            $dom->loadHTML($htmlcontent);
            $firstImage = $dom->getElementsByTagName("p");

            if($firstImage->length > 0){
                return $firstImage[0]->textContent;
            }
            return "Not available";
        }
    }