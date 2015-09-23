<h3>Background video</h3>

<p>We use jQuery-plugin <a href="//vodkabears.github.io/vide/">Vide.</a> for implementation background video to our
    templates. </p>

<p>Video is added to section background by using special script.</p>

<p> Different browsers support different video formats, therefore to ensure cross-browser functionality, please, perform
    the following:</p>

<ol class="index-list">
    <li>Convert your video file into 3 formats: <b>*.mp4</b>, <b>*.ogv</b>, <b>*.webm</b> (file names have to match);
    </li>

    <li>Prepare an image to display it in browsers, that do not support background video, including mobile devices;</li>

    <li>
        <p>In the appropriate block with <b>.vide</b> class specify path to previously created files in data attribute
            <b>data-vide-bg</b> Please, do not specify files extension.</p>

        <p>Example:</p>

        <code>&lt;div class="vide" data-vide-bg="video/video-bg"&gt; Your content &lt;/div&gt;</code>
    </li>
</ol>

<p class="alert alert-danger">Warning. Due to Apple and other mobile platforms policy background video will not appear
    at mobile devices!</p>