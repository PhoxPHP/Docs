#parent<"layout">

#viewAs<"title">
	PhoxPHP - Authentication
#stopView

#viewAs<"misc">
	<script type="text/javascript">
		window.label = 'authentication';
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
				#include<"partials/v1.3.0/docs-sidebar">
				<div class="ui-documentation-index-row-content col-12 col-sm-12 col-md-9">
					<h4>
						Authentication
					</h4>
					<h5>
						When building a website or web application, you might want to implement user authentication to verify who is allowed to access certain sections. This component helps to solve that in a fly with minimal and non-complicated configuration.
					</h5>
					<h5>
						To get started with authentication, we recommend that you go through the <a href="#{siteUrl('docs/latest/authentication/configuration')}">authentication configuration</a> to be more familiar with how the component works.
					</h5>
					<div class="ui-documentation-nav">
						<a href="#{siteUrl('docs/latest/installation')}" class="prev">
							Previous: Installation
						</a>
						<a href="#{siteUrl('docs/latest/authentication/configuration')}" class="next">
							Next: Authentication configuration
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
#stopView

#viewAs<"scripts">

#stopView