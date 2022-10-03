<?php 
 interface ICRUD{
    public function getList();
    public function getOne($id);
    public function addOne($data);
    public function deleteOne($id);
    public function updateOne($id,$data);
 }
?>