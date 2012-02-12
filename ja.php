<?
// All tags should have a translation, with language strings like "tag:key" for the translation of the key and "tag:key=value" for the translation of the value. E.g. tag:amenity "Amenity;Amenities" resp. tag:amenity=bar "Bar;Bars". You can also define the Gender like "F;Bar;Bars".

// *
#$lang_str["tag:*=yes"]="yes";
#$lang_str["tag:*=no"]="no";

// accomodation
$lang_str["tag:accomodation"]="宿泊";

// address
$lang_str["tag:address"]="住所";

// addr:housenumber
$lang_str["tag:addr:housenumber"]="家番号";

// addr:housename
#$lang_str["tag:addr:housename"]=array("House name", "House names");

// addr:street
#$lang_str["tag:addr:street"]=array("Street", "Streets");

// addr:postcode
#$lang_str["tag:addr:postcode"]=array("Postal Code", "Postal Codes");

// addr:city
#$lang_str["tag:addr:city"]=array("City", "Cities");

// addr:country
#$lang_str["tag:addr:country"]=array("Country", "Countries");

// addr:full
#$lang_str["tag:addr:full"]=array("Full address", "Full addresses");

// addr:interpolation
#$lang_str["tag:addr:interpolation"]="Interpolated housenumbers";

// aeroway
$lang_str["tag:aeroway"]="航空";
$lang_str["tag:aeroway=runway"]="滑走路";
$lang_str["tag:aeroway=taxiway"]="誘導路";

// admin_level
$lang_str["tag:admin_level=2"]="国境";
$lang_str["tag:admin_level=3"]="行政区分(未使用)";
$lang_str["tag:admin_level=4"]="道州境界";
$lang_str["tag:admin_level=5"]="コミュニティ境界(未使用)";
$lang_str["tag:admin_level=6"]="都道府県境";
$lang_str["tag:admin_level=8"]="市町村境";
$lang_str["tag:admin_level=10"]="町名・街区";

// amenity
$lang_str["tag:amenity"]="生活環境";
$lang_str["tag:amenity=cinema"]=array("映画館", "映画館");
$lang_str["tag:amenity=restaurant"]="レストラン";
$lang_str["tag:amenity=pub"]=array("パブ", "パブ");

// barrier
$lang_str["tag:barrier"]=array("バリア", "バリア");
$lang_str["tag:barrier=city_wall"]=array("都市城壁", "都市城壁");
$lang_str["tag:barrier=wall"]=array("壁", "壁");
$lang_str["tag:barrier=retaining_wall"]=array("擁壁", "擁壁");
$lang_str["tag:barrier=fence"]=array("柵", "柵");
$lang_str["tag:barrier=hedge"]=array("生垣", "生垣");

// cables
$lang_str["tag:cables"]="ケーブル数";

// description
$lang_str["tag:description"]="説明";

// fixme
#$lang_str["tag:fixme"]="Fix me";

// note
$lang_str["tag:note"]="メモ";

// food
$lang_str["tag:food"]="食事つき";

// cuisine
$lang_str["tag:cuisine"]="料理";
$lang_str["tag:cuisine=regional"]="地域料理";

// highway
$lang_str["tag:highway"]=array("道路", "道路");
$lang_str["tag:highway=motorway"]="自動車専用道路";
$lang_str["tag:highway=motorway_link"]="自動車専用道路連絡路";
$lang_str["tag:highway=trunk"]="国道";
$lang_str["tag:highway=trunk_link"]="国道連絡路";
$lang_str["tag:highway=primary"]="主要地方道";
$lang_str["tag:highway=primary_link"]="主要地方道連絡路";
$lang_str["tag:highway=secondary"]="一般地方道";
$lang_str["tag:highway=tertiary"]="一般道(2車線以上)";
$lang_str["tag:highway=minor"]="一般道(2車線未満)";
$lang_str["tag:highway=road"]="不明な道路";
$lang_str["tag:highway=residential"]="居住区域内道路";
$lang_str["tag:highway=unclassified"]="一般道(2車線未満)";
$lang_str["tag:highway=service"]="敷地内道路";
$lang_str["tag:highway=pedestrian"]="歩行者専用道路";
$lang_str["tag:highway=living_street"]="生活道路";
$lang_str["tag:highway=path"]="小道";
$lang_str["tag:highway=cycleway"]="自転車道";
$lang_str["tag:highway=footway"]="遊歩道";
$lang_str["tag:highway=bridleway"]="乗馬道";
$lang_str["tag:highway=track"]="未舗装路";
$lang_str["tag:highway=steps"]="階段";

