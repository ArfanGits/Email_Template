<?php
$header = <<<Email_Template
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="css/style.css">
<title>Email Template</title>
</head>
Email_Template;
$body = <<<Email_Template
<body>
    <script src="js/bootstrap.bundle.min.js"></script>
<div id="wrapper">
    <header class="pb-4 mb-4">
        <div class="text-center discount mt-4">
      
        </div>
    </header>
    <main class="text-center" style="padding-top: 20px;padding-bottom: 20px;">
    <div class="card">
        <div class="card-body">
            <h1>Welcome!</h1>
            <p style="text-align:left;">We're excited that we have got first you need to confirm your account. Just press the button below.</p>
            <br>
            <button type="button" class="btn" style="background-color:#FF7800;margin-bottom:20px; color: #fff">Confirm Account</button>
            <p style="text-align:left;">If this does not work,Copy and paste this link in your <br> browser:</p> 
            <br>
            <div class="left"style="text-align:left;">
                <a href=""style="color:#FF7800;">XXX.XXXXXXX.XXX/XXXXXXXXXXXXXXXXXXX</a>  
            </div>
            
            <p style="text-align:left;margin-top:20px;">If you have any question, just reply to this email - we're always happy to hold it</p> 
            <p style="text-align:left;">Cheers,<br>The Bee Tears</p>
        </div>
    </div>
<br>
    <div class="card">
        <div class="card-body"style="background-color:#FED2AA;">
            <h2>Need More Help?</h2>
            <a href="#" style="color:#FF7800;text-align:left;">We're Here to help you</a>  
    </div>
</div>
    </main>
    <footer class="bg-light text-center text-lg-start">
        <div class="text-center p-3" style="background-color: #EAEAEA;">
            Go to your mail to active the account for sure!!!
            <a class="text-dark" href="#">someting@gmail.com</a>
        </div>
    </footer>
</div>
  </body>
Email_Template;
?>

<!doctype html>
<?php
echo $header;
echo  $body;
?>
<html lang="en">


</html>