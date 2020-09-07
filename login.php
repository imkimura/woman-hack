<?php include('layouts/head.php') ?>

<style>
  body {
    background: #007bff;
    /* background: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%); */
    /* background: background-color: #FBAB7E; */
    background: linear-gradient(62deg, #FBAB7E 0%, #F7CE68 100%);
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
  }
</style>

<div class="container">
  <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
      <div class="card card-signin my-5">
        <div class="card-body">
          <h5 class="card-title text-center">Entrar</h5>
          <form class="form-signin">
            <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
              <label for="inputEmail">Seu email</label>
            </div>

            <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
              <label for="inputPassword">Sua senha</label>
            </div>

            <div class="custom-control custom-checkbox mb-3 mt-4">
              <input type="checkbox" class="custom-control-input" id="customCheck1">
              <label class="custom-control-label" for="customCheck1">Lembrar senha</label>
            </div>
            
            <button class=" mt-4 btn btn-lg btn-primary btn-block text-uppercase" type="submit">ENTRAR</button>
            
          </form>
        </div>
          <div class="card-footer text-muted text-center p-3">
          Ainda não tem uma conta? <a href="/singin" class="link">Clique aqui</a>
          </div>
      </div>
    </div>
  </div>
</div>

<?php include('layouts/footer.php') ?>