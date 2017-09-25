<?php
/**
 * Template Name: Home Page Template
 * Description: getskeleton.com Homepage Template
 *
 * @package WordPress
 * @subpackage WP-Skeleton
 */

get_header(); 
/*get_template_part( 'menu', 'index' ); */ //the  menu + logo/site title ?>

  <div class="container">
    <section class="header">
      <h2 class="title">A dead simple, responsive boilerplate,<br>developed for WordPress.</h2>
      <a class="button button-primary" href="https://github.com/ChrisNaylor/WP-Skeleton-Theme/archive/master.zip">Download</a>
      <div class="value-props row">
        <div class="four columns value-prop">
          <img class="value-img" src="<?php echo get_template_directory_uri() . '/images/feather.svg'?>"> Light as a feather at ~400 lines &amp; built with mobile in mind.
        </div>
        <div class="four columns value-prop">
          <img class="value-img" src="<?php echo get_template_directory_uri() . '/images/pens.svg'?>"> Styles designed to be a starting point, not a UI framework.
        </div>
        <div class="four columns value-prop">
          <img class="value-img" src="<?php echo get_template_directory_uri() . '/images/watch.svg'?>"> Quick to start with zero compiling or installing necessary.
        </div>
      </div>
    </section>

    <div class="navbar-spacer"></div>
    <nav class="navbar">
      <div class="container">
        <ul class="navbar-list">
          <li class="navbar-item"><a class="navbar-link" href="#intro">Intro</a></li>
          <li class="navbar-item">
            <a class="navbar-link" href="#" data-popover="#codeNavPopover">Code</a>
            <div id="codeNavPopover" class="popover">
              <ul class="popover-list">
                <li class="popover-item">
                  <a class="popover-link" href="#grid">Grid</a>
                </li>
                <li class="popover-item">
                  <a class="popover-link" href="#typography">Typography</a>
                </li>
                <li class="popover-item">
                  <a class="popover-link" href="#buttons">Buttons</a>
                </li>
                <li class="popover-item">
                  <a class="popover-link" href="#forms">Forms</a>
                </li>
                <li class="popover-item">
                  <a class="popover-link" href="#lists">Lists</a>
                </li>
                <li class="popover-item">
                  <a class="popover-link" href="#code">Code</a>
                </li>
                <li class="popover-item">
                  <a class="popover-link" href="#tables">Tables</a>
                </li>
                <li class="popover-item">
                  <a class="popover-link" href="#queries">Queries</a>
                </li>
                <li class="popover-item">
                  <a class="popover-link" href="#utilities">Utilities</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="navbar-item"><a class="navbar-link" href="#examples">Examples</a></li>
          <li class="navbar-item">
            <a class="navbar-link" href="#" data-popover="#moreNavPopover">More</a>
            <div id="moreNavPopover" class="popover">
              <ul class="popover-list">
                <li class="popover-item">
                  <a class="popover-link" href="https://github.com/dhg/Skeleton">On Github</a>
                </li>
                <li class="popover-item">
                  <a class="popover-link" href="https://github.com/dhg/Skeleton#browser-support">Browsers</a>
                </li>
                <li class="popover-item">
                  <a class="popover-link" href="https://github.com/dhg/Skeleton#license">License</a>
                </li>
                <li class="popover-item">
                  <a class="popover-link" href="https://github.com/dhg/Skeleton#extensions">Extensions</a>
                </li>
                <li class="popover-item">
                  <a class="popover-link" href="https://github.com/dhg/Skeleton/releases">Versions</a>
                </li>
                <li class="popover-item">
                  <a class="popover-link" href="https://github.com/dhg/Skeleton#colophon">Colophon</a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Why use Skeleton -->
    <div class="docs-section" id="intro">
      <h6 class="docs-header">Is Skeleton for you?</h6>
      <p>You should use Skeleton if you're embarking on a smaller project or just don't feel like you need all the utility of larger frameworks. Skeleton only styles a handful of standard HTML elements and includes a grid, but that's often more than enough to get started. In fact, <u>this site is built on Skeleton and has ~200 lines of custom CSS</u> (half of which is the docking navigation).</p>
      <p>Love Skeleton and want to Tweet it, share it, or star it? Well, I appreciate that
        <3</p>
          <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.getskeleton.com" data-text="Skeleton - A dead simple, responsive boilerplate." data-via="dhg" data-related="dhg">Tweet</a>
          <script>
            ! function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0],
                p = /^http:/.test(d.location) ? 'http' : 'https';
              if (!d.getElementById(id)) {
                js = d.createElement(s);
                js.id = id;
                js.src = p + '://platform.twitter.com/widgets.js';
                fjs.parentNode.insertBefore(js, fjs);
              }
            }(document, 'script', 'twitter-wjs');
          </script>
          <!-- <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.getskeleton.com&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=21&amp;appId=151131931646052" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px; width:140px" allowTransparency="true"></iframe> -->
          <iframe src="//ghbtns.com/github-btn.html?user=dhg&repo=Skeleton&type=watch&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="110" height="20"></iframe>
          <iframe src="//ghbtns.com/github-btn.html?user=dhg&repo=Skeleton&type=fork&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="110" height="20"></iframe>
    </div>

    <!-- Grid -->
    <div class="docs-section" id="grid">
      <h6 class="docs-header">The grid</h6>
      <p>The grid is a <u>12-column fluid grid with a max width of 960px</u>, that shrinks with the browser/device at smaller sizes. The max width can be changed with one line of CSS and all columns will resize accordingly. The syntax is simple and it makes coding responsive much easier. Go ahead, resize the browser. </p>
      <div class="example-grid docs-example">
        <div class="row">
          <div class="one column">One</div>
          <div class="eleven columns">Eleven</div>
        </div>
        <div class="row">
          <div class="two columns">Two</div>
          <div class="ten columns">Ten</div>
        </div>
        <div class="row">
          <div class="three columns">Three</div>
          <div class="nine columns">Nine</div>
        </div>
        <div class="row">
          <div class="four columns">Four</div>
          <div class="eight columns">Eight</div>
        </div>
        <div class="row">
          <div class="five columns">Five</div>
          <div class="seven columns">Seven</div>
        </div>
        <div class="row">
          <div class="six columns">Six</div>
          <div class="six columns">Six</div>
        </div>
        <div class="row">
          <div class="seven columns">Seven</div>
          <div class="five columns">Five</div>
        </div>
        <div class="row">
          <div class="eight columns">Eight</div>
          <div class="four  columns">Four</div>
        </div>
        <div class="row">
          <div class="nine columns">Nine</div>
          <div class="three columns">Three</div>
        </div>
        <div class="row">
          <div class="ten columns">Ten</div>
          <div class="two columns">Two</div>
        </div>
        <div class="row">
          <div class="eleven columns">Eleven</div>
          <div class="one column">One</div>
        </div>
      </div>


      <!-- CODE EXAMPLE ———————————————————————————————————————— -->
      <pre class="code-example">
     <code class="code-example-body prettyprint">&lt;!-- .container is main centered wrapper --&gt;
