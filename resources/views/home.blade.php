@extends('templates.default')
 
@section('title', 'Home')
 
@section('content')
            <h1>Consulta usuario: {{$name ?? ''}}</h1><br>
            <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <th># ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Setor</th>
                    <th>Contatos</th>
                </thead>
                <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td> 
                    <td>{{ $user->cpf }}</td>
                    <td>{{ $user->department }}</td>
                    <td>{{ $user->tel }}    {{ $user->tel2 }}    {{ $user->tel3 }}    {{ $user->tel4 }}    {{ $user->tel5 }}</td>
                    <td>
                      <form method="post" action="/cadastro"> 
                        @csrf
                        @method('patch')
                        <input type="hidden" value="{{ $user->id }}" name="id">
                        <button class="btn btn-primary" type="submit" onClick="btnEdit('{{ $user->id }}')">Editar</button>
                      </form>
                      <button class="delete btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-id="{{ $user->id }}">Excluir</button>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            </div>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Confirmação de Exclusão</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body edit-content">
      <p> Você confirma a deleção do ID <span id="deleteid"></span> ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <form method="post" action="/"> 
            @csrf
            @method('DELETE')
            <input type="hidden" id="confirmdelete" name="id">
            <button type="submit" class="btn btn-danger">Deletar</button>
          </form>
      </div>
    </div>
  </div>
</div>     
    <script>
        $(document).on("click", ".delete", function () {
          var eventId = $(this).data('id');
          $('#deleteid').html( eventId );
          $('#confirmdelete').attr('value', eventId);
      });
    </script>
@endsection