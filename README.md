# PhpProjekt

---

## Welches Tier bist du? Ein PHP-Quiz

**Ein einfaches interaktives PHP-CLI-Quiz, das ermittelt, welches Tier am besten zu deiner Persönlichkeit passt.**

Das Projekt nutzt benutzerdefinierte Funktionen, Rekursion, Eingabevalidierung mit regulären Ausdrücken, assoziative Arrays und Bewertungslogik, um ein unterhaltsames und personalisiertes Ergebnis zu erzielen.

## Funktionen

- [x] Interaktives Kommandozeilen-Quiz
- [x] Eingabevalidierung mit regulären Ausdrücken
- [x] Rekursion für sichere Benutzereingaben
- [x] Klare Verwendung von UDFs (benutzerdefinierten Funktionen)
- [x] Assoziative Arrays für die Zuordnung von Fragen und Antworten
- [x] Punktebasierte Ergebnisauswertung
- [x] Freundliche und lesbare Ausgabe

## So funktioniert es

Das Skript stellt eine Reihe von Multiple-Choice-Fragen.  
Jede Option entspricht einem bestimmten Tier.  
Ihre ausgewählten Antworten erhöhen die Punktzahl dieses Tieres.  
Am Ende ermittelt das Skript das Tier mit der höchsten Punktzahl und gibt Ihr Ergebnis aus.  

### Wichtige Funktionen

`get_input(string $prompt): string`
Fordert den Benutzer zur Eingabe auf und stellt sicher, dass diese nicht leer ist.  
Verwendet Rekursion und String-Typ-Hinweise.  

`ask_question(string $question, array $choices): string`
Zeigt eine Frage an, stellt mithilfe von regulären Ausdrücken sicher, dass die Eingabe aus einem gültigen Buchstaben (A–E) besteht, und gibt die validierte Antwort zurück.


`determine_animal(array $score): string`
Sortiert das Punkte-Array und ordnet das beste Ergebnis einer für Menschen verständlichen Meldung zu.

## Ausführen des Quiz

**Anforderungen:**
PHP 8.0+  
CLI-Zugriff (Terminal, PowerShell usw.)  

*Führen Sie das Skript aus:*  
`php quiz.php`  
Sie werden direkt in Ihrem Terminal durch die Fragen geführt.


### Entwicklungsnotizen

**Dieses Projekt entstand während des Übens folgender Themen:**


- PHP-Eingabe-/Ausgabeverarbeitung
- Reguläre Ausdrücke
- Iterations- und Auswahlkonstrukte
- Mehrdimensionale Arrays
- Grundlegende Bewertungsalgorithmen
- Saubere und lesbare Codestruktur


**Aufgewendete Zeit:**

- Recherche und Planung: ~1,5 Stunden
- Verständnis der Funktionen: ~0,5 Stunden
- Programmierung: ~4 Stunden
- Testen und Debuggen: ~2 Stunden

---

## Autor

Bebe Egerton
bebeegerton14@gmail.com

