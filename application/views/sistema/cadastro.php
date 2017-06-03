<?php
include(getcwd()."/application/config/integration.php");
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Gab | Log in</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/AdminLTE.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/plugins/iCheck/square/blue.css">
        
        <script src="https://www.google.com/recaptcha/api.js?hl=en&amp;v=2.3" type="text/javascript"></script>
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
          <script type="text/javascript">gdn=window.gdn||{};gdn.meta={
    "Roles": [
        "Administrador"
    ],
    "MinPassLength": 6,
    "PasswordTranslations": "Muito curto,Contém o usuário,Muito fraco,Fraco,OK,Bom,Seguro",
    "TagHint": "Start to type...",
    "TransportError": "A fatal error occurred while processing the request.<br \/>The server returned the following response: %s",
    "TransientKey": "zmFEOqfsUsI4l4yj",
    "WebRoot": "http:\/\/localhost\/forum",
    "UrlFormat": "\/forum\/{Path}",
    "Path": "entry\/register",
    "Args": "",
    "ResolvedPath": "dashboard\/entry\/register",
    "ResolvedArgs": {
        "InvitationCode": ""
    },
    "SignedIn": 2,
    "SetHourOffset": -3,
    "ConfirmHeading": "Confirm",
    "ConfirmText": "Are you sure you want to do that?",
    "Okay": "Okay",
    "Cancel": "Cancel",
    "Search": "Search"
};
</script>
<style>
li{
    list-style:none;
}
.PasswordStrength {
  width: 250px;
}
.TextBoxWrapper .PasswordStrength {
  width: 100%;
}
body#dashboard_entry_password #Content input.Password,
body#dashboard_entry_signin #Content input.Password,
body#dashboard_entry_index #Content input.Password,
.SignInPopup input.Password {
  width: 180px;
}

.PasswordStrength {
  position: relative;
  margin-top: 2px;
  padding-right: 8px;
  margin-bottom: 4px;
  height: 10px;
}

.PasswordStrength .Background {
  height: 4px;
  background-color: #e8e8e8;
  width: 100%;
  position: absolute;
  left: 0;
}

.PasswordStrength .Strength {
  height: 4px;
  background-color: #c81818;
  width: 0;
  position: absolute;
  left: 0;
}

.PasswordStrength .Separator {
  height: 4px;
  width: 2px;
  background-color: #fff;
  position: absolute;
  left: 0;
}

.PasswordStrength .StrengthText {
  padding-top: 2px;
  text-align: right;
  font-size: 12px;
  margin-right: -8px;
}

.PasswordStrength.Score-0 .Strength {
  width: 0;
}

.PasswordStrength.Score-0 .StrengthText {
  color: #888;
}

.PasswordStrength.Score-1 .Strength {
  background-color: #c81818;
  width: 20%;
}

.PasswordStrength.Score-1 .StrengthText {
  color: #c81818;
}

.PasswordStrength.Score-2 .Strength {
  background-color: #ff891d;
  width: 40%;
}

.PasswordStrength.Score-2 .StrengthText {
  color: #ff891d;
}

.PasswordStrength.Score-3 .Strength {
  background-color: #ffac1d;
  width: 60%;
}

.PasswordStrength.Score-3 .StrengthText {
  color: #ffac1d;
}

.PasswordStrength.Score-4 .Strength {
  background-color: #a6C060;
  width: 80%;
}

.PasswordStrength.Score-4 .StrengthText {
  color: #a6C060;
}

.PasswordStrength.Score-5 .Strength {
  background-color: #27b30f;
  width: 100%;
}

.PasswordStrength.Score-5 .StrengthText {
  color: #27b30f;
}

a.ForgotPassword {
  margin-left: 10px;
}

li.Buttons div a.ForgotPassword {
  margin: 0;
}

body#dashboard_entry_password ul li label.CheckBoxLabel,
body#dashboard_entry_signin ul li label.CheckBoxLabel,
body#dashboard_entry_index ul li label.CheckBoxLabel,
.SignInPopup ul li label.CheckBoxLabel {
  display: inline;
  font-size: 12px;
  font-weight: normal;
  margin: 10px 0 0 10px;
}
.CheckBoxLabel {
  font-size: 12px;
  font-weight: normal;
  width: auto;
}
</style>

    </head>
    <body class="hold-transition login-page">
        <div class="login-box w600">
            <div class="login-logo">
                <a href="../../index2.html"><b>Gab</b>web</a>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Fazer login para prosseguir para o gab</p>
                <!-- INICIO NOVO CADASTRO -->



