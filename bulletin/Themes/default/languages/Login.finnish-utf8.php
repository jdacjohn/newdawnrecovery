<?php
// Version: 1.1.2; Login

$txt[37] = 'Kirjoita k&#228;ytt&#228;j&#228;tunnus';
$txt[38] = 'Salasana puuttuu';
$txt[39] = 'Salasana on v&#228;&#228;r&#228;';
$txt[98] = 'Valitse k&#228;ytt&#228;j&#228;tunnus';
$txt[155] = 'Huoltotila';
$txt[245] = 'Rekister&#246;inti onnistui';
$txt[431] = 'Olet nyt keskustelualueen j&#228;sen.';
// Use numeric entities in the below string.
$txt[492] = 'ja salasanasi on';
$txt[500] = 'Ole hyv&#228; ja valitse asianmukainen s&#228;hk&#246;postiosoite, %s.';
$txt[517] = 'tarvittavat tiedot';
$txt[520] = 'Keskustelualue k&#228;ytt&#228;&#228; t&#228;t&#228; tunnusta vain tunnistamiseesi.';
$txt[585] = 'Hyv&#228;ksyn';
$txt[586] = 'En hyv&#228;ksy';
$txt[633] = 'Huom!';
$txt[634] = 'Vain rekister&#246;ityneet j&#228;senet p&#228;&#228;sev&#228;t t&#228;lle alueelle.';
$txt[635] = 'Ole hyv&#228; ja kirjaudu sis&#228;&#228;n tai';
$txt[636] = 'rekister&#246;idy';
$txt[637] = 'keskustelualueelle ' . $context['forum_name'] . '.';
// Use numeric entities in the below two strings.
$txt[701] = 'Voit muuttaa sit&#228; kirjautumisen j&#228;lkeen profiilisivulta, tai vierailemalla t&#228;ll&#228; sivulla kirjautumisen j&#228;lkeen:';
$txt[719] = 'Tunnuksesi on: ';
$txt[730] = 'S&#228;hk&#246;postiosoite (%s) on jo k&#228;yt&#246;ss&#228; jollain j&#228;senist&#228;mme. Jos ep&#228;ilet, ett&#228; t&#228;m&#228; on virhe, mene kirjautumissivulle ja k&#228;yt&#228; salasanan palautustoimintoa t&#228;ll&#228; osoitteella.';

$txt['login_hash_error'] = 'Salasanojen turvallisuusasetuksia on p&#228;ivitetty hiljattain. Ole hyv&#228; ja kirjoita salasanasi uudelleen.';

$txt['register_age_confirmation'] = 'Olen ainakin %d vuotta vanha';

// Use numeric entities in the below six strings.
$txt['register_subject'] = 'Tervetuloa keskustelualueelle ' . $context['forum_name'];

// For the below three messages, %1$s is the display name, %2$s is the username, %3$s is the password, %4$s is the activation code, and %5$s is the activation link (the last two are only for activation.)
$txt['register_immediate_message'] = 'Olet nyt rekister&#246;itynyt keskustelualueelle ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Tunnuksesi on %2$s ja salasanasi on %3$s.' . "\n\n" . 'Voit muuttaa salasanaasi kirjautumisen j&#228;lkeen profiilistasi, tai k&#228;ym&#228;ll&#228; t&#228;ll&#228; sivulla kirjautumisen j&#228;lkeen:' . "\n\n" . $scripturl . '?action=profile' . "\n\n" . $txt[130];
$txt['register_activate_message'] = 'Olet nyt rekister&#246;itynyt keskustelualueelle ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Tunnuksesi on %2$s ja salasanasi on %3$s (mink&#228; voit muuttaa my&#246;hemmin.)' . "\n\n" . 'Ennenkuin voit kirjautua, sinun on aktivoitava j&#228;senyytesi. Se tapahtuu seuraamalla t&#228;t&#228; linkki&#228;:' . "\n\n" . '%5$s' . "\n\n" . 'Jos sinulta kysyt&#228;&#228;n aktivoitikoodiasi, se on "%4$s".' . "\n\n" . $txt[130];
$txt['register_pending_message'] = 'J&#228;senhakemuksesi keskustelualueelle ' . $context['forum_name'] . ' on vastaanotettu, %1$s.' . "\n\n" . 'Rekister&#246;it tunnukseksi %2$s ja salasanaksi %3$s.' . "\n\n" . 'Ennen kuin voit kirjautua ja ryhty&#228; k&#228;ytt&#228;m&#228;&#228;n keskustelualuettamme, hakemuksesi pit&#228;&#228; k&#228;sitell&#228; ja hyv&#228;ksy&#228;.  Kun t&#228;m&#228; on tapahtunut, saat uuden s&#228;hk&#246;postin t&#228;h&#228;n samaan osoitteeseen.' . "\n\n" . $txt[130];

