#parent<"layout">

#viewAs<"title">
	PhoxPHP - Caching
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
				#include<"partials/v1.4.5/docs-sidebar">
				<div class="ui-documentation-index-row-content col-12 col-sm-12 col-md-9">
					<h4>
						Caching
					</h4>
					<h4>
						Configuration
					</h4>
					<h5>
						Configuration file for caching is located in public/config/cache.php. Before diving into caching, you should know what the configuration looks like.
					</h5>
<pre class="code slim">
<a>cache.php</a>
// enables caching or not
<span class="str">'enabled'</span> <span class="arrow">=></span> <span class="str">true</span>,

// Default cache driver
<span class="str">'driver'</span> <span class="arrow">=></span> \Kit\Cache\Drivers\File::class,

// Cache lifetime in seconds
<span class="str">'duration'</span> <span class="arrow">=></span> 60,

// File cache storage location
<span class="str">'storage'</span> <span class="arrow">=></span> <span class="str">'storage/'</span>
</pre>
					<h4>
						Cache drivers
					</h4>
					<h5>
						There are just two cache drivers available in this framework at the moment. All cache drivers implement <a href="https://github.com/PhoxPHP/Cache/blob/master/src/Contract/CacheDriverContract.php" target="_blank">CacheDriverContract</a>.
					</h5>
					<div class="ui-documentation-info-block">
						<p>
							i. FileCacheDriver
						</p>
						<p>
							ii. ApcCacheDriver
						</p>
					</div>
					<h4>
						Caching methods
					</h4>
					<h5>
						Here is a list of available methods.
					</h5>
					<h5 class="title">
						register()
					</h5>
					<h6>
						This method accepts boolean. If set to true, the cache driver will be enabled.
					</h6>
					<h5 class="title">
						add(<i>String</i> $key, <i>Mixed</i> $value, <i>int</i> $duration)
					</h5>
					<h6>
						Adds a new cache to storage.
					</h6>
					<h5 class="title">
						get(<i>String</i> $key)
					</h5>
					<h6>
						Retrieves cache from storage.
					</h6>
					<h5 class="title">
						exists(<i>String</i> $key)
					</h5>
					<h6>
						Checks if a cache exists.
					</h6>
					<h5 class="title">
						delete(<i>String</i> $key)
					</h5>
					<h6>
						Deletes a cache from cache storage.
					</h6>
					<h5 class="title">
						hasExpired()
					</h5>
					<h6>
						Checks if a cache has expired.
					</h6>
					<h5 class="title">
						getCreatedDate(<i>String</i> $key)
					</h5>
					<h6>
						Returns time when cache was created. This method is only available in file cache.
					</h6>
					<h5 class="title">
						getExpirationDate(<i>String</i> $key)
					</h5>
					<h6>
						Returns a cache expiration date. This method is only available in file cache.
					</h6>
					<h5 class="title">
						increment(<i>String</i> $key, <i>int</i> $value=1)
					</h5>
					<h6>
						Increments a stored number in cache.
					</h6>
					<h5 class="title">
						decrement(<i>String</i> $key, <i>int</i> $value=1)
					</h5>
					<h6>
						Decrements a stored number in cache.
					</h6>
					<div class="ui-documentation-nav">
						<a href="#{siteUrl('docs/latest/controllers')}" class="prev">
							Previous: Controllers
						</a>
						<a href="#{siteUrl('docs/latest/di')}" class="next">
							Next: Dependency Injection
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
#stopView

#viewAs<"scripts">

#stopView