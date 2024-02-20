<script>
  var display = 0;

  var list_1 = document.getElementById("list-1-hobby"); //list id for padding
  var Hobbyjoin1 = document.getElementById("hobbyjoin-1"); //join group id slide in
  var innerlist_1 = document.getElementById("innerlist-1-hobby"); //touch id for response
  
  var tpopupH = document.getElementById("tpopup-hobby"); // three dot pop up id

  var list_2 = document.getElementById("list-2-hobby");
  var Hobbyjoin2 = document.getElementById("hobbyjoin-2");
  var innerlist_2 = document.getElementById("innerlist-2-hobby");


  var list3 = document.getElementById("list-3-hobby");
  var Hobbyjoin3 = document.getElementById("hobbyjoinn-3");
  var innerlist_3 = document.getElementById("innerlist-3-hobby");

  // tag reponse go to tag link

  // var tagfaculty = document.getElementById("tag-faculty-1");
  // tagfaculty.addEventListener("click", function () {
  //   location.href = "";
  // });

  // var tagsubject = document.getElementById("tag-subject-1");
  // tagsubject.addEventListener("click", function () {
  //   location.href = "";
  // });

  // var tagmajor = document.getElementById("tag-major-1");
  // tagmajor.addEventListener("click", function () {
  //   location.href = "";
  // });


  // tutoring response button      
  function close_Hobbyjoin(e) {
    Hobbyjoin1.style.display = 'none';
    // Hobbyjoin2.style.display = 'none';
    // Hobbyjoin3.style.display = 'none';
    document.querySelector('.padding')?.classList.remove('padding')
  }

  var close_1 = document.getElementById("close-1-hobby");
  close_1.addEventListener("click", close_Hobbyjoin);
  // var close_2 = document.getElementById("close-2-hobby");
  // close_2.addEventListener("click", close_Hobbyjoin);
  // var close_3 = document.getElementById("close-3-hobby");
  // close_3.addEventListener("click", close_Hobbyjoin);

  var join_1 = document.getElementById("join-1-hobby");
  join_1.addEventListener("click", function (e) {
    console.log("join group1 requested");
    close_Hobbyjoin();
  });

  // var join_2 = document.getElementById("join-2-hobby");
  // join_2.addEventListener("click", function (e) {
  //   console.log("join group2 requested");
  //   close_Hobbyjoin();
  // });

  // var join_3 = document.getElementById("join-3-hobby");
  // join_3.addEventListener("click", function (e) {
  //   console.log("join group3 requested");
  //   close_Hobbyjoin();
  // });


  var member_1 = document.getElementById("member-1-hobby")
  member_1.addEventListener("click", function (e) {
    console.log("member group1 view requested")
    close_Hobbyjoin();
  });

  // var member_2 = document.getElementById("member-2-hobby")
  // member_2.addEventListener("click", function (e) {
  //   console.log("member group2 view requested")
  //   close_Hobbyjoin();
  // });

  // var member_3 = document.getElementById("member-3-hobby")
  // member_3.addEventListener("click", function (e) {
  //   console.log("member group3 view requested")
  //   close_Hobbyjoin();
  // });


  // Three dot open
  function tpopup_open_H(e) {
    tpopupH.classList.add("on");
  }

  function tpopup_close_H(e) {
    tpopupH.classList.remove("on");
  }

  tdot_1 = document.getElementById("tdot-1-hobby")
  tdot_1.addEventListener("click", function (e) {
    close_Hobbyjoin();
    tpopup_open_H();
  });

  // tdot_2 = document.getElementById("tdot-2-hobby")
  // tdot_2.addEventListener("click", function (e) {
  //   close_Hobbyjoin();
  //   tpopup_open_H();
  // });

  // tdot_3 = document.getElementById("tdot-3-hobby")
  // tdot_3.addEventListener("click", function (e) {
  //   close_Hobbyjoin();
  //   tpopup_open_H();
  // });


  var tpopupdragH = document.getElementById("tpopupdragHobby");
  tpopupdragH.addEventListener("click", function (e) {
    tpopup_close_H();
  });

  var tpopupoptionH1 = document.getElementById("tpopup-option-1-h");
  tpopupoptionH1.addEventListener("click", function (e) {
    console.log("blocked request");
    tpopup_close_H();
  });

  var tpopupoptionH2 = document.getElementById("tpopup-option-2-h");
  tpopupoptionH2.addEventListener("click", function (e) {
    console.log("reported request")
    tpopup_close_H();
  });

  // Open tutoring join 

  if (innerlist_1) {
    innerlist_1.addEventListener("click", function (e) {
      if (list_1 != "list-1.padding") {
        close_Hobbyjoin();
        Hobbyjoin1.style.display = 'block';
        list_1.classList.add('padding');
      }
    });
  }

  // if (innerlist_2) {
  //   innerlist_2.addEventListener("click", function (e) {
  //     if (list_2 != 'list-2.padding') {
  //       close_Hobbyjoin();
  //       Hobbyjoin2.style.display = 'block';
  //       document.querySelector('.padding')?.classList.remove('padding')
  //       list_2.classList.add('padding');
  //     }
  //   });
  // }

  // if (innerlist_3) {
  //   innerlist_3.addEventListener("click", function (e) {
  //     if (list3 != 'list-3.padding') {
  //       close_Hobbyjoin();
  //       Hobbyjoin3.style.display = 'block';
  //       document.querySelector('.padding')?.classList.remove('padding')
  //       list3.classList.add('padding');
  //     }
  //   });
  // }

</script>