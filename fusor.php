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
            The Farnsworth-Hirsch Fusor was one of our first steps into nuclear fusion. As such, we've become enamored with it and the tumultuous journey it took to make it.
          </p>
          <p>
            We (Dane Andrews and Jeremy Adams) initially conceieved the idea of pursuing Nuclear Fusion dring a free period in high school. It was early June at the time, and school was going to be let out soon.
          </p>
          <p>
            We decided that we'd do some work on nuclear fusion, and it didn't take long to find a few articles about the Fusor. From there, we spent most of July, August, and the beginning of the school year working
            on the reactor.
          </p>
          <p>
            We eventually hit a bit of a lull in the working between early October and Thanksgiving, when work resumed with a clamor and a bang. As sort of a late Christmas present, we achieved our end result, Plasma, on January 2nd, 2015, after resolving one of the last circuitry issues.
          </p>
          <p>
            That was a great day. Read on to find out more about specific aspects of the project.
          </p>
        </div>
      <hr>
        <div class="fusor_circuitry">
          <h1>The Circuitry</h1>
          <p>
            For our circuit, AC and DC current became one of the largest hurdles to overcome.
          </p>
          <p>
            For our chamber, we first needed to raise the voltage as high as possible without doing damage to the chamber, which put us in the range of 6-12kV (kilovolts; 1000 V= 1kV). We settled on a Neon Sign Transformer (NST), which took the power from the standard 120VAC wall outlet and output
            6.5kV at 30 mA (milliamps, 1000mA = 1 A).
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
          <div class="imgcontfusor">
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
          </div>
          <p>
            However, there was a slight problem: the NST's output was in AC (Alternating Current). What this meant is that the current (and voltage, becuase they are directly proportional) wouldn't come out at 6.5kV and 30mA all the time; it would "pulse" 50/60 times (common measured in Hertz, Hz) along a sine wave.
            This created a problem because it would cause a voltage dip well below 6.5kV, which would have rendered the circuit nearly useless as the dips would allow the plasma to dissapate inside the chamber.
          </p>
          <p>
            We eventually decided to use a Full-Wave Rectifier to prevent the DC current from dropping below the center line of the sine graph to keep the voltage at or above 6.5kV at any given time. We did not feel the need to use a smoothing capacitor, however, so we just had the top half of the sine wave because smoothing capacitors at that voltage were expensive and unnecessary for our reactor.
          </p>
          <p>
            In order to make it, we needed to use a special high-voltage wire with a lot of insulation, as well as four diodes to create the rectifier. We went and asked our engineering teacher for some soldering equipment, and to our pleasure, he obliged. We cut the insulated wires and soldered them into a diamond-shape, with one diode on each side. The diodes were paired to be emanating from one point, only to converge on the opposite
            side of the Rectifier to properly rectify the Alternating Current.
          </p>
          <p>
            Afterwards, we took the negative output of the Full Wave Rectifier and connected it to the electrode, and connected the positive end to the Aluminum Plate on the opposite side of the chamber. After that, the circuit was complete.
          </p>
        </div>
      <hr>
        <div class="fusor_chamber">
          <h1>The Chamber</h1>
            <p>
              For the chamber, we needed something durable and a material that could withstand going under a vacuum during the creation of the plasma. After searching around through a bunch of materials, we decided on using a borosilicate glass cylinder, primarily because it had the aforementioned features as well as having a very low coefficient for thermal expansion. This would allow it withstand significantly more amounts of heat than other competing materials without needing to expand.
            </p>
            <p>
              Afterwords, we obtained and cut two aluminum plates to cover the exposed sides of the borosilicate cylinder. We drilled holes into the plates, and bound them together with large screws to help give a more substantial seal. We also drilled a hole in the bottom of the chamber to fit the ceramic rod and screw into the chamber that would later hold the electrode.
            </p>
            <p>
              We had three electrodes: a primary one made of tungsten, and two secondary ones made of copper. The tungsten and one of the copper electrodes were made in a spherical shape, and the third electrode was crafted into a cubic shape.
            </p>
            <p>
              Finally, a hole was drilled into one of the aluminum plates to fit the vacuum into the chamber.
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
              On January 2, 2015, we finally cleared up an issue with the circuit regarding grounding one of the terminals, and we were able get it to work under the tungsten electrode.
            </p>
            <p>
              Afterwards, we tested out the copper electrodes (both of which were successful). Soon after, we archived the project and began work on the Polywell.
            </p>
            <div class="img_div">
              <image src="images/fusor_test.png" alt="Fusor Test"></image>
              <p>
                Fusor With Tungsten Electrode
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
