
jQuery.validator.addMethod("lettersOnly", function(value, element)
{
    return this.optional(element) || /^[a-zA-Zа-яёА-ЯЁ]+$/i.test(value);
});

jQuery.validator.addMethod("checkPass", function(value, element)
{
    return this.optional(element) || /^(?=.*[0-9])(?=.*[a-zA-Zа-яёА-ЯЁ]).{6,30}$/g.test(value) ;
});

jQuery.validator.addMethod("checkSpace",function (value, element) {
    return this.optional(element) || /^[^\s]*$/.test(value);
});

jQuery.validator.addMethod("checkEmail",function (value, element) {
    return this.optional(element) || /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(value);
});


$("#login-frm").validate({
    rules: {
        uname:{<!--        логин-->
            required:true,
            checkSpace:true,
            minlength:6

        },
        pass:{
            checkSpace:true,
            required:true,
            minlength:6,
            checkPass:true
        }

    },
    messages:{
        uname: {
            required: "Заполните это поле",
            minlength: "Логин должен быть не менее 6 символов",
            checkSpace:"Логин не должен содержать пробелов"
        },
        pass:{
            required:"Заполните это поле",
            minlength:"Пароль должен быть не менее 6 символов",
            checkPass:"Пароль должен содержать буквы и цифры",
            checkSpace:"Пароль не должен содержать пробелов"

        }
    }

});


$("#register-frm").validate({

    rules:{
        name:{ <!--        имя-->
            required:true,
            minlength:2,
            lettersOnly: true,
            checkSpace:true

        },
        uname:{<!--        логин-->
            required:true,
            minlength:6,
            checkSpace:true,

        },
        email:{
            required:true,
            checkSpace:true,
            checkEmail:true

        },
        pass:{
            required:true,
            minlength:6,
            checkPass:true,
            checkSpace:true

        },

        cpass:{
            required:true,
            equalTo:"#pass"
        }
    },
    messages:{
        name:{<!--        имя-->
            required: "Заполните это поле",
            minlength: "Имя должно быть не менее 2 символов",
            lettersOnly: "Только буквы",
            checkSpace:"Имя не должно содержать пробелов"

        },
        uname:{<!--        логин-->
            required: "Заполните это поле",
            minlength: "Логин должен быть не менее 6 символов",
            checkSpace:"Логин не должен содержать пробелов"

        },
        email:{

            required:"Проверьте правильность email",
            checkSpace:"Email не должен содержать пробелов",
            checkEmail:"Проверьте правильность email"

        },
        pass:{
            required:"Заполните это поле",
            minlength:"Пароль должен быть не менее 6 символов",
            checkPass: "Пароль должен содержать буквы и цифры",
            checkSpace:"Пароль не должен содержать пробелов"

        },
        cpass: {
            equalTo: "Пароли не совпадают",
            required:"Заполните это поле"

        }
    }

});