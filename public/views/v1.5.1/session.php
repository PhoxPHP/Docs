#parent<"layout">

#viewAs<"title">
	PhoxPHP - Session
#stopView

#viewAs<"misc">
	<script type="text/javascript">
		window.label = 'routing';
	</script>
#stopView

#viewAs<"content">
	<div class="ui-documentation">
		<div class="container">
			<div class="row">
				<h1>
					#{config('app')->get('current_version')}
				</h1>
			</div>
		</div>
		<div class="ui-documentation-index container">
			<div class="ui-documentation-index-row row">
				#include<"partials/docs-sidebar">
				<div class="ui-documentation-index-row-content col-12 col-sm-12 col-md-9">
					<h4>
						Session
					</h4>
					<h5>
						There is only one session driver supported and available at the moment. More drivers will be added in later versions.
					</h5>
					<h5 class="title">
						Availalbe driver:
					</h5>
					<div class="ui-documentation-info-block">
						<p>
							i. File session driver
						</p>
					</div>
					<h5 class="title">
						Drivers to be added soon:
					</h5>
					<div class="ui-documentation-info-block">
						<p>
							i. Database session driver
						</p>
						<p>
							ii. Redis session driver
						</p>
					</div>
					<h4>
						File session driver
					</h4>
					<h4>
						Configuration
					</h4>
					<h5>
						Configuration file for sessions is stored in <a href="https://github.com/PhoxPHP/phoxphp/blob/master/public/config/session.php" target="_blank">public/config/session.php</a>.
					</h5>
					<h5>
						Here is what the configuration file looks like.
					</h5>
<pre class="code slim"><a>session.php</a>// default session driver
<span class="str">'driver'</span> <span class="arrow">=></span> \Kit\Http\Session\Drivers\File\FileDriver::class,

// session storage path
<span class="str">'storage'</span> <span class="arrow">=></span> <span class="str">'app/storage/session'</span>,

// session lifetime
<span class="str">'timeout'</span> <span class="arrow">=></span> 90
</pre>
				<h4>
					Methods
				</h4>
				<h5 class="title">
					create(<i>String</i> $key, $value=null, <i>Int</i> $timeout=90)
				</h5>
				<h6>
					Creates a new session.
				</h6>
<pre class="code slim"><a>creating session</a>app()<span class="arrow">-></span>load(<span class="str">'session'</span>)<span class="arrow">-></span>create(<span class="str">'key'</span>, <span class="str">'value'</span>, 300);
</pre>

				<h5 class="title">
					exists(<i>String</i> $key)
				</h5>
				<h6>
					Checks if session exists.
				</h6>
<pre class="code slim"><a>checking if session exists</a>app()<span class="arrow">-></span>load(<span class="str">'session'</span>)<span class="arrow">-></span>exists(<span class="str">'key'</span>);
</pre>

				<h5 class="title">
					delete(<i>String</i> $key)
				</h5>
				<h6>
					Deletes a session from session storage.
				</h6>
<pre class="code slim"><a>deleting session</a>app()<span class="arrow">-></span>load(<span class="str">'session'</span>)<span class="arrow">-></span>delete(<span class="str">'key'</span>);
</pre>

				<h5 class="title">
					get(<i>String</i> $key)
				</h5>
				<h6>
					Returns a session value from session storage using the provided key.
				</h6>
<pre class="code slim"><a>retrieve session</a>app()<span class="arrow">-></span>load(<span class="str">'session'</span>)<span class="arrow">-></span>get(<span class="str">'key'</span>);
</pre>

				<h5 class="title">
					getAll(<i>Bool</i> $toObject=false)
				</h5>
				<h6>
					Returns an array of all sessions but returns an object if <a>$toObject</a> is true.
				</h6>
<pre class="code slim"><a>retrieve all sessions</a>app()<span class="arrow">-></span>load(<span class="str">'session'</span>)<span class="arrow">-></span>getAll(true);
</pre>

				<h5 class="title">
					getFirst()
				</h5>
				<h6>
					Returns the first session record in session storage.
				</h6>
<pre class="code slim"><a>retrieve first session</a>app()<span class="arrow">-></span>load(<span class="str">'session'</span>)<span class="arrow">-></span>getFirst();
</pre>

				<h5 class="title">
					getLast()
				</h5>
				<h6>
					Returns the last session record in session storage.
				</h6>
<pre class="code slim"><a>retrieve last session</a>app()<span class="arrow">-></span>load(<span class="str">'session'</span>)<span class="arrow">-></span>getLast();
</pre>

				<h5 class="title">
					deleteAll()
				</h5>
				<h6>
					Removes all stored sessions.
				</h6>
