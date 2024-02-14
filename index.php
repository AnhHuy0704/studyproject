<?php
   
    
    $server="localhost";
    $username="root";
    $password="";
    $database="alibaba";
    $count_search="";
    $search_string="";
    $product_name="";
    $price="";
    $login_name="";
    $full_name_login="";
    $id="";
    session_start();
    $conn=mysqli_connect("$server","$username","$password","$database");
    if(!$conn){
        die("failed".mysqli_connect_error());
    }
    $fullname="";
    if(isset($_SESSION['login'])){
        $fullname=$_SESSION['login'];
    }
    else{
        $fullname="Guest";
    }
    if(isset($_POST['submit_header'])){
        if(isset($_POST['search_header'])&&!empty($_POST['search_header'])){
            $search_string=$_POST['search_header'];
            $sql_select_company="SELECT DISTINCT product.maCty FROM `product`,`business` WHERE product.maCty=business.maCty and TENSP like '%$search_string%'";
            $result_ten_cty=mysqli_query($conn,$sql_select_company);
            $count_search=mysqli_num_rows($result_ten_cty);
           
        }
    }
    if(isset($_SESSION['user_id'])){
        $id=$_SESSION['user_id'];
    }
?>
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
        <?php
                    if($count_search>0){
                        while($row=mysqli_fetch_assoc($result_ten_cty)){
                            $maCty=$row['maCty'];
                            $company_name="";
                            $sql_search_string="SELECT * FROM `product`,`business` WHERE product.maCty=business.maCty and TENSP like '%$search_string%' and product.maCty=$maCty LIMIT 3 ";
                            $result_search=mysqli_query($conn, $sql_search_string);
                            $result_search2=mysqli_query($conn, $sql_search_string);
                            $result_search3=mysqli_query($conn, $sql_search_string);
                            while($row3=mysqli_fetch_assoc($result_search3)){
                                $company_name=$row3['tenCty'];

                            }
                        ?>
                        
                   <div id="business">
                        <img class="avt-business" src="image/vietnam.jpg">
                        <p class="company-name"><?=$company_name?></p>
                        <img class="verify-business"src="image/verify.png" alt="verify.png">
                        
                        <div class="btn-business">
                            <i onclick="change_color()"; class="fas fa-heart"></i>
                            <input type="button" value="Chat now">
                            <input type="button" value="Contact us">
                        </div>
                        <p class="info-business" >3 yrs
                            30+ staff
                            6,000+ ㎡
                            US$330,000+
                        </p>
                        <div id="rate-business">
                            <p>Rating and reviews</p>
                            <p class="rate-business">0/5(0 reviews)</p>
                        </div>
                        <div id="factory">
                            <p>Factory capabilities</p>
                            <ul>
                                <li>Total floorspace (1,500㎡)</li>
                                <li>Full customization</li>
                                <li>Registered trademarks (1)</li>
                                <li>Consolidation service</li>
                            </ul>
                        </div>
                        <div id="product-business">
                        <?php
                                    while($row2=mysqli_fetch_assoc($result_search)){
                                ?>
                                        <div class="layout-product">
                                            <div  style="background-image:url('<?=$row2['HINHANH']?>');"  class="img-business product-business" ></div>
                                            <p class="cost-product">1$-2$</p>
                                            <p class="quanlity-product">MOQ: 1 pieces</p>
                                        </div>
                                <?php
                                    }
                                
                                ?>
                            
                        </div>
                        
                        <div class="slide2">
                            <div class="thanh-dieu-huong">
                                <i class="fas fa-chevron-circle-left"></i>
                                <i onclick="next_business()"; class="fas fa-chevron-circle-right"></i>
                            </div>
                            <div class="chuyen-slide-product">
                                <?php
                                    while($row3=mysqli_fetch_assoc($result_search2)){
                                ?>
                                        <img src="<?=$row3['HINHANH']?>">
                                        
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                   </div>
                   <style>
                        #business{
                            position:relative;
                            top:0%;
                            left:0%;
                            margin-bottom:20px;
                        }
                    </style>
                   <?php
                       
                    
                }
                    die();
                }
                    else
                    {
                        if(isset($_POST['submit_header'])){
                        echo "No more manufacturers for $search_string  were found under this tab.";
                        die();  
                        }
                        

        ?>
        <div class="reponsives">
        <div  id="s1">
            <div id="s1_1">
                <p class="source_s1_1"style="display:block">Source by category</p>
                    <div class="s1_1">
                        <div style="  background-image: url('image/market1.png');" class="circle-bg">
                            
                        </div>
                        <p>Consumer Electronics</p>
                        
                    </div>
                    <div class="s1_1">
                        <div style="  background-image: url('image/market2.png');"class="circle-bg">
                            
                        </div>
                        <p>Apparel</p>
                        
                    </div>
                    <div class="s1_1">
                        <div style="  background-image: url('image/market3.png');"class="circle-bg">
                            
                        </div>
                        <p>Vehicle Parts & Accessories</p>
                      
                    </div>
                    <div class="s1_1">
                        <div style="  background-image: url('image/market4.png');"class="circle-bg">
                          
                        </div>
                        <p>Sports & Entertainment</p>
                       
                    </div>
                    <div class="s1_1">
                        <div style="  background-image: url('image/market5.png');"class="circle-bg">
                           
                        </div>
                        <p>Industrial Machinery</p>
                        
                    </div>  
                    <div class="s1_1"> 
                        <div style="  background-image: url('image/market6.png');"class="circle-bg">
                          
                        </div>
                        <p>Home & Garden</p>
                      
                    </div>
                    <div class="s1_1">
                        <div style="background-image: url('image/market8.png');background-size:70% 70%;background-position:center"class="circle-bg">
                          
                        </div>
                        <p>All categories</p>
                      
                    </div>
                    <div class="circle-right">
                        <i class="fas fa-chevron-right"></i>
                        <i class="fas fa-chevron-right"></i>
                        <i class="fas fa-chevron-right"></i>
                        <i class="fas fa-chevron-right"></i>
                        <i class="fas fa-chevron-right"></i>
                        <i class="fas fa-chevron-right"></i>
                        <i class="fas fa-chevron-right"></i>
                    
                    </div>
            </div>
        </div>
        <div id="s2">
                <div class="sample-s2">
                    <p class="sample_p">Get samples</p>
                    <div class="sample-s2_1">
                        <div  id="sample_1"></div>
                        <p class="sample_p_2">Newly released</p>
                    </div>
                    <div class="sample-s2_1">
                        <div id="sample_2"></div>
                        <p class="sample_p_2">Trending</p>
                    </div>
                </div>

                <div class="sample-s2">
                    <p class="sample_p">Factory LIVE Q&A</p>
                    <div class="sample-s2_1">
                        <div  id="live_1"></div>
                        <p class="sample_p_2">New product</p>
                    </div>
                    <div class="sample-s2_1">
                        <div id="live_2"></div>
                        <p class="sample_p_2 ">Q&A LIVE</p>
                    </div>
                </div>
                <div class="ranking-s2">
                    <p class="ranking_p">Top-ranking manufacturers</p>
                    <div style="position:relative;left:-6px" class="ranking-s2-1 ranking">
                        <div class="img_ranking img_ranking_1"></div>
                        <p class="sample_p_2">Most popular</p>
                    </div>
                    <div style="position:relative;left:6px" class="ranking-s2-1">
                        <div class="img_ranking img_ranking_2"></div>
                        <p class="sample_p_2">Best sellers</p>
                    </div>
                    <div style="position:relative;top:38px;left:8px"class="ranking-s2-1">
                        <div class="img_ranking img_ranking_3"></div>
                        <p class="sample_p_2">On-time Delivery</p>
                    </div>
                    <div class="ranking-s2-1 ranking-s2-2">
                        <div class="img_ranking img_ranking_4"></div>
                        <p class="sample_p_2">Quick response</p>
                    </div>    
                </div>
        </div>
        <div id="s3">
            <div class="img_s3"></div>
            <div class="account_s3">
                <p>Welcome!</p>
                <p class="account_s3_2"><?=$fullname?></p>
            </div>
            <div class="btn_s3">
                <a href="login.php"><input type="button" value="Sign in"></a>
                <a href="register.php"><input type="button" value="join for free"></a>
            </div>
            <p class="account_s3-2">Your browsing history</p>
            <img class="browsing_s3"src="image/app4.png" alt="">
        </div>
        </div>
        <div class="s4">
            <p>One request, multiple quotes</p> 
            <input type="button" value="Request for Quotation">
        </div>
        <div id="s5" class="s5">
            <input  onclick="categories_border()"; type="button"  class="btn-top-s5"id="btn-top-0" value="All Categories">
            <input  onclick="categories_border_2()"; style="order:2" type="button"  class="btn-top-s5" id="btn-top-1" value="Electrical Equipment & Supplies">
            <input  onclick="categories_border_3()"; style="order:1"type="button"  class="btn-top-s5"id="btn-top-2" value="Agriculture">
            <input  onclick="categories_border_4()"; type="button" id="btn-top-3" class="btn-top-s5" value="Apparel">
            <input  onclick="categories_border_5()"; type="button" id="btn-top-4" class="btn-top-s5" value="Food & Beverage">
            <input  onclick="categories_border_6()"; type="button" id="btn-top-5" class="btn-top-s5" value="Fabric & Textile Raw Material">
            <input   type="button"  id="last-top-btn" class="btn-top-s5" value="Viewmore">
            <div class="line_s4"></div>
            <input type="button" class="btn-bot-s5"value="Sample-based customization">
            <input type="button" class="btn-bot-s5"value="Apparel">
            <input type="button" class="btn-bot-s5"value="Food & Beverage">
            <input type="button" class="btn-bot-s5 "value="Fabric & Textile Raw Material">
            <input type="button" class="btn-bot-s5" id="last-btn"value="Viewmore">
        </div>
        
            <div id="b2top">
                
                   <a href="#top"><i class="far fa-caret-square-up"></i></a>
                
            </div>
            <?php
                   $sql_select_business="SELECT DISTINCT business.maCty from product,business where product.maCty=business.maCty";
                   $result_select_business=mysqli_query($conn,$sql_select_business);
                   $num_rows_business=mysqli_num_rows($result_select_business);
                    
                   if($num_rows_business>0){
                    while($row4=mysqli_fetch_assoc($result_select_business)){
                        $maCty=$row4['maCty'];
                        $sql_select_product="SELECT * FROM product,business WHERE product.maCty= business.maCty and product.maCty=$maCty";
                        $result_select_product=mysqli_query($conn,$sql_select_product); 
                        $result_select_product2=mysqli_query($conn,$sql_select_product); 
                        $result_select_product3=mysqli_query($conn,$sql_select_product); 
                            while($row5=mysqli_fetch_assoc($result_select_product)){
                                $company_name=$row5['tenCty'];
                            }
            ?>  
        <div id="business">
                <img class="avt-business" src="image/vietnam.jpg">
                <p class="company-name"><?=$company_name?></p>
                <img class="verify-business"src="image/verify.png" alt="verify.png">
                
                <div class="btn-business">
                    <i onclick="change_color()"; class="fas fa-heart"></i>
                    <input type="button" value="Chat now">
                    <input type="button" id="btn-business2" value="Contact us">
                </div>
                <p class="info-business" >3 yrs
                    30+ staff
                    6,000+ ㎡
                    US$330,000+
                </p>
                <div id="rate-business">
                    <p>Rating and reviews</p>
                    <p class="rate-business">0/5(0 reviews)</p>
                </div>
                <div id="factory">
                    <p>Factory capabilities</p>
                    <ul>
                        <li>Total floorspace (1,500㎡)</li>
                        <li>Full customization</li>
                        <li>Registered trademarks (1)</li>
                        <li>Consolidation service</li>
                    </ul>
                </div>
                <div id="product-business">
                    <?php
                           while($row7=mysqli_fetch_assoc($result_select_product3)){
                            $product_key=$row7['MASP'];
                            $price=$row7['DONGIA'];
                    ?>
                    <div class="layout-product">
                      <a href="product_info.php?key=<?=$product_key?>&& price=<?=$price?>"><div  style="background-image:url('<?=$row7['HINHANH']?>');" class="img-business product-business"></div></a>
                        <p class="cost-product">1$-2$</p>
                        <p class="quanlity-product">MOQ: 1 pieces</p>
                    </div>
                    <?php
                           }
                    ?>
                   
                </div>
                
                <div class="slide2">
                    <div class="thanh-dieu-huong">
                        <i class="fas fa-chevron-circle-left"></i>
                        <i onclick="next_business()"; class="fas fa-chevron-circle-right fa-chevron-circle-right-2 "></i>
                    </div>
                    <div class="chuyen-slide-product">
                        <?php
                          while($row6=mysqli_fetch_assoc($result_select_product2)){
                        ?>
                            <img src="<?=$row6['HINHANH']?>">
                        <?php
                          }
                        ?>
                    </div>
                </div>
        </div>
    </body>
    <?php
                        }
                    }
                }
    ?>
                <div id="chatBox">
                        <i onclick="openForm()" class="fas fa-comments" id="chatBoxIcon"></i>
                        <?php
                            if($fullname=="Guest"){
                                ?>
                                    <div class="plssgtc">
                                        <p>Please sign to chat</p>
                                    </div>
                                <?php
                            }
                            else{
                        ?>
                        <div class="chat-popup" id="myForm">
                             <form action="chatmanager.php" class="form-container">
                                <label for="msg"><b>Message</b></label>
                                <textarea placeholder="Type message.." name="msg" required></textarea>
                                <input type="hidden" name="hidenIdChat" value="<?=$id?>">
                                <button type="submit" class="btn">Send</button>
                                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                        </form>
                        <?php
                            }
                        ?>
                    </div>
                 </div>
</html>
<script>
    function changeColorP(event){
        event.target.style.color=" #ff7519"
    }
    function changeColorP2(event){
        event.target.style.color="black"
    }
    function showAccount(){
        document.getElementById("account_login_1").style.display="block";
    }
    function hideAccount(){
        document.getElementById("account_login_1").style.display="none";
    }
    function openForm() {
        document.getElementById("myForm").style.display = "block";
        document.getElementById("chatBoxIcon").style.display = "none";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
            document.getElementById("chatBoxIcon").style.display = "block";
        }
</script>
