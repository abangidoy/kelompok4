<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $Modelskaryawan = new \App\Models\Modelskaryawan();
        $login =$this->request->getPost('login');
        if($login){
            $karyawan_username = $this->request->getPost('karyawan_username');
            $karyawan_password = $this->request->getPost('karyawan_password');

            if($karyawan_username == '' or $karyawan_password ==''){
                $err ="Silahkan masukan username dan password";
            }
            if(empty($err)){
                $dataKaryawan = $Modelskaryawan->where("karyawan_username", $karyawan_username)->first();
                if($dataKaryawan['karyawan_password']!=md5($karyawan_password)
                ){
                    $err ="Password tidak sesuai";
                }
            }
if(empty($err)){
    $dataSesi = [
        'id' => $dataKaryawan['id'],
        'karyawan_username' => $dataKaryawan['karyawan_username'],
        'karyawan_password' => $dataKaryawan['karyawan_password'],
    ];
    session()->set($dataSesi);
    return redirect()->to('karyawan');
}    

            if($err){
                session()->setFlashdata('karyawan_username' , $karyawan_username);
                session()->setFlashdata('error' , $err);
                return redirect()->to("login");
            }
        }
        return view('login');
    }
}