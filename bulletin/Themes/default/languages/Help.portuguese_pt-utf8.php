<?php
// Version: 1.1; Help

global $helptxt;

$helptxt = array();

$txt[1006] = 'Fechar esta janela';

$helptxt['manage_boards'] = '
	<b>Editar Quadros</b><br />
	Neste menu pode criar/ordenar/apagar quadros, e as categorias
	acima deles. Por exemplo, se tiver um site abrangente
	que ofereça informação sobre &quot;Desporto&quot;, &quot;Automóveis&quot; e &quot;Música&quot;, estas
	seriam as Categorias de nível superior que teria de criar. Dentro de cada uma destas categorias
	poderia criar &quot;sub-categorias&quot; hierárquicas,
	ou &quot;Quadros&quot; dentro de cada uma delas. É uma hierarquia simples, com esta estrutura: <br />
	<ul>
		<li>
			<b>Desporto</b>
			&nbsp;- A &quot;categoria&quot;
		</li>
		<ul>
			<li>
				<b>Futebol</b>
				&nbsp;- Um quadro dentro da categoria de &quot;Desporto&quot;
			</li>
			<ul>
				<li>
					<b>Estatísticas</b>
					&nbsp;- Um sub-quadro dentro do quadro de &quot;Futebol&quot;
				</li>
			</ul>
			<li><b>Basquetebol</b>
			&nbsp;- Um quadro dentro da categoria de &quot;Desporto&quot;</li>
		</ul>
	</ul>
	As Categorias permitem separar o Fórum em vários assuntos (&quot;Automóveis,
	Desporto&quot;), e os &quot;Quadros&quot; dentro delas contêm os tópicos dentro dos quais
	os membros podem enviar mensagens. Um utilizador interessado em Ferraris
	irá enviar uma mensagem em &quot;Automóveis->Ferraris&quot;. As Categorias permitem que as pessoas
	encontrem rapidamente aquilo que lhes interessa.<br />
	Assim sendo, um Quadro é um objecto chave dentro de cada Categoria.
	Se quer enviar mensagens sobre &quot;Ferraris&quot; vai à categoria &quot;Automóveis&quot; e
	entra no quadro &quot;Ferraris&quot; para enviar a sua mensagem.<br />
	As funções administrativas neste menu são as de criar novos quadros
	dentro de cada categoria, de ordená-los (colocar &quot;Ferraris&quot; à frente de &quot;Porsches&quot;), ou
	apagar os quadros.';

$helptxt['edit_news'] = '<b>Editar as Notícias do Fórum</b><br />
	Esta zona permite definir o texto que aparece nas Notícias. As Notícias aparecem no Índice do Fórum.
	Pode adicionar quantos itens quiser (ex:, &quot;Não percam a sessão de Chat com o Administrador nesta Terça-Feira&quot;).
	Cada item deve ser colocado numa caixa separada. As caixas são mostradas aleatóriamente nas Notícias.';

$helptxt['view_members'] = '
	<ul>
		<li>
			<b>Ver Todos os Membros</b><br />
			Ver todos os membros do Fórum. Aparece uma lista dos membros com links para os seus perfis. Ao clicar
			num membro pode ter acesso aos seus dados (página pessoal, idade, etc.), e como Administrador
			você pode modificar estes parâmetros. Você tem controlo absoluto sobre os membros, incluindo a
			possibilidade de os remover do Fórum.<br /><br />
		</li>
		<li>
			<b>Esperando Aprovação</b><br />
			Esta secção só aparece se activou a aprovação de novos membros pelo Administrador. Qualquer pessoa que se registe
			no Fórum só será aceite como membro caso o Administrador aprove esse mesmo registo. Aqui é possível ver uma lista
			de todos os membros que estão à espera de aprovação. Pode escolher entre aceitar ou rejeitar (apagar) qualquer membro
			nesta lista clicando na caixa correspondente ao membro e escolhendo a acção a partir do menu drop-down no fundo
			do ecrã. Ao rejeitar um membro, pode escolher se quer apagá-lo com ou sem notificação da sua decisão.<br /><br />
		</li>
		<li>
			<b>Esperando Activação</b><br />
			Esta secção só será visível se tiver activado a opção de enviar um email de activação aos membros depois do registo.
			Aqui existe uma lista de todos os membros que ainda não activaram o seu registo. A partir daqui pode escolher entre
			aceitar, rejeitar ou lembrar os membros para activarem o seu registo. Também pode escolher enviar um email aos membros
			para informá-los das suas acções.<br /><br />
		</li>
	</ul>';

$helptxt['ban_members'] = '<b>Banir Membros</b><br />
	O SMF fornece a possibilidade de &quot;banir&quot; utilizadores, de modo a prevenir que pessoas que violem as regras
	do Fórum com SPAM, mensagens obscenas, etc, voltem a fazer o mesmo. Como Administrador,
	quando vê as mensagens, pode ver o endereço IP de cada utilizador. Na lista de banimento, 
	basta inserir esse mesmo IP, gravar, e eles já não podem enviar nenhuma mensagem desse local.<br />Também é possível
	banir pessoas através do seu endereço de email.';

$helptxt['modsettings'] = '<b>Editar Configurações e Opções</b><br />
	Existem várias funcionalidades nesta secção que podem ser alteradas de acordo com a sua preferência.
        As opções para os pacotes instalados normalmente também aparecem aqui.';

$helptxt['number_format'] = '<b>Formato dos Números</b><br />
	Pode usar esta opção para formatar a forma como os números serão mostrados no Fórum. O formato é o seguinte:<br />
	<div style="margin-left: 2ex;">1,234.00</div><br />
Onde \',\' é o caracter usado para dividir o grupo dos milhares, \'.\' é o caracter usado como ponto decimal e o número de zeros indica a precisão dos arredondamentos.';

