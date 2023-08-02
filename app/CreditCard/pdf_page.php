<!DOCTYPE html>
<?php
 session_start();
 include 'connect.php'; 
 ?>
<html>
<head>
	<title>Bank statement</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="pdf.css">

 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link rel="stylesheet" type="text/css" href="change.css">

</head>
<style type="text/css">

td.selected {
  background-color: red;
}

</style>

<body>

	<div class="col-sm-3 col-md-6 col-lg-4" id="pdf">
<div class="container-fluid">
	

    
    <p id = "errMsg"></p>
    <script type="text/javascript">
    	function setColor(e) {
  var target = e.target,
      count = +target.dataset.count;
  
   target.style.color = count === 0 ? "#000000 " : "#bb0000";
   target.dataset.count = count === 0 ? 1 : 0;
}

        var t = 0;
        var i;

      
        function OMMTimer(e){
            i = window.setInterval(()=>{
                t++;
                showTime(getTime(t));
            },1000) 
            e.setAttribute("onclick","startTimer(this)");
           
        }

        function startTimer(e){
            i = window.setInterval(()=>{
                t++;
                showTime(getTime(t));
            },1000) 
            e.setAttribute("onclick","stopTimer(this)");

        
        }

        function stopTimer(e){
            window.clearInterval(i);
            e.setAttribute("onclick","startTimer(this)");
          var a = e.innerHTML;
          //alert(a);
            saveTime(getTime(t),a);
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

        function saveTime(time,ans) {
          
            if(t>0){
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status != 200) {
                        document.getElementById("errMsg").innerHTML = "Exception while saving data : " + this.responseText;
                    } else {
                        document.getElementById("errMsg").innerHTML = "";
                    }
                };
                xmlhttp.open("POST", "question1_send.php", true);
                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xmlhttp.send("time=" + time + "&ans=" + ans );
          
            }
        }
     


    </script>





	
<div class="col-sm-3 col-md-6 col-lg-4">
		<div class="container-fluid">

	<div class="page1" onclick="setColor(event)" ; data-count="0"/>
	<div id="click1" onclick="OMMTimer(this)"> OMM VISA</div>
	
		<pre><span class="sp1" onclick="stopTimer(this),setColor(event)" ; data-count="0"/>
									              Pat Miller
   			                         Account Number Ending in 9012</span>
		<span class="sp2"> <div  id = "sep1" onclick = "stopTimer(this)">				       Payment Due Date:<b><i>10/09/2018</i></b></div><div  id = "sep3" onclick = "stopTimer(this)">          		               New Balance: <b><i>		$3,421.10</i></b> </div><div  id = "sep5" onclick = "stopTimer(this)">				       Minimum Payment:<b><i>	     $83.71 </i></b></div></span><span class="sp3"><div id = "sep8" onclick = "stopTimer(this)"><b>  $______________________________</b>Amount Enclosed</div><b>  Make your check payable to:OMM Visa Services</b><br></span></pre>
	<pre><span class="sp4"><div  id = "sep10" onclick = "stopTimer(this)">CARDMEMBER SERVICE
PO BOX 17395
WILMINGTON, DE  19850-7395</div>
</pre></span><pre><span class="sp5" onclick="stopTimer(this)">

		      5000 18026    25822539104745
</span></pre><hr style="border-top: dashed 2px; color:black; margin-top:6.8em;"/>	
<div class="p1">
	<div  id = "sep11" onclick = "stopTimer(this)">00558 BEX Z 08109 D<br>
