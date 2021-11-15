<?php
    if(isset($_GET['xem'])){
        $tam=$_GET['xem'];
    }
    else {
        $tam = '';
    }
    if($tam=='danhmuc'){
        include('danhmuc.php');
    }    
    else if($tam=='chitietsp'){
        include('chitietSP.php');
    }
    else if($tam=='allSp'){
        include('allSP.php');
    }
    else if($tam=='Nhomhanghoa'){
        include('loaiSP.php');
    }
    else if($tam=='DanhMuc'){
        include('danhMucSP.php');
    }
    else if ($tam=='giohang') {
        include('Giohang.php');
    }
    else if($tam=='chitietgiohang'){
        include('chitietgiohang.php');
    }
    else if($tam=='lienhe'){
        include('Lienhe.php');
    }
    else if(isset($_POST['submit'])){
        include('chucnang/timKiemSP.php');
    }
    else {
        include('content/trangchu.php');
    }
?>