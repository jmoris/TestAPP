<?
// Include the library
require 'LeagueOfPHP.class.php';

// Instance the API
$api = new LeagueOfPHP('c4ca4b06-4482-4c5f-8f45-1bbc0307ff23', 'las');

// Example request
$api->request("champion/", '1.2');

// Print the response
print_r($api->response());

if ($api->response()->code != '200') {
    die('An error occurred while performing the request (status code: ' . $api->response()->code . ")\n");
}
?>