<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BelQ website</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="assets/bootstrap-5.3.7-dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
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

      <div class="container d-flex">
        <div class="info-cards">
          <span class="fw-bold"
            ><i class="fa-solid fa-alarm-clock"></i>Current time!</span
          >
          <span class="badge rounded-pill status-active text-bg-success"
            >Active</span
          >
          <h3 id="currentSubject">Bahasa Indonesia</h3>
          <p id="currentSchedule">10:40 - 12:00</p>
        </div>
        <div class="next-cards">
          <span class="fw-bold"
            ><i class="fa-solid fa-bell gradient-color me-2"></i>Next bell in
            :</span
          >
          <p id="nextTime">--:--</p>
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
            <h2 class="fw-bold">1st Ring</h2>
            <span class="badge rounded-pill text-bg-success text-bottom"
              >Completed</span
            >
          </div>
          <div class="card-body">
            <h2 class="gradient-color fw-bold">MPP</h2>
            <p id="dateText" class="fw-bold">07:00-08:00</p>
          </div>
        </div>
        <div class="activity-card">
          <div class="card-header d-flex justify-content-between">
            <h2 class="fw-bold">2nd Ring</h2>
            <span class="badge rounded-pill text-bg-success text-bottom"
              >Completed</span
            >
          </div>
          <div class="card-body">
            <h2 class="gradient-color fw-bold">Databases</h2>
            <p id="dateText" class="fw-bold">07:00-08:00</p>
          </div>
        </div>
        <div class="activity-card">
          <div class="card-header d-flex justify-content-between">
            <h2 class="fw-bold">3rd Ring</h2>
            <span class="badge rounded-pill text-bg-success text-bottom"
              >Completed</span
            >
          </div>
          <div class="card-body">
            <h2 class="gradient-color fw-bold">First Rest</h2>
            <p id="dateText" class="fw-bold">07:00-08:00</p>
          </div>
        </div>
        <div class="activity-card">
          <div class="card-header d-flex justify-content-between">
            <h2 class="fw-bold">4th Ring</h2>
            <span class="badge rounded-pill text-bg-warning text-bottom"
              >Active</span
            >
          </div>
          <div class="card-body">
            <h2 class="gradient-color fw-bold">Bahasa Indonesia</h2>
            <p id="dateText" class="fw-bold">07:00-08:00</p>
          </div>
        </div>
        <div class="activity-card">
          <div class="card-header d-flex justify-content-between">
            <h2 class="fw-bold">1st Ring</h2>
            <span class="badge rounded-pill text-bg-success text-bottom"
              >Completed</span
            >
          </div>
          <div class="card-body">
            <h2 class="gradient-color fw-bold">MPP</h2>
            <p id="dateText" class="fw-bold">07:00-08:00</p>
          </div>
        </div>
        <div class="activity-card">
          <div class="card-header d-flex justify-content-between">
            <h2 class="fw-bold">1st Ring</h2>
            <span class="badge rounded-pill text-bg-success text-bottom"
              >Completed</span
            >
          </div>
          <div class="card-body">
            <h2 class="gradient-color fw-bold">MPP</h2>
            <p id="dateText" class="fw-bold">07:00-08:00</p>
          </div>
        </div>
      </div>
    </section>

    <script src="assets/bootstrap-5.3.7-dist/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
  </body>
</html>