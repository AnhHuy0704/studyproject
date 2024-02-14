<?php
        $server="sql205.epizy.com";
        $username="epiz_34161471";
        $password="vPjx8ekpqY";
        $database="epiz_34161471_oazada";
     $conn=mysqli_connect($servername,$username,$password,$database);
     if(!$conn){
         die("connection failed:". mysqli_connect_error() );
     }
?>
<!DOCTYPE html>
<html>
<head>
<title>alibaba</title>
<link rel="stylesheet" href="css_file.css"/>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
<script src="slide.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>

<body onscroll="search();">
    <a id="top"></a>
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
                    <div onmouseover="hidden_account()"; onmouseout="hidden_account_2()"; class="hover_btn_header">
                        <i class="fas fa-user"></i>
                        <i class="fas fa-chevron-down down-arrow"></i>
                    </div>
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
                </div>
                <div id="header_3">
                        <div>
                            <p onclick="product()"; class="product_page"><a style="color:white" href="product.php">Product</a></p>
                            <p onclick="manu()"; class="manu_page"><a style="color:white" href="index.php">Manufacturers</a></p>
                        </div>
                        <style>
                            .product_page{
                                box-shadow:0 5px 3px -3px white
                            }
                        </style>
                        <div id="search_head">
                            <form method="POST" action="">
                                <input class="search_header":type="search" name="search_header" placeholder="Search">
                                <div class="camera_header">
                                    <i class="fas fa-camera"></i>   
                                </div>
                                <i style="color:white;font-size:20px;z-index:2;position:relative;left:-8px;top:2px;"class="fas fa-search"></i>
                                <input class="submit_header" type="submit" name="submit_header" value="Search">
                            </form>
                        </div>
                        <div id="option_header">
                            <a>chicken feet</a>
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
                    <div class="header_4" style="">
                        <img class="header_4_1"src="image/ready_header.png">
                        <p   class="header_4_2">Ready to Ship</p>
                        <p       style="display:block;left:30%;top:-4px"  class="header_4_3">Order directly with fast dispatch</p>
                    </div>
                    <div class="header_4">
                        <img class="header_4_1"src="image/logistics_header.png">
                        <p   class="header_4_2">Logistics services</p>
                        <p     style="display:block;left:28%;top:-4px"     class="header_4_3">Reliable shipping by ocean and air</p>
                    </div> 
                </div>
                <div onmouseover="hidden_account()"; onmouseout="hidden_account_2()"; style="z-index=10"id="login1"  >
                                    <p style="display:inline">Welcome Back</p>
                                    <a href="login.php"> <button style="background-color: #ff7519;color:white;border-color: #ff7519"class="login">Sign in</button></a>
                                    <a href="register.php"><button  style="background-color:white;color: #ff7519;border-color: #ff7519"class="login">Join for free</button></a>
                                    <a href="https://www.facebook.com/login.php?skip_api_login=1&api_key=124207444332529&kid_directed_site=0&app_id=124207444332529&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fv2.9%2Fdialog%2Foauth%3Fclient_id%3D124207444332529%26redirect_uri%3Dhttps%253A%252F%252Fpassport.alibaba.com%252Foauth_sign.htm%253Ftype%253Dfacebook%2526return_url%253Dhttps%25253A%25252F%25252Flogin.alibaba.com%25252Fauto_login.htm%26display%3Dpopup%26response_type%3Dcode%26scope%3Demail%252Cpublic_profile%252Cuser_work_history%26state%3Didc_82XyFtbWn8BOPawRfVexKGA%26ret%3Dlogin%26fbapp_pres%3D0%26logger_id%3D5e2a2e88-f5ef-4e06-83f9-a3a75c6c2697%26tp%3Dunspecified&cancel_url=https%3A%2F%2Fpassport.alibaba.com%2Foauth_sign.htm%3Ftype%3Dfacebook%26return_url%3Dhttps%253A%252F%252Flogin.alibaba.com%252Fauto_login.htm%26error%3Daccess_denied%26error_code%3D200%26error_description%3DPermissions%2Berror%26error_reason%3Duser_denied%26state%3Didc_82XyFtbWn8BOPawRfVexKGA%23_%3D_&display=popup&locale=en_GB&pl_dbl=0">  <img class="iconlogin" src="image/fb.png"></a>
                                    <img class="iconlogin" src="image/gg.png">
                                    <img class="iconlogin" src="image/inkedin.png">
                                    <img style="width:45px;position:relative;top:43px;    "class="iconlogin" src="image/twitter.png">
                                    <p style="font-size:10px; margin-top:40px;text-align:center;   ">By sliding to Continue with or Create My Account , I agree to Alibaba.com Free Membership Agreement and Receive Marketing Materials</p>
                        </div>
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
    
    <div class="mymaket">
        <div class="mymaket1" style="width:22%;background-color:white;height:100%;margin:0;">
            <p style="font-weight:bold;font-family:arial;margin:15px;">My markets</p>
            <p style="width:90%;background-color:black;height:1.5px;margin:auto;opacity:0.1; margin-bottom:10px; "> </p>
            <div class="market1" id="market1"><img style="width:30px;position:relative;top:5px;margin-right:5px;margin-left:5px;"src="image/market1.png"><p style="display:inline;position:relative;top:-5px;">Consumer Electronic</p>
                <div class="market1menu">
                    <p>Computer Hardware & Software</p>
                    <p>Cables & Commonly Used Accessories</p>
                    <p>Projectors & Presentation Equipments</p>
                    <p>Chargers, Batteries & Power Supplies</p>
                    <p>Used Electronics</p>
                    <p>Other Consumer Electronics</p>
    </div>
        
            </div>
            <div class="market1" id="market2"><img style="width:30px;position:relative;top:5px;margin-right:5px;margin-left:5px;"src="image/market2.png"><p style="display:inline;position:relative;top:-5px;">Apprel</p>
            <div class="market2menu">
                    <p>Wedding Apparel & Accessories</p>
                    <p>Socks & Hosiery</p>
                    <p>Sportswear</p>
                    <p>Ethnic Clothing</p>
                    <p>Garment & Processing Accessories</p>
                    <p>Other Apparel</p>
                </div>
        
        
        
        
           </div>
            <div class="market1" id="market3"><img style="width:30px;position:relative;top:5px;margin-right:5px;margin-left:5px;"src="image/market3.png"><p style="display:inline;position:relative;top:-5px;">Vehicle Path & Accessories</p>
            <div class="market3menu">
                    <p>Universal Parts </p>
                    <p>New Energy Vehicle Parts & Accessories</p>
                    <p>Motorcycle Parts & Accessories</p>
                    <p>Train Parts & Accessories</p>
                    <p>Railway Parts & Accessories</p>
                    <p>
