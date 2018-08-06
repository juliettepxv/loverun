export default class Site{
    constructor() {
        /**
         *
         * @type {Site}
         */
        let me = this;
        me._initListeners();
        //---------------------go------------------------------------------
        me.resizeStage();
        me.onDomChange();
        Site.navActive();
    }

    /**
     *
     * @private
     */
    _initListeners() {

        let me=this;

        require("./layout/NavMenu");
        NavMenu.__init();
        require("./components/data-zoom-img");
        require("./components/data-is-lang");
        //require("./blocks/FormContact");
        //FormContact.initFromDom();

        //ferme le menu quand on change d'url
        $body.on(EVENTS.HISTORY_CHANGE_URL,function(){
            $body.attr("data-page-transition-state","start");
            //stope en attendant que la transition soit finie
            PovHistory.readyToinject=false;
            //dit qu'on est prêt à afficher la page (s'assure qu'on reste au moins une seconde sur l'écran de transition)
            setTimeout(function(){
                PovHistory.readyToinject=true;
            },500);
            NavMenu.close();
        });

        //changement d'url et HTML injecté
        $body.on(EVENTS.HISTORY_CHANGE_URL_LOADED_INJECTED,function(){
            $body.attr("data-page-transition-state","end");
            me.onDomChange();
            //scroll top
            $(window).scrollTop(0);
            Site.navActive();

            if(typeof gtag !== 'undefined'){
                //hit google analytics
                gtag('config', 'UA-XXXXXX', {'page_path': location.pathname});
            }

        });

        STAGE.on(EVENTS.RESIZE,function(){
            me.resizeStage();
        });
        $body.on(Pov.events.DOM_CHANGE,function(){
            me.onDomChange();
        });

    }

    /**
     * Selectionne / déselectionne l'item de nav de la page en cours
     */
    static navActive(){
        $("[data-href-uid]").removeClass("active");
        $("[data-href-uid='"+PovHistory.currentPageInfo.uid+"']").addClass("active");
    }

    /**
     * Adapte des élements à l'écran
     */
    resizeStage(){
        //ou pas :)
    }

    /**
     * Initialisations d'objets dom
     */
    onDomChange(){
        //ou pas :)
    }
}