<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_data extends Model
{
    // Data User
    // ==========================================
    public function tampilUser()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_user');
        $builder->select('*');
        $builder->orderBy('idUser', 'DESC');
        return $builder->get()->getResultArray();
    }
    public function cekUsername($username)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_user');
        $builder->select('*');
        $builder->Where('username', $username);
        return $builder->get()->getResultArray();
    }
    public function tampilDetailUser($idUser)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_user');
        $builder->select('*');
        $builder->Where('idUser', $idUser);
        return $builder->get()->getResultArray();
    }
    // Data Pendataan
    // ==========================================
    public function tampilPendataan()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_pendataan');
        $builder->select('*');
        $builder->join('tbl_user', 'tbl_user.idUser = tbl_pendataan.user');
        $builder->join('tbl_kode_desa', 'tbl_kode_desa.idDesa = tbl_pendataan.desa');
        $builder->join('tbl_kode_kecamatan', 'tbl_kode_kecamatan.idKecamatan = tbl_pendataan.kecamatan');
        return $builder->get()->getResultArray();
    }
    public function cekDataNik($nik)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_pendataan');
        $builder->select('*');
        $builder->Where('nik', $nik);
        return $builder->get()->getResultArray();
    }
    public function jumlahData()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_pendataan');
        $builder->select('*');
        return $builder->countAllResults();
    }
    public function tampilDataByUser($user)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_pendataan');
        $builder->select('*');
        $builder->Where('user', $user);
        $builder->join('tbl_user', 'tbl_user.idUser = tbl_pendataan.user');
        $builder->join('tbl_kode_desa', 'tbl_kode_desa.idDesa = tbl_pendataan.desa');
        $builder->join('tbl_kode_kecamatan', 'tbl_kode_kecamatan.idKecamatan = tbl_pendataan.kecamatan');
        return $builder->get()->getResultArray();
    }
    // Data Desa dan Kecamatan
    // ==========================================
    public function tampilDataDesa()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_kode_desa');
        $builder->select('*');
        return $builder->get()->getResultArray();
    }
    public function tampilDataKecamatan()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_kode_kecamatan');
        $builder->select('*');
        return $builder->get()->getResultArray();
    }
}
