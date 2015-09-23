<h3>Слайдер</h3>

<p>В наших шаблонах используется Camera Slider. Вам может понадобиться замена картинки слайда и описания к ней.</p>

<figure class="img-polaroid">
    <img src="img/slider.jpg" alt="">
</figure>

<p>Для того, чтобы добавить новый слайд в слайдер необходимо в HTML разметке слайдера соответствующего .html файла указать следующую конструкцию:</p>

<pre><code>
&lt;div data-src="images/page-1_slide02.jpg"&gt;
    &lt;div class="camera_caption fadeIn"&gt;
        Slide content 2
    &lt;/div&gt;
&lt;/div&gt;
    </code></pre>

<p>В результате получим такой код (при условии, что у нас уже был 1 слайд):</p>

<pre><code>
&lt;div class="camera_container"&gt;
    &lt;div id="camera" class="camera_wrap"&gt;
        &lt;div data-src="images/page-1_slide01.jpg"&gt;
            &lt;div class="camera_caption fadeIn"&gt;
                Slide content 1
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div data-src="images/page-1_slide02.jpg"&gt;
            &lt;div class="camera_caption fadeIn"&gt;
                Slide content 2
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

</code></pre>

<p>Где</p>  <code>&lt;div data-src="images/page-1_slide01.jpg"&gt; …
    &lt;/div&gt;</code> <p>представляет собой каждый отдельный слайд. Путь к фоновому изображению слайда, при этом,
    задается в атрибуте <b>data-src</b>, а сам контент слайда внутри блока</p>
<code>&lt;div class="camera_caption fadeIn"&gt; &lt;/div&gt;</code>

<p>Для того, чтобы включить/выключить автопроигрывание слайдов в слайдере необходимо в файле инициализации скриптов script.js в коде инициализации скрипта:</p>

<pre><code>
/* Camera
========================================================*/
;(function ($) {
var o = $('#camera');
    if (o.length > 0) {
        if (!(isIE() && (isIE() > 9))) {
            include('js/jquery.mobile.customized.min.js');
        }

        include('js/camera.js');

        $(document).ready(function () {
            o.camera({
                autoAdvance: true,
                height: '40.9375%',
                minHeight: '300px',
                pagination: false,
                thumbnails: false,
                playPause: false,
                hover: false,
                loader: 'none',
                navigation: true,
                navigationHover: false,
                mobileNavHover: false,
                fx: 'simpleFade'
            })
        });
    }
})(jQuery);
    </code></pre>

<p>установить соответствующий флаг для опции <b>autoAdvance</b>. Например,</p>

<dl class="inline-term">
    <dt>autoAdvance: true,</dt>
<dd>для включения автопроигрывания слайдов</dd></dl>

<dl class="inline-term">
    <dt>autoAdvance: false,</dt>
<dd>для выключения автопроигрывания слайдов</dd></dl>