<!DOCTYPE html>
<htm>
  <head>
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/fusor.css">
  </head>
  <body>
    <?php include("menu.html") ?>
    <div class="fusor_cont">
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
        That was a great day. Read on to find out more about specific aspects of the circuit.
      </p>
      <hr>
      <h1>The Circuitry</h1>
      <p>
        For our circuit, AC and DC current became one of the largest hurdles to overcome.
      </p>
      <p>
        For our chamber, we first needed to raise the voltage as high as possible without doing damage to the chamber, which put us in the range of 6-12kV (kilovolts; 1000 V= 1kV). We settled on a Neon Sign Transformer, which took the power from the standard 120VAC wall outlet and output
        6.5kV at 30 mA (milliamps, 1000mA = 1 A).
      </p>
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
  </body>
</htm>
