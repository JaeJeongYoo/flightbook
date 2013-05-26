<script language="javascript">
<!--
	function login(){
		form=document.loginForm;
		if(form.userId.value==""){
			alert("아이디를 입력해주세요.");
			form.userId.focus();
			return false;
		}else if(form.userPassword.value==""){
			alert("비밀번호를 입력해주세요.");
			form.userPassword.focus();
			return false;
		}else{
			return true;
		}
	}
//-->
</script>