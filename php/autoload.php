<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'accessortest' => '/chessDB/ludoDB/Tests/AccessorTest.php',
                'board0x88config' => '/parser/Board0x88Config.php',
                'brand' => '/chessDB/ludoDB/Tests/classes/Brand.php',
                'capital' => '/chessDB/ludoDB/Tests/classes/JSONCaching/Capital.php',
                'capitals' => '/chessDB/ludoDB/Tests/classes/JSONCaching/Capitals.php',
                'car' => '/chessDB/ludoDB/Tests/classes/Car.php',
                'carcollection' => '/chessDB/ludoDB/Tests/classes/CarCollection.php',
                'carproperties' => '/chessDB/ludoDB/Tests/classes/CarProperties.php',
                'carproperty' => '/chessDB/ludoDB/Tests/classes/CarProperty.php',
                'chat' => '/chessDB/chat/Chat.php',
                'chatmessage' => '/chessDB/chat/ChatMessage.php',
                'chatmessages' => '/chessDB/chat/ChatMessages.php',
                'chess_json' => '/CHESS_JSON.php',
                'chesscountry' => '/db/ChessCountry.php',
                'chessdatabase' => '/db/ChessDatabase.php',
                'chessdatabasecollection' => '/db/ChessDatabaseCollection.php',
                'chessdbadapter' => '/db/ChessDbAdapter.php',
                'chessdbmodel' => '/db/ChessDbModel.php',
                'chesseco' => '/db/ChessEco.php',
                'chessengine' => '/engine/ChessEngine.php',
                'chessfen' => '/db/ChessFen.php',
                'chessfolder' => '/db/ChessFolder.php',
                'chessfoldercollection' => '/db/ChessFolderCollection.php',
                'chessgame' => '/db/ChessGame.php',
                'chessgamemetadata' => '/db/ChessGameMetadata.php',
                'chessjsoncache' => '/db/ChessJSONCache.php',
                'chesslicense' => '/ChessLicense.php',
                'chessmetadata' => '/db/ChessMetadata.php',
                'chessmove' => '/db/ChessMove.php',
                'chessplayer' => '/db/ChessPlayer.php',
                'chessprogressbar' => '/db/ChessProgressBar.php',
                'chessprogressbarcompletedstep' => '/db/ChessProgressBarCompletedStep.php',
                'chessprogressbartemplate' => '/db/ChessProgressBarTemplate.php',
                'chessprogressbartplstep' => '/db/ChessProgressBarTplStep.php',
                'chessregistry' => '/ChessRegistry.php',
                'chessseek' => '/db/ChessSeek.php',
                'chesssession' => '/db/ChessSession.php',
                'chesstests' => '/chessDB/Tests/ChessTests.php',
                'chesstree' => '/ChessTree.php',
                'chessuserroles' => '/ChessUserRoles.php',
                'city' => '/chessDB/ludoDB/Tests/classes/City.php',
                'client' => '/chessDB/ludoDB/Tests/classes/Client.php',
                'collectiontest' => '/chessDB/ludoDB/Tests/CollectionTest.php',
                'columnaliastest' => '/chessDB/ludoDB/Tests/ColumnAliasTest.php',
                'configparsertest' => '/chessDB/ludoDB/Tests/ConfigParserTest.php',
                'configparsertestjson' => '/chessDB/ludoDB/Tests/ConfigParserTestJSON.php',
                'country' => '/chessDB/ludoDB/Tests/classes/Country.php',
                'database' => '/chessDB/Database.php',
                'dgtgameparser' => '/parser/DGTGameParser.php',
                'ecoimport' => '/EcoImport.php',
                'fen' => '/chessDB/Fen.php',
                'fenparser0x88' => '/parser/FenParser0x88.php',
                'fentest' => '/chessDB/Tests/FenTest.php',
                'fileupload' => '/db/FileUpload.php',
                'findertest' => '/chessDB/ludoDB/Tests/FinderTest.php',
                'folder' => '/chessDB/Folder.php',
                'forsqltest' => '/chessDB/ludoDB/Tests/classes/ForSQLTest.php',
                'game' => '/chessDB/Game.php',
                'gameimport' => '/GameImport.php',
                'gameparser' => '/parser/GameParser.php',
                'gametest' => '/chessDB/Tests/GameTest.php',
                'jsontest' => '/chessDB/ludoDB/Tests/JSONTest.php',
                'ludodb' => '/chessDB/ludoDB/LudoDB.php',
                'ludodbadapter' => '/chessDB/ludoDB/LudoDBInterfaces.php',
                'ludodbcache' => '/chessDB/ludoDB/LudoDBCache.php',
                'ludodbclassnotfoundexception' => '/chessDB/ludoDB/LudoDBExceptions.php',
                'ludodbcollection' => '/chessDB/ludoDB/LudoDBCollection.php',
                'ludodbcollectionconfigparser' => '/chessDB/ludoDB/LudoDBCollectionConfigParser.php',
                'ludodbconfigparser' => '/chessDB/ludoDB/LudoDBConfigParser.php',
                'ludodbiterator' => '/chessDB/ludoDB/LudoDBIterator.php',
                'ludodbmodel' => '/chessDB/ludoDB/LudoDBModel.php',
                'ludodbmodeltests' => '/chessDB/ludoDB/Tests/LudoDBTableTests.php',
                'ludodbmysql' => '/chessDB/ludoDB/LudoDBMysql.php',
                'ludodbmysqli' => '/chessDB/ludoDB/LudoDBMySqlI.php',
                'ludodbobject' => '/chessDB/ludoDB/LudoDBObject.php',
                'ludodbpdo' => '/chessDB/ludoDB/LudoDBPDO.php',
                'ludodbregistry' => '/chessDB/ludoDB/LudoDBRegistry.php',
                'ludorequesthandler' => '/chessDB/ludoDB/LudoDBRequestHandler.php',
                'ludosql' => '/chessDB/ludoDB/LudoSQL.php',
                'manager' => '/chessDB/ludoDB/Tests/classes/Manager.php',
                'metadata' => '/chessDB/Metadata.php',
                'metadatacollection' => '/chessDB/MetadataCollection.php',
                'metadatatest' => '/chessDB/Tests/MetadataTest.php',
                'metadatavalue' => '/chessDB/MetadataValue.php',
                'move' => '/chessDB/Move.php',
                'movebuilder' => '/parser/MoveBuilder.php',
                'moves' => '/chessDB/Moves.php',
                'mysqlitests' => '/chessDB/ludoDB/Tests/MySqlITests.php',
                'objectcreatortest' => '/chessDB/ludoDB/Tests/ObjectCreatorTest.php',
                'parsertest' => '/parser/test/ParserTest.php',
                'pdotests' => '/chessDB/ludoDB/Tests/PDOTests.php',
                'people' => '/chessDB/ludoDB/Tests/classes/People.php',
                'peopleplain' => '/chessDB/ludoDB/Tests/classes/PeoplePlain.php',
                'performancetest' => '/chessDB/ludoDB/Tests/PerformanceTest.php',
                'person' => '/chessDB/ludoDB/Tests/classes/Person.php',
                'personforconfigparser' => '/chessDB/ludoDB/Tests/classes/PersonForConfigParser.php',
                'pgngameparser' => '/parser/PgnGameParser.php',
                'pgnparser' => '/parser/PgnParser.php',
                'phone' => '/chessDB/ludoDB/Tests/classes/Phone.php',
                'phonecollection' => '/chessDB/ludoDB/Tests/classes/PhoneCollection.php',
                'player' => '/chessDB/Player.php',
                'playerfinder' => '/chessDB/PlayerFinder.php',
                'playertest' => '/chessDB/Tests/PlayerTest.php',
                'xhpprofiling' => '/profiling/XHPProfiling.php',
                'remotefilereader' => '/RemoteFileReader.php',
                'requesthandlermock' => '/chessDB/ludoDB/Tests/classes/RequestHandlerMock.php',
                'requesthandlertest' => '/chessDB/ludoDB/Tests/RequestHandlerTest.php',
                'section' => '/chessDB/ludoDB/Tests/classes/Section.php',
                'seek' => '/chessDB/Seek.php',
                'seektest' => '/chessDB/Tests/SeekTest.php',
                'services_json' => '/jsonwrapper/JSON/JSON.php',
                'services_json_assocarray_testcase' => '/jsonwrapper/JSON/Test-JSON.php',
                'services_json_empties_testcase' => '/jsonwrapper/JSON/Test-JSON.php',
                'services_json_encdec_testcase' => '/jsonwrapper/JSON/Test-JSON.php',
                'services_json_error' => '/jsonwrapper/JSON/JSON.php',
                'services_json_errorsuppression_testcase' => '/jsonwrapper/JSON/Test-JSON.php',
                'services_json_nestedarray_testcase' => '/jsonwrapper/JSON/Test-JSON.php',
                'services_json_object_testcase' => '/jsonwrapper/JSON/Test-JSON.php',
                'services_json_spaces_comments_testcase' => '/jsonwrapper/JSON/Test-JSON.php',
                'services_json_unquotedkeys_testcase' => '/jsonwrapper/JSON/Test-JSON.php',
                'session' => '/chessDB/Session.php',
                'sessiontest' => '/chessDB/Tests/SessionTest.php',
                'sqltest' => '/chessDB/ludoDB/Tests/SQLTest.php',
                'testbase' => '/chessDB/ludoDB/Tests/TestBase.php',
                'testgame' => '/chessDB/ludoDB/Tests/classes/TestGame.php',
                'testtable' => '/chessDB/ludoDB/Tests/classes/TestTable.php',
                'testtimer' => '/chessDB/ludoDB/Tests/classes/TestTimer.php',
                'timecontrol' => '/chessDB/TimeControl.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    }
);
// @codeCoverageIgnoreEnd