Go-Kart & Kart Racer Parts & Accessories</p>
                </div>
            </div>
            <div class="market1" id="market4"><img style="width:30px;position:relative;top:5px;margin-right:5px;margin-left:5px;"src="image/market4.png"><p style="display:inline;position:relative;top:-5px;">Sports & Entertainment</p>
            <div class="market4menu">
                    <p>Field events</p>
                    <p>Scooters</p>
                    <p>Boats & Ships</p>
                    <p>Collectibles, Costumes & Toys</p>
                    <p>RVs & Campers</p>
                    <p>Souvenirs</p>
                </div>
            </div>
            <div class="market1" id="market5"><img style="width:30px;position:relative;top:5px;margin-right:5px;margin-left:5px;"src="image/market5.png"><p style="display:inline;position:relative;top:-5px;">Industrial Machinery</p>
            <div class="market5menu">
                    <p>Metal & Metallurgy Machinery</p>
                    <p>Woodworking Machinery</p>
                    <p>Welding Equipment</p>
                    <p>Home Product Manufacturing Machinery</p>
                    <p>Industrial Compressors & Parts</p>
                    <p>Electronic Products Machinery</p>
                </div>
            </div>
            <div class="market1" id="market6"><img style="width:30px;position:relative;top:5px;margin-right:5px;margin-left:5px;"src="image/market6.png"><p style="display:inline;position:relative;top:-5px;">Home & Garden</p>
            <div class="market6menu">
                    <p>Garden Supplies</p>
                    <p>Household Cleaning Tools & Accessories</p>
                    <p>Lighters & Smoking Accessories</p>
                    <p>Home Storage & Organization</p>
                    <p>Household Scales</p>
                    <p>Home Decor</p>
                </div>
            </div>
            <div class="market1" id="market7"><img style="width:33px;position:relative;top:5px;margin-right:5px;margin-left:5px;"src="image/market7.png"><p style="display:inline;position:relative;top:-5px;">Beauty</p>
            <div class="market7menu">
                    <p>Skin Care & Tools</p>
                    <p>Body Art</p>
                    <p>Nail Supplies</p>
                    <p>Makeup & Tools</p>
                    <p>Perfume & Fragrance</p>
                    <p>Beauty Equipment</p>
                </div>
            </div>
            <div class="market1" id="market8"><img style="width:27px;position:relative;top:5px;margin-right:5px;margin-left:5px;"src="image/market8.png"><p style="display:inline;position:relative;top:-5px;">All categories</p></div>
            <div class="arrow">
            <i style="opacity:0.6;font-size:12px;position:relative;transform:rotate(180deg)"class="fas fa-less-than arrow1"></i><br>
            <i style="opacity:0.6;font-size:12px;position:relative;transform:rotate(180deg)"class="fas fa-less-than arrow2"></i><br>
            <i style="opacity:0.6;font-size:12px;position:relative;transform:rotate(180deg)"class="fas fa-less-than arrow3"></i><br>
            <i style="opacity:0.6;font-size:12px;position:relative;transform:rotate(180deg)"class="fas fa-less-than arrow4"></i><br>
            <i style="opacity:0.6;font-size:12px;position:relative;transform:rotate(180deg)"class="fas fa-less-than arrow5"></i><br>
            <i style="opacity:0.6;font-size:12px;position:relative;transform:rotate(180deg)"class="fas fa-less-than arrow6"></i><br>
            <i style="opacity:0.6;font-size:12px;position:relative;transform:rotate(180deg)"class="fas fa-less-than arrow7"></i><br>
            <i style="opacity:0.6;font-size:12px;position:relative;transform:rotate(180deg)"class="fas fa-less-than arrow8"></i>
