<!DOCTYPE html>
<html>
<head>
  <title>Online Bank System</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="nav1.css">
<link rel="stylesheet" type="text/css" href="transaction.css">
<link rel="stylesheet" type="text/css" href="header.css">
  <link rel="stylesheet" type="text/css" href="instr.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

<body onload="startTimer(this)">
    
<div class="container-fluid">
 <p id="errMsg"></p>
    


 
    
<script>
       var t = 0, b=0;
        var i;
        var clicks = 0;
        function NextButton(e)
        {
          var Mydiv = document.getElementById("2000");
          var button = document.createElement('BUTTON');
          button.setAttribute("class","button");
          button.innerHTML = 'Next';
          button.setAttribute("onclick" ,"window.location.href='confidence2.php'" ) ;
          Mydiv.appendChild(button);
        }
        function HelpAlert(e)
        {
          alert("Please download the statement for August 2018");
        }

        function startTimer(e){
            var a = e.innerHTML;
            //alert(a);
            i = window.setInterval(()=>{
                t++;
                showTime(getTime(t));
            },1000) 
            e.setAttribute("onclick","saveResponse(this)");
             //b+=1;
            saveTime(getTime(t),a);
//alert("You have chosen the home tab");
        
        }

        function stopTimer(e){
            window.clearInterval(i);
            var a = e.innerHTML;
            //alert(a);
            e.setAttribute("onclick","startTimer(this)");
    
          //alert(a);
          b+=1;
         
          saveTime(getTime(t),a,b);
          
            }
  




        function saveResponse(e){
          //"setColor(e);
          var a = e.innerHTML;
          var b = e.id;
          //alert(a);
          //b+=1;
          if(b == "al2")
          {
            a= "August 2019 View";
          }
          if(b == "al3")
          {
            a= "August 2019 Download";
          }
          if(b == "al4")
          {
            a= "July 2019 View";
          }
          if(b == "al5")
          {
            a= "July 2019 Download";
          }
          if(b == "al6")
          {
            a= "June 2019 View";
          }
          if(b == "al7")
          {
            a= "June 2019 Download";
          }
          if(b == "al8")
          {
            a= "May 2019 View";
          }
          if(b == "al9")
          {
            a= "May 2019 Download";
          }
          if(b == "al10")
          {
            a= "April 2019 View";
          }
          if(b == "al11")
          {
            a= "April 2019 Download";
          }
          if(b == "al12")
          {
            a= "March 2019 View";
          }
          if(b == "al13")
          {
            a= "March 2019 Download";
          }
          if(b == "al14")
          {
            a= "February 2019 View";
          }
          if(b == "al15")
          {
            a= "February 2019 Download";
          }
          if(b == "al16")
          {
            a= "January 2019 View";
          }
          if(b == "al17")
          {
            a= "January 2019 Download";
          }
          if(b == "al18")
          {
            a= "December 2018 View";
          }
          if(b == "al19")
          {
            a= "December 2018 Download";
          }
          if(b == "al20")
          {
            a= "November 2018 View";
          }
          if(b == "al21")
          {
            a= "November 2018 Download";
          }
           if(b == "al22")
          {
            a= "October 2018 View";
          }
          if(b == "al23")
          {
            a= "October 2018 Download";
          }
          if(b == "al24")
          {
            a= "September 2018 View";
          }
          if(b == "al25")
          {
            a= "September 2018 Download";
          }
           if(b == "al26")
          {
            a= "August 2018 View";
          }
          if(b == "100")
          {
            a= "August 2018 Download";
          }
           if(b == "al27")
          {
            a= "July 2018 View";
          }
          if(b == "al28")
          {
            a= "July 2018 Download";
          }
          if(b == "al29")
          {
            a= "June 2018 View";
          }
          if(b == "al30")
          {
            a= "June 2018 Download";
          }
          if(b == "al31")
          {
            a= "May 2018 View";
          }
          if(b == "al32")
          {
            a= "May 2018 Download";
          }
          if(b == "al33")
          {
            a= "April 2018 View";
          }
          if(b == "al34")
          {
            a= "April 2018 Download";
          }
          if(b == "al35")
          {
            a= "March 2018 View";
          }
          if(b == "al36")
          {
            a= "March 2018 Download";
          }
          if(b == "al37")
          {
            a= "Febraury 2018 View";
          }
          if(b == "al38")
          {
            a= "Febraury 2018 Download";
          }
          if(b == "al39")
          {
            a= "January 2018 View";
          }
          if(b == "al40")
          {
            a= "January 2018 Download";
          }
          if(b == "al41")
          {
            a= "Facebook-icon";
          }
          if(b == "al42")
          {
            a= "Twitter-icon";
          }
          if(b == "al43")
          {
            a= "Googleplus-icon";
          }
          if(b == "al44")
          {
            a= "Instagram-icon";
          }
          if(b == "al45")
          {
            a= "Youtube-icon";
          }
          //alert(a);
          saveTime(getTime(t),a);
          if(b!="100" && b!="al1")
          {
          alert("This is incorrect. Please select another option.");
          }
        }

        function showTime(time) {
                document.getElementById("time").innerHTML= time;
        }

        function getTime(m){
            let hh = "" + Math.floor(m/3600);
            m=m%3600;
            let mm = "" + Math.floor(m/60);
            m=m%60;
            let ss = "" + m;

            return  hh.padStart(2,"0") + ":" + mm.padStart(2,"0") + ":" + ss.padStart(2,"0");
        }



        function saveTime(time,a) {

            clicks ++;
            if(t>0){
                
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status != 200) {
                        document.getElementById("errMsg").innerHTML = "Exception while saving data : " + this.responseText;
                    } else {
                        document.getElementById("errMsg").innerHTML = "";
                    }
                };
                xmlhttp.open("POST", "input.php", true);
                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xmlhttp.send("time=" + time + "&a=" + a + "&clicks=" + clicks);
          
            }
        }
     