// bridge
#$lang_str["tag:bridge"]="Bridge";

// tunnel
#$lang_str["tag:tunnel"]="Tunnel";

// traffic_calming
#$lang_str["tag:traffic_calming"]="Traffic calming";

// service
#$lang_str["tag:service"]="Service road attributes";

// postal_code
#$lang_str["tag:postal_code"]="Postal Code";

// is_in
$lang_str["tag:is_in"]="Is in";

// leisure
#$lang_str["tag:leisure"]="Leisure";
$lang_str["tag:leisure=sports_centre"]="スポーツセンター";
$lang_str["tag:leisure=golf_course"]="ゴルフコース";
$lang_str["tag:leisure=stadium"]="スタジアム";
$lang_str["tag:leisure=track"]="トラック";
$lang_str["tag:leisure=pitch"]="競技場";
$lang_str["tag:leisure=water_park"]="ウォーターパーク";
$lang_str["tag:leisure=marina"]="マリーナ";
$lang_str["tag:leisure=slipway"]="進水路";
$lang_str["tag:leisure=fishing"]="釣り";
$lang_str["tag:leisure=nature_reserve"]="自然保護区域";
$lang_str["tag:leisure=park"]="レジャーパーク";
$lang_str["tag:leisure=playground"]="遊び場";
$lang_str["tag:leisure=garden"]="庭園";
$lang_str["tag:leisure=common"]="共有地";
$lang_str["tag:leisure=ice_rink"]="アイスリンク";
$lang_str["tag:leisure=miniature_golf"]="ミニゴルフ";
$lang_str["tag:leisure=swimming_pool"]="プール";
$lang_str["tag:leisure=beach_resort"]="ビーチリゾート";
$lang_str["tag:leisure=bird_hide"]="バードウォッチング小屋";
$lang_str["tag:leisure=sport"]="その他スポーツ";

// man_made
$lang_str["tag:man_made"]="建造物";
$lang_str["tag:man_made=pipeline"]=array("パイプライン", "パイプライン");

// type
$lang_str["tag:type"]="種別";
$lang_str["tag:type=gas"]="ガス";
#$lang_str["tag:type=heat"]="Heat";
$lang_str["tag:type=hot_water"]="温水";
$lang_str["tag:type=oil"]="石油";
$lang_str["tag:type=sewage"]="汚水";
$lang_str["tag:type=water"]="水";

// name
$lang_str["tag:name"]=array("名前", "名前");

// alt_name
#$lang_str["tag:alt_name"]=array("Alternative name", "Alternative names");

// official_name
#$lang_str["tag:official_name"]=array("Official name", "Official names");

// int_name
#$lang_str["tag:int_name"]=array("International name", "International names");

// loc_name
#$lang_str["tag:loc_name"]=array("Local name", "Local names");

// old_name
$lang_str["tag:old_name"]="旧名";

// ref
#$lang_str["tag:ref"]="Reference";

// network
$lang_str["tag:network"]="ネットワーク";

// opening_hours
$lang_str["tag:opening_hours"]="営業時間";

// operator
$lang_str["tag:operator"]="管理者";

