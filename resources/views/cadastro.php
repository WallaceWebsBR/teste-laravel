<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <title>Laravel</title>
    </head>
    <body>
<div class="container">
    <h1>Controle de Usuários</h1>
        <div class="col-md-6">
            <div class="form-group">
                <form method="get" action="#">
                <div class="col-xs-2">       
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
                    <input class="form-control" name="tel1" type="text">
                    <button id="addtel" class="btn btn-primary">Adicionar mais</button>
                    </div>
                </div>

                <input type="submit" value="Cadastrar">
            </div> 
            </form>
    </div>
</div>
        <script>
        //INITALIZE TEL1
        let x = 1;
        $(document).on('click', '#addtel', function(){
        //ADD +1 TO TEL
        x += 1;
        var html = '<div class="input-group mb-3" id="tel' + x + '"><input class="form-control" name="tel' + x +'" type="text"> <button class="btn btn-danger" onClick="removeTel(' + x + ')">Remover</button> </div>';
        $(this).parent().append(html);
        });

        //REMOVE TEL
        function removeTel(x){
            $('#tel'+ x).remove();
        };
        </script>
    </body>
</html>
