<?php if(!defined('__TYPECHO_ADMIN__')) exit;

// 获取系统参数
$options = Helper::options();
$pluginUrl = Typecho_COMMON::url('CKEditor', $options->pluginUrl);
?>
<script src="<?php echo $pluginUrl . '/ckeditor/ckeditor.js'; ?>"></script>
<script src="<?php echo $pluginUrl . '/templates/ckeditor_custom.js'; ?>"></script>
