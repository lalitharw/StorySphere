@php
@props(['htmlcontent'])

function extractPara($htmlcontent){
        $dom = new DOMDocument();

        $dom->loadHTML($htmlcontent);

        $para = $dom->getElementsByTagName("p");

        if($para->length >0){
            $firstPara = $para[0]->textContent;
            return $firstPara;
        }
        return null;
    }
@endphp

{{ extractPara($htmlContent) }}