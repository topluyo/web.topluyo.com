<head>
  <script src="//hasandelibas.github.io/documenter/documenter.js?disable-html=true"></script>
  <meta charset="utf8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="disable-errors theme-dark">
  <header body-class="show-menu theme-dark">

    <img alt="kodluyo.com logo" src="https://kodluyo.com/app/source/images/kodluyo.com.svg" style="height: 80%; padding-left: 6px; --natural-width: 128; --natural-height: 128; --natural-ratio: 1;">

    <div icon-button href="https://kodluyo.com/app/">
      <svg style="width:24px;height:24px" viewBox="0 0 24 24">
        <path fill="currentColor" d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z"></path>
      </svg>
    </div>

    <a icon-button href="https://kodluyo.com/">
      <svg style="width:24px;height:24px" viewBox="0 0 24 24">
          <path fill="currentColor" d="M13,20H11V8L5.5,13.5L4.08,12.08L12,4.16L19.92,12.08L18.5,13.5L13,8V20Z"></path>
      </svg>
    </a>

    <a button style="font-size:.8em;" href="/editor/markdown.html">Markdown Editor</a>
    <a button style="font-size:.8em;" href="/editor/html.html">HTML Editor</a>

    <div space flex-cx>
      &lt;html/&gt;
    </div>

    <div onclick="window.location.reload();" icon-button href="https://kodluyo.com/app/">
      <svg style="width:24px;height:24px" viewBox="0 0 24 24">
        <path fill="currentColor" d="M2 12C2 16.97 6.03 21 11 21C13.39 21 15.68 20.06 17.4 18.4L15.9 16.9C14.63 18.25 12.86 19 11 19C4.76 19 1.64 11.46 6.05 7.05C10.46 2.64 18 5.77 18 12H15L19 16H19.1L23 12H20C20 7.03 15.97 3 11 3C6.03 3 2 7.03 2 12Z"></path>
      </svg>
    </div>
    
    <div icon-button="" onclick="document.body.classList.toggle('theme-dark');document.body.classList.toggle('theme-light');localStorage._theme=document.body.classList.contains('theme-dark')?'theme-dark':'theme-light';;editor._themeService.setTheme(document.body.classList.contains('theme-dark')?'vs-dark':'vs-light');">
      <script>
        document.body.classList.remove("theme-dark");
        document.body.classList.remove("theme-light");
        document.body.classList.add(localStorage._theme=="theme-light"?"theme-light":"theme-dark");
      </script>
      <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="currentColor"><path d="M480-360q50 0 85-35t35-85q0-50-35-85t-85-35q-50 0-85 35t-35 85q0 50 35 85t85 35Zm0 80q-83 0-141.5-58.5T280-480q0-83 58.5-141.5T480-680q83 0 141.5 58.5T680-480q0 83-58.5 141.5T480-280ZM200-440H40v-80h160v80Zm720 0H760v-80h160v80ZM440-760v-160h80v160h-80Zm0 720v-160h80v160h-80ZM256-650l-101-97 57-59 96 100-52 56Zm492 496-97-101 53-55 101 97-57 59Zm-98-550 97-101 59 57-100 96-56-52ZM154-212l101-97 55 53-97 101-59-57Zm326-268Z"></path></svg>
    </div>


    <div icon-button style="min-width: 32px;min-height: 32px;width: 32px;height: 32px;background:#FF9800;color:#FFFD;" onclick="document.body.prevPage();">
      <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="currentColor"><path d="m313-440 224 224-57 56-320-320 320-320 57 56-224 224h487v80H313Z"/></svg>
    </div>


    <div icon-button style="min-width: 32px;min-height: 32px;width: 32px;height: 32px;background:#2196F3;color:#FFFD;" onclick="toggleFullscreen()">
      <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="currentColor"><path d="M120-120v-200h80v120h120v80H120Zm520 0v-80h120v-120h80v200H640ZM120-640v-200h200v80H200v120h-80Zm640 0v-120H640v-80h200v200h-80Z"/></svg>
    </div>
    <script>
      function toggleFullscreen(elem = document.documentElement) {
        if (!document.fullscreenElement && !document.webkitFullscreenElement && !document.mozFullScreenElement && !document.msFullscreenElement) {
          if (elem.requestFullscreen) {
            elem.requestFullscreen();
          } else if (elem.webkitRequestFullscreen) {
            elem.webkitRequestFullscreen();
          } else if (elem.mozRequestFullScreen) {
            elem.mozRequestFullScreen();
          } else if (elem.msRequestFullscreen) {
            elem.msRequestFullscreen();
          }
        } else {
          if (document.exitFullscreen) {
            document.exitFullscreen();
          } else if (document.webkitExitFullscreen) {
            document.webkitExitFullscreen();
          } else if (document.mozCancelFullScreen) {
            document.mozCancelFullScreen();
          } else if (document.msExitFullscreen) {
            document.msExitFullscreen();
          }
        }
      }
    </script>

    <div icon-button style="min-width: 32px;min-height: 32px;width: 32px;height: 32px;background:#0bec32;color:#FFFD;" onclick="document.body.nextPage();if(window.editor) render.value = editor.getValue();">
      <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="currentColor"><path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z"/></svg>
    </div>

    




  </header>

  <content flex-x>
    <div views >
      <div view="intro" style="padding: 1em;overflow-y: auto;box-sizing:border-box;" markdown>
# Merhaba Web Programcısı 💻
Bu web sitesi ``web.kodluyo.com`` da web programlamayı öğreniceksin. 
Burada öğreneceğin konular:
+ HTML
+ CSS 
+ JavaScript
+ MarkDown


