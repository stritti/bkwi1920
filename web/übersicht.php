<?php
require_once __DIR__ . '/init.php';
require_once __DIR__ . '/inc/config.inc.php';
require_once __DIR__ . '/inc/functions.inc.php';

include __DIR__ . '/templates/header.inc.php'
?>

<h1>Meine Anzeigen</h1>


<table class="table">
  <tbody>

    <tr>
      <td>Titelbild</td>
      <td>Titel</td>
      <td>Preis</td>
      <td>Gemerkt/Angesehen</td>
      <td>Erstelldatum(createdate)</td>
    </tr>
    <button type="button" class="btn btn-primary">Bearbeiten</button>
    <button type="button" class="btn btn-primary">Löschen</button>

    <tr>
      <td>Titelbild</td>
      <td>Titel</td>
      <td>Preis</td>
      <td>Gemerkt/Angesehen</td>
      <td>Erstelldatum(createdate)</td>
    </tr>
    <button type="button" class="btn btn-primary">Bearbeiten</button>
    <button type="button" class="btn btn-primary">Löschen</button>
 
  </tbody>
</table>

<?php
include __DIR__ . '/templates/footer.inc.php';
?>