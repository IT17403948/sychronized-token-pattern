<?php
/**
 * Created by PhpStorm.
 * User: Kavi
 * Date: 5/17/2019
 * Time: 2:01 PM
 */
?>
<!DOCTYPE HTML>
<html>
     <head>
         <title>CSRF protection using synchronized token pattern</title>
     </head>

     <body style="background: lightcoral">
     <form class="form" action="results.php" method="post">
         <div>
             <label for="username" class="text-white">Username:</label><br>
             <input type="text" name="username" id="username" class="form-control">
         </div>
         <div>
             <label for="password" class="text-white">Password:</label><br>
             <input type="password" name="password" id="password" class="form-control">
         </div>
         <div>
             <input type="submit" name="Login" class="btn btn-info btn-md" value="Login">
         </div>
     </form>
     </body>
</html>
