<h3>RD Parallax</h3>

<figure class="img-polaroid">
    <img src="img/parallax.gif" alt="">
</figure>

<p>Для внедрения секции с параллакс эффектом в любую часть вашего проекта необходимо в целевом участке страницы
    определить следующую разметку:</p>

<code>&lt;section class="parallax" data-url="images/parallax1.jpg" data-mobile="true"&gt; &lt;/section&gt;</code>

<p>Где,</p>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>data-url</dt>
            <dd>Путь к целевому фоновому изображению,</dd>
        </dl></li>
    <li>
        <dl class="inline-term">
            <dt>data-mobile</dt>
            <dd>True (Для отображения параллакс эффекта на мобильных устройствах) / False (Для отображения статического
                изображения на мобильных устройствах)
            </dd>
        </dl></li>
</ul>

<p class="alert alert-info">Для наблюдения эффекта высота картинки должна быть больше, чем высота секции, к которой
    применяется параллакс.</p>