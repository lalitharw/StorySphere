<?php

    if(!function_exists("extractImage")){
        function extractImage($htmlcontent){
            $dom = new DOMDocument();
            $dom->loadHTML($htmlcontent);
            $firstImage = $dom->getElementsByTagName("img");

            if($firstImage->length > 0){
                return $firstImage[0]->getAttribute("src");
            }
            return "Not available";
        }
    }