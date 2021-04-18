(function($) {
    "use strict";

    // Add active state to sidbar nav links
    var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
        $("#layoutSidenav_nav .sb-sidenav").each(function() {
            if (this.href === path) {
                $(this).addClass("active");
            }
        });

    // Toggle the side navigation
    $("#sidebarToggle").on("click", function(e) {
        e.preventDefault();
        $("body").toggleClass("sb-sidenav-toggled");
    });
})(jQuery);

   $(document).ready(function () {
            $("#myother").click(function () {
                $("#other").css("display", "block")
                $("#yarn").css("display", "none")
            })
            $("#myyarn").click(function () {
                $("#other").css("display", "none")
                $("#yarn").css("display", "block")
            })
            document.getElementById("myyarn").click();

            
        });
        
