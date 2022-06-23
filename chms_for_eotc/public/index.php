<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reading books</title>
   
    <link rel="stylesheet"  href="style.css">      
</head>
<body>  
    <div class="c">
        <div class="c1">
            <nav class="n1"><a href ="about_this_church.php">this link to church information</a></nav>
            <nav class="n2"><button onclick="window.open('login.php','_self','width=500px,height=500px,left=500px,top=300px')">LOGIN</button></nav>
            <nav class="n3"><button onclick="window.open('req_membership.php','_blank','width=500px,height=500px,left=500px,top=300px')">SIGNUP</button></nav>
    
        </div>
        
        <div class="c2">
        <script>
              if(navigator.onLine)
                {
       
                       document.write('<iframe class="responsive-iframe" src="https://www.ethiopicbible.com/readings/today" sandbox="allow-forms allow-scripts"   ></iframe>');
                 }
                 else{
                    document.write('<iframe class="responsive-iframe" src="about_this_church.php" sandbox="allow-forms allow-scripts"   ></iframe>');
           
                 }
        </script>
        </div>

        <div class="c3">
         <h2>this is footer part </h2>
        </div>
    </div>
   
</body>
</html>