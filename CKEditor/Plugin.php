<?php
/**
 * 用 CKEditor 增强你的 Typecho 编辑器
 *
 * @package CKEditor
 * @author Li Zhineng
 * @version 1.0.0
 * @link http://zhineng.li
 */

/**
 * 特别鸣谢 CKEditor 开发团队提供如此优秀的编辑器
 * 插件基于 Typecho 1.0 (14.10.10) 及 CKEditor 4.5.3 开发
 *
 * 更新日志
 * ========================================
 * 1.0.0 (15.08.19)
 *   - 初次发布
 * ----------------------------------------
 */
class CKEditor_Plugin implements Typecho_Plugin_Interface
{
    // 获取系统分隔符
    const DS = DIRECTORY_SEPARATOR;

    // 当前文件夹路径
    const CURRENT_PATH = __DIR__;

    // 存放渲染模板的路径
    const TEMPLATES_PATH = self::CURRENT_PATH . self::DS . 'templates';

    /* 激活插件方法 */
    public static function activate() {
        Typecho_Plugin::factory('admin/write-post.php')->richEditor = array('CKEditor_Plugin', 'render');
        Typecho_Plugin::factory('admin/write-page.php')->richEditor = array('CKEditor_Plugin', 'render');
    }
     
    /* 禁用插件方法 */
    public static function deactivate(){}
     
    /* 插件配置方法 */
    public static function config(Typecho_Widget_Helper_Form $form){}
     
    /* 个人用户的配置方法 */
    public static function personalConfig(Typecho_Widget_Helper_Form $form){}
     
    /* 插件实现方法 */
    public static function render() {
        include_once self::TEMPLATES_PATH . self::DS . 'main.php';
    }
}
