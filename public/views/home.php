#parent<"layout">

#viewAs<"title">
	PhoxPHP - Lightweight, modern PHP framework. Official PhoxPHP website.
#stopView

#viewAs<"misc">
	<script type="text/javascript">
		window.label = 'home';
	</script>
#stopView

#viewAs<"content">
	<div class="ui-home col-12">
		<div class="ui-home-index">
			<div class="container">
				<div class="row">
					<h1>
						Lightweight, modern PHP framework.
						<a href="#{siteUrl('docs/latest')}">
							Learn now
						</a>
					</h1>
				</div>
			</div>
		</div>
		<div class="ui-home-features">
			<h2>
				Top features
			</h2>
			<div class="container">
				<div class="row">
					<div class="ui-home-features-ft col-12 col-sm-6 col-md-3">
						<h3>Custom template engine</h3>
						<p>
							This framework comes with it's own template engine.
						</p>
					</div>
					<div class="ui-home-features-ft col-12 col-sm-6 col-md-3">
						<h3>Authentication</h3>
						<p>
							This framework comes with authentication on the go. You do not need to write your own authentication but rather extend it if it does not meet your requirements.
						</p>
					</div>
					<div class="ui-home-features-ft col-12 col-sm-6 col-md-3">
						<h3>Highly customizable</h3>
						<p>
							With almost all the components having a configuration setup, you can customize the framework to your needs.
						</p>
					</div>
					<div class="ui-home-features-ft col-12 col-sm-6 col-md-3">
						<h3>PHP 7</h3>
						<p>
							Supports PHP 7 or later to make more features available to you.
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="ui-home-community col-12">
			<h2>
				Contributing
			</h2>
			<div class="container">
				<div class="row">
					<div class="ui-home-community-index col-12 col-sm-12 col-md-6">
						<h3>
							To contribute to this framework, please check our <a href="#{siteUrl('docs/contributing')}" target="_blank">contribution guide.</a>
						</h3>
					</div>
					<div class="ui-home-community-last col-12 col-sm-12 col-md-6">
						<h3>
							<img src="#{siteUrl('assets/img/201805/teamwork.svg')}" alt="PhoxPHP">
						</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="ui-home-version col-12">
			<h2>
				Installation
			</h2>
			<div class="container">
				<div class="row">
					<div class="ui-home-version-index col-12 col-sm-12 col-md-6">
						<h3>
							<img src="#{siteUrl('assets/img/install.svg')}" alt="PhoxPHP">
						</h3>
					</div>
					<div class="ui-home-version-last col-12 col-sm-12 col-md-6">
						<h3>
							It is recommended to install the framework package using composer. For more information on how to use composer,
							please visit <a href="https://getcomposer.org" target="_blank">here</a>.
						</h3>
						<h4>
							Using the <b>create-project</b> command:
						</h4>
						<pre>
							composer create-project phoxphp/phoxphp hello-world
						</pre>
						<h5>
							The command above installs the framework  package and it's dependencies into the <i>hello-world</i> folder.
							<br>
							<br>
							There are more ways by which the framework package can be installed. Go <a href="#{siteUrl('docs/latest/installation')}">here</a>
							to check them out.
						</h5>
					</div>
				</div>
			</div>
		</div>
		<div class="ui-home-newsletter col-12">
			<h2>Want to receieve updates about new features, versions?</h2>
			<div class="container">
				<form class="row ui-home-newsletter-form" action="" method="POST">
					<div class="ui-home-newsletter-form-email col-12 col-sm-4">
						<input type="email" name="email" required placeholder="Your email address" title="Email address">
					</div>
					<div class="ui-home-newsletter-form-name col-12 col-sm-4">
						<input type="text" name="name" required placeholder="Your name" title="Name">
					</div>
					<div class="ui-home-newsletter-form-button col-12 col-sm-4">
						<button>Subscribe</button>
					</div>
				</form>
			</div>
		</div>
		<div id="modal" class="iziModal" data-izimodal-group="alerts">
			#if<$session->hasFlash('success')>
				<h4 class="modalh4">
					
				</h4>
			#stopIf
		</div>
		<a href="#" data-izimodal-open="#modal" data-izimodal-transitionin="fadeInDown" id="idModalShow" class="hidden">Modal</a>
	</div>

#stopView

#viewAs<"scripts">
	#if<$session->hasFlash('success')>
		<script type="text/javascript">
			$('#idModalShow').click();
			$('.iziModal-content h4').html("#{$session->getFlash('success')}");
		</script>
	#stopIf
#stopView