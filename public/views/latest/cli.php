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
						Cli
					</h4>
					<h5>
						The cli makes it easy to interace with your application from the terminal.
					</h5>
					<div class="ui-documentation-nav">
						<a href="#{siteUrl('docs/latest/di')}" title="phoxphp dependency injection" class="prev">
							Previous: Dependency injection
						</a>
						<a href="#{siteUrl('docs/latest/filesystem')}" class="next">
							Next: Filesystem
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
#stopView

#viewAs<"scripts">

#stopView