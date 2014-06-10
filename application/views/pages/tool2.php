<!-- CONTENT
    ================================================== -->
    <div class="container marketing">

      <!-- START THE FEATURETTES -->

      <div class="hero-unit">
        <h2 class="featurette-heading">Is my food safe to eat?</h2>
        <p class="lead">
          <?php
            
            if ($food == 'infant'){ //japan doesn't specify between types of nuclides, so 50 for all types
                if ($nuc == 'sr90'){ //took the same values as other food (adults) since not specified
                  if ($rad < 50) {$jsafe = 1;} else {$jsafe = 0;}
                  if ($rad < 160) {$asafe = 1;} else {$asafe = 0;}
                  if ($rad < 100) {$isafe = 1;} else {$isafe = 0;}
                  if ($rad < 75) {$esafe = 1;} else {$esafe = 0;} 
                }
                else if ($nuc == 'i131'){
                  if ($rad < 50) {$jsafe = 1;} else {$jsafe = 0;}
                  if ($rad < 170) {$asafe = 1;} else {$asafe = 0;}
                  if ($rad < 100) {$isafe = 1;} else {$isafe = 0;}
                  if ($rad < 150) {$esafe = 1;} else {$esafe = 0;}
                }
                else if ($nuc == 'pu238'){
                  if ($rad < 50) {$jsafe = 1;} else {$jsafe = 0;}
                  if ($rad < 2) {$asafe = 1;} else {$asafe = 0;}
                  if ($rad < 1) {$isafe = 1;} else {$isafe = 0;}
                  if ($rad < 1) {$esafe = 1;} else {$esafe = 0;}
                }
                else { //else $nuc == cs134/other
                  if ($rad < 50) {$jsafe = 1;} else {$jsafe = 0;}
                  if ($rad < 1200) {$asafe = 1;} else {$asafe = 0;}
                  if ($rad < 1000) {$isafe = 1;} else {$isafe = 0;}
                  if ($rad < 400) {$esafe = 1;} else {$esafe = 0;}
                }
              }
            else if ($food = 'dairy'){
              if ($nuc == 'sr90'){
                  if ($rad < 50) {$jsafe = 1;} else {$jsafe = 0;}
                  if ($rad < 163) {$asafe = 1;} else {$asafe = 0;}
                  if ($rad < 100) {$isafe = 1;} else {$isafe = 0;}
                  if ($rad < 125) {$esafe = 1;} else {$esafe = 0;} 
                }
                else if ($nuc == 'i131'){ //took the same one as other food since it wasn't specified
                  if ($rad < 50) {$jsafe = 1;} else {$jsafe = 0;}
                  if ($rad < 174) {$asafe = 1;} else {$asafe = 0;}
                  if ($rad < 100) {$isafe = 1;} else {$isafe = 0;}
                  if ($rad < 500) {$esafe = 1;} else {$esafe = 0;}
                }
                else if ($nuc == 'pu238'){
                  if ($rad < 50) {$jsafe = 1;} else {$jsafe = 0;}
                  if ($rad < 2) {$asafe = 1;} else {$asafe = 0;}
                  if ($rad < 10) {$isafe = 1;} else {$isafe = 0;}
                  if ($rad < 20) {$esafe = 1;} else {$esafe = 0;}
                }
                else { //else $nuc == cs134/other
                  if ($rad < 50) {$jsafe = 1;} else {$jsafe = 0;}
                  if ($rad < 1221) {$asafe = 1;} else {$asafe = 0;}
                  if ($rad < 1000) {$isafe = 1;} else {$isafe = 0;}
                  if ($rad < 1000) {$esafe = 1;} else {$esafe = 0;}
                }
            }
            else {
              if ($nuc == 'sr90'){
                  if ($rad < 100) {$jsafe = 1;} else {$jsafe = 0;}
                  if ($rad < 160) {$asafe = 1;} else {$asafe = 0;}
                  if ($rad < 100) {$isafe = 1;} else {$isafe = 0;}
                  if ($rad < 750) {$esafe = 1;} else {$esafe = 0;} 
                }
                else if ($nuc == 'i131'){
                  if ($rad < 100) {$jsafe = 1;} else {$jsafe = 0;}
                  if ($rad < 170) {$asafe = 1;} else {$asafe = 0;}
                  if ($rad < 100) {$isafe = 1;} else {$isafe = 0;}
                  if ($rad < 2000) {$esafe = 1;} else {$esafe = 0;}
                }
                else if ($nuc == 'pu238'){
                  if ($rad < 100) {$jsafe = 1;} else {$jsafe = 0;}
                  if ($rad < 2) {$asafe = 1;} else {$asafe = 0;}
                  if ($rad < 10) {$isafe = 1;} else {$isafe = 0;}
                  if ($rad < 80) {$esafe = 1;} else {$esafe = 0;}
                }
                else { //else $nuc == cs134/other
                  if ($rad < 100) {$jsafe = 1;} else {$jsafe = 0;}
                  if ($rad < 1200) {$asafe = 1;} else {$asafe = 0;}
                  if ($rad < 1000) {$isafe = 1;} else {$isafe = 0;}
                  if ($rad < 1250) {$esafe = 1;} else {$esafe = 0;}
                }
            }

            if ($jsafe == 1) {
              echo "<h2>According to <b>Japanese</b> standards, your food is <b>safe</b> to eat!</h2>";
            }
            else{
              echo "<h2>According to <b>Japanese</b> standards, your food is <b>not safe</b> to eat!</h2>";
            }

            if ($asafe == 1) {
              echo "<h2>According to <b>American</b> standards, your food is <b>safe</b> to eat!</h2>";
            }
            else{
              echo "<h2>According to <b>American</b> standards, your food is <b>not safe</b> to eat!</h2>";
            }

            if ($isafe == 1) {
              echo "<h2>According to <b>International</b> standards, your food is <b>safe</b> to eat!</h2>";
            }
            else{
              echo "<h2>According to <b>International</b> standards, your food is <b>not safe</b> to eat!</h2>";
            }

            if ($esafe == 1) {
              echo "<h2>According to <b>Europian</b> standards, your food is <b>safe</b> to eat!</h2>";
            }
            else{
              echo "<h2>According to <b>Europian</b> standards, your food is <b>not safe</b> to eat!</h2>";
            }

          ?>
        </p>
      </div>

      <br><br><br><br>

      <!-- /END THE FEATURETTES -->