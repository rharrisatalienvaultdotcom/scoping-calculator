    <style>
      * {
        box-sizing:border-box;
      }

      @font-face {
        font-family:ProximaNova;
        src: url("/assets/fonts/ProximaNova-Sbold.otf");
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
        background-color:lightgray;
        height: calc(100vh - 3vw);
        overflow:hidden;
      }

      #field_section {
        background-color:white;
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

    </style>
