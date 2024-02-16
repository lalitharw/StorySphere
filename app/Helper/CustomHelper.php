<?php

    if(!function_exists("extractPara")){
        function extractPara($htmlcontent){
            $dom = new DOMDocument();
            $dom->loadHTML($htmlcontent);
            $firstImage = $dom->getElementsByTagName("p");

            if($firstImage->length > 0){
                return $firstImage[0]->textContent;
            }
        }
    }


    if(!function_exists("extractImage")){
        function extractImage($htmlcontent){
            $dom = new DOMDocument();

            $dom->loadHTML($htmlcontent);

            $firstPara = $dom->getElementsByTagName("img");

            if($firstPara->length > 0){
                return $firstPara[0]->getAttribute("src");
            }
            
        }
    }

    if(!function_exists("caculateReadingTime")){
        function caculateReadingTime($words){
            $averageTime = 200;

            $readingTime = strlen($words) / $averageTime;

            return (int)($readingTime);
        }
    }

    if(!function_exists("limitChar")){
        function limitChar($htmlcontent){
            $text = extractPara($htmlcontent);
            $maxChars = 150;
           
            $limitedString = (strlen($text) > $maxChars) ? substr($text, 0, $maxChars) . '...' : $text;
            return $limitedString;
        }
    }