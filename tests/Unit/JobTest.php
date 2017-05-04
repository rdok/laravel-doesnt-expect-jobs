<?php

namespace Tests\Unit;

use App\Jobs\SampleJob;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Tests\TestCase;

class JobTest extends TestCase
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
        $this->dispatch(new SampleJob());
    }
}
