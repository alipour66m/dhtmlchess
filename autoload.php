<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
function autoloadf317a5ed1cba24f468ff35acd556e954($class) {
    static $classes = null;
    if ($classes === null) {
        $classes = array(
            'accessortest' => '/php/chessDB/ludoDB/Tests/AccessorTest.php',
            'achild' => '/php/chessDB/ludoDB/Tests/classes/Dependencies/AChild.php',
            'acity' => '/php/chessDB/ludoDB/Tests/classes/Dependencies/ACity.php',
            'allcarproperties' => '/php/chessDB/ludoDB/Tests/classes/AllCarProperties.php',
            'allchessfstests' => '/php/chessFS/tests/AllChessFSTests.php',
            'allchesstests' => '/php/chessDB/Tests/AllChessTests.php',
            'allservices' => '/php/chessDB/AllServices.php',
            'anotherchild' => '/php/chessDB/ludoDB/Tests/classes/Dependencies/AnotherChild.php',
            'aparent' => '/php/chessDB/ludoDB/Tests/classes/Dependencies/AParent.php',
            'asibling' => '/php/chessDB/ludoDB/Tests/classes/Dependencies/ASibling.php',
            'author' => '/php/chessDB/ludoDB/examples/mod_rewrite/Author.php',
            'availableservicestest' => '/php/chessDB/ludoDB/Tests/AvailableServicesTest.php',
            'board0x88config' => '/php/parser/Board0x88Config.php',
            'book' => '/php/chessDB/ludoDB/examples/mod_rewrite/Book.php',
            'bookauthor' => '/php/chessDB/ludoDB/examples/mod_rewrite/BookAuthor.php',
            'bookauthors' => '/php/chessDB/ludoDB/examples/mod_rewrite/BookAuthors.php',
            'brand' => '/php/chessDB/ludoDB/Tests/classes/Brand.php',
            'cachetest' => '/php/chessDB/ludoDB/Tests/CacheTest.php',
            'capital' => '/php/chessDB/ludoDB/Tests/classes/JSONCaching/Capital.php',
            'capitals' => '/php/chessDB/ludoDB/Tests/classes/JSONCaching/Capitals.php',
            'car' => '/php/chessDB/ludoDB/Tests/classes/Car.php',
            'carcollection' => '/php/chessDB/ludoDB/Tests/classes/CarCollection.php',
            'carproperties' => '/php/chessDB/ludoDB/Tests/classes/CarProperties.php',
            'carproperty' => '/php/chessDB/ludoDB/Tests/classes/CarProperty.php',
            'carswithproperties' => '/php/chessDB/ludoDB/Tests/classes/CarsWithProperties.php',
            'chat' => '/php/chessDB/chat/Chat.php',
            'chatmessage' => '/php/chessDB/chat/ChatMessage.php',
            'chatmessages' => '/php/chessDB/chat/ChatMessages.php',
            'chess_json' => '/php/CHESS_JSON.php',
            'chessdbinstaller' => '/php/chessDB/ChessDBInstaller.php',
            'chessengine' => '/php/engine/ChessEngine.php',
            'chessfileupload' => '/php/chessDB/ChessFileUpload.php',
            'chessfs' => '/php/chessFS/ChessFS.php',
            'chessfspgn' => '/php/chessFS/ChessFSPgn.php',
            'chessprogressbar' => '/php/db/ChessProgressBar.php',
            'chessprogressbarcompletedstep' => '/php/db/ChessProgressBarCompletedStep.php',
            'chessprogressbartemplate' => '/php/db/ChessProgressBarTemplate.php',
            'chessprogressbartplstep' => '/php/db/ChessProgressBarTplStep.php',
            'chessregistry' => '/php/ChessRegistry.php',
            'chessroles' => '/php/chessDB/Roles.php',
            'chesstests' => '/php/chessDB/Tests/ChessTests.php',
            'chessuserroles' => '/php/ChessUserRoles.php',
            'city' => '/php/chessDB/ludoDB/Tests/classes/City.php',
            'client' => '/php/chessDB/ludoDB/Tests/classes/Client.php',
            'collectiontest' => '/php/chessDB/ludoDB/Tests/CollectionTest.php',
            'columnaliastest' => '/php/chessDB/ludoDB/Tests/ColumnAliasTest.php',
            'configparsertest' => '/php/chessDB/ludoDB/Tests/ConfigParserTest.php',
            'configparsertestjson' => '/php/chessDB/ludoDB/Tests/ConfigParserTestJSON.php',
            'countries' => '/php/chessDB/player/Countries.php',
            'country' => '/php/chessDB/player/Country.php',
            'currentplayer' => '/php/chessDB/player/CurrentPlayer.php',
            'database' => '/php/chessDB/Database.php',
            'databases' => '/php/chessDB/Databases.php',
            'democities' => '/php/chessDB/ludoDB/examples/cities/DemoCities.php',
            'democity' => '/php/chessDB/ludoDB/examples/cities/DemoCity.php',
            'democountries' => '/php/chessDB/ludoDB/examples/cities/DemoCountries.php',
            'democountry' => '/php/chessDB/ludoDB/examples/cities/DemoCountry.php',
            'demostate' => '/php/chessDB/ludoDB/examples/cities/DemoState.php',
            'demostates' => '/php/chessDB/ludoDB/examples/cities/DemoStates.php',
            'dgtgameparser' => '/php/parser/DGTGameParser.php',
            'eco' => '/php/chessDB/eco/Eco.php',
            'ecomoves' => '/php/chessDB/eco/EcoMoves.php',
            'ecomovesdetailed' => '/php/chessDB/eco/EcoMovesDetailed.php',
            'fen' => '/php/chessDB/Fen.php',
            'fenparser0x88' => '/php/parser/FenParser0x88.php',
            'fentest' => '/php/chessDB/Tests/FenTest.php',
            'folder' => '/php/chessDB/Folder.php',
            'folders' => '/php/chessDB/Folders.php',
            'forsqltest' => '/php/chessDB/ludoDB/Tests/classes/ForSQLTest.php',
            'fs_gametest' => '/php/chessFS/tests/FS_GameTest.php',
            'fs_testbase' => '/php/chessFS/tests/FS_TestBase.php',
            'game' => '/php/chessDB/game/Game.php',
            'gameimport' => '/php/chessDB/game/GameImport.php',
            'gameparser' => '/php/parser/GameParser.php',
            'games' => '/php/chessDB/game/Games.php',
            'gametest' => '/php/chessDB/Tests/GameTest.php',
            'grandparent' => '/php/chessDB/ludoDB/Tests/classes/Dependencies/GrandParent.php',
            'importtest' => '/php/chessDB/Tests/ImportTest.php',
            'jsontest' => '/php/chessDB/ludoDB/Tests/JSONTest.php',
            'leafnode' => '/php/chessDB/ludoDB/Tests/classes/LeafNode.php',
            'leafnodes' => '/php/chessDB/ludoDB/Tests/classes/LeafNodes.php',
            'ludodb' => '/php/chessDB/ludoDB/LudoDB.php',
            'ludodbadapter' => '/php/chessDB/ludoDB/LudoDBInterfaces.php',
            'ludodbadaptertest' => '/php/chessDB/ludoDB/Tests/LudoDBAdapterTest.php',
            'ludodballtests' => '/php/chessDB/ludoDB/Tests/LudoDBAllTests.php',
            'ludodbcache' => '/php/chessDB/ludoDB/LudoDBCache.php',
            'ludodbclassnotfoundexception' => '/php/chessDB/ludoDB/LudoDBExceptions.php',
            'ludodbcollection' => '/php/chessDB/ludoDB/LudoDBCollection.php',
            'ludodbcollectionconfigparser' => '/php/chessDB/ludoDB/LudoDBCollectionConfigParser.php',
            'ludodbconfigparser' => '/php/chessDB/ludoDB/LudoDBConfigParser.php',
            'ludodbconnectionexception' => '/php/chessDB/ludoDB/LudoDBExceptions.php',
            'ludodbexception' => '/php/chessDB/ludoDB/LudoDBExceptions.php',
            'ludodbinvalidargumentsexception' => '/php/chessDB/ludoDB/LudoDBExceptions.php',
            'ludodbinvalidconfigexception' => '/php/chessDB/ludoDB/LudoDBExceptions.php',
            'ludodbinvalidserviceexception' => '/php/chessDB/ludoDB/LudoDBExceptions.php',
            'ludodbiterator' => '/php/chessDB/ludoDB/LudoDBIterator.php',
            'ludodbmodel' => '/php/chessDB/ludoDB/LudoDBModel.php',
            'ludodbmodeltests' => '/php/chessDB/ludoDB/Tests/LudoDBModelTests.php',
            'ludodbmysql' => '/php/chessDB/ludoDB/LudoDBMysql.php',
            'ludodbmysqli' => '/php/chessDB/ludoDB/LudoDBMySqlI.php',
            'ludodbobject' => '/php/chessDB/ludoDB/LudoDBObject.php',
            'ludodbobjectnotfoundexception' => '/php/chessDB/ludoDB/LudoDBExceptions.php',
            'ludodbpdo' => '/php/chessDB/ludoDB/LudoDBPDO.php',
            'ludodbregistry' => '/php/chessDB/ludoDB/LudoDBRegistry.php',
            'ludodbrequesthandler' => '/php/chessDB/ludoDB/LudoDBRequestHandler.php',
            'ludodbservice' => '/php/chessDB/ludoDB/LudoDBInterfaces.php',
            'ludodbservicenotimplementedexception' => '/php/chessDB/ludoDB/LudoDBExceptions.php',
            'ludodbserviceregistry' => '/php/chessDB/ludoDB/LudoDBServiceRegistry.php',
            'ludodbsql' => '/php/chessDB/ludoDB/LudoDBSQL.php',
            'ludodbtreecollection' => '/php/chessDB/ludoDB/LudoDBTreeCollection.php',
            'ludodbtreecollectiontest' => '/php/chessDB/ludoDB/Tests/LudoDBTreeCollectionTest.php',
            'ludodbunauthorizedexception' => '/php/chessDB/ludoDB/LudoDBExceptions.php',
            'ludodbutility' => '/php/chessDB/ludoDB/LudoDBUtility.php',
            'ludodbutilitymock' => '/php/chessDB/ludoDB/Tests/LudoDBUtilityTest.php',
            'ludodbutilitytest' => '/php/chessDB/ludoDB/Tests/LudoDBUtilityTest.php',
            'manager' => '/php/chessDB/ludoDB/Tests/classes/Manager.php',
            'metadata' => '/php/chessDB/game/Metadata.php',
            'metadatacollection' => '/php/chessDB/game/MetadataCollection.php',
            'metadatatest' => '/php/chessDB/Tests/MetadataTest.php',
            'metadatavalue' => '/php/chessDB/game/MetadataValue.php',
            'move' => '/php/chessDB/game/Move.php',
            'movebuilder' => '/php/parser/MoveBuilder.php',
            'moves' => '/php/chessDB/game/Moves.php',
            'movie' => '/php/chessDB/ludoDB/Tests/classes/Movie.php',
            'mysqlitests' => '/php/chessDB/ludoDB/Tests/MysqlITests.php',
            'noludodbclass' => '/php/chessDB/ludoDB/Tests/classes/Dependencies/NoLudoDBClass.php',
            'parsertest' => '/php/parser/test/ParserTest.php',
            'pdotests' => '/php/chessDB/ludoDB/Tests/PDOTests.php',
            'people' => '/php/chessDB/ludoDB/Tests/classes/People.php',
            'peopleplain' => '/php/chessDB/ludoDB/Tests/classes/PeoplePlain.php',
            'performancetest' => '/php/chessDB/ludoDB/Tests/PerformanceTest.php',
            'person' => '/php/chessDB/ludoDB/Tests/classes/Person.php',
            'personforconfigparser' => '/php/chessDB/ludoDB/Tests/classes/PersonForConfigParser.php',
            'pgngameparser' => '/php/parser/PgnGameParser.php',
            'pgnparser' => '/php/parser/PgnParser.php',
            'phone' => '/php/chessDB/ludoDB/Tests/classes/Phone.php',
            'phonecollection' => '/php/chessDB/ludoDB/Tests/classes/PhoneCollection.php',
            'player' => '/php/chessDB/player/Player.php',
            'playerbyname' => '/php/chessDB/player/PlayerByName.php',
            'playerbyusernamepassword' => '/php/chessDB/player/PlayerByUsernamePassword.php',
            'playergames' => '/php/chessDB/player/PlayerGames.php',
            'playertest' => '/php/chessDB/Tests/PlayerTest.php',
            'remotefilereader' => '/php/RemoteFileReader.php',
            'requesthandlermock' => '/php/chessDB/ludoDB/Tests/classes/RequestHandlerMock.php',
            'requesthandlertest' => '/php/chessDB/ludoDB/Tests/RequestHandlerTest.php',
            'section' => '/php/chessDB/ludoDB/Tests/classes/Section.php',
            'seek' => '/php/chessDB/Seek.php',
            'seeks' => '/php/chessDB/Seeks.php',
            'seektest' => '/php/chessDB/Tests/SeekTest.php',
            'services_json' => '/php/jsonwrapper/JSON/JSON.php',
            'services_json_assocarray_testcase' => '/php/jsonwrapper/JSON/Test-JSON.php',
            'services_json_empties_testcase' => '/php/jsonwrapper/JSON/Test-JSON.php',
            'services_json_encdec_testcase' => '/php/jsonwrapper/JSON/Test-JSON.php',
            'services_json_error' => '/php/jsonwrapper/JSON/JSON.php',
            'services_json_errorsuppression_testcase' => '/php/jsonwrapper/JSON/Test-JSON.php',
            'services_json_nestedarray_testcase' => '/php/jsonwrapper/JSON/Test-JSON.php',
            'services_json_object_testcase' => '/php/jsonwrapper/JSON/Test-JSON.php',
            'services_json_spaces_comments_testcase' => '/php/jsonwrapper/JSON/Test-JSON.php',
            'services_json_unquotedkeys_testcase' => '/php/jsonwrapper/JSON/Test-JSON.php',
            'session' => '/php/chessDB/Session.php',
            'sessiontest' => '/php/chessDB/Tests/SessionTest.php',
            'sqltest' => '/php/chessDB/ludoDB/Tests/SQLTest.php',
            'testbase' => '/php/chessDB/ludoDB/Tests/TestBase.php',
            'testcountry' => '/php/chessDB/ludoDB/Tests/classes/TestCountry.php',
            'testgame' => '/php/chessDB/ludoDB/Tests/classes/TestGame.php',
            'testnode' => '/php/chessDB/ludoDB/Tests/classes/TestNode.php',
            'testnodes' => '/php/chessDB/ludoDB/Tests/classes/TestNodes.php',
            'testnodeswithleafs' => '/php/chessDB/ludoDB/Tests/classes/TestNodesWithLeafs.php',
            'testtable' => '/php/chessDB/ludoDB/Tests/classes/TestTable.php',
            'testtimer' => '/php/chessDB/ludoDB/Tests/classes/TestTimer.php',
            'timecontrol' => '/php/chessDB/TimeControl.php',
            'xhpprofiling' => '/php/profiling/XHPProfiling.php'
        );
    }
    $cn = strtolower($class);
    if (isset($classes[$cn])) {
        require dirname(__FILE__) . $classes[$cn];
    }
}
spl_autoload_register('autoloadf317a5ed1cba24f468ff35acd556e954');
// @codeCoverageIgnoreEnd