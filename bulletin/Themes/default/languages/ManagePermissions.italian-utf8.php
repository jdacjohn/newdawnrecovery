<?php
// Version: 1.1; ManagePermissions

$txt['permissions_title'] = 'Gestione autorizzazioni';
$txt['permissions_modify'] = 'Modifica';
$txt['permissions_access'] = 'Accesso';
$txt['permissions_allowed'] = 'Consentito';
$txt['permissions_denied'] = 'Vietato';

$txt['permissions_switch'] = 'Cambia in';
$txt['permissions_global'] = 'Globale';
$txt['permissions_local'] = 'Locale';

$txt['permissions_groups'] = 'Autorizzazioni per gruppo';
$txt['permissions_all'] = 'tutti';
$txt['permissions_none'] = 'nessuno';
$txt['permissions_set_permissions'] = 'Imposta autorizzazioni';

$txt['permissions_with_selection'] = 'Alla selezione';
$txt['permissions_apply_pre_defined'] = 'Applica il profilo di autorizzazioni predefinito';
$txt['permissions_select_pre_defined'] = 'Scegliere un profilo predefinito';
$txt['permissions_copy_from_board'] = 'Copia le autorizzazioni per questa sezione';
$txt['permissions_select_board'] = 'Scegliere una sezione';
$txt['permissions_like_group'] = 'Imposta autorizzazioni come in questo gruppo';
$txt['permissions_select_membergroup'] = 'Scegliere un gruppo di utenti';
$txt['permissions_add'] = 'Aggiungi autorizzazione';
$txt['permissions_remove'] = 'Elimina autorizzazione';
$txt['permissions_deny'] = 'Nega autorizzazione';
$txt['permissions_select_permission'] = 'Scegli un\'autorizzazione';

// All of the following block of strings should not use entities, instead use \\" for &quot; etc.
$txt['permissions_only_one_option'] = 'È possibile scegliere solo un\'azione per volta nella modifica delle autorizzazioni';
$txt['permissions_no_action'] = 'Nessuna azione scelta';
$txt['permissions_deny_dangerous'] = 'Si stanno per negare una o più autorizzazioni.\\nQuesto può essere rischioso e provocare risultati imprevedibili se non si è sicuri che nessuno sia \\"per sbaglio\\" nel gruppo o nei gruppi a cui si stanno negando le autorizzazioni.\\n\\nSi desidera continuare?';

$txt['permissions_boards'] = 'Autorizzazioni per sezione';

$txt['permissions_modify_group'] = 'Modifica gruppo';
$txt['permissions_general'] = 'Autorizzazioni generali';
$txt['permissions_board'] = 'Autorizzazioni generali della sezione';
$txt['permissions_commit'] = 'Salva';
$txt['permissions_modify_local'] = 'Modifica autorizzazioni locali';
$txt['permissions_on'] = 'nella sezione';
$txt['permissions_local_for'] = 'Autorizzazioni locali per gruppo';
$txt['permissions_option_on'] = 'C';
$txt['permissions_option_off'] = 'X';
$txt['permissions_option_deny'] = 'N';
$txt['permissions_option_desc'] = 'Per ogni autorizzazione è possibile scegliere \'Consentire\' (C), \'Non consentire\' (X), o <span style="color: red;">\'Negare\' (N)</span>.<br /><br />Ricordarsi che se si nega un\'autorizzazione, sarà negata anche a ogni utente - che sia o meno un moderatore - presente in quel gruppo.<br />Per questa ragione, occorre usare con attenzione la funzione nega e solo quando <b>indispensabile</b>. D\'altra parte, \'non consentire\' nega l\'autorizzazione a meno che questa non venga assegnata altrove.';

