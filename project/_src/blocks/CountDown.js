export default class CountDown{
    constructor($main){
        var days,hours,minutes, seconds,reste;
        let debut=$main.attr("data-date-start")*1000;
        let fin=$main.attr("data-date-end")*1000;
        let $days=$main.find(".days");
        let $hours=$main.find(".hours");
        let $minutes=$main.find(".minutes");
        let $seconds=$main.find(".seconds");

        let interv = setInterval(function () {
            debut+=1000;
           let remain=(fin-debut)/1000;
           days=String(Math.floor(remain/(60*60*24))).padStart(2, '0');
           $days.text(days);
           reste=remain % (60*60*24);

           $hours.text(String(Math.floor(reste/(60*60))).padStart(2, '0'));
           reste=reste % (60*60);
           $minutes.text(String(Math.floor(reste/(60))).padStart(2, '0'));
            reste=reste % (60);
           $seconds.text(String(reste).padStart(2, '0'));
           console.log(reste);
           if(!$main.is("body div")){
                clearInterval(interv);

            }
           }, 1000);
    }

    static initFromDom(){
        $("[data-count-down]").not(".init").each(function(){
            $(this).addClass("init");
            new CountDown($(this));
        })
    }
}