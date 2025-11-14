<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BelQ website</title>
    <link rel="stylesheet" href="style.css" />
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <style>
      
      * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

.header {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  margin: 0;
}

.header .logo {
  font-size: 42px;
  font-weight: 600;
  margin-top: 50px;
}

.subtitle {
  color: #796cbc;
  font-size: 14px;
  margin-top: -3px;
}

.gradient-color {
  font-weight: 700;
  background: linear-gradient(90deg, #5f45ff, #a06aff);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.main-time-card {
  background: white;
  width: 520px;
  max-width: 90%;
  margin: 30px auto;
  padding: 35px 15px;
  border-radius: 25px;
  box-shadow: 0 0 25px rgba(154, 109, 255, 0.2);
  text-align: center;
  transition: 0.5s;
}

.main-time-card:hover {
  scale: 1.1;
}

.main-time-card h1 {
  font-size: 54px;
  font-weight: 600;
  color: #9a6dff;
}

.main-time-card p {
  margin-top: 8px;
  font-size: 14px;
  color: #a79dd8;
}

.info-cards {
  background: white;
  width: 450px;
  max-width: 90%;
  margin: 30px auto;
  padding: 20px 25px;
  border-radius: 25px;
  box-shadow: 0 0 25px rgba(154, 109, 255, 0.2);
  text-align: left;
  justify-content: space-between;
  transition: 0.5s;
}

.info-cards:hover {
  scale: 1.1;
}

.info-cards h3 {
  color: #9a6dff;
}

.info-cards p {
  font-weight: bold;
  color: grey;
}

.next-cards {
  background: white;
  width: 450px;
  max-width: 90%;
  margin: 30px auto;
  padding: 20px 25px;
  border-radius: 25px;
  box-shadow: 0 0 25px rgba(154, 109, 255, 0.2);
  text-align: left;
  transition: 0.5s;
}

.next-cards:hover {
  scale: 1.1;
}

.next-cards h1 {
  color: #9a6dff;
  font-weight: bold;
}
.next-cards P {
  color: #9a6dff;
  font-weight: bold;
  text-align: center;
  margin-top: 20px;
}

.next-cards .nextBell {
  font-size: 50px;
}

.text {
  font-size: 35px;
  font-weight: 600;
  color: #9a6dff;
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 50px;
}

.card {
  background: white;
  box-shadow: 0 0 24px rgba(153, 109, 255, 0.2);
  border-radius: 25px;
  margin: 30px auto;
  padding: 20px 10px;
  transition: 0.5s;
}

.low-card {
  gap: none;
}

.activity-card {
  background: #926ad24c;
  margin: 0 auto;
  width: 1000px;
  max-height: 90%;
  padding: 0 15px;
  border-radius: 25px;
  box-shadow: 0 0 25px rgba(154, 109, 255, 0.2);
  text-align: left;
  transition: 0.5s;
  scale: 0.9;
}
.activity-card:hover {
  scale: 1;
}

.activity-card .card-header {
  background: transparent;
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 5px;
  height: 50px;
  margin-top: 10px;
}

.activity-card .card-body {
  margin-left: 10px;
  height: 75px;
  display: flex;
  flex-direction: row;
  gap: 10px;
  justify-content: left;
  align-items: center;
}

.activity-card p {
  margin-top: 20px;
}

.activity-card .card-body p {
  margin-top: 13px;
}

.activity-card .text-bottom {
  margin-top: 20px;
}

.badge {
  margin-bottom: 10px;
}

.info {
  max-width: 90%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  margin: 0 auto;
}

.add-ring {
  margin-top:80px;
}

.add-text {
  text-align: center;
  font-size: 36px;
  font-weight: 700;
  color: #8b4dff;
  margin-bottom: 20px;
}

.add-card {
  background: white;
  box-shadow: 0 4px 15px rgba(139, 77, 255, 0.15);
  border-radius: 20px;
  width: 80%;
  max-width: 900px;
  margin: 0 auto;
  padding: 30px; 
  color: #8b4dff;
}

.subject-form {
  flex: 1;
  min-width: 200px;
}

.input-subject {
  border: none;
  border-bottom: 2px solid #d5c5ff;
  width: 100%;
  padding: 5px;
  outline: none;
  color: #6b4cff;
}

.sound-form {
  flex: 1;
  min-width: 200px;
}

.soundInput {
  border: none;
  border-bottom: 2px solid #d5c5ff;
  width: 100%;
  padding: 5px;
  color: #6b4cff;
}

.custom-file-upload {
  background-color: #6b4cff;
  color: white;
  padding: 6px 12px;
  border-radius: 8px;
  cursor: pointer;
  font-weight: 600;
  transition: 0.3s;
}
.custom-file-upload:hover {
  background-color: #5938ff;
}
#file-name {
  margin-left: 10px;
  color: #6b4cff;
  font-size: 14px;
}

