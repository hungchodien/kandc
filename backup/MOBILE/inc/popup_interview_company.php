 <div style="display: none;" class="layer_bg">
 </div>
<div style="display: none;" class="layer_cc">
        
       <div class="icon_close"><a href="javascript:void(0)" onClick="hide_layer();"><img src="<?php echo url_root; ?>img/button-close.png" border="0" alt="閉じる"/></a></div>
       <div class="clear">
       		
       		<div class="clearfix popup" id="popup2">

			<div class="clear"><h1><img width="130" src="<?php echo url_root_domain.$logo_company; ?>"></h1></div>
 			 	<div class="clear">
             		<div class="clear about_txt_po"><?php echo $about_company; ?></div>
                    <div class="clear pop_up_cl">
                    	<table width="100%" border="1">
                              <tr>
                                <td class="col_pop1">設立年月</td>
                                <td class="col_pop2"><?php echo $Data_view_Content_Interview[0]['established'];; ?></td>
                              </tr>
                              <tr>
                                <td class="col_pop1">資本金</td>
                                <td class="col_pop2"> <?php echo $Data_view_Content_Interview[0]['capital']; ?></td>
                              </tr>
                              <tr>
                                <td class="col_pop1">従業員数</td>
                                <td class="col_pop2"> <?php echo $Data_view_Content_Interview[0]['employees']; ?></td>
                              </tr>
                              <tr>
                                <td class="col_pop1">本社所在地</td>
                                <td class="col_pop2"><?php echo $Data_view_Content_Interview[0]['headquarters']; ?></td>
                              </tr>
                             
                                
                                
                            </table>

                    	
                    </div>
                    <div class="clear col_end">※上記会社情報につきましては、掲載当時の情報となりますので最新情報につきましては、お問合せください。</div>
                </div>
                 
                
                
                </div>
       </div>
</div>