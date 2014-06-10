<html lang ="en">
<head>
  <title>Fukushima Solutions</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

<link href="../assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">


    

    <style>

    /* GLOBAL STYLES
    -------------------------------------------------- */
    /* Padding below the footer and lighter body text */

    body {
      padding-bottom: 40px;
      /*color: #5a5a5a;*/
      background: #222;
      color: #222;
    }

    .hero-unit {
      padding: 60px;
      margin-bottom: 30px;
      background-color: #999999;
      -webkit-border-radius: 6px;
         -moz-border-radius: 6px;
              border-radius: 6px;
    }

    .hero-unit input[type="number"] {
      padding: 0px;
      font-size: 16px;
      font-weight: 200;
      line-height: 0px;
      color: inherit;
    }



    /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */

    /* Special class on .container surrounding .navbar, used for positioning it into place. */
    .navbar-wrapper {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      z-index: 10;
      margin-top: 20px;
      margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
    }
    .navbar-wrapper .navbar {

    }

    /* Remove border and change up box shadow for more contrast */
    .navbar .navbar-inner {
      border: 0;
      -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.25);
         -moz-box-shadow: 0 2px 10px rgba(0,0,0,.25);
              box-shadow: 0 2px 10px rgba(0,0,0,.25);
    }

    /* Downsize the brand/project name a bit */
    .navbar .brand {
      padding: 14px 20px 16px; /* Increase vertical padding to match navbar links */
      font-size: 16px;
      font-weight: bold;
      text-shadow: 0 -1px 0 rgba(0,0,0,.5);
    }

    /* Navbar links: increase padding for taller navbar */
    .navbar .nav > li > a {
      padding: 15px 20px;
    }

    /* Offset the responsive button for proper vertical alignment */
    .navbar .btn-navbar {
      margin-top: 10px;
    }





    /* MARKETING CONTENT
    -------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .span4 {
      text-align: center;
    }
    .marketing h2 {
      font-weight: normal;
    }
    .marketing .span4 p {
      margin-left: 10px;
      margin-right: 10px;
    }


    /* Featurettes
    ------------------------- */

    .featurette-divider {
      margin: 80px 0; /* Space out the Bootstrap <hr> more */
    }
    .featurette {
      /*padding-top: 120px;*/ /* Vertically center images part 1: add padding above and below text. */
      overflow: hidden; /* Vertically center images part 2: clear their floats. */
    }
    .featurette-image {
      margin-top: 0px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
    }

    .featurette-image {
        height: 300px;
        width: 300px
    }
    /* Give some space on the sides of the floated elements so text doesn't run right into it. */
    .featurette-image.pull-left {
      margin-right: 40px;
    }
    .featurette-image.pull-right {
      margin-left: 40px;
    }

    /* Thin out the marketing headings */
    .featurette-heading {
      font-size: 50px;
      font-weight: 300;
      line-height: 1;
      letter-spacing: -1px;
    }



    /* RESPONSIVE CSS
    -------------------------------------------------- */

    @media (max-width: 979px) {

      .container.navbar-wrapper {
        margin-bottom: 0;
        width: auto;
      }
      .navbar-inner {
        border-radius: 0;
        margin: -20px 0;
      }

      .carousel .item {
        height: 350px;
      }
      .carousel img {
        width: auto;
        height: 350px;
      }

      .featurette {
        height: auto;
        padding: 0;
      }
      .featurette-image.pull-left,
      .featurette-image.pull-right {
        display: block;
        float: none;
        max-width: 40%;
        margin: 0 auto 20px;
      }
    }


    @media (max-width: 767px) {

      .navbar-inner {
        margin: -20px;
      }

      .carousel {
        margin-left: -20px;
        margin-right: -20px;
      }
      .carousel .container {

      }
      .carousel .item {
        height: 300px;
      }
      .carousel img {
        height: 300px;
      }
      .carousel-caption {
        width: 65%;
        padding: 0 70px;
        margin-top: 100px;
      }
      .carousel-caption h1 {
        font-size: 30px;
      }
      .carousel-caption .lead,
      .carousel-caption .btn {
        font-size: 18px;
      }

      .marketing .span4 + .span4 {
        margin-top: 40px;
      }

      .featurette-heading {
        font-size: 30px;
      }
      .featurette .lead {
        font-size: 18px;
        line-height: 1.5;
      }

    }
    </style> 


    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">


    <script type='text/javascript' src='https://www.google.com/jsapi'></script> 
    <script type='text/javascript'> 
    google.load('visualization', '1', {packages:["corechart"]});
    google.setOnLoadCallback(drawAll);

    function drawAll() {
        drawChart1();
        drawChart2();
    }
    function drawChart1() {
      var data = google.visualization.arrayToDataTable([

        ['Source', 'Radiation'],
        /*['100% of people exposed die due to damage of vascular tissue, intestinal lining, and the immune system (single dose)', 10000],
        ['50% of people exposed are expected to die within 60 days, most likely from infections (single dose)', 5000],
        ['Immune system is damaged and cannot fight off disease (single dose)', 3000],
        ['Radiation Sickness sets in. Intestinal lining damaged - intestines cannot intake water and nutrients - nausea, diarrhea, general weakness (single dose)', 1000],*/
        ['Background Dose in Ramsar, Iran (per year)', 260],
        ['Fukushima Emergency Worker Limit (per year)', 250],
        ['Background Dose At Areia Preta Beach, Guarapari, Brazil (per year)',  70],
        /*['Highest Effective Dose the Harvard ES96 Class received during the tour of the Plymouth Nuclear Power Plant Reactor Building (per year)',  52],*/
        ['Annual Limit for US & Jap. Nuclear Power Plant Employees (per year)',  50],
        ['Heart Angiography CT Scan (per procedure)', 20],
        ['Cardiac CT Scan (per procedure)', 20],
        ['Natural Background Effective Dose in Denver, CO, USA (per year)', 11.8],
        ['Mining Uranium in Australia Maximum Dose (per year)', 10],
        ['Abdomen/Pelvis CT Scan (per procedure)', 10],
        ['Spine CT Scan (per procedure)', 10],
        ['Whole Body CT Scan (per procedure)', 10],
        ['Barium Enema X-Ray (per procedure)', 8],
        ['Avg. Fukushima-Daiichi Post-Earthquake Employee Dose (per worker)', 7.7],
        ['Bladder/Kidney X-Ray (per procedure)', 7],
        ['Chest CT Scan (per procedure)', 7],
        ['Upper Gastrointestinal Tract  X-Ray (per procedure)', 6],
        ['Lumbar Spine X-Ray (per procedure)', 6],
        ['Occupational Limit for pregnant women in the US (per year)', 5],
        ['Head Angiography CT Scan (per procedure)', 5],
        ['Average Natural Background Effective Dose in the US (per year)', 3],
        ['World Average Commercial Airline Crew Effective Dose (per year)', 2.5],
        ['Head CT Scan (per procedure)', 2],
        ['World Average Background Radon Inhalation (per year)', 1.26],
        ['Wearing a Plutonium-Powered Pacemaker (per year)', 1],
        ['Hip X-Ray (per procedure)', 0.7],
        ['Pelvis X-Ray (per procedure)', 0.6],
        ['World Average Background Terrestrial Radiation (per year)', 0.48],
        ['Mammography (X-Ray) (per procedure)', 0.42],
        ['World Average Cosmic Radiation (per year)', 0.39],
        ['World Average Ingestion Radiation (per year)', 0.29],
        ['Average Cosmic Radiation at Sea Level (per year)', 0.26],
        ['Cervical Spine X-Ray (per procedure)', 0.2],
        ['Chest X-Ray (per procedure)', 0.1],
        ['Hand/Foot CT Scan (per procedure)', 0.1],
        ['Skull X-Ray (per procedure)', 0.1],
        ['Living in a stone, brick, or concrete building (per year)', 0.07],
        ['Smoking 1 cigarette per day (per year)', 0.018],
        ['1,000 miles traveled by plane', 0.01],
        ['Dental X-Ray (per procedure)', 0.005],
        ['Hand/Foot X-Ray (per procedure)', 0.005],
        ['Having porcelain crowns or false teeth (per year)', 0.0007],
        ['Wearing a luminous wrist-watch (per year)', 0.0006],
        ['Living within 50 miles of a coal-powered Power Plant (per year)', 0.0003],
        ['Living within 50 miles of a nuclear Power Plant (per year)', 0.00009],
        ['Having a smoke detector in your home (per year)', 0.00008],
        ['Passing by X-Ray luggage inspection at the airport (per pass)', 0.00002]

        ]);

        var view = new google.visualization.DataView(data);
          view.setColumns([0, 1,
                           { calc: "stringify",
                             sourceColumn: 1,
                             type: "string",
                             role: "annotation" },
                           ]);

        var options = {
          title: 'Common Sources of Radiation',
          vAxis: {title: 'Source',  titleTextStyle: {color: 'red'}},
          hAxis: {title: 'Radiation (in mSv)', logScale: true},
          legend: {position:"none"},
          chartArea:{left:560,height:"90%"},
          enableInteractivity:false,
        };

        var chart = new google.visualization.BarChart(document.getElementById('chart_div_1'));
        chart.draw(view, options);

      }

    function drawChart2() {
        var data2 = google.visualization.arrayToDataTable([
          

          /*['Cause', 'Lifetime Risk of Death(%)','Number of Deaths'],
          ['Malignant Neoplasms (tumor/cancer of any type)', 23.09, 357305],
          ['Cardiovascular Disease', 13.61, 210525],
          ['Cerebrovascular Disease (Stroke)',8, 123867],
          ['Influenza and Pneumonia', 7.97, 123302],
          ['Lung Cancers', 4.38, 67751],
          ['Accidents (In general)', 3.84, 59416],
          ['Stomach Cancer', 3.39, 52426],
          ['Senility', 3.38, 52242],
          ['Liver Cancer', 2.2, 34093],
          ['Suicide', 1.87, 28896],
          ['Kidney Failure', 1.59, 24526],
          ['Chronic Obstructive Pulmonary Disease (Chronic bronchitis, emphysema)', 1.08, 16639],
          ['Liver Disease', 1.06, 16390],
          ['Diabetes', 0.95, 14664],
          ['Breast Cancer', 0.81, 12528],
          ['Prostate Cancer', 0.66, 10256],
          ['Falls', 0.47, 7308],
          ['Hypertension', 0.45, 7023],
          ['Transportation Accident', 0.44, 6741],
          ['Drowning', 0.42, 6565],
          ['Hepatitis C', 0.32, 4980],
          ['Gastric and Duodenal Ulcer', 0.2, 3110],
          ['Tuberculosis', 0.14, 2166],
          ['Asthma', 0.13, 2060],
          ['Poisonings', 0.06, 936],
          ['Other', 19.49 , 30197]*/

          ['Cause', 'Number of Deaths'],
          ['Malignant Neoplasms (tumor/cancer of any type)',357305],
          ['Cardiovascular Disease', 210525],
          ['Cerebrovascular Disease (Stroke)',123867],
          ['Influenza and Pneumonia',123302],
          ['Lung Cancers',67751],
          ['Accidents (In general)', 59416],
          ['Stomach Cancer', 52426],
          ['Senility', 52242],
          ['Liver Cancer', 34093],
          ['Suicide', 28896],
          ['Kidney Failure', 24526],
          ['Chronic Obstructive Pulmonary Disease (Chronic bronchitis, emphysema)',16639],
          ['Liver Disease', 16390],
          ['Diabetes', 14664],
          ['Breast Cancer', 12528],
          ['Prostate Cancer', 10256],
          ['Falls',  7308],
          ['Hypertension',  7023],
          ['Transportation Accident', 6741],
          ['Drowning',  6565],
          ['Hepatitis C', 4980],
          ['Gastric and Duodenal Ulcer', 3110],
          ['Tuberculosis', 2166],
          ['Asthma',  2060],
          ['Poisonings',  936],
          ['Other', 301597]


        ]);

        var options2 = {
          title: 'Lifetime Total Risk of Death',
          //pieHole: 0.2,
          legend: {alignment:"center"},
          chartArea:{width:"90%",height:"90%"},
          slices:{},

        };

        var chart2 = new google.visualization.PieChart(document.getElementById('chart_div_2'));
        chart2.draw(data2, options2);
      }

    /*function drawAll() {
        drawChart1();
        drawChart2();
        drawChart3();
        drawChart4();
        drawChart5();
    }
    function drawChart1() {
        var data = google.visualization.arrayToDataTable([
          ['',
          '100% mortality rate, damage of vascular tissue, intestinal lining, and immune system',
          '50% mortality rate within 60 days, mostly due to infections', 
          'Immune system is damaged and cannot fight off disease',
          'Radiation Sickness, Intestinal damage, nausea, diarrhea, general weakness',
          'Highest background effective dose in Ramsar, Iran',
          'Fukushima Emergency Worker Limit',
          'See Middle limit of dosage radiation'],
          ['',10000, 5000, 3000, 1000, 260, 250, 70],
        ]);
        var options = {
          title: 'Upper limit of dosage radiation',
          hAxis: {title: 'Radiation'},
          vAxis: {title: 'mSv/year'},
          legend: { position: "none" },
          chartArea:{width:"60%",height:"85%"}
        };
        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div_1'));
        chart.draw(data, options);
      }

    function drawChart2() {
        var data2 = google.visualization.arrayToDataTable([
          ['',
          'Background Effective Dose at Areia Preta Beach, Guarapari, Brazil',
          'Highest Effective dose Harvard ES96 Class received during tour of Plymouth', 
          'Annual Limit for US and Japanese Nuclear Power Plant Employees',
          'A single Heart Angiography or Cardiac CT Scan',
          'Background Effective Dose in Denver, Colorado, USA',
          'Mining Uranium in Australia or Abdomen/Pelvis/Spine/Whole-Body CT Scan',
          'Barium Enema X-Ray',
          'Average Fukushima-Daiichi Post-Earthquake Employee Effective Dose', 
          'Bladder/Kidney X-Ray or Chest CT Scan',
          'Upper Gastrointestinal Tract or Lumbar Spine X-Ray',
          'Occupational Limit for pregnant women in the US or Head Angiography CT Scan',
          'Average Natural Background Effective Dose in the US',
          'Commercial Airline Crew Effective Dose (World Average)',
          'Head CT Scan',
          'Background Radon Inhalation (World Average)',
          'See Lower limit of dosage radiation'],
          ['',70, 52, 50, 20, 11.8, 10, 8, 7.7, 7, 6, 5, 3, 2.5, 2, 1.26, 1],
        ]);
        var options2 = {
          title: 'Middle limit of dosage radiation',
          hAxis: {title: 'Radiation'},
          vAxis: {title: 'mSv/year'},
          legend: { position: "none" },
          chartArea:{width:"75%",height:"85%"}
        };
        var chart2 = new google.visualization.ColumnChart(document.getElementById('chart_div_2'));
        chart2.draw(data2, options2);
      }

    function drawChart3() {
        var data3 = google.visualization.arrayToDataTable([
          ['',
          'Wearing a Plutonium-Powered Pacemaker',
          'Hip X-Ray', 
          'Pelvis X-Ray',
          'Background Terrestrial Radiation (World Average)',
          'Mammography (X-Ray)',
          'Cosmic Radiation (World Average)',
          'Ingestion Radiation (World Average)',
          'Average Cosmic Radiation at Sea Level', 
          'Cervical Spine X-Ray',
          'Chest/Skull X-Ray or Hand/Foot CT Scan',
          'Living in the Colorado Plateau',
          'Living in a stone, brick, or concrete building',
          'Smoking 1 cigarette per day',
          'Various others: (do we want to add plane/dental/hand/crown/watch/coal/nuc/smoke/lug?)'],
          ['',1,.70,.60,.48,.42,.39,.29,.26,.20,.10,.09,.07,.018,.01],
        ]);
        var options3 = {
          title: 'Lower limit of dosage radiation',
          hAxis: {title: 'Radiation'},
          vAxis: {title: 'mSv/year'},
          legend: { position: "none" },
          chartArea:{width:"75%",height:"85%"}
        };
        var chart3 = new google.visualization.ColumnChart(document.getElementById('chart_div_3'));
        chart3.draw(data3, options3);
      }

    function drawChart4() {
        var data4 = google.visualization.arrayToDataTable([
          ['',
          'Malignant Neoplasm',
          'Cardiovascular Disease', 
          'Cerebrovascular Disease',
          'Influenza and Pneumonia',
          'Lung Cancer',
          'General Accidents',
          'Stomache Cancer',
          'Senility', 
          'Liver Cancer',
          'Suicide',
          'Kidney Failure',
          'Chronic Obstructive Pulmonary Disease',
          'Liver Disease',
          'See Lower Limit of Risk'],
          ['',23.095,13.605,8.006,7.974,4.378,3.840,3.389,3.376,2.204,1.868,1.585,1.075,1.059,.948],
        ]);
        var options4 = {
          title: 'Upper Limit of Risk',
          hAxis: {title: 'Risk'},
          vAxis: {title: '% Mortality Rate'},
          legend: { position: "none" },
          chartArea:{width:"75%",height:"85%"}
        };
        var chart4 = new google.visualization.ColumnChart(document.getElementById('chart_div_4'));
        chart4.draw(data4, options4);
      }

    function drawChart5() {
        var data5 = google.visualization.arrayToDataTable([
          ['',
          'Diabetes',
          'Breast Cancer', 
          'Prostate Cancer',
          'Falls',
          'Hypertension',
          'Transportation Accident',
          'Drowning',
          'Hepatitis C', 
          'Gastric and Duodenal Ulcer',
          'Tuberculosis',
          'Asthma',
          'Poisoning'],
          ['',.9478,.8097,.6629,.4723,.4539,.4357,.4243,.3219,.2010,.1400,.1331,.0605],
        ]);
        var options5 = {
          title: 'Lower Limit of Risk',
          hAxis: {title: 'Risk'},
          vAxis: {title: '% Mortality Rate'},
          legend: { position: "none" },
          chartArea:{width:"75%",height:"85%"}
        };
        var chart5 = new google.visualization.ColumnChart(document.getElementById('chart_div_5'));
        chart5.draw(data5, options5);
      }*/
