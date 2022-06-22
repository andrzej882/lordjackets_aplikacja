$(function() {

  $("form[name='checkout']").validate({

    rules: {

      fname: "required",
      lame: "required",
      phone: "required",
      email: {
        required: true,
        email: true
      },
      state: "required",
      street: "required",
      apartment_number: "required",
      postcode: "required",
      city: "required",
      country: "required",

    },

    messages: {
      fname: "Podaj imie",
      lname: "Podaj nazwisko",
      phone: "Podaj numer telefonu",
      email: "Podaj adres email",
      state: "Podaj nazwę województwa",
      street: "Podaj nazwę ulicy",
      apartment_number: "Podaj numer domu",
        house_number: "Podaj numer mieszkania",
      postcode: "Podaj kod pocztowy",
      city: "Podaj nazwę miasta",
      country: "Podaj nazwę kraju",
    },

    submitHandler: function(form) {
      form.submit();
    }
  });
});

$(function() {
    $("form[name='login']").validate({

      rules: {
            email: {
                required: true,

                email: true,
                minlength: 5
            },
            password: {
                required: true,
                minlength: 3
            }
      },

      messages: {

        email: "Please enter your email",
        password: "Please enter your password",

      },

      submitHandler: function(form) {
        form.submit();
      }
    });
  });


  $(function() {
    $("form[name='register']").validate({

      rules: {

        name: {
            required: true,
            minlength: 5
        },
        surname: {
            required: true,
            minlength: 5
        },
        mobile:{
            required: true,
            minlength: 9
        },
        login:{
            required: true,
            minlength: 4
        },
        email:{
            required: true,
            minlength: 4
        },
        password:{
            required: true,
            minlength: 8
        },
        password_confirm:{
            required: true,
            minlength: 8
        },

      },

      messages: {

        name: "Please enter your name",
        surname: "Please enter your surname",
        mobile: "Please enter your mobile",
        login: "Please enter your login",
        email: "Please enter your email",
        password: "Please enter your password",
        password_confirm: "Please enter password once again"

      },

      submitHandler: function(form) {
        form.submit();
      }
    });
  });
