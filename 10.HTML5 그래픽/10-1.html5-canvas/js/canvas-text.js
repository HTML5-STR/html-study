function canvasText() {
  let paper = document.getElementById(
    "drawCanvas"
  );

  let context = paper.getContext("2d");

  context.font = "40px arial";
  context.fillText("CANVAS", 50, 90);
  context.strokeText("HTML5", 80, 150);
}

canvasText();
