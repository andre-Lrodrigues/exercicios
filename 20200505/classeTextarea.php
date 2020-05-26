<<<<<<< HEAD
<?php
    class Textarea{
        public $name;
        public $rows;
        public $cols;
        public $placeholder;

        function __construct($valores){
            $this->name = $valores["name"];
            $this->rows = $valores["rows"];
            $this->cols = $valores["cols"];
            $this->placeholder = $valores["placeholder"];
            $this->exibir();
        }

        function exibir(){
            echo "<textarea name='$this->name' rows='$this->rows' cols='$this->cols' placeholder='$this->placeholder' required ></textarea>";
        }
    }
=======
<?php
    class Textarea{
        public $name;
        public $rows;
        public $cols;
        public $placeholder;

        function __construct($valores){
            $this->name = $valores["name"];
            $this->rows = $valores["rows"];
            $this->cols = $valores["cols"];
            $this->placeholder = $valores["placeholder"];
            $this->exibir();
        }

        function exibir(){
            echo "<textarea name='$this->name' rows='$this->rows' cols='$this->cols' placeholder='$this->placeholder' required ></textarea>";
        }
    }
>>>>>>> 5aa898bebdbbb20aef4ef24220014e5434e665f2
?>