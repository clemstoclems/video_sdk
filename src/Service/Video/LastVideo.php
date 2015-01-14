<?php

namespace Lequipe\Service\Video;

/**
 * 
 * @author cguinet
 */
class LastVideo  extends AbstractVideo implements LastVideoInterface {
    const URI = 'videos2/getLastVideos';
    
    public function execute($nb = 10, $idTag = "", $tri = "", $format) {
       
        $response = $this->getGuzzleSvc()->get(
            self::URI, 
            "", 
            $this->getSerializerSvc()->serializeLast($nb,$idTag, $tri)
        );
        return $this->getMapperSvc()->getVideos($response, $format);
    }
     
}
