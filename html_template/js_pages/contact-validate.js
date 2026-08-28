  $(document).ready(function() {
    $('#frmContact').bootstrapValidator({

        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
             fullname: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Type your fullname.'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Type your email.'
                    },
                    emailAddress: {
                        message: 'Email không đúng định dạng.'
                    }
                }
            },
			 telephone: {
                validators: {
                    notEmpty: {
                        message: 'Type your telephone number.'
                    },
					stringLength: {
                        min: 6,
						message: 'Telephone number invalid.'
                    },
					regexp: {
						regexp: /^[0-9 \.]+$/,
						message: 'Telephone number is only number.'
					}
                }
            },
			 content: {
                validators: {
                    notEmpty: {
                        message: 'Type your messages'
                    }
                }
            },captcha: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Type captcha.'
                    }
                }
            }
            }
        })
		.on('error.validator.bv', function(e, data) {
            // $(e.target)    --> The field element
            // data.bv        --> The BootstrapValidator instance
            // data.field     --> The field name
            // data.element   --> The field element
            // data.validator --> The current validator name

            /*data.element
                .data('bv.messages')
                // Hide all the messages
                .find('.help-block[data-bv-for="' + data.field + '"]').hide()
                // Show only message associated with current validator
                .filter('[data-bv-validator="' + data.validator + '"]').show();*/
        })
        .on('success.form.bv', function(e) {

            $('#frmContact').data('bootstrapValidator').resetForm();
            e.preventDefault();

            var $form = $(e.target);

            var bv = $form.data('bootstrapValidator');

            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
		
});