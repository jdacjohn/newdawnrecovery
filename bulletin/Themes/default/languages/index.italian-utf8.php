<?php
// Version: 1.1.13; Index

global $forum_copyright, $forum_version, $webmaster_email;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'it_IT.utf8';
$txt['lang_dictionary'] = 'it';
$txt['lang_spelling'] = '';

// Character set and right to left?
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['days'] = array('Domenica', 'Lunedì', 'Martedì', 'Mercoledì', 'Giovedì', 'Venerdì', 'Sabato');
$txt['days_short'] = array('Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre');
$txt['months_titles'] = array(1 => 'Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre');
$txt['months_short'] = array(1 => 'Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic');

$txt['newmessages0'] = 'è nuovo';
$txt['newmessages1'] = 'sono nuovi';
$txt['newmessages3'] = 'nuovi';
$txt['newmessages4'] = ',';

$txt[2] = 'Admin';

$txt[10] = 'Salva';

$txt[17] = 'Modifica';
$txt[18] = $context['forum_name'] . ' - Indice';
$txt[19] = 'utenti';
$txt[20] = 'Nome sezione';
$txt[21] = 'Messaggi';
$txt[22] = 'Ultimo messaggio';

$txt[24] = '(nessun oggetto)';
$txt[26] = 'Messaggi';
$txt[27] = 'Mostra profilo';
$txt[28] = 'Utente non iscritto';
$txt[29] = 'Autore';
$txt[30] = 'inserito:';
$txt[31] = 'Elimina';
$txt[33] = 'Apri nuova discussione';

$txt[34] = 'Accedi';
// Use numeric entities in the below string.
$txt[35] = 'Nome utente';
$txt[36] = 'Password';

$txt[40] = 'Nome utente inesistente.';

$txt[62] = 'Moderatore della sezione';
$txt[63] = 'Rimuovi discussione';
$txt[64] = 'Discussioni';
$txt[66] = 'Modifica messaggio';
$txt[68] = 'Nome';
$txt[69] = 'E-mail';
$txt[70] = 'Oggetto';
$txt[72] = 'Messaggio';

$txt[79] = 'Profilo';

$txt[81] = 'Scegli password';
$txt[82] = 'Verifica password';
$txt[87] = 'Posizione';

$txt[92] = 'Mostra il profilo di';
$txt[94] = 'Totale';
$txt[95] = 'Messaggi';
$txt[96] = 'Sito web';
$txt[97] = 'Registrati';

$txt[101] = 'Indice delle discussioni';
$txt[102] = 'Notizie';
$txt[103] = 'Home';

$txt[104] = 'Chiudi/Riapri discussione';
$txt[105] = 'Invia messaggio';
$txt[106] = 'Si è verificato un errore!';
$txt[107] = 'su';
$txt[108] = 'Esci';
$txt[109] = 'Aperta da';
$txt[110] = 'Risposte';
$txt[111] = 'Ultimo messaggio';
$txt[114] = 'Accesso di amministrazione';
// Use numeric entities in the below string.
$txt[118] = 'Discussione';
$txt[119] = 'Guida';
$txt[121] = 'Elimina messaggio';
$txt[125] = 'Notifica';
$txt[126] = 'Ricevere una notifica e-mail se qualcuno risponde alla discussione?';
// Use numeric entities in the below string.
$txt[130] = "Saluti,\n" . $context['forum_name'];
$txt[131] = 'Notifica delle risposte';
$txt[132] = 'Sposta discussione';
$txt[133] = 'Sposta in';
$txt[139] = 'Pagine';
$txt[140] = 'Utenti attivi negli ultimi ' . $modSettings['lastActive'] . ' minuti';
$txt[144] = 'Messaggi privati';
$txt[145] = 'Rispondi citando';
$txt[146] = 'Risposta';

$txt[151] = '0 messaggi...';
$txt[152] = 'hai';
$txt[153] = 'messaggi';
$txt[154] = 'Eliminare questo messaggio';

