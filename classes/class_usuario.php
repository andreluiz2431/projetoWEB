<?php
class Usuario
{
    private $pdo;

    private function conexao()
    {
        include './conexaoBD.php';
        // tudo que precisar da conexao colocar $this->conexao();
    }

    private function inserirAcesso($idUsuario)
    { // TESTAR
        // Pegar dia e hora atual
        date_default_timezone_set('America/Sao_Paulo');
        $dataHoraAtual = date('Y-m-d H:i');

        // fazer inserção de acesso do usuário logado
        try {
            $this->conexao();
            $sql = $this->pdo->prepare("INSERT INTO acessos(dataHoraAcesso, idUsuario) VALUES('" . $dataHoraAtual . "'," . $idUsuario . ")");

            $sql->execute(array(':dataHoraAcesso' => $dataHoraAtual)); // faz para executar o array em PDO para inserção

        } catch (PDOexception $e) { // verificação para caso se der errado
            echo "ERRO:" . $e->getMessege();
        }
    }

    public function verAcessosUsuario($idUsuario)
    { // TESTAR
        // consultar todos acesso do usuário logado
        $this->conexao();

        $sql = $this->pdo->query("SELECT * FROM acessos WHERE idUsuario = " . $idUsuario . "");

        $i = 0;
        while ($linha = $sql->fach(PDO::FECH_ASSOC)) {
            $array[$i]['dataHoraAcesso'] = $linha['dataHoraAcesso'];
            $array[$i]['idAcesso'] = $linha['idAcesso'];

            $i++;
        }
        return $array;
    }

    public function acessosUsuario($idUsuario)
    { // TESTAR
        // consultar QUANTIDADE de acessos do usuário logado por dia
        $this->conexao();

        $sql = $this->pdo->query("SELECT * FROM acessos WHERE idUsuario = " . $idUsuario . "")->rowCount();

        return $sql;
    }

    public function verAcessosDia($dia)
    { // TESTAR
        // verificar se funciona, pois no BD ta DATE TIME, e ele vai receber apenas em DATE !

        // consultar acessos do usuário logado no dia especifico
        $this->conexao();

        $sql = $this->pdo->query("SELECT * FROM acessos WHERE dataHoraAcesso = '" . $dia . "'");

        $i = 0;
        while ($linha = $sql->fach(PDO::FECH_ASSOC)) {
            $array[$i]['dataHoraAcesso'] = $linha['dataHoraAcesso'];
            $array[$i]['idAcesso'] = $linha['idAcesso'];

            $i++;
        }
        return $array;
    }

    public function acessosDia($dia)
    { // TESTAR
        // verificar se funciona, pois no BD ta DATE TIME, e ele vai receber apenas em DATE !

        // consultar QUANTIDADE de acessos no dia especifico
        $this->conexao();

        $sql = $this->pdo->query("SELECT * FROM acessos WHERE dataHoraAcesso = '" . $dia . "'")->rowCount();

        return $sql;
    }

    public function verAcessosDiaUsuario($idUsuario, $dia)
    { // TESTAR
        // verificar se funciona, pois no BD ta DATE TIME, e ele vai receber apenas em DATE !

        // consultar acessos do usuário logado no dia especifico
        $this->conexao();

        $sql = $this->pdo->query("SELECT * FROM acessos WHERE (idUsuario = " . $idUsuario . ") AND (dataHoraAcesso = '" . $dia . "')");

        $i = 0;
        while ($linha = $sql->fach(PDO::FECH_ASSOC)) {
            $array[$i]['dataHoraAcesso'] = $linha['dataHoraAcesso'];
            $array[$i]['idAcesso'] = $linha['idAcesso'];

            $i++;
        }
        return $array;
    }

    public function acessosDiaUsuario($idUsuario, $dia)
    { // TESTAR
        // verificar se funciona, pois no BD ta DATE TIME, e ele vai receber apenas em DATE !

        // consultar QUANTIDADE de acessos do usuário logado no dia especifico
        $this->conexao();

        $sql = $this->pdo->query("SELECT * FROM acessos WHERE (idUsuario = " . $idUsuario . ") AND (dataHoraAcesso = '" . $dia . "')")->rowCount();

        return $sql;
    }

