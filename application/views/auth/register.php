<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Create Account</h3>
                                </div>
                                <div class="card-body">
                                    <form class="user" method="POST" action="<?= base_url('auth/register'); ?>">
                                        <div class="row mb-3">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" value="<?= set_value('nama'); ?>"
                                                    id="inputfirstName" type="text" placeholder="Enter your Full Name"
                                                    name="nama" />
                                                <label for="inputfirstName">Full Name</label>
                                                <?= form_error('nama', '<small class="text-danger p1-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" value="<?= set_value('email'); ?>"
                                                id="inputEmail" type="email" name="email"
                                                placeholder="name@example.com" />
                                            <label for="inputEmail">Email address</label>
                                            <?= form_error('email', '<small class="text-danger p1-3">', '</small>'); ?>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" value="<?= set_value('password'); ?>"
                                                        id="inputPassword" type="password"
                                                        placeholder="Create a password" name="password" />
                                                    <label for="inputPassword">Password</label>
                                                    <?= form_error('password', '<small class="text-danger p1-3">', '</small>'); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputPasswordConfirm"
                                                        type="password" placeholder="Confirm password"
                                                        name="password" />
                                                    <label for="inputPasswordConfirm">Confirm Password</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <button type="submit">Create Account</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="<?= base_url('Auth'); ?>">Have an account? Go to
                                            login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>