$txt[158] = 'Utenti online';
$txt[159] = 'Messaggi privati';
$txt[160] = 'Vai a';
$txt[161] = 'vai';
$txt[162] = 'Eliminare questa discussione?';
$txt[163] = 'Sì';
$txt[164] = 'No';

$txt[166] = 'Risultati ricerca';
$txt[167] = 'Fine dei risultati';
$txt[170] = 'Spiacente, non è stato trovato nulla di attinente';
$txt[176] = '-';

$txt[182] = 'Ricerca';
$txt[190] = 'Tutto';

$txt[193] = 'Indietro';
$txt[194] = 'Promemoria password';
$txt[195] = 'Discussione aperta da';
$txt[196] = 'Titolo';
$txt[197] = 'Inserito da';
$txt[200] = 'Elenco ricercabile di tutti gli utenti registrati.';
$txt[201] = 'Benvenuto';
$txt[208] = 'Pannello di amministrazione';
$txt[211] = 'Ultima modifica';
$txt[212] = 'Disattivare le notifiche per questa discussione?';

$txt[214] = 'Messaggi recenti';

$txt[227] = 'Località';
$txt[231] = 'Sesso';
$txt[233] = 'Data di registrazione';

$txt[234] = 'Mostra gli ultimi messaggi del forum.';
$txt[235] = 'è la discussione aggiornata più di recente';

$txt[238] = 'Maschio';
$txt[239] = 'Femmina';

$txt[240] = 'Caratteri non validi nel nome utente.';

$txt['welcome_guest'] = 'Benvenuto! <a href="' . $scripturl . '?action=login">Accedi</a> o <a href="' . $scripturl . '?action=register">registrati</a>.';
$txt['welcome_guest_activate'] = '<br />Hai dimenticato <a href="' . $scripturl . '?action=activate">l\'e-mail di attivazione</a>?';
$txt['hello_member'] = 'Ciao';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Benvenuto,';
$txt[247] = 'Ciao,';
$txt[248] = 'Benvenuto,';
$txt[249] = 'Si prega di';
$txt[250] = 'Indietro';
$txt[251] = 'Scegliere una destinazione';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt[279] = 'Inserito da';

$txt[287] = 'Sorriso';
$txt[288] = 'Broncio';
$txt[289] = 'Felice';
$txt[290] = 'Risata';
$txt[291] = 'Triste';
$txt[292] = 'Occhiolino';
$txt[293] = 'Ghigno';
$txt[294] = 'Scioccato';
$txt[295] = 'Fico';
$txt[296] = 'Che?!?';
$txt[450] = 'Occhi al cielo';
$txt[451] = 'Linguaccia';
$txt[526] = 'Imbarazzato';
$txt[527] = 'Bocca cucita';
$txt[528] = 'Indeciso';
$txt[529] = 'Bacio';
$txt[530] = 'Pianto';

$txt[298] = 'Moderatore';
$txt[299] = 'Moderatori';

$txt[300] = 'Marca come lette le discussioni di questa sezione';
$txt[301] = 'Visite';
$txt[302] = 'Nuovo';

$txt[303] = 'Visualizza tutti gli utenti';
$txt[305] = 'Visualizza';
$txt[307] = 'E-mail';

$txt[308] = 'Utenti attivi';
$txt[309] = 'di';
$txt[310] = 'utenti in totale';
$txt[311] = 'a';
$txt[315] = 'Dimenticata la password?';

$txt[317] = 'Data';
// Use numeric entities in the below string.
$txt[318] = 'Da';
$txt[319] = 'Oggetto';
$txt[322] = 'Controlla nuovi messaggi';
$txt[324] = 'A';

$txt[330] = 'Discussioni';
$txt[331] = 'Utenti';
$txt[332] = 'Elenco utenti';
$txt[333] = 'Nuovi messaggi';
$txt[334] = 'Nessun nuovo messaggio';

