<?php include('../layouts/head.php') ?>

<div class="container-fluid" id="login-view">
  <div class="container" >

    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">            
            <h5 class="card-title text-center">Entrar</h5>
            <form class="form-signin">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="E-mail" required autofocus>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
              </div>

              <div class="custom-control custom-checkbox mb-3 mt-4">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Lembrar senha</label>
              </div>
              
              <a href="painel.php" class="mt-4 btn btn-primary btn-block text-uppercase">Entrar</a>
              
            </form>
          </div>
            <div class="card-footer text-muted text-center p-3">
            Ainda não tem uma conta? <a href="/singin" class="link">Clique aqui</a>
            <img src="../src/img/girls.png" class="pt-2" style="height:50px">
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('../layouts/footer.php') ?>