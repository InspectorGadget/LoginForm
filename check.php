<!DOCTYPE html>

<!--

/* 
 * Copyright (C) 2017 RTG
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
 -->
 
 <html>
         
         <head>
             <meta charset="UTF-8" </meta>
             <title> Response | Panel</title>
         </head>
         
        <style>
            body {
                background-color: white;
                padding: 40px;
                margin: 30px auto;
                text-align: center;
                box-shadow: 0 0 45px black;
            }
             </style>
         
         <body>
         
<?php

    if($_POST['username'] === '' || $_POST['password'] === '') {
        echo "Please make sure that you have filled your username and password section!";
    }
    else {
        
        $username = [
            "admin",
            "user"
        ];
                
        $password = [
            "test",
            "admin"
        ];
        
        if(in_array($_POST['username'], $username) || in_array($_POST['password'], $password)) {
            echo "Woop!";
        }
        else {
            echo "Wrong username or password!";
        }
        
    }
        
?>
        </body>
</html>