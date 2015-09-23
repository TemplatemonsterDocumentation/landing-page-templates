<h3>RD Google Map</h3>

<p>Template uses plugin for Google Map inserting - RD Google Map.</p>

<p>Plugin settings allow you:</p>

<ul class="marked-list">
    <li>To change map coordinates;</li>
    <li>To add custom markers to map;</li>
    <li>To add pop-up windows to your markers;</li>
</ul>

<figure class="img-polaroid">
    <img src="img/gmap.jpg" alt="">
</figure>

<h4>Map coordinates change</h4>

<p>To replace map coordinates with your ones you need to edit <b>.html</b> file in block.</p>

<code>&lt;div id=”google-map” class=”map_model”&gt;&lt;/div&gt;</code>

<p>Specify two data attributes here: <b>data-x</b> (north latitude) and <b>data-y</b> (west longitude). As a result you'll have this line of code:</p>

<code>&lt;div id=”google-map” class=”map_model” data-x="-73.9994068" data-y="40.643180"&gt;&lt;/div&gt;</code>

<p>Coordinates can be received by using  <a href="//maps.google.com/">Google Maps</a> service . Press on right mouse button at target map place and select “What's here?”. In the appearing modal window necessary coordinates will be displayed under location name. First number stands for data-x, second one for data-y.</p>

<p class="alert alert-info">In case you do not specify custom coordinates, default ones will be used instead.</p>

<p class="alert alert-danger">Please also pay your attention, a common mistake is to change coordinates order so that map shows improper location from another hemisphere.</p>

<h4>Adding custom markers to map</h4>

<p>In order to add custom maker to map, please edit <b>.html</b> file by adding new </p>

<code>&lt;ul class=”map_locations”&gt;&lt;/ul&gt;</code>

<p>element to</p>

<code>&lt;li&gt;&lt;/li&gt;</code>

<p> list and specify its data attributes: <b>data-x</b> (north latitude) and <b>data-y</b> (west longitude). As a result you'll get line of code as follows:</p>

<code>
    &lt;li data-x="-73.9994068" data-y="40.643180"&gt;&lt;/li&gt;
</code>

<p class="alert alert-warning">In case you do not specify custom coordinates, plugin script will ignore empty list element and there will be no marker displayed.</p>

<p>Complete code example will appear as follows:</p>

<pre><code>
&lt;div class="map"&gt;
    &lt;div id="google-map" class="map_model"&gt;&lt;/div&gt;

    &lt;ul class="map_locations"&gt;
        &lt;li data-x="-73.9874068" data-y="40.643180"&gt;
            &lt;p&gt; 9870 St Vincent Place, Glasgow, DC 45 Fr 45.
                &lt;span&gt;800 2345-6789&lt;/span&gt;
            &lt;/p&gt;
        &lt;/li&gt;
        &lt;li data-x="-72.9874068" data-y="39.643180"&gt;
            &lt;p&gt; 9870 St Vincent Place, Glasgow, DC 45 Fr 45.
                &lt;span&gt;800 2345-6789&lt;/span&gt;
            &lt;/p&gt;
        &lt;/li&gt;

    &lt;/ul&gt;
&lt;/div&gt;
    </code></pre>

<p>- where:</p>

<pre><code>
&lt;li data-x="-73.9874068" data-y="40.643180"&gt;
    &lt;p&gt; 9870 St Vincent Place, Glasgow, DC 45 Fr 45.
        &lt;span&gt;800 2345-6789&lt;/span&gt;
    &lt;/p&gt;
&lt;/li&gt;
    </code></pre>

<p>represents new map marker.</p>

<h4>Pop-up windows to markers adding</h4>

<p>In order to add pop-up window to custom map marker just insert window content to the respectable map markers list element </p>

<code>&lt;li&gt;&lt;/li&gt;</code>

<p> As a result you'll get line of code as follows:</p>

<code>
    &lt;li data-x="-73.9994068" data-y="40.643180"&gt;Our office&lt;/li&gt;
</code>