// place
$lang_str["tag:place"]="場所";
$lang_str["tag:place=continent"]="大陸";
$lang_str["tag:place=country"]="国";
$lang_str["tag:place=state"]="州";
$lang_str["tag:place=region"]="地方";
$lang_str["tag:place=county"]="郡";
$lang_str["tag:place=city"]="都市";
$lang_str["tag:place=town"]="町";
$lang_str["tag:place=village"]="村";
$lang_str["tag:place=suburb"]="近郊(未使用)";
$lang_str["tag:place=hamlet"]="小村(未使用)";
$lang_str["tag:place=locality"]="地域の通称";
$lang_str["tag:place=island"]="島";
$lang_str["tag:place=islet"]=array("小島", "小島");
#$lang_str["tag:place=ocean"]=array("Ocean", "Oceans");
#$lang_str["tag:place=sea"]=array("Sea", "Seas");

// population
$lang_str["tag:population"]="人口";

// power
$lang_str["tag:power"]="電力";
$lang_str["tag:power=generator"]="発電所";
$lang_str["tag:power=line"]="電力線";
$lang_str["tag:power=minor_line"]="中/低圧電線";
$lang_str["tag:power=tower"]="送電塔";
$lang_str["tag:power=pole"]="電柱";
$lang_str["tag:power=station"]="変電所";
$lang_str["tag:power=sub_station"]="小規模変電所";

// power_source
$lang_str["tag:power_source"]="電力源";
$lang_str["tag:power_source=biofuel"]="バイオ燃料";
$lang_str["tag:power_source=oil"]="石油";
$lang_str["tag:power_source=coal"]="石炭";
$lang_str["tag:power_source=gas"]="ガス";
$lang_str["tag:power_source=waste"]="廃棄物";
$lang_str["tag:power_source=hydro"]="水素";
$lang_str["tag:power_source=tidal"]="潮流";
$lang_str["tag:power_source=wave"]="波";
$lang_str["tag:power_source=geothermal"]="地熱";
$lang_str["tag:power_source=nuclear"]="原子力";
$lang_str["tag:power_source=fusion"]="核融合";
$lang_str["tag:power_source=wind"]="風力";
$lang_str["tag:power_source=photovoltaic"]="太陽電池";
$lang_str["tag:power_source=solar-thermal"]="太陽熱";

// railway
$lang_str["tag:railway"]="鉄道";
$lang_str["tag:railway=rail"]=array("鉄道線路", "鉄道線路");
$lang_str["tag:railway=tram"]=array("路面電車", "路面電車");
$lang_str["tag:railway=platform"]=array("プラットホーム", "プラットホーム");

// real_ale
$lang_str["tag:real_ale"]="リアルエール提供";

// religion
$lang_str["tag:religion"]="宗教";
$lang_str["tag:religion=christian"]="キリスト教";
$lang_str["tag:religion=buddhist"]="仏教";
$lang_str["tag:religion=hindu"]="ヒンドゥー教";
$lang_str["tag:religion=jewish"]="ユダヤ教";
$lang_str["tag:religion=muslim"]="ムスリム";
$lang_str["tag:religion=multifaith"]="多神教";

// denomination
#$lang_str["tag:denomination"]="Denomination";

// route
$lang_str["tag:route"]="ルート";
$lang_str["tag:route=train"]="列車";
$lang_str["tag:route=railway"]="鉄道";
$lang_str["tag:route=rail"]="鉄道";
$lang_str["tag:route=light_rail"]="ライトレール";
$lang_str["tag:route=subway"]="地下鉄";
$lang_str["tag:route=tram"]="路面電車";
#$lang_str["tag:route=tram_bus"]="Tram and Bus";
$lang_str["tag:route=trolley"]="トローリー";
$lang_str["tag:route=trolleybus"]="トローリーバス";
$lang_str["tag:route=bus"]="バス";
$lang_str["tag:route=minibus"]="ミニバス";
$lang_str["tag:route=ferry"]="フェリー";
$lang_str["tag:route=road"]="道路";
$lang_str["tag:route=bicycle"]="自転車";
$lang_str["tag:route=hiking"]="ハイキング";
$lang_str["tag:route=mtb"]="マウンテンバイク";

// shop
$lang_str["tag:shop"]="店";