&lt;div class="container"&gt;

  &lt;!-- columns should be the immediate child of a .row --&gt;
  &lt;div class="row"&gt;
    &lt;div class="one column"&gt;One&lt;/div&gt;
    &lt;div class="eleven columns"&gt;Eleven&lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- just use a number and class 'column' or 'columns' --&gt;
  &lt;div class="row"&gt;
    &lt;div class="two columns"&gt;Two&lt;/div&gt;
    &lt;div class="ten columns"&gt;Ten&lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- there are a few shorthand columns widths as well --&gt;
  &lt;div class="row"&gt;
    &lt;div class="one-third column"&gt;1/3&lt;/div&gt;
    &lt;div class="two-thirds column"&gt;2/3&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="row"&gt;
    &lt;div class="one-half column"&gt;1/2&lt;/div&gt;
    &lt;div class="one-half column"&gt;1/2&lt;/div&gt;
  &lt;/div&gt;

&lt;/div&gt;

&lt;!-- Note: columns can be nested, but it's not recommended since Skeleton's grid has %-based gutters, meaning a nested grid results in variable with gutters (which can end up being *really* small on certain browser/device sizes) --&gt;
</code>
</pre>
      <!-- ————————————————————————————————————————————————————— -->


    </div>

    <!-- Typography -->
    <div class="docs-section" id="typography">
      <h6 class="docs-header">Typography</h6>
      <p>Type is all set with the <code>rems</code>, so font-sizes and spacial relationships can be responsively sized based on a single <code>&lt;html&gt;</code> font-size property. Out of the box, Skeleton never changes the <code>&lt;html&gt;</code> font-size, but it's there in case you need it for your project. All measurements are still base 10 though so, an <code>&lt;h1&gt;</code> with <code>5.0rem</code>font-size just means <code>50px</code>.</p>
      <div class="docs-example">
        <div class="row">
          <div class="six columns">
            <p><strong>The typography base</strong> is <a href="http://www.google.com/fonts/specimen/Raleway">Raleway</a> served by Google, set at 15rem (15px) over a 1.6 line height (24px). Other type basics like <a href="#">anchors</a>, <strong>strong</strong>, <em>emphasis</em>, and <u>underline</u> are all obviously included.</p>
            <p><strong>Headings</strong> create a family of distinct sizes each with specific <code>letter-spacing</code>, <code>line-height</code>, and <code>margins</code>.</p>
          </div>
          <div class="six columns">
            <h1>Heading<span class="heading-font-size"> <code>&lt;h1&gt;</code> 50rem</span></h1>
            <h2>Heading<span class="heading-font-size"> <code>&lt;h2&gt;</code> 42rem</span></h2>
            <h3>Heading<span class="heading-font-size"> <code>&lt;h3&gt;</code> 36rem</span></h3>
            <h4>Heading<span class="heading-font-size"> <code>&lt;h4&gt;</code> 30rem</span></h4>
            <h5>Heading<span class="heading-font-size"> <code>&lt;h5&gt;</code> 24rem</span></h5>
            <h6>Heading<span class="heading-font-size"> <code>&lt;h6&gt;</code> 15rem</span></h6>
          </div>
        </div>
      </div>


      <!-- CODE EXAMPLE ———————————————————————————————————————— -->
      <pre class="code-example">
