

<?php $session= new yii\web\Session;
      $session->open();
?>
<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script> 
<script type="text/javascript" src="js/jquery.uploadify-3.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/uploadify.css"/>
    <body id="task">


    <div class="clear"></div>
<!--公用样式-->
 <script type="text/javascript"> 
In.add('reward_task',{path:"task/sreward/tpl/default/sreward_task.js",type:'js'});
In('task','reward_task','print');
</script>
 <!--页面内容区-->
 <div class="wrapper">
  <!--页面头部-->
  <header class="clearfix page_header">
  <div class="container_24 clearfix">

    <div class="clearfix po_re" >
    		<!--面包屑-->
     <div class="breadcrumbs clearfix">
      <a href="index.php">首页</a> &gt;
  <a href="index.php?do=task_list&path=B1">任务大厅</a> &gt;
  <a href="index.php?do=task_list&path=A2B1">网站开发</a> &gt;
<a href="index.php?do=task_list&path=A2B1">商城开发</a>
   </div>
  <!--end 面包屑-->
 			<div class="grid_19 ">
 				<div class="mre_l_con clearfix">
 					
  <div  id="taskScroll">
   <div class="page_title ws_break clearfix">
    <h2 class="title">
    	       <strong class="red mr_10">￥<?php echo $task['danjia']?>元</strong>
                <a href="index.php?do=task&taaask_id=76"><?php echo $list['title']?></a>
    </h2>
    <div class="page_sub_title c666 mb_10">
       <span>任务发布时间：2014-12-07 19:58</span>
   <span class="border_l_c mar10">&nbsp;</span>
       <a class="mre_task_kind c333" href="javascript:void(0);" title="雇主只选一个稿件中标,威客中标后将得到：￥72.00元;">单人悬赏模式<span>&nbsp;</span></a>
       <span class="border_l_c mar10">&nbsp;</span>
       <span>编号：#76</span>
       <span class="border_l_c mar10">&nbsp;</span>
       2 人关注   <span class="border_l_c mar10">&nbsp;</span>
       <span></span>
</div>
    </div>
</div>
 				</div>
 			</div>
<div class="grid_5">
<div class="mre_r_con clearfix">
<div class="control clearfix">
    <?php if($task['u_id']!=$session['user']['user_id']){?>
      <!--start提交稿件-->
      <a href="javascript:aaa()" onclick="workHand();" class="submit block">我要交稿</a>

     	  <!--end 提交稿件-->
    <?php }else{ ?>
  <!--start延期加价-->
     	<a href="javascript:void(0)" onclick="taskDelay();" class="submit block ">任务延期</a>
  <!--end 延期加价-->
     <?php }?>
      <!--start发起投票-->
     	  <!--end 发起投票-->
  <div class="clearfix mt_5">
      <!-- <div class="msg msg_ok block ">
  	状态：投稿中							
  </div>-->
  <div class="msg msg_ok block ">
  任务交稿中，赏金已托管到本站  </div>
  <div>
  	<span class="c333">距交稿截止</span>
    <span class="red d_time" ed="1418126331" title=""></span>
  </div>
                 
  </div>
     </div>
</div>
</div>
 		</div>



    <!--操作区-->
   <div class="grid_6 hidden" id="taskScroll">
     <div class="control clearfix">
     <!--start提交稿件-->
     	  <!--end 提交稿件-->
      <!--start补充需求-->
     	<a href="javascript:void(0)" onclick="taskReqedit();" class="big button pill t_c fl_l">补充需求</a>
  <!--end 补充需求-->
      <!--start延期加价-->
     	<a href="javascript:void(0)" onclick="taskDelay();" class="big button pill t_c fl_l ml_5 ">任务延期</a>
  <!--end 延期加价-->
      
    
    
     </div>
   </div>
   <!--end 操作区-->
   
   
   
   
   
   
   
   
   
   
   
   <div class="clear"></div>
    <!--页面子导航-->
