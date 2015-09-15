<?php
class SystemAdminModel {
	//查找用户
	public function SelectUser($option,$key,$string){
		$r1=$db->query("SELECT a.u_name,a.u_loginname,b.ud_name,b.createdate FROM Sys_User AS a JOIN Sys_userdegree AS b ON a.ud_no=b.ud_no WHERE (a.u_name LIKE '%'$key'%' OR a.u_loginname LIKE '%'$key'%') AND b.ud_name LIKE '%'$option'%'");
		$res1=$r1->fetchAll(PDO::FETCH_ASSOC);
		return $res1; //返回二维数组
	}
	//创建用户

	//科级/处级部门管理


}
?>