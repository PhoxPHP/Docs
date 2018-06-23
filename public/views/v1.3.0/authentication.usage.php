#parent<"layout">

#viewAs<"title">
	PhoxPHP - Authentication usage
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
						Authentication usage
					</h4>
					<h5>
						Before using this component, we recommend that you have your authentication table already created and should have the following fields:
					</h5>
					<div class="ui-documentation-info-block">
						<p>
							i. email
						</p>
						<p>
							ii. password
						</p>
						<p>
							iii. session_token
						</p>
						<p>
							iv. remember_token
						</p>
						<p>
							v. is_activated
						</p>
						<p>
							vi. confirmation_code
						</p>
						<p>
							vii. is_blocked
						</p>
					</div>
					<h4>
						Basic example
					</h4>
					<h5>
						Here is a basic example of how authentication works.
					</h5>
<pre class="code slim">
// in public/config/routes.php
<span class="var">$route</span><span class="arrow">-></span>post(<span class="str">'signup'</span>, <span class="str">'ProfileController@createAccount'</span>);
<span class="var">$route</span><span class="arrow">-></span>post(<span class="str">'login'</span>, <span class="str">'ProfileController@login'</span>);
</pre>
<pre class="code slim">

<span class="class">class</span> ProfileController
{

	public <span class="arrow">function</span> createAccount()
	{
            <span class="var">$auth</span> = app()<span class="arrow">-></span>load(<span class="str">'auth'</span>);

            <span class="var">$email</span> = <span class="var">$this</span><span class="arrow">-></span><span class="var">request</span><span class="arrow">-></span>getInput(<span class="str">'email'</span>);
            <span class="var">$password</span> = <span class="var">$this</span><span class="arrow">-></span><span class="var">request</span><span class="arrow">-></span>getInput(<span class="str">'password'</span>);
            <span class="var">$firstname</span> = <span class="var">$this</span><span class="arrow">-></span><span class="var">request</span><span class="arrow">-></span>getInput(<span class="str">'firstname'</span>);
            <span class="var">$lastname</span> = <span class="var">$this</span><span class="arrow">-></span><span class="var">request</span><span class="arrow">-></span>getInput(<span class="str">'lastname'</span>);

            <span class="var">$auth</span><span class="arrow">-></span>register(
                <span class="var">$email</span>,
                <span class="var">$password</span>,
                    [
                        <span class="str">'firstname'</span> <span class="arrow">=></span> <span class="var">$firstname</span>,
                        <span class="str">'lastname'</span> <span class="arrow">=></span> <span class="var">$lastname</span>
                    ]
            );
            
            // If auto_login is enabled, then the user will be logged in automatically.
	}

	public <span class="arrow">function</span> login()
	{
	    <span class="var">$auth</span> = app()<span class="arrow">-></span>load(<span class="str">'auth'</span>);

	    <span class="var">$email</span> = <span class="var">$this</span><span class="arrow">-></span><span class="var">request</span><span class="arrow">-></span>getInput(<span class="str">'email'</span>);
	    <span class="var">$password</span> = <span class="var">$this</span><span class="arrow">-></span><span class="var">request</span><span class="arrow">-></span>getInput(<span class="str">'password'</span>);

	    // login the user.
	    <span class="var">$auth</span><span class="arrow">-></span>login(
		<span class="var">$email</span>,
		<span class="var">$password</span>
	    <span class="var">);</span>
	}

}
</pre>
					<h4>
						Authentication methods
					</h4>
					<h5 class="title">
						register($email, $password, [$additionalFields])
					</h5>
					<h6>
						Registers a user.
					</h6>
<pre class="code slim">
<span class="var">$auth</span> = app()<span class="arrow">-></span>load(<span class="str">'auth'</span>);

<span class="var">$email</span> = <span class="var">$this</span><span class="arrow">-></span><span class="var">request</span><span class="arrow">-></span>getInput(<span class="str">'email'</span>);
<span class="var">$password</span> = <span class="var">$this</span><span class="arrow">-></span><span class="var">request</span><span class="arrow">-></span>getInput(<span class="str">'password'</span>);
<span class="var">$firstname</span> = <span class="var">$this</span><span class="arrow">-></span><span class="var">request</span><span class="arrow">-></span>getInput(<span class="str">'firstname'</span>);
<span class="var">$lastname</span> = <span class="var">$this</span><span class="arrow">-></span><span class="var">request</span><span class="arrow">-></span>getInput(<span class="str">'lastname'</span>);

<span class="var">$auth</span><span class="arrow">-></span>register(
    <span class="var">$email</span>,
    <span class="var">$password</span>,
    [
        <span class="str">'firstname'</span> <span class="arrow">=></span> <span class="var">$firstname</span>,
        <span class="str">'lastname'</span> <span class="arrow">=></span> <span class="var">$lastname</span>
    ]
);
</pre>
					<h5 class="title">
						login($email, $password)
					</h5>
					<h6>
						Logs a user in.
					</h6>
