<?php
/**
 * Italian language file
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author Christopher Smith <chris@jalakai.co.uk>
 * @author Silvia Sargentoni <polinnia@tin.it>
 * @author Pietro Battiston toobaz@email.it
 * @author Diego Pierotto ita.translations@tiscali.it
 * @author ita.translations@tiscali.it
 * @author Lorenzo Breda <lbreda@gmail.com>
 */
$lang['menu']                  = 'Configurazione Wiki';
$lang['error']                 = 'Impostazioni non aggiornate a causa di un valore non corretto, controlla le modifiche apportate e salva di nuovo.
                       <br />I valori non corretti sono evidenziati da un riquadro rosso.';
$lang['updated']               = 'Aggiornamento impostazioni riuscito.';
$lang['nochoice']              = '(nessun\'altra scelta disponibile)';
$lang['locked']                = 'Il file di configurazione non può essere aggiornato, se questo non è intenzionale, <br />
                       assicurati che il nome e i permessi del file contenente la configurazione locale siano corretti.';
$lang['_configuration_manager'] = 'Configurazione Wiki';
$lang['_header_dokuwiki']      = 'Impostazioni DokuWiki';
$lang['_header_plugin']        = 'Impostazioni Plugin';
$lang['_header_template']      = 'Impostazioni Template';
$lang['_header_undefined']     = 'Impostazioni non definite';
$lang['_basic']                = 'Impostazioni Base';
$lang['_display']              = 'Impostazioni Visualizzazione';
$lang['_authentication']       = 'Impostazioni Autenticazione';
$lang['_anti_spam']            = 'Impostazioni Anti-Spam';
$lang['_editing']              = 'Impostazioni Modifica';
$lang['_links']                = 'Impostazioni Collegamenti';
$lang['_media']                = 'Impostazioni File';
$lang['_advanced']             = 'Impostazioni Avanzate';
$lang['_network']              = 'Impostazioni Rete';
$lang['_plugin_sufix']         = 'Impostazioni Plugin';
$lang['_template_sufix']       = 'Impostazioni Template';
$lang['_msg_setting_undefined'] = 'Nessun metadato definito.';
$lang['_msg_setting_no_class'] = 'Nessuna classe definita.';
$lang['_msg_setting_no_default'] = 'Nessun valore predefinito.';
$lang['fmode']                 = 'Permessi per i nuovi file';
$lang['dmode']                 = 'Permessi per le nuove directory';
$lang['lang']                  = 'Lingua';
$lang['basedir']               = 'Directory di base';
$lang['baseurl']               = 'URL di base';
$lang['savedir']               = 'Directory per il salvataggio dei dati';
$lang['start']                 = 'Nome della pagina iniziale';
$lang['title']                 = 'Titolo del wiki';
$lang['template']              = 'Template';
$lang['license']               = 'Sotto quale licenza vorresti rilasciare il tuo contenuto?';
$lang['fullpath']              = 'Mostra il percorso completo delle pagine';
$lang['recent']                = 'Ultime modifiche';
$lang['breadcrumbs']           = 'Numero di breadcrumb';
$lang['youarehere']            = 'Breadcrumb gerarchici';
$lang['typography']            = 'Abilita la sostituzione tipografica';
$lang['htmlok']                = 'Consenti HTML incorporato';
$lang['phpok']                 = 'Consenti PHP incorporato';
$lang['dformat']               = 'Formato delle date (vedi la funzione <a href="http://www.php.net/date">data</a> di PHP)';
$lang['signature']             = 'Firma';
$lang['toptoclevel']           = 'Livello superiore per l\'indice';
$lang['maxtoclevel']           = 'Numero massimo di livelli per l\'indice';
$lang['maxseclevel']           = 'Livello massimo per le sezioni modificabili';
$lang['camelcase']             = 'Usa CamelCase per i collegamenti';
$lang['deaccent']              = 'Pulizia dei nomi di pagina';
$lang['useheading']            = 'Usa la prima intestazione come nome di pagina';
$lang['refcheck']              = 'Controlla i riferimenti ai file';
$lang['refshow']               = 'Numero di riferimenti da visualizzare';
$lang['allowdebug']            = 'Abilita il debug <b>(disabilitare se non serve!)</b>';
$lang['usewordblock']          = 'Blocca lo spam in base alla blacklist';
$lang['indexdelay']            = 'Intervallo di tempo prima dell\'indicizzazione';
$lang['relnofollow']           = 'Usa rel="nofollow"';
$lang['mailguard']             = 'Oscuramento indirizzi e-mail';
$lang['iexssprotect']          = 'Controlla i file caricati in cerca di possibile codice JavaScript o HTML maligno.';
$lang['showuseras']            = 'Cosa visualizzare quando si mostra l\'ultimo utente che ha modificato una pagina';
$lang['useacl']                = 'Usa lista di controllo accessi (ACL)';
$lang['autopasswd']            = 'Genera password in automatico';
$lang['authtype']              = 'Sistema di autenticazione';
$lang['passcrypt']             = 'Metodo di cifratura password';
$lang['defaultgroup']          = 'Gruppo predefinito';
$lang['superuser']             = 'Amministratore';
$lang['manager']               = 'Gestore - un gruppo o un utente con accesso a determinate funzioni di gestione';
$lang['profileconfirm']        = 'Richiedi la password per modifiche al profilo';
$lang['disableactions']        = 'Disabilita azioni DokuWiki';
$lang['disableactions_check']  = 'Controlla';
$lang['disableactions_subscription'] = 'Sottoscrivi/Rimuovi sottoscrizione';
$lang['disableactions_nssubscription'] = 'Sottoscrivi/Rimuovi sottoscrizione della categoria';
$lang['disableactions_wikicode'] = 'Mostra sorgente/Esporta Raw';
$lang['disableactions_other']  = 'Altre azioni (separate da virgola)';
$lang['sneaky_index']          = 'Normalmente, DokuWiki mostra tutte le categorie nella vista indice. Abilitando questa opzione, saranno nascoste quelle per cui l\'utente non ha il permesso in lettura. Questo potrebbe far sì che alcune sottocategorie accessibili siano nascoste. La pagina indice potrebbe quindi diventare inutilizzabile con alcune configurazioni dell\'ACL.';
$lang['auth_security_timeout'] = 'Timeout di sicurezza per l\'autenticazione (secondi)';
$lang['securecookie']          = 'Devono i cookies impostati tramite HTTPS essere inviati al browser solo tramite HTTPS? Disattiva questa opzione solo quando l\'accesso al tuo wiki viene effettuato con il protocollo SSL ma la navigazione del wiki non risulta sicura.';
$lang['updatecheck']           = 'Controllare aggiornamenti e avvisi di sicurezza? DokuWiki deve contattare splitbrain.org per questa funzione.';
$lang['userewrite']            = 'Usa il rewrite delle URL';
$lang['useslash']              = 'Usa lo slash come separatore nelle URL';
$lang['usedraft']              = 'Salva una bozza in automatico in fase di modifica';
$lang['sepchar']               = 'Separatore di parole nei nomi di pagina';
$lang['canonical']             = 'Usa URL canoniche';
$lang['autoplural']            = 'Controlla il plurale nei collegamenti';
$lang['compression']           = 'Usa la compressione per i file dell\'archivio';
$lang['cachetime']             = 'Durata della cache (sec)';
$lang['locktime']              = 'Durata dei file di lock (sec)';
$lang['fetchsize']             = 'Dimensione massima (bytes) scaricabile da fetch.php da extern';
$lang['notify']                = 'Invia notifiche sulle modifiche a questo indirizzo';
$lang['registernotify']        = 'Invia informazioni sui nuovi utenti registrati a questo indirizzo email';
$lang['mailfrom']              = 'Mittente per le mail automatiche';
$lang['gzip_output']           = 'Usa il Content-Encoding gzip per xhtml';
$lang['gdlib']                 = 'Versione GD Lib ';
$lang['im_convert']            = 'Percorso per il convertitore di ImageMagick';
$lang['jpg_quality']           = 'Qualità di compressione JPG (0-100)';
$lang['subscribers']           = 'Abilita la sottoscrizione alle pagine';
$lang['compress']              = 'Comprimi i file CSS e javascript';
$lang['hidepages']             = 'Nascondi le pagine che soddisfano la condizione (inserire un\'espressione regolare)';
$lang['send404']               = 'Invia "HTTP 404/Pagina non trovata" per le pagine inesistenti';
$lang['sitemap']               = 'Genera una sitemap Google (giorni)';
$lang['broken_iua']            = 'La funzione ignore_user_abort non funziona sul tuo sistema? Questo potrebbe far sì che l\'indice di ricerca sia inutilizzabile. È noto che nella configurazione IIS+PHP/CGI non funziona. Vedi il<a href="http://bugs.splitbrain.org/?do=details&amp;task_id=852">Bug 852</a> per maggiori informazioni.';
$lang['xsendfile']             = 'Usare l\'header X-Sendfile per permettere al webserver di fornire file statici? Questa funzione deve essere supportata dal tuo webserver.';
$lang['xmlrpc']                = 'Abilita/disabilita interfaccia XML-RPC';
$lang['renderer_xhtml']        = 'Renderer da usare la visualizzazione del wiki (xhtml)';
$lang['renderer__core']        = '%s (dokuwiki)';
$lang['renderer__plugin']      = '%s (plugin)';
$lang['rememberme']            = 'Permetti i cookies di accesso permanenti (ricordami)';
$lang['rss_type']              = 'Tipo di feed XML';
$lang['rss_linkto']            = 'Collega i feed XML a';
$lang['rss_content']           = 'Cosa mostrare negli elementi dei feed XML?';
$lang['rss_update']            = 'Intervallo di aggiornamento dei feed XML (sec)';
$lang['recent_days']           = 'Quante modifiche recenti tenere (giorni)';
$lang['rss_show_summary']      = 'I feed XML riportano un sommario nel titolo';
$lang['target____wiki']        = 'Finestra target per i collegamenti interni';
$lang['target____interwiki']   = 'Finestra target per i collegamenti interwiki';
$lang['target____extern']      = 'Finestra target per i collegamenti esterni';
$lang['target____media']       = 'Finestra target per i collegamenti ai file';
$lang['target____windows']     = 'Finestra target per i collegamenti alle risorse condivise';
$lang['proxy____host']         = 'Nome server proxy';
$lang['proxy____port']         = 'Porta proxy';
$lang['proxy____user']         = 'Nome utente proxy';
$lang['proxy____pass']         = 'Password proxy';
$lang['proxy____ssl']          = 'Usa SSL per connetterti al proxy';
$lang['safemodehack']          = 'Abilita safemode hack';
$lang['ftp____host']           = 'Server FTP per safemode hack';
$lang['ftp____port']           = 'Porta FTP per safemode hack';
$lang['ftp____user']           = 'Nome utente FTP per safemode hack';
$lang['ftp____pass']           = 'Password FTP per safemode hack';
$lang['ftp____root']           = 'Root directory FTP per safemode hack';
$lang['license_o_']            = 'Nessuna scelta';
$lang['typography_o_0']        = 'nessuno';
$lang['typography_o_1']        = 'Solo virgolette';
$lang['typography_o_2']        = 'Tutti (potrebbe non funzionare sempre)';
$lang['userewrite_o_0']        = 'nessuno';
$lang['userewrite_o_1']        = '.htaccess';
$lang['userewrite_o_2']        = 'DokuWiki';
$lang['deaccent_o_0']          = 'disabilitata';
$lang['deaccent_o_1']          = 'rimuovi gli accenti';
$lang['deaccent_o_2']          = 'romanizza';
$lang['gdlib_o_0']             = 'GD Lib non disponibile';
$lang['gdlib_o_1']             = 'Versione 1.x';
$lang['gdlib_o_2']             = 'Rileva automaticamente';
$lang['rss_type_o_rss']        = 'RSS 0.91';
$lang['rss_type_o_rss1']       = 'RSS 1.0';
$lang['rss_type_o_rss2']       = 'RSS 2.0';
$lang['rss_type_o_atom']       = 'Atom 0.3';
$lang['rss_type_o_atom1']      = 'Atom 1.0';
$lang['rss_content_o_abstract'] = 'Sunto';
$lang['rss_content_o_diff']    = 'Diff unificata';
$lang['rss_content_o_htmldiff'] = 'Tabella delle diff formattata HTML';
$lang['rss_content_o_html']    = 'Tutto il contenuto della pagina in HTML';
$lang['rss_linkto_o_diff']     = 'vista differenze';
$lang['rss_linkto_o_page']     = 'pagina revisionata';
$lang['rss_linkto_o_rev']      = 'elenco revisioni';
$lang['rss_linkto_o_current']  = 'pagina corrente';
$lang['compression_o_0']       = 'nessuna';
$lang['compression_o_gz']      = 'gzip';
$lang['compression_o_bz2']     = 'bz2';
$lang['xsendfile_o_0']         = 'non usare';
$lang['xsendfile_o_1']         = 'Header proprietario lighttpd (prima della versione 1.5)';
$lang['xsendfile_o_2']         = 'Header standard X-Sendfile';
$lang['xsendfile_o_3']         = 'Header proprietario Nginx X-Accel-Redirect';
$lang['showuseras_o_loginname'] = 'Nome accesso';
$lang['showuseras_o_username'] = 'Nome completo dell\'utente';
$lang['showuseras_o_email']    = 'Indirizzo email dell\'utente (offuscato in base alle impostazioni di sicurezza posta)';
$lang['showuseras_o_email_link'] = 'Indirizzo email dell\'utente come collegamento mailto:';
$lang['useheading_o_0']        = 'Mai';
$lang['useheading_o_navigation'] = 'Solo navigazione';
$lang['useheading_o_content']  = 'Solo contenuto wiki';
$lang['useheading_o_1']        = 'Sempre';
