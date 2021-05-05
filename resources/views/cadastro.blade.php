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
                    <input class="form-control" name="cpf" id="cpf" maxlength="11" value="{{ $user->cpf ?? '' }}" required>
                    <label> Nome </label>
                    <input class="form-control" name="name" type="text" value="{{ $user->name ?? '' }}" required>
                    <label>Carteira de Trabalho</label>
                    <input class="form-control" name="ctps" type="number" value="{{ $user->ctps ?? '' }}" required>
                    <label>Setor</label>
                        <select class="form-select" name="department" value="{{ $user->department ?? '' }}">
                            <option value="Vendas">Vendas</option>
                            <option value="Escritório">Escritório</option>
                            <option value="Estoque">Estoque</option>
                            <option value="Administrativo">Administrativo</option>
                        </select>
                    <label>Telefones</label>
                    <div class="row">
                    <div class="input-group mb-3">
                    <input class="tel form-control" type="text" name="tel1" id="tel1" placeholder="Fixo: (00) 0000-0000" value="{{ $user->tel ?? '' }}">
                    <input class="tel form-control" placeholder="Fixo: (00) 0000-0000" type="text" name="tel2" value="{{ $user->tel2 ?? '' }}"/>
                    </div>
                    <div class="input-group mb-3">
                    <input class="tel2 form-control" type="text" placeholder="Celular: (00) 00000-0000" name="tel3" value="{{ $user->tel3 ?? '' }}"/>
                    <input class="tel2 form-control" type="text" placeholder="Celular: (00) 00000-0000" name="tel4" value="{{ $user->tel4 ?? '' }}" />
                    <input class="tel2 form-control" type="text" placeholder="Celular: (00) 00000-0000" name="tel5" value="{{ $user->tel5 ?? '' }}" />
                    </div>
                    </div>
                </div>
                <input type="hidden" name="id" value="{{ $user->id ?? ''}}">
                <input type="hidden" name="update" value="{{ $update ?? 'no'}}">
                <button class="btn btn-success" type="submit">Cadastrar</button>
            </div> 
            </form>
    </div>
        <script>

  $(document).ready(function(){
        //TELEFONE FIXO
        $('.tel').mask('(00) 0000-0000');
        $('.tel2').mask('(00) 00000-0000');
        $('#cpf').mask('000.000.000-00', {reverse: true});
});
        </script>
@endsection
