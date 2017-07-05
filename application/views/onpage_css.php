    <style>
      * {
        box-sizing:border-box;
      }

      @font-face {
        font-family:ProximaNova;
        src: url("/assets/fonts/ProximaNova-Thin.otf");
        font-weight:100;
        font-style:normal;
      }

      @font-face {
        font-family:ProximaNova;
        src: url("/assets/fonts/ProximaNova-Light.otf");
        font-weight:200;
        font-style:normal;
      }

      @font-face {
        font-family:ProximaNova;
        src: url("/assets/fonts/ProximaNova-Reg.otf");
        font-weight:normal;
        font-style:normal;
      }

      @font-face {
        font-family:ProximaNova;
        src: url("/assets/fonts/ProximaNova-Sbold.otf");
        font-weight:600;
        font-style:normal;
      }

      @font-face {
        font-family:ProximaNova;
        src: url("/assets/fonts/ProximaNova-Bold.otf");
        font-weight:700;
        font-style:normal;
      }

      @font-face {
        font-family:ProximaNova;
        src: url("/assets/fonts/ProximaNova-Xbold.otf");
        font-weight:800;
        font-style:normal;
      }

      @font-face {
        font-family:ProximaNova;
        src: url("/assets/fonts/ProximaNova-Black.otf");
        font-weight:600;
        font-style:normal;
      }

      @font-face {
        font-family:Museo_Slab;
        src: url("/assets/fonts/Museo_Slab_100.otf");
        font-weight:100;
        font-style:normal;
      }

      @font-face {
        font-family:Museo_Slab;
        src: url("/assets/fonts/Museo_Slab_100italic.otf");
        font-weight:100;
        font-style:italic;
      }

      @font-face {
        font-family:Museo_Slab;
        src: url("/assets/fonts/Museo_Slab_300.otf");
        font-weight:300;
        font-style:normal;
      }

      @font-face {
        font-family:Museo_Slab;
        src: url("/assets/fonts/Museo_Slab_300italic.otf");
        font-weight:300;
        font-style:italic;
      }

      @font-face {
        font-family:Museo_Slab;
        src: url("/assets/fonts/Museo_Slab_500.otf");
        font-weight:500;
        font-style:normal;
      }

      @font-face {
        font-family:Museo_Slab;
        src: url("/assets/fonts/Museo_Slab_500italic.otf");
        font-weight:500;
        font-style:italic;
      }

      @font-face {
        font-family:Museo_Slab;
        src: url("/assets/fonts/Museo_Slab_700.otf");
        font-weight:700;
        font-style:normal;
      }

      @font-face {
        font-family:Museo_Slab;
        src: url("/assets/fonts/Museo_Slab_700italic.otf");
        font-weight:700;
        font-style:italic;
      }

      @font-face {
        font-family:Museo_Slab;
        src: url("/assets/fonts/Museo_Slab_900.otf");
        font-weight:900;
        font-style:normal;
      }

      @font-face {
        font-family:Museo_Slab;
        src: url("/assets/fonts/Museo_Slab_900italic.otf");
        font-weight:900;
        font-style:italic;
      }

      @font-face {
        font-family:Museo_Slab;
        src: url("/assets/fonts/Museo_Slab_1000.otf");
        font-weight:1000;
        font-style:normal;
      }

      @font-face {
        font-family:Museo_Slab;
        src: url("/assets/fonts/Museo_Slab_1000italic.otf");
        font-weight:1000;
        font-style:italic;
      }

      body {
        padding:0px;
        margin:0px;
        height:100%;
        width:100%;
        font-size: calc(10px + (16 - 10) * ((100vw - 300px) / (1600 - 300)));
        font-family:ProximaNova;
      }

      a {
        font-family:ProximaNova;
      }

      #wrapper {
        position:relative;
        background-color:#f4f7fa;
        height: calc(100vh - 3vw);
        overflow:hidden;
      }

      #field_section {
        background-color:#ecf9fe;
        color:#015697;
        padding:0px;
        top:0px;
        height:calc(100vh - 3vw);
        position:relative;
        display:inline-block;
        width:600px;
        box-shadow: 0 0 5px 2px black;
        overflow-x:hidden;
        overflow-y:auto;
      }

      #field_section::-webkit-scrollbar {
        width:0px;
      }

      #field_section::-moz-scrollbar {
        width:0px;
      }

      #field_section::scrollbar {
        width:0px;
      }

      #report_section {
        position:relative;
        width: calc( 100% - 600px);
        height:calc( 100vh - 3vw );
        min-width:600px;
        float:right;
        top:0px;
        display:inline-block;
        box-sizing:border-box;
        overflow-x:hidden;
        overflow-y:auto;
      }

      #report_section::-webkit-scrollbar {
        width:0px;
      }

      #report_section::-moz-scrollbar {
        width:0px;
      }

      #report_section::scrollbar {
        width:0px;
      }

      .hidden {
        display:none !important;
      }

      .blur {
        -webkit-filter: blur( 10px ) !important;
        filter: blur( 10px ) !important;
      }

    </style>
