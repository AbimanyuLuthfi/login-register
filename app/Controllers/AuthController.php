<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AuthModel;

class AuthController extends BaseController
{


    // POST : /
    public function dashboard_index()
    {
        $session = session();
        echo "Hello : ".$session->get('email');
        return view('dashboard');
    }
    // POST : auth/login/index
    public function login_index()
    {
        return view('login');
    }

    // POST : auth/register/index
    public function register_index()
    {
        return view('register');
    }

    public function auth_account_create()
    {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        
        $rules = [
            'email'         => ['rules' => 'required|max_length[50]|valid_email|is_unique[users.email]',
                                'errors'=> [
                                    'required' => '{field} tidak boleh kosong!!!',                
                                    'is_unique' => 'Email Sudah digunakan Sebelumnya!',
                                    'max_length' => '{field} Maximal 50 Karakter!',
                                    ],
                                ],
            'password'      => ['rules' => 'required|min_length[4]|max_length[20]',
                                'errors'=> [
                                    'required' => '{field} tidak boleh kosong!!!',
                                    'min_length' => '{field} Minimal 4 Karakter',
                                    'max_length' => '{field} Maksimal 20 Karakter',
                                    ],
                                ],
            'confirmpassword'  => ['rules' => 'matches[password]',
                                    'errors'=> [
                                    'matches' => 'Password tidak sesuai dengan Konfirmasi Password',
                                    ],
                                ],  
        ];

        if($this->validate($rules)){
            $authModel = new AuthModel();
            $data = [
                'email'    => $email,
                'role'     => 'member',
                'is_active'     => 'not_active',
                'password' => password_hash($password, PASSWORD_BCRYPT)
            ];
            $authModel->save($data);
            return redirect()->to('/auth/login/index');
        } else {
            session()->setFlashdata('error', $this->validator->listerrors());
            return redirect()->to('/auth/register/index');
        }
    }


    public function validation_account() {
        $session = session();   
        $authModel = new AuthModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $auth = $authModel->where('email', $email)->first();

       if(!empty($auth)){
        if($auth['is_active'] == "active"){
            $pass = $auth['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword == true){
                $ses_data = [
                    'id' => $auth['id'],
                    'email' => $auth['email'],
                    'role' => $auth['role'],
                    'is_active' => $auth['is_active'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/dashboard');
            } else {
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/auth/login/index')->with('msg', 'Password Anda Salah');
            }
        } else {
            $session->setFlashdata('msg', 'Email Anda Belum Aktif');
            return redirect()->to('/auth/login/index')->with('msg', 'Email Anda Belum Aktif');
        }
       } else {
        $session->setFlashdata('msg', 'Akun Tidak Ditemukan');
        return redirect()->to('/auth/login/index')->with('msg', 'Akun Tidak Ditemukan');
    }
    }

    public function logout(){
        $this->session->destroy();
        return redirect()->to('/auth/login/index');
    }
}
