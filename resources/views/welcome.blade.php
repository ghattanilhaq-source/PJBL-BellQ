<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>BelQ website</title>

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      crossorigin="anonymous"
    />

    <!-- FontAwesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      rel="stylesheet"
    />

    <!-- AOS/Animate -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
      /* Reset & Font */
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
      }

      body {
        background-color: #F9F8FF;
        padding: 30px 15px;
      }

      /* Header */
      .header {
        text-align: center;
        margin-bottom: 25px;
      }
      .logo {
        font-size: 36px;
        font-weight: 600;
        background: linear-gradient(90deg, #5f45ff, #a06aff);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        display: inline-flex;
        align-items: center;
        gap: 8px;
      }
      .subtitle {
        color: #b2a6f0;
        font-weight: 500;
        font-size: 14px;
        margin-top: 4px;
      }

      /* Section Titles */
      .section-title {
        font-weight: 600;
        font-size: 20px;
        color: #5f45ff;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        margin-bottom: 15px;
      }

      /* Card container fixes */
      #activitiesContainer {
        background: #e0d7ff;
        border-radius: 15px;
        padding: 20px;
        max-width: 720px;
        margin: 0 auto 40px auto;
        box-shadow: 0 3px 8px rgba(116, 85, 255, 0.3);
      }

      /* Each activity card */
      .activity-card {
        background: white;
        border-radius: 12px;
        padding: 12px 18px;
        margin-bottom: 12px;
        box-shadow: 0 4px 8px rgb(152 113 255 / 0.25);
        transition: background 0.3s ease, scale 0.3s ease-in-out;
      }
      .activity-card:hover {
        background: #f3ecff ;
        scale: 1.05;
      }

      .activity-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-weight: 600;
        font-size: 14px;
        color: #4a3da7;
      }

      .activity-subject {
        color: #6633ff;
        font-weight: 700;
        font-size: 17px;
        margin-top: 4px;
        margin-bottom: 2px;
      }

      .activity-time {
        font-size: 13px;
        color: #7a60ff;
        font-weight: 600;
      }

      /* Badge styles */
      .badge-completed {
        background-color: #6fcf97;
        color: white;
        font-weight: 600;
        font-size: 12px;
        border-radius: 10px;
        padding: 4px 10px;
        text-transform: capitalize;
      }
      .badge-active {
        background-color: #f2b950;
        color: white;
        font-weight: 600;
        font-size: 12px;
        border-radius: 10px;
        padding: 4px 10px;
      }
      .badge-upcoming {
        background-color: #a88eff;
        color: white;
        font-weight: 600;
        font-size: 12px;
        border-radius: 10px;
        padding: 4px 10px;
      }

      /* Time Section */


      #timeSection {
        max-width: 720px;
        margin: 0 auto 60px auto;
        text-align: center;
        background: white;
      width: 720px;
      padding: 35px 15px;
      border-radius: 25px;
      box-shadow: 0 0 25px rgba(154, 109, 255, 0.2);
      transition: 0.5s;
      }

      #timeSection:hover {
        scale: 1.1;
      }

      #mainTime {
        font-size: 45px;
        font-weight: 700;
        color: #5f45ff;
        margin-bottom: 4px;
      }
      #mainDate {
        font-size: 15px;
        font-weight: 600;
        color: #9e8ef7;
      }

      /* Current and Next Bell Cards container */
      #currentNextContainer {
        display: flex;
        max-width: 720px;
        margin: 25px auto 50px auto;
        gap: 20px;
      }

      .info-card {
        background: white;
        flex: 1;
        border-radius: 15px;
        padding: 18px 20px;
        box-shadow: 0 3px 16px rgb(140 90 255 / 0.2);
        text-align: left;
        transition: 0.5s;
      }

      .info-card:hover {
        scale: 1.05;
      }

      .info-card h5 {
        font-weight: 600;
        color: #5f45ff;
        margin-bottom: 12px;
      }

      .current-subject {
        font-weight: 700;
        font-size: 19px;
        color: #532aff;
        margin-bottom: 6px;
      }

      .schedule-time {
        font-weight: 600;
        color: #7c5efe;
      }

      /* Next bell countdown */
      .next-bell-countdown {
        font-weight: 700;
        font-size: 35px;
        color: #5f45ff;
        text-align: center;
        margin-top: 16px;
      }

      /* Add Ring Form */
      #addRingSection {
        max-width: 720px;
        margin: 0 auto;
        background: white;
        padding: 20px 25px 30px 25px;
        border-radius: 15px;
        box-shadow: 0 3px 20px rgba(130, 73, 255, 0.25);
        color: #5f45ff;
      }

      #addRingSection h4 {
        text-align: center;
        font-weight: 700;
        margin-bottom: 18px;
      }

      form label {
        font-weight: 600;
        color: #6b4cff;
      }

      .form-control,
      .form-control:focus {
        border-color: #a88eff;
        box-shadow: none;
        color: #5b3aff;
      }

      .custom-file-upload {
        margin-top: 6px;
        display: inline-block;
        background-color: #6b4cff;
        color: white;
        padding: 6px 14px;
        border-radius: 8px;
        cursor: pointer;
        font-weight: 600;
        transition: background-color 0.3s ease;
        user-select: none;
      }
      .custom-file-upload:hover {
        background-color: #4d33d9;
      }

      #file-name {
        font-size: 13px;
        color: #6b4cff;
        margin-left: 12px;
        vertical-align: middle;
      }

      /* Preview Card */
      #previewCard {
        background-color: #f3ecff;
        border-radius: 12px;
        padding: 18px 20px;
        margin: 20px 0;
        color: #6b4cff;
      }
      #previewCard h5 {
        display: flex;
        justify-content: space-between;
        font-weight: 700;
        margin-bottom: 6px;
      }
      #previewRingName {
        font-weight: 600;
        font-size: 17px;
      }
      #previewPeriod {
        font-size: 14px;
        color: #a393e6;
      }

      /* Button */
      #addScheduleBtn {
        display: block;
        margin: 0 auto;
        background-color: #713aff;
        border: none;
        padding: 10px 30px;
        font-size: 14px;
        border-radius: 18px;
        font-weight: 700;
        cursor: pointer;
        color: white;
        transition: background-color 0.3s ease;
        user-select: none;
      }
      #addScheduleBtn:hover {
        background-color: #5829cc;
      }

      /* Footer */
      footer {
        text-align: center;
        margin-top: 40px;
        font-size: 13px;
        color: #6b4cff;
        font-weight: 600;
      }

      /* =========================
   RESPONSIVE DESIGN
========================= */

