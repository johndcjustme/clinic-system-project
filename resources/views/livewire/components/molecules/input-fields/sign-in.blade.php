<div>
    {{-- Care about people's approval and you will be their prisoner. --}}

    @section('authTitle', 'Hi, Welcome Back')

    <br>

    <form action="/dashboard" class="sign_in">
        <label for="">User name</label>
        <input type="text">

        <div class="passwordLabel text_right flex flex_x_between mt_8">
            <label for="">Passoword</label>
            <a class="text_right button_text" href="/forgot-password" style="font-size: 0.8rem">Forgot password</a>
        </div>
        
        <input type="password">
        <button class="mt_10 full_w" type="submit">Sign in</button>
        <br><br><br>
    </form>
    <div class="text_center">
        <p class="font_medium">
            No account yet? 
            <a href="/sign-up" class="button_link font_medium">Sign up here</a>
        </p>
    </div>
</div>
