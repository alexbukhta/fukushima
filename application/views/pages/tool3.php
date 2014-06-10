<!-- CONTENT
    ================================================== -->
    <div class="container marketing">

      <!-- START THE FEATURETTES -->

      <div class="hero-unit">
        <h2 class="featurette-heading">Radiation Unit Conversion</h2>
        <p class="lead">
          <?php 

          //Account for subunits
          $count = 0;
          if ($sub == 'nano'){
            $count = -9;
          }
          if ($sub == 'micro'){
            $count = -6;
          }
          if ($sub == 'milli'){
            $count = -3;
          }
          if ($sub == 'kilo'){
            $count = 3;
          }
          if ($sub == 'mega'){
            $count = 6;
          }   

          //Do the actual conversion
          if ($units == 'bq'){
            $rad2 = $rad*2.7027027;
            $count = $count - 11;
          }
          else if ($units == 'cu'){
            $rad2 = $rad/2.7027027;
            $count = $count +11;
          }
          else if ($units == 'gy'){
            $rad2 = $rad*100;
          }
          else if ($units == 'ra'){
            $rad2 = $rad/100;
          }
          else if ($units == 'sv'){
            $rad2 = $rad*100;
          }
          else if ($units == 'rem'){
            $rad2 = $rad/100;
          }  

          //Clean
          if ($rad >= 0){
            while ($rad2 >= 10){
              $rad2 = $rad2/10;
              $count++;
            }
          }
          if ($rad2 <= floatval(1)){
            while ($rad2 < 1){
              $rad2 = $rad2*10;
              $count = $count - 1;
            }
          }

          //Figure out output
          if ($output == 'nano'){
            $count = $count+9;
          }
          if ($output == 'micro'){
            $count = $count+6;
          }
          if ($output == 'milli'){
            $count = $count+3;
          }
          if ($output == 'kilo'){
            $count = $count-3;
          }
          if ($output == 'mega'){
            $count = $count-6;
          }

          //Print Results
          if ($units == 'bq'){
            echo "<h2>".$rad ." ".$sub. " becquerels is equivalent to " . $rad2 . " *10^".$count." ".$output." curies</h2>";
            echo "<h2>This is a measure of radioactivity</h2>";
          }
          else if ($units == 'cu'){
            echo "<h2>".$rad ." ".$sub. " curies is equivalent to " . $rad2 . " *10^".$count." ".$output." becquerels</h2>";
            echo "<h2>This is a measure of radioactivity</h2>";
          }
          else if ($units == 'gy'){
            echo "<h2>".$rad ." ".$sub. " grays is equivalent to " . $rad2 . " *10^".$count." ".$output." rads</h2>";
            echo "<h2>This is a measure of absorbed dose</h2>";
          }
          else if ($units == 'ra'){
            echo "<h2>".$rad ." ".$sub. " rads is equivalent to " . $rad2 . " *10^".$count." ".$output." grays</h2>";
            echo "<h2>This is a measure of absorbed dose</h2>";
          }
          else if ($units == 'sv'){
            echo "<h2>".$rad ." ".$sub. " sieverts is equivalent to " . $rad2 . " *10^".$count." ".$output." rems</h2>";
            echo "<h2>This is a measure of dose equivalence</h2>";
          }
          else if ($units == 'rem'){
            echo "<h2>".$rad ." ".$sub. " rems is equivalent to " . $rad2 . " *10^".$count." ".$output." sieverts</h2>";
            echo "<h2>This is a measure of dose equivalence</h2>";
          } 

          ?>
        </p>
        <p><a href="/tool3">Try another conversion here!</a></p>
      </div>
      <br><br><br><br>
      <!-- /END THE FEATURETTES -->