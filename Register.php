<?php


  $l1="Country/Region:";
  $l2="Please select trade role:";
  $l3="Email Address:";
  $l4="Login Password:";
  $l5="Confirm Password:";
  $l6="Company Name:";
  $l7="Full name:";
  $l8="Tel:";
  $l9="Verify:";
  $l10="While creating a website account: I agree to abide by the Alibaba.com Membership Agreement- Willing to receive emails from<br> Alibaba.com members and services";
  $l11="Agree and Register";
  $l12="Buyer";
  $l13="Seller";
  $l14="Both";
  $l15="please set the email as the login name";
  $l16="set the password";
  $l17="enter the login password";
  $l18="enter your company name";
  $l19="enter your first name";
  $l20="enter your last name";
  $l21="phone number";
  $l22="";
    $servername="localhost";
    $database="alibaba";
    $username="root";
    $password="";
    $country="";
    $role="";
    $email="";
    $password="";
    $confirm="";
    $company="";
    $name="";
    $phonenumber="";
    $country_user="";
    $role_user="";
    $location_user="";
    $password_user="";
    $password_confirm_user="";
    $company_user="";
    $fullname_user="";
    $phone_user="";
    $conn=mysqli_connect($servername,$username,$password,$database);
    if(!$conn){
        die("failed".mysqli_connect_error());
    }
    if(isset($_GET['register_language'])){
        if($_GET['register_language']=='vie'){
            $l1="Quốc gia/Khu vực:";
            $l2="Vui lòng chọn vai trò:";
            $l3="Địa chỉ email";
            $l4="Mật khẩu đăng nhập:";
            $l5="Xác nhận mật khẩu";
            $l6="Tên công ty:";
            $l7="Tên đầy đủ:";
            $l8="Điện thoại:";
            $l9="Xác minh:";
            $l10="Trong khi tạo tài khoản trang web: Tôi đồng ý tuân theo Thỏa thuận thành"."<br>"." viên của Alibaba.com- Sẵn sàng nhận email từ
            các thành viên và dịch vụ của Alibaba.com";
            $l11="Đồng ý và đăng ký";
            $l12="người mua";
            $l13="người bán";
            $l14="cả 2";
            $l15="vui lòng đặt email làm tên đăng nhập";
            $l16="đặt mật khẩu";
            $l17="xác nhận mật khẩu";
            $l18="nhập tên công ty của bạn";
            $l19="nhập họ của bạn";
            $l20="nhập tên của bạn";
            $l21="số điện thoại";
            $l22="";
        }
    }
    //lay thong tin dang ky
    if(isset($_POST['register-submit'])){
    if(isset($_POST['radio-input'])&&isset($_POST['register-email'])&&!empty($_POST['register-email'])&&($_POST['register-password'])&&
    !empty($_POST['register-password'])&&isset($_POST['register-confirm'])&&!empty($_POST['register-confirm'])&&isset($_POST['register-company-name'])&&
    !empty($_POST['register-company-name'])&&isset($_POST['register-first-name'])&&!empty($_POST['register-first-name'])&&isset($_POST['register-last-name'])
    &&!empty($_POST['register-last-name'])&&isset($_POST['register-phone-number'])&&!empty($_POST['register-phone-number'])&&isset($_POST['register-check'])){
           
            $country_user=$_POST['country-input'];
            $role_user=$_POST['radio-input'];
            $location_user=$_POST['register-email'];
            $password_user=password_hash($_POST['register-password'],PASSWORD_DEFAULT);
            $password_confirm_user=password_hash($_POST['register-confirm'],PASSWORD_DEFAULT);
            $company_user=$_POST['register-company-name'];
            $fullname_user=$_POST['register-first-name']." ".$_POST['register-last-name'];
            $phone_user=$_POST['register-phone-number'];
            $check_unique_login_name="select login_name from account where login_name='$location_user'";
            $check_unique=mysqli_query($conn,$check_unique_login_name);
            $count_login_name=mysqli_num_rows($check_unique);
            if($count_login_name>0){
                echo"tai khoan da ton tai";
            }
            else{
            if($_POST['register-password']==$_POST['register-confirm']){
                $sql_insert_user="INSERT INTO account (country,role_user,login_name,password_user,company_name,full_name,phone) VALUES('$country_user','$role_user','$location_user','$password_user','$company_user','$fullname_user','$phone_user')";
              if(mysqli_query($conn,$sql_insert_user)){
                unset($_POST);
              
              }
              else{
                echo mysqli_connect_error();
              }
            }
            else{
                echo "false";
            }
        }
                    
    }
   
}

