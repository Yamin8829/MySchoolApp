<?php

namespace App\Controllers\_UserStatus;

use SQLite3;
use \App\Models\GetUserModel;

class GetUserStatus extends \App\Controllers\BaseController
{

    protected $db, $builder;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        // $this->builder = $this->db->table('users');
    }

    public function update_user_status()
    {
        // $builder = $this->db->table('login_users');
        $time = time();
        $uid = user_id();

        // $builder->set('last_login', $time);
        // $builder->where('user_id', $uid);
        // $builder->update();

        $userModel = new \App\Models\GetUserModel();
        // dd($time);
        if ($userModel->update_data($uid, array(
            "last_login" => $time,
        ))) {
            $db = $this->db;
            unset($db);
            // $db = new SQLite3(WRITEPATH . 'database/darulkholidin.db');
            // $db->exec("PRAGMA busy_timeout=6000");

        }return redirect()->to('/');
        // $userModel->update_data($uid, array(
        //     "last_login" => $time,
        // ));

        $db = $this->db;
        unset($db);
        $db = new SQLite3(WRITEPATH . 'database/darulkholidin.db');
        $db->exec("PRAGMA busy_timeout=6000");
// return $builder;

    }

    public function get_user_status()
    {
        $request = service('request');
        $searchData = $request->getGet(); // OR $this->request->getGet();
        $search = "";
        if (isset($searchData) && isset($searchData['search'])) {
            $search = $searchData['search'];
        }

        // Get data
        $users = new GetUserModel();
        // $users = $users->get_all_data();
        // dd($users);

        if ($search == '') {
            $paginateData = $users->get_all_data();

            $output = "";
            $output = '<table id="example1" class="table table-bordered table-hover  table-striped">
            <thead>
            <tr>
                    <th>Nomor Induk</th>
                    <th>Pas Poto</th>
                    <th>Nama Lengkap</th>
                    <th>Tempat Lahir</th>
                    <th>Action</th>
                    <th>Terakhir diubah</th>
            </tr>
            </thead>
            <tbody>';
            // dd($paginateData);

            foreach ($paginateData as $row) {
                // dd($row);
                $status = '';
                $current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 7 second');
                $current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
                $user_last_activity = date("Y-m-d H:i:s", $row['last_login']);
                // dd($user_last_activity, $current_timestamp);
                if ($user_last_activity > $current_timestamp) {
                    $status = '<span class="btn btn-success">Online</span>';
                } else {
                    $status = '<span class="btn btn-danger">Offline</span>';
                }
                $output .= '
                    <tr>
                    <td>' . $row['username'] . '</td>
                    <td> <div class="bg-poto-data">
                    <div class="img-pro-data">
                    <img class="img-fluid  rounded-circle rounded-circle" src="' . base_url() . "/public/assets/images/profile/" . $row['user_img'] . '" alt="">
                    </div>
                    </div></td>
                    <td>' . $row['username'] . '</td>
                    <td>' . $row['name'] . '</td>
                    <td><button type="button" class="btn btn-info btn-xs start_chat" data-touserid="' . $row['userid'] . '" data-tousername="' . $row['username'] . '">Start Chat</button></td>
                    <td>' . $status . '</td>
                    </tr>
                    ';
            }
            $output .= '</tbody>
                </table>

                <!-- Paginate -->
                <div style="margin-top: 10px;">
                    ' . $users->pager->links() . '
                </div>';
            $db = $this->db->close();
            unset($db);
            // $db = new SQLite3(WRITEPATH . 'database/darulkholidin.db');
            // $db->exec("PRAGMA busy_timeout=6000");
            echo $output;
        } else {
            $paginateData = $users->select('*')
                ->orLike('username', $search)
                ->orLike('name', $search)
                ->orLike('email', $search)
                ->paginate(4);
        }

    }

    public function user_status()
    {

        // return redirect()->to('/');

        // $builder = $this->db->table('users');
        // $builder->select('users.id as userid,user_img, created_at, active, username,status, last_login, email, name');
        // $builder->join('login_users', 'login_users.user_id = users.id');
        // $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        // $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');

        // $query = $builder->get();
        // $result = $query->getResultArray();
        // $output="";
        // $output = '<table id="example1" class="table table-bordered table-hover  table-striped">
        // <thead>
        // <tr>
        //         <th>Nomor Induk</th>
        //         <th>Pas Poto</th>
        //         <th>Nama Lengkap</th>
        //         <th>Tempat Lahir</th>
        //         <th>Action</th>
        //         <th>Terakhir diubah</th>
        // </tr>
        // </thead>
        // <tbody>';
        // dd($result);
        //     foreach ($result as $row) {
        //         $status = '';
        //         $current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 7 second');
        //         $current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
        //         $user_last_activity = date("Y-m-d H:i:s", $row['last_login']);
        // // dd($user_last_activity, $current_timestamp);
        //         if ($user_last_activity >$current_timestamp) {
        //             $status = '<span class="btn btn-success">Online</span>';
        //         } else {
        //             $status = '<span class="btn btn-danger">Offline</span>';
        //         }
        //         $output .= '
        // <tr>
        // <td>' . $row['username'] . '</td>
        // <td> <div class="bg-poto-data">
        // <div class="img-pro-data">
        // <img class="img-fluid  rounded-circle rounded-circle" src="'.base_url()."/public/assets/images/profile/" . $row['user_img'] .'" alt="">
        // </div>
        // </div></td>
        // <td>' . $row['username'] . '</td>
        // <td>' . $row['name'] . '</td>
        // <td><button type="button" class="btn btn-info btn-xs start_chat" data-touserid="' . $row['userid'] . '" data-tousername="' . $row['username'] . '">Start Chat</button></td>
        // <td>' . $status . '</td>
        // </tr>
        // ';
        //     }
        //     $db = $this->db->close();
        //     unset($db);
        //     $db = new SQLite3(WRITEPATH . 'database/darulkholidin.db');
        //     $db->exec("PRAGMA busy_timeout=6000");
        //     return $output;
        //     return redirect()->to('/');

    }

}