$txt['permissiongroup_general'] = 'Generale';
$txt['permissionname_view_stats'] = 'Visualizzare statistiche forum';
$txt['permissionhelp_view_stats'] = 'Le statistiche del forum sintetizzano tutti i dati principali di utilizzo del forum, come il numero di utenti, il numero di messaggi nel giorno e alcune \'top 10\'. Attivando questa autorizzazione si aggiunge un collegamento in fondo alla pagina principale del forum (\'[Altre statistiche]\').';
$txt['permissionname_view_mlist'] = 'Visualizzare l\'elenco utenti';
$txt['permissionhelp_view_mlist'] = 'L\'elenco degli utenti mostra tutti gli utenti registrati nel forum. L\'elenco può essere ordinato e si possono effettuare ricerche. L\'elenco utenti è raggiungibile sia dalla pagina principale del forum che dalla pagina delle statistiche, facendo clic sul numero di utenti.';
$txt['permissionname_who_view'] = 'Visualizzare utenti online';
$txt['permissionhelp_who_view'] = 'Utenti online mostra tutti gli utenti che sono attualmente collegati al forum e cosa stanno facendo. Questa autorizzazione funzionerà solo se è stata attivata in \'Modifica funzionalità e opzioni\'. È possibile accedere alla pagina \'Utenti online\' seguendo il collegamento nell\'area \'Utenti on-line\' della pagina principale del forum. Anche se non attiva, gli utenti potranno vedere chi è online, ma non dove si trovano.';
$txt['permissionname_search_posts'] = 'Ricerca messaggi e discussioni';
$txt['permissionhelp_search_posts'] = 'L\'autorizzazione alla ricerca permette agli utenti di ricercare nei forum a cui ha accesso. Quando l\'autorizzazione alla ricerca è attiva, un pulsante \'Ricerca\' viene aggiunto alla barra superiore dei pulsanti del forum.';
$txt['permissionname_karma_edit'] = 'Modificare il karma degli altri utenti';
$txt['permissionhelp_karma_edit'] = 'Il karma è una funzione che mostra la popolarità di un utente. Per usare questa funzione occorre attivarla in \'Modifica funzionalità e opzioni\'. Questa autorizzazione permette a un gruppo di utenti di assegnare dei voti. Questa autorizzazione non ha alcun effetto sugli ospiti non registrati.';

$txt['permissiongroup_pm'] = 'Messaggi privati';
$txt['permissionname_pm_read'] = 'Leggere messaggi privati';
$txt['permissionhelp_pm_read'] = 'Questa autorizzazione consente agli utenti di accedere alla sezione di messaggi privati e di leggere i propri messaggi. Senza questa autorizzazione un utente non può inviare messaggi privati.';
$txt['permissionname_pm_send'] = 'Inviare messaggi privati';
$txt['permissionhelp_pm_send'] = 'Invia messaggi privati ad altri utenti registrati. Richiede l\'autorizzazione \'Leggere messaggi privati\'.';

$txt['permissiongroup_calendar'] = 'Agenda';
$txt['permissionname_calendar_view'] = 'Visualizzare l\'agenda';
$txt['permissionhelp_calendar_view'] = 'L\'agenda mostra per ogni mese i compleanni, gli eventi e i giorni festivi. Questa autorizzazione consente l\'accesso a questa agenda. Quando è attiva, un pulsante sarà aggiunto alla barra superiore dei pulsanti e un elenco sarà visualizzato in fondo alla pagina principale del forum con i compleanni, gli eventi e le festività del giorno corrente e di quelli seguenti. L\'agenda deve essere abilitata tramite \'Modifica funzionalità e opzioni\'.';
$txt['permissionname_calendar_post'] = 'Aggiungere eventi all\'agenda';
$txt['permissionhelp_calendar_post'] = 'Un evento è una discussione collegata a una particolare data o periodo. L\'inserimento di eventi può avvenire dall\'agenda. Un evento può essere inserito solo se l\'utente che lo vuole creare ha il permesso di aprire nuove discussioni.';
$txt['permissionname_calendar_edit'] = 'Modificare eventi nell\'agenda';
$txt['permissionhelp_calendar_edit'] = 'Un evento è una discussione collegata a una particolare data o periodo. Gli eventi possono essere modificati facendo clic sull\'asterisco rosso (*) che si trova vicino all\'evento nella visualizzazione dell\'agenda. Per modificare un evento, l\'utente deve avere autorizzazioni sufficienti per modificare il primo messaggio della discussione collegata.';
$txt['permissionname_calendar_edit_own'] = 'I propri eventi';
$txt['permissionname_calendar_edit_any'] = 'Tutti gli eventi';

