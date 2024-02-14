<?php
    session_start();
    $id="";
    $server="localhost";
    $username="root";
    $password="";
    $database="alibaba";
    $avatar="";
    $png='/.png$/';
    $jpg='/.jpg$/';
    $login_name=$_SESSION['login1'];
    $conn=mysqli_connect($server,$username, $password,$database);
    if(!$conn){
        die("failed".mysqli_connect_error());
    }
    $select_photo="SELECT avatar FROM account WHERE login_name='$login_name'";
    $result_select_photo=mysqli_query($conn,$select_photo);
    if($row_photo=mysqli_fetch_assoc($result_select_photo)){
            $avatar=$row_photo['avatar'];
    }
    if(isset($_GET['avatar_account'])&&(preg_match($png,$_GET['avatar_account'])||preg_match($jpg,$_GET['avatar_account']))&&isset($_SESSION['login1'])){
        
            $avatar="image/".$_GET['avatar_account'];
            $sql_update_photo="UPDATE account SET avatar='$avatar' WHERE login_name='$login_name'";
            $result_photo=mysqli_query($conn,$sql_update_photo);
    }
    if(isset($_SESSION['user_id'])){
        $id=$_SESSION['user_id'];
    }
 
  
    
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="css_file.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
        <script src="slide.js"></script>
        <title>My Oazada</title>
    </head>
    <body>
        <div id="account_header">
            <img id="account_logo" src="image/logo.png">
            <p class="account_header_1">My Oazada</p>
            <div class="account_header_2">
                    <input type="button" value="Trade">
                    <input type="button" value="Development">
                    <input type="button" value="Account">
            </div>
            <div id="account_header_3">
                <input type="button" value="Upgrade to Gold Supplier">
                <i class="far fa-user-circle account_header_acc"></i>
                <div class="account_header_3">
                     <p>Help</p>
                     <i class="fas fa-chevron-down"></i>
                </div>
                <form id="account_language" action="" method="GET">
                        <select   class="register-language" name="register_language"  onchange="this.form.submit()">
                            <option value="" disabled selected>--Language--</option>
                            <option value="english">English</option>
                            <option value="vie">Vietnam</option>
                        </select> 
                </form>
            <div>
</div>
</div>
        </div>
        <div id="account_main">
            <div class="account_main_1">
                <img src="<?=$avatar?>">
                <form action="" enctype="multipart/form-data" method="GET">
                    <label for="avatar_account">Upload photo</label>
                    <input type="file" id="avatar_account"  name="avatar_account" onchange=this.form.submit()>
                </form>
            </div>
            <div class="account_line"></div>
            <div class="account_info">
                <div class="account_info_1">
                    <p>Your member ID:</p>
                    <p>Email:</p>
                    <p>Linked Mobile:</p>
                </div>
                <div class="account_info_2">
                    <p><?=$id?></p>
                    <p><?=$login_name?></p>
                    <p>	Enter Mobile Number</p>
                </div>
            </div>
            <div class="account_line_2"></div>
            <div class="personal">
                <div class="per_info">
                    <p class="per_1">Personal information</p>
                    <div class="per_line"></div>
                    <div class="per_info_1">
                        <a href="myprofile.php"><p onmouseover="changeColorP(event)"; onmouseleave="changeColorP2(event)";>My profile</p></a>
                        <p onmouseover="changeColorP(event)"; onmouseleave="changeColorP2(event)";>Member profile</p> 
                        <p onmouseover="changeColorP(event)"; onmouseleave="changeColorP2(event)";>Upload my photo</p> 
                        <p onmouseover="changeColorP(event)"; onmouseleave="changeColorP2(event)";>Privacy settings</p> 
                        <p onmouseover="changeColorP(event)"; onmouseleave="changeColorP2(event)";>Email preferences</p> 
                        <p onmouseover="changeColorP(event)"; onmouseleave="changeColorP2(event)";>Tax Information</p> 
                    </div>
                </div>
                <div class="ser_acc">
                    <p class="per_1">Account Security</p>
                    <div class="per_line"></div>
                    <div class="ser_acc_1">
                        <p onmouseover="changeColorP(event)"; onmouseleave="changeColorP2(event)";>   Change email address </p> 
                        <p onmouseover="changeColorP(event)"; onmouseleave="changeColorP2(event)";>  Change Password </p> 
                        <p onmouseover="changeColorP(event)"; onmouseleave="changeColorP2(event)";>   Set security questions </p> 
                        <p onmouseover="changeColorP(event)"; onmouseleave="changeColorP2(event)";>   Manage Verification Phones </p> 
                        <p onmouseover="changeColorP(event)"; onmouseleave="changeColorP2(event)";>   Manage My Connected Accounts </p> 
                    </div>

                </div>
                <div class="fin_acc">
                    <p class="per_1">Finance Account</p>
                    <div class="per_line"></div>
                    <div class="fin_acc_1">
                         <p onmouseover="changeColorP(event)"; onmouseleave="changeColorP2(event)";>My transactions</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<script>
    function changeColorP(event){
        event.target.style.color=" #ff7519"
    }
    function changeColorP2(event){
        event.target.style.color="black"
    }
</script>
<style>
    body{
        background-color:#EEEEEE;
        margin:0;
        padding:0;
        font-family:open sans;
    }
</style>