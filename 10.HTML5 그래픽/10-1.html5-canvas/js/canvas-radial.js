function redial() {
  let paper = document.getElementById(
    "drawCanvas"
  );

  let context = paper.getContext("2d");

  let gradient =
    context.createRadialGradient(
      100,
      100,
      200,
      150,
      150,
      30
    );

  gradient.addColorStop(0, "black");
  gradient.addColorStop(1, "white");

  context.fillStyle = gradient;
  context.fillRect(0, 0, 300, 300);
}

redial();
