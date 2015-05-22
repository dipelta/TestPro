<?php
/**
 * TOP API: taobao.wlb.wms.inventory.status.upload request
 * 
 * @author auto create
 * @since 1.0, 2015.04.15
 */
class WlbWmsInventoryStatusUploadRequest
{
	/** 
	 * 库存状态调整
	 **/
	private $content;
	
	private $apiParas = array();
	
	public function setContent($content)
	{
		$this->content = $content;
		$this->apiParas["content"] = $content;
	}

	public function getContent()
	{
		return $this->content;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.wms.inventory.status.upload";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
