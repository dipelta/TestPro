<?php

/**
 * 后端商品
 * @author auto create
 */
class ScItem
{
	
	/** 
	 * 条形码
	 **/
	public $barCode;
	
	/** 
	 * 品牌id
	 **/
	public $brandId;
	
	/** 
	 * 品牌名称
	 **/
	public $brandName;
	
	/** 
	 * 高 单位：mm
	 **/
	public $height;
	
	/** 
	 * 1表示区域销售，0或是空是非区域销售
	 **/
	public $isAreaSale;
	
	/** 
	 * 贵重品:false:不是 true：是
	 **/
	public $isCostly;
	
	/** 
	 * 是否危险 false：不是  true：是
	 **/
	public $isDangerous;
	
	/** 
	 * 是否易碎 false ：不是  true：是
	 **/
	public $isFriable;
	
	/** 
	 * 是否保质期：false:不是 true：是
	 **/
	public $isWarranty;
	
	/** 
	 * 商品id
	 **/
	public $itemId;
	
	/** 
	 * 商品名称
	 **/
	public $itemName;
	
	/** 
	 * 1.普通供应链商品 2.供应链组合主商品
	 **/
	public $itemType;
	
	/** 
	 * 长度 单位：mm
	 **/
	public $length;
	
	/** 
	 * LIQUID:液体，1：粉体，SOLID：固体
	 **/
	public $matterStatus;
	
	/** 
	 * 后端商品options字段
	 **/
	public $options;
	
	/** 
	 * 商家编码
	 **/
	public $outerCode;
	
	/** 
	 * 价格：分（吊牌价）
	 **/
	public $price;
	
	/** 
	 * 商品属性格式是  p1:v1,p2:v2,p3:v3
	 **/
	public $properties;
	
	/** 
	 * 备注
	 **/
	public $remark;
	
	/** 
	 * 体积：立方厘米
	 **/
	public $volume;
	
	/** 
	 * 重量.单位：克
	 **/
	public $weight;
	
	/** 
	 * 宽 单位：mm
	 **/
	public $width;
	
	/** 
	 * 仓储商编码，可以支持多个，格式wmsname:code
	 **/
	public $wmsCode;	
}
?>