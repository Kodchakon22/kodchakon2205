<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<title>SUB</title>
<head>
<style>
    body {
        background-color:#FFCCFF
    }
</style> 
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- Top header -->
  <header class="w3-container w3-xlarge">
  <center><p class="w3-left"><h1>ประวัติส่วนตัว</h1></p></center>
    <p class="w3-right">
      <i class="fa fa-shopping-cart w3-margin-right"></i>
      <i class="fa fa-search"></i>
    </p>
  </header>

  <!-- Image header -->
  <div class="w3-display-container w3-container">
    <center><img src="https://scontent.fphs1-1.fna.fbcdn.net/v/t39.30808-6/181676337_1796509103892941_8235881216237077214_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=z7SNq_TzqU4AX_1Dg2q&_nc_ht=scontent.fphs1-1.fna&oh=09c7bbd56e87dcfef4f2ded8ef7dbd18&oe=61614BD5" alt="Ocean II" class="w3-image w3-margin-top" width="500" height="550"></center>
    <center><br><h1>ประวัติ</h1></br></center>
    <center><br><a>ชื่อ : กชกร สุวรรณเทา     ชื่อเล่น : ทรัพย์ </a></br></center>
    <center><br><a>ว/ด/ป : 22/05/43</a></br></center>
    <center><br><a>เชื้อชาตื : ไทย   สัญชาติ : ไทย</a></br></center>
    <center><br><a>ศาสนา  :  พุทธ</a></br></center>
    <center><br><a>ที่อยู่ : 33/2 หมู่ 1 ต.ประดาง อ.วังเจ้า จ.ตาก</a></br></center>
    <center><br><a>เบอร์โทรติดต่อ : 03639437392</a></br></center>
    <center><br><a>อีเมล์ : kodchakonsub22052543@gmail.com</a></br></center>
    <center><br><a href="https://www.facebook.com/" target="_www">ไปหน้าเฟสบุ๊ค</a></br></center>
  
  <!-- Subscribe section -->
  <div class="w3-container w3-gray w3-padding-32">
    <center><h1>กิจกรรมเวลาว่าง</h1></center>
    <center><img src="https://www.matichon.co.th/wp-content/uploads/2018/10/instagram-1581266_960_720.jpg" alt="Ocean II" class="w3-image w3-margin-top" width="300" height="350"></center>
    <center><br><a>เล่น Instagram</a></br></center>
    <center><img src="https://play-lh.googleusercontent.com/soW5gzaeWu3oSWJB0dEge4R3EfTy9ae8z3poF0PVXTsKy2D3T3NyOBosAOCAmDeYIASb=s180-rw" alt="Ocean II" class="w3-image w3-margin-top" width="300" height="350"></center>
    <center><br><a>อ่านนิยาย</a></br></center>
    <center><br><a href="https://www.instagram.com/sssub2x0x/" target="_www">ไปหน้าไอจี</a></br></center>
    <center><h1>อาหารที่ชอบ</h1></center>
    <center><img src="https://img.wongnai.com/p/984x0/2020/03/05/06e9743cb6e542388866ae237f29b8ad.jpg" alt="Ocean II" class="w3-image w3-margin-top" width="550" height="350"></center>
    <center><br><a>ส้มตำ</a></br></center>
    <center><br>วิธีทำส้มตำ</br></center>
    <center><br><iframe width="560" height="315" src="https://www.youtube.com/embed/Nav4DmuCso0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></br></center>
    <center><h1>นักร้อง-ไอดอลที่ชื่นชอบ</h1></center>
    <center><img src="https://s.isanook.com/jo/0/rp/r/w728/ya0xa0m1w0/aHR0cHM6Ly9zLmlzYW5vb2suY29tL2pvLzAvdWQvNDg1LzI0MjY3MjcvbmN0MjAyMC1yZXNvbmFuY2UuanBn.jpg" alt="Ocean II" class="w3-image w3-margin-top" width="550" height="350"></center>
    <center><br><a>NCT2020</a></br></center>
    <center><br>วีดีโอเพลง</br></center>
    <center><br><iframe width="560" height="315" src="https://www.youtube.com/embed/0IpbvXVbBYA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></br></center>
  </div>
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