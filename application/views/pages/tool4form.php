<!-- CONTENT
    ================================================== -->
    <div class="container marketing">

      <!-- START THE FEATURETTES -->

      <div class="hero-unit">
        <h2 class="featurette-heading">Personal Radiation Dosage Estimator</h2>
        
        <p> Description of personal radiation dosage estimator product goes here</p>
        <p class="lead">
          <?php echo validation_errors(); ?>

          <form action="tool4" method="post">

            <hr>
            <h3>Background</h3>

            <p>Inhalation due to Radon: 1.26 mSv</p>
            <p>Terrestrial: .48 mSv</p>
            <p>Cosmic Radiation: How many feet above sea-level do you live?</p>
              <select name = 'cosmicrad'>
                <option Name = 'cosmicrad' value="0.26" selected="selected">Sea Level: 0.26 mSv</option>
                <option Name = 'cosmicrad' value="0.28">0-999 ft: 0.28 mSv</option>
                <option Name = 'cosmicrad' value="0.31">1000-1999 ft: 0.31 mSv</option>
                <option Name = 'cosmicrad' value="0.35">2000-2999 ft: 0.35 mSv</option>
                <option Name = 'cosmicrad' value="0.41">3000-3999 ft: 0.41 mSv</option>
                <option Name = 'cosmicrad' value="0.47">4000-4999 ft: 0.47 mSv</option>
                <option Name = 'cosmicrad' value="0.52">5000-5999 ft: 0.52 mSv</option>
                <option Name = 'cosmicrad' value="0.66">6000-6999 ft: 0.66 mSv</option>
                <option Name = 'cosmicrad' value="0.79">7000-7999 ft: 0.79 mSv</option>
                <option Name = 'cosmicrad' value="0.96">8000-8999 ft: 0.96 mSv</option>
              </select>
            <p>Do you live within within 50 miles of a nuclear power plant?</p>
              <select name = 'nuc50'>
                <option name="nuc50" value="0.00009">Yes: 0.00009 mSv</option>
                <option name="nuc50" value="0" selected="selected">No</option>
              </select>
            <p>Do you live within within 50 miles of a coal-powered power plant?</p>
                <select name = 'coal50'>
                  <option Name = 'coal50' value="0.0003">Yes: 0.0003 mSv</option>
                  <option Name = 'coal50' value="0" selected="selected">No</option>
                </select>

            <hr>    
            <h3> Food and Water</h3>
            <p>Ingestion (Food and Water): 0.29 mSv</p>

            <hr>
            <h3> Lifestyle</h3>
            <p>How many miles have you traveled by plane?</p>
              <input type="number" name="plane" step="any" min="0"> (Each mile flown is equivalent to 0.00001 mSv)
            <p>How many times have you passed by an x-ray luggage inspection at the airport?</p>
              <input type="number" name="luggage" step="any" min="0"> (Each pass is equivalent to 0.00002 mSv)
            <p>Do you live in a stone, brick, or concrete building?</p>
              <select name = 'stone'>
                  <option Name = 'stone' value="0.07">Yes: 0.07 mSv</option>
                  <option Name = 'stone' value="0" selected="selected">No</option>
                </select>
            <p>Do you have porcelain crowns or false teeth?</p>
              <select name = 'crown'>
                  <option Name = 'crown' value="0.0007">Yes: 0.0007 mSv</option>
                  <option Name = 'crown' value="0" selected="selected">No</option>
                </select>
            <p>Do you wear a luminous wrist-watch?</p>
              <select name = 'watch'>
                  <option Name = 'watch' value="0.0006">Yes: 0.0006 mSv</option>
                  <option Name = 'watch' value="0" selected="selected">No</option>
                </select>
            <p>How many smoke detectors do you have in your home?</p>
              <input type="number" name="smoke" step="any" min="0"> (Each smoke detector is equivalent to 0.00008 mSv)
            <p> How many cigarettes do you smoke daily?</p> 
              <input type="number" name="cig" step="any" min="0"> (Each cigarette is equivalent to 0.018 mSv)

            <hr>
            <h3>Medical</h3>

            <p>Which parts of the body have you received an X-Ray on?</p>
              <input type="checkbox" name="xray[]" value="0" checked>None<br>
              <input type="checkbox" name="xray[]" value="0.10">Chest: 0.10 mSv<br>
              <input type="checkbox" name="xray[]" value="0.42">Mammography: 0.42 mSv<br>
              <input type="checkbox" name="xray[]" value="0.10">Skull: 0.10 mSv<br>
              <input type="checkbox" name="xray[]" value="0.20">Cervical Spine: 0.20 mSv<br>
              <input type="checkbox" name="xray[]" value="6.0">Lumbar Spine: 6.0 mSv<br>
              <input type="checkbox" name="xray[]" value="6.0">Upper Gastrointestinal Tract: 6.0 mSv<br>
              <input type="checkbox" name="xray[]" value="7.0">Abdomen: 7.0 mSv<br>
              <input type="checkbox" name="xray[]" value="8.0">Barium Enema: 8.0 mSv<br>
              <input type="checkbox" name="xray[]" value="0.60">Pelvis: 0.60 mSv<br>
              <input type="checkbox" name="xray[]" value="0.70">Hip: 0.70 mSv<br>
              <input type="checkbox" name="xray[]" value="0.005">Dental: 0.005 mSv<br>
              <input type="checkbox" name="xray[]" value="0.005">Hand/Foot: 0.005 mSv<br>

            <p>Which parts of the body have you received a CT scan on?</p>
              <input type="checkbox" name="ct[]" value="0" checked>None<br>
              <input type="checkbox" name="ct[]" value="2.0">Head: 2.0 mSv<br>
              <input type="checkbox" name="ct[]" value="7.0">Chest: 7.0 mSv<br>
              <input type="checkbox" name="ct[]" value="10.0">Abdomen/Pelvis: 10.0 mSv<br>
              <input type="checkbox" name="ct[]" value="0.10">Extremity: 0.10 mSv<br>
              <input type="checkbox" name="ct[]" value="20">Heart Angiography: 20.0 mSv<br>
              <input type="checkbox" name="ct[]" value="5">Head Angiography: 5.0 mSv<br>
              <input type="checkbox" name="ct[]" value="10">Spine: 10.0 mSv<br>
              <input type="checkbox" name="ct[]" value="10">Whole Body: 10.0 mSv<br>
              <input type="checkbox" name="ct[]" value="20">Cardiac: 20.0 mSv<br>

              <hr>
          <div><input type="submit" value="Estimate My Personal Dosage!" /></div>

          </form>
        </p>
      </div>
      <br><br><br><br>

      <!-- /END THE FEATURETTES -->