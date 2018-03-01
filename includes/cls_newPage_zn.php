<?php
//zend by QQ:1527200768  鸿宇科技  禁止倒卖 一经发现停止任何服务
class Page
{
	private $total;
	private $listRows;
	private $limit;
	private $uri;
	private $pageNum;
	private $config;
	private $config_zn = array('header' => '个记录', 'prev' => '上一页', 'next' => '下一页', 'first' => '第一页', 'last' => '最后一页');
	private $config_en = array('header' => '个记录', 'prev' => '<<', 'next' => '>>', 'first' => 'First', 'last' => 'Last');
	private $listNum = 8;

	public function __construct($total, $listRows = 10, $pa = '', $id, $type = 0, $page = 1, $funName = '', $pageType = 0, $libType = 0, $cfigType = 0)
	{
		$this->total = $total;
		$this->id = $id;
		$this->type = $type;
		$this->pageType = $pageType;
		$this->funName = $funName;
		$this->libType = $libType;

		if ($cfigType == 1) {
			$this->config = $this->config_en;
		}
		else {
			$this->config = $this->config_zn;
		}

		$this->listRows = $listRows;
		$this->uri = $this->getUri($pa);

		if ($pageType == 0) {
			$this->page = !empty($_GET['page']) ? $_GET['page'] : 1;
		}
		else {
			$this->page = !empty($page) ? $page : 1;
		}

		$this->pageNum = ceil($this->total / $this->listRows) ? ceil($this->total / $this->listRows) : 1;
		$this->limit = $this->setLimit();
	}

	private function setLimit()
	{
		return 'Limit ' . (($this->page - 1) * $this->listRows) . ', ' . $this->listRows;
	}

	private function getUri($pa)
	{
		$url = $_SERVER['REQUEST_URI'] . (strpos($_SERVER['REQUEST_URI'], '?') ? '' : '?') . $pa;
		$parse = parse_url($url);

		if (isset($parse['query'])) {
			parse_str($parse['query'], $params);
			unset($params['page']);
			$url = $parse['path'] . '?' . http_build_query($params);
		}

		return $url;
	}

	public function __get($args)
	{
		if ($args == 'limit') {
			return $this->limit;
		}
		else {
			return NULL;
		}
	}

	private function start()
	{
		if ($this->total == 0) {
			return 0;
		}
		else {
			return (($this->page - 1) * $this->listRows) + 1;
		}
	}

	private function end()
	{
		return min($this->page * $this->listRows, $this->total);
	}

	private function first()
	{
		if ($this->page == 1) {
			$html .= '';
		}
		else if ($this->pageType == 0) {
			$html .= '<li class=\'first\'><a href=\'' . $this->uri . '&page=1\'>' . $this->config['first'] . '</a></li>';
		}
		else {
			$html .= '<li class=\'first\'><a href=\'javascript:' . $this->funName . '(1, ' . $this->id . ', ' . $this->type . ', ' . $this->libType . ');\'>' . $this->config['first'] . '</a></li>';
		}

		return $html;
	}

	private function prev()
	{
		if ($this->page == 1) {
			$html .= '';
		}
		else if ($this->pageType == 0) {
			$html .= '<li class=\'previous\'><a href=\'' . $this->uri . '&page=' . ($this->page - 1) . '\'>' . $this->config['prev'] . '</a></li>';
		}
		else {
			$html .= '<li class=\'previous\'><a href=\'javascript:' . $this->funName . '(' . ($this->page - 1) . ', ' . $this->id . ', ' . $this->type . ', ' . $this->libType . ');\'>' . $this->config['prev'] . '</a></li>';
		}

		return $html;
	}

	private function pageList()
	{
		$linkPage = '';
		$inum = floor($this->listNum / 2);

		for ($i = $inum; 1 <= $i; $i--) {
			$page = $this->page - $i;

			if ($page < 1) {
				continue;
			}

			if ($this->pageType == 0) {
				$linkPage .= '<li><a href=\'' . $this->uri . '&page=' . $page . '\'>' . $page . '</a></li>';
			}
			else {
				$linkPage .= '<li><a href=\'javascript:' . $this->funName . '(' . $page . ', ' . $this->id . ', ' . $this->type . ', ' . $this->libType . ');\'>' . $page . '</a></li>';
			}
		}

		$linkPage .= '<li class=\'current\'><a class=\'page_hover\' spellcheck=\'false\'>' . $this->page . '</a></li>';

		for ($i = 1; $i <= $inum; $i++) {
			$page = $this->page + $i;

			if ($page <= $this->pageNum) {
				if ($this->pageType == 0) {
					$linkPage .= '<li><a href=\'' . $this->uri . '&page=' . $page . '\'>' . $page . '</a></li>';
				}
				else {
					$linkPage .= '<li><a href=\'javascript:' . $this->funName . '(' . $page . ', ' . $this->id . ', ' . $this->type . ', ' . $this->libType . ');\'>' . $page . '</a></li>';
				}
			}
			else {
				break;
			}
		}

		return $linkPage;
	}

	private function next()
	{
		if ($this->page == $this->pageNum) {
			$html .= '';
		}
		else if ($this->pageType == 0) {
			$html .= '<li class=\'nextious\'><a href=\'' . $this->uri . '&page=' . ($this->page + 1) . '\'>' . $this->config['next'] . '</a><li>';
		}
		else {
			$html .= '<li class=\'nextious\'><a href=\'javascript:' . $this->funName . '(' . ($this->page + 1) . ', ' . $this->id . ', ' . $this->type . ', ' . $this->libType . ');\'>' . $this->config['next'] . '</a></li>';
		}

		return $html;
	}

	private function last()
	{
		if ($this->page == $this->pageNum) {
			$html .= '';
		}
		else if ($this->pageType == 0) {
			$html .= '<li class=\'last\'><a href=\'' . $this->uri . '&page=' . $this->pageNum . '\'>' . $this->config['last'] . '</a></li>';
		}
		else {
			$html .= '<li class=\'last\'><a href=\'javascript:' . $this->funName . '(' . $this->pageNum . ', ' . $this->id . ', ' . $this->type . ', ' . $this->libType . ');\'>' . $this->config['last'] . '</a></li>';
		}

		return $html;
	}

	private function goPage()
	{
		return '&nbsp;&nbsp;<input type="text" onkeydown="javascript:if(event.keyCode==13){var page=(this.value>' . $this->pageNum . ')?' . $this->pageNum . ':this.value;location=\'' . $this->uri . '&page=\'+page+\'\'}" value="' . $this->page . '" style="width:25px"><input type="button" value="GO" onclick="javascript:var page=(this.previousSibling.value>' . $this->pageNum . ')?' . $this->pageNum . ':this.previousSibling.value;location=\'' . $this->uri . '&page=\'+page+\'\'">&nbsp;&nbsp;';
	}

	public function fpage($display = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9))
	{
		$html[0] = '<ul><li class=\'record_number\'>共有<b>' . $this->total . '</b>' . $this->config['header'] . '</li>';
		$html[1] = '<li><div>当前页<b>' . (($this->end() - $this->start()) + 1) . '</b>条</div></li>';
		$html[2] = '<li><div><b>' . $this->page . '/' . $this->pageNum . '</b>页</div></li>';
		$html[3] = $this->first();
		$html[4] = $this->prev();
		$html[5] = $this->pageList();
		$html[6] = $this->next();
		$html[7] = $this->last();
		$html[8] = $this->goPage();
		$html[9] = '</ul>';
		$fpage = '';

		foreach ($display as $index) {
			$fpage .= $html[$index];
		}

		return $fpage;
	}
}


?>
