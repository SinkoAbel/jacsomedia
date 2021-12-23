
<?php


    if ($_SESSION['user_logged_in'] != 'true')
    {


        echo "<p class='container' style='color: deeppink; text-align: center; font-weight: bold; margin-top: 20px'>You're not authorized to use this page.<br>Please log in!</p>";


        echo '<meta http-equiv="refresh" content="3, url=index.php">';
        exit();
    }
    else
    {

        $l = mysqli_connect('localhost', 'root', '', 'speaker_portal');

        $animal_query = mysqli_query($l,"SELECT * FROM `animals` ORDER BY `orderNo`");
        $expression_query = mysqli_query($l, "SELECT * FROM `expressions` ORDER BY `orderNo`");

        echo '<div class="container pick_and_plack_game">
                  <div class="game_box">
                      <div class="row">
                          
                          <div class="col-md-6 sortable">';
                              while($animals = mysqli_fetch_array($animal_query))
                              {
                                  echo'
                                  <div class="list_item purple" id="'.$animals['id'].'">'.$animals['item'].'</div>';
                              }
                          echo'
                          </div>      
                          
                          <div class="col-md-6 sortable">';
                              while($expression = mysqli_fetch_array($expression_query))
                              {
                                  echo'
                                  <div class="list_item pink" id="'.$expression['id'].'">'.$expression['words'].'</div>';
                              }
                              echo'
                          </div>  
                      </div>    
                  </div>
              </div>
              
              <div class="container success_message" id="success_message"></div>';


        mysqli_close($l);


        echo '<script type="text/javascript" src="modify.js"></script>';



        echo '<br><br><br><br>';
    }
?>