$txt['permissiongroup_maintenance'] = 'Amministrazione forum';
$txt['permissionname_admin_forum'] = 'Amministrare il forum e il database';
$txt['permissionhelp_admin_forum'] = 'Questa autorizzazione consente a un utente di:<ul><li>cambiare le impostazioni del tema del database e del forum</li><li>gestire i pacchetti</li><li>usare gli strumenti di manutenzione del forum e del database</li><li>visualizzare il registro degli errori e della moderazione</li></ul> Usare questa autorizzazione con cautela, dato che concede molti poteri.';
$txt['permissionname_manage_boards'] = 'Gestire sezioni e categorie';
$txt['permissionhelp_manage_boards'] = 'Questa autorizzazione consente la creazione, la modifica e l\'eliminazione di sezioni e di categorie.';
$txt['permissionname_manage_attachments'] = 'Gestire allegati e avatar';
$txt['permissionhelp_manage_attachments'] = 'Questa autorizzazione consente l\'accesso alla gestione degli allegati, in cui tutti gli allegati del forum e le icone sono elencati e possono essere eliminati.';
$txt['permissionname_manage_smileys'] = 'Gestire emoticon';
$txt['permissionhelp_manage_smileys'] = 'Questa autorizzazione consente l\'accesso alla gestione delle emoticon, in cui si possono aggiungere, modificare ed eliminare singole emoticon e gruppi di emoticon.';
$txt['permissionname_edit_news'] = 'Modificare notizie';
$txt['permissionhelp_edit_news'] = 'La funzione delle notizie consente di inserire in ogni schermata una riga di notizie estratta casualmente. Per usare la funzione delle notizie, occorre abilitarla nelle impostazioni del forum.';

$txt['permissiongroup_member_admin'] = 'Gestione utenti';
$txt['permissionname_moderate_forum'] = 'Gestire gli utenti del forum';
$txt['permissionhelp_moderate_forum'] = 'Questa autorizzazione comprende tutte le più importanti funzioni di gestione degli utenti:<ul><li>accesso alla gestione della registrazione</li><li>accesso alla schermata di visualizzazione/eliminazione utenti</li><li>informazioni complete sul profilo, compreso l\'indirizzo IP e lo stato (nascosto) del collegamento</li><li>attivazione di account</li><li>ricezione di notifiche di approvazione e approvazione di account</li><li>neutralizzazione della facoltà di ignorare i messaggi privati</li><li>altre piccole cose</li></ul>';
$txt['permissionname_manage_membergroups'] = 'Gestire e assegnare gruppi di utenti';
$txt['permissionhelp_manage_membergroups'] = 'Questa autorizzazione consente a un utente di modificare i gruppi di utenti e di assegnare gruppi agli altri utenti.';
$txt['permissionname_manage_permissions'] = 'Gestire autorizzazioni';
$txt['permissionhelp_manage_permissions'] = 'Questa autorizzazione consente a un utente di modificare tutte le autorizzazioni di un gruppo di utenti, a livello globale o per singole sezioni.';
$txt['permissionname_manage_bans'] = 'Gestire elenchi di utenti interdetti';
$txt['permissionhelp_manage_bans'] = 'Questa autorizzazione consente a un utente di aggiungere o togliere nomi di utenti, indirizzi IP, nomi di host e indirizzi e-mail da un elenco di utenti interdetti. Inoltre, consente di visualizzare ed eliminare voci nel registro di utenti interdetti che hanno cercato di collegarsi.';
$txt['permissionname_send_mail'] = 'Inviare una e-mail dal forum agli utenti';
$txt['permissionhelp_send_mail'] = 'Mandare un messaggio a tutti gli utenti del forum, oppure solo ad alcuni gruppi di utenti, tramite e-mail o messaggio privato (in questo ultimo caso, è richiesta l\'autorizzazione \'Inviare messaggi privati\').';