$helptxt['time_format'] = '<b>Formato da Hora</b><br />
		Você tem o poder de ajustar a forma como a data e a hora aparecem no site. Existem muitas letrinhas, mas é muito simples.
	As convenções seguem a função \'strftime\' do PHP e estão descritas em baixo (pode encontrar mais informações em <a href="http://www.php.net/manual/function.strftime.php" target="_blank">php.net</a>).<br />
	<br />
	Os seguintes caracteres são reconhecidos da seguinte maneira:  <br />
	<span class="smalltext">
	&nbsp;&nbsp;%a - nome da semana abreviado<br />
	&nbsp;&nbsp;%A - nome da semana<br />
	&nbsp;&nbsp;%b - nome do mês abreviado<br />
	&nbsp;&nbsp;%B - nome do mês<br />
	&nbsp;&nbsp;%d - dia do mês (01 a 31) <br />
	&nbsp;&nbsp;%D<b>*</b> - o mesmo que %m/%d/%y <br />
	&nbsp;&nbsp;%e<b>*</b> - dia do mês (1 a 31) <br />
	&nbsp;&nbsp;%H - relógio com 24 horas (de 00 a 23) <br />
	&nbsp;&nbsp;%I - relógio com 12 horas (de 01 a 12) <br />
	&nbsp;&nbsp;%m - mês como número (01 a 12) <br />
	&nbsp;&nbsp;%M - minutos<br />
	&nbsp;&nbsp;%p - ou &quot;am&quot; ou &quot;pm&quot; consoante a hora do dia<br />
	&nbsp;&nbsp;%R<b>*</b> - hora na notação 24 horas<br />
	&nbsp;&nbsp;%S - segundos<br />
	&nbsp;&nbsp;%T<b>*</b> - hora actual, igual a %H:%M:%S <br />
	&nbsp;&nbsp;%y - ano com 2 dígitos (00 a 99) <br />
	&nbsp;&nbsp;%Y - ano com 4 dígitos<br />
	&nbsp;&nbsp;%Z - zona horária ou nome ou abreviação<br />
	&nbsp;&nbsp;%% - literalmente, um caracter \'%\'<br />
	<br />
	<i>* Não funciona em servidores Windows.</i></span>';

$helptxt['live_news'] = '<b>Anúncios em directo</b><br />
	Esta caixa mostra os anúncios em directo de <a href="http://www.simplemachines.org/">www.simplemachines.org</a>.
	Deve verificar estas informações de vez em quando para saber de actualizações, novas versões e informações importantes sobre o Fórum
	Simple Machines.';

$helptxt['registrations'] = '<b>Gestão de Registos</b><br />
	Esta secção contém todas as funções necessárias para gerir os novos registos no Fórum. Existem até quatro
	zonas visíveis dependendo da configuração do seu Fórum. Elas são:<br /><br />
	<ul>
		<li>
			<b>Registar Novo Membro</b><br />
			A partir desta secção pode efectuar o registo de novos membros. Isto pode ser útil nos fóruns que tenham a opção de
			registo de novos membros desactivada, ou em casos em que o administrador quer criar uma conta de teste.
			Se a opção de activar o registo estiver activada no Fórum, será enviado um email ao novo membro com um link de
			activação da sua conta. Do mesmo modo, pode escolher enviar um email aos membros com uma nova password.<br /><br />
		</li>
		<li>
			<b>Editar o Acordo de Registo</b><br />
			Esta zona permite definir o texto para o acordo de registo que é exibido quando membros se registam no seu fórum.
			Pode adicionar ou remover o que quiser da versão original incluida no SMF.<br /><br />
		</li>
		<li>
			<b>Editar os Nomes Reservados</b><br />
			Isto permite adicionar palavras ou frases que não quer que as pessoas usem como nome de utilizador ou nome
                        visível.<br /><br />
		</li>
		<li>
			<b>Definições</b><br />
			Esta secção só será visível se você tiver
                        permissão de administrador do fórum. Desta janela pode decidir sobre o método de registo
			a usar no fórum, assim como outras definições de registo.
		</li>
	</ul>';

$helptxt['modlog'] = '<b>Registo dos Moderadores</b><br />
	Esta secção permite que o Administrador possa ter um registo de todas as acções de moderação efectuadas pela equipa de Moderadores. Para assegurar que
	os próprios moderadores não apagam as suas acções, estas ficarão guardadas e não poderão ser apagadas durante 24 horas.';
$helptxt['error_log'] = '<b>Registo de Erros</b><br />
	O registo de Erros regista todos os erros graves encontrados pelos utilizadores no Fórum. Lista todos estes erros por ordem cronológica
	e podem ser reordenados clicando na seta preta junto da data. Pode ainda filtrar os erros clicando na imagem junto de cada ítem do erro.
	 Isto permite filtrar, por exemplo, todos os erros de um determinado membro. Quando existe um filtro activo, os únicos registos que aparecem serão os que forem iguais a esse filtro.';
$helptxt['theme_settings'] = '<b>Configurações do Tema</b><br />
	Esta página de configurações permite alterar as configurações específicas de cada tema. Estas configurações incluem opções tais como a pasta e o URl dos temas e também
	opções que afectam o layout de cada tema no Fórum. A maior parte dos temas tem uma variedade de opções configuráveis,
	permitindo adaptá-los conforme as suas necessidades.';
$helptxt['smileys'] = '<b>Centro de Adminstraçã de Smileys</b><br />
	Aqui pode adicionar ou remover smileys e conjuntos de smileys. Nota importante: Se um smiley existe num conjunto, tem de existir em todos - caso contrário, pode tornar-se
	confuso para os utilizadores que usem conjuntos de smileys diferentes.<br /><br />

	Você também pode editar ícones da mensagem aqui, se tiver permissões para tal.';
$helptxt['calendar'] = '<b>Gestor do Calendário</b><br />
	Aqui pode modificar as definições actuais do calendário, assim como adicionar ou remover feriados ou eventos.';

$helptxt['serversettings'] = '<b>Configurações do Servidor</b><br />
	Aqui pode executar a configuração central do seu fórum. Esta secção inclui as configurações da base de dados e URL, bem como outras
	importantes configurações tais como as de mail e as de cache. Tenha cuidado sempre que editar alguma destas configurações uma vez que basta um erro para que o fórum fique inacessível';

$helptxt['topicSummaryPosts'] = 'Permite definir o número de mensagens anteriores que aparecem no resumo do tópico aquando da resposta ao mesmo.';
$helptxt['enableAllMessages'] = 'Defina isto para o número <em>máximo</em> de mensagens que um tópico pode ter para mostrar o link "todas". Ao definir isto para um valor mais baixo do que o &quot;Número máximo de mensagens para mostrar na página do tópico&quot; significa que o link nunca será mostrado. Se definir para um valor superior pode tornar o fórum muito lento.';
$helptxt['enableStickyTopics'] = 'Os tópicos inamovíveis são tópicos que permanecem no topo da lista. Normalmente são usados para mensagens 
		importantes. Apenas os moderadores e administradores podem tornar um tópico inamovível.';