</div>
      </div>
        <div class="mymaket2" style="margin-left:20px;width:56%;background-color:white;height:100%;margin:0;">
        <div class="slide">
                <div class="dieuhuong" style="position:relative;top:165px;color:white;">
                <i  class="fas fa-chevron-circle-left" onclick="back();"></i>
                <i class="fas fa-chevron-circle-right" style="margin-left:700px;" onclick="next();"></i>
                </div>
                <div class="chuyenslide">
                    <img src="image/slide1.png">
                    <img src="image/slide2.png">
                    <img src="image/slide3.png">
                    <img src="image/slide4.png">
                    <img src="image/slide5.png">
                </div>
            </div>
            <div style="text-align:center" class="circleslide">
            <i onclick="Slide1();"; class="far fa-circle circle1" style="color:orange;"></i>
            <i onclick="Slide2()"; class="far fa-circle circle2" ></i>
            <i onclick="Slide3()"; class="far fa-circle circle3"></i>
            <i onclick="Slide4()"; class="far fa-circle circle4"></i>
            <i onclick="Slide5()"; class="far fa-circle circle5"></i>
            </div>

      </div>
        <div class="mymaket3" style="margin-left:22px;width:22%;background-color:white;height:100%;margin:0;">
            <p style="margin-left:20px;">Sign up to enjoy exciting Buyers Club benefits</p>
            <input class="mymaket3-input-1" type="submit" name="join" value="Join for free">
            <input  style="margin-left:20px;width:85%;border-radius:50px;height:30px;color:black;background-color:white;border:1px solid black;font-weight:bold" type="submit" name="signmymaket3" value="Sign in">
            <p style="margin-left:20px;font-size:21px;">Buyers Club <i style="font-size:21px;"class="fas fa-arrow-right"></i></p>
            <div style="width:80%;background-color:#EEEEEE;height:80px;margin-left:10%;">
                <p>$10</p>
                <img style="width:70px;margin-left:70%;margin-top:-13%"src="image/mymarket3_1.jpg">
            </div>
            <div style="width:80%;background-color:#EEEEEE;height:80px;margin-left:10%;">
                <p>RUF</p>
                <img style="width:70px;margin-left:70%;margin-top:-13%"src="image/mymarket3_2.jpg">
            </div>
    </div>
</div>
    

  
<!-- <script>
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
 
if (document.body.scrollTop > 900 || document.documentElement.scrollTop > 900) {
document.getElementById("myBtn").style.display = "block";


} else {
document.getElementById("myBtn").style.display = "none";
}
}
 
