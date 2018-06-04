<?php
//include_once $_SERVER['DOCUMENT_ROOT']."/business.class.php";
class View{

    public static function start($title, $meta = null, $link = null){
        //Session::session_start();
        echo "
        <!DOCTYPE html>
        <html lang='es'>
            <head>
                <title>$title</title>
                <meta charset=utf-8>
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
                $meta
                <link rel=stylesheet type=text/css href=../presentation/style.css>
                <link rel=icon href=../images/artencuentro_icono.png>
                <!-- BOOTSTRAP STYLESHEET -->
                <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" integrity=\"sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB\" crossorigin=\"anonymous\">
                <!-- BOOTSTRAP JS -->
                <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
                <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
                <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\" integrity=\"sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T\" crossorigin=\"anonymous\"></script>
                <!-- FONTAWESOME ICONS -->
                <link href=https://use.fontawesome.com/releases/v5.0.8/css/all.css rel=stylesheet>
                <!-- GOOGLE FONTS -->
                <link href=https://fonts.googleapis.com/css?family=Lobster+Two:400i&amptext=Artencuentro|Open+Sans rel=stylesheet>
                $link
            </head>
            <body>
                <div class='main-container'>
        ";
    }






    public static function footer(){
        echo "
        <div class='footer'>
            <p>
                &copy; 2018 Pablo De La Portilla
            </p>
        </div>
        ";
    }

    public static function end(){
        echo "
            </body>
        </html>
        ";
    }

}
