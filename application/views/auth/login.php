<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login</h3>
                                </div>
                                <?= $this->session->flashdata('message'); ?>
                                <div class="card-body">
                                    <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" value="<?= set_value('email'); ?>"
                                                id="inputEmail" type="email" name="email"
                                                placeholder="name@example.com" />
                                            <label for="inputEmail">Email address</label>
                                            <?= form_error('email', '<small class="text-danger p1-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" value="<?= set_value('nama'); ?>"
                                                id="inputPassword" type="password" placeholder="Password"
                                                name="password" />
                                            <label for="inputPassword">Password</label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" id="inputRememberPassword" type="checkbox"
                                                value="" name="password" />
                                            <label class="form-check-label" for="inputRememberPassword">Remember
                                                Password
                                            </label>
                                            <?= form_error('password', '<small class="text-danger p1-3">', '</small>'); ?>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="password.html">Forgot Password?</a>
                                            <button type="submit">Login</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <a class="small" href="<?= base_url('auth/register'); ?>">Need an account? Sign
                                        up!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>