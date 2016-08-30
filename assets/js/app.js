jQuery(document).foundation();

Macy.init({
	container: '.collage',
	waitForImages: false,
	columns: 4,
	trueOrder: true,
	breakAt: {
        1024: 4,
        640: 2
    }

});