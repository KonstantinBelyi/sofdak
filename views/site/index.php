<?php

/* @var $this yii\web\View
 * @var $product app\controllers\SiteController
 * @var $about app\controllers\SiteController
 */

?>

<header>
    <div class="container">

        <div class="row">

            <div class="col-sm-6">
                <h1>Sof-dak</h1>
                <h2>ГЕПАТИТ НЕ ПРИГОВОР</h2>
                <p>
                    Мы предлагаем лечение гепатита современными препаратами, эффективность которых доказана позитивным результатом тысяч пациентов
                </p>

                <label class="page-scroll">
                    <a class="btn btn-lg btn-success" href="#contact" >Заказать</a>
                </label>

            </div>

            <div class="col-sm-6">
                <img class="img-responsive" src="img/1(1000x848).jpg" alt="">
            </div>
        </div>
</header>

<section id="product">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Препараты</h2>
            </div>
        </div>
        <div class="row">

            <?php
                foreach ($product as $item):
            ?>

            <div class="col-sm-4 product-item">
                <a href="<?= '#modal' . $item->id ?>" class="product-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/prduct1.jpg" class="img-responsive" alt="" />
                </a>
            </div>

            <?php
                endforeach;
            ?>

        </div>
    </div>
</section>

<section id="hepatitis">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Что нужно знать?</h2>
                <!--                <hr class="star-light">-->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p>
                    <?= $about[0]->about_hepatitis ?>
                </p>

                <p>
                    <iframe src="https://www.youtube.com/embed/_8I3fDfeyw4?rel=0" width="640" height="360" frameborder="15" class="center-block" allowfullscreen></iframe>
                </p>
            </div>
        </div>
    </div>
</section>

<section id="about"> <!--class="success" -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>О нас</h2>
                <!--                <hr class="star-light">-->
            </div>
        </div>
        <div class="row">

            <div class="col-lg-12">
                <p>
                    <?= $about[0]->about_us ?>
                </p>
            </div>

        </div>
    </div>
</section>

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Контакты</h2>
                <!--                <hr class="star-primary">-->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <form role="form">
                    <div class="row">
                        <div class="form-group col-xs-12 floating-label-form-group">
                            <label for="name">Имя</label>
                            <input class="form-control" type="text" name="name" placeholder="Ваше имя">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-xs-12 floating-label-form-group">
                            <label for="email">E-mail</label>
                            <input class="form-control" type="email" name="email" placeholder="Ваш E-mail">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-xs-12 floating-label-form-group">
                            <label for="tel">Телефон</label>
                            <input class="form-control" type="text" name="tel" placeholder="Ваш телефон">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-xs-12 floating-label-form-group">
                            <label for="message">Сообщение</label>
                            <textarea placeholder="Введите сообщение" class="form-control" rows="5"></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-lg btn-success">Отправить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <!--                <div class="footer-col col-md-4">-->
                <!--                    <h3>Location</h3>-->
                <!--                    <p>3481 Melrose Place-->
                <!--                        <br>Beverly Hills, CA 90210</p>-->
                <!--                </div>-->
                <div class="footer-col col-md-12">
                    <!--                    <h3>Around the Web</h3>-->
                    <ul class="list-inline">
                        <li>
                            <a href="https://www.facebook.com/groups/478286995835650" target="_blank" class="btn-social btn-outline">
                                <i class="fa fa-fw fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://vk.com/club139203360" target="_blank" class="btn-social btn-outline">
                                <i class="fa fa-fw fa-vk"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://ok.ru/group/54415510863980" target="_blank" class="btn-social btn-outline">
                                <i class="fa fa-fw fa-odnoklassniki"></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    Copyright &copy; 2014 - Your Name
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Products Modals -->

<?php
    foreach ($product as $item):
?>

<div class="portfolio-modal modal fade" id="<?= 'modal' . $item->id ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">

                        <h2><?= $item->name ?></h2>

                        <hr class="star-primary">

                        <img src="img/portfolio/prduct1.jpg" class="img-responsive img-centered" alt="">

                        <h3><?= $item->price ?>$</h3>

                        <p>
                            <?= $item->content ?>
                        </p>

                        <label class="page-scroll">
                            <a class="btn btn-lg btn-success" href="#contact" data-dismiss="modal" >Заказать</a>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    endforeach;
?>