.timeInput {
  border: none;
  border-bottom: 2px solid #d5c5ff;
  padding: 5px;
  outline: none;
  color: #6b4cff;
}

.periodInput {
  flex: 1;
  min-width: 200px;
  position: relative;
  width: fit-content;
}

.periodInput .inputLabel {
  /* Membuat unit "S" bisa diposisikan di dalam wrapper */
    position: absolute; 
    /* Posisikan unit "S" di kanan dalam wrapper */
    right: 135px; 
    /* Posisikan unit di tengah secara vertikal */
    /* opacity: 0; */
    top: 70%; 
    transform: translateY(-50%);
    display: inline-flex;
    /* Sesuaikan gaya font dan warna */
    color: #999; /* Warna abu-abu agar terlihat sebagai label tambahan */
    font-size: 0.9em;
    pointer-events: none; /* Penting! Agar user masih bisa klik input, bukan span */
    z-index: 2; /* Pastikan unit "S" di atas input jika diperlukan */
}

.periodInput .durationInput {
  /* Beri sedikit padding di kanan agar angka tidak tertutup unit "S" */
    padding-right: 25px; 
    /* Pastikan input berada di atas unit */
    z-index: 1;
}


    </style>
  </head>
  <body>
    <div class="header">
      <div class="logo gradient-color">
        <i class="fa-solid fa-bell"></i> BelQ
      </div>
      <p class="subtitle">admin display dashboard</p>

      <div class="main-time-card">
        <h1 id="mainTime">--:--:--</h1>
        <p id="dateText">Day, 00 Month Years</p>
      </div>

      <div class="container d-flex justify-content-between low-card">
        <div class="info-cards">
          <span class="fw-bold"
            ><i class="fa-solid fa-alarm-clock"></i>Current time!</span
          >
          <span class="badge rounded-pill status-active text-bg-success"
            >Active</span
          >
          <h3 class="fw-bold mt-3"id="currentSubject">Bahasa Indonesia</h3>
          <p id="currentSchedule">10:40 - 12:00</p>
        </div>
        <div class="next-cards">
          <span class="fw-bold"
            ><i class="fa-solid fa-bell gradient-color me-2"></i>Next bell in
            :</span
          >
          <p id="nextBellCountdown" class="nextBell">--:--</p>
        </div>
      </div>
    </div>
    <section class="info">
      <div class="text">
        <span class="gradient-color"
          ><i class="fa-solid fa-table me-2 gradient-color"></i>Today's
          activities</span
        >
      </div>
      <div class="card">
        <div class="activity-card">
          <div class="card-header d-flex justify-content-between">
            <p class="fw-bold">1st Ring</p>
            <span class="badge rounded-pill text-bg-success text-bottom "
              >Completed</span
            >
          </div>
          <div class="card-body">
            <h3 class="gradient-color fw-bold ">MPP</h3>
            <p id="dateText" class="fw-bold">07:00-08:00</p>
          </div>
        </div>
        <div class="activity-card">
          <div class="card-header d-flex justify-content-between">
            <p class="fw-bold">2nd Ring</p>
            <span class="badge rounded-pill text-bg-success text-bottom"
              >Completed</span
            >
          </div>
          <div class="card-body">
            <h3 class="gradient-color fw-bold">Databases</h3>
            <p id="dateText" class="fw-bold">07:00-08:00</p>
          </div>
        </div>
        <div class="activity-card">
          <div class="card-header d-flex justify-content-between">
            <p class="fw-bold">3rd Ring</p>
            <span class="badge rounded-pill text-bg-success text-bottom"
              >Completed</span
            >
          </div>
          <div class="card-body">
            <h4 class="gradient-color fw-bold">First Rest</h4>
            <p id="dateText" class="fw-bold">07:00-08:00</p>
          </div>
        </div>
        <div class="activity-card">
          <div class="card-header d-flex justify-content-between">
            <p class="fw-bold">4th Ring</p>
            <span class="badge rounded-pill text-bg-warning text-bottom"
              >Active</span
            >
          </div>
          <div class="card-body">
            <h4 class="gradient-color fw-bold">Bahasa Indonesia</h4>
            <p id="dateText" class="fw-bold">07:00-08:00</p>
          </div>
        </div>
        <div class="activity-card">
          <div class="card-header d-flex justify-content-between">
            <p class="fw-bold">1st Ring</p>
            <span class="badge rounded-pill text-bg-success text-bottom"
              >Completed</span
            >
          </div>
          <div class="card-body">
            <h4 class="gradient-color fw-bold">MPP</h4>
            <p id="dateText" class="fw-bold">07:00-08:00</p>
          </div>
        </div>
        <div class="activity-card">
          <div class="card-header d-flex justify-content-between">
            <p class="fw-bold">1st Ring</p>
            <span class="badge rounded-pill text-bg-success text-bottom"
              >Completed</span
            >
          </div>
          <div class="card-body">
            <h4 class="gradient-color fw-bold">MPP</h4>
            <p id="dateText" class="fw-bold">07:00-08:00</p>
          </div>
        </div>
      </div>
    </section>

   <form action="/" method="#" >
      @csrf
    <section class="add-ring">
      <div class="add-text gradient-color">
        <i class="fa-solid fa-bullhorn me-2"></i> Add rings!
      </div>

      <div class="add-card">
        <div
          style="
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 20px;
          "
        >
          <div class="subject-form">
            <label style="font-weight: 600;">Subject</label><br />
            <input
              type="text"
              placeholder="example"
              class="input-subject"
              id="subjectInput"/>
              
          </div>
          <div class="sound-form">
    <label for="soundInput" style="font-weight: 600; color: #6b4cff;">Sound</label><br />
    <label for="soundInput" class="custom-file-upload">Choose MP3</label>
    <span id="file-name">No file chosen</span>
    <input
      type="file"
      id="soundInput"
      accept=".mp3,audio/mpeg"
      style="display: none;"
    />
