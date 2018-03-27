jQuery(document).ready(function($){

	/////////////////FORM VALIDATION////////////////////////////

	$('input[type="radio"]').on('input change', function() {
		//	console.log("clicking a radiobutton");

		var current_type = $(this).attr('name');
		//	console.log("This is the current type of radiobutton: ", current_type);

		var rb_siblings = $('body').find('input[name="' + current_type +'"]');
		//	console.log("These are the siblings of the same type: ", rb_siblings);

		var formsection = $(this).closest('.formsection');

		var closest_form_section = formsection.find('.rubrik');
		closest_form_section.removeClass('error');

		formsection.removeClass('missing');
	});

	$('#next').on('click', function(e) {
		e.preventDefault();
		var formSections = $('body').find('.formsection');
		var formSectionStatus = checkFormSections(formSections);

		if (formSectionStatus == true) {
			// Göra din google-grej! :D
			sendForm();

		} else {
			console.log("Can't send the form due to some field errors");
		}

	});

	function checkFormSections(formsections) {
		console.log("THIS:", formsections );
		var missing = [];
		var errorMessageContainers = $('body').find('.errormessage').hide();
		var headings = $('body').find('.rubrik').removeClass('error');
		for (var i = 0; i < formsections.length; i++) {
			var currentFormSection = formsections.eq(i);
			if (currentFormSection.hasClass('missing')) {
				var errorMessageContainer = currentFormSection.next('.errormessage');
				console.log("thizzz", currentFormSection);
				currentFormSection.find('.rubrik').addClass('error');
				errorMessageContainer.show();
				missing.push(formsections[i]);
				console.log("Missing array:",  missing);
			}
		}

		if (!missing.length) {
			return true;
		} else {
			return false;
		}
	}
	function sendForm() {
		//	console.log("Adding eventlistener to input-field!");
		var scriptURL = 'https://script.google.com/macros/s/AKfycbwaJLYCsn4LGOpA5bOaOaEa6AA29AppZe3JrN_5m8REaPNzykU/exec';
		var payload = document.forms['survey'];
		if (true) {
			console.log('sending form');
			var data = new FormData(payload);


			fetch(scriptURL,
				{
					method: "POST",
					body: data
				})

			}
		}

	});
