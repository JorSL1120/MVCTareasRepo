<?php
    class Tareas{
        private $conn;

        public function __construct()
        {
            $this->conn = new mysql("localhost", "usrtareas", "Jsl0610012001;", "tareas_db");
        }

        public function obtenerTareas()
        {
            $result = $this->conn->query("SELECT * FROM tareas");
            return $result->fetch_all(MYSQLI_ASSOC);
        }

        public function agregarTareas($descripcion)
        {
            $smt = $this->conn->query->prepare("INSERT INTO tareas (descripcion) VALUES (?)");
            $smt->bind_param("s",$description);
            $smt->execute();
        }

        public function completarTarea($id)
        {
            $smt = $this->conn->prepare("UPDATE tareas SET completada=1 WHERE idtareas=?");
            $smt->bind_param("1",$idtareas);
            $smt->execute();
        }
    }
?>