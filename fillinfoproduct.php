<?php
SESSION_START();
$count_productphoto="";
$productphotoarr="";
$productphoto="";
$productname="";
$Productkeyword=""; 
$productgroup="";
$type="";
$orderdirecly="";
$pricesetting="";
$unittype="";
$paymentoption="";
$setting="";
$seaport="";
$Supplyability="";
$Packagingtype="";
$PackagingPhoto="";
$PackagingPhoto2="";
$CustomService="";
$Privateofferservice="";
$productphotoreverse[]="";
$uploadpackagingphoto="";
$paymentoptionarr="";
$Productkeywordarr="";
$userid="";
$companyname="";
$id="";
$img="";
   
    $servername="localhost";
    $database="alibaba";
    $username="root";
    $password="";
    $conn=mysqli_connect($servername,$username,$password,$database);
    if(!$conn){
        die();
    }
    if(isset($_SESSION['user_id'])){
        $id=$_SESSION['user_id'];
       
    }
    
    if(isset($_GET['submitImgVideo'])){
        $productname=$_GET['productname'];
        $Productkeywordarr=$_GET['productkeyword'];
        for($i=0;$i<count($Productkeywordarr);$i++){
            $Productkeyword=$Productkeywordarr[$i]." ".$Productkeyword;
         }
        $productgroup=$_GET['productgroup'];
        $type=$_GET['Producttype'];
        $orderdirecly=$_GET['ordersdirectly'];
        $PriceSetting=$_GET['PriceSetting'];
        $unittype=$_GET['unittype'];
        $paymentoptionarr=$_GET['paymentoption'];
        
        for($i=0;$i<count($paymentoptionarr);$i++){
            $paymentoption=$paymentoptionarr[$i]." ".$paymentoption;
         }
        $setting=$_GET['Settings'];
        $seaport=$_GET['seaport'];
        $Supplyability=$_GET['Supplyability'];
        $Packagingtype=$_GET['Packagingtype'];
        $PackagingPhoto=$_GET['uploadpackagingphoto'];
        $PackagingPhoto2=$_GET['uploadpackagingphoto2'];
        $productphotoarr=$_GET['productphoto'];
        $uploadpackagingphoto= $PackagingPhoto." ".$PackagingPhoto2;
        $productphotoreverse=array_reverse($productphotoarr);
        for($i=0;$i<count($productphotoreverse);$i++){
           $productphoto=$productphotoreverse[$i]." ".$productphoto;
        }
        $img="image/".$productphotoarr[0];
   
        $CustomService=$_GET['customservice'];
        $Privateofferservice=$_GET['privateoffer'];
        $sqlinsert="INSERT INTO addinfoproduct 
        (ProductName,Productkeyword,productgroup,Producttype,orderdirecly,pricesetting,unittype,paymentoption,setting,seaport,Supplyability,Packagingtype,PackagingPhoto,productphoto,CustomService,Privateofferservice,id) 
        VALUES('$productname','$Productkeyword','$productgroup','$type','$orderdirecly','$pricesetting','$unittype','$paymentoption','$setting','$seaport','$Supplyability','$Packagingtype','$uploadpackagingphoto','$productphoto','$CustomService','$Privateofferservice',$id)";
        $sqlupdateproduct=mysqli_query($conn,$sqlinsert);
        $sqlselectcompanyname="SELECT companyname FROM userprofile WHERE userid=$id";
        $selectcompanyname=mysqli_query($conn,$sqlselectcompanyname);
        if($companyname1=mysqli_fetch_assoc($selectcompanyname)){
            $companyname=$companyname1['companyname'];
        }
        $insertbusiness="INSERT INTO business (tenCty,userid) VALUES('$companyname',$id)";
        $businessdata=mysqli_query($conn,$insertbusiness);
        if($businessdata){
            $sqlmacty="SELECT maCty FROM business WHERE userid=$id";
            $selectmacty=mysqli_query($conn,$sqlmacty);
            if($macty1=mysqli_fetch_assoc($selectmacty)){
            $macty=$macty1['maCty'];
           }
           
            $insertproduct="INSERT INTO product (TENSP,DONGIA,HINHANH,MOTA,maCty,userid) VALUES('$productname',1,'$img','a',$macty,$id)";
            $queryproduct=mysqli_query($conn,$insertproduct);
            
        }
    }
