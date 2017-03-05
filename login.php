<!DOCTYPE html>
<!--
Copyright (C) 2017 RTG

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Login </title>
    </head>
    
    <style>
        
        body, footer {
            background-color: white;
            padding: 40px;
            margin: 30px auto;
            text-align: center;
            box-shadow: 0 0 45px black;
        }
        
        
    </style>
    <body>
        
        <form action="\check.php" method="POST">
        
        <p>
            <center>
            Username: <input type="text" name="username" size="10"</input>
            <br>
            <br>
            Password: <input type="text" name="password" maxlength="6" size="10" </input>
            <br>
            <br>
            <input type="submit" </input>
            </center>
        </p>
        
        </form>
        
    </body>
    
    <footer>
        
        <h4>
            &copy; <?php echo date('Y'); ?> RTG
        </h4>
        
        
    </footer>
</html>
