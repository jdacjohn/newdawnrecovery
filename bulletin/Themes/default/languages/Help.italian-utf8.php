<?php
// Version: 1.1; Help

global $helptxt;

$helptxt = array();

$txt[1006] = 'Chiudi finestra';

$helptxt['manage_boards'] = '
	<b>Gestione sezioni</b><br />
	In questo menu è possibile creare/riordinare/eliminare le sezioni e le categorie. 
	Nel caso di un forum di grandi dimensioni 
	che offre informazioni su &quot;Sport&quot;, &quot;Macchine&quot; e &quot;Musica&quot;, queste
	sarebbero le categorie di livello superiore da creare. All\'interno di ciascuna di queste
	categorie si potranno creare delle &quot;sottocategorie&quot; strutturate gerarchicamente
	oppure delle &quot;sezioni&quot; dedicate ad argomenti specifici. Si tratta di una semplice organizzazione gerarchica, con questa struttura: <br />
	<ul>
		<li>
			<b>Sport</b>
			&nbsp;- Una &quot;categoria&quot;
		</li>
		<ul>
			<li>
				<b>Baseball</b>
				&nbsp;- Una sezione all\'interno della categoria degli &quot;Sport&quot;
			</li>
			<ul>
				<li>
					<b>Statistiche</b>
					&nbsp;- Una sezione minore all\'interno della sezione del &quot;Baseball&quot;
				</li>
			</ul>
			<li><b>Football</b>
			&nbsp;- Una sezione all\'interno della categoria degli &quot;Sport&quot;</li>
		</ul>
	</ul>
	Le categorie permettono di organizzare il forum individuando gli argomenti principali (&quot;Macchine,
	Sport&quot;), le &quot;sezioni&quot; si trovano all\'interno della categorie e sono il punto in cui 
	gli utenti possono effettivamente scrivere le proprie opinioni: un utente interessato alle macchine Fiat
	scriverà un messaggio in &quot;Macchine->Fiat&quot;. Le categorie permettono agli utenti di
	trovare velocemente quello che cercano: invece di un semplice &quot;Negozio&quot; si avranno
	negozi di &quot;Informatica&quot; e &quot;Abbigliamento&quot;. Questo semplifica la 
	ricerca di un &quot;componente per il computer&quot; poiché è possibile accedere alla &quot;categoria&quot; 
	Negozio di Informatica invece che Negozio d\'abbigliamento (dove difficilmente 
	si troverebbe il componente per computer cercato).<br />
	Come indicato in precedenza, una sezione è un argomento chiave all\'interno di una categoria più grande.
	Per discutere delle &quot;Fiat&quot; bisogna andare alla categoria delle &quot;Auto&quot; e
	poi alla sezione sulle &quot;Fiat&quot;.<br />
	Attraverso questa sezione gli amministratori possono creare nuove sezioni
	all\'interno delle categorie, riordinarle (mettere le &quot;Fiat&quot; prima delle &quot;Lancia&quot;) o
	cancellare sezioni intere.';

$helptxt['edit_news'] = '<b>Modifica le notizie del forum</b><br />
	Questa sezione permette di impostare il testo delle notizie visualizzate nella pagina iniziale del forum.
	È possibile inserire il numero desiderato di notizie (ad esempio &quot;Non perdere la conferenza questa settimana&quot;): è necessario digitare il testo di ogni notizia
	in un riquadro separato, le notizie presenti verranno visualizzate in ordine casuale.';

$helptxt['view_members'] = '
	<ul>
		<li>
			<b>Visualizza tutti gli utenti</b><br />
				Visualizza tutti gli utenti del forum sotto forma di lista con collegamenti ipertestuali. È possibile fare clic
				su uno qualsiasi dei nomi per mostrare i dettagli dell\'utente (sito internet, età, ecc.); un amministratore
				può anche modificare questi parametri. In altre parole si ha il controllo completo degli utenti, inclusa la
				possibilità di cancellarli dal forum.<br /><br />
		</li>
		<li>
			<b>In attesa di approvazione</b><br />
			Questa sezione viene mostrata solo in seguito all\'approvazione di tutte le nuove registrazioni da parte degli amministratori. Chiunque si registri per unirsi al
			forum diventerà utente normale solo dopo l\'approvazione di un amministratore. La sezione mostra una lista di tutti gli utenti che
			stanno ancora aspettando l\'approvazione, insieme al loro indirizzo e-mail e all\'indirizzo IP. È possibile scegliere se accettare o rifiutare (cancellare)
			qualsiasi utente dalla lista spuntando la casella posizionata sulla stessa riga dell\'utente e selezionando l\'azione dal menu a discesa nella parte inferiore
			dello schermo. Quando si rifiuta l\'iscrizione di un utente è possibile scegliere se notificare o meno la cancellazione all\'utente stesso.<br /><br />
		</li>
		<li>
			<b>In attesa di attivazione</b><br />
			Questa sezione sarà visibile solo se è prevista l\'attivazione degli account degli utenti. Questa sezione mostra una 
			lista di tutti gli utenti che non hanno ancora attivato il proprio account: da questa pagina è possibile scegliere se accettare o rifiutare la richiesta oppure
			inviare un promemoria agli utenti. Anche in questo caso è possibile scegliere se inviare una e-mail agli utenti per informarli
			della decisione.<br /><br />
		</li>
	</ul>';

$helptxt['ban_members'] = '<b>Utenti interdetti</b><br />
	SMF fornisce la possibilità di &quot;interdire&quot; gli utenti, per impedire alle persone che hanno tradito la fiducia del forum
	di inserire spam, generare discussioni fuori regolamento, ecc. Questa funzione permette di escludere gli utenti che sono negativi per il forum.
	Come amministratore, visualizzando i messaggi è possibile leggere anche l\'indirizzo IP utilizzato in quel momento dall\'utente. Inserire l\'indirizzo IP nella lista degli utenti
	interdetti e salvare: da questo momento non potranno più scrivere messaggi da quella 
	postazione.<br />È anche possibile escludere le persone utilizzando l\'indirizzo e-mail.';

$helptxt['modsettings'] = '<b>Caratteristiche e opzioni</b><br />
	In questa sezione è possibile modificare molte funzionalità del forum; le opzioni di mod (pacchetti di modifica) eventualmente installati dovrebbero essere visualizzate all\'interno di questa sezione.';

$helptxt['number_format'] = '<b>Formato predefinito dei numeri</b><br />
	È possibile utilizzare questa impostazione per modificare il modo in cui i numeri vengono visualizzati sul forum. Il formato di questo parametro è:<br />
	<div style="margin-left: 2ex;">1,234.00</div><br />
	Dove \',\' è il carattere usato per suddividere le migliaia, \'.\' è il carattere usato come separatore dei decimali, il numero degli zero indica la precisione degli arrotondamenti.';

