<h2 class="item4">Политика использования фалов Cookie</h2>


<p>Cookies - это небольшие текстовые файлы, которые веб-сайты создают на компьютерах пользователей. Они используются для
    идентификации пользователей и улучшения качества использования веб-сайта. Cookies являются важной частью многих
    функций веб-сайтов.</p>

<p>Например, cookies позволяют онлайн магазинам запоминать, какие товары вы добавили в корзину. Также они сохраняют
    данные входа на сайт или предоставляют ценную статистику использования и информацию владельцам сайтов.</p>

<p>Если у вас есть веб-сайт, он почти наверняка использует cookies. Их главная функция - изучать количество и интересы
    пользователей через специальные инструменты, например Google Analytics. Также они могут использоваться для
    отображения объявлений, или – если у вас есть онлайн-магазин – быть ключевой частью системы электронной
    коммерции.</p>

<p>26 мая 2012 г. - ICO опубликовал акт о том, что "подразумеваемое согласие" не допускается и необходимо сообщать о
    политике приватности/cookie.</p>

<h4>Информация:</h4>

<p>Согласно Закону об использовании файлов Cookie, мы предлагаем добавить плагин <a href="//cookiecuttr.com/">cookiecuttr</a>,
    созданный <a href="//twitter.com/cdwharton">Крисом Уортоном</a> и распространяемый по лицензии GNU General
    Public License.</p>

<h4>Он выглядит следующим образом:</h4>

<p>Данный плагин используется для предупреждения посетителей веб-сайта об использовании файлов cookies. Он добавляет
    блок с информацией, который можно полностью модифицировать в файлах <strong>css</strong> и <strong>js</strong> :</p>

<figure class="img-polaroid">
    <img src="img/cookiecuttr.png" alt="">
</figure>

<h4>Как установить плагин</h4>

<p>Необходимо скачать файлы <a href="js/jquery.cookie.js" download>jquery.cookie.js</a>,
    <a href="js/jquery.cookiecuttr.js" download>jquery.cookiecuttr.js</a> и <a href="css/cookiecuttr.css" download>cookiecuttr.css</a>.
    Скопируйте их в папки <strong>js</strong> и <strong>css</strong> соответственно, добавьте скрипты плагина и ссылку
    на файл css в секции <strong>&lt;head&gt;</strong> <strong>html</strong> файла:</p>

<pre><code>
&lt;!-- cookiecuttr plugin --&gt;
    &lt;link rel="stylesheet" href="css/cookiecuttr.css"&gt;
    &lt;script src="js/jquery.cookie.js"&gt;&lt;/script&gt;
    &lt;script src="js/jquery.cookiecuttr.js"&gt;&lt;/script&gt;
&lt;!-- end cookiecuttr plugin --&gt;
    </code></pre>

<h4>Кастомизация плагина</h4>

<p>В данном плагине есть множество параметров и настроек, что позволяет модифицировать его как угодно.</p> <p>Вот
    примеры некоторых из них:</p>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>cookieCutter</dt>
            <dd>измените данную опцию на true, если не хотите, чтобы часть сайта была скрытой, например, вы используете
                систему комментариев, что вставляет cookies, тогда можно добавить название div снизу для замены на
                предупреждение о файлах cookie.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookieAnalytics</dt>
            <dd>если вы просто используете простой сайт, можно задать эту опцию как true, чтобы показывать простое
                стандартное сообщение без ссылки на страницу с изложенной политикой - true уже задано по умолчанию.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookieDeclineButton</dt>
            <dd>если нужно добавить кнопку отказа от использования файлов cookie в браузере, выставите опцию в true;
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookieAcceptButton</dt>
            <dd>задайте true, чтобы убрать кнопку согласия с использованием файлов cookie, по умолчанию false;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookieResetButton</dt>
            <dd>если нужна кнопка сброса, чтобы убрать согласие/отказ использования cookies, измените на true;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookieOverlayEnabled</dt>
            <dd>не хотите, чтобы панель отображалась упрощенно? при данной опций все сообщения будет показываться на
                100% в
                высоту;
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookiePolicyLink</dt>
            <dd>если нужно, введите ссылку на политику конфиденциальности - в том случае, когда cookieAnalytics стоит на
                false;
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookieMessage</dt>
            <dd>отредактируйте текст, отображаемый в панели cookie, используйте переменную {{cookiePolicyLink}}, чтобы
                вставить ссылку на страницу с изложенной политикой конфиденциальности;
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookieAnalyticsMessage</dt>
            <dd>отредактируйте текст стандартного сообщения;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookieWhatAreTheyLink</dt>
            <dd>задайте ссылку на страницу 'Что такое Cookies';</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookieErrorMessage</dt>
            <dd>напишите сообщение, которое будет отображаться вместо функционала;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookieNotificationLocationBottom</dt>
            <dd>по умолчанию выставлено в false, измените это на true и панель уведомления об использовании cookie будет
                отображаться внизу страницы; для мобильных и iOS устройств, а также в Internet Explorer 6 панель
                останется
                сверху;
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookieDisable</dt>
            <dd>перечислите элементы, которые хотите убрать (через запятую). Опция сработает, только если cookieCutter
                выставлен в true;
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookieAcceptButtonText</dt>
            <dd>можно изменить текст зеленной кнопки принятия;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookieDeclineButtonText</dt>
            <dd>можно изменить текст красной кнопки отказа;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookieResetButtonText</dt>
            <dd>можно изменить текст оранжевой кнопки сброса;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookieWhatAreLinkText</dt>
            <dd>можно отредактировать текст ссылки "Что такое Cookies" в сообщении Google Analytics;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookiePolicyPage</dt>
            <dd>измените на true, чтобы отображать необходимое сообщение на странице политики конфиденциальности или
                cookie;
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookiePolicyPageMessage</dt>
            <dd>напишите сообщение, которое будет показано на странице политики конфиденциальности;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookieDiscreetLink</dt>
            <dd>по умолчанию false, измените на true, чтобы включить данную опцию;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookieDiscreetLinkText</dt>
            <dd>задайте текст для упрощенной панели;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookieDiscreetPosition</dt>
            <dd>по умолчанию имеет значение topleft, можно поставить topright, bottomleft, bottomright;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookieDomain</dt>
            <dd>по умолчанию не задана, добавьте доменное имя без www. или https:// или http://, чтобы избавиться от
                Google
                Analytics cookies;
            </dd>
        </dl>
    </li>
</ul>

<p class="alert alert-info">Более детальную информацию и инструкции по кастомизации и использованию плагина можно найти
    на официальном сайте
    <a href="//cookiecuttr.com/">cookiecuttr</a>.</p>