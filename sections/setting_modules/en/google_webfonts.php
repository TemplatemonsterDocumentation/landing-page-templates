<h3>Google webfonts</h3>

<p>Most templates use non-standard fonts. By default, browser can only use fonts, installed to operating system.</p>

<p>In other words, in case site design involves the use of custom fonts, not installed to computer, these fonts won't be
    displayed at site visitors side. Instead there will be standard fonts displayed. </p>

<p> That is the reason web developers search for an alternative solution. Our templates custom fonts are added by using
    the most popular technology &#8212;
    <b>Google Web Fonts.</b></p>

<p class="alert alert-info ">Google fonts initialization procedure is described in details at official documentation:
    <a href="//developers.google.com/fonts/docs/getting_started">https://developers.google.com/fonts/docs/getting_started.</a>
</p>

<p class="alert alert-info">Feel free to check a detailed tutorial on using Google Web Fonts:
    <a href="/help/how-to-use-the-google-web-fonts-api.html">How to work with Google web
        Fonts.</a></p>

<h4>In case Google Fonts loading fails:</h4>

<ol class="index-list">
    <li>Open 'site\index.html' or 'site\css\style.css' file</li>
    <li><p>Locate this line:</p><code>//fonts.googleapis.com/css?family=[---your_web_font_name_here---]</code></li>
    <li><p>And change it to the following one:</p>
        <code>//fonts.useso.com/css?family=[---your_web_font_name_here---]</code></li>
</ol>

<h4>Using additional Google Fonts characters sets</h4>

<p>If your website content is not written in English, but in other language containing non-latin symbols, you might need
    to expand character set. In order to add new charset to initial Google Fonts one, follow these steps
    at <a href="//www.google.com/fonts/">Google Fonts</a> service page:</p>

<ol class="index-list">
    <li>Select your font (i.e., Open Sans) by pressing on Add to Collection button</li>
    <li>Press on Use button in the appearing panel. Fonts setting page will open.</li>
    <li>On this page at step “2. Choose the character sets you want:” choose the required encodings for your font.</li>
    <li>Select “@import” tab on step 3</li>
    <li>Copy this tab content</li>
    <li>Insert the copied content instead of previous font version initialization line into style.css file.</li>
</ol>