document.getElementById('myBtn').addEventListener("click", function(){
document.body.scrollTop = 0;
document.documentElement.scrollTop = 0;
});
</script> -->
<div style="position:relative;left:70px;top:50px;margin-bottom:680px;">
<div style="width:45%;background-color:white;height:280px;border-radius:9px;position:relative">
    <p class="Customizable-products">Customizable products</p>

    <p  class="Customizable-products1">Provided by 60,000+ experienced manufacturers with design and production capabilities and on-time delivery.</p>

    <div class="source" style="width:48% ;background-color:#DCDCDC;;margin-left:1%;border-radius:5px;text-align:center    ">
        <p >Source from factories</p>
        <div style="width:100px;height:100px;background-blend-mode:multiply;background-image: url(image/source1.png);
         background-color:#DCDCDC;border-radius:6px;"></div>
    <div style="width:100px;height:100px;background-blend-mode:multiply;background-image: url(image/source2.png);
         background-color:#DCDCDC;border-radius:6px;">
    </div>
    <div style="width:100px;height:100px;background-blend-mode:multiply;background-image: url(image/source3.png);
         background-color:#DCDCDC;border-radius:6px;">
    </div>

    
    </div>

    <div class="top" style="width:48%;background-color:#DCDCDC;;margin-left:4%;border-radius:5px;text-align:center;position:relative">
        <p style="font-weight:bold">Top-ranking suppliers</p>
        <div style="width:100px;height:100px;background-blend-mode:multiply;background-image: url(image/top1.png);
         background-color:#DCDCDC;border-radius:6px;"></div>
    <div style="width:100px;height:100px;background-blend-mode:multiply;background-image: url(image/top2.png);
         background-color:#DCDCDC;border-radius:6px;">
    </div>
    <div style="width:100px;height:100px;background-blend-mode:multiply;background-image: url(image/top3.png);
         background-color:#DCDCDC;border-radius:6px;">
    </div>

    
    </div>
</div>






<div style="width:45%;background-color:white;height:280px;border-radius:9px;position:Relative;top:-315px;left:700px;">
    <p class="Customizable-products">Ready-to-ship products</p>

    <p class="Customizable-products1">Source from 15 million products that are ready to ship, and leave the facility within 15 days.</p>

    <div class="source" style="width:48% ;background-color:#DCDCDC;;margin-left:1%;border-radius:5px;text-align:center    ">
        <p style="font-weight:bold">Exclusive discount</p>
        <div style="width:100px;height:100px;background-blend-mode:multiply;background-image: url(image/source1.png);
         background-color:#DCDCDC;border-radius:6px;"></div>
    <div style="width:100px;height:100px;background-blend-mode:multiply;background-image: url(image/source2.png);
         background-color:#DCDCDC;border-radius:6px;">
    </div>
    <div style="width:100px;height:100px;background-blend-mode:multiply;background-image: url(image/source3.png);
         background-color:#DCDCDC;border-radius:6px;">
    </div>

    
    </div>

    <div class="top" style="width:48%;background-color:#DCDCDC;;margin-left:4%;border-radius:5px;text-align:center">
        <p style="font-weight:bold">Weekly deals</p>
        <div style="width:100px;height:100px;background-blend-mode:multiply;background-image: url(image/top1.png);
         background-color:#DCDCDC;border-radius:6px;"></div>
    <div style="width:100px;height:100px;background-blend-mode:multiply;background-image: url(image/top2.png);
         background-color:#DCDCDC;border-radius:6px;">
    </div>
    <div style="width:100px;height:100px;background-blend-mode:multiply;background-image: url(image/top3.png);
         background-color:#DCDCDC;border-radius:6px;">
    </div>
    </div>
</div>
</div>
<div class="Consumer">
    <p  class="Consumer1">Consumer Electronics</p>
    <p class="Consumer2"></p>
</div>
<div  class="product">
    <div  class="product1">
        <p      class="product1-1">Selected novelty products</p>
        <button class="product1-2">Source now</buttton>
    </div>
    <div class="product2">
        <div class="product2-1">
            
        <i class="fas fa-award"></i> 
            <p  class="product2-1-1">Top-ranking suppliers</p>
            <p   class="product2-1-2"> Customization service available</p>
            <p   class="product2-1-3"></p>
            <img class="product2-1-4" src="image/consumer1.png">
        </div>
        <div class="product2-2">
        <p   class="product2-2-1">Top sales</p>
        <i class="fas fa-sort-amount-up-alt"></i>
            <p   class="product2-2-2">Mobile Phone & Accessories</p>
            <p   class="product2-2-3"></p>
            <img class="product2-1-4" src="image/consumer2.png">
        </div>
        <div class="product2-3">
        <p   class="product2-1-1">TV Receivers & Accessories</p>
           
            <p   class="product2-1-3"></p>
            <img style="margin-top:47px;"class="product2-1-4" src="image/consumer3.png">
        </div>
        <div class="product2-4">
        <p   class="product2-1-1">Computer Hardware & Software</p>
          
            <p   class="product2-1-3"></p>
            <img style="margin-top:47px;" class="product2-1-4" src="image/consumer4.png">
        </div>
        <div class="product2-5">
        <p   class="product2-5-1">Delivered Duty Paid (DDP)</p>
            <p   class="product2-5-2">Shipping and import duties included</p>
          
            <img class="product2-5-4" src="image/consumer5.png">
        </div>
        <div class="product2-6">
        <p   class="product2-5-1">Chargers, Batteries & Power Supplies</p>
          
         
            <img class="product2-5-4" src="image/consumer6.png">
        </div>
        <div class="product2-7">
        <p   class="product2-5-1">Smart Electronics</p>
            
            
            <img class="product2-5-4" src="image/consumer7.png">
        </div>
        <div class="product2-8">
        <p   class="product2-5-1">Video Games & Accessories</p>
            
            <img class="product2-1-4" src="image/consumer8.png">
        </div>
    </div>