<div id="header_nav" class="po_re grid_19">
     <nav class="clearfix page_nav po_re" id="top_nav">
       <ul>
         <li >
         	<a href="index.php?r=list/list&id=<?php echo $list['task_id']?>" title="描述">
            	<div class="icon16 notepad-2 mr_5"></div> 描述            </a>
         </li>
         <li class="selected">
         	<a href="index.php?r=list/list&view=work&id=<?php echo $list['task_id']?>" title="稿件">
            	<div class="icon16 spechbubble-sq-line mr_5"></div>稿件 <span class="c999"></span>
            </a>
         </li>
         <li >
         	<a href="index.php?r=list/list&view=comment&id=<?php echo $list['task_id']?>" title="留言">
            	<div class="icon16 spechbubble-2 mr_5"></div>留言 <span class="c999"></span>
            </a>
         </li>
        <li >
        	<a href="index.php?r=list/list&view=mark&id=<?php echo $list['task_id']?>" title="评价">
            <div class="icon16 cert mr_5"></div>评价<span class="c999"></span>
            </a>
         </li>
 	       
         <!-- <li class="border_n">
         	<a href="javascript:void(0);" title="停靠在左侧">
            	<div class="icon16 arrow-bottom-left block"  id="arrow-bottom-left">停靠在左侧</div>
            </a>
         </li> -->
       </ul>
 </nav>
 <!--工具栏--
    <div class="operate po_ab hidden">
          <a href="javascript:setfontsize();" class="" title="文字大小"><div class="icon16 text-letter-t">文字大小</div></a>
      <a href="javascript:setprint('details');" class="" title="打印"><div class="icon16 print">打印</div></a>
   </div>
  <!--end 工具栏-->
     <div class="clear"></div>
</div>
    
   <div class="clear"></div>
  </div> 
 </header>
 <!--end 页面头部-->
 <!--详细内容区-->
  <section class="content">
  <!--布局框-->  
  <div class="container_24">
  	<!--章节1-->
   <section class="clearfix section">
  	<!--左边导航 start--
<div class="second_menu container_24 po_ab hidden" id="left_nav">
        <div class="suffix_23 pull_1">
            <nav class="minor_nav box">
                <ul class="nav_group">
                   <li >
         	<a href="index.php?do=task&task_id=76" title="描述" >
            	<div class="icon16 notepad-2 mr_5 block">描</div>
            </a>
         </li>
         <li>
         	<a href="index.php?do=task&task_id=76&view=work" title="稿件[2]" class="selected">
            	<div class="icon16 spechbubble-sq-line mr_5 block">稿</div>
            </a>
         </li>
         <li >
         	<a href="index.php?do=task&task_id=76&view=comment" title="留言[0]" >
            	<div class="icon16 spechbubble-2 mr_5 block">留</div>
            </a>
         </li>
        <li>
        	<a href="index.php?do=task&task_id=76&view=mark" title="评价[0]" >
            <div class="icon16 cert mr_5 block">评</div>
            </a>
         </li>
       
         <li>
 	<a href="index.php?do=task&task_id=76&view=tools"  title="工具">
 		<div class="icon16 box mr_5 block">工</div>
</a>
</li>
                </ul>
                <ul class="nav_group">
<li>
         	<a href="javascript:void(0);" class="" title="停靠在顶部">
            	<div class="icon16 arrow-top-right block" id="arrow-top-right">停止</div>
            </a>
         </li>
                </ul>
            </nav>
        </div>
    </div>
  	<!--左边导航 end-->

   
    <!---->
    <div class="show_panel container_24 ">
         <link rel="stylesheet" type="text/css" href="resource/js/jqplugins/fancybox/jquery.fancybox-1.3.4.css" media="screen">
<script src="resource/js/jqplugins/fancybox/jquery.fancybox-1.3.4.js" type="text/javascript"></script>
<script src="resource/js/jqplugins/fancybox/jquery.mousewheel-3.0.4.pack.js" type="text/javascript"></script>
<script src="resource/js/uploadify/jquery.uploadify-3.1.min.js" type="text/javascript"></script>
<link href="resource/js/uploadify/uploadify.css" rel="stylesheet">
     <div class="grid_24 po_re">
     	<div class="panel clearfix box">
       <header class="clearfix box_header">
       	
  <div class="pl_20">
          	<nav class="box_nav">
            	<ul class="clearfix">
                    <li><a href="index.php?do=task&task_id=76&view=work">所有稿件[2]</a></li>
                    <li><a href="index.php?do=task&task_id=76&view=work&st=4">中标稿件[0]</a> </li>
                    <li><a href="index.php?do=task&task_id=76&view=work&st=7">淘汰稿件[0]</a> </li>
                    <li><a href="index.php?do=task&task_id=76&view=work&st=5">入围稿件[0]</a></li>
                	            <li><a href="index.php?do=task&task_id=76&view=work&st=0">未审核稿件(2)</a></li>
                    	
                    
            	</ul>
            </nav>