// For the below two messages, %1$s is the user's display name, %2$s is their username, %3$s is the activation code, and %4$s is the activation link (the last two are only for activation.)
$txt['resend_activate_message'] = 'Olet nyt rekister&#246;itynyt keskustelualueelle ' . $context['forum_name'] . ', %1$s!' . "\n\n" . 'Tunnuksesi on "%2$s".' . "\n\n" . 'Ennenkuin voit kirjautua, sinun on aktivoitava j&#228;senyytesi. Se tapahtuu seuraamalla t&#228;t&#228; linkki&#228;:' . "\n\n" . '%4$s' . "\n\n" . 'Jos sinulta kysyt&#228;&#228;n aktivoitikoodiasi, se on "%3$s".' . "\n\n" . $txt[130];
$txt['resend_pending_message'] = 'J&#228;senhakemuksesi keskustelualueelle ' . $context['forum_name'] . ' on vastaanotettu, %1$s.' . "\n\n" . 'Rekister&#246;idyit tunnuksella %2$s.' . "\n\n" . 'Ennen kuin voit kirjautua ja ryhty&#228; k&#228;ytt&#228;m&#228;&#228;n keskustelualuettamme, hakemuksesi pit&#228;&#228; k&#228;sitell&#228; ja hyv&#228;ksy&#228;.  Kun t&#228;m&#228; on tapahtunut, saat uuden s&#228;hk&#246;postin t&#228;h&#228;n samaan osoitteeseen.' . "\n\n" . $txt[130];

$txt['ban_register_prohibited'] = 'Pahoittelut, oikeutesi eiv&#228;t riit&#228; rekister&#246;itymiseen t&#228;lle keskustelualueelle.';
$txt['under_age_registration_prohibited'] = 'Olemme pahoillamme, mutta k&#228;ytt&#228;j&#228;t jotka ovat alle %d vuotiaita, eiv&#228;t saa rekister&#246;ity&#228; t&#228;lle keskustelualueelle.';

$txt['activate_account'] = 'J&#228;senyyden aktivointi';
$txt['activate_success'] = 'J&#228;senyytesi on vahvistettu. Voit nyt kirjautua sis&#228;&#228;n.';
$txt['activate_not_completed1'] = 'Sinun on vahvistettava s&#228;hk&#246;postiosoitteesi ennen kirjautumista.';
$txt['activate_not_completed2'] = 'Tarvitsetko toisen aktivointiviestin?';
$txt['activate_after_registration'] = 'Kiitos rekister&#246;itymisest&#228;si. Saat pian s&#228;hk&#246;postia, jolla voit aktivoida j&#228;senyytesi. Jos viesti&#228; ei ala kuulua, tarkista roskapostikansiosi.';
$txt['invalid_userid'] = 'K&#228;ytt&#228;j&#228;&#228; ei ole olemassa';
$txt['invalid_activation_code'] = 'Virheellinen aktivointikoodi';
$txt['invalid_activation_username'] = 'K&#228;ytt&#228;j&#228;tunnus tai s&#228;hk&#246;posti';
$txt['invalid_activation_new'] = 'Jos olet rekister&#246;itynyt v&#228;&#228;r&#228;ll&#228; s&#228;hk&#246;postiosoitteella, kirjoita uusi osoite ja salasanasi t&#228;h&#228;n.';
$txt['invalid_activation_new_email'] = 'Uusi s&#228;hk&#246;postiosoite';
$txt['invalid_activation_password'] = 'Vanha salasana';
$txt['invalid_activation_resend'] = 'L&#228;het&#228; aktivointikoodi uudestaan';
$txt['invalid_activation_known'] = 'Jos tied&#228;t aktivointikoodisi, kirjoita se t&#228;h&#228;n.';
$txt['invalid_activation_retry'] = 'Aktivointikoodi';
$txt['invalid_activation_submit'] = 'Aktivoi';

