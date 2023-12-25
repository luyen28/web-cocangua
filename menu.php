<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body {
    font-size: 15px;
    line-height: 1.5;
    background-color: #FFF4A3;
}
html {
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}
#menu{
    font-size: 50px;
    line-height: 1.5;
    font-family: 'Source Sans Pro';
    text-align: center!important;
    margin-top: 50px;
    margin-bottom: 50px;
    margin-right: 30%;
    margin-left: 30%;
    padding: 3%;

    }
.button {
      font-family: 'Source Sans Pro Bold', sans-serif;
      color: white;
      font-size: 30px;
      box-sizing: inherit;
      background-color: #aa9c04;
     border: none;
    padding: 20px 30px;
    overflow: hidden;
    margin: auto;
    display: block;
    margin-bottom: 25px;
    width: 200px;
    border-radius: 50px;
    }

    .button:hover {
      background-color: #f7e30e;
    }

    .button:active {
      background-color: #f7ee90;
    }
    .popup {
        z-index: 100;

    box-sizing: content-box;  
    width: 700px;
    height: 600px;
     padding: 30px;  
    position:absolute;
    left: 500px;
    top:320px;
    background-color: #f7ee90;
    transform: translate(-50%, -50%);
    display: 3s;
    visibility: hidden;
}   
    </style>
</head>
<body>
    <div id="menu"> Cờ Cá Ngựa
        <!-- <img src="images.jfif" width="50px" height="50px" alt=""> -->
    </div>
    <button class="button"  href="">Play</button>
    <button class="button"  href="">Play with bot</button>
    <button class="button" id="Help">Help</button>
    <div class="popup">
        <div class="popup" id="myPopup">
            <form action="/login" method="post">
              <h3>Hướng dẫn chơi Cờ cá ngựa </h3>
              <img src="assets/imgs/a.jfif" width="300px" height="300px" alt="">
              <h4>
                Bàn cờ được chia thành 4 phần có màu sắc khác nhau:
Mỗi phần sẽ có một ô tròn lớn để đặt các quân cờ vào trước khi bắt đầu trò chơi.
Tiếp đến là những ô tròn nhỏ, đây sẽ là nơi đặt quân cờ vào để di chuyển, người chơi khi bắt đầu ra quân sẽ đặt quân cờ đầu tiên vào ô tròn nhỏ được in đậm và di chuyển theo chiều ngược chiều kim đồng hồ.
Những ô số từ 1 đến 6 sẽ là đích đến của người chơi khi di chuyển hết chặng đường, xếp đúng các quân cờ vào các ô 6, 5, 4, 3 sẽ thắng cuộc.

              </h4>
              <button class="button" type="submit">Quit</button>
            </form>
          </div>
      <script>
      function showPopup() {
         document.querySelector("#myPopup").style.visibility = "visible";
     }

      function closePopup() {
        document.querySelector("#myPopup").style.display = "3s";
        document.querySelector("#myPopup").style.visibility = "hidden";

      }     
      document.getElementById("Help").addEventListener("click", showPopup);     
      document.querySelector(".popup form").addEventListener("submit", function(event) {
        event.preventDefault();
        closePopup();
      });
        

      </script>

    
</body>
</html>