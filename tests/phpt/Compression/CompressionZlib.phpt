--TEST--
Compression - CompressionZlib

--SKIPIF--
<?php
include dirname(__FILE__)."/../../cbtestframework/cbtest-phpt-loader.inc";
couchbase_phpt_skipif("Compression", "testCompressionZlib");

--FILE--
<?php
include dirname(__FILE__)."/../../cbtestframework/cbtest-phpt-loader.inc";
couchbase_phpt_runtest("Compression", "testCompressionZlib");
--EXPECT--
PHP_COUCHBASE_OK