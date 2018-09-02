<?

class Error extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje = "Error genérico";
        $this->view->render('error/index');
        //echo "<p>Error al cargar recurso</p>";
    }
}

?>