$helptxt['allow_guestAccess'] = 'Removendo a selecção desta caixa fará com que os visitantes só possam fazer operações básicas - entrada, registo, relembrar password, etc. - no seu Fórum. Isto não é o mesmo que desactivar o acesso dos visitantes aos quadros.';
$helptxt['userLanguage'] = 'Activando esta opção irá permitir que os utilizadores possam escolher o idioma do Fórum. Isto não afecta
		a selecção pré-definida.';
$helptxt['trackStats'] = 'Estatísticas<br />Isto irá permitir que os utilizadores possam ver as últimas mensagens e os tópicos mais populares do Fórum.
		Irá também mostrar várias estatísticas, tal como o maior número de membros online, novos membros e novos tópicos.<hr />
		Vistas de página:<br />Adiciona outra coluna às estatísticas com o número de Hits no Fórum.';
$helptxt['titlesEnable'] = 'Activando os Títulos de Custome irá permitir que os membros com permissão para tal possam criar um título especial para eles próprios.
		Isto será mostrado por baixo do seu nome.<br /><i>Por exemplo:</i><br />João<br />Tipo Porreiro';
$helptxt['topbottomEnable'] = 'Isto irá adicionar os botões de ir para o topo/fundo nas mensagens e tópicos de modo a que os utilizadores possam ir para o topo ou fundo das páginas 
		sem fazer scroll.';
$helptxt['onlineEnable'] = 'Isto irá mostrar uma imagem a indicar se o membro está online ou offline';
$helptxt['todayMod'] = 'Isto irá mostrar &quot;Hoje&quot;, ou &quot;Ontem&quot;, em vez da data.';
$helptxt['enablePreviousNext'] = 'Isto irá mostrar um link para o tópico seguinte e para o tópico anterior.';
$helptxt['pollMode'] = 'Isto permite definir se as sondagens estão activadas ou não. Se as sondagens estiverem desactivadas, todas as sondagens existentes serão escondidas
		da lista de tópicos. Pode escolher continuar a mostrar os tópicos com sondagens seleccionando a opção
		&quot;mostrar Sondagens como Tópicos&quot;.<br /><br />Para escolher quem pode iniciar novas sondagens, ver as sondagens, etc,
		basta editar as permissões necessárias. Lembre-se disto se as sondagens não estiverem a funcionar por alguma razão.';
$helptxt['enableVBStyleLogin'] = 'Isto irá mostrar uma caixa de entrada mais compacta em todas as páginas do Fórum.';
$helptxt['enableCompressedOutput'] = 'Esta opção irá comprimir os dados de modo a poupar largura de banda, 
		no entanto é necessário ter o zlib instalado no seu servidor.';
$helptxt['databaseSession_enable'] = 'Esta opção usa a base de dados para o armazenamento das sessões - ajuda nos problemas de expiração da sessão e pode tornar o Fórum mais rápido.';
$helptxt['databaseSession_loose'] = 'Activando esta opção irá diminuir a largura de banda do Fórum, e fazer com que ao clicar no botão BACK a página não seja recarregada - a desvantagem é que os ícones (novo) não irão ser actualizados, entre outras coisas. (a não ser que clique no link para a página em vez de usar o botão BACK.)';
$helptxt['databaseSession_lifetime'] = 'Isto é o número de segundos para a duração das sessões. Se uma sessão não for acedida durante demasiado tempo, diz-se que &quot;expirou&quot;. Recomenda-se qualquer coisa acima de 2400.';
$helptxt['enableErrorLogging'] = 'Isto irá registar todos os erros, tais como entradas (logins) falhadas, de modo a saber o que correu mal.';
$helptxt['allow_disableAnnounce'] = 'Isto irá permitir aos utilizadores optarem por não receber as notificações dos tópicos que o administrador marcar como "anúncios".';
$helptxt['disallow_sendBody'] = 'Esta opção remove a possibilidade de receber o texto completo das mensagens e tópicos nos e-mails de notificação.<br /><br />Muitas vezes, os membros respondemà notificação via e-mail, o que, na maioria dos casos vai parar à caixa de correio do webmaster.';
$helptxt['compactTopicPagesEnable'] = 'Isto simplesmente mostra a o número de páginas.<br /><i>Exemplo:</i>
		&quot;3&quot; para mostrar: 1 ... 4 [5] 6 ... 9 <br />
		&quot;5&quot; para mostrar: 1 ... 3 4 [5] 6 7 ... 9';
$helptxt['timeLoadPageEnable'] = 'Isto irá mostrar o tempo (em segundos) que o SMF demorou a criar a página em visualizaç&atiulde;o. Esta informação será mostrada no final da página';
$helptxt['removeNestedQuotes'] = 'Isto irá mostrar a citação da mensagem em questão e não as outras todas.';
$helptxt['simpleSearch'] = 'Isto irá mostrar uma pesquisa simples e um link para uma pesquisa mais avançada.';
$helptxt['max_image_width'] = 'Isto permite definir um tamanho máximo para as imagens enviadas. As imagens mais pequenas do que o tamanho máximo não serão afectadas.';
$helptxt['mail_type'] = 'Isto permite escolher entre o programa de e-mail padrão do PHP e o servidor de email. Preencha os dados do seu servidor de email a não ser que tenha escolhido o sendmail.';
$helptxt['attachmentEnable'] = 'Os anexos são ficheiros que os membros podem enviar para o Fórum e anexá-los a uma mensagem.<br /><br />
		<b>Verifique a extensão dos ficheiros</b>:<br /> Quer verificar a extensão dos ficheiros?<br /><br />
		<b>Ficheiros permitidos</b>:<br /> Pode definir os ficheiros que são permitidos anexar.<br /><br />
		<b>Pasta dos anexos</b>:<br /> O caminho para os ficheiros<br />(exemplo: /home/sites/yoursite/www/forum/anexos)<br /><br />
		<b>Tamanho máximo da pasta de anexos</b> (em KB):<br /> Selecione o tamanho pretendido, incluido todos os ficheiros.<br /><br />
		<b>Tamanho Máximo dos Anexos por Mensagem</b> (em KB):<br /> Defina o tamanho máximo de todos os anexos numa única mensagem.  Se este valor for menor do que o limite definido por anexo, o limite será definido por esta variável.<br /><br />
		<b>Tamanho Máximo de cada anexo</b> (em KB):<br /> Defina o tamanho máximo de cada anexo.<br /><br />
		<b>Tamanho Máximo dos Anexos</b> (em kB):<br /> Defina o tamanho máximo dos anexos.<br /><br />
		<b>Mostrar os anexos como imagens nas mensagens</b>:<br /> Se o ficheiro anexo for uma imagem, ela aparecerá na mensagem.<br /><br />
		<b>Redimensionar as imagens que surgem nas mensagens</b>:<br /> Se proceder desta forma, será guardado um outro ficheiro (menor) sendo mostrada uma imagem mais pequena.<br /><br />
		<b>Altura e Largura das imagens a aparecer nas mensagens</b>:<br /> Só é usado com a opção &quot;Redimensionar as imagens que surgem nas mensagens&quot;, usando a largura e altura máximas para redimensionar as imagens. O redimensionamento será feito porporcionalmente.';