    public function verificarLogado()
    { //            Instanciar em todas as telas menos no Login e Cadastro
        session_start();
        if (!isset($_SESSION['usuario'])) {
            echo "<script>window.location.href= './login.php';</script>";
        }
    }

    public function editarSenha($id, $senhaAtual, $senhaNova1, $senhaNova)
    {
        if ($senhaNova == $senhaNova1) {
            //criptografia
            $senhaAtualCriptografada = md5($senhaAtual);
            $senhaNovaCriptografada = md5($senhaNova);

            $this->conexao();

            $ver = false;
            try {
                $sql = $this->pdo->prepare("UPDATE usuario SET senhaUsuario='" . $senhaNovaCriptografada . "' WHERE (idUsuario=" . $id . ") AND (senhaUsuario='" . $senhaAtualCriptografada . "')");
                $sql->execute(array(':senhaUsuario' => "'" . $senhaNovaCriptografada . "'"));

                $ver = true;
            } catch (PDOexception $e) { // verificação para caso se der errado
                echo "ERRO:" . $e->getMessege();
            }

            if ($ver == false) {
                return 'Não alterado';
            } else {
                return 'Alterado';
            }
        } else {
            return 'Senhas incopativeis';
        }
    }

    public function excluirConta($id)
    { // TESTAR
        $this->conexao();
        try {
            $sql = $this->pdo->prepare("UPDATE usuario SET nomeUsuario='off' WHERE idUsuario=" . $id . "");
            $sql->execute(array(':nomeUsuario' => 'off'));
        } catch (PDOexception $e) { // verificação para caso se der errado
            echo "ERRO:" . $e->getMessege();
        }
        return "Deletado";
    }

