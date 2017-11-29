<?php
function getAll_usuarios() {
    // caso trivial
    $erro = array();
    
    // sql que quero executar no database
    $sql = "
        SELECT *
        FROM usuario
        WHERE status = 1
        ORDER BY nome ASC;
    ";
    
    // executando efetivamente
    $result = mysql_query($sql);
    
    // validar o result
    if(!$result) return $erro;
    
    // quero pegar o que veio
    if(mysql_num_rows($result)>0) {
        // aqui tem pelo menos uma row
        while($row = mysql_fetch_assoc($result)) {
            // a cada laço a variavel row recebe as informaçoes da linha corrente
            $r[] = $row;
        }
    } else {
        // aqui esta vazio
        return $erro;
    }
    
    // caso de sucesso
    return $r;
}





function insert_usuario($nome, $senha) {
    $sql = "
        INSERT INTO usuario
        (nome, senha)
        
        VALUES
        ('$nome', '$senha')
    ";
    $result = mysql_query($sql);
    if(!$result) return false;
    return mysql_insert_id();
}



function update_usuario($idUsuario, $nome, $senha) {
    $sql = "
        UPDATE usuario
        SET nome = '$nome', senha = '$senha'
        WHERE idUsuario = '$idUsuario';
    ";
    $result = mysql_query($sql);
    if(!$result) return false;
    return true;
}

function get_usuario($idUsuario) {
    $sql = "
        SELECT *
        FROM usuario
        WHERE idUsuario = '$idUsuario';
    ";
    $result = mysql_query($sql);
    if(!$result) return array();
    if(mysql_num_rows($result)) {
        while($row = mysql_fetch_assoc($result)) {
            $r[] = $row;
        }
    } else return array();
    return $r[0];
}