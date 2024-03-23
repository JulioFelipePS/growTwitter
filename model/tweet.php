<?php

class tweet  {
    private $userId;
    private $id;
    private $content;
    private $likes;
    private $nLikes;

    public function __construct($content, $userId)
    {
        $this->id = uniqid();
        $this->content = $content;
        $this->userId = $userId;
        $this->likes = [];
        $this->nLikes=0;
    }

    public function add($Data){
        array_push($Data,$this);
        return $Data;
    }

    public function like($username){
        array_push($this->likes,"{$username} liked your tweet");
        $c=0;
        foreach ($this->likes as $key => $value) {
            $c+=1;
        }
        $this->nLikes=$c;
    }

    public function show($data){
        foreach ($data as $key => $value) {
            if ($this->userId==$value->userId) {
                echo("<p>{$value->userName} : {$this->content}<br>");
                echo("likes: {$this->nLikes}</p><hr>");
            }
        }
    }
}