$helptxt['time_format'] = '<b>Formato predefinito della data</b><br />
	In questa sezione è possibile impostare il formato dell\'ora e della data: sebbene si possano utilizzare diverse combinazioni di lettere, non è un\'operazione complessa.
	La struttura è la stessa della funzione PHP strftime e i possibili valori sono indicati di seguito (ulteriori informazioni sono disponibili su <a href="http://www.php.net/manual/function.strftime.php" target="_blank">php.net</a>).<br />
	<br />
	I seguenti caratteri sono riconosciuti come parametri nella stringa per il formato: <br />
	<span class="smalltext">
	&nbsp;&nbsp;%a - nome abbreviato del giorno della settimana<br />
	&nbsp;&nbsp;%A - nome completo del giorno della settimana<br />
	&nbsp;&nbsp;%b - nome abbreviato del mese<br />
	&nbsp;&nbsp;%B - nome completo del mese<br />
	&nbsp;&nbsp;%d - giorno del mese (da 01 a 31)<br />
	&nbsp;&nbsp;%D<b>*</b> - stesso di %m/%d/%y<br />
	&nbsp;&nbsp;%e<b>*</b> - giorno del mese (da 1 a 31)<br />
	&nbsp;&nbsp;%H - ore usando un orologio a ventiquattro ore (da 00 a 23)<br />
	&nbsp;&nbsp;%I - ore usando un orologio a dodici ore (da 01 a 12)<br />
	&nbsp;&nbsp;%m - mese in cifre (da 01 a 12)<br />
	&nbsp;&nbsp;%M - minuti in cifre<br />
	&nbsp;&nbsp;%p - &quot;am&quot; o &quot;pm&quot; sulla base dell\'ora<br />
	&nbsp;&nbsp;%R<b>*</b> - formato ore a ventiquattro ore<br />
	&nbsp;&nbsp;%S - secondi come numero decimale<br />
	&nbsp;&nbsp;%T<b>*</b> - orario attuale, come in %H:%M:%S<br />
	&nbsp;&nbsp;%y - anno a due cifre (da 00 a 99)<br />
	&nbsp;&nbsp;%Y - anno a quattro cifre<br />
	&nbsp;&nbsp;%Z - fuso orario/nome zona o abbreviazione<br />
	&nbsp;&nbsp;%% - il carattere \'%\'<br />
	<br />
	<i>* Non funziona su server Windows.</i></span>';

$helptxt['live_news'] = '<b>Direttamente da Simple Machines...</b><br />
	Questo riquadro visualizza le ultime notizie da <a href="http://www.simplemachines.org/">www.simplemachines.org</a>.
	Si consiglia di verificare periodicamente la presenza di aggiornamenti, notizie e informazioni importanti inserite dal Team di Simple Machines.';

$helptxt['registrations'] = '<b>Gestione registrazione</b><br />
	Questa sezione contiene tutte le funzioni relative alla gestione della registrazione di nuovi utenti. Contiene fino a quattro
	sezioni visibili sulla base delle impostazioni del forum:<br /><br />
	<ul>
		<li>
			<b>Registra nuovo utente</b><br />
			Da questa pagina è possibile registrare direttamente dei nuovi account. Questa sezione è indispensabile nei forum dove la registrazione è chiusa
			ai nuovi utenti o nei casi in cui l\'amministratore desidera creare un account di prova. Se si è scelto di richiedere l\'attivazione dell\'account
			l\'utente riceverà una e-mail con un link di attivazione da utilizzare per attivare l\'account. È possibile scegliere se inviare
			una e-mail agli utenti con una nuova password all\'indirizzo specificato nel profilo.
		</li>
		<li>
			<b>Modifica il documento di accettazione alla registrazione</b><br />
			Questa sezione permette di impostare il testo per il documento di accettazione alla registrazione visualizzato quando gli utenti si iscrivono al forum.
			È possibile aggiungere o rimuovere qualsiasi parte dal testo predefinito presente in SMF.
		</li>
		<li>
			<b>Imposta nomi riservati</b><br />
			Questa sezione permette di impostare delle parole o dei nomi riservati: in questo modo gli utenti non potranno utilizzarli per il proprio nome utente.
		</li>
		<li>
			<b>Preferenze</b><br />
			Questa sezione sarà visibile se si ha il permesso di amministrare il forum. Da questa pagina è possibile decidere quale metodo di registrazione
			utilizzare sul forum, e anche altreimposdtazioni relative alla registrazione.
		</li>
	</ul>';

$helptxt['modlog'] = '<b>Registro delle azioni di moderazione</b><br />
	Questa sezione permette agli amministratori di tenere traccia di tutte le azioni di moderazione eseguite dai moderatori del forum. Per evitare che
	i moderatori possano rimuovere riferimenti alle proprie azioni, gli elementi non possono essere cancellati finché non sono trascorse 24 ore dall\'esecuzione.
	La colonna \'oggetti\' mostra tutte le variabili associate all\'azione.';
$helptxt['error_log'] = '<b>Registro degli errori del forum</b><br />
	Il registro degli errori tiene traccia di ogni errore incontrato dagli utenti durante l\'utilizzo del forum. Mostra una lista di tutti gli errori ordinati per data: è possibile modificare 
	l\'ordine facendo clic sulla freccia nera accanto a ogni data. Inoltre è possibile puoi filtrare gli errori facendo clic sulla figura di fianco a ogni statistica d\'errore. Questo
	permette di filtrarli, per esempio, in base all\'utente. Quando un filtro è attivo verranno visualizzati solo i risultati che soddisfano il filtro impostato.';
$helptxt['theme_settings'] = '<b>Impostazioni correnti del tema</b><br />
	Questa sezione permette di cambiare le impostazioni specifiche di un tema. È possibile modificare opzioni come la cartella di installazione e l\'URL oppure preferenze che influenzano 
	l\'aspetto stesso del tema. La maggior parte dei temi dispone di una varietà di opzioni che possono essere configurate dall\'utente, permettendogli di adattare il tema
	alle proprie necessità.';
$helptxt['smileys'] = '<b>Pacchetti di emoticon</b><br />
	In questa sezione è possibile aggiungere o rimuovere gli emoticon: se un emoticon appartiene a un gruppo appartiene anche a tutti gli altri gruppi -
	in caso contrario si creerebbe confusione negli utenti.<br /><br />
	
	È anche possibile modificare le icone dei messaggi, se sono state abilitate nella pagina delle preferenze.';
$helptxt['calendar'] = '<b>Gestione agenda</b><br />
	Da qui è possibile modificare le impostazioni correnti dell\'agenda come anche aggiungere ed elimnare le feste che compaiono in essa.';

$helptxt['serversettings'] = '<b>Impostazioni server</b><br />
	Qui è possibile effettuare la configurazione di base del forum. Questa sezione include le impostazioni per il database e l\'URL, come pure altre
	importanti voci di configurazione come le impostazioni di posta e il caching. Modificare con moltissima attenzione queste impostazioni poiché un errore qualsiasi potrebbe
	rendere il forum inaccessibile';

