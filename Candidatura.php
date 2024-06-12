<h2>AEBatalha _ Candidatura Cursos Profissionais</h2>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    require("validacao.php");
    $validacao = validarFormulario();

    if (empty($validacao)) {
        echo "<h3>Dados submetidos:</h3>";
        echo "<ul>";
        echo "<li>Nome: " . htmlspecialchars($_POST['nome']) . "</li>";
        echo "<li>Data de Nascimento: " . htmlspecialchars($_POST['idade']) . "</li>";
        echo "<li>Documento: " . htmlspecialchars($_POST['documento']) . "</li>";
        echo "<li>Número do Documento: " . htmlspecialchars($_POST['nr_documento']) . "</li>";
        echo "<li>Escolaridade: " . htmlspecialchars($_POST['escolaridade']) . "</li>";
        echo "<li>Estabelecimento de Ensino: " . htmlspecialchars($_POST['estabelecimento']) . "</li>";
        echo "<li>Curso Pretendido: " . htmlspecialchars($_POST['curso']) . "</li>";
        echo "</ul>";
    } else {
        echo "<h3>Os seguintes campos são obrigatórios:</h3>";
        echo "<ul>";
        foreach ($validacao as $campo) {
            echo "<li>" . htmlspecialchars($campo) . "</li>";
        }
        echo "</ul>";
    }
}
?>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <fieldset>
        <legend>Dados pessoais</legend>
        <table>
            <tbody>
                <tr>
                    <td><label>Nome*:</label></td>
                    <td><input name="nome" size="45" type="text" /></td>
                </tr>
                <tr>
                    <td><label>Data de Nascimento*:</label></td>
                    <td><input name="idade" type="text" /></td>
                </tr>
                <tr>
                    <td><label>Doc. de Identificação*:</label></td>
                    <td><select name="documento">
                            <option value="Bilhete de Identidade">Bilhete de Identidade</option>
                            <option value="Cartão do Cidadão">CC</option>
                            <option value="Passaporte">Passaporte</option>
                        </select>&nbsp;<input name="nr_documento" type="text" /></td>
                </tr>
            </tbody>
        </table>
    </fieldset>
    <fieldset>
        <legend>Habilitações académicas</legend>
        <table>
            <tbody>
                <tr>
                    <td><label>Escolaridade:</label></td>
                    <td><select name="escolaridade">
                            <option value="9Ano">9º Ano</option>
                            <option value="12Ano">12º Ano</option>
                        </select></td>
                    <td>Estabelecimento de Ensino:</td>
                    <td><input name="estabelecimento" type="text" /></td>
                </tr>
            </tbody>
        </table>
    </fieldset>
    <fieldset>
        <legend>Ensino secundário profissional:</legend>
        <label>Curso pretendido:
            <input checked="checked" name="curso" type="radio" value="naosei" /> Não sei
            <input name="curso" type="radio" value="tgpsi" /> TGPSI
            <input name="curso" type="radio" value="tsd" /> TSD
        </label>
    </fieldset>
    <p>* campos obrigatórios</p>
    <p><input name="enviar" type="submit" value="Submeter candidatura" /></p>
</form>