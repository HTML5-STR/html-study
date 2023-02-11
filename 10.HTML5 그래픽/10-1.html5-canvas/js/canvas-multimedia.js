function drawImage() {
  let paper = document.getElementById(
    "drawCanvas"
  );
  let context = paper.getContext("2d");
  let srcImg =
    document.getElementById("Sana");
  context.drawImage(srcImg, 10, 10);
}
