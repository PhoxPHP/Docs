#parent<"layout">

#viewAs<"title">
	PhoxPHP - Routing
#stopView

#viewAs<"misc">
	<script type="text/javascript">
		window.label = 'routing';
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
						Routing
					</h4>
					<h5>
						In this framework, routes file is located in public/config/routes.php.
					</h5>
					<h4>
						Basic example
					</h4>
<pre class="code slim"><a>routes.php</a><span class="var">$route</span><span class="arrow">-></span>get(<span class="str">'/page'</span>, <span class="str">'PagesController@getPage'</span>);
</pre>
				<h5>
					Route methods accept three arguments with the third argument being optional. The first argument is the pattern that needs to match the request uri and the second argument is the controller and action that needs to be called. In the example above, you will see that the controller and the method are separated by a @ symbol with the controller being the first and the method being the second.
				</h5>
				<h5>
					The third argument(optional) is an array of keys and values that is used to validate route parameters using regular expression.
				</h5>
				<h5>
					The second argument, alternatively accepts a closure.
				</h5>
<pre class="code slim"><a>routes.php</a><span class="var">$route</span><span class="arrow">-></span>get(<span class="str">'/page'</span>, function(<span class="var">$req</span>, <span class="var">$app</span>) {
    // return .....
});
</pre>
					<h4>
						Route methods
					</h4>
					<table class="table">
						<tbody>
							<tr>
								<th>Http Verb</th>
								<th>Route method</th>
							</tr>
							<tr>
								<td>GET</td>
								<td>Route::get</td>
							</tr>
							<tr>
								<td>POST</td>
								<td>Route::post</td>
							</tr>
							<tr>
								<td>PUT</td>
								<td>Route::put</td>
							</tr>
							<tr>
								<td>DELETE</td>
								<td>Route::delete</td>
							</tr>
						</tbody>
					</table>
					<h5 class="title">
						get(url, action, parameters)
					</h5>
<pre class="code slim"><a>routes.php</a><span class="var">$route</span><span class="arrow">-></span>get(<span class="str">'/page/:id'</span>, <span class="str">'PagesController@getPage'</span>);
</pre>

					<h5 class="title">
						post(url, action, parameters)
					</h5>
<pre class="code slim"><a>routes.php</a><span class="var">$route</span><span class="arrow">-></span>post(<span class="str">'/page'</span>, <span class="str">'PagesController@createPage'</span>);
</pre>

					<h5 class="title">
						put(url, action, parameters)
					</h5>
<pre class="code slim"><a>routes.php</a><span class="var">$route</span><span class="arrow">-></span>put(<span class="str">'/page/:id'</span>, <span class="str">'PagesController@updatePage'</span>);
</pre>

					<h5 class="title">
						delete(url, action, parameters)
					</h5>
<pre class="code slim"><a>routes.php</a><span class="var">$route</span><span class="arrow">-></span>delete(<span class="str">'/page/:id'</span>, <span class="str">'PagesController@deletePage'</span>);
</pre>
					<h4>
						Route parameters
					</h4>
					<h5>
						You can validate your route parameters using regular expressions.
					</h5>
<pre class="code slim"><a>routes.php</a><span class="var">$route</span><span class="arrow">-></span>get(<span class="str">'/page/:id'</span>, <span class="str">'PagesController@getPage'</span>, [<span class="str">'id'</span> <span class="arrow">=></span> <span class="str">'0-9+'</span>]);
</pre>
					<h5>
						And in your controller, you can retrieve the id like this:
					</h5>
<pre class="code slim"><a>PagesController</a><span class="arrow">use</span> App\Controller;

<span class="arrow">class</span> PagesController <span class="arrow">extends</span> Controller
{
    public <span class="arrow">function</span> getPage($params)
    {
    	<span class="var">$pageId</span> <span class="arrow">=</span> <span class="var">$params</span>[<span class="str">'id'</span>];
    }

}
</pre>				
					<h4>
						Naming routes
					</h4>
					<h5>
						To name a route, just chain the <a href="https://github.com/PhoxPHP/Http/blob/master/src/Router/Repository.php#L342" target="_blank">alias</a> method and pass the name of the route as it's argument as it requires only one argument.
					</h5>
<pre class="code slim"><a>routes.php</a><span class="var">$route</span><span class="arrow">-></span>get(<span class="str">'/page/:id'</span>, <span class="str">'PagesController@getPage'</span>, [<span class="str">'id'</span> <span class="arrow">=></span> <span class="str">'0-9+'</span>])
<span class="arrow">-></span>alias(<span class="str">'get_page'</span>);
</pre>

					<h4>
						Filters
					</h4>
					<h5>
						You can use filters to perform logical operations before and after controller method or closure is called.  
					</h5>
					<h5>
						Here are the two filter methods.
					</h5>
					<div class="ui-documentation-info-block">
						<p>
							i. before - Runs before controller method or closure is called.
						</p>
						<p>
							ii. after - Runs after controller method or closure is called.
						</p>
					</div>
					<h4>
						Configuration
					</h4>
					<h5>
						Filters are registered in <a>public/config/router.php</a>.
					</h5>
<pre class="code slim"><a>router.php</a><span class="str">'filters'</span> <span class="arrow">=></span> [
    <span class="str">'app'</span> <span class="arrow">=></span> AppFilter::class
]
</pre>
					<h4>
						Using filters
					</h4>
					<h5>
						All filter classes must implement <a>ControllerFilterContract</a> interface and they must have the call method with two parameters.
					</h5>
					<h5>
						Now let's try and create the <a>AppFilter</a> filter class. Filter classes are saved in <a>public/filters.</a>
					</h5>
<pre class="code slim"><a>routes.php</a><span class="var">$route</span><span class="arrow">-></span>get(<span class="str">'/user'</span>, <span class="str">'UsersController@profile'</span>)<span class="arrow">-></span>before(<span class="str">'app'</span>);
</pre>

<pre class="code slim"><a>AppFilter.php</a>
<span class="class">use</span> Kit\Http\Router\Contracts\ControllerFilterContract;

<span class="class">class</span> AppFilter <span class="class">implements</span> ControllerFilterContract
{
    /**
    * {@inheritDoc}
    */
    public <span class="arrow">function</span> call(<span class="var">$request</span>, <span class="var">$response</span>)
    {
        // If user is not logged in, redirect to login page.
        <span class="arrow">if</span>(<span class="arrow">!</span>user()) {
            <span class="var">$response</span><span class="arrow">-></span>goto(<span class="str">'/login'</span>);
        }
    }

}
</pre>
					<h5>
						You can also run the after the controller has been called by chaining the <a>after</a> method to the route object.
					</h5>
<pre class="code slim"><a>routes.php</a><span class="var">$route</span><span class="arrow">-></span>get(<span class="str">'/user'</span>, <span class="str">'UsersController@profile'</span>)
	<span class="arrow">-></span>before(<span class="str">'app'</span>)
	<span class="arrow">-></span>after(<span class="str">'app'</span>);
</pre>
					<div class="ui-documentation-nav">
						<a href="#{siteUrl('docs/latest/database')}" class="prev">
							Previous: Database
						</a>
						<a href="#{siteUrl('docs/latest/session')}" class="next">
							Next: Session
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
#stopView

#viewAs<"scripts">

#stopView