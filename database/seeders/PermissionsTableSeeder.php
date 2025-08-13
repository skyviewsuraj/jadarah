<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear old permissions to avoid duplicates
        DB::table('permissions')->delete();

        // Array of permissions to create
        $permissions = [
            'dashboard.manage',
            'users.view',
            'users.create',
            'users.edit',
            'users.delete',
            'marketing-dashboard.manage',
            'categories.view',
            'categories.create',
            'categories.edit',
            'categories.delete',
            'instructor-pending-request.manage',
            'instructor-instructor-plan.manage',
            'multiple-instructor.manage',
            'instructor-payout-setting.manage',
            'instructor-pending-payout.manage',
            'instructor-completed-payout.manage',
            'certificate.manage',
            'followers.manage',
            'affiliate.manage',
            'wallet-setting.manage',
            'wallet-transactions.manage',
            'push-notification.manage',
            'attendance.manage',
            'orders.manage',
            'report.quiz-report.manage',
            'report.progress-report.manage',
            'report.revenue-admin-report.manage',
            'report.revenue-instructor-report.manage',
            'financial-reports.manage',
            'device-history.manage',
            'forum-discussion.manage',
            'about.manage',
            'career.manage',
            'contact-us.manage',
            'job.manage',
            'resume.manage',
            'get-api-key.manage',
            'themes.manage',
            'homepage-setting.manage',
            'category-sliders.manage',
            'get-started.manage',
            'widget.manage',
            'coming-soon.manage',
            'terms-condition.manage',
            'privacy-policy.manage',
            'invoice-design.manage',
            'login-signup.manage',
            'video-setting.manage',
            'breadcum-setting.manage',
            'join-an-instructor.manage',
            'settings.manage',
            'pwa.manage',
            'adsense-setting.manage',
            'twilio-setting.manage',
            'site-map-setting.manage',
            'email-design.manage',
            'payment-setting-credentials.manage',
            'payment-setting-MPESA-setting.manage',
            'payment-setting-bank-details.manage',
            'player-settings.manage',
            'update-process.manage',
            'help-support-import-demo.manage',
            'help-support-database-backup.manage',
            'help-support-remove-public.manage',
            'help-support-clear-cache.manage',
            'review-rating.manage',
            'review-reports.manage',
            'appointment.manage',
            'rejected-courses.manage',
            'assignment.manage',
            'quiz-review.manage',
            'payout-setting.manage',
            'vacation-enable.manage',
            'subcategories.view',
            'subcategories.create',
            'subcategories.edit',
            'subcategories.delete',
            'childcategories.view',
            'childcategories.create',
            'childcategories.edit',
            'childcategories.delete',
            'courses.view',
            'courses.create',
            'courses.edit',
            'courses.delete',
            'bundle-courses.view',
            'bundle-courses.create',
            'bundle-courses.edit',
            'bundle-courses.delete',
            'course-languages.view',
            'course-languages.create',
            'course-languages.edit',
            'course-languages.delete',
            'course-reviews.view',
            'course-reviews.create',
            'course-reviews.edit',
            'course-reviews.delete',
            'assignment.view',
            'assignment.create',
            'assignment.edit',
            'assignment.delete',
            'refund-policy.view',
            'refund-policy.create',
            'refund-policy.edit',
            'refund-policy.delete',
            'batch.view',
            'batch.create',
            'batch.edit',
            'batch.delete',
            'quiz-review.view',
            'quiz-review.create',
            'quiz-review.edit',
            'quiz-review.delete',
            'private-course.view',
            'private-course.create',
            'private-course.edit',
            'private-course.delete',
            'reported-course.view',
            'reported-course.create',
            'reported-course.edit',
            'reported-course.delete',
            'reported-question.view',
            'reported-question.create',
            'reported-question.edit',
            'reported-question.delete',
        ];

        // Loop through permissions and create them
        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Assign all permissions to the 'admin' role
        $adminRole = Role::findByName('admin');
        if ($adminRole) {
            $adminRole->syncPermissions(Permission::all());
        }

        // Assign specific permissions to the 'instructor' role
        $instructorRole = Role::findByName('instructor');
        if ($instructorRole) {
            $instructorPermissions = [
                'dashboard.manage',
                'courses.view',
                'courses.create',
                'courses.edit',
                'courses.delete',
                'bundle-courses.view',
                'bundle-courses.create',
                'bundle-courses.edit',
                'bundle-courses.delete',
                'course-reviews.view',
                'course-reviews.edit',
                'assignment.view',
                'assignment.create',
                'assignment.edit',
                'assignment.delete',
                'quiz-review.view',
                'payout-setting.manage',
                'vacation-enable.manage',
                'report.revenue-instructor-report.manage',
                'orders.manage',
                'followers.manage',
                'wallet-transactions.manage',
            ];
            $instructorRole->syncPermissions($instructorPermissions);
        }

        // Assign specific permissions to the 'student' role
        $studentRole = Role::findByName('student');
        if ($studentRole) {
            $studentPermissions = [
                'dashboard.manage',
                'courses.view',
                'assignment.view',
                'reported-course.create',
                'reported-question.create',
                'review-rating.manage',
                'wallet-transactions.manage',
                'certificate.manage',
            ];
            $studentRole->syncPermissions($studentPermissions);
        }
    }
}