$helptxt['karmaMode'] = 'O Karma é uma funcionalidade que mostra a popularidade de um membro. Os Membros, se tiverem permissão para isso, podem
		\'aplaudir\' ou \'denegrir\' os outros membros, ou seja, aumentar ou diminuir a sua popularidade. Pode alterar o número de mensagens
		mínimas para que um membro possa votar no &quot;karma&quot;, o tempo entre cada karma dado, e se o administrador quiser esperar
                esse mesmo tempo também.<br /><br />Se os grupos de membros podem ou não votar no karma dos outros membros é controlado
		pelas permissões. Se tiver problemas em colocar esta opção a funcionar para todos os membros, verifique com atenção as permissões.';
// !!! This should be resused or removed.
$helptxt['cal_enabled'] = 'O calendário pode ser usado para mostrar aniversários, ou outros momentos importantes da sua comunidade.<br /><br />
		<b>Mostrar Dias como Link para \'Colocar Evento\'</b>:<br />Isto irá permitir que os membros possam colocar eventos no calendário nesse dia, quando clicam na data.<br />
		<b>Mostrar Números das Semanas</b>:<br />Mostra em que semana estamos.<br />
		<b>Máximo de dias em avanço no índice do Fórum</b>:<br />Se estiver definido para 7, serão mostrados também os eventos da semana seguinte.<br />
		<b>Mostrar os Feriados no Índice do Fórum</b>:<br />Mostra os feriados mais próximos numa barra no índice do Fórum.<br />
		<b>Mostrar os Aniversários no Índice do Fórum</b>:<br />Mostra os aniversários mais próximos numa barra no índice do Fórum.<br />
		<b>Mostrar os Eventos no Índice do Fórum</b>:<br />Mostra os eventos mais próximos numa barra no índice do Fórum.<br />
		<b>Quadro para Colocar os Eventos</b>:<br />Qual é o quadro por defeito onde os eventos serão colocados?
		<b>Permitir eventos sem link</b>:<br />Permite que os membros coloquem eventos sem link para nenhum quadro.<br />
                <b>Ano Mínimo</b>:<br />Escolha o &quot;primeiro&quot; ano da lista do calendário.<br />
		<b>Ano Máximo</b>:<br />Escolha o &quot;último&quot; ano da lista do calendário<br />
		<b>Cor dos Aniversários</b>:<br />Escolha a cor do texto dos aniversários<br />
		<b>Cor dos Eventos</b>:<br />Escolha a cor do texto dos eventos<br />
		<b>Cor dos Feriados</b>:<br />Escolha a cor do texto dos feriados<br />
		<b>Permitir que os Eventos Durem Vários Dias</b>:<br />Seleccione a opção para permitir que um evento dure mais do que um dia.<br />
		<b>Número Máximo de Dias de Duração de um Evento</b>:<br />Escolha o número máximo de dias de duração de um evento.<br /><br />
		Lembre-se que o uso do calendário (colocação de eventos, visualização de eventos, etc.) é controlada pelas permissões.';
$helptxt['localCookies'] = 'O SMF usa cookies para guardar informações sobre o login dos membros nos seus computadores.
	As cookies podem ser armazenadas globalmente (meuservidor.com) ou localmente (meuservidor.com/caminho/para/forum).<br />
	Seleccione esta opção se está a ter problemas em que os utilizadores estão sempre a fazer logout automaticamente.<hr />
	As cookies armazenadas globalmente são menos seguras quando são usadas num servidor partilhado (como o Tripod).<hr />
	As cookies locais não funcionam fora da pasta do Fórum, portanto, se o seu Fórum está em www.meuservidor.com/forum, as páginas como  www.meuservidor.com/index.php não conseguem aceder à informação.
	Especialmente quando se usa o SSI.php, as cookies globais são recomendadas.';
$helptxt['enableBBC'] = 'Seleccionando esta opção irá permitir que os membros usem o código BBC (Bulletin Board Code) nas suas mensagens. Este é um código semelhante ao HTML mas mais seguro e fácil para utilizar dentro do Fórum.';
$helptxt['time_offset'] = 'Nem todos os aministradores querem que o seu Fórum use a mesma hora que o servidor em que está alojado. Use esta opção para especificar uma diferença (em horas) da sua hora local e da hora do servidor. São permitidos números negativos e com decimais.';
$helptxt['spamWaitTime'] = 'Aqui pode definir o tempo mínimo entre cada mensagem do mesmo IP. Isto pode ser usado para evitar mensagens de SPAM.';

$helptxt['enablePostHTML'] = 'Permite inserir algumas tags básicas de HTML:
	<ul style="margin-bottom: 0;">
		<li>&lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;s&gt;, &lt;em&gt;, &lt;ins&gt;, &lt;del&gt;</li>
		<li>&lt;a href=&quot;&quot;&gt;</li>
		<li>&lt;img src=&quot;&quot; alt=&quot;&quot; /&gt;</li>
		<li>&lt;br /&gt;, &lt;hr /&gt;</li>
		<li>&lt;pre&gt;, &lt;blockquote&gt;</li>
	</ul>';

$helptxt['themes'] = 'Aqui pode definir se o tema padrão pode ser escolhido, o tema padrão para os Visitantes,
	bem como outras opções.';
$helptxt['theme_install'] = 'Isto permite que sejam instalados novos temas. Pode fazê-lo através de uma pasta já criada, através do envio de um ficheiro, ou copiando o tema Default.<br /><br />Note que a pasta tem que ter o ficheiro <tt>theme_info.xml</tt>.';
$helptxt['enableEmbeddedFlash'] = 'Esta opção permitirá que os membros usem aplicações
	em Flash directamente nas mensagens. Isto pode ser um risco de segurança,
	USE COM CUIDADO!';
