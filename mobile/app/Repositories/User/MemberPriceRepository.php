<?php
//zend by QQ:1527200768  鸿宇科技  禁止倒卖 一经发现停止任何服务
namespace App\Repositories\User;

class MemberPriceRepository implements \App\Contracts\Repositories\User\MemberPriceRepositoryInterface
{
	public function getMemberPriceByUid($rank, $goods_id)
	{
		$price = \App\Models\MemberPrice::where('user_rank', $rank)->where('goods_id', $goods_id)->pluck('user_price')->toArray();

		if (!empty($price)) {
			$price = $price[0];
		}

		return $price;
	}
}

?>