?>

<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="css_file.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
        <script src="slide.js"></script>
        <title>My Oazada</title>
        <script>
              function(){
                $(document).ready(function(){
                    $('#labelfileupload').onclick(function(){
                            // var img=$('fileupload').val();
                            alert("1");
                    });
                });
            }
        </script>
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
              
        </div>
</div>
            <div id="information">
                <input style="border-top: 1px solid #ff7519;" id="first_btn" onclick="changebg(event)"; type="button" value="Basic infomation">
                <input onclick="changebg(event)"; type="button" value="Trade infomation">
                <input onclick="changebg(event)"; type="button" value="Logistics infomation">
                <input onclick="changebg(event)"; type="button" value="Product Description">
                <input onclick="changebg(event)"; type="button" value="Featured Services & Others">
            </div>
            <div id="primarycategory">
                <p>Food & Beverage>>Coffee>>Instant Coffee</p>
                <input type="button" value="Select new category">
            </div>
            <span id="showdiv">
                <div class="basicinformation showdiv">
                    <p class="basicp1">Basic information</p>
                    <div id="basicinformationline">
                    </div>
                    <form>
                      <div id="basicinfoinput">
                                &nbsp; &nbsp; &nbsp;*<label>Product Name</label>&nbsp;<input  id="productname" type="text" name="productname" required><i onclick="trash1()"; class="fas trash1 fa-trash-alt"></i>
                                <br>
                                <br>
                                *<label>Product Keyword</label>&nbsp;&nbsp;<input id="productkeyword1" type="text" name="productkeyword[]"><i onclick="trash2()"; class="fas productkeyword1 fa-trash-alt"></i><br>
                                <input required class="productkeyword" id="productkeyword2" type="text" name="productkeyword[]"><i onclick="trash3()"; class="fas fa-trash-alt productkeyword2 productkeyword"></i><br>
                                <input required class="productkeyword" id="productkeyword3" type="text" name="productkeyword[]"><i onclick="trash4()"; class="fas fa-trash-alt productkeyword3 productkeyword"></i>
                            </div>
                        <p id="Formoreinformation">For more information about brand, please click <a href="#">here</a> for more details</p>
                    <div class="Productgroup "> 
                            <label>Product Group</label> &nbsp;<select name="productgroup">
                                <option value="coffee">Coffee</option>
                            </select>
                        </div>
                    
                    <div class="Productgroup producttype"> 
                        <label>Type</label> &nbsp;<select name="Producttype">
                            <option value="coffee">Coffee</option>
                        </select>
                    </div>
              </div>
             <div class="tradeinfo showdiv">
                    <p id="tradeinfop1">Trade information</p>
                    <p id="tradeinfop2">Complete trade information helps buyer make better sourcing decisions</p>
                    <div id="tradeinfoline"></div>
                    <br>
                   
                        *<label>Help buyers place orders directly</label><input type="radio" class="ordersdirect" name="ordersdirectly">
                        <label>Yes</label><input checked class="ordersdirect" type="radio" name="ordersdirectly"><label>No</label>
                    

                        <br>
                        <label id="PriceSetting">Price Setting</label>&nbsp;<input type="radio" class="PriceSetting" checked name="PriceSetting">&nbsp;<label class="PriceSetting" >Set uniform price of FOB</label><input class="PriceSetting" type="radio" name="PriceSetting"><label class="PriceSetting">Set one FOB price</label>
                        <br>
                        <br>
                        *<label>Unit Type</label>&nbsp;&nbsp;&nbsp;<select name="unittype" class="unittype"><option value="Box/Boxes">Box/Boxes</option></select><br><br>
                        <label>Uniform price</label>
                        <br>
                        <br>
                        <table >
                        
                    <tr>
                        <td
                        colspan="3"
                        >*MOQ(Box/Boxes) &nbsp;*FOB Price(Box/Boxes)</th>
                            <td rowspan="3" >Preview</th>
                        </tr>
                        <tr>
                            <td > <input type="text"> <input type="text"> </td>
                        </tr>
                        <tr>
                            <td >New price range Can set range price within 4</td>
                        </tr>
                        
                            </table>
                            <br>
                            <br>
                            <label>Payment Option</label><input checked class="paymentoption" type="checkbox" name="paymentoption[]"><label>L/C</label>
                            <input class="paymentoption" type="checkbox" name="paymentoption[]"><label>D/A</label>
                            <input class="paymentoption" type="checkbox" name="paymentoption[]"><label>D/P</label>
                            <input class="paymentoption" type="checkbox" name="paymentoption[]"><label>T/T</label><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="paymentoption" type="checkbox" name="paymentoption[]"><label>Western union</label>
                            <input class="paymentoption" type="checkbox" name="paymentoption[]"><label>Money Gram</label>
                            <div class="addpayment">
                              
                            </div>
                            <div class="Sampleservice">
                                <label>Sample service</label><p>After setting, buyers can order samples throught Secure Payment</p>
                            </div>
                            <div class="Settings">
                                <label>Settings</label><input checked type="radio" name="Settings"><label>Yes</label><input type="radio" name="Settings"><label>No</label>
                            </div>
                    
            </div>
            <div class="logisticinfo showdiv">
                    <label>Delivery</label><table id="logisticinfotb">
                        <tr>
                            <td  colspan="3">
                                <label>Quanlity(Box/Boxes)</label> <label class="tdtext1" >Estimated Time(Day/Days)</label>
                            </td>
                            <td rowspan="1"><label>preview</label></td>
                            
                        </tr>
                        <tr>
                            <td  colspan="3">
                                <input class="tdtext1" type="text">  <input class="tdtext1" type="text">
                            </td>
                            <td rowspan="1"><label>preview</label></td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <label>Increase the number of interval</label><label>(can not see more than 3 ranges)</label>
                            </td>
                            <td rowspan="1"><label>preview</label></td>
                        </tr>

                    </table>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Sea port</label><input class="seaport" name="seaport" type="text" required>
                    <br>
                    <br>
                    <label>Supply ability</label><input class="Supplyability" name="Supplyability" type="text" required>
                    <select name="Supplyability">
                        <option value="Box/Boxes">Box/Boxes</option>
                    </select>
                    <label>per</label>
                    <select name="pertime">
                        <option valie="day">Day</option>
                    </select>
                    <p class="Addmoreinfo">Add more info</p>
                    <label>Packaging type</label><input type="text" name="Packagingtype" class="Packagingtype" required>
                    <br>
                    <br>
                    <br>
                    <br>
                    <label>Packaging Photo</label> <input type="button" class="PackagingPhoto" value="Select from photo bank">|<input class="PackagingPhoto" type="button" value="Delete All">
                    <p style="color:black;font-size:12px;opacity:0.5;margin-left:190px;">Supported formats include PNG and JPG, Size:Max 2MB</p>
                    <div id="uploadpackagingphoto">
                        <input id="fileupload" type="file" name="uploadpackagingphoto" required>
                        <div class="lablefileupload">
                                <label   onclick="uploadFile()"; id="labelfileupload" class="lablefileupload1" for="fileupload">+</label>
                                <label  id="labelfileupload2" class="lablefileupload2"  for="fileupload">
                                    Upload
                                </label>
                                <img id="lablefileuploadimg1" src="image/app1.png">
                        </div>
                        <input id="fileupload1" type="file" name="uploadpackagingphoto2"  requried>
                        <div class="lablefileupload" >
                                <label  id="labelfileupload3" class="lablefileupload1 lablefileuploadnone" for="fileupload1">+</label>
                                <label id="labelfileupload4" class="lablefileupload2 lablefileuploadnone"  for="fileupload1">
                                    Upload
                                </label>
                                <img id="lablefileuploadimg2" src="image/app1.png">
                        </div>
                    </div>
            </div>
            <div class="prdescription showdiv">
                <p class="prdsp1">Product Description</p>
                <div id="dsline"></div>
              
                    *<label>Product photo</label><input   requried type="file" id="productphoto" name="productphoto[]" multiple>
                    
                    &nbsp;&nbsp;&nbsp;&nbsp;<buton><label  for="productphoto">Browse</label></buton>
                    &nbsp;&nbsp;&nbsp;&nbsp;<label class="productphoto">Select from photo bank</label>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<label class="productphoto">Delete all</label>
                    <div id="image_pr">
                        <div class="image_pr">
                                <img alt="imageProduct" src="image/camera.png">
                                <img alt="imageProduct" src="image/camera.png">
                                <img alt="imageProduct" src="image/camera.png">
                                <img alt="imageProduct" src="image/camera.png">
                                <img alt="imageProduct" src="image/camera.png">
                        </div>
                    </div>
                    <div id="product_video">
                        <p>Product video</p> 
                           
                        <div class="pr_video">
                                <video src=""></video>
                        </div>
                    </div>
                    
                  
            </div>
                <div class="featured showdiv"> 
                    <p class="featuredp1">Featured service & others</p>
                    <div id="featureline"></div>
                   
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="">Custom Service</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"checked name="customservice"><label for="">Support for custom service(ecommend)</label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="customservice"><label for="">No</label>
                        <br>
                        <br>
                        <label for="">Private offer service</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="privateoffer"><label for="">Private offer</label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input checked type="radio" name="privateoffer"><label for="">No offer</label>
                        <br><br>
                        <input  class="submitImgVideo" type="submit" name="submitImgVideo" value="Submit">
                    </form>
                    
                </div>
        </span>    
    </body>
    <script>
            var info=document.getElementById("information").querySelectorAll("input");
            var showDiv=document.getElementById("showdiv").querySelectorAll(".showdiv");
            function changebg(event){
                for(var i=0;i<info.length;i++){
                    if(event.target==info[i]){
                        info[i].style.borderTop="1px solid #ff7519";
                        info[i].style.color="#ff7519";
                        showDiv[i].style.display="block";
                    }
                    else{
                        info[i].style.borderTop="none";
                        info[i].style.color="black";
                        showDiv[i].style.display="none";
                    }
                }
            }
            var trash_1=document.getElementById("productname");
            var trash_2=document.getElementById("productkeyword1");
            var trash_3=document.getElementById("productkeyword2");
            var trash_4=document.getElementById("productkeyword3");
            function trash1(){
                trash_1.value="";
            }
            function trash2(){
                trash_2.value="";
            }
            function trash3(){
                trash_3.value="";
            }
            function trash4(){
                trash_4.value="";
            }
            var img1=document.getElementById("lablefileuploadimg1");
            var img2=document.getElementById("lablefileuploadimg2");
            var fileUpload1=document.getElementById("labelfileupload");
            var fileUpload2=document.getElementById("labelfileupload2");
            var fileUpload3=document.getElementById("labelfileupload3");
            var fileUpload4=document.getElementById("labelfileupload4");
            fileupload.addEventListener("change", (event) => {
            const files  = event.target.files;
            const getImage = files[0].name;
            img1.style.display="block";
            img1.src="image"+"/"+getImage;
            img1.style.width="100%";
            img1.style.height="130px";
            fileUpload1.style.display="none";
            fileUpload2.style.display="none";
           
        })
        fileupload1.addEventListener("change", (event) => {
            const  files  = event.target.files;
            const getImage = files[0].name;
            img2.style.display="block";
            img2.src="image"+"/"+getImage;
            img2.style.width="100%";
            img2.style.height="130px";
            fileUpload3.style.display="none";
            fileUpload4.style.display="none";
           
        })
        var imgpr=document.getElementsByClassName("image_pr")[0].querySelectorAll("img");
        productphoto.addEventListener("change",(event) => {
            const imagefile=event.target.files;
           if(imagefile.length<=5){
                for(var i=0;i<imagefile.length;i++){
                    const getImage = imagefile[i].name;
                    imgpr[i].src="image/"+getImage;
                }
            }
            console.log(imagefile);
        })
       
    </script>
</html>