PAT MILLER<br>
35-11 BROADWAY<br>
QUEENS, NY  11105</div><pre><br><span class="sp6"><b> <div  id = "sep15" onclick = "stopTimer(this)">	ACCOUNT SUMMARY 					PAYMENT INFORMATION</div></b></span>
</div>
<pre><div class="p2"><span id=1 onclick="stopTimer(this)">Previous Balance                           		   $1,086.15</span>
<span id="2" onclick="stopTimer(this)">Payment, Credits		                             -$544.10</span>
<span id="3" onclick="stopTimer(this)">Purchases				                   $2,829.70</span>
<span id ="4" onclick="stopTimer(this)">Fees Charged			    		                  $0.00</span>
<span id="5" onclick="stopTimer(this)">Interest Charged                    		                $49.51</span>
<hr style="border-top: solid 1.5px; color:black;top:5em;"/><span  id = "sep16" onclick = "stopTimer(this)">New Balance              			           $3,421.26</span><br>
<span id="6" onclick="stopTimer(this)">Opening/
Closing Date       	              08/16/2018-09/15/2018</span><br>
<span id="7" onclick="stopTimer(this)">Total Credit Line   			                   $4,500,00</span><br>
<span id="8" onclick="stopTimer(this)">Available Credit    			         	    $1078.74</span><br>
<span id="9" onclick="stopTimer(this)">Total Cash Advance Line   	   	              $900,00</span><br>
<span id="10" onclick="stopTimer(this)">Available for Cash				             $900.00</span><br>

</div>
</pre>
<pre>
	
<pre><div class="p3" id="click2"> <span id="11" onclick="stopTimer(this)">New Balance					           			    $3,421.26</span>
<span id="12" onclick="stopTimer(this)"> Payment Due Date				                                  10/09/2018</span>
<span id="13" onclick="stopTimer(this)"> Minimum Payment Due          		                        	 $83.72</span>
<br>
<b><span  id = "sep15" onclick = "stopTimer(this)">Late Payment Warning:</span></b><span  id = "sep16" onclick = "stopTimer(this)">If we do not receive your minimum payment 
by the date listed above,you may have to pay up to a $35.00 late fee 
and your APRs will be subject to increase to a maximum Penalty APR 
of 29.99%.</span> 

<b><span id="15" onclick="stopTimer(this)">Minimum Payment Warning:</span></b><span  id = "sep17" onclick = "stopTimer(this)">If you make only the minimum payment 
each period, you will pay more in interest and it will take you longer to
pay off your balance.For example: </span>
<pre><table id="table" ><tr><th onclick="stopTimer(this), setColor(event) "; data-count="0"/>If you make no
additional charges 
using this card and each 
month you pay</th><th onclick="stopTimer(this)">You will pay
 off the balance 
 shown on this
 statement in
  about</th>
  <th onclick="stopTimer(this)">And you will end 
 up paying an 
 estimated total 
of</th>
	</tr>
	<tr><th onclick="stopTimer(this)">Only the Total 
Minimum Payment</th>
<th onclick="stopTimer(this)">22 year(s)</th>
<th onclick="stopTimer(this)">$7,892.18</th></tr><tr>
		<th onclick="stopTimer(this)">$121.90</th>
		<th onclick="stopTimer(this)">3 years</th><th onclick="stopTimer(this)">$4,390.41</th>
	</tr>
</table>
</div></pre><span class="sp8" onclick="stopTimer(this)"><b>CASHBACK REWARDS<b> 
</b></span>
<pre><div class="p4"><span id="16" onclick="stopTimer(this)">Opening Balance						  $0.00</span>
<span id="17" onclick="stopTimer(this)">5% Bonus Categories			                $17.61</span>
<span id="18" onclick="stopTimer(this)">All Other Purchases			                $24.78</span>
<hr style="border-top: solid 1.5px; color:black;top:5em;"/><span id=19 onclick="stopTimer(this)">Cashback Bonus Balance		 	        $42.38</span>

</div></pre>
<pre><div class="p5" onclick="stopTimer(this)">Customer Service    1-800-657-6754		TTY HearingImpaired    1-844-567-3454         International Calls   1-755-456-3415

						       <b>Manage your account online:   www.omm.com/creditcards</b> </div></pre>
