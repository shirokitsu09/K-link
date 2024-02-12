<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="../css/globalTEST.css" />
    <link rel="stylesheet" href="../css/tutoringlist.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
    />
  </head>
  <body>
    <div class="list-frame" >
      <div class="status-bar"></div>
      <?php include_once'../php/reportList.php'
      ?>
      <div class="list" id="list-1">
        <div class="list-inner">
        <div class="list-inner-head">
        <img class="tutoring-flag-banner" alt="" src="../images/tutoringlist/tutoringbanner.svg" />
        <img class="tdot-button" id="tdot-1" alt="" src="../images/threedot.svg" />
          <div class="tag-group">
          <div class="tag" id="tag-faculty-1">วิศวกรรมศาสตร์</div>
          <div class="tag" id="tag-subject-1">Calculus</div>
          </div>
          <div class="tag-group1">
          <div class="tag" id="tag-major-1">วิศวกรรมคอมพิวเตอร์</div>
          </div>
        <b class="group-amount available">2/5</b>
        </div>
        <div class="list-inner-body" id="innerlist-1">
        <b class="subject">แคลเซคจารย์สยาม</b>
        <div class="mentor">ผู้สอน : AIJHONG</div>
        <div class="group-description">รายละเอียด : polar coordinates</div>
        <div class="group-date">เวลา : 15 มิ.ย. 2567 17.00 - 19.00</div>
        <div class="group-location">สถานที่ : โต๊ะรูม A (โดมเห็ดข้างโรง A)</div>
        <b class="faculty">วิศวกรรมศาสตร์</b>
        </div>
        </div>
        
        <div class="joinbar" id="joinbar-1" style="display: none;">
        <div class="join-button" id="join-1" value="join-1">
            <div class="group">
              <div class="button-text">เข้าร่วมกลุ่ม</div>
              <img class="button-icon" alt="" src="../images/tutoringlist/tutoring-join.svg" />
            </div>
          </div>

          <div class="member-button" id="member-1">
            <div class="group">
              <div class="button-text">สมาชิกกลุ่ม</div>
              <img class="button-icon" alt="" src="../images/tutoringlist/tutoring-member.svg" />
            </div>
          </div>

          <div class="close-button" id="close-1">
                <div class="group">
                  <div class="button-text">ปิด</div>
                  <img class="button-icon1" alt="" src="../images/tutoringlist/tutoring-close.svg" />
                </div>
          </div>
      </div>
      </div>

      <div class="list" id="list-2">
        <div class="list-inner" >
        <div class="list-inner-head">
        <img class="tutoring-flag-banner" alt="" src="../images/tutoringlist/tutoringbanner.svg" />
        <img class="tdot-button" id="tdot-2" alt="" src="../images/threedot.svg" />
          <div class="tag-group">
          <div class="tag" id="tag-faculty-2">วิทยาศาสตร์</div>
          <div class="tag" id="tag-major-2">Biology</div>
          <div class="tag" id="tag-subject-2">ชีวะนาโน</div>
          </div>
          <div class="tag-group1">
          </div>
            <b class="group-amount full">3/3</b>
          </div>
          <div class="list-inner-body" id="innerlist-2">
            <b class="subject">ชีวะชีใจ</b>
            <div class="mentor">ผู้สอน : เจ้าชายไอโบ</div>
            <div class="group-description">รายละเอียด : สอบปลายภาค</div>
            <div class="group-date">เวลา : 1 ม.ค. 2555 13.30 - 16.30</div>
            <div class="group-location">สถานที่ : พระจอมเกล้า 908</div>
            <b class="faculty">วิทยาศาสตร์</b>
          </div>
        </div>
        
        <div class="joinbar" id="joinbar-2" style="display: none;">
          <div class="join-button" id="join-2">
            <div class="group">
              <div class="button-text">เข้าร่วมกลุ่ม</div>
              <img class="button-icon" alt="" src="../images/tutoringlist/tutoring-join.svg" />
            </div>
          </div>

          <div class="member-button" id="member-2">
            <div class="group">
              <div class="button-text">สมาชิกกลุ่ม</div>
              <img class="button-icon" alt="" src="../images/tutoringlist/tutoring-member.svg" />
            </div>
          </div>

          <div class="close-button" id="close-2">
                <div class="group">
                  <div class="button-text">ปิด</div>
                  <img class="button-icon1" alt="" src="../images/tutoringlist/tutoring-close.svg" />
                </div>
          </div>
      </div>
      </div>

      <div class="list" id="list-3">
        <div class="list-inner">
        <div class="list-inner-head">
        <img class="tutoring-flag-banner" alt="" src="../images/tutoringlist/tutoringbanner.svg" />
        <img class="tdot-button" id="tdot-3" alt="" src="../images/threedot.svg" />
          <div class="tag-group">
          <div class="tag" id="tag-faculty-3">วิศวกรรมศาสตร์</div>
          <div class="tag" id="tag-subject-3">Calculus</div>
          </div>
          <div class="tag-group1">
          <div class="tag"></div>
          </div>
            <b class="group-amount available">9/ไม่จำกัด</b>
          </div>
          <div class="list-inner-body" id="innerlist-3">
            <b class="subject">แคล 2</b>
            <div class="mentor">ผู้สอน : เหน่ง iot</div>
            <div class="group-description">รายละเอียด : polar coordinates</div>
            <div class="group-date">เวลา : 15 มิ.ย. 2567 17.00 - 19.00</div>
            <div class="group-location">สถานที่ : Google meet</div>
            <b class="faculty">วิศวกรรมศาสตร์</b>
          </div>
        </div> 
        
        <div class="joinbar" id="joinbar-3" style="display: none;">
        <div class="join-button" id="join-3">
          <div class="group">
            <div class="button-text">เข้าร่วมกลุ่ม</div>
            <img class="button-icon" alt="" src="../images/tutoringlist/tutoring-join.svg" />
          </div>
        </div>

        <div class="member-button" id="member-3">
          <div class="group">
            <div class="button-text">สมาชิกกลุ่ม</div>
            <img class="button-icon" alt="" src="../images/tutoringlist/tutoring-member.svg" />
          </div>
        </div>

        <div class="close-button" id="close-3">
              <div class="group">
                <div class="button-text">ปิด</div>
                <img class="button-icon1" alt="" src="../images/tutoringlist/tutoring-close.svg" />
              </div>
        </div>
      </div>
      
      </div>

      <div class="list" id="list-4">
        <div class="list-inner">
        <div class="list-inner-head">
        <img class="tutoring-flag-banner" alt="" src="../images/tutoringlist/tutoringbanner.svg" />
        <img class="tdot-button" id="tdot-4" alt="" src="../images/threedot.svg" />
          <div class="tag-group">
          <div class="tag" id="tag-faculty-4">วิศวกรรมศาสตร์</div>
          <div class="tag" id="tag-subject-4">Circuits</div>
          </div>
          <div class="tag-group1">
          <div class="tag" id="tag-major-4">วิศวกรรมคอมพิวเตอร์</div>
          </div>
            <b class="group-amount full">10/10</b>
          </div>
          <div class="list-inner-body" id="innerlist-4">
            <b class="subject">เซอกิตจารย์ตู๋</b>
            <div class="mentor">ผู้สอน : โอมZA2595</div>
            <div class="group-description">รายละเอียด : สอบปลายภาค</div>
            <div class="group-date">เวลา : 5 ก.พ. 2558 12.30 - 00.00</div>
            <div class="group-location">สถานที่ : E-12 1007</div>
            <b class="faculty">วิศวกรรมศาสตร์</b>
          </div>
        </div>

        <div class="joinbar" id="joinbar-4" style="display: none;">
        <div class="join-button" id="join-4">
          <div class="group">
            <div class="button-text">เข้าร่วมกลุ่ม</div>
            <img class="button-icon" alt="" src="../images/tutoringlist/tutoring-join.svg" />
          </div>
        </div>

        <div class="member-button" id="member-4">
          <div class="group">
            <div class="button-text">สมาชิกกลุ่ม</div>
            <img class="button-icon" alt="" src="../images/tutoringlist/tutoring-member.svg" />
          </div>
        </div>

        <div class="close-button" id="close-4">
              <div class="group">
                <div class="button-text">ปิด</div>
                <img class="button-icon1" alt="" src="../images/tutoringlist/tutoring-close.svg" />
              </div>
        </div>
      </div>
      </div>

      <div class="list" id="list-5">
        <div class="list-inner">
        <div class="list-inner-head">
        <img class="tutoring-flag-banner" alt="" src="../images/tutoringlist/tutoringbanner.svg" />
        <img class="tdot-button" id="tdot-5" alt="" src="../images/threedot.svg" />
          <div class="tag-group">
          <div class="tag" id="tag-faculty-5">วิทยาศาสตร์</div>
          <div class="tag" id="tag-subject-5">Electronic Circuits</div>
          </div>
          <div class="tag-group1">
          <div class="tag" id="tag-major-5">ฟิสิกส์อุตสาหกรรม</div>
          </div>
            <b class="group-amount available">20/ไม่จำกัด</b>
          </div>
          <div class="list-inner-body" id="innerlist-5">
            <b class="subject">อิเล็กจารย์ส...</b>
            <div class="mentor">ผู้สอน : ตัวตึงภาคฟิ</div>
            <div class="group-description">รายละเอียด : Test 2 - 3</div>
            <div class="group-date">เวลา : 18 ก.ย. 2568 00.30 - 05.30</div>
            <div class="group-location">สถานที่ : โรงครุ</div>
            <b class="faculty">วิทยาศาสตร์</b>
          </div>
        </div>
          
          <div class="joinbar" id="joinbar-5" style="display: none;">
          <div class="join-button" id="join-5">
          <div class="group">
            <div class="button-text">เข้าร่วมกลุ่ม</div>
            <img class="button-icon" alt="" src="../images/tutoringlist/tutoring-join.svg" />
          </div>
        </div>

        <div class="member-button" id="member-5">
          <div class="group">
            <div class="button-text">สมาชิกกลุ่ม</div>
            <img class="button-icon" alt="" src="../images/tutoringlist/tutoring-member.svg" />
          </div>
        </div>

        <div class="close-button" id="close-5">
              <div class="group">
                <div class="button-text">ปิด</div>
                <img class="button-icon1" alt="" src="../images/tutoringlist/tutoring-close.svg" />
              </div>
        </div>
      </div>
      </div>
    </div>


    <script>
      var display = 0;
      var list1 = document.getElementById("list-1"); //list id for padding
      var joinbar1 =document.getElementById("joinbar-1"); //join group id slide in
      var innerlist1 = document.getElementById("innerlist-1"); //touch id for response
      var tpopup = document.getElementById("tpopup"); // three dot pop up id

      var list2 = document.getElementById("list-2");
      var joinbar2 =document.getElementById("joinbar-2");
      var innerlist2 = document.getElementById("innerlist-2");
  

      var list3 = document.getElementById("list-3");
      var joinbar3 =document.getElementById("joinbar-3");
      var innerlist3 = document.getElementById("innerlist-3");


      var list4 = document.getElementById("list-4");
      var joinbar4 =document.getElementById("joinbar-4");
      var innerlist4 = document.getElementById("innerlist-4");


      var list5 = document.getElementById("list-5");
      var joinbar5 =document.getElementById("joinbar-5");
      var innerlist5 = document.getElementById("innerlist-5");

