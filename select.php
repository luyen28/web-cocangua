<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>

  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/select.css" />
</head>

<body>
  <form action="board.php" method="post" class="game-selection">
    <div class="game-selection-header">
      <h2>Thiết lập</h2>
    </div>
    <div class="selection-item">
      <img class="filter-red" src="assets/imgs/pawn.svg" width="100" height="100" />
      <div class="selection-item-header">
        <h3 class="text-red">Select Mode</h3>
      </div>
      <input type="radio" name="selection-red" id="red-select-ai" value="red-ai" checked="checked" />
      <label class="red-label" for="red-select-ai"><span>AI</span></label>
      <input type="radio" name="selection-red" id="red-select-human" value="red-human" />
      <label class="red-label" for="red-select-human"><span>Người</span></label>
    </div>
    <div class="selection-item">
      <img class="filter-blue" src="assets/imgs/pawn.svg" width="100" height="100" />
      <div class="selection-item-header">
        <h3 class="text-blue">Select Mode</h3>
      </div>
      <input type="radio" name="selection-blue" id="blue-select-ai" value="blue-ai" checked="checked" />
      <label class="blue-label" for="blue-select-ai"><span>AI</span></label>
      <input type="radio" name="selection-blue" id="blue-select-human" />
      <label class="blue-label" for="blue-select-human"  value="blue-human"><span>Người</span></label>
    </div>
    <div class="selection-item">
      <img class="filter-yellow" src="assets/imgs/pawn.svg" width="100" height="100" />
      <div class="selection-item-header">
        <h3 class="text-yellow">Select Mode</h3>
      </div>
      <input type="radio" name="selection-yellow" id="yellow-select-ai" value="yellow-ai" checked="checked" />
      <label class="yellow-label" for="yellow-select-ai"><span>AI</span></label>
      <input type="radio" name="selection-yellow" id="yellow-select-human" value="yellow-human"  />
      <label class="yellow-label" for="yellow-select-human"><span>Người</span></label>
    </div>
    <div class="selection-item">
      <img class="filter-green" src="assets/imgs/pawn.svg" width="100" height="100" />
      <div class="selection-item-header">
        <h3 class="text-green">Select Mode</h3>
      </div>
      <input type="radio" name="selection-green" id="green-select-ai" value="green-ai" checked="checked" />
      <label class="green-label" for="green-select-ai"><span>AI</span></label>
      <input type="radio" name="selection-green" id="green-select-human" value="green-human" />
      <label class="green-label" for="green-select-human"><span>Người</span></label>
    </div>
    <div class="selection-start"><input type="submit" value="Chơi"></div>
    <div class="selection-back"><a href="index.php">Trở lại</a></div>
  </form>
  <script src="assets/js/setup.js"></script>
</body>

</html>