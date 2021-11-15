<div class="content">
  <?php 
  $select= "select * from danhmuc";
  $SanPham_danhmuc = mysqli_query($connect, $select);
  ?>
  <?php 
  $i=1;
  while ($sp_danhmuc=mysqli_fetch_array($SanPham_danhmuc) ){
    ?>
    <div class="product">   
      <div class="top_product">
        <div class="left">
          <a href="index.php?xem=DanhMuc&MaDanhMuc=<?php echo $sp_danhmuc['MaDanhMuc']?>">
            <?php 
            echo $sp_danhmuc['TenDanhMuc']
            ?></a>
          </div>    
          <div class="right">
            <?php 
            $select_nhomhanghoa = "SELECT * FROM nhomhanghoa WHERE MaDanhMuc=$i ";
            $SanPham_nhomhanghoa = mysqli_query($connect,$select_nhomhanghoa);
            ?>
            <?php 
            while($sp_nhomhanghoa = mysqli_fetch_array($SanPham_nhomhanghoa)) {
              ?>
              <a href="index.php?xem=Nhomhanghoa&Manhom=<?php echo $sp_nhomhanghoa['MaNhom'] ?>">
                <?php echo $sp_nhomhanghoa ['TenNhom'] ?></a>
            <?php } ?>            
          </div>

        </div>
        <div class="main_product">
          <?php 
          $select_sanpham = 
          "SELECT * FROM hanghoa h
          JOIN nhomhanghoa n
          ON h.MaNhom = n.MaNhom
          AND n.MaDanhMuc = $i where not DacBiet='1' order by rand() LIMIT 4";
          $query_sanpham = mysqli_query($connect,$select_sanpham);
          ?>
          <?php
          while($hienthi_sanpham = mysqli_fetch_array($query_sanpham)){

           ?>
           <?php if($hienthi_sanpham['SoLuongHang']>0){ ?>
               <div class="sp" id="active">
                <a href="index.php?xem=chitietsp&MSHH=<?php echo $hienthi_sanpham['MSHH']?>">
                  <img src="images/SanPham/<?php echo $hienthi_sanpham ['Hinh'] ?>" >
                  <h3 style="text-align:center;font-size: 24px"><?php echo $hienthi_sanpham['TenHH'] ?></h3>
                  <h4 style="text-align:center;color:red;font-size:18px;padding-top:5px;bottom:0px">
                    <?php echo number_format($hienthi_sanpham['Gia'],0,",",".")?>đ
                  </h4>
                </a>
                  <div class="action">
                      <a href="index.php?xem=chitietsp&MSHH=<?php echo $hienthi_sanpham['MSHH'] ?>">
                          <input type="submit" id="view" value="Xem">
                      </a>
                       <a href="index.php?xem=giohang&add=<?php echo $hienthi_sanpham['MSHH'] ?>">
                          <input type="submit" id="add_cart" name="Add_cart" value="Thêm">
                      </a>
                  </div>
                </div>
              <?php } ?>
          <?php } ?>

        </div>
      </div>
      <?php $i++; } ?>
    </div>

  