$txt['coppa_not_completed1'] = 'Yll&#228;pito ei ole edelleenk&#228;&#228;n saanut huoltajasi suostumusta j&#228;senyyteesi.';
$txt['coppa_not_completed2'] = 'Tarvitsetko lis&#228;tietoja?';

$txt['awaiting_delete_account'] = 'J&#228;senyytesi on merkitty poistettavaksi!<br />Jos haluat palauttaa j&#228;senyytesi, valitse &quot;Aktivoi j&#228;senyyteni uudelleen&quot; laatikko, ja kirjaudu uudelleen.';
$txt['undelete_account'] = 'Aktivoi j&#228;senyyteni uudelleen';

$txt['change_email_success'] = 'S&#228;hk&#246;postiosoitteesi on muutettu. Uusi aktivointiviesti on l&#228;hetetty siihen osoitteeseen.';
$txt['resend_email_success'] = 'Uusi aktivointiviesti on l&#228;hetetty.';
// Use numeric entities in the below three strings.
$txt['change_password'] = 'Uuden salasanan tiedot';
$txt['change_password_1'] = 'Kirjautumistietosi sivustolla';
$txt['change_password_2'] = 'on muutettu ja salasanasi uusittu. Alla on uudet kirjautumistietosi.';

$txt['maintenance3'] = 'T&#228;m&#228; keskustelualue on huoltotilassa.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'Ole hyvä ja lue ja hyväksy sitoumus ennen rekisteröintiä';
$txt['register_passwords_differ_js'] = 'Syöttämäsi kaksi salasanaa eivät ole samoja!';

$txt['approval_after_registration'] = 'Kiitoksia rekister&#246;itymisest&#228;si. Yll&#228;pidon pit&#228;&#228; viel&#228; hyv&#228;ksy&#228; hakemuksesi, saat siit&#228; tiedotteen s&#228;hk&#246;postiisi.';

$txt['admin_settings_desc'] = 'T&#228;&#228;ll&#228; voit muokata uusien rekister&#246;intien asetuksia.';

$txt['admin_setting_registration_method'] = 'Uusien j&#228;senien rekister&#246;itymismetodi';
$txt['admin_setting_registration_disabled'] = 'Rekister&#246;ityminen estetty';
$txt['admin_setting_registration_standard'] = 'V&#228;lit&#246;n rekister&#246;inti';
$txt['admin_setting_registration_activate'] = 'Edellyt&#228; aktivointia';
$txt['admin_setting_registration_approval'] = 'Edellyt&#228; yll&#228;pidon hyv&#228;ksynt&#228;&#228;';
$txt['admin_setting_notify_new_registration'] = 'Ilmoita yll&#228;pit&#228;jille kun uusi j&#228;sen on rekister&#246;itynyt';
$txt['admin_setting_send_welcomeEmail'] = 'L&#228;het&#228; tervetuliaisviesti uusille j&#228;senille';

$txt['admin_setting_password_strength'] = 'Vaatimustaso k&#228;ytt&#228;jien salasanoille';
$txt['admin_setting_password_strength_low'] = 'Matala - v&#228;hint&#228;&#228;n 4 merkki&#228;';
$txt['admin_setting_password_strength_medium'] = 'Keskitaso - ei voi sis&#228;lt&#228;&#228; k&#228;ytt&#228;j&#228;tunnusta';
$txt['admin_setting_password_strength_high'] = 'Korkea - sekoitus eri merkkej&#228;';

