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
				#include<"partials/v1.3.0/docs-sidebar">
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
					<h4>
						Sample application
					</h4>
					<h6>
						<a href="#{siteUrl('sample/v1.2.1/todo-app.zip')}" target="_blank">Here</a> is a sample todo app that can also help you to understand the framework more.
					</h6>
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