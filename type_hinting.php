<?php
interface test{
public function dosomething();
}

class ABC implements test{
    
    public function dosomething(){
        echo "Do something";
    }
         

}

class XYZ implements test{
     public function dosomething(){
        echo "Do something from xyz";
    }
    public function dosomethingElse(){
        echo "Do something else";
    }
}
function test(test $abc){
    $abc->dosomething();
}

$abc=new xyz();

test($abc);
/*type hinting uses:
1.code halts at loc 17 itself due to type hinting i.,e ABC.
2.security one cant injeact the object  of another class   */