</div>
<div id="backtotop">
    <a class="backtotop" href="#top">
    <i style="   font-size:40px;"class="fas fa-chevron-circle-right back"></i>
    </a>
</div>
<script type="text/javascript" src="slide.js"></script>

    <div class="app appreal">
        <p  class="app1">Apparel</p>
        <p class="app2"></p>
    </div>
    <div style="top:000px;position:relative" class="product productcopy">
    <div  class="product1 product1copy">
        <p      class="product1-1">Discover trending styles</p>
        <button class="product1-2">Source now</buttton>
    </div>
    <div class="product2" style="z-index:1">
        <div class="product2-1">
            
        <i class="fas fa-award"></i> 
            <p  class="product2-1-1">Top-ranking suppliers</p>
            <p   class="product2-1-2"> Customization service available</p>
            <p   class="product2-1-3"></p>
            <img class="product2-1-4" src="image/app2.png">
        </div>
        <div class="product2-2">
        <p   class="product2-2-1">Top sales</p>
        <i class="fas fa-sort-amount-up-alt"></i>
            <p   class="product2-2-2">Mobile Phone & Accessories</p>
            <p   class="product2-2-3"></p>
            <img class="product2-1-4" src="image/app3.png">
        </div>
        <div class="product2-3">
        <p   class="product2-1-1">TV Receivers & Accessories</p>
           
            <p   class="product2-1-3"></p>
            <img style="margin-top:47px;"class="product2-1-4" src="image/app4.png">
        </div>
        <div class="product2-4">
        <p   class="product2-1-1">Computer Hardware & Software</p>
          
            <p   class="product2-1-3"></p>
            <img style="margin-top:47px;" class="product2-1-4" src="image/app5.png">
        </div>
        <div class="product2-5">
        <p   class="product2-5-1">Delivered Duty Paid (DDP)</p>
            <p   class="product2-5-2">Shipping and import duties included</p>
          
            <img class="product2-5-4" src="image/app6.png">
        </div>
        <div class="product2-6">
        <p   class="product2-5-1">Chargers, Batteries & Power Supplies</p>
          
         
            <img style="margin-top:"class="product2-5-4" src="image/app7.png">
        </div>
        <div class="product2-7">
        <p   class="product2-5-1">Smart Electronics</p>
            
            
            <img style="margin-top:13px" class="product2-5-4" src="image/app8.png">
        </div>
        <div class="product2-8">
        <p   class="product2-5-1">Video Games & Accessories</p>
            
            <img class="product2-1-4" src="image/app9.png">
        </div>
    </div>
</div>