$txt['sendtopic_send'] = 'Invia';

$txt[371] = 'Offset fuso orario';
$txt[377] = 'o';

$txt[398] = 'Spiacente, nessuna corrispondenza trovata';

$txt[418] = 'Notifica';

$txt[430] = 'Spiacente %s, sei stato interdetto dal forum!';

$txt[452] = 'Marca TUTTI i messaggi come letti';

$txt[454] = 'Discussione calda (più di ' . $modSettings['hotTopicPosts'] . ' risposte)';
$txt[455] = 'Discussione rovente (più di ' . $modSettings['hotTopicVeryPosts'] . ' risposte)';
$txt[456] = 'Discussione chiusa';
$txt[457] = 'Discussione normale';
$txt['participation_caption'] = 'Discussione in cui si è intervenuti';

$txt[462] = 'VAI';

$txt[465] = 'Stampa';
$txt[467] = 'Profilo';
$txt[468] = 'Sommario della discussione';
$txt[470] = 'N/D';
$txt[471] = 'messaggio';
$txt[473] = 'Questo nome è già utilizzato da un altro utente.';

$txt[488] = 'Utenti in totale';
$txt[489] = 'Messaggi in totale';
$txt[490] = 'Discussioni in totale';

$txt[497] = 'Minuti prima dell\'uscita';

$txt[507] = 'Anteprima';
$txt[508] = 'Rimani sempre connesso';

$txt[511] = 'Registrato';
// Use numeric entities in the below string.
$txt[512] = 'IP';

$txt[513] = 'ICQ';
$txt[515] = 'WWW';

$txt[525] = 'da';

$txt[578] = 'ore';
$txt[579] = 'giorni';

$txt[581] = ', il nostro ultimo iscritto.';

$txt[582] = 'Cerca per';

$txt[603] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Ciao.+Ci+sei?';
$txt[604] = 'YIM';

$txt[616] = 'Ricorda, questo forum è in \'Manutenzione\'.';

$txt[641] = 'Letto';
$txt[642] = 'volte';

$txt[645] = 'Statistiche forum';
$txt[656] = 'Ultimo utente';
$txt[658] = 'Categorie in totale';
$txt[659] = 'Ultimo messaggio';

$txt[660] = 'Si ha';
$txt[661] = 'Fare clic';
$txt[662] = 'per visualizzarlo';
$txt[663] = '.';

$txt[665] = 'Sezioni in totale';

$txt[668] = 'Pagina di stampa';

$txt[679] = 'L\'indirizzo e-mail deve essere valido.';

$txt[683] = 'Sono un geek!!';
$txt[685] = $context['forum_name'] . ' - Centro informazioni';

$txt[707] = 'Invia questa discussione';

$txt['sendtopic_title'] = 'Invia la discussione &quot;%s&quot; a un amico.';
// Use numeric entities in the below three strings.
$txt['sendtopic_dear'] = 'Caro %s,';
$txt['sendtopic_this_topic'] = 'ti invito a consultare la discussione "%s" su ' . $context['forum_name'] . '. Per visualizzarla segui questo link';
$txt['sendtopic_thanks'] = 'Grazie';
$txt['sendtopic_sender_name'] = 'Il proprio nome';
$txt['sendtopic_sender_email'] = 'Il proprio indirizzo e-mail';
$txt['sendtopic_receiver_name'] = 'Nome destinatario';
$txt['sendtopic_receiver_email'] = 'Indirizzo e-mail destinatario';
$txt['sendtopic_comment'] = 'Aggiungi un commento';
// Use numeric entities in the below string.
$txt['sendtopic2'] = '&#200; stato aggiunto un commento riguardante la discussione';

$txt[721] = 'Rendere l\'indirizzo e-mail privato?';

$txt[737] = 'Spunta tutto';

