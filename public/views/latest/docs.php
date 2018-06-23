#parent<"layout">

#viewAs<"title">
	PhoxPHP - Lightweight, modern PHP framework
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
						Welcome to PhoxPHP's official documentation.
					</h4>
					<h5>
						PhoxPHP framework is a lightweight MVC framework built with the combinations of different components. This framework makes it easy to build your websites, web applications and can also be used for api calls.
					</h5>
					<h5>
						With highly customizable components, the whole framework can be configured to suit your needs how it fits.
					</h5>
					<div class="ui-documentation-nav">
						<a href="#{siteUrl('docs/latest/requirements')}" class="next">
							Next: Requirements
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
#stopView

#viewAs<"scripts">

#stopView