<?php
require_once('Person.php');

class PersonView {
  public static function displayPersonList($pl) {
    $ret = '<table>
    <tr><th>Id</th>
    <th>Titre</th>
    <th>Nom</th>
    <th>Prénom</th></tr>';

    foreach ($pl as $p) {
      $ret .= '<tr>
        <td>'.$p->getIdentifiant().'</td>
        <td>'.$p->getTitre().'</td>
        <td>'.$p->getNom().'</td>
        <td>'.$p->getPrenom().'</td>
        </tr>';
    }
    $ret .= '</table>';
    return $ret;
  }
}
?>