/* Tablet */
@media (max-width: 768px) {
  #timeSection {
    width: 100%;
    padding: 25px 15px;
  }

  #currentNextContainer {
    flex-direction: column;
    gap: 15px;
  }

  .info-card {
    text-align: center;
  }

  #mainTime {
    font-size: 38px;
  }

  .next-bell-countdown {
    font-size: 28px;
  }

  .activity-subject {
    font-size: 16px;
  }
}

/* Mobile */
@media (max-width: 480px) {
  body {
    padding: 15px 10px;
  }

  .logo {
    font-size: 28px;
  }

  .section-title {
    font-size: 16px;
  }

  #timeSection {
    padding: 20px 10px;
    border-radius: 18px;
  }

  #mainTime {
    font-size: 32px;
  }

  #mainDate {
    font-size: 13px;
  }

  #activitiesContainer {
    padding: 15px 12px;
  }

  .activity-card {
    padding: 10px 14px;
  }

  .activity-subject {
    font-size: 15px;
  }

  .next-bell-countdown {
    font-size: 24px;
  }

  #addRingSection {
    padding: 18px 15px 25px 15px;
  }

  #addScheduleBtn {
    width: 100%;
    padding: 12px;
  }
}

    </style>
  </head>
  <body>
    <header class="header">
      <div class="logo" data-aos="fadein" data-aos-duration="1000">
        <i class="fa-solid fa-bell"></i> BelQ
      </div>
      <p class="subtitle" data-aos="fadein" data-aos-duration="1000">admin display dashboard</p>
    </header>

    <!-- Today's Activities -->
    <section>
      <div class="section-title" data-aos="fadein" data-aos-duration="1000">
        <i class="fa-solid fa-table"></i> Today's activities
      </div>
      <div id="activitiesContainer" data-aos="fadeIn " data-aos-easing="ease" data-aos-duration="1000">
        <!-- Default activities will be added by script -->
      </div>
    </section>

    <!-- Time Section -->
    <section id="timeSection" class="mainTime-card" data-aos="fadeIn" data-aos-duration="1000">
      <div id="mainTime">--:--:--</div>
      <div id="mainDate">Day, 00 Month Years</div>
    </section>

    <!-- Current and Next Bell Info -->
    <section id="currentNextContainer" data-aos="fadeIn" data-aos-duration="1000">
      <div class="info-card" id="currentTimeCard">
        <h5><i class="fa-solid fa-alarm-clock"></i> Current time!</h5>
        <div class="current-subject" id="currentSubject">No Schedule</div>
        <div class="schedule-time" id="currentSchedule">--:--</div>
      </div>
      <div class="info-card" id="nextBellCard">
        <h5><i class="fa-solid fa-bell"></i> Next bell in :</h5>
        <div class="next-bell-countdown" id="nextBellCountdown">--:--</div>
      </div>
    </section>

    <!-- Add Rings Form -->
   <form action="/api/bells" method="POST" >
      @csrf
    <section id="addRingSection">
    <section id="addRingSection" data-aos="fade-up" data-aos-duration="1000">
      <h4><i class="fa-solid fa-bullhorn"></i> Add rings!</h4>
        <div class="mb-3">
          <label for="subjectInput" class="form-label">Subject</label>
          <input
            type="text"
            class="form-control"
            id="subjectInput"
            placeholder="Example: Bahasa Indonesia"
            autocomplete="off"
            name="subject"
            required
          />
        </div>

        <div class="mb-3">
          <label for="soundInput" class="form-label">Sound (MP3)</label><br />
          <label for="soundInput" class="custom-file-upload" name="sound"
            >Choose MP3</label
          >
          <span id="file-name">No file chosen</span>
          <input
            type="file"
            id="soundInput"
            accept=".mp3,audio/mpeg"
            style="display: none"
            name="sound"
          />
        </div>

        <div class="mb-3">
          <label class="form-label">Period (Start and End Time)</label>
          <div class="d-flex gap-2">
            <input
              type="time"
              class="form-control"
              id="startTime"
              name="start_time"
              required
            />
            <input
              type="time"
              class="form-control"
              id="endTime"
              name="end_time"
              required
            />
          </div>
        </div>

        <!-- Preview -->
        <div id="previewCard">
          <h5>
            .. Ring!
            <span class="badge badge-upcoming">Upcoming</span>
          </h5>
          <div id="previewRingName">Ring name</div>
          <div id="previewPeriod">Period</div>
        </div>

        <button type="submit" id="addScheduleBtn" class="btn">Add to schedule</button>
      </form>
      <div style="text-align:center; margin-bottom:15px; margin-top:15px">
    <button onclick="enableSound()" class="btn btn-primary">
      🔔 Enable Bell Sound
    </button>
  </div>
  
  <audio id="bellPlayer"></audio>
    </section>


    <footer >created by: <b>XI PPLG</b> kelompok 1</footer>

    <!-- Bootstrap Bundle JS (Popper included) -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      crossorigin="anonymous"
    ></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script>
