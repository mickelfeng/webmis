<!-- JS -->
<?php foreach($js as $val){ ?>
<script language="javascript" src="<?php echo base_url($val); ?>"></script>
<?php }?>
<!-- Action -->
<div class="right_top">
	<span class="right_action">
		<div class="right_title"><?php echo $title; ?></div>
		<?php echo $actionHtml; ?>
	</span>
</div>
<div class="right_line">&nbsp;</div>
<!-- Action End -->
<!-- Content -->
<table class="table_list">
	<tr class="title" id="admin_table">
		<td width="20"><a href="#" onclick="All()">Y</a>/<a href="#" onclick="delAll()">N</a></td>
		<td width="60">ID</td>
		<td width="120">用户名</td>
		<td>Email</td>
		<td width="80">姓名</td>
		<td width="80">部门</td>
		<td width="120">职务</td>
		<td width="120">注册时间</td>
		<td width="40">状态</td>
		<td width="40">权限</td>
	</tr>
	<tbody id="listBG">
	<?php foreach($list as $val){?>
	<tr>
		<td><input type="checkbox" value="<?php echo $val->id;?>" /></td>
		<td><?php echo $val->id;?></td>
		<td><?php echo keyHH($val->uname, @$key['uname']);?></td>
		<td><?php echo keyHH($val->email, @$key['email']);?></td>
		<td><?php echo keyHH($val->name, @$key['name']);?></td>
		<td><?php echo keyHH($val->department, @$key['department']);?></td>
		<td><?php echo keyHH($val->position, @$key['position']);?></td>
		<td><?php echo keyHH($val->rtime, @$key['rtime']);?></td>
		<td><?php echo $val->state==1?'<span class="green">启用</span>':'<span class="red">禁用</span>';?></td>
		<td><a href="#" id="editPerm<?php echo $val->id;?>" title="<?php echo $val->perm;?>" onclick="editPerm(<?php echo $val->id;?>)">编辑</a></td>
	</tr>
	<?php } ?>
	</tbody>
</table>
<div class="page"><div class="pagelist"><?php echo $page.'<span>'.$total.'</span>'; ?></div></div>
<!-- Content End -->