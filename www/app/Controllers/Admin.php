<?php

namespace App\Controllers;

use App\Models\GetSiswaSmpModel;
use App\Models\GetUserModel;
use CodeIgniter\I18n\Time;

class Admin extends BaseController
{
    protected $db, $builder;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        // $this->builder = $this->db->table('users');
    }
    public function all_users()
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
        } else {
            $paginateData = $users->select('users.id as userid,user_img,fullname, created_at, active, username,status, last_login, email, name')
                ->join('auth_groups_users', 'auth_groups_users.user_id = users.id')
                ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
                ->orLike('username', $search)
                ->orLike('email', $search);
        }
        $siswaModel = new GetSiswaSmpModel();

        $dataSiswa = $siswaModel->get_all_data_smp()->getResultArray();
        $totalSiswa = $siswaModel->countAll();
        $data = [
            'title' => 'All Users',
            'totalSiswa' => $totalSiswa,
            'users' => $paginateData,
            'pager' => $users->pager,
            'search' => $search,
            'time' => Time::parse(date('F d, Y l. h:i A', strtotime(user()->created_at)))->humanize(),
        ];

        return view('adminContent/index', $data);
    }
    public function edit($username)
    {
        $siswaModel = new GetSiswaSmpModel();
        $users = new GetUserModel();
        $dataSiswa = $siswaModel->get_all_data_smp()->getResultArray();
        $totalSiswa = $siswaModel->countAll();
        $user = $users->select('users.id as userid,user_img,fullname, created_at,group_id, active, username,status, last_login, email, name')
            ->join('auth_groups_users', 'auth_groups_users.user_id = users.id')
            ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')->where('username', $username)->get()->getRowArray();
        // dd($user);

        $data = [
            'title' => "Edit " . $username,
            'totalSiswa' => $totalSiswa,
            'thn' => '2020-2021',
            'user' => $user,
            'validation' => \Config\Services::validation(),
            'time' => Time::parse(date('F d, Y l. h:i A', strtotime(user()->created_at)))->humanize(),
        ];
        // return view('authContent/registration', $data);
        return view('adminContent/editUser', $data);
    }
    public function delete($id)
    {
//

        $siswaModel = new GetSiswaSmpModel();
        $users = new GetUserModel();
        $dataSiswa = $siswaModel->get_all_data_smp()->getResultArray();
        $totalSiswa = $siswaModel->countAll();
        $users->delete_data($id);

        $totalSiswa = $siswaModel->countAll();
        session()->markAsTempdata('pesan', 3);
        session()->setTempdata('pesan', '<div class="col-md-9 col-sm-9 "> <div class="alert alert-success"><i class="fas fa-solid fa-circle-check"></i> The data has been deleted.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
       </div></div>');
        return redirect()->to('/Admin/All-Users');
    }
    public function detail($username)
    {
        $siswaModel = new GetSiswaSmpModel();
        $users = new GetUserModel();
        $dataSiswa = $siswaModel->get_all_data_smp()->getResultArray();
        $totalSiswa = $siswaModel->countAll();
        $user = $users->select('users.id as userid,user_img,fullname, created_at,group_id, active,user_cover, username,status, last_login, email, name')
            ->join('auth_groups_users', 'auth_groups_users.user_id = users.id')
            ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')->where('username', $username)->get()->getRowArray();
        // dd($user);

        $data = [
            'title' => "Detail " . $username,
            'totalSiswa' => $totalSiswa,
            'thn' => '2020-2021',
            'user' => $user,
            'validation' => \Config\Services::validation(),
            'time' => Time::parse(date('F d, Y l. h:i A', strtotime(user()->created_at)))->humanize(),
        ];
        // return view('authContent/registration', $data);
        return view('adminContent/detail', $data);
    }
    public function update($id)
    {
        session()->markAsTempdata('pesan', 3);
        $userModel = new GetUserModel();
        $slug = url_title($this->request->getPost('fullname'), '-', true);
        // dd($imgku)$this->request->getPost('username');
        // dd($this->request->getPost('active'));
        if ($this->request->getPost('active') == "Tidak aktif / Tidak terverifikasi") {
            $aktif = 0;
        }
        if ($this->request->getPost('active') == "Aktif / Terverifikasi") {
            $aktif = 1;
        }
        if ($this->request->getPost('group_id') == "Admin") {
            $grup = 1;
        }
        if ($this->request->getPost('group_id') == "User") {
            $grup = 2;
        }
        if ($this->request->getPost('group_id') == "Wali Kelas") {
            $grup = 3;
        }
        if ($this->request->getPost('group_id') == "Operator") {
            $grup = 4;
        }
        if ($this->request->getPost('group_id') == "Tata Usaha") {
            $grup = 5;
        }
        if ($this->request->getPost('group_id') == "Koordinator Wali Kelas") {
            $grup = 6;
        }
        if ($this->request->getPost('group_id') == "Staf") {
            $grup = 7;
        }
        // dd($aktif);
        $dataRole = [
            'group_id' => $grup,
        ];
        $dataActive = [
            'active' => $aktif,
        ];
        // dd($data);
        $userModel->update_data($id, $dataRole);
        $userModel->update_user($id, $dataActive);
        session()->setTempdata('pesan', '<div class="col-md-9 col-sm-9 "> <div class="alert alert-success"><i class="fas fa-solid fa-circle-check"></i> The data has been updated.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
       </div></div>');
        return redirect()->to('/User');
    }
    public function get_user_status()
    {

        session()->markAsTempdata('pesan', 3);
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
            $paginateData = $users->get_all_data()->getResultArray();

            $output = "";
            $output = '<div class="overflow-auto"><table id="example1" class=" table-bordered table table-hover">
            <thead>
            <tr>
                    <th>Username</th>
                    <th>Foto</th>
                    <th>Nama Lengkap</th>
                    <th>Role</th>
                    <th>Status Akun</th>
                    <th>Terakhir Online</th>
                    <th>#</th>
            </tr>
            </thead>
            <tbody>';
            // dd($paginateData);

            foreach ($paginateData as $row) {
                // dd($row);
                $status = '';
                $current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 10 second');
                // $now= strtotime(date("Y-m-d H:i:s"));
                $current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
                $user_last_activity = date("Y-m-d H:i:s", $row['last_login']);
                // $now= date("Y-m-d H:i:s");
                // dd($now , $user_last_activity );
                // dd($user_last_activity, $current_timestamp);
                $time = Time::parse($user_last_activity);
                if ($user_last_activity > $current_timestamp) {
                    $status = '<span class="mr-2" style="background:#00e000; width:17px; height:17px;border-radius:100%;"></span> Active now</div>';
                } elseif ($row['last_login'] == 0) {
                    $status = '<span class="mr-2" style="background:#bcc0c4; width:17px; height:17px;border-radius:100%;"></span> ' . $time->humanize() . '</div><small>' . date("F d, Y H:i:s", strtotime($row['created_at'])) . '</small>';
                } else {
                    $status = '<span class="mr-2" style="background:#bcc0c4; width:17px; height:17px;border-radius:100%;"></span> ' . $time->humanize() . '</div><small>' . date("F d, Y H:i:s", $row['last_login']) . '</small>';
                }
                if ($row['active'] == 1) {
                    $akun = '<span class=" badge-pill bg-success">Verified</span>';
                } else {
                    $akun = '<span class="badge-pill bg-danger">Unverified</span>';
                }
                $time = Time::parse($user_last_activity);
                $output .= '
                    <tr>
                    <td>' . $row['username'] . '</td>
                    <td> <div class="bg-poto-data">
                    <div class="img-pro-data">
                    <img class="img-fluid  rounded-circle rounded-circle" src="' . base_url() . "/public/assets/images/profile/" . $row['user_img'] . '" alt="">
                    </div>
                    </div></td>
                    <td>' . $row['fullname'] . '</td>
                    <td>' . $row['description'] . '</td>
                    <td>' . $akun . '</td>
                    <td><div class="d-flex">' . $status . '</td>
                    <td><div class="d-flex"><a href="' . base_url() . "/Admin/detail/" . $row['username'] . '" class="btn btn-sm btn-success">Detail</a>
                    <a href="' . base_url() . "/Admin/edit/" . $row['username'] . '" class="mx-2 btn btn-sm btn-warning">Edit</a>

                     </div></td>
                    </tr>
                    ';
            }
            $output .= '</tbody>
                </table></div>';
            $db = $this->db->close();
            unset($db);
            // $db = new SQLite3(WRITEPATH . 'database/darulkholidin.db');
            // $db->exec("PRAGMA busy_timeout=6000");
            echo $output;
        } else {
            $paginateData = $users->select('users.id as userid,user_img,fullname, created_at, active, username,status, last_login, email, name')
                ->join('login_users', 'login_users.user_id = users.id')
                ->join('auth_groups_users', 'auth_groups_users.user_id = users.id')
                ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
                ->orLike('username', $search)
                ->orLike('email', $search)
                ->paginate(4);
        }

    }

}
