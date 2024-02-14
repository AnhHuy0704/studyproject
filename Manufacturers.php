<?php
    @require('header.php');
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Manufacturers</title>
        <link rel="stylesheet" href="css_file.css">
        <script src="slide.js"></script>
    </head>
    <body>
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
                <p class="account_s3_2">Guest</p>
            </div>
            <div class="btn_s3">
                <input type="button" value="Sign in">
                <input type="button" value="join for free">
            </div>
            <p class="account_s3-2">Your browsing history</p>
            <img class="browsing_s3"src="image/app4.png" alt="">
        </div>
        <div class="s4">
            <p>One request, multiple quotes</p> 
            <input type="button" value="Request for Quotation">
        </div>
        <div class="s5">
            <input  type="button"  class="btn-top-s5" value="All Categories">
            <input style="order:2" type="button"  class="btn-top-s5" value="Electrical Equipment & Supplies">
            <input  style="order:1"type="button"  class="btn-top-s5" value="Agriculture">
            <input type="button"  class="btn-top-s5" value="Apparel">
            <input type="button"  class="btn-top-s5" value="Food & Beverage">
            <input type="button"  class="btn-top-s5" value="Fabric & Textile Raw Material">
            <input type="button"  id="last-top-btn" class="btn-top-s5" value="Viewmore">
            <div class="line_s4"></div>
            <input type="button" class="btn-bot-s5"value="Sample-based customization">
            <input type="button" class="btn-bot-s5"value="Apparel">
            <input type="button" class="btn-bot-s5"value="Food & Beverage">
            <input type="button" class="btn-bot-s5 "value="Fabric & Textile Raw Material">
            <input type="button" class="btn-bot-s5" id="last-btn"value="Viewmore">
        </div>
    </body>
</html>