</div>
       </header>
   
     	
   <!--摘要-->
       <div class="gj_summery clearfix">
       	<div  id="gj_summery">
           <?php foreach ($work as $v):?>
            
       	<div class="items clearfix">
      	<!--稿件标题栏 start-->
         <div id="work_14" class="sum_title po_re clearfix ">
           	 
             
             <div class="sum_left">
             	<a href="#" class="button fl_r mr_10 view_ctrl" >-收起</a>
             	<strong class="gj_bg">NO.<?php echo $v['weikeUser']['user_id']?></strong>
                <span>投稿时间：<?php echo date("Y-m-d H:i:s",$v['time'])?></span> 
            
 <strong class='c396'>
雇主已查看</strong> 


             </div>
             
          </div>
          <!--稿件标题栏 end-->
          <!--稿件内容栏 start-->
          <div class="sum_content clearfix work_14">
          <!--用户信息栏 start-->
           <div class="sc_left t_c">
             <div class="user_info po_re pt_10" uid="11" wid="14">
              
<!--浮出层-->
                 <div class="po_ab user_detail hidden"></div>
                <!--end 浮出层-->

<!--用户信息-->
<div class="pl_20 t_l clearfix">
<div class="fl_l mr_10">
<a href="index.php?do=space&member_id=11" target="_blank"> <img src='http://localhost/weike/data/avatar/default/man_small.jpg' uid='11' class='pic_small'></a>
</div>
<div>
             			<p><a href="index.php?do=space&member_id=11" target="_blank"><strong><?php echo $v['weikeUser']['user_name']?></strong></a></p>
<p class="ml_10"><img src="data/uploads/sys/mark/309044f3b07ef87c95.gif?fid=2067" align="absmiddle" title="头衔 ：一级威客&#13;&#10;能力值：0&#13;&#10;等级：1"> </p>
</div>
              		<div class="clear"></div>
               	 	<p></p>
              
             	</div>
<!--end 用户信息-->
             </div>
             

           </div>
             <!--用户信息栏 end-->
             
             <div class="sc_right pad20 po_re clearfix" id="14">

<!--稿件操作 start-->

<?php if($task['u_id']==$session['user']['user_id']):?>
<div class="pl_20 mb_20">
                            <span id="work_4_14">
              	<a href="javascript:void(0);" class="button" onclick="workBid('14','4',this)">中标</a>
              </span>
                              <span id="work_5_14">
              	<a href="javascript:void(0);" class="button"  onclick="workBid('14','5',this)">入围</a>
              </span>
                              	<span id="work_7_14">
                	<a href="javascript:void(0);" class="button"  onclick="workBid('14','7',this)">不合格</a>
                </span>
                 
            </div>
<?php endif;?>
<!--稿件操作 end-->

             <!--稿件详细 start-->
             <div class="work_status_big work_0_big qualified_big1 po_ab" alt="待选稿" title="待选稿"></div>
       		 <div class="pl_20">
               
 	 <div class="ws_prewrap ws_break"><?php echo $v['work_title']?></div>
                 	<span class="work_img_box">
<a href="http://localhost/weike/data/uploads/2014/12/07/253005484412cf19d8.jpg" class="group" rel="example_group"><img src="http://localhost/weike/data/uploads/2014/12/07/253005484412cf19d8.jpg" alt=''></a>
</span>
               		 <!--稿件附件-->
                         <?php if($v['work_file']):?>
 	   		  <details open  class="mb_20" id="file">
    		 <!--标题-->
      		<summary class="pad5 fontb"><a href="javascript:void(0);" onclick="loadFile('14')">查看附件(1)</a></summary>
      		<div class="affix pl_10" id="work_14_file"></div>
  		 </details>
                         <?php endif;?>
  	          <!--end 稿件附件-->
 <!---->
  
 <div id="work_14_comment" class="pb_10">
 	
 </div>
 <?php if($task['u_id']==$session['user']['user_id']):?>
               <div class="review"><a href="#" class="button ml_5" >我要点评</a></div>
 <?php endif;?>
 <div class="work_answer pt_10 pb_10 clearfix hidden" >