<div class="app" >
        <p  class="app1">Vehicle Parts & Accessories</p>
        <p style="width:70%;"class="app2"></p>
    </div>
    <div style="top:000px;position:relative" class="product ">
    <div  class="product1 product1copy1">
        <p      class="product1-1">Discover trending styles</p>
        <button class="product1-2">Source now</buttton>
    </div>
    <div class="product2" style="z-index:1">
        <div class="product2-1">
            
        <i class="fas fa-award"></i> 
            <p  class="product2-1-1">Top-ranking suppliers</p>
            <p   class="product2-1-2"> Customization service available</p>
            <p   class="product2-1-3"></p>
            <img class="product2-1-4" src="image/app2.png">
        </div>
        <div class="product2-2">
        <p   class="product2-2-1">Top sales</p>
        <i class="fas fa-sort-amount-up-alt"></i>
            <p   class="product2-2-2">Mobile Phone & Accessories</p>
            <p   class="product2-2-3"></p>
            <img class="product2-1-4" src="image/app3.png">
        </div>
        <div class="product2-3">
        <p   class="product2-1-1">TV Receivers & Accessories</p>
           
            <p   class="product2-1-3"></p>
            <img style="margin-top:47px;"class="product2-1-4" src="image/app4.png">
        </div>
        <div class="product2-4">
        <p   class="product2-1-1">Computer Hardware & Software</p>
          
            <p   class="product2-1-3"></p>
            <img style="margin-top:47px;" class="product2-1-4" src="image/app5.png">
        </div>
        <div class="product2-5">
        <p   class="product2-5-1">Delivered Duty Paid (DDP)</p>
            <p   class="product2-5-2">Shipping and import duties included</p>
          
            <img class="product2-5-4" src="image/app6.png">
        </div>
        <div class="product2-6">
        <p   class="product2-5-1">Chargers, Batteries & Power Supplies</p>
          
         
            <img style="margin-top:"class="product2-5-4" src="image/app7.png">
        </div>
        <div class="product2-7">
        <p   class="product2-5-1">Smart Electronics</p>
            
            
            <img style="margin-top:13px" class="product2-5-4" src="image/app8.png">
        </div>
        <div class="product2-8">
        <p   class="product2-5-1">Video Games & Accessories</p>
            
            <img class="product2-1-4" src="image/app9.png">
        </div>
    </div>
</div>
<div style="margin-left:70px;"class="weekly">
    <p class="app1 weekly1">Weekly deals</p>
    <p style="width:20%;top:-7px;" class="app2"></p>
    <p style="margin-left:70px;" class="app1 weekly2">LIVE</p>
    <p style="width:20%;top:-7px;" class="app2"></p>
    <p style="margin-left:70px;" class="app1">Small commodities marketplace</p>
</div>
<div id="weekly">
    <div class="deals1">
        <img src="image/deal1.png">
        <img src="image/deal2.png">
        <button>View more ></button>
        <p>$0.40</p>
        <p>10 pieces(MOQ)</p>
    </div>
    <div style="margin-left:80px;"class="deals1">
    <img src="image/deal3.png">
        <img src="image/deal4.png">
        <button>View more ></button>
        <p>$0.40</p>
        <p>10 pieces(MOQ)</p>
    </div>
    <div style="margin-left:80px;" class="deals1">
    <img src="image/deal5.png">
        <img src="image/deal6.png">
        <button>View more ></button>
        <p>$0.40</p>
        <p>10 pieces(MOQ)</p>
    </div>  
</div>
<div class="question">
    <img style="width:50px;"src="image/request.png">
    <p style="font-weight:bold;font-size:26px;font-family:arial">Request for Quotation</p>
    <p  style="font-size:14px;font-family:arial;opacity:50%;position:relative;top:-2px;margin-left:10px;">Quickly get lower prices with one request</p>
    <p style="width:55%;positionLrelative;top:12px;  "class="app2"></p>
</div>
<div class="global">
    <div class="global1">
            <p style="font-size:29px;color:white;font-family:arial;position:relative;top:50px;left:8%;">Global sourcing marketplace</p>
            <p >156000 +</p>
            <p>&lt;22h</p>
            <p>2441000 +</p>
            <p>RFQs</p>
            <p>Active suppliers</p>
            <p>Average response time</p>
            <p>Industries</p>
            <p>7323</p>
            <input type="button" value="Learn more"style="background-color:transparent;color:white;border:2px solid white;width:100px;height:40px;border-radius:50px;position:relative;top:-30px;left:8%;"/>
          
    </div>
    <div class="global2">
        <p class="global2-1">One request, multiple quotes</p>
      
        <div class="texttransform">
        <li>"Lampe solaire de jardin 2400mah capteur de mouvement à Induction rue smd led projecteur 200w ip66 caméra extérieure Led lumière " by M*****  received 7 quotes</li>
        </div>
        <form method="GET">
            <input style="margin-top:20px;margin-left:6%;" class="input1 textinput" type="text" name="globaltext" placeholder="enter product name">
            <input  style="margin-top:20px;margin-left:6%;" class="input1" type="number" name="globalnum" placeholder="quantity">
            <select style="margin-left:20px;width:29%;margin-top:20px;"  class="input1"  >
                <option>Bag/Bags</otion>
            </select>
            <input  style="margin-top:20px;margin-left:6%;" class="inputsubmit" type="submit" name="globalsubmit" value="Request for Quotation">
        </form>
    </div>
</div>
<div>
    <p class="app1" style="position:relative;left:5%;">Just for you</p>
    <p class="app2" style="width:80%;margin-left:53px;"></p>
