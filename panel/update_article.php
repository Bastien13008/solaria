<?php
  
  $pdo = new PDO('mysql:host=localhost;dbname=solaria_bdd', 'solaria', 'Cjv_j7197');
  $stmt = $pdo->prepare('SELECT * FROM Article ORDER BY View DESC');
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
                    <td> '.$reponsepay['Title'].'</td>
                    <td> '.$reponsepay['date'].'</td>
                    <td> '.$reponsepay['View'].'</td>


                    ';
                

                    echo'
                    <td>
                    <a href="deletearticle.php?id='.$reponsepay['ID'].'">
                    <button type="button" class="btn btn-danger btn-icon-text">
                    <i class="mdi mdi-delete-forever  btn-icon-prepend" ></i> Supprimer </button>   
                    </a>                 
                    </td>

                </tr>';
  }
  ?>