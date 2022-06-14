<?php
    require_once ('pdo.php');
    require_once ('loai-hang.php');

    function hang_hoa_insert($ten_hh,$hinh,$don_gia,$giam_gia,$mo_ta,$ma_loai){
        $sql = "INSERT INTO hang_hoa(ten_hh,hinh,don_gia,giam_gia,mo_ta,ma_loai) VALUES (?,?,?,?,?,?)";
        pdo_execute($sql,$ten_hh,$hinh,$don_gia,$giam_gia,$mo_ta,$ma_loai);
    }

    function hang_hoa_update($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $mo_ta){
        $sql = "UPDATE hang_hoa SET ten_hh=?, don_gia=?, giam_gia=?, hinh=?, ma_loai=?, mo_ta=? WHERE ma_hh=?";
        pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $mo_ta, $ma_hh);
        }

    function hang_hoa_delete($ma_hh){
        $sql = "DELETE FROM hang_hoa WHERE ma_hh=?";
        if(is_array($ma_hh)){
            foreach($ma_hh as $ma){
                pdo_execute($sql,$ma);
            }
        }else{
            pdo_execute($sql,$ma_hh);
        }
    }

    function hang_hoa_select_all(){
        $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh DESC";
        return pdo_query($sql);
    }

    function hang_hoa_select_all_adidas(){
        $sql = "SELECT * FROM hang_hoa JOIN loai_hang ON hang_hoa.ma_loai = loai_hang.ma_loai WHERE ten_loai='Adidas'";
        return pdo_query($sql);
    }

    function hang_hoa_select_all_pegasus(){
        $sql = "SELECT * FROM hang_hoa JOIN loai_hang ON hang_hoa.ma_loai = loai_hang.ma_loai WHERE ten_loai='Pegasus'";
        return pdo_query($sql);
    }

    function hang_hoa_select_all_price(){
        $sql = "SELECT * FROM hang_hoa ORDER BY don_gia DESC LIMIT 0,9";
        return pdo_query($sql);
    }

    function hang_hoa_select_by_id($ma_hh){
        $sql = "SELECT * FROM hang_hoa WHERE ma_hh=?";
        return pdo_query_one($sql,$ma_hh);
    }

    function hang_hoa_ban_chay(){
        $sql = "SELECT * FROM hang_hoa ORDER BY don_gia DESC LIMIT 0,6";
        return pdo_query($sql);
    }

    function hang_hoa_sale(){
        $sql = "SELECT * FROM hang_hoa ORDER BY giam_gia ASC LIMIT 0,5";
        return pdo_query($sql);
    }

    function hang_hoa_sale_9(){
        $sql = "SELECT * FROM hang_hoa ORDER BY giam_gia ASC LIMIT 0,9";
        return pdo_query($sql);
    }

    function hang_hoa_noi_bat(){
        $sql = "SELECT * FROM hang_hoa ORDER BY giam_gia DESC LIMIT 0,8";
        return pdo_query($sql);
    }

    function hang_hoa_select_by_loai($ma_loai){
        $sql = "SELECT * FROM hang_hoa WHERE ma_loai=?";
        return pdo_query($sql, $ma_loai);
    }

    function hang_hoa_select_keyword($keyword){
        $sql = "SELECT * FROM hang_hoa hh "
                . " JOIN loai_hang lo ON lo.ma_loai=hh.ma_loai "
                . " WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
        return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%');
    }


?>