$txt['admin_setting_image_verification_type'] = 'Kuvallisen varmistuksen vaikeusaste';
$txt['admin_setting_image_verification_type_desc'] = 'Mit&#228; monimutkaisempi kuva on, sen vaikeampi bottien on l&#228;p&#228;ist&#228; sit&#228;';
$txt['admin_setting_image_verification_off'] = 'Pois p&#228;&#228;lt&#228;';
$txt['admin_setting_image_verification_vsimple'] = 'Eritt&#228;in yksinkertainen - pelkk&#228; teksti kuvan p&#228;&#228;ll&#228;';
$txt['admin_setting_image_verification_simple'] = 'Yksinkertainen - v&#228;rilliset, limitetyt kirjaimet, ei kohinaa';
$txt['admin_setting_image_verification_medium'] = 'Keskitaso - v&#228;rilliset, limitetyt kirjaimet kohinan kanssa';
$txt['admin_setting_image_verification_high'] = 'Korkea - v&#228;&#228;nnetyt kirjaimet, kohinan kanssa';
$txt['admin_setting_image_verification_sample'] = 'Esimerkki';
$txt['admin_setting_image_verification_nogd'] = '<b>Huomioi:</b> t&#228;ll&#228; serverill&#228; ei ole GD -kirjastoja asennettuna, joten osa varmistuksen efekteist&#228; ei toimi.';

$txt['admin_setting_coppaAge'] = 'Ik&#228;r&#228;ja uusille j&#228;senille';
$txt['admin_setting_coppaAge_desc'] = '(Laita 0 jos ei ik&#228;r&#228;j&#228;&#228;)';
$txt['admin_setting_coppaType'] = 'Mit&#228; tehd&#228;&#228;n jos ik&#228;raja ei t&#228;yty';
$txt['admin_setting_coppaType_reject'] = 'Hylk&#228;&#228; rekister&#246;ityminen';
$txt['admin_setting_coppaType_approval'] = 'Edellyt&#228; kirjallista lupaa huoltajalta/vanhemmilta';
$txt['admin_setting_coppaPost'] = 'Postiosoite johon vanhempien lupalappu l&#228;hetet&#228;&#228;n';
$txt['admin_setting_coppaPost_desc'] = 'Aktivoituu vain jos lupaa edellytet&#228;&#228;n';
$txt['admin_setting_coppaFax'] = 'Faxin numero johon huoltajan lupalappu voidaan l&#228;hett&#228;&#228;';
$txt['admin_setting_coppaPhone'] = 'Puhelinnumero josta huoltaja voi kysell&#228; lis&#228;tietoja asiasta';
$txt['admin_setting_coppa_require_contact'] = 'Sinun on laitettava joko faksin numero tai postiosoite jos kirjallinen lupa vaaditaan.';

$txt['admin_register'] = 'Uuden j&#228;senen rekister&#246;inti';
$txt['admin_register_desc'] = 'T&#228;&#228;ll&#228; voit rekister&#246;id&#228; uusia j&#228;seni&#228; keskustelualueellesi, ja jos haluat, l&#228;hett&#228;&#228; samalla tiedot heille itselleen s&#228;hk&#246;postitse.';
$txt['admin_register_username'] = 'Uusi tunnus';
$txt['admin_register_email'] = 'S&#228;hk&#246;postiosoite';
$txt['admin_register_password'] = 'Salasana';
$txt['admin_register_username_desc'] = 'K&#228;ytt&#228;j&#228;nimi uudelle j&#228;senelle';
$txt['admin_register_email_desc'] = 'Uuden j&#228;senen s&#228;hk&#246;postiosoite<br />(tarvitaan jos l&#228;hetet&#228;t s&#228;hk&#246;postia tunnuksesta)';
$txt['admin_register_password_desc'] = 'Salasana uudelle j&#228;senelle';
$txt['admin_register_email_detail'] = 'L&#228;het&#228; salasana k&#228;ytt&#228;j&#228;n s&#228;hk&#246;postiin';
$txt['admin_register_email_detail_desc'] = 'S&#228;hk&#246;postiosoite vaaditaan vaikka t&#228;t&#228; ei valittaisi';
$txt['admin_register_email_activate'] = 'Edellyt&#228; aktivointia';
$txt['admin_register_group'] = 'Ensisijainen j&#228;senryhm&#228;';
$txt['admin_register_group_desc'] = 'Ensisijainen j&#228;senryhm&#228; mihin uusi j&#228;sen kuuluu';
$txt['admin_register_group_none'] = '(ei ensisijaista ryhm&#228;&#228;)';
$txt['admin_register_done'] = 'J&#228;sen %s on rekister&#246;ity onnistuneesti!';

