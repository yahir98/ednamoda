<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <title>{{page_title}}</title>
            <meta name="viewport" content="width=device-width, initial-scale=1"/>
            <link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
            <link rel="stylesheet" href="public/css/papier.css" />
            <link rel="stylesheet" href="public/css/estilo.css" />
            <script src="public/js/jquery.min.js"></script>
            {{foreach css_ref}}
                <link rel="stylesheet" href="{{uri}}" />
            {{endfor css_ref}}
        </head>
        <body>
          <div class="menu">
              <div class="brand"><a href="index.php?page=home">{{page_title}}</a></div>
          </div>
            <div class="contenido">
                {{{page_content}}}
            </div>

            <div class="footer">
                Derechos Reservados 2018
            </div>
            {{foreach js_ref}}
                <script src="{{uri}}"></script>
            {{endfor js_ref}}
        </body>
    </html>
