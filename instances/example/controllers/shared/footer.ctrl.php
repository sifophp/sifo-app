<?php
namespace Example;

class SharedFooterController extends \Sifo\Controller
{
	public function build()
	{
		$this->setLayout( 'shared/footer.tpl' );
	}
}
?>
