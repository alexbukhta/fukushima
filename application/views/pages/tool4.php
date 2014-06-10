<!-- CONTENT
    ================================================== -->
    <div class="container marketing">

      <!-- START THE FEATURETTES -->

      <div class="hero-unit">
        <h2 class="featurette-heading">Personal Radiation Dosage Estimator</h2>
        <p class="lead">
          <?php 

          //Radiation for radon + terrestrial + ingestion
          $totalrad = 1.26 + .48 + .29;

          //Radiation addition for nuc/coal/stone/crown/watch
          $totalrad = $totalrad + $nuc50 + $coal50 + $crown + $watch;

          //Radiation addition for plane/luggage/smoke/cig
          $plane = $plane * 0.01;
          $luggage = $luggage * 0.00002;
          $smoke = $smoke * .00008;
          $cig = $cig * 0.018;
          $totalrad = $totalrad + $plane + $luggage + $smoke + $cig;

          //Radiation addition for xray
          $xraynew = 0;
          if (is_array($xray)){
            foreach ($xray as $var){
              $xraynew = $xraynew + $var;
            }
          }
          else{
            $xraynew = $xray;
          }
          $totalrad = $totalrad + $xraynew;

          //Radation addition for ct
          $ctnew = 0;
          if (is_array($ct)){
            foreach ($ct as $var){
              $ctnew = $ctnew + $var;
            }
          }
          else{
            $ctnew = $ct;
          }
          $totalrad = $totalrad + $ctnew;

          //Total radiation now found

          echo "Your estimated total radiation dosage = ".$totalrad." mSv."

          ?>
        </p>
        <p><a href="/tool4">Re-estimate a personal dosage!</a></p>
      </div>
      <br><br><br><br>
      <!-- /END THE FEATURETTES -->