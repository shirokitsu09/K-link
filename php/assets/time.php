 <div class="time-pickable">
    <div class="hour hidden" id="hour">--</div>
    <div class="colon">:</div>
    <div class="minute hidden" id="minute">--</div>
</div>
    <div id="dropdown-hour" class="dropdown-hour hidden">
        <select id="HourDropdown" size="5">
            <option value="00">00</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
        </select>
        <input type="text" id="HourInput" name="Hour" style="display: none;" value="">
    </div>

    <div id="dropdown-minute" class="dropdown-minute hidden">
        <select id="MinuteDropdown" size="5">
            <option value="00">00</option>
            <option value="05">05</option>
            <option value="10">10</option>
            <option value="15">15</option>
            <option value="20">20</option>
            <option value="25">25</option>
            <option value="30">30</option>
            <option value="35">35</option>
            <option value="40">40</option>
            <option value="45">45</option>
            <option value="50">50</option>
            <option value="55">55</option>
        </select>
        <input type="text" id="MinuteInput" name="Minute" style="display: none;" value="">
    </div>
        <input type="time" id="CombinedTimeInput" name="time" hidden>
<!-- -------------------------------------------------------------- -->

<script>
      function openHour() {
    let toggleButtonHour = document.getElementById('hour');
    let dropdownHour = document.getElementById('dropdown-hour');
    let HourDropdown = document.getElementById('HourDropdown');

    toggleButtonHour.addEventListener('mousedown', function (event) {
        event.preventDefault();
        dropdownHour.classList.toggle('hidden');
        toggleButtonHour.classList.toggle('hidden');
    });

    HourDropdown.addEventListener('change', function () {
        toggleButtonHour.textContent = HourDropdown.value;
        dropdownHour.classList.add('hidden');
        toggleButtonHour.classList.add('hidden');
        
        changeTime();
    });
}

function openMinute() {
    let toggleButtonMinute = document.getElementById('minute');
    let dropdownMinute = document.getElementById('dropdown-minute');
    let MinuteDropdown = document.getElementById('MinuteDropdown');

    toggleButtonMinute.addEventListener('mousedown', function (event) {
        event.preventDefault();
        dropdownMinute.classList.toggle('hidden');
        toggleButtonMinute.classList.toggle('hidden');
    });

    MinuteDropdown.addEventListener('change', function () {
        toggleButtonMinute.textContent = MinuteDropdown.value;
        dropdownMinute.classList.add('hidden');
        toggleButtonMinute.classList.add('hidden');
        
        changeTime();
    });
}

    document.addEventListener('DOMContentLoaded', function () {
        openHour();
        openMinute();
    });


    function changeTime() {
        let hour = document.getElementById('HourInput');
        let minute = document.getElementById('MinuteInput');
        let hour_show = document.getElementById('hour');
        let minute_show = document.getElementById('minute');

        hour.value = hour_show.textContent;
        minute.value = minute_show.textContent;

        console.log("Selected Hour:", hour.value);
        console.log("Selected Minute:", minute.value);

        let combinedTime = hour.value + ":" + minute.value;
        console.log("Combined Time:", combinedTime);

        document.getElementById("CombinedTimeInput").value = combinedTime;
    }

    changeTime();


    </script>
