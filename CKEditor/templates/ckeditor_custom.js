$(document).ready(function(){
    // 启动编辑器
    CKEDITOR.replace('text', {
        language: 'zh-cn',
        on: {
            instanceReady: function(evt) {
                var editor = evt.editor;

                // 重写附件插入功能
                Typecho.insertFileToEditor = function(file, url, isImage) {
                    var html = isImage ? "<img src=" + url + "  alt=" + file + "/>": "<a href=" + url + ">" + file + "</a>",
                        newElement = CKEDITOR.dom.element.createFromHtml(html, editor.document);

                    editor.insertElement(newElement);
                }
            }
        }
    });

    // 隐藏自带不需要的元素
    $('.resize').hide();
});