// sport
$lang_str["tag:sport"]="スポーツ";
$lang_str["tag:sport=9pin"]="9ピンボウリング";
$lang_str["tag:sport=10pin"]="10ピンボウリング";
$lang_str["tag:sport=archery"]="アーチェリー";
$lang_str["tag:sport=athletics"]="アスレチックス";
$lang_str["tag:sport=australian_football"]="オージーフットボール";
$lang_str["tag:sport=baseball"]="野球";
$lang_str["tag:sport=basketball"]="バスケットボール";
$lang_str["tag:sport=beachvolleyball"]="ビーチバレー";
$lang_str["tag:sport=boules"]="金属ボールゲーム";
$lang_str["tag:sport=bowls"]="ローンボウリング";
$lang_str["tag:sport=canoe"]="カヌー";
$lang_str["tag:sport=chess"]="チェス";
$lang_str["tag:sport=climbing"]="登山";
$lang_str["tag:sport=cricket"]="クリケット";
$lang_str["tag:sport=cricket_nets"]="クリケットのネット";
$lang_str["tag:sport=croquet"]="クロッケー";
$lang_str["tag:sport=cycling"]="サイクリング";
$lang_str["tag:sport=diving"]="ダイビング";
$lang_str["tag:sport=dog_racing"]="ドッグレース";
$lang_str["tag:sport=equestrian"]="馬術";
$lang_str["tag:sport=football"]="フットボール";
$lang_str["tag:sport=golf"]="ゴルフ";
$lang_str["tag:sport=gymnastics"]="ジム";
$lang_str["tag:sport=hockey"]="ホッケー";
$lang_str["tag:sport=horse_racing"]="競馬";
$lang_str["tag:sport=korfball"]="コーフボール";
$lang_str["tag:sport=motor"]="自動車";
$lang_str["tag:sport=multi"]="複合競技";
$lang_str["tag:sport=orienteering"]="オリエンテーリング";
$lang_str["tag:sport=paddle_tennis"]="パドルテニス";
$lang_str["tag:sport=paragliding"]="パラグライダー";
$lang_str["tag:sport=pelota"]="Pelota(ボール)";
$lang_str["tag:sport=racquet"]="ラケット";
$lang_str["tag:sport=rowing"]="ボート";
$lang_str["tag:sport=rugby"]="ラグビー";
$lang_str["tag:sport=shooting"]="射撃";
$lang_str["tag:sport=skating"]="スケート";
$lang_str["tag:sport=skateboard"]="スケートボード";
$lang_str["tag:sport=skiing"]="スキー";
$lang_str["tag:sport=soccer"]="サッカー";
$lang_str["tag:sport=swimming"]="水泳";
$lang_str["tag:sport=table_tennis"]="テーブルテニス";
$lang_str["tag:sport=team_handball"]="ハンドボール";
$lang_str["tag:sport=tennis"]="テニス";
$lang_str["tag:sport=volleyball"]="バレーボール";

// tracks
$lang_str["tag:tracks"]="トラック";
$lang_str["tag:tracks=single"]="シングル";
$lang_str["tag:tracks=double"]="ダブル";
$lang_str["tag:tracks=multiple"]="複数";

// vending
$lang_str["tag:vending"]="自販機";

// voltage
$lang_str["tag:voltage"]="電圧";

// wires
$lang_str["tag:wires"]="ワイヤー数";

// website
$lang_str["tag:website"]="Webサイト";

// cycleway
#$lang_str["tag:cycleway"]="Cycleway";

// tracktype
#$lang_str["tag:tracktype"]="Track type";

// waterway
#$lang_str["tag:waterway"]="Waterway";

// aerialway
#$lang_str["tag:aerialway"]="Aerialway";

// public_transport
#$lang_str["tag:public_transport"]="Public Transport";

// office
#$lang_str["tag:office"]="Office";

// craft
#$lang_str["tag:craft"]="Craft";

// emergency
#$lang_str["tag:emergency"]="Emergency";

// tourism
#$lang_str["tag:tourism"]="Tourism";

// historic
#$lang_str["tag:historic"]="Historic";