</div>
<div class="show-product">
    <?php
       $offset=1;
       $limit=4;
       
       $countProduct="SELECT COUNT(*) as 'total' FROM product";
       $sqlCountProduct=mysqli_query($conn,$countProduct);
       $data=mysqli_fetch_assoc($sqlCountProduct);
       $totalproduct=$data['total'];
       $totalpage=ceil($totalproduct/$limit);
        $selectProduct="select * from product LIMIT  $limit OFFSET $offset";
        $product1=mysqli_query($conn,$selectProduct);
        if(!$product1){
         die("failed".mysqli_connect_error());
     }
     else{
        while($row=mysqli_fetch_assoc($product1)){
     ?>
            
        <div class="show-product1">
          <a href="product_info.php">   <img class="pr_img" src="<?=$row['HINHANH']?>"></a>
            <p  class="product_name" style="display: block;
  	display: -webkit-box;
  
  	font-size: 16px;
  	line-height: 1.3;
  	-webkit-line-clamp: 2; 
  	-webkit-box-orient: vertical;
  	overflow: hidden;
  	text-overflow: ellipsis;
  	margin-top:10px; "><a href="#"></a><?=$row['TENSP']?></p>
            <p class="product_price"style="font-weight:bold;margin-bottom:-5px"><?="$".$row['DONGIA']?></p>
            <p class="product_pieces">1.0 piece (min. order)</p>
        </div>
    <?php
        }
     }
    ?>
     <div class="listpage">
        <?php
        for($i=0;$i<$totalpage;$i++){
        ?>
            <b href=""><?=$i+1?></b>
        <?php
        }
        ?>
     </div>
</div>
<div>
    <p class="app1" style="position:relative;left:5%;">Trade services</p>
    <p class="app2" style="width:77%;margin-left:53px;"></p>
    <p style="opacitu:70%;margin-left:5%;position:relative;top:-25px;">Alibaba.com's trade services help ensure that your purchases are protected. </p>
</div>
<div class="trade">
    <div class="trade1 trade-1">
        <p></p>
        <p class="trade-1-2">Trade Assurance</p>
        <p class="trade-1-3">ORDER PROTECTION</p>
        <i class="fas fa-hands-helping trade-1-4"></i>
        <div class="trade-1-5">
            <p>Benefits</p>
            <ul>
                <li>On-time shipping</li>
                <li>Quality protection</li>
            </ul>
            <p>Learn more →</p>
        </div>
    </div>
    <div class="trade1 trade-2">
        <p></p>
        <p class="trade-1-2">Payment</p>
        <p class="trade-1-3">PAYMENT SOLUTION</p>
        <i class="fas fa-money-check-alt trade-1-4"></i>
        <div class="trade-1-5">
            <p>Benefits</p>
            <ul>
                <li>On-time shipping</li>
                <li>Quality protection</li>
            </ul>
            <p>Learn more →</p>
        </div>
    </div>
    <div class="trade1 trade-3">
        <p ></p>
        <p class="trade-1-2">Inspection solution</p>
        <p class="trade-1-3">INSPECTION</p>
        <i class="fab fa-researchgate trade-1-4"></i>
        <div class="trade-1-5">
            <p>Benefits</p>
            <ul>
                <li>On-time shipping</li>
                <li>Quality protection</li>
            </ul>
            <p>Learn more →</p>
        </div>
    </div>
    <div class="trade1 trade-4">
        <p></p>
        <p class="trade-1-2">Ocean and air shipping</p>
        <p class="trade-1-3">LOGISTICS SERVICE</p>
        <i class="fas fa-globe trade-1-4"></i>
        <div class="trade-1-5">
            <p>Benefits</p>
            <ul>
                <li>On-time shipping</li>
                <li>Quality protection</li>
            </ul>
            <p>Learn more →</p>
        </div>
    </div>
</div>
<div>
    <p class="app1" style="position:relative;left:5%;font-family:arial;font-size:22px;">Suppliers by country or region
</p>
    <p class="app2" style="width:67%;margin-left:53px;"></p>
   
</div>
<div class="country">
    <?php
        $sqlcountry="select * from country";
        $country=mysqli_query($conn,$sqlcountry);
        if(!$country){
            die("failed".mysqli_connect_errors());
        }
        while($countryrow=mysqli_fetch_assoc($country)){
    ?>
    <div class="country1">
        <img src="<?=$countryrow['image']?>">
        <p><?=$countryrow['countryname']?></p>
    </div>
    <?php
        }
    ?>
