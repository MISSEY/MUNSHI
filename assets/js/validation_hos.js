$(function() {

  $.validator.setDefaults({
    errorClass: 'help-block',
    highlight: function(element) {
      $(element)
        .closest('.form-group')
        .addClass('has-error');
    },
    unhighlight: function(element) {
      $(element)
        .closest('.form-group')
        .removeClass('has-error');
    },
    errorPlacement: function (error, element) {
      if (element.prop('type') === 'checkbox') {
        error.insertAfter(element.parent());
      } else {
        error.insertAfter(element);
      }
    }
  });

  $.validator.addMethod('strongPassword', function(value, element) {
    return this.optional(element) 
      || value.length >= 6
      && /\d/.test(value)
      && /[a-z]/i.test(value);
  }, 'Your password must be at least 6 characters long and contain at least one number and one char\'.')

  $("#register-form").validate({
    rules: {
      email: {
        required: true,
        email: true
        //remote: "http://localhost:3000/inputValidator"
      },
      hosp_id: {
        required: true,
        digits: true
      },
      hos_name: {
        required: true,
          nowhitespace: true
      },
		hosp_pass: {
        required: true,
		  strongPassword: true

      },
     con_password: {
        required: true,
		 //equalTo: '#password'
      },
		hosp_reg_no: {
        required: true,
          digits: true
      },
		hosp_cat: {
            required: true
        },
		hosp_type: {
            required: true
        },
		phone: {
        required: true,
        digits: true

      },
		address:
		  {
        required: true
      },
      city: {
        required: true
      },
		state:
		{
			required: true
		},
		website: {
            required: true
        }

    },
    messages: {
      email: {
        required: 'Please enter an email address.',
        email: 'Please enter a <em>valid</em> email address.',
        remote: $.validator.format("{0} is already associated with an account.")
      }
    }
  });

});