    public function editar($id, $nome, $email)
    {
        $this->conexao();
        $sql = $this->pdo->query("SELECT * FROM usuario WHERE idUsuario = " . $id . "");
        while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
            $nomeUsuario = $linha['nomeUsuario'];
            $emailUsuario = $linha['emailUsuario'];

            if ($nome != $nomeUsuario) {
                try {
                    $sql1 = $this->pdo->prepare("UPDATE usuario SET nomeUsuario='" . $nome . "' WHERE idUsuario=" . $id . "");
                    $sql1->execute(array(':nomeUsuario' => "$nome"));

                    $_SESSION['usuario'] = $nome;
                } catch (PDOexception $e) { // verificação para caso se der errado
                    echo "ERRO:" . $e->getMessege();
                }
            } elseif ($email != $emailUsuario) {
                try {
                    $sql1 = $this->pdo->prepare("UPDATE usuario SET emailUsuario='" . $email . "' WHERE idUsuario=" . $id . "");
                    $sql1->execute(array(':emailUsuario' => "$email"));

                    $_SESSION['email'] = $email;
                } catch (PDOexception $e) { // verificação para caso se der errado
                    echo "ERRO:" . $e->getMessege();
                }
            } elseif ($nome != $nomeUsuario && $email != $emailUsuario) {
                try {
                    $sql1 = $this->pdo->prepare("UPDATE usuario SET nomeUsuario='" . $nome . "', emailUsuario='" . $email . "'  WHERE idUsuario=" . $id . "");
                    $sql1->execute(array(':nomeUsuario' => "$nome"));

                    $_SESSION['usuario'] = $nome;
                    $_SESSION['email'] = $email;
                } catch (PDOexception $e) { // verificação para caso se der errado
                    echo "ERRO:" . $e->getMessege();
                }
            } else {
                return "Nenhum dado alterado";
            }
        }
    }

    public function login($email, $senha)
    {
        $senhaCriptografada = md5($senha);

        $this->conexao();
        $sql = $this->pdo->query("SELECT * FROM usuario WHERE (emailUsuario = '" . $email . "') AND (senhaUsuario = '" . $senhaCriptografada . "')");
        $ver = false; // pra caso algum estiver incorreto;
        while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) { // Para fazer o coisa percorrer a variável e realizar a consulta
            $_SESSION['usuario'] = $linha['nomeUsuario'];
            $_SESSION['id'] = $linha['idUsuario'];
            $_SESSION['email'] = $linha['emailUsuario'];

            $ver = true;

            echo "<script>alert('" . $_SESSION['usuario'] . " logado com sucesso!');</script>";
            echo "<script>window.location.href= './perfil.php';</script>";
            $this->inserirAcesso($linha['idUsuario']);

            break;
        }
        if ($ver == false) {
            return "Dados incorretos";
        }
    }

    public $sobreUsuario;
    public $enderecoUsuario;
    public $profissaoUsuario;
    public $imagemUsuario;
    public $thumbUsuario;

    public $skill;
    public $valorSkill;

    public $experiencia;

    public $postPost;
    public $dataHora;
    public $idUsuarioPost;
    public $nomeUsuarioPost;

    public $cnpj;
    public $nomeEmpresa;
    public $emailEmpresa;

    public function puxaDados($id)
    {

        $this->conexao();
        $sql = $this->pdo->query("SELECT * FROM usuario WHERE (idUsuario = '" . $id . "')");
        $ver = false; // pra caso algum estiver incorreto;
        while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) { // Para fazer o coisa percorrer a variável e realizar a consulta
            $this->sobreUsuario = $linha['sobreUsuario'];
            $this->enderecoUsuario = $linha['enderecoUsuario'];
            $this->profissaoUsuario = $linha['profissaoUsuario'];
            $this->imagemUsuario = $linha['imagemUsuario'];
            $this->thumbUsuario = $linha['thumbUsuario'];

            $this->conexao();
            $sql = $this->pdo->query("SELECT * FROM skillusuario WHERE (idUsuario = '" . $id . "')");

            while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) { // Para fazer o coisa percorrer a variável e realizar a consulta
                $this->skill[] = $linha['skill'];
                $this->valorSkill[] = $linha['valorSkill'];
            }

            $this->conexao();
            $sql = $this->pdo->query("SELECT * FROM experienciausuario WHERE (idUsuario = '" . $id . "')");

            while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) { // Para fazer o coisa percorrer a variável e realizar a consulta
                $this->experiencia[] = $linha['experiencia'];
            }

            $this->conexao();
            $sql = $this->pdo->query("SELECT * FROM post WHERE (idUsuario = '" . $id . "')");

            while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) { // Para fazer o coisa percorrer a variável e realizar a consulta
                $this->postPost[] = $linha['postPost'];
                $this->dataHora[] = $linha['dataHoraPost'];
            }

            $this->conexao();
            $sql = $this->pdo->query("SELECT * FROM empresa WHERE (idUsuario = '" . $id . "')");

            while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) { // Para fazer o coisa percorrer a variável e realizar a consulta
                $this->cnpj = $linha['cnpj'];
                $this->nomeEmpresa = $linha['nomeEmpresa'];
                $this->emailEmpresa = $linha['emailEmpresa'];
            }

            $ver = true;

            break;
        }
        if ($ver == false) {
            return "Dados incorretos";
        }
    }

    public function cadastro($nome, $email, $senha1, $senha2)
    {
        $this->conexao();
        $sql = $this->pdo->query("SELECT emailUsuario FROM usuario where emailUsuario = '$email' ");
        $emailVerifica = 0;
        while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) { // Para fazer o coisa percorrer a variável e realizar a consulta
            $emailVerifica++;
        }
        if ($emailVerifica > 0) {
            echo "<script>alert('O e-mail informado já está cadastrado a um usuário.');</script>";
        } else {

            if ($senha1 == $senha2) {
                $senhaCriptografada = md5($senha1);

                try { // usa pra fazer inserção ou update no PDO
                    $this->conexao();
                    $sql = $this->pdo->prepare("INSERT INTO usuario(nomeUsuario, emailUsuario, senhaUsuario) VALUES(:nomeUsuario,'" . $email . "','" . $senhaCriptografada . "')");
                    $sql->execute(array(':nomeUsuario' => "$nome")); // faz para executar o array em PDO para inserção

                    $_SESSION['usuario'] = $nome;
                    $_SESSION['email'] = $email;

                    // pegar id do usuario

                    $_SESSION['id'] = $this->pdo->lastInsertId();

                    echo "<script>alert('" . $_SESSION['usuario'] . " cadastrado com sucesso!');</script>";
                    echo "<script>window.location.href = './perfil.php';</script>";
                    $this->inserirAcesso($_SESSION['id']);
                } catch (PDOException $e) {
                    echo 'Error: ' . $e->getMessage();
                    return -1;
                }
            } else {
                return "As senhas não correspondem";
            }
        }
    }

    public function cadastroEmpresa($idUsuario, $nomeEmpresa, $cnpj, $emailProfissional)
    {
        try { // usa pra fazer inserção ou update no PDO
            $this->conexao();
            $sql = $this->pdo->prepare("INSERT INTO empresa(cnpj, idUsuario, nomeEmpresa, emailEmpresa) VALUES(" . $cnpj . ",'" . $idUsuario . "','" . $nomeEmpresa . "','" . $emailProfissional . "')");
            $sql->execute(array(':cnpj' => "$cnpj")); // faz para executar o array em PDO para inserção

            echo "<script>alert('Empresa " . $nomeEmpresa . " cadastrada com sucesso!');</script>";
            echo "<script>window.location.href = './perfil.php';</script>";
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            return -1;
        }
    }

    public function editarEmpresa($idUsuario, $nomeEmpresa, $cnpj, $emailEmpresa)
    {
        $this->conexao();
        $sql = $this->pdo->query("SELECT * FROM empresa WHERE idUsuario = " . $idUsuario . "");
        while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
            $cnpjBD = $linha['cnpj'];
            $nomeEmpresaBD = $linha['nomeEmpresa'];
            $emailEmpresaBD = $linha['emailEmpresa'];

            if ($cnpj != $cnpjBD) {
                try {
                    $sql1 = $this->pdo->prepare("UPDATE empresa SET cnpj='" . $cnpj . "' WHERE idUsuario=" . $idUsuario . "");
                    $sql1->execute(array(':cnpj' => "$cnpj"));
                } catch (PDOexception $e) { // verificação para caso se der errado
                    echo "ERRO:" . $e->getMessege();
                }
            } elseif ($nomeEmpresaBD != $nomeEmpresa) {
                try {
                    $sql1 = $this->pdo->prepare("UPDATE empresa SET nomeEmpresa='" . $nomeEmpresa . "' WHERE idUsuario=" . $idUsuario . "");
                    $sql1->execute(array(':nomeEmpresa' => "$nomeEmpresa"));
                } catch (PDOexception $e) { // verificação para caso se der errado
                    echo "ERRO:" . $e->getMessege();
                }
            } elseif ($emailEmpresaBD != $emailEmpresa) {
                try {
                    $sql1 = $this->pdo->prepare("UPDATE empresa SET emailEmpresa='" . $emailEmpresa . "' WHERE idUsuario=" . $idUsuario . "");
                    $sql1->execute(array(':emailEmpresa' => "$emailEmpresa"));
                } catch (PDOexception $e) { // verificação para caso se der errado
                    echo "ERRO:" . $e->getMessege();
                }
            } elseif ($cnpj != $cnpjBD && $nomeEmpresaBD != $nomeEmpresa && $emailEmpresaBD != $emailEmpresa) {
                try {
                    $sql1 = $this->pdo->prepare("UPDATE empresa SET cnpj='" . $cnpj . "', nomeEmpresa='" . $nomeEmpresa . "', emailEmpresa='" . $emailEmpresa . "'  WHERE idUsuario=" . $idUsuario . "");
                    $sql1->execute(array(':cnpj' => "$cnpj"));
                } catch (PDOexception $e) { // verificação para caso se der errado
                    echo "ERRO:" . $e->getMessege();
                }
            } else {
                return "Nenhum dado alterado";
            }
        }
    }

    public function puxaFeed()
    {
        $this->conexao();
        $sql = $this->pdo->query("SELECT * FROM post");

        while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) { // Para fazer o coisa percorrer a variável e realizar a consulta
            $this->postPost[] = $linha['postPost'];
            $this->dataHora[] = $linha['dataHoraPost'];
            $this->idUsuarioPost[] = $linha['idUsuario'];

            $this->conexao();
            $sql1 = $this->pdo->query("SELECT nomeUsuario FROM usuario WHERE idUsuario = '" . $linha['idUsuario'] . "'");

            while ($linha1 = $sql1->fetch(PDO::FETCH_ASSOC)) { // Para fazer o coisa percorrer a variável e realizar a consulta
                $this->nomeUsuarioPost[] = $linha1['nomeUsuario'];
            }
        }
    }
}
