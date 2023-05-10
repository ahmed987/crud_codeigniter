<?php
function dd($x){
echo "<pre>"; print_r($x); die();
}
function p(){
    print_r("check");       
}
function encrypt($data) {
    $cipher = "AES-256-CBC";
    $options = OPENSSL_RAW_DATA;

    // Generate a random key and initialization vector
    $key = openssl_random_pseudo_bytes(32);
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($cipher));

    // Encrypt the data using the random key and initialization vector
    $encrypted = openssl_encrypt($data, $cipher, $key, $options, $iv);

    // Encode the encrypted data, key, and initialization vector as a JSON object
    $output = json_encode([
        'data' => base64_encode($encrypted),
        'key' => base64_encode($key),
        'iv' => base64_encode($iv)
    ]);

    return $output;
}


function decrypt($encrypted) {
    $cipher = "AES-256-CBC";
    $options = OPENSSL_RAW_DATA;

    // Decode the JSON object containing the encrypted data, key, and initialization vector
    $data = json_decode($encrypted, true);

    // Extract the encrypted data, key, and initialization vector from the decoded JSON object
    $encrypted_data = base64_decode($data['data']);
    $key = base64_decode($data['key']);
    $iv = base64_decode($data['iv']);

    // Decrypt the data using the extracted key and initialization vector
    $decrypted = openssl_decrypt($encrypted_data, $cipher, $key, $options, $iv);

    return $decrypted;
}
