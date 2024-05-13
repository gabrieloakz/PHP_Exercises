<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Formulário de Contato</title>
<style>
.erro {
  color: red;
}
</style>
</head>
<body>
<h1><b>Módulo 5 - Programação em PHP</b></h1>
<form action="processa_formulario.php" method="post">
  <table width="400" border="0">
    <tbody>
      <tr>
        <td><b>Nome:</b></td>
        <td><input type="text" name="nome"></td>
      </tr>
      <tr>
        <td><b>Email:</b></td>
        <td><input type="email" name="email"></td>
      </tr>
      <tr>
        <td><b>Telefone:</b></td>
        <td><input type="text" name="telefone"></td>
      </tr>
      <tr>
        <td><b>Cursos de Informática:</b></td>
        <td>
          <input type="radio" name="cursos" value="Android"> Android<br>
          <input type="radio" name="cursos" value="HTML"> HTML<br>
          <input type="radio" name="cursos" value="Java"> Java<br>
          <input type="radio" name="cursos" value="PHP"> PHP<br>
          <input type="radio" name="cursos" value="Python"> Python<br>
          <input type="radio" name="cursos" value="SQL"> SQL<br>
          <input type="radio" name="cursos" value="Scratch"> Scratch
        </td>
      </tr>
      <tr>
        <td><b>Selecione uma opção:</b></td>
        <td>
          <select name="opcao" id="opcao">
            <option value="selecione">--Selecione--</option>
            <option value="Iniciação">Iniciação</option>
            <option value="Intermédio">Intermédio</option>
            <option value="Avançado">Avançado</option>
          </select>
        </td>
      </tr>
      <tr>
        <td><b>Observações:</b></td>
        <td><textarea rows="4" cols="50" name="observacoes"></textarea></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>
          <input type="reset" value="Limpar">
          <input type="submit" value="Enviar">
        </td>
      </tr>
    </tbody>
  </table>
</form>
</body>
</html>
