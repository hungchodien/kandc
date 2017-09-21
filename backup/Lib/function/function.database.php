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
		$sql="select `J`.`id`,`J`.`job_name`,`J`.`listed_timestamp`,`J`.`order_id`,`C`.`category_id`,
		`J`.`age_min`,`J`.`age_max`,`J`.`salary_min`,`J`.`salary_max`
		 from `job_category` as `C` join `job` as `J` on `C`.`job_id`=`J`.`id`   order by `J`.`listed_timestamp` DESC limit $limit";
		$query=mysql_query($sql);
		//$row=mysql_fetch_array($query);
		//mysql_close($hcmConnect);
		return $query;
	}
	function Get_New_Job_ticker($limit)
	{
		$limit=(int)$limit;
		$sql="select `J`.`id`,`J`.`job_name`,`J`.`job_title`,`J`.`listed_timestamp`,`J`.`order_id`,`C`.`category_id`,
		`J`.`age_min`,`J`.`age_max`,`J`.`salary_min`,`J`.`salary_max` from `job_category` as `C` join `job` as `J` on `C`.`job_id`=`J`.`id` where `J`.job_ticker_index=1  group by `J`.`order_id`   order by `J`.`listed_timestamp` DESC limit $limit";
		$query=mysql_query($sql);
		//$row=mysql_fetch_array($query);
		//mysql_close($hcmConnect);
		return $query;
	}
	function GetNameFlag($list_id)
	{
		$sql="select `id`,`name`,`name_en`,`key_name`,`job_count` from `category` where id in($list_id)";
		$query=mysql_query($sql);
		$row=mysql_fetch_array($query);
		//mysql_close($hcmConnect);
		return $row;
	}
	
	function HCMListCategory()
	{
		$sql="select `name`,`name_en`,`key_name`,`job_count`,`id` from `category`  where `key_name` is not null and `key_name`!=' ' and `job_count`!=0  order by `id` ASC";
		$query=mysql_query($sql);
		//$row=mysql_fetch_assoc($query);
				//mysql_close($hcmConnect);
		return $query;
	}
	function HCMListCategory_En()
	{
		$sql="select `name`,`name_en`,`key_name`,`job_count_en`,`id` from `category`  where `key_name` is not null and `key_name`!=' ' and `job_count_en`!=0  order by `id` ASC";
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
		$sql="select `name`,`name_en` from category where id='$id'";
		$query=mysql_query($sql);
		$row=mysql_fetch_array($query);
		return $row;
	}
	function HCMCategory_Parent_list($id)
	{
   $sql="SELECT `name`,`name_en`,`id`,`key_name`,`code`,`description`,`job_count`,`new_count`  FROM `category` WHERE `parent_id`='$id' and `job_count`>0";
  		 $query=mysql_query($sql);
   		return $query;
	}
	function HCMCategory_Parent_list_En($id)
	{
   $sql="SELECT `name`,`name_en`,`id`,`key_name`,`code`,`description`,`job_count_en`,`new_count_en`  FROM `category` WHERE `parent_id`='$id'";
  		 $query=mysql_query($sql);
   		return $query;
	}
	function ListJob_ByCategory($id,$order,$offset,$rowsperpage,$short='')
	{
   $sql_1="select `J`.`order_id`,`J`.`id`, `J`.`job_description`,`J`.`job_title`,
`J`.`job_name`,`J`.`age_min`,`J`.`age_max`,`J`.`consultant_comment`,
`J`.`salary_min`,`J`.`salary_max`,
`J`.`address_1_prefecture`,`J`.`address_1_city`,`J`.`company_info`,
`J`.`new_flag`,`J`.`needed_skill`,`J`.`desired_skill` 
from `job_category` as `C` join `job` as `J` on `C`.`job_id`=`J`.`id` 
join category as `D` on `C`.`category_id`=`D`.`id`
where {$short} `J`.`salary_max` >= 800 and `C`.`category_id` in ($id) 
   group by `J`.`order_id`
   order by `J`.`$order` DESC limit $offset,$rowsperpage";
   $query_1=mysql_query($sql_1);
   if(mysql_num_rows($query_1)):
     	return $query_1;
   else:
   	  $sql_2="select `J`.`order_id`,`J`.`id`, `J`.`job_description`,`J`.`job_title`,
`J`.`job_name`,`J`.`age_min`,`J`.`age_max`,`J`.`consultant_comment`,
`J`.`salary_min`,`J`.`salary_max`,
`J`.`address_1_prefecture`,`J`.`address_1_city`,`J`.`company_info`,
`J`.`new_flag`,`J`.`needed_skill`,`J`.`desired_skill` 
from `job_category` as `C` join `job` as `J` on `C`.`job_id`=`J`.`id` 
join category as `D` on `C`.`category_id`=`D`.`id`
where {$short} `J`.`salary_max` >= 800 and `C`.`category_id` in (select `id` from `category` where `parent_id`=$id) 
   group by `J`.`order_id`
   order by `J`.`$order` DESC limit $offset,$rowsperpage";
   		$query_2=mysql_query($sql_2);
   		return $query_2;
   endif;
   }
	function ListJob_ByCategory_highClass($id,$order,$offset,$rowsperpage)
	{
   $sql="select `C`.`category_id`,`J`.`order_id`,`J`.`id`, `J`.`job_description`,`J`.`job_title`,
`J`.`job_name`,`J`.`age_min`,`J`.`age_max`,`J`.`consultant_comment`,
`J`.`salary_min`,`J`.`salary_max`,
`J`.`address_1_prefecture`,`J`.`address_1_city`,`J`.`company_info`,
`J`.`new_flag`,`J`.`needed_skill`,`J`.`desired_skill` 
from `job_category` as `C` join `job` as `J` on `C`.`job_id`=`J`.`id` 
join category as `D` on `C`.`category_id`=`D`.`id`
where `J`.`salary_max` >= 1000 and (`C`.`category_id` in ($id) or `D`.`id` in (select `id` from `category` where `parent_id` in ($id)) )
   group by `J`.`order_id`
   order by `J`.`$order`,`J`.`salary_max` DESC limit $offset,$rowsperpage";
   $query=mysql_query($sql);
   		return $query;
	}