// !!! Add more information about how to use them here.
$helptxt['xmlnews_enable'] = 'Permite que as pessoas possam subscrever as <a href="' . $scripturl . '?action=.xml;sa=news">Notícias Recentes</a> e informações semelhantes via RSS/XML. Também é
	recomendado definir um limite máximo para as mensagens/notícias recentes porque, quando os dados do RSS
	são mostrados em alguns programas, tais como o Trillian, espera-se que sejam curtos.';
$helptxt['hotTopicPosts'] = 'Altere o número de mensagens para que um tópico chegue à condição de
	&quot;quente&quot; ou &quot;muito quente&quot;.';
$helptxt['globalCookies'] = 'Permite o uso de cookies independentes do subdomínio. Por exemplo, se...<br />
	O seu site está em http://www.simplemachines.org/,<br />
	E o seu Fórum está em http://forum.simplemachines.org/,<br />
	Usando esta modificação irá permitir ter acesso à cookie do Fórum no seu site.';
$helptxt['securityDisable'] = 'Isto <i>desactiva</i> a verificação adicional da password para a zona de administração. Não é recomendado!';
$helptxt['securityDisable_why'] = 'Esta é a sua password actual. (a mesma que usa para entrar no Fórum.)<br /><br />Ao ter que escrever aqui a sua password aumenta a segurança da zona de administração e certifica que é você que está a alterar os dados da administração.';
$helptxt['emailmembers'] = 'Nesta mensagem pode usar algumas &quot;variáveis&quot;:<br />
	{$board_url} - O URL do seu Fórum.<br />
	{$current_time} - A hora actual.<br />
	{$member.email} - O email do membro actual.<br />
	{$member.link} - O link do membro actual.<br />
	{$member.id} - A ID do membro actual.<br />
	{$member.name} - O nome do membro actual.  (para personalização.)<br />
	{$latest_member.link} - O link para os membros registados mais recentemente.<br />
	{$latest_member.id} - A ID dos membros registados mais recentemente.<br />
	{$latest_member.name} - O nome dos membros registados mais recentemente.';
$helptxt['attachmentEncryptFilenames'] = 'Encriptar os anexos permite que possa ter mais do que um ficheiro
	com o mesmo nome, aumenta a segurança e permite também enviar ficheiros .php como anexos. Pode, no entanto, ser mais difícil
	reconstruir a sua base de dados se acontecer alguma catástrofe.';

$helptxt['failed_login_threshold'] = 'Defina o número de tentativas de login falhadas antes de direccionar o utilizador para o lembrador de password.';
$helptxt['oldTopicDays'] = 'Se selecionar esta funcionalidade, quando um membro responder a um tópico que não tem respostas durante um certo tempo (em dias), ser-lhe-á mostrada uma mensagem de aviso. Coloque 0 se quiser desactivar.';
$helptxt['edit_wait_time'] = 'Número de segundos permitido entre cada modificação de uma mensagem.';
$helptxt['edit_disable_time'] = 'Número de minutos permitido para que o membro possa editar a sua mensagem. Após este tempo, deixará de ser possível ao membro editar a sua mensagem. Definir para 0 para desactivar. <br /><br /><i>Nota: Isto não afecta os membros com permissões para modificar as mensagens dos outros membros.</i>';
$helptxt['enableSpellChecking'] = 'Activar o corrector ortográfico. TEM de ter o \'pspell\' instalado no seu servidor e o PHP configurado para usar o \'pspell\'. O seu servidor ' . (function_exists('pspell_new') == 1 ? 'TEM' : 'N&Atilde;O TEM') . ' esta função activada.';
$helptxt['lastActive'] = 'Defina o número de minutos para mostrar os utilizadores activos nesse período de tempo no índice do Fórum. O tempo padrão é de 15 minutos.';

$helptxt['autoOptDatabase'] = 'Esta opção optimiza a base de dados a cada X dias. Defina para 1 para fazer uma optimização diária. Pode também especificar um número máximo de utilizadores online, de modo a não sobrecarregar o servidor ou causar alguma inconveniência aos utilizadores.';
$helptxt['autoFixDatabase'] = 'Isto irá reparar automaticamente as tabelas da base de dados que estejam estragadas e continuar como se nada se tivesse passado. Isto pode ser útil, porque a única forma de reparar isto é REPARAR as tabelas e desta forma o Fórum não ficará fora do ar até que você repare ou seja chamado à atenção. É-lhe enviado um email sempre que isto acontece.';

$helptxt['enableParticipation'] = 'Isto mostra um pequeno ícone nos tópicos em que o utilizador enviou mensagens.';

$helptxt['db_persist'] = 'Mantém a ligação activa para aumentar o desempenho. Se não está a usar um servidor dedicado, isto pode causar alguns problemas com o seu alojamento.';

$helptxt['queryless_urls'] = 'Isto altera o formato dos URLs de modo a que os motores de busca possam pesquisar melhor no Fórum. Os endereços irão ficar desta maneira: index.php/topic,1.html.<br /><br />Esta função ' . (strpos(php_sapi_name(), 'apache') !== false ? '' : 'não') . ' funciona no seu servidor.';
$helptxt['countChildPosts'] = 'Seleccionado esta caixa significa que o total das mensagens dos sub-quadros aparece na primeira página.<br /><br />O fórum pode tornar-se um pouco mais lento.';
$helptxt['fixLongWords'] = 'Esta opção quebra as palavras com mais do que um certo número de caracteres de modo a não alterar o layout do Fórum.';

$helptxt['who_enabled'] = 'Esta opção permite activar ou desactivar a possibilidadede dos utilizadores poderem ver quem está online no Fórum e o que está a fazer.';

$helptxt['recycle_enable'] = '&quot;Recicla&quot; os tópicos e mensagens apagadas para um determinado quadro.';

