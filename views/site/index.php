<?php

/* @var $this yii\web\View
 * @var $product app\controllers\SiteController
 */

$this->title = 'Sof-dak';
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
                <!--                <button type="button" class="btn btn-lg btn-success page-scroll" href="#contact" >Заказать</button>-->
                <label class="page-scroll">
                    <a class="btn btn-lg btn-success" href="#contact" >Заказать</a>
                </label>

            </div>

            <div class="col-sm-6">
                <img class="img-responsive" src="img/1(1000x848).jpg" alt="">
                <!--                <img class="img-responsive" src="img/profile.png" alt="">-->
                <!--                <div class="intro-text">-->
                <!--                    <span class="name">Start Bootstrap</span>-->
                <!--                    <hr class="star-light">-->
                <!--                    <span class="skills">Web Developer - Graphic Artist - User Experience Designer</span>-->
                <!--                </div>-->
                <!--            </div>-->
            </div>
        </div>
</header>

<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Препараты</h2>
                <!--                <hr class="star-primary">-->
            </div>
        </div>
        <div class="row">

            <?php
                foreach ($product as $item):
            ?>

            <div class="col-sm-4 portfolio-item">
                <a href="<?= '#modal' . $item->id ?>" class="portfolio-link" data-toggle="modal">
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
                    Гепатит С – «ласковый убийца» кто он?

                    Гепатит C – это инфекционное заболевание печени, вызываемое вирусом гепатита C, наблюдается чаще у молодых людей. Однако «возраст» инфекции постепенно растет.

                    Более 170 млн. населения Земли заражено гепатитом С. Ежегодно заражается порядка 4 млн. человек. Заболевание распространено практически во всех странах, но неравномерно.

                    Как передается вирус гепатита С?
                    Вирус гепатита С передается через кровь — это основной механизм инфицирования.

                    Чаще всего заражение вирусом гепатита C происходит при введении достаточного количества инфицированной крови при инъекциях общей иглой.

                    Возможно заражение при выполнении пирсинга или татуировок инструментами, инфицированными кровью больного, так же при совместном использовании маникюрных принадлежностей, бритв, и даже зубных щеток (попавшая на них инфицированная кровь может стать причиной заражения).

                    Так же вероятно заражение гепатитом С при введении препаратов крови, при операциях или травмах, введении медицинских препаратов и массовой вакцинации, в стоматологических кабинетах.

                    Кто попадает в группу риска заражения гепатитом С?
                    Эпидемиологи выделяют три степени повышенного риска.

                    Самый высокий риск заражения имеют:

                    Лица, употребляющие инъекционные наркотики
                    Лица, которым переливали факторы свертывания крови до 1987г.
                    Промежуточный (средне-повышенный) риск заражения гепатитом С имеют:

                    Пациенты, находящиеся на гемодиализе (аппарат «искусственная почка»)
                    Лица, которым были пересажены органы (трансплантация) или которым переливали кровь до 1992 г., и всем, кому была перелита кровь от донора, впоследствии оказавшегося с положительным результатом анализов на гепатит С
                    Лица с неустановленными заболеваниями (проблемами) печени
                    Младенцы, родившиеся от инфицированных матерей
                    К следующей категории (слабое повышение риска) относятся:

                    Медицинские работники и работники санитарно-эпидемиологической службы
                    Лица, имеющие половые контакты со многими партнерами
                    Лица, имеющие половые контакты с одним инфицированным партнером
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
            <div class="col-lg-4 col-lg-offset-2">
                <p>
                    Мы оказываем помощь в приобретении эффективных препаратов для лечения гепатита С из Египта по доступным ценам.
                    В Египте производят аналоги (дженерики) брендовых препаратов для лечения гепатита С, которые значительно дешевле, а состав и качество препаратов не уступают мировым аналогам.
                </p>
            </div>
            <div class="col-lg-4">
                <p>
                    Доступность цен обусловлена тем, что в Египте очень много больных гепатитом С, поэтому правительство создало выгодные условия для производителей www.marcyrl.com и вы платите за само лекарство, а не за дорогостоящий патент и бренд.
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
                        <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                        </li>
                        <li><a href="https://vk.com/club139203360" target="_blank" class="btn-social btn-outline"><i class="fa fa-fw fa-vk"></i></a>
                        </li>
                        <!--                        <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>-->
                        <!--                        </li>-->
                        <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                        </li>
                        <!--                        <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>-->
                        <!--                        </li>-->
                        <!--                        <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>-->
                        <!--                        </li>-->
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
                        <h3><?= $item->price ?></h3>

                        <p>
                            <?= $item->content ?>
                        </p>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    endforeach;
?>
