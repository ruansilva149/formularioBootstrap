<?php

class layout{

    public function pagina($pagina){
        $this->inc("cabecalho");
        $this->inc("formLogin");
        $this->inc("rodape");
    }

    public function index(){
        $this->inc("cabecalho");
        $this->inc("formLogin");
        $this->inc("rodape");
    }

    public function inc($pagina){
        include $pagina."php";
    }
}