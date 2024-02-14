var width=775;
var width2=0;
var chuyenSlide=document.getElementsByClassName("chuyenslide")[0];
var slide1=document.getElementsByClassName("circle1")[0];
var slide2=document.getElementsByClassName("circle2")[0];
var slide3=document.getElementsByClassName("circle3")[0];
var slide4=document.getElementsByClassName("circle4")[0];
var slide5=document.getElementsByClassName("circle5")[0];
var chuyen2=document.getElementsByClassName("texttransform")[0];
var search_1=document.getElementById("qwer");
var search_2=document.getElementsByClassName["search"][0];
var backGround=document.getElementsByClassName["background-logo-search"][0];


var chuyen=0;
function next(){
    if(chuyen<3100){
        chuyen+=width;
        chuyenSlide.style.marginLeft="-"+chuyen+"px";
        if(chuyen==0){
        slide1.style.color="orange";
        slide2.style.color="black";
        slide3.style.color="black";
        slide4.style.color="black";
        slide5.style.color="black";
        }
     else if(chuyen==775){
            slide1.style.color="black";
            slide2.style.color="orange";
            slide3.style.color="black";
            slide4.style.color="black";
            slide5.style.color="black";

        }
        else if(chuyen==1550){
            slide1.style.color="black";
            slide2.style.color="black";
            slide3.style.color="orange";
            slide4.style.color="black";
            slide5.style.color="black";

        }
        else if(chuyen==2325){
            slide1.style.color="black";
            slide2.style.color="black";
            slide3.style.color="black";
            slide4.style.color="orange";
            slide5.style.color="black";

        }
        else{
            slide1.style.color="black";
            slide2.style.color="black";
            slide3.style.color="black";
            slide4.style.color="black";
            slide5.style.color="orange";
        }
    }
    else{
        chuyen=0;
        chuyenSlide.style.marginLeft="-"+chuyen+"px";
        slide1.style.color="orange";
        slide2.style.color="black";
        slide3.style.color="black";
        slide4.style.color="black";
        slide5.style.color="black";
    }

}
function back(){
    if(chuyen>0){
        chuyen-=width;
        chuyenSlide.style.marginLeft="-"+chuyen+"px";
        if(chuyen==0){
            slide1.style.color="orange";
            slide2.style.color="black";
            slide3.style.color="black";
            slide4.style.color="black";
            slide5.style.color="black";
            }
          else  if(chuyen==775){
                slide1.style.color="black";
                slide2.style.color="orange";
                slide3.style.color="black";
                slide4.style.color="black";
                slide5.style.color="black";
                }
                else if(chuyen==1550){
                    slide1.style.color="black";
                    slide2.style.color="black";
                    slide3.style.color="orange";
                    slide4.style.color="black";
                    slide5.style.color="black";

                }
                else if(chuyen==2325){
                    slide1.style.color="black";
                    slide2.style.color="black";
                    slide3.style.color="black";
                    slide4.style.color="orange";
                    slide5.style.color="black";

                }
                else{
                    slide1.style.color="black";
                    slide2.style.color="black";
                    slide3.style.color="black";
                    slide4.style.color="black";
                    slide5.style.color="orange";
                }
    }
    else{
        chuyen=3100;
        chuyenSlide.style.marginLeft="-"+chuyen+"px";
        slide1.style.color="black";
        slide2.style.color="black";
        slide3.style.color="black";
        slide4.style.color="black";
        slide5.style.color="orange";
    }
}
setInterval(function(){
    next();
},3000);
function Slide1(){
    chuyen=0;
    chuyenSlide.style.marginLeft=0+"px";
}

function Slide2(){

    chuyen=775;
    chuyenSlide.style.marginLeft="-"+chuyen+"px";
}
function Slide3(){

    chuyen=1550;
    chuyenSlide.style.marginLeft="-"+chuyen+"px";
}
function Slide4(){

    chuyen=2325;
    chuyenSlide.style.marginLeft="-"+chuyen+"px";
}
function Slide5(){

    chuyen=3100;
    chuyenSlide.style.marginLeft="-"+chuyen+"px";
}
function chuyenText(){

}
function search(){

        if(this.scrollY>100)
        {
            search_1.style.borderRadius="0%";
            search_1.style.marginLeft="100px";


        }
        else{
            search_1.style.borderTopRightRadius="50px";
            search_1.style.borderBottomRightRadius="50px";
            search_1.style.marginLeft="0%";
        }



}
function document2(){

    if(this.scrollY>100)
    {
        search_2.style.borderRadius="0%";

    }
    else{

    }

}
function login_type(){
    
            document.getElementById("q_login").style.opacity="0";
            document.getElementById("email_login").style.opacity="1";
            document.getElementById("email_login").style.zIndex="3";
            document.getElementById("q_login").style.zIndex="2";
            document.getElementsByClassName("qr_type_login")[0].style.opacity="1";
            document.getElementsByClassName("qr_type_login")[0].style.zIndex="3";
            document.getElementsByClassName("label_acc_pass")[0].style.display="none";
    
}
function login_type_2(){
            document.getElementById("q_login").style.opacity="1";
            document.getElementById("email_login").style.opacity="0";
            document.getElementById("email_login").style.zIndex="1";
            document.getElementById("q_login").style.zIndex="2";
            document.getElementsByClassName("qr_type_login")[0].style.opacity="0";
            document.getElementsByClassName("qr_type_login")[0].style.zIndex="1";
            document.getElementsByClassName("label_acc_pass")[0].style.display="inline";
 }
