<?php

$securityKey = '69c73463-8bd3-4ce9-9ade-b06d7a30c5c9';
$path = '/4567.mp4';

// Set the time of expiry to one hour from now
$expires = time() + 78000;

// Generate the token
$hashableBase = $securityKey.$path.$expires;

$token = md5($hashableBase, true);
$token = base64_encode($token);
$token = strtr($token, '+/', '-_');
$token = str_replace('=', '', $token);

// Generate the URL
$url = "https://myshortvidio.b-cdn.net{$path}?token={$token}&expires={$expires}";

echo $url;


https://myshortvidio.b-cdn.net/4567.mp4?token=INJ15Z1PM8nrJ3Z3XRUXAg&expires=1643332564