<html>
<heade>
  <meta charset="utf-8">
  <title>自訂傳送門選項 - 苦力怕競技場</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@1,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@600&display=swap" rel="stylesheet">
</heade>

<body style="font-family: Noto Serif TC">

  <div class="container">

    <h1 style="text-align:center">自訂傳送門選項</h1>
    <hr><br>
    <h3>感謝您贊助苦力怕競技場伺服器</h3>
    <p>若有任何意見，請不吝向我們回報！</p>
    <div class="alert alert-success" role="alert">此工具提供購買苦力怕競技場伺服器<a href="https://creeper.tw/door-rent/" target="_blank">傳送門租用方案</a>玩家使用！如有任何疑問，歡迎<a href="http://discord.gg/aKj8vyDGdJ" target="_blank">聯絡我們</a>！</div>
    <div class="row">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="自定義傳送門名稱" aria-label="自定義傳送門名稱"
          aria-describedby="basic-addon2" id="e">
        <div class="input-group-append">
        </div>
      </div>
      <select class="custom-select my-1 col-3" id="a">
        <option selected value="">白名單</option>
        <option value="white-list=true">開啟</option>
        <option value="white-list=false">關閉</option>
      </select>
      <select class="custom-select my-1 col-3" id="b">
        <option selected value="">伺服器種類</option>
        <option value="server_type=minecraft">Minecraft</option>
        <option value="server_type=spigot">Spigot</option>
      </select>
      <select class="custom-select my-1 col-3" id="c">
        <option selected value="">伺服器版本</option>
        <option value="version=1.16.2">1.16.2</option>
        <option value="version=1.15.2">1.15.2</option>
        <option value="version=1.14.4">1.14.4</option>
        <option value="version=1.12.2">1.12.2</option>
        <option value="version=1.11.2">1.11.2</option>
      </select>
      <select class="custom-select my-1 col-3" id="d">
        <option selected value="">預設遊戲</option>
        <option value="gametype=74-UHC">苦力怕UHC</option>
        <option value="gametype=111-EmeraldWar">綠寶石戰爭</option>
        <option value="gametype=110-HideAndSeek">躲貓貓</option>
        <option value="gametype=79-DayofKilling">殺戮之日</option>
        <option value="gametype=60-creeperwars">苦力怕戰爭</option>
        <option value="gametype=55-MiniGames">小遊戲同樂地圖</option>
        <option value="gametype=39-goldenwar">黃金戰爭</option>
        <option value="gametype=32-RoomWars">小房間戰爭</option>
        <option value="gametype=31-core">捍衛核心戰</option>
        <option value="gametype=28-sky">天空攻城戰</option>
        <option value="gametype=24-CreativeUHC">創造大亂鬥</option>
      </select>
    </div>
    <br>
    <div class="row">
      <button type="button" class="btn btn-outline-success col downloadBtn">下載設定檔</button>
    </div>
  </div>
</body>

<script>
  let downloadBtn = document.querySelector(".downloadBtn");
  downloadBtn.addEventListener("click", downloadFile);

  function downloadFile() {

    //藉型別陣列建構的 blob 來建立 URL
    let fileName = "server.txt";
    var a = document.getElementById('a').value;
    var b = document.getElementById('b').value;
    var c = document.getElementById('c').value;
    var d = document.getElementById('d').value;
    var e = document.getElementById('e').value;
    const data = "motd = " + e + "\n" + a + "\n" + b + "\n" + c + "\n" + d;
    let blob = new Blob([data], {
      type: "application/octet-stream"
    });
    var href = URL.createObjectURL(blob);
    // 從 Blob 取出資料
    var link = document.createElement("a");
    document.body.appendChild(link);
    link.href = href;
    link.download = fileName;
    link.click();
  }
</script>