<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <title>Cadastro de Usuario</title>
</head>

<body>

    <div class="container">
        <form class="col-md-12" method="POST" action="conexao/processar.php">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputNamePri">Primeiro Nome</label>
                    <input type="text" class="form-control" name="nomePri" placeholder="primeiro nome">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Senha</label>
                    <input type="password" class="form-control" name="senha" placeholder="Senha">
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Endereço de email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="inputEmail" aria-describedby="emailHelp"
                    placeholder="Seu email">
            </div>
            <div class="form-group">
                <label for="inputAddress">Ultimo nome</label>
                <input type="text" class="form-control" name="nomeUlt" placeholder="ultimo nome">
            </div>
            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control"  name="endereco" placeholder="Apartamento, hotel, casa, etc.">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="cidade">Cidade</label>
                    <input type="text" class="form-control" name ="cidade">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEstado">Estado</label>
                    <select name="inputEstado" class="form-control">
                        <option selected>Escolher...</option>
                        <option value="Acre">AC - Acre</option>
                        <option value="Alagoas">AL - Alagoas</option>
                        <option value="Amapá">AP - Amapá</option>
                        <option value="Amazonas">AM - Amazonas</option>
                        <option value="Bahia">BA - Bahia</option>
                        <option value="Ceará">CE - Ceará</option>
                        <option value="Distrito Federal">DF - Distrito Federal</option>
                        <option value="Espirito Santo">ES - Espirito Santo</option>
                        <option value="Goiás">GO - Goiás</option>
                        <option value="Maranhão">MA - Maranhão</option>
                        <option value="Mato Grosso">MT - Mato Grosso</option>
                        <option value="Mato Grosso do Sul">MS - Mato Grosso do Sul</option>
                        <option value="Minas Gerais">MG - Minas Gerais</option>
                        <option value="Pará">PA - Pará</option>
                        <option value="Paraíba">PB - Paraíba</option>
                        <option value="Paraná">PR - Paraná</option>
                        <option value="Pernambuco">PE - Pernambuco</option>
                        <option value="Piauí">PI - Piauí</option>
                        <option value="Rio de Janeiro">RJ - Rio de Janeiro</option>
                        <option value="Rio Grande do Norte">RN - Rio Grande do Norte</option>
                        <option value="Rio Grande do Sul">RS - Rio Grande do Sul</option>
                        <option value="Rondônia">RO - Rondônia</option>
                        <option value="Roraima">RR - Roraima</option>
                        <option value="Santa Catarina">SC - Santa Catarina</option>
                        <option value="São Paulo">SP - São Paulo</option>
                        <option value="Sergipe">SE - Sergipe</option>
                        <option value="Tocantins">TO - Tocantins</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputCEP">CEP</label>
                    <input type="text" class="form-control" name="cep">
                </div>
            </div>
            <div class="form-group">
                <div class="form-group col-md-3">
                    <label for="inputTEL">telefone</label>
                    <input class="form-control" type="text" name="telefone">
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-primary col-md-4">Salvar</button>
            </div>
        </form>
    </div>


    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span
                            class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input class="form-control " type="text" placeholder="Mohsin">
                    </div>
                    <div class="form-group">

                        <input class="form-control " type="text" placeholder="Irshad">
                    </div>
                    <div class="form-group">
                        <textarea rows="2" class="form-control"
                            placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>


                    </div>
                </div>
                <div class="modal-footer ">
                    <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span
                            class="glyphicon glyphicon-ok-sign"></span> Update</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

</body>

</html>