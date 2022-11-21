<html>
    <head>
        <title> Kalkulator saintifik</title>
    </head>
    <body>
        <h1> Kalkulator saintifik sederhana<h1>
            <form>
                <input type="text" name="ekspresi">
                <div style="margin-top: 10px;">
                    <button type ="button" onclick="location.href= '?'">clear</button>
                    <button type="submit">hitung</button>
                    <div>
                        <!-- start count -->
                <?php 
                        if ($_GET):
                            $ekspresi = $_GET['ekspresi'];
                            $hasil= eval("return ($ekspresi);");?>
                            <div style="margin-top: 10px">
                               hasil <strong> <?php echo $hasil ?></strong>
                        </div>
                        <?php 
                        endif;
                        
                        ?>
                    
            </form>
    </body>
</html>