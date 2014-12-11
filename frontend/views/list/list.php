<?PHP
$session= new yii\web\Session;
$session->open();
?> 
<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script> 
<script type="text/javascript" src="js/jquery.uploadify-3.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/uploadify.css"/>
<div class="container_24 clearfix">

    <div class="clearfix po_re" >
    		<!--面包屑-->
     <div class="breadcrumbs clearfix">
      <a href="index.php">首页</a> &gt;
  <a href="index.php?do=task_list&path=B1">任务大厅</a> &gt;
  <a href="index.php?do=task_list&path=A201B1">创意祝福</a> &gt;
<a href="index.php?do=task_list&path=A201B1">道歉短信</a>
   </div>
  <!--end 面包屑-->
 			<div class="grid_19 ">
 				<div class="mre_l_con clearfix">
 					
  <div  id="taskScroll">
   <div class="page_title ws_break clearfix">
    <h2 class="title">
    	       <strong class="red mr_10">￥<?php echo $task['danjia']?>元</strong>
                <a href="index.php?do=task&task_id=71"><?php echo $list['title']?></a>
    </h2>
    <div class="page_sub_title c666 mb_10">
       <span>任务发布时间：2014-12-04 14:13</span>
   <span class="border_l_c mar10">&nbsp;</span>
       <a class="mre_task_kind c333" href="javascript:void(0);" title="雇主只选一个稿件中标,威客中标后将得到：￥72.00元;">单人悬赏模式<span>&nbsp;</span></a>
       <span class="border_l_c mar10">&nbsp;</span>
       <span>编号：#71</span>
       <span class="border_l_c mar10">&nbsp;</span>
       6 人关注   <span class="border_l_c mar10">&nbsp;</span>
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
     	  <!--end 补充需求-->
      <!--start延期加价-->
     	  <!--end 延期加价-->
      
    
    
     </div>
   </div>
   <!--end 操作区-->
   
   
   
   
   
   
   
   
   
   
   
   <div class="clear"></div>
    <!--页面子导航-->
<div id="header_nav" class="po_re grid_19">
     <nav class="clearfix page_nav po_re" id="top_nav">
       <ul>
         <li class="selected">
         	<a href="index.php?r=list/list&id=<?php echo $list['task_id']?>" title="描述">
            	<div class="icon16 notepad-2 mr_5"></div> 描述            </a>
         </li>
         <li >
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
          <a href="#file" class="" title="含有附件"><span class="icon16 clip">含有附件</span></a>
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
         	<a href="index.php?do=task&task_id=71" title="描述" class="selected">
            	<div class="icon16 notepad-2 mr_5 block">描</div>
            </a>
         </li>
         <li>
         	<a href="index.php?do=task&task_id=71&view=work" title="稿件[1]" >
            	<div class="icon16 spechbubble-sq-line mr_5 block">稿</div>
            </a>
         </li>
         <li >
         	<a href="index.php?do=task&task_id=71&view=comment" title="留言[0]" >
            	<div class="icon16 spechbubble-2 mr_5 block">留</div>
            </a>
         </li>
        <li>
        	<a href="index.php?do=task&task_id=71&view=mark" title="评价[0]" >
            <div class="icon16 cert mr_5 block">评</div>
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
        <div class="grid_19  clearfix">
  <div class="panel clearfix box">
      <!--布局 左-->
       <div class="clearfix">
        <!--布局 内边距-->
         <div class="pad20">
          <!--标题头部-->
         <header class="hidden">
          <div class="pad5 border_b_c po_re clearfix">
            <h2>说明</h2>
            <!--工具栏--
            <div class="operate po_ab hidden">
                          <a href="#file" class="" title="含有附件"><span class="icon16 clip">含有附件</span></a>
              <a href="javascript:setfontsize();" class="" title="文字大小"><div class="icon16 text-letter-t">文字大小</div></a>
              <a href="javascript:setprint('details');" class="" title="打印"><div class="icon16 print">打印</div></a>
           </div>
          <!--end 工具栏-->
          </div>  
        </header>
       <!--end 标题头部-->
    <!--任务地图-->
<!--end任务地图-->
       <!--内容1-->
       <details open class="mb_20 " id="details">
       <!--标题-->
        <summary  class="fontb">需求</summary>
         <!--内容-->
        
