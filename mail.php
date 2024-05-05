<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing: border-box;
            
        }
        fieldset{
            width: 30%;
            padding: 5px;
            margin-top: 40px;
        }
        td{
            padding: 4px;
        }
        input{
            outline: none;
            padding: 4px;
        }
        textarea{
            outline: none;
            padding: 4px;

        }
    </style>
</head>
<body>
    <center>
        <fieldset>
            <legend>Email Sender</legend>
            <marquee behavior="" direction="" style="color:red;font-weight: bolder;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 17px;">fill the from & submit the mail .See the result.</marquee>
            <form action="submit.php" method="post">
                <table>
                    <tr>
                        <td>TO</td>
                        <td><input type="email" name="to" id="" placeholder="Receiver email address"></td>
                    </tr>
                    <tr>
                        <td>Subject</td>
                        <td><input type="email" name="sub" id="" placeholder="Subject"></td>
                    </tr>
                    <tr>
                        <td>Message</td>
                        <td><textarea name="msg" id=""></textarea></td>
                    </tr>
                    <tr>
                        
                    </tr>
                </table>
                <div><input type="submit" value="Submit"></div>
            </form>
        </fieldset>
    </center>
    
</body>
</html>