</script>

<nav class="navbar navbar-expand-md navbar-light" style="background-color: #DC143C;"> 
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav_item" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="nav_item">
    <ul class="navbar-nav mr-auto">
      <li class="nav_item active">
        <a class="nav-link" href="#" onclick="saveResponse(this)" style="color: white">Account</a>
      </li>
      <li class="nav_item">
        <a class="nav-link"  onclick="saveResponse(this)" style="color: white">Services</a>
      </li>
       <li class="nav_item">
        <a class="nav-link" href="#" onclick="saveResponse(this)" style="color: white">Pay and Transfer</a>
      </li>
      <li class="nav_item">
        <a class="nav-link" href="#" onclick="saveResponse(this)" style="color: white">Investments</a>
      </li>
      <li class="nav_item">
        <a class="nav-link"  href="#" onclick="saveResponse(this)" style="color: white">Logout</a>
      </li>
      <li class="nav_item">
        <button value="help" id="al1" style = "background-color:#33CEFF; font-family: georgia; font-weight: bold; color: black; border: 2px solid black; position:absolute; right:30px;" onclick="HelpAlert(this),saveResponse(this)">Help</button>
      </li>
    </ul>
     
    
  </div>
</nav>
<hr>
<br>
<div class="jumbotron"> 

<div class="container">
  <div class="jumbotron">
    <p class="text" onclick="saveResponse(this)"><strong>To Download the Statements, Please click on the link given below.</strong></p>
<button class="tablink" color = "grey" onclick="openPage('2018', this, 'crimson')" id="defaultOpen">2019 Statements</button>
<button class="tablink" color = "grey" onclick="openPage('2017', this, 'crimson')" >2018 Statements</button>

<div id="2018" class="tabcontent">

<a href="" onclick="saveResponse(this)"  style="color: crimson; text-decoration: underline;">2019 Annual account Summary</a><br>

<hr>
  <span onclick="saveResponse(this)">August</span>
 <a href="" id="al2" onclick="saveResponse(this)" style="  color: crimson;
  float: right;"> &nbsp
View</a>
<a href="" id="al3" onclick="saveResponse(this)" style=" color: crimson;float: right; border-right: 2px solid grey; height: 25px; ">&nbsp Download &nbsp</a>
  <hr>
  <span onclick="saveResponse(this)">July</span> 
  <a href="" id="al4" onclick="saveResponse(this)" style="  color: crimson;
  float: right;"> &nbsp
View</a>
<a href="" id="al5" onclick="saveResponse(this)"  style=" color:crimson;
  float: right; border-right: 2px solid grey; height: 25px; ">&nbsp Download &nbsp</a>
    <hr>
      <span onclick="saveResponse(this)">June</span>
      <a href=""id="al6"onclick="saveResponse(this)"  style="  color: crimson;
  float: right;"> &nbsp
View</a>
<a href="" id="al7" onclick="saveResponse(this)"   style=" color: crimson;
  float: right; border-right: 2px solid grey; height: 25px; ">&nbsp Download &nbsp</a><hr>
        <span onclick="saveResponse(this)">May</span>
        <a href="" id="al8"  onclick="saveResponse(this)"  style="  color: crimson;
  float: right;"> &nbsp
