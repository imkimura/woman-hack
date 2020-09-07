<?php include('../layouts/head.php') ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container-fluid">
<?php include('../layouts/navbar.php') ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card my-5">
                    <div class="card-body">
                    <h5 class="card-title text-center">Simulação do procedimento de formalização</h5>            
                        <p class="pt-4 ml-4">Ressaltamos que dados pessoais de nossos usuários no ambiente de simulação não são salvos. Fique à vontade para utilizar dados fictícios.</p>                            

                        <div class="col-md-6 mx-auto">
                            <p class="pt-2">CPF</p>
                            <p class="text-info">840.584.000-13</p>                            
                            <form>
                                <div class="form-group">
                                    <label for="disabledTextInput">Senha</label>
                                    <input type="password" id="disabledTextInput" class="form-control" required>
                                </div>                                        
                            </form>
                        </div>
                        
                    </div>
                    <div class="mb-4 btn-group mx-auto" role="group">
                        <a href="iniciarSimulacaoTres.php" class="btn btn-lg btn-secondary">Voltar</a>
                        <a href="iniciarJogoUm.php" class="btn btn-lg btn-secondary">Pular introdução ao MEI</a>
                        <a href="iniciarSimulacaoCinco.php" class="btn btn-lg btn-primary disable">Continuar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../layouts/footer.php') ?>