<code class="code-example-body prettyprint">&lt;!-- Standard Headings --&gt;
&lt;h1&gt;Heading&lt;/h1&gt;
&lt;h2&gt;Heading&lt;/h2&gt;
&lt;h3&gt;Heading&lt;/h3&gt;
&lt;h4&gt;Heading&lt;/h4&gt;
&lt;h5&gt;Heading&lt;/h5&gt;
&lt;h6&gt;Heading&lt;/h6&gt;

&lt;!-- Base type size --&gt;
&lt;p&gt;The base type is 15px over 1.6 line height (24px)&lt;/p&gt;

&lt;!-- Other styled text tags --&gt;
&lt;strong&gt;Bolded&lt;/strong&gt;
&lt;em&gt;Italicized&lt;/em&gt;
&lt;a&gt;Colored&lt;/a&gt;
&lt;u&gt;Underlined&lt;/u&gt;
</code>
</pre>
      <!-- ————————————————————————————————————————————————————— -->


    </div>

    <!-- Buttons -->
    <div class="docs-section" id="buttons">
      <h6 class="docs-header">Buttons</h6>
      <p>Buttons come in two basic flavors in Skeleton. The standard <code>&lt;button&gt;</code> element is plain, whereas the <code>.button-primary</code> button is vibrant and prominent. Button styles are applied to a number of appropriate form elements, but can also be arbitrarily attached to anchors with a <code>.button</code> class.</p>
      <div class="docs-example">
        <div>
          <a class="button" href="#">Anchor button</a>
          <button>Button element</button>
          <input type="submit" value="submit input">
          <input type="button" value="button input">
        </div>
        <div>
          <a class="button button-primary" href="#">Anchor button</a>
          <button class="button-primary">Button element</button>
          <input class="button-primary" type="submit" value="submit input">
          <input class="button-primary" type="button" value="button input">
        </div>
      </div>


      <!-- CODE EXAMPLE ———————————————————————————————————————— -->
      <pre class="code-example">
