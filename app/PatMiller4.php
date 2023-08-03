<?php
session_start();
include 'connect.php';
?>
<html>
<head><meta http-equiv=Content-Type content="text/html; charset=UTF-8">
<title>Bank Statement</title>
<style type="text/css">
<!--
span.cls_002{font-family:Times,serif;font-size:10.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_002{font-family:Times,serif;font-size:10.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_003{font-family:Arial,serif;font-size:30.1px;color:rgb(0,175,80);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_003{font-family:Arial,serif;font-size:30.1px;color:rgb(0,175,80);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_007{font-family:Times,serif;font-size:9.4px;color:rgb(34,31,31);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_007{font-family:Times,serif;font-size:9.4px;color:rgb(34,31,31);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_008{font-family:Times,serif;font-size:9.4px;color:rgb(34,31,31);font-weight:bold;font-style:normal;text-decoration: none}
div.cls_008{font-family:Times,serif;font-size:9.4px;color:rgb(34,31,31);font-weight:bold;font-style:normal;text-decoration: none}
span.cls_009{font-family:"MS Mincho",serif;font-size:10.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_009{font-family:"MS Mincho",serif;font-size:10.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_011{font-family:"Calibri Bold",serif;font-size:14.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
div.cls_011{font-family:"Calibri Bold",serif;font-size:14.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
span.cls_013{font-family:Times,serif;font-size:10.6px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_013{font-family:Times,serif;font-size:10.6px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_012{font-family:"Calibri Bold",serif;font-size:10.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
div.cls_012{font-family:"Calibri Bold",serif;font-size:10.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
span.cls_006{font-family:"Calibri",serif;font-size:10.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_006{font-family:"Calibri",serif;font-size:10.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_014{font-family:Times,serif;font-size:8.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_014{font-family:Times,serif;font-size:8.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_020{font-family:"Calibri",serif;font-size:10.1px;color:rgb(255,255,255);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_020{font-family:"Calibri",serif;font-size:10.1px;color:rgb(255,255,255);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_016{font-family:"Calibri Bold",serif;font-size:12.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
div.cls_016{font-family:"Calibri Bold",serif;font-size:12.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
span.cls_021{font-family:Times,serif;font-size:10.1px;color:rgb(0,0,0);font-weight:normal;font-style:italic;text-decoration: none}
div.cls_021{font-family:Times,serif;font-size:10.1px;color:rgb(0,0,0);font-weight:normal;font-style:italic;text-decoration: none}
span.cls_022{font-family:Times,serif;font-size:10.1px;color:rgb(0,0,0);font-weight:bold;font-style:italic;text-decoration: none}
div.cls_022{font-family:Times,serif;font-size:10.1px;color:rgb(0,0,0);font-weight:bold;font-style:italic;text-decoration: none}
span.cls_024{font-family:Times,serif;font-size:10.6px;color:rgb(0,0,0);font-weight:bold;font-style:italic;text-decoration: none}
div.cls_024{font-family:Times,serif;font-size:10.6px;color:rgb(0,0,0);font-weight:bold;font-style:italic;text-decoration: none}
-->
</style>
<script type="text/javascript" src="428c9294-002d-11ea-9d71-0cc47a792c0a_id_428c9294-002d-11ea-9d71-0cc47a792c0a_files/wz_jsgraphics.js"></script>
</head>
<body onload="toggleZoomScreen()">
	<script>

    function toggleZoomScreen() {
       document.body.style.zoom = "240%";
       startTimer(this);
       } 

  function HelpAlert(e)
        {
          alert("In the current statement, what amount did Pat receive as the cashback amount in the 5% Bonus Categories?");
        }


	function setColor(e) {
  var target = e.target;
  target.style.color = "#FF00FF"; 
  //var count = +target.dataset.count;
  
   //target.style.color = count === 0 ? "#000000 " : "#FF00FF";
   //target.dataset.count = count === 0 ? 1 : 0;
}



       var t = 0;
        var i;
        var clicks = 0;
      
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
                showTime(getTime(t));P
            },1000) 
            //e.setAttribute("onclick","stopTimer(this),setColor(event)");

        
        }

        function stopTimer(e){
            //window.clearInterval(i);
            //e.setAttribute("onclick","startTimer(this),setColor(event)");
          var ans = '$17.61';
          
          var id = e.id;
          if(id == 200)
          {
            var a = ans;
          }
          if(id == 1001)
          {
            var a = 'A-';
            //alert(a);
          }
          if(id == 1002)
          {
            var a = 'B-';
          }
          if(id == 1003)
          {
            var a = 'I-';
          }
          if(id!=1001 && id!=1002 && id!=1003  && id!=200)
          {
            var a = e.innerHTML;
            var a = a.trim();
            var a = a.replace(/(<([^>]+)>)/ig,"");
            var a = a.replace(/(&amp;)/ig," and ");
            var a = a.replace(/(')/ig,"");
            var a = a.replace(/(\r\n|\n|\r)/ig," ");
            //alert(a);

          }
            saveTime(getTime(t),a);
        }
         function right_ansTimer(e){
            window.clearInterval(i);
            e.setAttribute("onclick","startTimer(this),setColor(event)");
          var a = '$83.72';
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
            clicks++;
            if(t>0){
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status != 200) {
                        document.getElementById("errMsg").innerHTML = "Exception while saving data : " + this.responseText;
                    } else {
                        document.getElementById("errMsg").innerHTML = "";
                    }
                };
                xmlhttp.open("POST", "question4_send.php", true);
                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xmlhttp.send("time=" + time + "&ans=" + ans + "&clicks=" + clicks );
          
            }
        }
     

     


    </script>

<button value="help" style = "background-color:#33CEFF; font-family: georgia; font-weight: bold;color: black; border: 2px solid black; position:fixed; right:10px;" onclick="HelpAlert(this),stopTimer(this)">Help</button>
<div style="position:absolute;left:50%;margin-left:-306px;top:0px;width:612px;height:792px;border-style:outset;overflow:hidden" data-count="0">
<div style="position:absolute;left:0px;top:0px">
<img src="BG/background1.jpg" width=612 height=792></div>
<div style="position:absolute;left:562.97px;top:10.75px" class="cls_002"><span class="cls_002"; onclick="stopTimer(this),setColor(event)"; data-count="1">Pat Miller</span></div>
<div style="position:absolute;left:7.25px;top:2.25px" class="cls_003"><span class="cls_003" onclick="stopTimer(this),setColor(event)"; data-count="1">OMM VISA</span></div>
<div style="position:absolute;left:470.20px;top:22.25px" class="cls_002"><span class="cls_002" onclick="stopTimer(this),setColor(event)"; data-count="1" >Account Number Ending in 9012</span></div>
<div style="position:absolute;left:58.03px;top:57.28px" class="cls_007"><span class="cls_007" onclick="stopTimer(this),setColor(event)"; data-count="1">00558 BEX Z 08109 D</span></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:444.67px;top:63.43px" class="cls_007"><span class="cls_007">Payment Due Date:</span></div>
<div style="position:absolute;left:536.22px;top:62.78px" class="cls_008"><span class="cls_008">10/09/2018</span></div></div>
<div style="position:absolute;left:58.03px;top:67.53px" class="cls_007"><span class="cls_007" onclick = "stopTimer(this),setColor(event)"; data-count="1">PAT MILLER</span></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:444.92px;top:73.18px" class="cls_007"><span class="cls_007">New Balance</span></div>
<div style="position:absolute;left:541.23px;top:72.53px" class="cls_008"><span class="cls_008">$3,421.10</span></div></div>
<div style="position:absolute;left:58.03px;top:77.28px" class="cls_007"><span class="cls_007" onclick = "stopTimer(this),setColor(event)"; data-count="1">35-11 BROADWAY</span></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:444.92px;top:83.18px" class="cls_007"><span class="cls_007" >Minimum Payment:</span></div>
<div style="position:absolute;left:552.97px;top:82.53px" class="cls_008"><span class="cls_008">$83.71</span></div></div>
<div style="position:absolute;left:58.03px;top:86.78px" class="cls_007"><span class="cls_007" onclick = "stopTimer(this),setColor(event)"; data-count="1">QUEENS, NY  11105</span></div>
<div style="position:absolute;left:371.40px;top:121.55px" class="cls_007"><span class="cls_007" onclick = "stopTimer(this),setColor(event)"; data-count="1">$______________________________Amount Enclosed</span></div>
<div style="position:absolute;left:371.40px;top:133.30px" class="cls_008"><span class="cls_008" onclick = "stopTimer(this),setColor(event)"; data-count="1">Make your check payable to:     OMM Visa Services.</span></div>
<div style="position:absolute;left:340.90px;top:177.80px" class="cls_007"><span class="cls_007" onclick = "stopTimer(this),setColor(event)"; data-count="1">CARDMEMBER SERVICE</span></div>
<div style="position:absolute;left:340.90px;top:187.80px" class="cls_007"><span class="cls_007" onclick = "stopTimer(this),setColor(event)"; data-count="1">PO BOX 17395</span></div>
<div style="position:absolute;left:340.90px;top:197.33px" class="cls_007"><span class="cls_007"onclick = "stopTimer(this),setColor(event)"; data-count="1">WILMINGTON, DE  19850-7395</span></div>
<div style="position:absolute;left:241.10px;top:244.58px" class="cls_009"><span class="cls_009" onclick = "stopTimer(this),setColor(event)"; data-count="1">5000 18026</span></div>
<div style="position:absolute;left:301.10px;top:244.58px" class="cls_009"><span class="cls_009" onclick = "stopTimer(this),setColor(event)"; data-count="1">25822539104745</span></div>
<div style="position:absolute;left:99.80px;top:312.60px" class="cls_011"><span class="cls_011" onclick = "stopTimer(this),setColor(event)"; data-count="1">ACCOUNT SUMMARY</span></div>
<div style="position:absolute;left:389.90px;top:312.60px" class="cls_011"><span class="cls_011" onclick = "stopTimer(this),setColor(event)"; data-count="1">PAYMENT INFORMATION</span></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:26.00px;top:340.10px" class="cls_013"><span class="cls_013">Previous Balance</span></div>
<div style="position:absolute;left:258.85px;top:340.60px" class="cls_002"><span class="cls_002">$1,086.15</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:336.88px;top:340.60px" class="cls_002"><span class="cls_002">New Balance</span></div>
<div style="position:absolute;left:551.72px;top:340.60px" class="cls_002"><span class="cls_002">$3,421.26</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:26.00px;top:352.12px" class="cls_013"><span class="cls_013">Payment, Credits</span></div>
<div style="position:absolute;left:263.10px;top:352.62px" class="cls_002"><span class="cls_002">-$544.10</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:336.88px;top:352.62px" class="cls_002"><span class="cls_002">Payment Due Date</span></div>
<div style="position:absolute;left:546.22px;top:352.62px" class="cls_002"><span class="cls_002">10/09/2018</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:26.00px;top:364.12px" class="cls_013"><span class="cls_013">Purchases</span></div>
<div style="position:absolute;left:258.85px;top:364.62px" class="cls_002"><span class="cls_002">$2,829.70</span></div></div>
<div onclick="stopTimer(this),setColor(event)">
<div style="position:absolute;left:336.88px;top:364.62px" class="cls_002"><span class="cls_002">Minimum Payment Due</span></div>
<div style="position:absolute;left:564.22px;top:364.62px" class="cls_002"><span class="cls_002">$83.72</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:26.00px;top:376.12px" class="cls_013"><span class="cls_013">Fees Charged</span></div>
<div style="position:absolute;left:276.35px;top:376.62px" class="cls_002"><span class="cls_002">$0.00</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:26.00px;top:388.12px" class="cls_013"><span class="cls_013">Interest Charged</span></div>
<div style="position:absolute;left:271.35px;top:388.62px" class="cls_002"><span class="cls_002">$49.51</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:26.00px;top:400.62px" class="cls_013"><span class="cls_013">New Balance</span></div>
<div style="position:absolute;left:258.85px;top:401.12px" class="cls_002"><span class="cls_002">$3,421.26</span></div></div>
<div style="position:absolute;left:329.63px;top:415.12px" class="cls_012" onclick = "stopTimer(this),setColor(event)"; data-count="0"><span class="cls_012">Late Payment Warning: </span><span class="cls_006">If we do not receive your minimum</span></div>
<span onclick = "stopTimer(this),setColor(event)"; data-count="1">
<div style="position:absolute;left:26.00px;top:424.62px" class="cls_013"><span class="cls_013" data-count="1">Opening/Closing Date</span></div>
<div style="position:absolute;left:204.33px;top:425.12px" class="cls_002"><span class="cls_002">08/16/2018-09/15/2018</span></div></span>
<div style="position:absolute;left:329.63px;top:427.37px" class="cls_006"><span class="cls_006"  onclick = "stopTimer(this),setColor(event)"; data-count="1">payment by the date listed above, you may have to pay up to a</span></div>
<div style="position:absolute;left:329.63px;top:439.65px" class="cls_006"><span class="cls_006"  onclick = "stopTimer(this),setColor(event)"; data-count="1">$35.00 late fee and your APRs will be subject to increase to a</span></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:26.00px;top:448.65px" class="cls_013"><span class="cls_013">Total Credit Line</span></div>
<div style="position:absolute;left:258.85px;top:449.15px" class="cls_002"><span class="cls_002">$4,500.00</span></div></div>
<div style="position:absolute;left:329.63px;top:451.90px" class="cls_006"><span class="cls_006" onclick = "stopTimer(this),setColor(event)"; data-count="1">maximum Penalty APR of 29.99%.</span></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:26.00px;top:472.65px" class="cls_013"><span class="cls_013">Available Credit</span></div>
<div style="position:absolute;left:258.85px;top:473.15px" class="cls_002"><span class="cls_002">$1,078.74</span></div></div>
<div style="position:absolute;left:329.63px;top:482.90px" class="cls_012"onclick = "stopTimer(this),setColor(event)"; data-count="1"><span class="cls_012">Minimum Payment Warning: </span><span class="cls_006">If you make only the minimum</span></div>
<div style="position:absolute;left:329.63px;top:494.90px" class="cls_006"><span class="cls_006" onclick = "stopTimer(this),setColor(event)"; data-count="1">payment each period, you will pay more in interest and it will</span></div>
<div onclick="stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:26.00px;top:496.65px" class="cls_013"><span class="cls_013">Total Cash Advance Line</span></div>
<div style="position:absolute;left:266.35px;top:497.15px" class="cls_002"><span class="cls_002">$900.00</span></div></div>
<div style="position:absolute;left:329.63px;top:506.90px" class="cls_006"><span class="cls_006" onclick = "stopTimer(this),setColor(event)"; data-count="1">take you longer to pay off your balance. For example:</span></div>
<div onclick="stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:26.00px;top:520.67px" class="cls_013"><span class="cls_013">Available for Cash</span></div>
<div style="position:absolute;left:266.35px;top:521.17px" class="cls_002"><span class="cls_002">$900.00</span></div></div>
<div style="position:absolute;left:348.65px;top:531.42px" class="cls_002"><span class="cls_002"  onclick = "stopTimer(this),setColor(event)"; data-count="1">If you make no</span></div>
<div style="position:absolute;left:446.18px;top:531.42px" class="cls_002"><span class="cls_002"  onclick = "stopTimer(this),setColor(event)"; data-count="1">You will pay off</span></div>
<div style="position:absolute;left:534.97px;top:531.42px" class="cls_002"><span class="cls_002"  onclick = "stopTimer(this),setColor(event)"; data-count="1">And you will</span></div>
<div style="position:absolute;left:330.13px;top:543.42px" class="cls_002"><span class="cls_002"  onclick = "stopTimer(this),setColor(event)"; data-count="1">additional charges using</span></div>
<div style="position:absolute;left:442.42px;top:543.42px" class="cls_002"><span class="cls_002"  onclick = "stopTimer(this),setColor(event)"; data-count="1">the balance shown</span></div>
<div style="position:absolute;left:532.97px;top:543.42px" class="cls_002"><span class="cls_002"  onclick = "stopTimer(this),setColor(event)"; data-count="1">end up paying</span></div>
<div style="position:absolute;left:342.90px;top:555.42px" class="cls_002"><span class="cls_002"  onclick = "stopTimer(this),setColor(event)"; data-count="1">this card and each</span></div>
<div style="position:absolute;left:440.42px;top:555.42px" class="cls_002"><span class="cls_002"  onclick = "stopTimer(this),setColor(event)"; data-count="1">on this statement in</span></div>
<div style="position:absolute;left:536.22px;top:555.42px" class="cls_002"><span class="cls_002"  onclick = "stopTimer(this),setColor(event)"; data-count="1">an estimated</span></div>
<div style="position:absolute;left:348.90px;top:567.42px" class="cls_002"><span class="cls_002"  onclick = "stopTimer(this),setColor(event)"; data-count="1">month you pay</span></div>
<div style="position:absolute;left:468.20px;top:567.42px" class="cls_002"><span class="cls_002"  onclick = "stopTimer(this),setColor(event)"; data-count="1">about</span></div>
<div style="position:absolute;left:546.98px;top:567.42px" class="cls_002"><span class="cls_002"  onclick = "stopTimer(this),setColor(event)"; data-count="1">total of</span></div>
<div style="position:absolute;left:96.30px;top:577.17px" class="cls_011"><span class="cls_011"  onclick = "stopTimer(this),setColor(event)"; data-count="1">CASHBACK REWARDS</span></div>
<div style="position:absolute;left:349.90px;top:579.93px" class="cls_002"><span class="cls_002"  onclick = "stopTimer(this),setColor(event)"; data-count="1">Only the Total</span></div>
<div style="position:absolute;left:459.17px;top:579.93px" class="cls_002"><span class="cls_002"  onclick = "stopTimer(this),setColor(event)"; data-count="1">22 year(s)</span></div>
<div style="position:absolute;left:541.23px;top:579.93px" class="cls_002"><span class="cls_002"  onclick = "stopTimer(this),setColor(event)"; data-count="1">$7,892.18</span></div>
<div onclick="stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:18.75px;top:593.20px" class="cls_002"><span class="cls_002">Opening Balance</span></div>
<div style="position:absolute;left:276.10px;top:593.20px" class="cls_002"><span class="cls_002">$0.00</span></div></div>
<div style="position:absolute;left:340.15px;top:591.95px" class="cls_002"><span class="cls_002" onclick = "stopTimer(this),setColor(event)"; data-count="1">Minimum Payment</span></div>
<div id = "200" onclick="stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:18.75px;top:605.20px" class="cls_002"><span class="cls_002">5% Bonus Categories</span></div>
<div style="position:absolute;left:271.10px;top:605.20px" class="cls_002"><span class="cls_002">$17.61</span></div></div>
<div style="position:absolute;left:362.65px;top:604.45px" class="cls_002"><span class="cls_002" onclick = "stopTimer(this),setColor(event)"; data-count="1">$121.90</span></div>
<div style="position:absolute;left:465.20px;top:604.45px" class="cls_002"><span class="cls_002" onclick = "stopTimer(this),setColor(event)"; data-count="1">3 years</span></div>
<div style="position:absolute;left:541.23px;top:604.45px" class="cls_002"><span class="cls_002" onclick = "stopTimer(this),setColor(event)"; data-count="1">$4,390.41</span></div>
<div onclick="stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:18.75px;top:617.20px" class="cls_002"><span class="cls_002">All Other Purchases</span></div>
<div style="position:absolute;left:271.10px;top:617.20px" class="cls_002"><span class="cls_002">$24.78</span></div></div>
<div onclick="stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:18.75px;top:641.70px" class="cls_002"><span class="cls_002">Cashback Bonus Balance</span></div>
<div style="position:absolute;left:271.10px;top:641.70px" class="cls_002"><span class="cls_002" data-count="1">$42.38</span></div></div>
<div style="position:absolute;left:20.25px;top:693.97px" class="cls_014"><span class="cls_014" onclick = "stopTimer(this),setColor(event)"; data-count="1">Customer Service</span></div>
<div style="position:absolute;left:95.30px;top:693.97px" class="cls_014"><span class="cls_014" onclick = "stopTimer(this),setColor(event)"; data-count="1">1-800-657-6754</span></div>
<div style="position:absolute;left:200.33px;top:693.97px" class="cls_014"><span class="cls_014" onclick = "stopTimer(this),setColor(event)"; data-count="1">TTY Hearing Impaired</span></div>
<div style="position:absolute;left:290.63px;top:693.97px" class="cls_014"><span class="cls_014" onclick = "stopTimer(this),setColor(event)"; data-count="1">1-844-567-3454</span></div>
<div style="position:absolute;left:416.42px;top:693.97px" class="cls_014"><span class="cls_014" onclick = "stopTimer(this),setColor(event)"; data-count="1">International Calls</span></div>
<div style="position:absolute;left:491.70px;top:693.97px" class="cls_014"><span class="cls_014" onclick = "stopTimer(this),setColor(event)"; data-count="1">1-755-456-3415</span></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="1">
<div style="position:absolute;left:191.58px;top:715.22px" class="cls_008"><span class="cls_008">Manage your account online: </span><span class="cls_020">  </span>www.omm.com/creditcards</span></div></div>
<div style="position:absolute;left:283.63px;top:767.25px" class="cls_006"><span class="cls_006" onclick = "stopTimer(this),setColor(event)"; data-count="1">Page 1 of 3</span></div>
</div>
<div style="position:absolute;left:50%;margin-left:-306px;top:802px;width:612px;height:792px;border-style:outset;overflow:hidden">
<div style="position:absolute;left:0px;top:0px">
<img src="BG/background2.jpg" width=612 height=792></div>
<div style="position:absolute;left:562.97px;top:10.75px" class="cls_002"><span class="cls_002" onclick = "stopTimer(this),setColor(event)"; data-count="1">Pat Miller</span></div>
<div style="position:absolute;left:7.25px;top:2.25px" class="cls_003"><span class="cls_003" onclick = "stopTimer(this),setColor(event)"; data-count="1">OMM VISA</span></div>
<div style="position:absolute;left:470.20px;top:22.25px" class="cls_002"><span class="cls_002" onclick = "stopTimer(this),setColor(event)"; data-count="1">Account Number Ending in 9012</span></div>
<div style="position:absolute;left:32.53px;top:81.78px" class="cls_011"><span class="cls_011" onclick = "stopTimer(this),setColor(event)"; data-count="1">ACCOUNT ACTIVITY</span></div>
<div style="position:absolute;left:32.53px;top:116.80px" class="cls_016"><span class="cls_016" onclick = "stopTimer(this),setColor(event)"; data-count="1">Payments and Credits</span></div>
<div style="position:absolute;left:32.53px;top:143.30px" class="cls_021"><span class="cls_021" onclick = "stopTimer(this),setColor(event)"; data-count="1">Trans.</span></div>
<div style="position:absolute;left:112.80px;top:143.30px" class="cls_021"><span class="cls_021" onclick = "stopTimer(this),setColor(event)"; data-count="1">Post</span></div>
<div style="position:absolute;left:259.10px;top:143.30px" class="cls_021"><span class="cls_021" onclick = "stopTimer(this),setColor(event)"; data-count="1">Transaction Description</span></div>
<div style="position:absolute;left:462.95px;top:143.30px" class="cls_021"><span class="cls_021" onclick = "stopTimer(this),setColor(event)"; data-count="1">Amount</span></div>
<div style="position:absolute;left:519.95px;top:143.30px" class="cls_021"><span class="cls_021" onclick = "stopTimer(this),setColor(event)"; data-count="1">Total</span></div>
<div style="position:absolute;left:32.53px;top:154.80px" class="cls_021"><span class="cls_021" onclick = "stopTimer(this),setColor(event)"; data-count="1">Date</span></div>
<div style="position:absolute;left:112.80px;top:154.80px" class="cls_021"><span class="cls_021" onclick = "stopTimer(this),setColor(event)"; data-count="1">Date</span></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:166.30px" class="cls_002"><span class="cls_002">Aug 04</span></div>
<div style="position:absolute;left:112.80px;top:166.30px" class="cls_002"><span class="cls_002">Aug 04</span></div>
<div style="position:absolute;left:164.08px;top:166.30px" class="cls_002"><span class="cls_002">AUTOPAY 00004567*AUTO-PMT</span></div>
<div style="position:absolute;left:462.95px;top:166.30px" class="cls_002"><span class="cls_002">-500.00</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:177.80px" class="cls_002"><span class="cls_002">Aug 14</span></div>
<div style="position:absolute;left:112.80px;top:177.80px" class="cls_002"><span class="cls_002">Aug 14</span></div>
<div style="position:absolute;left:164.08px;top:177.80px" class="cls_002"><span class="cls_002">NYC GROCERY BROADWAY NY</span></div>
<div style="position:absolute;left:462.95px;top:177.80px" class="cls_002"><span class="cls_002">-14.96</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:189.30px" class="cls_002"><span class="cls_002">Aug 20</span></div>
<div style="position:absolute;left:112.80px;top:189.30px" class="cls_002"><span class="cls_002">Aug 21</span></div>
<div style="position:absolute;left:164.08px;top:189.30px" class="cls_002"><span class="cls_002">WHOLE FOODS #6100</span></div>
<div style="position:absolute;left:462.95px;top:189.30px" class="cls_002"><span class="cls_002">-29.14</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:337.88px;top:200.83px" class="cls_022"><span class="cls_022">Total Payments and Credits</span></div>
<div style="position:absolute;left:519.95px;top:200.83px" class="cls_022"><span class="cls_022">-544.25</span></div></div>
<div style="position:absolute;left:32.53px;top:241.33px" class="cls_016"><span class="cls_016" onclick = "stopTimer(this),setColor(event)"; data-count="1">Purchases</span></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:256.33px" class="cls_002"><span class="cls_002">Aug 4</span></div>
<div style="position:absolute;left:112.80px;top:256.33px" class="cls_002"><span class="cls_002">Aug 5</span></div>
<div style="position:absolute;left:164.08px;top:256.33px" class="cls_002"><span class="cls_002">DANE’S JUICE 1842 NEW YORK NY</span></div>
<div style="position:absolute;left:462.95px;top:256.33px" class="cls_002"><span class="cls_002">7.62</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:267.82px" class="cls_002"><span class="cls_002">Aug 4</span></div>
<div style="position:absolute;left:112.80px;top:267.82px" class="cls_002"><span class="cls_002">Aug 5</span></div>
<div style="position:absolute;left:164.08px;top:267.82px" class="cls_002"><span class="cls_002">CHICK PEA NEW YORK NY</span></div>
<div style="position:absolute;left:462.95px;top:267.82px" class="cls_002"><span class="cls_002">10.57</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:279.35px" class="cls_002"><span class="cls_002">Aug 4</span></div>
<div style="position:absolute;left:112.80px;top:279.35px" class="cls_002"><span class="cls_002">Aug 4</span></div>
<div style="position:absolute;left:164.08px;top:279.35px" class="cls_002"><span class="cls_002">CVS PHARMACY #10685 NY</span></div>
<div style="position:absolute;left:462.95px;top:279.35px" class="cls_002"><span class="cls_002">20.69</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:290.85px" class="cls_002"><span class="cls_002">Aug 4</span></div>
<div style="position:absolute;left:112.80px;top:290.85px" class="cls_002"><span class="cls_002">Aug 5</span></div>
<div style="position:absolute;left:164.08px;top:290.85px" class="cls_002"><span class="cls_002">PAPYRUS GIFT STR QUEENS NY</span></div>
<div style="position:absolute;left:462.95px;top:290.85px" class="cls_002"><span class="cls_002">3.58</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:302.35px" class="cls_002"><span class="cls_002">Aug 4</span></div>
<div style="position:absolute;left:112.80px;top:302.35px" class="cls_002"><span class="cls_002">Aug 4</span></div>
<div style="position:absolute;left:164.08px;top:302.35px" class="cls_002"><span class="cls_002">CVS PHARMACY #10685 NY</span></div>
<div style="position:absolute;left:462.95px;top:302.35px" class="cls_002"><span class="cls_002">20.69</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:313.85px" class="cls_002"><span class="cls_002">Aug 5</span></div>
<div style="position:absolute;left:112.80px;top:313.85px" class="cls_002"><span class="cls_002">Aug 5</span></div>
<div style="position:absolute;left:164.08px;top:313.85px" class="cls_002"><span class="cls_002">A&T WRLS D9985-01 NY</span></div>
<div style="position:absolute;left:462.95px;top:313.85px" class="cls_002"><span class="cls_002">28.88</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:325.35px" class="cls_002"><span class="cls_002">Aug 5</span></div>
<div style="position:absolute;left:112.80px;top:325.35px" class="cls_002"><span class="cls_002">Aug 5</span></div>
<div style="position:absolute;left:164.08px;top:325.35px" class="cls_002"><span class="cls_002">LENNY'S GROCERY #505606 NY</span></div>
<div style="position:absolute;left:462.95px;top:325.35px" class="cls_002"><span class="cls_002">3.58</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:336.85px" class="cls_002"><span class="cls_002">Aug 5</span></div>
<div style="position:absolute;left:112.80px;top:336.85px" class="cls_002"><span class="cls_002">Aug 5</span></div>
<div style="position:absolute;left:164.08px;top:336.85px" class="cls_002"><span class="cls_002">BURGER KING 298 QUEENS NY</span></div>
<div style="position:absolute;left:462.95px;top:336.85px" class="cls_002"><span class="cls_002">11.37</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:348.35px" class="cls_002"><span class="cls_002">Aug 5</span></div>
<div style="position:absolute;left:112.80px;top:348.35px" class="cls_002"><span class="cls_002">Aug 6</span></div>
<div style="position:absolute;left:164.08px;top:348.35px" class="cls_002"><span class="cls_002">FIVESTAR COFFEE STORE 073959 NYC NY</span></div>
<div style="position:absolute;left:462.95px;top:348.35px" class="cls_002"><span class="cls_002">4.13</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:359.87px" class="cls_002"><span class="cls_002">Aug 5</span></div>
<div style="position:absolute;left:112.80px;top:359.87px" class="cls_002"><span class="cls_002">Aug 6</span></div>
<div style="position:absolute;left:164.08px;top:359.87px" class="cls_002"><span class="cls_002">OLLIE DINER L-09118 NY</span></div>
<div style="position:absolute;left:462.95px;top:359.87px" class="cls_002"><span class="cls_002">28.88</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:371.37px" class="cls_002"><span class="cls_002">Aug 6</span></div>
<div style="position:absolute;left:112.80px;top:371.37px" class="cls_002"><span class="cls_002">Aug 6</span></div>
<div style="position:absolute;left:164.08px;top:371.37px" class="cls_002"><span class="cls_002">HAMPTON INN DC LONDON UK</span></div>
<div style="position:absolute;left:462.95px;top:371.37px" class="cls_002"><span class="cls_002">113.93</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:382.87px" class="cls_002"><span class="cls_002">Aug 7</span></div>
<div style="position:absolute;left:112.80px;top:382.87px" class="cls_002"><span class="cls_002">Aug 7</span></div>
<div style="position:absolute;left:164.08px;top:382.87px" class="cls_002"><span class="cls_002">WHOLEFOODS NYC 700-334-0900 NY</span></div>
<div style="position:absolute;left:462.95px;top:382.87px" class="cls_002"><span class="cls_002">60.69</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:394.37px" class="cls_002"><span class="cls_002">Aug 10</span></div>
<div style="position:absolute;left:112.80px;top:394.37px" class="cls_002"><span class="cls_002">Aug 12</span></div>
<div style="position:absolute;left:164.08px;top:394.37px" class="cls_002"><span class="cls_002">HILLTOP PERK CAFÉ NEW YORK NY</span></div>
<div style="position:absolute;left:462.95px;top:394.37px" class="cls_002"><span class="cls_002">4.50</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:405.87px" class="cls_002"><span class="cls_002">Aug 11</span></div>
<div style="position:absolute;left:112.80px;top:405.87px" class="cls_002"><span class="cls_002">Aug 13</span></div>
<div style="position:absolute;left:164.08px;top:405.87px" class="cls_002"><span class="cls_002">SANDWICH SHOP 00314574255 NEW YORK NY</span></div>
<div style="position:absolute;left:462.95px;top:405.87px" class="cls_002"><span class="cls_002">6.16</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:417.37px" class="cls_002"><span class="cls_002">Aug 12</span></div>
<div style="position:absolute;left:112.80px;top:417.37px" class="cls_002"><span class="cls_002">Aug 12</span></div>
<div style="position:absolute;left:164.08px;top:418.62px" class="cls_002"><span class="cls_002">USPS 2879002 845-4611249 NY</span></div>
<div style="position:absolute;left:462.95px;top:417.37px" class="cls_002"><span class="cls_002">16.84</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:430.40px" class="cls_002"><span class="cls_002">Aug 12</span></div>
<div style="position:absolute;left:112.80px;top:430.40px" class="cls_002"><span class="cls_002">Aug 12</span></div>
<div style="position:absolute;left:164.08px;top:430.40px" class="cls_002"><span class="cls_002">GIFTSHOP QUEENS NY</span></div>
<div style="position:absolute;left:462.95px;top:430.40px" class="cls_002"><span class="cls_002">60.85</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:443.40px" class="cls_002"><span class="cls_002">Aug 14</span></div>
<div style="position:absolute;left:112.80px;top:443.40px" class="cls_002"><span class="cls_002">Aug 16</span></div>
<div style="position:absolute;left:164.08px;top:443.40px" class="cls_002"><span class="cls_002">COFFEE CAFÉ NY</span></div>
<div style="position:absolute;left:462.95px;top:443.40px" class="cls_002"><span class="cls_002">12.19</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:456.40px" class="cls_002"><span class="cls_002">Aug 14</span></div>
<div style="position:absolute;left:112.80px;top:456.40px" class="cls_002"><span class="cls_002">Aug 15</span></div>
<div style="position:absolute;left:164.08px;top:456.40px" class="cls_002"><span class="cls_002">NYP SAGA CAFETERIA NEW YORK NY</span></div>
<div style="position:absolute;left:462.95px;top:456.40px" class="cls_002"><span class="cls_002">5.58</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:467.90px" class="cls_002"><span class="cls_002">Aug 15</span></div>
<div style="position:absolute;left:112.80px;top:467.90px" class="cls_002"><span class="cls_002">Aug 15</span></div>
<div style="position:absolute;left:164.08px;top:467.90px" class="cls_002"><span class="cls_002">PORT AUTH CAFÉ 16 NEW YORK NY</span></div>
<div style="position:absolute;left:462.95px;top:467.90px" class="cls_002"><span class="cls_002">21.37</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:479.40px" class="cls_002"><span class="cls_002">Aug 15</span></div>
<div style="position:absolute;left:112.80px;top:479.40px" class="cls_002"><span class="cls_002">Aug 15</span></div>
<div style="position:absolute;left:164.08px;top:479.40px" class="cls_002"><span class="cls_002">ONLINE AMAZON.COM MZN.COM/BILL NY</span></div>
<div style="position:absolute;left:462.95px;top:479.40px" class="cls_002"><span class="cls_002">14.13</span></div>
<div style="position:absolute;left:164.08px;top:490.90px" class="cls_002"><span class="cls_002">P5D9LL0DF04</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:502.40px" class="cls_002"><span class="cls_002">Aug 15</span></div>
<div style="position:absolute;left:112.80px;top:502.40px" class="cls_002"><span class="cls_002">Aug 15</span></div>
<div style="position:absolute;left:164.08px;top:502.40px" class="cls_002"><span class="cls_002">AMC MOVIES#2165 NY</span></div>
<div style="position:absolute;left:462.95px;top:502.40px" class="cls_002"><span class="cls_002">18.28</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:513.92px" class="cls_002"><span class="cls_002">Aug 15</span></div>
<div style="position:absolute;left:112.80px;top:513.92px" class="cls_002"><span class="cls_002">Aug 15</span></div>
<div style="position:absolute;left:164.08px;top:513.92px" class="cls_002"><span class="cls_002">BURGER KING #5463 NY</span></div>
<div style="position:absolute;left:462.95px;top:513.92px" class="cls_002"><span class="cls_002">13.93</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:525.42px" class="cls_002"><span class="cls_002">Aug 15</span></div>
<div style="position:absolute;left:112.80px;top:525.42px" class="cls_002"><span class="cls_002">Aug 15</span></div>
<div style="position:absolute;left:164.08px;top:525.42px" class="cls_002"><span class="cls_002">COMCAST CABLE NYC 700-334-0900 NY</span></div>
<div style="position:absolute;left:462.95px;top:525.42px" class="cls_002"><span class="cls_002">1486.07</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:536.92px" class="cls_002"><span class="cls_002">Aug 18</span></div>
<div style="position:absolute;left:112.80px;top:536.92px" class="cls_002"><span class="cls_002">Aug 18</span></div>
<div style="position:absolute;left:164.08px;top:536.92px" class="cls_002"><span class="cls_002">UBER TAXI TRIP #2220648 WASHINGTON DC</span></div>
<div style="position:absolute;left:462.95px;top:536.92px" class="cls_002"><span class="cls_002">32.12</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:548.42px" class="cls_002"><span class="cls_002">Aug 18</span></div>
<div style="position:absolute;left:112.80px;top:548.42px" class="cls_002"><span class="cls_002">Aug 19</span></div>
<div style="position:absolute;left:164.08px;top:548.42px" class="cls_002"><span class="cls_002">DANE’S JUICE 1842 NEW YORK NY</span></div>
<div style="position:absolute;left:462.95px;top:548.42px" class="cls_002"><span class="cls_002">6.99</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:559.92px" class="cls_002"><span class="cls_002">Aug 20</span></div>
<div style="position:absolute;left:112.80px;top:559.92px" class="cls_002"><span class="cls_002">Aug 20</span></div>
<div style="position:absolute;left:164.08px;top:559.92px" class="cls_002"><span class="cls_002">PORT AUTH AUBONPAIN 14 NEW YORK NY</span></div>
<div style="position:absolute;left:462.95px;top:559.92px" class="cls_002"><span class="cls_002">10.08</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:571.42px" class="cls_002"><span class="cls_002">Aug 20</span></div>
<div style="position:absolute;left:112.80px;top:571.42px" class="cls_002"><span class="cls_002">Aug 20</span></div>
<div style="position:absolute;left:164.08px;top:571.42px" class="cls_002"><span class="cls_002">TRADER JOE'S STORE #105 UNION SQ NY</span></div>
<div style="position:absolute;left:462.95px;top:571.42px" class="cls_002"><span class="cls_002">0.07</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:582.92px" class="cls_002"><span class="cls_002">Aug 20</span></div>
<div style="position:absolute;left:112.80px;top:582.92px" class="cls_002"><span class="cls_002">Aug 20</span></div>
<div style="position:absolute;left:164.08px;top:582.92px" class="cls_002"><span class="cls_002">BLUE MOON MEXICAN CAFE BROOKLYN NY</span></div>
<div style="position:absolute;left:462.95px;top:582.92px" class="cls_002"><span class="cls_002">5.09</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:594.45px" class="cls_002"><span class="cls_002">Aug 20</span></div>
<div style="position:absolute;left:112.80px;top:594.45px" class="cls_002"><span class="cls_002">Aug 20</span></div>
<div style="position:absolute;left:164.08px;top:594.45px" class="cls_002"><span class="cls_002">NYP SAGE MILSTEIN LOBBY NEW YORK NY</span></div>
<div style="position:absolute;left:462.95px;top:594.45px" class="cls_002"><span class="cls_002">8.77</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:605.95px" class="cls_002"><span class="cls_002">Aug 22</span></div>
<div style="position:absolute;left:112.80px;top:605.95px" class="cls_002"><span class="cls_002">Aug 22</span></div>
<div style="position:absolute;left:164.08px;top:605.95px" class="cls_002"><span class="cls_002">SEVEN UP*COFFEE 955-444-5585 NY</span></div>
<div style="position:absolute;left:462.95px;top:605.95px" class="cls_002"><span class="cls_002">4.25</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:617.45px" class="cls_002"><span class="cls_002">Aug 22</span></div>
<div style="position:absolute;left:112.80px;top:617.45px" class="cls_002"><span class="cls_002">Aug 22</span></div>
<div style="position:absolute;left:164.08px;top:617.45px" class="cls_002"><span class="cls_002">H MART 00324 QUEENS NY</span></div>
<div style="position:absolute;left:462.95px;top:617.45px" class="cls_002"><span class="cls_002">43.09</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:628.95px" class="cls_002"><span class="cls_002">Aug 22</span></div>
<div style="position:absolute;left:112.80px;top:628.95px" class="cls_002"><span class="cls_002">Aug 24</span></div>
<div style="position:absolute;left:164.08px;top:628.95px" class="cls_002"><span class="cls_002">MIKES BAGELS NYC NEW YORK NY</span></div>
<div style="position:absolute;left:462.95px;top:628.95px" class="cls_002"><span class="cls_002">15.86</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:640.45px" class="cls_002"><span class="cls_002">Aug 22</span></div>
<div style="position:absolute;left:112.80px;top:640.45px" class="cls_002"><span class="cls_002">Aug 22</span></div>
<div style="position:absolute;left:164.08px;top:640.45px" class="cls_002"><span class="cls_002">NETFLIX.COM NETFLIX.COM NY</span></div>
<div style="position:absolute;left:462.95px;top:640.45px" class="cls_002"><span class="cls_002">24.86</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:651.95px" class="cls_002"><span class="cls_002">Aug 23</span></div>
<div style="position:absolute;left:112.80px;top:651.95px" class="cls_002"><span class="cls_002">Aug 23</span></div>
<div style="position:absolute;left:164.08px;top:651.95px" class="cls_002"><span class="cls_002">STARWAY ELECTRONIC REPAIR #4209 NY</span></div>
<div style="position:absolute;left:462.95px;top:651.95px" class="cls_002"><span class="cls_002">129.99</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:663.45px" class="cls_002"><span class="cls_002">Aug 23</span></div>
<div style="position:absolute;left:112.80px;top:663.45px" class="cls_002"><span class="cls_002">Aug 23</span></div>
<div style="position:absolute;left:164.08px;top:664.70px" class="cls_002"><span class="cls_002">AMAZON PRIME GIFT CARD 96966</span></div>
<div style="position:absolute;left:462.95px;top:663.45px" class="cls_002"><span class="cls_002">10.68</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:676.22px" class="cls_002"><span class="cls_002">Aug 23</span></div>
<div style="position:absolute;left:112.80px;top:676.22px" class="cls_002"><span class="cls_002">Aug 23</span></div>
<div style="position:absolute;left:164.08px;top:676.22px" class="cls_002"><span class="cls_002">STARBUCKS CAFE #1233 NYC NY</span></div>
<div style="position:absolute;left:462.95px;top:676.22px" class="cls_002"><span class="cls_002">5.97</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:687.72px" class="cls_002"><span class="cls_002">Aug 23</span></div>
<div style="position:absolute;left:112.80px;top:687.72px" class="cls_002"><span class="cls_002">Aug 23</span></div>
<div style="position:absolute;left:164.08px;top:687.72px" class="cls_002"><span class="cls_002">MAGNOLIA RESTAURANT NY</span></div>
<div style="position:absolute;left:462.95px;top:687.72px" class="cls_002"><span class="cls_002">0.05</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:699.22px" class="cls_002"><span class="cls_002">Aug 24</span></div>
<div style="position:absolute;left:112.80px;top:699.22px" class="cls_002"><span class="cls_002">Aug 24</span></div>
<div style="position:absolute;left:164.08px;top:700.72px" class="cls_002"><span class="cls_002">AMAZON.COM MZN.COM/BILLWA</span></div>
<div style="position:absolute;left:462.95px;top:699.22px" class="cls_002"><span class="cls_002">32.00</span></div>
<div style="position:absolute;left:164.08px;top:713.72px" class="cls_002"><span class="cls_002">KDM77N53L8G</span></div></div>
<div style="position:absolute;left:283.63px;top:767.25px" class="cls_006"><span class="cls_006" onclick = "stopTimer(this),setColor(event)"; data-count="1">Page 2 of 3</span></div>
</div>
<div style="position:absolute;left:50%;margin-left:-306px;top:1604px;width:612px;height:792px;border-style:outset;overflow:hidden">
<div style="position:absolute;left:0px;top:0px">
<img src="BG/background3.jpg" width=612 height=792></div>
<div style="position:absolute;left:562.97px;top:10.75px" class="cls_002"><span class="cls_002" onclick = "stopTimer(this),setColor(event)"; data-count="1">Pat Miller</span></div>
<div style="position:absolute;left:7.25px;top:2.25px" class="cls_003"><span class="cls_003" onclick = "stopTimer(this),setColor(event)"; data-count="1">OMM VISA</span></div>
<div style="position:absolute;left:470.20px;top:22.25px" class="cls_002"><span class="cls_002" onclick = "stopTimer(this),setColor(event)"; data-count="1">Account Number Ending in 9012</span></div>
<div style="position:absolute;left:31.27px;top:78.78px" class="cls_011"><span class="cls_011" onclick = "stopTimer(this),setColor(event)"; data-count="1">ACCOUNT ACTIVITY CONTINUED</span></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:94.78px" class="cls_002"><span class="cls_002">Aug 24</span></div>
<div style="position:absolute;left:112.80px;top:94.78px" class="cls_002"><span class="cls_002">Aug 24</span></div>
<div style="position:absolute;left:164.08px;top:96.28px" class="cls_002"><span class="cls_002">9876 BURGER KING  #5463 QUEENS NY</span></div>
<div style="position:absolute;left:462.95px;top:94.78px" class="cls_002"><span class="cls_002">43.00</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:107.78px" class="cls_002"><span class="cls_002">Aug 24</span></div>
<div style="position:absolute;left:112.80px;top:107.78px" class="cls_002"><span class="cls_002">Aug 24</span></div>
<div style="position:absolute;left:164.08px;top:109.03px" class="cls_002"><span class="cls_002">UBER TAXI TRIP 7648930439599314202</span></div>
<div style="position:absolute;left:462.95px;top:107.78px" class="cls_002"><span class="cls_002">36.34</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:120.55px" class="cls_002"><span class="cls_002">Aug 24</span></div>
<div style="position:absolute;left:112.80px;top:120.55px" class="cls_002"><span class="cls_002">Aug 24</span></div>
<div style="position:absolute;left:164.08px;top:120.55px" class="cls_002"><span class="cls_002">TRADER JOE'S #105 QPS ASTORIA NY</span></div>
<div style="position:absolute;left:462.95px;top:120.55px" class="cls_002"><span class="cls_002">11.90</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:132.05px" class="cls_002"><span class="cls_002">Aug 31</span></div>
<div style="position:absolute;left:112.80px;top:132.05px" class="cls_002"><span class="cls_002">Aug 31</span></div>
<div style="position:absolute;left:164.08px;top:132.05px" class="cls_002"><span class="cls_002">PORT AUTH CAFE 14 NEW YORK NY</span></div>
<div style="position:absolute;left:462.95px;top:132.05px" class="cls_002"><span class="cls_002">5.40</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:146.05px" class="cls_002"><span class="cls_002">Sep 1</span></div>
<div style="position:absolute;left:112.80px;top:146.05px" class="cls_002"><span class="cls_002">Sep 3</span></div>
<div style="position:absolute;left:164.08px;top:146.05px" class="cls_002"><span class="cls_002">CHEESE IT QUEENS NY</span></div>
<div style="position:absolute;left:462.95px;top:146.05px" class="cls_002"><span class="cls_002">12.99</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:159.80px" class="cls_002"><span class="cls_002">Sep 1</span></div>
<div style="position:absolute;left:112.80px;top:159.80px" class="cls_002"><span class="cls_002">Sep 1</span></div>
<div style="position:absolute;left:164.08px;top:159.80px" class="cls_002"><span class="cls_002">BLOOMINGDALES 314202 3278763 NY</span></div>
<div style="position:absolute;left:462.95px;top:159.80px" class="cls_002"><span class="cls_002">120.68</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:173.55px" class="cls_002"><span class="cls_002">Sep 1</span></div>
<div style="position:absolute;left:112.80px;top:173.55px" class="cls_002"><span class="cls_002">Sep 1</span></div>
<div style="position:absolute;left:164.08px;top:173.55px" class="cls_002"><span class="cls_002">MOTTS HAIRCUTS 9507030021 BROOKLYN NY</span></div>
<div style="position:absolute;left:462.95px;top:173.55px" class="cls_002"><span class="cls_002">3.97</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:187.30px" class="cls_002"><span class="cls_002">Sep 4</span></div>
<div style="position:absolute;left:112.80px;top:187.30px" class="cls_002"><span class="cls_002">Sep 4</span></div>
<div style="position:absolute;left:164.08px;top:187.30px" class="cls_002"><span class="cls_002">SLOAN KET CAFETERIA NEW YORK NY</span></div>
<div style="position:absolute;left:462.95px;top:187.30px" class="cls_002"><span class="cls_002">4.50</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:201.08px" class="cls_002"><span class="cls_002">Sep 4</span></div>
<div style="position:absolute;left:112.80px;top:201.08px" class="cls_002"><span class="cls_002">Sep 4</span></div>
<div style="position:absolute;left:164.08px;top:201.08px" class="cls_002"><span class="cls_002">TRADER JOE'S #105 QPS ASTORIA NY</span></div>
<div style="position:absolute;left:462.95px;top:201.08px" class="cls_002"><span class="cls_002">6.16</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:215.08px" class="cls_002"><span class="cls_002">Sep 4</span></div>
<div style="position:absolute;left:112.80px;top:215.08px" class="cls_002"><span class="cls_002">Sep 6</span></div>
<div style="position:absolute;left:164.08px;top:215.08px" class="cls_002"><span class="cls_002">GIFTSHOP QUEENS NY</span></div>
<div style="position:absolute;left:462.95px;top:215.08px" class="cls_002"><span class="cls_002">16.84</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:228.83px" class="cls_002"><span class="cls_002">Sep 5</span></div>
<div style="position:absolute;left:112.80px;top:228.83px" class="cls_002"><span class="cls_002">Sep 5</span></div>
<div style="position:absolute;left:164.08px;top:228.83px" class="cls_002"><span class="cls_002">BAKE AND EAT NEW YORK NY</span></div>
<div style="position:absolute;left:462.95px;top:228.83px" class="cls_002"><span class="cls_002">90.85</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:32.53px;top:242.58px" class="cls_002"><span class="cls_002">Sep 5</span></div>
<div style="position:absolute;left:112.80px;top:242.58px" class="cls_002"><span class="cls_002">Sep 5</span></div>
<div style="position:absolute;left:164.08px;top:242.58px" class="cls_002"><span class="cls_002">SANDWICH SHOP 00314574255 NEW YORK NY</span></div>
<div style="position:absolute;left:462.95px;top:242.58px" class="cls_002"><span class="cls_002">12.00</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:381.90px;top:256.33px" class="cls_022"><span class="cls_022">Total Purchases</span></div>
<div style="position:absolute;left:519.95px;top:256.33px" class="cls_022"><span class="cls_022">2,829.70</span></div></div>
<div style="position:absolute;left:32.53px;top:315.10px" class="cls_016"><span class="cls_016" onclick = "stopTimer(this),setColor(event)"; data-count="1">Interest Charged</span></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:328.38px;top:341.60px" class="cls_022"><span class="cls_022">Total Interest for this Period</span></div>
<div style="position:absolute;left:519.95px;top:342.10px" class="cls_024"><span class="cls_024">49.51</span></div></div>
<div style="position:absolute;left:205.83px;top:424.87px" class="cls_016"><span class="cls_016" onclick = "stopTimer(this),setColor(event)"; data-count="1">2019 Total Fee and Interest Charges</span></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:145.05px;top:440.65px" class="cls_002"><span class="cls_002">Total Fees Charged in 2019</span></div>
<div style="position:absolute;left:416.17px;top:440.65px" class="cls_021"><span class="cls_021">$30.00</span></div></div>
<div onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:145.05px;top:455.40px" class="cls_002"><span class="cls_002">Total Interest Charged in 2019</span></div>
<div style="position:absolute;left:410.92px;top:455.40px" class="cls_021"><span class="cls_021">$273.57</span></div></div>
<div style="position:absolute;left:32.78px;top:526.42px" class="cls_016"><span class="cls_016" onclick = "stopTimer(this),setColor(event)"; data-count="1">Interest Charges</span></div>
<div style="position:absolute;left:32.78px;top:542.17px" class="cls_021"><span class="cls_021" onclick = "stopTimer(this),setColor(event)"; data-count="1">Balance Type</span></div>
<div style="position:absolute;left:370.15px;top:542.17px" class="cls_021"><span class="cls_021" onclick = "stopTimer(this),setColor(event)"; data-count="1">Annual</span></div>
<div style="position:absolute;left:446.67px;top:542.17px" class="cls_021"><span class="cls_021" onclick = "stopTimer(this),setColor(event)"; data-count="1">Balance</span></div>
<div style="position:absolute;left:514.20px;top:542.17px" class="cls_021"><span class="cls_021" onclick = "stopTimer(this),setColor(event)"; data-count="1">Interest</span></div>
<div style="position:absolute;left:370.15px;top:553.67px" class="cls_021"><span class="cls_021" onclick = "stopTimer(this),setColor(event)"; data-count="1">Percentage</span></div>
<div style="position:absolute;left:446.67px;top:553.67px" class="cls_021"><span class="cls_021" onclick = "stopTimer(this),setColor(event)"; data-count="1">Subject to</span></div>
<div style="position:absolute;left:514.20px;top:553.67px" class="cls_021"><span class="cls_021" onclick = "stopTimer(this),setColor(event)"; data-count="1">Charge</span></div>
<div style="position:absolute;left:370.15px;top:565.17px" class="cls_021"><span class="cls_021" onclick = "stopTimer(this),setColor(event)"; data-count="1">Rate (APR)</span></div>
<div style="position:absolute;left:446.67px;top:565.17px" class="cls_021"><span class="cls_021" onclick = "stopTimer(this),setColor(event)"; data-count="1">Interest Rate</span></div>
<div style="position:absolute;left:32.78px;top:576.67px" class="cls_002"><span class="cls_002" onclick = "stopTimer(this),setColor(event)"; data-count="1">Purchases</span></div>
<div style="position:absolute;left:370.15px;top:576.67px" class="cls_002"><span class="cls_002" onclick = "stopTimer(this),setColor(event)"; data-count="1">16.99%</span></div>
<div style="position:absolute;left:446.67px;top:576.67px" class="cls_002"><span class="cls_002" onclick = "stopTimer(this),setColor(event)"; data-count="1">$3,421.26</span></div>
<div style="position:absolute;left:514.20px;top:576.67px" class="cls_002"><span class="cls_002" onclick = "stopTimer(this),setColor(event)"; data-count="1">$49.51</span></div>
<div style="position:absolute;left:32.78px;top:590.95px" class="cls_002"><span class="cls_002" onclick = "stopTimer(this),setColor(event)"; data-count="1">Cash Advances</span></div>
<div style="position:absolute;left:370.15px;top:590.95px" class="cls_002"><span class="cls_002" onclick = "stopTimer(this),setColor(event)"; data-count="1">24.99%</span></div>
<div style="position:absolute;left:446.67px;top:590.95px" class="cls_002"><span class="cls_002" onclick = "stopTimer(this),setColor(event)"; data-count="1">$0.00</span></div>
<div style="position:absolute;left:514.20px;top:590.95px" class="cls_002"><span class="cls_002" onclick = "stopTimer(this),setColor(event)"; data-count="1">$0.00</span></div>
<div style="position:absolute;left:32.78px;top:604.95px" class="cls_002"><span class="cls_002" onclick = "stopTimer(this),setColor(event)"; data-count="1">Balance Transfers</span></div>
<div style="position:absolute;left:370.15px;top:604.95px" class="cls_002"><span id = "1001" class="cls_002" onclick = "stopTimer(this),setColor(event)"; data-count="1">-</span></div>
<div style="position:absolute;left:446.67px;top:604.95px" class="cls_002"><span id = "1002" class="cls_002" onclick = "stopTimer(this),setColor(event)"; data-count="1">-</span></div>
<div style="position:absolute;left:514.20px;top:604.95px" class="cls_002"><span id = "1003" class="cls_002" onclick = "stopTimer(this),setColor(event)"; data-count="1">-</span></div>
<div  onclick = "stopTimer(this),setColor(event)"; data-count="0">
<div style="position:absolute;left:300.88px;top:618.20px" class="cls_022"><span class="cls_022">Total Interest</span></div>
<div style="position:absolute;left:551.22px;top:618.20px" class="cls_022"><span class="cls_022">$49.51</span></div></div>
<div style="position:absolute;left:283.63px;top:767.25px" class="cls_006"><span class="cls_006"  onclick = "stopTimer(this),setColor(event)"; data-count="1">Page 3 of 3</span></div>
</div>
<BUTTON onclick = "window.location.href='question5.php'" style="position: fixed;right:10px; bottom: 20px;" >Next</BUTTON>
</body>
</html>