</div>

          <div class="periodInput">
            <label style="font-weight: 600;">Period(Time & Long)</label><br />
            <div style="display: flex; align-items: center; gap: 10px;">
              <input
                type="time"
                class="timeInput"
                id="startTime"
              />
              <div style="display: flex; align-items: center; gap: 10px;">
                <input
                type="number"
                min="1"
                max="60"
                value="5"
                class="timeInput durationInput"
                id="durationInput" />
                <span class="inputLabel">S</span>
              </div>
            </div>
          </div>
        </div>

        <hr style="border: none; border-top: 1px solid #eee; margin: 25px 0;" />

        <h3 style="text-align: center; color: #8b4dff; font-weight: 600;">
          Preview
        </h3>

        <div
          style="
            background-color: #f3ecff;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 20px;
          "
        >
          <h4
            style="
              display: flex;
              justify-content: space-between;
              margin: 0;
              color: #6b4cff;
            "
          >
            .. Ring! <span style="background: #ede3ff; padding: 4px 10px; border-radius: 15px; font-size: 12px;">Upcoming</span>
          </h4>
          <div style="margin-top: 15px; font-weight: 600;" id="ringNamePreview">Ring name</div>
          <div style="font-size: 14px; color: #a393e6;" id="periodPreview">Period</div> 
        </div>

        <button
        style="
            display: block;
            margin: 0 auto;
            background-color: #8b4dff;
            color: white;
            border: none;
            border-radius: 20px;
            padding: 10px 30px;
            font-size: 14px;
            cursor: pointer;
            transition: 0.3s;
            "
          class="btn gradient-color"
          >
          Add to schedule
        </button>
      </div>

      <p
        style="
          text-align: center;
          color: #8b4dff;
          font-size: 13px;
          margin-top: 30px;
        "
      >
        created by: <b>XI PPLG</b>
      </p>
    </section>
    </form>
    </form>


    <script src="assets/bootstrap-5.3.7-dist/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
    <script>

  const timeInputs = document.querySelectorAll('.timeInput');

  timeInputs.forEach(input => {
    input.addEventListener('click', function () {
      this.showPicker();
    });
  });

  setInterval(updateClock, 1000);
  updateClock();

  const soundInput = document.getElementById('soundInput');
  soundInput.addEventListener('change', function() {
    const file = this.files[0];
    if (file && file.type !== 'audio/mpeg') {
      alert('Hanya file MP3 yang diperbolehkan!');
      this.value = ''; // reset input
    }
  });

  // 1. Ambil elemen input berdasarkan ID yang sudah ditetapkan/diperbaiki
    const subjectInput = document.getElementById('subjectInput');
    const startTimeInput = document.getElementById('startTime');
    const durationInput = document.getElementById('durationInput'); // Mengambil ID yang baru
    
    // 2. Ambil elemen preview berdasarkan ID yang baru ditambahkan
    const ringNamePreview = document.getElementById('ringNamePreview');
    const periodPreview = document.getElementById('periodPreview');
    
    // 3. Fungsi untuk mengupdate semua elemen preview
    function updatePreview() {
        // Ambil nilai dari input. Jika kosong, gunakan teks default.
        const subject = subjectInput.value.trim() || 'Ring name'; 
        const startTime = startTimeInput.value.trim() || '--:--';
        const duration = durationInput.value.trim() || '5';

        // Update Ring Name Preview
        ringNamePreview.textContent = subject;

        // Update Period Preview (menggabungkan waktu dan durasi)
        periodPreview.textContent = `${startTime} (${duration} seconds)`; 
    }
    
    // 4. Daftarkan event listener untuk memicu update setiap kali input berubah
    subjectInput.addEventListener('input', updatePreview);
    startTimeInput.addEventListener('input', updatePreview);
    durationInput.addEventListener('input', updatePreview);

    // 5. Panggil sekali saat halaman dimuat (untuk menampilkan nilai default/awal)
    document.addEventListener('DOMContentLoaded', updatePreview);
    
    
    function updateClock() {
  const now = new Date();
  document.getElementById('mainTime').innerText = now.toLocaleTimeString();
  
  const options = {
    weekday: 'long',
    month: 'long',
    day: 'numeric',
    year: 'numeric',
  };
  document.getElementById('dateText').innerText = now.toLocaleDateString(
    'en-US',
    options
  );
  }

  // TARGET: container card Today's activities
