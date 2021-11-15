<div class="banner">
  <div id="top-sp">
    <div class="top">
    <?php $select="SELECT * FROM hanghoa h JOIN nhomhanghoa n 
                    on h.MaNhom = n.MaNhom
                    WHERE h.DacBiet=1 order by rand() limit 4";
     $SanPham_dacbiet = mysqli_query($connect, $select);
    ?>
    <?php 
 while ($sp_db=mysqli_fetch_array($SanPham_dacbiet) ): ?>
      <div class="sp">
        <div class="left">
          <a href="index.php?xem=chitietsp&MSHH=<?php echo $sp_db['MSHH']?>">
            <img src="images/SanPham/<?php echo $sp_db['Hinh'] ?>">
          </a>          
        </div>
        <div class="right">
          <a id="brand" href="index.php?xem=chitietsp&MSHH=<?php echo $sp_db['MSHH']?>">
            <?php echo $sp_db['TenNhom'] ?></a>
          <a href="index.php?xem=chitietsp&MSHH=<?php echo $sp_db['MSHH']?>">
            <?php echo $sp_db['TenHH'] ?></a>
          <a id="tien" href="index.php?xem=chitietsp&MSHH=<?php echo $sp_db['MSHH']?>">
            <?php echo number_format($sp_db['Gia'],0,",",".") ?>đ</a>
          <a href="index.php?xem=giohang&add=<?php echo $sp_db['MSHH']  ?>">
            <input type="button" value="Thêm giỏ hàng">
          </a>
        </div>
      </div>
<?php endwhile; ?>
    </div>

  </div>
  <div class="slide">
    <div class="dieuhuong">
      <i class="fa fa-chevron-circle-left" onclick="Back();"></i>
      <i class="fa fa-chevron-circle-right" onclick="Next();"></i>
    </div>
    <div class="chuyen-slide">
     <img src="images/qc1.jpg" alt=""> 
     <img src="images/qc2.png" alt=""> 
     <img src="images/qc3.jpg" alt="">  
   </div>
 </div>
</div>
<script>
  var KichThuoc = document.getElementsByClassName("slide")[0].clientWidth;
// alert(KichThuoc);
var ChuyenSlide = document.getElementsByClassName("chuyen-slide")[0];
var Img = ChuyenSlide.getElementsByTagName("img");
var Max = KichThuoc * Img.length;
Max -= KichThuoc;
var Chuyen = 0;
function Next(){
  if(Chuyen < Max) Chuyen += KichThuoc;
  else Chuyen = 0;
  ChuyenSlide.style.marginLeft = '-' + Chuyen + 'px';
}

function Back(){
  if(Chuyen == 0) Chuyen = Max;
  else Chuyen -= KichThuoc;
  ChuyenSlide.style.marginLeft = '-' + Chuyen + 'px';
}
setInterval(function(){
  Next();

},1500);
</script>