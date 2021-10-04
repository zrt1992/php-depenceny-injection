<?php

$result = file_get_contents("https://graph.facebook.com/v11.0/756447594409701/albums?access_token=EAAE5hxHrhD4BANphuyP737Swxowsf5YqEJK8dzAAgEdRM1LAhnkkMUImBmV3S51bSBiPn9mNZBfQfsNTwypEO00aAZB4cbMOFMTmTit2AJ7pMvaZBQXKvZA7Mmyc4FvnSgISgSGP5sNGd6fc12hcHYCr9UiM1nU7yeg52ZAxsOUgJKZC8KymWR"
);
$data = json_decode($result);
echo "<pre>";
print_r((array)$data);
die;

require_once __DIR__ . '/vendor/autoload.php'; // change path as needed

$fb = new \Facebook\Facebook([
'app_id' => '344727260726334',
'app_secret' => '16575766b2c9ffdfd22b462c82ce8b0f',
'default_graph_version' => 'v11.0',
//'default_access_token' => '{access-token}', // optional
]);

// Use one of the helper classes to get a Facebook\Authentication\AccessToken entity.
   $helper = $fb->getRedirectLoginHelper();
   $access_token='EAAE5hxHrhD4BAMxAKct7h54k26nuCrxA0JmDlj7LozPJqf59YvndZC7tIw3009XIREMwQjEy85AZBs2lUWVbsnZAOyBnJf3yWBYzZCy6SOdZBaW9KgOyrQkAv74GUJBA9wbbXGZADchqfQGcHMQn0Nzs66RQsZBXqCLDQkrCnQ9A8aMgjwkDE16awDh3qZCBSmufgmOLFWRQj8oTlDYQiGVX';

//   $helper = $fb->getJavaScriptHelper();
//   $helper = $fb->getCanvasHelper();
//   $helper = $fb->getPageTabHelper();

try {

// Get the \Facebook\GraphNodes\GraphUser object for the current user.
// If you provided a 'default_access_token', the '{access-token}' is optional.
$response = $fb->get('/2167635506624229/photos', $access_token);
} catch(\Facebook\Exceptions\FacebookResponseException $e) {
// When Graph returns an error
echo 'Graph returned an error: ' . $e->getMessage();
exit;
} catch(\Facebook\Exceptions\FacebookSDKException $e) {
// When validation fails or other local issues
echo 'Facebook SDK returned an error: ' . $e->getMessage();
exit;
}

$me = $response->getGraphEdge();
var_dump($me);