const activityContainer = document.querySelector(".card");

// BUTTON add to schedule
const addButton = document.querySelector(".add-card button");

let ringCount = 7; // biar lanjut dari data sebelumnya

addButton.addEventListener("click", function (e) {
    e.preventDefault();

    const subject = subjectInput.value.trim();
    const startTime = startTimeInput.value.trim();
    const duration = durationInput.value.trim();

    if (!subject || !startTime || !duration) {
        alert("Isi semua field sebelum menambahkan jadwal!");
        return;
    }

    // Hitung endTime
    const [hour, minute] = startTime.split(":").map(Number);
    const endDate = new Date();
    endDate.setHours(hour, minute + Number(duration));

    const endHour = String(endDate.getHours()).padStart(2, "0");
    const endMinute = String(endDate.getMinutes()).padStart(2, "0");

    const periodText = `${startTime}-${endHour}:${endMinute}`;

    // TEMPLATE CARD BARU
    const newCard = document.createElement("div");
    newCard.classList.add("activity-card");
    newCard.innerHTML = `
        <div class="card-header d-flex justify-content-between">
            <p class="fw-bold">${ringCount}th Ring</p>
            <span class="badge rounded-pill text-bg-warning text-bottom">Upcoming</span>
        </div>
        <div class="card-body">
            <h4 class="gradient-color fw-bold">${subject}</h4>
            <p class="fw-bold">${periodText}</p>
        </div>
    `;

    // Masukkan card baru ke paling bawah
    activityContainer.appendChild(newCard);

    ringCount++;

    // Reset form
    subjectInput.value = "";
    startTimeInput.value = "";
    durationInput.value = "5";
    updatePreview();

    alert("Jadwal berhasil ditambahkan!");
});

// =======================
// NEXT BELL COUNTDOWN LOGIC
// =======================

let countdownInterval = null;