$helptxt['enableReportPM'] = 'Esta opção permite activar ou desactivar a possibilidadede dos utilizadores notificarem os administradores de mensagens pessoais enviadas abusivamente por outros membros. Pode ser útil para acabar com alguns abusos.';
$helptxt['max_pm_recipients'] = 'Esta opção permite definir o número máximo de recipientes permitidos numa mensagem pessoal enviada por um membro do fórum. Isto pode ser usado para evitar o envio de spam através das MP. Note que os membros com permissões para enviar newsletters estão isentos deste limite. Defina para zero para não ter limite.';
$helptxt['pm_posts_verification'] = 'Esta definição irá forçar os utilizadores a inserir o código mostrado numa imagem de verificação de cada vez que enviam uma mensagem pessoal. Apenas os utilizadores com um número de mensagens abaixo do número definido terão que inserir este código - isto deve ajudar a combater o spam no seu fórum.';
$helptxt['pm_posts_per_hour'] = 'Isto irá limitar o número de mensagens pessoais que podem ser enviadas por um utilizador no período de 1 hora. Esta opção não afecta os administradores nem os moderadores.';

$helptxt['default_personalText'] = 'Defina o texto padrão que os utilizadores terão no seu &quot;texto pessoal.&quot;';

$helptxt['modlog_enabled'] = 'Regista todas as acções dos moderadores.';

$helptxt['guest_hideContacts'] = 'Se esta opção estiver seleccionada, os endereços de email e os contactos de Messenger dos membros
  serão escondidos dos visitantes do Fórum';

$helptxt['registration_method'] = 'Esta opção determina qual o método de registo usado quando alguém se regista no Fórum. Pode escolher entre:<br /><br />
	<ul>
		<li>
			<b>Registo Desactivado:</b><br />
				Desactiva o processo de registo, o que significa que não poderá haver o registo de novos membros no Fórum.<br />
		</li><li>
			<b>Registo Imediato:</b><br />
				Os novos membros podem entrar e enviar mensagens imediatamente após o registo.<br />
		</li><li>
			<b>Activação de Membros:</b><br />
				Quando esta opção está activada, qualquer membro que se registe no Fórum terá de activar o seu registo através de um link que lhe é enviado por email. Enquanto que or egisato não for activado, o utilizador não pode entrar no Fórum.<br />
		</li><li>
			<b>Aprovação dos Membros:</b><br />
				Esta opção fará com que cada novo membro que se registe no Fórum tenha que ser aprovado pelo administrador antes de poder entrar.
		</li>
	</ul>';
$helptxt['send_validation_onChange'] = 'Quando esta opção está activada, todos os membros que alterem o seu endereço de email no perfil terão de reactivar a sua conta através de um email enviado para o endereço indicado.';
$helptxt['send_welcomeEmail'] = 'Quando esta opção está activada, todos os novos membros receberão um email de boas-vindas ao Fórum.';
$helptxt['password_strength'] = 'Determina o tamanho mínimo da palavra-passe. Quanto maior, menos possibilidade de ser violada, logo mais segura.
	Opções disponíveis:
	<ul>
		<li><b>Baixa:</b> A palavra-passe tem de ter pelo menos 4 caracteres.</li>
		<li><b>Média:</b> A palavra-passe tem que ter pelo menos oito caracteres e não pode conter o nome ou e-mail do utilizador.</li>
		<li><b>Alta:</b> As mesmas características da média excepto o facto de ter que conter letras e pelo menos um número.</li>
	</ul>';

$helptxt['coppaAge'] = 'O valor escrito nesta caixa determina a idade mínima dos novos membros para que possam frequentar o fórum.
	Durante o registo os utilizadores tem que confirmar e aceitar os termos de acesso. Cabe aos pais e tutores autorizarem os menores a terem acesso.
	Para ignorar a idade basta colocar 0 neste local.';
$helptxt['coppaType'] = 'Se as restrições de idade estiverem activas, estas serão as definições do que acontecerá se o utilizador tiver idade inferior. Existem duas hipóteses:
	<ul>
		<li>
			<b>Rejeitar o registo:</b><br />
				Qualquer membro que viole a idade mínima verá o seu registo imediatamente rejeitado.<br />
		</li><li>
			<b>Requerer aprovação paternal:</b><br />
				Qualquer membro que tente registar-se e viole a idade mínima verá a sua conta marcada como "Aguardando aprovação dos pais/tutores". Só depois tem acesso ao fórum.
				Podem aceder aos contactos de forma a poderem enviar o formulário de aprovação aos administradores por e-mail ou fax.
		</li>
	</ul>';
$helptxt['coppaPost'] = 'Requere-se o contacto para garantir a aprovação paternal para o registo dos menores. Este formulário é detalhado de forma a garantir que os menores foram de facto autorizados. Tem de ser indicado pelo menos a morada e telefone para contacto.';

$helptxt['allow_hideOnline'] = 'Com esta opção activada, todos os membros poderão esconder o seu estado online dos outros utilizadores (excepto os administradores). Se estiver desactivada, apenas os moderadores podem ocultar a sua presença. NOTA: Esta opção n&atiled;o altera o estado de nenhum utilizador - apenas evita que eles se possam esconder.';
$helptxt['allow_hideEmail'] = 'Com esta opção activada, os membros podem escolher se querem esconder o seu endereço de email dos outros membros. No entanto, os administradores podem ver sempre os emails de todos os membros.';

$helptxt['latest_support'] = 'Este painel mostra alguns dos problemas e perguntas mais comuns na configuração do servidor. Não se preocupe, esta informação não fica registada em lado nenhum.<br /><br />Se aparecer a mensagem &quot;Procurando informações de suporte...&quot;, o seu computador provavelmente não consegue fazer a ligação a <a href="http://www.simplemachines.org/">www.simplemachines.org</a>.';
$helptxt['latest_packages'] = 'Aqui pode ver alguns dos Pacotes e MODs mais populares, com instalações rápidas e fáceis.<br /><br />Se esta informação não aparecer, o seu computador provavelmente não consegue fazer a ligação a <a href="http://www.simplemachines.org/">www.simplemachines.org</a>.';
$helptxt['latest_themes'] = 'Esta área mostra alguns dos temas mais populares directamente de <a href="http://www.simplemachines.org/">www.simplemachines.org</a>. Se não aparecer correctamente, é provavel que o seu computador não consiga aceder a <a href="http://www.simplemachines.org/">www.simplemachines.org</a>.';

$helptxt['secret_why_blank'] = 'Para sua segurança, a resposta à sua pergunta (bem como a sua password) estão encriptadas de forma a que apenas lhe podemos dizer se acertou ou não. Não é possível mostrar-lhe (e mais importante, não é possível mostrar a mais ninguém!) qual a resposta à sua pergunta.';
$helptxt['moderator_why_missing'] = 'Uma vez que a moderação é feita quadro a quadro, terá que tornar os membros moderadores a partir do menu de <a href="javascript:window.open(\'' . $scripturl . '?action=manageboards\'); self.close();">gestão de quadros</a>.';

