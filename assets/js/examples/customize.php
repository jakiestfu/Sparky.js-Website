<?PHP 
	
    function stripLogs($data){
        $workingData = preg_replace('/_log\((.*?)\);/s', '', $data);
        return $workingData;
    }
    
	function stripComments($data){
		$workingData = preg_replace('!/\*.*?\*/!s', '', $data);
		return $workingData;
	}
	
    function _stripBetweenComments($slug, $data){
        return preg_replace('/\/\* '.$slug.' \*\/(.*?)\/\* END_'.$slug.' \*\//s', '', $data);
    }
    
	function stripRouting($data){
		return _stripBetweenComments('ROUTE_STRIP', $data);
	}
	
	function stripExtras($data){
		return _stripBetweenComments('EXTRAS_STRIP', $data);
	}
	
	function renameSparky($data, $name){
		$name = str_ireplace(' ', '', ucwords(($name)));
		if($name){
			return preg_replace('/Sparky/', $name, $data);
		}
	}
	
	function truncateToSize($data, $size){
		
		$workingData = '';
		
		if($size=='full'){
			$workingData = stripComments($data);
		} elseif($size=='noRouting'){
			$workingData = stripRouting($data);
			$workingData = stripComments($workingData);
		} elseif($size=='light'){
			$workingData = stripRouting($data);
			$workingData = stripExtras($workingData);
		}
		return $workingData;
	}
	
	$types = array('light', 'noRouting','full');
	
	$name = $_GET['name'];
	$type = (in_array($_GET['type'], $types)) ? $_GET['type'] : 'full';

	if($type){
		
		$sparkyjs = file_get_contents('full/sparky.full.js');
	
		$sparkyjs = truncateToSize($sparkyjs, $type);
		
		if(!empty($name)){
			$sparkyjs = renameSparky($sparkyjs, $name);
		} else {
			$name = 'Sparky';
		}
		
        $sparkyjs = (!isset($_GET['logs'])) ? stripLogs($sparkyjs) : $sparkyjs;
        
		$filename = str_ireplace(' ', '', ucwords(($name))).'.js';
		
		if(isset($_GET['download'])){
			 header('Pragma: public');   // required
			  header('Expires: 0');    // no cache
			  header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
			  header('Cache-Control: private',false);
			  header('Content-Type: text/javascript');
			  header('Content-Disposition: attachment; filename="'.$filename.'"');
			  header('Content-Transfer-Encoding: binary');
			  header('Connection: close');
			  echo $sparkyjs;
		} else {
			echo $sparkyjs;
		}
	}
	
?>