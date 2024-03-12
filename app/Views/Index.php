<!DOCTYPE html>
<html>
  <meta charset="UTF-8" /><meta
    content="width=device-width, initial-scale=1, user-scalable=1, minimum-scale=1, maximum-scale=5"
    name="viewport"
  /><meta content="IE=edge" http-equiv="X-UA-Compatible" />

  <link
    rel="icon"
    type="image/svg+xml"
    href="https://feeldreams.github.io/main-icon.png"
  />
  <link
    rel="apple-touch-icon"
    href="https://feeldreams.github.io/main-icon.png"
  />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap"
    rel="stylesheet"
  />
  <link
    href="https://fonts.googleapis.com/css2?family=Caveat&display=swap"
    rel="stylesheet"
  />
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;700&display=swap"
    rel="stylesheet"
  />

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
  <script
    src="https://kit.fontawesome.com/4f3ce16e3e.js"
    crossorigin="anonymous"
  ></script>
  <script src="https://unpkg.com/typeit@8.7.0/dist/index.umd.js"></script>
  <link
    href="/style.css"
    rel="stylesheet"
    type="text/css"
  />
  <script src="https://unpkg.com/scrollreveal"></script>

  <head>
    <title>Fila Gautama</title>
    <meta name="description" content="HTML Feeldream Repl Co" />
  </head>
  <body>
    <div class="overlay">
      <div class="loading-message">Halo dek Filaawwww cantikkkuuu<br /></div>
    </div>

    <audio
      src="/wave.mp3"
      id="linkmp3"
      class="sembunyi"
    ></audio>

    <section class="first">
      <div class="wp">
        <img
          id="imgsatu"
          src="fila1.jpg"
        />
      </div>
      <img
        id="first_stiker"
        class="stiker fade-in"
        src="https://feeldreams.github.io/bunga.gif"
      />
      <h1 class="title">Happy Valentine day Cantikuuuuuu</h1>
      <p class="flip">Aku kasi
        <b class="lingkar">Something</b>
      </p>
      <p class="slide-up"><i>ini buat dek Filaaaww</i></p>
    </section>

    <section>
      <div class="wp">
        <img
          id="imgdua"
          src="fila2.jpg"
        />
      </div>
      <img class="stiker fade-in" src="https://feeldreams.github.io/pusn.gif" />
      <h2 class="title"><i>Love you more cintahhhhh</i></h2>
      <p class="slide-right">
        Your love is all I need to feel complete in
        <b class="lingkar">My life</b>
        <p class="flip">:)</p>
      </p>
    </section>

    <section>
      <div class="wp">
        <img
          id="imgtiga"
          src="fila3.jpg"
        />
      </div>
      <p id="teksnimasi">
        Happy Valentine day dek filaaawwww, maap hari valentine cuma ngasih ini :(<br /><br /><b
          ><i>Kamu Tau Ga yangggg?</i></b
        ><br />Aku sayanggg poollllll be kamoeeee<br/><br />BTW
        makacieee mau nerimaaa akuuuu apa adanyaaa yah, 
        <br />aku janji :
        <br /> ~ Ga aneh-aneh
        <br /> ~ Ga nackal
        <br /> ~ Ga liat ciwi-ciwi
        <br /> ~ Selalu Mencintaimu
        <br /> ~ Selalu Menyayangimu
        <br /> ~ Selalu Be Dek FILA GAUTAMA :)
      </p>
    </section>

    <section>
      <div class="wp">
        <img
          id="imgempat"
          src="fila4.jpg"
        />
      </div>
      <img
        class="stiker fade-in"
        src="https://feeldreams.github.io/bunga.gif"
      />
      <h2 class="title"><i>Intinya</i></h2>
      <p class="slide-right">
        <b>Dek Fiilaaawww<br />Boleh Ga Aku dijadikan Rumahmu?</b>
      </p>
      <div id="Tombol">
        <a id="By" onClick="fungsimau()">Mau</a>
        <a id="Bn" onClick="fungsigamau()">Gamau</a>
      </div>
    </section>

    <section id="iniakhir">
      <div class="wp" id="wpakhir">
        <img src="fila5.jpg" />
      </div>
      <img
        id="stikerakhir"
        class="stiker fade-in"
        src="https://feeldreams.github.io/g5.gif"
      />
      <img
        id="stikerakhir2"
        style="display: none"
        src="https://feeldreams.github.io/emawh.gif"
      />
      <h1 id="judulakhir"></h1>
      <p id="kalimatakhir"></p>
      <p id="palingakhir"></p>
      <div id="TombolWA">
        <a onClick="menuju()">Balas</a>
      </div>
    </section>

    <div id="initom" class="menu">
      <a class="tombol" onclick="tes()">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="16"
          height="16"
          fill="currentColor"
          class="bi bi-arrow-down"
          viewBox="0 0 16 16"
        >
          <path
            fill-rule="evenodd"
            d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"
          />
        </svg>
      </a>
    </div>

    <script>
      function fungsimau() {
        fungsi = 0;
        tes();
        teksjudulakhir = "Yeayyy!";
        tekskalimatakhir =
          "Makasii udah mau nerima aku<br>jadi RUMAHMU, xixixi";
        pesanwhatsapp = "maw, Love uuuuu gantenggkuuu, mwahhhhhh :*";
        teksjudulakhir2 = "Love U sayang :*";
        tekspalingakhir = "Balesnya <br>di wa aja yah cintaaahhhh<br> nanti pilih aja nomerku"
        }
      function fungsigamau() {
        fungsi = 0;
        tes();
        teksjudulakhir = "Yahhh ";
        tekskalimatakhir =
          "Jahat banget siiiii,<br>tapi aku tetep bakal berusaha jadi yang terbaik biar <br>aku dijadiin rumahmu kelak :)";
        pesanwhatsapp = "gamau,next mungkinnnn mawww ><";
      teksjudulakhir2 = "It's OK :)";
      tekspalingakhir = "Tep bales nya<br>di wa yah<br> nanti pilih aja nomerku";
        }



      const body = document.querySelector("body");
      initom.style = "opacity:0;bottom:0;transition:none";
      audio = new Audio("" + linkmp3.src);
      function berjatuhan() {
        const heart = document.createElement("div");
        heart.className = "fas fa-heart";
        heart.style.left = Math.random() * 90 + "vw";
        heart.style.animationDuration = Math.random() * 3 + 2 + "s";
        body.appendChild(heart);
      }
      setInterval(function name(params) {
        var heartArr = document.querySelectorAll(".fa-heart");
        if (heartArr.length > 100) {
          heartArr[0].remove();
        }
      }, 100);
    </script>
    <script src="https://feeldreams.github.io/maukahkamu/main.js"></script>
  </body>
</html>