$helptxt['permissions'] = 'As permissões são o método que você tem para permitir ou negar grupos de realizarem certas acções.<br /><br />Pode modificar múltiplos quadros ao mesmo tempo com as caixas de verificação, ou ver as permissões para um grupo específico clicando em  \'Modificar.\'';
$helptxt['permissions_board'] = 'Se um quadro está definido para \'Global,\' significa que o quadro não tem nenhumas permissões especiais. \'Local\' significa que o quadro tem permissões específicas - separadas das permissões globais. Isto permite ter um quadro com mais ou menos permissões do que outro, sem ser necessário defini-las para cada quadro individualmente.';
$helptxt['permissions_quickgroups'] = 'Isto permite usar as configurações por &quot;defeito&quot; das permissões - normal significa \'nada de especial\', restritivo significa \'igual a um visitante\', moderador significa \'aquilo a que um moderador tem acesso\', e finalmente \'manutenção\' significa ter permissões quase iguais a um administrador.';
$helptxt['permissions_deny'] = 'Negar permissões pode ser útil quando se pretende tirar permissões a certos membros. Pode-se adicionar o grupo de membros sem permissões e colocar os membros que pretendemos que fiquem sem permissões.<br /><br />Use com cuidado, negar permissões a um membro far&aacute com que deixe de as ter independentemente dos grupos a que pertencer.';
$helptxt['permissions_postgroups'] = 'Ao activar as permissões para grupos baseados em mensagens permitirá atribuir permissões a membros que já tenham escrito algumas mensagens.  As permissões para membros baseadas em número de mensagens são <em>adicionadas</em> &agraves permissões dos grupos normais.';
$helptxt['permissions_by_board'] = 'Activar esta opção fará com que se possa configurar diferentes permissões para cada quadro em cada grupo de membros. Por defeito, os quadros assumem as permissões globais, mas com esta opção activada, pode-se definir permissões individuais. Assim terá uma forma sofisticada de gerir as suas permissões.';
$helptxt['membergroup_guests'] = 'O grupo dos visitantes é o grupo dos utilizadores que não entraram no Fórum ou que não estão registados.';
$helptxt['membergroup_regular_members'] = 'Membros regulares são todos os que estão registados e entraram no Fórum, mas não pertencem a nenhum grupo de membros especial.';
$helptxt['membergroup_administrator'] = 'O administrador pode, por defeito, fazer qualquer coisa e ver todos os quadros. Como tal não existe possibilidade de configurar as permissões para os administradores.';
$helptxt['membergroup_moderator'] = 'O grupo dos moderadores é um grupo especial. Existem permissões especificas para este grupo aplicadas a todos os moderadores definidos como tal <em>no quadro do qual são moderadores</em>. Fora desses quadros eles permanecem como simples membros.';
$helptxt['membergroups'] = 'No SMF há dois tipos de grupos de que os membros podem fazer parte. Estes são:
	<ul>
		<li><b>Grupos Regulares:</b> É um grupo em que os membros não são automaticamente inscritos. Para incluir um utilizador neste tipo de grupos, é necessário ir ao Perfil e clicar em &quot;Configurações da Conta&quot;. A partir daqui pode incluí-lo em qualquer grupo regular.</li>
		<li><b>Grupos de Mensagens:</b> Ao contrário dos grupos regulares, os grupos baseados em mensagens incluem os membros automaticamente quando estes atingem o número mínimo de mensagens para aceder a esse grupo.</li>
	</ul>';

$helptxt['calendar_how_edit'] = 'Pode editar estes eventos clicando no asterisco vermelho (*) próximo dos nomes.';

$helptxt['maintenance_general'] = 'A partir daqui pode optimizar todas as tabelas da base de dados (torná-las mais pequenas e rápidas!), certificar-se que tem as versões mais recentes dos ficheiros, procurar erros que possam dar problemas ao bom funcionamento do Fórum, recontar os totais, e limpar os registos.<br /><br />Os últimos dois devem ser evitados a não ser que haja alguma coisa errada.';
$helptxt['maintenance_backup'] = 'Esta área permite gravar uma cópia de todas as mensagens, configurações, membros, e outras informações do Fórum num ficheiro muito grande.<br /><br />É recomendado fazer isto várias vezes, talvez semanalmente, por razões de segurança.';
$helptxt['maintenance_rot'] = 'Isto permite remover <b>completamente</b> e <b>irremediavelmente</b> todos os tópicos mais antigos. É recomendado que faça primeiro um backup, para o caso de ocorrer alguma desgraça.<br /><br />Use esta opção com muito cuidado.';

$helptxt['avatar_allow_server_stored'] = 'Isto permite que os membros possam escolher avatars guardados no seu servidor. Eles estão, normalmente, dentro do SMF na pasta Avatars.<br />DICA: Se criar pastas dentro dessa pasta, pode criar &quot;categorias&quot; de avatars.';
$helptxt['avatar_allow_external_url'] = 'Com esta opção activada, os membros podem seleccionar um avatar a partir de um site externo através de um URL. O negativo disto é que, em alguns casos, eles podem querer usar avatars demasiado grandes ou usar imagens que você não quer no seu Fórum.<br /><br />Lembre-se que os membros precisam de ter permissão para escolher um avatar remoto para que esta opção funcione.';
$helptxt['avatar_download_external'] = 'Com esta opção activada, o avatar escolhido pelo utilizador será transferido para o seu servidor. Se tudo correr bem, será como se o utilizador tivesse enviado a sua imagem.';
$helptxt['avatar_allow_upload'] = 'Esta opção é semelhante à de &quot;Permitir que os membros escolham um avatar externo&quot;, excepto que você tem mais controlo sobre os avatars, uma maior rapidez ao redimensioná-los, e os seus membros não precisam de ter um local para colocarem os seus avatars.<br /><br />No entanto, o negativo disto é que pode ocupar bastante espaço no seu servidor.';
$helptxt['avatar_download_png'] = 'Os PNGs são maiores, mas oferecem uma melhor qualidade de compressão. Se esta opção estiver desactivada, será usado o formato JPEG - que normalmente é mais pequeno, mas também tem uma qualidade de imagem pior.';