View</a>
<a href="" id="al9" onclick="saveResponse(this)"   style=" color:crimson;
  float: right; border-right: 2px solid grey; height: 25px; ">&nbsp Download &nbsp</a><hr>
          <span onclick="saveResponse(this)">April</span>
          <a href="" id="al10" onclick="saveResponse(this)" style="  color: crimson;
  float: right;"> &nbsp
View</a>
<a href="" id="al11" onclick="saveResponse(this)"style=" color: crimson;
  float: right; border-right: 2px solid grey; height: 25px; ">&nbsp Download &nbsp</a><hr>
            <span onclick="saveResponse(this)">March</span>
            <a href="" id="al12"  onclick="saveResponse(this)"  style="  color:crimson;
  float: right;"> &nbsp
View</a>
<a href="" id="al13" onclick="saveResponse(this)"   style=" color:crimson;
  float: right; border-right: 2px solid grey; height: 25px; ">&nbsp Download &nbsp</a><hr>
              <span onclick="saveResponse(this)">February</span>
              <a href="" id="al14" onclick="saveResponse(this)" style="  color:crimson;
  float: right;"> &nbsp
View</a>
<a href="" id="al15" onclick="saveResponse(this)"    style=" color: crimson;
  float: right; border-right: 2px solid grey; height: 25px; ">&nbsp Download &nbsp</a><hr>
                <span onclick="saveResponse(this)">January</span>
                <a href="" id="al16" onclick="saveResponse(this)" style="  color: crimson;
  float: right;"> &nbsp
View</a>
<a href="" id="al17" onclick="saveResponse(this)"  style=" color: crimson;
  float: right; border-right: 2px solid grey; height: 25px; ">&nbsp Download &nbsp</a><hr>
</div>

<div id="2017" class="tabcontent">
  <a href=""  onclick="saveResponse(this)" style="color: crimson; text-decoration: underline;">2018 Annual account Summary</a><br>

<div onclick="saveResponse(this)">All Dates Are Statement Ending dates</div>
<hr><span onclick="saveResponse(this)">December</span> 
<a href="" id="al18" onclick="saveResponse(this)" style="  color: crimson;
  float: right;"> &nbsp
View</a>
<a href="" id="al19" onclick="saveResponse(this)" style=" color: crimson;
  float: right; border-right: 2px solid grey; height: 25px; ">&nbsp Download &nbsp</a>

<hr><span onclick="saveResponse(this)">November</span> 
<a href="" id="al20" onclick="saveResponse(this)" style="  color: crimson;
  float: right;"> &nbsp
View</a>
<a href="" id="al21" onclick="saveResponse(this)" style=" color: crimson;
  float: right; border-right: 2px solid grey; height: 25px; ">&nbsp Download &nbsp</a>

<hr><span onclick="saveResponse(this)">October</span> 
<a href="" id="al22" onclick="saveResponse(this)" style="  color: crimson;
  float: right;"> &nbsp
View</a>
<a href="" id="al23" onclick="saveResponse(this)" style=" color: crimson;
  float: right; border-right: 2px solid grey; height: 25px; ">&nbsp Download &nbsp</a>

<hr><span onclick="saveResponse(this)">September</span> 
<a href="" id="al24" onclick="saveResponse(this)" style="  color: crimson;
  float: right;"> &nbsp
View</a>
<a href="" id="al25" onclick="saveResponse(this)" style=" color: crimson;
  float: right; border-right: 2px solid grey; height: 25px; ">&nbsp Download &nbsp</a>

<hr><span onclick="saveResponse(this)">August</span> 
<a href="" id="al26" onclick="saveResponse(this)" style="  color: crimson;
  float: right;"> &nbsp
View</a>
<a id= "100" href="BankStatement.pdf" download="BankStatement.pdf" onclick="NextButton(this),saveResponse(this)" style=" color: crimson;
  float: right; border-right: 2px solid grey; height: 25px; ">&nbsp Download &nbsp</a>
  <hr>
  <span onclick="saveResponse(this)">July</span>
  <a href="" id="al27" onclick="saveResponse(this)" style="  color: crimson;
  float: right;"> &nbsp
View</a>
<a href="" id="al28" onclick="saveResponse(this)" style=" color: crimson;
  float: right; border-right: 2px solid grey; height: 25px; ">&nbsp Download &nbsp</a>
    <hr>
      <span onclick="saveResponse(this)">June</span>
      <a href="" id="al29" onclick="saveResponse(this)" style="  color: crimson;
  float: right;"> &nbsp
