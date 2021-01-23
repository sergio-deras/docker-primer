<html>
 <head>
  <title>My simple PHP page</title>
 </head>
 <body>
 <?php 
    echo '<p>Hola Mundo </p>';
    echo $_SERVER['HTTP_USER_AGENT']; 
    //using get_browser() with return_array set to TRUE  
    $mybrowser = get_browser(null, true); 
    print_r($mybrowser); 
 ?>
 </body>
</html>