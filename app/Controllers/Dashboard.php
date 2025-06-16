<?php

namespace App\Controllers;
use App\Models\ProfileModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $profileModel = new ProfileModel();
        $data['totalProfile'] = $profileModel->countAll();
        return view('dashboard/index', $data);
    }
}
