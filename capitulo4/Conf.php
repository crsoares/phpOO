<?php

class Conf 
{
    private $file;
    private $xml;
    private $lastmatch;
    
    public function __construct($file) {
        if(!file_exists($file)) {
            throw new FileException("Arquivo {$file} não existe");
        }
        $this->file = $file;
        $this->xml = simplexml_load_file($file, null, LIBXML_NOERROR);
        
        if(!is_object($this->xml)) {
            throw new XmlException(libxml_get_last_error());
        }
        
        print gettype($this->xml);
        
        $matches = $this->xml->xpath("/conf");
        
        if(!count($matches)) {
            throw new ConfException("não conseguiu encontrar elemento raiz: conf");
        }
    }
    
    public function write() {
        if(!is_writable($this->file)) {
            throw new FileException("O arquivo {$this->file} não é gravavel.");
        }
        file_put_contents($this->file, $this->xml->asXML());
    }
    
    public function get($str) {
        $matches = $this->xml->xpath("/conf/item[@name=\"$str\"]");
        if(count($matches)) {
            $this->lastmatch = $matches[0];
            return (string) $matches[0];
        }
        return null;
    }
    
    public function set($key, $value) {
        if(!is_null($this->get($key))) {
            $this->lastmatch[0] = $value;
            return;
        }
        $conf = $this->xml->conf;
        $this->xml->addChild('item', $value)->addAttribute('name', $key);
    }
}