<form id="Form_User_Register" method="post" action="/forum/entry/register">
    <div>
        <input type="hidden" name="TransientKey" value="<?=Gdn::session()->ensureTransientKey();?>" />
        <input type="hidden" id="Form_hpt" name="hpt" value="" style="display: none;" />
        <input type="hidden" id="Form_ClientHour" name="ClientHour" value="2017-04-08 14:00" />
        <input type="hidden" id="Form_Target" name="Target" value="/" />        
            <ul>
            <li>
                <label for="Form_Nome">Nome</label>
                <input type="text" id="Form_Nome" name="Nome" value="" class="form-control" />
            </li>
            <li>
                <label for="Form_Email">Email</label>
                <div class="TextBoxWrapper"><input type="email" id="Form_Email" name="Email" value="" class="form-control" /></div><span id="EmailUnavailable" class="Incorrect" style="display: none;">Email Unavailable</span>                
            </li>
            <li>
                <label for="Form_CRM">CRM</label>
                <input type="text" id="Form_CRM" name="CRM" value="" class="form-control" />
            </li>
            <li>
                <label for="Form_Name">Usuário</label>
                <div class="TextBoxWrapper"><input type="text" id="Form_Name" name="Name" value="" class="form-control" /></div><span id="NameUnavailable" class="Incorrect" style="display: none;">Name Unavailable</span>            
            </li>
            

            <li>
                <label for="Form_Password">Senha</label>
                <div class="Gloss">Sua senha deve ter pelo menos 6 dígitos.</div>
                    <div class="TextBoxWrapper">
                        <input type="password" id="Form_Password" name="Password" data-strength="true" value="" Strength class="form-control" />
                        <div class="PasswordStrength">
                            <div class="Background"></div>
                            <div class="Strength"></div>
                            <div class="Separator" style="left: 20%;"></div>
                            <div class="Separator" style="left: 40%;"></div>
                            <div class="Separator" style="left: 60%;"></div>
                            <div class="Separator" style="left: 80%;"></div>
                            <div class="StrengthText">&nbsp;</div>
                        </div>
                    </div>            
            </li>
            <li>
                <label for="Form_PasswordMatch">Confirm Password</label>
                <div class="TextBoxWrapper"><input type="password" id="Form_PasswordMatch" name="PasswordMatch" value="" class="form-control" /></div><span id="PasswordsDontMatch" class="Incorrect" style="display: none;">As senhas não estão iguais.</span>
            </li>
            <li class="Gender">
                <br/>
                <label for="Form_Gender">Gênero</label>
                <label class="RadioLabel">
                    <input type="radio" id="Form_Gender" name="Gender" value="u" checked="checked" /> Não informar
                </label> 
                <label class="RadioLabel">
                    <input type="radio" id="Form_Gender1" name="Gender" value="m" /> Masculino
                </label> 
                <label class="RadioLabel">
                    <input type="radio" id="Form_Gender2" name="Gender" value="f" /> Feminino
                </label>
                <br/>
            </li>
            <li>
                <!-- <label for="Form_DiscoveryText">Why do you want to join?</label> -->
                <div class="TextBoxWrapper" style="display:none;">
                    <textarea id="Form_DiscoveryText" name="DiscoveryText" rows="6" cols="100" class="form-control" style="dsplay:none;">N/A</textarea>
                </div>
            </li>
            <li class="CaptchaInput">
                <label for="Form_SecurityCheck">Segurança</label>
                <div  class="g-recaptcha" data-sitekey="6Le8HRwUAAAAADLGyblayPkP7LHWgeBZVy6XPdFn"></div>
            </li>
            <li><br/>
                <label for="Form_TermsOfService" class="CheckBoxLabel">
                    <input type="hidden" name="Checkboxes[]" value="TermsOfService" />
                    <input type="checkbox" id="Form_TermsOfService" name="TermsOfService" value="1" /> 
                    Eu concordo com os <a id="TermsOfService" class="Popup" target="terms" href="/forum/home/termsofservice">termos de serviço</a>
                </label>
            </li>
            <li class="Buttons">
                <input type="button" id="Form_ApplyforMembership" name="Apply for Membership" value="Register" class="btn btn-primary btn-block btn-flat" />
            </li>
            </ul>
    </div>
</form> 
                <!--FIM NOVO CADASTRO-->
            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->

        <!-- jQuery 2.2.3 -->
        <script src="<?php echo base_url(); ?>vendor/plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo base_url(); ?>vendor/bootstrap/js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url(); ?>vendor/plugins/iCheck/icheck.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/integration.js"></script>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
            $("#entrar").on("click",function(){
                login();
            });
            $("#Form_ApplyforMembership").on("click",function(){
                cadastro();
            });
        </script>
        <script src="../forum/js/library/jquery.form.js?v=2.3" type="text/javascript"></script>
        <script src="../forum/js/library/jquery.gardenhandleajaxform.js?v=2.3" type="text/javascript"></script>
        <script src="../forum/js/global.js?v=2.3" type="text/javascript"></script>
        <script src="../forum/applications/dashboard/js/entry.js?v=2.3" type="text/javascript"></script>
        <script src="../forum/applications/dashboard/js/password.js?v=2.3" type="text/javascript"></script>
    </body>
</html>