// Use numeric entities in the below string.
$txt[1001] = 'Errore nel database';
$txt[1002] = 'Ritenta! Se riappare questa schermata, segnala il problema a un amministratore.';
$txt[1003] = 'File';
$txt[1004] = 'Riga';
// Use numeric entities in the below string.
$txt[1005] = 'SMF ha rilevato un errore nel database ed ha provato a correggerlo automaticamente. Se il problema persiste o si riceve in continuazione questa e-mail contattare il proprio provider.';
$txt['database_error_versions'] = '<b>Nota:</b> apparentemente il database <em>deve</em> essere aggiornato. I file del forum sono attualmente alla versione ' . $forum_version . ', mentre il database corrisponde alla versione ' . $modSettings['smfVersion'] . '. Il problema potrebbe risolversi eseguendo l\'ultima versione di upgrade.php.';
$txt['template_parse_error'] = 'Errore nella scansione del modello!';
$txt['template_parse_error_message'] = 'Sembra che qualcosa si sia bloccato nel sistema di gestione dei modelli del forum. Il problema dovrebbe essere temporaneo: riprovare in un secondo momento. Se questo messaggio non scompare contattare un amministratore.<br /><br />È anche possibile provare a <a href="javascript:location.reload();">ricaricare la pagina</a>.';
$txt['template_parse_error_details'] = 'Si è verificato un problema caricando il file del modello o della traduzione <tt><b>%1$s</b></tt>. Controllare la sintassi del file e riprovare - fare attenzione agli apostrofi (<tt>\'</tt>): spesso devono essere preceduti dal carattere di escape (<tt>\\</tt>). Per visualizzare informazioni più specifiche sull\'errore dal PHP provare ad <a href="' . $boardurl . '%1$s">accedere direttamente al file</a>.<br /><br />È anche possibile provare a <a href="javascript:location.reload();">ricaricare la pagina</a> o <a href="' . $scripturl . '?theme=1">utilizzare il tema predefinito</a>.';

$txt['smf10'] = '<b>Oggi</b> alle ';
$txt['smf10b'] = '<b>Ieri</b> alle ';
$txt['smf20'] = 'Nuovo sondaggio';
$txt['smf21'] = 'Domanda';
$txt['smf23'] = 'Invia voto';
$txt['smf24'] = 'Totale votanti';
$txt['smf25'] = 'scorciatoie: premere alt+s per inviare o alt+p per l\'anteprima';
$txt['smf29'] = 'Visualizza risultati';
$txt['smf30'] = 'Chiudi votazioni';
$txt['smf30b'] = 'Riapri votazioni';
$txt['smf39'] = 'Modifica sondaggio';
$txt['smf43'] = 'Sondaggio';
$txt['smf47'] = '1 giorno';
$txt['smf48'] = '1 settimana';
$txt['smf49'] = '1 mese';
$txt['smf50'] = 'Per sempre';
$txt['smf52'] = 'Accesso con nome utente, password e durata della sessione';
$txt['smf53'] = '1 ora';
$txt['smf56'] = 'SPOSTATO';
$txt['smf57'] = 'Inserire una breve spiegazione del perché<br />questa discussione è stata spostata.';
$txt['smf60'] = 'Spiacente, non si ha un numero di messaggi sufficiente per modificare il karma - sono necessari almeno ';
$txt['smf62'] = 'Spiacente, non è possibile ripetere una modifica al karma senza attendere ';
$txt['smf82'] = 'Sezione';
$txt['smf88'] = 'in';
$txt['smf96'] = 'Discussione importante';

$txt['smf138'] = 'Elimina';

$txt['smf199'] = 'Messaggi privati';

$txt['smf211'] = 'kB';

$txt['smf223'] = '[Altre statistiche]';

// Use numeric entities in the below three strings.
$txt['smf238'] = 'Codice';
$txt['smf239'] = 'Citazione di';
$txt['smf240'] = 'Citazione';

