<?php

require_once('TwitterAPIExchange.php');
require_once('index.php');

$settings = array(
    'oauth_access_token' => "1370846418349518849-LQjgh6J8Mn8F8dnDZWNgRdwF83cCD5",
    'oauth_access_token_secret' => "BUZCtLgfJEJHddA2JqEDJQgMVz80ZES6Odwe4vOyFq6M2",
    'consumer_key' => "PhOqHQlCbJD0h6ua5I5czv3lb",
    'consumer_secret' => "KzEU4fihMfdQBnvrR6MJDjBMJtwmwPSJPAzSo5xEonhYY8NRIT"
);

//call
$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
 
$requestMethod = "GET";

$twitter_user = isset($_GET['input']);

if (preg_match('/[A-Za-z]/', $twitter_user) || preg_match('/[0-9]/', $twitter_user)){
    $twitter_user = $_GET["input"];
}

else {
    $twitter_user = "Twitter";
}

//twitter user's tweets
$getfield = "?screen_name=$twitter_user&count=8&tweet_mode=extended";
 
$twitter = new TwitterAPIExchange($settings);

$string = json_decode($twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest(),$assoc = TRUE);
             
         
            //  print_r($string)

?>