<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="formulario.css">
<body>
    <H1>Formulário</H1>
    <form method="POST" action="des.php">
        <fieldset>
<div>        
    <label for="inome">Nome</label>
        <input type="text" id="inome" name="nome" placeholder="Digite seu nome">
</div>
<div>
    <label for="icpf">Cpf</label>
    <input type="text" id="icpf" name="cpf" placeholder="Ex:000 000 000 00 ">
</div>
<div>
    <label for="idata">Data de nascimento</label>
    <input type="date" id="idata" name="data" placeholder=" ">
</div>  
<div>
    <label for="iemail">Email</label>
    <input type="email" id="iemail" name="email" placeholder="Digite sue email" >
</div>
<div>
    <label for="itel">Telefone</label>
    <input type="tel" id="itel" name="tel" id="itel">
</div>              
<div<label for="isexo">Selecione seu sexo</label>    
    <label><input type="radio" value="M" name="sexo" id="isexo" >masculino</label>
    <label><input type="radio" value="F" name="sexo" id="isexo" checked>feminino</label>
</div>
<div><label for="icity">Selecione sua cidade</label>
    <select id="icity" name="city">
     <option>Selecione</option>  
     <option>Belo horizonte</option>
     <option>Contagem</option>
     <option>Betim</option>
     <option>Vespasiano</option>
    </select>
</div>
<div><label for="ifoto"><p>Sua foto</p></label>
    <input type="file" name="mfoto" id="ifoto" onchange="ver()"></br>
    <img style="width: 150px; height: 150px;" id="idfoto">
</div>
<div><label for="ibi"><P>Bibliografia</P></label>
    <textarea name="acrescimo" id="ibi" cols="30" rows="10" placeholder="Digite algo mais"></textarea>
</div>
<div><label for="isenha">Senha</label>
    <input type="password" id="isenha" name="senha" placeholder="Digite sua senha">
</div>
<div><label for="icheck">Deseja receber emails de promoções</label>
    <input type="checkbox" id="icheck">
</div>
<div>
   <input type="submit" value="Confirmar">
</div></fieldset>
    </form>
<script src="formulario.js"></script>
</body>
</html>