<pre class="code slim">app()<span class="arrow">-></span>load(<span class="str">'session'</span>)<span class="arrow">-></span>deleteAll();
</pre>

				<h5 class="title">
					deleteAllExcept(<i>Array</i> $except=[])
				</h5>
				<h6>
					Removes all stored sessions with the excemption of the ones in the <a>$except</a> array.
				</h6>
<pre class="code slim">app()<span class="arrow">-></span>load(<span class="str">'session'</span>)<span class="arrow">-></span>deleteAllExcept([ // ]);
</pre>

				<h5 class="title">
					getCreatedDate(<i>String</i> $key)
				</h5>
				<h6>
					Returns created date of a session.
				</h6>
<pre class="code slim">app()<span class="arrow">-></span>load(<span class="str">'session'</span>)<span class="arrow">-></span>getCreatedDate(<span class="str">'key'</span>);
</pre>

				<h5 class="title">
					getTimeout(<i>String</i> $key)
				</h5>
				<h6>
					Returns lifetime of a session.
				</h6>
<pre class="code slim">app()<span class="arrow">-></span>load(<span class="str">'session'</span>)<span class="arrow">-></span>getTimeout(<span class="str">'key'</span>);
</pre>

				<h5 class="title">
					isExpired(<i>String</i> $key)
				</h5>
				<h6>
					Checks if session has expired.
				</h6>
<pre class="code slim">app()<span class="arrow">-></span>load(<span class="str">'session'</span>)<span class="arrow">-></span>isExpired(<span class="str">'key'</span>);
</pre>

				<h5 class="title">
					incrementTimeout(<i>String</i> $key, <i>Int</i> $timeIsSeconds=60)
				</h5>
				<h6>
					Increases a session lifetime.
				</h6>
<pre class="code slim">app()<span class="arrow">-></span>load(<span class="str">'session'</span>)<span class="arrow">-></span>incrementTimeout(<span class="str">'key'</span>, 60);
</pre>

				<h5 class="title">
					decrementTimeout(<i>String</i> $key, <i>Int</i> $timeIsSeconds=60)
				</h5>
				<h6>
					Decreases a session lifetime.
				</h6>
<pre class="code slim">app()<span class="arrow">-></span>load(<span class="str">'session'</span>)<span class="arrow">-></span>decrementTimeout(<span class="str">'key'</span>, 30);
</pre>

				<h5 class="title">
					setFlash(<i>String</i> $label, <i>String</i> $message)
				</h5>
				<h6>
					Creates a session flash message.
				</h6>
<pre class="code slim">app()<span class="arrow">-></span>load(<span class="str">'session'</span>)<span class="arrow">-></span>setFlash(<span class="str">'success'</span>, <span class="str">'Nice!'</span>);
</pre>

				<h5 class="title">
					hasFlash(<i>String</i> $label)
				</h5>
				<h6>
					Checks if a flash message exists.
				</h6>
<pre class="code slim">app()<span class="arrow">-></span>load(<span class="str">'session'</span>)<span class="arrow">-></span>hasFlash(<span class="str">'success'</span>);
</pre>

				<h5 class="title">
					getFlash(<i>String</i> $label)
				</h5>
				<h6>
					Returns a session flash message.
				</h6>
<pre class="code slim">app()<span class="arrow">-></span>load(<span class="str">'session'</span>)<span class="arrow">-></span>getFlash(<span class="str">'success'</span>);
</pre>
					<h4>
						CSRF <a>new in</a> <span>[v1.5.1]</span>
					</h4>
					<h5>
						CSRF is an attack that occurs when an unusual activity forces or tricks a user to perform an unwanted action. This framework helps to avoid this kind of attacks.
					</h5>
					<h4>
						Configuration
					</h4>
					<h5>
						The only configuration that most be noted is the name of the input which is in <a>public/config/session.php</a>. The <a>csrf_token_input_name</a> config key must be the name of the csrf field input.
					</h5>
					<h4>
						Usage
					</h4>
					<h5>
						To access the csrf token, you can use the <a>Session</a> Statics class.
					</h5>
<pre class="code slim"><a>form.php</a>
#{htmlspecialchars('<form method="POST">')}
	
    #{htmlspecialchars("<input type='hidden' name='token' value='&#35;&#123;App\Statics\Session&#58;&#58;token()&#125;'>")}

#{htmlspecialchars('</form>')}
</pre>
					<h5>If the csrf token does not match the stored token, <a>InvalidCsrfTokenException</a> is thrown.</h5>
					<div class="ui-documentation-nav">
						<a href="#{siteUrl('docs/latest/routing')}" class="prev">
							Previous: Routing
						</a>
						<a href="#{siteUrl('docs/latest/validation')}" class="next">
							Next: Validation
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
#stopView

#viewAs<"scripts">

#stopView