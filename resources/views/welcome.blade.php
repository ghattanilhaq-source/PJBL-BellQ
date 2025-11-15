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
        max-width: 520px;
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
        max-width: 520px;
        margin: 0 auto 60px auto;
        text-align: center;
        background: white;
      width: 520px;
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
        max-width: 520px;
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
        max-width: 520px;
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
    <section id="addRingSection" data-aos="fade-up" data-aos-duration="1000">
      <h4><i class="fa-solid fa-bullhorn"></i> Add rings!</h4>
      <form id="addRingForm" novalidate method="post" action="/api/bells">
        @csrf
        <div class="mb-3">
          <label for="subjectInput" class="form-label">Subject</label>
          <input
            type="text"
            class="form-control"
            id="subjectInput"
            placeholder="Example: Bahasa Indonesia"
            autocomplete="off"
            required
            name="subject"
          />
        </div>

        <div class="mb-3">
          <label for="soundInput" class="form-label">Sound (MP3)</label><br />
          <label for="soundInput" class="custom-file-upload"
            >Choose MP3</label
          >
          <span id="file-name">No file chosen</span>
          <input
            type="file"
            id="soundInput"
            accept=".mp3,audio/mpeg"
            style="display: none"
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

        <button type="submit" id="addScheduleBtn">Add to schedule</button>
      </form>
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
      // Utilities
      function formatTime(date) {
        return date.toLocaleTimeString("en-US", {
          hour12: false,
          hour: "2-digit",
          minute: "2-digit",
        });
      }

      // Show time picker on click for time inputs
      const timeInputs = document.querySelectorAll('input[type="time"]');
      timeInputs.forEach((input) => {
        input.addEventListener("click", () => {
          input.showPicker();
        });
      });

      // Clock update
      const mainTimeEl = document.getElementById("mainTime");
      const mainDateEl = document.getElementById("mainDate");
      function updateClock() {
        const now = new Date();
        mainTimeEl.textContent = now.toLocaleTimeString("en-US", {
          hour12: true,
          hour: "2-digit",
          minute: "2-digit",
          second: "2-digit",
        });
        mainDateEl.textContent = now.toLocaleDateString("en-US", {
          weekday: "long",
          year: "numeric",
          month: "long",
          day: "numeric",
        });
      }
      setInterval(updateClock, 1000);
      updateClock();

      // Sound file input
      const soundInput = document.getElementById("soundInput");
      const fileNameSpan = document.getElementById("file-name");
      soundInput.addEventListener("change", () => {
        const file = soundInput.files[0];
        if (file) {
          if (file.type !== "audio/mpeg") {
            alert("Only MP3 files are allowed!");
            soundInput.value = "";
            fileNameSpan.textContent = "No file chosen";
            return;
          }
          fileNameSpan.textContent = file.name;
        } else {
          fileNameSpan.textContent = "No file chosen";
        }
      });

      // Elements for form inputs and preview
      const subjectInput = document.getElementById("subjectInput");
      const startTimeInput = document.getElementById("startTime");
      const endTimeInput = document.getElementById("endTime");
      const previewRingName = document.getElementById("previewRingName");
      const previewPeriod = document.getElementById("previewPeriod");

      // Preview update function
      function updatePreview() {
        const subject = subjectInput.value.trim() || "Ring name";
        const start = startTimeInput.value.trim();
        const end = endTimeInput.value.trim();

        previewRingName.textContent = subject;

        if (start && end) {
          previewPeriod.textContent = `${start} - ${end}`;
        } else {
          previewPeriod.textContent = "Period";
        }
      }

      subjectInput.addEventListener("input", updatePreview);
      startTimeInput.addEventListener("input", updatePreview);
      endTimeInput.addEventListener("input", updatePreview);

      document.addEventListener("DOMContentLoaded", updatePreview);

      // Container for activities and count for ring number
      const activitiesContainer = document.getElementById("activitiesContainer");
      let ringCount = 1;

      // Helper to create option badge element with class & text content
      function createBadge(status) {
        const span = document.createElement("span");
        span.classList.add("badge");
        if (status === "completed") {
          span.classList.add("badge-completed");
          span.textContent = "Completed";
        } else if (status === "active") {
          span.classList.add("badge-active");
          span.textContent = "Active";
        } else {
          span.classList.add("badge-upcoming");
          span.textContent = "Upcoming";
        }
        return span;
      }

      // Function to create and append activity card
      function addActivityCard(subject, period, status) {
        const card = document.createElement("div");
        card.classList.add("activity-card");

        // Header with ring number and badge
        const header = document.createElement("div");
        header.className = "activity-header";
        header.innerHTML = `<div>${ringCount}th Ring</div>`;
        header.appendChild(createBadge(status));
        card.appendChild(header);

        // Subject + time
        const subjectEl = document.createElement("div");
        subjectEl.className = "activity-subject";
        subjectEl.textContent = subject;
        card.appendChild(subjectEl);

        const timeEl = document.createElement("div");
        timeEl.className = "activity-time";
        timeEl.textContent = period;
        card.appendChild(timeEl);

        activitiesContainer.appendChild(card);
        ringCount++;
      }

      // Preload default activities (as example)
      const defaultActivities = [
        {
          subject: "Bahasa Indonesia",
          period: "07:00 - 08:00",
          status: "upcoming",
          date: "Friday, November 14, 2025",
        },
        
      ];

      function loadDefaultActivities() {
        defaultActivities.forEach((act) => {
          addActivityCard(act.subject, act.period, act.status);
        });
      }

      // Load defaults on DOM ready
      document.addEventListener("DOMContentLoaded", loadDefaultActivities);

      // Form submit (Add to schedule)
      const addRingForm = document.getElementById("addRingForm");
      addRingForm.addEventListener("submit", (e) => {
        e.preventDefault();

        const subject = subjectInput.value.trim();
        const start = startTimeInput.value.trim();
        const end = endTimeInput.value.trim();
        if (!subject || !start || !end) {
          alert("Please fill all fields before adding schedule!");
          return;
        }

        // Validate start < end
        if (start >= end) {
          alert("End time must be after start time!");
          return;
        }

        // Tambahkan activity baru dengan status upcoming
        addActivityCard(subject, `${start}-${end}`, "upcoming");

        // Reset form and preview
        addRingForm.reset();
        updatePreview();
        fileNameSpan.textContent = "No file chosen";

        // Update countdown and current time after slight delay
        setTimeout(() => {
          updateCurrentTimeCard();
          startNextBellCountdown();
        }, 200);
      });

      // ====== CURRENT TIME & UPCOMING SCHEDULE LOGIC ======
      const currentSubjectEl = document.getElementById("currentSubject");
      const currentScheduleEl = document.getElementById("currentSchedule");
      const nextBellCountdownEl = document.getElementById("nextBellCountdown");

      // Parse all time strings on activities and return schedules list
      function getSchedules() {
        const cards = document.querySelectorAll(".activity-card");
        let schedules = [];
        cards.forEach((card) => {
          const subject = card.querySelector(".activity-subject").textContent;
          const periodText = card.querySelector(".activity-time").textContent;
          const [start, end] = periodText.split("-");
          schedules.push({
            subject,
            start,
            end,
          });
        });
        return schedules;
      }

      // Get current active schedule if any
      function getCurrentSchedule() {
        const now = new Date();

        const schedules = getSchedules();

        for (const sch of schedules) {
          const [sh, sm] = sch.start.split(":").map(Number);
          const [eh, em] = sch.end.split(":").map(Number);

          const startTime = new Date();
          startTime.setHours(sh, sm, 0, 0);

          const endTime = new Date();
          endTime.setHours(eh, em, 0, 0);

          if (now >= startTime && now < endTime) {
            return sch;
          }
        }
        return null;
      }

      // Get next upcoming schedule
      function getUpcomingSchedule() {
        const now = new Date();
        const schedules = getSchedules();

        let closest = null;

        for (const sch of schedules) {
          const [sh, sm] = sch.start.split(":").map(Number);
          const scheduleTime = new Date();
          scheduleTime.setHours(sh, sm, 0, 0);

          if (scheduleTime > now) {
            if (!closest || scheduleTime < closest.time) {
              closest = { ...sch, time: scheduleTime };
            }
          }
        }
        return closest;
      }

      // Update current time card display
      function updateCurrentTimeCard() {
        const active = getCurrentSchedule();
        const upcoming = getUpcomingSchedule();

        if (active) {
          currentSubjectEl.textContent = active.subject;
          currentScheduleEl.textContent = `${active.start} - ${active.end}`;
        } else if (upcoming) {
          currentSubjectEl.textContent = upcoming.subject + " (Upcoming)";
          currentScheduleEl.textContent = `${upcoming.start} - ${upcoming.end}`;
        } else {
          currentSubjectEl.textContent = "No Schedule";
          currentScheduleEl.textContent = "--:--";
        }
      }

      // ====== NEXT BELL COUNTDOWN LOGIC ======
      let countdownInterval = null;

      function startNextBellCountdown() {
        if (countdownInterval) clearInterval(countdownInterval);

        const now = new Date();
        const schedules = getSchedules();

        // Find closest upcoming start time
        let nextBellTime = null;
        schedules.forEach((sch) => {
          const [sh, sm] = sch.start.split(":").map(Number);
          const scheduleTime = new Date();
          scheduleTime.setHours(sh, sm, 0, 0);
          if (scheduleTime > now) {
            if (!nextBellTime || scheduleTime < nextBellTime) {
              nextBellTime = scheduleTime;
            }
          }
        });

        if (!nextBellTime) {
          nextBellCountdownEl.textContent = "--:--";
          return;
        }

        countdownInterval = setInterval(() => {
          const now = new Date();
          const diff = nextBellTime - now;

          if (diff <= 0) {
            clearInterval(countdownInterval);
            nextBellCountdownEl.textContent = "00:00";
            startNextBellCountdown(); // restart cari jadwal berikutnya
            updateCurrentTimeCard();
            return;
          }

          const minutes = Math.floor(diff / 1000 / 60);
          const seconds = Math.floor((diff / 1000) % 60);

          nextBellCountdownEl.textContent =
            String(minutes).padStart(2, "0") +
            ":" +
            String(seconds).padStart(2, "0");
        }, 1000);
      }

      // Initialize Current time & Next bell countdown on page load
      document.addEventListener("DOMContentLoaded", () => {
        updateCurrentTimeCard();
        startNextBellCountdown();
      });

      // Update current time card every second
      setInterval(updateCurrentTimeCard, 1000);
    </script>
  </body>
</html>
