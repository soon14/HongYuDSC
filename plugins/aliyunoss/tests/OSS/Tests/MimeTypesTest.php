<?php
//zend by QQ:1527200768  鸿宇科技  禁止倒卖 一经发现停止任何服务
namespace OSS\Tests;

class MimeTypesTest extends \PHPUnit_Framework_TestCase
{
	public function testGetMimeType()
	{
		$this->assertEquals('application/xml', \OSS\Core\MimeTypes::getMimetype('file.xml'));
	}
}

?>
