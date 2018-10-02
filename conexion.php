<?php

include'adodb5/adodb.inc.php';

class conexion {

    private $con;

    public function conectar() {
        //crear el objeto de conexion con
        //el contructor ADONewconnection
        $this->con = ADONewconnection('PDO');
        //conectar a la base de datos

        $this->con->connect("mysql:host=localhost", "root", "", "sala");

        //establecer el monitoreo SQL-modo debug

        $this->con->debug = true;
        //retornar objeto de conexion
    }
/// COMBOS 
      public function comborol() {
        $n = "select id_rol, descripcion from rol;";
        $res = $this->con->execute($n);
        return $res->getarray();
    }

    public function combocomentario() {
        $n = "select id_comentarios, texto from comentarios;";
        $res = $this->con->execute($n);
        return $res->getarray();
    }
     public function combotema() {
        $n = "select id_tema, nombre from tema;";
        $res = $this->con->execute($n);
        return $res->getarray();
    }
    
    public function combocurso() {
        $n = "select id_curso, nombre from curso;";
        $res = $this->con->execute($n);
        return $res->getarray();
    }
    
    public function comboevento() {
        $n = "select id_tipo_evento, descripcion from evento;";
        $res = $this->con->execute($n);
        return $res->getarray();
    }
    public function combobanda() {
        $n = "select id_banda, nombre from banda ";
        $res = $this->con->execute($n);
        return $res->getarray();
    }
    
        public function comboejercicio() {
        $n = "select id_ejercicio, texto from ejercicio;";
        $res = $this->con->execute($n);
        return $res->getarray();
    }
    public function combopreguntas() {
        $n = "select id_pregunta, pregunta from preguntas ";
        $res = $this->con->execute($n);
        return $res->getarray();
    }
    
    //INSERCION
    public function insert_usuario( $doc_usuario, $nombre, $apellido, $edad, $celular, $correo, $genero, $password,$foto, $id_rol_fk, $estado) {
        $sql = "INSERT into usuario(doc_usuario, nombre, apellido, edad, celular, correo, genero, password, foto, id_rol_fk, estado) values(?,?,?,?,?,?,?,?,?,?,?)";
        $this->con->execute($sql, array(
          
            $doc_usuario,
            $nombre,
            $apellido,
            $edad,
            $celular,
            $correo,
            $genero,
            $password,
            $foto,
            $id_rol_fk,
            $estado
                )
        );
    }

    public function insert_banda( $nombre, $canciones, $bio) {
        $sql = "INSERT into banda( nombre, canciones, bio) values(?,?,?)";
        $this->con->execute($sql, array(
            
            $nombre,
            $canciones,
            $bio
                )
        );
    }

    public function insert_reserva( $id_tipo_evento_fk, $fecha_asignacion, $fecha_programada, $hora, $duracion, $asiste, $pagado, $id_banda_fk) {
        $sql = "INSERT into reserva(id_tipo_evento_fk, fecha_asignacion, fecha_programada, hora, duracion, asiste, pagado, id_banda_fk) values(?,?,?,?,?,?,?,?)";
        $this->con->execute($sql, array(
            
            $id_tipo_evento_fk,
            $fecha_asignacion,
            $fecha_programada,
            $hora,
            $duracion,
            $asiste,
            $pagado,
            $id_banda_fk
                )
        );
    }

    public function insert_curso( $nombre, $descripcion, $texto, $recursos, $id_tema_fk, $id_comentarios_fk) {
        $sql = "INSERT into curso(nombre, descripcion, texto, recursos, id_tema_fk, id_comentarios_fk) values(?,?,?,?,?,?)";
        $this->con->execute($sql, array(
            $nombre,
            $descripcion,
            $texto,
            $recursos,
            $id_tema_fk,
            $id_comentarios_fk
            
                )
        );
    }
    
        public function insert_ejercicio( $texto, $id_curso_fk) {
        $sql = "INSERT into ejercicio(texto, id_curso_fk) values(?,?)";
        $this->con->execute($sql, array(
            
            $texto,
            $id_curso_fk
           
                )
        );
    }
    
        public function insert_preguntas( $pregunta, $detalles, $id_ejercicio_fk) {
        $sql = "INSERT into preguntas(pregunta, detalles, id_ejercicio_fk) values(?,?,?)";
        $this->con->execute($sql, array(
            
            $pregunta,
            $detalles,
            $id_ejercicio_fk
           
                )
        );
    }

    public function consul_curso() {
        $n = "select * from curso";
        $res = $this->con->execute($n);
        return $res->getarray();
        
    }
        public function consul_curso2() {
        $codigo = $_POST['id_curso'];
       
        $n = "select * from curso where id_curso = '$codigo'";
        echo $n;
        $res = $this->con->execute($n);
        return $res->getarray();
        
    }
       
    public function consul_reserva() {
        $n = "select * from reserva";
        $res = $this->con->execute($n);
        return $res->getarray();
        
        
    }
    
  
    public function consultaUnica($doc_usuario,$password) {
        $sentencia = "SELECT * FROM usuario WHERE doc_usuario=:doc_usuario and password=:password";
        //preparar sentencia
       
        $resultado = $this->PDO->prepare($sentencia);
        $resultado->execute(
                    array(
                        ":doc_usuario"=>$doc_usuario,
                        ":password"=>$password

                    )              
                );



 

}

}

$o = new Conexion();
$o->conectar();
