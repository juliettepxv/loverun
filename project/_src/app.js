//on inclue classiq
require("../../vendor/davidmars/classiq/Classiq/_src/classiq.boot");
require("../../vendor/davidmars/classiq/Classiq/_src/cq-debug/WebpackVersion");

require("./app.less");

import Site from "./Site.js";


Pov.onBodyReady(function(){
    console.log("ready (app)");
    /**
     * La balise où notre histoire se passe
     * @type {JQuery}
     */
    window.$root=$("#root");
    /**
     * Le menu principal
     * @type {JQuery}
     */
    window.$nav=$("#nav");

    /**
     * La balise où sont chargées les pages (elle a aussi l'attribut [history-receiver])
     * @type {JQuery}
     */
    window.$main=$("#main");

    //touch or not
    function isTouchDevice() {
        return !!('ontouchstart' in window) || !!('msmaxtouchpoints' in window.navigator);
    }
    if(isTouchDevice()){
        window.$body.addClass("is-touch");
    }else{
        window.$body.addClass("is-not-touch");
    }
    //edge / ie or not
    if(navigator.userAgent.indexOf("Edge") !== -1){
        window.$body.addClass("is-edge");
    }
    function msie() {

        var ua = window.navigator.userAgent;
        var msie = ua.indexOf("MSIE ");

        if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))  // If Internet Explorer, return version number
        {
            //alert(parseInt(ua.substring(msie + 5, ua.indexOf(".", msie))));
            return true;
        }
        else  // If another browser, return 0
        {
            //alert('otherbrowser');
            return false;
        }

    }
    if(msie()){
        window.$body.addClass("is-ie");
    }


    /**
     * Bon ça c'est notre vrai main
     * @type {Site}
     */
    window.Site=new Site();





});