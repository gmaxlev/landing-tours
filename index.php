<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Культура тура - Организуем культурный отдых на любой вкус!</title>
    <meta property="og:image" content="./img/mataproperty.png" /><!-- ===============-->
    <!-- Стили и скрипты-->
    <!-- ===============-->
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/mod.css" />
    <script src="js/jquery.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/jquery.mask.min.js"></script>
<link rel="stylesheet" href="daterangepicker/daterangepicker.css">
<script src="daterangepicker/moment.min.js"></script>
<script src="daterangepicker/daterangepicker.js"></script>
<link rel="stylesheet" href="css/mod.css" />

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
    m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
 
    ym(57596386, "init", {
         clickmap:true,
         trackLinks:true,
         accurateTrackBounce:true,
         webvisor:true
    });
 </script>
 <noscript><div><img src="https://mc.yandex.ru/watch/57596386" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
 <!-- /Yandex.Metrika counter -->

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  
    ga('create', 'UA-121365277-2', 'auto');
    ga('send', 'pageview');
  setTimeout("ga('send','event','Engaged users','More than 15 seconds')",15000); 
  </script>

<!-- Facebook Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '2972015592819175');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=2972015592819175&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Facebook Pixel Code -->
</head>

<body>

    <!-- ==============-->
    <!-- МОБИЛЬНОЕ МЕНЮ-->
    <!-- ==============-->

    <div class="mobmenu">
        <div class="mobmenu__close">
            <img src="img/icons/cross-out.png" alt="">
        </div>
        <ul class="mobmenu__list">
            <li class="mobmenu__item">
                <a href="" data-scrollto="orient">Направления</a>
            </li>
            <li class="mobmenu__item">
                <a href="" data-scrollto="order">Как заказать тур</a>
            </li>
            <li class="mobmenu__item">
                    <a href="" data-scrollto="search">Выбрать тур</a>
                </li>
            <li class="mobmenu__item none">
                <a href="" data-scrollto="club">Круиз Клуб</a>
            </li>
            <li class="mobmenu__item">
                <a href="" data-scrollto="aboutus">О нас</a>
            </li>
            <li class="mobmenu__item none">
                <a href="" data-scrollto="hottours">Горящие туры</a>
            </li>
        </ul>
    </div>


    <!-- ==============-->
    <!-- МОДАЛЬНОЕ ОКНО-->
    <!-- ==============-->
    <div class="modal" id="modal-tour">
        <div class="modal__dark"></div>
        <div class="modal__window">
            <div class="modal__close"></div>
            <div class="modal-form">
                <div class="modal-form__header">Мы сделаем все сами</div>
                <div class="modal-form__comment">Просто оставьте свои пожелания, мы подберем несколько лучших вариантов и предложим их вам</div>
                <form class="form-modal-1">
                    <div class="modal-form__input"><input  class="input-text input-text_b input-date"   name="date" placeholder="Желаемые даты вылета" /></div>
                    <div class="modal-form__input"><input class="input-text input-text_b" placeholder="Страна, направление" name="orient" /></div>
                    <div class="modal-form__input"><select class="input-text input-text_b" name="price">
                            <option selected value="до 500$">до 500$</option>
                            <option value="от 500 до 1500$">от 500 до 1500$</option>
                            <option value="от 1500$">от 1500$</option>
                           </select></div>
                           <div class="modal-form__input"><select class="input-text input-text_b" name="duration">
                                <option selected value="6-8 ночей">6-8 ночей</option>
                                <option value="8-12 ночей">8-12 ночей</option>
                                <option value="от 12 ночей">от 12 ночей</option>
                               </select></div>
                    <div class="modal-form__input"><input class="input-text input-text_b" placeholder="Количество человек" name="count" /></div>
                    <div class="modal-form__input"><input class="input-text input-text_b" placeholder="Возраст ребёнка/детей (если актуально)" name="baby" /></div>
                    <div class="modal-form__input required"><input class="input-text input-text_b" placeholder="Имя" name="name" required /></div>
                    <div class="modal-form__input required"><input class="input-text input-text_b phone-input viber" placeholder="Номер телефона" name="phone" required /></div>
                    <button class="button button_b" type="submit"><span>Отправить</span></button>
                </form>
                <div class="formcomplete formcomplete_modal formcomplete_ok">Спасибо! Мы вам перезвоним.</div>
                <div class="formcomplete formcomplete_modal formcomplete_error">Ошибка.</div>
            </div>
        </div>
    </div>
        <!-- ==============-->
    <!-- ЭКСКУРСИОННЫЙ МОДУЛЬ-->
    <!-- ==============-->
    <div class="modal" id="modal-excursion">
            <div class="modal__dark"></div>
            <div class="modal__window">
                <div class="modal__close"></div>
                <script>
                        var osGeo = ""; /* Страна, курорт или отель по умолчанию в форме поиска */
                        var osTarget = "http://kulturatura.com.ua/search2.html"; /* URL для отправки формы */
                        var osContainer = null; /* Элемент DIV, в котором выводить результаты поиска */
                        var osTourContainer = null; /* Элемент DIV, в котором выводить подробную информацию о туре */
                        var osLang = 'ru'; /* Язык интерфейса (ru|ua) */
                        var enableMediumForm = true; /* Стили для промежуточной формы при ширине родительского элемента от 600 до 950px */
                    </script>
                    <link rel="Stylesheet" href="https://export.otpusk.com/os/excursion/form.css" type="text/css" />
                    <link rel="Stylesheet" href="https://export.otpusk.com/os/excursion/result.css" type="text/css" />
                    <link rel="Stylesheet" href="https://export.otpusk.com/os/excursion/tour.css" type="text/css" />
                    <link rel="Stylesheet" href="css/otpusk.css" type="text/css" />
                    <script src="https://export.otpusk.com/api/session?access_token=30e13-36d4b-b4987-fbb5c-b3cd5"></script>
                    <script src="https://export.otpusk.com/js/excursion/"></script>
                    <script src="https://export.otpusk.com/js/order"></script>
            </div>
        </div>
    
    <!-- ==============-->
    <!-- МОДАЛЬНОЕ ОКНО "ЗАДАТЬ ВОПРОС"-->
    <!-- ==============-->
    <div class="modal" id="modal-help">
        <div class="modal__dark"></div>
        <div class="modal__window">
            <div class="modal__close"></div>
            <div class="modal-form">
                <div class="modal-form__header">Что вас интересует?</div>
                <div class="modal-form__comment">Введите имя, номер телефона и мы вам перезвоним.</div>
                <form class="form-modal-2">
                    <div class="modal-form__input"><input class="input-text input-text_b" placeholder="Имя" name="name" /></div>
                    <div class="modal-form__input"><input class="input-text input-text_b phone-input" placeholder="Номер телефона" name="phone" /></div>
                    <div class="modal-form__input"><textarea class="textarea" placeholder="Что вас интересует?" name="message"></textarea></div><button class="button button_b" type="submit"><span>Отправить</span></button>
                </form>
                <div class="formcomplete formcomplete_modal formcomplete_ok">Спасибо! Мы вам перезвоним.</div>
                <div class="formcomplete formcomplete_modal formcomplete_error">Ошибка.</div>
            </div>
        </div>
    </div><!-- ======-->
        <!-- ==============-->
    <!-- МОДАЛЬНОЕ ОКНО "ПОДПИСАТЬСЯ"-->
    <!-- ==============-->
    <div class="modal" id="modal-subscribe">
            <div class="modal__dark"></div>
            <div class="modal__window">
                <div class="modal__close"></div>
                <div class="modal-form">
                    <div class="modal-form__header">Сэкономьте время</div>
                    <div class="modal-form__comment">Просто оставьте свои пожелания, мы подберем несколько лучших вариантов и предложим их вам</div>
                    <form class="form-modal-1">
                        <div class="modal-form__input"><input  class="input-text input-text_b input-date"   name="date" placeholder="Желаемые даты вылета" /></div>
                        <div class="modal-form__input"><input class="input-text input-text_b" placeholder="Страна, направление" name="orient" /></div>
                        <div class="modal-form__input"><select class="input-text input-text_b" name="price">
                                <option selected value="до 500$">до 500$</option>
                                <option value="от 500 до 1500$">от 500 до 1500$</option>
                                <option value="от 1500$">от 1500$</option>
                               </select></div>
                               <div class="modal-form__input"><select class="input-text input-text_b" name="duration">
                                    <option selected value="6-8 ночей">6-8 ночей</option>
                                    <option value="8-12 ночей">8-12 ночей</option>
                                    <option value="от 12 ночей">от 12 ночей</option>
                                   </select></div>
                        <div class="modal-form__input"><input class="input-text input-text_b" placeholder="Количество человек" name="count" /></div>
                        <div class="modal-form__input"><input class="input-text input-text_b" placeholder="Возраст ребёнка/детей (если актуально)" name="baby" /></div>
                        <div class="modal-form__input required"><input class="input-text input-text_b" placeholder="Имя" name="name" required /></div>
                        <div class="modal-form__input required"><input class="input-text input-text_b phone-input viber" placeholder="Номер телефона" name="phone" required /></div><button class="button button_b" type="submit"><span>Отправить</span></button>
                    </form>
                    <div class="formcomplete formcomplete_modal formcomplete_ok">Спасибо! Мы вам перезвоним.</div>
                    <div class="formcomplete formcomplete_modal formcomplete_error">Ошибка.</div>
                </div>
            </div>
        </div><!-- ======-->
    <!-- HEADER-->
    <!-- ======-->
    <div class="header-container">
        <div class="container">
            <div class="header">
                <div class="header__logo"><img src="img/logo.png" alt="" /></div>
                <div class="header__nav">
                    <nav>
                        <ul class="nav">
                            <li class="nav__item"><a href="" data-scrollto="orient">Направления</a></li>
                            <li class="nav__item"><a href="" data-scrollto="order">Как заказать тур</a></li>
                            <li class="nav__item none"><a href="" data-scrollto="club">Круиз Клуб</a></li>
                            <li class="nav__item"><a href="" data-scrollto="aboutus">О нас</a></li>
                            <li class="nav__item none"><a href="" data-scrollto="hottours">Горящие туры</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="header__menu">
                        <img src="img/icons/menu.svg" alt="">
                    </div>
                <div class="header__contacts"><a class="header-phone" href="tel:+380678136003"><img src="img/icons/phone.png" alt="" /><span>067 813 6003</span></a></div>
               
            </div>
        </div>
    </div>
    
    <!-- ===========-->
    <!-- ПРИВЕТСТВИЕ-->
    <!-- ===========-->
    <section class="intro">
        <div class="intro-bg">
            <div class="intro-bg__video"><video autoplay="autoplay" muted="muted" loop="loop">
                    <source src="videos/Depositphotos_206666512_hd1080.mp4" type="video/mp4" /></video></div>
        </div>
        <h1 class="intro__header wow fadeInUp" data-wow-delay="0.2s"> 
            <?php
            $title = $_GET['utm_content']; 
            if($title == 'allinclusive') {$title_text = 'Подбор туров "все включено"';}
            elseif($title == 'hotabroad') {$title_text = 'Подбор горящих туров за границу';}
            elseif($title == 'hot') {$title_text = 'Подбор горящих туров';}
            elseif($title == 'married') {$title_text = 'Подбор туров для молодоженов';}
            elseif($title == 'couple') {$title_text = 'Подбор туров для пар';}
            elseif($title == 'carpathians') {$title_text = 'Подбор туров в Карпаты';}
            elseif($title == 'online') {$title_text = 'Подбор туров онлайн';}
            elseif($title == 'choose') {$title_text = 'Профессиональный подбор туров';}
            elseif($title == 'search') {$title_text = 'Профессиональный поиск туров';}
            elseif($title == 'family') {$title_text = 'Подбор туров для семейного отдыха';}
            elseif($title == 'baby') {$title_text = 'Подбор туров для отдыха с младенцем';}
            elseif($title == 'blackazov') {$title_text = 'Подбор туров на Черное и Азовское море';}
            else{$title_text = 'Организуем культурный отдых <br>на любой вкус';}
            echo $title_text;
            ?> 
        </h1>
        <div class="intro__act wow fadeInUp" data-wow-delay="0.6s"><a class="button button_c none" href="" data-scrollto="search"><span> Выбрать самому</span></a>
            <a class="button button_a" href="" data-modal="modal-tour"><span> Получить подборку</span></a></div>
    </section><!-- ==============================================-->
    <!-- С КЕМ ВЫ ПЛАНИРУЕТЕ ОТПРАВИТЬСЯ В ПУТЕШЕСТВИЕ?-->
    <!-- ==============================================-->
    <section class="container-full" id="orient">
        <section class="section">
            <h2 class="section-header wow fadeInUp" data-wow-delay="0.2s">С кем вы планируете отправиться в путешествие?</h2>
            <div class="travel-cats">
                <div class="travel-cats__item wow zoomIn" data-wow-delay="0.3s"><a class="travelto" href="">
                        <div class="travelto__head">
                            <div class="travelto__bg" style="background-image: url(img/Depositphotos_213234804_s-2019.jpg)"></div>
                            <div class="travelto__title">Авторский отдых</div>
                        </div>
                        <div class="travelto__act"><button class="button button_b show-travel-detail"><span>Подробнее</span></button></div>
                    </a>
                    <div class="travel-details">
                        <div class="auth-rest">
                            <div class="auth-rest__text">
                                <h2 class="article-title">Авторский отдых</h2>
                                <div class="article-subtitle">Идеально подойдёт для тех, кто хочет:</div>
                                <div class="auth-rest__list">
                                    <ul class="list-dots">
                                        <li class="list-dots__item">программу "под ключ" с персональными гидами на минигруппу в разных городах маршрута и сопровождение фотографа</li>
                                        <li class="list-dots__item">подбором сотуриста/компании</li>
                                        <li class="list-dots__item">гастротуры по разным странам мира</li>
                                        <li class="list-dots__item">йога/аюрведа программы</li>
                                    </ul>
                              <p> Если Вы человек любознательный и нацеленый на что-то качественно новое - этот вид отдыха для Вас!</div>
                                <div class="scriptum none">Не определились куда отправится? Посмотрите экскурсионные туры и визуализируйте путишествие, а мы возьмём на себя хлопоты с документами и бронированием!</p></div>
                                <div class="auth-rest__act"><a class="button button_b" href="" data-modal="modal-tour"><span>Подобрать тур</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="travel-cats__item wow zoomIn" data-wow-delay="0.4s"><a class="travelto" href="">
                        <div class="travelto__head">
                            <div class="travelto__bg" style="background-image: url(img/Depositphotos_280992772_s-2019.jpg)"></div>
                            <div class="travelto__title">Отдых для пар</div>
                        </div>
                        <div class="travelto__act"><button class="button button_b"><span>Подробнее</span></button></div>
                    </a>
                    <div class="travel-details">
                        <div class="auth-rest">
                                <div class="auth-rest__text">
                                        <h2 class="article-title">Отдых для пар</h2>
                                        <div class="article-subtitle"> Планируете совместный уикенд </div>
                                        <div class="auth-rest__list">или отпуск и нацелены на романтический вариант тура - отлично!
                                            <p>Мы предложим страны и маршруты с фотогеничными пейзажами и активностями для Вашей пары, порекомендуем уютные заведения и места релакса. </p>
                                        </div>
                                        <div class="scriptum">Вы делитесь своими желаниями - мы вариантами качественного времяпровождения, которое понравится обоим!</div>
                                        <div class="auth-rest__act"><a class="button button_b" href="" data-modal="modal-tour"><span>Подобрать тур</span></a></div>
                                    </div>
                        </div>
                    </div>
                </div>
                <div class="travel-cats__item wow zoomIn" data-wow-delay="0.5s"><a class="travelto" href="">
                        <div class="travelto__head">
                            <div class="travelto__bg" style="background-image: url(img/Depositphotos_73006457_s-2019.jpg)"></div>
                            <div class="travelto__title">Семейный отдых с малышами</div>
                        </div>
                        <div class="travelto__act"><button class="button button_b"><span>Подробнее</span></button></div>
                    </a>
                    <div class="travel-details">
                        <div class="auth-rest">
                                <div class="auth-rest__text">
                                        <h2 class="article-title">Отдых с малышами</h2>
                                        <div class="article-subtitle">Проконсультируем:</div>
                                        <div class="auth-rest__list">
                                                <ul class="list-dots">
                                                        <li class="list-dots__item">какие страны комфортные для перелёта с ребёнком и как к нему подготовиться</li>
                                                        <li class="list-dots__item">развеем интернет мифы о пляжном отдыхе с крохой</li>
                                                        <li class="list-dots__item">подберём подходящий отель и продолжительность тура</li>
                                                        <li class="list-dots__item">расскажем все о страховых случаях и как получить медпомощь при необходимости</li>
                                                    </ul>
                                        </div>
                                        <div class="scriptum">Если хочется не разлучаться с малышом и получить комфортный отдых - мы с радостью его организуем!</div>
                                        <div class="auth-rest__act"><a class="button button_b" href="" data-modal="modal-tour"><span>Подобрать тур</span></a></div>
                                    </div>
                        </div>
                    </div>
                </div>
                <div class="travel-cats__item wow zoomIn" data-wow-delay="0.6s"><a class="travelto" href="">
                        <div class="travelto__head">
                            <div class="travelto__bg" style="background-image: url(img/Depositphotos_25046761_s-2019.jpg)"></div>
                            <div class="travelto__title">Семейный отдых с детьми</div>
                        </div>
                        <div class="travelto__act"><button class="button button_b"><span>Подробнее</span></button></div>
                    </a>
                    <div class="travel-details">
                        <div class="auth-rest">
                                <div class="auth-rest__text">
                                        <h2 class="article-title">Отдых с детьми</h2>
                                        <div class="article-subtitle">Что важно для этого формата?</div>
                                        <div class="auth-rest__list">В таком формате важно чтобы учитывались интересы всех поколений - детям было не скучно и весело, старшим членам семьи - спокойно и умиротворенно! 
                                           
                                        </div>
                                        <div class="scriptum">Расскажем, что можно посмотреть в любой выбранной стране и найти оптимальный баланс в активностях для всех членов семьи!</div>
                                        <div class="auth-rest__act"><a class="button button_b" href="" data-modal="modal-tour"><span>Подобрать тур</span></a></div>
                                    </div>
                        </div>
                    </div>
                </div>
                <div class="travel-cats__item wow zoomIn" data-wow-delay="0.7s"><a class="travelto" href="">
                        <div class="travelto__head">
                            <div class="travelto__bg" style="background-image: url(img/Depositphotos_35148695_s-2019.jpg)"></div>
                            <div class="travelto__title">Горный детский лагерь в Закарпатье</div>
                        </div>
                        <div class="travelto__act"><button class="button button_b"><span>Подробнее</span></button></div>
                    </a>
                    <div class="travel-details">
                        <div class="auth-rest">
                                <div class="auth-rest__text">
                                        <h2 class="article-title">Горный детский лагерь в Закарпатье</h2>
                                        <div class="article-subtitle">Закарпатье - лучшее место для оздоровительного и увлекательного отдыха</div>
                                        <div class="auth-rest__list">Нетронутая природа гор, чистейший воздух и родниковая вода - это сокровища нашей любимой страны, которые дети почувствовав однажды полюбят на всю жизнь!
                                                Дети смогут:
                                               <p> <ul class="list-dots">
                                                        <li class="list-dots__item">увлекательно провести отдых в компании сверстников</li>
                                                                <li class="list-dots__item">питаться экологически чистыми продуктами</li>
                                                                        <li class="list-dots__item">увидеть собственными глазами горы и заповедные места Карпат</li>
                                                                                <li class="list-dots__item">посетить фермы по выращиванию радужной форели, страусов, буйволов, фазанов</li>
                                                                                        <li class="list-dots__item">попробовать настоящую брынзу и вурду</li>
                                                                                                <li class="list-dots__item">поплавать в термальных источниках, аналогичным венгерским</li>
                                                                                                        <li class="list-dots__item">попить минеральную шаянскую воду</li>
                                                                                                                <li class="list-dots__item">подышать солью закарпатских солёных шахт</li></ul></p>
                                              <p>  И влюбиться в отдых без интернета и телефона 24/7! Под каждую группу мы продумываем индивидуальную программу, чтобы детям было максимально интересно и весело. </p>
                                        </div>
                                        <div class="scriptum">Поэтому если думаете куда отправить ребенка с пользой для души и тела - летний отдых в Закарпатье - идеальный вариант!</div>
                                        <div class="auth-rest__act"><a class="button button_b" href="" data-modal="modal-tour"><span>Подобрать тур</span></a></div>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section><!-- ===============-->
    <!-- АВТОРСКИЙ ОТДЫХ-->
    <!-- ===============-->
    <section class="section section_grey" id="travels">
        <div class="container">
            <div class="travels">
                <div>
                    <div class="auth-rest">
                        <div class="auth-rest__img"><img src="img/Depositphotos_213234804_s-2019.jpg" alt="" /></div>
                        <div class="auth-rest__text">
                            <h2 class="article-title">Авторский отдых</h2>
                            <div class="article-subtitle">Идеально подойдёт для тех, кто хочет:</div>
                            <div class="auth-rest__list">
                                <ul class="list-dots">
                                    <li class="list-dots__item">программу "под ключ" с персональными гидами на минигруппу в разных городах маршрута и сопровождение фотографа</li>
                                    <li class="list-dots__item">подбором сотуриста/компании</li>
                                    <li class="list-dots__item">гастротуры по разным странам мира</li>
                                    <li class="list-dots__item">йога/аюрведа программы</li>
                                </ul>
                            </div>
                            <div class="scriptum">Если Вы человек любознательный и нацеленый на что-то качественно новое - этот вид отдыха для Вас!</div>
                            <div class="auth-rest__list none"> Не определились куда отправится? Посмотрите экскурсионные туры и визуализируйте путишествие, а мы возьмём на себя хлопоты с документами и бронированием!</div>
                                <div class="auth-rest__act"><a class="button button_b" href="" data-modal="modal-tour"><span>Подобрать тур</span></a></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="auth-rest">
                        <div class="auth-rest__img"><img src="img/Depositphotos_280992772_s-2019.jpg" alt="" /></div>
                        <div class="auth-rest__text">
                            <h2 class="article-title">Отдых для пар</h2>
                            <div class="article-subtitle"> Планируете совместный уикенд </div>
                            <div class="auth-rest__list">или отпуск и нацелены на романтический вариант тура - отлично!
                                <p>Мы предложим страны и маршруты с фотогеничными пейзажами и активностями для Вашей пары, порекомендуем уютные заведения и места релакса. </p>
                            </div>
                            <div class="scriptum">Вы делитесь своими желаниями - мы вариантами качественного времяпровождения, которое понравится обоим!</div>
                            <div class="auth-rest__act"><a class="button button_b" href="" data-modal="modal-tour"><span>Подобрать тур</span></a></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="auth-rest">
                        <div class="auth-rest__img"><img src="img/Depositphotos_73006457_s-2019.jpg" alt="" /></div>
                        <div class="auth-rest__text">
                            <h2 class="article-title">Отдых с малышами</h2>
                            <div class="article-subtitle">Проконсультируем:</div>
                            <div class="auth-rest__list">
                                    <ul class="list-dots">
                                            <li class="list-dots__item">какие страны комфортные для перелёта с ребёнком и как к нему подготовиться</li>
                                            <li class="list-dots__item">развеем интернет мифы о пляжном отдыхе с крохой</li>
                                            <li class="list-dots__item">подберём подходящий отель и продолжительность тура</li>
                                            <li class="list-dots__item">расскажем все о страховых случаях и как получить медпомощь при необходимости</li>
                                        </ul>
                            </div>
                            <div class="scriptum">Если хочется не разлучаться с малышом и получить комфортный отдых - мы с радостью его организуем!</div>
                            <div class="auth-rest__act"><a class="button button_b" href="" data-modal="modal-tour"><span>Подобрать тур</span></a></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="auth-rest">
                        <div class="auth-rest__img"><img src="img/Depositphotos_25046761_s-2019.jpg" alt="" /></div>
                        <div class="auth-rest__text">
                            <h2 class="article-title">Отдых с детьми</h2>
                            <div class="article-subtitle">Что важно для этого формата?</div>
                            <div class="auth-rest__list">В таком формате важно чтобы учитывались интересы всех поколений - детям было не скучно и весело, старшим членам семьи - спокойно и умиротворенно! 
                               
                            </div>
                            <div class="scriptum">Расскажем, что можно посмотреть в любой выбранной стране и найти оптимальный баланс в активностях для всех членов семьи!</div>
                            <div class="auth-rest__act"><a class="button button_b" href="" data-modal="modal-tour"><span>Подобрать тур</span></a></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="auth-rest">
                        <div class="auth-rest__img"><img src="img/Depositphotos_35148695_s-2019.jpg" alt="" /></div>
                        <div class="auth-rest__text">
                            <h2 class="article-title">Горный детский лагерь в Закарпатье</h2>
                            <div class="article-subtitle">Закарпатье - лучшее место для оздоровительного и увлекательного отдыха</div>
                            <div class="auth-rest__list">Нетронутая природа гор, чистейший воздух и родниковая вода - это сокровища нашей любимой страны, которые дети почувствовав однажды полюбят на всю жизнь!
                                    Дети смогут:
                                   <p> <ul class="list-dots">
                                            <li class="list-dots__item">увлекательно провести отдых в компании сверстников</li>
                                                    <li class="list-dots__item">питаться экологически чистыми продуктами</li>
                                                            <li class="list-dots__item">увидеть собственными глазами горы и заповедные места Карпат</li>
                                                                    <li class="list-dots__item">посетить фермы по выращиванию радужной форели, страусов, буйволов, фазанов</li>
                                                                            <li class="list-dots__item">попробовать настоящую брынзу и вурду</li>
                                                                                    <li class="list-dots__item">поплавать в термальных источниках, аналогичным венгерским</li>
                                                                                            <li class="list-dots__item">попить минеральную шаянскую воду</li>
                                                                                                    <li class="list-dots__item">подышать солью закарпатских солёных шахт</li></ul></p>
                                  <p>  И влюбиться в отдых без интернета и телефона 24/7! Под каждую группу мы продумываем индивидуальную программу, чтобы детям было максимально интересно и весело. </p>
                            </div>
                            <div class="scriptum">Поэтому если думаете куда отправить ребенка с пользой для души и тела - летний отдых в Закарпатье - идеальный вариант!</div>
                            <div class="auth-rest__act"><a class="button button_b" href="" data-modal="modal-tour"><span>Подобрать тур</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- =====-->
    <!-- ФОРМА-->
    <!-- =====-->
    <section class="section monitor none" id="search">
            <div class="container container_rel">
                <h2 class="section-header wow fadeInUp" data-wow-delay="0.2s">Любите мониторить туры самостоятельно?</h2>
                <div class="advice">
                    <div class="art wow fadeInUp" data-wow-delay="0.5s"><b>Воспользуйтесь нашим конструктором туров и насладитесь полезной информацией:</b>
                            <ul class="list-dots"><li class="list-dots__item">реальные отзывы об отелях и оценки их рейтинга</li>
                                    <li class="list-dots__item">фото и карты расположения отеля</li>
                                            <li class="list-dots__item">плюс актуальные цены 34 туроператоров в базе на один и тот же тур</li></ul></div> </div>       
            <script>
                    var osGeo = ''; /* Страна, курорт или отель по умолчанию в форме поиска */
                    var osDefaultDeparture = ''; /* ID города или название на языке модуля */
                    var osDefaultDuration = ''; /* Начальная длительность в днях */
                    var osTarget = 'http://kulturatura.com.ua/search.html'; /* URL для отправки формы */
                    var osContainer = null; /* Элемент DIV, в котором выводить результаты поиска */
                    var osTourContainer = null; /* Элемент DIV, в котором выводить подробную информацию о туре */
                    var osLang = 'ru'; /* Язык интерфейса (ru|ua) */
                    var osTourTargetBlank = true; /* Открывать страницу тура в новом окне? */
                    var osOrderUrl = null; /* Вместо формы заказа, переходить на указанный url */
                    var osCurrency = 'converted'; /* Валюта для вывода туров: converted – гривна, original – в валюте тура $ или € */
                </script>
                <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&subset=cyrillic" rel="stylesheet">
                <link rel="Stylesheet" href="https://export.otpusk.com/os/onsite/form.css" type="text/css" />
                <link rel="Stylesheet" href="https://export.otpusk.com/os/onsite/result.css" type="text/css" />
                <link rel="Stylesheet" href="https://export.otpusk.com/os/onsite/tour.css" type="text/css" />
                <link rel="Stylesheet" href="css/otpusk.css" type="text/css" />
                <script src="https://export.otpusk.com/api/session?access_token=30e13-36d4b-b4987-fbb5c-b3cd5"></script>
                <script src="https://export.otpusk.com/js/onsite/"></script>
                <script src="https://export.otpusk.com/js/order"></script>
             </div>   
        </section>     
       <!-- =====-->
    <!-- АВТОР-->
    <!-- =====-->
    <section class="section">
        <div class="container">
            <div class="person">
                <div class="person__img wow fadeInLeft" data-wow-delay="0.6s"><img src="img/president.png" alt="" />
                    <div class="document"><a class="document__img" data-fancybox="gallery" href="img/photo_2020-02-11_14-48-50.jpg"><img src="img/doc.png" alt="" /></a><img class="document__symb" src="img/symbol.png" alt="" /></div>
                </div>
                <div class="person__text">
                    <h2 class="article-title wow fadeInUp" data-wow-delay="0.2s">Меня зовут Юлия Костевич</h2>
                    <div class="article-bottitle wow fadeInUp" data-wow-delay="0.5s">и мое агентство организует отдых, которого вы так давно ждали.</div>
                    <div class="article-subtitle wow fadeInUp" data-wow-delay="0.8s">Почему я так уверена?</div>
                    <div class="pickout">
                        <ul class="img-list">
                            <li class="img-list__item wow fadeInUp" data-wow-delay="1s">мы подбираем тур с учетом самых подробных пожеланий: будь то рай для дайвинга, бесплатные коктейли или рыбный ресторан на территории отеля</li>
                            <li class="img-list__item wow fadeInUp" data-wow-delay="1.1s">тщательно все проверяем: читаем отзывы, опрашиваем клиентов, наводим справки</li>
                            <li class="img-list__item wow fadeInUp" data-wow-delay="1.2s">я лично побывала более чем в 24 странах мира и знаю, как избежать неприятных сюрпризов</li>
                        </ul>
                        <div class="scriptum wow fadeInUp" data-wow-delay="1.5s">А главное - я всегда стараюсь угодить клиентам, а они доверяют мне и советуют друзьям.</div>
                        <div class="scriptum scriptum_cont wow fadeInUp" data-wow-delay="1.8s">Только так возможно получить награду <span>«Выбор года»</span>, которой нашу работу отметили в 2019 году.</div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- ======-->
    <!-- ОТЗЫВЫ-->
    <!-- ======-->
    <section class="section section_grey" style="display: none">
        <div class="container">
            <h2 class="section-header wow fadeInUp" data-wow-delay="0.2s">Отзывы</h2>
            <div class="reviews">
                <div class="slider-arrow slider-arrow-reviews">
                    <div class="slider-arrow__item slider-arrow_prev"></div>
                    <div class="slider-arrow__item slider-arrow_next"></div>
                </div>
                <div class="reviews__slider">
                    <div class="reviews__item wow zoomIn" data-wow-delay="0.2s"><img src="img/review.png" alt="" /></div>
                    <div class="reviews__item wow zoomIn" data-wow-delay="0.3s"><img src="img/review.png" alt="" /></div>
                    <div class="reviews__item wow zoomIn" data-wow-delay="0.4s"><img src="img/review.png" alt="" /></div>
                    <div class="reviews__item wow zoomIn" data-wow-delay="0.5s"><img src="img/review.png" alt="" /></div>
                    <div class="reviews__item wow zoomIn" data-wow-delay="0.2s"><img src="img/review.png" alt="" /></div>
                    <div class="reviews__item wow zoomIn" data-wow-delay="0.3s"><img src="img/review.png" alt="" /></div>
                    <div class="reviews__item wow zoomIn" data-wow-delay="0.4s"><img src="img/review.png" alt="" /></div>
                    <div class="reviews__item wow zoomIn" data-wow-delay="0.5s"><img src="img/review.png" alt="" /></div>
                    <div class="reviews__item wow zoomIn" data-wow-delay="0.2s"><img src="img/review.png" alt="" /></div>
                    <div class="reviews__item wow zoomIn" data-wow-delay="0.3s"><img src="img/review.png" alt="" /></div>
                    <div class="reviews__item wow zoomIn" data-wow-delay="0.4s"><img src="img/review.png" alt="" /></div>
                    <div class="reviews__item wow zoomIn" data-wow-delay="0.5s"><img src="img/review.png" alt="" /></div>
                </div>
            </div>
        </div>
    </section><!-- ================-->
    <!-- ВСТУПАЙТЕ В КЛУБ-->
    <!-- ================-->
    <section class="section none" id="club">
        <div class="container">
            <div class="presnt">
                <div class="presnt__img wow fadeInLeft" data-wow-delay="0.5s"><img src="img/4112.png" alt="" /></div>
                <div class="presnt__art">
                    <h2 class="article-title article-title_line wow fadeInUp" data-wow-delay="0.2s">А может в круиз?</h2>
                    <div class="art wow fadeInUp" data-wow-delay="0.4s">
                            Если Вам интересно 
                            <b>путешествовать по минимальным ценам напрямую от круизной компании</b> либо отправляться в бесплатные круизы и при этом ещё и зарабатывать, то предлагаем Вам протестировать нашу круизную букинг систему.</div>
                            <a class="button button_b wow fadeInUp" href="https://kulturatura_ru.incruises.com/" data-wow-delay="1.7s"><span>отзывы о круизах</span></a>
                    <p style="margin-top: 50px"><div class="scriptum wow fadeInUp" data-wow-delay="1.2s">Окунитесь в мир круизных путешествий, просмотрев наше видео-интерактив!</div>
                    <a class="button button_c wow fadeInUp" href="https://takeabreak.co/UBO6FR" data-wow-delay="1.7s"><span>смотреть видео</span></a></p>
                </div>
            </div>
        </div>
    </section><!-- ======-->
    <!-- ПАРТНЕРЫ-->
    <!-- ======-->
    <section class="section section_grey" id="partners">
        <div class="container">
            <h2 class="section-header wow fadeInUp" data-wow-delay="0.2s">Наши партнеры</h2>
            <div class="brands-container">
                <div class="slider-arrow slider-arrow-partners">
                    <div class="slider-arrow__item slider-arrow_prev"></div>
                    <div class="slider-arrow__item slider-arrow_next"></div>
                </div>
                <div class="brands">
                    <img src="img/partners/1.png" alt="" class="brands__item wow zoomIn" data-wow-delay="0.3s" />
                    <img src="img/partners/2.png" alt="" class="brands__item wow zoomIn" data-wow-delay="0.4s" />
                    <img src="img/partners/3.png" alt="" class="brands__item wow zoomIn" data-wow-delay="0.5s" />
                    <img src="img/partners/4.png" alt="" class="brands__item wow zoomIn" data-wow-delay="0.6s" />
                    <img src="img/partners/5.png" alt="" class="brands__item wow zoomIn" data-wow-delay="0.5s" />
                    <img src="img/partners/6.png" alt="" class="brands__item wow zoomIn" data-wow-delay="0.4s" />
                    <img src="img/partners/7.png" alt="" class="brands__item wow zoomIn" data-wow-delay="0.3s" />
                    <img src="img/partners/8.png" alt="" class="brands__item wow zoomIn" data-wow-delay="0.5s" />
                    <img src="img/partners/9.png" alt="" class="brands__item wow zoomIn" data-wow-delay="0.4s" />
                    <img src="img/partners/10.png" alt="" class="brands__item wow zoomIn" data-wow-delay="0.3s" />
                </div>
            </div>
        </div>
    </section><!-- ================-->
    <!-- ПОЧЕМУ ВЫ НЕ НАЙДЕТЕ ДЕШЕВЛЕ-->
    <!-- ================-->
    <section class="section" id="aboutus">
        <div class="container">
            <div class="presnt presnt_r2">
                <div class="presnt__img wow fadeInLeft" data-wow-delay="0.5s"><img src="img/324234.png" alt="" /></div>
                <div class="presnt__art">
                    <h2 class="article-title article-title_line wow fadeInUp" data-wow-delay="0.2s">Почему<br> вы не найдете дешевле?</h2>
                    <div class="pickout">
                        <div class="art wow fadeInUp" data-wow-delay="0.3s">Все турагентсва работают в системных базах туров туроператоров и не имеют возможности поднять установленную цену.</div>
                        <div class="art wow fadeInUp" data-wow-delay="0.4s">Поэтому вы можете потратить на поиски 3 дня, но закажете тур по той же цене.</div>
                    </div>
                    <div class="scriptum wow fadeInUp" data-wow-delay="0.5s">Зато мы сможем сравнить предложения <br>на рынке и выбрать для вас самое выгодное!</div>
                </div>
            </div>
        </div>
    </section><!-- ================-->
    <!-- С НАМИ ВЫ В БЕЗОПАСНОСТИ-->
    <!-- ================-->
    <section class="section section_grey">
        <div class="container">
            <div class="presnt presnt_rev">
                <div class="presnt__img wow fadeInRight" data-wow-delay="0.5s"><img src="img/4122.png" alt="" /></div>
                <div class="presnt__art">
                    <h2 class="article-title article-title_line wow fadeInUp" data-wow-delay="0.2s">С нами <br>вы в безопасности!</h2>
                    <div class="pickout">
                        <div class="art wow fadeInUp" data-wow-delay="0.3s">Вы заключаете договор с крупным туроператором - Anex Tour, Join Up, TezTour, TUI или другим.  Он несет полную ответственность за перелёт, медицинскую страховку и Ваше пребывание за границей.</div>
                    </div>
                    <div class="scriptum wow fadeInUp" data-wow-delay="0.4s">Наша задача - ответить на все ваши вопросы и организовать незабываемый отдых. Давайте так и сделаем!</div>
                </div>
            </div>
        </div>
    </section><!-- ================-->
    <!-- С НЕГО НАЧАТЬ-->
    <!-- ================-->
    <section class="section" id="order">
        <div class="container container_rel">
            <h2 class="section-header wow fadeInUp" data-wow-delay="0.2s">С чего начать?</h2>
            <div class="steps">
                <div class="steps__map"></div>
                <div class="steps__item wow zoomIn" data-wow-delay="0.3s">
                    <div class="steps__img"><img src="img/icons/map.svg" alt="" /></div>
                    <div class="steps__name">Заполните форму</div>
                    <div class="steps__comment">Мы перезвоним, чтобы уточнить детали и в течение дня подберем 3-5 вариантов</div>
                </div>
                <div class="steps__item wow zoomIn" data-wow-delay="0.4s">
                    <div class="steps__img"><img src="img/icons/map2.svg" alt="" /></div>
                    <div class="steps__name">Рассмотрите варианты</div>
                    <div class="steps__comment">Оцените предложенные туры и выберите лучший. Или свяжитесь для консультации</div>
                </div>
                <div class="steps__item wow zoomIn" data-wow-delay="0.5s">
                    <div class="steps__img"><img src="img/icons/map3.svg" alt="" /></div>
                    <div class="steps__name">Подпишите договор</div>
                    <div class="steps__comment">Вы закрепляете за собой места, а туроператор гарантирует вашу безопасность</div>
                </div>
                <div class="steps__item wow zoomIn" data-wow-delay="0.6s">
                    <div class="steps__img"><img src="img/icons/map4.svg" alt="" /></div>
                    <div class="steps__name">Внесите оплату</div>
                    <div class="steps__comment">Официально через банк или наличкой, как вам удобнее</div>
                </div>
                <div class="steps__item wow zoomIn" data-wow-delay="0.7s">
                    <div class="steps__img"><img src="img/icons/map5.svg" alt="" /></div>
                    <div class="steps__name">Получите документы</div>
                    <div class="steps__comment">Мы отправляем почтой билеты и все необходимые документы, дублируем в электронном виде</div>
                </div>
                <div class="steps__item wow zoomIn" data-wow-delay="0.8s">
                    <div class="steps__img"><img src="img/icons/map6.svg" alt="" /></div>
                    <div class="steps__name">Отправляйтесь на отдых!</div>
                    <div class="steps__comment">Все позади и остается только одно - расслабиться и наслаждаться отпуском</div>
                </div>
            </div>
        </div>
    </section><!-- =====-->
    <!-- ФОРМА-->
    <!-- =====-->
    <section class="section monitor none" id="hottours">
            <div class="container container_rel">
                <h2 class="section-header wow fadeInUp" data-wow-delay="0.2s">Любите горящие туры?</h2>
                <div class="advice">
                    <div class="art wow fadeInUp" data-wow-delay="0.5s">Посмотрите цены и бронируем для Вас прямо сейчас!</div> </div>       
    
    <style>
            /*==== Стилизация для модуля горящих туров с типом "плитки" ====*/
            
            /* Отступы для контейнера, содержащего все блоки */
            body .hot-block_tiles .hot-wrapper {
                margin-top: 0px; /*отступ сверху*/
                margin-left: 0px; /*отступ слева*/
                margin-bottom: 0px; /*отступ снизу*/
                margin-right: -10px !important; /*Внимание!!! должно совпадать с положительным margin-right в .hot-otp-form-wrap ниже*/
            }
            
            /* Отступы между блоками */
            body .hot-block_tiles .hot-otp-form-wrap {
                margin-top: 10px; /*отступ сверху*/
                margin-right: 10px; /*отступ справа. Внимание!!! должно совпадать с отрицательным значением margin-right в .hot-wrapper выше*/
            }
            
            /* Ширина основного блока */
            body .hot-block_tiles .hot-otp-img,
            body .hot-block_tiles .hot-otp-tour-block {
                width: 300px !important; /*(в пределах от 240 до 360 пикселей)*/
            }
            
            /* Градиент основного блока */
            body .hot-block_tiles .hot-otp-tour-block {
                background: -moz-linear-gradient(-10deg, rgba(32,32,32,0.75) 0%, rgba(32,32,32,0) 50%), -moz-linear-gradient(10deg, rgba(32,32,32,0.75) 0%, rgba(32,32,32,0) 50%);
                background: -webkit-linear-gradient(-10deg, rgba(32,32,32,0.75) 0%,rgba(32,32,32,0) 50%), -webkit-linear-gradient(10deg, rgba(32,32,32,0.75) 0%,rgba(32,32,32,0) 50%);
                background: linear-gradient(170deg, rgba(32,32,32,0.75) 0%,rgba(32,32,32,0) 50%), linear-gradient(10deg, rgba(32,32,32,0.75) 0%,rgba(32,32,32,0) 50%);
            }
            
            /* Скругление углов основного блока */
            body .hot-block_tiles .hot-otp-form-wrap {
                border-radius: 4px;
            }
            
            /* Плашка под нижний текст */
            body .hot-block_tiles .hot-otp-img:after {
                background: rgba(255,0,0,.7); /*фон плашки (цвет, градиент, картинка)*/
                height: 0; /*высота плашки, например: height: 73px;*/
            }
            
            /* Значение прозрачности фоновой картинки основного блока при наведении */
            body .hot-block_tiles .hot-otp-form-wrap:hover .hot-otp-img {
                opacity: .8;
            }
            
            /*=== Стилизация частей основного блока ===*/
            
            /*== 1. Заголовок блока (верхяя строка, большие буквы) ==*/
            body .hot-block_tiles .hot-otp-description {
                font-family: arial; /*семейство шрифта*/
                font-size: 18px; /*размер шрифта*/
                line-height: 21px; /*высота линии*/
                font-weight: bold; /*жирный шрифт, для обычного font-weight: normal;*/
                font-style: normal; /*без курсива, для курсива font-style: italic;*/
                color: #fff !important; /*цвет*/
                padding-top: 18px; /*отступ сверху*/
                padding-left: 20px; /*отступ слева*/
                padding-right: 20px;  /*отступ справа*/
            }
            /* При наведении мышки на основной блок */
            body .hot-block_tiles .hot-otp-tour-block:hover .hot-otp-description {
                text-decoration: none !important; /*подчеркивания нет, чтобы было text-decoration: underline*/
                color: #fff !important; /*цвет*/
            }
            
            /*== 2. Строка под заголовком (буквы поменьше) ==*/
            body .hot-block_tiles .hot-otp-place {
                font-family: arial; /*семейство шрифта*/
                font-size: 13px; /*размер шрифта*/
                line-height: 15px; /*высота линии*/
                font-weight: bold; /*жирный шрифт, для обычного font-weight: normal;*/
                font-style: normal !important; /*без курсива, для курсива font-style: italic*/
                color: #fff !important; /*цвет*/
                padding-top: 0; /*отступ сверху*/
                padding-left: 20px; /*отступ слева*/
                padding-right: 20px;  /*отступ справа*/
            }
            /* При наведении мышки на основной блок */
            body .hot-block_tiles .hot-otp-tour-block:hover .hot-otp-place {
                text-decoration: none !important; /*подчеркивания нет, чтобы было text-decoration: underline*/
                color: #fff !important; /*цвет*/
            }
            
            /*== 3. Строка с описанием тура в нижнем левом углу (курсив) ==*/
            body .hot-block_tiles .hot-otp-tour-info {
                font-family: arial; /*семейство шрифта*/
                font-size: 13px; /*размер шрифта*/
                line-height: 16px; /*высота линии*/
                font-weight: normal; /*обычный шрифт, для жирного font-weight: bold;*/
                font-style: italic; /*с курсивом, если без курсива font-style: normal;*/
                color: #fff; /*цвет*/
                left: 20px; /*отступ слева*/
                bottom: 13px; /*отступ снизу*/
                width: 130px; /*ширина блока*/
            }
            /* При наведении мышки на основной блок */
            body .hot-block_tiles .hot-otp-tour-block:hover .hot-otp-tour-info {
                text-decoration: none !important; /*подчеркивания нет, чтобы было text-decoration: underline*/
                color: #fff !important; /*цвет*/
            }
            
            /*== 4. Блок с ценой тура в нижнем правом углу (описание + цена) ==*/
            body .hot-block_tiles .hot-price-block {
                padding-right: 20px; /*отступ справа*/
                padding-bottom: 11px; /*отступ снизу*/
            }
            
            /*== 4.1. Блок с ценой тура в нижнем правом углу (описание) ==*/
            body .hot-block_tiles .hot-otp-price-count,
            body .hot-block_tiles .hot-otp-price-count nobr {
                font-family: arial; /*семейство шрифта*/
                font-size: 11px; /*размер шрифта*/
                line-height: 10px; /*высота линии*/
                font-weight: normal; /*обычный шрифт, для жирного font-weight: bold;*/
                font-style: normal; /*без курсива, для курсива font-style: italic;*/
                color: #fff !important; /*цвет*/
            }
            body .hot-block_tiles .hot-otp-price-count {
                width: 60px; /*ширина блока*/
            }
            /* При наведении мышки на основной блок */
            body .hot-block_tiles .hot-otp-tour-block:hover .hot-otp-price-count,
            body .hot-block_tiles .hot-otp-tour-block:hover .hot-otp-price-count nobr {
                text-decoration: none !important; /*подчеркивания нет, чтобы было text-decoration: underline*/
                color: #fff !important; /*цвет*/
            }
            
            /*== 4.2. Блок с ценой тура в нижнем правом углу (цена) ==*/
            body .hot-block_tiles .hot-otp-price a {
                font-family: arial; /*семейство шрифта*/
                font-size: 24px; /*размер шрифта*/
                line-height: 28px; /*высота линии*/
                font-weight: bold; /*жирный шрифт, для обычного font-weight: normal;*/
                font-style: normal; /*без курсива, для курсива font-style: italic;*/
                color: #fff !important; /*цвет*/
            }
            /* При наведении мышки на основной блок */
            body .hot-block_tiles .hot-otp-tour-block:hover .hot-otp-price a {
                text-decoration: none !important; /*подчеркивания нет, чтобы было text-decoration: underline*/
                color: #fff !important; /*цвет*/
            }
            
            </style><div class="hot-size-checker" id="otpusk_onsite_hot23571">
                <img src="https://export.otpusk.com/os/ajax-loader.gif"/><span></span>
            </div>
            <script>
            
                var osTarget23571 = "http://kulturatura.com.ua/search3.html"; /* URL расположения модуля поиска */
                var osLang = "ru"; /* язык интерфейса (ru|ua) */
                var osCurrency = "converted"; /* валюта в турах: original для гривны, converted для долларов или евро */
            
                (function (d, s) {
                    function delayedLoad23571() {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        js = d.createElement(s);
                        js.id = "OShotApi23571";
                        js.src = "https://export.otpusk.com/api/session?access_token=30e13-36d4b-b4987-fbb5c-b3cd5";
                        fjs.parentNode.insertBefore(js, fjs);
                        js.onload = function () {
                            js = d.createElement(s);
                            js.id = "OShotGetData23571";
                            js.src = "https://export.otpusk.com/js/view?id=23571";
                            fjs.parentNode.insertBefore(js, fjs);
                        };
                    }
                    if (window.addEventListener) {
                        window.addEventListener("load", delayedLoad23571, false);
                    } else if (window.attachEvent) {
                        window.attachEvent("onload", delayedLoad23571);
                    }
                }(document, "script"));
            </script>
            
        </div>   
    </section>
    
    <!-- ================-->
    <!-- СОВЕТ-->
    <!-- ================-->
    <section class="section">
        <div class="container container_rel">
            <h2 class="section-header wow fadeInUp" data-wow-delay="0.2s">Нужен совет?</h2>
            <div class="advice">
                <div class="scriptum wow fadeInUp" data-wow-delay="0.5s">Если в чем-то сомневаетесь - лучше спросите. <br>Мы всегда на связи и рады помочь.</div>
                <div class="mini-text wow fadeInUp" data-wow-delay="0.9s">Даже если вы где-то в джунглях Шри-Ланки:)</div>
                <div class="advice__act wow fadeInUp" data-wow-delay="1.2s"><a class="button button_c" href="" data-modal="modal-help"><span>Задать вопрос</span></a></div>
            </div>
            <div class="social">
                <div class="social__list wow fadeInUp" data-wow-delay="2s"><a href="https://invite.viber.com/?g2=AQANtnG0SliapEgtAcO6w8n9xOzsQ5m0p8HPf5Po91nAlX71ocAJpYeUf7i9Knxa"><img src="img/icons/viber.svg" alt="" /></a>
                    <a href="https://www.instagram.com/yuliya_kostevych/?igshid=bain706q2bkg"><img src="img/icons/instagram.svg" alt="" /></a></div>
                <div class="scriptum wow fadeInUp" data-wow-delay="2s">Хорошего отдыха!</div>
            </div>
        </div>
    </section><!-- ======-->
    <!-- FOOTER-->
    <!-- ======-->
    <footer class="footer">
        <div class="container">
            <div class="footer__content">
                <div class="footer__copy">© 2019. Название. Все права защищены <br>Разработка: tkachuk.pro</div>
                <div class="footer__contacts">
                    <div class="foot-contacts">
                        <div class="address foot-contacts__item"><img src="img/icons/map.png" alt="" /><span>г. Белая Церковь, ул. Весенняя, 16А
                                <br>График работы:  Пн-Сб 10.00-19.00
                                <br>Вс выходной</span></div>
                        <a class="foot-contacts__item" href="tel:+380678136003"><img src="img/icons/telephone.png" alt="" /><span>067 813 6003</span></a>
                       </div>
                </div>
            </div>
        </div>
    </footer>
    <link rel="stylesheet" href="css/jquery.fancybox.min.css" />
    <script src="js/main.js"></script>
</body>

</html>