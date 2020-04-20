<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "dc_wiki";

    $con = mysqli_connect("127.0.0.1", $username, $password, $dbname);
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }

    mysqli_select_db($con,"bio");
    $sql = "SELECT *  
            FROM bio
              INNER JOIN publish 
                ON bio.id = publish.id = '1'";
    $result = mysqli_query($con,$sql);
?>

<!-- Modal header -->
<div id="profile" class="modal-header">
  <h1 class="modal-title" style="color: orange">Aquaman</h1>
</div>
<!-- Modal body -->
<div id="ModalBody" class="modal-body">
  <div class="container">
    <div class="row">
      <img class="img-fluid rounded mx-auto d-block" src="images/modal_character/aquaman.png" alt="Aquaman">
      
      <?php
        while($row = mysqli_fetch_array($result)) {
        echo '<div class="ml-auto table-responsive">';
          echo '<table class="table table-bordered">';

            echo '<thead>';
              echo '<th colspan="2" class="table-head">'.'In-story Information'.'</th>';
            echo '</thead>';

            echo '<tbody>';
              echo '<tr>';
                echo '<th>'.'Real Name'.'</th>';
                echo '<td>'.$row['realname'].'</td>';
              echo '</tr>';
              echo '<tr>';
                echo '<th>'.'Alias'.'</th>';
                echo '<td>'.$row['alias'].'</td>';
              echo '</tr>';
              echo '<tr>';
                echo '<th>'.'Identity'.'</th>';
                echo '<td>'.$row['identity'].'</td>';
              echo '</tr>';
              echo '<tr>';
                echo '<th>'.'Gender'.'</th>';
                echo '<td>'.$row['gender'].'</td>';
              echo '</tr>';
              echo '<tr>';
                echo '<th>'.'Birthplace'.'</th>';
                echo '<td>'.$row['birthplace'].'</td>';
              echo '</tr>';
              echo '<tr>';
                echo '<th>'.'Race'.'</th>';
                echo '<td>'.$row['race'].'</td>';
              echo '</tr>';
              echo '<tr>';
                echo '<th>'.'Citizenship'.'</th>';
                echo '<td>'.$row['citizenship'].'</td>';
              echo '</tr>';
              echo '<tr>';
                echo '<th>'.'Marital Status'.'</th>';
                echo '<td>'.$row['marital_status'].'</td>';
              echo '</tr>';
              echo '<tr>';
                echo '<th>'.'Affiliation'.'</th>';
                echo '<td>'.$row['affiliation'].'</td>';
              echo '</tr>';
              echo '<tr>';
                echo '<th>'.'Base Of Operations'.'</th>';
                echo '<td>'.$row['base_of_operation'].'</td>';
              echo '</tr>';
              echo '<tr>';
                echo '<th>'.'Universe'.'</th>';
                echo '<td>'.$row['universe'].'</td>';
              echo '</tr>';
              echo '<tr>';
                echo '<th>'.'Abilities'.'</th>';
                echo '<td>'.$row['abilities'].'</td>';
              echo '</tr>';                             
            echo '</tbody>';

            echo '<thead>';
              echo '<th colspan="2" class="table-head">'.'Publication Information'.'</th>';
            echo '</thead>';

            echo '<tbody>';
              echo '<tr>';
                echo '<th>'.'Creators'.'</th>';
                echo '<td>'.$row['creators'].'</td>';
              echo '</tr>';
              echo '<tr>';
                echo '<th>'.'First Appearance'.'</th>';
                echo '<td>'.$row['first_appearance'].'</td>';
              echo '</tr>';
            echo '</tbody>';

          echo '</table>';
        echo '</div>';
        }
        mysqli_close($con);
      ?>
    </div>
  </div>
</div>
<!-- Modal footer -->
<div class="modal-footer">
  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
</div>