@extends('templates.default')
@section('title', 'Cadastro')
@section('content')
{{ $info ?? '' }}
    <h1>Controle de Usuários</h1>
        <div class="col-md-6">
            <div class="form-group">
                <form method="post" action="cadastro">
                @csrf
                <div class="col-xs-2" id='form'>       
                    <label>CPF (único)</label>
                    <input class="form-control" name="cpf" id="cpf" maxlength="11" required>
                    <label> Nome </label>
                    <input class="form-control" name="name" type="text">
                    <label>Carteira de Trabalho</label>
                    <input class="form-control" name="ctps" type="number">
                    <label>Setor</label>
                        <select class="form-select" name="department">
                            <option value="Vendas">Vendas</option>
                            <option value="Escritório">Escritório</option>
                            <option value="Estoque">Estoque</option>
                            <option value="Administrativo">Administrativo</option>
                        </select>
                    <label>Telefone</label>
                    <div class="input-group mb-3">
                     <input class="form-control" type="text" name="tel1" id="tel1">
                     <button id="addTel" class="btn btn-primary">Adicionar mais</button>
                     
                </div>
                </div>

                <input type="submit" value="Cadastrar">
            </div> 
            </form>
    </div>
        <script>
        $(document).ready(function() {
            var max_fields      = 5; //maximum input boxes allowed
            var wrapper   		= $("#form"); //Fields wrapper
            var add_button      = $("#addTel"); //Add button ID
            
            var x = 1; //initlal text box count
            $(add_button).click(function(e){ //on add input button click
                e.preventDefault();
                if(x < max_fields){ //max input box allowed
                    x++; //text box increment
                    $(wrapper).append('<div class="input-group mb-3"><input class="form-control" type="text" name="tel' + x + '" id="tel' + x + '"/><button id="btnRemoveTel" class="btn btn-danger">Remover</button></div>'); //add input box
                }
            });
            
            $(wrapper).on("click","#btnRemoveTel", function(e){ //user click on remove text
                e.preventDefault(); $(this).parent('div').remove(); x--;
            })
        });
        $(document).ready(function(){
  $('#tel1').mask('(00) 00000-0000');
  $('#tel2').mask('(00) 00000-0000');
  $('#tel3').mask('(00) 00000-0000');
  $('#tel4').mask('(00) 00000-0000');
  $('#tel5').mask('(00) 00000-0000');
  $('#cpf').mask('000.000.000-00', {reverse: true});
});
        </script>
@endsection
