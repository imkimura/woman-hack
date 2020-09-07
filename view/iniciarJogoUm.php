<?php include('../layouts/head.php') ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container-fluid">
<?php include('../layouts/navbar.php') ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Simulação do ambiente empresarial</h5>            
                                                   
                        <p class="ml-4">Você acabou de criar a sua empresa, porém uma empresa não funciona sem capital de giro. Insira um valor para iniciar a movimentação.</p>
                      
                        <div class="form-row">

                            <div class="col-md-6 mx-auto">

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">R$</span>
                                    </div>
                                    <input type="text" class="form-control">
                                    <div class="input-group-append">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row mt-4">                        
                            <div class="col-md-6 mx-auto">
                            <label for="validationCustom02">De que forma obteve valor de capital de giro</label>
                                        <select class="custom-select" id="validationCustom04" required>
                                            <option selected value="">Escolha...</option>
                                            <option>Empréstimo</option>                                    
                                            <option>Outros</option>
                                        </select>
                            </div>
                            <div class="col-md-4 mx-auto">
                                <label for="validationCustom02">Insira porcentagem de juros incidente do valor</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">R$</span>
                                    </div>
                                    <input type="text" class="form-control">
                                    <div class="input-group-append">
                                    </div>
                                </div>
                            </div> 
                        </div>

                    </div>
                    <div class="mb-4 btn-group mx-auto" role="group">
                        <a href="iniciarSimulacaoUm.php" class="btn btn-lg btn-secondary">Voltar</a>
                        <a href="painelConcluido.php" class="btn btn-lg btn-primary disable">Continuar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../layouts/footer.php') ?>

