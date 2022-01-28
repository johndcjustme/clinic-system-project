<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    @section('authTitle', 'Create account')

    <br>

    <form action="">
        <h5>Your personal info</h5>
        <hr><br>
        <label for="">First name</label>
        <input type="text" placeholder="">
        <label for="">Last name</label>
        <input type="text" placeholder="">
        <label for="">Middle name</label>
        <input type="text" placeholder="">
        <label for="">Address</label>
        <input type="text" placeholder="">
        <br><br><br>
        <h5>Sign in details</h5>
        <hr><br>
        <label for="">Email address</label>
        <input type="text" placeholder="">
        <label for="">Create Passoword</label>
        <input type="password">
        <label for="">Confirm Passoword</label>
        <input type="password">
        <input class="mt_10 full_w" type="submit" value="create account">
        <br><br><br>
        <div class="text_center">
            <p class="font_medium">
                Already have an account?
                <a href="/sign-in" class="button_link font_medium">Sign in</a>
            </p>
        </div>
    </form>
</div>
