<!DOCTYPE html>
<html>
    <head>
        <title>COLOR-SAFE</title>
        <meta charset="utf-8">
        <link href="<?php echo Config::get('URL'); ?>css/style.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Kanit:300" rel="stylesheet" type="text/css">
    </head>
    <body id="body">
        <header>
            <a href="<?php echo Config::get('URL'); ?>"><h1 class="title">COLOR-SAFE</h1></a>

            <ul class="nav-left">
                <li><a href="<?php echo Config::get('URL'); ?>" >
                    <button class="nav-button-left nav-button-left-1" >Home Page</button>
                </a></li>
                <li><a href="<?php echo Config::get('URL'); ?>create/index" >
                    <button class="nav-button-left nav-button-left-2" >Create My Own</button>
                </a></li>
                <li><a href="<?php echo Config::get('URL'); ?>top/index" >
                    <button class="nav-button-left nav-button-left-3" >Top Rated</button>
                </a></li>
                <li><a href="<?php echo Config::get('URL'); ?>browse/index" >
                    <button class="nav-button-left nav-button-left-4" >Browse Colors</button>
                </a></li>
                <?php if (Session::userIsLoggedIn()) { ?>
                    <li><a href="<?php echo Config::get('URL'); ?>my-color/index" >
                        <button class="nav-button-left nav-button-left-5" >My Colors</button>
                    </a></li>
                <?php } ?>
            </ul>

            <ul class="nav-right">
                <?php if (Session::userIsLoggedIn()) { ?>
                    <li><a href="<?php echo Config::get('URL'); ?>my-profile/index" >
                        <button class="nav-button-right nav-button-right-image" > </button>
                    </a></li>
                    <li><a href="<?php echo Config::get('URL'); ?>my-profile/index" >
                        <button class="nav-button-right nav-button-right-normal" >My Profile</button>
                    </a></li>
                    <li><a href="<?php echo Config::get('URL'); ?>logout/index" >
                        <button class="nav-button-right nav-button-right-normal" >Log Out</button>
                    </a></li>
                <?php } else { ?>
                    <li><a href="<?php echo Config::get('URL'); ?>login/index" >
                        <button class="nav-button-right nav-button-right-normal" >Log In</button>
                    </a></li>
                    <li><a href="<?php echo Config::get('URL'); ?>register/index" >
                        <button class="nav-button-right nav-button-right-normal" >Register</button>
                    </a></li>
                <?php } ?>
            </ul>

        </header>