$txt['permissiongroup_profile'] = 'Profili utenti';
$txt['permissionname_profile_view'] = 'Visualizzare riassunto e statistiche profilo';
$txt['permissionhelp_profile_view'] = 'Questa autorizzazione consente agli utenti di fare clic su un nome utente per visualizzare una sintesi delle impostazioni del profilo, alcune statistiche e tutti i messaggi dell\'utente.';
$txt['permissionname_profile_view_own'] = 'Il proprio profilo';
$txt['permissionname_profile_view_any'] = 'Tutti i profili';
$txt['permissionname_profile_identity'] = 'Modifica impostazioni account';
$txt['permissionhelp_profile_identity'] = 'Le impostazioni dell\'account sono le impostazioni di base di un profilo: password, indirizzo e-mail, gruppo di utenti e lingua preferita.';
$txt['permissionname_profile_identity_own'] = 'Il proprio profilo';
$txt['permissionname_profile_identity_any'] = 'Tutti i profili';
$txt['permissionname_profile_extra'] = 'Modificare impostazioni aggiuntive del profilo';
$txt['permissionhelp_profile_extra'] = 'Le impostazioni aggiuntive comprendono impostazioni sulle icone, preferenze sul tema, sulle notifiche e sui messaggi privati.';
$txt['permissionname_profile_extra_own'] = 'Il proprio profilo';
$txt['permissionname_profile_extra_any'] = 'Tutti i profili';
$txt['permissionname_profile_title'] = 'Modificare qualifica personalizzata';
$txt['permissionhelp_profile_title'] = 'La qualifica personalizzata è mostrata nella pagina che visualizza la discussione, sotto il profilo di ogni utente che ha una qualifica personalizzata.';
$txt['permissionname_profile_title_own'] = 'Il proprio profilo';
$txt['permissionname_profile_title_any'] = 'Tutti i profili';
$txt['permissionname_profile_remove'] = 'Eliminare account';
$txt['permissionhelp_profile_remove'] = 'Questa autorizzazione consente all\'utente di eliminare il proprio account, quando viene impostata su \'Il proprio account\'.';
$txt['permissionname_profile_remove_own'] = 'Il proprio account';
$txt['permissionname_profile_remove_any'] = 'Tutti gli account';
$txt['permissionname_profile_server_avatar'] = 'Selezionare un avatar dal server';
$txt['permissionhelp_profile_server_avatar'] = 'Se viene attivata permetterà a un utente di selezionare un avatar dalle collezioni di avatar installate sul server.';
$txt['permissionname_profile_upload_avatar'] = 'Caricare un avatar sul server';
$txt['permissionhelp_profile_upload_avatar'] = 'Questo permesso consentirà a un utente di caricare il proprio avatar personale sul server.';
$txt['permissionname_profile_remote_avatar'] = 'Scegliere un\'avatar memorizzato su un altro server';
$txt['permissionhelp_profile_remote_avatar'] = 'Poiché gli avatar possono influenzare negativamente il tempo di visualizzazione delle pagine, è possibile non autorizzare certi gruppi di utenti a usare icone ospitate su altri server.';

$txt['permissiongroup_general_board'] = 'Generale';
$txt['permissionname_moderate_board'] = 'Moderare la sezione';
$txt['permissionhelp_moderate_board'] = 'L\'autorizzazione a moderare la sezione aggiunge alcune autorizzazioni che fanno di un moderatore un \'vero\' moderatore. Le autorizzazioni comprendono: rispondere alle discussioni bloccate, cambiare la data di scadenza dei sondaggi, visualizzare i risultati dei sondaggi.';

$txt['permissiongroup_topic'] = 'Discussioni';
$txt['permissionname_post_new'] = 'Aprire nuove discussioni';
$txt['permissionhelp_post_new'] = 'Questa autorizzazione consente agli utenti di aprire nuove discussioni. Non consente di inviare messaggi in risposta alle discussioni.';
$txt['permissionname_merge_any'] = 'Unire qualsiasi discussione';
$txt['permissionhelp_merge_any'] = 'Unire due o più discussioni per crearne una. L\'ordine dei messaggi nella discussione unita sarà basato sulla data e l\'ora in cui i messaggi sono stati creati. Un utente può unire solo le discussioni nelle sezioni in cui gli è stato permesso di unire. Per unire diverse discussioni allo stesso tempo, un utente deve essere abilitato alla &quot;moderazione rapida&quot; nelle sue impostazioni del profilo.';
$txt['permissionname_split_any'] = 'Dividere qualsiasi discussione';
$txt['permissionhelp_split_any'] = 'Dividere una discussione in due discussioni distinte.';
$txt['permissionname_send_topic'] = 'Inviare discussioni agli amici';
$txt['permissionhelp_send_topic'] = 'Questa autorizzazione consente a un utente di segnalare a un amico tramite e-mail una discussione, inserendo l\'indirizzo e-mail e potendo aggiungere un messaggio.';
$txt['permissionname_make_sticky'] = 'Marcare le discussioni come importanti';
$txt['permissionhelp_make_sticky'] = 'Le discussioni importanti rimangono sempre in cima a una sezione. Possono essere utili per annunci o altri messaggi importanti.';
$txt['permissionname_move'] = 'Spostare discussioni';
$txt['permissionhelp_move'] = 'Spostare una discussione da una sezione all\'altra. Gli utenti possono scegliere come sezioni di destinazione solo quelle a cui hanno accesso.';
$txt['permissionname_move_own'] = 'Le proprie discussioni';
$txt['permissionname_move_any'] = 'Tutte le discussioni';
$txt['permissionname_lock'] = 'Bloccare discussioni';
$txt['permissionhelp_lock'] = 'Questa autorizzazione consente a un utente di bloccare una discussione. Questo può servire a evitare che vengano aggiunte risposte a una discussione. Solo gli utenti con l\'autorizzazione \'Moderare la sezione\' possono ancora inviare messaggi nelle discussioni bloccate.';
$txt['permissionname_lock_own'] = 'Le proprie discussioni';
$txt['permissionname_lock_any'] = 'Tutte le discussioni';
$txt['permissionname_remove'] = 'Eliminare discussioni';
$txt['permissionhelp_remove'] = 'Eliminare completamente alcune discussioni. Questa autorizzazione non consente di eliminare singoli messaggi all\'interno della discussione!';
$txt['permissionname_remove_own'] = 'Le proprie discussioni';
$txt['permissionname_remove_any'] = 'Tutte le discussioni';
$txt['permissionname_post_reply'] = 'Inviare messaggi alle discussioni';
$txt['permissionhelp_post_reply'] = 'Questa autorizzazione consente di rispondere alle discussioni.';
$txt['permissionname_post_reply_own'] = 'Le proprie discussioni';
$txt['permissionname_post_reply_any'] = 'Tutte le discussioni';
$txt['permissionname_modify_replies'] = 'Modificare i messaggi nelle proprie discussioni';
$txt['permissionhelp_modify_replies'] = 'Questa autorizzazione consente a un utente che ha avviato una discussione di modificare tutte le risposte alla discussione.';
$txt['permissionname_delete_replies'] = 'Eliminare messaggi nelle proprie discussioni';
$txt['permissionhelp_delete_replies'] = 'Questa autorizzazione consente a un utente che ha avviato una discussione di eliminare tutte le risposte alla discussione.';
$txt['permissionname_announce_topic'] = 'Annunciare discussione';
$txt['permissionhelp_announce_topic'] = 'Questa autorizzazione consente a un utente di inviare un messaggio e-mail che annuncia la creazione di una discussione a tutti gli utenti o ad alcuni gruppi di utenti.';

