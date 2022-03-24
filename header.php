<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php wp_head();?>


</head>

<body>

    <header>


<div class="container">
        <?php
    wp_nav_menu(

array(
'theme_location' => 'top-menu',
'menu_class' => 'top-bar'

)


);
?>
</div>
    </header>