# Konular
<?php
foreach(glob("./source/*.md") as $file){
  echo "<div underline primary document='/$file'>".basename($file)."</div>";
}
 ?>
      </div>
      <div view="document" style="padding: 1em;overflow-y: auto;box-sizing:border-box;" markdown>
      </div>
      <div view="code" style="padding-top:1em;">
        <div editor="html" style="width:100%;height:calc(100% - 1em);"></div>
      </div>
      <div view="render" style="">
      </div>
    </div>   
    <style>
      [views]{
        position:relative;
        width:100%;
        transition: all .4s;
        left:0;
      }
      [view]{
        position:absolute;
        width: 50%;
        height: 100%;
        top:0;
        left:0;
      }
      [view=document]{ left:50%; }
      [view=code]{ left:100%; }
      [view=render]{ left:150%; }
      [view=render]{display:flex;}
      [view=render] iframe{
        border:none;
        width:100%;
        height:100%;
        background:white;
      }
      body.code-view [views]{
        left:-50%;
      }
      body.render-view [views]{
        left:-100%;
      }

      
    </style>
  </content>


  <style>
    @import url('https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&display=swap');

    body.theme-dark{
      --back:#1e1e1e;
    }
    body.theme-light{
      --back:#FFF;
    }
    body{
      font-family:monospace;
      --primary:#FF9800;
      font-size:16px;
      font-family: "JetBrains Mono", monospace;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      font-optical-sizing: auto;
      font-weight: 400;
      font-style: normal;
    }
    content{
      box-shadow:none;
    }
    pre>code{
      border-left:6px solid #FA0;
    }
  </style>

  <script>
    documenter.when("[markdown]",function(el){
      el.innerHTML = documenter.markdown(el.innerHTML)
    })
  </script>


  <!--------------------------- view=code ----------------------------->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.45.0/min/vs/loader.min.js"></script>
  <script>
    window.editors = {}
    window.editor = null;
    require.config({ paths: { 'vs': 'https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.45.0/min/vs' }});
    require(['vs/editor/editor.main'], function () {
      $$("[editor]").map(e=>{
        let language = "html"
        let editor = monaco.editor.create(e, {
          value: e.innerHTML,
          language: language,
          theme: 'vs-'+(localStorage._theme=="theme-light"?"light":"dark"),
          fontSize: 16,
          fontFamily: 'JetBrains Mono',
          renderLineHighlight: "none",
        });
        window.addEventListener('resize', () => { editor.layout(); });
        editors[language]=editor
        window.editor = editor
      });
    });
  </script>
  <!----------------------- view=render ---------------------->
  <script>
    window.render = {
      el:null,
    }
    Object.defineProperty(render, 'value', {
      set: function (html) {
        let parent = $("[view=render]")
        if(render.el) render.el.remove()
        render.el = documenter.render(`<iframe></iframe>`)
        render.el.addEventListener("load",function(){

          console.log("here")
          const doc = render.el.contentWindow.document;
          doc.open();
          doc.write(html);
          doc.close();
        })
        parent.appendChild(render.el)
      }
    });
    //documenter.when("[view=render]",{})
  </script>

  <!----------------------- COPY CODE ---------------------->
  <style>
    pre{position:relative;}
    pre [copy-button]{
      position: absolute;
      right: .25em;
      top: .25em;
      padding: .5em;
      background: var(--back);
      color: var(--front);
      border-radius: 4px;
      cursor:pointer;
    }
    pre [copy-button]:hover{
      box-shadow:inset 0 0 0 1000px var(--light);
    }
  </style>
  <script>
    //@ copy code
    documenter.when("[markdown] pre",function(el){
      let copy = documenter.render("<div copy-button></div>");
      copy.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="currentColor"><path d="M360-240q-33 0-56.5-23.5T280-320v-480q0-33 23.5-56.5T360-880h360q33 0 56.5 23.5T800-800v480q0 33-23.5 56.5T720-240H360Zm0-80h360v-480H360v480ZM200-80q-33 0-56.5-23.5T120-160v-560h80v560h440v80H200Zm160-240v-480 480Z"/></svg>`
      copy.onclick = ()=>{
        window.editors['html'].setValue( (window.editors['html'].getValue() || "") + el.innerText )
        console.log("here")
      }
      el.appendChild(copy)
    })
  </script>

  <!---------------------- REFRESH CODE ------------------------>
  <script>
    
    setInterval(()=>{
      if(window.editor && window.editor.value != window.editor.getValue() ){
        window.editor.value = window.editor.getValue()
        render.value = editor.getValue()
      }
    },1000)
    
  </script>

  <!---------------------- SHOW DOCUMENT ------------------------>
  <script>
    documenter.on("click","[document]",function(){
      documenter.post(this.getAttribute("document")).then(e=>e.text()).then(e=>{
        $$("[document]").map(e=>e.style.color=null)
        this.style.color="var(--primary)";
        $("[view=document]").innerHTML = documenter.markdown(e)
        hljs.highlightAll();
      })
    })
  </script>
  
  
  <!---------------------- Pagination ------------------------>
  <script>
    document.body.nextPage = function(){
      if(document.body.classList.contains("render-view")){

      }else if(document.body.classList.contains("code-view")){
        document.body.classList.remove("code-view")
        document.body.classList.add("render-view")
      }else{
        document.body.classList.remove("render-view")
        document.body.classList.add("code-view")
      }
    }
    document.body.prevPage = function(){
      if(document.body.classList.contains("render-view")){
        document.body.classList.remove("render-view")
        document.body.classList.add("code-view")
      }else if(document.body.classList.contains("code-view")){
        document.body.classList.remove("render-view")
        document.body.classList.remove("code-view")
      }else{
        
      }
    }
  </script>
  
  

</body>