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
          <h3 id="currentSubject" class="fw-bold">Bahasa Indonesia</h3>
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

    <section class="add">
      <h1></h1>
    </section>

    <script src="assets/bootstrap-5.3.7-dist/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
    <script>
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
setInterval(updateClock, 1000);
updateClock();
</script>
  </body>
</html>