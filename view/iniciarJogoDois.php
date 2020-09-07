<?php include('../layouts/head.php') ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container-fluid">
<?php include('../layouts/navbar.php') ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Métricas de sua Simulação</h5>            
                                                   
                        <p class="ml-4 text-success">Parabéns, você acaba de concluir a simulação do ambiente de sua empresa.</p>
                        <p class="ml-4">Entendemos que há nuances que só se aprendem na prática, porém temos como objetivo que este treinamento simulado contribua para o seu Know-how de empreendedor.</p>                      
                        
                        <form>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom01">Valor Médio de Vendas</label>
                                    <input type="text" class="form-control" id="validationCustom01" value="R$53,00" disabled>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom02">Faturamento no Trimestre</label>
                                    <input type="text" class="form-control" id="validationCustom02" value="R$100.000,00" disabled>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom02">Ticket Médio</label>
                                    <input type="text" class="form-control" id="validationCustom02" value="R$1083,00" disabled>
                                </div>
                            </div>
                                                        
                        </form>

                    </div>
                    <div class="mb-4 btn-group mx-auto" role="group">
                        <a href="iniciarSimulacaoSete.php" class="btn btn-lg btn-secondary">Voltar</a>
                        <a href="painelConcluido.php" class="btn btn-lg btn-success disable">Concluir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../layouts/footer.php') ?>

