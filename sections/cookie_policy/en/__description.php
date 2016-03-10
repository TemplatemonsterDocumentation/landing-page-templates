<h2 class="item4">Cookie Policy</h2>

<p>Cookies are small text files which websites place on visitors’ computers. They’re typically used to identify that
    particular visitor and provide them with a better experience. Cookies are a crucial part of many website functions
    which we take for granted.</p>

<p>For instance, it’s usually cookies which allow online shops to remember what items you have in your shopping cart.
    They’re also used to keep you logged in to a website, or to provide valuable usage statistics and information to
    website owners.</p>

<p>If you run a website, it almost certainly uses cookies. Their most likely function is to monitor visitor numbers and
    behaviours through tools like Google Analytics. They may also be used to display relevant adverts to visitors, or –
    if you sell online – to power key parts of your online shopping system.</p>

<p>26th May 2012 - The ICO released a change to the enforcement, "implied consent" is now allowed as long as you make it
    clear where your privacy/cookie policy is.</p>

<h4>Box info:</h4>

<p>Following the Cookie Law conditions, we suggest that you add the plugin <a href="//cookiecuttr.com/">cookiecuttr</a>
    created by <a href="//twitter.com/cdwharton">Chris Wharton</a> and provided under the GNU General Public
    License.</p>
<h4>This is how it looks like:</h4>

<p>This plugin is used to warn the visitors of your website about cookies usage. The plugin will add the information
    panel/box which can be fully customized via <strong>css</strong> and <strong>js</strong> files:</p>

<figure class="img-polaroid">
    <img src="img/cookiecuttr.png" alt="">
</figure>

<h4>How to implement the plugin</h4>

<p>You need to download the <a href="js/jquery.cookie.js" download>jquery.cookie.js</a>,
    <a href="js/jquery.cookiecuttr.js" download>jquery.cookiecuttr.js</a> and <a href="css/cookiecuttr.css" download>cookiecuttr.css</a>
    file. Copy them into the <strong>js</strong> and <strong>css</strong> folders respectively, include plugin scripts
    and css file reference in the <strong>&lt;head&gt;</strong> section of <strong>html</strong> file:</p>

<pre><code>
&lt;!-- cookiecuttr plugin --&gt;
    &lt;link rel="stylesheet" href="css/cookiecuttr.css"&gt;
    &lt;script src="js/jquery.cookie.js"&gt;&lt;/script&gt;
    &lt;script src="js/jquery.cookiecuttr.js"&gt;&lt;/script&gt;
&lt;!-- end cookiecuttr plugin --&gt;
    </code></pre>


<h4>Plugin customization</h4>

<p>The plugin has a lot of parameters and options. This allows you to customize it according to you needs and
    wishes.</p>

<p>Here are just a few of them:</p>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>cookieCutter</dt>
            <dd>if you’d like to actively hide parts of your website set this to true, for example say you use a
                comments
                system that inserts cookies, you can put the div name in below to replace it with a cookie warning
                message.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookieAnalytics</dt>
            <dd>if you are just using a simple analytics package you can set this to true, it displays a simple default
                message with no privacy policy link - this is set to true by default.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookieDeclineButton</dt>
            <dd>if you’d like a decline button to (ironically) write a cookie into the browser then set this to true.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookieAcceptButton</dt>
            <dd>set this to true to hide the accept button, it is set to false by default</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookieResetButton</dt>
            <dd>if you’d like a reset button to delete the accept or decline cookies then set this to true.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookieOverlayEnabled</dt>
            <dd>don't want a discreet toolbar? this makes the whole message into a 100% height</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookiePolicyLink</dt>
            <dd>if applicable, enter the link to your privacy policy in here - this is as soon as cookieAnalytics is set
                to
                false;
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookieMessage</dt>
            <dd>edit the message you want to appear in the cookie bar, remember to keep the {{cookiePolicyLink}}
                variable
                intact so it inserts your privacy policy link.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookieAnalyticsMessage</dt>
            <dd>edit the message you want to appear, this is the default message.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookieWhatAreTheyLink</dt>
            <dd>edit the link for the 'What are Cookies' link.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookieErrorMessage</dt>
            <dd>edit the message you’d like to appear in place of the functionality</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookieNotificationLocationBottom</dt>
            <dd>this is false by default, change it to true and the cookie notification bar will show at the bottom of
                the
                page instead, please note this will remain at the top for mobile and iOS devices and Internet Explorer
                6.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookieDisable</dt>
            <dd>list comma separated elements that you want to disable, this will only work if cookieCutter is set to true.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookieAcceptButtonText</dt>
            <dd>you can change the text of the green accept button.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookieDeclineButtonText</dt>
            <dd>you can change the text of the red decline button.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookieResetButtonText</dt>
            <dd>you can change the text of the orange reset button.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookieWhatAreLinkText</dt>
            <dd>you can change the text of the "What are Cookies" link shown on Google Analytics message.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookiePolicyPage</dt>
            <dd>set this to true to display the message you want to appear on your privacy or cookie policy page.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookiePolicyPageMessage</dt>
            <dd>edit the message you want to appear on your policy page.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookieDiscreetLink</dt>
            <dd>false by default, set to true to enable.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookieDiscreetLinkText</dt>
            <dd>edit the text you want to appear on the discreet option.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookieDiscreetPosition</dt>
            <dd>set to topleft by default, you can also set topright, bottomleft, bottomright.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>cookieDomain</dt>
            <dd>empty by default, add your domain name in here without www. or https:// or http:// to remove Google
                Analytics cookies on decline.
            </dd>
        </dl>
    </li>
</ul>

<p class="alert alert-info">You can find more detailed information and instructions on plugin customization and usage at
    the official
    <a href="s//cookiecuttr.com/">cookiecuttr</a> website.</p>