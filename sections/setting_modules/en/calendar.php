<h3>RD Calendar</h3>

<p class="alert alert-info">Calendar is an optional element, so it is included in the template package only in case it was pre-designed within .PSD layout.</p>

<figure class="img-polaroid">
    <img src="img/calendar.jpg" alt="">
</figure>

<p>To add custom events to site calendar please specify list of appropriate events in calendar HTML markup, in a block
    with
    <b>.rdc-events</b> class. For example,</p>

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

<p>where </p>

<code>&lt;li class="rdc-event" data-date="6/3/2015"&gt;&lt;/li&gt;</code>

<p>represents every separate event. Event date is set within <b>data-date</b> attribute as
    <b>MM/DD/YYYY</b>.</p>