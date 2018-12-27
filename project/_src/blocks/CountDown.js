export default class CountDown{
    constructor($main){
        var days,hours,minutes, seconds,reste;
        let debut=$main.attr("data-date-start")*1000;
        let fin=$main.attr("data-date-end")*1000;
        let $days=$main.find(".days");
        let $hours=$main.find(".hours");
        let $minutes=$main.find(".minutes");
        let $seconds=$main.find(".seconds");
        let startTime=new Date().getTime();

        function refresh(){
            console.log("recharge count down");
            startTime=new Date().getTime();//pour éviter de re refresh
            $main.closest("[data-pov-v-path]").povRefresh();
            //$main.css("opacity","0.2");
        }

        $(window).on("focus",function(){
            console.log("focus");
            refresh();
        });

        function loop(){
            //si tourne dpuis trop lontemps recharge le block (3 minutes)
            if( new Date().getTime() - startTime > 1000 * 60 * 3){
                refresh();
            }
            debut+=1000;

            let now=new Date();
            now.setTime(debut);
            console.log(now.toTimeString());

            let remain=(fin-debut)/1000;
            days=String(Math.floor(remain/(60*60*24))).padStart(2, '0');
            $days.text(days);
            reste=remain % (60*60*24);

            $hours.text(String(Math.floor(reste/(60*60))).padStart(2, '0'));
            reste=reste % (60*60);
            $minutes.text(String(Math.floor(reste/(60))).padStart(2, '0'));
            reste=reste % (60);
            $seconds.text(String(reste).padStart(2, '0'));
            if(!$main.is("body div")){
                clearInterval(interv);
            }
        }

        loop();

        let interv = setInterval(function () {loop();}, 1000);}



    static initFromDom(){
        $("[data-count-down]").not(".init").each(function(){
            $(this).addClass("init");
            new CountDown($(this));
        })
    }
}