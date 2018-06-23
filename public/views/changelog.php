#parent<"layout">

#viewAs<"title">
	PhoxPHP - Change logs
#stopView

#viewAs<"misc">
	<script type="text/javascript">
		window.label = 'changelog';
	</script>
#stopView

#viewAs<"content">
	<div class="ui-documentation">
		<div class="container">
			<div class="row">
				<h1>
					Current version: #{config('app')->get('current_version')}
				</h1>
			</div>
		</div>
		<div class="ui-documentation-index container">
			<div class="ui-documentation-index-row row">
				#include<"partials/docs-sidebar">
				<div class="ui-documentation-index-row-content col-12 col-sm-12 col-md-9">
					<h4>
						Change log
					</h4>
					<h5>
						Here, you can view changes made to this framework.
					</h5>
					<h4>
						V1.6.1 <span>[2018-06-08]</span>
					</h4>
					<div class="ui-documentation-info-block">
						<p>
							<i class="add">Added:</i> Filesystem now includes advanced file upload functionality.
						</p>
						<p>
							<i class="add">Added:</i> Glider ORM now has <b>setFindOptions</b> method that is used to set conditions when retrieving results using model methods(all, first, last e.t.c). 
						</p>
					</div>
					<h4>
						V1.5.1 <span>[2018-05-26]</span>
					</h4>
					<div class="ui-documentation-info-block">
						<p>
							<i class="add">Added:</i> Added CSRF token.
						</p>
						<p>
							<i class="remove">Removed:</i> Removed unused resources in public directory.
						</p>
					</div>

					<h4>
						V1.4.5 <span>[2018-05-25]</span>
					</h4>
					<div class="ui-documentation-info-block">
						<p>
							<i class="add">Added:</i> Added Statics classes.
						</p>
						<p>
							<i class="add">Added:</i> Added domain route option functionality to router.
						</p>
						<p>
							<i class="add">Added:</i> Added validation component.
						</p>
						<p>
							<i class="change">Changed:</i> Updated Filemanager class file and directory methods to accept $resource parameter.
						</p>
					</div>

					<h4>
						V1.3.0 <span>[2018-05-20]</span>
					</h4>
					<div class="ui-documentation-info-block">
						<p>
							<i class="add">Added:</i> Add Selector class to Prop.
						</p>
						<p>
							<i class="add">Added:</i> Add filters to routing.
						</p>
						<p>
							<i class="add">Added:</i> Custom view filters can now be created.
						</p>
						<p>
							<i class="fix">Fixed:</i> Fixed setVariable method return error in controller. setVariable method now returns the view object.
						</p>
						<p>
							<i class="fix">Fixed:</i> Cache component now checks if a cache has expired when retrieving a cache.
						</p>
						<p>
							<i class="fix">Fixed:</i> Fixed array to string conversion error if an array of domain is passed in database configuration.
						</p>
						<p>
							<i class="change">Changed:</i> Change $router variable to $route in routes.php.
						</p>
						<p>
							<i class="change">Changed:</i> More fields can now be created when registering users by passing an array of fields as register method's third argument.
						</p>
						<p>
							<i class="change">Changed:</i> Updated view configuration.	
						</p>
						<p>
							<i class="remove">Removed:</i> Removed model namespace and controllers namespace in app.php configuration.
						</p>
					</div>
					<div class="ui-documentation-nav">
						<a href="#{siteUrl('docs/latest/contributing')}" class="prev">
							Previous: Contributing
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
#stopView

#viewAs<"scripts">

#stopView