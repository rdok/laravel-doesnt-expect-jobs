<?php

use App\Jobs\SampleJob;
use Illuminate\Foundation\Bus\DispatchesJobs;

class DoesntExpectJobsTest extends TestCase
{
    use DispatchesJobs;

    /** @test */
    public function expects_jobs()
    {
        $this->expectsJobs(SampleJob::class);

        $this->dispatch(new SampleJob());
    }

    /** @test */
    public function does_not_expect_any_job()
    {
        $this->doesntExpectJobs();

//        $this->dispatch(new SampleJob());
    }

    private function doesntExpectJobs()
    {
        $mock = Mockery::mock('Illuminate\Bus\Dispatcher[dispatch]', [$this->app]);

        $mock->shouldReceive('dispatch')->never();

        $this->app->instance('Illuminate\Contracts\Bus\Dispatcher', $mock);

        return $this;
    }
}