// Ambil semua card, cari jadwal upcoming terdekat
function getNextBellTime() {
    const cards = document.querySelectorAll(".activity-card");

    let now = new Date();
    let closestTime = null;

    cards.forEach(card => {
        const timeText = card.querySelector(".card-body p").textContent;
        const startTime = timeText.split("-")[0]; // contoh "07:00"

        const [h, m] = startTime.split(":").map(Number);

        const scheduled = new Date();
        scheduled.setHours(h, m, 0, 0);

        if (scheduled > now) {
            if (closestTime === null || scheduled < closestTime) {
                closestTime = scheduled;
            }
        }
    });

    return closestTime;
}

// Update countdown
function startNextBellCountdown() {
    if (countdownInterval) clearInterval(countdownInterval);

    const nextBell = getNextBellTime();
    const countdownEl = document.getElementById("nextBellCountdown");

    if (!nextBell) {
        countdownEl.textContent = "--:--";
        return;
    }

    countdownInterval = setInterval(() => {
        const now = new Date();
        const diff = nextBell - now;

        if (diff <= 0) {
            clearInterval(countdownInterval);
            countdownEl.textContent = "00:00";
            startNextBellCountdown(); // cari jadwal berikutnya
            return;
        }

        let minutes = Math.floor(diff / 1000 / 60);
        let seconds = Math.floor((diff / 1000) % 60);

        countdownEl.textContent =
            `${String(minutes).padStart(2, "0")}:${String(seconds).padStart(2, "0")}`;

    }, 1000);
}

// Jalankan countdown saat halaman dibuka
document.addEventListener("DOMContentLoaded", startNextBellCountdown);

// Jalankan countdown ulang setelah user klik Add Schedule
addButton.addEventListener("click", function() {
    setTimeout(startNextBellCountdown, 300); 
});

// ==============================
// CURRENT TIME AUTO UPDATE LOGIC
// ==============================

// Elemen UI
const currentSubjectEl = document.getElementById("currentSubject");
const currentScheduleEl = document.getElementById("currentSchedule");

// Ambil semua jadwal dari card
function getAllSchedules() {
    const cards = document.querySelectorAll(".activity-card");
    const schedules = [];

    cards.forEach(card => {
        const subject = card.querySelector(".card-body h3, .card-body h4").textContent.trim();
        const timeText = card.querySelector(".card-body p").textContent.trim(); // contoh "07:00-08:00"

        const [start, end] = timeText.split("-");

        schedules.push({
            subject,
            start,
            end
        });
    });

    return schedules;
}

// Cek jadwal yang sedang aktif
function getCurrentSchedule() {
    const now = new Date();
    const schedules = getAllSchedules();

    for (let sch of schedules) {
        const [sh, sm] = sch.start.split(":").map(Number);
        const [eh, em] = sch.end.split(":").map(Number);

        const startTime = new Date();
        startTime.setHours(sh, sm, 0, 0);

        const endTime = new Date();
        endTime.setHours(eh, em, 0, 0);

        if (now >= startTime && now <= endTime) {
            return sch; // jadwal sedang berjalan
        }
    }

    return null;
}

// Cari jadwal berikutnya
function getUpcomingSchedule() {
    const now = new Date();
    const schedules = getAllSchedules();

    let closest = null;

    schedules.forEach(sch => {
        const [sh, sm] = sch.start.split(":").map(Number);
        const t = new Date();
        t.setHours(sh, sm, 0, 0);

        if (t > now) {
            if (!closest || t < closest.time) {
                closest = { ...sch, time: t };
            }
        }
    });

    return closest;
}

// Update UI Current Time Card
function updateCurrentTimeCard() {
    const active = getCurrentSchedule();
    const upcoming = getUpcomingSchedule();

    if (active) {
        // Tampilkan yang sedang aktif
        currentSubjectEl.textContent = active.subject;
        currentScheduleEl.textContent = `${active.start} - ${active.end}`;
    } else if (upcoming) {
        // Kalau belum mulai apa pun, tampilkan jadwal berikutnya
        currentSubjectEl.textContent = upcoming.subject + " (Upcoming)";
        currentScheduleEl.textContent = `${upcoming.start} - ${upcoming.end}`;
    } else {
        // Tidak ada jadwal lagi
        currentSubjectEl.textContent = "No Schedule";
        currentScheduleEl.textContent = "--:--";
    }
}

// Update setiap detik
setInterval(updateCurrentTimeCard, 1000);
updateCurrentTimeCard();

// Update card ketika user menambah jadwal
addButton.addEventListener("click", () => {
    setTimeout(updateCurrentTimeCard, 200);
});

</script>
  </body>
</html>