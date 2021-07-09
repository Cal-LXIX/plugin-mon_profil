<?php

/*
Plugin Name: monprofil
Plugin URI: https://
Description: Fetching posts 
Version: 1.0.0
Author: RAY JEAN-GUY    
Author URI: http://wordpress.org/plugins/monprofil/
Description:creation du plugin mon profil
License: GPLv2 or later
Text Domain: 
*/



function get_Monprofil(){
   $aff =
   '<div align="center">
         <h2> mon profil</h2>
         <div align="left">
            <form method="POST" action="" enctype="multipart/form-data">
            <div>
                <img src="wp-content\themes\theme-addev-wp\assets\images\logo\profil.jpg" class="profil-img" alt="">
                <img src="wp-content\themes\theme-addev-wp\assets\images\AdobeStock_240738433.jpeg" class="cssui-usercard__avatar" alt="Avatar">
            </div>
               <label>poste :</label>
                <input type="text1" name="" placeholder="" value=""/><br /><br />
                <label class="required" for="message">description:</label><br />
                 <textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
                 <label>Prenom :</label>
               <input type="text" name="Nom" placeholder="" value=""/><br /><br />
                 <label>Prenom :</label>
               <input type="text" name="Prenom" placeholder="" value=""/><br /><br />
                 <label>Fonction :</label>
               <input type="text" name="Fonction" placeholder="" value=""/><br /><br />
                 <label>Société :</label>
               <input type="text" name="Société" placeholder="" value=""/><br /><br />
                 <label>Adresse 1 :</label>
               <input type="text" name="adresse 1" placeholder="" value=""/><br /><br />
                 <label>Adresse 2 :</label>
               <input type="text" name="Adresse 2" placeholder="" value=""/><br /><br />
                 <label>Adresse 3 :</label>
               <input type="text" name="Adresse 3" placeholder="" value=""/><br /><br />
                 <label>Tel :</label>
               <input type="text" name="Tel" placeholder="" value=""/><br /><br />
                 <label>Mob :</label>
               <input type="text" name="Mob" placeholder="" value=""/><br /><br />
                 <label>Fax :</label>
               <input type="text" name="Fax" placeholder="" value=""/><br /><br />
                 <label>Mail :</label>
               <input type="text" name="Mail" placeholder="" value=""/><br /><br />
                 <label>Web :</label>
               <input type="text" name="Web" placeholder="" value=""/><br /><br />
               <input type="submit" class="register" value="Register">
         </div>
        </div>
    </div>';
   return $aff;

}  

add_shortcode('monprofil', 'get_Monprofil');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
       <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
  </head>
<body>
    <style>
        .cssui-usercard__avatar {
           height: 160px;
           width: 160px;
           margin-bottom: 100px;
        }

        .post{
          height: 400px;
          padding: 0px;
          
        }

        .label{
          height:400px;
        }
        .required{
          margin-top: 0px;
        }
    </style>   
</body>
</html>
  