$txt['permissiongroup_post'] = 'Messaggi';
$txt['permissionname_delete'] = 'Eliminare messaggi';
$txt['permissionhelp_delete'] = 'Eliminare messaggi. Questa autorizzazione non consente a un utente di eliminare il primo messaggio di una discussione.';
$txt['permissionname_delete_own'] = 'I propri messaggi';
$txt['permissionname_delete_any'] = 'Tutti i messaggi';
$txt['permissionname_modify'] = 'Modificare messaggi';
$txt['permissionhelp_modify'] = 'Modificare messaggi';
$txt['permissionname_modify_own'] = 'I propri messaggi';
$txt['permissionname_modify_any'] = 'Tutti i messaggi';
$txt['permissionname_report_any'] = 'Segnalare messaggi ai moderatori';
$txt['permissionhelp_report_any'] = 'Questa autorizzazione aggiunge un collegamento a ogni messaggio, per consentire a un utente di segnalare un messaggio al moderatore. In seguito alla segnalazione, tutti i moderatori della sezione riceveranno un messaggio e-mail con il collegamento al messaggio segnalato e una descrizione del problema (inserita dall\'utente che effettua la segnalazione).';

$txt['permissiongroup_poll'] = 'Sondaggi';
$txt['permissionname_poll_view'] = 'Visualizzare sondaggi';
$txt['permissionhelp_poll_view'] = 'Questa autorizzazione consente a un utente di visualizzare un sondaggio. In assenza di questa autorizzazione, l\'utente potrà vedere solo la discussione.';
$txt['permissionname_poll_vote'] = 'Votare nei sondaggi';
$txt['permissionhelp_poll_vote'] = 'Questa autorizzazione consente a un utente registrato di inserire un voto. Non si può applicare agli utenti non registrati.';
$txt['permissionname_poll_post'] = 'Inserire sondaggi';
$txt['permissionhelp_poll_post'] = 'Questa autorizzazione consente a un utente di inserire un nuovo sondaggio.';
$txt['permissionname_poll_add'] = 'Aggiungere un sondaggio alle discussioni';
$txt['permissionhelp_poll_add'] = 'Questa autorizzazione consente a un utente di aggiungere un sondaggio dopo che una discussione è stata creata. Questa autorizzazione richiede che si abbia la possibilità di modificare il primo messaggio di una discussione.';
$txt['permissionname_poll_add_own'] = 'Le proprie discussioni';
$txt['permissionname_poll_add_any'] = 'Tutte le discussioni';
$txt['permissionname_poll_edit'] = 'Modificare sondaggi';
$txt['permissionhelp_poll_edit'] = 'Questa autorizzazione consente a un utente di modificare le possibili risposte di un sondaggio e di azzerare i dati di un sondaggio. Per modificare il numero massimo di voti consentiti e la data di scadenza, all\'utente deve essere stata assegnata l\'autorizzazione \'Moderare la sezione\'.';
$txt['permissionname_poll_edit_own'] = 'I propri sondaggi';
$txt['permissionname_poll_edit_any'] = 'Tutti i sondaggi';
$txt['permissionname_poll_lock'] = 'Bloccare sondaggi';
$txt['permissionhelp_poll_lock'] = 'Bloccare i sondaggi impedisce che vengano accettati altri voti nei sondaggi.';
$txt['permissionname_poll_lock_own'] = 'I propri sondaggi';
$txt['permissionname_poll_lock_any'] = 'Tutti i sondaggi';
$txt['permissionname_poll_remove'] = 'Eliminare sondaggi';
$txt['permissionhelp_poll_remove'] = 'Questa autorizzazione consente di eliminare i sondaggi.';
$txt['permissionname_poll_remove_own'] = 'I propri sondaggi';
$txt['permissionname_poll_remove_any'] = 'Tutti i sondaggi';

