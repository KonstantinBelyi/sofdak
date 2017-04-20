<?php

/* @var $this yii\web\View
 * @var $product app\models\Product
 * @var $about app\models\ContentSite
 * @var $contact app\models\Contact
 */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
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

            <?php
                $img = $item->getImage();
            ?>

            <div class="col-sm-4 product-item text-center ">
                <a href="<?= '#modal' . $item->id ?>" class="product-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>

                    <?= Html::img($img->getUrl('360x360'), ['alt' => $item->name, 'class' => 'img-responsive']) ?>

                </a>

                <p>
                    <?= $item->name ?>
                </p>

                <a href="<?= '#modal' . $item->id ?>" class="product-link" data-toggle="modal">
                    <?= Html::submitButton('Описание товара', ['class' => 'btn btn-lg btn-success', 'style' => ['width' => '250px', 'border-radius' => '10px']])?>
<!--                    'width' => '100%',-->
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

                <?php $form =  ActiveForm::begin() ?>

                    <div class="row">
                        <div class="form-group col-xs-12 floating-label-form-group">
                            <?= $form->field($contact, 'name')->textInput(['placeholder' => 'Ваше имя']) ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-xs-12 floating-label-form-group">
                            <?= $form->field($contact, 'email')->textInput(['placeholder' => 'Ваш E-mail']) ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-xs-12 floating-label-form-group">
                            <?= $form->field($contact, 'phone')->textInput(['placeholder' => 'Ваш телефон']) ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-xs-12 floating-label-form-group">
                            <?= $form->field($contact, 'message')->textarea(['rows' => '3', 'placeholder' => 'Введите сообщение']) ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-xs-12">
                            <?= Html::submitButton('Отправить', ['class' => 'btn btn-lg btn-success']) ?>
                        </div>
                    </div>

                <?php ActiveForm::end() ?>

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
                    &copy; My Company <?= date('Y') ?>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Products Modals -->

<?php
    foreach ($product as $item):
?>

<?php
    $img = $item->getImage();
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

                        <div class="caption col-lg-6 col-lg-offset-3" style="float: inherit">
                            <?= Html::img($img->getUrl('360x360'), ['alt' => $item->name, 'class' => 'img-responsive']) ?>
                        </div>

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
