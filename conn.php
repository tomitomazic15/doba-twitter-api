<?php

require_once('TwitterAPIExchange.php');

$settings = array(
    'oauth_access_token' => "1370846418349518849-LQjgh6J8Mn8F8dnDZWNgRdwF83cCD5",
    'oauth_access_token_secret' => "BUZCtLgfJEJHddA2JqEDJQgMVz80ZES6Odwe4vOyFq6M2",
    'consumer_key' => "PhOqHQlCbJD0h6ua5I5czv3lb",
    'consumer_secret' => "KzEU4fihMfdQBnvrR6MJDjBMJtwmwPSJPAzSo5xEonhYY8NRIT"
);

$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
 
$requestMethod = "GET";
 
$getfield = '?screen_name=vladaRS&count=6&tweet_mode=extended';
 
$twitter = new TwitterAPIExchange($settings);

$string = json_decode($twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest(),$assoc = TRUE);
             
         
            //  print_r($string)

?>