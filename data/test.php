<?php
$dimensions["Test und Verifizierung"] = array(
    "Dynamische Tiefe" => array(
        "Einfacher Scan" => array(
            "risk" => "Mangelhafte Sicherheitsprüfungen. Nach einer Verteilung können einfache Schwachstellen lange Zeit unerkannt in der Produktionsumgebung vorhanden sein.",
            "measure" => "Ein einfacher Scan wird mit einem Web-Security-Scanner regelmäßig durchgeführt. Sofern die Prüfung in angemessener Zeit erfolgt, während jeder Verteilung.",
            "hardnessOfImplementation" => array(
                "knowledge" => 2,
                "time" => 3,
                "resources" => 1
            ),
            "usefulness" => 2,
            "level" => 1,
            "dependsOn" => array("Definierter Erzeugungs-Prozess"),
            "securityProperties" => array(
                "availability" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Verfügbarkeit von Informationen im gesamten Systems erhöht.",
                "integrity" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Integrität von Informationen im gesamten Systems erhöht.",
                "confidentiality" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Vertraulichkeit von Informationen im gesamten Systems erhöht.",
            ),
        ),
        "Abdeckung von Rollen" => array(
            "risk" => "Teile der Anwendung, insbesondere welche mit Authentifizierung, sind beim Spidern mit einem Web-Security-Scanner nicht abgedeckt.",
            "measure" => "Integration von Authentifizierung mit verschiedenen Rollen und Session Management",
            "hardnessOfImplementation" => array(
                "knowledge" => 3,
                "time" => 3,
                "resources" => 1
            ),
            "usefulness" => 2,
            "level" => 2,
            "dependsOn" => array("Einfacher Scan"),
            "securityProperties" => array(
                "availability" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Verfügbarkeit von Informationen im gesamten Systems erhöht.",
                "integrity" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Integrität von Informationen im gesamten Systems erhöht.",
                "confidentiality" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Vertraulichkeit von Informationen im gesamten Systems erhöht.",
            ),
        ),
        "Dynamischer Spiderdurchlauf" => array(
            "risk" => "Teile der Anwendung, insbesondere welche mit vom Browser interpretierten dynamischen Inhalten wie JavaScript, sind beim Spidern mit einem Web-Security-Scanner nicht abgedeckt.",
            "measure" => "Nutzung eines Spiders welcher dynamische Inhalte ausführt.",
            "hardnessOfImplementation" => array(
                "knowledge" => 3,
                "time" => 3,
                "resources" => 1
            ),
            "usefulness" => 4,
            "level" => 2,
            "dependsOn" => array("Abdeckung von Rollen"),
            "securityProperties" => array(
                "availability" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Verfügbarkeit von Informationen im gesamten Systems erhöht.",
                "integrity" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Integrität von Informationen im gesamten Systems erhöht.",
                "confidentiality" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Vertraulichkeit von Informationen im gesamten Systems erhöht.",
            ),
        ),

        "Abdeckung von serverseitigen Komponenten" => array(
            "risk" => "Serverseitige Kommunikation, wie bei der Nutzung von Microservices, ist ungeprüft.",
            "measure" => "Backend-Kommunikation ist aufgezeichnet und ist geprüft.",
            "hardnessOfImplementation" => array(
                "knowledge" => 4,
                "time" => 5,
                "resources" => 2
            ),
            "usefulness" => 3,
            "level" => 4,
            "dependsOn" => array("Einfacher Scan"),
            "securityProperties" => array(
                "availability" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Verfügbarkeit von Informationen im gesamten Systems erhöht.",
                "integrity" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Integrität von Informationen im gesamten Systems erhöht.",
                "confidentiality" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Vertraulichkeit von Informationen im gesamten Systems erhöht.",
            ),
        ),
        "Abdeckung sequentieller Aktionen" => array(
            "risk" => "Sequenziellen Aktionen wie Workflows sind beim Spidern mit einem Web-Security-Scanner nicht abgedeckt.",
            "measure" => "Seqenzielle Aktionen werden definiert, so dass der Scanner diese in der korrekten Reihenfolge prüft.",
            "hardnessOfImplementation" => array(
                "knowledge" => 3,
                "time" => 3,
                "resources" => 1
            ),
            "usefulness" => 5,
            "level" => 3,
            "implementation" => "cURL",
            "dependsOn" => array("Abdeckung von Rollen")
        ),
        "Abdeckung versteckter Pfade" => array(
            "risk" => "Versteckte Pfade, wie beispielsweise APIs werden nicht abgedeckt.",
            "measure" => "Versteckte Pfade werden abgedeckt.",
            "hardnessOfImplementation" => array(
                "knowledge" => 3,
                "time" => 2,
                "resources" => 1
            ),
            "usefulness" => 5,
            "level" => 3,
            "implementation" => "cURL",
            "dependsOn" => array("Abdeckung von Rollen")
        ),
        "Nutzung zusätzlicher Web-Security-Scanner" => array(
            "risk" => "Ein Web-Security-Scanner ist ggf. nicht optimiert für alle genutzten Technologien. Entsprechend können Schwachstellen unerkannt bleiben.",
            "measure" => "Es sind weitere spezielle Scanner eingesetzt.",
            "hardnessOfImplementation" => array(
                "knowledge" => 5,
                "time" => 3,
                "resources" => 5
            ),
            "usefulness" => 1,
            "level" => 4,
            "dependsOn" => array("Abdeckung von Rollen"),
            "securityProperties" => array(
                "availability" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Verfügbarkeit von Informationen im gesamten Systems erhöht.",
                "integrity" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Integrität von Informationen im gesamten Systems erhöht.",
                "confidentiality" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Vertraulichkeit von Informationen im gesamten Systems erhöht.",
            ),
        ),
        "Abdeckung von nicht erkannten Eingabe-Vektoren" => array(
            "risk" => "Teile der Anwendung, insbesondere welche mit speziell formatierten oder kodierten Parametern (z.B. Suchmaschinenoptimierte Parameter in der URL oder Base64-Kodierte Parameter), werden beim Erfassen bestehender Pfade mit einem Web-Security-Scanner nicht abgedeckt.",
            "measure" => "Spezielle Parameter und Kodierungen sind in eingesetzten Web-Security-Scannern definiert.",
            "hardnessOfImplementation" => array(
                "knowledge" => 5,
                "time" => 5,
                "resources" => 1
            ),
            "usefulness" => 4,
            "level" => 4,
            "securityProperties" => array(
                "availability" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Verfügbarkeit von Informationen im gesamten Systems erhöht.",
                "integrity" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Integrität von Informationen im gesamten Systems erhöht.",
                "confidentiality" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Vertraulichkeit von Informationen im gesamten Systems erhöht.",
            ),
            "dependsOn" => array("Abdeckung von Rollen"),
        ),
        "Abdeckungsanalyse" => array(
            "risk" => "Teile der Anwendung sind beim Spidern mit einem Web-Security-Scanner nicht abgedeckt.",
            "measure" => "Prüfung mittels Abdeckungsanalyse-Werkzeuge welche Teile beim Spidern beziehungsweise bei der Nutzung von eigenen Werkzeugen nicht angesprochen werden um Justierung vornehmen zu können.",
            "hardnessOfImplementation" => array(
                "knowledge" => 4,
                "time" => 5,
                "resources" => 3
            ),
            "usefulness" => 4,
            "level" => 4,
            "implementation" => "OWASP Code Pulse",
            "securityProperties" => array(
                "availability" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Verfügbarkeit von Informationen im gesamten Systems erhöht.",
                "integrity" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Integrität von Informationen im gesamten Systems erhöht.",
                "confidentiality" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Vertraulichkeit von Informationen im gesamten Systems erhöht.",
            ),
        ),
    ),
    "Statische Tiefe" => array(
        "Test auf serverseitige Komponenten" => array(
            "risk" => "Eingesetzte serverseitige Komponten können Fehler enthalten, so dass die Informationssicherheit beeinträchtigt wird. Diese können u.a. erst nach Verteilung der Webanwendung bekannt werden.",
            "measure" => "Tests auf serverseitige Komponenten mit bekannten Schwachstellen werden regelmäßig durchgeführt, beispielsweise jede Nacht.",
            "hardnessOfImplementation" => array(
                "knowledge" => 1,
                "time" => 2,
                "resources" => 1
            ),
            "usefulness" => 5,
            "level" => 1,
            "dependsOn" => array("Definierter Erzeugungs-Prozess"),
            "implementation" => "OWASP Dependency Check",
            "securityProperties" => array(
                "integrity" => "Durch Tests auf Komponenten mit bekannten Schwachstellen ist die Wahrscheinlichkeit geringer, dass durch Schwachstellen in Komponenten Daten von nicht autorisierten Personen oder Systemen verändert werden können.",
                "availability" => "Durch Tests auf Komponenten mit bekannten Schwachstellen ist die Wahrscheinlichkeit geringer, dass Schwachstellen in Komponten ausgenutzt werden, um die Verfügbarkeit des Systems zu beeinträchtigen.",
                "confidentiality" => "Durch Tests auf Komponenten mit bekannten Schwachstellen ist die Wahrscheinlichkeit geringer, dass durch Schwachstellen in Komponten Daten von nicht autorisierten Personen oder Systemen eingesehen werden können.",
            ),
        ),
        "Test auf klientenseitige Komponenten" => array(
            "risk" => "Eingesetzte klientenseitige Komponten können Fehler enthalten, so dass die Informationssicherheit beeinträchtigt wird. Diese können u.a. erst nach Verteilung der Webanwendung bekannt werden.",
            "measure" => "Tests auf klientenseitige  Komponenten mit bekannten Schwachstellen werden regelmäßig durchgeführt, beispielsweise jede Nacht.",
            "hardnessOfImplementation" => array(
                "knowledge" => 1,
                "time" => 2,
                "resources" => 1
            ),
            "usefulness" => 2,
            "level" => 3,
            "dependsOn" => array("Definierter Erzeugungs-Prozess"),
            "implementation" => "retirejs",
            "securityProperties" => array(
                "integrity" => "Durch Tests auf Komponenten mit bekannten Schwachstellen ist die Wahrscheinlichkeit geringer, dass durch Schwachstellen in Komponenten Daten von nicht autorisierten Personen oder Systemen verändert werden können.",
                "availability" => "Durch Tests auf Komponenten mit bekannten Schwachstellen ist die Wahrscheinlichkeit geringer, dass Schwachstellen in Komponten ausgenutzt werden, um die Verfügbarkeit des Systems zu beeinträchtigen.",
                "confidentiality" => "Durch Tests auf Komponenten mit bekannten Schwachstellen ist die Wahrscheinlichkeit geringer, dass durch Schwachstellen in Komponten Daten von nicht autorisierten Personen oder Systemen eingesehen werden können.",
            ),
        ),
        "Ausschluss von Quellcode-Dupliakten" => array(
            "risk" => "Quellcode-Dupliakte können die Stabilität beeinträchtigen.",
            "measure" => "Erkennung und Meldung von Duplikaten in Quellcode.",
            "hardnessOfImplementation" => array(
                "knowledge" => 1,
                "time" => 1,
                "resources" => 1
            ),
            "usefulness" => 1,
            "level" => 4,
            "implementation" => "PMD",
            "dependsOn" => array("Definierter Erzeugungs-Prozess"),
            "securityProperties" => array(
                "availability" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Verfügbarkeit von Informationen im gesamten Systems erhöht.",
                "integrity" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Integrität von Informationen im gesamten Systems erhöht.",
                "confidentiality" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Vertraulichkeit von Informationen im gesamten Systems erhöht.",
            ),
        ),
        "Statische Analyse für wichtige serverseitige Bereiche" => array(
            "risk" => "Wichtige Teile der serverseitigen Webanwendung enthalten Schwachstellen in der Implementierung.",
            "measure" => "Es wird eine statische Analyse, in Form von String Matching Algorithmen und/oder Datenflussanalysen, für wichtige Teile der serverseitigen Webanwendung durchgeführt. Die statische(n) Analyse(n) wird automatisiert durchgeführt und nach Möglichkeit in die Entwicklungsumgebung integriert.",
            "hardnessOfImplementation" => array(
                "knowledge" => 2,
                "time" => 2,
                "resources" => 1
            ),
            "usefulness" => 4,
            "level" => 2,
            "implementation" => "eslint, FindSecurityBugs, jsprime",
            "dependsOn" => array("Definierter Erzeugungs-Prozess"),
            "securityProperties" => array(
                "availability" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Verfügbarkeit von Informationen im gesamten Systems erhöht.",
                "integrity" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Integrität von Informationen im gesamten Systems erhöht.",
                "confidentiality" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Vertraulichkeit von Informationen im gesamten Systems erhöht.",
            ),
        ),
        "Statische Analyse für wichtige klientenseitige Bereiche" => array(
            "risk" => "Wichtige Teile der klientenseitigen Webanwendung enthalten Schwachstellen in der Implementierung.",
            "measure" => "Es wird eine statische Analyse, in Form von String Matching Algorithmen und/oder Datenflussanalysen, für wichtige Teile der klientenseitigen Webanwendung durchgeführt.",
            "hardnessOfImplementation" => array(
                "knowledge" => 2,
                "time" => 2,
                "resources" => 1
            ),
            "usefulness" => 3,
            "level" => 3,
            "implementation" => "eslint, FindSecurityBugs, jsprime",
            "dependsOn" => array("Definierter Erzeugungs-Prozess"),
            "securityProperties" => array(
                "availability" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Verfügbarkeit von Informationen im gesamten Systems erhöht.",
                "integrity" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Integrität von Informationen im gesamten Systems erhöht.",
                "confidentiality" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Vertraulichkeit von Informationen im gesamten Systems erhöht.",
            ),
        ),
        "Statische Analyse für alle Bereiche" => array(
            "risk" => "Teile der Webanwendung enthalten Schwachstellen in der Implementierung.",
            "measure" => "Es wird eine statische Analyse, in Form von String Matching Algorithmen und/oder Datenflussanalysen, für alle Bereiche der serverseitigen und klientenseitigen Webanwendung durchgeführt. Externe Bibliotheken werden nicht geprüft.",
            "hardnessOfImplementation" => array(
                "knowledge" => 2,
                "time" => 2,
                "resources" => 1
            ),
            "usefulness" => 4,
            "level" => 4,
            "implementation" => "eslint, FindSecurityBugs, jsprime",
            "dependsOn" => array("Statische Analyse für wichtige klientenseitige Bereiche", "Statische Analyse für wichtige serverseitige Bereiche"),
            "securityProperties" => array(
                "availability" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Verfügbarkeit von Informationen im gesamten Systems erhöht.",
                "integrity" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Integrität von Informationen im gesamten Systems erhöht.",
                "confidentiality" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Vertraulichkeit von Informationen im gesamten Systems erhöht.",
            ),
        ),
        "Statische Analyse für Bibliotheken" => array(
            "risk" => "Von der Webanwendung genutzt Bibliotheken enthalten unbekannte Schwachstellen in der Implementierung.",
            "measure" => "Es wird eine statische Analyse, in Form von String Matching Algorithmen und/oder Datenflussanalysen, für serverseitige und klientenseitige Bibliotheken durchgeführt.",
            "hardnessOfImplementation" => array(
                "knowledge" => 2,
                "time" => 4,
                "resources" => 2
            ),
            "usefulness" => 3,
            "level" => 4,
            "dependsOn" => array("Statische Analyse für wichtige klientenseitige Bereiche", "Statische Analyse für wichtige serverseitige Bereiche"),
            "securityProperties" => array(
                "availability" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Verfügbarkeit von Informationen im gesamten Systems erhöht.",
                "integrity" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Integrität von Informationen im gesamten Systems erhöht.",
                "confidentiality" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Vertraulichkeit von Informationen im gesamten Systems erhöht.",
            ),
        ),
        "Stilanalyse" => array(
            "risk" => "Durch falsche Einrückung werden Schwachstellen eingeführt.",
            "measure" => "Durch Überprüfung von Programmkonventionen (Style Guides) ist sichergestellt, dass diese eingehalten werden.",
            "hardnessOfImplementation" => array(
                "knowledge" => 1,
                "time" => 1,
                "resources" => 1
            ),
            "usefulness" => 1,
            "level" => 4,
            "implementation" => "PMD",
            "securityProperties" => array(
                "availability" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Verfügbarkeit von Informationen im gesamten Systems erhöht.",
                "integrity" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Integrität von Informationen im gesamten Systems erhöht.",
                "confidentiality" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Vertraulichkeit von Informationen im gesamten Systems erhöht.",
            ),
        ),
    ),
    "Test-Intensität" => array(
        "Standardeinstellungen für Test-Intensität" => array(
            "risk" => "Durch Zeitdruck und Unwissenheit werden falsche Annahmen für die Intensität getroffen.",
            "measure" => "Es ist die Standardeinstellungen für die Intensität von Werkzeugen genutzt.",
            "hardnessOfImplementation" => array(
                "knowledge" => 1,
                "time" => 1,
                "resources" => 1
            ),
            "usefulness" => 1,
            "level" => 1,
        ),
        "Deaktivierung unnötiger Prüfungen" => array(
            "risk" => "Prüfungen nehmen stark Ressourcen in Anspruch.",
            "measure" => "Unnötige Prüfungen sind deaktiviert. Benutzt eine Webanwendung die Mongo-Datenbank, kann ggf. auf eine SQL-Injection-Prüfung verzichtet werden.",
            "hardnessOfImplementation" => array(
                "knowledge" => 2,
                "time" => 3,
                "resources" => 1
            ),
            "usefulness" => 1,
            "level" => 2
        ),
        "Angepasste Test-Intensität" => array(
            "risk" => "Scans führen zu viele oder zu wenig Scans für unterschiedliche Schwachstellen durch.",
            "measure" => "Die Test-Intensität ist angepasst.",
            "hardnessOfImplementation" => array(
                "knowledge" => 3,
                "time" => 3,
                "resources" => 3
            ),
            "usefulness" => 2,
            "level" => 3,
            "securityProperties" => array(
                "availability" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Verfügbarkeit von Informationen im gesamten Systems erhöht.",
                "integrity" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Integrität von Informationen im gesamten Systems erhöht.",
                "confidentiality" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Vertraulichkeit von Informationen im gesamten Systems erhöht.",
            ),
        ),
        "Test-intensität ist hoch eingestellt" => array(
            "risk" => "Durch zu niedriger Scan-Intensität werden Schwachstellen nicht aufgedeckt.",
            "measure" => "Möglichst alle Schwachstellen-Tests werden periodisch mit hoher Test-Intensität durchgeführt.",
            "hardnessOfImplementation" => array(
                "knowledge" => 3,
                "time" => 3,
                "resources" => 5
            ),
            "usefulness" => 3,
            "level" => 4,
            "securityProperties" => array(
                "availability" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Verfügbarkeit von Informationen im gesamten Systems erhöht.",
                "integrity" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Integrität von Informationen im gesamten Systems erhöht.",
                "confidentiality" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Vertraulichkeit von Informationen im gesamten Systems erhöht.",
            ),
        ),
    ),
    "Konsolidierung" => array(
        "Behandlung kritischer Alarme" => array(
            "risk" => "Mangelhafte Auswertung der erfolgten Sicherheitsprüfungen.",
            "measure" => "Akzeptanzkretieren für gefundene Schwachstellen sind definiert. Empfehlung ist hier nur als kritisch eingestufte Schwachstellen/Alarme zu behandeln. Sofern die genutzten Werkzeuge es anbieten, kann auch das Vertrauen (Englisch Confidence) mit zur Einstufung herangezogen werden. Entsprechend wird die Erzeugung markiert oder gestoppt, wenn Schwachstellen mit einer Sicherheitseinstufung über der definierten Akzeptanz gefunden werden.",
            "hardnessOfImplementation" => array(
                "knowledge" => 1,
                "time" => 1,
                "resources" => 1
            ),
            "usefulness" => 4,
            "level" => 1,
            "securityProperties" => array(
                "availability" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Verfügbarkeit von Informationen im gesamten Systems erhöht.",
                "integrity" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Integrität von Informationen im gesamten Systems erhöht.",
                "confidentiality" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Vertraulichkeit von Informationen im gesamten Systems erhöht.",
            ),
        ),
        "Einfache Falsch-Positiv-Behandlung" => array(
            "risk" => "Aufgrund von mehrfach falsch positiv gemeldeten Schwachstellen werden neue Warnungen ignoriert.",
            "measure" => "Falsch positiv gemeldete Schwachstellen werden, auf Basis von Werkzeugen, markiert und bei der nächsten Prüfung nicht mehr gemeldet.",
            "hardnessOfImplementation" => array(
                "knowledge" => 1,
                "time" => 1,
                "resources" => 1
            ),
            "usefulness" => 4,
            "level" => 1,
            "implementation" => "",
        ),
        "Aggregation von Alarmen" => array(
            "risk" => "Die Wartung von Alarmen und falsch Positiven in unterschiedlichen Werkzeugen und Definitionen erhöht den Aufwand stark.",
            "measure" => "Aggregation von Alarmen, dabei werden auch doppelte Alarme nach Möglichkeit zusammengeführt.",
            "hardnessOfImplementation" => array(
                "knowledge" => 3,
                "time" => 3,
                "resources" => 2
            ),
            "usefulness" => 2,
            "level" => 4,
        ),
        "Behandlung von mittelschweren Alarmen" => array(
            "risk" => "Mittelschwere Alarme werden nicht beachtet.",
            "measure" => "Akzeptanzkretieren für gefundene Schwachstellen sind definiert. Empfehlung ist mittelschwere Meldungen ebenfalls zu behandeln.",
            "hardnessOfImplementation" => array(
                "knowledge" => 2,
                "time" => 2,
                "resources" => 1
            ),
            "usefulness" => 3,
            "level" => 3,
            "comment" => "Falsch Positiv-Sortierung ist Zeitaufwendig.",
            "securityProperties" => array(
                "availability" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Verfügbarkeit von Informationen im gesamten Systems erhöht.",
                "integrity" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Integrität von Informationen im gesamten Systems erhöht.",
                "confidentiality" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Vertraulichkeit von Informationen im gesamten Systems erhöht.",
            ),
        ),
        "Behandlung von allen Alarmen" => array(
            "risk" => "Alarme mit Schwere 'Einfach' werden nicht beachtet.",
            "measure" => "Akzeptanzkretieren für gefundene Schwachstellen sind definiert. Empfehlung ist Meldungen mit der Schwere 'Einfach' ebenfalls zu behandeln.",
            "hardnessOfImplementation" => array(
                "knowledge" => 3,
                "time" => 2,
                "resources" => 1
            ),
            "usefulness" => 2,
            "level" => 4,
            "securityProperties" => array(
                "availability" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Verfügbarkeit von Informationen im gesamten Systems erhöht.",
                "integrity" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Integrität von Informationen im gesamten Systems erhöht.",
                "confidentiality" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Vertraulichkeit von Informationen im gesamten Systems erhöht.",
            ),
        ),
        "Reproduzierbare Alarme" => array(
            "risk" => "Alarme können von Entwicklern / System-Adminstratoren ggf. nur schwer nachvollzogen werden.",
            "measure" => "Alarme enthalten den Ablauf der Aktionen um die gemeldete Schwachstelle einfacher reproduzieren zu können.",
            "hardnessOfImplementation" => array(
                "knowledge" => 3,
                "time" => 2,
                "resources" => 2
            ),
            "usefulness" => 2,
            "level" => 4,
            "securityProperties" => array(
                "availability" => "Durch nachhaltige Behebung von Schwachstellen kann die Verfügbarkeit von Informationen im gesamten Systems erhöht werden.",
                "integrity" => "Durch nachhaltige Behebung von Schwachstellen kann die Integrität von Informationen im gesamten Systems erhöht werden.",
                "confidentiality" => "Durch nachhaltige Behebung von Schwachstellen kann die Vertraulichkeit von Informationen im gesamten Systems erhöht werden.",
            ),
            "implementation" => "ZEST"
        ),
        "Alarme adressieren Teams" => array(
            "risk" => "Jedes Team muss jeden Alarm prüfen, so kann Frust entstehen.",
            "measure" => "Alarme werden Teams zugewiesen, so dass keine Ressourcen verschwendet werden.",
            "hardnessOfImplementation" => array(
                "knowledge" => 2,
                "time" => 2,
                "resources" => 1
            ),
            "usefulness" => 2,
            "level" => 3,
            "securityProperties" => array(
                "availability" => "Durch freie Ressourcen kann die Verfügbarkeit von Informationen im gesamten Systems erhöht werden.",
                "integrity" => "Durch freie Ressourcen kann die Integrität von Informationen im gesamten Systems erhöht werden.",
                "confidentiality" => "Durch freie Ressourcen kann die Vertraulichkeit von Informationen im gesamten Systems erhöht werden.",
            ),
            "implementation" => "Bei SAST: Serverseitige/klientenseitige Teams können einfach erfasst werden. Bei Mikroservice-Architektur können einzelne Mikroservices i.d.R. Teams zugewiesen werden. Bei DAST: Schwachstellen sind klassifiziert und können serverseitigen und klientenseitigen Teams zugewiesen werden."
        ),
        "Alarme sind einfach visualisiert" => array(
            "risk" => "Es ist unklar, wie viele Alarme im Monat entstehen.",
            "measure" => "Alarme werden einach visualisiert um einfache Trendanalyse durchführen zu können.",
            "hardnessOfImplementation" => array(
                "knowledge" => 2,
                "time" => 2,
                "resources" => 1
            ),
            "usefulness" => 3,
            "level" => 2,
            "dependsOn" => array("Visualisierte Metriken")
        ),
        "Alarme sind erweitert visualisiert" => array(
            "risk" => "Aufgrund der einfachen Visualisierung von Alarmen sind zusammenhänge nicht auf den ersten Blick erkennbar.",
            "measure" => "Alarme werden als Metrik erfasst visualisiert.",
            "hardnessOfImplementation" => array(
                "knowledge" => 2,
                "time" => 4,
                "resources" => 1
            ),
            "usefulness" => 2,
            "level" => 4,
            "dependsOn" => array("Visualisierte Metriken")
        ),
    ),
    "Anwendungstest" => array(
        "Modultests mit Sicherheitsbezug" => array(
            "risk" => "Schwachstellen sind unbeachbsichtigt Implementiert.",
            "measure" => "Integration von sicherheitsrelevanten Modultests für geschäftskritische Bereiche. Dadurch können Schwachstellen wie fehlende Authentifizierung erkannt werden.",
            "hardnessOfImplementation" => array(
                "knowledge" => 3,
                "time" => 4,
                "resources" => 2
            ),
            "usefulness" => 3,
            "level" => 1,
            "comment" => "Die Integration von Modultests findet schon während der Entwicklung statt, es wird auf Schwachstellen in Sub-Routinen, Funktionen, Module, Bibliotheken usw. geprüft.",
            "implementation" => "Unit-Tests",
            "securityProperties" => array(
                "availability" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Verfügbarkeit von Informationen im gesamten Systems erhöht.",
                "integrity" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Integrität von Informationen im gesamten Systems erhöht.",
                "confidentiality" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Vertraulichkeit von Informationen im gesamten Systems erhöht.",
            ),
            "implementation" => "JUnit"
        ),
        "Integrationstests mit Sicherheitsbezug" => array(
            "risk" => "In der Anwendung sind grundlegende Fehler bei der Benutzung eines Frameworks möglich, ohne das diese erkannt werden.",
            "measure" => "Implementierung grundlegender Sicherheitstests als und Integrationstests. Beispielsweise kann die Authentifizierung und Autorisierung (Zugriffskontrolle) geprüft werden.",
            "hardnessOfImplementation" => array(
                "knowledge" => 3,
                "time" => 4,
                "resources" => 2
            ),
            "usefulness" => 2,
            "level" => 2,
            "securityProperties" => array(
                "availability" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Verfügbarkeit von Informationen im gesamten Systems erhöht.",
                "integrity" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Integrität von Informationen im gesamten Systems erhöht.",
                "confidentiality" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Vertraulichkeit von Informationen im gesamten Systems erhöht.",
            ),
            "implementation" => "HttpUnit"
        ),
        "Akzeptanztests mit Sicherheitsbezug" => array(
            "risk" => "In der Anwendung sind grundlegende Fehler bei der Benutzung eines Frameworks möglich, ohne das diese erkannt werden.",
            "measure" => "Implementierung grundlegender Sicherheitstests als Akzeptanztests. Beispielsweise können sicherheitsrelevante Funktionen in JavaScript geprüft werden.",
            "hardnessOfImplementation" => array(
                "knowledge" => 3,
                "time" => 4,
                "resources" => 2
            ),
            "usefulness" => 1,
            "level" => 3,
            "securityProperties" => array(
                "availability" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Verfügbarkeit von Informationen im gesamten Systems erhöht.",
                "integrity" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Integrität von Informationen im gesamten Systems erhöht.",
                "confidentiality" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Vertraulichkeit von Informationen im gesamten Systems erhöht.",
            ),
            "implementation" => "HtmlUnit, Selenium"
        ),
        "Sehr hoch abdeckende Komponenten-, Integrations- und Akzeptanztests mit Sicherheitsbezug" => array(
            "risk" => "Es sind nicht alle Teile der Anwendung mit Sicherheitsprüfungen versehen.",
            "measure" => "Implementierung grundlegender Sicherheitstests als Integrations- und/oder Akzeptanztests für alle Teile (auch Bibliotheken) der Anwendung.",
            "hardnessOfImplementation" => array(
                "knowledge" => 5,
                "time" => 5,
                "resources" => 3
            ),
            "usefulness" => 3,
            "level" => 4,
            "securityProperties" => array(
                "availability" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Verfügbarkeit von Informationen im gesamten Systems erhöht.",
                "integrity" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Integrität von Informationen im gesamten Systems erhöht.",
                "confidentiality" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Vertraulichkeit von Informationen im gesamten Systems erhöht.",
            ),
        ),
        "Post-Verteilungs-Prüfung" => array(
            "risk" => "Durch eine Verteilung auf die Produktionsumgebung können Mikroservices gestört sein, z.B. wenn die Datenbank nicht erreicht werden kann.",
            "measure" => "Integrationstests prüfen die Produktionsumgebung um sicher zu stellen, dass Funktionen, z.B. bereitgestellt durch Mikroservices oder externe Dienste, erreichbar sind.",
            "hardnessOfImplementation" => array(
                "knowledge" => 2,
                "time" => 2,
                "resources" => 2
            ),
            "usefulness" => 2,
            "level" => 4,
            "implementation" => "",
            "dependsOn" => array("Definierter Verteilungs-Prozess"),
            "securityProperties" => array(
                "availability" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Verfügbarkeit von Informationen im gesamten Systems erhöht.",
                "integrity" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Integrität von Informationen im gesamten Systems erhöht.",
                "confidentiality" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Vertraulichkeit von Informationen im gesamten Systems erhöht.",
            ),
        ),
    ),
    "Infrastrukturtest" => array(
        "Test auf System-Aktualisierungen" => array(
            "risk" => "Das Betriebssystem oder seine Dienste enthalten bekannte Schwachstellen.",
            "measure" => "Prüfung auf Aktualisierungen und bei veralteter Software Meldung an einen Verantwortlichen, welcher die Patches einspielt.",
            "hardnessOfImplementation" => array(
                "knowledge" => 1,
                "time" => 1,
                "resources" => 1
            ),
            "usefulness" => 5,
            "level" => 1,
            "securityProperties" => array(
                "integrity" => "Durch Prüfung und Einspielen von System-Aktualisierungen ist die Wahrscheinlichkeit, dass System-Komponenten die Integrität von Informationen beeinträchtigen verringert.",
                "availability" => "Durch Prüfung und Einspielen von System-Aktualisierungen ist die Wahrscheinlichkeit, dass System-Komponenten die Verfügbarkeit beeinträchtigen verringert.",
                "confidentiality" => "Durch Prüfung und Einspielen von System-Aktualisierungen ist die Wahrscheinlichkeit, dass System-Komponenten vertrauliche Informationen preisgeben verringert.",
            ),
        ),
        "Prüfung der Konfiguration von virtuellen Umgebungen" => array(
            "risk" => "Virtuelle Umgebungen birgen die Gefahr sicherheitskritisch Konfiguriert zu sein.",
            "measure" => "Mit Hilfe von Werkzeugen wird die Konfiguration von virtuellen Umgebungen geprüft.",
            "hardnessOfImplementation" => array(
                "knowledge" => 2,
                "time" => 2,
                "resources" => 1
            ),
            "usefulness" => 4,
            "level" => 2,
            "securityProperties" => array(
                "availability" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Verfügbarkeit von Informationen im gesamten Systems erhöht.",
                "integrity" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Integrität von Informationen im gesamten Systems erhöht.",
                "confidentiality" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Vertraulichkeit von Informationen im gesamten Systems erhöht.",
            ),
            "implementation" => "Docker Bench for Security, Docker Security Scan, openVAS"
        ),
        "Erweiterte System-Prüfung" => array(
            "risk" => "Systeme wie Firewalls können nach einer Anpassung sicherheitskritisch konfiguriert sein.",
            "measure" => "Automatische Prüfung von Infrastruktur-Systemen wie Firewalls.",
            "hardnessOfImplementation" => array(
                "knowledge" => 2,
                "time" => 2,
                "resources" => 1
            ),
            "usefulness" => 3,
            "level" => 4,
            "securityProperties" => array(
                "availability" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Verfügbarkeit von Informationen im gesamten Systems erhöht.",
                "integrity" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Integrität von Informationen im gesamten Systems erhöht.",
                "confidentiality" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Vertraulichkeit von Informationen im gesamten Systems erhöht.",
            ),
        ),
        "Lasttests" => array(
            "risk" => "Es ist unbekannt wie viele Anfragen das System bedienen kann und wie sich das System bei vielen Anfragen verhält.",
            "measure" => "Last-Tests werden periodisch ausgeführt.",
            "hardnessOfImplementation" => array(
                "knowledge" => 3,
                "time" => 2,
                "resources" => 5
            ),
            "usefulness" => 3,
            "level" => 4,
            "securityProperties" => array(
                "availability" => "Durch Erkennung und Behebung von Flaschenhälsen ist die Verfügbarkeit von Informationen im gesamten Systems erhöht.",
            ),
        ),
        "Visualisierung von System-Updates" => array(
            "risk" => "Kritische System-Updates werden nach zu langer Zeit eingespielt.",
            "measure" => "Durch Visualisierung wird die Kritikalität von Systemupdates deutlich und deshalb schneller eingespielt.",
            "hardnessOfImplementation" => array(
                "knowledge" => 2,
                "time" => 1,
                "resources" => 1
            ),
            "usefulness" => 2,
            "level" => 4,
            "securityProperties" => array(
                "availability" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Verfügbarkeit von Informationen im gesamten Systems erhöht.",
                "integrity" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Integrität von Informationen im gesamten Systems erhöht.",
                "confidentiality" => "Durch Erkennung und Behebung von Schwachstellen bevor diese in Produktion gehen ist die Vertraulichkeit von Informationen im gesamten Systems erhöht.",
            ),
        ),
        "Test auf schwache Passwörter" => array(
            "risk" => "Mitarbeiterkonten und priviligierte Benutzerkonten sind mit schwachen Passwörtern geschützt.",
            "measure" => "Automatische BruteForce-Angriffe auf Benutzer-Konten von Mitarbeitern sowie Standard-Konten wie 'administrator'.",
            "hardnessOfImplementation" => array(
                "knowledge" => 2,
                "time" => 1,
                "resources" => 1
            ),
            "usefulness" => 1,
            "level" => 3,
            "securityProperties" => array(
                "availability" => "Durch Erkennung und Ändern von schwachen Passwörtern kann die Verfügbarkeit von Informationen im gesamten Systems erhöht werden.",
                "integrity" => "Durch Erkennung und Ändern von schwachen Passwörtern kann die Integrität von Informationen im gesamten Systems erhöht werden.",
                "confidentiality" => "Durch Erkennung und Ändern von schwachen Passwörtern kann die Vertraulichkeit von Informationen im gesamten Systems erhöht werden.",
            ),
            "implementation" => "HTC Hydra"
        ),
    ),
);
