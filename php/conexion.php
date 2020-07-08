
<?php



function con(){
	return new mysqli("localhost", "root", "", "pruebas2");
}

function insert_img($folder, $image){
	$con = con();
	$con->query("insert into image (folder,src,created_at,estado) value (\"$folder\",\"$image\",NOW(),0)");
}




function get_prod(){
	$images = array();
	$con = con();
	$query=$con->query("SELECT * FROM productos order by nombre");
	while($r=$query->fetch_object()){
		$images[] = $r;
	}
	return $images;
}


function get_prod_clave($search){
	$images = array();
	$con = con();
	$query=$con->query('select * from productos where clave like "%'.$search.'%"');
	while($r=$query->fetch_object()){
		$images[] = $r;
	}
	return $images;
}




function get_todo($search){
	$images = array();
	$con = con();
	$query=$con->query('SELECT * FROM productos WHERE clave LIKE "%'.$search.'%" OR in_act LIKE "%'.$search.'%" OR nombre LIKE "%'.$search.'%"');
	while($r=$query->fetch_object()){
		$images[] = $r;
	}
	return $images;
}


function get_prod_nom($search){
	$image = null;
	$con = con();
	$query=$con->query('select * from productos where nombre like "%'.$search.'%"');
	while($r=$query->fetch_object()){
		$image = $r;
	}
	return $image;
}






function get_Ing_act($search){
	$image = null;
	$con = con();
	$query=$con->query('select * from productos where in_act like "%'.$search.'%"');
	while($r=$query->fetch_object()){
		$image = $r;
	}
	return $image;
}




function del($id){
	$con = con();
	$con->query("delete from image where id=$id");
}

function get_imgs_rfc(){
	$images = array();
	$con = con();
	$query=$con->query("select * from image");
	while($r=$query->fetch_object()){
		$images[] = $r;
	}
	return $images;
}

function get_imgs_porid(){
	$images = array();
	$con = con();
	$query=$con->query("select * from image order by id desc");
	while($r=$query->fetch_object()){
		$images[] = $r;
	}
	return $images;
}
function get_imgs_pornombre(){
	$images = array();
	$con = con();
	$query=$con->query("select * from image order by src");
	while($r=$query->fetch_object()){
		$images[] = $r;
	}
	return $images;
}

function get_imgs_porfecha(){
	$images = array();
	$con = con();
	$query=$con->query("select * from image order by created_at desc");
	while($r=$query->fetch_object()){
		$images[] = $r;
	}
	return $images;
}

function get_imgs_porestado(){
	$images = array();
	$con = con();
	$query=$con->query("select * from image order by estado desc");
	while($r=$query->fetch_object()){
		$images[] = $r;
	}
	return $images;
}
function search_imgs($search){
    $images = array();
    $con = con();
    $query=$con->query('select * from image where src like "%'.$search.'%"');
    while($r=$query->fetch_object()){
        $images[] = $r;
    }
    return $images;
}


/*consulta generica*/
function search_genriconombre($search){
    $images = array();
    $con = con();
    $query=$con->query('select * from image where src like "%'.$search.'%"');
    while($r=$query->fetch_object()){
        $images[] = $r;
    }
    return $images;
}



function search_genricoid($search){
    $images = array();
    $con = con();
	$query=$con->query('select * from image where id ='.$search.'');
    while($r=$query->fetch_object()){
        $images[] = $r;
    }
    return $images;
}

?>