$txt['smf251'] = 'Dividi discussione';
$txt['smf252'] = 'Unisci discussioni';
$txt['smf254'] = 'Titolo della nuova discussione';
$txt['smf255'] = 'Dividi solamente questo messaggio.';
$txt['smf256'] = 'Dividi la discussione da questo messaggio.';
$txt['smf257'] = 'Scegliere i messaggi da dividere.';
$txt['smf258'] = 'Nuova discussione';
$txt['smf259'] = 'La discussione è stata divisa in due discussioni correttamente.';
$txt['smf260'] = 'Discussione di origine';
$txt['smf261'] = 'Scegliere i messaggi che si desidera dividere.';
$txt['smf264'] = 'Le discussioni sono state unite correttamente.';
$txt['smf265'] = 'Nuova discussione unita';
$txt['smf266'] = 'Discussione da unire';
$txt['smf267'] = 'Sezione di destinazione';
$txt['smf269'] = 'Discussione di destinazione';
$txt['smf274'] = 'Unire';
$txt['smf275'] = 'con';
$txt['smf276'] = 'Questa funzionalità unirà i messaggi di due discussioni diverse in una sola. I messaggi verranno ordinati secondo la data di inserimento, quindi il messaggio più vecchio diventerà il primo della discussione unita.';

$txt['smf277'] = 'Marca discussione come importante';
$txt['smf278'] = 'Marca discussione come non importante';
$txt['smf279'] = 'Chiudi discussione';
$txt['smf280'] = 'Riapri discussione';

$txt['smf298'] = 'Ricerca avanzata';

$txt['smf299'] = 'GRAVE RISCHIO SICUREZZA:';
$txt['smf300'] = 'Non si è rimosso ';

$txt['smf301'] = 'Pagina creata in ';
$txt['smf302'] = ' secondi con ';
$txt['smf302b'] = ' query.';

$txt['smf315'] = 'Utilizzare questa funzionalità per segnalare a un amministratore un messaggio abusivo o inserito non correttamente.<br /><i>Attenzione: il proprio indirizzo e-mail verrà rivelato ai moderatori in caso di utilizzo di questa funzione.</i>';

$txt['online2'] = 'Collegato';
$txt['online3'] = 'Scollegato';
$txt['online4'] = 'Messaggio privato (Online)';
$txt['online5'] = 'Messaggio privato (Offline)';
$txt['online8'] = 'Stato';

$txt['topbottom4'] = 'Vai su';
$txt['topbottom5'] = 'Vai giù';

if ($_SERVER['QUERY_STRING']=='')
{
$forum_copyright = '<a href="http://www.simplemachines.org/" title="Simple Machines Forum" target="_blank">Powered by ' . $forum_version . '</a> :: <a href="http://www.siteground.com">Hosting Services for SMF by SiteGround</a> ::  
<a href="http://www.simplemachines.org/about/copyright.php" title="Free Forum Software" target="_blank">SMF &copy; 2006-2009, Simple Machines LLC</a>';
}
else
{
$forum_copyright = '<a href="http://www.simplemachines.org/" title="Simple Machines Forum" target="_blank">Powered by ' . $forum_version . '</a> ::  
<a href="http://www.simplemachines.org/about/copyright.php" title="Free Forum Software" target="_blank">SMF &copy; 2006-2009, Simple Machines LLC</a>';
}


