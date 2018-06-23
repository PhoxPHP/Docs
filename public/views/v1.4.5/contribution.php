#parent<"layout">

#viewAs<"title">
	PhoxPHP - Contributing to PhoxPHP
#stopView

#viewAs<"misc">
	<script type="text/javascript">
		window.label = 'contribute';
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
				#include<"partials/v1.4.5/docs-sidebar">
				<div class="ui-documentation-index-row-content col-12 col-sm-12 col-md-9">
					<h4>
						Contributing
					</h4>
					<h5>
						Anyone is here allowed to participate in the development of this framework, adding more features using the source code and also reporting bugs and updating documentation. If you have any further questions, please feel free to contact the <a href="mailto:admin@phoxphp.com">admin.</a>
					</h5>
					<h4>
						Bug reports
					</h4>
					<h5>
						To report a bug you found when using the framework, please follow these processes:
					</h5>
					<div class="ui-documentation-info-block">
						<p>
							i. Make sure you have tested the issue multiple times.
						</p>
						<p>
							ii. Share the version of the framework that has the bug.
						</p>
						<p>
							iii. Create an issue on github and give a descriptive detail on what the bug is.
						</p>
						<p>
							iv. Paste a sample code if there is any involved.
						</p>
					</div>
					<h4>
						General discussions
					</h4>
					<h5>
						For general discussions, we use <a href="https://gitter.im" target="_blank">gitter</a>. All you need to do is join our <a href="https://gitter.im/PhoxPHPFramework/General" target="_blank">general discussions</a> room on gitter.
					</h5>
					<div class="ui-documentation-nav">
						<a href="#{siteUrl('docs/latest/view')}" class="prev">
							Previous: View
						</a>
						<a href="#{siteUrl('docs/changelog')}" class="next">
							Next: Change log
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
#stopView

#viewAs<"scripts">

#stopView