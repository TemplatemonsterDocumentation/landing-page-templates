<h3>Countdown timer (“under construction” page)</h3>

<p class="alert alert-info">Countdown timer is an optional element, so it is included in the template package only in case it was pre-designed within .PSD layout.</p>

<figure class="img-polaroid">
    <img src="img/countdown.gif" alt="">
</figure>

<p>In order to set-up custom countdown timer, edit <b>/js/script.js</b> file in the following section:</p>

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

<p><b>countTo</b> variable has to include target date:</p>

<code>countTo = new Date(year, month + 1, day);</code>

<p>For example, project starts on 12 May 2020. In this case proper code line will look as follows:</p>

<code>countTo = new Date(2020, 6, 12);</code>

<p>Full code example is:</p>

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