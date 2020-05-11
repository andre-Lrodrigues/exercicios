<?php
    class Input{
        public $type;
        public $name;
        public $placeholder;
        public $value;

        function __construct($valores){
            $this->type = $valores["type"];
            if($valores["type"] == 'text'){
                $this->name = $valores["name"];
                $this->placeholder = $valores["placeholder"];
                $this->exibeText();
            }else{
                $this->value = $valores["value"];
                $this->exibeSubmit();
            }
        }

        function exibeText(){
            echo "<input type='$this->type' name='$this->name' placeholder='$this->placeholder' required /> <br />";
        }

        function exibeSubmit(){
            echo "<input type='$this->type' value='$this->value' required />";
        }
    }
?>