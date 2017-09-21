<?php 
	@include('../Lib/config.php');
	@include('../Lib/connect.php');
	function GetCountJob()
	{
		$sql="select Count(*) as `Count_job` from `category` as `C` join `job_category` as `J` on `C`.`id`=`J`.`category_id`";
		$query=mysql_query($sql);
		$row=mysql_fetch_assoc($query);
		$r=$row['Count_job'];
		//mysql_close($hcmConnect);
		return $r;
	}
	function Get_New_Job($limit)
	{
		$limit=(int)$limit;
		$sql="select `J`.`id`,`J`.`job_name`,`J`.`listed_timestamp`,`J`.`order_id`,`C`.`category_id` from `job_category` as `C` join `job` as `J` on `C`.`job_id`=`J`.`id`   order by `J`.`listed_timestamp` DESC limit $limit";
		$query=mysql_query($sql);
		//$row=mysql_fetch_array($query);
		//mysql_close($hcmConnect);
		return $query;
	}
	function GetNameFlag($list_id)
	{
		$sql="select `id`,`name`,`key_name`,`job_count` from `category` where id in($list_id)";
		$query=mysql_query($sql);
		$row=mysql_fetch_array($query);
		//mysql_close($hcmConnect);
		return $row;
	}
	
	function HCMListCategory()
	{
		$sql="select `name`,`key_name`,`job_count`,`id` from `category`  where `key_name` is not null and `key_name`!=' ' and `job_count`!=0  order by `id` ASC";
		$query=mysql_query($sql);
		//$row=mysql_fetch_assoc($query);
				//mysql_close($hcmConnect);
		return $query;
	}
	function Check_HCMCategory($id)
	{
		$sql="select count(*) as `checkCount` from category where parent_id='$id' ";
		$query=mysql_query($sql);
		$row=mysql_fetch_array($query);
		$r=$row['checkCount'];
		return $r;
	}
	function HCMCategory_Name($id)
	{
		$sql="select `name` from category where id='$id'";
		$query=mysql_query($sql);
		$row=mysql_fetch_array($query);
		return $row;
	}
	function HCMCategory_Parent_list($id)
	{
   $sql="SELECT `name`,`id`,`key_name`,`code`,`description`,`job_count`,`new_count`  FROM `category` WHERE `parent_id`='$id'";
  		 $query=mysql_query($sql);
   		return $query;
	}
	function ListJob_ByCategory($id,$order,$offset,$rowsperpage)
	{
   $sql="select `J`.`order_id`,`J`.`id`, `J`.`job_description`,`J`.`job_name`,`J`.`age_min`,`J`.`age_max`,`J`.`salary_min`,`J`.`salary_max`,`J`.`address_1_prefecture`,`J`.`address_1_city`,`J`.`new_flag`,`J`.`needed_skill`,`J`.`desired_skill` from `job_category` as `C` join `job` as `J` on `C`.`job_id`=`J`.`id` where `C`.`category_id` in ($id) order by `J`.`$order` limit $offset,$rowsperpage";
   
  		 $query=mysql_query($sql);
   		return $query;
	}
	function Count_ListJob_ByCategory($id)
	{
   $sql="select Count(*) as `Count_job` from `job_category` as `C` join `job` as `J` on `C`.`job_id`=`J`.`id` where `C`.`category_id` in ($id)";
  		 $query=mysql_query($sql);
		 $row=mysql_fetch_array($query);
		 $r=$row['Count_job'];
   		return $r;
	}
	function Job_Show_Detail_id($id)
	{
  		 $sql="select * from job where order_id='$id'";
  		 $query=mysql_query($sql);
		 $row=mysql_fetch_array($query);
		 return $row;
	}
	function ListJob_ByCategory_other_order($id,$order_id,$limit)
	{
   $sql="select `J`.`order_id`,`J`.`job_name`,`C`.`category_id` from `job_category` as `C` join `job` as `J` on `C`.`job_id`=`J`.`id` where `C`.`category_id`='$id' and `J`.`order_id` not in($order_id)  ORDER BY RAND() DESC limit $limit";
  		 $query=mysql_query($sql);
   		return $query;
	}
	
	
	function Jobinfo_Company()
	{
  		 $sql="select * from scrol_vender where scrol_venderStatus=0 order by scrol_venderDate DESC";
  		 $query=mysql_query($sql);
		
		 return $query;
	}
?>