<div class="p6" onclick="stopTimer(this)">Page 1 of 3</div>
</div>
</div><br>
<div class="page2"onclick="setColor(event)" ; data-count="0"/>
		OMM VISA
	
		<pre><span class="sp1">
			<span id= "a1" onclick="stopTimer(this)">							     Pat Miller
   			                        Account Number Ending in 9012</span><br>
			</span></pre>
			<pre><div class="p7" onclick="stopTimer(this)"><b>     ACCOUNT ACTIVITY</b></div>
			<pre><div class="p8" onclick="stopTimer(this)"><table class="t1" style="width:100% ">
  <tr class="tr">Payments and Credits<hr style="border-top: solid 1.5px; color:black;top:5em;"/>
    <td onclick="stopTimer(this),setColor(event)" ; data-count="0"/><i>Trans Date</td>
    <td onclick="stopTimer(this),setColor(event)" ; data-count="0"/><i>Post Date</td>
    <td onclick="stopTimer(this),setColor(event)" ; data-count="0"/><i>&nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Transaction Description</td>
    	<td><i>Amount</td>
    		<td><i>Total</td>
  </tr>
  <tr>
 <td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 04</td>	
 <td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 04</td>	
 <td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>AUTOPAY 00004567*AUTO-PMT</td>	
 <td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>-500.00	</td>
</tr>
<tr>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 14</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 14</td>	
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>NYC GROCERY BROADWAY NY</td>	
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>-14.96</td>	
</tr>
<tr>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 20</td>	
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 21</td>	
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>WHOLE FOODS #6100</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>-29.14	</td>
</tr>
</table>
<table class="t1">
	<tr class="tr">
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/><pre>  <b><i>  					     Total Payments and Credits	             -544.25</td></i></b>
</tr>
</table>
</div></pre>
<pre><div class="p9" id="counter"><table class="t1" style="width:100% " onclick="count()">
  <tr class="tr">Purchases<hr style="border-top: solid 1.5px; color:black;top:5em;"/><td><i>Trans Date</td>
    <td><i>Post Date</td>
    <td onclick="stopTimer(this),setColor(event)" ; data-count="0"/><i>&nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Transaction Description</td>
    	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/><i>Amount</td>
    		<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/><i>Total</td></tr>
	<td type="submit" value="counter" onclick="stopTimer(this),setColor(event)" ; data-count="0"/ > Aug 04</td>
	<td onclick="stopTimer(this)">Aug 05</td><td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>DANE’S JUICE 1842 NEW YORK NY</td>	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>7.62</td>
</tr>
<tr>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/ >Aug 04</td>	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 05</td>	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>CHICK PEA NEW YORK NY</td>	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>10.57</td></tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 04</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 04</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>CVS PHARMACY #10685 NY</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>20.69</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 04</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 05</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>PAPYRUS GIFT STR QUEENS NY	</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>3.58</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 04</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 04</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>CVS PHARMACY #10685 NY</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>20.69</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 05</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 05</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>A&T WRLS D9985-01 NY</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>28.88</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 05</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 05</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>LENNY'S GROCERY #505606 NY</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>3.58</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 05</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 05</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>BURGER KING 298 QUEENS NY</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>11.37</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 05</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 06</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>FIVESTAR COFFEE STORE 073959 NYC NY</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>4.13</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 05</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 06</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>OLLIE DINER L-09118 NY</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>28.88</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 06</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 06</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>HAMPTON INN DC LONDON UK</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>113.93</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 07</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 07</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>WHOLEFOODS NYC 700-334-0900 NY</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>60.69</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 10</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 12</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>HILLTOP PERK CAFÉ NEW YORK NY</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>4.50</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 11</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 13</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>SANDWICH SHOP 00314574255 NEW YORK NY</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>6.16</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 12</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 12</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>USPS 2879002 845-4611249 NY</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>16.84</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 12</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 12</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>GIFTSHOP QUEENS NY</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>60.85</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 14</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 16</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>COFFEE CAFÉ NY</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>12.19</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 14</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 15</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>NYP SAGA CAFETERIA NEW YORK NY</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>5.58</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 15</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 15</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>PORT AUTH CAFÉ 16 NEW YORK NY</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>21.37</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 15</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 15</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>ONLINE AMAZON.COM MZN.COM/BILL NY P5D9LL0DF04
</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>14.13	</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 15</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 15</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>AMC MOVIES#2165 NY</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>18.28</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 15</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 15</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>BURGER KING #5463 NY</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>13.93</td>
</tr>

