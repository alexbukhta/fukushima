<!-- CONTENT
    ================================================== -->
    <div class="container marketing">

      <!-- START THE FEATURETTES -->

      <div class="hero-unit">
        <h2 class="featurette-heading">Is my food safe to eat?</h2>
        
        <p> Description of food rad product goes here</p>
        <p class="lead">
          <?php echo validation_errors(); ?>

          <form action="tool2" method="post">

            <hr>
            <h3>Type of Food:</h3>
              <Input type = 'Radio' Name ='food' value= 'infant'> Infant Food <br/>
              <Input type = 'Radio' Name ='food' value= 'dairy'> Dairy Product <br/>
              <Input type = 'Radio' Name ='food' value= 'other'> Other

            <h3>Measured Radiation (in Bq):</h3> 
              <input type="number" name="rad">

            <h3>Measured Radionuclide Type:</h3>
              <Input type = 'Radio' Name ='nuc' value= 'sr90'> Sr-90 <br/>
              <Input type = 'Radio' Name ='nuc' value= 'i131'> I-131 <br/>
              <Input type = 'Radio' Name ='nuc' value= 'pu238'> Pu-238 / Am-241 <br/>
              <Input type = 'Radio' Name ='nuc' value= 'cs134'> Cs-134 / Cs-137 / Other

          <hr>
          <div><input type="submit" value="Check" /></div>

          </form>
        </p>
      </div>
      <br><br><br><br>

      <!-- /END THE FEATURETTES -->