<div class="answer-form ">
                    	<div class="grid_10">
<textarea class="tar_comment txt_input" id="tar_comment" onkeydown="checkCommentInner(this,event)" cols="70">我要说几句...</textarea>
                       
                            <div class="answer-textarea  answer-zone pt_10" >
                                <button type="button" class="button answer-zone" value="确定" onclick="work_comment(this,'14')"><span class="check icon"></span>发表</button>
                                <span class="answer_word">你还能输入100个字!</span>
                            </div>
                        </div>
</div>
</div>
                </div>

              </div>
  
  <div class="operate fl_r">
  	
            	

                	<a href="javascript:void(0);" title="收藏" onclick="favor('work_id','work','sreward','11','14','qweqweqweqwe的稿件','76')"><div class="icon16 star-fav-empty mr_5"></div>收藏</a>
                
<!--
                	<a href="javascript:void(0);" title="投诉" onclick="report('work','3','14','11','aaaaa')"><div class=" icon16 cog mr_5"></div>投诉</a>
                -->
</div>
            </div>

            <!--稿件标题栏 end-->
            </div>
            <?php endforeach;?>
           <!--page 翻页 start-->
         <div class="page">
             <p class="clearfix"><span class="stats">共2条 </span> </p>
             <div class="clear">
           </div>
         </div>
         <!--page 翻页 end-->
       </div>
   </div><!--end 摘要-->
     </div>
 </div>
 <script type="text/javascript" >
 	///In('xheditor');
 	$(document).ready(function() {
$("a.group").fancybox({

});

});
 </script>
          <div class="clear"></div>
   
   </div>
   <!---->
   </section>
   <!--end 章节1-->
  

   <!--任务详情_底部广告-->
   <div class='adv'><a href='http://www.kppw.cn' target='_blank' title='adv'><img src='data/uploads/sys/ad/adv.jpg' width='' height='' alt='adv' title='adv'></a></div>
  
  
  
  
  
  
  
  <!--其他推荐-->
    <aside class="clearfix mb_10">
     <div class="grid_8">
      <div class="box  normal2">
        <div class="inner">
        	<div class="box_header">
          <h3 class="title">关注<span class="c369"><a href="index.php?do=task_list&path=B1A2" target="_blank">网站开发</a></span>的人还关注了</h3>
      	</div>
           <div class="clearfix box_detail">             

               <ul>
               	                   <li class="t_c"><span class="c999">暂无相应记录</span></li>
               </ul>

           </div>
        </div>
      </div>
     </div>
     <div class="grid_8">
      <div class="box  normal2">
       <div class="inner">
       	<div class="box_header">
         <h3 class="title">你可能感兴趣的任务</h3>
     	</div>
         <div class="clearfix box_detail">
        <ul>
        	
               	                   <li class="t_c"><span class="c999">暂无相应记录</span></li>
          </ul>
        </div>
       </div>
      </div>
     </div>
     <div class="grid_8">
       <div class="box  normal2">
         <div class="inner">
         	<div class="box_header">
            <h3 class="title">浏览历史记录</h3>
        </div>
              <div class="clearfix box_detail">
                <ul class="small_list">
               	<li>
<div class="item clearfix">
<a href="index.php?do=task&task_id=76" target="_blank" title="qweqweqweqwe"><span class="c900">
￥80.00元</span> qweqweqweqwe</a>
</div>
</li>	
</ul>
               </div>          
         </div>
        </div>
     </div>
    </aside>
    <!--end 其他推荐-->
    </div>
    <!--end 布局框-->     	
   </section>
   <!--end 详细内容区-->
  </div>
