<?php

//Hint - Open Closed Principle
class AnotherProgrammer
{
    public function code()
    {
        return 'coding';
    }
    public function process($member)
    {
        if ($member instanceof AnotherProgrammer) {
            $member->code();
        }
    }
}
class Tester
{
    public function test()
    {
        return 'testing';
    }
    public function process($member)
    {
        if ($member instanceof Tester) {
            $member->test();
        }
    }
}
class ProjectManagement
{
    public function calculate($employee)
    {
        $member = null;
        $member = $employee->process($member);
        return $member;
    }
}

