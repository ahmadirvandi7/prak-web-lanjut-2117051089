<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\UserModel;
use App\Models\kelasModel;

class UserController extends BaseController
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new KelasModel();
    }

    public function index()
    {
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser(),
        ];
        return view('list_user', $data);
        //
    }
    
    public function profile($nama = "",$npm = "", $kelas = ""){
        $data = [
                    'nama' => $nama,
                    'npm' => $npm,
                    'kelas' => $kelas,
                    
        ];
        return view ('profile', $data); 
    }

    public function create(){
        // session();
        
        
        // $kelas = [
            
        //     [
        //         'id' => 1,
        //         'nama_kelas' => 'A'
        //     ],
        //     [
        //         'id' => 2,
        //         'nama_kelas' => 'B'
        //     ],
        //     [
        //         'id' => 3,
        //         'nama_kelas' => 'C'
        //     ],
        //     [
        //         'id' => 4,
        //         'nama_kelas' => 'D'
        //     ],
        // ];

        $kelasModel = new KelasModel();

        $kelas = $kelasModel->getKelas();

        $data = [
            'kelas' => $kelas,
        ];
        return view('create_user', $data);
    }

    public function store(){

        // if(!$this->validate([
        //     'nama' => 'required'
        // ])) {
        //     $validation = \Config\Services::validation();
        //     return redirect()->to('user/create')->withInput()->with('validation', $validation);
        // }

        // if (!$this->validate([
        //     'nama' => 'required|min_length[3]', // Anda bisa menambahkan aturan lain di sini
        //     'npm' => 'required|numeric', // Contoh aturan untuk bidang npm
        //     'kelas' => 'required|is_not_unique[kelas.id]', // Contoh aturan untuk bidang kelas
        // ])) {
        //     // Jika validasi gagal, kembalikan ke halaman create_user dengan pesan kesalahan
        //     return redirect()->to('user/create')->withInput();
        // }
        


        // dd($this->request->getVar());

        $userModel = new UserModel();
        if(!$this->validate($userModel->getValidationRules())){
            session()->setFlashdata('errors',$this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $kelasModel = new kelasModel();

        // $kelas = $kelasModel->find($this->request->getvar('kelas'));
        // $idKelas = 1;
        // if($kelas){
        //     $idKelas = $kelas['id'];
        // }

        // $userModel->saveUser([
        //     'nama' => $this->request->getVar('nama'),
        //     'id_kelas' => $this->request->getVar('kelas'),
        //     'npm' => $this->request->getVar('npm'),
        // ]);

        $this->userModel->saveUser([
            'nama' => $this->request->getVar('nama'),
            'id_kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm'),
        ]);

        return redirect()->to('/user');

        /*Cara jika value yang disimpan atau di kirim adalah id class, mencari nama kelas berdasarkan id class*/
        $kelas = $kelasModel->find($this->request->getvar('kelas'));
        if($kelas){
            $namaKelas = $kelas['nama_kelas'];
        }

        $data = [
            'nama' => $this->request->getVar('nama'),
            'npm' => $this->request->getVar('npm'),
            'kelas' => $namaKelas,
        ];
        return view('profile', $data);
    }
}