?>
<!DOCTYPE html>
<html>
    <head> 
        <title>Register</title>
        <link rel="stylesheet" href="css_file.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    </head>
    <body style="background-color:white">
        <div id="register-logo">
            <img src="image/logo.png">
        </div>
        <form id="register-language" action="" method="GET">
            <select   class="register-language" name="register_language"  onchange="this.form.submit()">
                <option value="" disabled selected>--Language--</option>
                <option value="english">English</option>
                <option value="vie">Vietnam</option>
            </select> 
        </form>
        <div id="register-text">
            <p style="top:22px;" class="register-text-1">*</p><p class="register-text-2"><?=$l1?></p>
            <p style="top:5px;" class="register-text-1">*</p><p style="top:-30px;"class="register-text-2"><?=$l2?></p>
            <p style="top:-15px;" class="register-text-1">*</p><p style="top:-50px;"class="register-text-2"><?=$l3?></p>
            <p style="top:-15px;" class="register-text-1">*</p><p style="top:-50px;"class="register-text-2"><?=$l4?></p>
            <p style="top:-25px;"class="register-text-1">*</p><p style="top:-60px;"class="register-text-2"><?=$l5?></p>
            <p style="top:-35px;" class="register-text-1">*</p> <p style="top:-70px;"class="register-text-2"><?=$l6?></p>
            <p style="top:-35px;"class="register-text-1">*</p><p style="top:-70px;"class="register-text-2"><?=$l7?></p>
            <p style="top:-50px;"class="register-text-1">*</p><p style="top:-80px;" class="register-text-2"><?=$l8?></p>
            <p style="top:-65px;"class="register-text-1">*</p><p  style="top:-100px;" class="register-text-2"><?=$l9?></p>
        </div>
        <div id="register-input">
            <form class="register-input-0" method="POST" action="">
            
                <select class="register-input-1 register-input-2" name="country-input"> 
                   
                    <?php
                     $sql_country="select * from country";
                     $result1=mysqli_query($conn,$sql_country);
                     if(!$result1){
                        die("query fail".mysqli_connect_error());
                     }
                     else{
                        while($row=mysqli_fetch_assoc($result1))
                     {
                    ?>
                       
                        <option value="<?=$row['countryname']?>"><?=$row['countryname']?></option>
                        
                    <?php
                        }
                 
                     }
                    ?>
                </select>
                <div class="register-radio">
                    <input id="buyer-radio" type="radio" name="radio-input" value="buyer">
                    <label for="buyer-radio"><?=$l12?></label>
                    <input id="seller-radio" type="radio" name="radio-input" value="seller">
                    <label for="seller-radio"><?=$l13?></label>
                    <input id="both-radio" type="radio" name="radio-input" value="both">
                    <label for="both-radio"><?=$l14?></label>
                </div>
                <input  class="register-input-1 register-input-2" type="email" name="register-email" placeholder="<?=$l15?>">
                <input  class="register-input-1 register-input-2" type="password" name="register-password" placeholder="<?=$l16?>">
                <input  class="register-input-1 register-input-2" type="password" name="register-confirm" placeholder="<?=$l17?>">
                <input  class="register-input-1 register-input-2" type="text" name="register-company-name" placeholder="<?=$l18?>">
                <div id="register-name">
                    <input  class="register-name" type="text" name="register-first-name" placeholder="<?=$l19?>">
                    <input  class="register-name" type="text" name="register-last-name" placeholder="<?=$l20?>">
                </div>
                <input  class="register-input-1 register-input-2" type="text" name="register-phone-number" placeholder="<?=$l21?>">
                <input  class="register-input-1" type="range" name="verify" min="1" max="10" >
                <input  class="register-input-1" type="checkbox" name="register-check">
                <label class="register-check"><?=$l10?></label>
                <input class="register-input-1 register-submit" type="submit" name="register-submit" value="<?=$l11?>">
               
            </form>
             
        </div>
        <?php
            if(isset($_POST['register-submit'])){
                if(isset($_POST['radio-input'])&&isset($_POST['register-email'])&&!empty($_POST['register-email'])&&($_POST['register-password'])&&
                !empty($_POST['register-password'])&&isset($_POST['register-confirm'])&&!empty($_POST['register-confirm'])&&isset($_POST['register-company-name'])&&
                !empty($_POST['register-company-name'])&&isset($_POST['register-first-name'])&&!empty($_POST['register-first-name'])&&isset($_POST['register-last-name'])
                &&!empty($_POST['register-last-name'])&&isset($_POST['register-phone-number'])&&!empty($_POST['register-phone-number'])&&isset($_POST['register-check'])){
                }
                else{
                    ?>
                        <p style="color:red;position:relative;width:20%;left:45%;top:-1200px;font-size:20px;">Please complete all Information!</p>
                    <?php
                }
                mysqli_close($conn);
            }
        ?>
        <div id="register-footer">
            <p class="register-footer"> Alibaba.com Site: International - Español - Português - Deutsch - Français - Italiano - हिंदी - Pусский - 한국어 - 日本語 - اللغة العربية - ภาษาไทย - Türk - Nederlands - tiếng Việt - Indonesian - עברית</p>
            <p style="width:60%;margin:auto;opacity:0.7" class="register-footer">Alibaba Group | Taobao Marketplace | Tmall.com | Juhuasuan | AliExpress | Alibaba.com International | 1688.com | Alimama | Alitrip
Alibaba Cloud | YunOS | AliTelecom | HiChina | Autonavi | UCWeb | Umeng | Xiami | TTPod | Diandianchong | DingTalk | Alipay</p>
            <p style="opacity:0.7"class="register-footer">Product Listing Policy - Intellectual Property Protection - Privacy Policy - Terms of Use</p>
            <p style="opacity:0.7"class="register-footer">© 1999-2017 Alibaba.com. All rights reserved.</p>
           
            
        </div>
                    <div id="chatBox">
                        <i onclick="openForm()" class="fas fa-comments" id="chatBoxIcon"></i>
                        <div class="chat-popup" id="myForm">
                             <form action="/action_page.php" class="form-container">
                                <label for="msg"><b>Message</b></label>
                                <textarea placeholder="Type message.." name="msg" required></textarea>
                                <button type="submit" class="btn">Send</button>
                                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                        </form>
                    </div>
                 </div>
    </body>
</html>
    <script>
                function openForm() {
        document.getElementById("myForm").style.display = "block";
        document.getElementById("chatBoxIcon").style.display = "none";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
            document.getElementById("chatBoxIcon").style.display = "block";
        }
    </script>