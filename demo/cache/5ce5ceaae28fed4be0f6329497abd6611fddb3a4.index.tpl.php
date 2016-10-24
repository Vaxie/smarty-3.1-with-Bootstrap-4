<?php
/* Smarty version 3.1.30, created on 2016-10-23 16:28:34
  from "/Applications/MAMP/htdocs/smarty-3.1.30/demo/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580cc9122aeb67_18053450',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'dae2983cc5dc168f5f66fd1520e96de79fce1ba3' => 
    array (
      0 => '/Applications/MAMP/htdocs/smarty-3.1.30/demo/templates/index.tpl',
      1 => 1477231114,
      2 => 'file',
    ),
    'd63059981be959d20c1bd3e605634f05fe6efb3a' => 
    array (
      0 => '/Applications/MAMP/htdocs/smarty-3.1.30/demo/templates/header.tpl',
      1 => 1477231093,
      2 => 'file',
    ),
    '27fa777d6ebb684aa519c65b6532889e101056ac' => 
    array (
      0 => '/Applications/MAMP/htdocs/smarty-3.1.30/demo/templates/footer.tpl',
      1 => 1477230915,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_580cc9122aeb67_18053450 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic" rel="stylesheet">

    <!-- Application CSS -->
    <link rel="stylesheet" href="../demo/assets/css/application.css">

    <style>
        /* note: this is a hack for ios iframe for bootstrap themes shopify page */
        /* this chunk of css is not part of the toolkit :) */
        body {
            width: 1px;
            min-width: 100%;
            *width: 100%;
        }
    </style>
    <title><?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
</title>
</head>
<body>
<nav class="navbar navbar-fixed-top navbar-dark bg-inverse">
    <a class="navbar-brand" href="#">Project name</a>
    <ul class="nav navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
        </li>
    </ul>
</nav>

<div class="container">

    <div class="starter-template">
        <h1>Bootstrap starter template</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
    </div>

</div><!-- /.container -->
<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>

</body>
</html><?php }
}
