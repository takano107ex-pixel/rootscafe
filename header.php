<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="robots" content="noindex">
        <meta name="viewport" content="width=device-width">
        <title>Roots Cafe</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Zen+Kaku+Gothic+New&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <?php wp_head(); ?>
    </head>
    <body>
        <header class="drawer drawer--right">
            <div class="logo">
                <h1><a href="<?php bloginfo(); ?>">ROOTS CAFE</a></h1>
            </div>
            <button type="button" class="drawer-toggle drawer-hamburger">
                <span class="sr-only">toggle navigaion</span>
                <span class="drawer-hamburger-icon"></span>
            </button>
            <nav class="drawer-nav">
                <ul class="drawer-menu">
                    <li class="drawer-menu-item"><a href="<?php bloginfo(); ?>#concept">CONCEPT</a></li>
                    <li class="drawer-menu-item"><a href="<?php bloginfo(); ?>#menu">MENU</a></li>
                    <li class="drawer-menu-item"><a href="<?php bloginfo(); ?>#gallery">GALLERY</a></li>
                    <li class="drawer-menu-item"><a href="<?php bloginfo(); ?>#access">ACCESS</a></li>
                </ul>
                </ul>
            </nav>
        </header>
      