<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 15</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 15</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>COMCAST CABLE NYC 700-334-0900 NY</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>1486.07	</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 18</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 18</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>UBER TAXI TRIP #2220648 WASHINGTON DC</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>32.12</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 18</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 19</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>DANE’S JUICE 1842 NEW YORK NY</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>6.99</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 20</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 20</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>PORT AUTH AUBONPAIN 14 NEW YORK NY</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>10.08</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 20</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 20</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>TRADER JOE'S STORE #105 UNION SQ NY </td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>0.07</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 20</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 20</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>BLUE MOON MEXICAN CAFE BROOKLYN NY</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>5.09</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 20</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 20</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>NYP SAGE MILSTEIN LOBBY NEW YORK NY</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>8.77</td>
</tr>

<tr>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 22</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 22</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>SEVEN UP*COFFEE 955-444-5585 NY</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>4.25</td>	
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 22</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 22</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>H MART 00324 QUEENS NY</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>43.09</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 22</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 24</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>MIKES BAGELS NYC NEW YORK NY</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>15.86</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 22</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 22</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>NETFLIX.COM NETFLIX.COM NY</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>24.86	</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 23</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 23</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>STARWAY ELECTRONIC REPAIR #4209 NY</td>
<td>129.99</td>

</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 23</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 23</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>AMAZON PRIME GIFT CARD 96966 </td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>10.68	</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 23</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 23</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>STARBUCKS CAFE #1233 NYC NY</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>5.97</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 23</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 23</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>MAGNOLIA RESTAURANT NY</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>0.05</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 24</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 24</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>AMAZON.COM MZN.COM/BILLWA KDM77N53L8G </td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>32.00</td>
</tr>
</table>
  </div>
</div></pre></i><div class="p10">Page 2 of 3</div>

</div>
</div>
</i>
</i>
</i>
</td>
</i>
</td>
</tr></table></div></pre></tr></table></i></td></i></td></i></i></i></tr></table></div></pre></pre></div></b></span></div></pre></pre></pre></div></pre></div></div></div>
<div class="page3" onclick="stopTimer(this),setColor(event)" ; data-count="0"/>
		OMM VISA
	
		<pre><span class="sp1" onclick="stopTimer(this),setColor(event)" ; data-count="0"/>
			<span id= "a1" onclick="stopTimer(this),setColor(event)" ; data-count="0"/>							     Pat Miller
   			                        Account Number Ending in 9012</span><br>
			</span></pre>
			<pre><div class="p7" onclick="stopTimer(this),setColor(event)" ; data-count="0"/><b>     ACCOUNT ACTIVITY CONTINUED</b></div>
			<pre><div class="p8" onclick="stopTimer(this),setColor(event)" ; data-count="0"/><table class="t1" style="width:100%">
 <tr><td onclick="stopTimer(this),setColor(event)" ; data-count="0"/><i>Trans Date</td>
    <td onclick="stopTimer(this),setColor(event)" ; data-count="0"/><i>Post Date</td>
    <td onclick="stopTimer(this),setColor(event)" ; data-count="0"/><i>&nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Transaction Description</td>
    	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/><i>Amount</td>
    		<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/><i>Total</td>
  </tr>
  <tr>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 24</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 24</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/> 9876 BURGER KING  #5463 QUEENS NY</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>43.00</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 24</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 24</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/> UBER TAXI TRIP 7648930439599314202</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>36.34</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 24</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 24</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>TRADER JOE'S #105 QPS ASTORIA NY </td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>11.90</td>
