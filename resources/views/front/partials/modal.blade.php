<div id="modal" class="popupContainer" style="display:none;">
    <div class="popupHeader">
        <span class="header_title">Login</span>
        <span class="modal_close"><i class="fa fa-times"></i></span>
    </div>

    <section class="popupBody">
        <!-- Social Login -->
        <div class="social_login">
            <div class="">
                <a href="#" class="social_box fb">
                    <span class="icon"><i class="fab fa-facebook"></i></span>
                    <span class="icon_title">Connect with Facebook</span>

                </a>

                <a href="#" class="social_box google">
                    <span class="icon"><i class="fab fa-google-plus"></i></span>
                    <span class="icon_title">Connect with Google</span>
                </a>
            </div>

            <div class="centeredText">
                <span>Or use your Email address</span>
            </div>

            <div class="action_btns">
                <div class="one_half">
                    <a href="#" id="login_form" class="btn">Login</a>
                </div>
                <div class="one_half last">
                    <a href="#" id="register_form" class="btn">Sign up</a>
                </div>
            </div>
        </div>

        <!-- Username & Password Login form -->
        <div class="user_login">
            <form method="POST" action="/login">
                @csrf
                <label>Email / Username</label>
                <input type="text" name="email"/>
                <br />

                <label>Password</label>
                <input type="password" name="password"/>
                <br/>

                <div class="checkbox">
                    <input id="remember" type="checkbox" />
                    <label for="remember">Remember me on this computer</label>
                </div>

                <div class="action_btns">
                    <div class="one_half">
                        <a href="#" class="btn back_btn">
                            <i class="fa fa-angle-double-left"></i>
                            Back
                        </a>
                    </div>
                    <div class="one_half last">
                        <button type="submit" class="btn btn_red">Login</button>
                    </div>
                </div>
            </form>

            <a href="#" class="forgot_password">Forgot password?</a>
        </div>

        <!-- Register Form -->
        <div class="user_register">
            <form method="POST" action="/register">
                @csrf
                <label>Full Name</label>
                <input type="text" name="name"/>
                <br />

                <label>Occupation</label>
                <input type="text" name="position"/>
                <br />

                <label>Profile <Picture></Picture></label>
                <input type="file" name="profile_pic"/>
                <br />

                <label>Email Address</label>
                <input type="email" name="email"/>
                <br />

                <label>Password</label>
                <input type="password" name="password"/>
                <br />

                <div class="checkbox">
                    <input id="remember_me" type="checkbox" name="remember"/>
                    <label for="send_updates">Send me occasional email updates</label>
                </div>

                <div class="action_btns">
                    <div class="one_half">
                        <a href="#" class="btn back_btn">
                            <i class="fa fa-angle-double-left"></i>
                            Back
                        </a>
                    </div>
                    <div class="one_half last">
                        <button type="submit" class="btn btn_red">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
