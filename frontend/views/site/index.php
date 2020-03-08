<?php

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;
use common\models\Tipe;

$this->title = "Vandaroe";
?>


</div>
</header>
<div class="banner-inner">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="img/banner/banner-slider-3.jpg" alt="banner-slider-3">
                <div class="carousel-caption banner-slider-inner banner-top-align">
                    <div class="banner-content text-center">
                        <h1 data-animation="animated fadeInDown delay-05s"><span>Selamat Datang di</span> Vandaroe
                        </h1>
                        <p data-animation="animated fadeInUp delay-1s">Lorem ipsum dolor sit amet, conconsectetuer
                            adipiscing elit Lorem ipsum dolor sit amet, conconsectetuer</p>
                        <a href="index.html#" class="btn btn-md btn-theme"
                           data-animation="animated fadeInUp delay-15s">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/banner/banner-slider-2.jpg" alt="banner-slider-2">
                <div class="carousel-caption banner-slider-inner banner-top-align">
                    <div class="banner-content text-center">
                        <h1 data-animation="animated fadeInLeft delay-05s"><span>Best Place To</span> Find Room</h1>
                        <p data-animation="animated fadeInUp delay-05s">Lorem ipsum dolor sit amet, conconsectetuer
                            adipiscing elit Lorem ipsum dolor sit amet, conconsectetuer</p>
                        <a href="index.html#" class="btn btn-md btn-theme"
                           data-animation="animated fadeInUp delay-15s">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/banner/banner-slider-1.jpg" alt="banner-slider-1">
                <div class="carousel-caption banner-slider-inner banner-top-align">
                    <div class="banner-content text-center">
                        <h1 data-animation="animated fadeInLeft delay-05s"><span>Best Place</span> for relux</h1>
                        <p data-animation="animated fadeInLeft delay-1s">Lorem ipsum dolor sit amet, conconsectetuer
                            adipiscing elit Lorem ipsum dolor sit amet, conconsectetuer</p>
                        <a href="index.html#" class="btn btn-md btn-theme"
                           data-animation="animated fadeInUp delay-15s">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="<?= Yii::$app->request->baseUrl ?>#carousel-example-generic"
           role="button" data-slide="prev">
            <span class="slider-mover-left" aria-hidden="true">
                <i class="glyphicon glyphicon-menu-left"></i>
            </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="<?= Yii::$app->request->baseUrl ?>l#carousel-example-generic" role="button"
           data-slide="next">
            <span class="slider-mover-right" aria-hidden="true">
                <i class="glyphicon glyphicon-menu-right"></i>
            </span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Main header start -->

    <!-- Main header end -->
</div>
</div>
<!-- Hotel alpha start -->
<div class="hotel-alpha content-area-12">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="text">
                    <h1>Selamat Datang di Vandaroe</h1>
                    <p>Duis vel nisl lacinia, facilisis in, consectetur leon vestibulum et ullamcorper tortor leon
                        placerat mauris tincidunt ut non velit faucibus nam a
                        pretium sapien nunc quis congue purus nunc feugiat nec purus a ultricies suspendisse in
                        fringilla est sodales dui, non mattis tortor volutpat vitae.</p>
                    <br>
                </div>
            </div>
            <div class="col-lg-5 col-lg-offset-1 col-md-6">
                <img src="img/b.jpg" alt="a" class="img-responsive">
            </div>
        </div>
    </div>
</div>
<!-- Hotel alpha end -->

