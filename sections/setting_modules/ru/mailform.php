<h3>RD Mailform</h3>

<p>Универсальная форма. Скрипт поодерживает три режима работы: Контакная форма, Форма подписки и Форма заказа.</p>

<figure class="img-polaroid">
    <img src="img/mailform.jpg" alt="">
</figure>

<p>В шаблоне все формы сразу настроены под нужный тип. Вам необходимо только указать e-mail адрес владельца сайта, на
    который будут отправляться результаты заполнения формы посетителем сайта.</p>

<p>При необходимости можно указать несколько адресов. Для этого вам нужно:</p>


<ol class="index-list">
    <li>Открыть файл <b>bat/rd-mailform.php.</b></li>
    <li>Используя поиск <b>(Ctrl + F)</b> найти переменную <b>$recipients</b></li>
    <li>
        <p>Вставить ваш e-mail адерес после знака <b>“=”</b>:</p>

        <code>$recipients = “test@gmail.com” &#8212; для одного адреса</code>

        <p></p>

        <code>$recipients = “test@demolink.com test2@demolink.com” &#8212; для двух и более.</code>
    </li>
</ol>

<h4>Изменение режима работы формы:</h4>

<p>Если появилась необходимость сменить режим работы формы на целевой *.html странице сразу после открывающего тега &lt;form&gt;,
    добавить поле</p>

<code>&lt;input type=”hidden” name=”form-type” value=”YOUR_FORM”&gt;</code>

<p> с соответствующим типом формы YOUR_FORM:</p>


<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>contact</dt>
            <dd>для контактной формы;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>subscribe</dt>
            <dd>для формы подписки;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>order</dt>
            <dd>для формы заказа.</dd>
        </dl>
    </li>
</ul>

<p>Например, для определения котактной формы необходимо в коде формы указать следующую разметку:</p>

<code>&lt;input type=”hidden” name=”form-type” value=”contact”/&gt;</code>

<h4>Настройка отправки через SMTP:</h4>

<p>Настройка SMTP сервера никоим образом не относится к настройке нашей формы.</p>

<p>Для отправки почты с помощью SMTP сервера вам необходимо обратиться к оффициальной документации PhpMailer
    (библиотеки, которую мы используем) или воспользоваться туториалом из оффиальной документации
    <a href="//phpmailer.worxware.com/?pg=examplebsmtp">http://phpmailer.worxware.com/?pg=examplebsmtp.</a></p>

<p class="alert alert-warning">Внимание! Функция RD Mailform не работает локально. Она работает только на хостинг-сервере с
    включенным PHP.</p>