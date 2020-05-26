<?php
    class Input{
        public $type;
        public $name;
        public $placeholder;
        public $value;

        function __construct($valores){
            $this->type = $valores["type"];
            
            if($valores["type"] == 'text' || $valores["type"] == 'number'){
                $this->name = $valores["name"];
                $this->placeholder = $valores["placeholder"];
                $this->exibeText();
            }else{
                $this->value = $valores["value"];
                $this->exibeSubmit();
            }
        }

        function exibeText(){
            echo "<input type='$this->type' name='$this->name' placeholder='$this->placeholder' required";
            if($this->name == 'preco'){
                echo " min='0.1' step='0.01'";
            }
            elseif($this->name == 'paginas' || $this->name == 'duracao'){
                echo " min='1' step='1'";
            }
            echo " />";
        }

        function exibeSubmit(){
            echo "<input type='$this->type' value='$this->value' required />";
        }
    }
?>