<!-- Hotel section start -->
<div class="content-area hotel-section chevron-icon">
    <div class="overlay">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1>Daftar Kamar</h1>
                <a href="<?= Url::to(['/kamar']) ?>" class="btn btn-outline2 btn-md">Tampilkan Lebih Banyak</a>
            </div>
            <div class="row">
                <div class="carousel our-partners slide" id="ourPartners3">
                    <div class="col-lg-12 mb-30">
                        <!--                        <a class="right carousel-control" href="index.html#ourPartners3" data-slide="prev"><i-->
                        <!--                                    class="fa fa-chevron-left icon-prev"></i></a>-->
                        <!--                        <a class="right carousel-control" href="index.html#ourPartners3" data-slide="next"><i-->
                        <!--                                    class="fa fa-chevron-right icon-next"></i></a>-->
                    </div>
                    <div class="carousel-inner">

                        <?php if (count($kamar) > 0) {
                            ?>
                            <?php foreach ($kamar as $k) {

                                $tipe = Tipe::findOne(['tipe_id' => $k['kamar_tipe']]);
                                ?>
                                <a href="<?= Url::to(['/kamar/rincian', 'nomor' => $k['kamar_id']]) ?>">
                                    <div class="item active">
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <div class="hotel-box">
                                                <!--header -->
                                                <div class="header clearfix">
                                                    <img src="<?= Yii::$app->request->baseUrl . '/backend/web' . $tipe['tipe_gambar'] ?>"
                                                         class=" img-responsive">
                                                </div>
                                                <!-- Detail -->
                                                <div class="detail clearfix">
                                                    <div class="pr float-right">
                                                        Rp. <?= Html::encode("{$tipe['tipe_harga']}") ?><sub>/Hari</sub>
                                                    </div>
                                                    <h3>
                                                        <a><?= $k['kamar_nama'] ?></a>
                                                    </h3>
                                                    <h5 class="location">
                                                        <a href="rooms-details.html">
                                                            Type : <?= Html::encode("{$tipe['tipe_nama']}") ?>
                                                        </a>
                                                    </h5>

                                                    <p><?= HTML::decode("{$tipe['tipe_deskripsi']}") ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <?php
                            }
                        } ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hotel section end -->

<!-- Our facilties section start -->
<div class="our-facilties-section content-area-3">
    <div class="overlay">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1>Fasilitas</h1>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp delay-04s">
                    <div class="services-box-2 media">
                        <div class="media-left">
                            <i class="flaticon-school-call-phone-reception"></i>
                        </div>
                        <div class="media-body">
                            <h3>24-hour Reception</h3>
                            <p>Lorem ipsum dolor sit amet, conser adipisicing elit. Numquam deleniti amet quia voluptate
                                laboriosam</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp delay-04s">
                    <div class="services-box-2 media">
                        <div class="media-left">
                            <i class="flaticon-room-service"></i>
                        </div>
                        <div class="media-body">
                            <h3>Room Service</h3>
                            <p>Lorem ipsum dolor sit amet, conser adipisicing elit. Numquam deleniti amet quia voluptate
                                laboriosam</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp delay-04s">
                    <div class="services-box-2 media">
                        <div class="media-left">
                            <i class="flaticon-graph-line-screen"></i>
                        </div>
                        <div class="media-body">
                            <h3>Flat Screen TV</h3>
                            <p>Lorem ipsum dolor sit amet, conser adipisicing elit. Numquam deleniti amet quia voluptate
                                laboriosam</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp delay-04s">
                    <div class="services-box-2 media">
                        <div class="media-left">
                            <i class="flaticon-weightlifting"></i>
                        </div>
                        <div class="media-body">
                            <h3>Gym</h3>
                            <p>Lorem ipsum dolor sit amet, conser adipisicing elit. Numquam deleniti amet quia voluptate
                                laboriosam</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp delay-04s">
                    <div class="services-box-2 media">
                        <div class="media-left">
                            <i class="flaticon-parking"></i>
                        </div>
                        <div class="media-body">
                            <h3>Free Parking</h3>
                            <p>Lorem ipsum dolor sit amet, conser adipisicing elit. Numquam deleniti amet quia voluptate
                                laboriosam</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp delay-04s">
                    <div class="services-box-2 media">
                        <div class="media-left">
                            <i class="flaticon-wifi-connection-signal-symbol"></i>
                        </div>
                        <div class="media-body">
                            <h3>Free Wi-Fi</h3>
                            <p>Lorem ipsum dolor sit amet, conser adipisicing elit. Numquam deleniti amet quia voluptate
                                laboriosam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our facilties section end -->

