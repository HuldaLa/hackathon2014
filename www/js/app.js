(function($, w) {
	// Variables.
	var timelineContainerSelector = '.timeline_container';
	var templates = {};
	var templatesLoaded = false;
	var failedTemplatesCounter = 0;
	// Fetch templates.
	var templates_to_load = [
		'timeline_item',
		'timeline_point_wrapper'
	];

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
		var pointTemplate = getTemplate('timeline_point_wrapper');

		if (pointTemplate) {
			for (var i in data) {
				var point = data[i];
				var items = [];

				for (var x in point) {
					var event = point[x];

					var $element = $(createTimeLineElement(event));

					if (eventCounter % 2 === 0) {
						$element.addClass('fLeft');
					}
					else {
						$element.addClass('fRight');
					}

					items[x] = {
						'html': $element[0].outerHTML
					};

					eventCounter++;
				}

				// Variables for point wrapper.
				var point_wrapper_template_variables = {
					'point': {
						'addional_classes': '',
						'items': items
					}
				};

				// Add "multiple" class if more than one event is inside id.
				if ($(point).length > 1) {
					point_wrapper_template_variables.point.addional_classes += ' multiple';
				}

				$pointWrapper = $(pointTemplate(point_wrapper_template_variables));

				// Append to timeline wrapper.
				getTimeLineContainer().append($pointWrapper);
			}

			var msnry = getTimeLineContainer().masonry({
			  // Options
			  columnWidth: '.timelime_item',
			  itemSelector: '.timelime_item'
			});
		}
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
		$(templates_to_load).each(function(){
			var t_identifier = this.toString();

			$.ajax(
				timelineTemplateBaseUrl + t_identifier,
				{
					dataType: 'html',
					success: function(response, status, XHR) {
						templates[t_identifier] = response;
					},
					error: function() {
						console.log('ss');
						failedTemplatesCounter++;
					},
					type: 'GET'
				}
			);
		});

		var templatesLoadedCheckerInterval = setInterval(
			function() {
				if ((Object.keys(templates).length + failedTemplatesCounter) == templates_to_load.length) {
					clearInterval(templatesLoadedCheckerInterval);
					templatesLoaded = true;
				}
			},
			500
		);

		var templateCheckInterval = setInterval(
			function() {
				if (templatesLoaded) {
					loadTimeLine();
					clearInterval(templateCheckInterval);
				}
			},
			500
		);
	}
})(jQuery, window);