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

  $("#registerp-form").validate({
    rules: {
      email: {
        required: true,
        email: true,
        remote: "http://localhost:3000/inputValidator"
      },
      uid: {
        required: true,
        digits: true
      },

      name: {
        required: true,
        nowhitespace: true,
        lettersonly: true
      },
      surname: {
        required: true,
        nowhitespace: true,
        lettersonly: true
      },
      dob: {
        required: true,
          date: true
      },
        gen: {
            required: true

        },
      cno: {
        required: true,
        digits: true,

      },
      add: {
        required: true
      },
      city: {
        required: true

      },
        state: {
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
	$("#submit_comment").click(function(e){
		e.preventDefault();

		var uid1=$("#uid").val();
		var name1=$("#name").val();
		var surname1=$("#surname").val();
		var email1=$("#email").val();
		var dob1=$("#dob").val();
		var cno1=$("#cno").val();
		var gen1=$("#gen").val();
		var add1=$("#add").val();
		var state1=$("#state").val();
		var city1=$("#city").val();


		$.ajax({

			method: "POST",
			url: "http://localhost:8080/MUNSHI/Hospital/Patient_reg",
			async:false,
			data:{
				done:1,
				uid:uid1,
				name:name1,
				surname:surname1,
				email:email1,
				dob:dob1,
				cno:cno1,
				gen:gen1,
				add:add1,
				state:state1,
				city:city1
			},
			success:function(status){
				alert(status);

			}


		});

	});
});

