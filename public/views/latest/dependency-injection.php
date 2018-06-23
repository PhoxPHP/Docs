#parent<"layout">

#viewAs<"title">
	PhoxPHP - Dependency Injection
#stopView

#viewAs<"misc">
	<script type="text/javascript">
		window.label = 'di';
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
						Dependency Injection
					</h4>
					<h5>
						Sometimes when building an application, you might want to pass a component as a dependency of another component. That is where dependency injection comes in. Mostly, if you want to pass a component class as a dependency, you have to pass it through to the constructor of the class that requires it.
					</h5>
					<h4>
						Basic usage
					</h4>
					<h5>
						Services are registered in public/config/services.php.
					</h5>
<pre class="code slim">
<a>services.php</a><span class="var">$di</span><span class="arrow">-></span>register(<span class="str">'class.id'</span>, \Namespace\Class::class);
</pre>
<pre class="code slim"><a>ItemController.php</a>
<span class="class">class</span> ItemController <span class="class">extends</span> Controller
{
    public <span class="arrow">function</span> all()
    {
        <span class="var">$var</span> <span class="arrow">=</span> app()<span class="arrow">-></span>load(<span class="var">'class.id'</span>);
    }
}
</pre>
					<h4>
						Injecting and passing dependencies
					</h4>
					<h5>
						So let's say you have a class that requires another dependency to be injected, you use the <a>setDefaultparameters</a> method like below.
					</h5>
<pre class="code slim"><a>BaseClass.php</a>
<span class="class">class</span> BaseClass
{
    protected  $anotherClass;

    public <span class="arrow">function</span> __construct(AnotherClass $anotherClass)
    {
        <span class="var">$this</span><span class="arrow">-></span><span class="var">anotherClass</span> <span class="arrow">=</span> <span class="var">$anotherClass</span>;
    }

    public <span class="arrow">function</span> getName()
    {
    	//
    }
}
</pre>
<pre class="code slim"><a>services.php</a><span class="var">$di</span><span class="arrow">-></span>register(<span class="str">'class.id'</span>, BaseClass::class)
<span class="arrow">-></span>setDefaultParameters(<span class="arrow">new</span> AnotherClass());
</pre>
<pre class="code slim"><a>ItemController.php</a><span class="class">use</span> App\Controller;

<span class="class">class</span> ItemController <span class="class">extends</span> Controller
{
    public <span class="arrow">function</span> all()
    {
        <span class="var">$var</span> <span class="arrow">=</span> app()<span class="arrow">-></span>load(<span class="var">'class.id'</span>);
    }
}
</pre>
					<h5>
						The example above uses constructor injection. Alternatively, you can use method injection by requiring and passing the dependency to the method that will be called. 
					</h5>
<pre class="code slim"><a>BaseClass.php</a>
<span class="class">class</span> BaseClass
{
    public <span class="arrow">function</span> __construct()
    {
        //
    }

    public <span class="arrow">function</span> getName(AnotherClass $anotherClass)
    {
    	// return .......
    }
}
</pre>
<pre class="code slim"><a>services.php</a><span class="var">$di</span><span class="arrow">-></span>register(<span class="str">'class.id'</span>, BaseClass::class)
<span class="arrow">-></span>setAction(<span class="str">'getName'</span>)
<span class="arrow">-></span>setDefaultParameters(<span class="arrow">new</span> AnotherClass());
</pre>
					<h5>
						Note: Automatic injection is not available in this version.
					</h5>		
					<div class="ui-documentation-nav">
						<a href="#{siteUrl('docs/latest/caching')}" class="prev">
							Previous: Caching
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