<!--end 页面内容区-->
<script src="resource/js/uploadify/jquery.uploadify-3.1.min.js" type="text/javascript"></script>
<link href="resource/js/uploadify/uploadify.css" rel="stylesheet">
<script type="text/javascript" src="resource/js/jqplugins/jQuery.mouseDelay.js"></script>
<script type="text/javascript">
var guid  	 	= parseInt(1)+0;
var task_id		= parseInt(76)+0;
var uid 		= parseInt('1')+0;
var task_status = parseInt(2)+0;
var basic_url	= "index.php?do=task&task_id=76";
var datePrv     = "2014-12-07";
var username    = "admin";
var delay_count = parseInt('0')+0;
var delay_total = parseInt('3')+0;
var trust_mode  = "0";
</script>
<div id="a1" style="display:none" >
<div id="fwin_work_hand" class="fwinmask" style="position: absolute; z-index: 1201; left: 410.5px; top: 76.5px;">
<table class="fwin" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="tt_l"></td>
<td class="tt_c" ondblclick="hideWindow('work_hand')"></td>
<td class="tt_r"></td>
</tr>
<tr>
<td class="m_l" ondblclick="hideWindow('work_hand')"></td>
<td id="fwin_content_work_hand" class="m_c" fwin="work_hand">
<h3 id="fctrl_work_hand" class="flb" style="cursor: move;">
<em>任务交稿</em>
<span>
<a class="flbc" title="close" onclick="hideWindow('work_hand');" href="javascript:;">关闭</a>
</span>
</h3>
<div class="winbody">
<div class="clearfix pad10">
<div id="notice_id" class="messages m_infor" fwin="work_hand">
<span class="icon16">warning</span>
请仔细填写自己的稿件内容以提高自己的中标几率.
</div>
<div id="upload_tip" class="clearfix box" fwin="work_hand">
<form id="frm_reward" action="index.php?r=list/work_add" name="frm_reward" method="post"enctype ="multipart/form-data"  fwin="work_hand">
        <input type="hidden" name='task_id' value='<?php echo $task['task_id']?>'/>
    <input type="hidden" name='user_id' value='<?php echo $session['user']['user_id']?>'/>
<input id="sbting" type="hidden" value="" name="sbting" fwin="work_hand">
<div class="rowElem clearfix">
<label class="fl_l t_r">添加附件： </label>
<div class="fl_l" style="width:350px">
<input id="file_ids" type="hidden" name="file_ids" fwin="work_hand">

<input type="file" name="file_upload" id="file_uplad" />

<div id="upload-queue" class="uploadiy-queue" fwin="work_hand"></div>
一次最多传5个 ,每个文件大小上限1M,格式:
<div class="upfile ws_break">
<span class=" ws_prewrap ws_break" style="line-height:15px; display:block">*.pdf;*.doc;*.docx;*.xls;*.ppt;*.wps;*.zip;*.rar;*.txt;*.jpg;*.jpeg;*.gif;*.bmp;*.swf;*.png;*.lsp</span>
</div>
</div>
</div>
<div id="desc" class="rowElem clearfix" fwin="work_hand">
<label class="fl_l t_r">稿件描述： </label>
<div class="fl_l">
<textarea id="tar_content" class="txt_input" style="width:350px;height:100px" onkeydown="checkInner(this,'100',event)" name="tar_content" rows="8" cols="68" fwin="work_hand"></textarea>
<div class="clear"></div>
<div id="length_show" class="c999" fwin="work_hand">已输入长度:0,还可以输入:100</div>
</div>
<div class="tool_list">
<label class="fl_l t_r">隐藏交稿：</label>
<div class="fl_l">
<div class="messages clearfix">
<p class="font_simsun ">
<span>
您还未购买该工具，
<a target="_blank" href="http://localhost/weike/index.php?do=user&view=payitem&op=toolbox&show=buy#userCenter">立即去购买>></a>
<a target="_blank" href="http://localhost/weike/index.php?do=help&fpid=290&spid=301#pageTop">什么是隐藏稿件?</a>
</span>
</p>
</div>
</div>
</div>
</div>
<div class="rowElem clearfix form_button">
<button id="sbt_btn" class="button" onclick="subWork();" value="保存" type="submit" fwin="work_hand">
<span class="check icon"></span>
保存
</button>
<button class="button" onclick="hideWindow('work_hand');" value="取消" type="button">
<span class="reload icon"></span>
取消
</button>
</div>
</form>
</div>
</div>
</div>
<link rel="stylesheet" href="resource/js/uploadify/uploadify.css">

<style>
    