<pre class="code slim">
<span class="var">$auth</span> = app()<span class="arrow">-></span>load(<span class="str">'auth'</span>);

<span class="var">$email</span> = <span class="var">$this</span><span class="arrow">-></span><span class="var">request</span><span class="arrow">-></span>getInput(<span class="str">'email'</span>);
<span class="var">$password</span> = <span class="var">$this</span><span class="arrow">-></span><span class="var">request</span><span class="arrow">-></span>getInput(<span class="str">'password'</span>);

<span class="var">$auth</span><span class="arrow">-></span>login(
    <span class="var">$email</span>,
    <span class="var">$password</span>
);
</pre>
					<h5 class="title">
						logout
					</h5>
					<h6>
						Logs user out and destroys user sessions.
					</h6>
<pre class="code slim">
<span class="var">$auth</span> = app()<span class="arrow">-></span>load(<span class="str">'auth'</span>);

<span class="var">$auth</span><span class="arrow">-></span>logout();
</pre>
					<h5 class="title">
						activateAccount($confirmation_code)
					</h5>
					<h6>
						This method requires just one parameter which is the user's confirmation_code. By default, a user's account is not activated when registered but you can allow auto activation by setting auto_activate to true in the configuration settings.
					</h6>
<pre class="code slim">
<span class="var">$auth</span> = app()<span class="arrow">-></span>load(<span class="str">'auth'</span>);

<span class="var">$confirmation_code</span> = <span class="str">'***********'</span>;
<span class="var">$auth</span><span class="arrow">-></span>activateAccount(<span class="var">$confirmation_code</span>);
</pre>
					<h5 class="title">
						blockAccount($id_or_email)
					</h5>
					<h6>
						This method requires just one parameter which must either be the user's email or the user's id.
					</h6>
<pre class="code slim">
<span class="var">$auth</span> = app()<span class="arrow">-></span>load(<span class="str">'auth'</span>);

// Blocking account using email
<span class="var">$auth</span><span class="arrow">-></span>blockAccount(<span class="str">'user@email.com'</span>);

// Blocking account using id
<span class="var">$auth</span><span class="arrow">-></span>blockAccount(<span class="str">5</span>);
</pre>

					<h5 class="title">
						unblockAccount($id_or_email)
					</h5>
					<h6>
						This method requires just one parameter which must either be the user's email or the user's id.
					</h6>
<pre class="code slim">
<span class="var">$auth</span> = app()<span class="arrow">-></span>load(<span class="str">'auth'</span>);

// Unblocking account using email
<span class="var">$auth</span><span class="arrow">-></span>unblockAccount(<span class="str">'user@email.com'</span>);

// Unblocking account using id
<span class="var">$auth</span><span class="arrow">-></span>unblockAccount(<span class="str">5</span>);
</pre>

					<h5 class="title">
						deleteAccount($id_or_email)
					</h5>
					<h6>
						This method requires just one parameter which must either be the user's email or the user's id and returns true if the account deleted successfully.
					</h6>
<pre class="code slim">
<span class="var">$auth</span> = app()<span class="arrow">-></span>load(<span class="str">'auth'</span>);

// Deleting account using email
<span class="var">$auth</span><span class="arrow">-></span>deleteAccount(<span class="str">'user@email.com'</span>);

// Deleting account using id
<span class="var">$auth</span><span class="arrow">-></span>deleteAccount(<span class="str">5</span>);
</pre>

					<h5 class="title">
						changePassword($oldPassword, $newPassword)
					</h5>
					<h6>
						This method changes a user's password and returns true if password was changed successfully.
					</h6>
<pre class="code slim">
<span class="var">$auth</span> = app()<span class="arrow">-></span>load(<span class="str">'auth'</span>);

<span class="var">$oldPassword</span> = <span class="var">$this</span><span class="arrow">-></span><span class="var">request</span><span class="arrow">-></span>getInput(<span class="str">'oldPassword'</span>);
<span class="var">$newPassword</span> = <span class="var">$this</span><span class="arrow">-></span><span class="var">request</span><span class="arrow">-></span>getInput(<span class="str">'newPassword'</span>);

<span class="var">$auth</span><span class="arrow">-></span>changePassword(
    <span class="var">$oldPassword</span>,
    <span class="var">$newPassword</span>
);
</pre>
					<div class="ui-documentation-nav">
						<a href="#{siteUrl('docs/latest/authentication/configuration')}" class="prev">
							Previous: Authentication configuration
						</a>
						<a href="#{siteUrl('docs/latest/controllers')}" class="next">
							Next: Controllers
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
#stopView

#viewAs<"scripts">

#stopView