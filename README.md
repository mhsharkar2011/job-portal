# Job Portal

## Getting started
    - we can git clone by copying this repo https://github.com/mhsharkar2011/Job-portal.git
    - cd existing_repo
    - git remote add origin https://github.com/mhsharkar2011/Job-portal.git
    - git branch -M main
    - git push -uf origin main
    - composer install
    - php artisan migrate --seed
    - we can use Postman to test the payload
    - cp .env.example .env
    - change the env file and create a custom database as needed. (I have used Mysql-8) 


## Resume APIs
    Route::resource('resumes', ResumeController::class)->except(['index','create','store']);
### Jobs APIs
    Route::get('jobs', [JobController::class, 'index'])->name('jobs.appliedJob');
    Route::Post('jobs', [JobController::class, 'store'])->name('jobs.postJob');
    Route::get('jobs/create', [JobController::class, 'create'])->name('jobs.create');
    Route::get('jobs/createdJob', [JobController::class, 'created'])->name('jobs.createdJob');
    Route::put('jobs', [JobController::class, 'update'])->name('jobs.update');
    Route::delete('jobs/{job}', [JobController::class, 'destroy'])->name('jobs.destroy');


### Demo - Screenshots

![Screenshot from 2023-09-24 02-11-54](https://github.com/mhsharkar2011/Job-portal/assets/51879416/308a25e7-3ffc-41dc-a860-dc81b06c49c5)

![Screenshot from 2023-09-24 02-13-23](https://github.com/mhsharkar2011/Job-portal/assets/51879416/281fc6ba-32b3-4800-8607-d0490b4272ab)

![Screenshot from 2023-09-24 02-13-16](https://github.com/mhsharkar2011/Job-portal/assets/51879416/4ecbf458-7e1d-4fca-905e-4ce8a1434fe2)
### Post a Job
![Screenshot from 2023-09-24 02-12-59](https://github.com/mhsharkar2011/Job-portal/assets/51879416/1cea2c9c-eaa6-49cb-a86c-b26cb0c42a81)
![Screenshot from 2023-09-24 02-13-09](https://github.com/mhsharkar2011/Job-portal/assets/51879416/a9bbea20-d072-44ac-bd68-56fb6ee12e40)
### My Resume
![Screenshot from 2023-09-24 02-12-21](https://github.com/mhsharkar2011/Job-portal/assets/51879416/50cefe74-125c-46cd-a687-fef8b0ec392c)
