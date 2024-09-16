<div id="authModal" class="modal-custom">
    <div class="modal-content-custom">
        <div class="modal-header-custom">
            <h5 class="modal-title-custom">Welcome</h5>
            <button type="button" class="close-custom" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body-custom">
            <!-- Вкладки для авторизации и регистрации -->
            <ul class="nav-custom nav-tabs-custom">
                <li class="nav-item-custom">
                    <a class="nav-link-custom active-custom" id="login-tab" data-toggle="tab-custom" href="#login" role="tab">Login</a>
                </li>
                <li class="nav-item-custom">
                    <a class="nav-link-custom" id="register-tab" data-toggle="tab-custom" href="#register" role="tab">Register</a>
                </li>
            </ul>
            <div class="tab-content-custom">
                <!-- Форма авторизации -->
                <div class="tab-pane-custom active-custom" id="login" role="tabpanel">
                    <form id="loginForm">
                        <div class="form-group-custom">
                            <label for="loginEmail">Email or Phone</label>
                            <input type="text" class="form-control-custom" id="loginEmail" placeholder="Enter email or phone">
                        </div>
                        <div class="form-group-custom">
                            <label for="loginPassword">Password</label>
                            <input type="password" class="form-control-custom" id="loginPassword" placeholder="Password">
                        </div>
                        <button type="submit" class="btn-custom">Login</button>
                    </form>
                </div>
                <!-- Форма регистрации -->
                <div class="tab-pane-custom" id="register" role="tabpanel">
                    <form id="registerForm">
                        <div class="form-group-custom">
                            <label for="registerEmail">Email</label>
                            <input type="email" class="form-control-custom" id="registerEmail" placeholder="Enter email">
                        </div>
                        <div class="form-group-custom">
                            <label for="registerPhone">Phone</label>
                            <input type="text" class="form-control-custom" id="registerPhone" placeholder="Enter phone number">
                        </div>
                        <div class="form-group-custom">
                            <label for="registerPassword">Password</label>
                            <input type="password" class="form-control-custom" id="registerPassword" placeholder="Password">
                        </div>
                        <button type="submit" class="btn-custom">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
