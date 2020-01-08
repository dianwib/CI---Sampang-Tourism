<div class="time">
  <span class="hms"></span>
  <span class="ampm"></span>
  <br>
  <span class="date"></span>
</div>



<style type="text/css">
	body {
    font-family: "Work Sans", sans-serif;
}
.time {
    background: #222;
    color: #fff;
    padding: 8px;
    text-align: center;
    width: 300px;
}
.hms {
    font-size: 48pt;
    font-weight: 200;
}
.ampm {
    font-size: 12pt;
}
.date {
    font-size: 10pt;
}
</style>


<script type="text/javascript">
	


	function updateTime() {
  var dateInfo = new Date();

  /* time */
  var hr,
    _min = (dateInfo.getMinutes() < 10) ? "0" + dateInfo.getMinutes() : dateInfo.getMinutes(),
    sec = (dateInfo.getSeconds() < 10) ? "0" + dateInfo.getSeconds() : dateInfo.getSeconds(),
    ampm = (dateInfo.getHours() >= 12) ? "PM" : "AM";

  // replace 0 with 12 at midnight, subtract 12 from hour if 13–23
  if (dateInfo.getHours() == 0) {
    hr = 12;
  } else if (dateInfo.getHours() > 12) {
    hr = dateInfo.getHours() - 12;
  } else {
    hr = dateInfo.getHours();
  }

  var currentTime = hr + ":" + _min + ":" + sec;

  // print time
  document.getElementsByClassName("hms")[0].innerHTML = currentTime;
  document.getElementsByClassName("ampm")[0].innerHTML = ampm;

  /* date */
  var dow = [
      "Minggu",
      "Senin",
      "Selasa",
      "Rabu",
      "Kamis",
      "Jumat",
      "Sabtu"
    ],
    month = [
      "Januari",
      "Februari",
      "Maret",
      "April",
      "Mei",
      "Juni",
      "Juli",
      "Augustus",
      "September",
      "Oktober",
      "November",
      "Desember"
    ],
    day = dateInfo.getDate();

  // store date
  var currentDate = dow[dateInfo.getDay()] + ", " + month[dateInfo.getMonth()] + " " + day;

  document.getElementsByClassName("date")[0].innerHTML = currentDate;
};

// print time and date once, then update them every second
updateTime();
setInterval(function() {
  updateTime()
}, 1000);
</script>