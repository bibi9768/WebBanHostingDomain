<?php

namespace App;
//require_once('vendor/autoload.php');

use Firebase\JWT\JWT;

class BaoKimAPI
{

    /* Bao Kim API key */
    const API_KEY = "x***";
    const API_SECRET = "y***";
    const TOKEN_EXPIRE = 60; //token expire time in seconds
    const ENCODE_ALG = 'HS256';

    private static $_jwt = null;

    /**
     * Get JWT
     */
    public static function getToken()
    {
        if (!self::$_jwt)
            self::refreshToken();

        try {
            JWT::decode(self::$_jwt, self::API_SECRET, array('HS256'));
        } catch (Exception $e) {
            self::refreshToken();
        }

        return self::$_jwt;
    }

    /**
     * Refresh JWT
     */
    public static function refreshToken()
    {

        //$tokenId = base64_encode(mcrypt_create_iv(32));
        $tokenId = base64_encode(random_bytes(5));
        $issuedAt = time();
        $notBefore = $issuedAt;
        $expire = $notBefore + self::TOKEN_EXPIRE;

        /*
        * Payload data of the token
        */
        $data = [
            'iat' => $issuedAt,         // Issued at: time when the token was generated
            'jti' => $tokenId,          // Json Token Id: an unique identifier for the token
            'iss' => self::API_KEY,     // Issuer
            'nbf' => $notBefore,        // Not before
            'exp' => $expire,           // Expire
            'form_params' => [                  // request body (dữ liệu post)
//'a' => 'value a',
//'b' => 'value b',
            ]
        ];

        /*
        * Encode the array to a JWT string.
        * Second parameter is the key to encode the token.
        *
        * The output string can be validated at http://jwt.io/
        */
        self::$_jwt = JWT::encode(
            $data,      //Data to be encoded in the JWT
            self::API_SECRET, // The signing key
            'HS256'     // Algorithm used to sign the token, see https://tools.ietf.org/html/draft-ietf-jose-json-web-algorithms-40#section-3
        );

        return self::$_jwt;
    }
}
