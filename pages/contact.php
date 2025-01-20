<?php 
    include('header.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="icon" href="../source/images/imgimg.jpg" type="image/png">
    <style>
        .form {
            width: 50%;
            margin: 0 auto;
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table td {
            padding: 10px;
            vertical-align: middle;
        }

        .form input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        table tr td input {
            width: 48%; 
        }

        table tr:last-child td input {
            width: 100%;
        }

        .form input::placeholder {
            color: #888;
            font-style: italic;
        }
            
        .form input[type="submit"] {
            background-color: #f4a261;
            color: white;
            border: none;
            cursor: pointer;
        }

        .form input[type="submit"]:hover {
            background-color: #e07b3a;
        }

        .tst{
            height: 100px;
        }
    </style>
</head>
<body>
    <form action="../php/insert.php" method="get" class="form">
        <table>
            <tr><td><input name="fname" placeholder="First Name"></td><td><input name="lname" placeholder="Last Name"></td></tr>
            <tr><td colspan = "2"><input name="email" placeholder="Email"></td></tr>
            <tr><td colspan = "2"><input type="text" name="message" placeholder="Enter your message" class="tst"> </td></tr>
            <tr><td><input type="submit" value="Send"></td></tr>
        </table>
    </form>
</body>
</html>
<?php 
    include('footer.php')
?>