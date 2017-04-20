$(document).ready(function() {
  $('#fullpage').fullpage({
    anchors: ['Welcome', 'About'],
    menu: '#menu',
    slidesNavigation: true
  });
  
  $('#moveSlideRight').click(function(e){
    e.preventDefault();
    $.fn.fullpage.moveSlideRight();
  });
  
  (function () {
    var removeSuccess;
    removeSuccess = function () {
      return $('.button').removeClass('success');
    };
    $(document).ready(function () {
      return $('.button').click(function () {
        $(this).addClass('success');
        return setTimeout(removeSuccess, 3000);
      });
    });
  }.call(this));
  
  setTimeout(function(){
    $('body').addClass('loaded');
  }, 1000);


  var slideCounter = 0;
  var allow = true;
  var slider = function(){
    $("#slide_"+slideCounter++).fadeToggle("slow", function(){
      $("#slide_"+slideCounter).fadeToggle("slow");
      $("#selector_"+slideCounter).prop('checked',true);
      allow = true;
    });
    allow = false;
    if (slideCounter == 3)
      slideCounter = 0;
  }
  
  var timer = setInterval(slider,10000);
  
  $('.selector input').on('click',function(){
    if (allow == true){
      clearInterval(timer);
      timer = setInterval(slider,10000);
      $("#slide_"+slideCounter).fadeToggle("slow", function(){
        $("#slide_"+slideCounter).fadeToggle("slow");
        allow = true;
      });
      allow = false;
      
      slideCounter = $(this).attr('id')[9];
    }
  });

  $('[data-toggle="tooltip"]').tooltip();

  $('.fa-envelope-o').on('click',function(){
    swal({   
      title: "Обратная связь",
      text: "<div class='text-center'><em class='fa fa-envelope-o' style='margin-right:15px'></em> turov96@ya.ru</div>",
      html: true 
    });
  });

  var url = location.protocol + '//' +location.hostname;

  $('.ev').on('click', function(){
    swal({   
      title: "Мероприятия",   
      text: "<div><a class='pronwe_Link-small pronwe_color link-pos' style='font-size: 1.5em' href='//misteritmo.pronwe.ru'>Мистер ИТМО 2016</a></div><div style='margin-top:10px'><a class='pronwe_Link-small pronwe_color link-pos' style='font-size: 1.5em' href='//missitmo.pronwe.ru'>Мисс ИТМО 2016</a></div><div style='margin-top:10px'><a class='pronwe_Link-small pronwe_color link-pos' style='font-size: 1.5em' href='//tnl.pronwe.ru'>Ты нужен людям 2016</a></div><div style='margin-top:10px'><a class='pronwe_Link-small pronwe_color link-pos' style='font-size: 1.5em' href='//spring.pronwe.ru'>Весна в ИТМО 2016</a></div><div style='margin-top:10px'><a class='pronwe_Link-small pronwe_color link-pos' style='font-size: 1.5em' href='//ya-pervokursnik.pronwe.ru'>'Я первокурсник' 2016</a></div>",
      html: true 
    });
  });

});