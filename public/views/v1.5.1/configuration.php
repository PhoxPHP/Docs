#parent<"layout">

#viewAs<"title">
	PhoxPHP - Configuration
#stopView

#viewAs<"misc">
	<script type="text/javascript">
		window.label = 'configuration';
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
						Configuring the framework
					</h4>
					<h5>
						Configuration files are located in public/config/ directory in the framework and there are two configurations that needs to be updated after installing the framework and they are:
					</h5>
					<div class="ui-documentation-info-block">
						<p>
							i. app_url
						</p>
						<p>
							ii. enable_caching
						</p>
					</div>
					<h4>
						app_url
						<a href="https://github.com/PhoxPHP/phoxphp/blob/master/public/config/app.php#L10" target="_blank">#see</a>
					</h4>
					<h5>
						This is the application's base url and is located in root_directory/public/config/app.php. It is important to set this and also make sure it is correct to avoid errors when using external assets e.g css and javascript files.
					</h5>
<pre class="code slim">
<span class="str">'app_url'</span> <span class="arrow">=></span> <span class="str">'http://example.com/'</span>
</pre>
					<h4>
						enable_caching
						<a href="https://github.com/PhoxPHP/phoxphp/blob/master/public/config/view.phoxengine.php#L17" target="_blank">#see</a>
					</h4>
					<h5>
						This configuration sets whether to cache views or not and located in root_directory/public/config/view.phoxengine.php. The configuration accepts whether true or false. If set to false, then the views will not be cached.
					</h5>
<pre class="code slim">
<span class="str">'enable_caching'</span> <span class="arrow">=></span> <span class="bool">false</span>
</pre>
					<div class="ui-documentation-nav">
						<a href="#{siteUrl('docs/latest/installation')}" class="prev">
							Previous: Installation
						</a>
						<a href="#{siteUrl('docs/latest/authentication')}" class="next">
							Next: Authentication
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
#stopView

#viewAs<"scripts">

#stopView