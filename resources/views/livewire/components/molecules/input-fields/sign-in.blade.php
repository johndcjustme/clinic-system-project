<div>
    {{-- Care about people's approval and you will be their prisoner. --}}

    @section('authTitle', 'Hi, Welcome Back')

    <br>

    <form action="/dashboard">
        <label for="">User name</label>
        <input type="text">

        <div class="text_right flex flex_x_between mt_8">
            <label for="">Passoword</label>
            <a class="text_right button_link" href="/forgot-password" style="font-size: 0.75rem">Forgot password</a>
        </div>

        <input type="password">
        <input class="mt_10 full_w" type="submit" value="Sign in">
        <br><br><br>
    </form>
    <div class="text_center">
        <p>
            No account yet?
            <a href="/sign-up" class="button_link">Create account</a>
        </p>
    </div>
</div>