<div>
    <p><a href="#">More</a></p>
</div>
</div>
<div id="footer">
    <div class="footer-1">
        <p>Trade Alert - Delivering the latest product trends and industry news straight to your inbox.</p>
        <form>
            <input class="footertext" type="" name="footertext" placeholder="Your email">
            <input class="footersibmit" type="submit" name="footersibmit" value="Subscribe">
        </form>    
        <p style="font-size:12px;opacity:50%;">We’ll never share your email address with a third-party.</p>
    </div>

<div class="footer-2">
    <div class="footer-2-1">
        <p class="footer-2-1-1">Customer services</p>
    </div>   
    <div class="footer-2-1">
        <p class="footer-2-1-1">About us</p>
    </div>  
    <div class="footer-2-1">
        <p class="footer-2-1-1">Source on Alibaba.com</p>
    </div>  
    <div class="footer-2-1">
        <p class="footer-2-1-1">Sell on Alibaba.com</p>
    </div>  
    <div class="footer-2-1">
        <p class="footer-2-1-1">Trade services</p>
    </div>  
</div>
<div id="footeroption">
    <div style=""class="footeroption1">
          <p><a href="#">Help Center</a></p>
          <p><a href="#"> Report abuse</a></p>
          <p><a href="#"> Open a case</a></p>
          <p><a href="#"> Policies & rules</a></p>
          <p><a href="#"> Get paid for your feedback</a></p>
    </div>
    <div style="margin-left:107px;"class="footeroption1">
        <p><a href="#">About Alibaba.com</a></p>
        <p><a href="#">About Alibaba Group</a></p>
        <p><a href="#">Alibaba.com Blog</a></p>
        <p><a href="#">Legal Notice</a></p>
    </div>
    <div style="margin-left:62px;"class="footeroption1">
        <p><a href="#">Resources</a></p>
        <p><a href="#">All categories</a></p>
        <p><a href="#">Request for Quotation</a></p>
        <p><a href="#">Ready to Ship</a></p>
        <p><a href="#">Buyer partners</a></p>
        <p><a href="#">Alibaba.com Select</a></p>
    </div>
    <div style="margin-left:165px;"class="footeroption1">
        <p><a href="#">   Supplier memberships</a></p>
        <p><a href="#">Learning Center</a></p>
        <p><a href="#"> Partner Program</a></p>
    </div>
    <div  style="margin-left:140px;" class="footeroption1">
        <p><a href="#"> Trade Assurance</a></p>
        <p><a href="#"> Business identity</a></p>
        <p><a href="#"> Logistics services</a></p>
        <p><a href="#">  Production Monitoring & Inspection Services</a></p>
        <p><a href="#">  Letter of Credit</a></p>
    </div>
</div>
    <p class="footerline"></p>
    <div class="footericon">
        <div class="footer-icon1">
            <p class="footer-icon-1">Download :</p>
            <button class="footer-icon-2"><i class="fab fa-apple"></i>APP store</button>
            <button style="background-color:#33CC00"class="footer-icon-3"><i class="fab fa-android"></i>Google play</button>
        </div>
        <div class="footer-icon1">
            <p class="footer-icon-1">Alibaba Supplier app :</p>
        </div>
        <div class="footer-icon1">
            <p class="footer-icon-1">Follow us : </p>
            <i class="fab fa-facebook-square"></i>
            <i class="fab fa-twitter-square"></i>
            <i class="fab fa-instagram-square"></i>
            <i class="fab fa-youtube-square"></i>
        </div>
    </div>
    <div class="footer-last">
            <p> Alibaba.com Site: International - Español - Português - Deutsch - Français - Italiano - हिंदी - Pусский - 한국어 - 日本語 - اللغة العربية - ภาษาไทย - Türk - Nederlands - tiếng Việt - Indonesian - ברית
            </p>
            <p>AliExpress | 1688.com | Tmall Taobao World | Alipay | Lazada</p>

            <p>Browse Alphabetically: Onetouch | Showroom | Country Search | Suppliers | Affiliate</p>

            <p>Product Listing Policy - Intellectual Property Protection - Privacy Policy - Terms of Use - User Information Legal Enquiry Guide</p>

            <p>© 1999-2022 Alibaba.com. All rights reserved. 浙公网安备 33010002000092号 浙B2-20120091-4</p>
</div>
</div>
<style>
    body p{
        font-family:open sans;
    }body input{
        font-family:open sans;
    }body label{
        font-family:open sans;
    }
</style>

</html>
<script>
    function getPage(){
        
    }
</script>