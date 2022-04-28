<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Drivers extends BaseController
{
    public function index()
    {
        $model = new UsersModel();
        $kunci = $this->request->getVar('cari');

        if ($kunci) {
            $query = $model->pencarian($kunci);
            $jumlah = "Pencarian dengan username <B>$kunci</B>";
        } else {
            $query = $model;
            $jumlah = "";
        }

        $data['users'] = $query->paginate(10);
        $data['jumlah'] = $jumlah;

        echo view('user', $data);
    }

    public function detail($username)
    {
        $userModel = new UsersModel();
        $data['user'] = $userModel->where(['username' => $username])->first();

        return view('detail_user', $data);
    }
}
