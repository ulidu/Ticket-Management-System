"use strict";

// Class definition
var KTWizard5 = function () {
    // Base elements
    var _wizardEl;
    var _formEl;
    var _wizardObj;
    var _validations = [];

    // Private functions
    var _initWizard = function () {
        // Initialize form wizard
        _wizardObj = new KTWizard(_wizardEl, {
            startStep: 1, // initial active step number
            clickableSteps: false  // allow step clicking
        });

        // Validation before going to next page
        _wizardObj.on('change', function (wizard) {
            if (wizard.getStep() > wizard.getNewStep()) {
                return; // Skip if stepped back
            }

            // Validate form before change wizard step
            var validator = _validations[wizard.getStep() - 1]; // get validator for currnt step

            if (validator) {
                validator.validate().then(function (status) {
                    if (status == 'Valid') {
                        wizard.goTo(wizard.getNewStep());

                        KTUtil.scrollTop();
                    } else {
                        Swal.fire({
                            text: "There are some errors in your submission. Please correct them before proceeding.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "OK",
                            customClass: {
                                confirmButton: "btn font-weight-bold btn-light"
                            }
                        }).then(function () {
                            KTUtil.scrollTop();
                        });
                    }
                });
            }

            return false;  // Do not change wizard step, further action will be handled by he validator
        });

        // Change event
        _wizardObj.on('changed', function (wizard) {
            KTUtil.scrollTop();

            var name_r = $('#name').val();
            var emp_code_r = $('#emp_code').val();
            var ext_r = $('#ext').val();
            var designation_r = $('#designation').val();
            var division_r = $('#division').val();
            var issue_r = $('#issue').val();
            var cat_issue_r = $('#cat_issue').val();
            var asst_code_r = $('#asst_code').val();
            var priority_r = $('#priority').val();

            $('#app_name_review').text(name_r);
            $('#emp_code_review').text(emp_code_r);
            $('#ext_no_review').text(ext_r);
            $('#designation_review').text(designation_r);
            $('#division_review').text(division_r);
            $('#issue_review').text(issue_r);
            $('#issue_cat_review').text(cat_issue_r);
            $('#asset_code_review').text(asst_code_r);
            $('#priority_review').text(priority_r);

        });

        // Submit event
        _wizardObj.on('submit', function (wizard) {
            Swal.fire({
                title: "Are you sure ?",
                text: "Please confirm the ticket submission.",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Confirm",
                cancelButtonText: "Cancel",
                customClass: {
                    confirmButton: "btn font-weight-bold btn-primary",
                    cancelButton: "btn font-weight-bold btn-default"
                }
            }).then(function (result) {
                if (result.value) {
                    _formEl.submit(); // Submit form
                }
            });
        });
    }

    var _initValidation = function () {
        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        // Step 1
        _validations.push(FormValidation.formValidation(
            _formEl,
            {
                fields: {
                    name: {
                        validators: {
                            notEmpty: {
                                message: 'Applicant name is required'
                            }
                        }
                    },
                    emp_code: {
                        validators: {
                            integer : {
                                message : 'Invalid employee code'
                            },
                            notEmpty : {
                                message : 'Employee code is required'
                            }
                        }
                    },
                    ext: {
                        validators: {
                            integer : {
                                message : 'Invalid extension no.'
                            }
                        }
                    },
                    designation: {
                        validators: {
                            notEmpty: {
                                message: 'Designation is required'
                            }
                        }
                    },
                    division: {
                        validators: {
                            notEmpty: {
                                message: 'Division is required'
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    // Bootstrap Framework Integration
                    bootstrap: new FormValidation.plugins.Bootstrap({
                        //eleInvalidClass: '',
                        eleValidClass: '',
                    })
                }
            }
        ));

        // Step 2
        _validations.push(FormValidation.formValidation(
            _formEl,
            {
                fields: {
                    issue: {
                        validators: {
                            notEmpty: {
                                message: 'Please describe the issue in short'
                            }
                        }
                    },
                    cat_issue: {
                        validators: {
                            notEmpty: {
                                message: 'Category of the issue is required'
                            }
                        }
                    },
                    asst_code: {
                        validators: {
                            notEmpty: {
                                message: 'Asset code is required'
                            }
                        }
                    },
                    priority: {
                        validators: {
                            notEmpty: {
                                message: 'Please select a priority'
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    // Bootstrap Framework Integration
                    bootstrap: new FormValidation.plugins.Bootstrap({
                        //eleInvalidClass: '',
                        eleValidClass: '',
                    })
                }
            }
        ));
    }

    return {
        // public functions
        init: function () {
            _wizardEl = KTUtil.getById('kt_wizard');
            _formEl = KTUtil.getById('kt_form');

            _initWizard();
            _initValidation();
        }
    };
}();

jQuery(document).ready(function () {
    KTWizard5.init();
});
