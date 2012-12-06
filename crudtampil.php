<html>
<?php
	define('INCLUDE_CHECK',1);
	require "functions.php";
?>

<head>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Profil</title>

<link rel="stylesheet" type="text/css" href="demo.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>
<body>
<div class="style3">
	  <div align="center" class="style2">
		<pre class="style3 style1 style1">
		SELAMAT DATANG
		-- Komunitas Pemancingan --</pre>
			  <BR><BR>
	  </div>
	</div>
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span2">
    <p><img src="logo.png" width="250" height="150"
		  <BR>
		  <address>
		    <strong>Komunitas Pemancingan</strong><br>
					  Sukolilo <br>
					  Surabaya, 60111<br>
					  <abbr title="Phone">P:</abbr> (031) 5994251
		  </address>
					 
					<address>
					<strong>apa</strong><br>
					  <a href="mailto:#">apaaja@gmail.com</a>
					</address>

			<div>
					
		<form method="post" action="logout.php"><legend>LOG OUT</legend>

			<button class="btn btn-danger" type="submit">Log Out</button>
		</form>
			</div>
    </div>
<!--

span2

-->
  <div class="span10">
 <div>
    <ul class="nav nav-pills">
    <li><a href="index.php">Home</a></li>
    <li class="active"><a href="profil.php">Profile</a></li>
    <li><a href="#">Event</a></li>
	<li class="dropdown">
                <a class="dropdown-toggle" 
				data-toggle="dropdown" 
				href="event.php">Event <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="profil.php">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
    </li>
	
	<ul class="nav nav-pills">
  <li class="dropdown">
    <a class="dropdown-toggle"
       data-toggle="dropdown"
       href="#">
        Dropdown
        <b class="caret"></b>
      </a>
    <ul class="dropdown-menu">
      <!-- links -->
    </ul>
  </li>
</ul>
	
	<li><a href="#">Wisata Pancing</a></li>
    </ul>
</div>
</head>
<body>
<legend><strong>CRUD PROFIL</strong></legend>
<body>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="jquery,ui,easy,easyui,web">
	<meta name="description" content="easyui help you build your web page easily!">
	<title>Tampil </title>
	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/icon.css">
	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/demo/demo.css">
	<style type="text/css">
		#fm{
			margin:0;
			padding:10px 30px;
		}
		.ftitle{
			font-size:14px;
			font-weight:bold;
			color:#666;
			padding:5px 0;
			margin-bottom:10px;
			border-bottom:1px solid #ccc;
		}
		.fitem{
			margin-bottom:5px;
		}
		.fitem label{
			display:inline-block;
			width:80px;
		}
	</style>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
	<script type="text/javascript" src="http://www.jeasyui.com/easyui/jquery.easyui.min.js"></script>
	<script type="text/javascript">
		var url;
		function newUser(){
			$('#dlg').dialog('open').dialog('setTitle','New User');
			$('#fm').form('clear');
			url = 'save_user.php';
		}
		function editUser(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
				$('#dlg').dialog('open').dialog('setTitle','Edit User');
				$('#fm').form('load',row);
				url = 'update_user.php?id='+row.id;
			}
		}
		function saveUser(){
			$('#fm').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.success){
						$('#dlg').dialog('close');		// close the dialog
						$('#dg').datagrid('reload');	// reload the user data
					} else {
						$.messager.show({
							title: 'Error',
							msg: result.msg
						});
					}
				}
			});
		}
		function removeUser(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
				$.messager.confirm('Confirm','Are you sure you want to remove this user?',function(r){
					if (r){
						$.post('remove_user.php',{id:row.id},function(result){
							if (result.success){
								$('#dg').datagrid('reload');	// reload the user data
							} else {
								$.messager.show({	// show error message
									title: 'Error',
									msg: result.msg
								});
							}
						},'json');
					}
				});
			}
		}
	</script>