$helptxt['topicSummaryPosts'] = 'Permette di impostare il numero di messaggi visualizzati nel sommario di una discussione nella pagina di risposta.';
$helptxt['enableAllMessages'] = 'Da impostare col <em>massimo</em> numero di messaggi che una discussione può avere per mostrare il link a tutti. Impostarlo più basso del &quot;Massimo numero di messaggi da visualizzare in una pagina di discussione&quot; lo renderà semplicemente invisibile, e impostandolo troppo alto potrebbe rallentare il forum.';
$helptxt['enableStickyTopics'] = 'Le discussioni importanti sono discussioni che rimangono in cima
	alla lista delle discussioni. Normalmente vengono utilizzate per messaggi importanti. Benché si possa modificare queste discussioni nel caso in cui si possiedano permessi adeguati, come impostazione predefinita solo i moderatori e gli amministratori possono impostare delle discussioni come importanti.';
$helptxt['allow_guestAccess'] = 'Togliendo la spunta a questa casella, agli ospiti sarà concesso solo di compiere le azioni di base sul forum: accedere, registrarsi, richiedere il promemoria della password, ecc. Questa opzione non è la stessa cosa che impedire agli ospiti l\'accesso alle sezioni.';
$helptxt['userLanguage'] = 'Abilitando questa opzione si consentirà agli utenti di selezionare
	la lingua da utilizzare. Questa scelta non influenzerà l\'impostazione predefinita.';
$helptxt['trackStats'] = 'Statistiche:<br />permette agli utenti di vedere gli ultimi messaggi
	inseriti e gli argomenti più popolari sul forum.	Visualizza anche altre statistiche, come gli utenti più attivi, gli ultimi iscritti e le ultime discussioni inserite.<hr />
	Pagine visitate:<br />aggiunge un\'ulteriore colonna alle statistiche con il numero di pagine visitate del forum.';
$helptxt['titlesEnable'] = 'Abilitando i titoli personalizzati si consente agli utenti con i dovuti permessi di impostare un testo personalizzato.
		Questo testo verrà mostrato sotto al nome utente.<br /><i>Ad esempio:</i><br />Jeff<br />Tizio Divertente';
$helptxt['topbottomEnable'] = 'Aggiunge i pulsanti per spostarsi in alto e in basso, in modo che gli utenti possano andare in alto e in basso all\'interno di in una pagina 
		senza doverla scorrere completamente.';
$helptxt['onlineEnable'] = 'Mostra un\'immagine per indicare se l\'utente è collegato o scollegato';
$helptxt['todayMod'] = 'Mostra &quot;Oggi&quot; o &quot;Ieri&quot; al posto della data.';
$helptxt['enablePreviousNext'] = 'Mostra un collegamento all\'argomento precedente e a quello successivo.';
$helptxt['pollMode'] = 'Imposta l\'abilitazione dei sondaggi. Se i sondaggi sono disabilitati ogni
	sondaggio esistente viene nascosto dalla lista degli argomenti. Si può scegliere se continuare a mostrare regolarmente gli argomenti senza i sondaggi selezionando
	&quot;Mostra i sondaggi esistenti come argomenti&quot;.<br /><br />Attraverso i permessi è possibile scegliere chi può inserire i sondaggi, visualizzarli e via dicendo.
	Verificare i permessi nel caso in cui i sondaggi non funzionino regolarmente.';
$helptxt['enableVBStyleLogin'] = 'Mostra agli ospiti una richiesta d\'accesso più compatta in ogni pagina del forum.';
$helptxt['enableCompressedOutput'] = 'Questa opzione comprime i dati prodotti per ridurre il consumo di banda; richiede
	l\'installazione di zlib.';
$helptxt['databaseSession_enable'] = 'Questa opzione attiva l\'uso del database per il salvataggio della sessione - è la scelta ideale per i server con bilanciamento del carico, ma aiuta anche in caso di problemi di timeout e può rendere il forum più veloce. Non funziona se session.auto_start è attivo.';
$helptxt['databaseSession_loose'] = 'Attivando questa opzione si diminuisce il consumo di banda del forum e si fa in modo che, facendo clic su \'Torna indietro una pagina\', la pagina non venga ricaricata - l\'aspetto negativo è che, a esempio, le icone non si aggiornano (a meno che non si faccia clic su quella pagina invece di tornare indietro).';
$helptxt['databaseSession_lifetime'] = 'È il numero di secondi di inattività dopo cui le sessioni vengono chiuse. Se non si accede a una sessione per troppo tempo, si dice che la sessione è &quot;scaduta&quot;. Si consiglia di impostare un valore superiore a 2400.';
$helptxt['enableErrorLogging'] = 'Serve per tenere traccia di tutti gli errori, come a esempio un accesso fallito, e per individuare eventuali problemi.';
$helptxt['allow_disableAnnounce'] = 'Permette agli utenti di disattivare la notifica di nuove discussioni annunciate spuntando la casella &quot;annuncia discussione&quot; quando si invia un messaggio';
$helptxt['disallow_sendBody'] = 'Questa opzione elimina la possibilità di ricevere il contenuto delle risposte e dei messaggi nelle e-mail di notifica.<br /><br />Spesso, gli utenti rispondono alle e-mail di notifica, cosa che di solito si traduce nella ricezione della risposta da parte del webmaster.';
$helptxt['compactTopicPagesEnable'] = 'Mostra una selezione del numero delle pagine.<br /><i>Esempio:</i>
		&quot;3&quot; da visualizzare: 1 ... 4 [5] 6 ... 9 <br />
		&quot;5&quot; da visualizzare: 1 ... 3 4 [5] 6 7 ... 9';
$helptxt['timeLoadPageEnable'] = 'Visualizza nella parte inferiore della finestra il tempo in secondi che SMF ha impiegato per generare la pagina.';
$helptxt['removeNestedQuotes'] = 'Mostra soltanto la citazione del messaggio selezionato e non tutti gli altri messaggi citati al suo interno.';
$helptxt['simpleSearch'] = 'Mostra un modulo di ricerca semplice e un collegamento a un modulo di ricerca più avanzata.';
$helptxt['max_image_width'] = 'Permette di impostare una dimensione massima per le immagini inserite. Le immagini inferiori alla dimensione massima non vengono influenzate.';
$helptxt['mail_type'] = 'Permette di scegliere le impostazioni predefinite di PHP, oppure di superare tali impostazioni con SMTP. PHP non gestisce l\'autenticazione con SMTP (cosa richiesta da molti host, oggigiorno) quindi se la si desidera bisogna selezionare SMTP. Si noti che SMTP può essere più lento, e alcuni server non accettano nomi utente e password.<br /><br />Non è necessario riempire le impostazioni SMTP se si usano le impostazioni predefinite PHP.';
$helptxt['attachmentEnable'] = 'Gli allegati sono file che gli utenti possono caricare e inserire in un messaggio.<br /><br />
	<b>Verifica l\'estensione dell\'allegato</b>:<br />verificare le estensioni dei file?<br />
	<b>Estensioni consentite per gli allegati</b>:<br />è possibile impostare le estensioni consentite per i file allegati.<br />
	<b>Cartella degli allegati</b>:<br />il percorso della cartella degli allegati<br />(ad esempio: /home/siti/tuosito/www/forum/allegati)<br />
	<b>Dimensione massima della cartella degli allegati</b> (in KB):<br />selezionare la dimensione massima della cartella degli allegati, considerando tutti i file al suo interno.<br />
	<b>Dimensione massima degli allegati per messaggio</b> (in KB):<br />selezionare la dimensione massima di tutti gli allegati che possono essere inseriti in un singolo messaggio. Se questa è minore del limite per allegato, tale parametro assumerà questo valore.<br />
	<b>Dimensione massima per allegato</b> (in KB):<br />selezionare la dimensione massima del singolo allegato.<br />
	<b>Numero massimo di allegati per messaggio</b>:<br />selezionare il numero di allegati che una persona può inserire in un singolo messaggio.<br />
	<b>Mostra gli allegati come immagine nei messaggi</b>:<br />se il file caricato è un\'immagine, questa impostazione permette di visualizzare l\'allegato nella parte inferiore del messaggio.<br />
	<b>Ridimensiona immagini durante la visualizzazione nei messaggi</b>:<br /> Se tale opzione viene selezionata, verrà salvato un allegato separato (più piccolo) per la miniatura al fine di diminuire il consumo di banda.<br />
	<b>Larghezza e altezza massima delle miniature</b>:<br /> Usata solo con l\'opzione &quot;Ridimensiona immagini durante la visualizzazione nei messaggi&quot;, indica la larghezza e l\'altezza massime a cui ridurre gli allegati. Verranno ridimensionate proporzionalmente.';
