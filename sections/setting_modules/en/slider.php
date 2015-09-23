<h3>Слайдер</h3>

<p>Our templates use Camera Slider jQuery-plugin. You might need to change slider images and description.</p>

<figure class="img-polaroid">
    <img src="img/slider.jpg" alt="">
</figure>

<p>To create new slide in slider you should insert the following code HTML in slider markup at the appropriate .html
    file:</p>

<pre><code>
&lt;div data-src="images/page-1_slide02.jpg"&gt;
    &lt;div class="camera_caption fadeIn"&gt;
        Slide content 2
    &lt;/div&gt;
&lt;/div&gt;
    </code></pre>

<p>As a result you'll get code as follows (let's say there was 1 slide included already):</p>

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

<p>Here every </p>  <code>&lt;div data-src="images/page-1_slide01.jpg"&gt; …
    &lt;/div&gt;</code> <p> part represents separate slide. Path to slide background image is set with <b>data-src</b>
    attribute, and slide content is inserted inside of </p>
<code>&lt;div class="camera_caption fadeIn"&gt; &lt;/div&gt;</code>

<p>In order to enable/disable slider autoplay you should locate script initialization code in script.js file:</p>

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

<p>and specify required value for <b>autoAdvance</b> option. Like,</p>

<dl class="inline-term">
    <dt>autoAdvance: true,</dt>
    <dd>to enable autoplay</dd>
</dl>

<dl class="inline-term">
    <dt>autoAdvance: false,</dt>
    <dd>to disable autoplay</dd>
</dl>