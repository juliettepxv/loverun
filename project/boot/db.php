<?php
//------------------------redbean--------------------------------------
use Classiq\Db\RedBean\PovRedBeanFacade;
define( 'REDBEAN_MODEL_PREFIX', '\\Classiq\\Models\\' );
/**
 * La base de données du projet
 * @return PovRedBeanFacade
 */
function db(){return PovRedBeanFacade::inst();}
//sql lite
db()->setup(
    the()->fileSystem->dbSqlLitePath(
        "mon-site-db"
    )
);
//db()->useWriterCache()
db()->debug(true,1);
//db()->fancyDebug(true);
//db()->freeze(true);