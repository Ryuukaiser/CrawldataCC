
    <!--header-->
    <nav class="navbar navbar-default navbar-fixed-top" color-on-scroll="200">
        <!-- if you want to keep the navbar hidden you can add this class to the navbar "navbar-burger"-->
        <div class="container">
            <div class="navbar-header">
                <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                </button>
                <a href="/" class="navbar-brand icon">
                    NOVEL HOUSE
                </a>

            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-left navbar-uppercase">
                    <li>
                        <a href="/" target="_blank">Trang chủ</a>
                    </li>             
                    <form class="navbar-form navbar-left">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">tìm kiếm</button>
                    </form>
                    <li>
                        <a id="modal_trigger" href="#modal">Đăng nhập</a>
                    </li>               
                </ul>

            </div>

            <!-- /.navbar-collapse -->
        </div>
    </nav>
    <!--login form-->
    <div id="modal" class="popupContainer" style="display:none;">
        <header class="popupHeader">
            <span class="header_title">Login</span>
            <span class="modal_close"><i class="fa fa-times"></i></span>
        </header>
        <section class="popupBody">
            <div class="social_login">
                <div class="clearfix">
                    <a class="social_box fb" href="#"><span class="icon_title">Connect with
                            Facebook</span></a> <a class="social_box google" href="#"><span class="icon_title">Connect with Google</span></a>
                </div>

                <div class="centeredText">
                    <span>Or use your Email address</span>
                </div>

                <div class="action_btns">
                    <div class="one_half">
                        <a class="btn" href="#" id="login_form" name="login_form">Login</a>
                    </div>

                    <div class="one_half last">
                        <a class="btn" href="#" id="register_form" name="register_form">Sign up</a>
                    </div>
                </div>
            </div>
            <div class="user_login">
                <form>
                    <label>Email / Username</label> <input type="text"><br>
                    <label>Password</label> <input type="password"><br>

                    <div class="checkbox">
                        <input id="remember" type="checkbox"> <label for="remember">Remember me on this computer</label>
                    </div>

                    <div class="action_btns">
                        <div class="one_half">
                            <a class="btn back_btn" href="#">Back</a>
                        </div>

                        <div class="one_half last">
                            <a class="btn btn_red" href="#">Login</a>
                        </div>
                    </div>
                </form>

                <a class="forgot_password" href="#">Forgot password?</a>
            </div>
            <div class="user_register">
                <form>
                    <label>Full Name</label> <input type="text"><br>
                    <label>Email Address</label> <input type="email"><br>
                    <label>Password</label> <input type="password"><br>

                    <div class="checkbox">
                        <input id="send_updates" type="checkbox"> <label for="send_updates">Send me occasional email updates</label>
                    </div>

                    <div class="action_btns">
                        <div class="one_half">
                            <a class="btn back_btn" href="#">Back</a>
                        </div>

                        <div class="one_half last">
                            <a class="btn btn_red" href="#">Register</a>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>