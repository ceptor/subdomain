<link rel="stylesheet" type="text/css" href="/resources/css/test.css" />

<div class="bubbleview h login-page">

    <div class="c pp h">

        <div class="error">
            <span class="error-icon"></span>
            <span class="error-message">
                <span class="field_error" rel="password">The password you entered was incorrect.</span>
            </span>
        </div>


        <form id="login" action="https://www.deviantart.com/users/login" method="post" class="wide">
            <input type="hidden" name="ref" value="https://www.deviantart.com/users/forgot?username=toorry@gmail.com1" />

            <table align="center" cellspacing="5">
                <tr>
                    <td class="label-td">
                        <label for="login_username">Username or Email</label>
                        <input class="text" type="text" id="login_username" name="username" value="" autofocus="autofocus" />
                    </td>
                </tr>
                <tr>
                    <td class="label-td">
                        <label for="login_password">Password</label>
                        <input class="text" type="password" id="login_password" name="password"  />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="remember-label" for="remember_me">
                            <input type="checkbox" class="checkbox" id="remember_me" checked="checked" name="remember_me" value="1" style="vertical-align: baseline"/> Stay logged in
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="smbutton smbutton-size-default smbutton-shadow smbutton-blue" type="submit" value="Log In"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a class="small-blue" href="https://www.deviantart.com/users/forgot?username=toorry%40gmail.comw">Forgot Password or Username?</a>
                    </td>
                </tr>
            </table>
            <input type="hidden" name="validate_token" value="74edcb15ea590596bbf0" autocomplete="off"/>
            <input type="hidden" name="validate_key" value="1430242044" autocomplete="off"/>
            <div style="clear:both"></div>
        </form>
    </div>
</div>









<?php extract($data); ?>
<?php if($login_status=="access_granted") { ?>
<p style="color:green">Авторизация прошла успешно.</p>
<?php } elseif($login_status=="access_denied") { ?>
<p style="color:red">Логин и/или пароль введены неверно.</p>
<?php } ?>
