<!--<?php print <<<EOT
-->
<div id="infobox">
<div style="height:40px;width:50%;padding:.3em 0 0 .5em" class="fl">
<style type="text/css">
.user-info{ position:absolute;line-height:160%; margin-left:-2.4em; margin-top:-2.5em; border:0}
.user-infoWrap{background:#FFF; border:1px solid #004C7D; border-top:1px #A6CBE7 solid; border-left:1px solid #A6CBE7; padding:.5em 1em; margin-left:20px;display:block;}
.user-info .co{position:absolute; width:10px;height:20px; margin-left:-1.8em; margin-top:.5em; background:url($imgpath/wind/user-info-co.png)}
</style>
<!--
EOT;
if($groupid=='guest'){print <<<EOT
-->
<div id="user_info">
	<div style="padding:0 0 0 .1em;margin-top:15px" class="fl">
		<form action="login.php" method="post" onsubmit="return ajax_login(this);">
			<div>
			<input class="gray input" onclick="this.value='';this.className='input black'" type="text" size="8" name="pwuser" value="�����û���" />
			<input class="input" type="password" size="8" name="pwpwd" style="margin-left:5px" onclick="this.value='';" />
<!--
EOT;
if($db_ifsafecv){print <<<EOT
-->
		<select name="question" onchange="showcustomquest(this.value)">
			<option value="0">�ް�ȫ����</option>
			<option value="1">�Ұְֵĳ�����</option>
			<option value="2">������ĳ�����</option>
			<option value="3">�ҵ�СѧУ��</option>
			<option value="4">�ҵ���ѧУ��</option>
			<option value="5">����ϲ�����˶�</option>
			<option value="6">����ϲ���ĸ���</option>
			<option value="7">����ϲ���ĵ�Ӱ</option>
			<option value="8">����ϲ������ɫ</option>
			<option value="9">�Զ�������</option>
		</select>
		<input id="customquest" style="display:none" type="text" name="customquest" class="input" size="8" />
		<input type="text" name="answer" class="input" size="8" />
<!--
EOT;
}list(,$logingd)=explode("\t",$db_gdcheck);
if($logingd){
print <<<EOT
-->
			<input class="gray input" type="text" maxLength="4" name="gdcode" size="4" value="��֤��" onclick="this.value='';this.className='input black'" />
			<img src="ck.php?" style="vertical-align: middle;cursor:pointer;" onclick="ck(this);" />
<!--
EOT;
}print <<<EOT
-->
			<input class="btn" type="submit" value="�� ¼" />
			<input type="hidden" name="jumpurl" value="$db_bfn" />
			<input type="hidden" name="step" value="2" />
			<input type="hidden" name="cktime" value="31536000" />
			</div>
		</form>
	</div>
</div>
<script language="JavaScript">
function ajax_login(obj){
	var data = 'action=login';
	var o = obj.elements;
	for(var i=0;i<o.length;i++){
		if(o[i].type!='button') data += '&'+o[i].name+'='+ajax.convert(o[i].value);
	}
	ajax.send('pw_ajax.php',data,function(){
		if(ajax.request.responseText.indexOf('<split />') != -1){
			var str = ajax.request.responseText.split('<split />');
			getObj('user_info').innerHTML = str[0];
			getObj('h_guide').innerHTML = str[1];
		} else{
			ajax.guide();
		}
	});
	return false;
}
function showcustomquest(qid){
	getObj("customquest").style.display = qid==9 ? '' : 'none';
}
</script>
<!--
EOT;
}else{print <<<EOT
-->
	<img onmouseover="mt=setTimeout('mouseover_open(\'showface\',\'sf\',\'4\');',700);" onmouseout="clearTimeout(mt);" src="$faceurl" style="cursor:pointer;padding:2px;border:#ccc 1px solid;width:40px;height:40px;background:#fff" class="fl"/>
	<div style="padding:0 0 0 1em;margin-top:5px" class="fl">
		<span id="sf"></span>
		<span class="user-info" id="showface" style="display:none">
		<span class="user-infoWrap"><span class="co"></span>
		<a href="personal.php" class="s5">�ҵ�����</a>��<a href="personal.php?action=post" class="s5">�ҵĻظ�</a><br />
		<a href="profile.php?action=modify#face">����ͷ��</a><br />
		$db_rvrcname: <span class="s2 f9">$userrvrc $db_rvrcunit</span><br />
		$db_moneyname: <span class="s3 f9">$winddb[money] $db_moneyunit</span><br />
		$db_creditname: <span class="s3 f9">$winddb[credit] $db_creditunit</span><br />
		<span class="gray f9">����¼: {$lastlodate}<br />
		��¼IP: $onlineip<br />
		</span>
		</span></span>
		�ȼ���<span class="s3">$level</span> | ���ӣ�$winddb[postnum]
<!--
EOT;
if($winddb['newrp']){print <<<EOT
$pw_ajax=1;
print <<<EOT
-->
	| <a id="newrp" onclick="sendmsg('pw_ajax.php','action=newrp',this.id)" style="cursor:pointer;" class="s3">�����������˻ظ�</a>
<!--
EOT;
}print <<<EOT
-->
		<div style="padding-top:.5em">
<!--
EOT;
if($gp_allowhonor){
if($winddb[honor]){print <<<EOT
-->
		����ǩ����{$winddb[honor]} <a href="profile.php?action=modify#honor" class="gray">����</a>
<!--
EOT;
}elseif($gp_allowhonor){print <<<EOT
-->
		����ǩ��������û�����ø���ǩ����<a href="profile.php?action=modify#honor"><span class="gray">����ȥ����</span></a>
<!--
EOT;
}}print <<<EOT
-->
		</div>
	</div>
<!--
EOT;
}print <<<EOT
-->
</div>
<div style="width:45%;padding:5px;margin-top:5px;" class="fr tar">
<!--
EOT;
if($db_todaypost==1){print <<<EOT
-->
		����:$tposts | ����:$yposts |
<!--
EOT;
}print <<<EOT
-->
		�����:$hposts | <a href="job.php?action=sign">����Ѷ�</a> | <a href="search.php?digest=1" target="_blank">������</a> | <a href="search.php?sch_time=all&orderway=lastpost&asc=desc&newatc=1" target="_blank">��������</a> <a href="rss.php" target="_blank" title="RSS���ı�������������"><img align="absmiddle" src="$imgpath/$stylepath/rss.png" /></a>
		<div style="padding-top:.5em">
		����:$topics | ����:$article | ��Ա:$totalmember | ��ӭ�»�Ա <a href="profile.php?action=show&username=$rawnewuser" target="_blank">$newmember</a>
		</div>
</div>
		<div class="c"></div>
<!--
EOT;
if($notice_A){
$db_ntnum<1 && $db_ntnum = 3;
$nt = '';
foreach($notice_A as $key=>$value){
if($value[subject]){
$value[startdate] = get_date($value[startdate],'y-m-d');
!$value[url] && $value[url] = "notice.php?fid=$value[fid]#$value[aid]";
$nt .= ($nt ? ',' : '')."'<a href=\"$value[url]\">$value[subject]</a> <span class=\"f9 gray\">$value[startdate]</span>'";
}}print <<<EOT
-->
<div onmouseover="clearTimeout(ntt);ntf=1;" onmouseout="if(ntf)ntt=setTimeout('nthidden();',1500);"><div id="notice" class="fl"></div></div>
<script language="javascript">
var nt = [$nt];
var nti = ntt = ntw = ntf = 0;
var ntv = [0,3,8,20,35,62,100];
var ntnum = parseInt('$db_ntnum');
function ntplay(){
	var j = nti+ntnum>nt.length ? nt.length : nti+ntnum;var s = '';
	for(var p=nti;p<j;p++) s += nt[p];
	getObj('notice').innerHTML = s;
	if(ntnum < nt.length){
		ntshow();
	}
}
function ntshow(){
	getObj('notice').style.filter = 'alpha(opacity='+ntv[ntw]+')';
	getObj('notice').style.opacity = ntv[ntw]/100;
	ntw++;if(ntw<7) setTimeout("ntshow();",80); else if(!ntf) ntt = setTimeout("nthidden();",4000);
}
function nthidden(){
	ntw--;ntf=0;
	getObj('notice').style.filter = 'alpha(opacity='+ntv[ntw]+')';
	getObj('notice').style.opacity = ntv[ntw]/100;
	if(ntw>0) setTimeout("nthidden();",80); else{nti+=ntnum;if(nti>=nt.length)nti=0;ntplay();}
}
ntplay();
</script>

<div id="notice"><a>���û����̳����</a></div>

</div>

<div class="t" style="margin-top:7px;"><table width="100%" cellspacing="0" cellpadding="0">

	<tr class="tr3">

	<td class="f_one black y-style" width="25%">$value[code]</td>

	</tr>

	<td class="f_one" width="25%"><br /></td>

	</tr>

</table></div>

<div style="margin-top:7px;"></div>

<!--ads end-->

<div class="t t4">
<table cellspacing="0" cellpadding="0" width="100%" style="border-collapse: collapse; table-layout:fixed">
	<tr><th class="h" colspan="$cate[across]"><a style="float:right" href="#" onclick="return IndexDeploy('$cate[fid]',0)"><img id="img_$cate[fid]" src="$imgpath/$stylepath/index/cate_$cate[deploy_img].gif" /></a>

	<span class="fr" style="margin-right:20px">���������$cate[admin]</span>

	&raquo; <h2><a href="index.php?cateid=$cate[fid]" class="cfont">$cate[name]</a></h2></th>
	</tr>
	<tr></tr>
	<tr class="tr2"><td colspan="$cate[across]" style="padding:0;border-bottom:0;font:0/0 Arial"></td></tr>
	<tbody id="cate_$cate[fid]" style="$cate[tbody_style]">

	<tr class="tr1 tr">

		<td class="td1" style="padding:0"><div class="t3" style="margin:0px">
			<table cellspacing="0" cellpadding="0" width="100%" border="0">
			<tr><td colspan="3" height="20" style="padding-left:12px"><h2><a href="thread.php?fid=$forums[fid]" class="fnamecolor"><b>$forums[name]</b></a></h2></td></tr>
			<tr valign="middle" height="15">
				<td class="tinytxt f10" style="padding-left:12px">topic :<span class="s3"> $forums[topics]</span></td>
				<td class="tinytxt f10">post :<span class="s3"> $forums[article]</span></td>

				<td class="tinytxt f10">today :<span class="s3"> $forums[tpost]</span></td>

			</tr>
			<tr><td colspan="3" style="padding:2px 0 2px 12px; ">����:

				<select name="admin" onchange="Ajump(this.options[this.selectedIndex].value)">
					<option value=""> �����б�</option>
					$forums[admin]
				</select>

				$forums[admin]

				</td></tr>
			</table></div></td>

	</tr>
	<tr class="tr1">

		<td class="f_one td1"><br /></td>

	</tr>

	</tbody>
</table></div>

<div class="t"><table cellspacing="0" cellpadding="0" width="100%">
	<tr><th class="h" colspan="6"><a style="float:right" href="#" onclick="return IndexDeploy('$cate[fid]',0)"><img id="img_$cate[fid]" src="$imgpath/$stylepath/index/cate_$cate[deploy_img].gif" /></a>

		<span class="fr a2 fn" style="margin-right:20px">���������$cate[admin]</span>

		&raquo; <h2><a href="$db_bfn?cateid=$cate[fid]" class="cfont">$cate[name]</a></h2> </th>
	</tr>	
	<tr></tr>
	<tr class="tr2">
	<td width="*" colspan="2" class="tac">��̳</td>
	<td style="width:6%" class="tal y-style">����</td>
	<td style="width:6%" class="tal y-style">����</td>
	<td style="width:20%" class="tal y-style">��󷢱�</td>
	<td style="width:12%" class="y-style">����</td>
	</tr>
	<tbody id="cate_$cate[fid]" style="$cate[tbody_style]">

	<tr class="tr3 f_one" onMouseOver="this.className='tr3 f_two'" onMouseOut="this.className='tr3 f_one'">
		<td class="icon tac" width="4%"><a href="thread.php?fid=$forums[fid]" target="_blank"><img src="$imgpath/$stylepath/$forums[pic].gif" /></a></td>
		<th><a href="thread.php?fid=$forums[fid]" target="_blank">$forums[llogo]</a><h2><a href="thread.php?fid=$forums[fid]">$forums[name]</a></h2>

		<span class="s3 f12">($forums[tpost])</span>

		<br /><span class="smalltxt gray">$forums[descrip]</span>

		<div>�Ӱ棺<span>{$showsub[$forums[fid]]}</span></div>

		</th>
		<td class="tal y-style"><span class="f10">$forums[topics]</span><br /></td>
		<td class="tal y-style"><span class="f10">$forums[article]</span><br /></td>
		<th>

		<a href="$forums[ft]" class="a2">$forums[t]</a><br />
		<span class="f12">$forums[au]</span> <span class="f9 gray">[ $forums[newtitle] ]</span>

		��֤��̳

		&nbsp;</th>
		<td class="y-style" style="word-break: keep-all;word-wrap:no-wrap">

		<select name="admin" onchange="Ajump(this.options[this.selectedIndex].value)">
			<option value=""> �����б�</option>		
			$forums[admin]
		</select>

$forums[admin]

		&nbsp;</td>
	</tr>

	<tr><td style="height:8px"></td></tr>
	</tbody>
</table></div>

<div style="margin-bottom:5px;" class="tac">{$ads}</div>

<script language="JavaScript" src="js/Deploy.js"></script>
<div class="t">
<table cellspacing="0" cellpadding="0" width="100%">
<tr>
	<th colspan="2" class="h"><a style="float:right" href="#" onclick="return IndexDeploy('info',0)"><img id="img_info" src="$imgpath/$stylepath/index/cate_$cate_img.gif" /></a>��̳���</th>
</tr><tr></tr>
<tbody id="cate_info" style="$cate_info">

	<tr class="tr2"><td colspan="2">

	<a id="selfshare" style="cursor:pointer;float:right" onclick="sendmsg('pw_ajax.php','action=sharelink',this.id)">������������</a>

	 &raquo; ��������</td></tr>

	<tr class="tr3"><td class="f_two tac" width="4%"><img src="$imgpath/$stylepath/index/share.gif" /></td><th class="f_one" width="96%" style="word-break: keep-all">$share</th>
	</tr>

	<tr class="tr3"><td class="f_two tac" width="4%"><img src="$imgpath/$stylepath/index/share.gif" /></td><th class="f_one" width="96%" style="word-break: keep-all">$sharelink[1]</th>
	</tr>

</tbody>
<tr class="tr4">
	<td colspan="2">&raquo; 
	<!----------------��ʼ------------------->
<!--
EOT;
$fp=opendir(R_P."data/style/");
while ($file=readdir($fp)){
if (eregi("\.php$",$file)) {
$file=str_replace(".php","",$file);
$choseskin.="<option value=$file $selected[$file]>$file</option>";
}
}closedir($fp);
print <<<EOT
-->
<select name=tpskin onchange="Sjump(this.options[this.selectedIndex].value)">
<option value=''>����б�</option>
$choseskin</select>
<script language="JavaScript">
function Sjump(value){
if(value!=''){
window.location=('index.php?skinco='+value);
}
}
</script>
<!-----------------����------------------->�����û�<a name="online"></a> -  �� $usertotal ������,$userinbbs λ��Ա,$guestinbbs λ�ÿ�,��� $higholnum �˷����� $mostinbbstime </td>
</tr>
<tr class="tr3">
	<td class="f_two tac" style="padding:0" width="4%"><img src="$imgpath/$stylepath/index/online.gif" /></td>
	<td class="f_one tal" style="padding:15px 20px"><div>
<!--
EOT;
foreach($showgroup as $key=>$value){
if($value && (file_exists("$imgdir/$stylepath/group/$value.gif") || $db_http!='N')){print <<<EOT
-->
		<img src="$imgpath/$stylepath/group/$value.gif" align="absmiddle" /> $ltitle[$value]&nbsp; &nbsp; 	

		<img src="$imgpath/$stylepath/group/6.gif" align="absmiddle" /> ��ͨ��Ա

		<a name="online"></a> [<a href="index.php?online=no#online">�ر������б�</a>] </div>
	<div style="padding:5px 0"><hr class="hr" color="#D3EAF0" size="1"></div>
	$index_whosonline

	<a name="online"></a> [<a href="index.php?online=yes#online">�������б�</a>]
</div>

</td></tr></table></div>

<script language="JavaScript" src="js/pw_ajax.js"></script>

