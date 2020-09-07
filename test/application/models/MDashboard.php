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
}