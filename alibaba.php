<!DOCTYPE html>
<html>
<head>
<title>Oazada</title>
<link rel="stylesheet" href="css_file.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
    <div id="header">
        <button  class="a "><a href="product.php">Products</a></button> 
        <button class="a "><a href="Manufacturers.php">Manufacturers</a></button>
        
        <div class="tool">
          
                <a class="headertool" href="login.php"><i class="fas fa-user"></i>Sign in</a>
         
        
        <a  class="headertool" href="Messages.php"><i class="fab fa-facebook-messenger"></i>Messages</a>
        
        <a  class="headertool" href="login.php"><i class="fab fa-first-order"></i>Orders</a>

         <a  class="headertool" href="login.php"><i class="fas fa-cart-plus"></i>Cart</a>
        </div>

       
    </div>
       
     <div class="logo">
         <image  id="logo" src="image/logo.png"/> 
     </div>
    <div class="form">
        <form id="search" method="GET" action="">
            <input class="search" placeholder="What are you looking for?" type="text" name="searchinput" />
            
            <input class="submit" type="submit" name="submit" name="Search" value="Search"/>
            <div class="search_awe"><i class="fas fa-search-plus"></i></div>
        </form>
</div>

<div id="menu">
<button class="menu"><i class="fas fa-tasks"></i><p class="a2">Categories</p> </button>
<button class="menu"><p class="textmenu">Ready to Ship</p> </button>
<button class="menu"><p class="textmenu">Personal Protective E</p> </button>
<button class="menu"><p class="textmenu">Trade Shows</p> </button>
<button class="b1 menu"><p class="textmenu">Buyer Central </p>
</p> <i class="fas fa-less-than faslt1"></i>
<div id="buyer">
<div id="buyer1">
         <img class="imgbuyer" src="image/buy1.png">    <p >Blog</p>
         <img class="imgbuyer" src="image/buy2.png">   <p>Trade Assurance</p>
         <img class="imgbuyer" src="image/buy3.png">    <p>Production Monitoring & Inspection Services</p>
         <img class="imgbuyer" src="image/buy4.png">    <p>Logistics Service</p>
         <img class="imgbuyer" src="https://s.alicdn.com/@img/tfs/TB1C7nRNFYqK1RjSZLeXXbXppXa-66-40.svg">   <p>Letter of Credit</p>
        </div>
        <div id="buyer2">
            <p>Sourcing solutions</p>
            <p>Submit RFQ</p>
            <p>Suppliers by region</p>
        </div>
</div>










</button>
<button class="b2 menu"><p class="textmenu">Sell on Oazada.com 
</p> <i class="fas fa-less-than faslt2"></i>

<div id="sell">
            <p >For global suppliers</p>
            <p>For Chinese suppliers</p>
            <p>Partner Program</p>
        </div>





</button>
<button class="b3 menu"><p class="textmenu ">Help</p> <i class="fas fa-less-than faslt3"></i>


<div id="help1">
            <p >For buyers</p>
            <p>For suppliers</p>
            <p>Open a case</p>
            <p>Report IPR infringement</p>
            <p>Report abuse</p>
        </div>

</button>
</div>
<div class="menu2">
    <button class="menu"><p class="textmenu">Get the app</p> </button>
    <button class="b4 menu"><p class="textmenu">English - VND</p><i class="fas fa-less-than faslt1"></i> 
    <div id="languages">
           <label style="display:block"for="language1">language</label>
           <select class="choose1" style="display:block" id="language1">
                <option>English</option>
           </select>
           <label style="display:block"for="Currency1">Currency</label>
           <select class="choose1" style="display:block"id="Currency1">
                <option>USD</option>
           </select>
           <form>
           <input id="save1"type="submit" name="save" value="Save">
</form>
        </div>
