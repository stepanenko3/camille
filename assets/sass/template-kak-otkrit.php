<?php
    /**
     * Template Name: 7003. Как начать бизнес в ОАЭ
     *
     * @package WordPress
     * @subpackage Twenty_Fourteen
     * @since Twenty Fourteen 1.0
     */

    set_query_var('topBlockWhiteText', true); // Белый ли текст в шапке
    set_query_var('topBlockStyle', 'style'); // Название файла в директории темы
    set_query_var('topBlockColor', '7bb745'); // Суфикс класса цвета шапки(.top-block--7bb745 для .top-block и .color_7bb745 для <header>)
    set_query_var('topBlockFixedMenu', [
        1 => 'Особенности',
        2 => 'Как открыть',
        3 => 'Почему SORP?',
        4 => 'Заявка',
    ]); // Список пунктов фиксированного меню ID блока => Название пункта
    set_query_var('topBlockContent', '
    <div id="top-animate-label">
                        <iframe src="/animate/anim3.html" width="550" height="550" frameborder="0"></iframe></div>
    <h1>
        Как начать бизнес в ОАЭ
    </h1>
    <p style="width: 60%">
        Откройте компанию в перспективной и активно развивающейся стране с высоким уровнем жизни и льготным налоговым режимом.
    </p>
    '); // Контент, который выводится внутри шапки

    get_header();
    get_template_part( 'template-parts/header/top-block' );
    ?>
<div class="page-block">
    <div class="container">
        <h2 class="wow fadeInUp" id="scrollBlock1">
            Особенности регистрации бизнеса в ОАЭ
        </h2>
        <div class="page-block-items">
            <div class="page-block-item wow fadeInUp">
                <div class="page-block-item-img">
                    <img src="/img/f06.svg" width="50" alt="">
                </div>
                <div class="page-block-square-thin"></div>
                <div class="page-block-square"></div>
                <div class="page-block-item-info">
                    <b>Организационно-правовая форма</b>
                    Организационно-правовая форма определяет географию деятельности компании, а также долю участия
                    иностранного инвестора
                </div>
            </div>
            <div class="page-block-item wow fadeInUp">
                <div class="page-block-item-img">
                    <img src="/img/i06.svg" width="68" alt="">
                </div>
                <div class="page-block-item-info">
                    <b>Место регистрации</b>
                    От места регистрации зависит территория, где компания сможет работать и виды деятельности, которые
                    могут быть добавлены в лицензию

                </div>
            </div>
            <div class="page-block-item wow fadeInUp">
                <div class="page-block-item-img">
                    <img src="/img/icon-004.svg" width="59" alt="">
                </div>
                <div class="page-block-item-info">
                    <b>Банковское обслуживание</b>
                    Место регистрации определяет возможности последующего банковского обслуживания
                </div>
            </div>
            <div class="page-block-item wow fadeInUp">
                <div class="page-block-item-img">
                    <img src="/img/f10.svg" width="48" alt="">
                </div>
                <div class="page-block-square-thin"></div>
                <div class="page-block-square"></div>
                <div class="page-block-item-info">
                    <b>Свободно-экономические зоны</b>
                    Страна предоставляет выбор из 45 свободных экономических зон разной направленности
                </div>
            </div>
            <div class="page-block-item wow fadeInUp">
                <div class="page-block-item-img">
                    <img src="/img/i44.svg" width="67" alt="">
                </div>
                <div class="page-block-item-info">
                    <b>Регуляции и требования в СЭЗ</b>
                    В каждой из СЭЗ действуют собственные регуляции и требования по отчетности компаний
                </div>
            </div>
            <div class="page-block-item wow fadeInUp">
                <div class="page-block-item-img">
                    <img src="/img/why_sopr1.svg" width="46" alt="">
                </div>
                <div class="page-block-square-thin"></div>
                <div class="page-block-square"></div>
                <div class="page-block-item-info">
                    <b>Локальный агент или спосор</b>
                    Локальные компании должны привлечь местного агента или спонсора для получения лицензии
                </div>
            </div>
            <div class="page-block-item wow fadeInUp">
                <div class="page-block-item-img">
                    <img src="/img/page-6.svg" width="48" alt="">
                </div>
                <div class="page-block-square-thin"></div>
                <div class="page-block-square"></div>
                <div class="page-block-item-info">
                    <b>Дополнительные разрешения</b>
                    Для реализации ряда товаров нужно получить дополнительных разрешения из компетентных органов
                </div>
            </div>
           
        </div>
    </div>
</div>
<div class="action-block">
    <div class="container">
        <div class="action-block__i">
            <div class="action-block__text wow fadeInUp">
                Закажите обратный звонок<br />
                и мы <span>расскажем как начать бизнес в ОАЭ</span>
            </div>
            <div class="action-block__btn wow fadeInUp" onclick="toggleModal('form01')">
                Заказать звонок
            </div>
        </div>
    </div>
</div>


<div class="page-block page-tabs page-tabs--2">
    <div class="container">
        <ul class="tabs__caption">
            <li class="wow fadeInUp active">
                Торговый бизнес на локальной земле
            </li>
            <li class="wow fadeInUp">
                Сервисный бизнес на локальной земле
            </li>
            <li class="wow fadeInUp">
                Производство
            </li>
            <li class="wow fadeInUp">
                Международная торговля
            </li>
            <li class="wow fadeInUp">
                Международная сервисная и финансовая деятельность
            </li>
            <li class="wow fadeInUp">
                Международное налоговое планирование
            </li>
        </ul>
        <div class="tabs__content active">
            <p>
                Важно знать! <br><br>На рынке ОАЭ большую роль играет место инкорпорации компании: оно определяет ваши
                возможности. Компании из СЭЗ могут вести торговлю исключительно через дистрибьюторов или собственный
                розничный магазин, находящийся на территории СЭЗ. Только локальные компании могут заключать прямые торговые
                соглашения, выходить на любые торговые сети, участвовать в местных тендерах. Для открытия локальной
                компании нужен местный спонсор, который выступит спящим партнером в фирме.
            </p>
            <div class="page-block-list">
                <div class="page-block-list-item wow fadeInUp">
                    <div class="page-block-list-item__img">
                        <img src="/img/config-03.svg" alt="">
                    </div>
                    <div class="page-block-list-item__number">
                        1
                    </div>
                    <div class="page-block-list-item__info">
                        <b>Выбор рабочей бизнес-модели</b>
                        <span>
                        Важно адаптировать бизнес-модель под реалии местного рынка. Иногда для эффективной работы нужно
                        изменить формат: например, уйти в онлайн или работать с крупными торговыми сетями. При выборе
                        коммерческой площади нужно учитывать проходимость района, целевую аудиторию. Важно правильно
                        выстроить логистику, учесть таможенные пошлины, чтобы не совершить стратегических ошибок. Без
                        понимания особенностей страны сделать это невозможно: обращайтесь к специалистам, чтобы успешно
                        выйти на рынок ОАЭ.
                    </span>
                    </div>
                </div>
                <div class="page-block-list-item wow fadeInUp">
                    <div class="page-block-list-item__img">
                        <img src="/img/i06.svg" alt="">
                    </div>
                    <div class="page-block-list-item__number">
                        2
                    </div>
                    <div class="page-block-list-item__info">
                        <b>
                            Определение герграфии деятельности
                        </b>
                        <span>
                        Из СЭЗ можно вести торговлю на локальную землю только через агента или дистрибьютора. СЭЗ
                        удобна для реэкспорта, так как не нужно платить таможенную пошлину за ввоз. Преимущество
                        локальной компании в отсутствии территориальных ограничений, возможность участия в местных
                        тендерах, аренды любых коммерческих площадей.
                    </span>
                    </div>
                </div>
                <div class="page-block-list-item wow fadeInUp">
                    <div class="page-block-list-item__img">
                        <img src="/img/icon-008.svg" alt="">
                    </div>
                    <div class="page-block-list-item__number">
                        3
                    </div>
                    <div class="page-block-list-item__info">
                        <b>
                            Выбор организационно-правовой формы и вида деятельности
                        </b>
                        <span>
                        От верного выбора организационно-правовой формы и вида деятельности зависят возможности
                        компании и список услуг, которые она сможет оказывать.
                    </span>
                    </div>
                </div>
                <div class="page-block-list-item wow fadeInUp">
                    <div class="page-block-list-item__img">
                        <img src="/img/icon-010.svg" alt="">
                    </div>
                    <div class="page-block-list-item__number">
                        4
                    </div>
                    <div class="page-block-list-item__info">
                        <b>
                            Получение лицензии и прохождение согласований
                        </b>
                        <span>
                        Для некоторых лицензий нужно получить дополнительные разрешения из внешних министерств. Для
                        профессиональной деятельности может потребоваться специализированный персонал с легализованным
                        дипломом и дополнительное подтверждение компетенций (аттестация, курсы). Чтобы получить
                        лицензию, нужно назначить местного спонсора/агента и арендовать офис.
                    </span>
                    </div>
                </div>
                <div class="page-block-list-item wow fadeInUp">
                    <div class="page-block-list-item__img">
                        <img src="/img/i07.svg" alt="">
                    </div>
                    <div class="page-block-list-item__number">
                        5
                    </div>
                    <div class="page-block-list-item__info">
                        <b>
                            Выход на рынок и первые шаги
                        </b>
                        <span>
                        В начале нужно выбрать сервисную компанию, которая возьмет на себя административное
                        обслуживание, подберет квалифицированный персонал и получит для него визы, разработает
                        тимплейты документов, поможет открыть банковские счета, зарегистрирует в налоговой службе,
                        организует бухгалтерский и налоговый учет.
                    </span>
                    </div>
                </div>
                <div class="page-block-list-item wow fadeInUp">
                    <div class="page-block-list-item__img">
                        <img src="/img/i45.svg" alt="">
                    </div>
                    <div class="page-block-list-item__number">
                        6
                    </div>
                    <div class="page-block-list-item__info">
                        <b>
                            Получение разрешений на ввоз товара
                        </b>
                        <span>
                        Некоторые типы товаров подлежат обязательной сертификации для торговли в ОАЭ и странах
                        Персидского Залива. Чтобы компания могла принимать товар, она должна пройти таможенную
                        регистрацию и получить код импортера.
                    </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="tabs__content">
            <p>
                Важно знать! <br><br>У сервисного профессионального бизнеса есть привилегии на локальной земле. Вам
                достаточно назначить локального агента, не имеющего долю владения в компании, чтобы представлять свои
                интересы перед государственными органами ОАЭ. У локальной компании нет ограничений по географии
                деятельности. Она может претендовать на контракты с крупными государственными и частными структурами.
                Напротив, география деятельности компании из СЭЗ ограничена международным рынком и территорией СЭЗ.
            </p>
            <div class="page-block-list">
                <div class="page-block-list-item wow fadeInUp">
                    <div class="page-block-list-item__img">
                        <img src="/img/config-03.svg" alt="">
                    </div>
                    <div class="page-block-list-item__number">
                        1
                    </div>
                    <div class="page-block-list-item__info">
                        <b>Выбор рабочей бизнес-модели</b>
                        <span>
                        Важно адаптировать модель бизнеса под реалии местного рынка. Иногда для эффективной работы
                        нужно поменять формат: например, уйти в онлайн или организовать сервис с выездом на дом. При
                        выборе коммерческой площади нужно учитывать проходимость района, целевую аудиторию, способ
                        продвижения услуг. Без понимания особенностей страны сделать это невозможно: обращайтесь к
                        специалистам, чтобы успешно выйти на рынок ОАЭ.
                    </span>
                    </div>
                </div>
                <div class="page-block-list-item wow fadeInUp">
                    <div class="page-block-list-item__img">
                        <img src="/img/i06.svg" alt="">
                    </div>
                    <div class="page-block-list-item__number">
                        2
                    </div>
                    <div class="page-block-list-item__info">
                        <b>
                            Определение герграфии деятельности
                        </b>
                        <span>
                        В СЭЗ выгодно организовать онлайн-бизнес, сосредоточенный на потребителях из компаний в
                        свободно-экономической зоне. Компания может работать только на территории своей СЭЗ и
                        международном рынке. Для открытой на местном рынке компании нет ограничений по географии, и она
                        может претендовать на контракты с крупными государственными и частными структурами.
                    </span>
                    </div>
                </div>
                <div class="page-block-list-item wow fadeInUp">
                    <div class="page-block-list-item__img">
                        <img src="/img/icon-008.svg" alt="">
                    </div>
                    <div class="page-block-list-item__number">
                        3
                    </div>
                    <div class="page-block-list-item__info">
                        <b>
                            Выбор организационно-правовой формы и вида деятельности
                        </b>
                        <span>
                        От верного выбора организационно-правовой формы и вида деятельности зависят возможности
                        компании и список услуг, которые она сможет оказывать.
                    </span>
                    </div>
                </div>
                <div class="page-block-list-item wow fadeInUp">
                    <div class="page-block-list-item__img">
                        <img src="/img/icon-010.svg" alt="">
                    </div>
                    <div class="page-block-list-item__number">
                        4
                    </div>
                    <div class="page-block-list-item__info">
                        <b>
                            Получение дополнительных разрешений и лицензии
                        </b>
                        <span>
                        Для некоторых лицензий нужно получить дополнительные разрешения из внешних министерств. Для
                        профессиональной деятельности может потребоваться специализированный персонал с легализованным
                        дипломом и дополнительное подтверждение компетенций (аттестация, курсы). Чтобы получить
                        лицензию, нужно назначить местного спонсора/агента и арендовать офис.
                    </span>
                    </div>
                </div>
                <div class="page-block-list-item wow fadeInUp">
                    <div class="page-block-list-item__img">
                        <img src="/img/i07.svg" alt="">
                    </div>
                    <div class="page-block-list-item__number">
                        5
                    </div>
                    <div class="page-block-list-item__info">
                        <b>
                            Выход на рынок и первые шаги
                        </b>
                        <span>
                        В начале нужно выбрать сервисную компанию, которая возьмет на себя административное
                        обслуживание, подберет квалифицированный персонал и получит для него визы, разработает
                        тимплейты документов, поможет открыть банковские счета, зарегистрирует в налоговой службе,
                        организует бухгалтерский и налоговый учет.
                    </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="tabs__content">
            <p>
                Важно знать! <br><br>Производственный бизнес в ОАЭ пользуется мощной поддержкой со стороны государства.
                Произведенные в ОАЭ товары не облагаются таможенной пошлиной при экспорте. Они освобождены от уплаты сборов
                за импорт сырья и пользуются правом преимущественной закупки со стороны государства при конкуренции с
                иностранными товарами, если соответствуют высокому стандарту качества.
            </p>
            <div class="page-block-list">
                <div class="page-block-list-item wow fadeInUp">
                    <div class="page-block-list-item__img">
                        <img src="/img/config-03.svg" alt="">
                    </div>
                    <div class="page-block-list-item__number">
                        1
                    </div>
                    <div class="page-block-list-item__info">
                        <b>Предварительный анализ и определение места регистрации</b>
                        <span>
                        Перед планированием важно учитывать площадь под производство: готовый юнит или нужно строить.
                        Какая потребуется электрическая мощность и как утилизировать отходы. От этого зависит выбор
                        территории, на которой можно разместить производство или арендовать готовый юнит.
                    </span>
                    </div>
                </div>
                <div class="page-block-list-item wow fadeInUp">
                    <div class="page-block-list-item__img">
                        <img src="/img/i06.svg" alt="">
                    </div>
                    <div class="page-block-list-item__number">
                        2
                    </div>
                    <div class="page-block-list-item__info">
                        <b>
                            Получение предварительног о разрешения на регистрацию производства
                        </b>
                        <span>
                        На этом этапе специалисты нашей компании соберут необходимые документы, сформируют описание
                        проекта и получат предварительное разрешение на регистрацию производства.
                    </span>
                    </div>
                </div>
                <div class="page-block-list-item wow fadeInUp">
                    <div class="page-block-list-item__img">
                        <img src="/img/icon-008.svg" alt="">
                    </div>
                    <div class="page-block-list-item__number">
                        3
                    </div>
                    <div class="page-block-list-item__info">
                        <b>
                            Получение дополнительных разрешений
                        </b>
                        <span>
                        Необходимы разрешения от Муниципалитета, Министерства Обороны и Министерства Экономики для
                        локальных компаний и сертификат (Environment, Health and Safety) для компаний в СЭЗ. Некоторые
                        типы лицензий требуют дополнительные документы из внешних министерств. К примеру, для
                        производства медикаментов нужно разрешение от Министерства Здравоохранения. <br>Если вы
                        планируете строить завод, необходимо разрешение на строительство.
                    </span>
                    </div>
                </div>
                <div class="page-block-list-item wow fadeInUp">
                    <div class="page-block-list-item__img">
                        <img src="/img/icon-010.svg" alt="">
                    </div>
                    <div class="page-block-list-item__number">
                        4
                    </div>
                    <div class="page-block-list-item__info">
                        <b>
                            Получение лицензии
                        </b>
                        <span>
                        После получения всех разрешений компетентный орган выдает производству лицензию.
                    </span>
                    </div>
                </div>
                <div class="page-block-list-item wow fadeInUp">
                    <div class="page-block-list-item__img">
                        <img src="/img/i07.svg" alt="">
                    </div>
                    <div class="page-block-list-item__number">
                        5
                    </div>
                    <div class="page-block-list-item__info">
                        <b>
                            Выход на рынок и первые шаги
                        </b>
                        <span>
                        В начале нужно выбрать сервисную компанию, которая возьмет на себя административное
                        обслуживание, подберет квалифицированный персонал и получит для него визы, разработает
                        тимплейты документов, поможет открыть банковские счета, зарегистрирует в налоговой службе,
                        организует бухгалтерский и налоговый учет.
                    </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="tabs__content">
            <p>
                Важно знать! <br><br>В ОАЭ товары на реэкспорт не облагаются таможенными и налоговыми платежами.
                Международный бизнес освобожден от налогов. Несмотря на это, компания может получить номер
                налогоплательщика для предъявления контрагентам.
            </p>
            <div class="page-block-list">
                <div class="page-block-list-item wow fadeInUp">
                    <div class="page-block-list-item__img">
                        <img src="/img/config-03.svg" alt="">
                    </div>
                    <div class="page-block-list-item__number">
                        1
                    </div>
                    <div class="page-block-list-item__info">
                        <b>Предварительный анализ</b>
                        <span>
                        Проанализируйте все тонкости законодательства с экспертами и убедитесь в том, что бизнес
                        удовлетворит конечной цели – получение налоговых льгот или преимуществ торговых соглашений
                        между ОАЭ и другими странами.
                    </span>
                    </div>
                </div>
                <div class="page-block-list-item wow fadeInUp">
                    <div class="page-block-list-item__img">
                        <img src="/img/i06.svg" alt="">
                    </div>
                    <div class="page-block-list-item__number">
                        2
                    </div>
                    <div class="page-block-list-item__info">
                        <b>
                            Определение герграфии деятельности
                        </b>
                        <span>
                        От выбора места регистрации компании зависит обслуживание ее счетов в зарубежных банках или
                        получение торгового финансирования, наличие необходимых складов и удобство логистики.
                    </span>
                    </div>
                </div>
                <div class="page-block-list-item wow fadeInUp">
                    <div class="page-block-list-item__img">
                        <img src="/img/icon-008.svg" alt="">
                    </div>
                    <div class="page-block-list-item__number">
                        3
                    </div>
                    <div class="page-block-list-item__info">
                        <b>
                            Выбор организационноправовой формы и вида деятельности
                        </b>
                        <span>
                        Выбор организационно-правовой формы и вида деятельности определяет возможности компании и
                        список товаров, которые она сможет продавать
                    </span>
                    </div>
                </div>
                <div class="page-block-list-item wow fadeInUp">
                    <div class="page-block-list-item__img">
                        <img src="/img/icon-010.svg" alt="">
                    </div>
                    <div class="page-block-list-item__number">
                        4
                    </div>
                    <div class="page-block-list-item__info">
                        <b>
                            Получение дополнительных разрешений и лицензии
                        </b>
                        <span>
                        Для некоторых лицензий нужно получить дополнительные разрешения из внешних министерств. Чтобы
                        получить лицензию, нужно назначить местного спонсора или агента и арендовать офис.
                    </span>
                    </div>
                </div>
                <div class="page-block-list-item wow fadeInUp">
                    <div class="page-block-list-item__img">
                        <img src="/img/i07.svg" alt="">
                    </div>
                    <div class="page-block-list-item__number">
                        5
                    </div>
                    <div class="page-block-list-item__info">
                        <b>
                            Выход на рынок и первые шаги
                        </b>
                        <span>
                        В начале нужно выбрать сервисную компанию, которая возьмет на себя административное
                        обслуживание, подберет квалифицированный персонал и получит для него визы, разработает
                        тимплейты документов, поможет открыть банковские счета, зарегистрирует в налоговой службе,
                        организует бухгалтерский и налоговый учет.
                    </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="tabs__content">
            <p>
                Важно знать! <br><br>В ОАЭ действует более простая схема получения сложных сервисных лицензий для
                международной деятельности. Сюда входят финансовые, телекоммуникационные, страховые, образовательные,
                туристические, логистические, транспортные, инженерные услуги.
            </p>
            <div class="page-block-list">
                <div class="page-block-list-item wow fadeInUp">
                    <div class="page-block-list-item__img">
                        <img src="/img/config-03.svg" alt="">
                    </div>
                    <div class="page-block-list-item__number">
                        1
                    </div>
                    <div class="page-block-list-item__info">
                        <b>Предварительный анализ</b>
                        <span>
                        Проанализируйте тонкости законодательства с экспертами и убедитесь в том, что бизнес
                        удовлетворит конечной цели – получение налоговых льгот или сложного лицензирования для выхода
                        на новые рынки.
                    </span>
                    </div>
                </div>
                <div class="page-block-list-item wow fadeInUp">
                    <div class="page-block-list-item__img">
                        <img src="/img/i06.svg" alt="">
                    </div>
                    <div class="page-block-list-item__number">
                        2
                    </div>
                    <div class="page-block-list-item__info">
                        <b>
                            Определение герграфии деятельности
                        </b>
                        <span>
                        Выбор места нахождения компании определяет простоту регистрационных процедур, возможность
                        обслуживания компании в зарубежных банках, требования к лицензии и набор видов деятельности.
                    </span>
                    </div>
                </div>
                <div class="page-block-list-item wow fadeInUp">
                    <div class="page-block-list-item__img">
                        <img src="/img/icon-008.svg" alt="">
                    </div>
                    <div class="page-block-list-item__number">
                        3
                    </div>
                    <div class="page-block-list-item__info">
                        <b>
                            Выбор организационноправовой формы и вида деятельности
                        </b>
                        <span>
                        От верного выбора организационно-правовой формы и вида деятельности зависят возможности
                        компании и список услуг, которые она сможет оказывать.
                    </span>
                    </div>
                </div>
                <div class="page-block-list-item wow fadeInUp">
                    <div class="page-block-list-item__img">
                        <img src="/img/icon-010.svg" alt="">
                    </div>
                    <div class="page-block-list-item__number">
                        4
                    </div>
                    <div class="page-block-list-item__info">
                        <b>
                            Получение дополнительных разрешений и лицензии
                        </b>
                        <span>
                        Для некоторых лицензий нужно получить дополнительные разрешения из внешних министерств. Чтобы
                        получить лицензию, нужно назначить местного спонсора или агента и арендовать офис.
                    </span>
                    </div>
                </div>
                <div class="page-block-list-item wow fadeInUp">
                    <div class="page-block-list-item__img">
                        <img src="/img/i07.svg" alt="">
                    </div>
                    <div class="page-block-list-item__number">
                        5
                    </div>
                    <div class="page-block-list-item__info">
                        <b>
                            Выход на рынок и первые шаги
                        </b>
                        <span>
                        В начале нужно выбрать сервисную компанию, которая возьмет на себя административное
                        обслуживание, подберет квалифицированный персонал и получит для него визы, разработает
                        тимплейты документов, поможет открыть банковские счета, зарегистрирует в налоговой службе,
                        организует бухгалтерский и налоговый учет.
                    </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="tabs__content">
            <p>
                Важно знать! <br><br>ОАЭ – уникальная юрисдикция, где работают законные инструменты для минимизации
                налогообложения и реорганизации бизнеса в условиях деофшоризации. Компания из ОАЭ получает гарантию защиты
                персональных данных акционеров, может анонимно владеть бизнесом и организовать центр управления на
                территории страны. Бенефициары могут оформить налоговое резидентство. <br>Многочисленные договоры об
                избежании двойного обложения и защите взаимных инвестиций дают сильные налоговые преимущества при выводе
                дивидендов, процентов и роялти.
            </p>
            <div class="page-block-list">
                <div class="page-block-list-item wow fadeInUp">
                    <div class="page-block-list-item__img">
                        <img src="/img/config-03.svg" alt="">
                    </div>
                    <div class="page-block-list-item__number">
                        1
                    </div>
                    <div class="page-block-list-item__info">
                        <b>Предварительный анализ</b>
                        <span>
                        При организации холдинга важно проанализировать все тонкости законодательства вовлеченных
                        юрисдикций: условия договоров об избежании двойного налогообложения, наличие договоров о защите
                        взаимных инвестиций, особенности страны налогообложения бенефициара.
                    </span>
                    </div>
                </div>
                <div class="page-block-list-item wow fadeInUp">
                    <div class="page-block-list-item__img">
                        <img src="/img/i06.svg" alt="">
                    </div>
                    <div class="page-block-list-item__number">
                        2
                    </div>
                    <div class="page-block-list-item__info">
                        <b>
                            Построение эффективной операционной модели
                        </b>
                        <span>
                        Разработка оптимальной структуры управления и финансирования дочерних компаний, анализ
                        возможностей для снижения налоговых ставок по операционной деятельности группы, разработка
                        схемы миграции капитала внутри выстраиваемой управленческой группы
                    </span>
                    </div>
                </div>
                <div class="page-block-list-item wow fadeInUp">
                    <div class="page-block-list-item__img">
                        <img src="/img/icon-008.svg" alt="">
                    </div>
                    <div class="page-block-list-item__number">
                        3
                    </div>
                    <div class="page-block-list-item__info">
                        <b>
                            Выбор организационноправовой формы и вида деятельности
                        </b>
                        <span>
                        Выбор организационно-правовой формы и вида деятельности материнской компании определяет
                        применяемые схемы для вывода капитала и финансирования подконтрольных структур.
                    </span>
                    </div>
                </div>
                <div class="page-block-list-item wow fadeInUp">
                    <div class="page-block-list-item__img">
                        <img src="/img/icon-010.svg" alt="">
                    </div>
                    <div class="page-block-list-item__number">
                        4
                    </div>
                    <div class="page-block-list-item__info">
                        <b>
                            Защита конечного бенефициара
                        </b>
                        <span>
                        Проводится анализ текущего налогового статуса бенефициара который учитывает наличие закона о
                        контролируемых иностранных компаниях в стране его резидентства. Происходит смена налогового
                        резидентства, распределяются доли владения в компании, принимаются меры по сокрытию бенефициара
                        и подтверждается центр его жизненных интересов в ОАЭ.
                    </span>
                    </div>
                </div>
                <div class="page-block-list-item wow fadeInUp">
                    <div class="page-block-list-item__img">
                        <img src="/img/i07.svg" alt="">
                    </div>
                    <div class="page-block-list-item__number">
                        5
                    </div>
                    <div class="page-block-list-item__info">
                        <b>
                            Обеспечение легитимности применяемой схемы
                        </b>
                        <span>
                        Подтверждение центра управления и контроля бизнеса: организация реального или виртуального
                        офиса, предоставление технического директора.
                    </span>
                    </div>
                </div>
                <div class="page-block-list-item wow fadeInUp">
                    <div class="page-block-list-item__img">
                        <img src="/img/i45.svg" alt="">
                    </div>
                    <div class="page-block-list-item__number">
                        6
                    </div>
                    <div class="page-block-list-item__info">
                        <b>
                            Организация работы и первые шаги
                        </b>
                        <span>
                        В начале деятельности важно выбрать сервисную компанию, которая возьмет на себя
                        административное обслуживание, подберет квалифицированный персонал и получит для него визы,
                        разработает тимплейты документов, поможет открыть банковские счета, зарегистрирует в налоговой
                        службе, организует бухгалтерский и налоговый учет.
                    </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="action-block">
    <div class="container">
        <div class="action-block__i">
            <div class="action-block__text wow fadeInUp">
                Закажите обратный звонок<br />
                и мы <span>расскажем вам про ОАЭ</span>
            </div>
            <div class="action-block__btn wow fadeInUp" onclick="toggleModal('form01')">
                Позвонить мне
            </div>
        </div>
    </div>
</div>

<div class="container">

    <table class="table table-cases table-cases--2">
        <tr class="wow fadeInUp">
            <td class="big">Услуги SORP Group по организации бизнеса</td>
            <td class="big">Преимущества и активы SORP Group</td>
        </tr>
        <tr class="wow fadeInUp">
            <td>

                <ul>
                    <li>Анализ рынка и адаптация бизнес-идеи к реалиям ОАЭ</li>
                    <li>Регистрация компании на локальном рынке или в свободной экономической зоне</li>
                    <li>Выбор организационно-правовой формы компании</li>
                    <li>Подбор лицензии, помощь в прохождении лицензирования</li>
                    <li>Содействие в открытии банковских счетов</li>
                    <li>Помощь в получении налогового резидентства</li>
                    <li>Получение дополнительных сертификатов и разрешений на оказание услуг</li>
                    <li>Подбор, обучение и переквалификация персонала</li>
                    <li>Минимизация налогообложения</li>
                    <li>Юридическое, консалтинговое и бухгалтерское обслуживание</li>
                </ul>
            </td>
            <td>
                <ul>
                    <li>15-летний богатый опыт открытия иностранного бизнеса в ОАЭ, множество отработанных успешных
                        кейсов по выходу на рынок</li>
                    <li>5000 м2 офисных площадей в управлении, оборудованных для работы</li>
                    <li>Собственный бизнес-университет, сертифицированный Министерством Образования</li>
                    <li>Штат экспертов в местном и международном финансовом и налоговом законодательстве и деловой
                        практике</li>
                    <li>Обученный технический персонал с профильным управленческим образованием</li>
                    <li>Государственная лицензия на налоговое и бухгалтерское обслуживание</li>
                    <li>Налаженные связи в банковских, налоговых, государственных структурах</li>
                    <li>Партнерство с ведущими</li>
                </ul>
            </td>
        </tr>
    </table>

    <div class="hr"></div>
    <br/><br/><br/><br/><br/>
</div>

<div class="action-block">
    <div class="container">
        <div class="action-block__i">
            <div class="action-block__text wow fadeInUp">
                Закажите обратный звонок<br />
                и мы <span>расскажем вам про ОАЭ</span>
            </div>
            <div class="action-block__btn wow fadeInUp" onclick="toggleModal('form01')">
                Позвонить мне
            </div>
        </div>
    </div>
</div>
<div id="why-sopr">
    <div class="container">
        <h2 class="wow fadeInUp" id="scrollBlock3">Почему SORP?</h2>
        <b class="wow fadeInUp">SORP Group станет вашим надежным партнером в долгосрочной работе на территории ОАЭ. </b>
        <div class="wow fadeInUp">

            Подключившись к платформе SORP, вы получите всестороннюю поддержку от наших специалистов – мы поможем вам
            подобрать перспективный проект для инвестиций, оценим риски и прибыль, проработаем детальный план.

        </div>
        <div id="why-sopr-items">
            <div class="why-sopr-item wow fadeInUp">
                <div class="why-sopr-item-img">
                    <img src="/img/why_sopr1.svg" width="46" alt="">
                </div>
                <div class="why-sopr-square-thin"></div>
                <div class="why-sopr-square"></div>
                <div class="why-sopr-item-info">
                    <b>Индивидуальный подход</b>
                    Подбор выгодного решения индивидуально под ваши задачи и бюджет.
                </div>
            </div>
            <div class="why-sopr-item wow fadeInUp">
                <div class="why-sopr-item-img">
                    <img src="/img/f06.svg" width="50" alt="">
                </div>
                <div class="why-sopr-item-info">
                    <b>15 лет успешной работы</b>
                    Мы помогли тысячам клиентов построить и развить бизнес в ОАЭ.
                </div>
            </div>
            <div class="why-sopr-item wow fadeInUp">
                <div class="why-sopr-item-img">
                    <img src="/img/f09.svg" width="54" alt="">
                </div>
                <div class="why-sopr-item-info">
                    <b>Комплекс всех услуг</b>
                    Компания предлагает комплексные решения для бизнеса и акционеров: от регистрации компаний до
                    получения статуса налогового резидента страны.
                </div>
            </div>
            <div class="why-sopr-item wow fadeInUp">
                <div class="why-sopr-item-img">
                    <img src="/img/f10.svg" width="48" alt="">
                </div>
                <div class="why-sopr-square-thin"></div>
                <div class="why-sopr-square"></div>
                <div class="why-sopr-item-info">
                    <b>Безопасность и анонимность </b>
                    Мы обеспечим безопасность ваших инвестиций и примем меры по сохранению конфиденциальности
                    владельцев и директоров.
                </div>
            </div>
        </div>
        <div class="page-buttons wow fadeInUp">
            <div class="page-button page-button--fill">
                Видео о компании
            </div>
            <div class="page-button">
                Документы и сертификаты
            </div>
            <div class="page-buttons-info">
                <img src="/img/information.svg" /> Хотите узнать больше о компании?
            </div>
        </div>
    </div>
</div>
<div class="connect-to-platform">
    <div class="container">
        <h2 class="wow fadeInUp" id="scrollBlock4">Заявка на регистрацию<br> компании в ОАЭ</h2>
        <b class="wow fadeInUp">Регистрируйтесь в системе и получите <a href="#">бесплатное подключение</a><br>
            и <a href="#">консультацию</a> нашего специалиста в течении 20 минут.</b>
        <p class="wow fadeInUp">
            Сотрудники SORP подберут идеальный инвестиционный проект под ваши цели и требования и окажут вам
            всестороннюю
            поддержку. Уже сегодня вы сможете узнать, куда и как лучше инвестировать в ОАЭ, чтобы обеспечить
            себе максимально
            высокий, безрисковый и стабильный пассивный доход
        </p>
        <?= do_shortcode('[contact-form-7 id="271" title="Заявка 01"]') ?>
    </div>
</div>
<?php get_footer();