<code class="code-example-body prettyprint">&lt;!-- Standard buttons --&gt;
&lt;a class="button" href="#"&gt;Anchor button&lt;/a&gt;
&lt;button&gt;Button element&lt;/button&gt;
&lt;input value="submit input" type="submit"&gt;
&lt;input value="button input" type="button"&gt;

&lt;!-- Primary buttons --&gt;
&lt;a class="button button-primary" href="#"&gt;Anchor button&lt;/a&gt;
&lt;button class="button-primary"&gt;Button element&lt;/button&gt;
&lt;input class="button-primary" value="submit input" type="submit"&gt;
&lt;input class="button-primary" value="button input" type="button"&gt;
</code>
</pre>
      <!-- ————————————————————————————————————————————————————— -->


    </div>

    <!-- Forms -->
    <div class="docs-section" id="forms">
      <h6 class="docs-header">Forms</h6>
      <p>Forms are a huge pain, but hopefully these styles make it a bit easier. All inputs, select, and buttons are normalized for a common height cross-browser so inputs can be stacked or placed alongside each other.</p>
      <div class="docs-example docs-example-forms">
        <form>
          <div class="row">
            <div class="six columns">
              <label for="exampleEmailInput">Your email</label>
              <input class="u-full-width" type="email" placeholder="test@mailbox.com" id="exampleEmailInput">
            </div>
            <div class="six columns">
              <label for="exampleRecipientInput">Reason for contacting</label>
              <select class="u-full-width" id="exampleRecipientInput">
                <option value="Option 1">Questions</option>
                <option value="Option 2">Admiration</option>
                <option value="Option 3">Can I get your number?</option>
              </select>
            </div>
          </div>
          <label for="exampleMessage">Message</label>
          <textarea class="u-full-width" placeholder="Hi Dave &hellip;" id="exampleMessage"></textarea>
          <label class="example-send-yourself-copy">
            <input type="checkbox">
            <span class="label-body">Send a copy to yourself</span>
          </label>
          <input class="button-primary" type="submit" value="Submit">
        </form>
      </div>


      <!-- CODE EXAMPLE ———————————————————————————————————————— -->
      <pre class="code-example">
<code class="code-example-body prettyprint">&lt;!-- The above form looks like this --&gt;
&lt;form&gt;
  &lt;div class="row"&gt;
    &lt;div class="six columns"&gt;
      &lt;label for="exampleEmailInput"&gt;Your email&lt;/label&gt;
      &lt;input class="u-full-width" placeholder="test@mailbox.com" id="exampleEmailInput" type="email"&gt;
    &lt;/div&gt;
    &lt;div class="six columns"&gt;
      &lt;label for="exampleRecipientInput"&gt;Reason for contacting&lt;/label&gt;
      &lt;select class="u-full-width" id="exampleRecipientInput"&gt;
        &lt;option value="Option 1"&gt;Questions&lt;/option&gt;
        &lt;option value="Option 2"&gt;Admiration&lt;/option&gt;
        &lt;option value="Option 3"&gt;Can I get your number?&lt;/option&gt;
      &lt;/select&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;label for="exampleMessage"&gt;Message&lt;/label&gt;
  &lt;textarea class="u-full-width" placeholder="Hi Dave …" id="exampleMessage"&gt;&lt;/textarea&gt;
  &lt;label class="example-send-yourself-copy"&gt;
    &lt;input type="checkbox"&gt;
    &lt;span class="label-body"&gt;Send a copy to yourself&lt;/span&gt;
  &lt;/label&gt;
  &lt;input class="button-primary" value="Submit" type="submit"&gt;
&lt;/form&gt;

&lt;!-- Always wrap checkbox and radio inputs in a label and use a &lt;span class="label-body"&gt; inside of it --&gt;