$txt['permissiongroup_notification'] = 'Notifiche';
$txt['permissionname_mark_any_notify'] = 'Richiedere notifica delle risposte';
$txt['permissionhelp_mark_any_notify'] = 'Questa funzione consente agli utenti di ricevere una notifica quando qualcuno risponde in una discussione che si sta controllando.';
$txt['permissionname_mark_notify'] = 'Richiedere notifica per nuove discussioni';
$txt['permissionhelp_mark_notify'] = 'La notifica delle nuove discussioni è una funzione che consente a un utente di ricevere un messaggio e-mail ogni volta che una nuova discussione viene creata nella sezione che sta controllando.';

$txt['permissiongroup_attachment'] = 'Allegati';
$txt['permissionname_view_attachments'] = 'Visualizzare allegati';
$txt['permissionhelp_view_attachments'] = 'Gli allegati sono documenti che sono allegati ai messaggi inviati. Questa funzione può essere attivata e configurata in \'Modifica funzioni e opzioni\'. Dato che gli allegati non sono direttamente collegati, è possibile usare questa autorizzazione per impedire agli utenti non autorizzati di scaricarli.';
$txt['permissionname_post_attachment'] = 'Inviare allegati';
$txt['permissionhelp_post_attachment'] = 'Gli allegati sono documenti che sono allegati ai messaggi inviati. Ogni messaggio può contenere diversi allegati.';

$txt['permissionicon'] = '';

$txt['permission_settings_title'] = 'Impostazioni permessi';
$txt['groups_manage_permissions'] = 'Gruppi che possono gestire i permessi';
$txt['permission_settings_submit'] = 'Salva';
$txt['permission_settings_enable_deny'] = 'Abilita l\'opzione di negare i permessi';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_deny_warning'] = 'Disabilitando questa opzione verranno aggiornati i permessi da \\\'Negato\\\' a \\\'Non permesso\\\'.';
$txt['permission_by_membergroup_desc'] = 'Da qui è possibile impostare tutti i permessi globali per ogni gruppo di utenti. Tali permessi sono validi in tutte le sezioni in cui non sono stati sovrascritti dai permessi locali impostati nella pagina \'Permessi per la sezione\'.';
$txt['permission_by_board_desc'] = 'Da qui è possibile impostare se una sezione debba utilizzare i permessi globali oppure abbia uno specifico insieme di permessi. Utilizzare i permessi locali significa che per quella sezione è possibile impostare ogni permesso per ogni gruppo di utenti.';
$txt['permission_settings_desc'] = 'Qui è possibile stabilire chi ha il permesso di cambiare i permessi e quanto debba essere sofisticato il sistema dei permessi.';
$txt['permission_settings_enable_postgroups'] = 'Abilita i permessi per i gruppi basati sul numero di messaggi';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_postgroups_warning'] = 'La disabilitazione di questa impostazione causerà l\\\'eliminazione dei permessi vigenti al momento per i gruppi basati sul numero di messaggi.';
$txt['permission_settings_enable_by_board'] = 'Abilita permessi avanzati sezione per sezione';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_by_board_warning'] = 'La disabilitazione di questa impostazione causerà l\\\'eliminazione di tutti i permessi impostati a livello di sezione.';

?>