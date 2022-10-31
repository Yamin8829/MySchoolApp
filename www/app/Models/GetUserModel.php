<?php

namespace App\Models;

use CodeIgniter\Model;

class GetUserModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'users';
    protected $table2 = 'auth_groups_users';
    // protected $primaryKey           = 'id';

    public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
        // OR $this->db = db_connect();
    }

    public function insert_data($data = array())
    {
        $this->db->table($this->table)->insert($data);
        return $this->db->insertID();
    }
    public function update_profile($id, $data = array())
    {
        $this->db->table($this->table)->update($data, array(
            "id" => $id,
        ));
        return $this->db->affectedRows();
    }
    public function update_user($id, $data = array())
    {
        $this->db->table($this->table)->update($data, array(
            "id" => $id,
        ));
        return $this->db->affectedRows();
    }
    public function update_data($id, $data = array())
    {
        $this->db->table($this->table2)->update($data, array(
            "user_id" => $id,
        ));
        return $this->db->affectedRows();
    }

    public function delete_data($id)
    {
        return $this->db->table($this->table)->delete(array(
            "id" => $id,
        ));
    }
    public function cekUser($username)
    {
        return $this->db->table($this->table)->where('username', $username)->get()->getRowArray();
    }
    public function get_all_data()
    {
        return $this

            ->select('users.id as userid,user_img,fullname,description, created_at, active, username,status, last_login, email, name')
            ->join('auth_groups_users', 'auth_groups_users.user_id = users.id')
            ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
            ->orderBy('last_login', 'DESC')
            ->get();
        // ->orderBy('name', 'ASC')
        // ->paginate(100);
        // $builder = $this->db->table('users');
        // $builder->select('users.id as userid,user_img, created_at, active, username,status, last_login, email, name');
        // $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        // $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');

        // $query = $builder->get();
        // $result = $query->getResult();
        // $query = $this->db->query('select * from ' . $this->table);

        // return $builder->get();

    }

}
