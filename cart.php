<?php
    session_start();
    $fullname="";
    
    if(isset($_SESSION['login'])){
        $fullname=$_SESSION['login'];
    }
    else{
        header("location:login.php");
    }
    $count_cart=count($_SESSION['cart']);
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
    $company_name="";
    $countcart=0;
    $trashkey=0;
    $index=0;
    $orderinfo="";
    $quanlity="";
    $totalprice="";
    $id="";
    
    $conn=mysqli_connect($server,$username, $password,$database);
    if(!$conn){
        die();
    }
    if(isset($_SESSION['user_id'])){
        $id=$_SESSION['user_id'];
    }
   
    if(isset($_GET['order_cart'])){
        $countcart=1;
    }
    if(isset($_GET['hiddenkey'])){
        $trashkey=(int)$_GET['hiddenkey'];
        array_splice($_SESSION['cart'],$trashkey,1);
    }
    if(isset($_GET['order_quanlity'])&&$_GET['order_quanlity']==0){
       ?>
            <!-- <p>Please choose quanlity</p> -->
       <?php
    }
    else{
        if(isset($_GET['order_cart'])){
            $orderinfo=$_GET['order_info'];
            $quanlity=$_GET['order_quanlity'];
            $totalprice=$_GET['totalprice'];
            $sqlInsertOrder="INSERT INTO listoder (Customer,Totalprice,Statuss) VALUES('$fullname',$totalprice,0)";
            $sql_insert_order=mysqli_query($conn,$sqlInsertOrder);
            $sqlInsertOrderDetail="INSERT INTO orderdetail (Product,Quanlity) VALUES('$orderinfo',$quanlity)";
            $sql_InsertOrderDetail=mysqli_query($conn,$sqlInsertOrderDetail);
        } 
    }  
  
