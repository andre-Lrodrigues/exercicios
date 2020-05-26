<<<<<<< HEAD
<?php
    class Select{
        public $name;
        public $value1;
        public $value2;
        public $value3;
    

        function __construct($valores){
            $this->name = $valores["name"];
            $this->value1 = $valores["value1"];
            $this->value2 = $valores["value2"];
            $this->value3 = $valores["value3"];
            $this->exibir();
        }

        function exibir(){
            echo "<select name='$this->name' required>
                    <option value='$this->value1' hidden>::tipo receita::</option>
                    <option value='$this->value2'>$this->value2</option>
                    <option value='$this->value3'>$this->value3</option>
                </select>";
        }
    }
=======
<?php
    class Select{
        public $name;
        public $value1;
        public $value2;
        public $value3;
    

        function __construct($valores){
            $this->name = $valores["name"];
            $this->value1 = $valores["value1"];
            $this->value2 = $valores["value2"];
            $this->value3 = $valores["value3"];
            $this->exibir();
        }

        function exibir(){
            echo "<select name='$this->name' required>
                    <option value='$this->value1' hidden>::tipo receita::</option>
                    <option value='$this->value2'>$this->value2</option>
                    <option value='$this->value3'>$this->value3</option>
                </select>";
        }
    }
>>>>>>> 5aa898bebdbbb20aef4ef24220014e5434e665f2
?>