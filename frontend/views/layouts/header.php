<?php
/**
 * Created by PhpStorm.
 * User: azhar
 * Date: 08/12/19
 * Time: 7:38
 */
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;


?>
<!DOCTYPE html>
<body>
<html lang="zxx">
<div class="banner banner-2">

    <header <?php if (Yii::$app->controller->id == 'kamar' || Yii::$app->controller->id == 'pembayaran' || Yii::$app->controller->id == 'kebijakan'){ echo "style='background-color: #2D2929'";}?> class="main-header main-header-2 main-header-3">
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#app-navigation" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.html" class="logo">
                        <img src="img/logos/white-logo.png" alt="logo">
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="navbar-collapse collapse" role="navigation" aria-expanded="true" id="app-navigation">
                    <ul class="nav navbar-nav">
                        <li class="dropdown active">
                            <?= Html::a('Home ', ['/'])?>
                        </li>
                        <li class="dropdown active">
                            <?= Html::a('Kamar ', ['/kamar'])?>
                        </li>
                        <li class="dropdown active">
                            <?= Html::a('Pemesanan ', ['/pemesanan'])?>
                        </li>
                        <li class="dropdown active">
                            <?= Html::a('pembayaran ', ['/pembayaran'])?>
                        </li>
                        <?php
                            /*
                             * Membuat Menu Baru pada Header
                             */
                        ?>
                        <li class="dropdown active">
                            <?= Html::a('Kebijakan & Ketentuan', ['/kebijakan'])?>
                        </li>

                    </ul>

                </div>

                <!-- /.navbar-collapse -->
                <!-- /.container -->
            </nav>


