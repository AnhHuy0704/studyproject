<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="css_file.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
        <script src="slide.js"></script>
        <title>My alibaba</title>
    </head>
    <body>
        <div id="categorytype">
            <input onclick="borderBot(event)"; type="button" value="Search Categories">
            <input onclick="borderBot(event)"; type="button" value="Recently Used Categories">
            <div>
                <p>Select category display language</p>
                <select>
                    <option>English</option>
                </select>
            </div>
        </div>
        <div id="categorychose">
                <p onclick="choseCategories(event)"; >Food & Beverage>>Coffee>>Instant Coffee</p>
                <p onclick="choseCategories(event)";>Food & Beverage>>Other Food & Beverage</p>
                <p onclick="choseCategories(event)";>Food & Beverage>>Coffee>>Instant Coffee</p>
                <p onclick="choseCategories(event)";>Food & Beverage>>Other Food & Beverage</p>
        </div>
        <div id="cantfinecategories">
            <p id="cantfinecategories1">Can't fine your category?</p>
            <p id="cantfinecategories2">Browse categories and select from our list</p>
        </div>
        <div id="valuecategories">
            <p id="valuecategoriesp">aaaa</p>
        </div>
        <div id="submitcategories">
            <input type="submit" name="categorytype" value="i have read and agree to the following terms">
        </div>
    </body>
    <script>
        var inputCategories=document.getElementById("categorytype").querySelectorAll('input');
        var Categories=document.getElementById("categorychose").querySelectorAll('p');
        function borderBot(event){
                for(var i=0;i<inputCategories.length;i++){
                    if(event.target==inputCategories[i]){
                        inputCategories[i].style.borderBottom="2px solid #FF9999";
                        inputCategories[i].style.color="#FF9999";
                     
                    }
                    else{

                        inputCategories[i].style.borderBottom="none";
                        inputCategories[i].style.color="black";
                    }
                }
        }
        function choseCategories(event){
                for(var i=0;i<Categories.length;i++){
                    if(event.target==Categories[i]){
                        
                        Categories[i].style.backgroundColor="#0066FF";
                        Categories[i].style.color="white";
                        document.getElementById("valuecategoriesp").innerHTML=Categories[i].innerHTML;
                    }
                    else{

                        Categories[i].style.backgroundColor="white";
                        Categories[i].style.color="black";
                    }
                }
        }
    </script>
</html>