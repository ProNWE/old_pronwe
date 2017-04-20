<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="<?=$description; ?>">
    <meta name="keywords" content="<?=$keywords; ?>!">
    <link rel="icon" href="//votepad.ru/assets/img/favicon.png" type="image/png">
    <title><?=$title; ?></title>

    <!-- =============== VENDOR STYLES ===============-->
<? foreach($css as $styles): ?>
    <link rel="stylesheet" href="<?=$assets;?><?=$styles;?>">
<? endforeach;?>

    <!-- =============== VENDOR SCRIPTS ===============-->
<? foreach ($js as $scripts): ?>
    <script src="<?=$assets.$scripts; ?>"></script>
<? endforeach; ?>

</head>

<body>
<div class="wrapper">
    <header class="topnavbar-wrapper">
        <nav role="navigation" class="navbar topnavbar">
            <div class="navbar-header">
                <a href="<?=URL::site('events/my'); ?>" class="navbar-brand">
                    <div class="brand-logo" style="padding: 3px;">
                        <img src="//votepad.ru/assets/img/favicon.png" alt="App Logo" class="img-responsive" style="height:50px">
                    </div>
                    <div class="brand-logo-collapsed">
                        <img src="//votepad.ru/assets/img/favicon.png" alt="Logo" class="img-responsive" style="height:50px">
                    </div>
                </a>
            </div>
            <div class="nav-wrapper">
                <!-- LEFT NAVBAR -->
                <ul class="nav navbar-nav">
                    <!-- SHOW/HIDDEN ASIDE -->
                    <li>
                        <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                        <a href="#" data-toggle-state="aside-collapsed" class="hidden-xs">
                            <em class="fa fa-navicon"></em>
                        </a>
                        <!-- Button to show/hide the sidebar on mobile. Visible on mobile only.-->
                        <a href="#" data-toggle-state="aside-toggled" data-no-persist="true" class="visible-xs sidebar-toggle">
                            <em class="fa fa-navicon"></em>
                        </a>
                    </li>
                    <!-- USER PROFILE -->
                    <li>
                        <a href="<?=URL::site('profile'); ?>" title="Профиль">
                            <em class="icon-user"></em>
                        </a>
                    </li>
                    <!-- FAQ -->
                    <li>
                        <a href="#" title="FAQ">
                            <em class="icon-info"></em>
                        </a>
                    </li>
                </ul>
                <!-- RIGHT NAVBAR -->
                <ul class="nav navbar-nav navbar-right" style="margin-right:0px;">

                    
                    <li class="dropdown dropdown-list">
                        <a href="#" data-toggle="dropdown" title="Твиттер">
                            <em class="icon-social-twitter"></em>
                        </a>
                        <div class="dropdown-menu twitter animated bounceInDown">
                            <a class="twitter-timeline list-group-item" height="300" width="100%" data-dnt="true" href="https://twitter.com/ProNWERU" data-widget-id="700100240783896577">Твиты от @ProNWERU</a>
                        </div>
                    </li>
                
                    <li>
                        <a href="<?=URL::site('auth/logout'); ?>" title="Выход">
                            <em class="icon-logout"></em>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- SEARCH FORM -->
            <form role="search" action="search.html" class="navbar-form">
                <div class="form-group has-feedback">
                    <input type="text" placeholder="Введите и нажмите Enter" class="form-control">
                    <div data-search-dismiss="" class="fa fa-times form-control-feedback"></div>
                </div>
                <button type="submit" class="hidden btn btn-default">Поиск</button>
            </form>
        </nav>
    </header>

    <!-- ASIDE -->
    <?=$aside; ?>
    <!-- END ASIDE -->

    <!-- MAIN SECTION -->
    <?=$section; ?>
    <!-- END SECTION -->

    <!-- FOOTER -->
    <footer>
        <span>&copy;Votepad 2016-2017</span>
    </footer>
</div>

</body>

</html>