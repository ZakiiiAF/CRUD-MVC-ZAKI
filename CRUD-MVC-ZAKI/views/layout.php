<!DOCTYPE html>
<html>
<head>
    <title>APLIKASI CRUD</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        body {
            background: #cfcad1;
        }
        .box {
            background:rgb(82, 120, 216);
            padding: 20px;
            border-radius: 5px;
            color: #2f2d3b;
        }
        .navbar-brand {
            font-family: 'Times New Roman', Times, serif !important;
            color: #cfcad1 !important;
            font-size: 24px; 
            font-weight: bold; 
        }
        #navbar {
            background-color:rgb(131, 174, 226) !important;
            text-align: center;
            border: none;
            border-radius: 0;
            margin-bottom: 0;
        }
        .navbar-nav {
            display: inline-block;
            float: none;
            vertical-align: top;
        }
        .navbar-nav > li {
            display: inline-block;
            float: none;
        }
        .navbar-nav > li > a {
            color: #cfcad1 !important;
            padding: 15px 25px;
            transition: background-color 0.3s;
        }
        .navbar-nav > li > a:hover {
            background-color:rgb(79, 133, 227) !important;
        }
        .navbar-nav > .active > a {
            background-color:rgb(94, 141, 228) !important;
        }
        .btn-success {
            background-color:rgb(60, 142, 208) !important;
            border-color:rgb(163, 191, 244) !important;
            color: white !important;
        }
        .btn-success:hover {
            background-color:rgb(152, 192, 238) !important;
            border-color:rgb(97, 160, 219) !important;
        }
        .container .jumbotron {
            background:rgb(141, 207, 233);
            border: 1px solid #2f2d3b;
            color: #2f2d3b;
        }
        h1 {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            color: #2f2d3b;
        }
        p {
            text-align: center;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: #2f2d3b;
        }
        .table {
            background-color: #cfcad1;
        }
        .table th {
            background-color: #2f2d3b !important;
            color: #cfcad1 !important;
        }
        .table td {
            background-color:rgb(178, 178, 227);
            border-color: rgb(178, 178, 227); !important;
            color: #2f2d3b;
        }
        .btn-danger {
            background-color:rgb(59, 231, 240) !important;
            border-color: #2f2d3b !important;
            color: white !important;
        }
        .btn-info {
            background-color: rgb(59, 231, 240) !important;
            border-color: #2f2d3b !important;
            color: white !important;
        }
        .btn-danger:hover, .btn-info:hover {
            background-color: rgb(59, 231, 240)!important;
            border-color: rgb(59, 231, 240) !important;
        }
        .form-control {
            background-color: #cfcad1;
            border-color: #9389bd;
        }
        .form-control:focus {
            border-color: rgb(59, 231, 240);
            box-shadow: 0 0 0 0.2rem rgba(103, 104, 171, 0.25);
        }
    </style>
</head>
<body>
    <?php require_once __DIR__ . '/partials/header.php'; ?>
    
    <div class="container">
        <?php 
        $content = __DIR__ . '/../views/' . $view . '.php';
        if (file_exists($content)) {
            require_once $content;
        } else {
            echo '<div class="alert alert-danger">View tidak ditemukan</div>';
        }
        ?>
    </div>
    
    <?php require_once __DIR__ . '/partials/footer.php'; ?>
</body>
</html>