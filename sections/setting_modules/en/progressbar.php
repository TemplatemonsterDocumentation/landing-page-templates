<h3>Digital progressbars</h3>

<p class="alert alert-info">The following script is an optional element, so it is included to template package only in
    case it was pre-designed within .PSD layout.</p>

<figure class="img-polaroid">
    <img src="img/rprogressbar.jpg" alt="">
</figure>

<p>In order to define radial progressbar filling percent specify the required value at a target element:</p>

<pre><code>
&lt;div class="radial-progress" data-border="15" data-border-bg="#80d2e0"
    data-border-fg="#1daec8"&gt;
    75%
&lt;/div&gt;
    </code></pre>

<p>Where</p>
<dl class="inline-term">
    <dt>75%</dt>
    <dd>target progress bar fill level.</dd>
</dl>

<p>In order to change horizontal progress bar filling percent specify the required value at a target element in style
    attribute, by using
    <b>width: Xpx</b> parameter.</p>

<p>Where</p>
<dl class="inline-term">
    <dt>X</dt>
    <dd> target value for progress bar.</dd>
</dl>

<p>For example,</p>

<pre><code>
&lt;div class=”horizontal-progress”&gt;
    &lt;div class=”horizontal-progress-value” style=”width: 80%”&gt;&lt;/div&gt;
&lt;/div&gt;
    </code></pre>

<figure class="img-polaroid">
    <img src="img/hprogressbars.jpg" alt="">
</figure>