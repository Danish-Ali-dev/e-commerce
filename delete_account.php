

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Delete an Account</title>
    <style>
        body {
            background-color: #E6E6E6
        }
        
        .box {
            background-color: white;
            height: 200px;
            width: 900px;
            margin: auto;
            border: 18px groove rgba(26, 45, 255, 0.67);
            border-radius: 20px;
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <div class="box">
        <div class="para text-center">
            <br>
            <h1 class="display-6"> <b> Do You Really Want To Delete Your Account </b> </h1>
            <a href="delete_account_id.php?delete_account" class="btn btn-danger mt-3">Yes, I want to delete</a>
            <a href="my_account.php?my_orders" class="btn btn-primary mt-3">No, I don't want to delete</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

</html>