$helptxt['karmaMode'] = 'Il Karma è la funzione che misura la popolarità di un utente.
	Gli utenti, se ne hanno il permesso, possono \'elogiare\' o \'bastonare\' altri utenti, permettendo così il calcolo della popolarità. È possibile cambiare il 
	numero di messaggi necessari per avere un &quot;karma&quot;, il tempo che deve trascorrere tra gli \'elogi\' e le \'bastonate\', e se gli amministratori devono anche loro rispettare questo tempo.<br /><br />La
	possibilità per i gruppi di utenti di \'bastonare\' altri utenti è gestita attraverso un apposito permesso. Se si verificano dei problemi con questa funzione, si
	consiglia un controllo incrociato sui permessi.';
// !!! This should be resused or removed.
$helptxt['cal_enabled'] = 'L\'agenda può essere usata per mostrare i compleanni o gli eventi importanti nella vita della comunità.<br /><br />
	<b>Mostra i giorni come collegamento a \'Inserisci evento\'</b>:<br />permette agli utenti di inserire eventi per una giornata facendo clic sulla data.<br />
	<b>Mostra i numeri delle settimane</b>:<br />mostra la settimana in cui ci si trova.<br />
	<b>Numero di giorni di anticipo nell\'indice della sezione</b>:<br />se questo parametro è impostato a 7, verranno visualizzati gli eventi della settimana successiva.<br />
	<b>Mostra le festività nell\'indice della sezione</b>:<br />mostra le festività di oggi in una barra dell\'agenda nell\'indice della sezione.<br />
	<b>Mostra i compleanni nell\'indice della sezione</b>:<br />mostra i compleanni di oggi in una barra dell\'agenda nell\'indice della sezione.<br />
	<b>Mostra gli eventi nell\'indice della sezione</b>:<br />mostra gli eventi di oggi in una barra dell\'agenda nell\'indice della sezione.<br />
	<b>Permette eventi non collegati a messaggi</b>:<br />Permette agli utenti di aggiungere eventi senza che sia necessario collegarli con un messaggio in una sezione.<br />
	<b>Sezione predefinita per gli inserimenti</b>:<br />qual è la sezione predefinita in cui inserire eventi?<br />
	<b>Primo anno</b>:<br />selezionare il &quot;primo&quot; anno sulla lista dell\'agenda.<br />
	<b>Ultimo anno</b>:<br />selezionare l\'&quot;ultimo&quot; anno sulla lista dell\'agenda.<br />
	<b>Colore del compleanno</b>:<br />selezionare il colore del testo del compleanno<br />
	<b>Colore dell\'evento</b>:<br />selezionare il colore del testo dell\'evento<br />
	<b>Colore della festività</b>:<br />selezionare il colore del testo della festività o vacanza.<br />
	<b>Permetti agli eventi di impegnare più giorni</b>:<br />selezionare questa opzione per permettere agli eventi di impegnare più giorni.<br />
	<b>Numero massimo di giorni che un evento può impegnare</b>:<br />selezionare il numero massimo di giorni che un evento può impegnare.<br /><br />
	Si ricordi che l\'uso dell\'agenda (l\'inserimento e la visualizzazione degli eventi ecc.) è controllato dai permessi impostati nell\'apposita pagina.';
$helptxt['localCookies'] = 'SMF usa i cookie per salvare le informazioni d\'accesso sul computer di chi accede al forum.
	I cookie possono essere salvati a livello globale (myserver.com) o locale (myserver.com/percorso/per/il/forum).<br />
	Verificare questa opzione se si rilevano dei problemi con l\'uscita automatica degli utenti.<hr />
	I cookie salvati a livello globale sono meno sicuri quando usati su di un server web condiviso (come Tripod).<hr />
	I cookie salvati in locale non funzionano al di fuori della cartella del forum così, se il forum è posizionato all\'indirizzo www.ilmioserver.com/forum, pagine come www.ilmioserver.com/indice.php non potranno accedere alle informazioni sugli account.
	Quando si usa SSI.php si raccomanda di salvare i cookie a livello globale.';
$helptxt['enableBBC'] = 'Questa opzione consente agli utenti di usare il Bulletin Board Code (BBC) nel forum, permettendo di formattare i messaggi con immagini, stili e altri elementi.';
$helptxt['time_offset'] = 'Non tutti gli amministratori del forum desiderano che il forum usi lo stesso fuso orario del server su cui è ospitato. Questa opzione permette di specificare una differenza (in ore) tra l\'orario del forum e quello del server. Sono consentiti valori negativi e decimali.';
$helptxt['spamWaitTime'] = 'È possibile indicare il tempo che deve trascorrere tra l\'inserimento di due messaggi. Questo può essere usato per impedire agli utenti di "spammare" sul forum limitando la frequenza con cui possono scrivere.';

$helptxt['enablePostHTML'] = 'Questa opzione permette l\'inserimento di alcuni semplici tag HTML:
	<ul style="margin-bottom: 0;">
		<li>&lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;s&gt;, &lt;em&gt;, &lt;ins&gt;, &lt;del&gt;</li>
		<li>&lt;a href=&quot;&quot;&gt;</li>
		<li>&lt;img src=&quot;&quot; alt=&quot;&quot; /&gt;</li>
		<li>&lt;br /&gt;, &lt;hr /&gt;</li>
		<li>&lt;pre&gt;, &lt;blockquote&gt;</li>
	</ul>';

$helptxt['themes'] = 'È possibile scegliere se il tema predefinito può essere scelto 
	dagli utenti, quale tema utilizzeranno gli ospiti e altre opzioni. Facendo clic a destra di un tema si possono modificare le relative impostazioni.';