$txt['admin_browse_register_new'] = 'Rekister&#246;i uusi j&#228;sen';

// Use numeric entities in the below three strings.
$txt['admin_notify_subject'] = 'Uusi j&#228;sen on liittynyt';
$txt['admin_notify_profile'] = '%s on juuri rekister&#246;itynyt keskustelualueellesi. Klikkaa alla olevaa linkki&#228; katsellaksesi h&#228;nen profiiliaan.';
$txt['admin_notify_approval'] = 'T&#228;m&#228; j&#228;sen ei voi kirjoittaa keskustelualueelle ennekuin olet hyv&#228;ksynyt h&#228;nen j&#228;senyytens&#228;. Klikkaa alla olevaa linkki&#228; siirty&#228;ksesi hyv&#228;ksym&#228;&#228;n j&#228;senyyden.';

$txt['coppa_title'] = 'Ik&#228;rajallinen keskustelualue';
$txt['coppa_after_registration'] = 'Kiitoksia rekister&#246;itymisest&#228;si keskustelualueelle ' . $context['forum_name'] . '.<br /><br />Koska olet nuorempi kuin {MINIMUM_AGE}, laki edellytt&#228;&#228; huoltajasi suostumusta
	ennenkuin voit ryhty&#228; k&#228;ytt&#228;m&#228;&#228;n j&#228;senyytt&#228;si.  Saadaksesi j&#228;senyytesi voimaan, ole hyv&#228; ja tulosta alla oleva lomake:';
$txt['coppa_form_link_popup'] = 'Lataa lomake uuteen ikkunaan';
$txt['coppa_form_link_download'] = 'Tallenna tekstitiedostona';
$txt['coppa_send_to_one_option'] = 'T&#228;m&#228;n j&#228;lkeen pyyd&#228; vanhempiasi l&#228;hett&#228;m&#228;&#228;n t&#228;ytetty lomake:';
$txt['coppa_send_to_two_options'] = 'T&#228;m&#228;n j&#228;lkeen pyyd&#228; vanhempiasi l&#228;hett&#228;m&#228;&#228;n t&#228;ytetty lomake joko:';
$txt['coppa_send_by_post'] = 'Postitse, seuraavaan osoitteeseen:';
$txt['coppa_send_by_fax'] = 'Faxilla, seuraavaan numeroon:';
$txt['coppa_send_by_phone'] = 'Voit my&#246;s pyyt&#228;&#228; heit&#228; soittamaan yll&#228;pidolle numeroon {PHONE_NUMBER}.';

$txt['coppa_form_title'] = 'Kirjallinen lupa rekister&#246;ity&#228; keskustelualueelle ' . $context['forum_name'];
$txt['coppa_form_address'] = 'Osoite';
$txt['coppa_form_date'] = 'P&#228;iv&#228;ys';
$txt['coppa_form_body'] = 'Min&#228; {PARENT_NAME},<br /><br />annan luvan {CHILD_NAME} (lapsen nimi) liitty&#228; j&#228;seneksi keskustelualueelle: ' . $context['forum_name'] . ', tunnuksella: {USER_NAME}.<br /><br />Ymm&#228;rr&#228;n my&#246;s, ett&#228; er&#228;it&#228; yksityistietoja joita  {USER_NAME} on antanut, voi n&#228;ky&#228; muille j&#228;senille keskustelualueella.<br /><br />Allekirjoitus:<br />{PARENT_NAME} (Vanhempi/huoltaja).';

$txt['visual_verification_label'] = 'Kuvallinen varmistus';
$txt['visual_verification_description'] = 'Kirjoita kuvassa n&#228;kyv&#228;t kirjaimet';
$txt['visual_verification_sound'] = 'Kuuntele kirjaimet';
$txt['visual_verification_sound_again'] = 'Soita uudelleen';
$txt['visual_verification_sound_close'] = 'Sulje ikkuna';
$txt['visual_verification_request_new'] = 'Pyyd&#228; uusi kuva';
$txt['visual_verification_sound_direct'] = 'Onko ongelmia kuulla t&#228;m&#228;? Kokeile suoraa linkki&#228; siihen.';

?>