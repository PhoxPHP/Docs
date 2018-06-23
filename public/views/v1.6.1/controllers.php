#parent<"layout">

#viewAs<"title">
	PhoxPHP - Controllers
#stopView

#viewAs<"misc">
	<script type="text/javascript">
		window.label = 'controllers';
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
						Controllers
					</h4>
					<h5>
						Controllers in MVC handles your application logic and stands in between the model and the view. Controllers also handles response sent to the client after processing a request.
					</h5>
					<h5>
						In this framework, controllers are located in public/controllers directory. <a href="https://github.com/PhoxPHP/phoxphp/tree/master/public/controllers" target="_blank">See here</a>.
					</h5>
					<h4>
						Basic example
					</h4>
					<h5>
						Here is an example of a route, controller, model and view.
					</h5>
<pre class="code slim">
<a>routes.php</a><span class="var">$router</span><span class="arrow">-></span><span class="var">get</span>(<span class="str">'/items'</span>, <span class="str">'ItemController@all'</span>);
</pre>
<pre class="code slim">
<a>ItemController.php</a>
<span class="class">use</span> Item;

<span class="class">class</span> ItemController <span class="class">extends</span> Controller
{
    public <span class="arrow">function</span> all()
    {
        <span class="var">$item</span> <span class="arrow">=</span> <span class="arrow">new</span> Item();

        <span class="var">$items</span> <span class="arrow">=</span> <span class="var">$item</span><span class="arrow">-></span>all();

        <span class="var">$view</span> <span class="arrow">=</span> <span class="var">$this</span><span class="arrow">-></span>view()<span class="arrow">-></span>setVariable(<span class="str">'items'</span>, <span class="var">$items</span>);

        <span class="var">$view</span><span class="arrow">-></span>render(<span class="str">'items'</span>);
    }

}
</pre>
<pre class="code slim html"><a>home.php</a><span>&#35;each<$items : $item>
    Item name is &#35;{$item->name}
&#35;stopEach</span>
</pre>
					<h4>
						Route parameters
					</h4>
					<h5>
						To access route parameters, you need to pass a parameter to the method that is called. The parameter returns an array of parameters keys and values.
					</h5>
<pre class="code slim">
<a>routes.php</a><span class="var">$router</span><span class="arrow">-></span><span class="var">get</span>(<span class="str">'/item/:id'</span>, <span class="str">'ItemController@getItem'</span>);
</pre>
<pre class="code slim"><a>ItemController.php</a>
<span class="class">use</span> Item;
<span class="class">use</span> App\Controller;

<span class="class">class</span> ItemController <span class="class">extends</span> Controller
{
    public <span class="arrow">function</span> getItem(<span class="var">$params</span>, \Kit\Auth\Auth <span class="var">$auth</span>)
    {
        <span class="var">$item</span> <span class="arrow">=</span> Item::findById(<span class="var">$params[<span class="str">'id'</span>]</span>);
    }

}
</pre>
					<div class="ui-documentation-nav">
						<a href="#{siteUrl('docs/latest/authentication/usage')}" class="prev">
							Previous: Authentication usage
						</a>
						<a href="#{siteUrl('docs/latest/caching')}" class="next">
							Next: Caching
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
#stopView

#viewAs<"scripts">

#stopView