</head>
<body>
	<div class="demo-info" style="margin-bottom:10px">
		<div class="demo-tip icon-tip">&nbsp;</div>
	</div>
	
	<table id="dg" title="My Users" class="easyui-datagrid" style="width:700px;height:250px"
			url="get_users.php"
			toolbar="#toolbar" pagination="true"
			rownumbers="true" fitColumns="true" singleSelect="true">
		<thead>
			<tr>
				<th field="idmember" width="50">ID Member</th>
				<th field="namadepan" width="60">Nama Depan</th>
				<th field="namabelakang" width="60">Nama Belakang</th>
				<th field="jeniskelamin" width="50">Jenis Kelamin</th>
				<th field="tanggallahir" width="50">Tanggal Lahir</th>
				<th field="email" width="50">Email</th>
				<th field="password" width="50">Password</th>
				<th field="foto" width="50">Foto</th>
				<th field="pertanyaan_1" width="50">Pertanyaan_1</th>
				<th field="jawaban_1" width="50">Jawaban_1</th>
				<th field="pertanyaan_1" width="50">Pertanyaan_2</th>
				<th field="jawaban_1" width="50">Jawaban_2</th>
			</tr>
		</thead>
	</table>
	<div id="toolbar">
		<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">New User</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">Edit User</a>
		<a href="fungsi.php" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="removeUser()">Remove User</a>
	</div>
	
	<div id="dlg" class="easyui-dialog" style="width:400px;height:280px;padding:10px 20px"
			closed="true" buttons="#dlg-buttons">
		<div class="ftitle">User Information</div>
		<form id="fm" method="post" novalidate>
			<div class="fitem">
				<label>Nama Depan:</label>
				<input name="namadepan" class="easyui-validatebox" required="true">
			</div>
			<div class="fitem">
				<label>Nama Belakang:</label>
				<input name="namabelakang" class="easyui-validatebox" required="true">
			</div>
			<div class="fitem">
				<label>Jenis Kelamin:</label>
				<input name="Jeniskelamin">
			</div>
			<div class="fitem">
				<label>Tanggal Lahir:</label>
				<input name="email" class="easyui-validatebox" validType="email">
			</div>
			
					<div class="control-group">
			<label class="control-label" for="inputNamaDepan">Nama Depan</label>
			<div class="controls">
			<input name="inputNamaDepan" class="span4" type="text" id="inputNamaDepan">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inpuNamaBelakang">Nama Belakang</label>
			<div class="controls">
			<input name="inputNamaBelakang" class="span4" type="text" id="inputNamaBelakang">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputEmotion">Jenis Kelamin</label>
			<div class="controls">
			<select name="inputJenisKelamin" class="span4" type="text" id="inputJenisKelamin">
				<option>Laki-laki</option>
				<option>Perempuan</option>
			</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputDate">Tanggal Lahir</label>
			<div class="controls">
			<input name="inputTanggalLahir" class="span4" type="date" id="inputTanggalLahir">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputDate">Email</label>
			<div class="controls">
			<input name="inputEmail" class="span4" type="text" id="inputEmail">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputDate">Password</label>
			<div class="controls">
			<input name="inputPassword" class="span3" type="text" id="inputPassword">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputDate">Foto</label>
			<div class="controls">
			<input name="inputGambar" class="span4" type="file" id="inputGambar">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputDate">Pertanyaan 1</label>
			<div class="controls">
			<input name="inputPertanyaan1" class="span4" type="text" id="inputPertanyaan1">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputDate">Jawaban 1</label>
			<div class="controls">
			<input name="inputJawaban1" class="span4" type="text" id="inputJawaban1">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputDate">Pertanyaan 2</label>
			<div class="controls">
			<input name="inputPertanyaan2" class="span4" type="text" id="inputPertanyaan2">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputDate">Jawaban 2</label>
			<div class="controls">
			<input name="inputJawaban2" class="span4" type="text" id="inputJawaban2">
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
			<button type="submit" class="btn btn-primary"></i>Save</button>
			<button type="button" class="btn"><a href="profil.php">Back</a></button>
			</div>
		</form>
	</div>
	<div id="dlg-buttons">
		<button type="submit" class="btn btn-primary"></i>Save</button>
		<button type="button" class="btn"><a href="profil.php">Back</a></button>
	</div>
</body>
</html>