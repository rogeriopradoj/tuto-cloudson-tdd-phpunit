<?php

class NewsletterTest extends PHPUnit_Framework_TestCase
{
    public function testDeveriaRetornarGruposVaziosSeRecebeuNenhumEmail()
    {
        $expected = [
            'tecnologia' => [],
            'filosofia'  => [],
        ];
        $emails = array();

        $service = new Newsletter();

        $groups = $service->sendAll($emails);

        $this->assertEquals($expected, $groups);
    }
}
