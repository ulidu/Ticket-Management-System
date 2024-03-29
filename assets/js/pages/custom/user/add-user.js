"use strict";

// Class definition
var KTUserAdd = function () {
	// Base elements
	var wizardEl;
	var formEl;
	var validator;
	var wizard;
	var avatar;

	// Private functions
	var initWizard = function () {
		// Initialize form wizard
		wizard = new KTWizard('kt_user_add_user', {
			startStep: 1, // initial active step number
			clickableSteps: true  // allow step clicking
		});

		// Validation before going to next page
		wizard.on('beforeNext', function(wizardObj) {
			if (validator.form() !== true) {
				wizardObj.stop();  // don't go to the next step
			}
		})

		// Change event
		wizard.on('change', function(wizard) {
			KTUtil.scrollTop();
		});
	}

	var initValidation = function() {
		validator = formEl.validate({
			// Validate only visible fields
			ignore: ":hidden",

			// Validation rules
			rules: {
				// Step 1
				profile_avatar: {
					required: true
				},
				profile_first_name: {
					required: true
				},
				profile_last_name: {
					required: true
				},
				profile_phone: {
					required: true
				},
				profile_email: {
					required: true,
					email: true
				}
			},

			// Display error
			invalidHandler: function(event, validator) {
				KTUtil.scrollTop();

				swal.fire({
					"title": "",
					"text": "There are some errors in your submission. Please correct them before proceeding.",
					"type": "error",
					"buttonStyling": false,
					"confirmButtonClass": "btn btn-brand btn-sm btn-bold"
				});
			},


		});
	}





	return {
		// public functions
		init: function() {
			formEl = $('#kt_user_add_form');

			initWizard();
			initValidation();

		}
	};
}();

jQuery(document).ready(function() {
	KTUserAdd.init();
});
