(function (window, document, undefined) {
	window.addEvent('load', function() { // dont need to fill domready
		$$('img').each(function(img) {
			var normal, rollover;

			if (img.src.indexOf('_normal') === -1)
				return;	// do nothing if image doesn't have _normal in name

			normal = img.src;
			rollover = img.src.replace('_normal', '_rollover'); // get both filenames

			new Asset.image(rollover, {
				onload: function() {
					img.addEvents({
						mouseenter: function() {
							img.src = rollover;
						},
						mouseleave: function() {
							img.src = normal;
						}
					});
				}
			});
		});
	});
})(this, this.document);