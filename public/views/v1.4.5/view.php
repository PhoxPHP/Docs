#parent<"layout">

#viewAs<"title">
	PhoxPHP - View
#stopView

#viewAs<"misc">
	<script type="text/javascript">
		window.label = 'view';
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
						View
					</h4>
					<h5>
						This framework comes with it's own template engine called <a href="https://github.com/PhoxPHP/PhoxEngine" target="_blank" title="PhoxEngine">PhoxEngine</a>.
					</h5>
					<h5>
						<a href="https://github.com/PhoxPHP/PhoxEngine" target="_blank" title="PhoxEngine">PhoxEngine</a> is a custom template engine built in php. It uses regular expression for most of it's operations.
					</h5>
					<h4>
						Configuration
					</h4>
					<h5>
						Configuration file for this component is located in <a>public/config/view.phoxengine.php</a>.
						<br>
						Here is what the configuration looks like:
					</h5>
<pre class="code slim"><a>view.phoxengine.php</a>// templates path
<span class="str">'path'</span> <span class="arrow">=></span> dirname(__DIR__) . <span class="str">'/templates'</span>,

// default template files extension
<span class="str">'extension'</span> <span class="arrow">=></span> <span class="str">'php'</span>,

// if set to true, templates will be cached and will be loaded from cache when it is requested.
<span class="str">'enable_caching'</span> <span class="arrow">=></span> false,

// cached templates path
<span class="str">'cache_path'</span> <span class="arrow">=></span> dirname(__DIR__) . <span class="str">'/cache/'</span>,

// enabled system modules
<span class="str">'system_modules'</span> <span class="arrow">=></span> [
    \Kit\PhoxEngine\Directives\Each::class,
    \Kit\PhoxEngine\Directives\Setter::class,
    \Kit\PhoxEngine\Directives\Getter::class,
    \Kit\PhoxEngine\Directives\_If::class,
    \Kit\PhoxEngine\Directives\_Else::class,
    \Kit\PhoxEngine\Directives\_ElseIf::class,
    \Kit\PhoxEngine\Directives\Raw::class,
    \Kit\PhoxEngine\Directives\Cookie::class,
    \Kit\PhoxEngine\Directives\_Include::class,
]
</pre>
					<h4>
						Using as standalone
					</h4>
					<h5>
						This template engine can also be used with other projects or just standalone. Below is an example usage on how to use it.
					</h5>
					<h5>
						Note: It is assumed that you have already installed this component.
					</h5>
					<h4>
						Basic usage
					</h4>
<pre class="code slim"><span class="arrow">include</span> <span class="str">'vendor/autoload.php'</span>;

<span class="var">$repository</span> <span class="arrow">=</span> <span class="arrow">new</span> \Kit\PhoxEngine\Repository();
<span class="var">$repository</span><span class="arrow">-></span>setView(<span class="str">'index'</span>);
<span class="var">$renderer</span> <span class="arrow">=</span> <span class="arrow">new</span> \Kit\PhoxEngine\Renderer(<span class="var">$repository</span>);
echo <span class="var">$renderer</span><span class="arrow">-></span>render();
</pre>
					<h4>
						Using in framework.
					</h4>
					<h5>
						When using this view in the framework, you do not need to create instances of either <a>Renderer</a> or <a>Repository</a>.
					</h5>
<pre class="code slim"><a>rendering in controller</a><span class="var">$view</span> <span class="arrow">=</span> <span class="var">$this</span><span class="arrow">-></span>setVariable(<span class="str">'name'</span>, <span class="str">'Hello world'</span>);
<span class="var">$view</span><span class="arrow">-></span>render();
</pre>
					<h4>
						Basic usage
					</h4>
					<h5 class="title">
						setView(<i>String</i> $view)
					</h5>
					<h6>
						Sets the view to be rendered.
					</h6>
					<h5 class="title">
						setPath(<i>String</i> $path)
					</h5>
					<h6>
						Sets the templates path.
					</h6>
					<h5 class="title">
						setExtension(<i>String</i> $extension)
					</h5>
					<h6>
						Sets the views extension.
					</h6>
					<h5 class="title">
						setVariable(<i>String</i> $variable, $value)
					</h5>
					<h6>
						Sets a view variable. This method returns the view object.
					</h6>
					<h5 class="title">
						getView()
					</h5>
					<h6>
						Returns the view to be rendered.
					</h6>
					<h5 class="title">
						getPath()
					</h5>
					<h6>
						Returns templates path.
					</h6>
					<h5 class="title">
						getExtension()
					</h5>
					<h6>
						Returns view extension.
					</h6>
					<h5 class="title">
						getVariable(<i>String</i> $variable)
					</h5>
					<h6>
						Returns a variable value.
					</h6>
					<h5 class="title">
						getVariables()
					</h5>
					<h6>
						Returns an array of variables.
					</h6>
					<h5 class="title">
						getOpt(<i>String</i> $option=null)
					</h5>
					<h6>
						Returns a configuration option if it exists or returns null if it does not.
					</h6>
					<h5 class="title">
						getViewWithExtension()
					</h5>
					<h6>
						Returns a template's full path with extension.
					</h6>
					<h5 class="title">
						getViewPath()
					</h5>
					<h6>
						Returns a template's full path without extension.
					</h6>
					<h4>
						Working with inheritance
					</h4>
