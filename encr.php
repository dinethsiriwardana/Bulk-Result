<?php

// Store a string into the variable which
// need to be Encrypted
$simple_string = "a";

// Display the original string
echo "Original String: " . $simple_string;

echo "<br>";

// Store the cipher method
$ciphering = "AES-128-CTR";

// Use OpenSSl Encryption method
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;

// Non-NULL Initialization Vector for encryption
$encryption_iv = '1234567891011120';

// Store the encryption key
$encryption_key = "a";

// Use openssl_encrypt() function to encrypt the data
$encryption = openssl_encrypt($simple_string, $ciphering,
$encryption_key, $options, $encryption_iv);

echo "<br>";
// Display the encrypted string
echo "Encrypted String: " . $encryption . "\n";

// Non-NULL Initialization Vector for decryption
$decryption_iv = '1234567891011120';

// Store the decryption key
$decryption_key = "a";

// Use openssl_decrypt() function to decrypt the data
$decryption=openssl_decrypt ($encryption, $ciphering,
$decryption_key, $options, $decryption_iv);

echo "<br>";
// Display the decrypted string
echo "Decrypted String: " . $decryption;

?>
