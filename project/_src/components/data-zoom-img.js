var DataZoomImg={

    display:function($btn){

        //injecte le layer au besoin
        let $zoomLayer=$("#data-zoom-layer");
        if(!$zoomLayer.length){
            $zoomLayer=$(require("./data-zoom-layer.html"));
            $body.append($zoomLayer);
            //bouton fermer
            $zoomLayer.find(".close").on("click",function(){
                $zoomLayer.remove();
            });
        }

        //charge l'image
        let url=$btn.attr("data-zoom-img");
        $zoomLayer.find(".img-container").css("background-image","url('"+url+"')");

        //gère les précédents suivants
        let $btnNext=$zoomLayer.find(".next");
        let $btnPrev=$zoomLayer.find(".prev");
        $btnNext.off("click");
        $btnPrev.off("click");
        let $allZooms=$("[data-zoom-img]");
        let $prev=null;
        let $next=null;
        let found=false;
        let $beforeInList;

        for(let i=0; i< $allZooms.length ;i++){
            let $curr=$($allZooms[i]);
            if($curr.is($btn)){
                $next=$($allZooms[i+1]);
                $prev=$($allZooms[i-1]);
                break
            }
        }

        if($next && $next.length){
            $btnNext.css("display","");
            $btnNext.on("click",function(){
                DataZoomImg.display($next)
            });
        }else{
            $btnNext.css("display","none");
        }

        if($prev && $prev.length){
            $btnPrev.css("display","");
            $btnPrev.on("click",function(){
                DataZoomImg.display($prev)
            });
        }else{
            $btnPrev.css("display","none");
        }
    }
};


$body.on("mousedown","[data-zoom-img]",function(e){
    e.preventDefault();
    e.stopPropagation();
    DataZoomImg.display($(this));
});