<h3>Цифровые прогрессбары</h3>

<p class="alert alert-info">Данный скрипт - необязательный. Присутствует только в случае наличия оного на .PSD
    макете.</p>

<figure class="img-polaroid">
    <img src="img/rprogressbar.jpg" alt="">
</figure>

<p>Для измения процента заполнености радиального прогресс бара необходимо в целевом элементе указать необходимое
    значение:</p>

<pre><code>
&lt;div class="radial-progress" data-border="15" data-border-bg="#80d2e0"
    data-border-fg="#1daec8"&gt;
    75%
&lt;/div&gt;
    </code></pre>

<p>Где, </p>
<dl class="inline-term">
    <dt>75%</dt>
    <dd>целевое значение для прогресс бара.</dd>
</dl>

<p>Для изменения процента заполнености горизонтального прогесс бара необходимо в целевом элементе указать необходимое
    значение в атрибуте style, с помощью свойства <b>width: Xpx.</b></p>

<p>Где, </p>
<dl class="inline-term">
    <dt>X</dt>
    <dd> целевое значение для прогресс бара.</dd>
</dl>

<p>Например,</p>

<pre><code>
&lt;div class=”horizontal-progress”&gt;
    &lt;div class=”horizontal-progress-value” style=”width: 80%”&gt;&lt;/div&gt;
&lt;/div&gt;
    </code></pre>

<figure class="img-polaroid">
    <img src="img/hprogressbars.jpg" alt="">
</figure>