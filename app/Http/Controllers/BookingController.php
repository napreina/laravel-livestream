<?php

namespace App\Http\Controllers;

use \Exception;
use DOMDocument;
use Travelport;
use Illuminate\Http\Request;

class BookingController extends Controller
{

    public function flightSearch() {
        $book = app(Travelport::class);
        $origin = 'JFK';
        $destination = 'SAN';
        $deptime = '2019-10-31';
        $book::setUser("user");
        $result = $book::checkAirAvailability(array(['origin' => $origin,'destination' =>  $destination,'deptime' =>  $deptime]));
        $file = "001-" . config('travelport.PROVIDER') . "_AirAvailabilityRsp.xml"; // file name to save the response xml for test only(if you want to save the request/response)
        $content = $this->prettyPrint($result, $file);
        $plainXML = $this->mungXML($content);
        $xml = simplexml_load_string($plainXML);
        $json = json_encode($xml);
        $array = json_decode($json,TRUE);
        //var_dump($json);exit();
        $result = $book::airPriceRequest(array($array["SOAP_Body"]["air_LowFareSearchRsp"]["air_AirSegmentList"]["air_AirSegment"][0]["@attributes"]));
        $file = "001-" . config('travelport.PROVIDER') . "_AirPriceRsp.xml"; // file name to save the response xml for test only(if you want to save the request/response)
        $content = $this->prettyPrint($result, $file);
        $plainXML = $this->mungXML($content);
        $xml = simplexml_load_string($plainXML);
        $json = json_encode($xml);
        $array = json_decode($json,TRUE);
        
        // $arrayResult = json_decode(json_encode(simplexml_load_string($plainXML, 'SimpleXMLElement', LIBXML_NOCDATA)), true);
        $result = $book::airBookingRequset($array);
        
        $file = "001-" . config('travelport.PROVIDER') . "_AirBookRsp.xml"; // file name to save the response xml for test only(if you want to save the request/response)
        $content = $this->prettyPrint($result, $file);
        $plainXML = $this->mungXML($content);
        $xml = simplexml_load_string($plainXML);
        $json1 = json_encode($xml);
        $array = json_decode($json,TRUE);
        

        return $json1;
    }


    // new
    public function mungXML($xml)
    {
        $obj = SimpleXML_Load_String($xml);
        if ($obj === FALSE) return $xml;

        // GET NAMESPACES, IF ANY
        $nss = $obj->getNamespaces(TRUE);
        if (empty($nss)) return $xml;

        // CHANGE ns: INTO ns_
        $nsm = array_keys($nss);
        foreach ($nsm as $key)
        {
            // A REGULAR EXPRESSION TO MUNG THE XML
            $rgx
            = '#'               // REGEX DELIMITER
            . '('               // GROUP PATTERN 1
            . '\<'              // LOCATE A LEFT WICKET
            . '/?'              // MAYBE FOLLOWED BY A SLASH
            . preg_quote($key)  // THE NAMESPACE
            . ')'               // END GROUP PATTERN
            . '('               // GROUP PATTERN 2
            . ':{1}'            // A COLON (EXACTLY ONE)
            . ')'               // END GROUP PATTERN
            . '#'               // REGEX DELIMITER
            ;
            // INSERT THE UNDERSCORE INTO THE TAG NAME
            $rep
            = '$1'          // BACKREFERENCE TO GROUP 1
            . '_'           // LITERAL UNDERSCORE IN PLACE OF GROUP 2
            ;
            // PERFORM THE REPLACEMENT
            $xml =  preg_replace($rgx, $rep, $xml);
        }
        return $xml;
    }




//     // old
    protected function parseXMLOutput($xml_response)
    {
        //parse the Search response to get values to use in detail request

        $response = array();

        $AirAvailabilitySearchRsp = $xml_response;

        $xml = simplexml_load_String($AirAvailabilitySearchRsp, null, null, 'SOAP', true);

        if (!$xml) {
            throw new \Exception("Invalid XML response");
        }


        $Results = $xml->children('SOAP', true);

        foreach ($Results->children('SOAP', true) as $fault) {

            if (strcmp($fault->getName(), 'Fault') == 0) {
                throw new \Exception("Error occurred in request/response processing!");
            }
        }

        $count = 0;
        foreach ($Results->children('air', true) as $nodes) {
            foreach ($nodes->children('air', true) as $hsr) {
                if (strcmp($hsr->getName(), 'AirSegmentList') == 0) {
                    foreach ($hsr->children('air', true) as $hp) {
                        if (strcmp($hp->getName(), 'AirSegment') == 0) {
                            $count = $count + 1;

                            foreach ($hp->attributes() as $a => $b) {
                                $val = (array)$b;
                                $response[$count][$a] = $val[0];
                            }
                            
                        }
                    }
                }
				//break;
            }
        }
		//$message defined in the 'required' file
        return $response;

    }

    public function prettyPrint($result, $file)
    {
        $dom = new DOMDocument;
        $dom->preserveWhiteSpace = false;
        $dom->loadXML($result);
        $dom->formatOutput = true;		
        //call function to write request/response in file
        $xml = 	$dom->saveXML();
        $this->outputWriter($file, $xml);
        return $xml;
    }
    public function outputWriter($file, $content)
    {
        file_put_contents($file, $content); // Write request/response and save them in the File
    }
}