<pre class="ws_prewrap ws_break" >
<?php echo $list['title']?>
      </details>
      <!--end 内容1-->
      <div class="clear"></div>
      <!--start补充需求-->
     	  <!--end 补充需求-->
  <!--任务补充需求-->
       <!--end 任务补充需求-->
   

 <!--任务附件-->
 <?php if(!empty($list['file'])):?>
      <details open  class="mb_20" id="file">
     <!--标题-->
     <summary class=" fontb">附件</summary>
      <div class="affix pl_10">
       <ul>
       	          <li>
             <a id="ddd" target="_blank" href="index.php?do=ajax&view=file&ajax=download&file_name=28.jpg&file_path=data/uploads/2014/12/04/20243547ffb9a4d807.jpg#file" >
             	28.jpg<span class="c999">（70.65 kB）</span><span class="icon16 download"></span></a>
          </li>


      </ul>
     </div>
   </details>
 <?php endif;?>
       <!--end 任务附件-->

   </div>
   <!--end 布局 内边距-->
  </div>
  <!--end 布局 左-->
   
   <!--工具栏--
      <div class="operate fl_r mt_10 hidden">

        <a href="index.php" class="" title="返回首页"><div class="icon16 home">返回首页</div></a>

        <a href="javascript:void(0)" class="scrollTop" title="返回顶部"><div class="icon16 arrow-top">返回顶部</div></a>
      </div>
    <!--end 工具栏-->  
</div>
</div>
  <div class="grid_5  clearfix mre_btns">
 	<!--作者信息-->
            	<div class="shop_author box normal2 clearfix mb_10">
            	<div class="inner">
            		<div class="box_header">
                	<h2 class="title">雇主信息</h2>
                	</div>
<div class="pad5 clearfix border_b_c">
<div class="clearfix">
                        <div class="t_c fl_l mr_10">
                                <img src='http://localhost/weike/data/avatar/default/man_small.jpg' uid='1' class='pic_small'>                        </div>
<p class="shop_sign fl_l">
                            <a href="index.php?do=space&member_id=1" class="font14b block" target="_blank">admin</a>
                        </p>
</div>
                    <p>
                    	<!--卖家的认证信息-->
                                            </p>
<p  class="clearfix"><span class="fl_l">好评率：</span><span class="cc00 ml_10 pl_5 fl_l">94.95%</span>
<a href="javascript:void(0);" class="fl_r" onclick="add_follow('add_focus','1');"  id="add_follow_1">加关注</a></p>
</p>
<p><span>付款及时性<em class="cc00">0.0分</em></span><span class="stars a5 s0"><span class="star_selected"></span></span></p></span><p><span>合作愉快度<em class="cc00">0.0分</em></span><span class="stars a5 s0"><span class="star_selected"></span></span></p></span>        
            	</div>
<div class="shop_author_link clearfix">
<a href="index.php?do=space&member_id=1" target="_blank" class="fl_l">查看店铺空间</a>
<a href="javascript:void(0)" onclick="sendMessage(1,'admin')" class="fl_r">发送站内信</a>
</div>
</div>
</div>	
            <!--end 作者信息-->
<div class="">
</div>
<a class="button block mt_10" href="javascript:void(0)"  onclick="report('task','2','71','1','admin');" title="举报">
         	<span class="icon16 hand-1"></span>
举报         </a>
  <a class="button block" href="javascript:void(0);" onclick="favor('task_id','task','sreward','1','71','22222222','71')">
<span class="star-fav-empty  icon16"></span>
 0 次收藏</a>
<a class="button block" href="index.php?do=ajax&view=share&oid=1&title=22222222" id="share1" onclick="return false;"   onmouseover="share(this)" title="分享">
         	<span class="icon16 share"  id="test_aaa"></span>
分享 </a>

 
 </div>
  
  <!--end 布局 右-->
          <div class="clear"></div>
   
   </div>
   <!---->
   </section>
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
<form id="frm_reward" action="index.php?r=list/work_add" name="frm_reward" method="post" fwin="work_hand">
<input id="sbting" type="hidden" value="" name="sbting" fwin="work_hand">
<div class="rowElem clearfix">
<label class="fl_l t_r">添加附件： </label>
<div class="fl_l" style="width:350px">
<input id="file_ids" type="hidden" name="file_ids" fwin="work_hand">
<input type="file" name="file_upload" id="file_upload" />
<div id="upload-queue" class="uploadify-queue" fwin="work_hand"></div>
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
<button id="sbt_btn" class="button" onclick="subWork();" value="保存" type="button" fwin="work_hand">
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
clear:both;
overflow:hidden;
}
.uploadify-queue-item {
background-color: #FaFaFa;
padding: 0 25px 5px 5px;
border:1px solid #ddd;
white-space:nowrap;
float: left;
margin-right: 10px;
margin-bottom:5px;
}
.uploadify-error {
background-color: #FDE5DD !important;
}
.uploadify-queue-item .cancel a {
background: url('./uploadify-cancel.png') 0 0 no-repeat;
float: right;
height: 16px;
text-indent: -9999px;
width: 16px;
margin-top: 8px;
margin-right:-20px;
}
.uploadify-queue-item.completed {
background-color: #E5E5E5;
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
    $('#file_upload').uploadify({
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
           // if(img_id_upload.length>0)
           // alert('成功上传的文件有：'+encodeURIComponent(img_id_upload));
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
 
