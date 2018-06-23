#parent<"layout">

#viewAs<"title">
	PhoxPHP - Requirements
#stopView

#viewAs<"misc">
	<script type="text/javascript">
		window.label = 'requirements';
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
						What must you have to get the framework running?
					</h4>
					<h5>
						PhoxPHP requires the following to get started:
					</h5>
					<div class="ui-documentation-info-block">
						<p>
							i. Apache or nginx web server.
						</p>
						<p>
							ii. PHP 7.0.6 or later.
						</p>
						<p>
							iii. Mysqli or pdo database extension.
						</p>
					</div>
					<h5>
						If the requirements mentioned above are met, then you're good to go.
					</h5>
					<div class="ui-documentation-nav">
						<a href="#{siteUrl('docs/latest')}" class="prev">
							Previous: Introduction
						</a>
						<a href="#{siteUrl('docs/latest/installation')}" class="next">
							Next: Installation
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
#stopView

#viewAs<"scripts">

#stopView