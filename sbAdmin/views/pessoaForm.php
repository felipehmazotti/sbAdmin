<?php include './views/includes/header.php'; ?>

<div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-2 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-8">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Cadastro de Pessoa</h1>
                            </div>

                            <form class="user" method="post" action="./pessoa.php?action=insert">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="nome" id="nome"
                                            placeholder="Nome">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="cpf" id="cpf"
                                            placeholder="CPF">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="endereco" id="endereco"
                                        placeholder="Endereço">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="telefone"
                                            id="telefone" placeholder="Telefone">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="idade"
                                            id="idade" placeholder="Idade">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="email" class="form-control form-control-user" name="email"
                                            id="email" placeholder="E-mail">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="observacao"
                                            id="observacao" placeholder="Observação">
                                    </div>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Salvar
                                </button>
                               
                            </form>
                        
                        </div>
                    </div><div class="col-lg-2 d-none d-lg-block bg-register-image"></div>
                </div>
            </div>
        </div>

    </div>


<?php include './views/includes/footer.php'; ?>