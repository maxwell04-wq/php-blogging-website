@include('post.layout')
@include('post.header')
@include('post.components.sidebar')

<script src="https://cdn.ckeditor.com/4.19.1/full/ckeditor.js"></script>

<body>
    @include('post.components.ckeditorForm')
</body>

<script>
    CKEDITOR.replace('editor', {
        height: 400,
        baseFloatZIndex: 10005,
        removeButtons: 'PasteFromWord,Subscript,Superscript,Save,Replace,Print,Templates,Find,Maximize,ShowBlocks,HiddenField,ImageButton,Button,Textarea,TextField,Form,RemoveFormat,CopyFormatting,DecreaseIndent,IncreaseIndent,Smiley,Table,Anchor,SelectionField,CreateDiv,About,Language,Indent,Outdent,BidiLtr,BidiRtl,PageBreak,SpecialChar,HorizontalRule,Scayt,Select,PasteText,Paste,Cut,Copy,Blockquote,Preview,NewPage,Radio,Checkbox,ExportPdf,Strike'
    }),
    
    $("form").submit( function(e) {
        var messageLength = CKEDITOR.instances['editor'].getData().replace(/<[^>]*>/gi, '').length;
        if( !messageLength ) {
            alert( 'Please write your content' );
            e.preventDefault();
        }
    });
</script>

</html>
