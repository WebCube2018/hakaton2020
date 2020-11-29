<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
use Bitrix\Main\Page\Asset;
use \Bitrix\Main\Localization\Loc;

?>
<!DOCTYPE html>
<html class="fixed" lang="ru-RU">
<head>
    <?php $APPLICATION->ShowHead();
//    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/js/arcticmodal/simple.css");
//    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/js/arcticmodal/jquery.arcticmodal.css");
//    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/arcticmodal/jquery.arcticmodal.js");
    ?>
    <meta charset="utf-8">
    <title><?php $APPLICATION->ShowTitle(); ?></title><!--[if IE]>
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
        <![endif]-->
</head>
<body class="index-page">
<div id="panel">
    <?php $APPLICATION->ShowPanel(); ?>
</div>

<div class="wrapper">
    <div class="container">
        <div id="header">
            <div id="logo" class="absolute">
                <a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo2.png" alt="Россети"></a>
            </div>
            <div class="detail-user">
                <b>Здравствуйте, Олег Коноров!</b>
                <p>Ваша роль: главный администратор</p>
            </div>
            <div class="kabinet_bitton">
                <a class="btn_lk" href="#">Выход</a>
            </div>
        </div>
        <div class="block_title">
            <div class="title"><b>Обработка заявлений</b></div>
        </div>
        <div class="wraper_lk">
            <div class="button_lk">
                <div class="button_left">
                    <a href="#" class="link">Архив заявлений</a>
                    <a href="#" class="link">Поиск совпадений</a>
                    <a href="#" class="link">Служебная переписка</a>
                </div>
                <div class="button_right">
                    <a href="#" class="cancel">Назад</a>
                </div>
            </div>
            <div class="block-zayv">
                <h3>Заявления ожидающие назначения эксперта</h3>
                <div class="block_table">
                    <div class="item item_active">
                        <div class="nuber">1</div>
                        <div class="detail">Проверка остаточного напряжения на флиппелях актуматических систем / Курносов В.Е.</div>
                        <div class="reg_nuber">Рег. № 29718N-190 Принято. 28/11/20</div>
                        <div class="deistviy">
                            <select name="expert" id="">
                                <option value="1">Вася</option>
                                <option value="1">Петя</option>
                                <option value="1">Юра</option>
                                <option value="1">Николай</option>
                            </select>
                        </div>
                    </div>
                    <div class="item">
                        <div class="nuber">1</div>
                        <div class="detail">Проверка остаточного напряжения на флиппелях актуматических систем / Курносов В.Е.</div>
                        <div class="reg_nuber">Рег. № 29718N-190 Принято. 28/11/20</div>
                        <div class="deistviy">
                            <select name="expert" id="">
                                <option value="1">Вася</option>
                                <option value="1">Петя</option>
                                <option value="1">Юра</option>
                                <option value="1">Николай</option>
                            </select>
                        </div>
                    </div>
                    <div class="item item_active">
                        <div class="nuber">1</div>
                        <div class="detail">Проверка остаточного напряжения на флиппелях актуматических систем / Курносов В.Е.</div>
                        <div class="reg_nuber">Рег. № 29718N-190 Принято. 28/11/20</div>
                        <div class="deistviy">
                            <select name="expert" id="">
                                <option value="1">Вася</option>
                                <option value="1">Петя</option>
                                <option value="1">Юра</option>
                                <option value="1">Николай</option>
                            </select>
                        </div>
                    </div>
                    <div class="item">
                        <div class="nuber">1</div>
                        <div class="detail">Проверка остаточного напряжения на флиппелях актуматических систем / Курносов В.Е.</div>
                        <div class="reg_nuber">Рег. № 29718N-190 Принято. 28/11/20</div>
                        <div class="deistviy">
                            <select name="expert" id="">
                                <option value="1">Вася</option>
                                <option value="1">Петя</option>
                                <option value="1">Юра</option>
                                <option value="1">Николай</option>
                            </select>
                        </div>
                    </div>
                    <div class="item item_active">
                        <div class="nuber">1</div>
                        <div class="detail">Проверка остаточного напряжения на флиппелях актуматических систем / Курносов В.Е.</div>
                        <div class="reg_nuber">Рег. № 29718N-190 Принято. 28/11/20</div>
                        <div class="deistviy">
                            <select name="expert" id="">
                                <option value="1">Вася</option>
                                <option value="1">Петя</option>
                                <option value="1">Юра</option>
                                <option value="1">Николай</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


