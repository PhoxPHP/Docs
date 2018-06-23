#parent<"layout">

#viewAs<"title">
	PhoxPHP - Filesystem
#stopView

#viewAs<"misc">
	<script type="text/javascript">
		window.label = 'filesystem';
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
						Working with files
					</h4>
					<h4>
						Basic example
					</h4>
<pre class="code slim"><a>creating a file</a><span class="var">$fs</span> <span class="arrow">=</span> <span class="arrow">new</span> Kit\Filesystem\File\FileManager(<span class="str">'new_file.txt'</span>); 
<span class="var">$fs</span><span class="arrow">-></span>create(); // creates file 'new_file.txt'
</pre>
					<h4>
						Methods
					</h4>
					<h5 class="title">
						create()
					</h5>
					<h6>
						Creates a new file.
					</h6>
					<h5 class="title">
						delete()
					</h5>
					<h6>
						Deletes a file from local storage.
					</h6>
					<h5 class="title">
						createIfNotExist()
					</h5>
					<h6>
						Creates a file but checks if it does not exists before creating it.
					</h6>
					<h5 class="title">
						exists()
					</h5>
					<h6>
						Checks if a file exists.
					</h6>
					<h5 class="title">
						getFileSize()
					</h5>
					<h6>
						Checks and returns file size in bytes.
					</h6>
					<h5 class="title">
						copyTo(<i>String</i> $newLocation)
					</h5>
					<h6>
						Copies a file to a new location.
					</h6>
					<h5 class="title">
						rename(<i>String</i> $newName)
					</h5>
					<h6>
						Renames a file.
					</h6>
					<h5 class="title">
						getModifiedTime()
					</h5>
					<h6>
						Returns the last time(unix timestamp) a file was modified.
					</h6>
					<h5 class="title">
						getLastAccessTime()
					</h5>
					<h6>
						Returns the last time(unix timestamp) a file was accessed.
					</h6>
					<h5 class="title">
						read()
					</h5>
					<h6>
						Returns the contents of a file.
					</h6>
					<h5 class="title">
						isWritable()
					</h5>
					<h6>
						Checks if a file is writable.
					</h6>
					<h5 class="title">
						isExecutable()
					</h5>
					<h6>
						Checks if a file is exeutable.
					</h6>
					<h5 class="title">
						write(<i>String</i> $data)
					</h5>
					<h6>
						Writes content into a file.
					</h6>
					<div class="ui-documentation-nav">
						<a href="#{siteUrl('docs/latest/cli')}" class="prev">
							Previous: Cli
						</a>
						<a href="#{siteUrl('docs/latest/database')}" class="next">
							Next: Database
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
#stopView

#viewAs<"scripts">

#stopView