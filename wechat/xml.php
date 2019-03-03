<?php 

$xml = "<xml>
    <ToUserName>
        <![CDATA[gh_1e8c8519cfc3]]>
    </ToUserName>
    <FromUserName>
        <![CDATA[ovTcg1ZAoofbOGFx8WIlOfMV8IgM]]>
    </FromUserName>
    <CreateTime>1551510679</CreateTime>
    <MsgType>
        <![CDATA[text]]>
    </MsgType>
    <Content>
        aaaaa
    </Content>
    <MsgId>22212293724914098</MsgId>
</xml>";

#header('Content-Type:text/xml');

$dom = new DOMDocument;
$dom->loadXML($xml);

$xpath = new DOMXPath($dom);

$query = '//Content';

$ret = $xpath->query($query);


foreach ($ret as $entry) {
   var_dump($entry->nodeValue);
}