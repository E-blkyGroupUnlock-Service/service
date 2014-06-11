<?php
/**
 * Created by JetBrains PhpStorm.
 * User: zhalnin
 * Date: 11/06/14
 * Time: 12:22
 * To change this template use File | Settings | File Templates.
 */

namespace imei_service\view;
error_reporting( E_ALL & ~E_NOTICE );

try {
    require_once( "imei_service/view/utils/utils.printPage.php" );
    require_once( "imei_service/view/ViewHelper.php" );

    $request = \imei_service\view\VH::getRequest();
    $request = \imei_service\view\VH::getRequest();
    $carrierCheckCollection = $request->getObject( 'carrierCheckCollection' );

    $title = $carrierCheckCollection->getName();
    $keywords = "imei,check,iPhone,instant check,check status, проверка по IMEI, узнать оператора";
    $description = "Проверка iPhone по IMEI iPhone поможет определить дату первой активации, к какому оператору привязан iPhone, статус Find My iPhone всего за 30 рублей, что займет несколько минут.";

    require_once("templates/top.php");
    ?>
    <div id="header">
        <ul id="navigation" role="navigation">
            <li id="nav-home"><a href="?cmd=News"><span>Главная</span></a></li>
            <li id="nav-unlock"><a href="?cmd=Unlock"><span>Официальный Анлок iPhone</span></a></li>
            <li id="nav-udid"><a href="?cmd=Udid"><span>Регистрация UDID</span></a></li>
            <li id="nav-carrier"><a  class="selected" href="?cmd=CarrierCheck"><span>Проверка оператора по IMEI</span></a></li>
            <li id="nav-fast_check"><a href="?cmd=FastCheck"><span>Быстрая проверка</span></a></li>
            <li id="nav-blacklist"><a href="?cmd=BlacklistCheck"><span>Blacklist</span></a></li>
            <li id="nav-faq"><a href="?cmd=Faq"><span>Вопросы</span></a></li>
        </ul>
    </div>

    <div id="main"  class="main-content">
        <div id="showcase" class="content">
            <div class="hero selfclear">
                <div id="shipping-box" class="box box-nomargin shipping-box ptn">
                    <!--                <span class="step-header is-stepped stepnumber2" style="opacity: 1;"></span>-->
                    <h2 id="shipping-box-title" class="heading primary" style="opacity: 1;"><a href="<?php echo $_SERVER['PHP_SELF']."?cmd=CarrierCheck" ?>"><?php echo $carrierCheckCollection->getName();?></a></h2>
                    <div id="shipping" class="step edit" style="opacity: 1;">
                        <div class="step-content top-divided" style="">
                            <div id="shipping-contact-form" class="step-mode edit clearfix" autocomplete="off" style="">
                                <div class="gs grid-1of2" style="">
                                    <div id="shipping-user" class="user-form-block substep" style="">
                                        <form method="post">
                                            <fieldset class="US first user-form-fieldset" style="">
                                                <legend style="">
                                                    <strong class="label"><?php echo $carrierCheckCollection->getOrderTitle();?></strong>
                                                </legend>
                                                <div id="shipping-user-address_section" class="user-address fieldset-content" style="">

                                                    <div class="mbs" style="">
                                                <span class="companyName-field field-with-placeholder" style="">
                                                    <label class="placeholder" for="shipping-user-companyName" style="">
                                                        <span>Адрес Email (обязательно)</span>
                                                    </label>
                                                    <input id="email" class="email" type="email" maxlength="35" size="35" name="email">
                                                </span>
                                                    </div>
                                                    <div class="mbs" style="">

                                                    <span class="daytimePhone-field field-with-placeholder" style="">
                                                    <label class="placeholder" for="shipping-user-daytimePhone" style="">
                                                        <span>IMEI ( 15 цифр )</span>
                                                    </label>
                                                    <input id="imei" class="imei" type="text" size="8" name="imei">
                                                </span>
                                                    </div>
                                                </div>
                                                <input id="item" type="hidden" name="item" value="проверку iPhone на оператора">
                                                <input id="type" type="hidden" name="type" value="carrier">
                                            </fieldset>
                                        </form>
                                    </div><!-- shipping user -->
                                </div><!-- shipping-box-title -->
                                <div class="gs grid-1of2 gs-last" style="">
                                    <div class="substep" style="">
                                        <div id="payment-form-astro" class="form-astro with-seperator">
                                            <p class="legend" style="">
                                                <strong id="coherent_id_103">Условия</strong>
                                                <a href="?cmd=BlacklistCheck" class="separated-link metrics-link">Проверить iPhone на blacklist</a>
                                            </p>
                                            <br />
                                            <p>
                                                <?php
                                                echo nl2br($carrierCheckCollection->getDescription());
                                                ?>
                                            </p>
                                        </div><!-- payment-form-astro -->
                                    </div><!-- substep -->
                                </div><!-- gs grid-lof2 gs-last -->
                            </div><!-- content -->
                        </div><!-- step-content top-divided -->
                        <div class="step-continue part-edit clear" style="">
                            <div class="continue-content clearfix">
                                <div class="gs grid-3of4" style="">
                                    <div class="chat chat-now cchat">
                                        <div id="shipping-step-defaults" style="">
                                            <div id="shipping-continue-button" class="button rect transactional" title="Отправить" value="click" type="submit" style="visibility: visible">
                                        <span style="">
                                            <span class="effect"></span>
                                            <span class="label"> Отправить </span>
                                        </span>
                                            </div><!-- shipping-continue-button -->
                                        </div><!-- shipping-step-defaults -->
                                    </div><!-- chat chat-now cchat -->
                                </div><!-- gs grid-3of4 -->
                                <div class="gs grid-1of4 gs-last r-align" style="">
                                    <div id="shipping-button" class="button rect transactional blues" title="Сбросить" type="button" style="">
                                        <span style="">
                                            <span class="effect"></span>
                                            <span class="label"> Сбросить </span>
                                        </span>
                                    </div><!-- shipping-button -->
                                </div><!-- gs grid-1of4 gs-last r-align -->
                            </div><!-- continue-content clearfix -->
                        </div><!-- step-continue part-edit clear -->
                    </div><!-- shipping -->
                </div><!-- shipping-box -->
            </div><!-- hero selfclear -->
        </div><!-- showcase -->
    </div><!-- main -->

    <?php


    require_once("templates/bottom.php");

} catch(\imei_service\base\AppException $exc){
    require_once( "imei_service/base/Exceptions.php" );
} catch(\imei_service\base\DBException $exc) {
    require_once( "imei_service/base/Exceptions.php" );
}
?>