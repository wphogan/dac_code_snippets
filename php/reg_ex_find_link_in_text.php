<?php

// The Regular Expression filter
$reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";

// The Text you want to filter for urls
$text = "<ul><li><a href='http://www.test.com'>Coffee</a></li><li><a href='http://www.test2.com'>Cof2fee</a></li><li><a href='http://www.test3.com'>Cof3fee</a></li></ul>";


// Check if there is a url in the text
if(preg_match_all($reg_exUrl, $text, $url)) {

       // make the urls hyper links
      foreach ($url[0] as &$url_test) {
         echo  $url_test;
      }


} else {

       // if no urls in the text just return the text
       echo 'no';

}
?>