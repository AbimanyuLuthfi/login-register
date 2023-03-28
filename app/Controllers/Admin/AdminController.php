<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AuthModel;

class AdminController extends BaseController
{
    
    /**
     * GET : /admin/login/index
     * Function Read Accounts
     */
    public function login_index()
    {
        $authModel = new AuthModel();
        $getItems = $authModel->getAllItem();

        $data = [
            'title' => 'Admin Dashboard',
            'array_items' => $getItems,
        ];

        return view('/admin/dashboard/index', $data);
    }

    public function admin_account_index($accounts_id)
    {
        $authModel = new AuthModel();
        $getItems = $authModel->where('id', $accounts_id)->first();
        
        $viewData = [
            'title' => 'Update Accounts',
            'head' => 'Update Accounts Information',
            'items' => $getItems,
        ];
        return view('admin/dashboard/edit-accounts', $viewData);
    }

    /**
     * GET : /admin/(:any)/update/post
     * Function Update Mentors
     */
    public function	admin_account_index_update($accounts_id) {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $role = $this->request->getVar('role');
        $is_active = $this->request->getVar('is_active');
        
        $authModel = new AuthModel();
        $getItems = $authModel->where('id', $accounts_id)->first();
        if(!empty($getItems)) {
            $updateAccounts =[
                'email' => $email,
                'password' => $password,
                'role' => $role,
                'is_active' => $is_active,
            ];
            
            $authModel->where('id', $accounts_id)->set($updateAccounts)->update();
            return redirect()->to('/admin/login/index')->with('success', 'Berhasil Update Akun');
        } else {
            return redirect()->to('/admin/login/index')->with('errors', 'Gagal Update Akun');
        }
    }

    /**
     * DELETE : /admin/(:any)/delete
     * Function Create Mentors
     */
    public function admin_account_delete($account_id){
        $authModel = new AuthModel();
        $getItems = $authModel->where('id', $account_id)->first();
        if(!empty($getItems)){
            $authModel->where('id', $account_id)->delete();
            return redirect()->to('/admin/login/index')->with('success', 'Berhasil Menghapus Akun');
        }
        else return redirect()->to('/admin/login/index')->with('success', 'Gagal Menghapus Akun');
    }
}
