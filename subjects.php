<!DOCTYPE html>
<html>

<!-- Mirrored from learn/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Dec 2023 19:04:46 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <title>تعليم</title>
    <meta name="supported-color-schemes">
    <link rel="stylesheet" media="all" href="assets/style.css" />
    

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="arabic hide-page-footer" >

    
  <div id="live"></div>
  


<div id="wrapper">
  
<div id="home">
  
  <div class="header-section">

  <div class="header-section-container section-container">

    <div class="logo-container">
      <div class="logo-text"><div class="logo-box-logo logo logo-large"><div>ت</div><div>ع</div><div>ل</div><div>م</div></div></div>
      <div class="logo-description">
        <span class="first-word">تعليم</span>
        <span class="second-word">فعال</span>
        <span class="third-word">للأطفال</span>
      </div>
    </div>

    <div class="navigation-container">
      <div><a class="navigation-btn navigation-btn-main btn-light-orange navigation-signup" href="signup.php">تسجيل</a></div>
      <div><a class="navigation-btn navigation-btn-simple navigation-signin" href="index.php">الرئيسية</a></div>
      <div><a class="navigation-btn navigation-btn-simple navigation-signin" href="signin.php">دخول</a></div>
      <div><a class="navigation-btn navigation-btn-simple navigation-signin" href="lessons.php">المقررات الدراسية</a></div>
      <div><a class="navigation-btn navigation-btn-simple navigation-signin" href="subjects.php">المواد</a></div>
      
           
    </div>

    <div class="enter-btn-container">
      <div class="enter-btn-arrow"><img src="assets/website/home/home-arrow-80f549a3d9b27030b667c035df6b1dd5cfb5f87a8aedde8d3ddcc7cc7b920a24.png" /></div>
      <div class="enter-btn-description">المتعة والمرح في التعلم معنا</div>
      <a href="lessons.html" class="large-btn btn-light-orange">هَيَّا نَتَعَلَّم</a>
    </div>

    <div class="header-section-monster"></div>
    <div class="header-section-ladder"></div>

  </div>

  <div class="header-section-clouds"></div>
  <div class="thick-separator"></div>

</div>

  <div class="services-section">

  <div class="services-section-container section-container">

    <div class="services-section-title">المواد المتوفرة </div>
    <div class="services-section-description">المواد المتوفرة </div>

    <div class="services-section-cards-container"> 
      
      <?php
        $servername = "localhost";
        $username = "root";
        $password = "admin";
        $dbname = "learn";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM subjects";
        $result = $conn->query($sql);

        $count = 0;
        while ($row = $result->fetch_assoc()) {
          echo '<a class="services-section-card card-games" href="">';
          if (!empty($row['image'])) {
              $width = 200;
              $height = 150;
  
              // Display the image with specified dimensions
              echo '<div class=""><img src="' . $row['image'] . '" width="' . $width . '" height="' . $height . '" alt="Course Image"></div>';
          }
          echo '<div class="card-title">' . $row['title'] . ' </div>';
          echo '<div class="card-description">' . $row['description'] . '</div>';
          echo '<div class="card-description"> عدد الدروس:' . $row['lessons_number'] . '</div>';
          
  
          echo '</a>';
        }

        $conn->close();
      ?>
    </div>
    
    
  </div>

  <div class="thin-separator"></div>
  
</div>

  <div class="schools-section">

  
  <div class="thin-separator"></div>
  
</div>

  <div class="footer-section">

  <div class="footer-section-container section-container">

    <div class="footer-section-logo-container">
    <div class="logo-text"><div class="logo-box-logo logo logo-large"><div>ت</div><div>ع</div><div>ل</div><div>م</div></div></div>
      <div class="footer-logo-description">نشجع الأطفال على <img class="footer-heart" src="assets/website/shared/footer-heart-556b260b97a74aef43bc37ac30aa9dca3eafcd36c158f5e284ee68667ed34b3c.png" /> التعلم</div>
    </div>
    
    <div class="footer-section-columns-container">      
      
      <div class="footer-section-link-column bordered">
        <div class="group-label">هيا نتعلم</div>
        <div><a href="lessons.php">المقررات الدراسية</a></div>
        <div><a href="subjects.php">المواد</a></div>      
      </div>

      
      
      <div class="footer-section-portrait-column">

        <div class="schools-portrait-container">
          <img src="assets/website/home/home-portrait-ef9de5b0586057d2c3f65f09957e0e83d4105af10e797c58ce42dcab533e0cc1.png" />
          
        </div>
        
      </div>
      
      <div class="footer-section-link-column bordered">

        <div class="group-label">حسابات</div>
        <div><a href="signup.php">تسجيل</a></div>
        <div><a href="signin.php">دخول</a></div>
        
        
      </div>

      <div class="footer-section-link-column">
        
        
        
      </div>
      
    </div>
    
    
  </div>
  
</div>

  
  
</div>

  <div class="page-footer no-print">
  <div class="section-separator"></div>  
  <div class="page-footer-container section-container">
    <div class="page-footer-logo-container">
      <div class="footer-logo"><img src="assets/website/home/home-logo-lg-921aabde32feb05a34eea8216191474ff6ed3506bfcbc819e57c46292d604dc5.png" /></div>
      <div class="footer-logo-description">نشجع الأطفال على <img class="footer-heart" src="assets/website/shared/footer-heart-556b260b97a74aef43bc37ac30aa9dca3eafcd36c158f5e284ee68667ed34b3c.png" /> التعلم</div>
    </div>    
  </div>
  
</div>

</div>

<script src="assets/application-00efce41361fb1e26a7b79839e10f95f842d1d598e7577cd799b2a1777970601.js"></script>

</body>

</html>