$helptxt['theme_install'] = 'Permette l\'installazione di nuovi temi: è possibile usare una cartella già presente, caricare un file archivio con il tema oppure fare una copia del tema predefinito.<br /><br />L\'archivio o la cartella devono contenere un file di definizione <tt>theme_info.xml</tt>.';
$helptxt['enableEmbeddedFlash'] = 'Questa opzione permette agli utenti di usare Flash direttamente 
	all\'interno dei loro messaggi: questo potrebbe comportare un rischio per la sicurezza, anche
	se è stato sfruttato in rare occasioni. Da usare a proprio rischio e pericolo!';
// !!! Add more information about how to use them here.
$helptxt['xmlnews_enable'] = 'Permette agli utenti di inserire un collegamento alle <a href="' . $scripturl . '?action=.xml;sa=news">Notizie del forum</a>
	e altri dati simili. Si raccomanda di limitare la dimensione di messaggi/notizie recenti perché, quando i dati RSS
	vengono mostrati in alcuni programmi come Trillian, potrebbero risultare troncati.';
$helptxt['hotTopicPosts'] = 'Cambia il numero di messaggi che una discussione deve raggiungere per essere considerata &quot;calda&quot; o
	&quot;rovente&quot;.';
$helptxt['globalCookies'] = 'Permette l\'uso di cookie di accesso non dipendenti dal sottodominio. Per esempio, se...<br />
	il sito è http://www.simplemachines.org/,<br />
	e il forum è http://forum.simplemachines.org/,<br />
	con questa modifica sarà possibile accedere ai cookie del forum dal sito. Non attivare questa opzione se ci sono altri sottodomini (come hacker.simplemachines.org) di cui non si ha il controllo.';
$helptxt['securityDisable'] = 'Questa opzione <i>disattiva</i> la richiesta aggiuntiva di password per la sezione di amministrazione. Altamente sconsigliata!';
$helptxt['securityDisable_why'] = 'Questa è la password attuale (la stessa utilizzata per accedere.)<br /><br />L\'obbligo di inserire la password assicura che l\'utente sia pienamente consapevole delle modifiche che sta effettuando e che sia il vero utente a operare.';
$helptxt['emailmembers'] = 'In questo messaggio è possibile inserire alcune &quot;variabili&quot;. Queste sono:<br />
	{$board_url} - Indirizzo web del forum.<br />
	{$current_time} - Ora attuale.<br />
	{$member.email} - Attuale indirizzo e-mail dell\'utente.<br />
	{$member.link} - Attuale link all\'utente.<br />
	{$member.id} - Attuale ID dell\'utente.<br />
	{$member.name} - Nome attuale dell\'utente (per la personalizzazione).<br />
	{$latest_member.link} - Collegamento all\'ultimo utente registrato.<br />
	{$latest_member.id} - ID dell\'ultimo utente registrato.<br />
	{$latest_member.name} - Nome dell\'ultimo utente registrato.';
$helptxt['attachmentEncryptFilenames'] = 'Cifrare i nomi degli allegati consente di avere più di un allegato con lo 
	stesso nome, di usare i file .php come allegati e di avere una maggiore sicurezza. Ciò, comunque, potrebbe rendere
	più difficile la ricostruzione dell\'archivio in caso di problemi.';

$helptxt['failed_login_threshold'] = 'Imposta il numero di tentativi d\'accesso falliti prima di portare l\'utente alla pagina per il recupero della password.';
$helptxt['oldTopicDays'] = 'Se questa opzione è attiva verrà visualizzato un avviso all\'utente che cerca di rispondere in una discussione rimasta senza nuove risposte per un certo tempo, in giorni, specificato da questa impostazione. Impostare a 0 per disattivare la funzionalità.';
$helptxt['edit_wait_time'] = 'Numero di secondi entro cui è possibile modificare un messaggio senza che compaia la data dell\'ultima modifica.';
$helptxt['edit_disable_time'] = 'Numero di minuti che possono trascorrere prima che un utente non possa più modificare un suo messaggio. Impostare a 0 per disattivare. <br /><br /><i>Nota: Ciò non influenzerà gli utenti che ahnno il permesso di modificare i messaggi delle altre persone.</i>';
$helptxt['enableSpellChecking'] = 'Attiva il controllo ortografico. È necessario avere la libreria pspell installata sul server e la configurazione PHP adatta per usare la libreria pspell. Il server ' . (function_exists('pspell_new') ? 'HA' : 'NON HA') . ' le impostazioni corrette.';
$helptxt['lastActive'] = 'Imposta il numero di minuti durante i quali l\'utente risulta tra gli \'Utenti attivi negli ultimi X minuti\' nella pagina iniziale del forum. Il valore predefinito è 15.';

$helptxt['autoOptDatabase'] = 'Questa opzione serve per ottimizzare il database a intervalli regolari: impostato a 1 renderà giornaliera l\'ottimizzazione. È anche possibile specificare un numero massimo di utenti online, per evitare di sovraccaricare il server o creare inconvenienti a troppi utenti.';
$helptxt['autoFixDatabase'] = 'Serve per correggere tabelle rovinate ed eventualmente ripristinarle come se nulla fosse successo. Può essere utile perché l\'unico modo per correggere una tabella è di RIPARARLA: in questo modo si evita che il forum risulti irraggiungibile fino all\'intervento di un amministratore. Ogni volta che si verifica il problema verrà inviato un messaggio e-mail.';

$helptxt['enableParticipation'] = 'Mostra una piccola icona sulle discussioni che gli utenti hanno inserito.';

$helptxt['db_persist'] = 'Mantiene attiva la connessione per migliorare le prestazioni. Attivare questa opzione su un server non dedicato può creare problemi con il proprio provider.';

$helptxt['queryless_urls'] = 'Cambia il formato degli indirizzi web in modo da migliorare l\'indicizzazione da parte dei motori di ricerca. Gli indirizzi saranno del tipo indice.php/discussione,1.html.<br /><br />Questa funzione ' . (strpos(php_sapi_name(), 'apache') !== false ? '' : 'non') . ' è disponibile sul server in uso.';
$helptxt['countChildPosts'] = 'Spuntando questa opzione i messaggi e le discussioni in una sottosezione conteranno nei totali della pagina principale.<br /><br />Ciò renderà le cose visibilmente più lente, ma eviterà che una sezione principale senza post mostri \'0\'.';
$helptxt['fixLongWords'] = 'Questa opzione suddivide le parole più lunghe di una certa lunghezza per non compromettere l\'impaginazione del forum. Questa opzione non dovrebbe essere impostata a un valore inferiore a 40.';

$helptxt['who_enabled'] = 'Questa opzione consente o nega agli utenti la possibilità di vedere chi è collegato e che cosa sta facendo.';

$helptxt['recycle_enable'] = '&quot;Recupera&quot; le discussioni e i messaggi cancellati in una sezione specifica.';

