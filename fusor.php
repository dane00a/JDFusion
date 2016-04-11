<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/fusor.css">
  </head>
  <body>
    <?php include("menu.html") ?>
      <div class="fusor_cont">
        <div class="fusor_intro">
          <h1>The Farnsworth-Hirsch Fusor: An Introduction</h1>
          <p>
            The Farnsworth-Hirsch Fusor was our first endeavor in pursuing nuclear fusion. The idea to collaborate over the building of a reactor began during a free period in high school at the end of our freshman year. Initially it seemed farfetched, but after digging into articles and convincing our parents it could be done safely, the building of it soon became a reality.
          </p>
          <p>
            Much of the building took place over the summer along with the learning of several fundamental fusion concepts needed to make our reactor. We faced challenges and overcame them. The circuit was the toughest to accomplish because we had no prior electrical experience and this slowed our progress near the end of our building.
          </p>
          <p>
            We achieved our first plasma on January 2nd, 2015, after resolving the last circuitry issues. We then tested different electrodes and multiple plasmas were achieved before we decided to retire our demo reactor and take up a much more challenging approach.
          </p>
        </div>
      <hr>
        <div class="fusor_circuitry">
          <h1>The Circuitry</h1>
          <p>
            We needed a high voltage electrode to ionize air under vacuum conditions. This meant an electrode with a voltage bias in the range of 6-12kV was needed according to Paschen’s curve, which gives the necessary voltage needed for a breakdown or discharge to occur as a function of pressure. We settled on a Neon Sign Transformer (NST), which took the power from the standard 120VAC wall outlet and output 6.5kV at 30 mA.
          </p>
          <div class="imgcontfusor">
            <div class="img_div">
              <img src="images/nst.jpg" alt="Neon Sign Transformer">
              <p>
                Neon Sign Transformer
              </p>
            </div>
            <div class="img_div">
              <img src="images/fullwaverectifier.gif" alt="Full Wave Rectifier">
              <p>
                 Full Wave Rectifier
              </p>
            </div>
          </div>
          <!--<div class="imgcontfusor">
            <div class="img_div">
              <img src="images/acgraph.gif" alt="AC Current">
              <p>
                Alternating Current
              </p>
            </div>
            <div class="img_div">
              <img src="images/dcandrectification.png" alt="DC and Variations">
              <p>
                 Direct Current and Rectifications
              </p>
            </div>
          </div>-->
          <p>
              The NST was outputting an alternating current and this was problematic because the multidirectional current would not be as effective in creating the electrical discharge needed to ionize the air (mainly nitrogen) in our chamber.
          </p>
          <p>
              We eventually decided to build a full-wave rectifier to prevent the DC current from dropping below the center to keep the voltage at or above 6.5kV at any given time. We did not feel the need to use a smoothing capacitor because they were expensive and unnecessary for our circuits conditions. We used a well-insulated high-voltage wire, and four diodes to create our rectifier. We soldered the diodes and the wires together in a diamond shape as shown in the circuit diagram of the full-wave rectifier. The outputs of our rectifier were fed into our chamber to our electrodes through some ceramic and epoxy feedthroughs.
          </p>
        </div>
      <hr>
        <div class="fusor_chamber">
          <h1>The Chamber</h1>
            <p>
              For our chamber we needed something durable and that could withstand going under a vacuum during the creation of a plasma. We decided to use a borosilicate glass cylinder placed between two aluminum plates with feedthroughs for our electrode. Borosilicate glass has a low coefficient for thermal expansion which allows it withstand significantly more amounts of heat than other competing materials, making it suitable for use in our chamber. The aluminum plates around the glass were machined and gaskets were placed between the glass and aluminum to create a low pressure environment when our vacuum was used.
            </p>
            <p>
              We had multiple electrodes constructed for use in our chamber. One was made of tungsten, another made from aluminum, and several copper electrodes were also designed, ranging in size and shape. Some of them were spherical while others were shaped closer to a cube or pyramid. Most of the electrodes were at some point tested in our reactor. Generally the spherically shaped grids had the most success at achieving a large plasma.
            </p>
            <div class="img_div heightmod">
              <image src="images/fusor_electrode.png" alt="Fusor Electrode"></image>
              <p>
                Fusor Electrodes During Construction
              </p>
            </div>
            <div class="img_div heightmod">
              <image src="images/fusor_aluminum.png" alt="Fusor Aluminum"></image>
              <p>
                Aluminum Plates In-Progress
              </p>
            </div>
          </div>
          <hr>
          <div class="fusor_test">
            <h1>Testing the Fusor</h1>
            <p>
              Multiple tests were run with different electrodes positioned to optimize for maximum voltage breakdown in our chamber. Most experiments failed to achieve a large plasma, but some spherical grids were successful as shown below. Our first plasma took place on January 2nd, 2015, with a discharge between the positive terminal grounded on the aluminum wall of our chamber and the negative electrode inside our chamber. This yielded a very small plasma which was later improved upon by inserting another grid into our chamber so two spherical grids would create more even electrical arching. 
            </p>
            <p>
              Challenges were seen in our vacuum’s capabilities in creating a low pressure environment for our chamber. We used a dual stage 5CFM roughing pump which provided some negative pressure but leaks in our chamber also caused problems with pressure. An effective pressure gauge was not purchased so the actual pressure of our chamber was never quite determined, but by observing the plasma it was obvious that with a lower pressure better results could have been seen. However, a balance needs to be maintained when making a fusor without deuterium because a certain amount of air needs to stay in the chamber for plasma to be created.
            </p>
            <div class="img_div">
              <image src="images/fusor_test.png" alt="Fusor Test"></image>
              <p>
                A video of a plasma we achieved in our demo reactor is shown below.
              </p>
            </div>
            <div class="vidcont">
              <video class="intro_vid" controls >
                <source src="videos/vid1.mp4" type="video/mp4"></source>
                  Your browser does not support video; please upgrade it.
              </video>
            </div>
          </div>
      <div class="spacer">

      </div>
    </div>
  </body>
</html>
