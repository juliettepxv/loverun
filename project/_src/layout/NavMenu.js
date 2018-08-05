var NavMenu={
    $nav:$("#nav"),
    open:function(){
        $body.addClass("nav-open");
    },
    close:function(){
        $body.removeClass("nav-open");
    },
    toggle:function(){
        $body.toggleClass("nav-open");
    },
    __init:function () {
        $body.on("click","[data-nav-menu-toggle]",function(){
            NavMenu.toggle()
        })
    }
};
window.NavMenu=NavMenu;