/*
Uploadify v3.1.0
Copyright (c) 2012 Reactive Apps, Ronnie Garcia
Released under the MIT License <http://www.opensource.org/licenses/mit-license.php>
*/
.uploadify {
    width:350;
position: relative;
margin-bottom: 1em;
}
.uploadify-button {
background-color: #f4f4f4;
background-image: -webkit-gradient(linear, left top, left bottom, from(#f4f4f4), to(#ECECEC));
background-image: -webkit-linear-gradient(top, #f4f4f4, #ECECEC);
background-image: -moz-linear-gradient(top, #f4f4f4, #ECECEC);
background-image: -ms-linear-gradient(top, #f4f4f4, #ECECEC);
background-image: -o-linear-gradient(top, #f4f4f4, #ECECEC);
background-image: linear-gradient(to bottom, #f4f4f4, #ECECEC);
background-position: center top;
background-repeat: no-repeat;
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;
border: 1px solid #ccc;
color: #333;
font:12px Arial, Helvetica, sans-serif;
text-align: center;
text-shadow: 0 -1px 0 rgba(255,255,255,0.25);
width: 100%;
}
.uploadify:hover .uploadify-button {
background-color: #fff;
background-image: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#f4f4f4));
background-image: -webkit-linear-gradient(top, #ffffff, #f4f4f4);
background-image: -moz-linear-gradient(top, #ffffff, #f4f4f4);
background-image: -ms-linear-gradient(top, #ffffff, #f4f4f4);
background-image: -o-linear-gradient(top, #ffffff, #f4f4f4);
background-image: linear-gradient(to bottom, #ffffff, #f4f4f4);
background-position: center bottom;
}
.uploadify-button.disabled {
background-color: #D0D0D0;
color: #808080;
}
.uploadify-queue {
    width:350;
clear:both;
overflow:hidden;
}
.uploadify-error {
background-color: #FDE5DD !important;
}
.uploadify-progress {
background-color: #E5E5E5;
width: 100%;
}
.uploadify-progress-bar {
background-color: #693;
height: 3px;
width: 1px;
}
</style>
</link>
</td>
<td class="m_r" ondblclick="hideWindow('work_hand')"></td>
</tr>
<tr>
<td class="b_l"></td>
<td class="b_c" ondblclick="hideWindow('work_hand')"></td>
<td class="b_r"></td>
</tr>
</tbody>
</table>
</div>
</div>
<script type="text/javascript">
var img_id_upload=new Array();//初始化数组，存储已经上传的图片名
var i=0;//初始化数组下标
$(document).ready(function() {

    $('#file_uplad').uploadify({ 
        
    	'auto'     : true,//关闭自动上传
    	'removeTimeout' : 50,//文件队列上传完成1秒后删除
        'swf'      : 'uploadify.swf',
        'uploader' : 'uploadify.php',
        'method'   : 'post',//方法，服务端可以用$_POST数组获取数据
	'buttonText' : '上传文件',//设置按钮文本
        'multi'    : true,//允许同时上传多张图片
        'uploadLimit' : 5,//一次最多只允许上传10张图片
        'fileTypeDesc' : 'All Files',//只允许上传图像
        'fileTypeExts' : '*.gif; *.jpg; *.png ;*.pdf;*.doc;*.docx;*.xls;*.ppt;*.wps;*.zip;*.rar;*.txt;*.jpg;*.jpeg;*.gif;*.bmp;*.swf;*.png;*.lsp',//限制允许上传的图片后缀
        'fileSizeLimit' : '20000KB',//限制上传的图片不得超过200KB 
        'onUploadSuccess' : function(file, data, response) {//每次成功上传后执行的回调函数，从服务端返回数据到前端
               img_id_upload[i]=data;
               i++;
              
                alert(data);
        },
        'onQueueComplete' : function(queueData) {//上传队列全部完成后执行的回调函数
          //  if(img_id_upload.length>0)
           // alert('成功上传的文件有：'+encodeURIComponent(img_id_upload));
           //for(a in queueData){
               
          // }
        }  
        // Put your options here
    });
});
</script>
   <script>
      function aaa(){ 
          // alert(10)
        
         
         $("#a1").show();
      }
      function hideWindow(a){
          $("#a1").hide();
      }
      </script>
    </body>
 
 