// tag reponse go to tag link

      var tagfaculty = document.getElementById("tag-faculty-1");
      tagfaculty.addEventListener("click", function(){
        location.href = "";
      });

      var tagsubject = document.getElementById("tag-subject-1");
      tagsubject.addEventListener("click", function(){
        location.href = "";
      });

      var tagmajor = document.getElementById("tag-major-1");
      tagmajor.addEventListener("click",function(){
        location.href = "";
      });
      

// joinbar    

      function close_joinbar(e){
        joinbar1.style.display = 'none';
        joinbar2.style.display = 'none';
        joinbar3.style.display = 'none';
        joinbar4.style.display = 'none';
        joinbar5.style.display = 'none';
        document.querySelector('.padding')?.classList.remove('padding')
      }

      var close1 = document.getElementById("close-1");
      close1.addEventListener("click", close_joinbar);
      var close2 = document.getElementById("close-2");
      close2.addEventListener("click", close_joinbar);
      var close3 = document.getElementById("close-3");
      close3.addEventListener("click", close_joinbar);
      var close4 = document.getElementById("close-4");
      close4.addEventListener("click", close_joinbar);
      var close5 = document.getElementById("close-5");
      close5.addEventListener("click", close_joinbar);

      var join1 = document.getElementById("join-1");
      join1.addEventListener("click", function(e){
        console.log("join group1 requested");
        close_joinbar();
      });

      var join2 = document.getElementById("join-2");
      join2.addEventListener("click", function(e){
        console.log("join group2 requested");
        close_joinbar();
      });

      var join3 = document.getElementById("join-3");
      join3.addEventListener("click", function(e){
        console.log("join group3 requested");
        close_joinbar();
      });

      var join4 = document.getElementById("join-4");
      join4.addEventListener("click", function(e){
        console.log("join group4 requested");
        close_joinbar();
      });

      var join5 = document.getElementById("join-5");
      join5.addEventListener("click", function(e){
        console.log("join group5 requested");
        close_joinbar();
      });
      
   
      var member1 = document.getElementById("member-1")
      member1.addEventListener("click", function (e) {
        console.log("member group1 view requested")
        close_joinbar();
      });

      var member2 = document.getElementById("member-2")
      member2.addEventListener("click", function (e) {
        console.log("member group2 view requested")
        close_joinbar();
      });

      var member3 = document.getElementById("member-3")
      member3.addEventListener("click", function (e) {
        console.log("member group3 view requested")
        close_joinbar();
      });

      var member4 = document.getElementById("member-4")
      member4.addEventListener("click", function (e) {
        console.log("member group4 view requested")
        close_joinbar();
      });

      var member5 = document.getElementById("member-5")
      member5.addEventListener("click", function (e) {
        console.log("member group5 view requested")
        close_joinbar();
      });

