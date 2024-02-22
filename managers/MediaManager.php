<?php 
class MediaManager extends AbstractManager {
   
    public function findOne(int $logoId) : Media {
        $query = $this->db->prepare('SELECT * FROM media WHERE id = :id');
        $parameters = [
            "id" => $logoId
        ];
        $query->execute($parameters);
        $media = $query->fetch(PDO::FETCH_ASSOC);
        $newMedia = new Media($media["url"], $media["alt"]);
        $newMedia->setId($media["id"]);

        return $newMedia;
    }
}