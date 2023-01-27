
  <?php
  
  $pdo = new PDO('mysql:host=localhost;dbname=solaria_bdd', 'solaria', 'Cjv_j7197');
  $stmt = $pdo->prepare('SELECT * FROM Payment ORDER BY Date DESC');
  $stmt->execute();
  
  while ($reponsepay = $stmt->fetch(PDO::FETCH_ASSOC)) {
      echo '
                  <tr>
                    <td>
                      <div class="form-check form-check-muted m-0">
                        <label class="form-check-label">
                        </label>
                      </div>
                    </td>
                    <td>
                    <img src="https://mc-heads.net/avatar/'. $reponsepay['pseudo'].'/45" alt="image" />
                    <span class="pl-2">'.$reponsepay['pseudo'].'</span>
                    </td>
                    <td> '.$reponsepay['id'].' </td>
                    <td> '.$reponsepay['Prix'].'$ </td>
                    <td> '.$reponsepay['Solution'].' </td>
                    <td> '.$reponsepay['Date'].' </td>
                    <td>
                    <label class="badge badge-success">Accepter</label>
                    </td>
                </tr>';
  }
  ?>