<?php
    namespace App;

    use SON\Init\Bootstrap;

    class Init extends Bootstrap
    {
        protected function initRoutes()
        {
            $ar['home'] = array('route'=>'/','controller'=>'index','action'=>'index');
            $ar['Empresa'] = array('route'=>'/Empresa','controller'=>'index','action'=>'Empresa');
            $this->setRoutes($ar);
        }

        public static function getDB(){
            //implementar PDO
        }
    }

