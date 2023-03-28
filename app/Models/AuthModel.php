<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        "email",
        "password",
        "role",
        "is_active",
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getAllItem() {
        return $this->findAll();
    }

    public function createItem($user_items) {
        $data = [
            'email' => $user_items['email'],
            'password' => $user_items['password'],
        ];
        $this->save($data);
        return $this->getInsertID();
    }


    // Function Delete Items Experts
    public function deleteItem($users_id) {
        $getItems = $this->where('id', $users_id)->first();
        if (!empty($getItems)) {
            $this->where('id', $users_id)->delete();
            return true;
        } else return false;
    }
}
