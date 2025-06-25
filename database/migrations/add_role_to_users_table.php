// database/migrations/xxxx_xx_xx_add_role_to_users_table.php
public function up()
{
    Schema::table('users', function (Blueprint $table) {
        $table->string('role')->default('applicant'); // roles: applicant, department_head, admin
    });
}