/* =========================
   AKTIFKAN AUDIO (WAJIB 1x KLIK)
========================= */
let audioEnabled = localStorage.getItem("audioEnabled") === "true";
const bellPlayer = document.getElementById("bellPlayer");

function enableSound() {
  audioEnabled = true;
  localStorage.setItem("audioEnabled", "true");
  alert("✅ Bell sound aktif!");
}


/* =========================
   PAKSA INPUT TIME BISA KLIK
========================= */
document.querySelectorAll('input[type="time"]').forEach(input => {
  input.addEventListener("click", function () {
    this.showPicker();
  });
});


/* =========================
   JAM REALTIME
========================= */
function updateClock() {
  const now = new Date();
  document.getElementById("mainTime").innerText =
    now.toLocaleTimeString("id-ID", { hour12: false });

  document.getElementById("mainDate").innerText =
    now.toLocaleDateString("id-ID", {
      weekday: "long",
      day: "2-digit",
      month: "long",
      year: "numeric"
    });
}
setInterval(updateClock, 1000);
updateClock();


/* =========================
   PREVIEW LIVE
========================= */
const subjectInput = document.getElementById("subjectInput");
const startTime = document.getElementById("startTime");
const endTime = document.getElementById("endTime");
const soundInput = document.getElementById("soundInput");
const previewName = document.getElementById("previewRingName");
const previewPeriod = document.getElementById("previewPeriod");
const fileName = document.getElementById("file-name");

