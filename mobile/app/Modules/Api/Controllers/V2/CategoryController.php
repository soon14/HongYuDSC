<?php
//zend by QQ:1527200768  鸿宇科技  禁止倒卖 一经发现停止任何服务
namespace App\Modules\Api\Controllers\V2;

class CategoryController extends \App\Modules\Api\Foundation\Controller
{
	private $categoryService;

	public function __construct(\App\Services\CategoryService $categoryService)
	{
		$this->categoryService = $categoryService;
	}

	public function index()
	{
		$list = $this->categoryService->categoryList();
		return $this->apiReturn($list);
	}
}

?>
