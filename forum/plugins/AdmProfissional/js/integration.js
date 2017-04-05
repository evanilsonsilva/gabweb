function login() {
    $.ajax({
        url: "../forum/entry/ajaxsignin?DeliveryType=ASSET",
        method: "POST",
        data: {
            Email: $("input[name='Email']:first").val(),
            Password: $("input[name='Password']:first").val(),
            TransientKey: $("input[name='TransientKey']:first").val(),
            RememberMe: 1,
            "Sign In": "Sign In"
        },
        success: function (data) {
            data = JSON.parse(data);
            if (data.error == 0 && data.userid > 0) {
                location.href = '../admin/index.php'
            } else {
                $("[name='TransientKey']").val(data.key);
            };
        }
    }).fail(function (data) {

    });
}