<?php

/*
 * This file is part of the library "PhpMimeType".
 *
 * (c) Dennis Fridrich <fridrich.dennis@gmail.com>
 *
 * For the full copyright and license information,
 * please view LICENSE.
 */

use Defr\PhpMimeType\FileAsResponse;

/**
 * Class FileAsResponseTest.
 *
 * @author Dennis Fridrich <fridrich.dennis@gmail.com>
 */
class FileAsResponseTest extends PHPUnit_Framework_TestCase
{
    public function testGet()
    {
        $this->assertInstanceOf(
            'Symfony\\Component\\HttpFoundation\\Response',
            FileAsResponse::get(new \SplFileObject(__FILE__))
        );
    }

    public function testSend()
    {
        $this->assertStringStartsWith(
            'HTTP/1.0 200 OK',
            (string) FileAsResponse::send(new \SplFileObject(__FILE__))
        );
    }
}
