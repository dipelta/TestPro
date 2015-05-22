<?php

/**
 * 营销工具满就送
 * @author auto create
 */
class PromotionMjs
{
	
	/** 
	 * 不免邮省份的area_id列表。用';'间隔。最多10个。[110000:"北京";
120000:"天津";
130000:"河北";
140000:"山西";
150000:"内蒙古";
210000:"辽宁";
220000:"吉林";
230000:"黑龙江";
310000:"上海";
320000:"江苏";
330000:"浙江";
340000:"安徽";
350000:"福建";
360000:"江西";
370000:"山东";
410000:"河南";
420000:"湖北";
430000:"湖南";
440000:"广东";
450000:"广西";
460000:"海南";
500000:"重庆";
510000:"四川";
520000:"贵州";
530000:"云南";
540000:"西藏";
610000:"陕西";
620000:"甘肃";
630000:"青海";
640000:"宁夏";
650000:"新疆";
710000:"台湾";
810000:"香港";
820000:"澳门";
990000:"海外"]
	 **/
	public $areaIds;
	
	/** 
	 * 送优惠卷。优惠卷的有效期时间。
	 **/
	public $couponTime;
	
	/** 
	 * 送优惠卷面额。分为[3,5,10,20,50,100]面值。
	 **/
	public $couponValue;
	
	/** 
	 * 是否免邮！
	 **/
	public $freePost;
	
	/** 
	 * 满就送的满多少钱。正整数。
	 **/
	public $fullMoney;
	
	/** 
	 * 最长15个汉字。
	 **/
	public $giftName;
	
	/** 
	 * 礼品的url地址。礼品链接必须是以http://或https://开头的淘宝站内链接。正则表达式:"^http[s]{0,1}://([a-z0-9\\-_]+\\.)*(mall\\.)?(taobao|taobaocdn)\\.(com|net|cn|com\\.cn)(/.*)*$"
	 **/
	public $giftUrl;
	
	/** 
	 * 满就送积分。
	 **/
	public $points;
	
	/** 
	 * true时，减后满full_money才免邮费。false时，减前满full_money就免邮。
	 **/
	public $reduceAfter;
	
	/** 
	 * 满就送减掉的钱数。当满足full_money时，就减掉的钱数。这个钱数是小于full_money的正整数。
	 **/
	public $reduceMoney;	
}
?>