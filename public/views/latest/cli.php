#parent<"layout">

#viewAs<"title">
	PhoxPHP - Installation
#stopView

#viewAs<"misc">
	<script type="text/javascript">
		window.label = 'documentation';
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
						Cli
					</h4>
					<h5>
						The cli makes it easy to interace with your application from the terminal.
					</h5>
					<h4>
						Configuration
					</h4>
					<h5>
						Configuration file for this component is located in <i>root/public/config/console.php.</i>
					</h5>
					<h4>
						How to use
					</h4>
					<h5>
						After installing this framework, you will find a console file in the root directory. All commands are run in the root directory of your project and this file is used to run all available commands.
						<br>
						<br>
						Command objects are called <a title='PhoxPHP cli runnables'>runnables</a> in this framework.
					</h5>
					<h4>
						Listing available runnables
					</h4>
<pre class="code slim">php console help list-runnables</pre>
					<h5>
						The command above will return a list of available commands just like below:
					</h5>
<pre class='code slim'>
|       id | class
--------------------------------------------------
|     help | Kit\Console\Command\Help
--------------------------------------------------
|      app | ApplicationCommand
--------------------------------------------------
| migration | Kit\Glider\Console\Command\Migration
--------------------------------------------------
|     seed | Kit\Glider\Console\Command\Seed
--------------------------------------------------
</pre>
					<h4>
						Creating a runnable object
					</h4>
					<h5>
						To create a new runnable object, use the <a>help create-runnable</a> command.
					</h5>
<pre class='code slim'>
php console help create-runnable
</pre>
					<h5>
						When you run this command, you will be given some options like below:
					</h5>
<pre class='code slim'>
1. Runnable class name? [Required]
>  Your class name

2. Runnable class location? [Optional]
>  Where your class should be placed.

3. Runnable class namespace [Optional]
>  Namespace of runnable class.

4. Runnable command id? [Required]
>  Id or runnable class.

5. List of runnable commands[optional] [e:g create-route:4(number of arguments)]
>  Runnable command arguments. 
</pre>
					<h5>
						After creating the runnable object, you will have a runnable class like this:
					</h5>
<pre class='code slim'>
<span class='class'>use</span> Kit\Console\Command;
<span class='class'>use</span> Kit\Console\Environment;
<span class='class'>use</span> Kit\Console\Contract\Runnable;

<span class='class'>class</span> RunnableClass <span class='class'>implements</span> Runnable
{
	
	/**
	* @var      $env
	* @access   protected
	*/
	<span class='class'>protected</span>   <span class='var'>$env</span>;

	/**
	* @var      $cmd
	* @access   protected
	*/
	<span class='class'>protected</span>   <span class='var'>$cmd</span>;

	/**
	* {@inheritDoc}
	*/
	public <span class='class'>function</span> __construct(Environment <span class='var'>$env</span>, Command <span class='var'>$cmd</span>)
	{
	    <span class='var'>$this</span>->env = <span class='var'>$env</span>;
	    <span class='var'>$this</span>->cmd = <span class='var'>$cmd</span>;
	}

	/**
	* {@inheritDoc}
	*/
	public <span class='class'>function</span> getId() : String
	{
	    return 'id';
	}

	/**
	* {@inheritDoc}
	*/
	public <span class='class'>function</span> run(Array <span class='var'>$argumentsList</span>, int <span class='var'>$argumentsCount</span>)
	{

	}

	/**
	* {@inheritDoc}
	*/
	public <span class='class'>function</span> runnableCommands() : Array
	{
	    return [];
	}

}
</pre>
					<div class="ui-documentation-nav">
						<a href="#{siteUrl('docs/latest/di')}" title="phoxphp dependency injection" class="prev">
							Previous: Dependency injection
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