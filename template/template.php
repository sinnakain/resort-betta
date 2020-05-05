<!doctype html>
<html lang="ru">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="theme-color" content="">

    <meta name="format-detection" content="telephone=no">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link type="image/png" href="/favicon.png" rel="icon">

    <meta name="msapplication-tap-highlight" content="no">

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <meta name="MobileOptimized" content="320">
    <meta name="HandheldFriendly" content="True">

    <? page_head(); ?>

    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="/css/plugins.min.css">
    <link rel="stylesheet" href="/css/app.css">


</head>

<body class="app <?= page_config('body_classname', '') ?>">

<?php include("img/sprite.icons.svg"); ?>
<?php include("img/sprite.tags.icons.svg"); ?>

<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience and security.</p>
<![endif]-->

<div class="app__wrapper">


    <header class="app-header">
        <div class="app-header__container container">
            <button type="button" class="app-header__burger js-toggle-aside-nav" data-nav="menu">

      <span class="svg-icon svg-icon--burger" aria-hidden="true">
        <svg class="svg-icon__link">
          <use xlink:href="#burger"></use>
        </svg>
      </span>

            </button>

            <? require 'modules/main_menu.php'; ?>

        </div>
    </header><!-- b:app-header -->


    <div class="app__content">
        <main class="app__main">
            <? page_content() ?>

            <? page_modules() ?>
        </main>
    </div>

    <? require 'modules/footer.php'; ?>

    <!-- left aside menu -->
    <? require 'modules/menu_aside.php'; ?>

    <div class="pickmeup-selected-alert js-pickmeup-alert">
        <div class="pickmeup-selected-alert__content js-pickmeup-alert-content">6 дней</div>
    </div>

</div><!-- b:wrapper -->

<script src="/js/vendors/jquery-3.4.1.min.js"></script>
<script src="/js/vendors/in-view.min.js"></script>
<script src="/js/plugins.min.js"></script>
<script src="/js/app.js"></script>

</body><!-- b:w-page -->
</html>