</script>

  </head>
<body>

  <!-- NAVBAR
================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="/">Fukushima Educational Portal</a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li><a href="/">Home</a></li>

                <!-- Lessons Dropdown -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Lessons<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="/lesson1">Lesson 1: What is Radioactivity and Radiation?</a></li>
                        <li class="divider"></li>
                      <li><a href="/lesson2">Lesson 2: What are the Different Types of Radiation?</a></li>
                        <li class="divider"></li>
                      <li><a href="/lesson3">Lesson 3: What do the Different Units Measure?</a></li>
                        <li class="divider"></li>
                      <li><a href="/lesson4">Lesson 4: How does Radioactive Material Spread?</a></li>
                        <li class="divider"></li>
                      <li><a href="/lesson5">Lesson 5: How do the Levels of Radiation in the World Around Us Compare?</a></li>
                        <li class="divider"></li>
                      <li><a href="/lesson6">Lesson 6: How does Radiation Damage Humans?</a></li>
                        <li class="divider"></li>
                      <li><a href="/lesson7">Lesson 7: Risk Spectrum</a></li>
                    </ul>
                </li>

                <!-- Tools Dropdown -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tools<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="/tool1">Is my water safe to drink?</a></li>
                        <li class="divider"></li>
                      <li><a href="/tool2">Is my food safe to eat?</a></li>
                        <li class="divider"></li>
                      <li><a href="/tool3">Radiation Unit Conversion</a></li>
                        <li class="divider"></li>
                      <li><a href="/tool4">Personal Radiation Dosage Estimator</a></li>
                    </ul>
                </li>
                <!--<ul class="nav" role="navigation">
                <li><a href="#">Photos</a></li>
                <li><a href="#">Contact Us</a></li>
                  </ul>-->
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->

