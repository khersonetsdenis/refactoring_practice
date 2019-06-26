<?php

//Hint - Interface Segregation Principle
interface Workable
{
    public function canCode();
    public function code();
    
}

interface WorkableTest 
{
public function test();
}


class Programmer implements Workable, WorkableTest
{
    public function canCode()
    {
        return true;
    }
    public function code()
    {
        return 'coding';
    }
}

class Tester implements WorkableTest
{
    public function test()
    {
        return 'testing in test server';
    }
}

class ProjectManagement
{
    public function processCode(Workable $member)
    {
        if ($member->canCode()) {
            $member->code();
        }
    }
}
