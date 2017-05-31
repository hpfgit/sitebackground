<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>thinkphp</title>
    <link rel="stylesheet" href="/Kindeditor/themes/default/default.css" />
    <link rel="stylesheet" href="/Kindeditor/plugins/code/prettify.css" />
    <script charset="utf-8" src="/Kindeditor/kindeditor-all-min.js"></script>
    <script charset="utf-8" src="/Kindeditor/lang/zh-CN.js"></script>
    <script charset="utf-8" src="/Kindeditor/plugins/code/prettify.js"></script>
    <script>
        KindEditor.ready(function(K) {
            var editor1 = K.create('textarea[name="content1"]', {
                cssPath : '../plugins/code/prettify.css',
                uploadJson : '../php/upload_json.php',
                fileManagerJson : '../php/file_manager_json.php',
                allowFileManager : true,
                afterCreate : function() {
                    var self = this;
                    K.ctrl(document, 13, function() {
                        self.sync();
                        K('form[name=example]')[0].submit();
                    });
                    K.ctrl(self.edit.doc, 13, function() {
                        self.sync();
                        K('form[name=example]')[0].submit();
                    });
                }
            });
            prettyPrint();
        });
    </script>
</head>
<body>
<?php echo ($htmlData); ?>
<form name="example" method="post" action="/Sitebackground/index.php/Home/Index/Kindeditor">
    <textarea name="content1" style="width:700px;height:200px;visibility:hidden;"><?php echo htmlspecialchars($htmlData); ?></textarea>
    <br />
    <input type="submit" name="button" value="提交内容" /> (提交快捷键: Ctrl + Enter)
</form>
</body>
</html>