function hidden_account(){
    document.getElementById("login1").style.display="block";
    
}
function hidden_account_2(){
    document.getElementById("login1").style.display="none";
}
function hidden_message(){
    document.getElementById("messages1").style.display="block";
}
function hidden_message_2(){
    document.getElementById("messages1").style.display="none";
    document.getElementById("messages1").style.zIndex="3";
}
function hidden_order(){
    document.getElementById("order1").style.display="block";
}
function hidden_order_2(){
    document.getElementById("order1").style.display="none";
    document.getElementById("order1").style.zIndex="2";
}
function hidden_cart(){
    document.getElementById("cart1").style.display="block";
}
function hidden_cart_2(){
    document.getElementById("cart1").style.display="none";
    document.getElementById("cart1").style.zIndex="2";
}
function product(){
    document.getElementsByClassName("product_page")[0].style.boxShadow="0 5px 3px -3px white"  ;
    document.getElementsByClassName("manu_page")[0].style.boxShadow="0 0px 0px 0px white"  ;
}
function manu(){
    document.getElementsByClassName("manu_page")[0].style.boxShadow="0 5px 3px -3px white"  ;
    document.getElementsByClassName("product_page")[0].style.boxShadow="0 0px 0px 0px white"  ;
}
function categories_border(){
    document.getElementById("btn-top-0").style.boxShadow="0px 5px 1px -3px black"  ; 
    document.getElementById("btn-top-1").style.boxShadow="0px 0px 1px -3px white"  ; 
    document.getElementById("btn-top-2").style.boxShadow="0px 0px 1px -3px black"  ; 
    document.getElementById("btn-top-3").style.boxShadow="0px 0px 1px -3px black"  ; 
    document.getElementById("btn-top-4").style.boxShadow="0px 0px 1px -3px black"  ; 
    document.getElementById("btn-top-5").style.boxShadow="0px 0px 1px -3px black"  ; 
}
function categories_border_2(){
    document.getElementById("btn-top-0").style.boxShadow="0px 0px 1px -3px black"  ; 
    document.getElementById("btn-top-1").style.boxShadow="0px 5px 1px -3px black"  ; 
    document.getElementById("btn-top-2").style.boxShadow="0px 0px 1px -3px black"  ; 
    document.getElementById("btn-top-3").style.boxShadow="0px 0px 1px -3px black"  ; 
    document.getElementById("btn-top-4").style.boxShadow="0px 0px 1px -3px black"  ; 
    document.getElementById("btn-top-5").style.boxShadow="0px 0px 1px -3px black"  ; 
}
function categories_border_3(){
    document.getElementById("btn-top-0").style.boxShadow="0px 0px 1px -3px black"  ; 
    document.getElementById("btn-top-1").style.boxShadow="0px 0px 1px -3px black"  ;
    document.getElementById("btn-top-2").style.boxShadow="0px 5px 1px -3px black"  ; 
    document.getElementById("btn-top-3").style.boxShadow="0px 0px 1px -3px black"  ;
    document.getElementById("btn-top-4").style.boxShadow="0px 0px 1px -3px black"  ; 
    document.getElementById("btn-top-5").style.boxShadow="0px 0px 1px -3px black"  ; 
  
}
function categories_border_4(){
    document.getElementById("btn-top-0").style.boxShadow="0px 0px 1px -3px black"  ; 
    document.getElementById("btn-top-1").style.boxShadow="0px 0px 1px -3px black"  ;
    document.getElementById("btn-top-2").style.boxShadow="0px 0px 1px -3px black"  ; 
    document.getElementById("btn-top-3").style.boxShadow="0px 5px 1px -3px black"  ; 
    document.getElementById("btn-top-4").style.boxShadow="0px 0px 1px -3px black"  ; 
    document.getElementById("btn-top-5").style.boxShadow="0px 0px 1px -3px black"  ; 
    
}
function categories_border_5(){
    document.getElementById("btn-top-0").style.boxShadow="0px 0px 1px -3px black"  ; 
    document.getElementById("btn-top-1").style.boxShadow="0px 0px 1px -3px black"  ;
    document.getElementById("btn-top-2").style.boxShadow="0px 0px 1px -3px black"  ; 
    document.getElementById("btn-top-3").style.boxShadow="0px 0px 1px -3px black"  ; 
    document.getElementById("btn-top-4").style.boxShadow="0px 5px 1px -3px black"  ; 
    document.getElementById("btn-top-5").style.boxShadow="0px 0px 1px -3px black"  ;
}
function categories_border_6(){
    document.getElementById("btn-top-0").style.boxShadow="0px 0px 1px -3px black"  ; 
    document.getElementById("btn-top-1").style.boxShadow="0px 0px 1px -3px black"  ;
    document.getElementById("btn-top-2").style.boxShadow="0px 0px 1px -3px black"  ; 
    document.getElementById("btn-top-3").style.boxShadow="0px 0px 1px -3px black"  ; 
    document.getElementById("btn-top-4").style.boxShadow="0px 0px 1px -3px black"  ; 
    document.getElementById("btn-top-5").style.boxShadow="0px 5px 1px -3px black"  ;
}
var chuyen3=0;
function next_business(){
   
        if(width2<1000){
            width2+=270;
            document.getElementsByClassName("chuyen-slide-product")[0].style.marginLeft="-"+width2+"px";
        }
       
}
function change_color(){
    if(document.getElementsByClassName("fa-heart")[0].style.color=="red"){

        document.getElementsByClassName("fa-heart")[0].style.color="#999999";
    }
    else{
        document.getElementsByClassName("fa-heart")[0].style.color="red";
    }
}