$txt['calendar3'] = 'Compleanni:';
$txt['calendar4'] = 'Eventi:';
$txt['calendar3b'] = 'Prossimi compleanni:';
$txt['calendar4b'] = 'Prossimi eventi:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar5'] = '';
$txt['calendar9'] = 'Mese:';
$txt['calendar10'] = 'Anno:';
$txt['calendar11'] = 'Giorno:';
$txt['calendar12'] = 'Titolo evento:';
$txt['calendar13'] = 'Inserito in:';
$txt['calendar20'] = 'Modifica evento';
$txt['calendar21'] = 'Eliminare questo evento?';
$txt['calendar22'] = 'Elimina evento';
$txt['calendar23'] = 'Inserisci evento';
$txt['calendar24'] = 'Agenda';
$txt['calendar37'] = 'Link all\'agenda';
$txt['calendar43'] = 'Link evento';
$txt['calendar47'] = 'Prossimi eventi';
$txt['calendar47b'] = 'Agenda di oggi';
$txt['calendar51'] = 'Settimana';
$txt['calendar54'] = 'Numero di giorni:';
$txt['calendar_how_edit'] = 'come modificare questi eventi?';
$txt['calendar_link_event'] = 'Collega evento a un messaggio:';
$txt['calendar_confirm_delete'] = 'Eliminare questo evento?';
$txt['calendar_linked_events'] = 'Eventi collegati';

$txt['moveTopic1'] = 'Inserisci un messaggio di redirezione';
$txt['moveTopic2'] = 'Modifica l\'oggetto della discussione';
$txt['moveTopic3'] = 'Nuovo oggetto';
$txt['moveTopic4'] = 'Modifica l\'oggetto di ciascun messaggio';

$txt['theme_template_error'] = 'Impossibile caricare il modello \'%s\'.';
$txt['theme_language_error'] = 'Impossibile caricare il file di traduzione \'%s\'.';

$txt['parent_boards'] = 'Sottosezioni';

$txt['smtp_no_connect'] = 'Impossibile collegarsi al server SMTP';
$txt['smtp_port_ssl'] = 'Impostazione porta SMTP errata; dovrebbe essere 465 per i server SSL.';
$txt['smtp_bad_response'] = 'Impossibile ottenere una risposta dal server di posta elettronica';
$txt['smtp_error'] = 'Si sono verificati dei problemi nell\'invio dell\'e-mail. Errore: ';
$txt['mail_send_unable'] = 'Impossibile inviare un\'e-mail all\'indirizzo \'%s\'';

$txt['mlist_search'] = 'Cerca per utente';
$txt['mlist_search2'] = 'Cerca ancora';
$txt['mlist_search_email'] = 'Cerca per indirizzo e-mail';
$txt['mlist_search_messenger'] = 'Cerca per nickname messenger';
$txt['mlist_search_group'] = 'Cerca per posizione';
$txt['mlist_search_name'] = 'Cerca per nome';
$txt['mlist_search_website'] = 'Cerca per sito';
$txt['mlist_search_results'] = 'Cerca nei risultati per';

$txt['attach_downloaded'] = 'scaricati';
$txt['attach_viewed'] = 'visualizzati';
$txt['attach_times'] = 'volte';

$txt['MSN'] = 'MSN';

$txt['settings'] = 'Impostazioni';
$txt['never'] = 'Mai';
$txt['more'] = 'ancora';

$txt['hostname'] = 'Nome host';
$txt['you_are_post_banned'] = 'Spiacente %s, si è interdetti dall\'inserire messaggi o inviare messaggi privati su questo forum.';
$txt['ban_reason'] = 'Motivazione';

$txt['tables_optimized'] = 'Tabelle del database ottimizzate';

$txt['add_poll'] = 'Aggiungi sondaggio';
$txt['poll_options6'] = 'Si possono selezionare fino a %s opzioni.';
$txt['poll_remove'] = 'Rimuovi sondaggio';
$txt['poll_remove_warn'] = 'Rimuovere questo sondaggio dalla discussione?';
$txt['poll_results_expire'] = 'I risultati verranno mostrati a votazione chiusa';
$txt['poll_expires_on'] = 'Le votazioni chiudono';
$txt['poll_expired_on'] = 'Le votazioni sono chiuse';
$txt['poll_change_vote'] = 'Rimuovi voto';
$txt['poll_return_vote'] = 'Opzioni di voto';

