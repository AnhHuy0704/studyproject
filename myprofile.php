<?php
    session_start();
    if(!isset($_SESSION['login'])){
        header("location:login.php");
    }
    
    $username="root";
    $database="alibaba";
    $password="";
    $server="localhost";
    $firstname="";
    $lastname="";
    $gender="";
    $jobtitle="";
    $companyname="";
    $Email="";
    $id="";
    $rowBasicInfo="";
    $login_name="";
    $YearEstablished="";
    $AlternativeEmail="";
    $fax="";
    $telephone="";
    $fb="";
    $Linkedin="";
    $telephone="";
    $mobile="";
    $website="";
    $Businesstype="";
    $TotalofEmployees="";
    $MainProducts="";
    $RegisteredAddress="";
    $OperationalAddress="";
    $AboutUs="";
    $Businesstypearr="";
    $AnnualPurchasingVolume="";
    $PrimarySourcingPurpose="";
    $AverageSourcingFrequency="";
    $PreferredSupplierQualifications="";
    $PreferredIndustries="";
    $MainProductsarr="";
    $updateSuccess="";
    $PrimarySourcingPurposearr="";
    $PreferredIndustriesarr="";
    $PreferredSupplierQualificationsarr="";
    $AverageSourcingFrequencyarr="";
    $avatar="";
    $conn=mysqli_connect($server,$username,$password,$database);
    if(!$conn){
        die("failed");
    }
    if(isset($_SESSION['user_id'])){
        $id=$_SESSION['user_id'];
        
    }
    $accountinfo="SELECT * FROM account WHERE id=$id";
    $resultaccount=mysqli_query($conn,$accountinfo);
    while($rowaccount=mysqli_fetch_assoc($resultaccount)){
        $avatar=$rowaccount['avatar'];
    }
    $userprofile="SELECT * From userprofile WHERE userid=$id";
    $resultuserprofile=mysqli_query($conn,$userprofile);
    while($userprofile=mysqli_fetch_assoc($resultuserprofile)){
            $firstname=$userprofile['firstname'];
            $lastname=$userprofile['lastname'];
            $YearEstablished=$userprofile['YearEstablished'];
            $Email=$userprofile['email'];
            $AlternativeEmail=$userprofile['AlternativeEmail'];
            $fax=$userprofile['Fax'];
            $telephone=$userprofile['Telephone'];
            $mobile=$userprofile['Mobile'];
            $fb=$userprofile['Facebook'];
            $Linkedin=$userprofile['Linkedin'];
            $companyname=$userprofile['companyname'];
            $website=$userprofile['OfficialWebsite'];
            $Businesstype=$userprofile['Businesstype'];
            $TotalofEmployees=$userprofile['TotalofEmployees'];
            $MainProducts=$userprofile['MainProducts'];
            $RegisteredAddress=$userprofile['RegisteredAddress'];
            $OperationalAddress=$userprofile['OperationalAddress'];
            $AboutUs=$userprofile['AboutUs'];
            $AnnualPurchasingVolume=$userprofile['AnnualPurchasingVolume'];
            $PrimarySourcingPurpose=$userprofile['PrimarySourcingPurpose'];
            $AverageSourcingFrequency=$userprofile['AverageSourcingFrequency'];
            $PreferredSupplierQualifications=$userprofile['PreferredSupplierQualifications'];
            $PreferredIndustries=$userprofile['PreferredIndustries'];
            $jobtitle=$userprofile['jobtitle'];
    }
    if(isset($_GET['updateBasicInfo'])){
        $firstname=$_GET['firstname'];
        $lastname=$_GET['lastname'];
        $gender=$_GET['gender'];
        $jobtitle=$_GET['jobtitle'];
        $companyname=$_GET['companyname'];
        $Email=$_GET['Email'];
        $sql_insert_basic_info="UPDATE userprofile SET firstname='$firstname',lastname='$lastname',gender='$gender',jobtitle='$jobtitle',companyname='$companyname',email='$Email' WHERE userid=$id";
        $loginname="UPDATE account SET login_name='$Email' WHERE id=$id";
        $resultLoginName=mysqli_query($conn,$loginname);
        $result_basic_info=mysqli_query($conn,$sql_insert_basic_info);
        if($result_basic_info){
            $updateSuccess="1";
        }
    }
    if(isset($_GET['submit_contactinfo'])){
        $Email=$_GET['contactemail'];
        $AlternativeEmail=$_GET['Alternativecontactemail'];
        $mobile=$_GET['mobilecontact'];
        $telephone=$_GET['Telephonecontact'];
        $fax=$_GET['Faxcontact'];
        $fb=$_GET['fblink'];
        $Linkedin=$_GET['linkedinlink'];
        $insert_contact_info="UPDATE userprofile SET email='$Email',AlternativeEmail='$AlternativeEmail',Mobile='$mobile',Telephone='$telephone',Fax='$fax',Facebook='$fb',	Linkedin='$Linkedin' WHERE userid=$id";
        $contact_info=mysqli_query($conn,$insert_contact_info);
        $loginname2="UPDATE account SET login_name='$Email' WHERE id=$id";
        $resultLoginName2=mysqli_query($conn,$loginname2);
    }
    if(isset($_GET['submit_companyinfo'])){
        $companyname=$_GET['infocompanyname'];
        $Businesstypearr=$_GET['infobusinesstype'];
        $Businesstype="";
        for($i=0;$i<count($Businesstypearr);$i++){
            $Businesstype=$Businesstype." ".$Businesstypearr[$i];
        }
       $website=$_GET['infoofficialwebsite'];
       $RegisteredAddress=$_GET['companycountry']." ".$_GET['infoprovinceState']." ".$_GET['infoCity']." ".$_GET['infostreet'];
       $OperationalAddress=$_GET['companycountry2']." ".$_GET['infoprovinceState2']." ".$_GET['infoCity2']." ".$_GET['infostreet2'];
       $YearEstablished=$_GET['infoyearestablished'];
       $TotalofEmployees=$_GET['infoTotalNumberofEmployees'];
       $MainProductsarr=$_GET['infomainProduct'];
       $MainProducts="";
       for($i=0;$i<count($MainProductsarr);$i++){
            $MainProducts=$MainProducts." ".$MainProductsarr[$i];
       }
       $AboutUs=$_GET['infoaboutus'];
       $sql_insert_company_info="UPDATE userprofile SET companyname='$companyname',
       Businesstype='$Businesstype',OfficialWebsite='$website',
       RegisteredAddress='$RegisteredAddress',OperationalAddress='$OperationalAddress',
       YearEstablished=$YearEstablished,TotalofEmployees='$TotalofEmployees',MainProducts='$MainProducts'WHERE userid=$id";
       $companyInfoUpdate=mysqli_query($conn,$sql_insert_company_info);
       if($companyInfoUpdate){
            $updateSuccess="1";
       }
    }
    if(isset($_GET['submit_sourcinginfo'])){
        $AnnualPurchasingVolume=$_GET['AnnualPurchasingVolume'];
        $PrimarySourcingPurposearr=$_GET['PrimarySourcingPurpose'];
        $PrimarySourcingPurpose="";
        for($i=0;$i<count($PrimarySourcingPurposearr);$i++){
            $PrimarySourcingPurpose=$PrimarySourcingPurpose." ".$PrimarySourcingPurposearr[$i];
        }
       $AverageSourcingFrequencyarr=$_GET['AverageSourcingFrequency'];
       $AverageSourcingFrequency="";
       for($i=0;$i<count($AverageSourcingFrequencyarr);$i++){
        $AverageSourcingFrequency=$AverageSourcingFrequency." ". $AverageSourcingFrequencyarr[$i];
     }
     $PreferredIndustries=$_GET['industryA']." ".$_GET['industryB']." ".$_GET['industryC'] ;
     $PreferredSupplierQualificationsarr=$_GET['PreferredSupplierQualifications'];
     $PreferredSupplierQualifications="";
     for($i=0;$i<count($PreferredSupplierQualificationsarr);$i++){
        $PreferredSupplierQualifications=$PreferredSupplierQualifications." ".$PreferredSupplierQualificationsarr[$i];
     }
     $sql_sourcinginfo="UPDATE userprofile SET AnnualPurchasingVolume='$AnnualPurchasingVolume',PrimarySourcingPurpose='$PrimarySourcingPurpose'
     ,AverageSourcingFrequency='$AverageSourcingFrequency',	PreferredIndustries='$PreferredIndustries',PreferredSupplierQualifications='$PreferredSupplierQualifications'";
      $update_sourcinginfo=mysqli_query($conn,$sql_sourcinginfo);
      if($update_sourcinginfo){
        $updateSuccess="1";
      }
    }

