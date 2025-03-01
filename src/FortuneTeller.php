<?php
class FortuneTeller {

   public function __construct(){
     $this->relationships_array = array();
     $this->relationships_array[] = "You will have a large family";
     $this->relationships_array[] = "You will have a few close friends";
     $this->relationships_array[] = "You will have a smaller family, but many close friends";

     $this->money_array = array();
     $this->money_array[] = "You will be rich";
     $this->money_array[] = "You will be comfortable";
     $this->money_array[] = "There is more to life than money";

     $this->fame_array = array();
     $this->fame_array[] = "You will be famous";
     $this->fame_array[] = "You will be well-known in your city";
     $this->fame_array[] = "You prefer your privacy";
  }

  public function getRelationshipPrediction(){
    $relationships_random = random_int(0,count($this->relationships_array)-1);
    return $this->relationships_array[$relationships_random];
  }

  public function getMoneyPrediction(){
    $money_random = random_int(0,count($this->money_array)-1);
    return $this->money_array[$money_random];
  }

  public function getFamePrediction(){
    $fame_random = random_int(0,count($this->fame_array)-1);
    return $this->fame_array[$fame_random];
  }

  public function getLuckyNumber(){
    return random_int(0,100);
  }

}
