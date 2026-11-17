<?php













function handle_xml_import(): void {
    $xml = file_get_contents('php://input');
    $unsafe = new DOMDocument();
    $unsafe->loadXML($xml, LIBXML_NOENT | LIBXML_DTDLOAD);

    $safe = new DOMDocument();
    $safe->loadXML($xml, LIBXML_NONET);
}