// Three dot popup open

      tdot1 = document.getElementById("tdot-1")
      tdot1.addEventListener("click",function (e) {
        close_joinbar();
        tpopup_open();
      });

      tdot2 = document.getElementById("tdot-2")
      tdot2.addEventListener("click",function (e) {
        close_joinbar();
        tpopup_open();
      });

      tdot3 = document.getElementById("tdot-3")
      tdot3.addEventListener("click",function (e) {
        close_joinbar();
        tpopup_open();
      });

      tdot4 = document.getElementById("tdot-4")
      tdot4.addEventListener("click",function (e) {
        close_joinbar();
        tpopup_open();
      });

      tdot5 = document.getElementById("tdot-5")
      tdot5.addEventListener("click",function (e) {
        close_joinbar();
        tpopup_open();
      });

      document.addEventListener('click', e => {
    if(!tpopup.contains(e.target) && !tpopupReport.contains(e.target) && !reportpopup.contains(e.target) && e.target !== tdot1 && e.target !== tdot2 && e.target !== tdot3 && e.target !== tdot4 && e.target !== tdot5){
        tpopup_close();
        tpopupReport_close();
        reportpopup_close();
      }
    });

// Open joinbar 

      if (innerlist1) {
        innerlist1.addEventListener("click", function (e) {
          if (list1 != "list-1 padding"){
            close_joinbar();
            joinbar1.style.display = 'block';
            list1.classList.add('padding');
          }
        });
      }

      if (innerlist2) {
        innerlist2.addEventListener("click", function (e) {
          if (list2 != 'list-2.padding'){
            close_joinbar();
            joinbar2.style.display = 'block';
            document.querySelector('.padding')?.classList.remove('padding')
            list2.classList.add('padding');
          }
        });
      }

      if (innerlist3) {
        innerlist3.addEventListener("click", function (e) {
          if (list3 != 'list-3.padding'){
            close_joinbar();
            joinbar3.style.display = 'block';
            document.querySelector('.padding')?.classList.remove('padding')
            list3.classList.add('padding');
          }
        });
      }

      if (innerlist4) {
        innerlist4.addEventListener("click", function (e) {
          if (list4 != 'list-4.padding'){
            close_joinbar();
            joinbar4.style.display = 'block';
            document.querySelector('.padding')?.classList.remove('padding')
            list4.classList.add('padding');
          }
        });
      }
      
      if (innerlist5) {
        innerlist5.addEventListener("click", function (e) {
          if (list5 != 'list-5.padding'){
            close_joinbar();
            joinbar5.style.display = 'block';
            document.querySelector('.padding')?.classList.remove('padding')
            list5.classList.add('padding');
          }
        });
      }
      
  </script>

  </body>
</html>
