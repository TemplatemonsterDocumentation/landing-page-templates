<h3>Olark Livechat</h3>

<p>Для настройки такого онлайн чата, как на Live Demo необходимо пройти регистрацию на официальном сайте
    <a href="//special.olark.com/cDqdW">Olark.</a></p>

<p> Заполнив все данные вам будет предоставлен код, который нужно вставить в код шаблона перед закрывающимся тегом <b>&lt;/body&gt;</b></p>

<p>Код будет весьма объемным, поэтому не пугайтесь. Следующего вида:</p>

<code>
    &lt;!-- begin olark code --&gt;
    &lt;script data-cfasync="false" type='text/javascript'&gt;/*&lt;![CDATA[*/
        window.olark || (function (c) {
            var f = window, d = document, l = f.location.protocol == "https:" ? "https:" : "http:", z = c.name, r = "load";
            var nt = function () {
                f[z] = function () {
                    (a.s = a.s || []).push(arguments)
                };
                var a = f[z]._ = {}, q = c.methods.length;
                while (q--) {
                    (function (n) {
                        f[z][n] = function () {
                            f[z]("call", n, arguments)
                        }
                    })(c.methods[q])
                }
                a.l = c.loader;
                a.i = nt;
                a.p = {
                    0: +new Date
                };
                a.P = function (u) {
                    a.p[u] = new Date - a.p[0]
                };
                function s() {
                    a.P(r);
                    f[z](r)
                }

                f.addEventListener ? f.addEventListener(r, s, false) : f.attachEvent("on" + r, s);
                var ld = function () {
                    function p(hd) {
                        hd = "head";
                        return ["&lt;", hd, "&gt;&lt;/", hd, "&gt;&lt;", i, ' onl' + 'oad="var d=', g, ";d.getElementsByTagName('head')[0].", j, "(d.", h, "('script')).", k, "='", l, "//", a.l, "'", '"', "&gt;&lt;/", i, "&gt;"].join("")
                    }

                    var i = "body", m = d[i];
                    if (!m) {
                        return setTimeout(ld, 100)
                    }
                    a.P(1);
                    var j = "appendChild", h = "createElement", k = "src", n = d[h]("div"), v = n[j](d[h](z)), b = d[h]("iframe"), g = "document", e = "domain", o;
                    n.style.display = "none";
                    m.insertBefore(n, m.firstChild).id = z;
                    b.frameBorder = "0";
                    b.id = z + "-loader";
                    if (/MSIE[ ]+6/.test(navigator.userAgent)) {
                        b.src = "javascript:false"
                    }
                    b.allowTransparency = "true";
                    v[j](b);
                    try {
                        b.contentWindow[g].open()
                    } catch (w) {
                        c[e] = d[e];
                        o = "javascript:var d=" + g + ".open();d.domain='" + d.domain + "';";
                        b[k] = o + "void(0);"
                    }
                    try {
                        var t = b.contentWindow[g];
                        t.write(p());
                        t.close()
                    } catch (x) {
                        b[k] = o + 'd.write("' + p().replace(/"/g, String.fromCharCode(92) + '"') + '");d.close();'
                    }
                    a.P(2)
                };
                ld()
            };
            nt()
        })({
            loader: "static.olark.com/jsclient/loader0.js",
            name: "olark",
            methods: ["configure", "extend", "declare", "identify"]
        });
        /* custom configuration goes here (www.olark.com/documentation) */
        olark.identify('xxxx-xxx-xx-xxxx');
        /*]]&gt;*/&lt;/script&gt;
&lt;noscript&gt;&lt;a href="https://www.olark.com/site/'xxxx-xxx-xx-xxxx/contact" title="Contact us" target="_blank"&gt;Questions?
            Feedback?&lt;/a&gt; powered by &lt;a href="http://www.olark.com?welcome" title="Olark live chat software"&gt;Olark live
            chat software&lt;/a&gt;&lt;/noscript&gt;
    &lt;!-- end olark code --&gt;
</code>

