<?php
$ai = [];
if ($_POST['selection-red'] == "red-ai")
  $ai[] = 0;
if ($_POST['selection-blue'] == "blue-ai")
  $ai[] = 1;
if ($_POST['selection-yellow'] == "yellow-ai")
  $ai[] = 2;
if ($_POST['selection-green'] == "green-ai")
  $ai[] = 3;
$ai_string = "[" . implode(',', $ai) . "]";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cờ cá ngựa</title>

  <!-- link bootstrap -->
  <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.css" />
  <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap-utilities.css" />

  <!-- link fontawesome -->
  <link rel="stylesheet" href="assets/vendor/fontawesome-free-6.4.2-web/css/all.css" />

  <!-- link user-defined css -->
  <link rel="stylesheet" href="assets/css/board.css" />
  <!-- <link rel="stylesheet" href="assets/css/dice.css" /> -->
</head>

<body>
  <div class="container justify-content-center play-ground card">
    <div class="main-board card-body" id="main-board">
      <div class="board-block">
        <div class="house yellow-house">
          <div class="house-inner">
            <div class="house-step" id="house-step-2-0"></div>
            <div class="house-step" id="house-step-2-1"></div>
            <div class="house-step" id="house-step-2-2"></div>
            <div class="house-step" id="house-step-2-3"></div>
          </div>
        </div>
        <div class="upper-block-house">
          <div class="step yellow-step start-yellow-step" id="step-28"></div>
          <div class="step yellow-step" id="step-29"></div>
          <div class="step yellow-step" id="step-30"></div>
          <div class="step yellow-step" id="step-31"></div>
          <div class="step yellow-step" id="step-32"></div>
          <div class="step yellow-step" id="step-33"></div>
        </div>
        <div class="upper-block-house">
          <div class="step yellow-end-house-step blue-step" id="step-27"></div>
          <div class="end-house yellow-end-house" id="end-house-2-1">
            <div class="end-house-label game-font text-yellow">1</div>
          </div>
          <div class="end-house yellow-end-house" id="end-house-2-2">
            <div class="end-house-label game-font text-yellow">2</div>
          </div>
          <div class="end-house yellow-end-house" id="end-house-2-3">
            <div class="end-house-label game-font text-yellow">3</div>
          </div>
          <div class="end-house yellow-end-house" id="end-house-2-4">
            <div class="end-house-label game-font text-yellow">4</div>
          </div>
          <div class="end-house yellow-end-house" id="end-house-2-5">
            <div class="end-house-label game-font text-yellow">5</div>
          </div>
        </div>
        <div class="upper-block-house">
          <div class="step blue-step" id="step-26"></div>
          <div class="step blue-step" id="step-25"></div>
          <div class="step blue-step" id="step-24"></div>
          <div class="step blue-step" id="step-23"></div>
          <div class="step blue-step" id="step-22"></div>
          <div class="step blue-step" id="step-21"></div>
        </div>
        <div class="house blue-house">
          <div class="house-inner">
            <div class="house-step" id="house-step-1-0"></div>
            <div class="house-step" id="house-step-1-1"></div>
            <div class="house-step" id="house-step-1-2"></div>
            <div class="house-step" id="house-step-1-3"></div>
          </div>
        </div>
      </div>
      <div class="board-block">
        <div class="left-middle-block">
          <div class="middle-block-row">
            <div class="step yellow-step" id="step-40"></div>
            <div class="step yellow-step" id="step-39"></div>
            <div class="step yellow-step" id="step-38"></div>
            <div class="step yellow-step" id="step-37"></div>
            <div class="step yellow-step" id="step-36"></div>
            <div class="step yellow-step" id="step-35"></div>
          </div>
          <div class="middle-block-row">
            <div class="step yellow-step" id="step-41"></div>
            <div class="end-house green-end-house" id="end-house-3-1">
              <div class="end-house-label game-font text text-green">1</div>
            </div>
            <div class="end-house green-end-house" id="end-house-3-2">
              <div class="end-house-label game-font text-green">2</div>
            </div>
            <div class="end-house green-end-house" id="end-house-3-3">
              <div class="end-house-label game-font text-green">3</div>
            </div>
            <div class="end-house green-end-house" id="end-house-3-4">
              <div class="end-house-label game-font text-green">4</div>
            </div>
            <div class="end-house green-end-house" id="end-house-3-5">
              <div class="end-house-label game-font text-green">5</div>
            </div>
          </div>
          <div class="middle-block-row">
            <div class="step green-step start-green-step" id="step-42"></div>
            <div class="step green-step" id="step-43"></div>
            <div class="step green-step" id="step-44"></div>
            <div class="step green-step" id="step-45"></div>
            <div class="step green-step" id="step-46"></div>
            <div class="step green-step" id="step-47"></div>
          </div>
        </div>
        <div class="center-middle-block">
          <div class="middle-block-row">
            <div class="step yellow-step" id="step-34"></div>
            <div class="end-house yellow-end-house" id="end-house-2-6">
              <div class="end-house-label game-font text-yellow">6</div>
            </div>
            <div class="step blue-step" id="step-20"></div>
          </div>
          <div class="middle-block-row">
            <div class="end-house green-end-house" id="end-house-3-6">
              <div class="end-house-label game-font text-green">6</div>
            </div>
            <div class="center-core" id="dice">
              <div class="dice game-font" onclick="game.get_dice()">
                Go!
              </div>
            </div>
            <div class="end-house blue-end-house" id="end-house-1-6">
              <div class="end-house-label game-font text-blue">6</div>
            </div>
          </div>
          <div class="middle-block-row">
            <div class="step green-step" id="step-48"></div>
            <div class="end-house red-end-house" id="end-house-0-6">
              <div class="end-house-label game-font text-red">6</div>
            </div>
            <div class="step red-step" id="step-6"></div>
          </div>
        </div>
        <div class="right-middle-block">
          <div class="middle-block-row">
            <div class="step blue-step" id="step-19"></div>
            <div class="step blue-step" id="step-18"></div>
            <div class="step blue-step" id="step-17"></div>
            <div class="step blue-step" id="step-16"></div>
            <div class="step blue-step" id="step-15"></div>
            <div class="step blue-step start-blue-step" id="step-14"></div>
          </div>
          <div class="middle-block-row">
            <div class="end-house blue-end-house" id="end-house-1-5">
              <div class="end-house-label game-font text-blue">5</div>
            </div>
            <div class="end-house blue-end-house" id="end-house-1-4">
              <div class="end-house-label game-font text-blue">4</div>
            </div>
            <div class="end-house blue-end-house" id="end-house-1-3">
              <div class="end-house-label game-font text-blue">3</div>
            </div>
            <div class="end-house blue-end-house" id="end-house-1-2">
              <div class="end-house-label game-font text-blue">2</div>
            </div>
            <div class="end-house blue-end-house" id="end-house-1-1">
              <div class="end-house-label game-font text-blue">1</div>
            </div>
            <div class="step red-step" id="step-13"></div>
          </div>
          <div class="middle-block-row">
            <div class="step red-step" id="step-7"></div>
            <div class="step red-step" id="step-8"></div>
            <div class="step red-step" id="step-9"></div>
            <div class="step red-step" id="step-10"></div>
            <div class="step red-step" id="step-11"></div>
            <div class="step red-step" id="step-12"></div>
          </div>
        </div>
      </div>
      <div class="board-block">
        <div class="house green-house">
          <div class="house-inner">
            <div class="house-step" id="house-step-3-0"></div>
            <div class="house-step" id="house-step-3-1"></div>
            <div class="house-step" id="house-step-3-2"></div>
            <div class="house-step" id="house-step-3-3"></div>
          </div>
        </div>
        <div class="upper-block-house">
          <div class="step green-step" id="step-49"></div>
          <div class="step green-step" id="step-50"></div>
          <div class="step green-step" id="step-51"></div>
          <div class="step green-step" id="step-52"></div>
          <div class="step green-step" id="step-53"></div>
          <div class="step green-step" id="step-54"></div>
        </div>
        <div class="upper-block-house">
          <div class="end-house red-end-house" id="end-house-0-5">
            <div class="end-house-label game-font text-red">5</div>
          </div>
          <div class="end-house red-end-house" id="end-house-0-4">
            <div class="end-house-label game-font text-red">4</div>
          </div>
          <div class="end-house red-end-house" id="end-house-0-3">
            <div class="end-house-label game-font text-red">3</div>
          </div>
          <div class="end-house red-end-house" id="end-house-0-2">
            <div class="end-house-label game-font text-red">2</div>
          </div>
          <div class="end-house red-end-house" id="end-house-0-1">
            <div class="end-house-label game-font text-red">1</div>
          </div>
          <div class="step green-step" id="step-55"></div>
        </div>
        <div class="upper-block-house">
          <div class="step red-step" id="step-5"></div>
          <div class="step red-step" id="step-4"></div>
          <div class="step red-step" id="step-3"></div>
          <div class="step red-step" id="step-2"></div>
          <div class="step red-step" id="step-1"></div>
          <div class="step red-step start-red-step" id="step-0"></div>
        </div>
        <div class="house red-house">
          <div class="house-inner">
            <div class="house-step" id="house-step-0-0">0</div>
            <div class="house-step" id="house-step-0-1">1</div>
            <div class="house-step" id="house-step-0-2">2</div>
            <div class="house-step" id="house-step-0-3">3</div>
          </div>
        </div>
      </div>
    </div>
    <div class="player-info">
      <div class="card player-info-item">
        <div class="card-header bg-red text-white game-font">
          <h3>Siêu nhân đỏ</h3>
        </div>
        <div class="card-body player-info-item-body">
          <button type="button" class="btn btn-outline-danger game-font" onclick="game.give_up(0)" style="font-size: 24px">
            Bỏ lượt
          </button>
          <span class="player-turn-alert text-red game-font" id="player-turn-msg-0">Lượt của bạn</span>
        </div>
      </div>
      <div class="card player-info-item">
        <div class="card-header bg-blue text-white game-font">
          <h3>Siêu nhân xanh</h3>
        </div>
        <div class="card-body player-info-item-body">
          <button type="button" class="btn btn-outline-primary game-font" onclick="game.give_up(1)" style="font-size: 24px">
            Bỏ lượt
          </button>
          <span class="player-turn-alert text-blue game-font" id="player-turn-msg-1">Lượt của bạn</span>
        </div>
      </div>
      <div class="card player-info-item">
        <div class="card-header bg-yellow text-white game-font">
          <h3>Siêu nhân vàng</h3>
        </div>
        <div class="card-body player-info-item-body">
          <button type="button" class="btn btn-outline-warning game-font" onclick="game.give_up(2)" style="font-size: 24px">
            Bỏ lượt
          </button>
          <span class="player-turn-alert text-yellow game-font" id="player-turn-msg-2">Lượt của bạn</span>
        </div>
      </div>
      <div class="card player-info-item game-font">
        <div class="card-header bg-green text-white">
          <h3>Siêu nhân lá</h3>
        </div>
        <div class="card-body player-info-item-body">
          <button type="button" class="btn btn-outline-success game-font" onclick="game.give_up(3)" style="font-size: 24px">
            Bỏ lượt
          </button>
          <span class="player-turn-alert text-green game-font" id="player-turn-msg-3">Lượt của bạn</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="alert-modal" tabindex="-1" aria-labelledby="alert-modal-label" aria-hidden="true" data-bs-keyboard="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" style="background-color: orange">
          <h5 class="modal-title game-font text-white" id="alert-modal-label" style="font-size: 35px">
            Cảnh báo
          </h5>
          <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body game-font" id="modal-content" style="font-size: 50px">
          <i class="fa-solid fa-triangle-exclamation" style="margin-right: 30px"></i>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="game-over-modal" tabindex="-1" aria-labelledby="game-over-modal-label" aria-hidden="true" data-bs-keyboard="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" style="background-color: limegreen">
          <h5 class="modal-title game-font text-white" id="game-over-modal-label" style="font-size: 35px">
            Game Over
          </h5>
          <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body game-font" id="game-over-modal-content" style="font-size: 50px">
          <i class="fa-solid fa-triangle-exclamation" style="margin-right: 30px"></i>
        </div>
      </div>
    </div>
  </div>

  <script src="assets/vendor/bootstrap/dist/js/bootstrap.js"></script>
  <script src="assets/vendor/fontawesome-free-6.4.2-web/js/all.js"></script>
  <!-- <script src="assets/js/dice.js"></script> -->
  <script src="assets/js/draw.js"></script>
  <script src="assets/js/pawn.js"></script>
  <script src="assets/js/pawn-ai.js"></script>
  <script src="assets/js/game.js"></script>
  <script src="assets/js/main.js"></script>
  <script>
    game.init(<?php echo $ai_string ?>);
    game.draw();
    displayTurn(0);
  </script>
</body>

</html>