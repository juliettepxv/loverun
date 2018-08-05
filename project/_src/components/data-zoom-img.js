$body.on("mousedown","[data-zoom-img]",function(e){
    e.preventDefault();
    e.stopPropagation();
    let url=$(this).attr("data-zoom-img");
    let $zoomLayer=$("#data-zoom-layer");
    if(!$zoomLayer.length){
        $zoomLayer=$(require("./data-zoom-layer.html"));
        $body.append($zoomLayer);
    }
    $zoomLayer.find(".img-container").css("background-image","url('"+url+"')");
    $zoomLayer.find(".close").on("click",function(){
        $zoomLayer.remove();
    })

});