$helptxt['disableHostnameLookup'] = 'Isto desactiva a verificação do hostname, o que, em alguns servidores, pode ser muito lento. Note que isto irá tornar o banimento menos eficiente.';

$helptxt['search_weight_frequency'] = 'Os factores de Peso são usados para determinar a relevância dos resultados da pesquisa. Altere estes factores para aqueles que acha serem mais adequados para o seu Fórum. Por exemplo, um Fórum de um site de notícias, poderá querer uma maior relevância para o factor \'idade da última mensagem\'. Todos os valores são relativos em relação aos outros e têm de ser valores positivos.<br /><br />Este factor conta a quantidade de mensagens coincidentes e divide-as pelo número total de mensagens de cada tópico.';
$helptxt['search_weight_age'] = 'Os factores de Peso são usados para determinar a relevância dos resultados da pesquisa. Altere estes factores para aqueles que acha serem mais adequados para o seu Fórum. Por exemplo, um Fórum de um site de notícias, poderá querer uma maior relevância para o factor \'idade da última mensagem\'. Todos os valores são relativos em relação aos outros e têm de ser valores positivos.<br /><br />Este factor dá um valor à idade da última mensagem de um tópico. Quanto mais recente for a mensagem, mais alto será o seu valor.';
$helptxt['search_weight_length'] = 'Os factores de Peso são usados para determinar a relevância dos resultados da pesquisa. Altere estes factores para aqueles que acha serem mais adequados para o seu Fórum. Por exemplo, um Fórum de um site de notícias, poderá querer uma maior relevância para o factor \'idade da última mensagem\'. Todos os valores são relativos em relação aos outros e têm de ser valores positivos.<br /><br />Este factor baseia-se no tamanho do tópico. Quantas mais mensagens tiver um tópico, mais alto será o seu valor.';
$helptxt['search_weight_subject'] = 'Os factores de Peso são usados para determinar a relevância dos resultados da pesquisa. Altere estes factores para aqueles que acha serem mais adequados para o seu Fórum. Por exemplo, um Fórum de um site de notícias, poderá querer uma maior relevância para o factor \'idade da última mensagem\'. Todos os valores são relativos em relação aos outros e têm de ser valores positivos.<br /><br />Este factor verifica se o termo da pesquisa pode ser encontrado no assunto do tópico.';
$helptxt['search_weight_first_message'] = 'Os factores de Peso são usados para determinar a relevância dos resultados da pesquisa. Altere estes factores para aqueles que acha serem mais adequados para o seu Fórum. Por exemplo, um Fórum de um site de notícias, poderá querer uma maior relevância para o factor \'idade da última mensagem\'. Todos os valores são relativos em relação aos outros e têm de ser valores positivos.<br /><br />Este factor verifica se o termo da pesquisa pode ser encontrado na primeira mensagem do tópico.';
$helptxt['search_weight_sticky'] = 'Os factores de peso são usados para determinar a relevância do resultado de uma pesquisa. Altere estes factores de peso para que os resultados reflictam aquilo que é realmente importante no seu fórum. Por exemplo, um fórum de um site de notícias poderá querer um valor relativamente alto para \'idade da última mensagem\'. Todos os valores são relativos em relação aos outros e devem ser algarismos positivos.<br /><br />Este factor verifica se um tópico é inamovível e aumenta a relevância dos resultados.';
$helptxt['search'] = 'Ajuste aqui todas as configurações para a função de pesquisa.';
$helptxt['search_why_use_index'] = 'Um índice pode aumentar bastante a velocidade das pesquisas no fórum. Especialmente quando o número de mensagens no fórum vai crescendo, a pesquisa sem um índice pode demorar muito tempo e aumentar a carga no servidor e na base de dados. Se o seu fórum tem mais de 50.000 mensagens, recomendamos a criação de um índice para melhorar o desempenho do seu fórum.<br /><br />Note que um índice pode ocupar bastante espaço no servidor. Um índice de texto completo é uma funcionalidade do MySQL. É relativamente compacto (aproximadamente do mesmo tamanho que a tabela de mensagens), mas muitas palavras não são indexadas e pode fazer com que algumas pesquisas se tornem muito lentas. O índice customizado é geralmente maior (dependendo da sua configuração pode ser até 3 vezes o tamanho da tabela de mensagens) mas o seu desempenho é melhor e mais estável do que um índice de texto completo.';

$helptxt['see_admin_ip'] = 'Os endereços de IP são mostrados aos administradores e moderadores para facilitar a moderação e para tornar mais fácil seguir os passos dados pelos utilizadores com fins malignos. De notar que nem todos os endereços de IP podem ser identificados, e a maioria dos IPs muda periodicamente.<br /><br />Os membros também podem ver o seu próprio IP.';
$helptxt['see_member_ip'] = 'O seu endereço de IP é mostrado apenas a si e aos moderadores. Esta informação não permite identificá-lo, e a maioria dos IPs mudam periodicamente.<br /><br />Você não pode ver os IPs dos outros utilizadores, da mesma forma que eles também não podem ver o seu.';

$helptxt['ban_cannot_post'] = 'Colocar um membro como \'não pode postear\', aos olhos dele o fórum torna-se apenas de leitura, sendo um utilizador banido. Este utilizador fica proíbido de criar novos tópicos, ou responder aos existentes, enviar mensagens pessoais ou votar nas sondagens. Os utilizadores banidos podem no entanto ler as mensagens pessoais e os tópicos.<br /><br />Uma mensagem de aviso é mostrada aos utilizadores banidos desta forma.';

$helptxt['posts_and_topics'] = '
	<ul>
		<li>
			<b>Definições das mensagens</b><br />
			Aqui pode modificar as definições relacionadas com as mensagens e a forma como as mesmas são mostradas. Pode-se também activar aqui o corrector ortográfico.
		</li><li>
			<b>Código BBC</b><br />
			Activar o código que mostrará as mensagens com a formatação correcta. Pode  também ajustar quais os códigos permitidos e os proibidos.
		</li><li>
			<b>Palavras censuradas</b><br />
			De forma a manter o nível da linguagem do fórum sob controlo, pode-se definir a censura de certas palavras. Esta função permite converter palavras proibidas em versões mais inocentes.
		</li><li>
			<b>Definições dos tópicos</b><br />
			Modificar as definições relacionadas com os tópicos. O número de tópicos por página, a possibilidade de ter tópicos inamovíveis, o número de mansagens necessárias para que o tópico seja considerado quente, etc.
		</li>
	</ul>';

?>