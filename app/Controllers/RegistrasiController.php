<?php

namespace App\Controllers;

use App\Models\MRegistrasi;

class RegistrasiController extends RestfulController
{
    public function registrasi()
    {
        $data = [
            'Nama' => $this->request->getVar('Nama'),
            'Email' => $this->request->getVar('Email'),
            'Password' => password_hash($this->request->getVar('Password'), PASSWORD_DEFAULT)
        ];

        log_message('debug', 'Data Registrasi: ' . print_r($data, true));

        // If data is successfully saved, return a success response
        $model = new MRegistrasi();
        $save = $model->save($data);

        if ($save) {
            return $this->responseHasil(200, true, "Registrasi Berhasil");
        } else {
            return $this->responseHasil(500, false, "Terjadi kesalahan saat registrasi");
        }
    }
}
