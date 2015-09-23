<h3>RD Mailform</h3>

<p>Is a multipurpose form. Script allows to use form in three modes: Contact form, Newsletter form and Ordering
    form.</p>

<figure class="img-polaroid">
    <img src="img/mailform.jpg" alt="">
</figure>

<p>Template forms are already set to correct mode. You just need to specify site owner e-mail address, that will receive
    the results of site visitors form filling.</p>

<p>При необходимости можно указать несколько адресов. Для этого вам If necessary, you can specify several addresses. In
    order to do this, please perform the following:</p>


<ol class="index-list">
    <li>Open <b>bat/rd-mailform.php.</b></li>
    <li>Locate <b>$recipients</b> variable using search tool <b>(Ctrl + F)</b></li>
    <li>
        <p>Insert your e-mail address e-mail after <b>“=”</b> sign:</p>

        <code>$recipients = “test@gmail.com” &#8212; for single address</code>

        <p></p>

        <code>$recipients = “test@demolink.com test2@demolink.com” &#8212; for few e-mail addresses.</code>
    </li>
</ol>

<h4>Form operating mode change:</h4>

<p>If you need to change form operating mode, open *.html page, and edit form code by adding field right after opening &lt;form&gt;, tag</p>

<code>&lt;input type=”hidden” name=”form-type” value=”YOUR_FORM”&gt;</code>


<p>Use respectable form operating mode here instead of YOUR_FORM:</p>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>contact</dt>
            <dd>for contact form;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>subscribe</dt>
            <dd>for subscription;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>order</dt>
            <dd>for ordering.</dd>
        </dl>
    </li>
</ul>

<p>For example, to use contact form this HTML code is needed:</p>

<code>&lt;input type=”hidden” name=”form-type” value=”contact”/&gt;</code>

<h4>Setting e-mails sending via SMTP-server:</h4>

<p>SMTP server setting does not relate to form setting at all.</p>

<p>In order to send your site messages via SMTP-server you'll need to refer to official PhpMailer (library, used in
    form) documentation or check this tutorial from official documentation
    <a href="//phpmailer.worxware.com/?pg=examplebsmtp">http://phpmailer.worxware.com/?pg=examplebsmtp.</a></p>

<p class="alert alert-warning">Attention! Mail function does not work locally. It becomes active at hosting servers
    only, with PHP enabled.</p>