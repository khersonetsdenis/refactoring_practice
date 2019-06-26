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
    public function test()
    {
        return 'testing in localhost';
    }
}

class Tester implements Workable, WorkableTest
{
    public function canCode()
    {
        return false;
    }
    public function code()
    {
        throw new Exception('Opps! I can not code');
    }
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
