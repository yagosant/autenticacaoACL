@extends('shared.base')
@section('content')
<div class="panel panel-default">
<div class="panel-heading"><h3>Cadastre-se</h3></div>
<div class="panel-body">

<form class="form-horizontal" method="post" action="{{route('salvar')}}">
{{ csrf_field() }}
 <div class="form-group">
   <label for="nome" class="col-sm-2 control-label">Nome</label>
   <div class="col-sm-10">
     <input type="text" class="form-control" name="nome"
      placeholder="Digite seu nome">
   </div>
 </div>
 <div class="form-group">
   <label for="email" class="col-sm-2 control-label">Email</label>
   <div class="col-sm-10">
     <input type="email" class="form-control" name="email"
      placeholder="Digite seu email">
   </div>
 </div>
 <hr>
 <div class="form-group">
   <label for="login" class="col-sm-2 control-label">Login</label>
   <div class="col-sm-10">
     <input type="text" class="form-control" name="login"
      placeholder="Digite seu login">
   </div>
 </div>
 <div class="form-group">
  <label for="cargo" class="col-sm-2 control-label">Cargo</label>
  <div class="col-sm-10">
  <select class="form-control" name="cargo">
      <option value="Atendente">Atendente</option>
      <option value="Gerente">Gerente</option>
  </select>
  </div>
</div>
 <div class="form-group">
   <label for="senha" class="col-sm-2 control-label">Senha</label>
   <div class="col-sm-10">
     <input type="password" class="form-control" name="senha"
      placeholder="Digite sua senha">
   </div>
 </div>
 <div class="form-group">
   <div class="col-sm-offset-2 col-sm-10">
       <button type="reset" class="btn btn-default">Cancelar</button>
       <button type="submit" class="btn btn-primary">Registrar</button>
   </div>
 </div>
</form>
</div>
</div>
@endsection