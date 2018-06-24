let docs = new class Docs {

	home(docs) {
		$('#modal').iziModal();
	}

	default(docs) {
		$('#uiMenuToggle').click(function() {
			$('#uiMenuTarget').slideToggle(200);
		});
	}

	documentation(docs) {
		//
	}

	use(label) {
		if (typeof label !== undefined && this[label] !== undefined) {
			this[label].call(this, Docs);
		}else{
			console.log('Error: No handle available to call.');
		}

		this.default();
	}

}