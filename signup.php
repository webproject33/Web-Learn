<!DOCTYPE html>
<html>
<head>
    <title>تعليم</title>
    <meta name="supported-color-schemes">
    <link rel="stylesheet" media="all" href="assets/style.css" />
    

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="arabic hide-page-footer" >

    
  


<div id="wrapper">
  
<div id="home">
  
  <div style="height:260px !important; " class="header-section">

  <div class="header-section-container section-container">

    

    <div class="navigation-container">
      <div><a class="navigation-btn navigation-btn-main btn-light-orange navigation-signup" href="signup.php">تسجيل</a></div>
      <div><a class="navigation-btn navigation-btn-simple navigation-signin" href="index.php">الرئيسية</a></div>
      <div><a class="navigation-btn navigation-btn-simple navigation-signin" href="signin.php">دخول</a></div>
      <div><a class="navigation-btn navigation-btn-simple navigation-signin" href="lessons.php">المقررات الدراسية</a></div>
      <div><a class="navigation-btn navigation-btn-simple navigation-signin" href="subjects.php">المواد</a></div>
      
           
    </div>

    

  </div>


</div>


<div class="monster-box signup-container">  
  <div class="monster"><img src="assets/website/shared/monster-bfdec53dd35da925fee420fc27b30ba5a939be8d20b0e3b6a3cd46bf2e537ad4.png" /></div>
  <div class="monster-box-logo logo logo-medium"><div>ت</div><div>ع</div><div>ل</div><div>م</div></div>
  <div class="monster-box-message">مرحبا في ت ع ل م! الرجاء إنشاء حساب لاستخدام المنصة.</div>
  
  
  <div class="form-body">

    <form enctype="multipart/form-data" class="form-horizontal" id="new_user" action="insert_user.php" accept-charset="UTF-8" method="post" novalidate>
    <!-- <form enctype="multipart/form-data" action="process.php" method="post" novalidate> -->

      <input id="k" name="k" type="hidden" value="">
      <input id="t" name="t" type="hidden" value="">
      
      <div class="form-group">
        <label class="control-label" for="user_name">اسم المستخدم</label>
        <div class="form-control-div">
          <input class="form-control" id="inputUserName" placeholder="ادخال اسم المستخدم" data-required="" data-alphanumeric="" data-username="" data-min="4" type="text" name="user[name]" />
        </div>
      </div>

      <div class="form-group">
        <label class="control-label" for="user_email">البريد الالكتروني</label>
        <div class="form-control-div">
          <input class="form-control" id="inputEmail" placeholder="ادخال البريد الالكتروني" data-required="" data-email="" data-unique-email="" type="email" name="user[email]" />
        </div>
      </div>

      <div class="form-group">
        <label class="control-label" for="user_password">كلمة السر</label>
        <div class="form-control-div">
          <input class="form-control" id="inputPassword1" placeholder="ادخال كلمة السر" data-required="" data-min="4" data-alphanumeric="" type="password" name="user[password]" />
        </div>
      </div>
      
      
      <div class="form-group">
        <label class="control-label" for="is_teacher"></label>
        
        <div class="form-control-div">                
          <div class="form-checkbox">
            <label>
              <input id="is-teacher" name="user[signup_is_teacher]" type="checkbox">
              <span>تذكر كلمة المرور </span>
            </label>
          </div>
        </div>
      </div>
      
      
      
      <div class="form-group no-label">
        <div class="form-control-div">
          <div>
            <input type="submit" name="commit" value="تسجيل" class="btn-row btn-orange btn signup-btn" data-disable-with="تسجيل" />
            <div class="ajax-spinner "><img src="assets/website/shared/ajax-0fd1703f7159f383963208f81938eff8dc38aa39d64d3edd2acbf171bf4ec179.gif" /></div>

          </div>
          <div class="comments-div">
            <div class="signin-comment">            
              <a href="signin.php">هل لديك حساب؟ دخول إلى حسابي</a>
            </div>
          </div>
        </div>
      </div>
    </form>    
  </div>
  
  
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




