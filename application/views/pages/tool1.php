<!-- CONTENT
    ================================================== -->
    <div class="container marketing">

      <!-- START THE FEATURETTES -->

      <div class="hero-unit">
        <h2 class="featurette-heading">Is my water safe to drink?</h2>
        <p class="lead">
          <?php

            $vol = $vol/1000;
            $radvol = $rad / $vol;

            if ($radvol < 10) {$jsafe = 1;} else {$jsafe = 0;}
            if ($radvol < 740) {$asafe = 1;} else {$asafe = 0;}
            if ($radvol < 7000) {$csafe = 1;} else {$csafe = 0;}
            if ($radvol < 100) {$esafe = 1;} else {$esafe = 0;} 
            
            
            if ($jsafe == 1) {
              echo "<h2>According to <b>Japanese</b> standards, your water is <b>safe</b> to drink!</h2>";
            }
            else
            {
              echo "<h2>According to <b>Japanese</b> standards, your water is <b>not safe</b> to drink!</h2>";
            }

            if ($asafe == 1) {
              echo "<h2>According to <b>American</b> standards, your water is <b>safe</b> to drink!</h2>";
            }
            else
            {
              echo "<h2>According to <b>American</b> standards, your water is <b>not safe</b> to drink!</h2>";
            }

            if ($csafe == 1) {
              echo "<h2>According to <b>Canadian</b> standards, your water is <b>safe</b> to drink!</h2>";
            }
            else
            {
              echo "<h2>According to <b>Canadian</b> standards, your water is <b>not safe</b> to drink!</h2>";
            }

            if ($esafe == 1) {
              echo "<h2>According to <b>Europian</b> standards, your water is <b>safe</b> to drink!</h2>";
            }
            else
            {
              echo "<h2>According to <b>Europian</b> standards, your water is <b>not safe</b> to drink!</h2>";
            }

          ?>
        </p>
      </div>

      <br><br><br><br>

      <!-- /END THE FEATURETTES -->