<?php
    session_start();
    $product_key="";
    $price="";
    $product_img="";
    $product_name="";
    $server="localhost";
    $username="root";
    $password="";
    $database="alibaba";
    $product_price="";
    $product_color="";
    $color="";
    $conn=mysqli_connect($server,$username, $password,$database);
    if(!$conn){
        die();
    }
    if(isset($_GET['key'])){
        
        $key=$_GET['key'];
        $price=$_GET['price'];
        
        $select_product_detail="SELECT * FROM product,product_detail WHERE product.MASP=product_detail.MASP and product.MASP=$key";
        $info=mysqli_query($conn,$select_product_detail);
        if($row_info=mysqli_fetch_assoc($info)){
            $product_img=$row_info['HINHANH']; 
            $product_name=$row_info['TENSP'];
            $product_price=$row_info['DONGIA'];
            $product_color=$row_info['MAUSAC'];
        }
    }
    //tach mau sac
    $color_arr=explode(',',$product_color);
    if(isset($_GET['addtocart'])&&!empty($_GET['product_key'])){
        $color=$_GET['checkboxColorProduct'];
        $_SESSION['cart'][]=$_GET['product_key']; 
        unset($_GET);
        header("location:cart.php?$color");
    }
    


  
    
?>
<!DOCTYPE HTML>
<html>
    <head >
        <link rel="stylesheet" href="css_file.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
        <script src="slide.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
     

    </head>
    <body onscroll="scrollBody()"; id="body">
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
            <div  id="product_detail">
                <div class="product_menu">
                    <input type="button" value="Home"><p>/<p>
                    <input type="button" value="All Industries"><p>/<p>
                    <input type="button" value="Packaging & Printing"><p>/<p>
                    <input type="button" value="Paper Packaging"><p>/<p>
                    <input type="button" value="Paper Boxes">
                </div>
                <div class="image_detail">
                    <div class="image_detail_1">
                        <img id="main_image"src="<?=$product_img?>">
                                <div class="image_scale">
                                    <img src="<?=$product_img?>">
                                </div>
                    </div>
                    <div onclick="un_fa_times()"; class="image_detail_2">
                            <i class="fas fa-search search_info"></i>
                            <p>View large image</p>
                    </div>
                    <div class="image_detail_3">
                            <img onclick="myFunction(event)"; class="slide_image" src="image/app1.png">
                            <img onclick="myFunction(event)"; class="slide_image" src="image/app2.png">
                            <img onclick="myFunction(event)"; src="image/app3.png">
                            <img onclick="myFunction(event)"; src="image/app4.png">
                            <img onclick="myFunction(event)"; src="image/app5.png">
                            <img onclick="myFunction(event)"; src="image/app6.png">
                    </div>
                </div>
            </div>
            <div id="product_infor">
               <div class="product_infor_1">
                <p class="product_name"><?=$product_name?></p>       
                <div class="rating-star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <p>1 Reviews</p>
                    <p>2 Buyers</p>
                </div>
                <div class="certificate">
                    <i class="fas fa-certificate"></i>
                    <p class="view-product">View more</p>
                </div>
                <div class="line-product">
                </div>
                <div id="price-product">
                    <div class="piecees_prices">
                        <p class="pieces">10 - 49 pieces</p>
                        <p class="price">$399.00</p>
                    </div>
                    <div class="piecees_prices">
                        <p class="pieces">10 - 49 pieces</p>
                        <p class="price">$399.00</p>
                    </div>
                    <div class="piecees_prices">
                        <p class="pieces">10 - 49 pieces</p>
                        <p class="price">$399.00</p>
                    </div>
                    <div class="line-product line-product_2">  </div>
                    <div class="line-product line-product_3">
                    </div>
                    <div class="line-product line-product_4">
                    </div>
                    <style>
                         .line-product_2{
                            position: absolute;
                                top:100%;
                             }
                    </style>
                </div>
                <div class="product_infor_2">
                            <p class="benefit-content">Benefits:</p>
                            <p class="benefit-content benefit-content-child">US $500 coupons</p>
                            
                            <p> Color:</p>
                            <form action="" method="GET" enctype="multipart/form-data">
                            <div id="product_color">
                                <?php
                                    for($i=0;$i<count($color_arr);$i++){
                                ?>

                                    <input   onclick="changeBorderColor(event)"; value="<?=$color_arr[$i]?>" style="background-color:<?=$color_arr[$i]?>" type="checkbox" class="checkboxColorProduct" name="checkboxColorProduct[]">
                                   
                                <?php
                                    }
                                ?>

                            </div>
                            <p class="sample-product">Samples:</p>
                            <p class="price-per-piece">$40/pieces, Min order: 1 piece</p>|<a>Get sample</a>
                            <div id="lead-time">
                                <p class="lead-time">Lead time</p>
                                <table class="lead-time-table">
                                
                                        <tr>
                                        <td>Quantity (pieces)</td>
                                        <td>1 - 100</td>
                                        <td>&gt; 100</td>
                                        </tr>
                                        <tr>
                                            <td>Lead time (days)</td>
                                            <td>d</td>
                                            <td>To be negotiated</td>
                                        </tr>
                                    
                                </table>
                            </div>
                            <p class="customization">Customization:</p>
                            <div id="customization-content">
                                <p class="customization-content">Customized logo(Min. order 5 pieces)</p>
                                <p class="customization-content">Customized packaging(Min. order 500 pieces)</p>
                            </div>
                            <style>
                                table{
                                    
                                    border-collapse: collapse; 
                                    font-family:open sans;
                                }
                                tr{
                                    
                                    border-collapse: collapse; 
                                    font-family:open sans;
                                    
                                }
                                td{
                                    box-shadow:0px 0px 1px 1px grey;
                                    border-collapse: collapse; 
                                    font-family:open sans;
                                    padding:5px;
                                    text-align:center
                                }
                                .product_infor_2 #customization-content {
                                   position: absolute;
                                   left:33%;
                                   top:185px;

                                   opacity: 0.7;
                                  
                                }
                                .customization{
                                    margin-top:30px;
                                    
                                }
                                .product_infor_2{
                                    position: absolute;
                                    z-index: 15;
                                }
                                
                        </style>
                        <div class="purchase">
                            <p id="purchase_1"class="purchase_1">Purchase details</p>
                            <div class="purchase2">
                                <p id="purchase_2"class="purchase_2">Protection with</p>
                                <img class="purchase_img"src="image/product_trade.png">
                            </div>
                        <div>
                            <div>
                                <p>Shipping:</p>
                                <div class="shipping-product">
                                        <p class="shipping-product-1">Contact supplier</p>
                                        <p class="shipping-product-2">to negotiate shipping details Enjoy</p>
                                       
                                        <p class="shipping-product-3">On-time Dispatch Guarantee</p>
                                </div>
                                <p>Payments</p>
                                <div class="payment">
                                    <img src="image/visa.png">
                                    <img src="image/master.png">
                                    <img src="image/applepay.png">
                                    <img src="image/paypal.png">
                                </div>
                                <p>Returns & Refunds</p>
                                <p class="returns-product">Eligible for returns and refunds View details</p>
                            </div>
                            <div class="Sourcewithconfidence">
                                <p id="Sourcewithconfidence">Source with confidence</p>
                                <i class="far fa-check-circle"></i>
                                <p id="Sourcewithconfidence2">Direct from Verified Custom Manufacturer</p>
                                <br>
                                <i class="fas fa-trophy"></i>
                                <p id="Sourcewithconfidence3">Top-rated supplier in the past 90 days</p>
                            </div>
                </div>
            </div> 
          </div>
        

                        <script>
                                function myFunction(event) { 
                                    
                                    let text = event.target.getAttribute('src');
                                   
                                    document.getElementById("main_image").src= text;
                            }
                           

                                function fa_times(){
                                    document.getElementById("popup_image").style.display="none";
                                    document.getElementById("body").style.overflowY="scroll";
                                    
                                }
                                function un_fa_times(){
                                    document.getElementById("popup_image").style.display="block";
                                    document.getElementById("body").style.overflowY="hidden";
                                    
                                }
                                function changeColorPopup(){
                                    document.getElementsByClassName("list_popup_1")[0].style.borderBottom="3px solid #ff7519";
                                    document.getElementsByClassName("list_popup_1")[0].style.color="#ff7519";
                                    document.getElementsByClassName("list_popup_2")[0].style.color="black";
                                    document.getElementsByClassName("list_popup_3")[0].style.color="black";
                                    document.getElementsByClassName("list_popup_2")[0].style.borderBottom="none";
                                    document.getElementsByClassName("list_popup_3")[0].style.borderBottom="none";
                                    
                                }
                                function changeColorPopup2(){
                                    document.getElementsByClassName("list_popup_2")[0].style.borderBottom="3px solid #ff7519";
                                    document.getElementsByClassName("list_popup_2")[0].style.color="#ff7519";
                                    document.getElementsByClassName("list_popup_1")[0].style.color="black";
                                    document.getElementsByClassName("list_popup_3")[0].style.color="black";
                                    document.getElementsByClassName("list_popup_1")[0].style.borderBottom="none";
                                    document.getElementsByClassName("list_popup_3")[0].style.borderBottom="none";
                                    
                                }
                                function changeColorPopup3(){
                                    document.getElementsByClassName("list_popup_3")[0].style.borderBottom="3px solid #ff7519";
                                    document.getElementsByClassName("list_popup_3")[0].style.color="#ff7519";
                                    document.getElementsByClassName("list_popup_1")[0].style.color="black";
                                    document.getElementsByClassName("list_popup_2")[0].style.color="black";
                                    document.getElementsByClassName("list_popup_1")[0].style.borderBottom="none";
                                    document.getElementsByClassName("list_popup_2")[0].style.borderBottom="none";
                                    
                                }
                                function getSrc(event){
                                    var imgPopup=event.target.getAttribute('src');
                                    document.getElementsByClassName("main_image_popup")[0].src=imgPopup;
                                    this.event.target.style.border="1px solid #ff7519";
                                  
                                }

                         </script>
                         <div id="popup_image">
                    <div class="popup_image">
                        <div class="popup_image_1">
                           <img class="main_image_popup"src="image/app1.png">
                        </div>
                        <i onclick="fa_times()";    class="fas fa-times"></i>
                        <div class="sup_image">
                            <img onclick="getSrc(event)"; class="sup_image_popup"src="image/app1.png">
                            <img onclick="getSrc(event)"; class="sup_image_popup"src="image/app2.png">
                            <img onclick="getSrc(event)"; class="sup_image_popup"src="image/app3.png">
                            <img onclick="getSrc(event)"; class="sup_image_popup"src="image/app2.png">
                            <img onclick="getSrc(event)"; class="sup_image_popup"src="image/app3.png">
                            <img onclick="getSrc(event)";  class="sup_image_popup"src="image/app2.png">
                            <img onclick="getSrc(event)";  class="sup_image_popup"src="image/app3.png">
                            <img onclick="getSrc(event)"; class="sup_image_popup"src="image/app2.png">
                            <img onclick="getSrc(event)"; class="sup_image_popup"src="image/app3.png">

                        </div>
                        <div class="list_popup">
                            <p onclick="changeColorPopup()"; class="list_popup_1">product</p>
                            <p onclick="changeColorPopup2()"; class="list_popup_2">company</p>
                            <p onclick="changeColorPopup3()"; class="list_popup_3">Facilities</p>
                        </div>
                        <div class="popup_line">
                            
                        </div>
                    </div>
                
            </div>
                    <div class="suggest_product">
                            <p id="suggest_product_1">You may also like</p>
                            <div id="suggest_product_2">
                                <img id="main_image_suggest" src="image/app1.png">
                                <p id="suggest_name">2021 New model fold snow ebike fat 4.0 tire electric hybrid bike 21speed 500W fold bicycle for adult electric mountain bicycle</p>
                                <p id="price_product">$20</p>
                                <p id="quanlity_product">Min: 1</p>
                            </div>
                            <div id="suggest_product_2">
                                <img id="main_image_suggest" src="image/app2.png">
                                <p id="suggest_name">2021 New model fold snow ebike fat 4.0 tire electric hybrid bike 21speed 500W fold bicycle for adult electric mountain bicycle</p>
                                <p id="price_product">$20</p>
                                <p id="quanlity_product">Min: 1</p>
                            </div>
                            <div id="suggest_product_2">
                                <img id="main_image_suggest" src="image/app3.png">
                                <p id="suggest_name">2021 New model fold snow ebike fat 4.0 tire electric hybrid bike 21speed 500W fold bicycle for adult electric mountain bicycle</p>
                                <p id="price_product">$20</p>
                                <p id="quanlity_product">Min: 1</p>
                            </div>
                            
                    </div>
                    <div class="product_detail_3">
                        <p id="product_detail_3_1">For more detailed information including pricing, customization, and shipping:</p>
                        
                            <input id="product_detail_3_2" type="button" value="Start order">
                            <input id="product_detail_3_3" type="button" value="Contact us">      
                            <input type="hidden" id="hidden_info" value="<?=$key?>" name="product_key">
                            <input type="hidden" id="hidden_info2" value="<?=$price?>" name="product_price">
                            <input onclick="verifyCheckBox()"; type="submit" id="product_detail_3_4" name="addtocart" value="Add to cart">
                        </form>
                        <div id="verified_suplier">
                            <img id="verified_suplier_1"src="image/verify_suplier.png">
                            <p id="verified_suplier_2">company name.....</p>
                            <div id="verified_suplier_3">
                                <img src="image/re_trademark.png">
                                <p>Registered trademarks (2)</p>
                            </div>
                            <div id="verified_suplier_4">
                                <p>Store rating</p>
                                <p class="p_2">On-time delivery rate</p>
                                <p>Response time</p>
                                <p class="p_2">Transactions</p>
                                <p id="p_5">Staff</p>
                            </div>
                                <div id="verified_suplier_5">
                                    <p>4.5/5</p>
                                    <p >93.8%</p>
                                </div>
                                <div id="verified_suplier_6">
                                    <p>≤4h</p>
                                    <p class="p_6_2">$2225000</p>
                                </div>
                                <p id="verified_suplier_7">189</p>
                            
                        </div>
                        <div id="product_detail_3_5">
                        </div>
                        <div class="service_product">
                            <p class="sv_prd">Services</p>
                              <p class="sv_prd2">Minor customization</p>
                               <p class="sv_prd2">Full customization</p>
                        </div>
                        <div class="service_product_2">
                            <p class="sv_prd">Quality control</p>
                              <p class="sv_prd2">QA/QC inspectors (4)</p>
                               <p class="sv_prd2">On-site material inspection</p>
                            <div id="product_detail_3_6">
                               <input class="pr_dt_input1" type="button" value="Company profile">
                               <input class="pr_dt_input2" type="button" value="Visit store">
                            </div>
                    </div>
                    <div id="sendmessage">
                            <p class="smess_p_1">Send your message to this supplier</p>
                            <p>To</p>
                            <p>Message</p>
                            <textarea rows="10" cols="70" placeholder="Enter your inquirt details"></textarea>
                            <p>Your message must be between 20-8000 characters</p>
                            <p>quantity</p>
                            <input type="text" name="quantity_product">
                            <select>
                                <option>
                                    piece/pieces
                                </option>
                            </select>
                            <br>
                            <input type="checkbox" name="smess_check1">
                            <label>Recommend matching suppliers if this supplier doesn’t contact me on Message Center within 24 hours.</label>
                            <br>
                            <input type="checkbox" name="smess_check2">
                            <label> I agree to share my Business Card to the supplier.</label>
                            <br>
                            <input class="smess_submit"type="submit" name="send" value="Send">
                    </div>
                    <script>
                        function scrollBody(){
                                    if(this.scrollY>1100 && this.scrollY<13000){
                                    document.getElementsByClassName('product_detail_3')[0].style.display="none";
                                    }
                                    if(this.scrollY<1000 || this.scrollY>1300){
                                    document.getElementsByClassName('product_detail_3')[0].style.display="block";
                                 
                                        
                                    }
                        }
                        var colorArr=document.getElementById("product_color").querySelectorAll('input');
                        function verifyCheckBox(){
                            var i = 0;
                            var count=0;
                            for(i=0;i<colorArr.length;i++){
                                if(colorArr[i].checked==false){
                                    dem++;
                                }
                            }
                            if(dem==colorArr.length){
                                alert("please check");
                            }
                        }
                            function changeBorderColor(event){
                              var i=0;
                            
                                    if(event.target.checked==true){
                                        event.target.style.boxShadow="0px 0px 2px 3px pink";
                                        
                                    }
                                    else{
                                        event.target.style.boxShadow="0px 0px 1px 1px transparent"
                                    }   
                                   
                        }
                    </script>
                    <div id="reponsiveproductinfo">
                        <p>Product Name</p>
                        <p>Price per Piece</p>
                        <p>Status</p>
                    </div>
        <body>
</html>
 <style>
        body{
            background-color: #fff;
        }
        #header_4{
            box-shadow:0px 1px 5px -3px black;
        }
        .product_detail_3{
            width:40%;
            height:800px;
            position: sticky;
            
            top:0;
            margin-top:-65px;
            margin-left:650px;
            z-index: 10;
        }
 </style>