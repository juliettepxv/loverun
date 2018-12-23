$body.on("click",".faq-item .js-faq-toggle",function(e){
    $(this).closest(".faq-item").toggleClass("open");
    e.preventDefault();
    e.stopPropagation();
});