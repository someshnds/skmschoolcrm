<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\MasterSeeder;
use Database\Seeders\AdminSettingSeeder;
use Database\Seeders\ExamResultRuleSeeder;
use Database\Seeders\PermissionTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call([
        //     PermissionTableSeeder::class,
        //     AdminSettingSeeder::class,
        //     ExamResultRuleSeeder::class,
        //     MasterSeeder::class,
        // ]);

        $this->call([
            SessionSeeder::class,
            PermissionTableSeeder::class,
            AdminSettingSeeder::class,
            DepartmentSeeder::class,
            ClasssSeeder::class,
            SectionSeeder::class,
            SettingSeeder::class,
            SubjectSeeder::class,
            ClassRoomSeeder::class,
            UserSeeder::class,
            StudentSeeder::class,
            GuardianSeeder::class,
            StaffSeeder::class,
            ClassRoutineSeeder::class,
            StudentAttendanceSeeder::class,
            TeacherAttendanceSeeder::class,
            ExamSeeder::class,
            ExamScheduleSeeder::class,
            ExamResultRuleSeeder::class,
            SyllabusSeeder::class,
            ExamMarkSeeder::class,
            StudentHomeworkTableSeeder::class,
            FeeTypeSeeder::class,
            FeeSeeder::class,
            ExpenseTypeSeeder::class,
            ExpenseSeeder::class,
            CalendarSeeder::class,
            TransactionSeeder::class,
        ]);
    }
}