<!-- News popular testimonials start -->
<div class="gallery clearfix content-area-11">
    <div class="container">
        <div class="main-title">
            <h1>Testimonial</h1>
        </div>
        <div class="row">

            <!-- Main title -->

            <!-- Testimonial 3 start -->
            <div class="testimonials-3 hidden-mb-60">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <div id="carousel-custom3" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item content active clearfix">
                                        <div class="item-inner">
                                            <p>Lorem ipsum dolor sit amet, conser adipiscing elit. Maecenas in
                                                pulvinar neque. Nulla finibus lobortis pulvinar. Donec</p>
                                            <div class="testimonials-avatar">
                                                <img src="img/testimonial/avatar-2.jpg" alt="avatar-2">
                                            </div>
                                            <div class="author-name">
                                                Karen Paran
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item content clearfix">
                                        <div class="item-inner">
                                            <p>Lorem ipsum dolor sit amet, conser adipiscing elit. Maecenas in
                                                pulvinar neque. Nulla finibus lobortis pulvinar. Donec</p>
                                            <div class="testimonials-avatar">
                                                <img src="img/testimonial/avatar-3.jpg" alt="avatar-3">
                                            </div>
                                            <div class="author-name">
                                                David Jackson
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item content clearfix">
                                        <div class="item-inner">
                                            <p>ayamLorem ipsum dolor sit amet, conser adipiscing elit. Maecenas in
                                                pulvinar neque. Nulla finibus lobortis pulvinar. Donec</p>
                                            <div class="author-name">
                                                John Doe
                                            </div>
                                            <div class="testimonials-avatar">
                                                <img src="img/testimonial/avatar-4.jpg" alt="avatar-4">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 end -->
            </div>

        </div>
    </div>
</div>
<!-- News popular testimonials end -->

<!-- Gallery secion start -->
<div class="gallery clearfix content-area-11">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Gallery</h1>
        </div>


        <div class="row">
            <div class="filtr-container">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filtr-item" data-category="3, 1, 4">
                    <figure class="portofolio-thumb">
                        <a href="index.html#"><img src="img/room/img-21.jpg" alt="img-21" class="img-responsive"></a>
                        <figcaption>
                            <div class="figure-content">
                                <h3 class="title">Luxury Room</h3>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filtr-item" data-category="3, 4, 2">
                    <figure class="portofolio-thumb">
                        <a href="index.html#"><img src="img/room/img-2.jpg" alt="img-2" class="img-responsive"></a>
                        <figcaption>
                            <div class="figure-content">
                                <h3 class="title">Double Room</h3>
                            </div>
                        </figcaption>
                    </figure>
                    <figure class="portofolio-thumb">
                        <a href="index.html#"><img src="img/room/img-1.jpg" alt="img-1" class="img-responsive"></a>
                        <figcaption>
                            <div class="figure-content">
                                <h3 class="title">Single Room</h3>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filtr-item" data-category="1, 4, 3">
                    <figure class="portofolio-thumb">
                        <a href="index.html#"><img src="img/room/img-22.jpg" alt="img-14" class="img-responsive"></a>
                        <figcaption>
                            <div class="figure-content">
                                <h3 class="title">Family Room</h3>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filtr-item" data-category="2, 3, 1">
                    <figure class="portofolio-thumb">
                        <a href="index.html#"><img src="img/room/img-6.jpg" alt="img-6" class="img-responsive"></a>
                        <figcaption>
                            <div class="figure-content">
                                <h3 class="title">Standard</h3>
                            </div>
                        </figcaption>
                    </figure>
                    <figure class="portofolio-thumb">
                        <a href="index.html#"><img src="img/room/img-4.jpg" alt="img-4" class="img-responsive"></a>
                        <figcaption>
                            <div class="figure-content">
                                <h3 class="title">Couple Room</h3>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>
