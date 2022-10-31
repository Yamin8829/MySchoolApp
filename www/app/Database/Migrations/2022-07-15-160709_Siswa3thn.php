<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Siswa3thn extends Migration
{
    public function up()
    {
        //
        $fields = [
            'id' => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'user_id' => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'default' => 0],
            'last_login' => ['type' => 'int', 'constraint' => 225, 'default' => 0],
            'nis' => ['type' => 'int', 'constraint' => 225, 'default' => 0],
            'nama' => ['type' => 'varchar', 'constraint' => 225, 'default' => 0],
            'gender' => ['type' => 'varchar', 'constraint' => 225, 'default' => 0],
            'nisn' => ['type' => 'text', 'constraint' => 225, 'default' => 0],
            'tmp_lahir' => ['type' => 'varchar', 'constraint' => 225, 'default' => 0],
            'tgl_lahir' => ['type' => 'varchar', 'constraint' => 225, 'default' => 0],
            'agama' => ['type' => 'varchar', 'constraint' => 225, 'default' => 'Islam'],
            'negara' => ['type' => 'varchar', 'constraint' => 225, 'default' => 'Indonesia'],
            'ank_ke' => ['type' => 'int', 'constraint' => 225, 'default' => 0],
            'jml_sdra_kndung' => ['type' => 'int', 'constraint' => 225, 'default' => 0],
            'jml_sdra_tiri' => ['type' => 'int', 'constraint' => 225, 'default' => 0],
            'jml_sdra_ankat' => ['type' => 'int', 'constraint' => 225, 'default' => 0],
            'status_ortu' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'bhs_daily' => ['type' => 'varchar', 'constraint' => 225, 'default' => 'Bahasa Indonesia'],
            'alamat' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'tinggal_dgn' => ['type' => 'varchar', 'constraint' => 225, 'default' => 'Orang tua kandung'],
            'jrak_kesekolah' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'kesekolah_dgn' => ['type' => 'varchar', 'constraint' => 225, 'default' => 'Kendaraan'],
            'bb_awal_sekolah' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'tnggibdn_awal_sekolah' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'bb_akhir_skolah' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'tnggibdn_akhir_skolah' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'gol_drah' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'pnykit_brat' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'trjngkit_saat_kls' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'trjngkit_di_thn' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'trjngkit_selma' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'ketrngan' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'kelainan_lainnya' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'sswa_bru_ditgl' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'asl_sklah' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'alamat_sklah_asl' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'tgl_nmr_ijazah' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'sswa_pndhan_ditgl' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'pndh_di_kls' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'nmskolah_pndahan' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'alamat_sklh_pndahn' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'asl_sklah_before_nmrijazahnya' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'alamat_aslsekolah_before' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'alasan_pndah' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'ayah' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'ttl_ayah' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'negara_ayah' => ['type' => 'varchar', 'constraint' => 225, 'default' => 'Indonesia'],
            'pnddkan_akhir_ayh' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'gaji_ayh' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'almt_ayh' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'ibu' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'ttl_ibu' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'negara_ibu' => ['type' => 'varchar', 'constraint' => 225, 'default' => 'Indonesia'],
            'pnddkan_akhir_ibu' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'job_ibu' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'gaji_ibu' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'almt_ibu' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'wali' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'ttl_wali' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'negara_wali' => ['type' => 'varchar', 'constraint' => 225, 'default' => 'Indonesia'],
            'pnddkn_akhir_wali' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'job_wali' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'gaji_wali' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'almt_wali' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'status_dgn_sswa' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'tgl_tmat' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'no_ijzah_tmt' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'lnjut_ke' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'almt_lnjut' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'tgl_pndah' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'pndh_dri_kls' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'pndh_ke' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'tlp_ibu' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'slug' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'img' => ['type' => 'varchar', 'constraint' => 225, 'default' => 'default.png'],
            'tlp_ayah' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'status' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'updated_at' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'tlp_wali' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
        ]; 
        $this->forge->addField($fields);
        $this->forge->addKey(['user_id']);
        $this->forge->addForeignKey('user_id', 'users', 'id', '', 'CASCADE');
        $this->forge->createTable('siswa_3thn', true);
    }

    public function down()
    {
        // drop constraints first to prevent errors
        if ($this->db->DBDriver != 'SQLite3') // @phpstan-ignore-line
        {
            $this->forge->dropForeignKey('siswa_3thn', 'siswa_user_id_foreign');
        }

        $this->forge->dropTable('siswa_3thn', true);
    }
}
