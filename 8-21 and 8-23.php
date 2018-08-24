在视图中:
	0 => '待审核'
	1 => '审核中'
	2 => '已拒绝'
	3 => '已通过'

在operate_log数据库中:
	提交申请
	审核通过
	拒绝通过

/************************/

//删除与远程库origin的连接
git remote rm origin 

//使用Auth::attempt验证用户信息
/**
 * 1). 将传参的 password 值进行哈希加密，然后与数据库中 password 字段中已加密的密码进行匹配；
   2). 如果匹配后两个值完全一致，会创建一个『会话』给通过认证的用户。会话在创建的同时，(我在github上修改了.....)
 * 也会种下一个名为 laravel_session 的 HTTP Cookie，以此 Cookie 来记录用户登录状态，最终返回 true
 */
