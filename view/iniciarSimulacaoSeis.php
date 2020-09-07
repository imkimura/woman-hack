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
                                                   
                        <div class="col-md-10 mx-auto">
                            <p class="pt-2 text-info font-weight-bolder">Portal do Empreendedor → Inscrição MEI</p>                            
                            
                            <form>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">CPF</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="840.584.000-13" disabled>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom02">Data de Nascimento</label>
                                        <input type="text" class="form-control" id="validationCustom02" value="10/12/1815" disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationCustom03">Nome Empresarial</label>
                                        <input type="text" class="form-control" id="validationCustom03" value="Ada" disabled>
                                    </div>                                        
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Nome Empresário</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="Ada Lovelace" disabled>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom02">Nacionalidade</label>
                                        <input type="text" class="form-control" id="validationCustom02" value="Britânico" disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Sexo</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="Feminino" disabled>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom02">Nome da Mãe</label>
                                        <input type="text" class="form-control" id="validationCustom02" value="Anne Isabella Milbanke" disabled>
                                    </div>
                                </div>
                            


                                <p class="pt-2 font-weight-bolder">Identificação</p>                            
                                <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom01">Nº da Identificação</label>
                                        <input type="text" class="form-control" id="validationCustom01">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom02">Órgão Emissor</label>
                                        <input type="text" class="form-control" id="validationCustom02">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom04">UF Emissor</label>
                                        <select class="custom-select" id="validationCustom04" required>
                                            <option selected value="">Escolha...</option>
                                            <option>AC</option>
                                            <option>AL</option>
                                            <option>AM</option>
                                            <option>AP</option>
                                            <option>BA</option>
                                            <option>CE</option>
                                            <option>DF</option>
                                            <option>ES</option>
                                            <option>GO</option>
                                            <option>MA</option>
                                            <option>MG</option>
                                            <option>MS</option>
                                            <option>MT</option>
                                            <option>PA</option>
                                            <option>PB</option>
                                            <option>PE</option>
                                            <option>PI</option>
                                            <option>PR</option>
                                            <option>RJ</option>
                                            <option>SC</option>
                                            <option>SE</option>
                                            <option>SP</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom02">Telefone para Contato</label>
                                        <input type="text" class="form-control" id="validationCustom02">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom02">Telefone Celular</label>
                                        <input type="text" class="form-control" id="validationCustom02">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom02">E-mail</label>
                                        <input type="text" class="form-control" id="validationCustom02">
                                    </div>                                                                       
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationCustom03">Nome Fantasia</label>
                                        <input type="text" class="form-control" id="validationCustom03">
                                    </div>                                                                        
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Capita Social</label>
                                        <input type="text" class="form-control" id="validationCustom01">
                                    </div>                                    
                                </div>                            

                                <p class="pt-2 font-weight-bolder">Atividades</p>                                                        
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationCustom01">Ocupação Principal</label>
                                        <select class="custom-select" id="validationCustom01" required>
                                            <option selected value="">Selecione a Ocupação Principal</option>
                                            <option>Fabricante de jogos interativos, independente</option>
                                            <option>Técnico(a) de manutenção de computadores independente</option>
                                        </select>
                                    </div>                                   
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom02" class="text-info">Código CNAE Principal</label>
                                        <input type="text" class="form-control" id="validationCustom02" value="4721-1/01" disabled>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom02" class="text-info">Descrição CNAE Principal</label>
                                        <input type="text" class="form-control" id="validationCustom02" value="Técnico varejista de harware de computadores" disabled>
                                    </div>                                                                       
                                </div>

                                <div class="form-row">
                                    <div class="col-md-12 mb-3 mt-4">
                                        <label for="validationCustom02" class="font-weight-bolder">CNAE Secundário</label>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Código</th>
                                                    <th scope="col">Descrição</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">4721-1/02</th>
                                                    <td>Atacadista de peças de computador</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>                                                                                                        
                                </div>

                                <div class="form-row">
                                    <div class="col-md-12 mb-3 mt-4">
                                        <label for="validationCustom01" class="pt-2 text-info font-weight-bolder">Descrição do Objeto</label>
                                        <input type="text" class="form-control" id="validationCustom02" value="Técnico varejista de harware de computadores independente" disabled>
                                    </div>                                   
                                </div>
                                
                                <p class="pt-2 mt-4 text-info font-weight-bolder">Forma de Atuação</p>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom02" class="text-info">Descrição CNAE Principal</label>
                                        <input type="text" class="form-control" id="validationCustom02" value="Técnico varejista de harware de computadores" disabled>
                                    </div>  
                                </div>

                                <p class="pt-2 mt-4 font-weight-bolder">Endereço Comercial</p>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom02" class="text-info">CEP</label>
                                        <input type="text" class="form-control" id="validationCustom02">
                                    </div>  
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom02" class="text-info">Tipo de Logradouro</label>
                                        <select class="custom-select" id="validationCustom01" disabled>
                                            <option selected value="">Selecione</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom02" class="text-info">Logradouro</label>
                                        <input type="text" class="form-control" id="validationCustom02">
                                    </div>  
                                    <div class="col-md-2 mb-3">
                                        <label for="validationCustom02" class="text-info">Número</label>
                                        <input type="text" class="form-control" id="validationCustom02">
                                    </div>  
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom02" class="text-info">Complemento</label>
                                        <input type="text" class="form-control" id="validationCustom02">
                                    </div>  
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom02" class="text-info">Bairro</label>
                                        <input type="text" class="form-control" id="validationCustom02">
                                    </div>  
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom02" class="text-info">Município</label>
                                        <input type="text" class="form-control" id="validationCustom02">
                                    </div>  
                                    <div class="col-md-2 mb-3">
                                        <label for="validationCustom02" class="text-info">UF</label>
                                        <select class="custom-select" id="validationCustom04" required>
                                            <option selected value="">Escolha...</option>
                                            <option>AC</option>
                                            <option>AL</option>
                                            <option>AM</option>
                                            <option>AP</option>
                                            <option>BA</option>
                                            <option>CE</option>
                                            <option>DF</option>
                                            <option>ES</option>
                                            <option>GO</option>
                                            <option>MA</option>
                                            <option>MG</option>
                                            <option>MS</option>
                                            <option>MT</option>
                                            <option>PA</option>
                                            <option>PB</option>
                                            <option>PE</option>
                                            <option>PI</option>
                                            <option>PR</option>
                                            <option>RJ</option>
                                            <option>SC</option>
                                            <option>SE</option>
                                            <option>SP</option>
                                        </select>
                                    </div>                                    
                                </div>

                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom02" class="text-info">Ponto de Referência</label>
                                        <input type="text" class="form-control" id="validationCustom02">
                                    </div>  
                                </div>

                                <p class="pt-2 font-weight-bolder">Declarações</p>                                                        
                                <p>• Declaração de desimpedimento</p>                                                        
                                <div class="form-row">
                                    <div class="col-md-2 mb-3">
                                        <input type="checkbox" id="customCheck1">
                                    </div>
                                    <div class="col-md-10 mb-3">
                                        <label for="customCheck1">Declaro, sob as penas da Lei, ser capaz, não estar impedido de exercer atividade empresária e que não possuo outro registro de empresário.</label>                                        
                                    </div>                               
                                </div>

                                <p>• Declaração de opção pelo Simples Nacional e Termo de Ciência e Responsabilidade com Efeito de Alvará de Licença e Funcionamento</p>                                                        
                                <div class="form-row">
                                    <div class="col-md-2 mb-3">
                                        <input type="checkbox" id="customCheck1">
                                    </div>
                                    <div class="col-md-10 mb-3">
                                        <label for="customCheck1">Declaro que opto pelo Simples Nacional e pelo Simei.</label>                                        
                                    </div>                               
                                </div>

                                <p>• Declaração de Enquadramento como Microempresa(ME)</p>                                                        
                                <div class="form-row">
                                    <div class="col-md-2 mb-3">
                                        <input type="checkbox" id="customCheck1">
                                    </div>
                                    <div class="col-md-10 mb-3">
                                        <label for="customCheck1">Declaro, sob as penas da Lei, que me enquadro na opção de MICROEMPRESA.</label>                                        
                                    </div>                               
                                </div>
                            </form>
                        </div>
                                            
                    </div>
                    <div class="mb-4 btn-group mx-auto" role="group">
                        <a href="iniciarSimulacaoCinco.php" class="btn btn-lg btn-secondary">Voltar</a>
                        <a href="iniciarJogoUm.php" class="btn btn-lg btn-secondary">Pular introdução ao MEI</a>
                        <a href="iniciarSimulacaoSete.php" class="btn btn-lg btn-primary disable">Continuar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../layouts/footer.php') ?>

