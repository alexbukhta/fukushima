<!-- CONTENT
    ================================================== -->
    <div class="container marketing">

      <!-- START THE FEATURETTES -->

      <div class="hero-unit">
        <h2 class="featurette-heading">Is my water safe to drink?</h2>
        
        <p> Description of water rad product goes here</p>
        <p class="lead">
          <?php echo validation_errors(); ?>

          <form action="tool1" method="post">

            <hr>
            <h3>Measured Radiation (in Bq):</h3> 
            <input type="number" name="rad">

            <h3>Amount of Water (in mL):</h3>
            <input type="number" name="vol">

          <hr>  
          <div><input type="submit" value="Check" /></div>

          </form>
        </p>
      </div>
      <br><br><br><br>

      <!-- /END THE FEATURETTES -->