$(document).ready(function () {


    $("#register-btn").click(function () {
        $("#register-box").show();
        $("#login-box").hide();
    });
    $("#login-btn").click(function () {
        $("#login-box").show();
        $("#register-box").hide();
    });
    $("#add-btn").click(function () {
        $("#table-box").hide();
        $("#addForm-box").show();
    });



    $(document).on("submit", "#register-frm", function () {

        $('#register-frm').valid();
        var form_data = JSON.stringify($(this).serializeObject());

        // отправка данных формы в API
        $.ajax({
            url: "newUser.php",
            type: "POST",
            contentType: "application/json",
            data: form_data,
            success: function (result) {

                result = JSON.parse(result);

                $("#alert").show();
                $("#result").html(result.message);
            },
            error: function (xhr, resp, text) {
                xhr = eval("(" + xhr.responseText + ")");
                $("#alert").show();
                $('#result').html(xhr.message);
                // вывести ошибку в консоль
                console.log(xhr, resp, text);
            }
        });


        return false;
    });

    $("#login-frm").on("submit",function(e) {
        e.preventDefault();
        var $form=$(this);
        if (!$form.valid()) return false;
        $.ajax({
            type:"POST",
            url: "login.php",
            data: new FormData(this),
            dataType:"json",
            contentType: false,
            cache: false,
            processData: false,
            success:function(response){
                if (response.status==1)
                {

                    window.location='profile.php';
                    $("#alert").hide()  ;

                    $("#result").html(response.message);

                }
                else
                {
                    $("#alert").show();
                    $("#result").html(response.message);
                }


            }

        });
    });





    $.fn.serializeObject = function () {
        var o = {};
        var a = this.serializeArray();
        $.each(a, function () {
            if (o[this.name] !== undefined) {
                if (!o[this.name].push) {
                    o[this.name] = [o[this.name]];
                }
                o[this.name].push(this.value || "");
            } else {
                o[this.name] = this.value || "";
            }
        });
        return o;
    };

})

