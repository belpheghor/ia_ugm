  //membuat javascript untuk memunculkan collapse pada div sidebar-collapse ketika dibuka di mobile
  $(window).bind("load resize", function()
  {
    if($(this).width()<768)
    {
      $('div.sidebar-collapse').addClass('collapse')
    }else{
      $('div.sidebar-collapse').removeClass('collapse')
    } 

  }
  );

  // jquery dropdown
  $(document).ready(function(){
    // li ia tree 
    $(".ia-tree").each(function(){
      // a href
      var link = $(this).children("a").first();
      // sub menu
      var submenu = $(this).children(".ia-tree-menu").first();
      // cek li punya class active
      var isActive = $(this).hasClass("active");

      if (isActive) {
        submenu.slideDown();
        link.children(".fa-angle-right").first().removeClass("fa-angle-right").addClass("fa-angle-down")
      }

      // link di klik
      link.click(function(e){
        e.preventDefault(); //agar a href tidak ke halaman lain
        if (isActive) {
          submenu.slideUp();
          isActive=false;
          link.children(".fa-angle-down").first().removeClass("fa-angle-down").addClass("fa-angle-right")
        }
        else{
          submenu.slideDown();
          isActive=true; 
          link.children(".fa-angle-right").first().removeClass("fa-angle-right").addClass("fa-angle-down") 
        }
      })
    })
  })
