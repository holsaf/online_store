          <div id="layoutSidenav_content">
              <main>

              <div class="login-box">
              <div class="card card-outline card-primary">
              <div class="card-header text-center">
                <a href="" class="h1"><b>MARK</b>LTE</a>
              </div>
              <!-- /.login-logo -->
              <div class="login-box-body">
                <p class="login-box-msg">Registrese para inicir sesion</p>

                <?php echo form_open( 'Login/ajax_attempt_login', 
                ['class' => 'std-form'] );?>

                  <div class="input-group mb-3">
                    <input type="text" name="login_string" class="form-control" placeholder="Usuario">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                      </div>
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <input type="password" name="login_pass" class="form-control" placeholder="Contraseña">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-8">
                      <div class="icheck-primary">
                        <input type="checkbox" id="remember">
                        <label for="remember">
                          Recordar mi informacion personal
                        </label>
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                      <button type="submit" class="btn btn-primary btn-block">Registarme</button>
                    </div>
                    <!-- /.col -->
                  </div>
                  <input type="hidden" id="max_allowed_attempts" value="<?php echo config_item('max_allowed_attempts'); ?>" />
                <input type="hidden" id="mins_on_hold" value="<?php echo ( config_item('seconds_on_hold') / 60 ); ?>" />
                </form>      <!-- /.social-auth-links -->

                <p class="mb-1">
                  <a href="forgot-password.html">Click aqui si no recuerda la contraseña!</a>
                </p>
                <p class="mb-0">
                  <a href="register.html" class="text-center">Click aqui si no esta registrado</a>
                </p>
              </div>
              <!-- /.card-body -->
            </div>  
            </main>
<script>
    $(document).ready(function () {
        $(document).on('submit', 'form', function (e) {
            $.ajax({
                type: 'post',
                cache: false,
                url: '<?php echo base_url() ?>Login/ajax_attempt_login',
                data: {
                    'login_string': $('[name="login_string"]').val(),
                    'login_pass': $('[name="login_pass"]').val(),
                    'loginToken': $('[name="token"]').val()
                },
                dataType: 'json',
                success: function (response) {
                    $('[name="loginToken"]').val(response.token);
                    console.log(response);
                    if (response.status == 1) {
                        window.location.href = '<?php echo base_url() ?>admin';
                    } else if (response.status == 0 && response.on_hold) {
                        $('form').hide();
                        $('#on-hold-message').show();
                        alert('Intentos de inicio de sesión excesivos.');
                    } else {
                        alert('Login fallido', 'Login fallido ' + response.count + ' de ' + $('#max_allowed_attempts').val(), 'error');
                    }
                }
            });
            return false;
        });
    });
</script>
          
