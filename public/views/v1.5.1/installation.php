#parent<"layout">

#viewAs<"title">
	PhoxPHP - Installation
#stopView

#viewAs<"misc">
	<script type="text/javascript">
		window.label = 'documentation';
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
						Installing the framework
					</h4>
					<h5>
						It is highly recommended to install this framework via composer. This makes it a must for you to have composer installed. For information on how to use composer, please visit <a href="https://getcomposer.org/doc/00-intro.md" target="_blank">here</a>.
					</h5>
					<h5>
						You can also download the framework package on <a href="https://github.com/PhoxPHP/phoxphp" target="_blank">github</a>. But this also requires that you have composer installed because you will need to install dependencies needed by the framework.
					</h5>
					<h4>
						Using composer create-project command
					</h4>
<pre class="code slim">
composer create-project phoxphp/phoxphp project_path
</pre>
					<h4>
						Installing downloaded package
					</h4>
					<h5>
						After downloading the framework package from github, you then need to install the required dependencies using the command below:
					</h5>
<pre class="code slim">
composer update --prefer-dist
</pre>
					<div class="ui-documentation-nav">
						<a href="#{siteUrl('docs/latest/requirements')}" class="prev">
							Previous: Requirements
						</a>
						<a href="#{siteUrl('docs/latest/configuration')}" class="next">
							Next: Configuration
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
#stopView

#viewAs<"scripts">

#stopView