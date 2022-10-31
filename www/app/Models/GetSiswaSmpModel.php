<?php

namespace App\Models;

use CodeIgniter\Model;

class GetSiswaSmpModel extends Model
{
    protected $DBGroup = 'siswa_smp';
    protected $table = 'siswa_smp';
    protected $table2 = 'siswa_smp_data_sekolah';
    // protected $primaryKey = 'id_siswa_smp';
    // protected $useAutoIncrement = true;
    // protected $insertID = 0;
    // protected $returnType = 'array';
    // protected $useSoftDeletes = false;
    // protected $protectFields = true;
    // protected $allowedFields = [
    //     'thn_ajaran_1',
    //     'thn_ajaran_2',
    //     'thn_ajaran_3',
    // ];

    // // Dates
    // protected $useTimestamps = false;
    // protected $dateFormat = 'datetime';
    // protected $createdField = 'created_at';
    // protected $updatedField = 'updated_at';
    // protected $deletedField = 'deleted_at';

    // // Validation
    // protected $validationRules = [];
    // protected $validationMessages = [];
    // protected $skipValidation = false;
    // protected $cleanValidationRules = true;

    // // Callbacks
    // protected $allowCallbacks = true;
    // protected $beforeInsert = [];
    // protected $afterInsert = [];
    // protected $beforeUpdate = [];
    // protected $afterUpdate = [];
    // protected $beforeFind = [];
    // protected $afterFind = [];
    // protected $beforeDelete = [];
    // protected $afterDelete = [];

    public function insert_data_smp($data = array(), $dataSekolah = array())
    {
        $this->db->table($this->table)->insert($data);
        $last_id_siswa_smp = $this->db->insertID();
        $dataSekolah['data_id_siswa_smp'] = $last_id_siswa_smp;
        $this->db->table('siswa_smp_data_sekolah')->insert($dataSekolah);
        return $this->db->insertID();
    }
    public function update_data2($id2, $data2 = array())
    {
        $this->db->table($this->table2)->update($data2, array(
            "data_id_siswa_smp" => $id2,
        ));

        return $this->db->affectedRows();
    }
    public function update_data($id, $data = array())
    {

        $this->db->table('siswa_smp')->update($data, array(
            "id_siswa_smp" => $id,
        ));
        return $this->db->affectedRows();
    }

    public function import_data_smp($data = array(), $dataSekolah = array())
    {
        $this->db->table($this->table)->insert($data);
        $last_id_siswa_smp = $this->db->insertID();
        $dataSekolah['data_id_siswa_smp'] = $last_id_siswa_smp;
        $this->db->table('siswa_smp_data_sekolah')->insert($dataSekolah);
        return $this->db->insertID();
    }

    public function get_all_data_smp()
    {
        return $this
            ->select('*')
            ->join('siswa_smp_data_sekolah', 'siswa_smp_data_sekolah.data_id_siswa_smp = siswa_smp.id_siswa_smp')
            ->orderBy('nis_siswa_smp', 'ASC')->limit(0, 0)
            ->get();
    }
    public function join_all_data_smp()
    {
        return $this
            ->select('*')
            ->join('siswa_smp_data_sekolah', 'siswa_smp_data_sekolah.data_id_siswa_smp = siswa_smp.id_siswa_smp')
        ;
    }
    public function update_data_smp($id, $data = array())
    {
        $this->db->table($this->table)->update($data, array(
            "id_siswa_smp" => $id,
        ));
        return $this->db->affectedRows();
    }

    public function cekDataSmp($nis)
    {
        return $this->db->table($this->table)->where('nis_siswa_smp', $nis)->get()->getRowArray();
    }
    public function deleteSmp($id)
    {
        return $this->db->table('siswa_smp_data_sekolah')->where('data_id_siswa_smp', $id)->delete();
    }
    public function getSmp($nis)
    {
        return $this
            ->select('*')
            ->join('siswa_smp_data_sekolah', 'siswa_smp_data_sekolah.data_id_siswa_smp = siswa_smp.id_siswa_smp')
            ->where('nis_siswa_smp', $nis)->get()->getRowArray();
    }
    public function getSmpPdf($slug)
    {
        return $this
            ->select('*')
            ->join('siswa_smp_data_sekolah', 'siswa_smp_data_sekolah.data_id_siswa_smp = siswa_smp.id_siswa_smp')
            ->where('slug', $slug)->get()->getRowArray();
    }
    public function getKls($kls_4)
    {
        return $this
            ->select('*')
            ->join('siswa_smp_data_sekolah', 'siswa_smp_data_sekolah.data_id_siswa_smp = siswa_smp.id_siswa_smp')
            ->like('kls_4', $kls_4)->get();
    }
    public function deleteData($id)
    {
        return $this
            ->db->table($this->table2)->where('data_id_siswa_smp', $id)->delete();

    }
}