$helptxt['enableReportPM'] = 'Questa opzione permette agli utenti di segnalare al team di amministrazione i messaggi privati che ricevono: può essere utile per isolare qualsiasi abuso nell\'utilizzo del sistema dei messaggi privati.';
$helptxt['max_pm_recipients'] = 'Questa opzione permette di impostare il numero massimo di destinatari permessi in un singolo messaggio privato inviato da un utente del forum. Ciò può essere usato per bloccare lo spam nel sistema dei MP. Si noti che gli utenti col permesso di inviare newsletter sono esentati da questa restrizione. Impostare a 0 per non impostare alcun limite.';
$helptxt['pm_posts_verification'] = 'Questa impostazione costringerà gli utenti a inserire un codice mostrato in una immagine di verifica ogni volta che inviano un messaggio privato. Solo gli utenti con un numero di messaggi inferiore al numero impostato dovranno inserire il codice - Ciò dovrebbe aiutare a combattere gli script automatici di spam.';
$helptxt['pm_posts_per_hour'] = 'Questa opzione limiterà il numero di messaggi privati che possono essere inviati da un utente in un\'ora. Ciò non riguarda gli amministratori o i moderatori.';

$helptxt['default_personalText'] = 'Imposta il testo predefinito che un utente ha come &quot;testo personale.&quot;';

$helptxt['modlog_enabled'] = 'Registra tutte le azioni di moderazione.';

$helptxt['guest_hideContacts'] = 'Se selezionata, questa opzione nasconde gli indirizzi e-mail e
	i dettagli dei contatti IM di tutti i utenti in ogni ricerca effettuata sul forum';

$helptxt['registration_method'] = 'Questa opzione determina il metodo di registrazione utilizzato per l\'iscrizione di nuovi utenti. Le opzioni disponibili sono:<br /><br />
	<ul>
		<li>
			<b>Registrazione disabilitata:</b><br />
				Disabilita il processo di registrazione, il che significa che nessun nuovo utente può iscriversi al forum.<br />
		</li><li>
			<b>Registrazione immediata</b><br />
				I nuovi utenti possono accedere al forum e scrivere subito dopo la registrazione.<br />
		</li><li>
			<b>Attivazione degli utenti</b><br />
				Quando questa opzione è attivata ogni nuovo utente che si iscrive al forum riceve un link di attivazione via e-mail da utilizzare per attivare l\'account.<br />
		</li><li>
			<b>Approvazione degli utenti</b><br />
				Questa opzione fa in modo che ogni nuovo utente iscritto al forum debba prima essere approvato dall\'amministrazione per diventare un utente attivo.
		</li>
	</ul>';
$helptxt['send_validation_onChange'] = 'Quando questa opzione è attivata tutti gli utenti che cambiano il proprio indirizzo e-mail nel profilo devono riattivare l\'account attraverso un messaggio e-mail che viene inviato al nuovo indirizzo.';
$helptxt['send_welcomeEmail'] = 'Quando questa opzione è attivata tutti gli utenti ricevono un messaggio e-mail di benvenuto alla tua comunità';
$helptxt['password_strength'] = 'Questa impostazione specifica la robustezza necessaria per le password selezionate dagli utenti del forum. Più robuste le password, Più difficle sarà compromettere gli account degli utenti.
	Le possibili opzioni sono:
	<ul>
		<li><b>Bassa:</b> La password deve essere lunga almeno quattro caratteri.</li>
		<li><b>Media:</b> La password deve essere lunga almeno otto caratteri, e non può contenere parte del nome utente o indirizzo e-mail.</li>
		<li><b>Alta:</b> Come per media, eccetto che la password deve anche contenere una mescolanza di maiuscole e minuscole, e almeno un numero.</li>
	</ul>';

$helptxt['coppaAge'] = 'Il valore specificato in questo campo determinerà l\'età minima che devono avere i nuovi utenti per vedersi garantito un accesso immediato al forum.
	Durante la registrazione gli verrà richiesto di confermare se superano tale età, e in caso negativo vedranno la loro richiesta rifiutata o sospese in attesa di approvazione da parte dei genitori - dipendentemente dal tipo di restrizione scelta.
	Se si sceglie un valore 0 per questa impostazione allora tutte le altre restrizioni sull\'età verranno ignorate.';
$helptxt['coppaType'] = 'Se le restrizioni sull\'età sono attive, allora questa impostazione indica cosa succede quando un utente al di sotto dell\'età minima tenta di registrarsi sul forum. Ci sono due possibilità:
	<ul>
		<li>
			<b>Rifiuta la loro registrazione:</b><br />
				Ogni nuovo utente al di sotto dell\'età minima vedrà la propria registrazione rifiutata immediatamente.<br />
		</li><li>
			<b>Richiedi approvazione da parte dei genitori/tutori</b><br />
				Ogni nuovo utente che tenta di registrarsi ed è al di sotto dell\'età minima permessa vedrà il proprio account marcato come in attesa di approvazione, e gli verrà mostrato un modulo da far firmare ai propri genitori per avere il permesso di diventare utenti del forum.
				Gli verranno anche mostrati i dettagli dei contatti per il forum inseriti nella pagina delle impostazioni, affinché possano inviare il modulo all\'amministratore per posta o fax.
		</li>
	</ul>';
$helptxt['coppaPost'] = 'I campi dei contatti sono necessari affinché i moduli che garantiscono il permesso per la registrazione dei minori possano essere inviati agli amministratori del forum. Tali dettagli sarrano mostrati a tutti i nuovi minori, e sono necessari per l\'approvazione da parte dei genitori/tutori. Deve essere fornito almeno un indirizzo postale o un numero di fax.';

$helptxt['allow_hideOnline'] = 'Con questa opzione attiva tutti gli utenti possono nascondere il proprio stato agli altri utenti (ma non agli amministratori). Se disattivata solo le persone che possono moderare il forum possono nascondere la loro presenza. Disattivando questa opzione non si cambia lo stato corrente degli utenti - si impedisce solo di nascondersi in futuro.';
$helptxt['allow_hideEmail'] = 'Con questa opzione attiva gli utenti possono nascondere il proprio indirizzo e-mail agli altri utenti. In ogni caso gli amministratori potranno vedere l\'indirizzo e-mail di tutti gli utenti.';

$helptxt['latest_support'] = 'Questo pannello mostra alcuni dei problemi più comuni e informazioni sulla configurazione del server. L\'accesso alle informazioni non viene tracciato.<br /><br />Se rimane visualizzata la scritta &quot;Sto ottenendo le informazioni di supporto...&quot;, il computer probabilmente non riesce a connettersi a <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_packages'] = 'È possibile vedere i pacchetti e i \'mod\' più diffusi, con una procedura di installazione rapida e semplice.<br /><br />Se la sezione non compare, probabilmente il computer non riesce a connettersi a <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_themes'] = 'Questa sezione mostra alcuni dei più recenti e più popolari temi da <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>: è possibile che non venga mostrata correttamente se il computer non riesce ad accedere a <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';

$helptxt['secret_why_blank'] = 'Per ragioni di sicurezza, la risposta alla propria domanda (come la password) è cifrata in maniera tale che SMF può solo dire se è conservata correttamente, sicché non potrà mai dire all\'utente (e a nessun altro) quali siano la risposta e la password memorizzate.';
$helptxt['moderator_why_missing'] = 'Siccome la moderazione è gestita per sezione, bisogna trasformare gli utenti in moderatori dall\'<a href="javascript:window.open(\'' . $scripturl . '?action=manageboards\'); self.close();">interfaccia di gestione della sezione</a>.';

