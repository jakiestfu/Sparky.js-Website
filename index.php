<?PHP 
	
	$name = 'Sparky';
	
	if(isset($_GET['dope'])){
		$name = 'Dopecode';
	}
	
?><!doctype html>
<html lang="en">
	
	<!--
		
	  ____  ____   _    ____  _  ____   __   _ ____  
	 / ___||  _ \ / \  |  _ \| |/ /\ \ / /  | / ___| 
	 \___ \| |_) / _ \ | |_) | ' /  \ V /_  | \___ \ 
	  ___) |  __/ ___ \|  _ <| . \   | || |_| |___) |
	 |____/|_| /_/   \_\_| \_\_|\_\  |_(_)___/|____/ 
	                                                 
	
	I hope you all love using Sparky.js as much
	as I do, it has been a joy to work with!
	
	http://sparkyjs.com/?dope
	
	Regards,
	
	Jacob
	
	-->
	
	<head>
		<title><?PHP echo $name; ?>.js: A client-side Application Scaffold</title>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
		<link href='http://fonts.googleapis.com/css?family=Cutive+Mono' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="assets/css/sparky.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/prism.css" />
		<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	</head>
	<body data-spy="scroll" data-target=".navbar">
		<div class="navbar navbar-fixed-top navbar-inverse">
			<div class="navbar-inner">
				<div class="container">
					<div class="row">
						<div class="span12">
							<a class="brand cutive" href="http://SparkyJS.com/"><?PHP echo $name; ?>.<span>js</span></a>
							<ul class="nav pull-right">
								<li class="active"><a href="#the-idea">The Idea</a></li>
    							<li><a href="#faq">FAQ</a></li>
    							<li><a href="#examples">Examples</a></li>
								<li class="dropdown">
					            	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Docs <b class="caret"></b></a>
					                <ul class="dropdown-menu">
					                	<li><a href="#basics">Basics</a></li>
										<li><a href="#utils">Utils</a></li>
										<li><a href="#routing">Routing</a></li>
										<li><a href="#ajax">Ajax</a></li>
										<li><a href="#events">Events</a></li>
		    							<li><a href="#app_and_pub">App &amp; Public</a></li>
					                </ul>
					            </li>
								<li><a href="#customize">Customize &amp; Download</a></li>
								<li><a href="#discuss">Discuss</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div id="sparky-house">
			<div class="container">
			
				<div class="row" id="the-idea">
					<div class="span4">
						<?PHP if($name!='Sparky'){ ?>
						<h3>The Dope Stuff</h3>
						<p>Dopecode.js is a new rapid web development framework built for hardcore stoners, <i>by</i> hardcore stoners.</p>
						<p>You just shotgun your computer screen and it makes websites.</p>
						<p><div class="meme"><img src="assets/img/meme.png"></div></p>
						<?PHP } else { ?>
						<h3>The Idea</h3>
						<p>Sparky.js is a client-side application scaffold which helps those who want to have organized structure in their app, but don't want to subscribe to a particular client-side MVC framework.</p>
                        <p>It provides such capabilities as a code Router, an Event system, an Ajax wrapper, and more.</p>
                        <p>Say goodbye to spaghetti JS and hello to SparkyJS</p><?PHP } ?>
					</div>
					
					<div class="span8">
						<pre data-src="assets/js/examples/<?PHP echo strtolower($name); ?>.js"></pre>
					</div>
				</div>
				<?PHP if($name!='Sparky'){ ?><div class="kidding"><p>Just kidding, this is <a href="http://sparkyjs.com/">SparkyJS</a> and it kicks ass.</p></div><?PHP } ?>
				<div class="row" id="faq">
					<div class="span4">
						
						<h3>FAQ</h3>
						
						<div class="question">
							<p class="q">Is this a client side framework?</p>
							<p class="a"><b>No</b>. SparkyJS is not a framework, but an "application template" to bootstrap your client-side code with.</p>
						</div>
						
						<div class="question">
							<p class="q">Does this work with frameworks like Backbone or Ember?</p>
							<p class="a">SparkyJS provides structure to applications that do not use a framework such as Backbone or Ember. Elsewise, those frameworks should provide you with all the structure you'd need.</p>
						</div>
						
						<div class="question">
							<p class="q">When would I need to use Sparky?</p>
							<p class="a">If you're developing a web app, a small-medium sized website, or even a Wordpress theme, SparkyJS can be used. The goal is the DRY concept, to simplify the process of structuring your code, and eliminate redundant code execution on pages that do not need it.</p>
						</div>
						
						<div class="question">
							<p class="q">How do I get started?</p>
							<p class="a">Sparky is fast to get working with, lightweight and simple to understand. First <a href="#customize">Customize</a> your build to what you would need, then include jQuery and your downloaded SparkyJS file. Begin writing your logic in the <code>App</code> object, <code>Events.endpoints</code> object, and your <code>Routes</code> object.</p>
						</div>
						
					</div>
					
					<div class="span4">
						<h3 class="empty">FAQ</h3>
						
						<div class="question">
							<p class="q">I wish SparkyJS were more modular. Can I use RequireJS?</p>
							<p class="a">Any library can be used in conjunction with SparkyJS, be it jQuery, RequireJS, or MooTools. It is nothing more than a logically organized structure <b>in which you base your application upon</b>.</p>
						</div>
						
						<div class="question">
							<p class="q">What is the Routing feature?</p>
							<p class="a">The Routing feature of SparkyJS is used to bind code to specific pages of your website, it does not actually handle <b>any</b> URL routing. The best way of doing this is outputting a <b>Controller</b> and an <b>Action</b> in your head meta, but that data can be replaced with whatever you want.<br /><br />For example: If you were developing custom wordpress theme, you can output the template name as the <b>Controller</b> and the page/post type as the <b>Action</b>, making it easy to bind your code based off of your pages requirements.</p>
						</div>
						
						<div class="question">
							<p class="q">Does my site need to be dynamic to use Routing?</p>
							<p class="a">Absolutely not (though it is recommended). You can physically write in your own <b>Action</b> and <b>Controller</b> in any pages you want, and it will bind it to the appropriate objects.</p>
						</div>
					</div>
					
					<div class="span4">
						
						<h3 class="empty">FAQ</h3>
						
						<div class="question">
							<p class="q">What are the "url" and "userid" tags for?</p>
							<p class="a">Those are just examples of effecient uses of this method of data output. Alternatively, you can output actual JS code in your head (or body) and use it how you see fit.</p>
						</div>
						
						<div class="question">
							<p class="q">Why would you want to bind events inline?</p>
							<p class="a">Having the ability to minimize the amount of event-bindings in your code is great, leaving you to focus on what is important: the logic. Need to add support for a number-only text field? Easy, add it via data-attributes as you write your code. Options are endless</p>
						</div>
						
						<div class="question">
							<p class="q">Can I still bind events through selectors?</p>
							<p class="a">You are free to pick and choose what you like about SparkyJS, and trash the rest. Don't need to bind events inline? Trash it. Don't need an Ajax wrapper? Trash it. Don't need routing? Trash it. Sparky is meant to work for you and should not be used without tailoring it to your needs.</p>
						</div>
						
						<div class="question">
							<p class="q">Any last words?</p>
							<p class="a">SparkyJS was created to solve a problem. There are many different methods of structuring your javascript-applications, and this is one of them that has helped me regain my sanity. If you enjoy structure and organization on your server side code, why should your client side code settle for anything less? Enjoy!</p>
						</div>
						
					</div>
					
				</div>
				
                <div class="row" id="examples">
                    <div class="span12">
                        <h3>Examples</h3>
                        <div class="row">
                            <div class="span3">
                                <div class="example">
                                    <a href="http://babu.la/sparkbubbles/" class="info" target="_blank">
                                        <h5>SparkBubbles</h5>
                                        <div class="author">by <b>Greg Babula</b></div>
                                        <p>A game which tests your reflexes and accuracy</p>
                                    </a>
                                </div>
                            </div>
                            <div class="span3">
                                <div class="example">
                                    <a href="https://github.com/mrkipling/js-sensi" class="info" target="_blank">
                                        <h5>JS-Sensi</h5>
                                        <div class="author">by <b>Brad Abrahams</b></div>
                                        <p>A different flavor of Sparky</p>
                                    </a>
                                </div>
                            </div>
                            <div class="span3">
                                <div class="example no-example">
                                    <a href="http://twitter.com/jakiestfu" class="info" target="_blank">
                                        <h5>Your Site</h5>
                                        <div class="author">by <b>Your Name</b></div>
                                        <p>Tweet your Sparky.js application to @jakiestfu</p>
                                    </a>
                                </div>
                            </div>
                            <div class="span3">
                                <div class="example no-example">
                                    <a href="http://twitter.com/jakiestfu" class="info" target="_blank">
                                        <h5>Your Site</h5>
                                        <div class="author">by <b>Your Name</b></div>
                                        <p>Tweet your Sparky.js application to @jakiestfu</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
				<div class="row" id="basics">
					<div class="span4">
						
						<h3>Basics</h3>
						<p>To fully utilize Sparky's routing, a few things must be done outside of the script.</p>
						<p>In your application, output the meta tags you see to the right with their respective content dynamically filled in with their appropriate values.</p>
						<p>It is recommended you output the <code>url</code>, <code>userid</code>, <code>controller</code>, and <code>action</code> tags. The <b>url</b> will be used to simplify redirects and ajax requests, the <b>userid</b> will help determine whether or not a user is logged in, and the <b>controller</b> and <b>action</b> will route page-specific logic.</p>
						<p>With the meta tags provided to the right, it'd be safe to assume that the current page the user is on is a "Following" page which is a sub-page of "Dashboard", and if the user is not logged in, <code>-1</code> should be <code>userid</code>'s default value.</p>
						<p>Lastly, include jQuery, and the path to your Sparky application.</p>
					</div>
					
					<div class="span8">
						<pre data-src="assets/js/examples/page.html"></pre>
					</div>
				</div>
				
				<div class="row" id="utils">
					<div class="span4">
						
						<h3>Utils</h3>
						<p>Now that your meta tags are set, lets explore what Sparky does. The <code>Utils</code> object is used for caching objects, outputting dynamic data, defining app settings, and routing your application.</p>
						<p>Upon calling <code>Utils.settings.init()</code>, the object <code>Utils.settings</code> will be filled with the data that was output from the meta tags.</p>
						<p><code>Utils.cache</code> is good for storing references to whatever it is you may be accessing frequently</p>
						<p>After initializing your apps settings, calling <code>Utils.home_url('auth/login?foo=bar')</code> would return <code>http://myapp.com/auth/login?foo=bar</code>.</p>
						<p>The function <code>Utils.log</code> is a wrapper for <code>console.log</code>, so that way you may turn logging on/off via the debug variable in the settings object. The log function is made more accessible by assigning the variable <code>_log</code> to it. Making a <code>_log('is easy');</code>.</p>
						<p>Lastly, we have the <code>Utils.route</code> function. Note: This is not to be confused with the <code>Routes</code> object. This function will loop through our <code>Routes</code> object and execute any page specific code based on the <b>controller</b> and <b>action</b>.</p>
					</div>
					
					<div class="span8">
						<pre data-src="assets/js/examples/utils.js"></pre>
					</div>
				</div>
				
				<div class="row" id="routing">
					<div class="span4">
						
						<h3>Routing</h3>
						<p>Routing is a big part of Sparky's charm. It is very easy to execute your page-specific logic in an organized fashion, making management of your app a breeze. With a JS loader like <a href="http://requirejs.org/" target="_blank">RequireJS</a>, you can develop dynamic, structured, and modular apps in conjunction with Sparky's architecture.</p>
						<p>What the <code>Utils.route</code> function does is loop through the <code>Routes</code> object seen to the right. Using the variables we output in the meta tags above, we can determine what code needs to also be executed client side.</p>
						<p>The first level of objects within the <code>Routes</code> object represent <b>controllers</b>. If your <b>controller</b> object has an <code>init</code> function, it will be called before any <b>action</b> functions. If there is a function within your <b>controller</b> object who's name matches the set <b>action</b>, that function will then be called.</p>
						<p><i><small>Example: There are two <b>controller</b> objects to the right, "auth" and "dashboard". If we output in our meta tags "auth" as the <b>controller</b>, <code>Routes.auth.init()</code> will be called if it exists. If the <b>action</b> is set to "register", <code>Routes.auth.register()</code> will then be called.</small></i></p>
					</div>
					
					<div class="span8">
						<pre data-src="assets/js/examples/route.js"></pre>
					</div>
				</div>
				
				<div class="row" id="ajax">
					<div class="span4">
						
						<h3>Ajax</h3>
						<p>Though the process of Ajax is simplified quite well with libraries like jQuery, it is beneficial to use a wrapper to avoid writing all the requests and simplify your life.</p>
						<p>The base Ajax Object provided in Sparky allows a simple way to make your request. <code>Ajax.call</code> for POST requests, and <code>Ajax.get</code> for get requests.</p>
						<p>A request for a "Like Button" might look like this:
							<pre><code class="language-javascript">Ajax.call('doLike', {pictureID: 7}, function(result){
	// Success
}, function(){
	alert('Sorry, you must be logged in for that action');
});</code></pre>
						</p>
						<p>First parameter would be the method we want to call for our Ajax script, second parameter is the data, third is the success function, and <i>if</i> the fourth parameter is set to a function, it will fire <b>only if the user is not logged in</b>.</p>
					</div>
					
					<div class="span8">
						<pre data-src="assets/js/examples/ajax.js"></pre>
					</div>
				</div>
				
				<div class="row" id="events">
    				<div class="span4">
						
						<h3>Events</h3>
						<p>Events play an important role in Javascript and the DOM. Javasript should be used to handle the logic, but having the ability to bind events by writing HTML is a breeze, and better represents what your specific elements can do. Say goodbye to the days of messy and disorganized event binding!</p>
					    <p>Firstly, create a few HTML elements in which you want to bind events to. Using HTML5 data attributes, assigning <code>data-event</code> to an element will bind it to the function name of its value. For instance: <code>data-event="doLogin"</code> will bind it to <code>Events.endpoints.doLogin</code> if it exists.</p>
                        <p>The default event type bound to the element is the <code>click</code> event. If you wish to listen for a different type of event, add the data-attribute <code>data-method</code> to your element and it's value should be <b>the jQuery event name</b>.</p>
                        <p>If you add to the DOM and want to bind elements, you may call <code>Events.init</code> or <code>Events.bindEvents</code>. Elements that have already been bound will not be bound again, thus binding only new elements.</p>
                        <p>Provided are a few examples of the implementation of events. The <code>this</code> keyword is available, and if you need to inspect the <code>event</code> object, you may pass it as a parameter to your endpoint function.</p>
                    </div>
					
					<div class="span8">
    					<pre data-src="assets/js/examples/events/1.html"></pre>
                        <pre data-src="assets/js/examples/events/events.js"></pre>
    					<pre data-src="assets/js/examples/events/2.html"></pre>
                        <pre data-src="assets/js/examples/events/endpoints.js"></pre>
                   	</div>
                </div>
                
                
                <div class="row" id="app_and_pub">
        			<div class="span4">
						
						<h3>App &amp; Public</h3>
						<p>The <code>App</code> object is used to start Sparky, bind events, and route your code. It can also house the core of your logic if you wish. Usually, it is best to put any global logic in the <code>App</code> object.</p>
                        <p>The <code>Public</code> object is returned to allow you to publicize any functions you wish, elsewise, the scope of your functionality will be within your application itself. The <code>App.init</code> function is returned by default.</p>
					</div>
					
					<div class="span8">
						<pre data-src="assets/js/examples/app_and_pub.js"></pre>
					</div>
				</div>
                
                <div class="row" id="customize">
        			<div class="span4">
						
						<h3>Customize</h3>
						
						<form id="customize-form">
							<div class="opt">
								<h5>Name your Application</h5>
								<div>
									<input type="text" name="name" placeholder="MyApp" class="appname">
								</div>
							</div>
							
							<div class="opt">
								<h5>Feature Set</h5>
								<div>
									<div class="btn-group" data-toggle="buttons-radio">
									  <button class="btn active btn-sparky" data-value="full">Full</button>
									  <button class="btn btn-sparky" data-value="noRouting">No Routing</button>
									  <button class="btn btn-sparky" data-value="light">Light</button>
									</div>
								</div>
							</div>
							
							<div class="opt">
								<h5>Sample Logs <input type="checkbox" name="logs" value="1" class="logs"></h5>
							</div>
						</form>
						<div class="opt">
							<button class="btn btn-sparky btn-block" id="generate">Preview <i class="icon-arrow-right"></i></button>
						</div>
						<div class="opt">
							<a class="btn btn-sparky btn-block track" id="download" href="#">Download</a>
						</div>
						<div class="opt">
							<p>An idea by <a href="https://twitter.com/jakiestfu" target="_blank" class="track">@jakiestfu</a>.<br />Etiquette and Critiquing by <a href="https://twitter.com/_jayd3e" target="_blank" class="track">@_jayd3e</a></p>
                            <p><script type="text/javascript" src="http://lab.jakiestfu.com/code.js" data-color="#BDE052" id="codejs"></script></p>
						</div>
                    </div>
					
					<div class="span8">
						<pre data-src="assets/js/examples/customize.php" id="customize_pre"></pre>
					</div>
				</div>
                
                <div class="row" id="discuss">
        			<div class="span12">
						
						<h3>Discuss</h3>
						
						<div id="disqus_thread"></div>
						
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			// Disqus
			var disqus_shortname = 'XXXXXXXX'; // required: replace example with your forum shortname
			(function() {var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);})();
			
			// Google ass analytics        
			var _gaq = _gaq || [];_gaq.push(['_setAccount', 'XX-XXXXXXXX-X']);_gaq.push(['_trackPageview']);
			(function() {var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();
		</script>
		<script type="text/javascript" src="assets/js/jquery.js"></script>
		<script type="text/javascript" src="assets/js/prism.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/sparky_site.js"></script>
	</body>
</html>