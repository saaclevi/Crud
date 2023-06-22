<div class="input-field">
  <input type="text" name="nome" value="{{isset($linha->nome) ? $linha->nome : ''}}">
  <label>Nome</label>
</div>

<div class="input-field">
  <input type="text" name="ra" value="{{isset($linha->ra) ? $linha->ra : ''}}">
  <label>RA</label>
</div>

<div class="input-field">
  <input type="date" name="dataNasc" value="{{isset($linha->dataNasc) ? $linha->dataNasc : ''}}">
  <label>Data de nascimento</label>
</div>

<div class="file-field  input-field">
  <div class="btn blue">
    <span>Imagem</span>
    <input type="file" name="imagem">
  </div>

  <div class="file-path-wrapper">
    <input class="file-path validate" type="text">
  </div>
</div>

@if(isset($linha->imagem))
<div class="input-field">
  <img width="150" src="{{asset($linha->imagem)}}" />
</div>
@endif

<div class="input-field">
  <input type="number" name="telefone" value="{{isset($linha->telefone) ? $linha->telefone : ''}}">
  <label>Telefone</label>
</div>

<div class="input-field">
  <input type="email" name="email" value="{{isset($linha->email) ? $linha->email : ''}}">
  <label>Email</label>
</div>