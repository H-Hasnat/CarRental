<?php
namespace APP\Helper;

use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JWTToken
{

    public static function createToken($email,$id){
        $key=env('JWT_KEY');
        $payload=[
            'iss'=>'laravel-token',
            'iat'=>time(),
            'exp'=>time()+60*24*30,
            'email'=>$email,
            'userid'=>$id,
        ];
       return JWT::encode($payload,$key,'HS256');
    }


    public static function verifyToken($token):string|object{
        try{
            if($token===null){
                return 'unauthorized';
            }else{
                $key=env('JWT_KEY');
                $res=JWT::decode($token,new Key($key,'HS256'));
                return $res;
            }


        }
        catch(Exception $e){
            return 'unauthorized';

        }



    }



}