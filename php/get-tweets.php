<?php
session_start();
require_once('twitteroauth.php');
 
$twitteruser = "DESIGNJORDAN";
$notweets = 10;
$consumerkey = "Hjc4hU1RTr9yeau0s4OrXbHFV";
$consumersecret = "6xfPcRE1jv7jlO8sgXWguu2OdoVMk4mmndKBhKPpoYazcOe0ur";
$accesstoken = "2484115562-s7fn9nPaBFlcrn8irSiyp0LOyvWrVLv1CiYJHVD";
$accesstokensecret = "xvQGcqCGJfnWwrBKQSLagRlK5urcfuhjN7G1WelkyNh0s";
 
function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  return $connection;
}
  
$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
 
$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$notweets);
 
echo json_encode($tweets);
?>