&lt;!-- Note: The class .u-full-width is just a utility class shorthand for width: 100% --&gt;
</code>
</pre>
      <!-- ————————————————————————————————————————————————————— -->


    </div>

    <!-- Lists -->
    <div class="docs-section" id="lists">
      <h6 class="docs-header">Lists</h6>
      <div class="row docs-example">
        <div class="six columns">
          <ul>
            <li>Unordered lists have basic styles</li>
            <li>
              They use the circle list style
              <ul>
                <li>Nested lists styled to feel right</li>
                <li>Can nest either type of list into the other</li>
              </ul>
            </li>
            <li>Just more list items mama san</li>
          </ul>
        </div>
        <div class="six columns">
          <ol>
            <li>Ordered lists also have basic styles</li>
            <li>
              They use the decimal list style
              <ul>
                <li>Ordered and unordered can be nested</li>
                <li>Can nest either type of list into the other</li>
              </ul>
            </li>
            <li>Last list item just for the fun</li>
          </ol>
        </div>
      </div>


      <!-- CODE EXAMPLE ———————————————————————————————————————— -->
      <pre class="code-example">
<code class="code-example-body prettyprint">&lt;ul&gt;
  &lt;li&gt;Item 1&lt;/li&gt;
  &lt;li&gt;
    Item 2
    &lt;ul&gt;
      &lt;li&gt;Item 2.1&lt;/li&gt;
      &lt;li&gt;Item 2.2&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
  &lt;li&gt;Item 3&lt;/li&gt;
&lt;/ul&gt;

&lt;!-- Easily substitute any &lt;ul&gt; or an &lt;ol&gt; to get number lists or sublists. Skeleton doesn't support lists nested deeper than 2 levels --&gt;
</code>
</pre>
      <!-- ————————————————————————————————————————————————————— -->


    </div>

    <!-- Code -->
    <div class="docs-section" id="code">
      <h6 class="docs-header">Code</h6>
      <p>Code styling is kept basic – just wrap anything in a <code>&lt;code&gt;</code> and it will appear like <code>this</code>. For blocks of code, wrap a <code>&lt;code&gt;</code> with a <code>&lt;pre&gt;</code>.</p>
      <div class="docs-example">
        <pre><code>.some-class {
  background-color: red;
}</code></pre>
      </div>


      <!-- CODE EXAMPLE ———————————————————————————————————————— -->
      <pre class="code-example">
<code class="code-example-body prettyprint">&lt;pre&gt;&lt;code&gt;.some-class {
  background-color: red;
}&lt;/code&gt;&lt;/pre&gt;

&lt;!-- Remember every whitespace and break will be preserved in a &lt;pre&gt;, including indentation in your code --&gt;
</code>
</pre>
      <!-- ————————————————————————————————————————————————————— -->


    </div>

    <!-- Tables -->
    <div class="docs-section" id="tables">
      <h6 class="docs-header">Tables</h6>
      <p>Be sure to use properly formed table markup with <code>&lt;thead&gt;</code> and <code>&lt;tbody&gt;</code> when building a <code>table</code>.</p>
      <div class="docs-example">
        <table class="u-full-width">
          <thead>
            <tr>
              <th>Name</th>
              <th>Age</th>
              <th>Sex</th>
              <th>Location</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Dave Gamache</td>
              <td>26</td>
              <td>Male</td>
              <td>San Francisco</td>
            </tr>
            <tr>
              <td>Dwayne Johnson</td>
              <td>42</td>
              <td>Male</td>
              <td>Hayward</td>
            </tr>
          </tbody>
        </table>
      </div>


      <!-- CODE EXAMPLE ———————————————————————————————————————— -->
      <pre class="code-example">
<code class="code-example-body prettyprint">&lt;table class="u-full-width"&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th&gt;Name&lt;/th&gt;
      &lt;th&gt;Age&lt;/th&gt;
      &lt;th&gt;Sex&lt;/th&gt;
      &lt;th&gt;Location&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;td&gt;Dave Gamache&lt;/td&gt;
      &lt;td&gt;26&lt;/td&gt;
      &lt;td&gt;Male&lt;/td&gt;
      &lt;td&gt;San Francisco&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td&gt;Dwayne Johnson&lt;/td&gt;
      &lt;td&gt;42&lt;/td&gt;
      &lt;td&gt;Male&lt;/td&gt;
      &lt;td&gt;Hayward&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;
