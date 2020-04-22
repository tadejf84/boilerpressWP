// import SASS files to webpack
import '../sass/main.scss';

// if using jQuery, otherwise remove this part and write vanilla JS instead
(function ($, root, undefined) {

	$(function () {

		'use strict';

		$(document).ready(function() {

            console.log('main script loaded!!!');

		});

	});

})(jQuery, this);