$helptxt['permissions'] = 'I permessi servono per consentire o vietare determinate operazioni a dei gruppi di utenti.<br /><br />Si possono modificare più sezioni contemporaneamente con l\'apposita casella di controllo oppure visualizzare i permessi per un gruppo specifico facendo clic su \'Modifica.\'';
$helptxt['permissions_board'] = 'Se la sezione è impostata come \'Globale,\' significa che la sezione non ha particolari permessi. \'Locale\' significa che ha dei permessi specifici - distinti da quelli globali. Questo permette di avere una sezione che ha più o meno permessi di un\'altra senza bisogno di impostarli per tutte le sezioni.';
$helptxt['permissions_quickgroups'] = 'Questi permettono di usare i permessi di impostazione &quot;predefiniti&quot; - standard significa \'niente di speciale\', restrittivi significa \'come un ospite\', moderatore significa \'quelli di un moderatore\', e per concludere \'manutenzione\' implica permessi di poco inferiori a quelli di un amministratore.';
$helptxt['permissions_deny'] = 'Negare i permessi può essere utile quando si vogliono togliere i permessi a certi utenti. Si può aggiungere un gruppo con un permesso \'negato\' agli utenti a cui si vuole negare un certo permesso.<br /><br />Utilizzare con cautela, un peremesso negato resterà negato indipendentemente da quali altri gruppi appartiene l\'utente.';
$helptxt['permissions_postgroups'] = 'Abilitare i permessi per i gruppi basati sul numero di messaggi permetterà di attribuire permessi agli utenti che hanno inviato un certo numero di messaggi. I permessi dei gruppi basati sul numero di messaggi sono <em>aggiunti</em> ai permessi dei normali gruppi utenti.';
$helptxt['permissions_by_board'] = 'Abilitare questa opzione permetterà di impostare permessi differenti per ogni sezione e per ogni gruppo. Come impostazione predefinita una sezione utilizza i permessi globali, ma con questa opzione abilitata, si può far passare una sezione all\'impostazione di permessi locali. Ciò fornisce un modo molto sofisticato di gestire i permessi.';
$helptxt['membergroup_guests'] = 'Il gruppo Ospiti contiene tutti gli utenti che non hanno effettuato l\'accesso.';
$helptxt['membergroup_regular_members'] = 'Gli utenti normali sono tutti gli utenti che ahnno effettuato l\'accesso, ma che non hanno un gruppo primario assegnato.';
$helptxt['membergroup_administrator'] = 'Gli amministratori possono, per definizione, fare ciò che vogliono e vedere qualsiasi sezione. Non ci sono impostazioni di permessi per gli amministratori.';
$helptxt['membergroup_moderator'] = 'Il gruppo Moderatori è un gruppo speciale. I permessi e le impostazioni assegnate a questo gruppo si applicano ai moderatori ma solo <em>nelle sezioni che moderano</em>. Al di fuori di tali sezioni sono solo come qualsiasi altro utente.';
$helptxt['membergroups'] = 'In SMF ci sono due tipi di gruppi di cui gli utenti possono far parte. Essi sono:
	<ul>
		<li><b>Gruppi normali:</b> un gruppo normale è un gruppo a cui gli utenti non accedono automaticamente. Per assegnare un utente al gruppo è sufficiente andare nel profilo e fare clic su &quot;Impostazioni relative all\'account&quot;: da qui è possibile associare all\'utente un qualsiasi numero di gruppi normali.</li>
		<li><b>Gruppi basati sul numero di messaggi:</b> a differenza dei gruppi normali, i gruppi basati sul numero dei messaggi non possono essere assegnati: gli utenti sono assegnati automaticamente a un gruppo basato sui messaggi quando raggiungono il numero minimo di messaggi stabilito per accedere al gruppo.</li>
	</ul>';

$helptxt['calendar_how_edit'] = 'Si possono modificare gli eventi facendo clic sull\'asterisco rosso (*) vicino al nome.';

$helptxt['maintenance_general'] = 'In questa sezione è possibile ottimizzare tutte le tabelle (questo le rende più piccole e più veloci!), ci si può assicurare di avere l\'ultima versione, si possono cercare e verificare eventuali errori, svuotare i registri.<br /><br />Le ultime due operazioni sarebbero da evitare se non in presenza di errori.';
$helptxt['maintenance_backup'] = 'Quest\'area permette di salvare una copia di tutti i messaggi, impostazioni, utenti e altre informazioni del forum in un file.<br /><br />Si raccomanda di farlo con frequenza, magari settimanale, per motivi di sicurezza e di salvaguardia dei dati.';
$helptxt['maintenance_rot'] = 'Permette di eliminare <b>completamente</b> e <b>definitivamente</b> le vecchie discussioni. Si consiglia di creare un archivio di ripristino, per correre ai ripari nel caso in cui venisse cancellato qualcosa di importante.<br /><br />Questa opzione va usata con cautela.';

$helptxt['avatar_allow_server_stored'] = 'Permette agli utenti di scegliere un avatar tra quelli conservati sul server stesso. Questi, di solito, sono conservati nello stesso percorso dei file di SMF all\'interno della cartella avatars.<br />Suggerimento: se vengono create delle cartelle all\'interno della cartella principale, è possibile creare delle &quot;categorie&quot; di avatar.';
$helptxt['avatar_allow_external_url'] = 'Se questa opzione è abilitata, gli utenti possono inserire un indirizzo web per il proprio avatar. Lo svantaggio di questa opzione, in alcuni casi, è che gli utenti possono usare avatar troppo grandi o inserire immagini indesiderate sul forum.<br /><br />Si ricordi che gli utenti hanno bisogno di un ulteriore permesso per caricare un avatar remoto: questa opzione abilita l\'utilizzo soltanto a chi ha già i permessi richiesti.';
$helptxt['avatar_download_external'] = 'Se questa opzione è attiva, l\'URL fornito dall\'utente verrà utilizzato per scaricare l\'avatar da tale indirizzo. In caso di successo, l\'avatar sarà gestito come un avatar caricato.';
$helptxt['avatar_allow_upload'] = 'Questa opzione è simile a &quot;Permetti agli utenti di selezionare un avatar remoto&quot;, tranne per il fatto che è possibile un maggiore controllo sugli avatar e gli utenti non hanno bisogno di un server su cui salvare il proprio avatar.<br /><br />Lo svantaggio è che tale opzione può richiedere molto spazio sul server.';
$helptxt['avatar_download_png'] = 'Le immagini PNG sono più pesanti ma hanno un migliore rapporto qualità compressione. Se non è presente il segno di spunta verrà utilizzato il formato JPEG - che rende le immagini più leggere ma anche di qualità inferiore.';

$helptxt['disableHostnameLookup'] = 'Questa opzione disabilita la ricerca dei nomi degli host, operazione che su alcuni server risulta essere molto lenta: tale scelta potrebbe rendere meno efficaci le procedure di interdizione degli utenti.';

