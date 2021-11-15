<?php 
$select_nhom = "SELECT * FROM nhomhanghoa n
              JOIN danhmuc d
              ON d.MaDanhMuc =n.MaDanhMuc 
              WHERE MaNhom = '$_GET[Manhom]'";
$query_nhom = mysqli_query($connect,$select_nhom);
$hienthi_nhom=mysqli_fetch_array($query_nhom);
?>
<div class="product">   
  <div class="top_product">
    <div class="left">
      <a href="index.php?xem=DanhMuc&MaDanhMuc=<?php echo $hienthi_nhom['MaDanhMuc'] ?>">
        <?php 
        echo $hienthi_nhom['TenDanhMuc'];
        ?></a>
      </div>    
      <div class="right">
          <a href="#">
            <?php echo $hienthi_nhom ['TenNhom'] ?></a>            
        </div>
      </div>
      <div class="main_product">
        <?php 
        $select_SP = "SELECT * FROM hanghoa h JOIN nhomhanghoa n
        on h.MaNhom = n.MaNhom
        WHERE n.MaNhom = '$_GET[Manhom]'";
        $query_SP = mysqli_query($connect,$select_SP);
        ?>
        <?php
        while($hienthi_SP = mysqli_fetch_array($query_SP)){
         ?>
         <?php if($hienthi_SP['SoLuongHang']>0){ ?>
           <div class="sp" id="active">
            <a href="index.php?xem=chitietsp&MSHH=<?php echo $hienthi_SP['MSHH']?>">
              <img src="images/SanPham/<?php echo $hienthi_SP ['Hinh'] ?>" >
              <h3 style="text-align:center;font-size: 24px"><?php echo $hienthi_SP['TenHH'] ?></h3>

              <h4 style="text-align:center;color:red;font-size:18px;padding-top:5px;bottom:0px">
                <?php echo number_format($hienthi_SP['Gia'],0,",",".")?>đ</h4>
              </a>
              <div class="action">
                    <a href="index.php?xem=chitietsp&MSHH=<?php echo $hienthi_SP['MSHH'] ?>">
                        <input type="submit" id="view" value="Xem">
                    </a>
                     <a href="index.php?xem=giohang&add=<?php echo $hienthi_SP['MSHH'] ?>">
                        <input type="submit" id="add_cart" name="Add_cart" value="Thêm">
                    </a>
                </div>
            </div>
          <?php } ?>
        <?php } ?>
      </div>
    </div>
    <style>
      .product .main_product .sp .action{
  width: 51%;
    margin-left: auto;
    margin-right: auto;
    display: block;
}
.product .main_product .sp .action a input{
  width: 50px;
    background: #57e257;
    color: white;
    font-weight: 500;
    border: none;
    border-radius: 5px;
}
.product .main_product .sp .action a input#add_cart{
  width: 80px;
    background: #57e257;
    color: white;
    font-weight: 500;
    border: none;
    border-radius: 5px;
}
.product .main_product .sp .action a input:hover{
  color: blue;
}
.product .main_product .sp .action a input#add_cart:hover{
  color: blue;
}
    </style>