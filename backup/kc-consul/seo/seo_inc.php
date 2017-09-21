<?php 
	/*
		Author: Minh.Nguyen250385@gmail.com
		Company: http://tokyodesignroom.com
	*/
?>
<?php 
	if(!empty($page)):
		switch($page)
			{

				case "interview":
					if(isset($_GET['list'])):
						if(isset($_GET['show'])):
							include('seo/interview/detail.php');
						else:
							include('seo/interview/index.php');
						endif;
					else:
						include('seo/interview/index.php');
					endif;
				break;

				case "policy":
					include('seo/policy/index.php');
				break;
				case "job-search":
					include('seo/job-search/index.php');
				break;
				case "about-us":
					include('seo/about-us/index.php');
				break;
				case "blog":

					if(isset($_GET['sid'])):
						$sid=$_GET['sid'];
						include('seo/blog/detail_blog.php');
						
					else:
						include('seo/blog/index.php');
						
					endif;
					
				break;
				/*****************Begin Category*******************/
				case "category":
					if(!isset($_GET['hcm'])):
						if(!isset($_GET['high_class'])):
							if(!isset($_GET['list'])):
								//default: index.php
								//include('inc/index.php');
							else:
								$list=(int)$_GET['list'];
								//include('jobinfo/jobinfo_category_list.php');
								include('seo/category/category_list.php');
							endif;
						else:
							//include link index.php?page=category&high_class=??
							$high_class=$_GET['high_class'];
							if($high_class=="all"): 
								$high_class='2,3,4,17,8,9,10,15,16';
							endif;
							//include('jobinfo/jobinfo_category_list.php');
								include('seo/category/category_list.php');
						endif;
					else:
						//include file link index.php?page=categpory&hcm=??
							$hcm=(int)$_GET['hcm'];
							include('seo/category/category_list.php');
					endif;
					
				break;
				/*****************End Category*******************/
				/*******************************/
				/*case "interview":
					
					include('seo/interview/index.php');
					
				break;
				*/
				/*******************************/
				case "seminar":
					if(!isset($_GET['views'])):
						include('seo/seminar/index.php');
					else:
						
						include('seo/seminar/'.$_GET['views'].'.php');	
						
					endif;
				break;
				/******************************/
				case "contact":
					if(!isset($_GET['cmd'])):
					include('seo/contact/index.php');
					else:
					include('seo/contact/complete.php');
					endif;
					
				break;
				/******************************/
				
				/*****************Begin jobinfo*******************/
				case "jobinfo":
					
					if(isset($_GET['sid'])):
						$sid=$_GET['sid'];
						$cate=$_GET['cate'];
						include('seo/jobinfo/jobinfo_detail.php');
					
					else:
						include('seo/jobinfo/index.php');
					endif;
				break;
				/*****************End career*******************/
				case "career-consultant":
					include('seo/career-consultant/index.php');
				break;
				/*****************End*******************/
				default:
				include('seo/index.php');
			
			}
		
	else:
 		$currentpage_check = $_SERVER['REQUEST_URI'];
		if($currentpage_check=="" || $currentpage_check=="/" || $currentpage_check=="/index.php"):
			include('seo/index.php');
		endif;

		
	endif;
?>