// landuse
#$lang_str["tag:landuse"]="Landuse";

// wood
#$lang_str["tag:wood"]="Type of wood";

// military
#$lang_str["tag:military"]="Military";

// natural
#$lang_str["tag:natural"]="Natural";

// geological
#$lang_str["tag:geological"]="Geological";

// boundary
#$lang_str["tag:boundary"]="Boundary";

// abutters
#$lang_str["tag:abutters"]="Abutters";

// lit
#$lang_str["tag:lit"]="Street lighting";

// area
#$lang_str["tag:area"]="Area";

// crossing
#$lang_str["tag:crossing"]="crossing";

// mountain_pass
#$lang_str["tag:mountain_pass"]="Mountain Pass";

// cutting
#$lang_str["tag:cutting"]="Cutting";

// embankment
#$lang_str["tag:embankment"]="Embankment";

// lanes
#$lang_str["tag:lanes"]="Lanes";

// layer
#$lang_str["tag:layer"]="Layer";

// surface
#$lang_str["tag:surface"]="Surface";

// smoothness
#$lang_str["tag:smoothness"]="Smoothness";

// ele
#$lang_str["tag:ele"]="Elevation";

// width
#$lang_str["tag:width"]="Width";

// est_width
#$lang_str["tag:est_width"]="Estimated width";

// incline
#$lang_str["tag:incline"]="incline";

// start_date
#$lang_str["tag:start_date"]="Date of creation";

// end_date
#$lang_str["tag:end_date"]="Date of removal";

// disused
#$lang_str["tag:disused"]="Disused";

// wheelchair
#$lang_str["tag:wheelchair"]="Wheelchair";
#$lang_str["tag:wheelchair=limited"]="limited";

// tactile_paving
#$lang_str["tag:tactile_paving"]="Tactile paving";

// narrow
#$lang_str["tag:narrow"]="Narrow";

// covered
#$lang_str["tag:covered"]="Covered";

// ford
#$lang_str["tag:ford"]="Ford";

// access
#$lang_str["tag:access"]="General access permission";

// vehicle
#$lang_str["tag:vehicle"]="Vehicle access permission";

// bicycle
#$lang_str["tag:bicycle"]="Bicycle access permission";

// foot
#$lang_str["tag:foot"]="Foot access permission";

// goods
#$lang_str["tag:goods"]="LCV access permission";

// hgv
#$lang_str["tag:hgv"]="HGV access permission";

// horse
#$lang_str["tag:horse"]="Horse riders access permission";

// motorcycle
#$lang_str["tag:motorcycle"]="Motorcycle access permission";

// motorcar
#$lang_str["tag:motorcar"]="Motorcar access permission";

// psv
#$lang_str["tag:psv"]="PSV access permission";

// oneway
#$lang_str["tag:oneway"]="Oneway";

// noexit
#$lang_str["tag:noexit"]="Dead end road";

// maxweight
#$lang_str["tag:maxweight"]="Max. weight";

// maxheight
#$lang_str["tag:maxheight"]="Max. height";

// maxlength
#$lang_str["tag:maxlength"]="Max. length";

// maxspeed
#$lang_str["tag:maxspeed"]="Max. speed";

// minspeed
#$lang_str["tag:minspeed"]="Min. speed";

// traffic_sign
#$lang_str["tag:traffic_sign"]="Traffic sign";

// toll
#$lang_str["tag:toll"]="Toll";

// charge
#$lang_str["tag:charge"]="Charge";

// source
#$lang_str["tag:source"]="Source";

// phone
#$lang_str["tag:phone"]="Phone number";

// fax
#$lang_str["tag:fax"]="Fax number";

// email
#$lang_str["tag:email"]="E-mail";

// wikipedia
#$lang_str["tag:wikipedia"]="Wikipedia";

// created_by
#$lang_str["tag:created_by"]="Created by";

// construction
#$lang_str["tag:construction"]="Construction";

// proposed
#$lang_str["tag:proposed"]="Proposed";

// route_type
$lang_str["tag:route_type"]="ルート種別";
