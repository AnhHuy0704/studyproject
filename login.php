<?php
    SESSION_START();
    $server="localhost";
    $username="root";
    $password="";
    $database="alibaba";
    $login_name="";
    $login_password="";
    $conn=mysqli_connect("$server","$username","$password","$database");
    if(!$conn){
        die("failed".mysqli_connect_error());
    }
    if(isset($_COOKIE['stay_in'])){
      
    }
    $l1="MARCH EXPO";
    $l2="ANUAL B2B"."<br>"."NEW TRENDS";
    $l3="Starting March 1,2023 PT";
    $l4="See What's coming";
    $l5="Accout:";
    $l6="Login name";
    $l7="Password";
    $l8="Stay signed in";
    $l9="Sign in";
    $l10="Mobile number sign in";  
    $l11="Join for free";
    $l12="Sign in with";
    $l13="Forgot Password";
    $l14="Password:";
    $l15="Scan the QR code with the Alibaba.com app to sign in";
    $l16="Please complete all information";
    if(isset($_GET['register_language'])&&$_GET['register_language']=="vie"){
        $l1="THAM GIA TRIỂN LÃM";
        $l2="B2B THƯỜNG NIÊN"."<br>"."XU HƯỚNG MỚI";
        $l3="Bắt đầu từ ngày 1 tháng 3 năm 2023 theo giờ Thái Bình Dương";
        $l4="Điều gì sắp xảy ra";
        $l5="Tài khoản:";
        $l6="Tên đăng nhập";
        $l7="Mật khẩu";
        $l8="Ghi nhớ";
        $l9="Đăng nhập";
        $l10="Đăng nhập bằng điện thoại";
        $l11="Tham gia miễn phí";
        $l12="Đăng nhập bằng";
        $l13="Quên mật khẩu";
        $l14="Mật khẩu:";
        $l16="Vui lòng điền đầy đủ";
    }   
    if(isset($_POST['login_submit'])){
        if(isset($_POST['login_account'])&&$_POST['login_account']!=""&&
        isset($_POST['login_password'])&&$_POST['login_password']!=""){
              
               if(isset($_POST['login_stay_in'])){
                    setcookie("stay_in","1",time()+3600,"/");
               }
               $login_name=$_POST['login_account'];
               $login_password=$_POST['login_password'];
               $sql_select_data="select * from account where login_name='$login_name'";
               $_SESSION['login1']=$login_name;
               $login_result=mysqli_query($conn,$sql_select_data);
              
               $count=mysqli_num_rows($login_result);
               
              
               if($count!=0){
               if($row=mysqli_fetch_assoc($login_result)){
                    
                          
                             
                             if(password_verify($login_password,$row['password_user']))
                                {
                                    $_SESSION['user_id']=$row['id'];
                                    $_SESSION['login']=$row['full_name'];
                                    header("location:index.php");
                                }
                              
                    }
                }
                
                
      
    }   
    }
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>login</title>
        <link rel="stylesheet" href="css_file.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
        <script src="slide.js"></script>
    </head>
    <body style="background-color:white;padding:0;">
    <div id="register-logo">
            <img id="logoLogin" src="image/logo.png">
        </div>
        <form id="register-language" action="" method="GET">
            <select   class="register-language" name="register_language"  onchange="this.form.submit()">
                <option value="" disabled selected>--Language--</option>
                <option value="english">English</option>
                <option value="vie">Vietnam</option>
            </select> 
        </form>
        <div id="login_bg">
            <div class="bg_1">
                <p class="login-text-1"><?=$l1?></p>
                <p class="login-text-2"><?=$l2?></p>
                <p class="login-text-3"><?=$l3?></p>
                <input class="login-btn-1"type="button" value="<?=$l4?>">
            </div>
            <div class="bg_2">
                <form style="position:relative;z-index:2;"id="login_form" action="" method="POST">
                    <label class="label_acc_pass"><?=$l5?></label>
                    <br>
                    <input required="required" class="input_acc_passs" type="email" name="login_account" placeholder="<?=$l6?>">
                    <br>
                    <label style="margin-left:10px;" class="label_acc_pass"><?=$l14?></label>
                    <br>
                    <input required="required" class="input_acc_passs" type="password" name="login_password" placeholder="<?=$l7?>">
                    <br>
                    <input style="margin-left:50px;"id="stay" class="label_acc_pass" name="login_stay_in"type="checkbox">
                    <label  for="stay" class="label_acc_pass"><?=$l8?></label>
                    <br>
                    <input class="login_submit"type="submit" name="login_submit" value="<?=$l9?>">
                    
                </form>
                <div style="position:relative;z-index:2;" class="forgot">
                    <a href=""><?=$l13?></a>
                </div>
                <div style="position:relative;z-index:2;" class="login_phone">
                    <a style="color:blue;"href=""><?=$l10?></a>
                </div>
                <div style="position:relative;z-index:3;" class="join_free">
                    <a style="color:blue;" href="register.php"><?=$l11?></a>
                </div>
                <div class="line" style="width:80%;height:1px;background-color:black;position:relative;left:10%;top:22%;opacity:23%;">

                </div>
                <div class="login_social_media">
                    <p style="font-size:17px;position:relative;left:-30%;"><?=$l12?></p>
                    <div class="login_img">
                        <img class="iconlogin" src="image/fb.png">
                        <img class="iconlogin" src="image/gg.png">
                        <img class="iconlogin" src="image/inkedin.png">
                        <img style="width:42px;position:relative;top:43px; "class="iconlogin" src="image/twitter.png">
                    </div>
                    <div  class="login_type">
                        <img  onclick="login_type();" id="q_login" class="qr_login"src="image/qr_login.png">
                        
                        <div class="qr_overlay"></div>
                    </div>
                    <div class="qr_type_login">
                       
                     <img style="width:200px;"src="image/qr_login.png">
                        <p><?=$l15?></p>
                    </div>
                        <img onclick="login_type_2();" id="email_login" src="image/email_login.png">
                    
                </div>
            </div>
        <div>
    </body>
</html>
<?php
  if(isset($_POST['login_submit'])){
    if(isset($_POST['login_account'])&&$_POST['login_account']!=""&&
    isset($_POST['login_password'])&&$_POST['login_password']!=""){
           if(isset($_POST['login_stay_in'])){
                setcookie("stay_in","1",time()+3600,"/");
           }
           $login_name=$_POST['login_account'];
           $login_password=$_POST['login_password'];
           $sql_select_data="select * from account where login_name='$login_name'";
         
           $login_result=mysqli_query($conn,$sql_select_data);
          
           $count=mysqli_num_rows($login_result);
           
          
           if($count!=0){
           if($row=mysqli_fetch_assoc($login_result)){
                
                      
                         
                         if(password_verify($login_password,$row['password_user']))
                            {
                                
                            }
                           else{
                                
                                 ?>
                                    <p style="color:red;font-family:roboto;font-style:italic;font-weight:bold;position:relative;top:-680px;left:61%;z-index:10">sai ten dang nhap hoac mat khau</p>
                                 <?php
                            }
                }
            }
            else{
                    ?>
                        <p style="color:red;font-family:roboto;font-style:italic;font-weight:bold;position:relative;top:-680px;left:61%;z-index:10">sai ten dang nhap hoac mat khau</p>
                    <?php
            }
  
}   
}
?>