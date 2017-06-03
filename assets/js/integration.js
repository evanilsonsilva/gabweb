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
                if (data.ErrorMessages == "") {
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

function cadastro() {
    
    try {
        var form = $("#Form_User_Register").serialize();
        $.ajax({
            url: "../forum/entry/register?DeliveryType=ASSET",
            method: "POST",
            data: {
                TransientKey: $("[name='TransientKey']").val(),
                hpt: $("#Form_hpt").val(),
                ClientHour: $("#Form_ClientHour").val(),
                Target: $("#Form_Target").val(),
                Nome: $("#Form_Nome").val(),
                Email: $("#Form_Email").val(),
                CRM: $("#Form_CRM").val(),
                Name: $("#Form_Name").val(),
                Password: $("#Form_Password").val(),
                PasswordMatch: $("#Form_PasswordMatch").val(),
                Gender: $("#Form_Gender").val(),
                DiscoveryText: "N/A",
                'recaptcha-token': $("#recaptcha-token").val(),
                'g-recaptcha-response': $("#g-recaptcha-response").html(),
                'Checkboxes[]': $("[name='Checkboxes[]'").val(),
                'TermsOfService': $("#Form_TermsOfService").val()
                
            },
            success: function (data) {
                debugger;
                if (data.ErrorMessages == "") {
                    debugger;
                    location.href = '/'
                }
            }
        }).fail(function (data) {
            debugger;
        });
    } catch (e) {
        alert(e.message);
    }
}