?>

<!DOCTYPE HTML>
<html>
    <head>
            <title>My profile</title>
            <link rel="stylesheet" href="css_file.css">
            <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" /> 
    </head>
    <body>
            <div class="header_order">
                <img src="image/logo.png">
                <p>BUY NOW</p>
            </div>
            <div id="infocansee">
               
                    <img  class="infocansee_img" src="<?=$avatar?>">
                    <span id="infocansee_1">
                    <p class="infocansee_name"><?=$firstname." ".$lastname?></p>
                    <img class="infocansee_country" src="image/vietnam.jpg">
                    <p class="infocansee_location">Tai:&nbsp;&nbsp;dsd</p>
                    <p class="infocansee_email">Email:&nbsp;&nbsp;<?=$Email?></p>
                </span>
                <div id="info_line">

                </div>
                <div id="infocansee_2">
                    <p class="infocansee_join">Gia nhap Alibaba.com vao nam:&nbsp;&nbsp;<?=$YearEstablished?></p>
                    <p class="infocansee_mainproduct">San pham chinh la:&nbsp;&nbsp;sieu xe</p>
                </div>
                <div onclick="displayBasicInfo()"; id="infocansee_3">
                    <i class="fas fa-edit edit"></i>
                    <label class="edit" for="edit">Chinh sua<label>
                </div>
            </div>
            <div  id="contactinfo">
                <p class=contactinfo_p >Thông tin liên lạc</p>
                <div id="contactinfo1">
                    <p class="contactinfoContent">Email:&nbsp;&nbsp;<?=$Email?></p>
                    <p class="contactinfoContent">Email thay thế:&nbsp;&nbsp;<?=$AlternativeEmail?></p>
                    <p class="contactinfoContent">Đường liên kết mạng xã hội:&nbsp;&nbsp;<a href="<?=$fb?>"><i class="fab fa-facebook-square socialicon"></i></a>&nbsp;<a href="<?=$Linkedin?>"><i class=" socialicon fab fa-linkedin"></i></a></p>
                </div>
                <div id="contactinfo2">
                    <p class="contactinfoContent">Số fax:&nbsp;&nbsp;<?=$fax?></p>
                    <p class="contactinfoContent">Điện thoại:&nbsp;&nbsp;<?=$telephone?></p>
                    <p class="contactinfoContent">Di động:&nbsp;&nbsp;<?=$mobile?></p>
                </div>
                <div onclick="displaycontactinfo()"; id="contactinfo3">
                    <i class="fas fa-edit edit"></i>
                    <label class="edit" for="edit">Chinh sua<label>
                </div>
            </div>
            <div id="companyinfo">
                <p class="companyinfo_p">Thông tin công ty</p>
                <div id="companyinfo1">
                    <p class="companyinfoContent">Tên công ty:&nbsp;&nbsp;<?=$companyname?></p>
                    <p class="companyinfoContent">Năm thành lập:&nbsp;&nbsp;<?=$YearEstablished?></p>
                    <p class="companyinfoContent">Trang web chính thức:&nbsp;&nbsp;<?=$website?></p>
                    <p class="companyinfoContent">Loại hình kinh doanh:&nbsp;&nbsp;<?=$Businesstype?></p>
                    <p class="companyinfoContent">Tổng số lao động:&nbsp;&nbsp;<?=$TotalofEmployees?></p>
                    <p class="companyinfoContent">Thông tin về thuế:&nbsp;&nbsp;Xem</p>
                </div>
                <div id="companyinfo2">
                    <p class="companyinfoContent">Nền tảng để bán:&nbsp;&nbsp;none</p>
                    <p class="companyinfoContent">Sản phẩm chính:&nbsp;&nbsp;<?=$MainProducts?></p>
                    <p class="companyinfoContent">Địa chỉ đăng ký:&nbsp;&nbsp;<?=$RegisteredAddress?><p>
                    <p class="companyinfoContent">Địa chỉ hoạt động:&nbsp;&nbsp;<?=$OperationalAddress?></p>
                    <p class="companyinfoContent">Về chúng tôi:&nbsp;&nbsp;<?=$AboutUs?></p>
                </div>
                <div onclick="displaycompanyinfo()";  id="companyinfo3">
                    <i class="fas fa-edit edit"></i>
                    <label class="edit" for="edit">Chinh sua<label>
                </div>
            </div>
            <div id="Sourcinginfo">
                <p class="Sourcinginfo_p">Thông tin tìm nguồn cung ứng</p>
                <div id="Sourcinginfo1">
                    <p class="SourcinginfoContent">Khối lượng mua hàng năm:&nbsp;&nbsp;<?=$AnnualPurchasingVolume?></p>
                    <p class="SourcinginfoContent">Mục đích tìm nguồn cung ứng chính:&nbsp;&nbsp;<?=$PrimarySourcingPurpose?></p>
                    <p class="SourcinginfoContent" >Tần suất tìm nguồn cung ứng trung bình:&nbsp;&nbsp;<?=$AverageSourcingFrequency?></p>
                </div>
                <div id="Sourcinginfo2">
                    <p class="SourcinginfoContent">Trình độ chuyên môn của nhà cung cấp ưu tiên:&nbsp;&nbsp;<?=$PreferredSupplierQualifications?></p>
                    <p class="SourcinginfoContent">Ngành ưu tiên:&nbsp;&nbsp;<?=$PreferredIndustries?></p>
                </div>
                <div onclick="displaysourcinginfo()"; id="Sourcinginfo3">
                    <i class="fas fa-edit edit"></i>
                    <label class="edit" for="edit">Chinh sua<label>
                </div>
            </div>
            <div id="infocanseeupdate">
                <div id="basicinfo">
                  
                    <p class="basicinfo_p1">Basic info</p>
                    <p class="basicinfo_p2">Let suppliers know who you are</p>
                    <i onclick="closeBasicinfo()"; class="far fa-times-circle close1"></i>
                    <div id="bg_infocanseeupdate">
                    </div>
                    <img id="avt_basicinfo"src="<?=$avatar?>">
                    <form action="" id="updateBasicinfoForm" enctype="multipart/form-data">
                        <p class="bold_text">First name:</p>&nbsp;<input value="<?=$firstname?>" type="text" name="firstname"> 

                        &nbsp;&nbsp;<p class="bold_text lastName">Last name:</p>&nbsp;<input value="<?=$lastname?>" type="text" name="lastname">
                        <br>
                        <p class="bold_text">Gender:</p><br>
                        <p>Male</p><input checked="checked" type="radio" name="gender" value="male">
                        <p>Female</p><input type="radio" name="gender" value="female">
                        <br>
                        <p class="bold_text">Job title:</p>
                        <br>
                        <input value="<?=$jobtitle?>" type="text" name="jobtitle">
                        <br>
                        <p class="bold_text">Company name:</p>
                        <br>
                        <input value="<?=$companyname?>" type="text" name="companyname">
                        <br>
                        <p class="bold_text">Email:</p>
                        <br>
                        <input value="<?=$Email?>" type="email" name="Email">
                        <br>
                        <input class="updateBasicInfo" type="submit" name="updateBasicInfo">
                        
                    </form>
                </div>
            </div>
            <div id="contactInfoUpdate">
                <div id="contacti4">
                    <p class="basicinfo_p1">Contact Information</p>
                    <p class="basicinfo_p2">Let suppliers know more about your company's background and strengths.</p>
                    <i onclick="closecontactinfo()"; class="far fa-times-circle close3"></i>
                    <form enctype="multipart/form-data" action="" class="updatecontactInfo">
                         <p class="bold_text">Email:</p>
                         <input type="email" value="<?=$Email?>" name="contactemail">
                         <p class="bold_text">Alternative Email:</p>
                         <input type="email" value="<?=$AlternativeEmail?>" name="Alternativecontactemail">
                         <p class="bold_text">Mobile:</p>
                         <input type="text"  value="<?=$mobile?>" name="mobilecontact">
                         <p class="bold_text">Telephone:</p>
                         <input id="telephone" value="<?=$telephone?>" type="text" name="Telephonecontact">
                         <p class="bold_text">Fax:</p>
                         <input id="fax" value="<?=$fax?>" type="text" name="Faxcontact">
                         <p  onclick="copyFromTelephoneNumber()"; id="Copyfromtelephonenumber">Copy from telephone number</p>
                         <p class="SocialLinkscontact bold_text">Social Links</p>
                         <div id="sociallink">
                         <i class="fab fa-facebook-square socialiconcontac"></i>
                         <label>Facebook</label>
                         &nbsp;<input type="text" value="<?=$fb?>"name="fblink">
                         <br>
                         <i class="fab fa-linkedin socialiconcontac"></i>
                         <label>Linkedin</label>
                         &nbsp;&nbsp;&nbsp;<input value="<?=$Linkedin?>" type="text" name="linkedinlink">
                         </div>
                         <input class="updatecompanyinfo updatecontactinfo" type="submit" name="submit_contactinfo" value="Submit">
                    </form>
                </div>
            </div>
            <div id="infoCompanyUpdate">
                <div id="companyi4">
                    <p class="basicinfo_p1">Company Information</p>
                    <p class="basicinfo_p2">Let suppliers know more about your company's background and strengths.</p>
                    <i onclick="closecompanyinfo()"; class="far fa-times-circle close2"></i>
                    <form enctype="multipart/form-data" action="" class="updatecompanyInfo">
                        <p class="bold_text">Company Name:</p>
                        <input value="<?=$companyname?>" type="text" class="long_text" name="infocompanyname">
                        <p class="bold_text" >Business Type:</p>
                            <input id="chk1" checked="checked" type="checkbox" value="onlineshopstore" name="infobusinesstype[]"> <label for="chk1">online shop/store</label><br>
                            <input id="chk2" type="checkbox" value="ManufacturerFactory" name="infobusinesstype[]"> <label for="chk2">Manufacturer/ Factory</label><br>
                            <input id="chk3" type="checkbox" value="TradingCompany" name="infobusinesstype[]"> <label for="chk3">Trading Company</label><br>
                            <input id="chk4" type="checkbox" value="DistributorWholesaler" name="infobusinesstype[]"> <label for="chk4">Distributor/ Wholesaler</label><br>
                            <input id="chk5" type="checkbox" value="Retailer" name="infobusinesstype[]"> <label for="chk5">Retailer</label><br>
                            <input id="chk6" type="checkbox" value="BuyingOffice" name="infobusinesstype[]"> <label for="chk6"> Buying Office</label><br>
                            <input id="chk8" type="checkbox" value="Individual" name="infobusinesstype[]"> <label for="chk7">Individual</label><br>
                            <input id="chk9" type="checkbox" value="other" name="infobusinesstype[]"> <label for="chk9">other</label><br>
                            <input id="chk10" type="checkbox" value="Serviceprovider" name="infobusinesstype[]"> <label for="chk10">Service provider</label><br>
                        <p class="bold_text">Official Website：<p>
                        <input type="text" value="<?=$website?>"class="long_text" name="infoofficialwebsite">
                        <p class="bold_text">Registered Address：</p>
                        <select name="companycountry" class="companyNameCountry">
                            <option selected="selected"value="vietnam">VietNam</option>
                            <option value="china">China</option>
                        </select> 
                        <input required="required" type="text"  placeholder="province/state" name="infoprovinceState">
                        <input required="required" type="text" placeholder="city" name="infoCity">
                        <br>
                        <br>
                        <input  required="required" type="text"  placeholder="street" class="long_text" name="infostreet">
                        <p class="bold_text">Operational Address：</p>
                        <select name="companycountry2" class="companyNameCountry2">
                            <option selected="selected" value="vietnam">VietNam</option>
                            <option value="china">China</option>
                        </select> 
                        <input required="required" type="text" placeholder="province/state" name="infoprovinceState2">
                        <input required="required" type="text" placeholder="city" name="infoCity2">
                        <br>
                        <br>
                        <input required="required" type="text" class="long_text" name="infostreet2" placeholder="street">
                        <br>
                        <br>
                        <input id="sameregisteraddress" value="same" type="checkbox"><label for="sameregisteraddress">Same as registered address</label>
                        <p class="bold_text">Year Established:</p>
                        <input class="long_text" value="<?=$YearEstablished?>"type="text" name="infoyearestablished">
                        <p class="bold_text">Total Number of Employees:</p>
                        <select class="long_text TotalNumberofEmployees" name="infoTotalNumberofEmployees">
                            <option value="">Please select</option>
                            <option value="Fewerthan5People">Fewer than 5 People</option>
                        </select>
                        <p class="bold_text">Main Products:</p>
                        <input  required="required" class="short_text" type="text" name="infomainProduct[]">
                        <input  class="short_text" type="text" name="infomainProduct[]">
                        <input  class="short_text" type="text" name="infomainProduct[]">
                        <input  class="short_text"  type="text" name="infomainProduct[]">
                        <input  class="short_text"  type="text" name="infomainProduct[]">
                        <p class="bold_text">About Us:</p>
                        <textarea name="infoaboutus"required="required" cols="80" rows="8"></textarea>
                        <input class="updatecompanyinfo" type="submit" name="submit_companyinfo" value="Submit">
                    </form>
                </div>
            </div>
            <div id="soucreupdate">
                <div id="sourcinginfo">
                     <p class="basicinfo_p1">Sourcing Information</p>
                     <p class="basicinfo_p2">We will recommend more based on your preferences.</p> 
                     <i onclick="closesourcinginfo()"; class="far fa-times-circle close4"></i>
                     <form enctype="multipart/form-data" action="" class="updateSourcingInfo">
                         <p class="bold_text">Annual Purchasing Volume:</p>
                         <select name="AnnualPurchasingVolume">
                            <option selected="selected" value="Below $10,000">Below $10,000</option>
                         </select>
                         <p class="bold_text">Primary Sourcing Purpose:</p>
                            <input type="checkbox" name="PrimarySourcingPurpose[]" value="Forcompanyinternaluse" id="Forcompanyinternaluse"><label for="Forcompanyinternaluse">For company internal use</label>
                            &nbsp;&nbsp;&nbsp;&nbsp;<input checked="checked" type="checkbox" name="PrimarySourcingPurpose[]" value="Toresellitems" id="Toresellitems"><label for="Toresellitems">To resell items </label>
                            &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="PrimarySourcingPurpose[]" value="Forproduction&processing" id="Forproduction&processing"><label for="Forproduction&processing">For production & processing </label>
                            &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="PrimarySourcingPurpose[]" value="Forpersonaluse" id="Forpersonaluse"><label for="Forpersonaluse">For personal use </label>
                            &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="PrimarySourcingPurpose[]" value="Other" id="Other"><label for="Other">Other</label>

                            <p class="bold_text">Average Sourcing Frequency:</p>
                            <input type="checkbox" checked="checked" name="AverageSourcingFrequency[]" value="Never" id="Never"><label for="Never">Never</label>  
                            &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="AverageSourcingFrequency[]" value="Daily" id="Daily"><label for="Daily">Daily</label>  
                            &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="AverageSourcingFrequency[]" value="Weekly" id="Weekly"><label for="Weekly">Weekly</label> 
                            &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="AverageSourcingFrequency[]" value="Monthly" id="Monthly"><label for="Monthly"> Monthly</label>  
                            &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="AverageSourcingFrequency[]" value="Quarterly" id="Quarterly"><label for="Quarterly">Quarterly</label> 
                            &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="AverageSourcingFrequency[]" value="Onceperyearorless" id="Onceperyearorless"><label for="Onceperyearorless">Once per year or less</label> 
                            &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="AverageSourcingFrequency[] " value="Project-based" id="Project-based"><label for="Project-based">Project-based</label>
                            <p class="bold_text">Preferred Industries:</p>
                            <div id="industryA">
                                <p>Industry A</p>
                                <select name="industryA">
                                    <option selected="selected" value="Electronics">Electronics</option>
                                </select>
                            </div>
                            <div id="industryB">
                                <p>Industry B</p>
                                <select name="industryB">
                                    <option selected="selected" value="Electronics">Electronics</option>
                                </select>
                            </div>
                            <div id="industryC">
                                <p>Industry C</p>
                                <select name="industryC">
                                    <option selected="selected" value="Electronics">Electronics</option>
                                </select>
                            </div>
                            <p class="bold_text">Preferred Supplier Qualifications：</p>
                                <input type="checkbox" checked="checked" name="PreferredSupplierQualifications[]" value="Abilitytocustomize" id="Abilitytocustomize"><label for="Abilitytocustomize">Ability to customize</label><br>
                                <input type="checkbox" name="PreferredSupplierQualifications[]" value="Hasitemsinstock" id="Hasitemsinstock"><label for="Hasitemsinstock"> Has items in stock</label><br>
                                <input type="checkbox" name="PreferredSupplierQualifications[]" value="Shortleadtime" id="Shortleadtime"><label for="Shortleadtime">Short lead time</label><br>
                                <input type="checkbox" name="PreferredSupplierQualifications[]" value="Exportedtomycountrybefore" id="Exportedtomycountrybefore"><label for="Exportedtomycountrybefore"> Exported to my country before</label><br>
                                <input type="checkbox" name="PreferredSupplierQualifications[]" value="Hasafactory" id="Hasafactory"><label for="Hasafactory">Has a factory</label><br>
                                <input type="checkbox" name="PreferredSupplierQualifications[]" value="Other" id="PreferredOther"><label for="PreferredOther"> Other</label><br>
                                <input class="updatecompanyinfo" type="submit" name="submit_sourcinginfo" value="Submit">
                    </form>
                </div>
            </div>
            <?php
                            if($updateSuccess=="1"){
                                ?>
                                    <div id="successupdateinfo">
                                        <p>Update Success</p>
                                    </div>

                                <?php
                            }
            ?>
    </body>
    <script>
        var close1 = document.getElementsByClassName("close1")[0];
        var infoCanSeeUpdate=document.getElementById("infocanseeupdate");
        function closeBasicinfo (){
         
            infoCanSeeUpdate.style.display="none";
            infoCanSeeUpdate.style.zIndex=1;
        }
        function displayBasicInfo(){
            infoCanSeeUpdate.style.display="block";
            infoCanSeeUpdate.style.zIndex=2;
        }

        var contactinfo=document.getElementById("contactInfoUpdate");
        function closecontactinfo(){
         
            contactinfo.style.display="none";
            contactinfo.style.zIndex=1;
        }
        function displaycontactinfo(){
            contactinfo.style.display="block";
            contactinfo.style.zIndex=2;
        }

        var companyinfo=document.getElementById("infoCompanyUpdate");
        function closecompanyinfo(){
         
            companyinfo.style.display="none";
            companyinfo.style.zIndex=1;
        }
        function displaycompanyinfo(){
            companyinfo.style.display="block";
            companyinfo.style.zIndex=2;
        }
        var soucreinfo=document.getElementById("soucreupdate");
        function closesourcinginfo(){
         
            soucreinfo.style.display="none";
            soucreinfo.style.zIndex=1;
        }
        function displaysourcinginfo(){
            soucreinfo.style.display="block";
            soucreinfo.style.zIndex=2;
        }
       
        function copyFromTelephoneNumber(){
            var copy=document.getElementById("telephone").value;
            document.getElementById("fax").value=copy;
        }
    </script>
</html>