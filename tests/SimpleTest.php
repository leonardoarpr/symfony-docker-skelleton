<?php

final class SimpleTest extends \PHPUnit\Framework\TestCase
{

    public function testCircle(): void
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->get('http://localhost/circle/1');
        dump(json_decode($response->getBody()));
        $this->assertEquals(
            200,
            $response->getStatusCode(),
            'true'
        );
    }

    public function testTriangle(): void
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->get('http://localhost/triangle/3.0/4.0/5.0');
        dump(json_decode($response->getBody()));
        $this->assertEquals(
            200,
            $response->getStatusCode(),
            'true'
        );
    }


    public function testCircleFail(): void
    {
        $this->expectException(\GuzzleHttp\Exception\ServerException::class);

        $client = new \GuzzleHttp\Client();
        $client->get('http://localhost/circle/abc');

        $this->fail('Exception fail');
    }

    /** @dataProvider TriangleData */
    public function testTriangleFail($a, $b, $c): void
    {
        $this->expectException(\GuzzleHttp\Exception\ServerException::class);

        $client = new \GuzzleHttp\Client();
        $client->get("http://localhost/triangle/$a/$b/$c");

        $this->fail('Exception fail');
    }

    private function TriangleData()
    {
        return [
            ['a', 2, 3],
            [1, 'b', 3],
            [1, 2, 'c']
        ];

    }
}