</button>

                                        <!---b5-->
    <button class="b5 menu"><p class="textmenu">Ship to:</p> <i class="fas fa-less-than faslt1"></i>

        <div id="ship">
                <p style="font-weight:bold">Choose your location</p>
                <p>Delivery options and fees may vary based on your location</p>
                <form>
                    <input class="sitsya" type="submit" name="sitsya" value="Sign in to see your address">
                </form>

                <select style="display:block;position:relative;top:35px;left:40px;background-color:white;color:black;border:solid;" class="sitsya">
                <option>VietNam</option>
                </select>
                <form>
                 <input style="display:block;position:relative;top:50px;left:40px;width:78%;border:solid;height:25px; background-color:white;color:black;"type="" name="zipcode"  placeholder="Enter city or zip code">
                </form>
                 <form>
                    <input style="display:block;position:relative;top:65px;left:40px;" id="save1"type="submit" name="save2" value="Save">
                 </form>
        </div>

   </button>
</div>
<div id="login">
<div id="login1"  >
                     <p style="display:inline">Welcome Back</p>
                     <a href="login.php"> <button style="background-color:orange;color:white;border-color:orange"class="login">Sign in</button></a>
                       <button  style="background-color:white;color:orange;border-color:orange"class="login">Join for free</button>
                         <a href="https://www.facebook.com/login.php?skip_api_login=1&api_key=124207444332529&kid_directed_site=0&app_id=124207444332529&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fv2.9%2Fdialog%2Foauth%3Fclient_id%3D124207444332529%26redirect_uri%3Dhttps%253A%252F%252Fpassport.alibaba.com%252Foauth_sign.htm%253Ftype%253Dfacebook%2526return_url%253Dhttps%25253A%25252F%25252Flogin.alibaba.com%25252Fauto_login.htm%26display%3Dpopup%26response_type%3Dcode%26scope%3Demail%252Cpublic_profile%252Cuser_work_history%26state%3Didc_82XyFtbWn8BOPawRfVexKGA%26ret%3Dlogin%26fbapp_pres%3D0%26logger_id%3D5e2a2e88-f5ef-4e06-83f9-a3a75c6c2697%26tp%3Dunspecified&cancel_url=https%3A%2F%2Fpassport.alibaba.com%2Foauth_sign.htm%3Ftype%3Dfacebook%26return_url%3Dhttps%253A%252F%252Flogin.alibaba.com%252Fauto_login.htm%26error%3Daccess_denied%26error_code%3D200%26error_description%3DPermissions%2Berror%26error_reason%3Duser_denied%26state%3Didc_82XyFtbWn8BOPawRfVexKGA%23_%3D_&display=popup&locale=en_GB&pl_dbl=0">  <img class="iconlogin" src="image/fb.png"></a>
                           <img class="iconlogin" src="image/gg.png">
                           <img class="iconlogin" src="image/inkedin.png">
                          <img style="width:45px;position:relative;top:43px;    "class="iconlogin" src="image/twitter.png">
                          <p style="font-size:10px; margin-top:40px;text-align:center;   ">By sliding to Continue with or Create My Account , I agree to Oazada.com Free Membership Agreement and Receive Marketing Materials</p>
                </div>
</div>
    <div id="messages">
        <div id="messages1">
            <p style="font-weight:bold">Unread message reminder</p>
            <p>We will remind you here when there is new message. Please log in to view.</p>
           <a href="login.php"> <button style="background-color:orange;color:white;border-color:orange;margin-right:34px;" class="login">Sign in</button></a>
            <p>New user? Please register and start your business!</p>
        </div>
    </div>

    <div id="order">
        <div id="order1">
            <p style="font-weight:bold">Trace Assurance</p>
           <a href="login.php"> <button style="background-color:orange;color:white;border-color:orange;margin-right:34px;" class="login">Order with trade Assurance</button></a>
        </div>
    </div>
    <div id="cart">
        <div id="cart1">
            <p style="font-weight:bold;display:inline">You haven't signed in yet.</p>
           <a href="login.php">Sign in</a>
        </div>
    </div>
    

</body>

</html>