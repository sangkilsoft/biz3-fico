<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
//AdminLteAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <?php $this->beginBody() ?>
        <?php
        echo uran1980\yii\widgets\pace\Pace::widget([
            'color' => 'red',
            'theme' => 'flash',
            'paceOptions' => [
                'ajax' => false,
                'document' => false,
                'startOnPageLoad' => false
            ],
        ]);
        ?>
        <div class="wrapper">    
            <header class="main-header">
                <!-- Logo -->
                <a href="<?= \yii\helpers\Url::to(['/site/index']) ?>" class="logo" style="font-style: italic;">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini" ><b>B</b>iz3</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>B</b>iz3-Fico</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Notifications: style can be found in dropdown.less -->
                            <li class="dropdown notifications-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="label label-warning">10</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 10 notifications</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">View all</a></li>
                                </ul>
                            </li>
                            <!-- Tasks: style can be found in dropdown.less -->
                            <li class="dropdown tasks-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-flag-o"></i>
                                    <span class="label label-danger">9</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 9 tasks</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li><!-- Task item -->
                                                <a href="#">
                                                    <h3>
                                                        Design some buttons
                                                        <small class="pull-right">20%</small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">20% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li><!-- end task item -->
                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="#">View all tasks</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <!--<img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">-->
                                    <?php echo Html::img('@web/../vendor/bower/admin-lte/dist/img/user2-160x160.jpg', ['class' => 'user-image', 'alt'=>'User Image']) ?>
                                    <span class="hidden-xs">
                                        <?= (Yii::$app->user->isGuest) ? 'Guest' : Yii::$app->user->identity->username ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <!--<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">-->
                                        <?php echo Html::img('@web/../vendor/bower/admin-lte/dist/img/user2-160x160.jpg', ['class' => 'img-circle', 'alt'=>'User Image']) ?>
                                        <p>
                                            <?=(Yii::$app->user->isGuest) ? 'Guest' : Yii::$app->user->identity->username ?>
                                            <small>Member since Nov. <?= date('Y') ?></small>
                                        </p>
                                    </li>                                    
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <?= (Yii::$app->user->isGuest) ? yii\bootstrap\Html::a('Login', yii\helpers\Url::to(['/site/login']), ['class' => 'btn btn-default btn-flat']) : yii\bootstrap\Html::a('Logout', yii\helpers\Url::to(['/site/logout']), ['class' => 'btn btn-default btn-flat']); ?>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>        
            <?php require 'left_menu.php'; ?>
            <div class="content-wrapper">  
                <section class="content-header">
                    <h1>
                        <?= $this->title ?>
                        <small>Title description</small>
                    </h1>
                    <?=
                    Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ])
                    ?>
                </section>
                <section class="content">
                    <?= $content ?>
                </section>
            </div>
            <div class="main-footer" style="padding-top: 7px; padding-bottom: 3px;">           
                <div class="container">
                    <p class="pull-left">&copy; SangkilSoft <?= date('Y') ?></p>
                    <p class="pull-right"><?= Yii::powered() ?></p>
                </div>
            </div>
        </div>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>

