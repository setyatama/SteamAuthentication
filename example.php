<?php
    require ('steamauth/steamauth.php');  
        
?>
<html>
<head>
    <title>page</title>
</head>
<body>
<?php
if(!isset($_SESSION['steamid'])) {

    echo "welcome guest! please login \n \n";
    steamlogin(); //login button
    
}  else {
    include ('steamauth/userInfo.php');

    //Protected content
    echo "Welcome back " . $steamprofile['personaname'] . "\n";
    
    logoutbutton();
}    
?>  
</body>
</html>