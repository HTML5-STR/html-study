function arcRact() {
  let paper = document.getElementById(
    "drawCanvas"
  );

  let context = paper.getContext("2d");
  context.beginPath();
  context.arc(
    150,
    100,
    50,
    0,
    2 * Math.PI
  );
  context.stroke();
}

arcRact();
