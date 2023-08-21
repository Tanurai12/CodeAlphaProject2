<!DOCTYPE html>
<html >
<head>
    
    <title>Form with captcha</title>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <style>  

            /*little CSS here*/
        div{
           text-align: center;
            text-justify: auto;
           
           
           
            margin-left: 450px;
            margin: auto;
            padding: 5px;
            padding-top: 20px;
            padding-right: 20px;
           
        
        }
        label{
            width: 100px;
            display:inline-block ;
        }
    
        body{
            background-color:pink;
        }
        
       </style>

</head>
<body>
<div id="form">
    <form method="post" action="  "> 
        <h2 style="text-decoration: underline;">Contact Us</h2>
        <label>Full Name:</label><input type="text" name="name"><br><br><br>
        <label>Phone:</label><input type="number" name="phone"><br><br><br>
        <label>Email Id:</label><input type="text" name="mail"><br><br><br>
        <label>Subject:</label><textarea type="text" name="sub"></textarea><br><br><br>
        <label>Message:</label><textarea type="text" name="msg" cols="20" rows="6"></textarea><br><br><br>
        <div class="g-recaptcha" data-sitekey="6LfduacnAAAAAG_zrS2N4wZrmtssiDdd1hoGjpNj"></div>
        <span style="margin-left: 100px;" ><input type="submit" name="submit"><br><br></span>

    </form>

   
    
</div>

</body>

</html>
