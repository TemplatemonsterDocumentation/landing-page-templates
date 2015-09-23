<h3>Таймер обратного отсчёта (страница “сайт в разработке”)</h3>

<p class="alert alert-info">Таймер обратного отсчёта - необязательный скрипт. Присутствует только в случае наличия оного на .PSD макете.</p>

<figure class="img-polaroid">
    <img src="img/countdown.gif" alt="">
</figure>

<p>Для того чтобы указать пользователький таймер обратного отсчёта необходимо в файле <b>/js/script.js</b> в секции </p>

<pre><code>
/* Countdown
========================================================*/
;
(function ($) {
    var o = $('.countdown');
    if (o.length > 0) {
        include('js/jquery.plugin.js');
        include('js/jquery.countdown.js');

        $(document).ready(function () {
            var date = new Date(),
                countTo = new Date(date.getFullYear(), date.getMonth() + 2, date.getDay());
            $(o).countdown({until: countTo, padZeroes: true});
        });
    }
})(jQuery);
    </code></pre>

<p>в переменной <b>countTo</b>  указать целевую дату в формате </p>

<code>countTo = new Date(year, month + 1, day);</code>

<p>Например, запуск продукта стартует 12 мая 2020 года. Тогда данная строка будет выглядеть следующим образом:</p>

<code>countTo = new Date(2020, 6, 12);</code>

<p>Полный пример в данном случае будет выглядеть следующим образом:</p>

<pre><code>
/* Countdown
========================================================*/
;
(function ($) {
    var o = $('.countdown');
    if (o.length > 0) {
        include('js/jquery.plugin.js');
        include('js/jquery.countdown.js');

        $(document).ready(function () {
            var date = new Date(),
                countTo = new Date(2020, 6, 12);

            $(o).countdown({until: countTo, padZeroes: true});
        });
    }
})(jQuery);
    </code></pre>