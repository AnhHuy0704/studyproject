<!DOCTYPE HTML>
<html>
    <head >
        <link rel="stylesheet" href="css_file.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
        <script src="slide.js"></script>
    </head>
    <body >
        <a  id="top"></a>
        <div id="header_2">
            <div id="march_expo">
                <p class="march_expo_1">MARCH EXPO</p>
                <p class="march_expo_2">Source 2023's latest product for less</p>
                <p class="march_expo_3">Starts in</p>
                <p class="march_expo_4">6</p>
                <p class="march_expo_5">days</p>
                <input type="button" class="march_expo_6" value="What's March Expo?">
            </div>
            <div id="logo_header">
                <img class="logo" src="image/logo.png">
                <div style="left:6%;"class="hover_btn_header logo_header_1">
                    <i style="position:relative;top:2px" class="fas fa-bars"></i>
                    <input type="button" class="categories" value="Categories">
                    <i class="fas fa-chevron-down down-arrow"></i>
                </div>
                <?php
                if(isset( $_SESSION['login'])){
                    ?>
                <div onmouseover="showAccount()"; onmouseout="hideAccount()"; class="hover_btn_header">
                    <i class="fas fa-user"></i>
                    <i class="fas fa-chevron-down down-arrow"></i>
                </div>
                <?php
                    }
                    else{
                            ?>
                                 <div onmouseover="hidden_account()"; onmouseout="hidden_account_2()"; class="hover_btn_header">
                                    <i class="fas fa-user"></i>
                                    <i class="fas fa-chevron-down down-arrow"></i>
                                </div>
                            <?php
                    }
                ?>
                <div onmouseover="hidden_message()"; onmouseout="hidden_message_2()"; class="hover_btn_header">
                     <i class="fas fa-comment-alt"></i>
                     <i class="fas fa-chevron-down down-arrow"></i>
                </div>
                <div onmouseover="hidden_order()"; onmouseout="hidden_order_2()"; class="hover_btn_header">
                     <i class="fas fa-file-alt"></i>
                     <i class="fas fa-chevron-down down-arrow"></i>
                </div>
                <div  onmouseover="hidden_cart()"; onmouseout="hidden_cart_2()"; class="hover_btn_header">
                     <i class="fas fa-shopping-cart"></i>
                     <i class="fas fa-chevron-down down-arrow"></i>
                </div>    
                <div class="hover_btn_header">
                    <input type="button" class="btn_header" value="Helps">
                     <i class="fas fa-chevron-down down-arrow"></i>
                </div>
                <div class="hover_btn_header">
                    <input type="button" class="btn_header" value="English-USD">
                     <i class="fas fa-chevron-down down-arrow"></i>
                </div>
                <div class="hover_btn_header">
                    <input type="button" class="btn_header" value="Ship-to:...">
                     <i class="fas fa-chevron-down down-arrow"></i>
                </div>
                <div class="hover_btn_header">
                    <input type="button" class="btn_header" value="More">
                    <i class="fas fa-chevron-down down-arrow"></i>
                </div>
                <!-- <div class="option_bar">
                <i class="fas fa-bars"></i>
                </div>              -->
            </div>
            <div id="header_3">
                    <div>
                        <p onclick="product()"; class="product_page"><a style="color:white" href="product.php">Product</a></p>
                        <p onclick="manu()"; class="manu_page"><a style="color:white" href="header.php">Manufacturers</a></p>
                    </div>
                    <style>
                            .manu_page{
                                box-shadow:0 5px 3px -3px white
                            }
                        </style>
                    <div id="search_head">
                        <form method="POST" action="">
                            <input class="search_header":type="search" name="search_header" placeholder="Search">
                            <div class="camera_header">
                                
                                <i class="fas fa-camera"></i>   
                            </div>
                            <i class="fas fa-search"></i>
                            <input class="submit_header" type="submit" name="submit_header" value="Search">
                        </form>
                    </div>
                    <div id="option_header">
                           <a class="a1">chicken feet</a>
                           <a>pvc platics beads</a>
                           <a>tea tin</a>
                           <a>tumbler</a>
                           <a>pu leather</a>
                           <a>tshirt</a>
                           <a>tv</a>
                        </div>
            </div>
            <div id="header_4">
                <div class="header_4">
                    <img class="header_4_1" src="image/request_header.png">
                    <p   class="header_4_2">Request for Quotation</p>
                    <p   style="display:block;left:18.5%;top:-4px"   class="header_4_3">One request, multiple quotes</p>
                </div>
                <div class="header_4 headersss headersss1" style="">
                    <img class="header_4_1"src="image/ready_header.png">
                    <p   class="header_4_2">Ready to Ship</p>
                    <p       style="display:block;left:30%;top:-4px"  class="header_4_3">Order directly with fast dispatch</p>
                </div>
                <div class="header_4 headersss">
                    <img class="header_4_1"src="image/logistics_header.png">
                    <p   class="header_4_2">Logistics services</p>
                    <p     style="display:block;left:28%;top:-4px"     class="header_4_3">Reliable shipping by ocean and air</p>
                </div> 
            </div>
            <?php
                if(isset( $_SESSION['login1'])){
                    $login_name=$_SESSION['login1'];
                    $sql_select_name="SELECT * FROM account WHERE login_name='$login_name'";
                    $result_login=mysqli_query($conn,$sql_select_name);
                    $count=mysqli_num_rows(  $result_login);
                    if($row_login=mysqli_fetch_assoc($result_login)){
                        $full_name_login=$row_login['full_name'];
                    }
                     
                    ?>
                            <div  onmouseover="showAccount()"; onmouseout="hideAccount()"; id="account_login_1">
                                <p class="account_p1">Hi,</p>
                                <p><?=$full_name_login?></p>
                                <div class="account_login_line"></div>
                                <div class="account_login_line"></div>
                                <p class="account_p2" onmouseover="changeColorP(event)"; onmouseleave="changeColorP2(event)"; >My Oazada</p>
                                    <p  onmouseover="changeColorP(event)"; onmouseleave="changeColorP2(event)";><a href="fillinfoproduct.php">Manage RFQ</a></p>
                                    <p  onmouseover="changeColorP(event)"; onmouseleave="changeColorP2(event)";><a href="buysell.php">Orders</a></p>
                                    <p  onmouseover="changeColorP(event)"; onmouseleave="changeColorP2(event)";>Favorites</p>
                                    <p  onmouseover="changeColorP(event)"; onmouseleave="changeColorP2(event)";><a href="account.php">Account</a></p>
                                    
                                    <p  onmouseover="changeColorP(event)"; onmouseleave="changeColorP2(event)"; class="SubmitRFQ">Submit RFQ</p>
                                    <p  class="account_signout" onmouseover="changeColorP(event)"; onmouseleave="changeColorP2(event)";><a href="logout.php">Sign out</a></p>

                            </div>
                
                    <?php
                     }
                     else{
                        
                    ?>             
                        <div onmouseover="hidden_account()"; onmouseout="hidden_account_2()"; onmouseover="showAccount()"; onmouseout="hideAccount()"; style="z-index=10"id="login1"  >
                                    <p style="display:inline">Welcome Back</p>
                                    <a href="login.php"> <button style="background-color: #ff7519;color:white;border-color: #ff7519"class="login">Sign in</button></a>
                                    <button  style="background-color:white;color: #ff7519;border-color: #ff7519"class="login"><a href="register.php">Join for free</a></button>
                                    <a href="https://www.facebook.com/login.php?skip_api_login=1&api_key=124207444332529&kid_directed_site=0&app_id=124207444332529&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fv2.9%2Fdialog%2Foauth%3Fclient_id%3D124207444332529%26redirect_uri%3Dhttps%253A%252F%252Fpassport.alibaba.com%252Foauth_sign.htm%253Ftype%253Dfacebook%2526return_url%253Dhttps%25253A%25252F%25252Flogin.alibaba.com%25252Fauto_login.htm%26display%3Dpopup%26response_type%3Dcode%26scope%3Demail%252Cpublic_profile%252Cuser_work_history%26state%3Didc_82XyFtbWn8BOPawRfVexKGA%26ret%3Dlogin%26fbapp_pres%3D0%26logger_id%3D5e2a2e88-f5ef-4e06-83f9-a3a75c6c2697%26tp%3Dunspecified&cancel_url=https%3A%2F%2Fpassport.alibaba.com%2Foauth_sign.htm%3Ftype%3Dfacebook%26return_url%3Dhttps%253A%252F%252Flogin.alibaba.com%252Fauto_login.htm%26error%3Daccess_denied%26error_code%3D200%26error_description%3DPermissions%2Berror%26error_reason%3Duser_denied%26state%3Didc_82XyFtbWn8BOPawRfVexKGA%23_%3D_&display=popup&locale=en_GB&pl_dbl=0">  <img class="iconlogin" src="image/fb.png"></a>
                                    <img class="iconlogin" src="image/gg.png">
                                    <img class="iconlogin" src="image/inkedin.png">
                                    <img style="width:45px;position:relative;top:43px;    "class="iconlogin" src="image/twitter.png">
                                    <p style="font-size:10px; margin-top:40px;text-align:center;   ">By sliding to Continue with or Create My Account , I agree to Oazada.com Free Membership Agreement and Receive Marketing Materials</p>
                        </div>
                        <?php
                          }
                        ?>
                     <div onmouseover="hidden_message()"; onmouseout="hidden_message_2()"; id="messages1">
                        <p style="font-weight:bold">Unread message reminder</p>
                        <p>We will remind you here when there is new message. Please log in to view.</p>
                        <a href="login.php"> <button style="background-color: #ff7519;color:white;border-color: #ff7519;margin-right:34px;" class="login">Sign in</button></a>
                        <p>New user? Please register and start your business!</p>
                    </div>
                    <div  onmouseover="hidden_order()"; onmouseout="hidden_order_2()"; id="order1">
                        <p style="font-weight:bold">Trace Assurance</p>
                        <a href="login.php"> <button style="background-color: #ff7519;color:white;border-color: #ff7519;margin-right:34px;" class="login">Order with trade Assurance</button></a>
                    </div>
                    <div onmouseover="hidden_cart()"; onmouseout="hidden_cart_2()"; id="cart1">
                        <p style="font-weight:bold;display:inline">You haven't signed in yet.</p>
                        <a href="login.php">Sign in </a>
                    </div>
                    
        </div>
        <div id="chatmanager">
            <span class="chatmanager">
                <img class="avtuser" src="image/app1.png">
                <p class="username">User Name</p>
                <p class="lastmess">lasted messager</p>
            </span>
            <span class="chatmanager">
                <img class="avtuser" src="image/app1.png">
                <p class="username">User Name</p>
                <p class="lastmess">lasted messager</p>
            </span>
            <span class="chatmanager">
                <img class="avtuser" src="image/app1.png">
                <p class="username">User Name</p>
                <p class="lastmess">lasted messager</p>
            </span>
            <span class="chatmanager">
                <img class="avtuser" src="image/app1.png">
                <p class="username">User Name</p>
                <p class="lastmess">lasted messager</p>
            </span>
            <span class="chatmanager">
                <img class="avtuser" src="image/app1.png">
                <p class="username">User Name</p>
                <p class="lastmess">lasted messager</p>
            </span>
            <span class="chatmanager">
                <img class="avtuser" src="image/app1.png">
                <p class="username">User Name</p>
                <p class="lastmess">lasted messager</p>
            </span>
            <span class="chatmanager">
                <img class="avtuser" src="image/app1.png">
                <p class="username">User Name</p>
                <p class="lastmess">lasted messager</p>
            </span>
        </div>
        <div id="detailChat">
                <div class="headerchat">
                    <img class="avtuser avtuser2" src="image/app1.png">
                    <p class="username">User Name</p>
                </div>

                
        </div>
    </body>
</html>