<h3>RD Calendar</h3>

<p class="alert alert-info">Календарь - необязательный скрипт. Присутствует только в случае наличия оного на .PSD макете.</p>

<figure class="img-polaroid">
    <img src="img/calendar.jpg" alt="">
</figure>

<p>Для добавления пользовательских событий в календарь необходимо в разметке календаря в блоке с классом
    <b>.rdc-events</b> указать список соответствующих событий. Например,</p>

<pre><code>
&lt;div class="rd-calendar"&gt;
    .......
    &lt;div class="rdc-events"&gt;
        …...
        &lt;ul&gt;
            &lt;li class="rdc-event" data-date="6/3/2015"&gt;
                My Event 1
            &lt;/li&gt;
            &lt;li class="rdc-event" data-date="6/8/2015"&gt;
                My Event 2
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
&lt;/div&gt;
    </code></pre>

<p>где,</p>

<code>&lt;li class="rdc-event" data-date="6/3/2015"&gt;&lt;/li&gt;</code>

<p>представляет собой каждое отдельное событие. Дата события, при этом, задается в атрибуте <b>data-date</b> в формате
    <b>MM/DD/YYYY</b>.</p>