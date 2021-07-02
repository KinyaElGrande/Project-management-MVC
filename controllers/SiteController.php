<?php

namespace app\controllers;

use app\src\Controller;
use app\src\Request;

class SiteController extends Controller
{
    public function home()
    {
        $params = [
            'name' => "Mzee Kinya"
        ];
        return $this->render('home', $params);
    }

    public function contact(Request $request)
    {
        if ($request->isPost()) {
            return "Contact form submitted";
        }
        return $this->render('contact');
    }
}