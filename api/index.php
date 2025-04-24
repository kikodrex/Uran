<?php
// Set the contect type to JSON
header('content-Type: application/json');

// Check if the request methodis GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  // Create response array
$response = array(
  'message' => 'Hello World!'
  );

// Encode the response array to JSON and print it
echo json_encode($response);
} else {
  // If the request method is not GET, return an error response
http_reswponse_code(405); // Method not allowed
echo json_encode(array('error' => 'Method not allowed'));
}
?>
  
