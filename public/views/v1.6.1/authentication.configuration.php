#parent<"layout">

#viewAs<"title">
	PhoxPHP - Authentication configuration
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
				#include<"partials/docs-sidebar">
				<div class="ui-documentation-index-row-content col-12 col-sm-12 col-md-9">
					<h4>
						Authentication configuration
					</h4>
					<h5>
						Here is a list of configuration that are most important to know when using implementing authentication in PhoxPHP
					</h5>
					<h5>
						Configuration file for this component in root_directory/public/config/auth.php.
					</h5>
					<div class="ui-documentation-info-block">
						<p>
							i. auth_users_table
						</p>
						<p>
							ii. auth_login_session_name
						</p>
						<p>
							iii. connection_id
						</p>
						<p>
							iv. auto_login
						</p>
						<p>
							v. auth_logout_url
						</p>
						<p>
							vi. auth_login_url
						</p>
						<p>
							vii. auto_redirect
						</p>
						<p>
							viii. auto_activate
						</p>
						<p>
							ix. activation_check
						</p>
					</div>
					<h4>
						auth_users_table
						<a href="https://github.com/PhoxPHP/phoxphp/blob/master/public/config/auth.php#L16" target="_blank">#see</a>
					</h4>
					<h5>
						Name of database table that will be used to manage users. Default is users.
					</h5>
					<h4>
						auth_login_session_name
						<a href="https://github.com/PhoxPHP/phoxphp/blob/master/public/config/auth.php#L21" target="_blank">#see</a>
					</h4>
					<h5>
						Name of logged in user session.
					</h5>
					<h4>
						connection_id
						<a href="https://github.com/PhoxPHP/phoxphp/blob/master/public/config/auth.php#L26" target="_blank">#see</a>
					</h4>
					<h5>
						User model connection id.
					</h5>
					<h4>
						auto_login
						<a href="https://github.com/PhoxPHP/phoxphp/blob/master/public/config/auth.php#L31" target="_blank">#see</a>
					</h4>
					<h5>
						Sets whether to login automatically after a user has been registered or not.
					</h5>
					<h4>
						auth_logout_url
						<a href="https://github.com/PhoxPHP/phoxphp/blob/master/public/config/auth.php#L36" target="_blank">#see</a>
					</h4>
					<h5>
						Url where user will be redirected to after logging out.
					</h5>
					<h4>
						auth_login_url
						<a href="https://github.com/PhoxPHP/phoxphp/blob/master/public/config/auth.php#L41" target="_blank">#see</a>
					</h4>
					<h5>
						Url where user will be redirected to after login.
					</h5>
					<h4>
						auto_redirect
						<a href="https://github.com/PhoxPHP/phoxphp/blob/master/public/config/auth.php#L46" target="_blank">#see</a>
					</h4>
					<h5>
						Sets whether to enable auto redirecting when a user logs in and logs out. It accepts true or false and is default to false.
					</h5>
					<h4>
						auto_activate
						<a href="https://github.com/PhoxPHP/phoxphp/blob/master/public/config/auth.php#L76" target="_blank">#see</a>
					</h4>
					<h5>
						Sets whether user should be activated automatically when registered. It accepts true or false and is default to false.
					</h5>
					<h4>
						activation_check
						<a href="https://github.com/PhoxPHP/phoxphp/blob/master/public/config/auth.php#L81" target="_blank">#see</a>
					</h4>
					<h5>
						Sets whether a check should be made if user is activated when logging in. It accepts true or false and is default to true.
					</h5>
					<div class="ui-documentation-nav">
						<a href="#{siteUrl('docs/latest/authentication')}" class="prev">
							Previous: Authentication
						</a>
						<a href="#{siteUrl('docs/latest/authentication/usage')}" class="next">
							Next: Authentication usage
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
#stopView

#viewAs<"scripts">

#stopView