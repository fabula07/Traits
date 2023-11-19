<?php
trait Trait1 {
    public function test()
    {
        return 1;
    }
}
trait Trait2 {
    public function test()
    {
        return 2;
    }
}
trait Trait3 {
    public function test()
    {
        return 3;
    }
}
class Test
{
    use Trait1, Trait2, Trait3
    {
        Trait1::test insteadof Trait2, Trait3;
        Trait1::test as test1;
        Trait2::test as test2;
        Trait3::test as test3;

    }

    public function getsum()
    {
        return $this->test1()+$this->test2()+$this->test3();
    }


}

