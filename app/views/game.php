<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="shortcut icon" href="<?= $BASE_URL ?>public/images/adusttlogo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="<?= $BASE_URL ?>public/css/style.css" />
    <title>Art Quiz</title>
</head>

<body>
    <div class="navbar">
        <div class="nav-left">
            <img class="logo" src="<?= $BASE_URL ?>public/images/adusttlogo.jpg" alt="" />
            <p class="nav-left-text">
                ADÜ Sanat Tarihi Topluluğu<br />
                Art Quiz
            </p>
        </div>
        <input style="display: none" type="checkbox" id="toggle-menu" />
        <label for="toggle-menu">
            <i class="fa-solid fa-bars"></i>
        </label>
        <ul class="nav-right">
            <li class="navbar-item">Nasıl Oynarım ?</li>
            <li class="navbar-item">Skor tablosu</li>
        </ul>
    </div>

    <div class="quiz-div">
        <div class="quiz-container">
            <div class="quiz-status-bar">
                <div class="left-status-bar">1 of 7 question</div>
                <div class="right-status-bar">
                    <i style="font-size: 20px" class="fa-solid fa-stopwatch"></i>
                    <span class="countdown"></span>
                </div>
            </div>
            <div class="question-bar">
                <!-- <div class="question">
            Barok döneminin önemli bir ressamı olan ve Caravaggio'nun öğrencisi
            olarak bilinen bu sanatçı, dramatik aydınlatma tekniğiyle tanınır.
            Hangi sanatçıdan bahsediyoruz?
          </div>
          <div class="answers">
            <button class="option">Hieronymus Bosch</button>
            <button class="option">Peter Paul Rubens</button>
            <button class="option">Jan Vermeer</button>
            <button class="option">Rembrandt van Rijn</button>
          </div> -->
            </div>
            <button class="next-question">Sonraki Soru</button>

            <div class="start-panel">
                <div class="start-panel-header">
                    <h3>Hoşgeldin Sanatsever 🤘🏼</h3>
                    <p>Bu haftanın konusu karışık, bol şanş 😜</p>
                    <p>"Kesinlikle" oyuna başlamadan önce <a style="font-weight: 600;" href="#">kuralları</a> okumayı unutma 💣</p>
                    <button class="start-button">Oyuna Başla</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        let base_url = "<?= $BASE_URL ?>";
    </script>
    <script src="<?= $BASE_URL ?>public/scripts/main.js"></script>
</body>

</html>