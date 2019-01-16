<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
    <div class="header">
        <div class="header-top">
            <div class="container">
                <div class="header-top__i">
                    <div class="header-top__social">
                        <a target="_blank" href="https://www.facebook.com/CamilleAlbaneUA/">
                            <img src="/assets/img/facebook.svg" />
                        </a>
                        <a target="_blank" href="https://www.instagram.com/camille.a_obolon_/">
                            <img src="/assets/img/instagram.svg" />
                        </a>
                    </div>
                    <div class="header-top__text">
                        Наш адрес: <span>Киев, ул. Ахматовой 23, вход со двора</span>
                    </div>
                    <div class="header-top__text">
                        Для записи и всем вопросам: <a href="tel:+380998767788">+38 (099) 876 77 88</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="header-bottom__i">
                    <a href="#" class="header-bottom__logo">
                        <img src="/assets/img/logo.svg" />
                    </a>
                    <div class="header-bottom__menu">
						<?php wp_nav_menu(array(
							'theme_location' => 'top',
							'menu_id'        => 'top-menu',
						)); ?>
                    </div>
                    <div onclick="toggleModal()" class="header-bottom__action">
                        Запись в салон
                    </div>
                    <div class="header-menu-toggle" onclick="toggleModal()">
                        Запись
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="s01">
        <div class="container">
            <div class="s01__content">
                <div class="s01__text">
                    сильный, энергичный, женственный
                </div>
                <div class="s01__header">
                    Каждая красота здесь получит свою оправу
                </div>
                <div onclick="toggleModal()" class="s01__action">
                    Запись в салон
                </div>

                <div class="s01__scroll"></div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="sales owl-carousel">
            <div class="sales-item">
                <div class="sales-item__header">
                    Макияж, брови, прическа!
                </div>
                <div class="sales-item__text">
                    Макияж, брови, прическа — это часть образа, которая очень важна для нас. Каждая деталь, должна быть
                    в гармонии с внешностью, стилем жизни, одеждой и даже настроением.
                </div>
                <div class="sales-item__number">
                    -10%
                </div>
            </div>
            <div class="sales-item">
                <div class="sales-item__header">
                    Макияж, брови, прическа!
                </div>
                <div class="sales-item__text">
                    Макияж, брови, прическа — это часть образа, которая очень важна для нас. Каждая деталь, должна быть
                    в гармонии с внешностью, стилем жизни, одеждой и даже настроением.
                </div>
                <div class="sales-item__number">
                    -10%
                </div>
            </div>
            <div class="sales-item">
                <div class="sales-item__header">
                    Макияж, брови, прическа!
                </div>
                <div class="sales-item__text">
                    Макияж, брови, прическа — это часть образа, которая очень важна для нас. Каждая деталь, должна быть
                    в гармонии с внешностью, стилем жизни, одеждой и даже настроением.
                </div>
                <div class="sales-item__number">
                    -10%
                </div>
            </div>
        </div>

        <div class="info row" id="about">
            <div class="col-md-3 info-item">
                <div class="info-item__header">
                    Стиль
                </div>
                <div class="info-item__text">
                    Стиль Camille A заключается в том, что каждая красота здесь получит свою оправу
                </div>
            </div>
            <div class="col-md-3 info-item">
                <div class="info-item__header">
                    Материалы
                </div>
                <div class="info-item__text">
                    С началом холодов и отопительного сезона волосы нуждаются в особом уходе.
                </div>
            </div>
            <div class="col-md-3 info-item">
                <div class="info-item__header">
                    Красота
                </div>
                <div class="info-item__text">
                    Мы подготовили акционные предложения и подарки для сезона осень-зима!
                </div>
            </div>
            <div class="col-md-3 info-item">
                <div class="info-item__header">
                    Доступность
                </div>
                <div class="info-item__text">
                    Стиль Camille A заключается в том, что каждая красота здесь получит свою оправу
                </div>
            </div>
        </div>
    </div>

    <div class="s02">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="s02-item__content">
                        <div class="s02-item__header">
                            Созданный в 1994 году, бренд Camille A – воплощение его создательницы – сильный,
                            энергичный, женственный.
                        </div>
                        <div class="s02-item__text">
                            Продуманные до мелочей стилистом-парикмахером, мастером по окрашиванию волос и
                            визажистом
                            прическа и оттенок волос этой женщины – истинное продолжение ее индивидуальности.
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="s02-slider owl-carousel">
                        <div class="s02-item">
                            <img src="/assets/img/s02-1.png" />
                        </div>
                        <div class="s02-item">
                            <img src="/assets/img/s02-1.png" />
                        </div>
                        <div class="s02-item">
                            <img src="/assets/img/s02-1.png" />
                        </div>
                        <div class="s02-item">
                            <img src="/assets/img/s02-1.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="services" id="services">
            <div class="services__header">
                <div class="services__title">
                    Услуги и цены
                </div>
                <div class="services__subtitle">
                    В работе мы используем косметику только от мировых брендов, проверенную временем и миллионами
                    клиентов.
                </div>
            </div>

            <div class="services-tabs">
                <ul class="services-tabs__header">
                    <li class="active">Парикмахерские услуги</li>
                    <li>Ногтевой сервис</li>
                    <li>Массаж</li>
                    <li>Косметология</li>
                    <li>Услуги визажиста</li>
                </ul>
                <div class="services-tabs__content active">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row services__list">
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="services__image">
                                <img src="/assets/img/services-img.png" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-tabs__content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row services__list">
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="services__image">
                                <img src="/assets/img/services-img.png" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-tabs__content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row services__list">
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="services__image">
                                <img src="/assets/img/services-img.png" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-tabs__content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row services__list">
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="services__image">
                                <img src="/assets/img/services-img.png" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-tabs__content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row services__list">
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services-item">

                                        <div class="services-item__name">
                                            Стрижка
                                        </div>
                                        <div class="services-item__price">
                                            1 259 грн
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="services__image">
                                <img src="/assets/img/services-img.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



        <div class="form01">
            <div class="form01__header">
                Записаться на услуги в салон:
            </div>
            <div class="form01__subheader">
                Менеджер свяжется с вами в ближайшее время
            </div>

            <form class="form01-form">
                <div class="select-wrapper">
                    <select>
                        <option disabled selected>Выберите услугу</option>
                        <option>Стрижка</option>
                        <option>Укладка</option>
                        <option>Плетение</option>
                        <option>Лечение волос</option>
                    </select>
                </div>
                <input type="text" placeholder="Ваше имя" />
                <input type="text" placeholder="Номер телефона" />
                <button type="submit">Запись в салон</button>
            </form>
        </div>
    </div>

    <div class="gallery" id="gallery">
        <div class="container">
            <div class="gallery__header">
                Фотогалерея
            </div>
            <div class="gallery-carousel owl-carousel">
                <div class="gallery-carousel__item">
                    <img src="/assets/img/gallery1.png" />
                </div>
                <div class="gallery-carousel__item">
                    <img src="/assets/img/gallery2.png" />
                </div>
                <div class="gallery-carousel__item">
                    <img src="/assets/img/gallery1.png" />
                </div>
                <div class="gallery-carousel__item">
                    <img src="/assets/img/gallery2.png" />
                </div>
                <div class="gallery-carousel__item">
                    <img src="/assets/img/gallery1.png" />
                </div>
                <div class="gallery-carousel__item">
                    <img src="/assets/img/gallery2.png" />
                </div>
            </div>
        </div>
    </div>

    <div class="s03">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="s03__text">
                        В слогане Camille A отражается философия всей сети Camille A. Во всех салонах работают мастера
                        высочайшего уровня. Выбирайте территориально удобный для вас салон и записывайтесь на любое
                        время –
                        в каждом Camille A с вами будут работать специалисты наивысшего уровня.
                    </div>
                    <div class="s03__action" onclick="toggleModal()">
                        Запись в салон
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

		<?= do_shortcode('[instagram-feed]'); ?>

        <form class="form02">
            <div class="form02__content">
                <div class="form02__header">
                    Записаться на услуги в салон:
                </div>
                <div class="form02__subheader">
                    Менеджер свяжется с вами в ближайшее время
                </div>
            </div>
            <input type="text" placeholder="Ваше имя" />
            <input type="text" placeholder="Номер телефона" />
            <button type="submit">Запись в салон</button>
        </form>

        <div class="map" id="contacts">
            <div id="map"></div>
            <div class="map__content">
                <div class="map__header">
                    Контакты
                </div>
                <div class="map__text">
                    <b>Ждем вас в гости:</b><br />
                    вулиця Лариси Руденко, 11, Київ, 02000
                </div>
                <div class="map__text">
                    <b>Звоните, по всем вопросам:</b><br />
                    <a href="tel:0445658498">044 565 8498</a><br />
                    <a href="tel:0445658498">044 565 8498</a>
                </div>

                <div class="map-actions">
                    <div class="map-actions__btn" onclick="toggleModal()">
                        Запись в салон
                    </div>
                    <a href="https://www.facebook.com/CamilleAlbaneUA/" target="_blank" class="map-actions__soc">
                        FB
                    </a>
                    <a href="https://www.instagram.com/camille.a_obolon_/" target="_blank" class="map-actions__soc">
                        INST
                    </a>
                </div>
            </div>
        </div>


        <div class="seo-text">
            <div class="seo-text__header">
                Seo text
            </div>
            <div class="row">
                <div class="col-md-6">
                    Эстетическая (неутилитарная, непрактическая) категория, обозначающая совершенство, гармоничное
                    сочетание аспектов объекта, при котором последний вызывает у наблюдателя эстетическое наслаждение.
                    <br /><br />
                    Красота является одной из важнейших категорий культуры. Противоположностью красоты является
                    безобразие
                </div>
                <div class="col-md-6">
                    Эстетическая (неутилитарная, непрактическая) категория, обозначающая совершенство, гармоничное
                    сочетание аспектов объекта, при котором последний вызывает у наблюдателя эстетическое наслаждение.
                    <br /><br />
                    Красота является одной из важнейших категорий культуры. Противоположностью красоты является
                    безобразие
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="footer__i">
                <a href="#" class="footer__logo">
                    <img src="/assets/img/logo.svg">
                </a>
                <div class="footer__copyright">
                    Copyright © 2013-2019
                </div>
            </div>
        </div>
    </footer>

    <div class="modal">
        <div class="modal__bg" onclick="toggleModal()"></div>
        <div class="modal__content">
            <div class="modal__header">
                Записаться на услуги
            </div>
            <div class="modal__subheader">
                Менеджер свяжется с вами в ближайшее время
            </div>

            <form class="modal-form">
                <div class="select-wrapper">
                    <select>
                        <option disabled selected>Выберите услугу</option>
                        <option>Стрижка</option>
                        <option>Укладка</option>
                        <option>Плетение</option>
                        <option>Лечение волос</option>
                    </select>
                </div>
                <input type="text" placeholder="Ваше имя" />
                <input type="text" placeholder="Номер телефона" />
                <button type="submit">Запись в салон</button>
            </form>
        </div>
    </div>
<?php get_footer();
