<?php

function insertTable($table, $l=NULL, $f=NULL){
    if (!$table and !$l and !$f){
        $err = new WP_Error( 'broke', __( "Parametre Olarak Tablo Vermelisin !!!!", "my_textdomain" ) );
    } else {
        global $wpdb;
        $table = $wpdb->prefix . $table;


        $wpdb->insert(
            $table,
            $l,
            $f
        );
    }
    if ( is_wp_error($err)){
        echo $err->get_error_message();
    } else{
        return $result;
    }
}

function getCountTable($table){
    if (!$table){
        $err = new WP_Error( 'broke', __( "Parametre Olarak Tablo Vermelisin !!!!", "my_textdomain" ) );
    } else {
        global $wpdb;
        $table = $wpdb->prefix . $table;

        $sql = "
        SELECT COUNT(*)
        FROM '{$table}';
        ";

    $result = $wpdb->get_var($sql);

    }
    if ( is_wp_error($err)){
        echo $err->get_error_message();
    } else{
        return $result;
    }
}
function tableExist($table=NULL){
    if (!$table){
        $err = new WP_Error( 'broke', __( "Parametre Olarak Tablo Vermelisin !!!!", "my_textdomain" ) );
    } else {
        global $wpdb;
        $table = $wpdb->prefix . $table;

        $db = DB_NAME;
        $sql = "
        SELECT COUNT(*)
        FROM information_schema.tables
        WHERE table_schema = '{$db}'
        AND table_name = '{$table}';
        ";

        $result = $wpdb->get_var($sql);

    }
    if ( is_wp_error($err)){
        echo $err->get_error_message();
    } else{
        return $result;
    }
}

function createIllerTable($table=NULL){
    if (!$table){
        $err = new WP_Error( 'broke', __( "Parametre Olarak Tablo Vermelisin !!!!", "my_textdomain" ) );
    } else {
        if (!tableExist('iller')){
            global $wpdb;
            $db = DB_NAME;
            $table = $wpdb->prefix . $table;
            $charset_collate = $wpdb->get_charset_collate();
            $sql = "
                CREATE TABLE {$table}(
                    ID INT NOT NULL,
                    ISIM VARCHAR(30) NOT NULL,
                    EPOSTA VARCHAR(150),
                    TELEFON VARCHAR(50),
                    PRIMARY KEY (ID)
                )DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
                ";
                        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
                        dbDelta( $sql );
$iller = array(
"01" => "Adana",
"02" => "Adıyaman",
"03" => "Afyon",
"04" => "Ağrı",
"05" => "Amasya",
"06" => "Ankara",
"07" => "Antalya",
"08" => "Artvin",
"09" => "Aydın",
"10" => "Balıkesir",
"11" => "Bilecik",
"12" => "Bingöl",
"13" => "Bitlis",
"14" => "Bolu",
"15" => "Burdur",
"16" => "Bursa",
"17" => "Çanakkale",
"18" => "Çankırı",
"19" => "Çorum",
"20" => "Denizli",
"21" => "Diyarbakır",
"22" => "Edirne",
"23" => "Elazığ",
"24" => "Erzincan",
"25" => "Erzurum",
"26" => "Eskişehir",
"27" => "Gaziantep",
"28" => "Giresun",
"29" => "Gümüşhane",
"30" => "Hakkari",
"31" => "Hatay",
"32" => "Isparta",
"33" => "İçel (Mersin)",
"34" => "İstanbul",
"35" => "İzmir",
"36" => "Kars",
"37" => "Kastamonu",
"38" => "Kayseri",
"39" => "Kırklareli",
"40" => "Kırşehir",
"41" => "Kocaeli",
"42" => "Konya",
"43" => "Kütahya",
"44" => "Malatya",
"45" => "Manisa",
"46" => "K.maraş",
"47" => "Mardin",
"48" => "Muğla",
"49" => "Muş",
"50" => "Nevşehir",
"51" => "Niğde",
"52" => "Ordu",
"53" => "Rize",
"54" => "Sakarya",
"55" => "Samsun",
"56" => "Siirt",
"57" => "Sinop",
"58" => "Sivas",
"59" => "Tekirdağ",
"60" => "Tokat",
"61" => "Trabzon",
"62" => "Tunceli",
"63" => "Şanlıurfa",
"64" => "Uşak",
"65" => "Van",
"66" => "Yozgat",
"67" => "Zonguldak",
"68" => "Aksaray",
"69" => "Bayburt",
"70" => "Karaman",
"71" => "Kırıkkale",
"72" => "Batman",
"73" => "Şırnak",
"74" => "Bartın",
"75" => "Ardahan",
"76" => "Iğdır",
"77" => "Yalova",
"78" => "Karabük",
"79" => "Kilis",
"80" => "Osmaniye",
"81" => "Düzce",
);

        foreach ($iller as $key => $value) {
            $l = array(
                "ID" => $key,
                "ISIM" => $value
            );

            $f = array(
                "%d",
                "%s"
            );

            insertTable('iller', $l, $f );
        };

        }

    }


if ( is_wp_error($err)){
        echo $err->get_error_message();
    } else{
        return $result;
    }

}

