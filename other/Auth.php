<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 22/08/17
 * Time: 23:34
 */

class Auth
{
    public function authenticate(string $user, string $password)
    {
        if($user == 'marco' and $password == '123')
            return true;

        return false;
    }
}

class AuthApi
{
    public function authenticate(string $user, string $password)
    {
        if($user == 'marco' and $password == '123')
            return ['status' => 'ok'];

        return ['status' => 'fail'];
    }
}

$auth1  = new Auth();
$auth2  = new AuthApi();

$auth1 = $auth1->authenticate('marco', '123');
$auth2 = $auth2->authenticate('marco', '123');

if($auth2)
    echo "logado\n";
else
    echo "não logado\n";