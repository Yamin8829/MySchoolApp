<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SiswaSmp extends Migration
{
    protected $DBGroup = "siswa_smp";
    public function up()
    {
        //
        $fields = [
            'id_siswa_smp' => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'nis_siswa_smp' => ['type' => 'int', 'constraint' => 225, 'default' => 0],
            'nama_lengkap_siswa' => ['type' => 'varchar', 'constraint' => 225, 'default' => 0],
            'nama_panggilan_siswa' => ['type' => 'varchar', 'constraint' => 225, 'default' => 0],
            'gender_siswa' => ['type' => 'varchar', 'constraint' => 225, 'default' => 0],
            'nisn' => ['type' => 'text', 'constraint' => 225, 'default' => 0],
            'tmp_lahir_siswa' => ['type' => 'varchar', 'constraint' => 225, 'default' => 0],
            'tgl_lahir_siswa' => ['type' => 'varchar', 'constraint' => 225, 'default' => 0],
            'agama_siswa' => ['type' => 'varchar', 'constraint' => 225, 'default' => 'Islam'],
            'negara_siswa' => ['type' => 'varchar', 'constraint' => 225, 'default' => 'Indonesia'],
            'ank_ke' => ['type' => 'int', 'constraint' => 225, 'default' => 0],
            'jml_sdra_kndung' => ['type' => 'int', 'constraint' => 225, 'default' => 0],
            'jml_sdra_tiri' => ['type' => 'int', 'constraint' => 225, 'default' => 0],
            'jml_sdra_angkat' => ['type' => 'int', 'constraint' => 225, 'default' => 0],
            'status_ortu' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'bhs_daily' => ['type' => 'varchar', 'constraint' => 225, 'default' => 'Bahasa Indonesia'],
            'alamat_siswa' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'tinggal_dgn' => ['type' => 'varchar', 'constraint' => 225, 'default' => 'Orang tua kandung'],
            'jrak_kesekolah' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'kesekolah_dgn' => ['type' => 'varchar', 'constraint' => 225, 'default' => 'Kendaraan'],

            'berat_badan_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'berat_badan_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'berat_badan_3' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'berat_badan_4' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'tinggi_badan_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'tinggi_badan_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'tinggi_badan_3' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'tinggi_badan_4' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'gol_darah' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],

            'pnykit_berat_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'trjngkit_saat_kls_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'trjngkit_di_thn_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'trjngkit_selama_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'ketrngan_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],

            'pnykit_berat_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'trjngkit_saat_kls_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'trjngkit_di_thn_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'trjngkit_selama_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'ketrngan_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],

            'pnykit_berat_3' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'trjngkit_saat_kls_3' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'trjngkit_di_thn_3' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'trjngkit_selama_3' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'ketrngan_3' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],

            'kelainan_lainnya' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],

            'ayah' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'ttl_ayah' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'negara_ayah' => ['type' => 'varchar', 'constraint' => 225, 'default' => 'Indonesia'],
            'pnddkan_akhir_ayah' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'job_ayah' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'gaji_ayah' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'almt_ayah' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'tlp_ayah' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'ibu' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'ttl_ibu' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'negara_ibu' => ['type' => 'varchar', 'constraint' => 225, 'default' => 'Indonesia'],
            'pnddkan_akhir_ibu' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'job_ibu' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'gaji_ibu' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'almt_ibu' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'tlp_ibu' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'wali' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'gender_wali' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'ttl_wali' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'negara_wali' => ['type' => 'varchar', 'constraint' => 225, 'default' => 'Indonesia'],
            'pnddkn_akhir_wali' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'job_wali' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'gaji_wali' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'almt_wali' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'tlp_wali' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'status_dgn_sswa' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],

            'slug' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],

            'status' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'scan_akta' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'scan_kk' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'scan_lainnya' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'updated_at' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'updated_by' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],

        ];
        $this->forge->addField($fields);
        $this->forge->addKey('id_siswa_smp', true);
        $this->forge->createTable('siswa_smp', true);
    }

    public function down()
    {
        // drop constraints first to prevent errors
        if ($this->db->DBDriver != 'SQLite3') // @phpstan-ignore-line
        {
            // $this->forge->dropForeignKey('siswa_6thn', 'siswa_user_id_foreign');
        }

        $this->forge->dropTable('siswa_smp', true);
    }
}