$txt['quick_mod_remove'] = 'Eimina selezionate';
$txt['quick_mod_lock'] = 'Chiudi selezionate';
$txt['quick_mod_sticky'] = 'Marca importanti le selezionate';
$txt['quick_mod_move'] = 'Sposta selezionate in';
$txt['quick_mod_merge'] = 'Unisci selezionate';
$txt['quick_mod_markread'] = 'Marca selezionate come lette';
$txt['quick_mod_go'] = 'Vai!';
$txt['quickmod_confirm'] = 'Procedere?';

$txt['spell_check'] = 'Controllo ortografico';

$txt['quick_reply_1'] = 'Risposta rapida';
$txt['quick_reply_2'] = 'Con la <i>risposta rapida</i> è possibile utilizzare i BBCode e le emoticon come in un messaggio normale, ma in modo più diretto.';
$txt['quick_reply_warning'] = 'Attenzione: questa discussione è attualmente chiusa!<br />Solo gli amministratori e i moderatori possono rispondere.';

$txt['notification_enable_board'] = 'Attivare le notifiche per le nuove discussioni aperte in questa sezione?';
$txt['notification_disable_board'] = 'Disattivare le notifiche per le nuove discussioni aperte in questa sezione?';
$txt['notification_enable_topic'] = 'Attivare le notifiche per i nuovi messaggi aggiunti a questa discussione?';
$txt['notification_disable_topic'] = 'Disattivare le notifiche per i nuovi messaggi aggiunti a questa discussione?';

$txt['rtm1'] = 'Segnala al moderatore';

$txt['unread_topics_visit'] = 'Discussioni recenti non lette';
$txt['unread_topics_visit_none'] = 'Nessuna discussione non letta dall\'ultima visita. <a href="' . $scripturl . '?action=unread;all">Mostra tutte le discussioni non lette</a>.';
$txt['unread_topics_all'] = 'Tutte le discussioni non lette';
$txt['unread_replies'] = 'Discussioni aggiornate';

$txt['who_title'] = 'Chi è collegato';
$txt['who_and'] = ' e ';
$txt['who_viewing_topic'] = ' stanno visualizzando questa discussione.';
$txt['who_viewing_board'] = ' stanno visualizzando questa sezione.';
$txt['who_member'] = 'Utente';

$txt['powered_by_php'] = 'Powered by PHP';
$txt['powered_by_mysql'] = 'Powered by MySQL';
$txt['valid_html'] = 'HTML 4.01 valido!';
$txt['valid_xhtml'] = 'XHTML 1.0 valido!';
$txt['valid_css'] = 'CSS valido!';

$txt['guest'] = 'Utente non registrato';
$txt['guests'] = 'Utenti non registrati';
$txt['user'] = 'Utente';
$txt['users'] = 'Utenti';
$txt['hidden'] = 'nascosti';
$txt['buddy'] = 'Amico';
$txt['buddies'] = 'Amici';
$txt['most_online_ever'] = 'Record assoluto di presenze';
$txt['most_online_today'] = 'Record odierno di presenze';

$txt['merge_select_target_board'] = 'Scegliere la sezione di destinazione per la discussione unita';
$txt['merge_select_poll'] = 'Scegliere quale sondaggio dovrà avere la discussione unita';
$txt['merge_topic_list'] = 'Scegliere le discussioni da unire';
$txt['merge_select_subject'] = 'Scegliere l\'oggetto per la discussione unita';
$txt['merge_custom_subject'] = 'Oggetto personalizzato';
$txt['merge_enforce_subject'] = 'Modifica l\'oggetto di tutti i messaggi';
$txt['merge_include_notifications'] = 'Includere le notifiche?';
$txt['merge_check'] = 'Unire?';
$txt['merge_no_poll'] = 'Nessun sondaggio';

$txt['response_prefix'] = 'Re: ';
$txt['current_icon'] = 'Icona corrente';

