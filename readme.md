## Testing Larvel 5.1 - Doesnt' expect jobs
[Don't dispatch any jobs](https://github.com/rdok/laravel-doesnt-expect-jobs/blob/master/tests/DoesntExpectJobsTest.php#L23)  
[![Build Status](https://travis-ci.org/rdok/laravel-doesnt-expect-jobs.svg?branch=master)](https://travis-ci.org/rdok/laravel-doesnt-expect-jobs)  
*** 
[Dispatch a job](https://github.com/rdok/laravel-doesnt-expect-jobs/blob/doesnt-expect-jobs-fails/tests/DoesntExpectJobsTest.php#L19)  
[![Build Status](https://api.travis-ci.org/rdok/laravel-doesnt-expect-jobs.svg?branch=doesnt-expect-jobs-fails)](https://travis-ci.org/rdok/laravel-doesnt-expect-jobs/jobs/229358491)

## Set Up
```bash
git clone git@github.com:rdok/laravel-doesnt-expect-jobs.git
cd laravel-doesnt-expect-jobs
vagrant up
vagrant ssh
cd Code/doesnt-expect-jobs/
./vendor/bin/phpunit 
```
