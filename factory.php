<?
	//автозагрузка классов
function __autoload( $className ) {
  $className = strtolower(str_replace( "..", "", $className ));
  require_once( "$className.php" );
}
	$factory = new PageFactory;
	$pdf = $factory->getPage('pdf');
//	$pdf->createPage();