function createBirimlerTable($table=NULL){
    if (!$table){
        $err = new WP_Error( 'broke', __( "Parametre Olarak Tablo Vermelisin !!!!", "my_textdomain" ) );
    } else {
        if (!tableExist('birimler')){
            global $wpdb;
            $db = DB_NAME;
            $table = $wpdb->prefix . $table;
            $charset_collate = $wpdb->get_charset_collate();
            $sql = "
            CREATE TABLE `{$table}` (
              `ID` int(8) NOT NULL AUTO_INCREMENT,
              `ISIM` varchar(100) NOT NULL DEFAULT '',
              `EPOSTA` varchar(150) DEFAULT NULL,
              `ADRES` text DEFAULT NULL,
              `TELEFON` varchar(20) DEFAULT NULL,
              `HAKKINDA` text,
              PRIMARY KEY (`ID`)
            )DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
                ";
                        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
                        dbDelta( $sql );

                    }
                }
            }


function createEtkinliklerTable($table=NULL){
    if (!$table){
        $err = new WP_Error( 'broke', __( "Parametre Olarak Tablo Vermelisin !!!!", "my_textdomain" ) );
    } else {
        if (!tableExist('etkinlikler')){
            global $wpdb;
            $db = DB_NAME;
            $table = $wpdb->prefix . $table;
            $charset_collate = $wpdb->get_charset_collate();
            $sql = "
                CREATE TABLE {$table}(
                    ID INT NOT NULL AUTO_INCREMENT,
                    BIRIM INT NOT NULL,
                    IL INT NOT NULL,
                    AD VARCHAR(250) NOT NULL,
                    ADRES text,
                    TARIH VARCHAR(50),
                    BASLANGIC VARCHAR(50),
                    BITIS VARCHAR(50),
                    ACIKLAMA TEXT,
                    FOREIGN KEY (BIRIM) REFERENCES wp_birimler(ID),
                    FOREIGN KEY (IL) REFERENCES wp_iller(ID),
                    PRIMARY KEY (ID)
                )DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
                ";
                        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
                        dbDelta( $sql );

                    }
                }
            }

function getIller(){
    global $wpdb;
    $iller = $wpdb->get_results("
        SELECT *
        FROM wp_iller
    ");

    return $iller;
}

function getBirimler(){
    global $wpdb;
    $birimler = $wpdb->get_results("
        SELECT *
        FROM wp_birimler
    ");

    return $birimler;
}

function getEtkinlikler(){
    global $wpdb;
    $birimler = $wpdb->get_results("
        SELECT *
        FROM wp_etkinlikler
    ");
    return $birimler;
}

function getObject($table, $where, $value){
    global $wpdb;
    $result = $wpdb->get_row( "SELECT * FROM {$table} WHERE {$where} = {$value}" );
    return $result;
}

if (tableExist("iller")){

} else {
    createIllerTable('iller');
}
if (tableExist("birimler")){

} else {
    createBirimlerTable('birimler');
}
if (tableExist("etkinlikler")){

} else {
    createEtkinliklerTable('etkinlikler');
}

?>
