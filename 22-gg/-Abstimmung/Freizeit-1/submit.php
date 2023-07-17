<?php
// Hier können die empfangenen Umfrageantworten verarbeitet werden.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $frage1Antwort = $_POST["frage1"];
  $frage2Antwort = $_POST["frage2"];
  $frage3Antwort = $_POST["frage3"];
  $frage4Antwort = $_POST["frage4"];

  // Speichern der Umfrageantworten in einer Datenbank oder einer Datei
  // Hier ist ein einfaches Beispiel, um die Umfrageantworten in einer Textdatei zu speichern:
  $umfrageAntworten = "Gokart: $frage1Antwort\nFreiluftkino: $frage2Antwort\nVorname: $frage3Antwort\nNachname: $frage4Antwort\n";

  $datei = fopen("umfrage_antworten.txt", "a");
  fwrite($datei, $umfrageAntworten);
  fclose($datei);

  // Weiterleitung des Benutzers auf eine Bestätigungsseite oder ähnliches
  header("Location: danke.html");
}
?>