$txt['smileys_current'] = 'Pacchetto di emoticon corrente';
$txt['smileys_none'] = 'Nessuna emoticon';
$txt['smileys_forum_board_default'] = 'Predefinito del forum/sezione';

$txt['search_results'] = 'Risultati della ricerca';
$txt['search_no_results'] = 'Nessun risultato trovato';

$txt['totalTimeLogged1'] = 'Tempo totale di connessione al forum: ';
$txt['totalTimeLogged2'] = ' giorni, ';
$txt['totalTimeLogged3'] = ' ore e ';
$txt['totalTimeLogged4'] = ' minuti.';
$txt['totalTimeLogged5'] = 'g ';
$txt['totalTimeLogged6'] = 'h ';
$txt['totalTimeLogged7'] = 'm';

$txt['approve_thereis'] = 'C\'è';
$txt['approve_thereare'] = 'Ci sono';
$txt['approve_member'] = 'un utente';
$txt['approve_members'] = 'utenti';
$txt['approve_members_waiting'] = 'in attesa di approvazione.';

$txt['notifyboard_turnon'] = 'Ricevere una notifica quando viene aperta una nuova discussione in questa sezione?';
$txt['notifyboard_turnoff'] = 'Ricevere le notifiche per le nuove discussioni aperte in questa sezione?';

$txt['activate_code'] = 'Il codice di attivazione è';

$txt['find_members'] = 'Cerca un utente';
$txt['find_username'] = 'Nome, nome utente o indirizzo e-mail';
$txt['find_buddies'] = 'Mostrare solo gli amici?';
$txt['find_wildcards'] = 'Caratteri jolly permessi: *, ?';
$txt['find_no_results'] = 'Nessun risultato trovato';
$txt['find_results'] = 'Risultati';
$txt['find_close'] = 'Chiudi';

$txt['unread_since_visit'] = 'Mostra le discussioni non lette dall\'ultima visita';
$txt['show_unread_replies'] = 'Mostra le nuove risposte ai tuoi messaggi';

$txt['change_color'] = 'Modifica colore';

$txt['quickmod_delete_selected'] = 'Elimina selezionati';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'Sono stati ricevuti uno o più messaggi privati.\\nVisualizzarli adesso (in una nuova finestra)?';

$txt['previous_next_back'] = '&laquo; precedente';
$txt['previous_next_forward'] = 'successivo &raquo;';

$txt['movetopic_auto_board'] = '[SEZIONE]';
$txt['movetopic_auto_topic'] = '[LINK DISCUSSIONE]';
$txt['movetopic_default'] = 'Questa discussione è stata spostata in ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'Contrae o espande l\'intestazione.';

$txt['mark_unread'] = 'Marca come non letto';

$txt['ssi_not_direct'] = 'Non accedere a SSI.php direttamente; utilizzare il percorso (%s) o aggiungere ?ssi_function=qualcosa.';
$txt['ssi_session_broken'] = 'SSI.php non ha potuto caricare una sessione! Ciò potrebbe provocare problemi con l\'uscita e con altre funzioni - assicurarsi che SSI.php sia incluso prima di *qualsiasi* altra cosa negli script!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Anteprima messaggio';
$txt['preview_fetch'] = 'Recupero anteprima in corso...';
$txt['preview_new'] = 'Nuovo messaggio';
$txt['error_while_submitting'] = 'Il seguente errore o i seguenti errori si sono verificati durante l\'invio del messaggio:';

$txt['split_selected_posts'] = 'Messaggi selezionati';
$txt['split_selected_posts_desc'] = 'I messaggi qui sotto formeranno una nuova discussione dopo la divisione.';
$txt['split_reset_selection'] = 'azzera selezione';

$txt['modify_cancel'] = 'Annulla';
$txt['mark_read_short'] = 'Marca come letti';

$txt['pm_short'] = 'I miei messaggi';
$txt['hello_member_ndt'] = 'Salve';

$txt['ajax_in_progress'] = 'Caricamento in corso...';

?>