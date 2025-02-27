<br>
<form id="my-form" action="#" class="from-control" method="POST" onsubmit="return false">
    <div class="row">
        <div class="col-sm-12">
            <h1> Formulario de Cadastro da Empresa</h1>
        </div>
    </div>
    <br>
    <div class="row"><!-- ID / STATUS / datacadastro -->
        <div class="col-sm-4">
            <input type="text" class="form-control" name="txtID" id="txtID" placeholder="ID Usuario">
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-2">
            <select name="txtStatus" id="txtStatus" class="form-control">
                <option value="" selected> ->Selecione<-</option>
                <option value="Ativo">Ativo</option>
                <option value="Inativo">Inativo</option>
            </select>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="txtData" id="txtData" placeholder="Data de Cadastro">
        </div>
    </div>

    <div class="row mt-3"><!-- NOME  / CHPJ  / RAMO -->
        <div class="col-sm-6">
            <input type="text" class="form-control" name="txtNome" id="txtNome" placeholder="informe o nome da empresa" >
        </div>
        <div class="col-sm-3">
            <input type="number" class="form-control" name="txtCnpj" id="txtCnpj" placeholder="Informe o Cnpj">
        </div>
        <div class="col-sm-3">
        <input type="text" class="form-control" name="txtRamo" id="txtRamo" placeholder="Informe o Ramo">            
        </div>
    </div>

    <div class="row mt-3"><!--  email / telefone1 / telefone2 -->
        <div class="col-sm-4">
            <input type="email" class="form-control" name="txtEmail" id="txtEmail" placeholder="Insira o Email Comercial">
        </div>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="txtTelefone1" id="txtTelefone1" placeholder="Telefone para Contato">
        </div>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="txtTelefone2" id="txtTelefone2" placeholder="Telefone da Empresa">
        </div>
    </div>

    <div class="row mt-3"><!--LOGIN , SENHA , CONFIRMAR SENHA  -->
        <div class="col-sm-4">
            <input type="text" class="form-control" name="txtLogin" id="txtLogin" placeholder="Login do usuário">
        </div>
        <div class="col-sm-4">
            <input type="password" class="form-control" name="txtSenha" id="txtSenha" placeholder="Informe a Senha">
        </div>
        <div class="col-sm-4">
            <input type="password" class="form-control" name="txtConfirmarSenha" id="txtConfirmarSenha" placeholder="Confirme a Senha">
        </div>
    </div>

    <div class="row mt-3"><!--LOGRADOURO / NUMERO / COMPLEMENTO-->
        <div class="col-sm-3">
            <input type="text" class="form-control" name="txtLogradouro" id="txtLogradouro" placeholder=" Informe seu Endereço">
        </div>
        <div class="col-sm-3">
            <input type="number" class="form-control" name="txtNumero" id="txtNumero" placeholder="Insira o Numero">
        </div>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="txtComplemento" id="txtComplemento" placeholder="Informe o Complemento">
        </div>
    </div>

    <div class="row mt-4"><!-- BAIRRO / CIDADE / UF / CEP -->
        <div class="col-sm-3">
            <input type="text" class="form-control" name="txtBairro" id="txtBairro" placeholder=" Informe seu Bairro">
        </div>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="txtCidade" id="txtCidade" placeholder=" Informe sua Cidade">
        </div>
        <div class="col-sm-3">
            <select name="txtUF" id="txtUF" class="form-control">
                <option value="">Selecione Status</option>
                <option value="Acre">AC</option>
                <option value="Alagoas">AL</option>
                <option value="Amapá">AP</option>
                <option value="Amazonas">AM</option>
                <option value="Bahia">BA</option>
                <option value="Ceará">CE</option>
                <option value="Minas gerais">DF</option>
                <option value="Espírito Santo">ES</option>
                <option value="Goiás">GO</option>
                <option value="Maranhão">MA</option>
                <option value="Mato Grosso">MT</option>
                <option value="Minas gerais">MG</option>
                <option value="Pará">PA</option>
                <option value="Paraíba">PB</option>
                <option value="Paraná">PR</option> 
                <option value="Pernambuco">PE</option>1
                <option value="Piauí">PI</option>1
                <option value="Rio de Janeiro">RJ</option>
                <option value="Rio Grande do Norte">RN</option>
                <option value="Rio Grande do Sul">RS</option>
                <option value="Rondônia">RO</option>
                <option value="Minas gerais">RR</option>
                <option value="Santa Catarina">SC</option>
                <option value="São Paulo">SP</option>
                <option value="Sergipe">SE</option>
                <option value="Tocantins">TO</option>
            </select>
        </div>
        <div class="col-sm-3">
            <input type="number" class="form-control" name="txtCep" id="txtCep" placeholder="Informe seu Cep">
        </div>
    </div>
   
    <div class="row mt-4"><!-- Observação -->
        <div class="col-sm-12">
            <textarea name="txtObs" id="txtObs" class="form-control" rows="3" placeholder="Insira a observação do cadastro (campo não obrigatório)"></textarea>
        </div>
    </div>

    <div class="row mt-2 mb-2"><!--botoes-->
        <div class="col-sm-12">
            <button name="btoCadastrar" class="btn btn-success" onclick="CadastrarParceiro()">Cadastrar</button>
            <button name="btoSair" class="btn btn-danger"href="Parceiro_sistema.php?">Sair</button>
        </div>
    </div>
            <div class="row"> 
                <div class="col-sm-10" id="resultado">
            </div>
</form>