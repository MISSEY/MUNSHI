<?php
// Your ID and token
$blogID = '9722890326';


// The data to send to the API
$postData = array(
		'otp' => '5545',
		'blog' => array('id' => $blogID),
		
);

// Create the context for the request
$context = stream_context_create(array(
		'http' => array(
				// http://www.php.net/manual/en/context.http.php
				'method' => 'POST',
				'header' => "Authorization: {$authToken}\r\n".
				"Content-Type: application/json\r\n",
				'content' => json_encode($postData)
		)
		));

// Send the request
$response = file_get_contents('
https://lidsccsmartindiahackathon2017.mybluemix.net/sendsms'.);

// Check for errors
if($response === FALSE){
	die('Error');
}

// Decode the response
$responseData = json_decode($response, TRUE);

// Print the date from the response
echo $responseData['published'];