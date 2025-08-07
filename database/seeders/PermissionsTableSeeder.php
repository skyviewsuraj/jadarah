<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'name' => 'dashboard.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-08 09:07:17',
                'updated_at' => '2022-03-08 09:07:17',
            ),
            1 => 
            array (
                'name' => 'users.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-08 09:09:12',
                'updated_at' => '2022-03-08 09:09:12',
            ),
            2 => 
            array (
                'name' => 'users.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-08 09:09:12',
                'updated_at' => '2022-03-08 09:09:12',
            ),
            3 => 
            array (
                'name' => 'users.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-08 09:09:12',
                'updated_at' => '2022-03-08 09:09:12',
            ),
            4 => 
            array (
                'name' => 'users.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-08 09:09:12',
                'updated_at' => '2022-03-08 09:09:12',
            ),
            5 => 
            array (
                'name' => 'marketing-dashboard.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-08 09:10:34',
                'updated_at' => '2022-03-08 09:10:34',
            ),
            6 => 
            array (
                'name' => 'categories.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-08 09:12:23',
                'updated_at' => '2022-03-08 09:12:23',
            ),
            7 => 
            array (
                'name' => 'categories.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-08 09:12:23',
                'updated_at' => '2022-03-08 09:12:23',
            ),
            8 => 
            array (
                'name' => 'categories.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-08 09:12:23',
                'updated_at' => '2022-03-08 09:12:23',
            ),
            9 => 
            array (
                'name' => 'categories.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-08 09:12:23',
                'updated_at' => '2022-03-08 09:12:23',
            ),
            10 => 
            array (
                'name' => 'instructor-pending-request.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-08 10:13:32',
                'updated_at' => '2022-03-08 10:13:32',
            ),
            11 => 
            array (
                'name' => 'instructor-instructor-plan.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-08 10:17:07',
                'updated_at' => '2022-03-08 10:17:07',
            ),
            12 => 
            array (
                'name' => 'multiple-instructor.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-08 10:28:10',
                'updated_at' => '2022-03-08 10:28:10',
            ),
            13 => 
            array (
                'name' => 'instructor-payout-setting.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 02:02:26',
                'updated_at' => '2022-03-09 02:02:26',
            ),
            14 => 
            array (
                'name' => 'instructor-pending-payout.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 02:04:25',
                'updated_at' => '2022-03-09 02:04:25',
            ),
            15 => 
            array (
                'name' => 'instructor-completed-payout.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 02:06:24',
                'updated_at' => '2022-03-09 02:06:24',
            ),
            16 => 
            array (
                'name' => 'certificate.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 02:49:25',
                'updated_at' => '2022-03-09 02:49:25',
            ),
            17 => 
            array (
                'name' => 'followers.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 02:52:55',
                'updated_at' => '2022-03-09 02:52:55',
            ),
            18 => 
            array (
                'name' => 'affiliate.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 02:54:12',
                'updated_at' => '2022-03-09 02:54:12',
            ),
            19 => 
            array (
                'name' => 'wallet-setting.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 02:55:03',
                'updated_at' => '2022-03-09 02:55:03',
            ),
            20 => 
            array (
                'name' => 'wallet-transactions.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 02:56:59',
                'updated_at' => '2022-03-09 02:56:59',
            ),
            21 => 
            array (
                'name' => 'push-notification.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 02:58:13',
                'updated_at' => '2022-03-09 02:58:13',
            ),
            22 => 
            array (
                'name' => 'attendance.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 02:59:13',
                'updated_at' => '2022-03-09 02:59:13',
            ),
            23 => 
            array (
                'name' => 'orders.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 02:59:43',
                'updated_at' => '2022-03-09 02:59:43',
            ),
            24 => 
            array (
                'name' => 'report.quiz-report.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 03:00:46',
                'updated_at' => '2022-03-09 03:00:46',
            ),
            25 => 
            array (
                'name' => 'report.progress-report.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 03:01:48',
                'updated_at' => '2022-03-09 03:01:48',
            ),
            26 => 
            array (
                'name' => 'report.revenue-admin-report.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 03:07:29',
                'updated_at' => '2022-03-09 03:07:29',
            ),
            27 => 
            array (
                'name' => 'report.revenue-instructor-report.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 03:09:07',
                'updated_at' => '2022-03-09 03:09:07',
            ),
            28 => 
            array (
                'name' => 'financial-reports.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 03:10:31',
                'updated_at' => '2022-03-09 03:10:31',
            ),
            29 => 
            array (
                'name' => 'device-history.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 03:12:07',
                'updated_at' => '2022-03-09 03:12:07',
            ),
            30 => 
            array (
                'name' => 'forum-discussion.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 03:26:45',
                'updated_at' => '2022-03-09 03:26:45',
            ),
            31 => 
            array (
                'name' => 'about.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 04:23:56',
                'updated_at' => '2022-03-09 04:23:56',
            ),
            32 => 
            array (
                'name' => 'career.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 04:24:32',
                'updated_at' => '2022-03-09 04:24:32',
            ),
            33 => 
            array (
                'name' => 'contact-us.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 04:25:32',
                'updated_at' => '2022-03-09 04:25:32',
            ),
            34 => 
            array (
                'name' => 'job.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 04:26:03',
                'updated_at' => '2022-03-09 04:26:03',
            ),
            35 => 
            array (
                'name' => 'resume.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 04:26:28',
                'updated_at' => '2022-03-09 04:26:28',
            ),
            36 => 
            array (
                'name' => 'get-api-key.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 04:27:13',
                'updated_at' => '2022-03-09 04:27:13',
            ),
            37 => 
            array (
                'name' => 'themes.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 04:27:51',
                'updated_at' => '2022-03-09 04:27:51',
            ),
            38 => 
            array (
                'name' => 'homepage-setting.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 04:29:08',
                'updated_at' => '2022-03-09 04:29:08',
            ),
            39 => 
            array (
                'name' => 'category-sliders.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 04:35:05',
                'updated_at' => '2022-03-09 04:35:05',
            ),
            40 => 
            array (
                'name' => 'get-started.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 04:35:38',
                'updated_at' => '2022-03-09 04:35:38',
            ),
            41 => 
            array (
                'name' => 'widget.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 04:36:36',
                'updated_at' => '2022-03-09 04:36:36',
            ),
            42 => 
            array (
                'name' => 'coming-soon.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 04:37:03',
                'updated_at' => '2022-03-09 04:37:03',
            ),
            43 => 
            array (
                'name' => 'terms-condition.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 04:37:38',
                'updated_at' => '2022-03-09 04:37:38',
            ),
            44 => 
            array (
                'name' => 'privacy-policy.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 04:38:40',
                'updated_at' => '2022-03-09 04:38:40',
            ),
            45 => 
            array (
                'name' => 'invoice-design.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 04:39:45',
                'updated_at' => '2022-03-09 04:39:45',
            ),
            46 => 
            array (
                'name' => 'login-signup.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 04:42:10',
                'updated_at' => '2022-03-09 04:42:10',
            ),
            47 => 
            array (
                'name' => 'video-setting.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 04:42:50',
                'updated_at' => '2022-03-09 04:42:50',
            ),
            48 => 
            array (
                'name' => 'breadcum-setting.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 04:43:53',
                'updated_at' => '2022-03-09 04:43:53',
            ),
            49 => 
            array (
                'name' => 'join-an-instructor.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 04:44:59',
                'updated_at' => '2022-03-09 04:44:59',
            ),
            50 => 
            array (
                'name' => 'settings.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 04:45:31',
                'updated_at' => '2022-03-09 04:45:31',
            ),
            51 => 
            array (
                'name' => 'pwa.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 04:46:05',
                'updated_at' => '2022-03-09 04:46:05',
            ),
            52 => 
            array (
                'name' => 'adsense-setting.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 04:47:50',
                'updated_at' => '2022-03-09 04:47:50',
            ),
            53 => 
            array (
                'name' => 'twilio-setting.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 04:48:58',
                'updated_at' => '2022-03-09 04:48:58',
            ),
            54 => 
            array (
                'name' => 'site-map-setting.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 04:49:32',
                'updated_at' => '2022-03-09 04:49:32',
            ),
            55 => 
            array (
                'name' => 'email-design.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 04:50:15',
                'updated_at' => '2022-03-09 04:50:15',
            ),
            56 => 
            array (
                'name' => 'payment-setting-credentials.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 04:55:19',
                'updated_at' => '2022-03-09 04:55:19',
            ),
            57 => 
            array (
                'name' => 'payment-setting-MPESA-setting.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 04:57:12',
                'updated_at' => '2022-03-09 04:57:12',
            ),
            58 => 
            array (
                'name' => 'payment-setting-bank-details.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 04:59:16',
                'updated_at' => '2022-03-09 04:59:16',
            ),
            59 => 
            array (
                'name' => 'player-settings.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 05:00:21',
                'updated_at' => '2022-03-09 05:00:21',
            ),
            60 => 
            array (
                'name' => 'update-process.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 05:01:42',
                'updated_at' => '2022-03-09 05:01:42',
            ),
            61 => 
            array (
                'name' => 'help-support-import-demo.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 05:04:09',
                'updated_at' => '2022-03-09 05:04:09',
            ),
            62 => 
            array (
                'name' => 'help-support-database-backup.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 05:05:23',
                'updated_at' => '2022-03-09 05:05:23',
            ),
            63 => 
            array (
                'name' => 'help-support-remove-public.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 05:06:24',
                'updated_at' => '2022-03-09 05:06:24',
            ),
            64 => 
            array (
                'name' => 'help-support-clear-cache.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 05:07:23',
                'updated_at' => '2022-03-09 05:07:23',
            ),
            65 => 
            array (
                'name' => 'review-rating.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 05:12:25',
                'updated_at' => '2022-03-09 05:12:25',
            ),
            66 => 
            array (
                'name' => 'review-reports.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 05:14:15',
                'updated_at' => '2022-03-09 05:14:15',
            ),
            67 => 
            array (
                'name' => 'appointment.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 05:16:06',
                'updated_at' => '2022-03-09 05:16:06',
            ),
            68 => 
            array (
                'name' => 'rejected-courses.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 05:17:22',
                'updated_at' => '2022-03-09 05:17:22',
            ),
            69 => 
            array (
                'name' => 'assignment.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 05:19:04',
                'updated_at' => '2022-03-09 05:19:04',
            ),
            70 => 
            array (
                'name' => 'quiz-review.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 05:20:31',
                'updated_at' => '2022-03-09 05:20:31',
            ),
            71 => 
            array (
                'name' => 'payout-setting.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 05:21:26',
                'updated_at' => '2022-03-09 05:21:26',
            ),
            72 => 
            array (
                'name' => 'vacation-enable.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 05:22:01',
                'updated_at' => '2022-03-09 05:22:01',
            ),
            73 => 
            array (
                'name' => 'subcategories.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 06:11:59',
                'updated_at' => '2022-03-09 06:11:59',
            ),
            74 => 
            array (
                'name' => 'subcategories.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 06:11:59',
                'updated_at' => '2022-03-09 06:11:59',
            ),
            75 => 
            array (
                'name' => 'subcategories.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 06:11:59',
                'updated_at' => '2022-03-09 06:11:59',
            ),
            76 => 
            array (
                'name' => 'subcategories.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 06:12:00',
                'updated_at' => '2022-03-09 06:12:00',
            ),
            77 => 
            array (
                'name' => 'childcategories.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 06:14:58',
                'updated_at' => '2022-03-09 06:14:58',
            ),
            78 => 
            array (
                'name' => 'childcategories.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 06:14:58',
                'updated_at' => '2022-03-09 06:14:58',
            ),
            79 => 
            array (
                'name' => 'childcategories.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 06:14:58',
                'updated_at' => '2022-03-09 06:14:58',
            ),
            80 => 
            array (
                'name' => 'childcategories.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 06:14:58',
                'updated_at' => '2022-03-09 06:14:58',
            ),
            81 => 
            array (
                'name' => 'courses.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 06:16:10',
                'updated_at' => '2022-03-09 06:16:10',
            ),
            82 => 
            array (
                'name' => 'courses.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 06:16:10',
                'updated_at' => '2022-03-09 06:16:10',
            ),
            83 => 
            array (
                'name' => 'courses.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 06:16:10',
                'updated_at' => '2022-03-09 06:16:10',
            ),
            84 => 
            array (
                'name' => 'courses.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 06:16:10',
                'updated_at' => '2022-03-09 06:16:10',
            ),
            85 => 
            array (
                'name' => 'bundle-courses.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 07:47:25',
                'updated_at' => '2022-03-09 07:47:25',
            ),
            86 => 
            array (
                'name' => 'bundle-courses.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 07:47:25',
                'updated_at' => '2022-03-09 07:47:25',
            ),
            87 => 
            array (
                'name' => 'bundle-courses.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 07:47:25',
                'updated_at' => '2022-03-09 07:47:25',
            ),
            88 => 
            array (
                'name' => 'bundle-courses.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 07:47:25',
                'updated_at' => '2022-03-09 07:47:25',
            ),
            89 => 
            array (
                'name' => 'course-languages.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 07:49:43',
                'updated_at' => '2022-03-09 07:49:43',
            ),
            90 => 
            array (
                'name' => 'course-languages.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 07:49:43',
                'updated_at' => '2022-03-09 07:49:43',
            ),
            91 => 
            array (
                'name' => 'course-languages.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 07:49:43',
                'updated_at' => '2022-03-09 07:49:43',
            ),
            92 => 
            array (
                'name' => 'course-languages.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 07:49:43',
                'updated_at' => '2022-03-09 07:49:43',
            ),
            93 => 
            array (
                'name' => 'course-reviews.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 07:52:21',
                'updated_at' => '2022-03-09 07:52:21',
            ),
            94 => 
            array (
                'name' => 'course-reviews.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 07:52:21',
                'updated_at' => '2022-03-09 07:52:21',
            ),
            95 => 
            array (
                'name' => 'course-reviews.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 07:52:21',
                'updated_at' => '2022-03-09 07:52:21',
            ),
            96 => 
            array (
                'name' => 'course-reviews.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 07:52:21',
                'updated_at' => '2022-03-09 07:52:21',
            ),
            97 => 
            array (
                'name' => 'assignment.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 07:54:16',
                'updated_at' => '2022-03-09 07:54:16',
            ),
            98 => 
            array (
                'name' => 'assignment.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 07:54:16',
                'updated_at' => '2022-03-09 07:54:16',
            ),
            99 => 
            array (
                'name' => 'assignment.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 07:54:16',
                'updated_at' => '2022-03-09 07:54:16',
            ),
            100 => 
            array (
                'name' => 'assignment.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 07:54:16',
                'updated_at' => '2022-03-09 07:54:16',
            ),
            101 => 
            array (
                'name' => 'refund-policy.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 07:54:46',
                'updated_at' => '2022-03-09 07:54:46',
            ),
            102 => 
            array (
                'name' => 'refund-policy.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 07:54:46',
                'updated_at' => '2022-03-09 07:54:46',
            ),
            103 => 
            array (
                'name' => 'refund-policy.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 07:54:46',
                'updated_at' => '2022-03-09 07:54:46',
            ),
            104 => 
            array (
                'name' => 'refund-policy.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 07:54:46',
                'updated_at' => '2022-03-09 07:54:46',
            ),
            105 => 
            array (
                'name' => 'batch.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 07:55:02',
                'updated_at' => '2022-03-09 07:55:02',
            ),
            106 => 
            array (
                'name' => 'batch.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 07:55:02',
                'updated_at' => '2022-03-09 07:55:02',
            ),
            107 => 
            array (
                'name' => 'batch.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 07:55:02',
                'updated_at' => '2022-03-09 07:55:02',
            ),
            108 => 
            array (
                'name' => 'batch.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 07:55:02',
                'updated_at' => '2022-03-09 07:55:02',
            ),
            109 => 
            array (
                'name' => 'quiz-review.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 07:55:51',
                'updated_at' => '2022-03-09 07:55:51',
            ),
            110 => 
            array (
                'name' => 'quiz-review.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 07:55:51',
                'updated_at' => '2022-03-09 07:55:51',
            ),
            111 => 
            array (
                'name' => 'quiz-review.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 07:55:51',
                'updated_at' => '2022-03-09 07:55:51',
            ),
            112 => 
            array (
                'name' => 'quiz-review.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 07:55:51',
                'updated_at' => '2022-03-09 07:55:51',
            ),
            113 => 
            array (
                'name' => 'private-course.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 07:58:54',
                'updated_at' => '2022-03-09 07:58:54',
            ),
            114 => 
            array (
                'name' => 'private-course.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 07:58:54',
                'updated_at' => '2022-03-09 07:58:54',
            ),
            115 => 
            array (
                'name' => 'private-course.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 07:58:55',
                'updated_at' => '2022-03-09 07:58:55',
            ),
            116 => 
            array (
                'name' => 'private-course.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 07:58:55',
                'updated_at' => '2022-03-09 07:58:55',
            ),
            117 => 
            array (
                'name' => 'reported-course.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 07:59:32',
                'updated_at' => '2022-03-09 07:59:32',
            ),
            118 => 
            array (
                'name' => 'reported-course.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 07:59:32',
                'updated_at' => '2022-03-09 07:59:32',
            ),
            119 => 
            array (
                'name' => 'reported-course.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 07:59:32',
                'updated_at' => '2022-03-09 07:59:32',
            ),
            120 => 
            array (
                'name' => 'reported-course.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 07:59:32',
                'updated_at' => '2022-03-09 07:59:32',
            ),
            121 => 
            array (
                'name' => 'reported-question.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:00:13',
                'updated_at' => '2022-03-09 08:00:13',
            ),
            122 => 
            array (
                'name' => 'reported-question.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:00:13',
                'updated_at' => '2022-03-09 08:00:13',
            ),
            123 => 
            array (
                'name' => 'reported-question.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:00:13',
                'updated_at' => '2022-03-09 08:00:13',
            ),
            124 => 
            array (
                'name' => 'reported-question.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:00:13',
                'updated_at' => '2022-03-09 08:00:13',
            ),
            125 => 
            array (
                'name' => 'meetings.zoom-meetings.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:01:34',
                'updated_at' => '2022-03-09 08:01:34',
            ),
            126 => 
            array (
                'name' => 'meetings.zoom-meetings.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:01:34',
                'updated_at' => '2022-03-09 08:01:34',
            ),
            127 => 
            array (
                'name' => 'meetings.zoom-meetings.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:01:34',
                'updated_at' => '2022-03-09 08:01:34',
            ),
            128 => 
            array (
                'name' => 'meetings.zoom-meetings.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:01:34',
                'updated_at' => '2022-03-09 08:01:34',
            ),
            129 => 
            array (
                'name' => 'meetings.big-blue.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:03:35',
                'updated_at' => '2022-03-09 08:03:35',
            ),
            130 => 
            array (
                'name' => 'meetings.big-blue.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:03:35',
                'updated_at' => '2022-03-09 08:03:35',
            ),
            131 => 
            array (
                'name' => 'meetings.big-blue.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:03:35',
                'updated_at' => '2022-03-09 08:03:35',
            ),
            132 => 
            array (
                'name' => 'meetings.big-blue.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:03:35',
                'updated_at' => '2022-03-09 08:03:35',
            ),
            133 => 
            array (
                'name' => 'meetings.google-meet.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:05:05',
                'updated_at' => '2022-03-09 08:05:05',
            ),
            134 => 
            array (
                'name' => 'meetings.google-meet.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:05:05',
                'updated_at' => '2022-03-09 08:05:05',
            ),
            135 => 
            array (
                'name' => 'meetings.google-meet.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:05:05',
                'updated_at' => '2022-03-09 08:05:05',
            ),
            136 => 
            array (
                'name' => 'meetings.google-meet.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:05:05',
                'updated_at' => '2022-03-09 08:05:05',
            ),
            137 => 
            array (
                'name' => 'meetings.jitsi-meet.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:06:08',
                'updated_at' => '2022-03-09 08:06:08',
            ),
            138 => 
            array (
                'name' => 'meetings.jitsi-meet.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:06:08',
                'updated_at' => '2022-03-09 08:06:08',
            ),
            139 => 
            array (
                'name' => 'meetings.jitsi-meet.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:06:08',
                'updated_at' => '2022-03-09 08:06:08',
            ),
            140 => 
            array (
                'name' => 'meetings.jitsi-meet.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:06:08',
                'updated_at' => '2022-03-09 08:06:08',
            ),
            141 => 
            array (
                'name' => 'meetings.google-classroom.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:07:22',
                'updated_at' => '2022-03-09 08:07:22',
            ),
            142 => 
            array (
                'name' => 'meetings.google-classroom.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:07:22',
                'updated_at' => '2022-03-09 08:07:22',
            ),
            143 => 
            array (
                'name' => 'meetings.google-classroom.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:07:23',
                'updated_at' => '2022-03-09 08:07:23',
            ),
            144 => 
            array (
                'name' => 'meetings.google-classroom.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:07:23',
                'updated_at' => '2022-03-09 08:07:23',
            ),
            145 => 
            array (
                'name' => 'meetings.meeting-recordings.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:08:47',
                'updated_at' => '2022-03-09 08:08:47',
            ),
            146 => 
            array (
                'name' => 'meetings.meeting-recordings.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:08:47',
                'updated_at' => '2022-03-09 08:08:47',
            ),
            147 => 
            array (
                'name' => 'meetings.meeting-recordings.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:08:47',
                'updated_at' => '2022-03-09 08:08:47',
            ),
            148 => 
            array (
                'name' => 'meetings.meeting-recordings.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:08:47',
                'updated_at' => '2022-03-09 08:08:47',
            ),
            149 => 
            array (
                'name' => 'institute.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:10:08',
                'updated_at' => '2022-03-09 08:10:08',
            ),
            150 => 
            array (
                'name' => 'institute.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:10:08',
                'updated_at' => '2022-03-09 08:10:08',
            ),
            151 => 
            array (
                'name' => 'institute.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:10:08',
                'updated_at' => '2022-03-09 08:10:08',
            ),
            152 => 
            array (
                'name' => 'institute.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:10:08',
                'updated_at' => '2022-03-09 08:10:08',
            ),
            153 => 
            array (
                'name' => 'coupons.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:11:32',
                'updated_at' => '2022-03-09 08:11:32',
            ),
            154 => 
            array (
                'name' => 'coupons.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:11:32',
                'updated_at' => '2022-03-09 08:11:32',
            ),
            155 => 
            array (
                'name' => 'coupons.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:11:33',
                'updated_at' => '2022-03-09 08:11:33',
            ),
            156 => 
            array (
                'name' => 'coupons.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:11:33',
                'updated_at' => '2022-03-09 08:11:33',
            ),
            157 => 
            array (
                'name' => 'flash-deals.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:12:20',
                'updated_at' => '2022-03-09 08:12:20',
            ),
            158 => 
            array (
                'name' => 'flash-deals.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:12:20',
                'updated_at' => '2022-03-09 08:12:20',
            ),
            159 => 
            array (
                'name' => 'flash-deals.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:12:20',
                'updated_at' => '2022-03-09 08:12:20',
            ),
            160 => 
            array (
                'name' => 'flash-deals.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:12:20',
                'updated_at' => '2022-03-09 08:12:20',
            ),
            161 => 
            array (
                'name' => 'blogs.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:12:48',
                'updated_at' => '2022-03-09 08:12:48',
            ),
            162 => 
            array (
                'name' => 'blogs.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:12:49',
                'updated_at' => '2022-03-09 08:12:49',
            ),
            163 => 
            array (
                'name' => 'blogs.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:12:49',
                'updated_at' => '2022-03-09 08:12:49',
            ),
            164 => 
            array (
                'name' => 'blogs.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:12:49',
                'updated_at' => '2022-03-09 08:12:49',
            ),
            165 => 
            array (
                'name' => 'pages.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:13:01',
                'updated_at' => '2022-03-09 08:13:01',
            ),
            166 => 
            array (
                'name' => 'pages.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:13:02',
                'updated_at' => '2022-03-09 08:13:02',
            ),
            167 => 
            array (
                'name' => 'pages.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:13:02',
                'updated_at' => '2022-03-09 08:13:02',
            ),
            168 => 
            array (
                'name' => 'pages.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:13:02',
                'updated_at' => '2022-03-09 08:13:02',
            ),
            169 => 
            array (
                'name' => 'faq.faq-student.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:15:12',
                'updated_at' => '2022-03-09 08:15:12',
            ),
            170 => 
            array (
                'name' => 'faq.faq-student.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:15:12',
                'updated_at' => '2022-03-09 08:15:12',
            ),
            171 => 
            array (
                'name' => 'faq.faq-student.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:15:12',
                'updated_at' => '2022-03-09 08:15:12',
            ),
            172 => 
            array (
                'name' => 'faq.faq-student.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:15:12',
                'updated_at' => '2022-03-09 08:15:12',
            ),
            173 => 
            array (
                'name' => 'faq.faq-instructor.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:15:46',
                'updated_at' => '2022-03-09 08:15:46',
            ),
            174 => 
            array (
                'name' => 'faq.faq-instructor.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:15:46',
                'updated_at' => '2022-03-09 08:15:46',
            ),
            175 => 
            array (
                'name' => 'faq.faq-instructor.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:15:46',
                'updated_at' => '2022-03-09 08:15:46',
            ),
            176 => 
            array (
                'name' => 'faq.faq-instructor.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:15:47',
                'updated_at' => '2022-03-09 08:15:47',
            ),
            177 => 
            array (
                'name' => 'locations.country.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:17:25',
                'updated_at' => '2022-03-09 08:17:25',
            ),
            178 => 
            array (
                'name' => 'locations.country.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:17:25',
                'updated_at' => '2022-03-09 08:17:25',
            ),
            179 => 
            array (
                'name' => 'locations.country.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:17:25',
                'updated_at' => '2022-03-09 08:17:25',
            ),
            180 => 
            array (
                'name' => 'locations.country.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:17:25',
                'updated_at' => '2022-03-09 08:17:25',
            ),
            181 => 
            array (
                'name' => 'locations.state.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:17:41',
                'updated_at' => '2022-03-09 08:17:41',
            ),
            182 => 
            array (
                'name' => 'locations.state.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:17:41',
                'updated_at' => '2022-03-09 08:17:41',
            ),
            183 => 
            array (
                'name' => 'locations.state.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:17:41',
                'updated_at' => '2022-03-09 08:17:41',
            ),
            184 => 
            array (
                'name' => 'locations.state.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:17:41',
                'updated_at' => '2022-03-09 08:17:41',
            ),
            185 => 
            array (
                'name' => 'locations.city.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:17:57',
                'updated_at' => '2022-03-09 08:17:57',
            ),
            186 => 
            array (
                'name' => 'locations.city.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:17:57',
                'updated_at' => '2022-03-09 08:17:57',
            ),
            187 => 
            array (
                'name' => 'locations.city.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:17:57',
                'updated_at' => '2022-03-09 08:17:57',
            ),
            188 => 
            array (
                'name' => 'locations.city.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:17:57',
                'updated_at' => '2022-03-09 08:17:57',
            ),
            189 => 
            array (
                'name' => 'currency.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:21:28',
                'updated_at' => '2022-03-09 08:21:28',
            ),
            190 => 
            array (
                'name' => 'currency.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:21:28',
                'updated_at' => '2022-03-09 08:21:28',
            ),
            191 => 
            array (
                'name' => 'currency.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:21:29',
                'updated_at' => '2022-03-09 08:21:29',
            ),
            192 => 
            array (
                'name' => 'currency.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:21:29',
                'updated_at' => '2022-03-09 08:21:29',
            ),
            193 => 
            array (
                'name' => 'front-settings.testimonial.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:29:29',
                'updated_at' => '2022-03-09 08:29:29',
            ),
            194 => 
            array (
                'name' => 'front-settings.testimonial.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:29:29',
                'updated_at' => '2022-03-09 08:29:29',
            ),
            195 => 
            array (
                'name' => 'front-settings.testimonial.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:29:29',
                'updated_at' => '2022-03-09 08:29:29',
            ),
            196 => 
            array (
                'name' => 'front-settings.testimonial.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:29:30',
                'updated_at' => '2022-03-09 08:29:30',
            ),
            197 => 
            array (
                'name' => 'front-settings.advertisement.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:32:28',
                'updated_at' => '2022-03-09 08:32:28',
            ),
            198 => 
            array (
                'name' => 'front-settings.advertisement.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:32:28',
                'updated_at' => '2022-03-09 08:32:28',
            ),
            199 => 
            array (
                'name' => 'front-settings.advertisement.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:32:28',
                'updated_at' => '2022-03-09 08:32:28',
            ),
            200 => 
            array (
                'name' => 'front-settings.advertisement.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:32:28',
                'updated_at' => '2022-03-09 08:32:28',
            ),
            201 => 
            array (
                'name' => 'front-settings.sliders.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:34:04',
                'updated_at' => '2022-03-09 08:34:04',
            ),
            202 => 
            array (
                'name' => 'front-settings.sliders.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:34:04',
                'updated_at' => '2022-03-09 08:34:04',
            ),
            203 => 
            array (
                'name' => 'front-settings.sliders.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:34:04',
                'updated_at' => '2022-03-09 08:34:04',
            ),
            204 => 
            array (
                'name' => 'front-settings.sliders.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:34:04',
                'updated_at' => '2022-03-09 08:34:04',
            ),
            205 => 
            array (
                'name' => 'front-settings.fact-slider.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:39:11',
                'updated_at' => '2022-03-09 08:39:11',
            ),
            206 => 
            array (
                'name' => 'front-settings.fact-slider.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:39:11',
                'updated_at' => '2022-03-09 08:39:11',
            ),
            207 => 
            array (
                'name' => 'front-settings.fact-slider.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:39:11',
                'updated_at' => '2022-03-09 08:39:11',
            ),
            208 => 
            array (
                'name' => 'front-settings.fact-slider.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:39:12',
                'updated_at' => '2022-03-09 08:39:12',
            ),
            209 => 
            array (
                'name' => 'front-settings.trusted-sliders.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:42:55',
                'updated_at' => '2022-03-09 08:42:55',
            ),
            210 => 
            array (
                'name' => 'front-settings.trusted-sliders.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:42:55',
                'updated_at' => '2022-03-09 08:42:55',
            ),
            211 => 
            array (
                'name' => 'front-settings.trusted-sliders.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:42:56',
                'updated_at' => '2022-03-09 08:42:56',
            ),
            212 => 
            array (
                'name' => 'front-settings.trusted-sliders.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:42:56',
                'updated_at' => '2022-03-09 08:42:56',
            ),
            213 => 
            array (
                'name' => 'front-settings.seo-directory.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:45:35',
                'updated_at' => '2022-03-09 08:45:35',
            ),
            214 => 
            array (
                'name' => 'front-settings.seo-directory.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:45:35',
                'updated_at' => '2022-03-09 08:45:35',
            ),
            215 => 
            array (
                'name' => 'front-settings.seo-directory.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:45:35',
                'updated_at' => '2022-03-09 08:45:35',
            ),
            216 => 
            array (
                'name' => 'front-settings.seo-directory.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 08:45:35',
                'updated_at' => '2022-03-09 08:45:35',
            ),
            217 => 
            array (
                'name' => 'front-settings.factsetting.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:04:12',
                'updated_at' => '2022-03-09 09:04:12',
            ),
            218 => 
            array (
                'name' => 'front-settings.factsetting.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:04:12',
                'updated_at' => '2022-03-09 09:04:12',
            ),
            219 => 
            array (
                'name' => 'front-settings.factsetting.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:04:13',
                'updated_at' => '2022-03-09 09:04:13',
            ),
            220 => 
            array (
                'name' => 'front-settings.factsetting.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:04:13',
                'updated_at' => '2022-03-09 09:04:13',
            ),
            221 => 
            array (
                'name' => 'site-settings.language.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:12:22',
                'updated_at' => '2022-03-09 09:12:22',
            ),
            222 => 
            array (
                'name' => 'site-settings.language.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:12:22',
                'updated_at' => '2022-03-09 09:12:22',
            ),
            223 => 
            array (
                'name' => 'site-settings.language.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:12:22',
                'updated_at' => '2022-03-09 09:12:22',
            ),
            224 => 
            array (
                'name' => 'site-settings.language.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:12:22',
                'updated_at' => '2022-03-09 09:12:22',
            ),
            225 => 
            array (
                'name' => 'payment-setting.manual-payment.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:19:47',
                'updated_at' => '2022-03-09 09:19:47',
            ),
            226 => 
            array (
                'name' => 'payment-setting.manual-payment.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:19:47',
                'updated_at' => '2022-03-09 09:19:47',
            ),
            227 => 
            array (
                'name' => 'payment-setting.manual-payment.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:19:47',
                'updated_at' => '2022-03-09 09:19:47',
            ),
            228 => 
            array (
                'name' => 'payment-setting.manual-payment.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:19:48',
                'updated_at' => '2022-03-09 09:19:48',
            ),
            229 => 
            array (
                'name' => 'player-settings.advertise.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:23:02',
                'updated_at' => '2022-03-09 09:23:02',
            ),
            230 => 
            array (
                'name' => 'player-settings.advertise.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:23:02',
                'updated_at' => '2022-03-09 09:23:02',
            ),
            231 => 
            array (
                'name' => 'player-settings.advertise.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:23:02',
                'updated_at' => '2022-03-09 09:23:02',
            ),
            232 => 
            array (
                'name' => 'player-settings.advertise.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:23:02',
                'updated_at' => '2022-03-09 09:23:02',
            ),
            233 => 
            array (
                'name' => 'addon.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:26:20',
                'updated_at' => '2022-03-09 09:26:20',
            ),
            234 => 
            array (
                'name' => 'addon.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:26:20',
                'updated_at' => '2022-03-09 09:26:20',
            ),
            235 => 
            array (
                'name' => 'addon.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:26:20',
                'updated_at' => '2022-03-09 09:26:20',
            ),
            236 => 
            array (
                'name' => 'addon.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:26:20',
                'updated_at' => '2022-03-09 09:26:20',
            ),
            237 => 
            array (
                'name' => 'course-includes.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:37:49',
                'updated_at' => '2022-03-09 09:37:49',
            ),
            238 => 
            array (
                'name' => 'course-includes.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:37:49',
                'updated_at' => '2022-03-09 09:37:49',
            ),
            239 => 
            array (
                'name' => 'course-includes.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:37:49',
                'updated_at' => '2022-03-09 09:37:49',
            ),
            240 => 
            array (
                'name' => 'course-includes.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:37:49',
                'updated_at' => '2022-03-09 09:37:49',
            ),
            241 => 
            array (
                'name' => 'what-learn.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:38:56',
                'updated_at' => '2022-03-09 09:38:56',
            ),
            242 => 
            array (
                'name' => 'what-learn.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:38:56',
                'updated_at' => '2022-03-09 09:38:56',
            ),
            243 => 
            array (
                'name' => 'what-learn.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:38:56',
                'updated_at' => '2022-03-09 09:38:56',
            ),
            244 => 
            array (
                'name' => 'what-learn.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:38:56',
                'updated_at' => '2022-03-09 09:38:56',
            ),
            245 => 
            array (
                'name' => 'course-chapter.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:40:56',
                'updated_at' => '2022-03-09 09:40:56',
            ),
            246 => 
            array (
                'name' => 'course-chapter.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:40:56',
                'updated_at' => '2022-03-09 09:40:56',
            ),
            247 => 
            array (
                'name' => 'course-chapter.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:40:56',
                'updated_at' => '2022-03-09 09:40:56',
            ),
            248 => 
            array (
                'name' => 'course-chapter.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:40:56',
                'updated_at' => '2022-03-09 09:40:56',
            ),
            249 => 
            array (
                'name' => 'course-class.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:44:27',
                'updated_at' => '2022-03-09 09:44:27',
            ),
            250 => 
            array (
                'name' => 'course-class.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:44:27',
                'updated_at' => '2022-03-09 09:44:27',
            ),
            251 => 
            array (
                'name' => 'course-class.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:44:27',
                'updated_at' => '2022-03-09 09:44:27',
            ),
            252 => 
            array (
                'name' => 'course-class.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:44:28',
                'updated_at' => '2022-03-09 09:44:28',
            ),
            253 => 
            array (
                'name' => 'related-courses.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:45:11',
                'updated_at' => '2022-03-09 09:45:11',
            ),
            254 => 
            array (
                'name' => 'related-courses.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:45:11',
                'updated_at' => '2022-03-09 09:45:11',
            ),
            255 => 
            array (
                'name' => 'related-courses.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:45:11',
                'updated_at' => '2022-03-09 09:45:11',
            ),
            256 => 
            array (
                'name' => 'related-courses.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:45:12',
                'updated_at' => '2022-03-09 09:45:12',
            ),
            257 => 
            array (
                'name' => 'question.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:45:28',
                'updated_at' => '2022-03-09 09:45:28',
            ),
            258 => 
            array (
                'name' => 'question.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:45:28',
                'updated_at' => '2022-03-09 09:45:28',
            ),
            259 => 
            array (
                'name' => 'question.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:45:29',
                'updated_at' => '2022-03-09 09:45:29',
            ),
            260 => 
            array (
                'name' => 'question.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:45:29',
                'updated_at' => '2022-03-09 09:45:29',
            ),
            261 => 
            array (
                'name' => 'announcement.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:46:51',
                'updated_at' => '2022-03-09 09:46:51',
            ),
            262 => 
            array (
                'name' => 'announcement.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:46:52',
                'updated_at' => '2022-03-09 09:46:52',
            ),
            263 => 
            array (
                'name' => 'announcement.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:46:52',
                'updated_at' => '2022-03-09 09:46:52',
            ),
            264 => 
            array (
                'name' => 'announcement.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:46:52',
                'updated_at' => '2022-03-09 09:46:52',
            ),
            265 => 
            array (
                'name' => 'quiz-topic.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:50:22',
                'updated_at' => '2022-03-09 09:50:22',
            ),
            266 => 
            array (
                'name' => 'quiz-topic.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:50:22',
                'updated_at' => '2022-03-09 09:50:22',
            ),
            267 => 
            array (
                'name' => 'quiz-topic.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:50:22',
                'updated_at' => '2022-03-09 09:50:22',
            ),
            268 => 
            array (
                'name' => 'quiz-topic.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:50:22',
                'updated_at' => '2022-03-09 09:50:22',
            ),
            269 => 
            array (
                'name' => 'previous-paper.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:50:55',
                'updated_at' => '2022-03-09 09:50:55',
            ),
            270 => 
            array (
                'name' => 'previous-paper.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:50:56',
                'updated_at' => '2022-03-09 09:50:56',
            ),
            271 => 
            array (
                'name' => 'previous-paper.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:50:56',
                'updated_at' => '2022-03-09 09:50:56',
            ),
            272 => 
            array (
                'name' => 'previous-paper.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:50:56',
                'updated_at' => '2022-03-09 09:50:56',
            ),
            273 => 
            array (
                'name' => 'courses-language.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:52:06',
                'updated_at' => '2022-03-09 09:52:06',
            ),
            274 => 
            array (
                'name' => 'courses-language.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:52:07',
                'updated_at' => '2022-03-09 09:52:07',
            ),
            275 => 
            array (
                'name' => 'courses-language.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:52:07',
                'updated_at' => '2022-03-09 09:52:07',
            ),
            276 => 
            array (
                'name' => 'courses-language.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:52:07',
                'updated_at' => '2022-03-09 09:52:07',
            ),
            277 => 
            array (
                'name' => 'featured-courses.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:53:10',
                'updated_at' => '2022-03-09 09:53:10',
            ),
            278 => 
            array (
                'name' => 'featured-courses.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:53:10',
                'updated_at' => '2022-03-09 09:53:10',
            ),
            279 => 
            array (
                'name' => 'featured-courses.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:53:10',
                'updated_at' => '2022-03-09 09:53:10',
            ),
            280 => 
            array (
                'name' => 'featured-courses.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:53:10',
                'updated_at' => '2022-03-09 09:53:10',
            ),
            281 => 
            array (
                'name' => 'role.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:55:00',
                'updated_at' => '2022-03-09 09:55:00',
            ),
            282 => 
            array (
                'name' => 'role.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:55:00',
                'updated_at' => '2022-03-09 09:55:00',
            ),
            283 => 
            array (
                'name' => 'role.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:55:00',
                'updated_at' => '2022-03-09 09:55:00',
            ),
            284 => 
            array (
                'name' => 'role.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-09 09:55:00',
                'updated_at' => '2022-03-09 09:55:00',
            ),
            285 => 
            array (
                'name' => 'meetings.zoom-meetings.settings',
                'guard_name' => 'web',
                'created_at' => '2022-03-10 06:57:08',
                'updated_at' => '2022-03-10 06:57:08',
            ),
            286 => 
            array (
                'name' => 'meetings.zoom-meetings.dashboard',
                'guard_name' => 'web',
                'created_at' => '2022-03-10 06:57:22',
                'updated_at' => '2022-03-10 06:57:22',
            ),
            287 => 
            array (
                'name' => 'meetings.big-blue.settings',
                'guard_name' => 'web',
                'created_at' => '2022-03-10 07:26:00',
                'updated_at' => '2022-03-10 07:26:00',
            ),
            288 => 
            array (
                'name' => 'meetings.big-blue.list-meetings',
                'guard_name' => 'web',
                'created_at' => '2022-03-10 07:29:09',
                'updated_at' => '2022-03-10 07:29:09',
            ),
            289 => 
            array (
                'name' => 'meetings.big-blue.recorded',
                'guard_name' => 'web',
                'created_at' => '2022-03-10 07:30:28',
                'updated_at' => '2022-03-10 07:30:28',
            ),
            290 => 
            array (
                'name' => 'meetings.google-meet.settings',
                'guard_name' => 'web',
                'created_at' => '2022-03-10 07:42:07',
                'updated_at' => '2022-03-10 07:42:07',
            ),
            291 => 
            array (
                'name' => 'meetings.google-meet.dashboard',
                'guard_name' => 'web',
                'created_at' => '2022-03-10 07:43:00',
                'updated_at' => '2022-03-10 07:43:00',
            ),
            292 => 
            array (
                'name' => 'meetings.google-meet.all-meetings',
                'guard_name' => 'web',
                'created_at' => '2022-03-10 07:44:36',
                'updated_at' => '2022-03-10 07:44:36',
            ),
            293 => 
            array (
                'name' => 'meetings.jitsi-meet.dashboard',
                'guard_name' => 'web',
                'created_at' => '2022-03-10 07:54:37',
                'updated_at' => '2022-03-10 07:54:37',
            ),
            294 => 
            array (
                'name' => 'Allinstructor.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-14 07:08:46',
                'updated_at' => '2022-03-14 07:08:46',
            ),
            295 => 
            array (
                'name' => 'Allinstructor.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-14 07:08:46',
                'updated_at' => '2022-03-14 07:08:46',
            ),
            296 => 
            array (
                'name' => 'Allinstructor.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-14 07:08:46',
                'updated_at' => '2022-03-14 07:08:46',
            ),
            297 => 
            array (
                'name' => 'Allinstructor.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-14 07:08:46',
                'updated_at' => '2022-03-14 07:08:46',
            ),
            298 => 
            array (
                'name' => 'Alluser.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-14 08:09:10',
                'updated_at' => '2022-03-14 08:09:10',
            ),
            299 => 
            array (
                'name' => 'Alluser.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-14 08:09:10',
                'updated_at' => '2022-03-14 08:09:10',
            ),
            300 => 
            array (
                'name' => 'Alluser.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-14 08:09:10',
                'updated_at' => '2022-03-14 08:09:10',
            ),
            301 => 
            array (
                'name' => 'Alluser.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-14 08:09:10',
                'updated_at' => '2022-03-14 08:09:10',
            ),
            302 => 
            array (
                'name' => 'answer.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-14 10:35:43',
                'updated_at' => '2022-03-14 10:35:43',
            ),
            303 => 
            array (
                'name' => 'answer.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-14 10:35:44',
                'updated_at' => '2022-03-14 10:35:44',
            ),
            304 => 
            array (
                'name' => 'answer.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-14 10:35:44',
                'updated_at' => '2022-03-14 10:35:44',
            ),
            305 => 
            array (
                'name' => 'answer.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-14 10:35:44',
                'updated_at' => '2022-03-14 10:35:44',
            ),
            306 => 
            array (
                'name' => 'instructor-plan-subscription.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-15 06:18:45',
                'updated_at' => '2022-03-15 06:18:45',
            ),
            307 => 
            array (
                'name' => 'instructor-plan-subscription.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-15 06:18:45',
                'updated_at' => '2022-03-15 06:18:45',
            ),
            308 => 
            array (
                'name' => 'instructor-plan-subscription.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-15 06:18:45',
                'updated_at' => '2022-03-15 06:18:45',
            ),
            309 => 
            array (
                'name' => 'instructor-plan-subscription.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-15 06:18:45',
                'updated_at' => '2022-03-15 06:18:45',
            ),
            310 => 
            array (
                'name' => 'requestinvole.manage',
                'guard_name' => 'web',
                'created_at' => '2022-03-15 08:31:57',
                'updated_at' => '2022-03-15 08:31:57',
            ),
            311 => 
            array (
                'name' => 'involvement.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-16 02:53:50',
                'updated_at' => '2022-03-16 02:53:50',
            ),
            312 => 
            array (
                'name' => 'involvement.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-16 02:53:50',
                'updated_at' => '2022-03-16 02:53:50',
            ),
            313 => 
            array (
                'name' => 'involvement.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-16 02:53:50',
                'updated_at' => '2022-03-16 02:53:50',
            ),
            314 => 
            array (
                'name' => 'involvement.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-16 02:53:50',
                'updated_at' => '2022-03-16 02:53:50',
            ),
            315 => 
            array (
                'name' => 'instructorrequest.view',
                'guard_name' => 'web',
                'created_at' => '2022-03-16 03:08:11',
                'updated_at' => '2022-03-16 03:08:11',
            ),
            316 => 
            array (
                'name' => 'instructorrequest.create',
                'guard_name' => 'web',
                'created_at' => '2022-03-16 03:08:11',
                'updated_at' => '2022-03-16 03:08:11',
            ),
            317 => 
            array (
                'name' => 'instructorrequest.edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-16 03:08:12',
                'updated_at' => '2022-03-16 03:08:12',
            ),
            318 => 
            array (
                'name' => 'instructorrequest.delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-16 03:08:12',
                'updated_at' => '2022-03-16 03:08:12',
            ),
        ));
    }
}
