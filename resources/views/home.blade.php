@extends('templates.default')
 
@section('title', 'Home')
 
@section('sidebar')
    @parent
@endsection
 
@section('content')
            <h1>Consulta usuario: {{$name ?? ''}}</h1><br>
            <table class="table table-hover">
                <thead>
                    <th>ID</th>
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
                    <td>{{ $user->tel }}</td>
                    <td><button class="btn btn-primary" onClick="btnEdit('{{ $user->id }}')">Editar</button>
                    <button class="btn btn-danger" onClick="btnDel('{{ $user->id }}')" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Excluir</button></td>
                </tr>
                @endforeach
                </tbody>
            </table>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body edit-content">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>     
    <script>
        function btnEdit(x){
            

        }
        function btnDel(x){
            
        }
        $('#edit-modal').on('show.bs.modal', function(e) {
            var $modal = $(this),
            esseyId = e.relatedTarget.id;
            
            $modal.find('.edit-content').html(esseyId);            
        })
    </script>
@endsection