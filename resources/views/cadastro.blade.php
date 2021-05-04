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
                    <input class="form-control" name="cpf" type="text">
                    <label> Nome </label>
                    <input class="form-control" name="name" type="text">
                    <label>Carteira de Trabalho</label>
                    <input class="form-control" name="ctps" type="text">
                    <label>Setor</label>
                        <select class="form-select" name="department">
                            <option value="sales">Vendas</option>
                            <option value="office">Escritório</option>
                            <option value="stock">Estoque</option>
                            <option value="administrative">Administrativo</option>
                        </select>
                    <label>Telefone</label>
                    <div class="input-group mb-3">
                     <input class="form-control" type="text" name="tel1">
                     <button id="addTel" class="btn btn-primary">Adicionar mais</button>
                     
                </div>
                </div>

                <input type="submit" value="Cadastrar">
            </div> 
            </form>
    </div>
        <script>
        $(document).ready(function() {
            var max_fields      = 10; //maximum input boxes allowed
            var wrapper   		= $("#form"); //Fields wrapper
            var add_button      = $("#addTel"); //Add button ID
            
            var x = 1; //initlal text box count
            $(add_button).click(function(e){ //on add input button click
                e.preventDefault();
                if(x < max_fields){ //max input box allowed
                    x++; //text box increment
                    $(wrapper).append('<div class="input-group mb-3"><input class="form-control" type="text" name="tel' + x + '"/><button id="btnRemoveTel" class="btn btn-danger">Remover</button></div>'); //add input box
                }
            });
            
            $(wrapper).on("click","#btnRemoveTel", function(e){ //user click on remove text
                e.preventDefault(); $(this).parent('div').remove(); x--;
            })
        });
// //INITALIZE TEL1
        // let x = 1;
        // $(document).on('click', '#addtel', function(){
        // //ADD +1 TO TEL
        // x += 1;
        // var html = '<div class="input-group mb-3" id="tel' + x + '"><input class="form-control" name="tel' + x +'" type="text"> <button class="btn btn-danger" onClick="removeTel(' + x + ')">Remover</button> </div>';
        // $(this).parent().append(html);
        // });

        // //REMOVE TEL
        // function removeTel(x){
        //     $('#tel'+ x).remove();
        // };
        </script>
@endsection