$helptxt['search_weight_frequency'] = 'I parametri legati al peso della ricerca sono usati per determinare la pertinenza del risultato di una ricerca. È possibile cambiare questi fattori per adeguarli al tipo di argomenti presenti nel proprio forum. a esempio, il forum di un sito di notizie potrebbe richiedere un valore relativamente alto per l\'età dell\'ultimo messaggio attinente. Tutti i valori sono relativi, legati al valore degli altri parametri, e dovrebbero essere numeri interi positivi.<br /><br />Questo parametro riguarda il peso assegnato al numero di risultati attinenti trovati in una discussione: si divide il numero di messaggi attinenti per il numero di messaggi complessivo della discussione.';
$helptxt['search_weight_age'] = 'I parametri legati al peso della ricerca sono usati per determinare la pertinenza del risultato di una ricerca. È possibile cambiare questi fattori per adeguarli al tipo di argomenti presenti nel proprio forum. a esempio, il forum di un sito di notizie potrebbe richiedere un valore relativamente alto per l\'età dell\'ultimo messaggio attinente. Tutti i valori sono relativi, legati al valore degli altri parametri, e dovrebbero essere numeri interi positivi.<br /><br />Questo parametro riguarda il peso assegnato all\'età del messaggio: a un messaggio recente verrà associato un peso maggiore.';
$helptxt['search_weight_length'] = 'I parametri legati al peso della ricerca sono usati per determinare la pertinenza del risultato di una ricerca. È possibile cambiare questi fattori per adeguarli al tipo di argomenti presenti nel proprio forum. a esempio, il forum di un sito di notizie potrebbe richiedere un valore relativamente alto per l\'età dell\'ultimo messaggio attinente. Tutti i valori sono relativi, legati al valore degli altri parametri, e dovrebbero essere numeri interi positivi.<br /><br />Questo parametro riguarda il peso assegnato alla lunghezza di una discussione: a un numero maggiore di messaggi corrisponde un peso maggiore.';
$helptxt['search_weight_subject'] = 'I parametri legati al peso della ricerca sono usati per determinare la pertinenza del risultato di una ricerca. È possibile cambiare questi fattori per adeguarli al tipo di argomenti presenti nel proprio forum. a esempio, il forum di un sito di notizie potrebbe richiedere un valore relativamente alto per l\'età dell\'ultimo messaggio attinente. Tutti i valori sono relativi, legati al valore degli altri parametri, e dovrebbero essere numeri interi positivi.<br /><br />Questo parametro riguarda il peso assegnato alla presenza di risultati all\'interno del titolo della discussione.';
$helptxt['search_weight_first_message'] = 'I parametri legati al peso della ricerca sono usati per determinare la pertinenza del risultato di una ricerca. È possibile cambiare questi fattori per adeguarli al tipo di argomenti presenti nel proprio forum. a esempio, il forum di un sito di notizie potrebbe richiedere un valore relativamente alto per l\'età dell\'ultimo messaggio attinente. Tutti i valori sono relativi, legati al valore degli altri parametri, e dovrebbero essere numeri interi positivi.<br /><br />Questo parametro riguarda il peso assegnato alla presenza di risultati all\'interno del primo messaggio della discussione.';
$helptxt['search_weight_sticky'] = 'I fattori di peso sono utilizzati per determinare la rilevanza di un risultato della ricerca. Cambiare tali fattori di peso per farli corrispondere alle specificità del forum. a esempio, il forum di un sito di notizie, potrebbe volere un valore relativamente alto per \'età dell\'ultimo messaggio corrispondente\'. Tutti i valori sono relativi, in relazione gli uni con gli altri e dovrebbero essere interi positivi.<br /><br />Questo fattore verifica se una discussione è importante e aumenta la rilevanza se lo è.';
$helptxt['search'] = 'Regolare tutte le impostazioni per la funzione di ricerca da qui.';
$helptxt['search_why_use_index'] = 'Un indice di ricerca può migliorare parecchio la velocità delle ricerche sul forum. Specialmente quando il numero di messaggi su un forum diventa grande, cercare senza un indice di ricerca può impiegare molto tempo e aumentare la pressione sul database. Se il forum ha più di 50.000 messaggi, dovreste considerare la creazione di un indice di ricerca per assicurare ottime prestazioni al forum.<br /><br />Si noti che un indice di ricerca può occupare parecchio spazio. Un indice a pieno testo è un indice standard di MySQL. È relativamente compatto (aal\'incirca della stessa dimensione della tabella dei messaggi), ma molte delle parole non sono indicizzate e può, in certe ricerche, rivelarsi molto lenta. L\'indice personalizzato è spesso più grande (a seconda della configurazione può essere fino a 3 volte la dimensione della tabella dei messaggi) ma le sue prestazioni sono migliori di quello a pieno testo e relativamente stabili.';

$helptxt['see_admin_ip'] = 'Gli indirizzi IP sono visibili solo agli amministratori e ai moderatori per facilitare la moderazione e semplificare l\'individuazione delle persone. Si ricordi che gli indirizzi IP non sempre possono essere decisivi per identificare una persona e la maggior parte degli indirizzi IP sono di tipo dinamico.<br /><br />Gli utenti hanno il permesso di vedere il proprio indirizzo IP.';
$helptxt['see_member_ip'] = 'L\'indirizzo IP di un utente è visibile solo all\'utente stesso e ai moderatori. Si ricordi che gli indirizzi IP non sempre possono essere decisivi per identificare una persona e la maggior parte degli indirizzi IP sono di tipo dinamico.<br /><br />Non è possibile visualizzare gli indirizzi IP di altri utenti.';

$helptxt['ban_cannot_post'] = 'La restrizione \'non può scrivere messaggi\' cambia il forum nella modalità sola lettura per gli utenti interdetti. L\'utente non può creare nuove discussioni, o rispondere a quelle esistenti, inviare messaggi privati o votare nei sondaggi. L\'utente interdetto può comunque leggere i messaggi privati e le discussioni.<br /><br />Un messaggio di avviso viene mostrato agli utenti che sono stati interdetti in questo modo.';

$helptxt['posts_and_topics'] = '
	<ul>
		<li>
			<b>Impostazioni invio messaggi</b><br />
			Modifica le impostazioni relative all\'invio dei messaggi e il modo in cui i messaggi vengono visualizzati. Da qui si può anche attivare il controllo ortografico.
		</li><li>
			<b>Bulletin Board Code</b><br />
			Abilita il codice che mostra i messaggi del forum nella forma corretta. Inoltre regola quali codici sono permessi e quali no.
		</li><li>
			<b>Parole censurate</b>
			Al fine di tenere sotto controllo il linguaggio usato sul forum, si possono censurare certe parole. Questa funzione permette di scambiare le parole vietate con versioni edulcorate.
		</li><li>
			<b>Impostazoni discussioni</b>
			Modifica le impostazioni relative alle discussioni. Il numero delle discussione per pagina, se le discussioni importanti sono abilitate o meno, il numero di messaggi necessari affinché una discussione sia calda, ecc.
		</li>
	</ul>';

?>