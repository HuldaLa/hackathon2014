(function($, w) {
	// Variables.
	var timelineContainerSelector = '.timeline_container';
	var templates = {};
	var templatesLoaded = false;
	var failedTemplatesCounter = 0;

	var console = (w.console || console);

	function loadTimeLine() {
		var ajax = $.ajax(
			timelineDataUrl,
			{
				dataType: 'json',
				success: function(response, status, XHR) {
					timeline_ajax_success_callback(response, status, XHR);
				},
				type: 'GET'
			}
		);
	}

	function timeline_ajax_success_callback(response, status, XHR) {
		if (status === 'success') {
			renderTimeLine(response);
		}
	}

	function getTemplate(name) {
		if (typeof(templates[name]) !== 'undefined') {
			var template = Handlebars.compile(templates[name]);
			return template;
		}
	}

	function getTimeLineContainer() {
		return $(timelineContainerSelector);
	}

	// Timeline functions.
	function renderTimeLine(data) {
		var eventCounter = 0;

		for (var i in data) {
			var point = data[i];

			for (var x in point) {
				var event = point[x];

				var $element = $(createTimeLineElement(event));

				if (eventCounter % 2 === 0) {
					$element.addClass('fLeft');
				}
				else {
					$element.addClass('fRight');
				}

				getTimeLineContainer().append($element);

				eventCounter++;
			}
		}
console.log(getTimeLineContainer());
		var msnry = getTimeLineContainer().masonry({
		  // Options
		  columnWidth: 200,
		  itemSelector: '.timelime_item'
		});
	}

	function createTimeLineElement(data) {
		// Initiate result.
		var result;

		var templateData = {
			item: data
		}

		var template = getTemplate('timeline_item');

		if (template) {
			result = template(templateData);
		}

		return result;
	}

	// Check for timeline container, before we start.
	if (getTimeLineContainer().length > 0) {
		// Fetch templates.
		var templates_to_load = [
			'timeline_item'
		];

		for (var t in templates_to_load) {
			var t_identifier = templates_to_load[t];

			$.ajax(
				timelineTemplateBaseUrl + t_identifier,
				{
					dataType: 'html',
					success: function(response, status, XHR) {
						templates[t_identifier] = response;
					},
					error: function() {
						failedTemplatesCounter++;
					},
					type: 'GET'
				}
			);
		}

		var templatesLoadedCheckerInterval = setInterval(
			function() {
				if (($(templates).length + failedTemplatesCounter) == templates_to_load.length) {
					templatesLoaded = true;
					clearInterval(templatesLoadedCheckerInterval);
				}
			},
			50
		);

		var templateCheckInterval = setInterval(
			function() {
				if (templatesLoaded) {
					loadTimeLine();
					clearInterval(templateCheckInterval);
				}
			},
			100
		);
	}
})(jQuery, window);