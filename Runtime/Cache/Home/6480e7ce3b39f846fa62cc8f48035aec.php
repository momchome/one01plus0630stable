<?php if (!defined('THINK_PATH')) exit();?><FORM method="post" action="/index.php?s=/home/form/update">
技工、管理公司接单界面：<br />
标题：<INPUT type="text" name="title" value="<?php echo ($vo["title"]); ?>"><br/>
内容：<TEXTAREA name="content" rows="5" cols="45"><?php echo ($vo["content"]); ?></TEXTAREA><br/>
<INPUT type="hidden" name="id" value="<?php echo ($vo["id"]); ?>">
<INPUT type="submit" value="提交">
</FORM>