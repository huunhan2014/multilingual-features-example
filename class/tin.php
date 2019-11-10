<?php
require_once "goc.php";
class tin extends goc
{
    function ListLoaiTin()
    {
        $sql = "SELECT *
         FROM `loaitin`
         WHERE idLT in ( SELECT idLT from tin)";
        $kq = $this->db->query($sql);
        if (!$kq) die($this->db->error);
        return $kq;
    } // end function ListLoaiTin

    function TinTheoLoaiTin($id)
    {
        $sql = "SELECT *
         FROM `tin`
         WHERE idLT = $id ORDER BY SoLanXem DESC 
         LIMIT 0,6";
        $kq = $this->db->query($sql);
        if (!$kq) die($this->db->error);
        return $kq;
    }
}
