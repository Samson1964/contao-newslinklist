# Nachrichten-Linkliste

## Version

1.0.2 vom 13.07.2016

- Fix: Unwirksamen onsubmit_callback in fields von tl_content.php entfernt

1.0.1 vom 21.03.2016

- Fix: PHP-Warnung bei nichtvorhandener Linkliste

1.0.0 vom 07.09.2014

## Verfügbare Templatevariablen

Folgende Arrays stehen zur Verfügung:

$this->link = Link zur Nachricht
$this->date = Datum der Nachricht ohne Uhrzeit im global eingestellten Format
$this->datetime = Datum der Nachricht mit Uhrzeit im global eingestellten Format
$this->unixtime = Datum der Nachricht als Zeitstempel
$this->newsHeadline = Titel der Nachricht
$this->subHeadline = Untertitel der Nachricht
$this->teaser = Teasertext der Nachricht

Darüberhinaus stehen die normalen Variablen zur Verfügung, die es in jedem Contao-Template gibt, z.B.

$this->headline
$this->hl
$this->class

**Frank Hoppe**
