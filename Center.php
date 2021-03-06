<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>BPG background example.</title>
        <!-- Decoder script from http://bellard.org/bpg/ -->
        <script src="JS/bpgdec8a.js"></script>
        <script>
"use strict";

function setBackground(filename)
{

  // Create a hidden canvas with the same dimensions as the image.
  var canvas = document.createElement("canvas");
  canvas.style.visibility = "hidden";
  canvas.width = 512;
  canvas.height = 512;
  document.body.appendChild(canvas);

  // Create a drawing context and a BPG decoder.
  var ctx = canvas.getContext("2d");
  var img = new BPGDecoder(ctx);

  // Attempt to load the image.
  img.onload = function()
  {
    // Once the image is ready, draw it to the canvas...
    ctx.putImageData(this.imageData, 0, 0);
    // ...and copy the canvas to the body background.
    document.body.style.background = "url('" + canvas.toDataURL("Media/Images") + "')";
  };
  img.load(filename);

}
        </script>
    </head>
    <body onload="setBackground('GalaxyBackground.bpg');">
        <p>Hello, World!</p>
    </body>
</html>