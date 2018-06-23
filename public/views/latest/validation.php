#parent<"layout">

#viewAs<"title">
	PhoxPHP - Validation
#stopView

#viewAs<"misc">
	<script type="text/javascript">
		window.label = 'validation';
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
						Validation <a>new in</a> <span>[v1.4.5]</span>
					</h4>
					<h5>
						It is always a good idea to validate incoming inputs either from users or from any other source. This is why we have added this validation component in this new version.
					</h5>
					<h4>
						Configuration
					</h4>
					<h5>
						Configuration file for this component is in <a>public/config/validation.php</a>. The configuration includes validation rules classes and message formats.
					</h5>
					<h4>
						Usage
					</h4>
					<h5>
						You can either create an instance of the <a>Validator</a> class yourself using:
					</h5>
<pre class="code slim"><span class="var">$validator</span> <span class="arrow">= new</span> Kit\Validator\Validator();</pre>
					<h5>
						or get the registered service.
					</h5>
<pre class="code slim"><span class="var">$validator</span> <span class="arrow">=</span> app()->load(<span class="str">'validator'</span>);</pre>
					<h5>
						This validation component comes with quite a few rules and these rules can be seen in the configuration file. Let's see the format for validating an input.
					</h5>
<pre class="code slim"><span class="var">$validator</span> <span class="arrow">=</span> app()->load(<span class="str">'validator'</span>);
<span class="var">$validator</span><span class="arrow">-></span>createRule(<span class="str">'rule_label'</span>, <span class="str">'input_to_validate'</span>, <span class="str">'rule'</span>);
</pre>
					<h4>
						Basic example
					</h4>
<pre class="code slim"><span class="var">$validator</span> <span class="arrow">=</span> app()->load(<span class="str">'validator'</span>);
<span class="var">$validator</span><span class="arrow">-></span>createRule(<span class="str">'username'</span>, null, <span class="str">'required'</span>);
<span class="var">$validator</span><span class="arrow">-></span>createRule(<span class="str">'password'</span>, null, <span class="str">'required'</span>);
<span class="var">$validator</span><span class="arrow">-></span>createRule(<span class="str">'age'</span>, <span class="str">'randomString'</span>, <span class="str">'integer'</span>);

<span class="arrow">if</span>(<span class="var">$validator</span><span class="arrow">-></span>hasErrors()) {
    pre(<span class="var">$validator</span><span class="arrow">-></span>getErrorsIndexWithKey());
}
</pre>
					<h4>
						Validator methods
					</h4>
					<h5 class="title">
						createRule(<i>String</i> $label, <i>Mixed</i> $inputValue, <i>String</i> $ruleName, <i>...</i> $options)
					</h5>
					<h6>
						Creates a validation rule.
					</h6>
<pre class="code slim"><span class="var">$validator</span> <span class="arrow">=</span> app()->load(<span class="str">'validator'</span>);
<span class="var">$validator</span><span class="arrow">-></span>createRule(<span class="var">$label</span>, <span class="var">$inputValue</span>, <span class="var">$ruleName</span>);
</pre>

					<h5 class="title">
						hasErrors()
					</h5>
					<h6>
						Checks if validation has any errors.
					</h6>
<pre class="code slim"><span class="var">$validator</span> <span class="arrow">=</span> app()->load(<span class="str">'validator'</span>);
<span class="var">$validator</span><span class="arrow">-></span>createRule(<span class="var">$label</span>, <span class="var">$inputValue</span>, <span class="var">$ruleName</span>);

<span class="arrow">if</span>(<span class="var">$validator</span><span class="arrow">-></span>hasErrors()) {
    //
}
</pre>

					<h5 class="title">
						getAllErrors()
					</h5>
					<h6>
						Returns all validation errors.
					</h6>
<pre class="code slim"><span class="var">$validator</span> <span class="arrow">=</span> app()->load(<span class="str">'validator'</span>);
<span class="var">$validator</span><span class="arrow">-></span>createRule(<span class="var">$label</span>, <span class="var">$inputValue</span>, <span class="var">$ruleName</span>);

<span class="var">$errors</span> <span class="arrow">=</span> <span class="var">$validator</span><span class="arrow">-></span>getAllErrors();
</pre>

					<h5 class="title">
						getRuleErrors(<i>String</i> $label)
					</h5>
					<h6>
						Returns a rule errors since a rule can have many errors attached to it.
					</h6>
<pre class="code slim"><span class="var">$validator</span> <span class="arrow">=</span> app()->load(<span class="str">'validator'</span>);
<span class="var">$validator</span><span class="arrow">-></span>createRule(<span class="var">$label</span>, <span class="var">$inputValue</span>, <span class="var">$ruleName</span>);

<span class="var">$errors</span> <span class="arrow">=</span> <span class="var">$validator</span><span class="arrow">-></span>getRuleErrors(<span class="var">$label</span>);
</pre>

					<h5 class="title">
						getErrorsIndex()
					</h5>
					<h6>
						Returns array of all rules first error.  
					</h6>
<pre class="code slim"><span class="var">$validator</span> <span class="arrow">=</span> app()->load(<span class="str">'validator'</span>);
<span class="var">$validator</span><span class="arrow">-></span>createRule(<span class="var">$label</span>, <span class="var">$inputValue</span>, <span class="var">$ruleName</span>);

<span class="var">$errors</span> <span class="arrow">=</span> <span class="var">$validator</span><span class="arrow">-></span>getErrorsIndex();
</pre>

					<h5 class="title">
						getErrorsIndexWithKey()
					</h5>
					<h6>
						Returns array of all rules first with each rule's label as the array keys error.  
					</h6>
<pre class="code slim"><span class="var">$validator</span> <span class="arrow">=</span> app()->load(<span class="str">'validator'</span>);
<span class="var">$validator</span><span class="arrow">-></span>createRule(<span class="var">$label</span>, <span class="var">$inputValue</span>, <span class="var">$ruleName</span>);

<span class="var">$errors</span> <span class="arrow">=</span> <span class="var">$validator</span><span class="arrow">-></span>getErrorsIndexWithKey();
</pre>
					
					<h4>
						Custom validation
					</h4>
					<h5>
						This validation component allows you to create custom validation rules classes. These classes are located in <a>public/validators</a> directory and each class must extend <a>Kit\Validator\Contracts\AbstractRuleContract</a> abstract class and implement <a>Kit\Validator\Contracts\RuleContract</a> interface. 
					</h5>
					<div class="ui-documentation-nav">
						<a href="#{siteUrl('docs/latest/session')}" class="prev">
							Previous: Session
						</a>
						<a href="#{siteUrl('docs/latest/view')}" class="next">
							Next: View
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
#stopView

#viewAs<"scripts">

#stopView