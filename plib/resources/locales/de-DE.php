<?php
/**
 * Copyright 1999-2017. Plesk International GmbH.
 */

$messages = [
    'form_restart_tutorial'              => 'Tutorial neu starten',
    'message_container'                  => '<div class="welcome-container">%%content%%</div>',
    'message_error_install'              => 'Installation fehlgeschlagen: %%error%% Sie k&ouml;nnen diesen Schritt &uuml;berspringen!',
    'message_error_restart'              => 'Bitte w&auml;hlen Sie die Checkbox aus um das Tutorial neu zu starten.',
    'message_introtext'                  => '<div class="welcome-introtext"><div class="welcome-title"><span class="close-button"><a href="%%close_link%%"><img src="%%close%%" /></a></span><h2>Willkommen bei Ihrem neuen Plesk WordPress Server</h2></div><div class="welcome-image-float"><img src="%%elvis%%" alt="Plesk - Octopus" /></div><div class="welcome-text"><p>Hallo %%name%%,</p><p>sch&ouml;n Sie kennenzulernen! Mein Name ist Elvis, ich werde Ihnen bei Ihren ersten Schritten mit Plesk behilflich sein.</p><p>Sie haben die richtige Entscheidung mit Ihrem WordPress Server gemacht, wenn Sie das beste Open-Source CMS f&uuml; Ihre Projekte nutzen wollen.</p><p>Lassen Sie uns zusammen starten. Keine Angst, mit Plesk und meiner Hilfe ist es sehr einfach!</p></div></div><hr />',
    'message_step_domain'                => '<div class="welcome-active"><span class="icon-active icon-domain"></span><div class="welcome-step-container"><h3>F&uuml;gen Sie eine Domain hinzu</h3><p>Bevor wir starten, m&uuml;ssen Sie zuerst eine Domain hinzuf&uuml;gen. Dies k&ouml;nnen Sie <a href="%%link_domain%%">hier</a> erledigen.</p><p class="welcome-description">Sobald Sie eine Domain hinzugef&uuml;gt haben, k&ouml;nnen wir WordPress installieren und optimieren. Bitte kehren Sie zu der Startseite zur&uuml;ck, wenn die Domain angelegt wurde.</p></div></div>',
    'message_step_install_full'          => '<div class="welcome-active"><span class="icon-active icon-wptk"></span><div class="welcome-step-container"><h3>Erstellen Sie eine WordPress-Seite</h3><p>Installieren Sie Ihre <a href="%%link_install%%">neue WordPress Seite</a> oder importieren Sie Ihre <a href="%%link_migrate%%">bestehende WordPress Seite</a>.</p><p class="welcome-description">Mit dem WordPress Toolkit k&ouml;nnen Sie Ihre WordPress Seite innerhalb weniger Minuten erstellen. Das Toolkit stellt Ihnen eine Vielzahl von Entwicklungsabl&auml;ufen für WordPress-administratoren und Entwicklern zur Verf&uuml;gung; sowohl f&uumlr Anf&auml;nger als auch Fortgeschrittene stehen verschiedene Tools zur Auswahl!</p></div></div>',
    'message_step_install_inactive'      => '<div class="welcome-inactive %%class%%"><span class="icon-%%class%% icon-wptk"></span><div class="welcome-step-container"><h3>Erstellen Sie eine WordPress-Seite</h3><p>Installieren Sie eine neue WordPress Seite oder importieren Sie Ihre bestehende WordPress Installation.</p></div></div>',
    'message_step_install_new'           => '<div class="welcome-active"><span class="icon-active icon-wptk"></span><div class="welcome-step-container"><h3>Erstellen Sie eine WordPress-Seite</h3><p>Installieren Sie eine <a href="%%link_install%%">neue WordPress Seite</a> mit dem WordPress Toolkit.</p><p class="welcome-description">Mit dem WordPress Toolkit k&ouml;nnen Sie Ihre WordPress Seite innerhalb weniger Minuten erstellen. Das Toolkit stellt Ihnen eine Vielzahl von Entwicklungsabl&auml;ufen für WordPress-administratoren und Entwicklern zur Verf&uuml;gung; sowohl f&uumlr Anf&auml;nger als auch Fortgeschrittene stehen verschiedene Tools zur Auswahl!</p><p>Oder wollen Sie Ihre bestehende WordPress Seite importieren? Unsere Migrations-Extension ist leider nicht installiert. <a href="%%link_install_migrator%%">Installieren Sie die Migrations-Exstension</a> jetzt, wenn Sie eine bestehende Webseite importieren wollen. Dies kann ein paar Minuten in Anspruch nehmen.</p></div></div>',
    'message_step_install_not_wptoolkit' => '<div class="welcome-active"><span class="icon-active icon-wptk"></span><div class="welcome-step-container"><h3>Erstellen Sie eine WordPress-Seite</h3><p>Oh, scheinbar ist das WordPress Toolkit nicht installiert. Bitte installieren Sie es von unserem <a href="%%link_install%%">Extension Katalog</a> um direkt mit WordPress und Plesk zu starten!</p><p class="welcome-description">Mit dem WordPress Toolkit k&ouml;nnen Sie Ihre WordPress Seite innerhalb weniger Minuten erstellen. Das Toolkit stellt Ihnen eine Vielzahl von Entwicklungsabl&auml;ufen für WordPress-administratoren und Entwicklern zur Verf&uuml;gung; sowohl f&uumlr Anf&auml;nger als auch Fortgeschrittene stehen verschiedene Tools zur Auswahl!</p></div></div>',
    'message_step_pagespeed'             => '<div class="welcome-active"><span class="icon-active icon-pagespeed-insights"></span><div class="welcome-step-container"><h3>Optimieren Sie Ihre Webseite mit PageSpeed</h3><p>Pr&uuml;fen Sie Ihre WordPress Webseite mit <a href="%%link_pagespeed%%">PageSpeed Insights</a> und steigern Sie Ihre Webseiten-performance mit Google PageSpeed f&uuml; Apache.</p><p class="welcome-description">Mit PageSpeed Insights k&ouml;nnen Sie verschiedene Wege finden, um Ihre Webseite schneller und freundlicher f&uuml;r mobile Endger&auml; zu machen. Dies ist auch ein wichtiger Schritt für eine bessere Positionierung bei Google. Das Tool analiziert den Inhalt Ihrer Webseite und liefert Ihnen Optimierungsratschl&auml;ge.</p></div></div>',
    'message_step_pagespeed_inactive'    => '<div class="welcome-inactive %%class%%"><span class="icon-%%class%% icon-pagespeed-insights"></span><div class="welcome-step-container"><h3>Optimieren Sie Ihre Webseite mit PageSpeed</h3><p>Pr&uuml;fen Sie Ihre WordPress Webseite mit PageSpeed Insights und steigern Sie Ihre Webseiten-performance mit Google PageSpeed f&uuml; Apache.</p></div></div>',
    'message_step_pagespeed_not'         => '<div class="welcome-active"><span class="icon-active icon-pagespeed-insights"></span><div class="welcome-step-container"><h3>Optimieren Sie Ihre Webseite mit PageSpeed</h3><p>Oh, scheinbar ist die PageSpeed Insights Extension nicht installiert. Bitte <a href="%%link_install%%">installieren Sie PageSpeed Insights</a> jetzt um Ihre WordPress Webseite zu analysieren. Dies kann ein paar Minuten in Anspruch nehmen.</p><p class="welcome-description">Mit PageSpeed Insights k&ouml;nnen Sie verschiedene Wege finden, um Ihre Webseite schneller und freundlicher f&uuml;r mobile Endger&auml; zu machen. Dies ist auch ein wichtiger Schritt für eine bessere Positionierung bei Google. Das Tool analiziert den Inhalt Ihrer Webseite und liefert Ihnen Optimierungsratschl&auml;ge.</p></div></div>',
    'message_step_restart'               => '<div class="welcome-inactive welcome-done complete"><span class="icon-complete"></span><div class="welcome-step-container"><h3>Herzlichen Gl&uuml;ckwunsch. Sie haben das Tutorial abgeschlossen.</h3><p>Wir w&uuml;nschen Ihnen viel Spass bei mit Ihrer WordPress Webseite!</p><p>Wollen Sie das <a href="%%link_restart%%">Tutorial neu starten</a>? Sie k&ouml;nnen es auch komplett <a href="%%link_deactivate%%">deaktivieren</a>.</p></div></div>',
    'message_step_ssl'                   => '<div class="welcome-active"><span class="icon-active icon-security-advisor"></span><div class="welcome-step-container"><h3>
	F&uuml;gen Sie ein SSL-Zertifikat hinzu und sichern Sie Ihre Webseite</h3><p>
	Sichern Sie Ihre WordPress Webseite mit unserem <a href="%%link_security%%">Security Advisor</a>.</p><p class="welcome-description">Der Security Advisor hilft Ihnen dabei all Ihre Webseiten mit nur einem Klick mit SSL auszustatten. Dar&uuml;ber hinaus können Sie HTTP/2 f&uuml;r mehr Performance auf all Ihren Webseiten aktivieren.</p></div></div>',
    'message_step_ssl_inactive'          => '<div class="welcome-inactive %%class%%"><span class="icon-%%class%% icon-security-advisor"></span><div class="welcome-step-container"><h3>F&uuml;gen Sie ein SSL-Zertifikat hinzu und sichern Sie Ihre Webseite</h3><p>Erstellen Sie ein SSL Zertifikat mit der Hilfe von unserem Security Advisor.</p></div></div>',
    'message_step_ssl_not'               => '<div class="welcome-active"><span class="icon-active icon-security-advisor"></span><div class="welcome-step-container"><h3>F&uuml;gen Sie ein SSL-Zertifikat hinzu und sichern Sie Ihre Webseite</h3><p>Oh, scheinbar ist die PageSpeed Insights Extension nicht installiert. Bitte <a href="%%link_install%%">installieren Sie Security Advisor</a> jetzt um Ihre WordPress Seiten abzusichern! Dies kann ein paar Minuten in Anspruch nehmen.</p><p class="welcome-description">Der Security Advisor hilft Ihnen dabei all Ihre Webseiten mit nur einem Klick mit SSL auszustatten. Dar&uuml;ber hinaus können Sie HTTP/2 f&uuml;r mehr Performance auf all Ihren Webseiten aktivieren.</p></div></div>',
    'message_success_restart'            => 'Das Tutorial wurde erfolgreich neu gestartet.',
    'message_view_nothing_here'          => '<div><strong>Huhu, hier gibt es nichts zu sehen ;) Auf der Haupt-Seite findest Du mich</strong> - <em>Elvis</em><br /><img src="/modules/welcome-wp/images/plesk_octopus_generic.png" /></div>',
    'message_step_next'                  => '<div class="control"><hr /><p><small><strong><a href="%%link_next%%">Fertig? klicke hier f&uuml;r den n&auml;chsten Schritt.</a></strong></small> - <small><a href="%%link_deactivate%%">Tutorial deaktivieren.</a></small></p></div>',
    'message_step_finish'                => '<div class="control"><hr /><p><small><a href="%%link_finish%%">Fertig? Klicken Sie hier um das Tutorial abzuschliessen.</a></small></p></div>',
];