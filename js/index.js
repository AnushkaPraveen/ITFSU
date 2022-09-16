
$(".whatWeDos").mouseover(function () {
    $(this).addClass("sectionHV");
});

    $(".whatWeDos").mouseout(function () {
        $(this).removeClass("sectionHV");
    });
    
    $(document).on('click',"#btnLifeInFaculty",function () {

            $("#frames").html(' <iframe src="./php/activities.php"  height="1150px"  style="border: none;overflow-y: scroll;width:100%"></iframe>');
    });

$(document).on('click',"#btnAbout",function () {
    $("#frames").html('<iframe src="about.html" height="500px" style="border: none;overflow-y: scroll;width:100%"></iframe>');
});



// $(document).ready(function() {
//     $(window).scroll(function() {
//       if ($(document).scrollTop() > 450) {
//
//         $("#containerwt").slideDown('slow');
//
//       }
//     });
//   });

  $(document).on('click',"#btnLogIn",function () {
    window.location.href="./auth/login.php";
});

$(document).on('click',".btnExplore",function () {
    window.location.href="./php/containerLife.php";
});


//////////Scroll to  Top

var btn = $('#buttonTop');

$(window).scroll(function() {
    if ($(window).scrollTop() > 300) {
        btn.addClass('show');
    } else {
        btn.removeClass('show');
    }
});

btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, '300');
});