function ListJob_ByCategory_rss($id,$order,$offset,$rowsperpage)
	{
if($id!="" || $id!=0):
   $sql="select `J`.`order_id`,`J`.`id`, `J`.`job_description`,`J`.`job_title`,
`J`.`job_name`,`J`.`age_min`,`J`.`age_max`,
`J`.`salary_min`,`J`.`salary_max`,`J`.`listed_timestamp`,
`J`.`address_1_prefecture`,`J`.`address_1_city`,`J`.`company_info`,
`J`.`new_flag`,`J`.`needed_skill`,`J`.`desired_skill` 
from `job_category` as `C` join `job` as `J` on `C`.`job_id`=`J`.`id` 
join category as `D` on `C`.`category_id`=`D`.`id`
where `C`.`category_id` in ($id) or `D`.`id` in (select `id` from `category` where `parent_id` in ($id)) GROUP BY `J`.`order_id`
   
   order by `J`.`$order` DESC limit $offset,$rowsperpage";
else:

 $sql="select `J`.`order_id`,`J`.`id`, `J`.`job_description`,`J`.`job_title`,
`J`.`job_name`,`J`.`age_min`,`J`.`age_max`,
`J`.`salary_min`,`J`.`salary_max`,`J`.`listed_timestamp`,
`J`.`address_1_prefecture`,`J`.`address_1_city`,`J`.`company_info`,
`J`.`new_flag`,`J`.`needed_skill`,`J`.`desired_skill` 
from `job_category` as `C` join `job` as `J` on `C`.`job_id`=`J`.`id` 
join category as `D` on `C`.`category_id`=`D`.`id`
 GROUP BY `J`.`order_id`
   
   order by `J`.`$order` DESC limit $offset,$rowsperpage";

endif;

  // $query=mysql_query($sql);
   return  $sql;
   		//return $query;
	}
	function ListJob_ByCategory_En($id,$order,$offset,$rowsperpage)
	{
   $sql="select `J`.`order_id`,`J`.`id`, `J`.`job_description`,
`J`.`job_name`,`J`.`age_min`,`J`.`age_max`,
`J`.`salary_min`,`J`.`salary_max`,
`J`.`address_1_prefecture`,`J`.`address_1_city`,
`J`.`new_flag`,`J`.`needed_skill`,`J`.`desired_skill`, `J`.`foreign_flag`,`J`.`venture_flag`,`J`.`topics_flag`,
`J`.`listed_market`,`J`.`Position_en`,`J`.`Job_Description_en`,
`J`.`Company_Summery_en`,`J`.`English_Requirement_en`,`J`.`Type_of_Industry_en`,
`J`.`Location_en`,`J`.`Requried_Skills_en`,`J`.`Education_en`,`J`.`Consultant_Comment_en`,
`J`.`Japanese_Requirement_en` 
from `job_category_en` as `C` join `job_en` as `J` on `C`.`job_id`=`J`.`id` 
join category as `D` on `C`.`category_id`=`D`.`id`
where `C`.`category_id` in ($id) or `D`.`id` in (select `id` from `category` where `parent_id`=$id) 
   
   order by `J`.`$order` DESC limit $offset,$rowsperpage";

   $query=mysql_query($sql);
   		return $query;
	}
	function ListJob_ByCategory_search($txt,$offset,$rowsperpage)
	{
   $sql="select `J`.`order_id`,`J`.`id`, `J`.`job_description`,`J`.`job_name`,`J`.`age_min`,`J`.`age_max`,`J`.`salary_min`,`J`.`salary_max`,`J`.`address_1_prefecture`,`J`.`address_1_city`,`J`.`new_flag`,`J`.`needed_skill`,`J`.`desired_skill` from `job_category` as `C` join `job` as `J` on `C`.`job_id`=`J`.`id` where  MATCH(
   `J`.`job_name`,
   `J`.`job_description`,
   `J`.`needed_skill`,
   `J`.`desired_skill`,
   `J`.`experience`,
   `J`.`education`,
   `J`.`company_address_city`,
   `J`.`desired_person`,
   `J`.`consultant_comment`,
   `J`.`address_1_prefecture`,
   `J`.`address_1_city`,
   `J`.`address_2_prefecture`,
   `J`.`address_2_city`,
   `J`.`company_address_prefecture`,
   `J`.`tantou`
   )
    AGAINST ('{$txt}' IN BOOLEAN MODE) or `order_id`='$txt' group by `J`.`order_id` order by `J`.`listed_timestamp`  limit $offset,$rowsperpage";
   
  		 $query=mysql_query($sql);
   		return $query;
	}
	function Count_ListJob_ByCategory($id,$short='')
	{
   $sql="select * from 
   `job_category` as `C` join `job` as `J` 
   on `C`.`job_id`=`J`.`id` 
   join category as `D` 
   on `C`.`category_id`=`D`.`id`
   where {$short} `J`.`salary_max` >= 800 and `C`.`category_id` in ($id)  group by J.order_id ";
  		 $query=mysql_query($sql);
		 //$row=mysql_fetch_array($query);
		 $r = mysql_num_rows($query);	
		 //$r=$row['Count_job'];
		//echo $r."test";
		if($r==0):
			$sql_sub="select count(DISTINCT `J`.`order_id`) as `Count_job` from job as `J` join job_category as `C` on `J`.`id`=`C`.`job_id` where {$short}
            `J`.`salary_max` >= 800 and category_id 
            in (select id from category where parent_id=$id)";
			$query_sub=mysql_query($sql_sub);
			$row_sub=mysql_fetch_array($query_sub);
			$row_sub_count=$row_sub['Count_job'];
			return $row_sub_count;
		else:
			return $r;

		endif;
   		
	}
	function Count_ListJob_ByCategory_highClass($id)
	{
   $sql="select * from 
   `job_category` as `C` join `job` as `J` 
   on `C`.`job_id`=`J`.`id` 
   join category as `D` 
   on `C`.`category_id`=`D`.`id`
   where `J`.`salary_max` >= 1000 and (`C`.`category_id` in ($id) or `D`.`id` in (select `id` from `category` where `parent_id` in ($id))) group by J.order_id ";
  		 $query=mysql_query($sql);
		 //$row=mysql_fetch_array($query);
		$r = mysql_num_rows($query);
		 //$r=$row['Count_job'];
		if($r==0):
			$sql_sub="select count(DISTINCT `job`.`order_id`) as `Count_job` from job join job_category on job.id=job_category.job_id where
		   `job`.`salary_max` >=1000
		    and
            `job_category`.`category_id` in ($id)";
			$query_sub=mysql_query($sql_sub);
			$row_sub=mysql_fetch_array($query_sub);
			$row_sub_count=$row_sub['Count_job'];
			return $row_sub_count;
		else:
			return $r;
		endif;
   		
	}
	function Count_ListJob_ByCategory_En($id)
	{
   $sql="select Count(*) as `Count_job` from `job_category_en` as `C` join `job_en` as `J` on `C`.`job_id`=`J`.`id` where `C`.`category_id` in ($id)";
  		 $query=mysql_query($sql);
		 $row=mysql_fetch_array($query);
		 $r=$row['Count_job'];
		if($r==0):
			$sql_sub="select count(*) as `Count_job` from job_en join job_category_en on job_en.id=job_category_en.job_id 
            and category_id 
            in (select id from category where parent_id=$id)";
			$query_sub=mysql_query($sql_sub);
			$row_sub=mysql_fetch_array($query_sub);
			$row_sub_count=$row_sub['Count_job'];
			return $row_sub_count;
		else:
			return $r;
		endif;
   		
	}
	function Count_ListJob_ByCategory_search($txt)
	{
   $sql="select Count(*) as `Count_job` from `job_category` as `C` join `job` as `J` on `C`.`job_id`=`J`.`id` where  MATCH(`J`.`job_name`,
   `J`.`job_description`,
   `J`.`needed_skill`,
   `J`.`desired_skill`,
   `J`.`experience`,
   `J`.`education`,
   `J`.`company_address_city`,
   `J`.`desired_person`,
   `J`.`consultant_comment`,
   `J`.`address_1_prefecture`,
   `J`.`address_1_city`,
   `J`.`address_2_prefecture`,
   `J`.`address_2_city`,
   `J`.`company_address_prefecture`,
   `J`.`tantou`
   ) AGAINST ('{$txt}' IN BOOLEAN MODE) or `J`.`order_id`='$txt' group by `J`.`order_id`";
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
	function Job_Show_Detail_id_En($id)
	{
  		 $sql="select * from job_en where order_id='$id'";
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
	function ListJob_ByCategory_other_order_related_hcm($id,$order_id,$limit)
	{
   $sql="select `J`.`order_id`,`J`.`job_name`,`C`.`category_id` from `job_category` as `C` join `job` as `J` on `C`.`job_id`=`J`.`id` where `C`.`category_id` in (select `id` from `category` where `parent_id`='$id') and `J`.`order_id` not in($order_id)  ORDER BY RAND() DESC limit $limit";
  		 $query=mysql_query($sql);
   		return $query;
	}
	
	
	function Jobinfo_Company()
	{
  		 $sql="select * from scrol_vender where scrol_venderStatus=0 order by scrol_venderDate DESC";
  		 $query=mysql_query($sql);
		
		 return $query;
	}
	function GetCategoryBy_Job_order($order_id)
	{
  		 $sql="select job_category.category_id from job join job_category on job.id=job_category.job_id where job.order_id=$order_id AND job_category.category_id !=1 order by job_category.category_id ASC limit 1";
  		 $query=mysql_query($sql);
		 $row=mysql_fetch_array($query);
		 $id_category=(int)$row['category_id'];
		 return $id_category;
	}
	

?>