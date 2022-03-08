



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="login.css" type="text/css">
    <link rel="stylesheet" href="log1.css" type="text/css">
</head>
<body>
   
      
   
    <div class="logintitle">
        <h2><b>KISIWA TECHNICAL TRAINING INSTITUTE <br>ADMMINISTRATOR</b></h2>
    </div>
    <form action="#" method="POST">
        <fieldset class="loging">
           
        <b >Username</b><br>
       <input class="mail " type="text" name="email" id="email" ><br><br>
       <b >Password</b><br>
       <input class="pass" type="password" name="password" id="password" ><br><br>

       <button class="btn1" type="submit" name="submit">Log In</button>
       <button class="btn1"><a href="Login.html" >Home</a></button>
    </fieldset>
    </form>
   <!-- <br><br>
    <h3 id="timer"></h3>
    <script>
        //counting the date we are counting down to
        var CountDownDate =new Date("1 Dec,2021 00:00:00").getTime();
        //update the count down every 1 second
        var x =setInterval(function(){
            //get today's date and time
            var now =new Date().getTime();
            //find the distance between now and the count down date 
            var distance =CountDownDate -now;
            //Time calculation for days ,hours ,minutes and seconds
            var days =math.floor(distance /(1000 * 60 * 60 *24));
            var hours =math.floor((distance % (1000*60 *60*24)) /(1000*60*60));
            var minutes =math.floor((distance % (1000 * 60 *60)) /(1000 *60));
            var seconds =math.floor((distance % (1000 *60))/1000);

            //output the result in an element with the id="timer"

            document.getElementById("timer").innerHTML=days +"d"+hours+"h"+
            minutes+"m"+seconds+"s";

            //if the count down is over ,write some text
            if(distance<0){
                clearInterval(X);
                document.getElementById("timer").innerHTML= "EXAMINATION REGISTRATION TIME HAS EXPIRED" ;
            }
        },1000)
    </script>-->
       
</body>
</html>