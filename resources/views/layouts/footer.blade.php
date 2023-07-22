<footer class="footer-section">
    <div class="container-fluid px-5 py-5">
        <div class="row">
            <div class="col-lg-5 mb-50">
                <div class="footer-widget">
                    <div class="footer-logo">
                        <a href="index.html"><img src="/img/logo/logo_white_main.png" class="img-fluid" alt="logo"></a>
                    </div>
                    <div class="footer-text">
                        <p>Engine_ Powering the Gaming Revolution.
                            © 2023 Engine_ Games. All rights reserved.
                            Dona Soledad Avenue, Paranaque, PH | Phone: +63 9123456789| Email: engine_games@engine.com
                        </p>
                    </div>
                    <div class="footer-social-icon">
                        <span>Follow us</span>
                        <a href="https://www.facebook.com"><img src="/img/icons/facebook.png" style="width: 30px"></a>
                        <a href="https://www.twitter.com"><img src="/img/icons/twitter.png" style="width: 30px"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-12 mb-30">
                <div class="footer-widget">
                    <div class="footer-widget-heading mt-3">
                        <h3>Links</h3>
                    </div>
                    <ul> @if (Session::has('user_id'))
                        <li><a href="/userhome">Home</a></li>
                        <li><a href="/userhome#About">About</a></li>
                        <li><a href="/userhome#Games">Games</a></li>
                        <li><a href="/userhome#faqs">Faqs</a></li>
                        <li><a href="/userstore">Store</a></li>
                        <li><a href="/usersupport">Support</a></li>
                        @else
                        <li><a href="/">Home</a></li>
                        <li><a href="/#About">About</a></li>
                        <li><a href="/#Games">Games</a></li>
                        <li><a href="/#Faqs">Faqs</a></li>
                        <li><a href="/store">Store</a></li>
                        <li><a href="/support">Support</a></li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-lg-5 col-12 mb-50">
                <div class="footer-widget">
                    <div class="footer-widget-heading mt-3">
                        <h3>Subscribe</h3>
                    </div>
                    <div class="footer-text mb-25">
                        <p>Don't miss to subscribe to our new feeds, kindly fill the form below.</p>
                    </div>
                    <div class="subscribe-form">
                        <form action="#">
                            <input type="text" placeholder="Email Address">
                            <button><img src="/img/icons/send.png" style="width: 30px"></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-12 text-center text-lg-left">
                    <div class="copyright-text">
                        <p>Copyright &copy; 2023, All Right Reserved <a href="#">Engine_</a></p>
                    </div>
                </div>
                <div class="col-lg-6 col-6 d-none d-lg-block text-right">
                    <div class="footer-menu">
                        <ul>

                            @if (Session::has('user_id'))
                            <li><a href="/userhome">Home</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Policy</a></li>
                            <li><a href="#">Support</a></li>
                            @else
                            <li><a href="/">Home</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Policy</a></li>
                            <li><a href="#">Support</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>