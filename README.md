# Projeto: Descubra seu Signo

Este projeto consiste em um site simples que permite ao usuário descobrir seu signo com base na sua data de nascimento. O site possui um design neon e foi criado utilizando HTML, CSS, PHP, XML e Bootstrap.

## Instruções de Configuração

1. Certifique-se de ter o XAMPP instalado para rodar o servidor Apache e PHP. Baixe o XAMPP [aqui](https://www.apachefriends.org/download.html).
2. Após instalar o XAMPP, copie a pasta do projeto para o diretório `htdocs` no local onde o XAMPP foi instalado (geralmente `C:/xampp/htdocs/`).
3. Assegure-se de que o servidor Apache do XAMPP esteja rodando.

## Instruções de Instalação

1. Clone ou faça o download deste repositório.
   ```bash
   git clone https://github.com/seu_usuario/seu_repositorio.git
Extraia o conteúdo do arquivo zip (caso tenha baixado como zip) e mova-o para o diretório htdocsdo XAMPP.
Veja os seguintes diretórios apresentados na estrutura:
/assets/css
/assets/imgs
/layouts
Coloque uma imagem de fundo ( imagem1.jpg) e um logotipo ( logo1.png) dentro de assets/imgs.
Instruções de como operar o programa
Acesse o projeto através do navegador no endereço http://localhost/Project/index.php.
Na página principal, insira seus dados de nascimento e clique no botão Consultar Signo .
O signo correspondente à sua data de nascimento será exibido junto com uma breve descrição.
Você pode clicar no botão Voltar para retornar à página principal e consultar outro sinal.
Arquivo de Manifesto
O projeto está organizado da seguinte forma:

index.php: Página inicial com o formulário de consulta do signo.
show_zodiac_sign.php: Página que processa a data de nascimento e exibe o resultado do signo.
signos.xml: Arquivo contendo os dados dos signos zodiacais.
layouts/header.php: Cabeçalho utilizado em todas as páginas, contendo logotipo e navegação.
assets/css/style.css: Estilos personalizados para o site, incluindo a aparência neon.
Informações de Direitos Autorais e Licenciamento
Este projeto foi desenvolvido por Gedeão Batista Machado , aluno da UNOPAR . O código-fonte é de livre distribuição, mas o uso comercial requer permissão explícita do autor.

Licença: Licença MIT. Você pode obter uma cópia da licença aqui .

Informações de Contato com o Distribuidor ou Programador
Se precisar de mais informações ou ajuda com o projeto, entre em contato:

Desenvolvedor: Gedeão Batista Machado
E-mail: gedeaomachado21@gmail.com
Defeitos Conhecidos
O layout pode apresentar diferenças visuais em navegadores antigos.
O arquivo XML deve ser atualizado manualmente para modificação ou adição de informações dos signos.
O projeto não possui suporte completo para anos bissextos.
Solução de problemas
Problema: O site não carrega no navegador.
-se de que o XAMPP está rodando e que o servidor Apache está ativo.
Verifique se o projeto está no diretório correto ( htdocs).
Problema: As imagens de fundo e logotipo não aparecem.
Verifique se os arquivos de imagem estão no diretório assets/imgscom os nomes corretos ( imagem1.jpge logo1.png).
Problema: O sinal não aparece corretamente.
Verifique se o arquivo signos.xmlcontém as informações corretas e está localizado no diretório do projeto.
Créditos e Agradecimentos
Este projeto foi desenvolvido por Gedeão Batista Machado como parte do curso na UNOPAR . Agradecimentos a todos os professores e colegas que forneceram suporte durante o desenvolvimento.

Registro de alterações
v1.0.0 - Dados de Lançamento
Criação da estrutura inicial do site.
Implementação de lógica de consulta de sinais via arquivo XML.
Design personalizado com tema neon.
