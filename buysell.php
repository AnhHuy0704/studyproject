<?php
  SESSION_START();
  
  $fullname="";
  // unset($_SESSION['cart']);
  if(isset($_SESSION['login'])){
      $fullname=$_SESSION['login'];
  }
  else{
      header("location:login.php");
  }
  $server="localhost";
  $username="root";
  $password="";
  $database="alibaba";
  $Customer="";
  $Product="";
  $Totalprice="";
  $Status="";
  $product="";  
  $unitprice="";
  $quanlity="";
     $conn=mysqli_connect($server,$username,$password,$database);
     if(!$conn){
         die();
     }
  $sqlSelectOrder="SELECT * FROM listoder,orderdetail WHERE CodeOrder=Codeorders";
  $sql_SelectOrder=mysqli_query($conn,$sqlSelectOrder);
  $sqlSelectOrder2="SELECT * FROM listoder,orderdetail WHERE CodeOrder=Codeorders";
  $sql_SelectOrder2=mysqli_query($conn,$sqlSelectOrder2);
  $sqlSelectOrder3="SELECT * FROM listoder,orderdetail WHERE CodeOrder=Codeorders";
  $sql_SelectOrder3=mysqli_query($conn,$sqlSelectOrder3);

?>
<!DOCTYPE HTML>
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
            <div id="navigation">
                <div id="change">
                    <p id="changebuy" onclick="buysellchange()"; >Buy</p>
                    <p id="changesell" onclick="sellMode()";  >Sell</p>
                </div>
                <span id="changeColorClick">
                    <div  onclick="changeBg(event)"; onmouseover="hoveritem(event)"; onmouseleave="leaveitems(event)"; class="items_navigation homeNavigation">
                        <i  onmouseleave="leaveicon(event)"; class="fas fa-home"></i>
                        <br><br>
                        Home
                    </div>
                    <div  onclick="changeBg(event)"; onmouseover="hoveritem(event)"; onmouseleave="leaveitems(event)"; class="items_navigation messNavigation">
                        <i onmouseleave="leaveicon(event)"; class="fas fa-envelope-square"></i>
                        <br><br>
                        Messanger
                    </div>
                    <div   onclick="changeBg(event)"; onmouseover="hoveritem(event)"; onmouseleave="leaveitems(event)"; class="items_navigation leadNavigation">
                        <i onmouseleave="leaveicon(event)"; class="fas fa-bars"></i>
                        <br><br>
                        Buying<br>leads
                    </div>
                    <div   onclick="changeBg(event)"; onmouseover="productUpdate()"; onmouseleave=" productUpdate2()"; class="items_navigation productNavigation">
                        <i onmouseleave="leaveicon(event)"; class="fas fa-bars"></i>
                        <br><br>
                        Product
                    </div>
                    <div   onclick="changeBg(event)"; onmouseover="hoveritem(event)"; onmouseleave="leaveitems(event)"; class="items_navigation orderavigation">
                        <i onmouseleave="leaveicon(event)"; class="fas fa-list-alt"></i>
                        <br><br>
                        Orders
                    </div>
                    <div onclick="changeBg(event)";   class="items_navigation transactionavigation">
                        <i onmouseleave="leaveicon(event)"; class="fas fa-file-invoice-dollar"></i>
                        <br><br>
                        Transaction
                    </div>
                    <div  onclick="changeBg(event)"; onmouseover="hoveritem(event)"; onmouseleave="leaveitems(event)"; class="items_navigation contactnavigation">
                        <i onmouseleave="leaveicon(event)"; class="far fa-user-circle"></i>
                        <br><br>
                        Contact
                    </div>
                    <div  onclick="changeBg(event)"; onmouseover="hoveritem(event)"; onmouseleave="leaveitems(event)"; class="items_navigation mylistnavigation">
                        <i onmouseleave="leaveicon(event)"; class="fas fa-list"></i>
                        <br><br>
                        My lists
                    </div>
                    <div onclick="changeBg(event)"; class="items_navigation globalnavigation">
                        <i   onmouseleave="leaveicon(event)"; class="fas fa-globe"></i>
                        <br><br>
                        Global
                    </div>                                          
                </span>
            </div>
            <div id="buysellhome">
                <div id="buysellhomeprofile">
                    <img id="buysellhomeprofileimg"src="image/user.png">
                    <p id="buysellhomeprofilename">Name</p>
                    <a href="myprofile.php"><p id="buysellhomeprofile2">My profile&nbsp;></p></a>
                    <div id="buysellhomeprofile3">
                        <div id="buysellhomeprofile3_1">
                            <p class="p1">0</p>
                            <p>Business card requests</p>
                        </div>
                        <div id="buysellhomeprofile3_2">
                            <p class="p1">0</p>
                            <p>Favorites</p>
                        </div>
                        <div id="buysellhomeprofile3_3">
                            <p class="p1">0</p>
                            <p>My coupons</p>
                        </div>
                    </div>
                </div>
                <div class="myOrders">
                    <p id="myordersP1">My Orders</p>
                    <p  id="myordersviewall" >View all</p>
                    <div id="myordersline"></div>
                    <div id="sourceNow">
                        <p> No orders yet…</p>
                        <p>Get US $10 off your first order over US $100 with a new supplier</p>
                        <input type="submit" value="Source now">
                    </div>
                </div>
                </div>
                <div class="RECOMMENDATIONS">
                    <p id="RECOMMENDATIONSP1">RECOMMENDATIONS</p>
                    <p  id="RECOMMENDATIONSviewall" >View all</p>
                    <div id="RECOMMENDATIONSline"></div>
                    <div id="Teamwork">
                        <p>Teamwork!</p>
                        <p>Oazada.com recommends products based on your preferences and favorites. 
                            PersonalizeStart personalizing now to get product recommendations.</p>
                        <input type="submit" value="Personalize">
                    </div>
                </div>
                <div class="ratehome">
                    <p class="ratehomep1">How would you rate your experience on this page?</p>
                    <div onclick="feedBack(event)";>
                        <p onmouseover="hoverEmoj(event)"; onmouseleave="hoverEmoj2(event)"; style="font-size:20px;">😔</p>
                        <p class="emoji">Very bad</p>
                    </div>
                    <div onclick="feedBack(event)";>
                        <p onmouseover="hoverEmoj(event)"; onmouseleave="hoverEmoj2(event)"; style="font-size:20px;">😕</p>
                        <p class="emoji">Bad</p>
                    </div>
                    <div onclick="feedBack(event)";>
                        <p onmouseover="hoverEmoj(event)"; onmouseleave="hoverEmoj2(event)"; style="font-size:20px;">😐</p>
                        <p class="emoji">Neutral</p>
                    </div>
                    <div onclick="feedBack(event)";>
                        <p onmouseover="hoverEmoj(event)"; onmouseleave="hoverEmoj2(event)"; style="font-size:20px;">😃</p>
                        <p class="emoji">Good</p>
                    </div>
                    <div  onclick="feedBack(event)"; >
                        <p onclick="feedBack(event)"; onmouseover="hoverEmoj(event)"; onmouseleave="hoverEmoj2(event)"; style="font-size:20px;">😆</p>
                        <p class="emoji">Great</p>
                    </div>
                    <div  id="feedback">
                        <p>We're sorry to hear that.<br> Please tell us what we can do better.</p>
                        <textarea cols="40"  placeholder="your response here"></textarea>
                        <br>
                        <input type="submit" name="feedback" value="Submit">
                    </div>
                </div>
                <div onmouseover="productUpdate()"; onmouseleave=" productUpdate2()"; class="productupdate">
                        <p id="productupdate1">Product</p>
                        <p >My product</p>
                        <a hred="addproduct"><p id="productupdate3">Display a new product</p></a>
                        <p id="productupdate2">All product</p>
                        <p>Manage photo bank</p>
                        <p>Manage smart Editing<br>Navigations<br>Templates</p>
                        <p>Group and Sort product</p>
                        <p>Trash</p>
                        <p>Listing Optimization<br>Tool</p>
                        <div id="productupdateline">
                        </div>
                        <p>Product Listings</p>
                        <p>Search Tool For</p>
                </div>
            </div>
            <div class="listorder">
                <div id="orders1">
                    <p class="listorderp1">Order</p>
                    <input class="listorderbtn1" type="button" value="Sell">
                    <div id="orders2">
                        <input type="checkbox" >
                        <p>Code orders</p>
                        <p>Customer</p>
                        <p>Total price</p>
                        <p>Status</p>
                    </div>
                    <?php
                        while($row=mysqli_fetch_assoc($sql_SelectOrder)){
                            $Codeorder=$row['Codeorders'];
                            $Customer=$row['Customer'];
                            $Totalprice=$row['Totalprice'];
                            if($row['Statuss']==1){
                                    $Status="Success";
                            }
                            else{
                                    $Status="Waiting";
                            }     
                   ?>
                        <div onclick="orderDetail(event)";  onmouseover="hoverOrder(event)"; onmouseleave="leaveOrder()"; class="orders3">
                            <input type="checkbox">
                            <p><?=$Codeorder?></p>
                            <p><?=$Customer?></p>
                            <p><?=$Totalprice?></p>
                            <p><?=$Status?></p>
                        </div>
                  <?php
                        }
                  ?>
                   <?php
                        $i=0;
                        while($row2=mysqli_fetch_assoc($sql_SelectOrder2)){
                            $Codeorder=$row2['Codeorders'];
                            $Customer=$row2['Customer'];
                            $Totalprice=$row2['Totalprice'];
                            if($row2['Statuss']==1){
                                    $Status="Success";
                            }
                            else{
                                    $Status="Waiting";
                            }
                            $product=explode(",",$row2['Product']);
                            $quanlity=explode(",",$row2['Quanlity']);
                                
                    ?>
                        <div  class="orderdetail">
                            <div id="orderdetail">
                                <p>Order detail</p>
                                <i onclick="closeOrderDetail(event)"; class="far fa-window-close closeorderdetail"></i>
                                <div class="orderinfo">
                                    <label>Code orders<label>&nbsp;&nbsp;<input type="text" value="<?=$Codeorder?>">
                                    &nbsp;&nbsp;<label>Customer<label>&nbsp;&nbsp;<input type="text" value="<?=$Customer?>">
                                    <br>
                                    <br>
                                    &nbsp;&nbsp; <label>Total price<label>&nbsp;&nbsp;<input type="text" value="<?=$Totalprice?>">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Status<label>&nbsp;&nbsp;<input type="text" value="<?=$Status?>"><br><br>
                                    <label class="Ordernotes">Order notes</label>&nbsp;&nbsp;<textarea style="border-radius:8px"cols="55" rows="2"></textarea> 
                                </div>
                                    <div class="productDetailorder">
                                        <label class="p1">Product detail</label>
                                        <div class="DetailOrder DetailOrder1">
                                            <label>Product</label>
                                            <label>Quanlity</label>
                                            <label>Unit price</label>
                                        </div>
                                        <?php
                                            for($i=0;$i<count($product);$i++){
                                        ?>  
                                            <div class="DetailOrder DetailOrder2">
                                                <label><?=$product[$i]?></label>
                                                <label><?=$quanlity[$i]?></label>
                                                <label>1</label>
                                            </div>
                                        <?php
                                            }
                                        ?>                                   
                                        <div class="DetailOrder3">
                                            <label>Date</label>
                                            <label>Month</label>
                                            <label>Year</label>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    <?php
                        }
                  ?>
                </div>
            </div>
    </body> 
    <script>
        
        // function hoveritem(event){
        //     event.target.style.backgroundColor="rgb(235, 223, 223,0.3)";
        //     event.target.style.opacity="1";
            
        // }
        // function leaveitems(event){
        //     event.target.style.backgroundColor="transparent";
        //     event.target.style.opacity="0.7";
        // }
        // function leaveicon(event){
        //     event.target.style.backgroundColor="transparent";
        // }
        var buySell=document.getElementById("change").querySelectorAll('p');
        var changeBuy=document.getElementById("changebuy");
        var changeSell=document.getElementById("changesell");
        var divFeedBack=document.getElementById("feedback");
        var homeNavigation=document.getElementsByClassName("homeNavigation")[0];
        function buysellchange(){
            
                changeBuy.style.backgroundColor="#ff7519";
                changeSell.style.backgroundColor="transparent";
                var buyLead=document.getElementsByClassName("leadNavigation")[0];
                buyLead.style.display="block";
                document.getElementsByClassName("productNavigation")[0].style.display="none";
        }
       
        function hoverEmoj(event){
              event.target.style.transition="0.5 all";
              event.target.style.transform="scale(2,2)";
              event.target.style.opacity="1";
        }
        function hoverEmoj2(event){
              event.target.style.transition="0.5 all";
              event.target.style.transform="scale(1,1)";
        }
        function feedBack(event){
          
            divFeedBack.style.display="block";
            event.target.style.opacity="1";
        }
        var changeColor=document.getElementById("changeColorClick").querySelectorAll('div');
        var orderNavigation=document.getElementsByClassName("orderavigation")[0];
        var orderList=document.getElementsByClassName("listorder")[0];
        function changeBg(event){
           
            for(var i=0;i<changeColor.length;i++){
                if(event.target==changeColor[i]){
                    changeColor[i].style.opacity="1";
                    changeColor[i].style.backgroundColor="#e1dadaaa";
                    if(event.target==orderNavigation){
                        orderList.style.display="block";
                        document.getElementById("buysellhomeprofile").style.display="none";
                        document.getElementsByClassName("myOrders")[0].style.display="none";
                        document.getElementsByClassName("RECOMMENDATIONS")[0].style.display="none";
                        document.getElementsByClassName("ratehome")[0].style.display="none";
                    }
                    else{
                        orderList.style.display="none";
                    }
                    if(event.target==homeNavigation){
                        orderList.style.display="none";
                        document.getElementById("buysellhomeprofile").style.display="block";
                        document.getElementsByClassName("myOrders")[0].style.display="block";
                        document.getElementsByClassName("RECOMMENDATIONS")[0].style.display="block";
                        document.getElementsByClassName("ratehome")[0].style.display="block";
                    }
                }
                else{
                    changeColor[i].style.opacity="0.7";
                    changeColor[i].style.backgroundColor="transparent";
                }
            }   
        }
        function sellMode(){
            var buyLead=document.getElementsByClassName("leadNavigation")[0];
            buyLead.style.display="none";
            document.getElementsByClassName("productNavigation")[0].style.display="block";
            changeBuy.style.backgroundColor="transparent";
            changeSell.style.backgroundColor="#ff7519";
        }
        function productUpdate(){
            document.getElementsByClassName("productupdate")[0].style.display="block";
        }
        function productUpdate2(){
            document.getElementsByClassName("productupdate")[0].style.display="none";
        }
        var orderhover=document.querySelectorAll(".orders3");
        var orderDetal=document.querySelectorAll(".orderdetail");
        var closeorderDetail=document.querySelectorAll(".closeorderdetail");
        function hoverOrder(event){
           for(var i=0;i<orderhover.length;i++){
                if(event.target==orderhover[i]){
                    orderhover[i].style.boxShadow="0px 0px 2px 2px 	#C0C0C0";
                }
                else{
                    orderhover[i].style.boxShadow="0px 0px 0px 0px transparent";
                }
           }
        }
        function leaveOrder(){
            for(var i=0;i<orderhover.length;i++){
                orderhover[i].style.boxShadow="0px 0px 0px 0px transparent";
            }
        }
        function orderDetail(event){
            for(var i=0;i<orderhover.length;i++){
                if(event.target==orderhover[i]){
                    orderDetal[i].style.display="block";
                }
            }
        }
        function closeOrderDetail(event){
            for(var i=0;i<closeorderDetail.length;i++){
                if(event.target==closeorderDetail[i]){
                    orderDetal[i].style.display="none";
                }
            }
        }
        
        function orderClick(){
            orderList.style.display="block"; 
        }
        
    </script>
</html>