<pre class="code slim"><a>view.php</a>#parent&lt;"layout"&gt;

#viewAs&lt;"content_block"&gt;

&#35;stopViewAs
</pre>
					<h5>
						And in layout.php
					</h5>
<pre class="code slim"><a>layout.php</a>&#35;contain<"content_block">
</pre>
					<h5>
						Note that when using template inheritance, only the data that is defined in the blocks will be returned. That is, any data outside the blocks will be ignored.
					</h5>
					<h4>
						The &#35;if, &#35;else and &#35;stopIf tags
					</h4>
<pre class="code slim">
&#35;if<$results>
    
    do this.....

&#35;else
    
    do that.....

&#35;stopIf	
</pre>
					<h4>
						The &#35;set tag
					</h4>
					<h5>
						The set tag helps you to set variables in your view. It is just like writing: $var = 'value;
					</h5>
<pre class="code slim">
&#35;set&#x3C;&nbsp;var, 'value'&gt;
</pre>
					<h4>
						The output tag: &#35;{data}
					</h4>
					<h5>
						The output tag is a bit different to other tags in available in this engine. It does not make use of arrow brackets but uses curly brackets instead. This tag is mainly used to echo out data.
					</h5>
<pre class="code slim">&#35;{phpinfo()}
</pre>
					<h5>
						This tag also allows the use of filters. Filters are methods used to modify the output of a variable value. Each filter is a method in the filters class which can be changed in the configuration file. To use a filter, you need to separate the initial value and the filter parameters with a semi-colon as shown below:
					</h5>
<pre class="code slim">
&#35;{'Name' | concat | 'is a string' | ' - '}
// Output: 'Name - is a string'
</pre>
					<h5>
						In the example above, we used the concat filter method. The method separates two strings and accepts three arguments. Here is the template usage explaination.
					</h5>
					<div class="ui-documentation-info-block">
						<p>
							The first argument is the initial value and the filter method's first parameter.
						</p>
						<p>
							The second argument is the filter method name.
						</p>
						<p>
							The third argument is the filter method's second parameter.
						</p>
						<p>
							The fourth argument is the filter method's third argument.
						</p>
					</div>
					<h4>
						The &#35;each tags
					</h4>
					<h5>
						The each tag is used to loop over an array just like the php's foreach loop. But in this case, you can pass only the array that you need in that tag's bracket and you can access the $index and value dynamically.
					</h5>
<pre class="code slim">
    &#35;each<$results>
        Index is &#35;{$index} and value is &#35;{$value}.
    &#35;stopEach	
</pre>
					<h5>
						You can also assign custom index and value variables yourself.
					</h5>
<pre class="code slim">
    &#35;each<$results : $myIndex : $myValue>
        Index is &#35;{$myIndex} and value is &#35;{$myValue}.
    &#35;stopEach
</pre>
					<h4>
						The &#35;php tag
					</h4>
					<h5>
						This tag allows you to write raw php in your templates.
					</h5>
<pre class="code slim">
&#35;php<(1 == 1) ? "yes" : "no">
</pre>
					<h4>
						The &#35;include tag
					</h4>
					<h5>
						The #include tag is used to include template files just like php's include function does.
					</h5>
<pre class="code slim">
&#35;include<"partial_template">
</pre>
					<h4>
						The &#35;cookie tag
					</h4>
<pre class="code slim">
&#35;cookie<"cookie_name">
</pre>					
					<div class="ui-documentation-nav">
						<a href="#{siteUrl('docs/latest/session')}" class="prev" title="Session">
							Previous: Session
						</a>
						<a href="#{siteUrl('docs/contributing')}" class="next" title="Contributing">
							Next: Contributing
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
#stopView

#viewAs<"scripts">

#stopView