<?php
@include('inc/header.php');
//@include('../Lib/_init.php');
@include('../config.php');
if ($protocol == 'http:' || $protocol =='HTTP:'){
    $entry_protocol = str_replace('http', 'https', curPageURL() );
    header('Location:'.$entry_protocol);
}
?>

<div id="primary" class="index">
		<section class="top-banner">
        		<div class="container clear">
                		<div class="left">
                        		<div class="slogan"><img src="<?php echo url_root;?>img/top-banner-slogan.png" alt="30代、ヘッドハンティング 転職でひとつ上のステージを目指しませんか？" /></div>
                                
                                <div class="wrap-titles">
                                	<img class="lbl" src="<?php echo url_root;?>img/top-banner-label.png" alt="完全無料" />
                                	<img src="<?php echo url_root;?>img/top-banner-title-01.png" alt="マネージャー～経営幹部へ ステップアップする" />
                                    <img src="<?php echo url_root;?>img/top-banner-title-02.png" alt="年収1000万～4000万希少なハイクラス求人に出会える" />
                                    <img src="<?php echo url_root;?>img/top-banner-title-03.png" alt="生の企業情報が聞けるから価値観にマッチした会社を探せる" />
                                </div>
                                <div class="entry-btn">
                                	<a href="#entry-form" class="scroll-to-div"><img src="<?php echo url_root;?>img/top-banner-entry-btn.png" alt="無料転職サポートに申し込む" /></a>
                               </div>
                        </div>
                        <div class="fr right">
                        		<img src="<?php echo url_root;?>img/main-person.png" alt="" />
                        </div>
                </div>
        </section>
        
        <section class="three-reasons">
        		<div class="container">
                			<div class="sec-title">
                            		<img src="<?php echo url_root;?>img/label-three-reasons.png" alt="クライス＆カンパニーが経営幹部へのステップアップを実現させる、３つの理由" />
                            </div>
                            <div class="list">
                            		<article class="reason">
                                    		<div class="wrap-title">
                                            		<img src="<?php echo url_root;?>img/reason-01.png" alt="理由1" />
                                                    <h3 class="title"><b>30代の転職に強い</b>（平均34.8歳）</h3>
                                            </div>
                                            <div class="content">
                                            		<div class="clear">
                                                            <div class="left fl">
                                                                    <div class="img-title"><img src="<?php echo url_root;?>img/reason-01-title.png" alt="決定者の85％が30代以上です！" /></div>
                                                                    <p>30代の方に求められるポジションの多くは、マネージャー候補以上となり、<span class="main-color">企業側のジャッジも厳しくなります。</span></p>
                                                                    <p>また、プライベートにおいても20代と違って身軽ではないため、多くの方は <span class="main-color">転職を一人の都合で決断できない状況</span>に置かれています。</p>
                                                                    <br/>
                                                                    <p>また、実績と経験を積んでこられた方であれば、次のステージへの<span class="main-color">希望も高く、条件も複雑</span>です。</p>
                                                                    <p>単なる<span class="main-color">ご経歴と求人のマッチングで成功しない</span>のが30代の転職。</p>
                                                                    <br/>
                                                                    <p>
                                                                    	そこでプロのコンサルタントが介入することにより
                                                                        <span class="main-color">成功に導きます。</span>
                                                                        更なる飛躍を求める20代後半の方、次のステージをお考えの40代エグゼクティブ層の方まで、30代を基点とし、キャリアを真剣に考える方々を私たちは支援いたします。
                                                                    </p>
                                                            </div>
                                                            <div class="right fr">
                                                                    <div class="figure">
                                                                            <img src="<?php echo url_root;?>img/reason-01-chart.png" alt="決定者の85％が30代以上です！" />
                                                                            <p class="caption r-text">※2016年4月末から2016年9月末の平均</p>
                                                                    </div>
                                                            </div>
                                                    </div><!--clear-->        
                                                    
                                                    <div class="entry-btn">
                                                    		<a href="#entry-form" class="scroll-to-div">
                                                            	<img src="<?php echo url_root;?>img/reason-01-entry-btn.png" alt="エントリーして30代転職の成功を目指す" />
                                                           </a>
                                                    </div>
                                                    <p class="note center">※ご経験、ご希望によってはサポートの難しい場合もございますのでご了承ください</p>
                                                    
                                            </div><!--content-->
                                    </article>
                                    
                                    
                                    
                                    <article class="reason nd">
                                    		<div class="wrap-title">
                                            		<img src="<?php echo url_root;?>img/reason-02.png" alt="理由2" />
                                                    <h3 class="title"><b>マネージャークラス以上の非公開求人多数</b></h3>
                                            </div>
                                            <div class="content">
                                            		<div class="clear">
                                                            <div class="left fl">
                                                                  	<p>在籍するコンサルタントはそれぞれ得意分野をもっており、長期にわたり企業とおつきあいをしています。</p>
                                                                    <br/>
                                                                    <p>企業からは戦略面から、組織・採用のご相談を承ることも多く、エクスクルーシブ案件・非公開求人の比率が多いことも特長です。</p>
                                                                    <br/>
                                                                    <p>信頼関係が構築できていますので、採用ニーズが顕在化していない場合でも経営課題の解決を実現できる強みをお持ちの方を個別にご推薦するという動きができる点も強みです。</p>                                                                    
                                                            </div>
                                                            <div class="right fr">
                                                                    <div class="figure">
                                                                            <img src="<?php echo url_root;?>img/reason-02-chart.png" alt="" />
                                                                            <p class="caption center">※2016年12月現在</p>
                                                                    </div>
                                                            </div>
                                                    </div><!--clear-->        
                                                    
                                                    <div class="entry-btn">
                                                    		<a href="#entry-form" class="scroll-to-div">
                                                            	<img src="<?php echo url_root;?>img/reason-02-entry-btn.png" alt="エクスクルーシブ・非公開案件を紹介してもらう" />
                                                           </a>
                                                    </div>
                                                    <p class="note center">※ご経験、ご希望によってはサポートの難しい場合もございますのでご了承ください</p>
                                                    
                                            </div><!--content-->
                                    </article>
                                    
                                     <article class="reason rd">
                                    		<div class="wrap-title">
                                            		<img src="<?php echo url_root;?>img/reason-03.png" alt="理由3" />
                                                    <h3 class="title"><b>ベテランヘッドハンターがサポート</b></h3>
                                            </div>
                                            <div class="content">
                                            		     
                                                    <div class="img-title"><img src="<?php echo url_root;?>img/reason-03-title.png" alt="GCDF資格(米国CCE認定)を取得したベテランコンサルタントが専任でサポートします！" /></div>     
                                                    <p>
                                                    	難しい30代の転職を成功に導くため、
                                                        <span class="main-color">キャリアコンサルタントにも幅広い知識とスキルが要求されます。</span>
                                                   </p>     
                                                    
                                                    <p>
                                                    		<span class="main-color">業界や職種、企業に関する知識</span>
                                                            はもちろん、
                                                            <span class="main-color">候補者の方がご自身では気づかない可能性を提案できるよう、</span>
                                                            コンサルティング力アップを目的に創立以来、年間100時間を越える社内外の研修を実施しています。
                                                    </p>     
                                                    <br/>
                                                    <p>
                                                    	また、コンサルタント全員が
                                                        <span class="main-color">GCDF資格を取得</span>
                                                        しており、現在は更に難易度の高い国家資格に挑戦するなど、ご満足いただけるコンサルティングができるよう、
                                                        <span class="main-color">日々トレーニングを続けています。</span>
                                                    </p>
                                                    
                                                   <br/>
                                                   
                                                    <p class="note">※GCDF資格(国家資格)とは、米国CCE.Inc.が認定しているキャリアカウンセラー資格です</p>
                                                   
                                                    
                                                    
                                                    
                                                    <div class="certs">
                                                    		<h3 class="title">クライス &amp; カンパニーのGCDF資格</h3>
                                                            <div class="list clear">
                                                                    <div class="cert fl"><img src="<?php echo url_root;?>img/cert-01.jpg" alt="" /></div>
                                                                    <div class="cert fl"><img src="<?php echo url_root;?>img/cert-02.jpg" alt="" /></div>
                                                                    <div class="cert fl"><img src="<?php echo url_root;?>img/cert-03.jpg" alt="" /></div>
                                                                    <div class="cert fl"><img src="<?php echo url_root;?>img/cert-04.jpg" alt="" /></div>
                                                                    <div class="cert fl"><img src="<?php echo url_root;?>img/cert-05.jpg" alt="" /></div>
                                                                    <div class="cert fl"><img src="<?php echo url_root;?>img/cert-06.jpg" alt="" /></div>
                                                                    <div class="cert fl"><img src="<?php echo url_root;?>img/cert-07.jpg" alt="" /></div>
                                                                    <div class="cert fl"><img src="<?php echo url_root;?>img/cert-08.jpg" alt="" /></div>
                                                                    <div class="cert fl"><img src="<?php echo url_root;?>img/cert-09.jpg" alt="" /></div>
                                                                    <div class="cert fl"><img src="<?php echo url_root;?>img/cert-10.jpg" alt="" /></div>
                                                             </div><!--list-->       
                                                    </div><!--certs-->
                                                    
                                                    <div class="entry-btn">
                                                    		<a href="#entry-form" class="scroll-to-div">
                                                            	<img src="<?php echo url_root;?>img/reason-03-entry-btn.png" alt="ベテランヘッドハンターに相談する" />
                                                           </a>
                                                    </div>
                                                    <p class="note center">※ご経験、ご希望によってはサポートの難しい場合もございますのでご了承ください</p>
                                                   
                                                    
                                            </div><!--content-->
                                    </article>
                                    
                                    
                                    
                            </div><!--list-->
                </div><!--container-->
        </section>
        
		<section class="voices">
        		<div class="container">
                            <div class="sec-title"><img src="<?php echo url_root;?>img/label-voices.png" alt="経営幹部へのステップアップを実現された方の声" /></div>
                            <div class="voices-list clear">
                                    <article class="post">
                                            <div class="head">
                                                <h3 class="pos"><span>WEB系企業マネージャー</span></h3>
                                                <h4 class="voice">大手EC企業部門責任者</h4>
                                            </div>
                                            
                                            <div class="content">
                                                    <div class="img-title"><img src="<?php echo url_root;?>img/title-voice-01.png" alt="自分一人では出会えないチャンスにめぐりあいました" /></div>
                                                    <p class="desc">
                                                        当初は正直転職は考えていませんでした。ところが数か月後、担当コンサルタントからある企業で部門責任者を探していると情報をいただき、まさに自分のキャリアが活かせるチャンスだと思い転職を決断。自分一人では絶対に出会えない機会にめぐりあうことができました。	
                                                    </p>
                                            </div>
                                                
                                    </article>
                                    
                                    <article class="post nd">
                                            <div class="head">
                                                <h3 class="pos"><span>戦略コンサルティング <br/> ファームコンサルタント</span></h3>
                                                <h4 class="voice">WEB系ベンチャー企業役員</h4>
                                            </div>
                                            
                                            <div class="content">
                                                    <div class="img-title"><img src="<?php echo url_root;?>img/title-voice-02.png" alt="ビジョンに共感できる社長と出会い、役員として迎えられました" /></div>
                                                    <p class="desc">
                                                        求人サイトではなかなかピンとくる求人をみつけることができず、クライス＆カンパニーの担当者と面談。自分の志向や気持ちを詳しくお話ししたところ、事業理念やビジョンが私にマッチするのではと、ある企業をご紹介いただき、すぐに社長と面接、意気投合し、転職という流れになりました。
                                                    </p>
                                            </div>
                                    </article>
                                    
                                     <article class="post">
                                            <div class="head">
                                                <h3 class="pos"><span>大手教育系企業事業部長</span></h3>
                                                <h4 class="voice">WEB系企業関連会社社長</h4>
                                            </div>
                                            
                                            <div class="content">
                                                    <div class="img-title"><img src="<?php echo url_root;?>img/title-voice-03.png" alt="5年以上のサポートを経て、社長ポジションへの転職がかないました" /></div>
                                                    <p class="desc">
                                                        今回の転職は、クライス＆カンパニーでの2回目の転職でした。最初の転職は4年前。いつかは経営ポジションで活躍したいとお伝えし、ステップアップできる企業をタイミング良くご紹介いただき、今回念願の社長ポジションへの転職がかないました。
                                                    </p>
                                            </div>
                                    </article>
                            </div><!--voice-list-->
                            
        		</div><!--container-->
        </section>
        
        <section id="entry-form">
        		<div class="sec-title"><img src="<?php echo url_root;?>img/label-form-title.png" alt="転職成功者続出中！まずはあなたも、専属キャリアパートナーと話をしてみませんか？" /></div>
                
                <div class="container form-wrap">
							<?php include('temp-form.php');?>                			
                </div><!--container-->
        </section>
        
</div><!--#primary-->




<?php
@include('inc/footer.php');
?>