tinymce.init({
    language : 'ru',
    selector: ".moxiecut",
    theme: "modern",
    plugins: [
         
      "advlist autolink lists link image charmap print preview anchor",
      "searchreplace visualblocks code fullscreen textcolor",
      "insertdatetime colorpicker emoticons colorpicker media table contextmenu responsivefilemanager"
   ],
    relative_urls: false,
    browser_spellcheck : true ,
    filemanager_title:"Responsive Filemanager",
    external_filemanager_path:"/filemanager/",
    external_plugins: { "filemanager" : "/filemanager/plugin.min.js"},

  
   image_advtab: true,
   toolbar: "code emoticons | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | forecolor backcolor | link responsivefilemanager",
   style_formats: [
    {title: 'Headers', items: [
        {title: 'Header H1', block: 'h1'},
        {title: 'Header H2', block: 'h2'},
        {title: 'Header H3', block: 'h3'},
        {title: 'Header H4', block: 'h4'},
        {title: 'Header H5', block: 'h5'},
        {title: 'Header H6', block: 'h6'}
    ]},

    {title: 'Blocks', items: [
        {title: 'p', block: 'p'},
        {title: 'div', block: 'div'},
        {title: 'span', block: 'span'},
        {title: 'pre', block: 'pre'}
    ]},

    {title: 'Containers', items: [
        {title: 'section', block: 'section', wrapper: true, merge_siblings: false},
        {title: 'article', block: 'article', wrapper: true, merge_siblings: false},
        {title: 'blockquote', block: 'blockquote', wrapper: true},
        {title: 'code', block: 'code', wrapper: true},
        {title: 'hgroup', block: 'hgroup', wrapper: true},
        {title: 'aside', block: 'aside', wrapper: true},
        {title: 'figure', block: 'figure', wrapper: true}
    ]}
    ],

    autosave_ask_before_unload: false,
    height: 300,
    statusbar: false,
    relative_urls: false,
    forced_root_block : false,
    force_br_newlines : true,
    force_p_newlines : false,
    visualblocks_default_state: false,
    verify_html : false,
    entity_encoding: 'raw'

 });