View</a>
<a href="" id="al30" onclick="saveResponse(this)" style=" color: crimson;
  float: right; border-right: 2px solid grey; height: 25px; ">&nbsp Download &nbsp</a><hr>
        <span onclick="saveResponse(this)">May</span>
        <a href="" id="al31" onclick="saveResponse(this)" style="  color: crimson;
  float: right;"> &nbsp
View</a>
<a href="" id="al32" onclick="saveResponse(this)" style=" color: crimson;
  float: right; border-right: 2px solid grey; height: 25px; ">&nbsp Download &nbsp</a><hr>
          <span onclick="saveResponse(this)">April</span>
          <a href="" id="al33" onclick="saveResponse(this)" style="  color: crimson;
  float: right;"> &nbsp
  
View</a>
<a href="" id="al34" onclick="saveResponse(this)" style=" color: crimson;
  float: right; border-right: 2px solid grey; height: 25px; ">&nbsp Download &nbsp</a><hr>

          <span onclick="saveResponse(this)">March</span>
          <a href="" id="al35" onclick="saveResponse(this)" style="  color: crimson;
  float: right;"> &nbsp
  
View</a>
<a href="" id="al36" onclick="saveResponse(this)" style=" color: crimson;
  float: right; border-right: 2px solid grey; height: 25px; ">&nbsp Download &nbsp</a><hr>

          <span onclick="saveResponse(this)">Febraury</span>
          <a href="" id="al37" onclick="saveResponse(this)" style="  color: crimson;
  float: right;"> &nbsp
  
View</a>
<a href="" id="al38" onclick="saveResponse(this)" style=" color: crimson;
  float: right; border-right: 2px solid grey; height: 25px; ">&nbsp Download &nbsp</a><hr>

          <span onclick="saveResponse(this)">January</span>
          <a href="" id="al39" onclick="saveResponse(this)" style="  color: crimson;
  float: right;"> &nbsp
  
View</a>
<a href="" id="al40" onclick="saveResponse(this)" style=" color: crimson;
  float: right; border-right: 2px solid grey; height: 25px; ">&nbsp Download &nbsp</a><hr>
            
</div>
</div>
</div>
<hr>
<div class="container-fluid">
  <div class="row  text-center">
    <div class="col-12">
       <p class="text" onclick="saveResponse(this)"><strong>Follow Us</strong></p>
    </div>
    <div class="col-12 social padding">
      <a href="#" id="al41" onclick="saveResponse(this)"> <i class="fab fa-facebook fa-3x fa-fw"></i></a>
      <a href="#" id="al42" onclick="saveResponse(this)"> <i class="fab fa-twitter fa-3x fa-fw"></i></a>
      <a href="#" id="al43" onclick="saveResponse(this)"> <i class="fab fa-google-plus-g fa-3x fa-fw"></i></a>
      <a href="#" id="al44" onclick="saveResponse(this)"> <i class="fab fa-instagram fa-3x fa-fw"></i></a>
      <a href="#" id="al45" onclick="saveResponse(this)"> <i class="fab fa-youtube fa-3x fa-fw"></i></a>
      <div id = "2000"></div>
    </div>
    <br>
    <hr>
  </div>
</div>

<hr>
<footer style = "font-family: georgia;">
     <div class="row text-center">
      <div class="col-md-4">
       
          <h5 onclick="saveResponse(this)">Mortgage</h5>
 <p onclick="saveResponse(this)">Home equity
        </p>
        <p onclick="saveResponse(this)">Auto Mobile</p>
        <p onclick="saveResponse(this)">Lending</p>
      </div>
      <div class="col-md-4">
        <h5 onclick="saveResponse(this)">Investment Planning</h5>
 <p onclick="saveResponse(this)">Personalized
        </p>
        <p onclick="saveResponse(this)">Not FDIC Insured</p>
        <p onclick="saveResponse(this)">Risk Level</p>
      </div>
      <div class="col-md-4">
        
        <h5 onclick="saveResponse(this)">Help and Support</h5>
        <p onclick="saveResponse(this)">Contact
        </p>
        <p onclick="saveResponse(this)">Security Center</p>
        <p onclick="saveResponse(this)">Help and FAQs</p>

      </div> 
      <hr>

      
  
</div>
</footer>



<script>
function openPage(pageName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;

}
document.getElementById("defaultOpen").click();

function newFunction(){
  alert("Error:You have made a wrong choice");
}
</script>