subjectInput.addEventListener("input", () => {
  previewName.innerText = subjectInput.value || "Ring name";
});

startTime.addEventListener("input", updatePreview);
endTime.addEventListener("input", updatePreview);

function updatePreview() {
  previewPeriod.innerText =
    startTime.value && endTime.value
      ? `${startTime.value} - ${endTime.value}`
      : "Period";
}

soundInput.addEventListener("change", () => {
  fileName.innerText = soundInput.files[0]?.name || "No file chosen";
});


/* =========================
   SIMPAN KE LOCAL STORAGE
========================= */
const form = document.querySelector("form");
const activitiesContainer = document.getElementById("activitiesContainer");

form.addEventListener("submit", function (e) {
  e.preventDefault();

  const newRing = {
    subject: subjectInput.value,
    start: startTime.value,
    end: endTime.value,
    sound: fileName.innerText
  };

  let data = JSON.parse(localStorage.getItem("rings")) || [];
  data.push(newRing);
  localStorage.setItem("rings", JSON.stringify(data));

  form.reset();
  previewName.innerText = "Ring name";
  previewPeriod.innerText = "Period";
  fileName.innerText = "No file chosen";

  renderActivities();
});


/* =========================
   TAMPILKAN TODAY ACTIVITIES
========================= */
function renderActivities() {
  activitiesContainer.innerHTML = "";
  const data = JSON.parse(localStorage.getItem("rings")) || [];

  data.forEach(ring => {
    const card = document.createElement("div");
    card.className = "activity-card";
    card.innerHTML = `
      <div class="activity-header">
        <span class="badge badge-upcoming">Upcoming</span>
      </div>
      <div class="activity-subject">${ring.subject}</div>
      <div class="activity-time">${ring.start} - ${ring.end}</div>
    `;
    activitiesContainer.appendChild(card);
  });
}

renderActivities();


/* =========================
   CURRENT TIME + NEXT BELL + AUTO SOUND
========================= */
let bellPlayed = false;

function updateCurrentAndNext() {
  const now = new Date();
  const nowSeconds =
    now.getHours() * 3600 + now.getMinutes() * 60 + now.getSeconds();

  const data = JSON.parse(localStorage.getItem("rings")) || [];

  let current = null;
  let next = null;

  data.forEach(ring => {
    const [sh, sm] = ring.start.split(":");
    const [eh, em] = ring.end.split(":");

    const startSec = sh * 3600 + sm * 60;
    const endSec = eh * 3600 + em * 60;

    if (nowSeconds >= startSec && nowSeconds <= endSec) {
      current = ring;

      // 🔔 BUNYI OTOMATIS SAAT JAM TEPAT
      if (audioEnabled && nowSeconds === startSec && !bellPlayed) {
        bellPlayer.src = URL.createObjectURL(soundInput.files[0]);
        bellPlayer.play();
        bellPlayed = true;
      }
    }

    if (nowSeconds < startSec && !next) {
      next = ring;
      bellPlayed = false;
    }
  });

  document.getElementById("currentSubject").innerText =
    current ? current.subject : "No Schedule";

  document.getElementById("currentSchedule").innerText =
    current ? `${current.start} - ${current.end}` : "--:--";

  if (next) {
    const [nh, nm] = next.start.split(":");
    const nextSeconds = nh * 3600 + nm * 60;

    const diff = nextSeconds - nowSeconds;
    const minutes = Math.floor(diff / 60);
    const seconds = diff % 60;

    document.getElementById("nextBellCountdown").innerText =
      `${minutes}m ${seconds}s`;
  } else {
    document.getElementById("nextBellCountdown").innerText = "--:--";
  }
}

setInterval(updateCurrentAndNext, 1000);
updateCurrentAndNext();
</script>

  </body>
</html>
