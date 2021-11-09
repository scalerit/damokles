<?php


session_name('scalerit_session');
session_start();

$scaler = new ScalerITSDK(); // Create a new ScalerIT SDK instance

// Setup the config for the Directus SDK
$scaler->config([
    "base_url" => "<URL>",
    "auth_storage" => "_SESSION" // This can be set to _SESSION or if you want to store it as a cookie you can also use _COOKIE
]);

?>