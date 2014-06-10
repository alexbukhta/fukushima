<!-- CONTENT
    ================================================== -->
    <div class="container marketing">

      <!-- START THE FEATURETTES -->

      <div class="hero-unit">
        <h2 class="featurette-heading">Radiation Unit Conversion</h2>
        
        <p> Description of rad unit conversion product goes here</p>
        <p class="lead">
          <?php echo validation_errors(); ?>

          <form action="tool3" method="post">

            <hr>
            <h3>Enter the amount of radiation you wish to convert: </h3>
              <select name = 'sub'>
                <option value="nano">Nano</option>
                <option value="micro">Micro</option>
                <option value="milli">Milli</option>
                <option value="" selected="selected"></option>
                <option value="kilo">Kilo</option>
                <option value="mega">Mega</option>
              </select>
              <input type="number" name="rad" step="any" min="0">
              <select name = 'units'>
                <option value="bq" selected="selected">Becquerel (Bq) => Curie (Ci)</option>
                <option value="cu">Curie (Ci) => Becquerel (Bq)</option>
                <option value="gy">Gray (Gy) => Rad (Rad)</option>
                <option value="ra">Rad (Rad) => Gray (Gy)</option>
                <option value="sv">Sievert (Sv) => Rontgen Equivalent Man (Rem)</option>
                <option value="rem">Rontgen Equivalent Man (Rem) => Sievert (Sv)</option>
              </select>
          <hr>  
          <h3>Enter the units you would like your output to be in:</h3>
              <select name = 'output'>
                <option value="nano">Nano</option>
                <option value="micro">Micro</option>
                <option value="milli">Milli</option>
                <option value="" selected="selected"></option>
                <option value="kilo">Kilo</option>
                <option value="mega">Mega</option>
              </select>
          <hr>  
          <div><input type="submit" value="Convert" /></div>

          </form>
        </p>
      </div>
      <br><br><br><br>

      <!-- /END THE FEATURETTES -->