# sistemaseagro

PHP 7.1.33
WAMPSERVER 3.2.0
BOOTSTRAP 4 (pasta /cdn/)

Apenas deve adicionar esses arquivos em uma pasta no servidor
Arquivo sistema.sql -> ja tem o administrador cadastrado (login: admin senha: mudar123) //será mudada quando disponibilizar ao publico.

/config.php
- Arquivo para renomear alguns caminhos mais utilziados.
- Alterar a linha 8 colocando o nome da pasta raiz do sistema (pasta em que esse arquivo se encontra)

/index.php
- arquivo que faz o link para todos os outros arquivos, tanto para as páginas de view quanto as paginas de controle.
- não precisa ser alterada.

/controle/header.php
- arquivo para a visualização do cabeçalho do site e as barras de menu.

/controle/footer.php
- arquivo para visualização do rodapé do site.

/controle/database.php
- arquivo da classe do banco de dados.
- para conectar o banco deve alterar as linhas de 17 a 22 informando os dados para o acesso ao banco.

/view/
- pasta que contem as páginas de visualização do site para o participante.
- os arquivos de visualização para o participante são descritos abaixo:
  /view/area_participante.php
  /view/index.php
  /view/login.php
  /view/programacao.php
  
/opcoes/Usuario/teste_cpf.php
- página em que o usuário digita cpf para ver se já realizou o cadastro ou não.

/opcoes/Usuario/adicionar_usuario.php
- pagina de cadastro do usuário. (nome, email e cpf)

