<?php

class Runner
{
    static function init() {
        try{
            $fh = fopen("./log.txt", "w");
            fputs($fh, "start\n");
            $conf = new Conf(dirname(__FILE__)."/conf0.xml");
            print "user: " . $conf->get("user") . "\n";
            print "host: " . $conf->get("host") . "\n";
            $conf->set("pass", "newpass");
            $conf->write();
            $conf->write();
            //fputs($fh, "end\n");
            //fclose($fh);
        }catch(FileException $e){
            //die($e->getMessage());
            fputs($fh, "exceção de arquivo\n");
        }catch(XmlException $e){
            die($e->getMessage());
        }catch(Exception $e){
            //recuo: não deve ser chamado
        }finally{
            fputs($fh, "end\n");
            fclose($fh);
        }
    }
}
