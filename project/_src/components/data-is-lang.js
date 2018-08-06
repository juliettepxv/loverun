$body.on("mousedown","[data-is-lang]:not(.active)",function(e){
    e.preventDefault();
    e.stopPropagation();
    let lang=$(this).attr("data-is-lang");
    let url=PovHistory.currentPageInfo.languagesUrls[lang];
    alert(url);
    document.location=url;
});