?>
<!DOCTYPE HTML>
<html>
        <head>
            <title>Cart</title>
            <link rel="stylesheet" href="css_file.css">
            <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" /> 
           
            
        </head>
        <body id="body">
            <div class="header_order">
                <a href="index.php"><img src="image/logo.png"></a>
                <p>BUY NOW</p>
            </div>
            <div class="cart_checkall">
                <input onchange="productNumberdis()"; onclick="checkAll()"; id="input_check_all"type="checkbox" name="checkall">
                <p>Select all()</p>
            </div>
            <?php
                if($count_cart>0){
                    foreach( $_SESSION['cart'] as $key){
                        $select_product_detail="SELECT * FROM product,product_detail WHERE product.MASP=product_detail.MASP and product.MASP=$key";
                        $info=mysqli_query($conn,$select_product_detail);
                        while($row_info=mysqli_fetch_assoc($info)){
                            $product_img=$row_info['HINHANH']; 
                            $product_name=$row_info['TENSP'];
                            $product_price=$row_info['DONGIA'];
                            $product_color=$row_info['MAUSAC'];
                            $sql_company_name="SELECT * FROM business WHERE maCty=$key";
                            $result_company_name=mysqli_query($conn,$sql_company_name);
                            if($row_company=mysqli_fetch_assoc($result_company_name)){
                                $company_name=$row_company['tenCty'];
                            }
                        }
                        $colorarr=explode(',',$product_color);
                        
                      
            ?>
                <div class="selected_product">
                        <input onclick="productNumberdis()"; class="select_product select_product1" type="checkbox" name="select_product[]" value="1">
                        <input class="productkeyhidden" type="hidden" value="<?=$key?>">
                        <i class="fas fa-store"></i>
                        <p><?=$company_name?></p>
                        <div class="chat_now">
                            <i class="fas fa-comment"></i>
                            <p>Chat now</p>
                        </div>
                        <div class="selected_line">
                        </div>
                        <input class="select_product" type="checkbox" name="select_product[]" value="2">
                        <div class="product_img">
                            <img src="<?= $product_img?>">
                        </div>
                        <p class="product_name"><?=$product_name?></p>
                        <form>
                            <input type="hidden" value="<?=$index?>" name="hiddenkey">
                            <input type="submit" name="trashcart" class="trashcart" value="Trash">
                        </form>
                        
                </div>
                <div class="select_dropdown">
                            <div class="color_dropdown"> 
                                <i class="fas fa-chevron-down cart_chevron"></i>
                            </div>
                            <div class="items-main">
                                        <p>Color:</p>
                                        <img id="itemMainImage" src="<?="image/"."red".".png"?>">
                                        <p>Size:</p>
                                        <p>35</p>
                                    </div>
                            <div class="dropdownlist">
                                <?php
                                $index++;
                                foreach($colorarr as $color){
                                ?>
                                    <div class="items">
                                        <p>Color:</p>
                                        
                                             <img class="imageColor" src="<?="image/".$color.".png"?>">
                                        
                                        <p>Size:</p>
                                        <p>35</p>
                                        <input type="hidden" name="colorproduct" value="<?=$color?>">
                                        
                                    </div>
                                </a>
                              <?php
                                }
                              ?>
                            </div>
                        </div>
                        <div class="price_product">
                            <p class="price_product_1"><?="USD"." ".$product_price."/pieces"?></p>
                            <input class="productnumber" onchange="countproduct()" type="number" name="productnumber" required value="0">
                        </div>
                    
                    <?php
                            
                    }
                       }
                    ?>
                    
                <div class="summary_order">
                    <p class="summary_order1" >Summary</p>
                    <br>
                    <p class="summary_order2" id="summary_order1">Price</p>
                    <p class="summary_order3" id="summary_order2">USD 8.0</p>
                    <br>
                    <p class="summary_order4 " id="summary_order3">discount</p>
                    <p class="summary_order5" id="summary_order4">-USD 0</p>
                    <div class="summary_line"></div>
                    <p class="summary_order6">Total</p>
                    <p class="summary_order7">USD 0.00</p>
                    <br>
                    <p class="summary_order8">(Taxes and delivery charges are not included)</p>
                    <form method="GET" >
                        <input type="hidden" name="order_info" value="a" id="order_info">
                        <input type="hidden" name="order_quanlity" value="0" id="order_quanlity">
                        <input type="hidden" name="totalprice" value="0" id="totalprice">
                        <input type="submit"  name="order_cart" class="submit_cart" value="Order Now">
                    </form>
                </div>
                <?php
                    if($countcart==1){
                ?>
                    <div id="ordersuccess">
                        <p>Order Success</p>
                    </div>
                <?php
                    }
                ?>
        </body>
            <script>
                     var quanlityinput=document.querySelectorAll("input[type='number']");
                     var checkBoxProduct=document.querySelectorAll(".select_product1");
                     var productNumber=document.querySelectorAll(".productnumber");
                     var orderInfo=document.getElementById("order_info");
                     var orderQuanlity=document.getElementById("order_quanlity");
                     var productKey=document.querySelectorAll(".productkeyhidden");
                     var totalPrice=document.getElementById("totalprice");
                    function productNumberdis(){ 
                        let productarr=[];
                        orderInfo.value="";
                        for(var i=0;productNumber.length;i++){
                            if(checkBoxProduct[i].checked==true){
                                quanlityinput[i].style.opacity="1";
                                productarr.push(productKey[i].value);
                                orderInfo.value=productarr;              
                              
                            }
                            else{
                                quanlityinput[i].style.opacity="0.2";
                                
                            }
                        }
                        // orderInfo.value= productarr;

                    }
                var quanlity=0;
                var quanlityProduct=document.getElementById("price_product_2");
                    var ckhA=document.getElementById("input_check_all");
                    var checkAllProduct = document.querySelectorAll("input[type='checkbox']");       
                    function checkAll(){
                       
                        if(ckhA.checked==true)
                        {                         
                            checkAllProduct.forEach(function(checkbox){
                                    checkbox.checked=true;
                            });   
                                                                  
                        }
                        else{
                            checkAllProduct.forEach(function(checkbox){
                                    checkbox.checked=false;
                            }); 
                        }
                       
                    }
                    
                    function countproduct(){
                        var sumquanlity=0;
                        let quanlityarr=[];
                        if(ckhA.checked==true){
                            
                            for(var i=0;i<quanlityinput.length;i++){
                                sumquanlity=sumquanlity+parseInt(quanlityinput[i].value);
                                quanlityarr.push(quanlityinput[i].value);
                                orderQuanlity.value=quanlityarr;
                            }
                            document.getElementsByClassName("summary_order7")[0].innerHTML="USD"+" "+sumquanlity;
                            totalPrice.value=sumquanlity;
                            
                        }
                        else{
                            let quanlityarr=[];
                            for(var i=0;i<checkBoxProduct.length;i++){
                                if(checkBoxProduct[i].checked==true){
                                    sumquanlity=sumquanlity+parseInt(quanlityinput[i].value);
                                    quanlityarr.push(quanlityinput[i].value);
                                    orderQuanlity.value=quanlityarr;
                                }
                            }
                            document.getElementsByClassName("summary_order7")[0].innerHTML="USD"+" "+sumquanlity;
                            totalPrice.value=sumquanlity;
                        }
                    }
                   
                    function orderSuccess(){

                    }
                    
            </script>
</html>
