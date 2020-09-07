<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MDashboard extends CI_Model
{
    public function getAllDiskusi()
    {
        $data = $this->db->query('
            SELECT FullName, PhotoProfile, Judul, BeginDate, DiskusiID, NamaKategori, Jawaban
            FROM 
            (
                SELECT u.FullName, u.PhotoProfile, d.Judul, d.BeginDate, d.DiskusiID, k.NamaKategori
                FROM `common.user` as u, `common.diskusi` as d, `common.kategori` as k
                WHERE 
                    u.UserID = d.UserID AND
                    k.KategoriID = d.KategoriID AND
                    u.EndDate > CURDATE() AND
                    d.EndDate > CURDATE() AND
                    k.EndDate > CURDATE()
                GROUP BY d.DiskusiID
            ) AS A LEFT JOIN (
                SELECT j.DiskusiID as TampID, COUNT(j.JawabanID)  as Jawaban
                FROM `relation.jawaban` as j
                WHERE 
                    j.EndDate > CURDATE()
                GROUP BY j.DiskusiID
            ) AS B ON A.DiskusiID = B.TampID');
        return $data->result_array();
    }

    public function getAllKategori()
    {
        $data = $this->db->query('
            SELECT KategoriID, NamaKategori
            FROM `common.kategori` as k
            WHERE k.EndDate > CURDATE()');
        return $data->result_array();
    }

    public function getByIdDiskusi($data)
    {
        $data = $this->db->query('
            SELECT FullName, PhotoProfile, Judul, Deskripsi, BeginDate, DiskusiID, NamaKategori, Jawaban
            FROM 
            (
                SELECT u.FullName, u.PhotoProfile, d.Judul, d.Deskripsi, d.BeginDate, d.DiskusiID, k.NamaKategori
                FROM `common.user` as u, `common.diskusi` as d, `common.kategori` as k
                WHERE 
                    u.UserID = d.UserID AND
                    k.KategoriID = d.KategoriID AND
                    u.EndDate > CURDATE() AND
                    d.EndDate > CURDATE() AND
                    k.EndDate > CURDATE() AND
                    d.DiskusiID = '.$data.'
                GROUP BY d.DiskusiID
            ) AS A LEFT JOIN (
                SELECT j.DiskusiID as TampID, COUNT(j.JawabanID)  as Jawaban
                FROM `relation.jawaban` as j
                WHERE 
                    j.EndDate > CURDATE()
                GROUP BY j.DiskusiID
            ) AS B ON A.DiskusiID = B.TampID');
        return $data->result_array();
    }

    public function getByDiskusiIdJawaban($data)
    {
        $data = $this->db->query('
            SELECT FullName, PhotoProfile, JawabanID, Jawaban, BeginDate, Balasan
            FROM 
            (
                SELECT u.FullName, u.PhotoProfile, j.JawabanID, j.Jawaban, j.BeginDate
                FROM `common.user` as u, `common.diskusi` as d, `relation.jawaban` as j
                WHERE 
                    u.UserID = j.UserID AND
                    j.DiskusiID = d.DiskusiID AND
                    u.EndDate > CURDATE() AND
                    d.EndDate > CURDATE() AND
                    j.EndDate > CURDATE() AND
                    j.DiskusiID = '.$data.'
                GROUP BY j.JawabanID
            ) AS A LEFT JOIN (
                SELECT b.JawabanID as TampID, COUNT(b.BalasID)  as Balasan
                FROM `relation.balasan` as b
                WHERE 
                    b.EndDate > CURDATE()
                GROUP BY b.JawabanID
            ) AS B ON A.JawabanID = B.TampID');
        return $data->result_array();
    }

    public function getByJawabanIdBalasan($JawabanID)
    {
        $data = $this->db->query('
                SELECT u.FullName, u.PhotoProfile, b.BalasID, b.Balasan, b.BeginDate, b.JawabanID
                FROM `common.user` as u, `relation.jawaban` as j, `relation.balasan` as b
                WHERE 
                    u.UserID = b.UserID AND
                    j.JawabanID = b.JawabanID AND
                    u.EndDate > CURDATE() AND
                    j.EndDate > CURDATE() AND
                    b.EndDate > CURDATE() AND
                    b.JawabanID = '.$JawabanID);
        return $data->result_array();
    }
}