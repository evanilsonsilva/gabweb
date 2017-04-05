function login() {
    try {
        $.ajax({
            url: "../forum/entry/ajaxsignin?DeliveryType=ASSET",
            method: "POST",
            data: {
                Email: $("input[name='Email']:first").val(),
                Password: $("input[name='Password']:first").val(),
                TransientKey: $("input[name='TransientKey']:first").val(),
                RememberMe: $("input[name='RememberMe']:checked").size(),
                "Sign In": "Sign In"
            },
            success: function (data) {
                data = JSON.parse(data);
                if (data.error == 0 && data.userid > 0) {
                    location.href = '/faleconosco'
                } else {
                    $("[name='TransientKey']").val(data.key);
                };
            }
        }).fail(function (data) {

        });
    } catch (e) {

    }
    
}

function logout(tKey) {
    try {
        $.ajax({
            url: "../forum/entry/signout?DeliveryType=ASSET&TransientKey="+tKey,
            method: "GET",
            data: {
                Email: $("input[name='Email']:first").val(),
                Password: $("input[name='Password']:first").val(),
                TransientKey: $("input[name='TransientKey']:first").val(),
                RememberMe: $("input[name='RememberMe']:checked").size(),
                "Sign In": "Sign In"
            },
            success: function (data) {
                
                if (data.ErrorMessages == "") {
                    location.href = '/'
                }
            }
        }).fail(function (data) {

        });
    } catch (e) {

    }
    
}