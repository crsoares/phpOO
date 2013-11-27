<?php

class Runner
{
    static function init() {
        try{
            $conf = new Conf(dirname(__FILE__)."/conf01.xml");
            print "user: " . $conf->get("user") . "\n";
            print "host: " . $conf->get("host") . "\n";
            $conf->set("pass", "newpass");
            $conf->write();
        }catch(FileException $e){
            die($e->getMessage());
        }catch(XmlException $e){
            die($e->getMessage());
        }catch(Exception $e){
            //recuo: não deve ser chamado
        }
    }
}
