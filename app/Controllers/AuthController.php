<?php

namespace App\Controllers;

use App\Core\Request;

class AuthController extends Controller
{
    public function logjn()
    {
        $this->setLayout('auth');
        return $this->render('login');
    }

    public function register(Request $request)
    {
        $this->setLayout('auth');
        if($request->isPost()) {
            return 'handle';
        }
        return $this->render('register');
    }
}