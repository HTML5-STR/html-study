function myCanvas() {
  let paper = document.getElementById(
    "drawCanvas"
  );

  let context = paper.getContext("2d");
  context.moveTo(0, 0);
  context.lineTo(300, 100);
  context.lineTo(150, 150);
  context.fillStyle = "#0099FF";
  context.fill();
  context.stroke();
}

myCanvas();
