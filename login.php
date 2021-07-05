<!DOCTYPE html>
<html lang="en">
    <head>
        <title>login.php</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <style type="text/css">
         table{
            margin-top: 150px;
            border:2px solid;
            background-color: #eeee;
            }
         td{
            border: 0px;
            padding: 10px;
         }
         th{
            border-bottom: 1px solid;
            background-color: #dddd;
         }
        </style>
    </head>
    <body>
        <form action="welcome.php" method="post">
            <table align="center">
                <tr>
                    <th colspan="2"><h2 align="center">login</h2></th>
                </tr>
                <tr>
                    <td>username:</td>
                    <td><input type="text" name="name" ></td>
                </tr>
                <tr>
                    <td>password:</td>
                    <td><input type="password" name="pwd" ></td>
                </tr>
                <tr>
                    <td align="right" colspan="2"><input type="submit" name="login" value="login" ></td>
                </tr>
            </table>
            
        </form>
    </body>
</html> 