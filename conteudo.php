<? 
	require('config.php'); 
	global $config; 
	
	global $num_img; 
	$num_img = 1; 
?>

<div id="painel"></div>

### A) Acessando o Painel de Controle - <? getArrowTopo(); ?>

Para acessar o Painel de Controle do site, digite o seguinte link na barra de endereço do seu navegador:

!C
[http://<?= $config['url']; ?>/wp-admin](http://<?= $config['url']; ?>/wp-admin)
!/C

<? getNextImg(); ?>

Em seguida irá aparecer a tela onde você deverá digitar os seus dados de Login.<br/>
Insira seu usuário e senha e clique em "Login".

<? getNextImg(); ?>

**O Painel de Controle**

Ao inserir seus dados de Login, você será direcionado para a página inicial do Painel de Controle.<br/>
Perceba que ao lado esquerdo do Painel temos várias Guias. Este manual irá se referir várias vezes ao termo Guia.
Cada Guia é usada para alterar ou gerenciar uma parte específica do site.

<? getNextImg(); ?>

- - -

<div id="paginas"></div>

### B) Páginas - <? getArrowTopo(); ?>

[Pular Introdução](#add_pagina)

Primeiramente vamos ao Painel para listar todas as Páginas que estão cadastradas.<br/>
Para isso clique na Guia **Páginas**:

<? getNextImg(); ?>

Em seguida você verá uma lista com todas as páginas que temos no site.

<? getNextImg(); ?>

Para editar qualquer Página, basta localizá-la na lista e clicar em cima do Título uma vez.<br/>
Caso esteja com dificuldade em encontrar alguma Página, você pode usar a barra de Pesquisa.

<? getNextImg(); ?>

Uma outra forma de localizar uma página é navegando pelo site. Perceba que quando se está logado no Painel de Controle, no topo do site aparecerá uma barra.<br/>
Navegue até a página que deseja editar e localize nesta barra a opção **Editar Página**.

<? getNextImg(); ?>

<div id="add_pagina"></div>

Para adicionar um Página, na Guia **Página** clique em **Adicionar Nova**.

<? getNextImg(); ?>

- Adicione um título a sua Página. *(Ver Figura,  Item A)*.
- Em seguida escreva o conteúdo da Página e formate da forma que desejar usando o editor de textos do Wordpress. *(Ver Figura, - Item B)*.
- Em cada Página podemos ter um Slider no topo personalizado. Esses Sliders são criados através do [Revolution Slider](#revslider). Você pode usar o slider padrão do site deixando este campo em branco ou [criar seu próprio slider](#revslider_criar_slider) para esta página. Após criar o Slider, basta inserir o [shortcode](#revslider_pegar_shortcode)</a> do slider neste campo.
- Por último clique em <strong>Publicar</strong>.

<? getNextImg(); ?>

Feito isso clique na opção **Ver Página** para conferir a sua página.

Caso queira alterar alguma informação, basta editar a Página da forma que desejar e, ao final, clicar no botão **Atualizar**.

Não esqueça de [trabalhar com o SEO](#seo) da sua Página!

**Observação**:  Novas páginas **não** são automaticamente inseridas no Menu, para isso consulte a sessão [Menu](#menu). 

<? getNextImg(); ?>

- - -

<div id="produtos"></div>

### C) Produtos - <? getArrowTopo(); ?>

A inserção de Produtos é feita de uma forma muito semelhante as Páginas. Aqui você define todas as informações do produto (Cores, Categoria, etc).

 Para adicionar um Produto, na Guia **Produtos** clique em **Adicionar Produto**.

<? getNextImg(); ?>

Agora basta inserir as seguintes informações:

- Insira o nome do Produto. *(Ver Figura, Item A)*
-  Escreva uma descrição do produto que aparecerá antes de qualquer informação que virá a seguir. *(Ver Figura,  Item B)*
-  Defina a Categoria do Produto e, caso deseje colocar esse produto como destaque na home, selecione a Categoria Destaques Home. *(Ver Figura, Item C)*<br/>
*Observação: Os produtos da Home são exibidos em ordem aleatória a cada vez que a home é carregada, isso permite que você coloque mais do que o limite de produtos da home e faça com que eles apareçam da mesma forma*
- Defina a [Imagem Destacada](#midia_definir_imagem_destacada) de seu produto. Esta imagem será usada como imagem miniatura daquele produto na listagem de produtos. *(Ver Figura, - Item E)*<br/>
*Observação: A imagem de destaque do produto precisa estar na proporção de "quadrado", ou seja, 800x800, 700x700, 650x650, etc...*
- As imagens do produto que aparecem na página são inseridas na **Mídia**. Basta inserir todas as imagens que desejar na mídia e elas automaticamente aparecerão na galeria, não há a necessidade de fazer mais nada. **Note apenas que a imagem de destaque que for inserida na mídia não aparece nas fotos de galeria**, isso acontece porque a imagem de destaque tem uma dimensão especial, já as demais não possuem essa limitação.
- Não esqueça de [trabalhar com o SEO](#seo) da sua Página!
- Por último clique em **Publicar**.

<? getNextImg(); ?>

- - -
 
<div id="menu"></div>

### D) Menu - <? getArrowTopo(); ?>

<div id="pagina_menu"></div>

**Inserir Página no Menu**

Os menus são editados acessando a Guia **Aparência** e em seguida **Menus**.

<? getNextImg(); ?>

Localize o item que deseja adicionar ao Menu e em seguida clique no botão **Adicionar ao menu**.

<? getNextImg(); ?>

Perceba que logo abaixo da lista de páginas irá aparecer o item recém adicionado. Apenas clique, segure e arraste o item adicionado para a posição desejada no Menu.

Para que esta alteração seja realmente válida é necessário clicar no botão **Salvar Menu** ao final.

**Atenção!** <br/>
Tome cuidado ao inserir muitos itens no Menu para não quebrar o layout da página.

 - - -
 
<div id="midia"></div>

### E) Mídia - <? getArrowTopo(); ?>

A Mídia é uma pasta virtual onde você pode inserir imagens, vídeos, arquivos de texto, arquivos em pdf, entre outras coisas. Após a inserção, é gerado um [link](#midia_pegar_link) que te dará acesso direto ao arquivo. Este link você pode usar em qualquer página dentro e fora do site. Um uso comum da mídia é inserir um arquivo em pdf, como por exemplo um Artigo, para enviar posteriormente a alguma pessoa, sem a necessidade de enviar o arquivo por e-mail. Basta a pessoa acessar o link gerado que ele poderá ver o artigo. Todos os arquivos inseridos no site através da Mídia se tornam públicos, porém, apenas podem ser acessados através do link direto.

A Mídia pode ser acessada diretamente pelo Painel de Controle através da Guia **Mídia**. Ao acessar a Mídia pelo Painel, serão listados todos os arquivos que foram adicionados a ela. Caso esteja com dificuldade para encontrar um arquivo, basta usar a caixa de Pesquisa de Mídia que se encontra do lado superior direito da tela. Em seguida, para acessar um arquivo basta clicar em cima do nome dele apenas uma vez.

<? getNextImg(); ?>

<div id="midia_pegar_link"></div>

**Pegar Link direto de um arquivo**

Ao acessar o arquivo que deseja, você será direcionado a uma tela onde será listado o **nome** do arquivo, a **data de upload**, a **URL do arquivo**, entre outras informações dependendo do tipo do arquivo. O Link direto do arquivo é a **URL do arquivo**. Basta selecionar o link dentro da caixa de **URL do arquivo** e copia-lo para usar onde desejar.

<? getNextImg(); ?>

<div id="midia_inserir_imagens"></div>

**Inserir imagens na Mídia**

Para acessar a Mídia estando dentro de uma Página/Post, basta acessar a opção **Adicionar Mídia** que se encontra logo abaixo do Título da Página/Post.

<? getNextImg(); ?>

Ao acessar a Mídia, aparecerá uma tela em que se encontram todos os itens que foram adicionados na Mídia até o momento.

<? getNextImg(); ?>

Para fazer o upload de imagens:

- Clique na opção **Fazer upload dos arquivos**.

<? getNextImg(); ?>

- Utilize o botão **Selecionar arquivos**, selecione as imagens do seu computador e aguarde o upload.<br/>
         *OBS: Este processo pode demorar dependendo do tamanho dos arquivos e da velocidade da sua internet!*

<? getNextImg(); ?>

<div id="midia_definir_imagem_destacada"></div>

**Definir Imagem Destacada**

Em algumas Páginas/Posts é possível definir uma Imagem Destacada, ou seja, uma imagem que ficará em destaque em uma lista de Posts ou a imagem destaque de um Notícia, por exemplo.

Definir uma Imagem Destacada é simples:

- Dentro da Página/Post, no canto direito da tela, clique na opção **Usar como imagem destacada**.

<? getNextImg(); ?>

- Você pode fazer o upload de uma nova imagem ou pode selecionar uma imagem préviamente carregada através da opção **Biblioteca de Mídia**.

<? getNextImg(); ?>

- Selecione a imagem desejada e clique na opção **Usar como imagem destacada**.

<? getNextImg(); ?>

<div id="midia_criar_galeria"></div>

**Criando Galerias de Imagens**

Podemos inserir imagens em formato de galeria em alguns posts e até mesmo em algumas páginas.

Para inserir uma galeria:

- Acesse a opção **Adicionar Mídia** que se encontra logo abaixo do Título da Página/Post.

<? getNextImg(); ?>

- Clique na opção **Criar Galeria** ao lado esquerdo da Mídia.

<? getNextImg(); ?>

- Agora selecione toda as imagens que você deseja inserir na galeria clicando sobre elas e em seguida clique em **Criar nova Galeria**.

<? getNextImg(); ?>

- Ordene as imagens da forma que desejar clicando, segurando e arrastando as imagens para a posição desejada. Altere as configurações da galeria e clique em **Inserir Galeria**.

<? getNextImg(); ?>

Pronto! Sua galeria foi criada e inserida na sua página/post.

- - -

<div id="definicoes"></div>

### F) ElevenSystem - <? getArrowTopo(); ?>

A guia **ElevenSystem** fornece opções importantes de atualização do site:

**Configurações Gerais do Site**

Informações gerais sobre a página, informações do Rodapé, Texto da Home e imagens de destaque, etc.

Aqui também é possível definir qual será o Slider Padrão que será usado em determinadas páginas. Basta colar o Shortcode do Slide nos campos disponíveis.

- - - 

<div id="seo"></div>

### G) SEO - <? getArrowTopo(); ?>

O termo [SEO](http://pt.wikipedia.org/wiki/Otimiza%C3%A7%C3%A3o_para_motores_de_busca) significa **Search Engine Optimization** (*Otimização para Mecanismos de Busca*). Quando dizemos que estamos trabalhando com o SEO no site queremos dizer que estamos otimizando ele para ser melhor posicionado nos resultados de uma pesquisa através de um site de buscador, como o Google e Bing, por exemplo. O SEO é um conjunto de estratégias e ações que visam melhorar o rankeamento do site  em um motor de busca. Uma dessas ações consiste em definir corretamente as [Meta Tags](http://support.google.com/webmasters/bin/answer.py?hl=pt-BR&answer=79812) de cada página do seu site.

Dentro de cada Página/Post você encontra uma opção onde você pode inserir e editar as Meta Tags da sua página.

<? getNextImg(); ?>

**Palavra Chave em Foco**

Utilize este campo para que o plugin de SEO possa verificar a qualidade do SEO de sua página/post. Este campo não interfere no SEO, mas interfere no algoritmo de análise da página pelo plugin.

**Exemplo:** Estamos editando a página do "Mercado Noite" na qual contém uma oferta de um microondas. Uma palavra chave em foco interessante para se trabalhar é:

!C
*microondas oferta*
!/C

**Título SEO**

O Título SEO é o título que aparecerá nos resultados de busca. Normalmente usa-se o próprio título da página atual, mas você pode alterar e colocar um título um pouco mais atrativo para o usuário.

Usando o exemplo do Mercado Noite, um bom Título SEO para esta página seria:

!C
*Microondas em Oferta - Mercado Noite*
!/C

**Meta-Descrição**

A Meta-Descrição é a Meta Tag mais importante a ser definida dentro de uma página. Através de uma breve descrição, você define em 156 caracteres sobre o que esta página se trata. Muitos buscadores dão prioridade para este campo nos resultados das pesquisas, por este motivo é importante criar uma descrição bem trabalhada e usando as palavras chaves definidas anteriormente.

Voltando ao nosso exemplo, uma descrição interessante para esta página seria:

!C
*<u>Microondas</u> em oferta no <u>Mercado Noite</u>! Precisa <u>comprar</u> um <u>microondas</u> e está a procura de um <u>preço baixo</u>? Entre e confira nossa <u>promoção</u>*!
!/C

**Meta-Palavras Chave**

As palavras chaves, como o próprio nome já diz, são palavras que retratam o conteúdo da página/post atual. As palavras chaves são separadas por vírgulas. Procure sempre colocar palavras relevantes ao seu site e a página em questão.

**Exemplo:** Estamos editando a página do "Mercado Noite" na qual contém uma oferta de um microondas. Algumas palavras chaves interessantes para esta página seriam:

!C
   *mercado, mercado noite, microondas, comprar, oferta, promocao, preco baixo*
!/C

- - -

<div id="revslider"></div>

### H) Revolution Slider - <? getArrowTopo(); ?>

**O que é o Revolution Slider?**

O Revolution Slider é uma tecnologia que permite que você crie e gerencie banners dinâmicos diretamente pelo painel de controle do Wordpress.

Para um tutorial completo sobre como utilizar o Revolution Slider, acesse este link: [Manual Revolution Slider](http://www.elevenmind.com.br/manuais/revslider).<br/>
   *Obs: Esta documentação está em inglês, portanto acesse este link através do Google Chrome e habilite a tradução da página, caso deseje.*

Abaixo algumas instruções importantes deste Slider:

<div id="revslider_criar_slider"></div>

**Criar um Novo Slider**

O processo de criação de um Slider é bastante simples. Vá até a Guia **Revolution Slider** e em seguida clique em **Create New Slider**.

<? getNextImg(); ?>

Primeiro você deve definir as configurações gerais para este Slider, como por exemplo nome, shortcode, tamanho do slider, tipo de navegação, efeitos de transição, etc...

<? getNextImg(); ?>

<div id="revslider_shortcode_slider"></div>

Para pegar o **Shortcode** do slider, basta copiar o código que está dentro do campo **Slider Shortcode**. 

Para inserir Slides dentro deste Slider, clique em **Edit Slider**. A próxima tela irá exibir todos os Slides que estão dentro deste Slider.

Para inserir num novo Slide e configurá-lo, basta clicar em **New Slider**.

<? getNextImg(); ?>

<?php

   //Helpers
      //Onde eu uso o "+", significa que quero aumentar um valor na variável, assim eu posso me referir a próxima imagem no manual
      function setNum($add="") {
         global $num_img;
         $temp_num = $num_img;

         if( $add == "+" )
            $num_img++;

         return $temp_num;
      }

		//Printa a lista
      function getArrowTopo(){
         echo '<a href="#topo" class="link"><img src="img/arrow_up.png" class="arrow"></a>';
      }

		//Printa a próxima imagem em md
		function getNextImg() {
			echo '!C ![Figura ' . setNum() .'](img/f' . setNum("+") .'.jpg) !/C';
		}
?>