</code>
</pre>
      <!-- ————————————————————————————————————————————————————— -->


    </div>

    <!-- Queries -->
    <div class="docs-section" id="queries">
      <h6 class="docs-header">Media queries</h6>
      <p>Skeleton uses media queries to serve its scalable grid, but also has a list of queries for convenience of styling your site across devices. The queries are mobile-first, meaning they target <code>min-width</code>. Mobile-first queries are how Skeleton's grid is built and is the preferrable method of organizing CSS. It means all styles outside of a query apply to all devices, then larger devices are targeted for enhancement. This prevents small devices from having to parse tons of unused CSS. The sizes for the queries are:</p>
      <div class="docs-example row">
        <div class="six columns">
          <ul>
            <li><strong>Desktop HD</strong>: 1200px</li>
            <li><strong>Desktop</strong>: 1000px</li>
            <li><strong>Tablet</strong>: 750px</li>
          </ul>
        </div>
        <div class="six columns">
          <ul>
            <li><strong>Phablet</strong>: 550px</li>
            <li><strong>Mobile</strong>: 400px</li>
          </ul>
        </div>
      </div>


      <!-- CODE EXAMPLE ———————————————————————————————————————— -->
      <pre class="code-example">
<code class="code-example-body prettyprint">/* Mobile first queries */

/* Larger than mobile */
@media (min-width: 400px) {}

/* Larger than phablet */
@media (min-width: 550px) {}

/* Larger than tablet */
@media (min-width: 750px) {}

/* Larger than desktop */
@media (min-width: 1000px) {}

/* Larger than Desktop HD */
@media (min-width: 1200px) {}


</code>
</pre>
      <!-- ————————————————————————————————————————————————————— -->


    </div>


    <!-- Utilities and Misc. -->
    <div class="docs-section" id="utilities">
      <h6 class="docs-header">Utilities</h6>
      <p>Skeleton has a number of small utility classes that act as easy-to-use helpers. Sometimes it's better to use a utility class than create a whole new class just to float an element.</p>


      <!-- CODE EXAMPLE ———————————————————————————————————————— -->
      <pre class="code-example">
<code class="code-example-body prettyprint">/* Utility Classes */

/* Make element full width */
.u-full-width {
  width: 100%;
  box-sizing: border-box; }

/* Make sure elements don't run outside containers (great for images in columns) */
.u-max-full-width {
  max-width: 100%;
  box-sizing: border-box; }

/* Float either direction */
.u-pull-right {
  float: right; }
.u-pull-left {
  float: left; }

/* Clear a float */
.u-cf {
  content: "";
  display: table;
  clear: both; }
</code>
</pre>
      <!-- ————————————————————————————————————————————————————— -->


    </div>

    <!-- Examples -->
    <div class="docs-section examples" id="examples">
      <h6 class="docs-header">Examples</h6>
      <div class="row example">
        <a class="example-screenshot-wrapper" target="_blank" href="examples/landing">
          <img class="example-screenshot" src="images/examples/landing.jpg">
        </a>
        <div class="one-half offset-by-one-half column">
          <h6 class="example-header">Demo Landing Page</h6>
          <p class="example-description">This template is an example of how easy it can be to create a landing page with just the Skeleton grid and a few custom styles. The entire demo is ~150 lines of CSS including comments (most of which is positioning the phones at the top).</p>
          <a class="button" href="examples/landing" target="_blank">Demo</a>
          <a class="button" href="https://github.com/dhg/Skeleton/tree/gh-pages/examples/landing" target="_blank">Source</a>
        </div>
      </div>
      <div class="row example">
        <div class="example-screenshot-wrapper">
          <div class="example-screenshot coming-soon"></div>
        </div>
        <div class="one-half offset-by-one-half column">
          <h6 class="example-header">More Coming Soon!</h6>
          <p class="example-description">More examples will be added to help anyone get started or more familiar with how Skeleton works. The goal is education. If you're more interested in real, live examples of Skeleton sites, I'll be creating a "Built on Skeleton" list soon!</p>
        </div>
      </div>
    </div>

  </div>


  <?php get_footer(); ?>