</tr>
<tr>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 31</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Aug 31</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/> PORT AUTH CAFE 14 NEW YORK NY</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>5.40</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Sep 01</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Sep 03</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/> CHEESE IT QUEENS NY</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>12.99</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Sep 01</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Sep 01</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/> BLOOMINGDALES 314202 3278763 NY</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>120.68</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Sep 01</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Sep 01</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>MOTTS HAIRCUTS 9507030021 BROOKLYN NY </td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>3.97</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Sep 04</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Sep 04</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/> SLOAN KET CAFETERIA NEW YORK NY</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>4.50</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Sep 04</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Sep 04</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>TRADER JOE'S #105 QPS ASTORIA NY </td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>6.16</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Sep 04</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Sep 06</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/> GIFTSHOP QUEENS NY</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>16.84</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Sep 05</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Sep 05</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/> BAKE AND EAT NEW YORK NY</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>90.85</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Sep 05</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Sep 05</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/> SANDWICH SHOP 00314574255 NEW YORK NY</td>
<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>12.00</td>
</tr>
</table>
<table class="t1">
	<tr class="tr">
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/><b><i>  					           												     Total Purchases             2,829.70</td>
</tr>
</table>

</table>
</i></td></i></td></i></td></tr></table></div></pre></pre>
pre><pre><div class="p12"><table class="t1" style="width:100% ">
  <tr class="tr"><div id= "c1" onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Payments and Credits</div><hr style="border-top: solid 1.5px; color:black;top:5em;"/>
<table class="t1">
	<tr class="tr">
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/><pre>  <b><i>                                    Total Interest for this Period             49.51</td>
</tr>
</table>
</i>
</b></pre></td></tr></table></tr></table></div></pre></b></td>
<br>

<pre><div class="p13"><table style="width:100% " class="t1"><tr class="r1"><td class="r2" onclick="stopTimer(this),setColor(event)" ; data-count="0"/><center><b>2019 Total Fee and Interest Charges</center></td></tr>
	<table style="width:100% ">
		<tr class="r1">
			<td class="r2" onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Total Fees Charged in 2019</td>
			<td class="r2" onclick="stopTimer(this),setColor(event)" ; data-count="0"/>$30.00</td>
		</tr>
		<tr class="r1">
			<td class="r2" onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Total Interest Charged in 2019</td>
			<td class="r2" onclick="stopTimer(this),setColor(event)" ; data-count="0"/>$273.57</td>
		</tr>

</table>
</div>
</table>
</div>
</pre>
<div class="col-sm-3 col-md-6 col-lg-4">
	<div class="p14"><table class="t1" style="width:100% "><thead><tr class="r1"><td onclick="stopTimer(this),setColor(event)" ; data-count="0"/><b>Interest Charges</td></tr></thead>
	<table style="width:100% "><tbody>
		<tr>
			<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Balance Type</td>
			<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Annual <br>Percentage<br> Rate (APR)</td>
			<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Balance <br>Subject to<br> Interest Rate</td>
			<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Interest <br>Charge</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Purchases</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>16.99%</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>$3,421.26</td>
	<td>$49.51</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Cash Advances</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>24.99%</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>$0.00</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>$0.00</td>
</tr>
<tr>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>Balance Transfers</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>-</td><td>-</td>
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/>-</td>
</tr>
</tbody>
</table>
<table class="t1">
	<tr class="tr">
	<td onclick="stopTimer(this),setColor(event)" ; data-count="0"/><pre>  <b><i>  					           Total Interest	       $49.51</td>

	
</tr>
<a href="question2.php">Next</a>
</tbody>
</table>

</table>
</i>
</b>
</pre></td>
<div class="p15" onclick="setColor(event)" ; data-count="0"/>Page 3 of 3</div>
</div>
</div>
</div>
</div>
</div></tr>
</table></b></tr></thead></table></div></div></b></center></tr></table></div>
</pre></tr></table></i></i></i></i></i></tr></table></div></pre></pre></div>

<br>
<br>
<br>
<br>



</table>

</b></td></tr></thead></table></div>




<script>
	var click1 = document.querySelector('#click1'),
click2 = document.querySelector('#click2');

function Color() {
  this.style.color = 'green';
  
}

function restore() {
  click1.style.color = '#bb0000';

}

click1.addEventListener('click', Color);
click2.addEventListener('click', restore);
</script>

</html>









