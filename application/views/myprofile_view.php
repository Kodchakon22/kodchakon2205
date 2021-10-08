<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<title>KODCHAKON</title>
<head>
<style>
    body {
        background-color:#CCFFCC
    }
</style> 
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>
<body class="w3-content" style="max-width:1200px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide"><b>KODCHAKON SUWANTHAO</b></h3>
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    <a href="<?php echo site_url('Mysub/link2');?>" target="_blank">Perfromance</a><br></br>
    <a href="<?php echo site_url('Mysub/link5');?>" target="_blank">Activity</a><br></br>
    <a href="<?php echo site_url('Mysub/link3');?>" target="_blank">Travel</a><br></br>
    <a href="<?php echo site_url('Mysub/link4');?>" target="_blank">My Dream Job</a><br></br>
  </div>
</nav>


  <!-- Image header -->
  <div class="w3-display-container w3-container">
  <center><h1>My Profile</h1></center>
  <center><img src="https://scontent.fphs1-1.fna.fbcdn.net/v/t39.30808-6/181676337_1796509103892941_8235881216237077214_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=GGSuerqxm9YAX_ILYt2&_nc_ht=scontent.fphs1-1.fna&oh=c2e3aa334cb445e11efa64a0a3958138&oe=61654055" alt="Ocean II" class="w3-image w3-margin-top" width="500" height="350"></center><br></br>
  <center><h3>ประวัติส่วนตัว</h3></center>
    <center><img src="https://scontent.fphs1-1.fna.fbcdn.net/v/t39.30808-6/238698753_1823912021152649_4111099426070283596_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=e3f864&_nc_ohc=2IgjcNd4TSQAX9dd5Td&_nc_ht=scontent.fphs1-1.fna&oh=38fb06fdd3d489885f57168ceb7ac016&oe=6162B060" alt="Ocean II" class="w3-image w3-margin-top" width="500" height="350"></center><br></br>
    <center><a>ชื่อ : กชกร สุวรรณเทา</a></center>
    <center><br><a>ชื่อเล่น : ทรัพย์</a></br></center>
    <center><br><a>ว/ด/ป : 22/05/43</a></br></center>
    <center><br><a>เชื้อชาตื : ไทย   สัญชาติ : ไทย</a></br></center>
    <center><br><a>ศาสนา  :  พุทธ</a></br></center>
    <center><br><a>ที่อยู่ : 33/2 หมู่ 1 ต.ประดาง อ.วังเจ้า จ.ตาก</a></br></center>
    <center><br><a>เบอร์โทรติดต่อ : 03639437392</a></br></center>
    <center><br><a>อีเมล์ : kodchakonsub22052543@gmail.com</a></br></center>
    <center><br><a href="https://www.facebook.com/" target="_www">ไปหน้าเฟสบุ๊ค</a></br></center>
  </div>

  <div class="w3-container w3-text-grey" id="jeans">
    <p>list</p>
  </div>
  <!-- Subscribe section -->
  <div class="w3-container w3-gray w3-padding-32">
    <center><br><h3>ประวัติการศึกษา</h3></br></center>
    <center><img src="https://map.longdo.com/files/images/2018/05/23/phpKgZgMm" alt="Ocean II" class="w3-image w3-margin-top" width="500" height="350"></center>
    <center><br><a>ระดับมัธยมตอนต้น-มัธยมปลาย</a></br></center>
    <center><a>โรงเรียน ผดุงปัญญา</a></center>
    <center><a href="http://www.phadung.ac.th/mainpage" target="_www">เว็ปโรงเรียน</a></center>
    <center><br><a>ระดับปริญญาตรี</a></br></center>
    <center><img src="https://webs.rmutl.ac.th/assets/upload/images/2017/05/page_2017051716231038854.jpg" alt="Ocean II" class="w3-image w3-margin-top" width="500" height="350"></center>
    <center><br><a>มหาวิทยาลัยเทคโนโลยีราชมงคลล้านนา ตาก</a></br></center>
    <center><br><a href="https://tak.rmutl.ac.th/" target="_www">เว็ปมหาลัย</a></br></center><br></br>
    <center><h3>กิจกรรมเวลาว่าง</h3></center>
    <center><img src="https://www.matichon.co.th/wp-content/uploads/2018/10/instagram-1581266_960_720.jpg" alt="Ocean II" class="w3-image w3-margin-top" width="300" height="350"></center>
    <center><br><a>เล่น Instagram</a></br></center>
    <center><br><a href="https://www.instagram.com/sssub2x0x/" target="_www">ไปหน้าไอจี</a></br></center>
    <center><img src="https://play-lh.googleusercontent.com/soW5gzaeWu3oSWJB0dEge4R3EfTy9ae8z3poF0PVXTsKy2D3T3NyOBosAOCAmDeYIASb=s180-rw" alt="Ocean II" class="w3-image w3-margin-top" width="300" height="350"></center>
    <center><br><a>อ่านนิยาย</a></br></center><br></br>
    <center><h3>อาหารที่ชอบ</h3></center>
    <center><img src="https://img.wongnai.com/p/984x0/2020/03/05/06e9743cb6e542388866ae237f29b8ad.jpg" alt="Ocean II" class="w3-image w3-margin-top" width="550" height="350"></center>
    <center><br><a>ส้มตำ</a></br></center>
    <center><br>วิธีทำส้มตำ</br></center>
    <center><br><iframe width="560" height="315" src="https://www.youtube.com/embed/Nav4DmuCso0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></br></center><br></br>
    <center><h3>นักร้อง-ไอดอลที่ชื่นชอบ</h3></center>
    <center><img src="https://s.isanook.com/jo/0/rp/r/w728/ya0xa0m1w0/aHR0cHM6Ly9zLmlzYW5vb2suY29tL2pvLzAvdWQvNDg1LzI0MjY3MjcvbmN0MjAyMC1yZXNvbmFuY2UuanBn.jpg" alt="Ocean II" class="w3-image w3-margin-top" width="550" height="350"></center>
    <center><br><a>NCT2020</a></br></center>
    <center><br>วีดีโอเพลง</br></center>
    <center><br><iframe width="560" height="315" src="https://www.youtube.com/embed/0IpbvXVbBYA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></br></center><br></br>
    <center><img src="https://p2.pstatp.com/origin/pgc-image/ef705ad8240749eeb912821db231f93a.jpeg" alt="Ocean II" class="w3-image w3-margin-top" width="550" height="350"></center>
    <center><br><a>INTO1</a></br></center>
    <center><br>วีดีโอเพลง</br></center>
    <center><br><iframe width="560" height="315" src="https://www.youtube.com/embed/H4-xdG0Afrs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></br></center>
  </div>
  </footer>

<script>
// Accordion 
function myAccFunc() {
  var x = document.getElementById("demoAcc");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

// Click on the "Jeans" link on page load to open the accordion for demo purposes
document.getElementById("myBtn").click();


// Open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>