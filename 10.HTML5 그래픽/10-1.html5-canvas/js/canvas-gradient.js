function gradient() {
  let paper = document.getElementById(
    "drawCanvas"
  );
  let context = paper.getContext("2d");

  //   let gradient =
  //     context.createLinearGradient(
  //       0,
  //       0,
  //       200,
  //       0
  //     );
  //   gradient.addColorStop(0, "#FFCC00");
  //   gradient.addColorStop(1, "#FFCCCC");
  let gradient =
    context.createLinearGradient(
      0,
      0,
      200,
      0
    );
  gradient.addColorStop(0, "#FFCC00");
  gradient.addColorStop(1, "#FFCCCC");

  context.fillStyle = gradient;
  context.font = "45px Arial black";
  context.fillText("CANVAS", 15, 120);
}

gradient();
